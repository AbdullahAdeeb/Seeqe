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

if ($USERID > 0){
	$query="SELECT * FROM members WHERE USERID='".mysql_real_escape_string($USERID)."' AND status='1' limit 1";
	$executequery = $conn->execute($query);
	$p = $executequery->getarray();
	STemplate::assign('p',$p[0]);
    
	
	$query="SELECT count(*) as total FROM posts WHERE USERID='".mysql_real_escape_string($USERID)."' and active='1'";
	$executequery=$conn->execute($query);
	$results = $executequery->fields[total];
	STemplate::assign('yq',$results);

}else{
	$redirect = base64_encode($thebaseurl."/account");
	header("Location:$config[baseurl]/login?redirect=$redirect");exit;
}

//TEMPLATES BEGIN
STemplate::assign('pagetitle',$lang['1']);
STemplate::assign('error',$error);
STemplate::assign('message',$message);
STemplate::display('header.tpl');
STemplate::display('account.tpl');
STemplate::display('footer.tpl');
//TEMPLATES END
?>