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
	if($_REQUEST[change]!="")
	{
		$query="SELECT password FROM members WHERE USERID='".mysql_real_escape_string($_SESSION[USERID])."'";
        $executequery=$conn->execute($query);
        $getpass = $executequery->fields[password];
		$encodedpass = md5($_POST[cpassword]);
		if ($encodedpass != $getpass )
		{
			$error = $lang['19'];
		}
		elseif ($_POST[npassword] == "" )
		{
			$error = $lang['20'];
		}
		elseif ($_POST[npassword] != $_POST[rnpassword])
		{
			$error = $lang['21'];
		}
		else
		{
			if ($error == "")
			{
				$password = htmlentities(strip_tags($_REQUEST[npassword]));
				$password = md5($password);
				$query="UPDATE members SET password='".mysql_real_escape_string($password)."' WHERE USERID='$_SESSION[USERID]'";
				$conn->execute($query);
				
				if(mysql_affected_rows()>=1)
				{
					$message = $lang['22'];
				}
				else
				{
					$error = $lang['23'];
				}
			}
		}
	}
	$templateselect = "changepass.tpl";
}
else
{
	header("Location:$config[baseurl]/login");exit;
}

$pagetitle = $lang['24'];
STemplate::assign('pagetitle',$pagetitle);

//TEMPLATES BEGIN
STemplate::assign('error',$error);
STemplate::assign('message',$message);
STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');
//TEMPLATES END
?>