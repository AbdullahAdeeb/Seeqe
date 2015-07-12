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

$query = "select * from categories order by CATID desc limit 10"; 
$results = $conn->execute($query);
$l = $results->getrows();
STemplate::assign('l',$l);
$templateselect = "categories.tpl";
STemplate::assign('pagetitle',$lang['153']);

//TEMPLATES BEGIN
STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');
//TEMPLATES END
?>