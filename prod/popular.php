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
include("include/functions/import.php");
STemplate::assign('mainmenu',"3");

$thebaseurl = $config['baseurl'];
$filter = cleanit($_REQUEST['filter']);

$config[items_per_page] = 20;

if($filter=="" || $filter=="unanswered")
{
	$filter = "unanswered";
	$fadd = "AND A.commentcount='0'";
}
else
{
	$filter = "all";
}
STemplate::assign('filter',$filter);
$page = intval($_REQUEST[page]);

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
$query1 = "SELECT count(*) as total FROM posts A, members B, categories C WHERE A.active='1' $fadd AND A.USERID=B.USERID AND A.category=C.CATID order by A.viewcount desc limit $config[maximum_results]";
$query2 = "SELECT A.PID, A.USERID, B.username, A.title, C.name, C.seo, A.time_added, A.open FROM posts A, members B, categories C WHERE A.active='1' $fadd AND A.USERID=B.USERID AND A.category=C.CATID order by A.viewcount desc limit $pagingstart, $config[items_per_page]";
	
$executequery1 = $conn->Execute($query1);

$totalques = $executequery1->fields['total'];
if ($totalques > 0)
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
			$pagelinks.="<span class='page_none grey10'><a href='$thebaseurl/popular?page=1$s'>".$lang['7']."</a></span>&nbsp;";
			$pagelinks.="<span class='page_none grey10'><a href='$thebaseurl/popular?page=$theprevpage$s'>&laquo; ".$lang['8']."</a></span>&nbsp;";
			STemplate::assign('tpp',$theprevpage);
		}
		
		$counter=0;
		
		$lowercount = $currentpage-5;
		if ($lowercount <= 0) $lowercount = 1;
		
		while ($lowercount < $currentpage)
		{
			$pagelinks.="<span class='page_none grey10'><a href='$thebaseurl/popular?page=$lowercount$s'>$lowercount</a></span>&nbsp;";
			$lowercount++;
			$counter++;
		}
		
		$pagelinks.="<span class='page_select'>$currentpage</span>&nbsp;";
		
		$uppercounter = $currentpage+1;
		
		while (($uppercounter < $currentpage+$config[items_per_page]-$counter) && ($uppercounter<=$toppage))
		{
			$pagelinks.="<span class='page_none grey10'><a href='$thebaseurl/popular?page=$uppercounter$s'>$uppercounter</a></span>&nbsp;";
			$uppercounter++;
		}
		
		if($currentpage < $toppage) 
		{
			STemplate::assign('tnp',$thenextpage);
			$pagelinks.="<span class='page_none grey10'><a href='$thebaseurl/popular?page=$thenextpage$s'>".$lang['9']." &raquo;</a></span>&nbsp;";
			$pagelinks.="<span class='page_none grey10'><a href='$thebaseurl/popular?page=$toppage$s'>&laquo; ".$lang['10']."</a></span>&nbsp;";
		}
	}
}

$templateselect = "popular.tpl";
$pagetitle = $lang['49'];
STemplate::assign('pagetitle',$pagetitle);

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