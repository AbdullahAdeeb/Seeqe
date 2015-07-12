<?php
header('Content-type: text/css');
include("../include/config.php");
$imageurl = $config['imageurl'];
?>
div,img{margin:0;padding:0;border:0}span.black_nn{font-size:11px;color:#333}span.black_nn a:link,span.black_nn a:visited{font-size:11px;color:#333;text-decoration:none}span.black_nn a:hover{font-size:11px;color:#333;text-decoration:underline}.pink16b{font-size:16px;color:#e2007b;font-weight:bold}div.pic50 img{border:1px #fff solid;vertical-align:auto;width:50px;height:50px}div.pic90 img{border:1px #fff solid;vertical-align:auto;width:90px;height:90px}.photo_50,.photo_50.no:hover{display:block;border:1px solid #F0F0F0;background-color:#fff;width:52px;height:52px}.photo_50:hover,a.photo_50:hover{display:block;border:1px solid #e2007b;background-color:#fff;width:52px;height:52px}.photo_90,.photo_90.no:hover{display:block;border:1px solid #F0F0F0;background-color:#fff;width:92px;height:92px}.photo_90:hover,a.photo_90:hover{display:block;border:1px solid #e2007b;background-color:#fff;width:92px;height:92px}Select.common180{width:180px}Select.common120{width:120px}Input.common180{border:1px #ccc solid;width:180px}Input.Search{height:20px;margin-top:-1px;border:1px #fff solid}ul.answers_catelist li{margin:0px 0px 5px 0px;list-style:none;width:365px;float:left}div.alist_content{width:665px;background:url(<?php echo $imageurl; ?>/bg_homerow_m.gif) left bottom repeat-x;overflow:hidden;word-break:break-word;padding-bottom:15px}div.myalist_content{width:665px;background:url(<?php echo $imageurl; ?>/bg_homerow_m.gif) left bottom repeat-x;overflow:hidden;word-break:break-word;padding-bottom:15px}.best_answer{border:1px #FEDEEB solid;background-color:#FFF7FA;padding:10px}.qu_answer_con_edit{width:520px}.alist{margin:0px}div.alist_list,div.myalist_list{margin-bottom:20px}div.list_area,div.answers_area{margin:15px 0px 0px 15px}div.answers_area div.row{margin:0px 0px 30px 0px}.alist_select{margin:20px 0px 20px 0px}div.qa{background-color:#f2fddb;padding-top:5px;border-left:1px #abcd3a solid}textarea.ask{width:188px;font-size:18px;height:50px}span.as_open,span.as_close,span.as_good{color:#fff;padding:2px 7px 2px 7px;font-size:11px}span.as_open{background-color:#e2007b}span.as_close{background-color:#aaa}span.as_good{background-color:#C58714}table.fbtable{border-top:3px #ccc solid;border-bottom:1px #ddd solid;margin-bottom:20px}table.fbtable td{border-bottom:1px #ddd solid;padding:10px 0px 10px 0px}div.sortarea{background-color:#efefef;border:1px #ddd solid}div.sortarea_in{margin:8px 10px 8px 10px}a.sharenow{background:url(<?php echo $imageurl; ?>/btn_common.gif) no-repeat left -432px;color:#333!important;cursor:pointer;float:left;font-size:16px;text-align:center;height:32px;padding-left:5px;text-decoration:none!important}a.sharenow span{background:url(<?php echo $imageurl; ?>/btn_common.gif) 100% -464px no-repeat;font-weight:bold;font-size:16px;height:28px;padding:4px 15px 0px 8px;text-align:center;float:left;text-decoration:none}a.sharenow:hover{background:url(<?php echo $imageurl; ?>/btn_common.gif) no-repeat left -496px;color:#333!important;cursor:pointer;float:left;font-size:16px;text-align:center;height:32px;padding-left:5px;text-decoration:none!important}a.sharenow:hover span{background:url(<?php echo $imageurl; ?>/btn_common.gif) 100% -528px no-repeat;font-weight:bold;font-size:16px;height:28px;padding:4px 15px 0px 8px;text-align:center;float:left;text-decoration:none}.buttonimg{padding:0px;margin:0px;border:0px}div.Center9001LeftG{width:330px;float:right;text-align:left}div.Center9001RightG{width:900px;float:left;text-align:left}div.right_col{margin:15px 0px 15px 0px;background-color:#fff}div.list_rank div.ti{margin-bottom:5px;font-weight:bold}div.rank_col{background:url(<?php echo $imageurl; ?>/bg_homerow.gif) left bottom repeat-x;margin:0px 10px 10px 0px;padding-bottom:10px;width:300px;height:55px}div.rank_col div.ra{float:left;width:35px;text-align:center}div.rank_col div.av{float:left;width:65px}div.rank_col div.info{float:left;width:200px}div.rank_col div.rankx{background:url(<?php echo $imageurl; ?>/rank_x.gif) 3px -2px no-repeat;height:30px;color:#fff;font-size:18px}div.rank_col div.rank_1,div.rank_col div.rank_2,div.rank_col div.rank_3{background:url(<?php echo $imageurl; ?>/rank_y.gif) 3px -2px no-repeat;height:30px;font-size:18px}ul.list_pop_language li{background:url(<?php echo $imageurl; ?>/bg_homerow.gif) left bottom repeat-x;margin:0px 0px 5px 0px;padding-bottom:5px}ul.list_pop_language li span.language{float:left}ul.list_pop_language li span.num{color:#666;font-size:11px;margin-left:3px;float:right}div.fliter{background:#f5f5f5;padding:10px;margin-bottom:30px}div.bb_list{width:100%}ul.list_alist li{margin:0px 0px 15px 0px}ul.list_alist li div.and_rate,ul.list_alist li div.and_rate-{background:url(<?php echo $imageurl; ?>/bg_rates_li.gif) no-repeat;font-size:20px;color:#736925;text-align:center;width:50px;height:40px;float:left;margin:2px 5px 0px 0px;padding-top:10px;cursor:pointer}ul.list_alist li div.and_rate-{background:url(<?php echo $imageurl; ?>/bg_rates_li-.gif) no-repeat;color:#666}ul.list_alist li div.mag15{margin-right:15px}ul.list_alist li div.left{width:65px;float:left}ul.list_alist li div.right,ul.list_alist li div.right2{width:555px;float:left;padding:0px 0px 10px 0px;background:url(<?php echo $imageurl; ?>/bg_homerow.gif) left bottom repeat-x;overflow:hidden}ul.list_alist li div.right2{width:610px}ul.list_topmember li{width:82px;float:left;margin:0px 3px 10px 0px;position:relative}ul.loop_tands li.area{width:300px;margin-bottom:10px;overflow:hidden}ul.loop_tands li div.left{width:65px;float:left}ul.loop_tands li div.right{width:235px;float:left;overflow:hidden}ul.subsort li{margin-bottom:3px}div.layer_stat{border:3px #ddd solid;padding:10px;margin-bottom:30px}div.winput textarea.blackpost{width:230px;background:#fff;border:1px #adcee7 solid;padding:6px 6px 6px 6px;height:40px}div.alert_best{background:url(<?php echo $imageurl; ?>/bg_homerow.gif) left top repeat-x;padding:10px 0px 0px 0px;margin-top:20px}div.alert_bset div{background:url(<?php echo $imageurl; ?>/icon_ask_0.gif) left top no-repeat;padding-left:20px}div.bb_list ul.sortby li,ul.course_list li ul.sortby li{padding:0px 8px 0px 0px;margin:0px 8px 0px 0px;background:none}div.Rb_list ul.sortby li a:link,div.bb_list ul.sortby li a:link,div.Rb_list ul.sortby li a:visited,div.bb_list ul.sortby li a:visited,div.Rb_list ul.sortby li a:hover,div.bb_list ul.sortby li a:hover{font-size:11px;text-decoration:none}div.original{margin-bottom:30px}div.correction{margin-bottom:60px}div.related{margin-bottom:30px}div.H3title{background:url(<?php echo $imageurl; ?>/bg_bblist_day.png) bottom left no-repeat;padding-bottom:10px;margin-bottom:15px}div.original div.left{width:110px;float:left}div.original div.right{width:900px;float:left}div.original div.right div.addthis_toolbox{float:left}div.original_text{padding:10px;margin:0px 0px 0px 0px;background:#f7f7f7;border:1px #eee solid;font-size:13px}div.original_text_line{border-bottom:1px #666 dotted;padding-bottom:20px;margin-bottom:10px}div.correct_text{padding:10px;margin:0px 0px 0px 0px;background:#e8f5fe;border:1px #eee solid}div.btn_edit{margin-bottom:10px}textarea.nclick{width:594px;height:20px;color:#999;overflow-y:hidden;font-size:16px;padding:2px}textarea.yclick{width:594px;padding:2px}div.correct_loop{margin-bottom:30px}div.correct_loop div.left{width:94px;margin-right:16px;float:left}div.correct_loop div.right{width:900px;float:left}div.edit_text{padding:10px;margin:0px 0px 10px 0px;background:#f7f7f7;border:1px #eee solid}div.edit_text div.edit_left{float:left;width:525px}div.edit_text div.edit_right{float:right;width:50px;text-align:center}div.text_language div.edit_left{float:left;width:525px}div.text_language div.edit_right{float:right;width:50px;text-align:center}.ans_rate{font-size:20px;color:#736925;text-align:center}.ans_rate div.ans_rate_op{background-color:#ffffff;border-bottom-left-radius:3px;border-bottom-right-radius:3px;border-top-left-radius:3px;border-top-right-radius:3px;width:38px;margin:0 auto;padding:1px 0px 1px 0px}.edit_vote{width:50px;text-align:center;margin:0 auto;background:url(<?php echo $imageurl; ?>/bg_rates_de.gif) no-repeat top left;padding:0px 0px 10px 0px}.edit_flag{margin-top:10px}div.text_language{border-bottom:1px #666 dotted;padding-bottom:20px;margin-bottom:10px}ul.taglist{margin:0px;padding:0px}ul.taglist li{float:left;margin:0px 10px 3px 0px;background:none;padding:0px;white-space:nowrap}div.pocardtop ul.taglist li{margin-bottom:0px}span.status_TEA{font-size:10px;font-family:Verdana;color:#fff;height:16px;padding:0px 7px 0px 7px;background:#C58714}span.status_TEA a{font-size:10px;font-family:Verdana;color:#fff;text-decoration:none}div.btn_quickedit{border-top:1px #ddd solid;padding:15px 0px 0px 110px;margin-bottom:30px}div.btn_quickedit h3{font-size:18px;margin-bottom:15px}ul.entry_re li{list-style:disc;margin:0px 0px 5px 20px;color:#333}div.re_area{border-left:5px #eee solid;padding-left:15px;width:600px;margin-top:15px}ul.re_arealist li{margin-bottom:0px;padding:0px 0px 15px 0px;background:none}div.re_comment{width:600px}div.re_comment p{padding:0px;margin:0px}div.re_comment div.re_comment_avater{width:65px;float:left}div.re_comment div.re_comment_comment{width:535px;float:left;overflow:hidden}div.re_area p.re_more{text-align:center;margin-bottom:15px;background:url(<?php echo $imageurl; ?>/bg_homerow_m.gif) left bottom repeat-x}div.re_area p.re_more a{background-color:#fff;padding:0px 5px 0px 5px}div.re_area p.re_more a:link,div.re_area p.re_more a:visited,div.re_area p.re_more a:hover{font-size:11px}div.re_area p.re_add{background:url(<?php echo $imageurl; ?>/bg_homerow.gif) left top repeat-x;padding-top:10px}textarea.nclick{width:594px;height:20px;color:#999;overflow-y:hidden;font-size:16px;padding:2px}textarea.yclick{width:594px;padding:2px}div.area_asked{padding:10px 40px 10px 40px}div.area_asked div.link{border-top:1px #ddd solid;padding-top:10px}ul.loop_top30 li.area{width:190px;margin-bottom:10px;overflow:hidden}ul.loop_top30 li div.left{width:65px;float:left}ul.loop_top30 li div.right{width:125px;float:left;overflow:hidden}div.ad_728{margin-bottom:15px}div.ad_T728{background:#f2f2f3;text-align:center;padding:5px 0px 5px 0px}.create_align{padding:0px 10px 0px 10px}.create_notice{background:#dbeffb url(<?php echo $imageurl; ?>/icon_panelAlert.gif) 5px 5px no-repeat;padding:5px 0px 9px 45px;color:#333;margin:0px 0px 15px 0px}
.scriptolutionconnect, .scriptolutionconnect a:link, .scriptolutionconnect a:visited, .scriptolutionconnect a:active {
font-family: 'lucida grande', tahoma, verdana, arial, sans-serif;font-weight: bold;font-size: 12px;border: solid #29447e 1px; border-bottom: solid #1a356e 1px;cursor: pointer;padding: 6px;border-top: solid #8a9cc2 1px;text-align: center;color: #ffffff; background-color: #4f6aa3; text-decoration:none;	
}
.connectbyscriptolution {
    position:absolute; padding-top:6px;
}
.connectbyscriptolution a:link, .connectbyscriptolution a:active,.connectbyscriptolution a:visited {
    color: #ffffff;
}
.connectbyscriptolution a:hover {
    color: #efefef;
}

body	{
xbackground-image: url(download.jpg);
xbackground-repeat: no-repeat;
xbackground-color: #00000;
}