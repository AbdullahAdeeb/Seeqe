<?php /* Smarty version 2.6.6, created on 2015-07-02 20:31:34
         compiled from question.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'clickable_link', 'question.tpl', 78, false),array('insert', 'get_tags', 'question.tpl', 101, false),array('insert', 'get_time_to_days_ago', 'question.tpl', 128, false),array('insert', 'get_username_from_userid', 'question.tpl', 144, false),array('insert', 'get_member_profilepicture', 'question.tpl', 145, false),array('insert', 'get_seo_url', 'question.tpl', 349, false),array('modifier', 'stripslashes', 'question.tpl', 90, false),array('modifier', 'nl2br', 'question.tpl', 93, false),array('modifier', 'substr', 'question.tpl', 156, false),array('modifier', 'replace', 'question.tpl', 161, false),array('modifier', 'date_format', 'question.tpl', 172, false),)), $this); ?>
<?php echo '

<script language="javascript" type="text/javascript">

    function VDM(id,nb) {
        $(\'#Dvote\'+id).css(\'display\',\'none\');
        $.post("';  echo $this->_tpl_vars['baseurl']; ?>
/vote_yes.php<?php echo '",{"id":id,"nb":nb},function(html) {
            $(\'#D2vote\'+id).html(\'\'+html+\'\').fadeIn();
            $(\'#D2vote\'+id).css(\'display\',\'\');
        });
        $.post("';  echo $this->_tpl_vars['baseurl']; ?>
/vote_yes_date.php<?php echo '",{"id":id,"nb":nb},function(html) {
            $(\'#CDvoteyesdate\'+id).html(html).fadeIn(); 
        });
    }

    function VDM_BF(id,nb) {
        $(\'#Dvoteb\'+id).css(\'display\',\'none\');
        $.post("';  echo $this->_tpl_vars['baseurl']; ?>
/vote_no.php<?php echo '",{"id":id,"nb":nb},function(html) {
            $(\'#D2voteb\'+id).html(\'\'+html+\'\').fadeIn();
            $(\'#D2voteb\'+id).css(\'display\',\'\');	
        });

        $.post("';  echo $this->_tpl_vars['baseurl']; ?>
/vote_no_date.php<?php echo '",{"id":id,"nb":nb},function(html) {
            $(\'#CDvotenodate\'+id).html(html).fadeIn(); 
        });
    }

    function CVDM(id,nb) {
        $(\'#CDvote\'+id).css(\'display\',\'none\');
        $.post("';  echo $this->_tpl_vars['baseurl']; ?>
/votec_yes.php<?php echo '",{"id":id,"nb":nb},function(html) {
            $(\'#CD2vote\'+id).html(\'\'+html+\'\').fadeIn();
            $(\'#CD2vote\'+id).css(\'display\',\'\');
        });

        $.post("';  echo $this->_tpl_vars['baseurl']; ?>
/votec_yes_date.php<?php echo '",{"id":id,"nb":nb},function(html) {
            $(\'#CDvoteyesbdate\'+id).html(html).fadeIn(); 
        });

    }

    function CVDM_BF(id,nb) {
        $(\'#CDvoteb\'+id).css(\'display\',\'none\');
        $.post("';  echo $this->_tpl_vars['baseurl']; ?>
/votec_no.php<?php echo '",{"id":id,"nb":nb},function(html) {
            $(\'#CD2vote\'+id).html(\'\'+html+\'\').fadeIn();
            $(\'#CD2vote\'+id).css(\'display\',\'\');
        });

        $.post("';  echo $this->_tpl_vars['baseurl']; ?>
/votec_no_date.php<?php echo '",{"id":id,"nb":nb},function(html) {
            $(\'#CDvoteyesbdate\'+id).html(html).fadeIn(); 
        });
    }

    function reportqAbuse(id) {	
        $(\'#qAbuse\'+id).fadeOut();
        $.post("';  echo $this->_tpl_vars['baseurl']; ?>
/report_question.php<?php echo '",{"id":id},function(html) {
            $(\'#qAbuse\'+id).html(\'\'+html+\'\').fadeIn();
        });
    }

    function reportcAbuse(id) {
        $(\'#cAbuse\'+id).fadeOut();
        $.post("';  echo $this->_tpl_vars['baseurl']; ?>
/report_answer.php<?php echo '",{"id":id},function(html) {
            $(\'#cAbuse\'+id).html(\'\'+html+\'\').fadeIn();	
        });
    }

</script>

'; ?>


<div class="common">
    <div id="new_body">
        <div id="body_900">
            <div id="body_left">
            </div>
            <div id="body_main" style="margin-top: 25px;">
                <div class="title">
                    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'clickable_link', 'value' => 'var', 'assign' => 'la', 'text' => $this->_tpl_vars['parray']['title'])), $this); ?>

                    <!-- <div class="floatr"><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/ask" class="sharenowadd"><span><?php echo $this->_tpl_vars['lang114']; ?>
</span></a></div>
<div class="clear"></div> -->
                </div>
                <div class="Center9001n">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "error.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <div class="Center9001RightG">
                        <div class="Center9001Content">
                            <div class="answers_area">
                                <div class="original">
                                    <div class="right">
                                        <div class="original_text">
                                            <div class="original_text_line"><h1><?php echo ((is_array($_tmp=$this->_tpl_vars['la'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</h1>
                                                <div id="QuseDs" style="margin-bottom:10px">
                                                    <?php if ($this->_tpl_vars['parray']['question'] != "" && $this->_tpl_vars['parray']['question'] != $this->_tpl_vars['parray']['title']): ?>
                                                    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'clickable_link', 'value' => 'var', 'assign' => 'lq', 'text' => $this->_tpl_vars['parray']['question'])), $this);  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lq'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="text_language">
                                                <div class="edit_left">
                                                    <span class="silver_nn">
                                                        <p><?php echo $this->_tpl_vars['lang162']; ?>
: <?php if ($this->_tpl_vars['parent'] != '0'): ?><a href='<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['pseo']; ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['pname'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a> - <?php endif; ?><a href='<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['nseo']; ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a><br/></p>
                                                        <p style="word-wrap: break-word;"><?php echo $this->_tpl_vars['lang184']; ?>
: <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_tags', 'assign' => 'looptags', 'tags' => $this->_tpl_vars['parray']['tags'])), $this);  unset($this->_sections['tt']);
$this->_sections['tt']['name'] = 'tt';
$this->_sections['tt']['loop'] = is_array($_loop=$this->_tpl_vars['looptags']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tt']['show'] = true;
$this->_sections['tt']['max'] = $this->_sections['tt']['loop'];
$this->_sections['tt']['step'] = 1;
$this->_sections['tt']['start'] = $this->_sections['tt']['step'] > 0 ? 0 : $this->_sections['tt']['loop']-1;
if ($this->_sections['tt']['show']) {
    $this->_sections['tt']['total'] = $this->_sections['tt']['loop'];
    if ($this->_sections['tt']['total'] == 0)
        $this->_sections['tt']['show'] = false;
} else
    $this->_sections['tt']['total'] = 0;
if ($this->_sections['tt']['show']):

            for ($this->_sections['tt']['index'] = $this->_sections['tt']['start'], $this->_sections['tt']['iteration'] = 1;
                 $this->_sections['tt']['iteration'] <= $this->_sections['tt']['total'];
                 $this->_sections['tt']['index'] += $this->_sections['tt']['step'], $this->_sections['tt']['iteration']++):
$this->_sections['tt']['rownum'] = $this->_sections['tt']['iteration'];
$this->_sections['tt']['index_prev'] = $this->_sections['tt']['index'] - $this->_sections['tt']['step'];
$this->_sections['tt']['index_next'] = $this->_sections['tt']['index'] + $this->_sections['tt']['step'];
$this->_sections['tt']['first']      = ($this->_sections['tt']['iteration'] == 1);
$this->_sections['tt']['last']       = ($this->_sections['tt']['iteration'] == $this->_sections['tt']['total']);
?><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/search?query=<?php echo ((is_array($_tmp=$this->_tpl_vars['looptags'][$this->_sections['tt']['index']])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['looptags'][$this->_sections['tt']['index']])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a> <?php endfor; endif; ?><br/></p>

                                                        <?php if ($this->_tpl_vars['parray']['picsuffix'] != ""): ?><img src="<?php echo $this->_tpl_vars['postpicurl']; ?>
/<?php echo $this->_tpl_vars['PID'];  echo $this->_tpl_vars['parray']['picsuffix']; ?>
" /><?php endif; ?> 
                                                        <br>
                                                        <?php if ($this->_tpl_vars['parray']['city']): ?><p>Location: <?php echo $this->_tpl_vars['parray']['city']; ?>
, <?php echo $this->_tpl_vars['parray']['region']; ?>
, <?php echo $this->_tpl_vars['parray']['country']; ?>
</p><?php endif; ?>

                                                        <br>
                                                        <div align="left" class='shareaholic-canvas' data-app='share_buttons' data-app-id='16112507'></div>


                                                    </span>
                                                </div>
                                                <div class="clear">	</div>
                                            </div>
                                            <div class="share">
                                                <script type="text/javascript">
                                                    addthis_url    = location.href;
                                                    addthis_title  = document.title;
                                                    addthis_pub    = 'videowatchpro';
                                                </script>
                                                <script type="text/javascript" src="http://s7.addthis.com/js/addthis_widget.php?v=12" ></script>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div style="margin-bottom:10px;padding:5px 0px 5px 0px">
                                            <span class="silver_nn">
                                                <ul class="sortby">
                                                    <li class="last"><?php echo $this->_tpl_vars['lang60']; ?>
 <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/member/<?php echo $this->_tpl_vars['parray']['USERID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['parray']['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['parray']['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['parray']['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a> <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_time_to_days_ago', 'value' => 'var', 'time' => $this->_tpl_vars['parray']['time_added'])), $this); ?>
</li>
                                                </ul>
                                            </span>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>

                                <?php if ($this->_tpl_vars['parray']['open'] != '1'): ?>
                                <div class="correction">
                                    <div class="bb_day bb15"><h3 class="floatl"><?php echo $this->_tpl_vars['lang195']; ?>
</h3>
                                        <div class="clear">	</div>
                                    </div>
                                    <div id="Div_Title">
                                        <?php unset($this->_sections['vc']);
$this->_sections['vc']['name'] = 'vc';
$this->_sections['vc']['loop'] = is_array($_loop=$this->_tpl_vars['showcomments2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['vc']['show'] = true;
$this->_sections['vc']['max'] = $this->_sections['vc']['loop'];
$this->_sections['vc']['step'] = 1;
$this->_sections['vc']['start'] = $this->_sections['vc']['step'] > 0 ? 0 : $this->_sections['vc']['loop']-1;
if ($this->_sections['vc']['show']) {
    $this->_sections['vc']['total'] = $this->_sections['vc']['loop'];
    if ($this->_sections['vc']['total'] == 0)
        $this->_sections['vc']['show'] = false;
} else
    $this->_sections['vc']['total'] = 0;
if ($this->_sections['vc']['show']):

            for ($this->_sections['vc']['index'] = $this->_sections['vc']['start'], $this->_sections['vc']['iteration'] = 1;
                 $this->_sections['vc']['iteration'] <= $this->_sections['vc']['total'];
                 $this->_sections['vc']['index'] += $this->_sections['vc']['step'], $this->_sections['vc']['iteration']++):
$this->_sections['vc']['rownum'] = $this->_sections['vc']['iteration'];
$this->_sections['vc']['index_prev'] = $this->_sections['vc']['index'] - $this->_sections['vc']['step'];
$this->_sections['vc']['index_next'] = $this->_sections['vc']['index'] + $this->_sections['vc']['step'];
$this->_sections['vc']['first']      = ($this->_sections['vc']['iteration'] == 1);
$this->_sections['vc']['last']       = ($this->_sections['vc']['iteration'] == $this->_sections['vc']['total']);
?>
                                        <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_username_from_userid', 'value' => 'var', 'assign' => 'uname', 'USERID' => $this->_tpl_vars['showcomments2'][$this->_sections['vc']['index']]['USERID'])), $this); ?>

                                        <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_member_profilepicture', 'assign' => 'profilepicture', 'value' => 'var', 'USERID' => $this->_tpl_vars['showcomments2'][$this->_sections['vc']['index']]['USERID'])), $this); ?>

                                        <div class="correct_loop" id="answer_<?php echo $this->_tpl_vars['showcomments2'][$this->_sections['vc']['index']]['CID']; ?>
">
                                            <div style="display:inline"><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/member/<?php echo $this->_tpl_vars['showcomments2'][$this->_sections['vc']['index']]['USERID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['uname'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"><img src="<?php echo $this->_tpl_vars['membersprofilepicurl']; ?>
/thumbs/<?php echo $this->_tpl_vars['profilepicture']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['uname'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" width="55"/></a>
                                            </div>
                                            <div style="float: none; width: auto; word-wrap: break-word;background: #eee;padding: 10px;">
                                                <div class="edit_text">
                                                    <div class="edit_left">
                                                        <div id="An<?php echo $this->_tpl_vars['showcomments2'][$this->_sections['vc']['index']]['CID']; ?>
">
                                                            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'clickable_link', 'value' => 'var', 'assign' => 'comdetails', 'text' => $this->_tpl_vars['showcomments2'][$this->_sections['vc']['index']]['details'])), $this);  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['comdetails'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

                                                            <?php if ($this->_tpl_vars['showcomments2'][$this->_sections['vc']['index']]['address']): ?><br/><?php echo $this->_tpl_vars['showcomments2'][$this->_sections['vc']['index']]['address']; ?>
 <?php echo $this->_tpl_vars['showcomments2'][$this->_sections['vc']['index']]['city']; ?>
, <?php echo $this->_tpl_vars['showcomments2'][$this->_sections['vc']['index']]['region']; ?>
, <?php echo $this->_tpl_vars['showcomments2'][$this->_sections['vc']['index']]['country'];  endif; ?>
                                                            <?php if ($this->_tpl_vars['showcomments2'][$this->_sections['vc']['index']]['website_url']): ?>
                                                            <?php $this->assign('var', ((is_array($_tmp=$this->_tpl_vars['showcomments2'][$this->_sections['vc']['index']]['website_url'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 4) : substr($_tmp, 0, 4))); ?>
                                                            <?php $this->assign('weburl', $this->_tpl_vars['showcomments2'][$this->_sections['vc']['index']]['website_url']); ?>
                                                            <?php if ($this->_tpl_vars['var'] != 'http'):  $this->assign('weburl', "http://".($this->_tpl_vars['weburl']));  endif; ?>
                                                            <br/><a href="<?php echo $this->_tpl_vars['weburl']; ?>
" target="_blank"><?php echo $this->_tpl_vars['weburl']; ?>
</a>
                                                            <?php endif; ?>
                                                            <?php if ($this->_tpl_vars['showcomments2'][$this->_sections['vc']['index']]['address'] && $this->_tpl_vars['showcomments2'][$this->_sections['vc']['index']]['city']): ?><iframe width="200" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q=<?php echo ((is_array($_tmp=$this->_tpl_vars['showcomments2'][$this->_sections['vc']['index']]['address'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '+') : smarty_modifier_replace($_tmp, ' ', '+')); ?>
+<?php echo ((is_array($_tmp=$this->_tpl_vars['showcomments2'][$this->_sections['vc']['index']]['city'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '+') : smarty_modifier_replace($_tmp, ' ', '+')); ?>
+<?php echo ((is_array($_tmp=$this->_tpl_vars['showcomments2'][$this->_sections['vc']['index']]['region'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '+') : smarty_modifier_replace($_tmp, ' ', '+')); ?>
+<?php echo ((is_array($_tmp=$this->_tpl_vars['showcomments2'][$this->_sections['vc']['index']]['country'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '+') : smarty_modifier_replace($_tmp, ' ', '+')); ?>
&z=14&output=embed"></iframe><?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="edit_right">

                                                    </div>
                                                    <div class="cleartm">
                                                    </div>
                                                </div>
                                                <div class="original_comment">
                                                    <ul class="sortby">
                                                        <li class="last"><span class="silver_nn">By <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/member/<?php echo $this->_tpl_vars['showcomments2'][$this->_sections['vc']['index']]['USERID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['uname'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['uname'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['uname'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a> <?php echo ((is_array($_tmp=$this->_tpl_vars['showcomments2'][$this->_sections['vc']['index']]['time_added'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['showcomments2'][$this->_sections['vc']['index']]['time_added'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%I:%M %p") : smarty_modifier_date_format($_tmp, "%I:%M %p")); ?>
</span></li>
                                                    </ul>
                                                    <div class="clear"></div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <?php endfor; endif; ?>
                                    </div>
                                </div>
                                <div class="clear">	</div>
                                <?php endif; ?>
                                <div class="correction">
                                    <div class="bb_day bb15"><h3 class="floatl"><?php echo $this->_tpl_vars['lang161']; ?>
</h3>
                                        <div class="clear">	</div>
                                    </div>
                                    <div id="Div_Title">
                                        <?php unset($this->_sections['vc']);
$this->_sections['vc']['name'] = 'vc';
$this->_sections['vc']['loop'] = is_array($_loop=$this->_tpl_vars['showcomments']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['vc']['show'] = true;
$this->_sections['vc']['max'] = $this->_sections['vc']['loop'];
$this->_sections['vc']['step'] = 1;
$this->_sections['vc']['start'] = $this->_sections['vc']['step'] > 0 ? 0 : $this->_sections['vc']['loop']-1;
if ($this->_sections['vc']['show']) {
    $this->_sections['vc']['total'] = $this->_sections['vc']['loop'];
    if ($this->_sections['vc']['total'] == 0)
        $this->_sections['vc']['show'] = false;
} else
    $this->_sections['vc']['total'] = 0;
if ($this->_sections['vc']['show']):

            for ($this->_sections['vc']['index'] = $this->_sections['vc']['start'], $this->_sections['vc']['iteration'] = 1;
                 $this->_sections['vc']['iteration'] <= $this->_sections['vc']['total'];
                 $this->_sections['vc']['index'] += $this->_sections['vc']['step'], $this->_sections['vc']['iteration']++):
$this->_sections['vc']['rownum'] = $this->_sections['vc']['iteration'];
$this->_sections['vc']['index_prev'] = $this->_sections['vc']['index'] - $this->_sections['vc']['step'];
$this->_sections['vc']['index_next'] = $this->_sections['vc']['index'] + $this->_sections['vc']['step'];
$this->_sections['vc']['first']      = ($this->_sections['vc']['iteration'] == 1);
$this->_sections['vc']['last']       = ($this->_sections['vc']['iteration'] == $this->_sections['vc']['total']);
?>
                                        <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_username_from_userid', 'value' => 'var', 'assign' => 'uname', 'USERID' => $this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['USERID'])), $this); ?>

                                        <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_member_profilepicture', 'assign' => 'profilepicture', 'value' => 'var', 'USERID' => $this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['USERID'])), $this); ?>

                                        <div class="correct_loop" id="answer_<?php echo $this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['CID']; ?>
">
                                            <div style=" display:inline" class="profile-pic"><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/member/<?php echo $this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['USERID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['uname'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"><img src="<?php echo $this->_tpl_vars['membersprofilepicurl']; ?>
/thumbs/<?php echo $this->_tpl_vars['profilepicture']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['uname'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" width="55"/></a>
                                            </div>
                                            <div class="question-answer">
                                                <div class="edit_text">
                                                    <div class="edit_left">
                                                        <div id="An<?php echo $this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['CID']; ?>
">
                                                            <div class="the-answer"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'clickable_link', 'value' => 'var', 'assign' => 'comdetails', 'text' => $this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['details'])), $this);  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['comdetails'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

                                                                <?php if ($this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['address']): ?><br/><?php echo $this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['address']; ?>
 <?php echo $this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['city']; ?>
, <?php echo $this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['region']; ?>
, <?php echo $this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['country'];  endif; ?>
                                                                <?php if ($this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['website_url']): ?>
                                                                <?php $this->assign('var', ((is_array($_tmp=$this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['website_url'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 4) : substr($_tmp, 0, 4))); ?>
                                                                <?php $this->assign('weburl', $this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['website_url']); ?>	
                                                                <?php if ($this->_tpl_vars['var'] != 'http'):  $this->assign('weburl', "http://".($this->_tpl_vars['weburl']));  endif; ?>
                                                                <br/><a href="<?php echo $this->_tpl_vars['weburl']; ?>
" target="_blank"><?php echo $this->_tpl_vars['weburl']; ?>
</a>
                                                                <?php endif; ?>
                                                            </div>
                                                            <?php if ($this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['address'] && $this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['city']): ?>
                                                            <iframe width="200" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q=<?php echo ((is_array($_tmp=$this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['address'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '+') : smarty_modifier_replace($_tmp, ' ', '+')); ?>
+<?php echo ((is_array($_tmp=$this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['city'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '+') : smarty_modifier_replace($_tmp, ' ', '+')); ?>
+<?php echo ((is_array($_tmp=$this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['region'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '+') : smarty_modifier_replace($_tmp, ' ', '+')); ?>
+<?php echo ((is_array($_tmp=$this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['country'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '+') : smarty_modifier_replace($_tmp, ' ', '+')); ?>
&z=14&output=embed"></iframe>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="edit_right">
                                                        <div class="thumbs-rating">
                                                            <div class="ans_rate">
                                                                <?php if ($_SESSION['USERID'] > '0'): ?>
                                                                <a id="pos" class='positive' href="javascript:;" onclick="CVDM('<?php echo $this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['CID']; ?>
','<?php echo $this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['vote_yes']; ?>
');"><img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/icon_goodno.png"/ title="Yes, I do."></a>
                                                                <?php else: ?>
                                                                <img class="positive1" src="<?php echo $this->_tpl_vars['imageurl']; ?>
/icon_goodno.png"/ title="Yes, I do.">
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="ans_rate">
                                                                <?php $this->assign('totalvotes', '0'); ?>
                                                                <?php $this->assign('x', $this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['vote_yes']); ?>
                                                                <?php $this->assign('y', $this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['vote_no']); ?>
                                                                <?php $this->assign('totalvotes', $this->_tpl_vars['x']-$this->_tpl_vars['y']); ?>
                                                                <span class='positive1' id="CD2vote<?php echo $this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['CID']; ?>
"><?php echo $this->_tpl_vars['totalvotes']; ?>
</span>
                                                            </div>
                                                            <div class="ans_rate">
                                                                <?php if ($_SESSION['USERID'] > '0'): ?>
                                                                <a id="neg" class='negative' href="javascript:;" onclick="CVDM_BF('<?php echo $this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['CID']; ?>
','<?php echo $this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['vote_no']; ?>
');"><img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/icon_badno.png"/ title="No, I didn't."></a>
                                                                <?php else: ?>
                                                                <img class="negative1" src="<?php echo $this->_tpl_vars['imageurl']; ?>
/icon_badno.png"/ title="No, I didn't.">
                                                                <?php endif; ?>
                                                            </div>
                                                            <br/><br />
                                                            <span class="ans_rate_date" id='CDvotenobdate<?php echo $this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['CID']; ?>
'><?php if ($this->_tpl_vars['totalvotes'] >= 1):  echo ((is_array($_tmp=$this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['thumbedtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp));  else:  echo ((is_array($_tmp=$this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['thumbedtime_no'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp));  endif; ?></span>

                                                            <div class="clear">	</div>
                                                        </div>
                                                    </div>
                                                    <div class="cleartm">
                                                    </div>
                                                </div>
                                                <div class="original_comment">
                                                    <ul class="sortby">
                                                        <li class="last"><span class="silver_nn">By <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/member/<?php echo $this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['USERID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['uname'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['uname'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['uname'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a> <?php echo ((is_array($_tmp=$this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['time_added'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['showcomments'][$this->_sections['vc']['index']]['time_added'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%I:%M %p") : smarty_modifier_date_format($_tmp, "%I:%M %p")); ?>
</span></li>
                                                    </ul>
                                                    <div class="clear"></div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <?php endfor; endif; ?>
                                    </div>
                                </div>
                                <div class="clear">	</div>	
                                <?php if ($_SESSION['USERID'] > '0' && $this->_tpl_vars['parray']['open'] == '1'): ?>
                                <?php echo '
                                <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
                                <script>
                                    // This example displays an address form, using the autocomplete feature
                                    // of the Google Places API to help users fill in the information.

                                    var placeSearch, autocomplete;
                                    var componentForm = {
                                        street_number: \'short_name\',
                                        route: \'long_name\',
                                        locality: \'long_name\',
                                        administrative_area_level_1: \'short_name\',
                                        country: \'long_name\',
                                        postal_code: \'short_name\'
                                    };

                                    function initialize() {
                                        // Create the autocomplete object, restricting the search
                                        // to geographical location types.
                                        autocomplete = new google.maps.places.Autocomplete(
                                            /** @type {HTMLInputElement} */(document.getElementById(\'autocomplete\')),
                                            //                                            { types: [\'establishment\'] });
                                            { types: [] });
                                        // When the user selects an address from the dropdown,
                                        // populate the address fields in the form.
                                        google.maps.event.addListener(autocomplete, \'place_changed\', function() {
                                            fillInAddress();
                                        });
                                    }

                                    // [START region_fillform]

                                    function fillInAddress() {
                                        // Get the place details from the autocomplete object.
                                        var place = autocomplete.getPlace();
                                        for (var component in componentForm) {
                                            document.getElementById(component).value = \'\';
                                            document.getElementById(component).disabled = false;
                                        }

                                        // Get each component of the address from the place details
                                        // and fill the corresponding field on the form.
                                        for (var i = 0; i < place.address_components.length; i++) {
                                            var addressType = place.address_components[i].types[0];
                                            if (componentForm[addressType]) {
                                                var val = place.address_components[i][componentForm[addressType]];
                                                document.getElementById(addressType).value = val;
                                            }
                                        }
                                    }
                                    // [END region_fillform]
                                </script>
                                '; ?>

                                <form name="qform" name="qform" action="" method="post" style="padding:5px 0;"  onsubmit="qform.subButton.disabled=true;">
                                    <div id="answerQ" style="text-align:left" class="write_area row">
                                        <div class="bb_day bb15"><h3 id="Ascro"><?php echo $this->_tpl_vars['lang247']; ?>
</h3>
                                        </div>
                                        <div class="correct_loop">
                                            <div class="right">
                                                <div class="correct_text">
                                                    <p>Product or Store Name/Details:<br/><input type="text" id="answer" name="answer" class="textarea" style="width:595px" /></p>
                                                    <p>Website address:<br/><input name="website" type="text" id="website" style="width:595px" /></p>
                                                    <p>Address Location:<br/>
                                                        <input id="autocomplete" placeholder="" type="text" style="width:595px;">
                                                        <input type="hidden" name="street_number" id="street_number" value="" />
                                                        <input type="hidden" name="route" id="route" value="" />
                                                        <input type="hidden" name="locality" id="locality" value="" />
                                                        <input type="hidden" name="administrative_area_level_1" id="administrative_area_level_1" value="" />
                                                        <input type="hidden" name="postal_code" id="postal_code" value="" />
                                                        <input type="hidden" name="country" id="country" value="" />
                                                    </p>
                                                    <p><input id="subButton" name="subButton" type="submit" class="button" value="Submit" /></p>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>										
                                    <input type="hidden" name="subans" value="1" />
                                </form>
                                <?php echo '<script>initialize();</script>'; ?>

                                <?php elseif ($_SESSION['USERID'] == ""): ?>
                                <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/login?redirect=<?php echo $this->_tpl_vars['goto']; ?>
" class="answer-button"><?php echo $this->_tpl_vars['lang121']; ?>
</a>
                                <div class="clear">	</div>
                                <?php endif; ?>
                                <div class="related">
                                    <div style="padding-top:30px" class="bb15"><h3 style="color: #fff;font-weight: bold;text-transform: uppercase;"><?php echo $this->_tpl_vars['lang226']; ?>
</h3>
                                    </div>
                                    <div>
                                        <ul class="entry_re">	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['ques']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>                                                    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_seo_url', 'assign' => 'qtitle', 'value' => 'a', 'title' => $this->_tpl_vars['ques'][$this->_sections['i']['index']]['title'], 'PID' => $this->_tpl_vars['ques'][$this->_sections['i']['index']]['PID'])), $this); ?>
                                                    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_member_profilepicture', 'assign' => 'profilepicture', 'value' => 'var', 'USERID' => $this->_tpl_vars['ques'][$this->_sections['i']['index']]['USERID'])), $this); ?>

                                            <li><a class="list_nn" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['qtitle']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['ques'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a></li><?php endfor; endif; ?>
                                        </ul>
                                    </div>
                                </div>
                                <div style="padding-bottom:10px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div id="body_right">
            </div>
            <div class="clear"></div>
        </div>
        <div id="body_900F">
        </div>
    </div>
</div>