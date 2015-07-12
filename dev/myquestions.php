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

if ($USERID > 0)
{	
	if($_REQUEST[d]=="1")
	{
		$DPID = intval($_REQUEST['DID']);
		if($DPID > 0)
		{
			$deleteme = $DPID;
			$query="SELECT CID FROM posts_comments WHERE PID='".mysql_real_escape_string($DPID)."'";
			$results = $conn->execute($query);
			$returnthis = $results->getrows();
			$vtotal = count($returnthis);
			for($i=0;$i<$vtotal;$i++)
			{
				$DCID = intval($returnthis[$i]['CID']);
				if($DCID > 0)
				{
					$sql="DELETE FROM posts_comments_reports WHERE CID='".mysql_real_escape_string($DCID)."'";
					$conn->Execute($sql);
				}
			}
			$deletefrom[] = "posts";
			$deletefrom[] = "posts_comments";
			$deletefrom[] = "posts_favorited";
			$deletefrom[] = "posts_reports";
			for($j=0;$j < count($deletefrom);$j++)
			{
				$query = "DELETE FROM ".$deletefrom[$j]." WHERE PID='$deleteme'";
				$conn->Execute($query);
			}
			$message = $lang['224'];
		}
	}

	$query="SELECT A.title, A.open, A.PID, A.time_added, C.name, C.seo FROM posts A, categories C WHERE A.USERID='".mysql_real_escape_string($USERID)."' and A.active='1' AND A.category=C.CATID order by A.PID desc";
	$executequery=$conn->execute($query);
	$ques = $executequery->getarray();
	STemplate::assign('ques',$ques);
}	
else
{
	$redirect = base64_encode($thebaseurl."/myquestions");
	header("Location:$config[baseurl]/login?redirect=$redirect");exit;
}

//TEMPLATES BEGIN
STemplate::assign('pagetitle',$lang['217']);
STemplate::assign('error',$error);
STemplate::assign('message',$message);
STemplate::display('header.tpl');
STemplate::display('myquestions.tpl');
STemplate::display('footer.tpl');
//TEMPLATES END
?>