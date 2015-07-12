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

if ($_REQUEST[userid] != "")
{
	if (is_numeric($_REQUEST[userid]))
	{
		if (($_REQUEST[userid] != $_SESSION[USERID]) || ($_SESSION[USERID]<=0) || (!is_numeric($_SESSION[USERID])))
		{
			header("Location:$config[baseurl]/login");
		}
		else
		{
			$userid = stripslashes($_REQUEST[userid]);
			$email = $_SESSION[EMAIL];
			$query = "SELECT code FROM members_verifycode WHERE USERID='$_SESSION[USERID]'";
            $executequery = $conn->execute($query);
			$verifycode = $executequery->fields['code'];
			STemplate::assign('verifycode',$verifycode);
			
			
					$sendto = $_SESSION[EMAIL];
					
                	$sendername = $config['site_name'];
					STemplate::assign('sendername',$sendername);
					
                	$from = $config['site_email'];
					
					$query = "SELECT * FROM sendmail WHERE EID='confirmemail'";
                	$executequery = $conn->execute($query);
					
                	$subject = $sendername." ".$executequery->fields['subject'];
					
                	$sendmailtemplate = $executequery->fields['template'];
					
                	$sendmailbody=STemplate::fetch($sendmailtemplate);
					
                	mailme($sendto,$sendername,$from,$subject,$sendmailbody,$bcc="");
					
			$message = $lang['53'];
					
					
		}
	}
	else
	{
		$error = $lang['54'];	
	}
}

STemplate::assign('pagetitle',$lang['55']);
STemplate::assign('message',$message);
STemplate::assign('error',$error);

//TEMPLATES BEGIN
STemplate::display('header.tpl');
STemplate::display('resendconfirmation.tpl');
STemplate::display('footer.tpl');
//TEMPLATES END
?>