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

function generatethumbs2($theconvertimg,$thevideoimgnew,$thewidth,$theheight){
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

if ($_SESSION['USERID'] != "" && $_SESSION['USERID'] >= 0 && is_numeric($_SESSION['USERID'])){
	if($_REQUEST['change']!=""){
		$firstname = htmlentities(strip_tags($_REQUEST['firstname']), ENT_COMPAT, "UTF-8");
		$lastname = htmlentities(strip_tags($_REQUEST['lastname']), ENT_COMPAT, "UTF-8");
		$description = htmlentities(strip_tags($_REQUEST['vdescription']), ENT_COMPAT, "UTF-8");
				
		$query="UPDATE members SET firstname='".mysql_real_escape_string($firstname)."', lastname='".mysql_real_escape_string($lastname)."', description='".mysql_real_escape_string($description)."' WHERE USERID='$_SESSION[USERID]'";
		$conn->execute($query);
		
		$uploadedimage = $_FILES['profilepicimage']['tmp_name'];
		
		if($uploadedimage != ""){
			$theimageinfo = getimagesize($uploadedimage);
			
			if ($error == ""){
				$thepp = $_SESSION['USERID'];
				if($theimageinfo[2] == 1){
					$thepp .= ".gif";
				}elseif($theimageinfo[2] == 2){
					$thepp .= ".jpg";
				}elseif($theimageinfo[2] == 3){
					$thepp .= ".png";
				}else{
					$error = $lang['32'];
				}
			}
			
			
			if($error == ""){
				$myvideoimgnew=$config['membersprofilepicdir']."/".$thepp;
				if(file_exists($myvideoimgnew)){
					unlink($myvideoimgnew);
				}
				$myconvertimg = $_FILES['profilepicimage']['tmp_name'];
				
				move_uploaded_file($myconvertimg, $myvideoimgnew);
				
				$origwidth = $theimageinfo[0];
				$origheight = $theimageinfo[1];
				$max_width = "200";
				if ($origwidth > $max_width){
					$new_width = $max_width;
					$ratio = $origheight / $origwidth;
					$new_height = ceil($new_width *$ratio);
				}else{
					$new_width = $origwidth;
					$new_height = $origheight;
				}
								
				generatethumbs($myvideoimgnew,$myvideoimgnew,$new_width,$new_height);
				
				$max_width_thumbs = "96";
				$max_height_thumbs = "96";
				$tothumbdir = $config['membersprofilepicdir']."/thumbs/".$thepp;
				if(file_exists($tothumbdir))
				{
					unlink($tothumbdir);
				}
				generatethumbs2($myvideoimgnew,$tothumbdir,$max_width_thumbs,$max_height_thumbs);
				
				if(file_exists($config['membersprofilepicdir']."/".$thepp))
				{
					$query = "UPDATE members SET profilepicture='$thepp' WHERE USERID='".mysql_real_escape_string($_SESSION[USERID])."'";
					$conn->execute($query);
				}
				else
				{
					$error = $lang['33'];
				}
			}
		}

		$message = $lang['34'];
	}
	
    $query = "SELECT * FROM members WHERE USERID='".mysql_real_escape_string($_SESSION[USERID])."'";
    $executequery = $conn->execute($query);
    $memberarray = $executequery->getarray();
	STemplate::assign('memberarray',$memberarray);
			
	$templateselect = "editaccount.tpl";

}else{
	header("Location:$config[baseurl]/login");exit;
}

$pagetitle = $lang['35'];
STemplate::assign('pagetitle',$pagetitle);

//TEMPLATES BEGIN
STemplate::assign('error',$error);
STemplate::assign('message',$message);
STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');
//TEMPLATES END
?>