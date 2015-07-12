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
$showmax = "25";

$query="SELECT A.*, B.username, C.name, C.seo FROM posts A, members B, categories C WHERE A.active='1' AND A.open='1' AND A.USERID=B.USERID AND A.category=C.CATID ORDER BY A.PID desc limit $showmax";
$showtitle = $lang['65'];
$link   = $config['baseurl']."/rss/recent"; 

header("Content-Type: text/xml"); 
header("Expires: 0"); 
print "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n"; 
print "<rss version=\"2.0\" xmlns:media=\"http://search.yahoo.com/mrss\">\n"; 
print "<channel>\n"; 
print "<title>".$showtitle." - ".$config['site_name']."</title>\n"; 
print "<link>$link</link>\n"; 
print "<description>".$showtitle."</description>\n"; 

$db=mysql_connect ($DBHOST,$DBUSER,$DBPASSWORD) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($DBNAME); 
@mysql_query("SET NAMES 'UTF8'");
$result = mysql_query($query) or die ('Query Error: ' . mysql_error()); 
while ($results = mysql_fetch_array($result)) 
{ 
  $mylink       = $config['baseurl']."/question?id=".$results['PID']; 
  $description = str_replace ("&amp","",stripslashes($results['question'])); 
  $getusername = $results['username'];
	print "<item>\n"; 
	print "  <title><![CDATA[".stripslashes($results['title'])."]]></title>\n";
	print "  <link>".$mylink."</link>\n"; 
	print "  <description>\n"; 
	print "    <![CDATA["; 
	print stripslashes($description)."<br><br>".$lang['60'].": <a href=\"$config[baseurl]/member/$results[USERID]/$getusername\">$getusername</a>"; 
	print "<br />".$lang['61']." ";
	$list=explode('-',$results[date_added]);
	print_r($list[2]);print_r('-');
	print_r($list[1]);print_r('-');
	print_r($list[0]);
	$category = $results[name];
	$ac = answer_count($results['PID']);
	print "<br>".$lang['62'].": $category"; 
	print "<br>".$lang['63'].": $results[viewcount] | ".$lang['161'].": $ac";	
	print "<br/><br/><br /><hr>"; 
	print "    ]]>\n"; 
	print "  </description>\n"; 
	print "  <author>".$getusername."</author>\n"; 
	print "</item>\n"; 
} 
mysql_close(); 
print "</channel>\n"; 
print "</rss>"; 
?> 