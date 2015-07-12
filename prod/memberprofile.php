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

// Verify valid member
if (is_numeric($_REQUEST[pid]))
{
	$pid = $_REQUEST[pid];
	STemplate::assign('pid',$pid);
}
else
{
	$error = $lang['47'];
}

if ($error == "")
{
	if (does_profile_exist($pid))
	{
		$query = "SELECT * FROM members WHERE USERID='".mysql_real_escape_string($pid)."'";
       	$executequery = $conn->execute($query);
       	$profilearray = $executequery->getarray();
		STemplate::assign('p',$profilearray[0]);
		if(mysql_affected_rows()>=1)
		{
			$USERID = $profilearray[0][USERID];
			STemplate::assign('USERID',$USERID);
			STemplate::assign('pagetitle',$profilearray[0][username]."'s ".$lang['48']);
			update_viewcount_profile($USERID);
			
			$query="SELECT count(*) as total FROM posts_comments WHERE USERID='".mysql_real_escape_string($pid)."' limit 1";
			$executequery=$conn->execute($query);
			$total = $executequery->fields[total];
			STemplate::assign('atotal',$total);
			$query="SELECT count(*) as total FROM posts WHERE USERID='".mysql_real_escape_string($pid)."' limit 1";
			$executequery=$conn->execute($query);
			$total = $executequery->fields[total];
			STemplate::assign('qtotal',$total);
			$query="SELECT count(*) as total FROM posts_comments WHERE USERID='".mysql_real_escape_string($pid)."' AND best='1' limit 1";
			$executequery=$conn->execute($query);
			$total = $executequery->fields[total];
			STemplate::assign('btotal',$total);
			
			$query="SELECT A.PID, A.USERID, B.username, A.title, C.name, C.seo, A.time_added FROM posts A, members B, categories C WHERE A.active='1' AND B.USERID='".mysql_real_escape_string($pid)."' AND A.USERID=B.USERID AND A.category=C.CATID ORDER BY A.PID desc";
			$executequery = $conn->execute($query);
			$ques = $executequery->getarray();
			STemplate::assign('ques',$ques);
			
			$query="SELECT A.PID, A.USERID, B.username, A.title, A.question, C.name, C.seo, A.time_added, D.details, D.time_added as ctime FROM posts A, members B, categories C, posts_comments D WHERE D.PID=A.PID AND A.active='1' AND D.USERID='".mysql_real_escape_string($pid)."' AND A.USERID=B.USERID AND A.category=C.CATID ORDER BY A.PID desc";
			$executequery = $conn->execute($query);
			$ans = $executequery->getarray();
			STemplate::assign('ans',$ans);
			
			$query="SELECT A.PID, A.USERID, B.username, A.title, A.question, C.name, C.seo, A.time_added, D.details, D.time_added as ctime FROM posts A, members B, categories C, posts_comments D WHERE D.PID=A.PID AND A.active='1' AND D.USERID='".mysql_real_escape_string($pid)."' AND A.USERID=B.USERID AND A.category=C.CATID AND D.best='1' ORDER BY A.PID desc";
			$executequery = $conn->execute($query);
			$bans = $executequery->getarray();
			STemplate::assign('bans',$bans);
		}
		else
		{
			$error = $lang['47'];
		}
	}	
	else
	{
		$error = $lang['47'];
	}
}


//TEMPLATES BEGIN
STemplate::assign('total',$total);
STemplate::assign('posts',$posts);
STemplate::assign('recent',$recent);
STemplate::assign('error',$error);
STemplate::assign('message',$message);
STemplate::display('header.tpl');
STemplate::display('memberprofile.tpl');
STemplate::display('footer.tpl');
//TEMPLATES END
?>