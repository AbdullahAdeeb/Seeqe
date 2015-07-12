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
| Copyright (c) 2011 AnswerQuestionScript.com. All rights reserved.
|**************************************************************************************************/

include("include/config.php");
include("include/functions/import.php");

$redirect = base64_decode($_REQUEST['redirect']);
$redirect = htmlentities(strip_tags($redirect), ENT_COMPAT, "UTF-8");

if ($_SESSION[USERID] != "" && $redirect != "")
{
	header("Location:$redirect");exit;
}

$username = htmlentities(strip_tags($_REQUEST['lusername']), ENT_COMPAT, "UTF-8");
STemplate::assign('lusername',$username);
STemplate::assign('redirect',base64_encode($redirect));

if($_REQUEST[authenticate]!="")
{
	$password = htmlentities(strip_tags($_REQUEST['lpassword']), ENT_COMPAT, "UTF-8");
	
	if($username=="")
	{
		$error = $lang['42'];
	}
	elseif($password=="")
	{
		$error = $lang['43'];
	}
	else
	{
		$encryptedpassword = md5($password);
		$query="SELECT * from members WHERE username='".mysql_real_escape_string($username)."' and password='".mysql_real_escape_string($encryptedpassword)."'";
		$result=$conn->execute($query);
		
		if($result->recordcount()<1)
		{
			$error = $lang['44'];
		}
		elseif($result->fields['status']=="0")
		{
			$error = $lang['45'];
		}

		if($error=="")
		{
			if ((isset($_REQUEST['autologin'])) && (trim($_REQUEST['autologin']) == "1")) {
				$cookiehash = md5(sha1(mysql_real_escape_string($username) . $_SERVER['REMOTE_ADDR']));
				setcookie("k",$cookiehash,time()+3600*24*365,'/','.skyfallblue1.com');
				setcookie("u",$result->fields['USERID'],time()+3600*24*365,'/','.skyfallblue1.com');
				$inscookie = "INSERT INTO `rememberme_session_keys` (`key_id`, `user_id`, `last_ip`, `last_login`) VALUES ('".$cookiehash."', ".$result->fields['USERID'].", '".$_SERVER['REMOTE_ADDR']."', ".time().")";
				$conn->execute($inscookie);
			}
			
			$query="update members set lastlogin='".time()."' WHERE username='".mysql_real_escape_string($username)."'";
			$conn->execute($query);
	    	$_SESSION['USERID']=$result->fields['USERID'];
			$_SESSION['EMAIL']=$result->fields['email'];
			$_SESSION['USERNAME']=$result->fields['username'];
			$_SESSION['VERIFIED']=$result->fields['verified'];
            $_SESSION['STORE']=$result->fields['store'];
			
			if($redirect == "")
			{
				header("Location:$config[baseurl]/account");exit;
			}
			else
			{
				header("Location:$redirect");exit;
			}

		}
	}
}

$pagetitle = $lang['46'];
STemplate::assign('pagetitle',$pagetitle);
STemplate::assign('message',$message);
STemplate::assign('error',$error);

//TEMPLATES BEGIN
STemplate::display('header.tpl');
STemplate::display('login.tpl');
STemplate::display('footer.tpl');
//TEMPLATES END
?>