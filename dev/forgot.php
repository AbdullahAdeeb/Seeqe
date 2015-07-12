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

$email = htmlentities(strip_tags($_REQUEST['email']), ENT_COMPAT, "UTF-8");
STemplate::assign('email',$email);
	
if($_REQUEST[resetpassword]!="")
{	
	
	if($email == "")
	{
		$error = $lang['36'];
	}
	else
	{
		$query="SELECT * FROM members WHERE email='".mysql_real_escape_string($email)."'";
		$executequery=$conn->execute($query);
		
		if(mysql_affected_rows()>=1)
		{
			$gotusername = $executequery->fields['username'];
			$gotstatus = $executequery->fields['status'];
			$gotuserid = $executequery->fields['USERID'];
			
			if ($gotstatus == "0")
			{
				$proceedtoemail = false;
				$error = $lang['37'];
			}
			else
			{
				$proceedtoemail = true;
			}
			
		}
		else
		{
			$error = $lang['38'];
		}
		
		if($proceedtoemail && $error == "")
		{
			$passcode = generateCode(5).time();
			STemplate::assign('passcode',$passcode);
			$query = "DELETE FROM members_passcode WHERE USERID='".mysql_real_escape_string($gotuserid)."'";
            $conn->execute($query);
			$query = "INSERT INTO members_passcode SET USERID='".mysql_real_escape_string($gotuserid)."', code='$passcode'";
            $conn->execute($query);
			if(mysql_affected_rows()>=1)
			{
				$passcodeadded = true;
			}
			else
			{
				$passcodeadded = false;
			}
				
			if ($passcodeadded)
			{
				STemplate::assign('gotusername',$gotusername);
                $sendto = $executequery->fields['email'];;
                $sendername = $config['site_name'];
				STemplate::assign('sendername',$sendername);
                $from = $config['site_email'];
				$query = "SELECT * FROM sendmail WHERE EID='confirmforgotpass'";
                $executequery = $conn->execute($query);
                $subject = $sendername." ".$executequery->fields['subject'];
                $sendmailtemplate = $executequery->fields['template'];
                $sendmailbody=STemplate::fetch($sendmailtemplate);
                mailme($sendto,$sendername,$from,$subject,$sendmailbody,$bcc="");
				
				$message = $lang['39'];
			}
			else
			{
				$error = $lang['40'];
			}
		}
	}
}

$pagetitle = $lang['41'];
STemplate::assign('pagetitle',$pagetitle);
STemplate::assign('message',$message);
STemplate::assign('error',$error);

//TEMPLATES BEGIN
STemplate::display('header.tpl');
STemplate::display('forgot.tpl');
STemplate::display('footer.tpl');
//TEMPLATES END
?>