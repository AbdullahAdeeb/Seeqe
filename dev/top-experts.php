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
STemplate::assign('mainmenu',"4");

$query="SELECT USERID, username, addtime, points, profileviews FROM members WHERE status='1' ORDER BY points desc limit 100";
$executequery = $conn->execute($query);
$mems = $executequery->getarray();
STemplate::assign('mems',$mems);
			
//TEMPLATES BEGIN
STemplate::assign('pagetitle',$lang['81']);
STemplate::assign('error',$error);
STemplate::assign('message',$message);
STemplate::display('header.tpl');
STemplate::display('top-experts.tpl');
STemplate::display('footer.tpl');
//TEMPLATES END
?>