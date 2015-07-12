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

if($PID > 0)
{
	$query="INSERT INTO posts_reports SET PID='".mysql_real_escape_string($PID)."', time='".time()."', date='".date("Y-m-d")."'";
	$result=$conn->execute($query);
}
echo "<a class=reportAbuse>".$lang['52']."</a>";
?>