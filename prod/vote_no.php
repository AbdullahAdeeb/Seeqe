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

$PID = intval($_REQUEST['id']);
$nb = intval($_REQUEST['nb']);
$votes = $nb+1;
$cname = $PID;
if($PID > 0 && !isset($_COOKIE[$cname]))
{
	$query="UPDATE posts SET vote_no=vote_no+1, thumbedtime_no=now() WHERE PID='".mysql_real_escape_string($PID)."'";
	$result=$conn->execute($query);
	$expire=time()+60*60*24;
	setcookie($cname, "no", $expire);
	echo '<span class="thumbsDown" id="Dvote{$parray.PID}">'.$votes.'</span>';
}
else
{
	echo '<span class="thumbsDown" id="Dvote{$parray.PID}">'.$nb.'</span>';
}
?>