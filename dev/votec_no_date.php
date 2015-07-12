<?php
/**************************************************************************************************| 
Answer Question Script| http://www.answerquestionscript.com| webmaster@answerquestionscript.com|
|**************************************************************************************************|
| By using this software you agree that you have read and acknowledged our End-User License 
| Agreement available at http://www.answerquestionscript.com/eula.html and to be bound by it.|
| Copyright (c) 2010 AnswerQuestionScript.com. All rights reserved.
|**************************************************************************************************/
include("include/config.php");
include("include/functions/import.php");
$CID = intval($_REQUEST['id']);
$nb = intval($_REQUEST['nb']);

if($CID > 0){	
	$query="SELECT thumbedtime_no FROM posts_comments WHERE CID='".mysql_real_escape_string($CID)."'";
	$result=$conn->execute($query);
	$thumbedtime = $result->fields[thumbedtime_no];	
	echo date("M j, Y",strtotime($thumbedtime));
}
?>