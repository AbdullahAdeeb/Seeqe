<?php
/**************************************************************************************************| 
Answer Question Script| http://www.answerquestionscript.com| webmaster@answerquestionscript.com||
**************************************************************************************************|| 
By using this software you agree that you have read and acknowledged our End-User License | 
Agreement available at http://www.answerquestionscript.com/eula.html and to be bound by it.|| 
Copyright (c) 2010 AnswerQuestionScript.com. All rights reserved.|
**************************************************************************************************/
include("include/config.php");
include("include/functions/import.php");
$CID = intval($_REQUEST['id']);
$nb = intval($_REQUEST['nb']);
$votes = $nb+1;
$cname = "com".$CID;
if (($CID > 0) && (!isset($_COOKIE[$cname]))) {
	$query="UPDATE posts_comments SET vote_yes=vote_yes+1, thumbedtime=now() WHERE CID='".mysql_real_escape_string($CID)."'";
	$result=$conn->execute($query);	
	$expire=time()+60*60*24;	
	setcookie($cname, "yes", $expire);	
	
} 

$query="SELECT vote_no,vote_yes FROM posts_comments WHERE CID='".mysql_real_escape_string($CID)."'";	
$result=$conn->execute($query);	
$novotes = $result->fields[vote_no];	
$yesvotes = $result->fields[vote_yes];
$votes = $yesvotes - $novotes;

echo $votes;	
?>