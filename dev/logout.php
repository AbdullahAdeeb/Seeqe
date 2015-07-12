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
| Copyright (c) 2011 AnswerQuestionScript.com. All rights reserved.
|**************************************************************************************************/

include("include/config.php");

$_SESSION['USERID']="";
$_SESSION['EMAIL']="";
$_SESSION['USERNAME']="";
$_SESSION['VERIFIED']="";
$_SESSION['FB']="";

if (isset($_COOKIE['k'])) {
	unset($_COOKIE['k']);
	setcookie("k",'',time()-3600,'/','.skyfallblue1.com');
    
}
if (isset($_COOKIE['u'])) {
	unset($_COOKIE['u']);
	setcookie("u",'',time()-3600,'/','.skyfallblue1.com');
}
header("location: $config[baseurl]/");
?>
