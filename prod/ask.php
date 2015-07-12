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

$USERID = intval($_SESSION['USERID']);

function resizeImage($theconvertimg,$thevideoimgnew,$thewidth,$theheight){
    global $config;
    $convertimg = $theconvertimg;
    $videoimgnew = $thevideoimgnew;

    $theimagesizedata = GetImageSize($convertimg);
    $videoimgwidth = $theimagesizedata[0];
    $videoimgheight = $theimagesizedata[1];
    $videoimgformat = $theimagesizedata[2];

    if($videoimgformat == 2){
        $videoimgsource = @imagecreatefromjpeg($convertimg);
        $videoimgdest = @imageCreateTrueColor($thewidth, $theheight);
        ImageCopyResampled($videoimgdest, $videoimgsource, 0, 0, 0, 0, $thewidth, $theheight, $videoimgwidth, $videoimgheight);
        imagejpeg($videoimgdest, $videoimgnew, 100);
        imagedestroy($videoimgsource);
        imagedestroy($videoimgdest);

    }elseif ($videoimgformat == 3){
        $videoimgsource = imagecreatefrompng($convertimg);
        $videoimgdest = imageCreateTrueColor($thewidth, $theheight);
        ImageCopyResampled($videoimgdest, $videoimgsource, 0, 0, 0, 0, $thewidth, $theheight, $videoimgwidth, $videoimgheight);
        imagepng($videoimgdest, $videoimgnew, 9);
        imagedestroy($videoimgsource);
        imagedestroy($videoimgdest);

    }else{
        $videoimgsource = imagecreatefromgif($convertimg);
        $videoimgdest = imageCreateTrueColor($thewidth, $theheight);
        ImageCopyResampled($videoimgdest, $videoimgsource, 0, 0, 0, 0, $thewidth, $theheight, $videoimgwidth, $videoimgheight);
        imagejpeg($videoimgdest, $videoimgnew, 100);
        imagedestroy($videoimgsource);
        imagedestroy($videoimgdest);
    }
}

if ($USERID > 0){
    $sess_ver = intval($_SESSION['VERIFIED']);
    $verify_asker = intval($config['verify_asker']);

    $cats = insert_get_categories();

    if($verify_asker == "1" && $sess_ver == "0"){
        $error = $lang['225'];
        $theme = "err.tpl";

    }else{
        $theme = "ask.tpl";
        STemplate::assign('qtitle',htmlentities(strip_tags($_REQUEST['qtitle']), ENT_COMPAT, "UTF-8"));
        STemplate::assign('question',htmlentities(strip_tags($_REQUEST['question']), ENT_COMPAT, "UTF-8"));
        STemplate::assign('cats',$cats);

        //handle submitting a form
        if($_REQUEST['subform'] != ""){
            $qtitle = htmlentities(strip_tags($_REQUEST['qtitle']), ENT_COMPAT, "UTF-8");
            $question = htmlentities(strip_tags($_REQUEST['question']), ENT_COMPAT, "UTF-8");
            $category = intval($_REQUEST['category']);
            $country = htmlentities(strip_tags($_REQUEST['country']), ENT_COMPAT, "UTF-8");
            $region = htmlentities(strip_tags($_REQUEST['administrative_area_level_1']), ENT_COMPAT, "UTF-8");
            $city = htmlentities(strip_tags($_REQUEST['locality']), ENT_COMPAT, "UTF-8");

            $uploadedimage = $_FILES['postpic']['tmp_name'];

            if($uploadedimage != ""){
                $theimageinfo = getimagesize($uploadedimage);
            }


            if($qtitle == ""){
                $error = $lang['3'];
//                $theme = "err.tpl";

            }elseif($category <= "0"){
                $error = $lang['4'];

            }elseif($uploadedimage != "" && $theimageinfo[2] != 1 && $theimageinfo[2] != 2 && $theimageinfo[2] != 3){ 
                $error = $lang['32']; // image exist but is not .png .gif .jpg

            }else{
                if($config['approve_stories'] == "1"){
                    $addtosql = ", active='0'";
                }
                $query = "SELECT PID FROM posts WHERE country='".mysql_real_escape_string($country)."' AND region='".mysql_real_escape_string($region)."' AND city='".mysql_real_escape_string($city)."' AND USERID='".mysql_real_escape_string($USERID)."' AND title='".mysql_real_escape_string($qtitle)."' AND question='".mysql_real_escape_string($question)."' AND tags='".mysql_real_escape_string($qtitle)."' AND category='".mysql_real_escape_string($category)."' AND date_added='".date("Y-m-d")."'";
                $result=$conn->execute($query);
                $checkdup = $result->getarray();

                if (count($checkdup) == 0) {
                    //check for image
                    $suffix = "";
                    if($uploadedimage != ""){                            
                        if($theimageinfo[2] == 1){
                            $suffix = ".gif";
                        }elseif($theimageinfo[2] == 2){
                            $suffix = ".jpg";
                        }elseif($theimageinfo[2] == 3){
                            $suffix = ".png";
                        }
                    }
                    
                    $query="INSERT INTO posts SET country='".mysql_real_escape_string($country)."', region='".mysql_real_escape_string($region)."', picsuffix= '".$suffix."', city='".mysql_real_escape_string($city)."', USERID='".mysql_real_escape_string($USERID)."', title='".mysql_real_escape_string($qtitle)."',question='".mysql_real_escape_string($question)."', tags='".mysql_real_escape_string($qtitle)."', category='".mysql_real_escape_string($category)."', time_added='".time()."', date_added='".date("Y-m-d")."' $addtosql";
                    $result=$conn->execute($query);

                    $pid = mysql_insert_id();


                    if($pid != ""){
                        $filedir=$config['postpicdir']."/".$pid.$suffix;
                        if(file_exists($filedir)){
                            unlink($filedir);
                        }

                        if(move_uploaded_file($uploadedimage, $filedir)){
                            $origwidth = $theimageinfo[0];
                            $origheight = $theimageinfo[1];
                            $max_width = "400";
                            if ($origwidth > $max_width){
                                $new_width = $max_width;
                                $ratio = $origheight / $origwidth;
                                $new_height = ceil($new_width *$ratio);
                            }else{
                                $new_width = $origwidth;
                                $new_height = $origheight;
                            }

                            generatethumbs($filedir,$filedir,$new_width,$new_height);
                        }else{
                            $error ="Error: Couldn't upload the image.";
                        }
                    }else{
                        $error =$lang['78'];
                    }

                }else{
                    $pid = $checkdup['0']['PID'];
                }

                $message = $lang['5'];
                if($config['approve_stories'] == "0"){
                    $message .= " <a href='$thebaseurl/question?id=$pid'><b>".$lang['254']."</b></a>";
                }
                STemplate::assign('qtitle',"");
                STemplate::assign('question',"");
            }

            //            $pic = htmlentities(strip_tags($_REQUEST['locality']), ENT_COMPAT, "UTF-8");

        }
    }
}else{
    $question = htmlentities(strip_tags($_REQUEST['qtitle']), ENT_COMPAT, "UTF-8");
    $redirect = base64_encode($thebaseurl."/ask?qtitle=".$question);
    header("Location:$config[baseurl]/login?redirect=$redirect");exit;
}

//TEMPLATES BEGIN
STemplate::assign('pagetitle',$lang['6']);
STemplate::assign('error',$error);
STemplate::assign('message',$message);
STemplate::display('header.tpl');
STemplate::display($theme);
STemplate::display('footer.tpl');
//TEMPLATES END
?>