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

if ($_SESSION[USERID] != "" && $_SESSION[USERID] >= 0 && is_numeric($_SESSION[USERID]))
{
    $getemail = $_SESSION[EMAIL];
		
	if($_REQUEST[change]!="")
	{
		if(!verify_valid_email($_REQUEST[email]))
		{
			$error = $lang['11'];
		}
		elseif ($getemail == $_REQUEST[email])
		{
			$error = $lang['12'];
		}
		elseif (!verify_email_unique($_REQUEST[email]))
		{
			$error = $lang['13'];
		}
		
		elseif ($error == "")
		{
			$newemail = htmlentities(strip_tags($_REQUEST[email]));
			$query="UPDATE members SET email='".mysql_real_escape_string($newemail)."', verified='0' WHERE USERID='".mysql_real_escape_string($_SESSION[USERID])."'";
			$conn->execute($query);
			
			if(mysql_affected_rows()>=1)
			{
				$_SESSION[EMAIL] = $newemail;
				$_SESSION[VERIFIED] = "0";
				$verifycode = generateCode(5).time();
				
				$query = "SELECT USERID FROM members_verifycode WHERE USERID='".mysql_real_escape_string($_SESSION[USERID])."'";
                $conn->execute($query);
				if(mysql_affected_rows()>=1)
				{				
                	$query = "UPDATE members_verifycode A, members B SET A.code='$verifycode' WHERE A.USERID=B.USERID AND A.USERID='".mysql_real_escape_string($_SESSION[USERID])."'";
                	$conn->execute($query);
					if(mysql_affected_rows()>=1)
					{
						$proceedtoemail = true;
					}
					else
					{
						$proceedtoemail = false;
					}
				}
				else
				{
                	$query = "INSERT INTO members_verifycode SET USERID='".mysql_real_escape_string($_SESSION[USERID])."', code='$verifycode'";
                	$conn->execute($query);
					if(mysql_affected_rows()>=1)
					{
						$proceedtoemail = true;
					}
					else
					{
						$proceedtoemail = false;
					}
				}
				
				if ($proceedtoemail)
				{
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
				}
				
				$message = $lang['14'];
			}
			else
			{
				$error = $lang['15'];
			}
		}	
	}
	
	$getemail = $_SESSION[EMAIL];
	STemplate::assign('getemail',$getemail);
	
	if ($_SESSION[VERIFIED] == "1")
	{
		$emailverified = "<font color=\"#00FF00\">".$lang['16']."</font>";
		$ev1 = "1";
	}
	else
	{
		$emailverified = "<font color=\"#FF0000\">".$lang['17']."</font>";
		$ev1 = "0";
	}
	STemplate::assign('emailverified',$emailverified);
	STemplate::assign('ev1',$ev1);
		
	if($_REQUEST[nsub]!="")
	{
		$notify = intval(htmlentities(strip_tags($_REQUEST[notify])));
		$query="UPDATE members SET notify='".mysql_real_escape_string($notify)."' WHERE USERID='$_SESSION[USERID]'";
		$conn->execute($query);
		$message = $lang['204'];
	}
	
	$query = "SELECT notify FROM members WHERE USERID='".mysql_real_escape_string($_SESSION[USERID])."'";
    $executequery = $conn->execute($query);
    $p = $executequery->getarray();
	STemplate::assign('p',$p[0]);
	
	$templateselect = "changeemail.tpl";
}
else
{
	header("Location:$config[baseurl]/login");exit;
}

$pagetitle = $lang['18'];
STemplate::assign('pagetitle',$pagetitle);

//TEMPLATES BEGIN
STemplate::assign('error',$error);
STemplate::assign('message',$message);
STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');
//TEMPLATES END
?>