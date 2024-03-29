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

if ($_REQUEST[code] != "")
{
	$code = htmlentities(strip_tags($_REQUEST['code']), ENT_COMPAT, "UTF-8");
	STemplate::assign('code',$code);
	if (strlen($_REQUEST[code]) != "15")
	{
		$error = $lang['25'];
	}
	else
	{
		$query="SELECT * from members_verifycode WHERE code='".mysql_real_escape_string($code)."'";
		$result=$conn->execute($query);
		
		if($result->recordcount()>=1)
		{
			$userid = $result->fields['USERID'];
			
			$query="SELECT verified from members WHERE USERID='$userid'";
			$result=$conn->execute($query);
			$verified = $result->fields['verified'];
			
			if ($verified == "1")
			{
				$error = $lang['26'];
			}
			else
			{
				$query="UPDATE members SET verified='1' WHERE USERID='$userid'";
				$result=$conn->execute($query);
				$message = $lang['27'];
				
				if ($_SESSION[USERID] == $userid)
				{
					$_SESSION[VERIFIED] = "1";
				}
			}
			
			$message = $lang['28'];
		}
		else
		{
			$error = $lang['29'];
		}
	}
}

$pagetitle = $lang['30'];
STemplate::assign('pagetitle',$pagetitle);
STemplate::assign('message',$message);
STemplate::assign('error',$error);

//TEMPLATES BEGIN
STemplate::display('header.tpl');
STemplate::display('confirmemail.tpl');
STemplate::display('footer.tpl');
//TEMPLATES END
?>