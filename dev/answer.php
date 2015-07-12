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
STemplate::assign('mainmenu',"2");

$thebaseurl = $config['baseurl'];
$filter = cleanit($_REQUEST['filter']);

$config[items_per_page] = 20; // roxie added to limit to 20 items per page
$cats = insert_get_categories();

if($filter=="" || $filter=="unanswered") {
    $filter = "unanswered";
    $fadd = "AND A.open='1'";
} else if($filter=="recent") {
} else if($filter=="found") {
} else {
    $filter = "all";
}
STemplate::assign('filter',$filter);
$page = intval($_REQUEST[page]);
if($page=="")
{
    $page = "1";
}
$currentpage = $page;
//$chosenCategory = intval($_REQUEST[cat]);

if ($page >=2){
    $pagingstart = ($page-1)*$config[items_per_page];
}else{
    $pagingstart = "0";
}

if($filter=="recent") {
    //echo "recent";
    $query1 = "SELECT count(*) as total FROM posts A, members B, categories C WHERE A.active='1' AND A.USERID=B.USERID AND A.category=C.CATID AND A.commentcount = 0 order by A.PID desc limit $config[maximum_results]";
    $query2 = "SELECT A.PID, A.USERID, A.city, A.country, B.username, A.title, C.name, C.seo, A.time_added, A.open FROM posts A, members B, categories C WHERE A.active='1' AND A.USERID=B.USERID AND A.category=C.CATID AND A.commentcount = 0 order by A.PID desc limit $pagingstart, $config[items_per_page]";
} else if($filter=="found") {
    //echo "found";
    $query1 = "SELECT count(*) as total FROM posts A, members B, categories C WHERE A.active='1' AND A.USERID=B.USERID AND A.category=C.CATID AND A.commentcount > 0 order by A.PID desc limit $config[maximum_results]";
    
    
    //	$query2 = "SELECT A.PID, A.USERID, A.city, A.country, B.username, A.title, C.name, C.seo, A.time_added, A.open, (SELECT pc.time_added FROM posts_comments pc  WHERE pc.PID=A.PID ORDER BY pc.time_added DESC LIMIT 1) as lastfounddate FROM posts A, members B, categories C WHERE A.active='1'  AND A.USERID=B.USERID AND A.category=C.CATID AND A.commentcount > 0 order by A.PID desc limit $pagingstart, $config[items_per_page]";
    //Adding lasfounddate
    $query2 = "SELECT A.PID, IF (A.anonymous =0, A.USERID, 100) as USERID, A.city, A.country, IF (A.anonymous =0, B.username, 'Anonymous') as username, A.title, C.name, C.seo, A.time_added, A.open, A.anonymous, (SELECT FROM_UNIXTIME(pc.time_added) as lastfound FROM posts_comments pc WHERE pc.PID=A.PID UNION SELECT pc.thumbedtime as lastfound FROM posts_comments pc WHERE pc.PID=A.PID ORDER BY lastfound DESC LIMIT 1) as lastfounddate FROM posts A, members B, categories C WHERE A.active='1'  AND A.USERID=B.USERID AND A.category=C.CATID AND A.commentcount > 0 order by A.PID desc limit $pagingstart, $config[items_per_page]";

} else {
    $query1 = "SELECT count(*) as total FROM posts A, members B, categories C WHERE A.active='1' $fadd AND A.USERID=B.USERID AND A.category=C.CATID order by A.PID desc limit $config[maximum_results]";
    $query2 = "SELECT A.PID, A.USERID, A.city, A.country, B.username, A.title, C.name, C.seo, A.time_added, A.open FROM posts A, members B, categories C WHERE A.active='1' $fadd AND A.USERID=B.USERID AND A.category=C.CATID order by A.PID desc limit $pagingstart, $config[items_per_page]";
}	

$executequery1 = $conn->Execute($query1);

$totalques = $executequery1->fields['total'];
if ($totalques > 0){
    if($executequery1->fields['total']<=$config[maximum_results]){
        $total = $executequery1->fields['total'];
    }else{
        $total = $config[maximum_results];
    }

    $toppage = ceil($total/$config[items_per_page]);
    if($toppage==0){
        $xpage=$toppage+1;
    }else{
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
    if ($currentpage > 0){
        if($currentpage > 1){
            $pagelinks.="<span class='page_none grey10'><a href='$thebaseurl/answer?page=1$s'>".$lang['7']."</a></span>&nbsp;";
            $pagelinks.="<span class='page_none grey10'><a href='$thebaseurl/answer?page=$theprevpage$s'>&laquo; ".$lang['8']."</a></span>&nbsp;";
            STemplate::assign('tpp',$theprevpage);
        }

        $counter=0;

        $lowercount = $currentpage-5;
        if ($lowercount <= 0) $lowercount = 1;

        while ($lowercount < $currentpage){
            $pagelinks.="<span class='page_none grey10'><a href='$thebaseurl/answer?page=$lowercount$s'>$lowercount</a></span>&nbsp;";
            $lowercount++;
            $counter++;
        }

        $pagelinks.="<span class='page_select'>$currentpage</span>&nbsp;";

        $uppercounter = $currentpage+1;

        while (($uppercounter < $currentpage+10-$counter) && ($uppercounter<=$toppage)){
            $pagelinks.="<span class='page_none grey10'><a href='$thebaseurl/answer?page=$uppercounter$s'>$uppercounter</a></span>&nbsp;";
            $uppercounter++;
        }

        if($currentpage < $toppage) {
            STemplate::assign('tnp',$thenextpage);
            $pagelinks.="<span class='page_none grey10'><a href='$thebaseurl/answer?page=$thenextpage$s'>".$lang['9']." &raquo;</a></span>&nbsp;";
            $pagelinks.="<span class='page_none grey10'><a href='$thebaseurl/answer?page=$toppage$s'>&laquo; ".$lang['10']."</a></span>&nbsp;";
        }
    }
}

$templateselect = "answer.tpl";
if($filter=="recent") {
    $pagetitle = "Recently Asked";
} else if($filter=="found") {
    $pagetitle = "Recently Found";
} else {
    $pagetitle = $lang['51'];
}
STemplate::assign('pagetitle',$pagetitle);

//TEMPLATES BEGIN
if($filter=="found") {
    STemplate::assign('isfound',true);
} else {
    STemplate::assign('isfound',false);
}
//STemplate::assign('chosenCategories', $chosenCategory);
STemplate::assign('categories', $cats);
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