<?php
/**************************************************************************************************
| Answer Question Script
| http://www.answerquestionscript.com
| webmaster@answerquestionscript.com
|
|**************************************************************************************************
|
| By using this software you agree that you have read and acknowledged our End-User License 
| Agreement available at http://www.answerquestionscript.com/eula.html and to be bound by it.
|
| Copyright (c) 2010 AnswerQuestionScript.com. All rights reserved.
|**************************************************************************************************/

include("include/config.php");
include("include/functions/import.php");
$thebaseurl = $config['baseurl'];

$pid = intval($_REQUEST['id']);

STemplate::assign('eurl',$thebaseurl."/question?id=".$pid);
if (does_post_exist($pid)){
	$goto = base64_encode($thebaseurl."/question?id=".$pid);
	STemplate::assign('goto',$goto);
    
	if($_REQUEST['selectbest'] != "" && intval($_REQUEST['CID']) > 0){
		$query="UPDATE posts SET open='0' WHERE PID='".mysql_real_escape_string($pid)."' AND USERID='".mysql_real_escape_string($_SESSION[USERID])."'";
		$executequery=$conn->execute($query);
		if(mysql_affected_rows() > 0)
		{
			$query="UPDATE posts_comments SET best='1' WHERE CID='".mysql_real_escape_string($_REQUEST[CID])."'";
			$executequery=$conn->execute($query);
			$message = $lang['216'];
			
			$query="SELECT USERID FROM posts_comments WHERE CID='".mysql_real_escape_string($_REQUEST[CID])."' limit 1";
			$executequery=$conn->execute($query);
			$OUSERID = $executequery->fields[USERID];
			$points = $config['points_bans'];
			$query="UPDATE members SET points=points+$points WHERE USERID='".mysql_real_escape_string($OUSERID)."'";
			$result=$conn->execute($query);
		}
	
    }elseif($_POST['subans'] == "1"){
		$AUID = intval($_SESSION['USERID']);
		$PID = $pid;
		$ansdetails = htmlentities(strip_tags($_REQUEST['answer']), ENT_COMPAT, "UTF-8");
		$country = htmlentities(strip_tags($_REQUEST['country']), ENT_COMPAT, "UTF-8");
		$region = htmlentities(strip_tags($_REQUEST['administrative_area_level_1']), ENT_COMPAT, "UTF-8");
		$city = htmlentities(strip_tags($_REQUEST['locality']), ENT_COMPAT, "UTF-8");
		$address = htmlentities(strip_tags($_REQUEST['street_number']), ENT_COMPAT, "UTF-8")." ".htmlentities(strip_tags($_REQUEST['route']), ENT_COMPAT, "UTF-8");
		$website_url = htmlentities(strip_tags($_REQUEST['website']), ENT_COMPAT, "UTF-8");
		if($AUID > 0 && $ansdetails != "") {
		
			$query = "SELECT CID FROM posts_comments WHERE website_url='".mysql_real_escape_string($website_url)."' AND address='".mysql_real_escape_string($address)."' AND country='".mysql_real_escape_string($country)."' AND region='".mysql_real_escape_string($region)."' AND city='".mysql_real_escape_string($city)."' AND details='".mysql_real_escape_string($ansdetails)."' AND USERID='".mysql_real_escape_string($AUID)."' AND PID='".mysql_real_escape_string($PID)."'";
			$result=$conn->execute($query);
			$checkdup = $result->getarray();
			if (count($checkdup) == 0) {
				$query="INSERT INTO posts_comments SET website_url='".mysql_real_escape_string($website_url)."', address='".mysql_real_escape_string($address)."', country='".mysql_real_escape_string($country)."', region='".mysql_real_escape_string($region)."', city='".mysql_real_escape_string($city)."', details='".mysql_real_escape_string($ansdetails)."', USERID='".mysql_real_escape_string($AUID)."', PID='".mysql_real_escape_string($PID)."', time_added='".time()."'";
				$result=$conn->execute($query);
				$query="UPDATE posts SET  commentcount=commentcount+1  WHERE PID='".mysql_real_escape_string($PID)."'";
				$result=$conn->execute($query);
				$message = $lang['77'];
		
				$points = $config['points_ans'];
				$query="UPDATE members SET points=points+$points WHERE USERID='".mysql_real_escape_string($AUID)."'";
				$result=$conn->execute($query);
				
				$query = "SELECT A.username, A.email, A.notify FROM members A, posts B WHERE B.PID='".mysql_real_escape_string($PID)."' AND A.USERID=B.USERID";
				$executequery = $conn->execute($query);
				$p = $executequery->getarray();
				$owner_email = $p['0']['email'];
				$notify = $p['0']['notify'];
				$owner_name = $p['0']['username'];
				if($notify == "1")
				{
					$sendto = $owner_email;
					$sendername = $config['site_name'];
					$from = $config['site_email'];
					$link = $config['baseurl']."/question?id=".$PID;
					$subject = $_SESSION['USERNAME']." ".$lang['205'];
					$sendmailbody = $lang['206']."<br><br>".$lang['207'].":<br><a target=\"_blank\" href=\"$link\">$link</a><br><br>".$lang['208'].",<br>".$sendername;
					mailme($sendto,$sendername,$from,$subject,$sendmailbody,$bcc="");
				}
			} 
		}
	}
	
	
	$query = "SELECT A.`PID`, A.`title`, A.`question`, A.`tags`, A.`category`, A.`picsuffix`, A.`time_added`, A.`date_added`, A.`active`, A.`vote_yes`, A.`vote_no`, A.`last_viewed`, A.`viewcount`, A.`open`, A.`commentcount`, A.`country`, A.`region`, A.`city`, A.`thumbedtime`, A.`thumbedtime_no`, IF (A.anonymous =0, A.USERID, 100) as USERID, IF (A.anonymous =0, B.username, 'Anonymous') as username, C.name, C.seo FROM posts A, members B, categories C WHERE A.category=C.CATID AND A.USERID=B.USERID AND A.PID='".mysql_real_escape_string($pid)."' AND A.active='1' limit 1";
	$executequery = $conn->execute($query);
	$parray = $executequery->getarray();
	STemplate::assign('parray',$parray[0]);		
	STemplate::assign('pagetitle',stripslashes($parray[0][title]));
	$USERID = $parray[0]['USERID'];
	STemplate::assign('USERID',$USERID);
	$PID = $parray[0]['PID'];
	$category = $parray[0]['category'];
	STemplate::assign('PID',$PID);
	update_last_viewed($PID);
	update_your_viewed($USERID);
	update_viewcount_question($PID);
	if (session_verification())
	{
		update_you_viewed($_SESSION[USERID]);
	}
	$tag = $parray[0]['tags'];
	
	$query="SELECT CATID,name,parent,seo FROM categories WHERE CATID='".mysql_real_escape_string($category)."'";
	$executequery=$conn->execute($query);
	$name = $executequery->fields[name];
	STemplate::assign('name',$name);
	$nseo = $executequery->fields[seo];
	STemplate::assign('nseo',$nseo);
	$CATID = $executequery->fields[CATID];
	STemplate::assign('CATID',$CATID);
	$parent = $executequery->fields['parent'];
	STemplate::assign('parent',$parent);
	
	if($parent >0)
	{
		$query="SELECT seo,name FROM categories WHERE CATID='".mysql_real_escape_string($parent)."'";
		$executequery=$conn->execute($query);
		$pname = $executequery->fields[name];
		$pseo = $executequery->fields[seo];
		STemplate::assign('pname',$pname);
		STemplate::assign('pseo',$pseo);
	}
	
//	$query = "SELECT pc.* FROM posts_comments pc  WHERE pc.PID='$PID' AND pc.best='0' ORDER BY pc.vote_yes desc, pc.thumbedtime DESC";
	$query = "SELECT pc.* FROM posts_comments pc  WHERE pc.PID='$PID' AND pc.best='0' ORDER BY pc.vote_yes desc, pc.thumbedtime DESC, pc.time_added";
	$executequery = $conn->execute($query);
	$showcomments =  $executequery->getarray();
	STemplate::assign('showcomments',$showcomments);
	
	$query = "SELECT pc.* FROM posts_comments pc WHERE pc.PID='$PID' AND pc.best='1' ORDER BY pc.CID asc limit 1";
	$executequery = $conn->execute($query);
	$showcomments2 =  $executequery->getarray();
	STemplate::assign('showcomments2',$showcomments2);	
	
	$tags[] = $tag;
	$tags[0] = str_replace("  ", "", $tags[0]);
	$tags[0] = str_replace(",", "", $tags[0]);
	$tags[0] = str_replace("-", "", $tags[0]);
	$tags[0] = str_replace(".", "", $tags[0]);
	$tagssplit = explode(" ",$tags[0]);
	$stripapos = $tag;
	$tagsstr = "%".mysql_real_escape_string($stripapos)."%' ";
	if (count($tagssplit)>=1)
	{
		for($i=0;$i<count($tagssplit);$i++)
		{
			if ($tagssplit[$i] != "" && $tagssplit[$i] != "-" && $tagssplit[$i] != " " && strlen($tagssplit[$i]) > 2)
			{
				$tagsstr.="or tags like '%".mysql_real_escape_string($tagssplit[$i])."%' ";
			}
		}
	}
	$tagsstr .= "' ";	
	$queryr = "SELECT A.*, B.username, C.name, C.seo FROM posts A, members B, categories C WHERE A.category=C.CATID AND A.USERID=B.USERID AND A.PID!='".mysql_real_escape_string($pid)."' AND A.active='1' AND category='".mysql_real_escape_string($CATID)."' AND (title like '$tagsstr') ORDER BY PID desc limit $config[rel_max]";
    $executequeryr = $conn->execute($queryr);
	$r =  $executequeryr->getarray();
	STemplate::assign('ques',$r);
	
}else{
	$error = $lang['82'];
}

//TEMPLATES BEGIN
STemplate::assign('error',$error);
STemplate::assign('message',$message);
STemplate::display('header.tpl');
STemplate::display('question.tpl');
STemplate::display('footer.tpl');
//TEMPLATES END
?>