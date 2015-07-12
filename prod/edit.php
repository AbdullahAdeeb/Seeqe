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
$PID = intval($_REQUEST['PID']);

if ($USERID > 0 && $PID > 0)
{

	if($_REQUEST['subform'] != "")
	{
		$qtitle = htmlentities(strip_tags($_REQUEST['qtitle']), ENT_COMPAT, "UTF-8");
		$question = htmlentities(strip_tags($_REQUEST['question']), ENT_COMPAT, "UTF-8");
		$category = intval($_REQUEST['category']);
		
		if($qtitle == "")
		{
			$error = $lang['3'];
		}
		elseif($category <= "0")
		{
			$error = $lang['4'];
		}
		else
		{
			$query="UPDATE posts SET title='".mysql_real_escape_string($qtitle)."',question='".mysql_real_escape_string($question)."', tags='".mysql_real_escape_string($qtitle)."', category='".mysql_real_escape_string($category)."' WHERE PID='".mysql_real_escape_string($PID)."' AND USERID='".mysql_real_escape_string($USERID)."' AND open='1'";
			$result=$conn->execute($query);
			$message = $lang['221'];
		}
	}
	
	$query="SELECT * FROM posts WHERE USERID='".mysql_real_escape_string($USERID)."' AND PID='".mysql_real_escape_string($PID)."' AND active='1' AND open='1'";
	$executequery = $conn->execute($query);
	$q = $executequery->getarray();
	STemplate::assign('q',$q[0]);
}	
else
{
	$redirect = base64_encode($thebaseurl."/myquestions");
	header("Location:$config[baseurl]/login?redirect=$redirect");exit;
}

//TEMPLATES BEGIN
STemplate::assign('pagetitle',$lang['222']);
STemplate::assign('error',$error);
STemplate::assign('message',$message);
STemplate::display('header.tpl');
STemplate::display('edit.tpl');
STemplate::display('footer.tpl');
//TEMPLATES END
?>