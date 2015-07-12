<?php
include("include/config.php");
include("include/functions/import.php");

$thebaseurl = $config['baseurl'];


if (!isset($_SESSION['USERID']) || $_SESSION['USERID']=="" || intval($_SESSION['USERID']) <= 0)
{
    $redirect = base64_encode($thebaseurl."/account");
    header("Location:$thebaseurl/login?redirect=$redirect");
    exit;
}

$USERID = intval($_SESSION['USERID']);
//if($_REQUEST['request'] == 'pushData' &&  isset($_REQUEST['data']) && isset($_REQUEST['cid'])){
if($_REQUEST['request'] == 'pushData' &&  $_REQUEST['data'] != ""){
    // get user details
    $queryuser="SELECT * FROM members WHERE USERID='".($USERID)."' AND store='1' limit 1";
    $executequery = $conn->execute($queryuser);
    $u = $executequery->getarray()[0];

    //set the post
    $data = json_decode($_REQUEST['data']);
    $failed = array();
    for($i = 0; $i < count($data); $i++){
        $item = mysql_real_escape_string(htmlentities(strip_tags($data[$i]->item), ENT_COMPAT, "UTF-8"));  //$_REQUEST['item'];
        $cid = mysql_real_escape_string(htmlentities(strip_tags($data[$i]->cid), ENT_COMPAT, "UTF-8"));   //$_REQUEST['cid'];


        // insert post
        $queryquestion = "SELECT PID FROM posts WHERE country='".mysql_real_escape_string($u['country'])."' AND region='".mysql_real_escape_string($u['region'])."' AND city='".mysql_real_escape_string($u['city'])."' AND title='".mysql_real_escape_string($item)."' AND question='".mysql_real_escape_string($item)."' AND tags='".mysql_real_escape_string($item)."' AND category='".mysql_real_escape_string($cid)."'";
        $result=$conn->execute($queryquestion);
        $checkdup = $result->getarray();
        $pid = 0;
        $checkdupanswer = 0;
        
        if (count($checkdup) == 0) { // item is new
            $query2="INSERT INTO posts (`USERID` ,`title` ,`question` ,`tags` ,`category` ,`time_added` ,`date_added` ,`active` ,`vote_yes` ,`vote_no` ,`last_viewed` ,`viewcount` ,`open` ,`commentcount` ,`country` ,`region` ,`city` ,`thumbedtime` ,`thumbedtime_no`) VALUES ('".mysql_real_escape_string($u['USERID'])."',  '".mysql_real_escape_string($item)."',  '".mysql_real_escape_string($item)."',  '".mysql_real_escape_string($item)."',  '".mysql_real_escape_string($cid)."',  '".time()."',  '2015-05-25',  '1',  '0',  '0',  '',  '',  '1',  '0',  '".mysql_real_escape_string($u['country'])."',  '".mysql_real_escape_string($u['region'])."', '".mysql_real_escape_string($u['city'])."', NULL , NULL);";
            $executequery = $conn->execute($query2);
            $pid = mysql_insert_id();

        }else{// item is a duplicate; only add an answer

            //update post time
            $pid = $checkdup['0']['PID'];

            //check if answer exist
//            $queryanswer= "SELECT CID FROM  `posts_comments` WHERE  `PID` =".$pid." AND `USERID` =".mysql_real_escape_string($u['USERID'])." AND `details` LIKE '".mysql_real_escape_string($u['username'])."' AND `country` LIKE  '".mysql_real_escape_string($u['country'])."' AND  `region` LIKE  '".mysql_real_escape_string($u['region'])."' AND  `city` LIKE  '".mysql_real_escape_string($u['city'])."' AND  `website_url` LIKE  '".mysql_real_escape_string($u['website_url'])."' AND  `address` LIKE  '".mysql_real_escape_string($u['address'])."'";
            $queryanswer= "SELECT CID FROM  `posts_comments` WHERE  `PID` =".$pid." AND `country` LIKE  '".mysql_real_escape_string($u['country'])."' AND  `region` LIKE  '".mysql_real_escape_string($u['region'])."' AND  `city` LIKE  '".mysql_real_escape_string($u['city'])."' AND  `website_url` LIKE  '".mysql_real_escape_string($u['website_url'])."' AND  `address` LIKE '".mysql_real_escape_string($u['address'])."'";
            $resultanswer = $conn->execute($queryanswer);
            $checkdupanswer = count($resultanswer->getarray());
        }


        // Answering
        if($pid <= 0){
            $failed[] = $data[$i];
        }elseif($checkdupanswer == 0){ // add new answer

            //insert an answer
            $query3 = "INSERT INTO posts_comments (`PID`, `USERID`, `details`, `time_added`, `vote_yes`, `vote_no`, `best`, `country`, `region`, `city`, `website_url`, `address`, `thumbedtime`, `thumbedtime_no`) VALUES ('".$pid."', '".mysql_real_escape_string($u['USERID'])."', '".mysql_real_escape_string($u['username'])."', '".time()."', '0', '0', '0', '".mysql_real_escape_string($u['country'])."', '".mysql_real_escape_string($u['region'])."', '".mysql_real_escape_string($u['city'])."', '".mysql_real_escape_string($u['website_url'])."', '".mysql_real_escape_string($u['address'])."', NULL, NULL);";
            $executequery = $conn->execute($query3);

            //update comment count for the post
            $query4 = "UPDATE  posts SET `commentcount` =  `commentcount` + 1 WHERE  `posts`.`PID` = ".$pid;
            $executequery = $conn->execute($query4);
        }
    }
    echo json_encode($failed);
}else{
    $query = "SELECT CATID, name from categories";
    $result=$conn->execute($query);
    $array = $result->getassoc();
    Stemplate::assign("cats",insert_get_categories());

    //TEMPLATES BEGIN
    STemplate::display('header.tpl');
    STemplate::display('import.tpl');
    STemplate::display('footer.tpl');
    //TEMPLATES END
}
?>