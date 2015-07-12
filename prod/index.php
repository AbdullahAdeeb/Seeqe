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

STemplate::assign('mainmenu','0');
$max = $config['items_per_page'];


$query="SELECT A.PID, A.USERID, B.username, A.title, C.name, C.seo, A.time_added FROM posts A, members B, categories C WHERE A.active='1' AND A.open='1' AND A.USERID=B.USERID AND A.category=C.CATID ORDER BY A.PID desc limit $max";
$executequery = $conn->Execute($query);
if($executequery->recordcount()>0)
	$ques = $executequery->getrows();
STemplate::assign('ques',$ques);


$query="SELECT A.PID, A.USERID, B.username, A.title, C.name, C.seo, A.time_added FROM posts A, members B, categories C WHERE A.active='1' AND A.open='1' AND A.USERID=B.USERID AND A.category=C.CATID ORDER BY A.viewcount desc limit $max";
$executequery = $conn->Execute($query);
if($executequery->recordcount()>0)
	$ques2 = $executequery->getrows();
STemplate::assign('ques2',$ques2);    

$epick = intval($config['epick']);
if($epick > 0)
{
	$query="SELECT title, PID FROM posts WHERE active='1' AND PID='".intval($epick)."'";
	$executequery=$conn->execute($query);
	$EPID = $executequery->fields['PID'];	
	$etitle = $executequery->fields['title'];
	STemplate::assign('EPID',$EPID);
	STemplate::assign('etitle',$etitle);
}

//TEMPLATES BEGIN
STemplate::display('header.tpl');
STemplate::display('index.tpl');
//STemplate::display('footer.tpl');
//TEMPLATES END
?>