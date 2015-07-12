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
| Copyright (c) AnswerQuestionScript.com. All rights reserved.
|**************************************************************************************************/

include("include/config.php");
include("include/functions/import.php");

$thebaseurl = $config['baseurl'];
$key = $_REQUEST['key'];

$query="SELECT CATID,name,parent,seo FROM categories WHERE seo='".mysql_real_escape_string($key)."'";
$executequery=$conn->execute($query);
$name = $executequery->fields[name];
STemplate::assign('name',$name);
$CATID = $executequery->fields[CATID];
STemplate::assign('CATID',$CATID);
$parent = $executequery->fields['parent'];
STemplate::assign('parent',$parent);
$nseo = $executequery->fields[seo];
STemplate::assign('nseo',$nseo);

if($parent >0)
{
	$query="SELECT seo,name FROM categories WHERE CATID='".mysql_real_escape_string($parent)."'";
	$executequery=$conn->execute($query);
	$pname = $executequery->fields[name];
	$pseo = $executequery->fields[seo];
	STemplate::assign('pname',$pname);
	STemplate::assign('pseo',$pseo);
}
$url = getCurrentPageUrl();
$pos = strrpos($url,"page=");
$ph = strtolower(substr($url,$pos+5,strlen($url)-$pos));

$page = intval($ph);

if($page=="")
{
	$page = "1";
}
$currentpage = $page;

if ($page >=2)
{
	$pagingstart = ($page-1)*$config[items_per_page];
}
else
{
	$pagingstart = "0";
}

$pos3 = strrpos($url,"filter=");
$ph3 = strtolower(substr($url,$pos3+7,strlen($url)-$pos3));
$pos4 = strrpos($ph3,"&");
if($pos4 > 0)
{
	$ph3 = substr($ph3,0,$pos4);
}
$filter = $ph3;
if($filter == "" || $filter == "unanswered")
{
	$filter = "unanswered";
	$csql = "AND A.open='1'";
}
else
{
	$filter = "all";
}
STemplate::assign('filter',$filter);

$query1 = "SELECT count(*) as total FROM posts A, members B, categories C WHERE A.active='1' $csql AND A.USERID=B.USERID AND A.category=C.CATID AND (C.seo='".mysql_real_escape_string($key)."' OR C.parent='".mysql_real_escape_string($CATID)."') order by A.PID desc limit $config[maximum_results]";
$query2 = "SELECT A.PID, A.USERID, B.username, A.title, C.name, C.seo, A.time_added FROM posts A, members B, categories C WHERE A.active='1' $csql AND A.USERID=B.USERID AND A.category=C.CATID AND (C.seo='".mysql_real_escape_string($key)."' OR C.parent='".mysql_real_escape_string($CATID)."') order by A.PID desc limit $pagingstart, $config[items_per_page]";
	
$executequery1 = $conn->Execute($query1);

$totalvideos = $executequery1->fields['total'];
if ($totalvideos > 0)
{
	if($executequery1->fields['total']<=$config[maximum_results])
	{
		$total = $executequery1->fields['total'];
	}
	else
	{
		$total = $config[maximum_results];
	}
	
	$toppage = ceil($total/$config[items_per_page]);
	if($toppage==0)
	{
		$xpage=$toppage+1;
	}
	else
	{
		$xpage = $toppage;
	}
	
	$executequery2 = $conn->Execute($query2);
	$ques = $executequery2->getrows();
	$beginning=$pagingstart+1;
	$ending=$pagingstart+$executequery2->recordcount();
	$pagelinks="";
	$k=1;
	$theprevpage=$currentpage-1;
	$thenextpage=$currentpage+1;
	$s = "&filter=$filter";
	if ($currentpage > 0)
	{
		if($currentpage > 1) 
		{
			$pagelinks.="<span class='page_none grey10'><a href='$thebaseurl/$key?page=1$s'>".$lang['7']."</a></span>&nbsp;";
			$pagelinks.="<span class='page_none grey10'><a href='$thebaseurl/$key?page=$theprevpage$s'>&laquo; ".$lang['8']."</a></span>&nbsp;";
			STemplate::assign('tpp',$theprevpage);
		}
		
		$counter=0;
		
		$lowercount = $currentpage-5;
		if ($lowercount <= 0) $lowercount = 1;
		
		while ($lowercount < $currentpage)
		{
			$pagelinks.="<span class='page_none grey10'><a href='$thebaseurl/$key?page=$lowercount$s'>$lowercount</a></span>&nbsp;";
			$lowercount++;
			$counter++;
		}
		
		$pagelinks.="<span class='page_select'>$currentpage</span>&nbsp;";
		
		$uppercounter = $currentpage+1;
		
		while (($uppercounter < $currentpage+10-$counter) && ($uppercounter<=$toppage))
		{
			$pagelinks.="<span class='page_none grey10'><a href='$thebaseurl/$key?page=$uppercounter$s'>$uppercounter</a></span>&nbsp;";
			$uppercounter++;
		}
		
		if($currentpage < $toppage) 
		{
			STemplate::assign('tnp',$thenextpage);
			$pagelinks.="<span class='page_none grey10'><a href='$thebaseurl/$key?page=$thenextpage$s'>".$lang['9']." &raquo;</a></span>&nbsp;";
			$pagelinks.="<span class='page_none grey10'><a href='$thebaseurl/$key?page=$toppage$s'>&laquo; ".$lang['10']."</a></span>&nbsp;";
		}
	}
}

$templateselect = "category.tpl";
STemplate::assign('pagetitle',$name);

//TEMPLATES BEGIN
STemplate::assign('beginning',$beginning);
STemplate::assign('ending',$ending);
STemplate::assign('pagelinks',$pagelinks);
STemplate::assign('total',$total);
STemplate::assign('ques',$ques);
STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');
//TEMPLATES END
?>