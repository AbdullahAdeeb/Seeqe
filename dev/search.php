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
$thebaseurl = $config['baseurl'];

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
//print_r($_REQUEST);
//echo "local:".$_REQUEST['locality'];
$key = htmlentities(strip_tags($_REQUEST['key']), ENT_COMPAT, "UTF-8");
$text = htmlentities(strip_tags($_REQUEST['query']), ENT_COMPAT, "UTF-8");
if (!strlen(trim($_REQUEST['searchlocation']))) {
	$city = "";
	$prov = "";
	$country = "";
} else {
	$city = htmlentities(strip_tags($_REQUEST['locality']), ENT_COMPAT, "UTF-8");
	$prov = htmlentities(strip_tags($_REQUEST['administrative_area_level_1']), ENT_COMPAT, "UTF-8");
	$country = htmlentities(strip_tags($_REQUEST['country']), ENT_COMPAT, "UTF-8");
}
if($text != "")
{
	$sterm[] = $text;
	$sterm[0] = str_replace("'", "''", $sterm[0]);
	$sterm[0] = str_replace("  ", "", $sterm[0]);
	$sterm[0] = str_replace("-", "", $sterm[0]);
	$stermsplit = explode(" ",$sterm[0]);
	$stripapos = str_replace("'", "''", $searchterm);
	$stermstr = "";
	if (count($stermsplit)>=1) 
	{
		for($i=0;$i<count($stermsplit);$i++)
		{
			if ($stermsplit[$i] != "" && $stermsplit[$i] != "-" && $stermsplit[$i] != " ")
			{
				$stermstr.="AND A.title like '%$stermsplit[$i]%' ";
			}
		}
	}
	$stermstr .= " ";
}
//echo "city--".$city;
if (($city != "") || ($prov != "") || ($country != "")) {
	$stermstr.=" AND (";
	$useand = false;
	if ($city != "") { $stermstr.=" A.city LIKE '".$city."'"; $useand = true; }
	if ($prov != "") { if ($useand) {  $stermstr.=" AND"; } $stermstr.="  A.region LIKE '".$prov."'";  $useand = true; }
	if ($country != "") { if ($useand) {  $stermstr.=" AND"; } $stermstr.=" A.country LIKE '".$country."'";  }
	$stermstr.=")";
	//echo $stermstr;
}
//echo "rr-->".$stermstr;
$query1 = "SELECT count(*) as total FROM posts A, members B, categories C WHERE A.active='1' $stermstr AND A.USERID=B.USERID AND A.category=C.CATID order by A.PID desc limit $config[maximum_results]";
$query2 = "SELECT A.PID, A.USERID, A.open, B.username, A.title, A.question, C.name, C.seo, A.time_added FROM posts A, members B, categories C WHERE A.active='1' $stermstr AND A.USERID=B.USERID AND A.category=C.CATID order by A.PID desc limit $pagingstart, $config[items_per_page]";
	
$executequery1 = $conn->Execute($query1);

$stotal = $executequery1->fields['total'];
if ($stotal > 0)
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
	$posts = $executequery2->getrows();
	$beginning=$pagingstart+1;
	$ending=$pagingstart+$executequery2->recordcount();
	$pagelinks="";
	$k=1;
	$theprevpage=$currentpage-1;
	$thenextpage=$currentpage+1;
	
	$s = "&query=$text";
	if ($currentpage > 0)
	{
		if($currentpage > 1) 
		{
			$pagelinks.="<span class='page_none grey10'><a href='$thebaseurl/search?page=1$s'>".$lang['7']."</a></span>&nbsp;";
			$pagelinks.="<span class='page_none grey10'><a href='$thebaseurl/search?page=$theprevpage$s'>&laquo; ".$lang['8']."</a></span>&nbsp;";
			STemplate::assign('tpp',$theprevpage);
		}
		
		$counter=0;
		
		$lowercount = $currentpage-5;
		if ($lowercount <= 0) $lowercount = 1;
		
		while ($lowercount < $currentpage)
		{
			$pagelinks.="<span class='page_none grey10'><a href='$thebaseurl/search?page=$lowercount$s'>$lowercount</a></span>&nbsp;";
			$lowercount++;
			$counter++;
		}
		
		$pagelinks.="<span class='page_select'>$currentpage</span>&nbsp;";
		
		$uppercounter = $currentpage+1;
		
		while (($uppercounter < $currentpage+10-$counter) && ($uppercounter<=$toppage))
		{
			$pagelinks.="<span class='page_none grey10'><a href='$thebaseurl/search?page=$uppercounter$s'>$uppercounter</a></span>&nbsp;";
			$uppercounter++;
		}
		
		if($currentpage < $toppage) 
		{
			STemplate::assign('tnp',$thenextpage);
			$pagelinks.="<span class='page_none grey10'><a href='$thebaseurl/search?page=$thenextpage$s'>".$lang['9']." &raquo;</a></span>&nbsp;";
			$pagelinks.="<span class='page_none grey10'><a href='$thebaseurl/search?page=$toppage$s'>&laquo; ".$lang['10']."</a></span>&nbsp;";
		}
	}
}

$templateselect = "search.tpl";
$pagetitle = "$text ".$lang['66'];

STemplate::assign('pagetitle',$pagetitle);

//TEMPLATES BEGIN
STemplate::assign('key',$key);
STemplate::assign('query',$text);
STemplate::assign('city',$city);
STemplate::assign('prov',$prov);
STemplate::assign('country',$country);
STemplate::assign('stotal',$stotal);
STemplate::assign('beginning',$beginning);
STemplate::assign('ending',$ending);
STemplate::assign('pagelinks',$pagelinks);
STemplate::assign('total',$total);
STemplate::assign('ques',$posts);
STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');
//TEMPLATES END
?>