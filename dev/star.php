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
$PID = intval($_REQUEST['pid']);
$UID = $_SESSION['USERID'];

if ($PID > 0 && $UID >0) {
	$query="SELECT sid,COUNT(*) as count FROM stars WHERE pid=".$PID." AND uid=".$UID;
    $result=$conn->execute($query);	
    
    
    if($result->fields['sid'] > 0){  // if the item is already starred then un-star(delete from db) and return false;
        $query2 = "DELETE FROM stars WHERE sid=".$result->fields['sid'];
        $ret = 'false';
    }else{
            // if the item is not starred then star it (add to the db) and return true;
        $query2 = "INSERT INTO stars (pid, uid) VALUES ('".$PID."', '".$UID."')";
        $ret = 'true';
    }
    $result2=$conn->execute($query2);
    echo $ret;
    
    
} 

?>