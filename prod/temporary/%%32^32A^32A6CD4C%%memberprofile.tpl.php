<?php /* Smarty version 2.6.6, created on 2015-06-30 11:29:23
         compiled from memberprofile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'memberprofile.tpl', 7, false),array('modifier', 'date_format', 'memberprofile.tpl', 27, false),array('modifier', 'truncate', 'memberprofile.tpl', 55, false),array('insert', 'get_member_profilepicture', 'memberprofile.tpl', 17, false),array('insert', 'answer_count2', 'memberprofile.tpl', 45, false),array('insert', 'get_seo_url', 'memberprofile.tpl', 46, false),array('insert', 'get_time_to_days_ago', 'memberprofile.tpl', 56, false),array('insert', 'answer_count', 'memberprofile.tpl', 93, false),)), $this); ?>
	<div class="common">
        <div id="new_body">
            <div id="body_900">
                <div id="body_left"></div>
                <div id="body_main">    
                    <div class="title">
                        <h1 class="floatl"><?php echo ((is_array($_tmp=$this->_tpl_vars['p']['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</h1>
                        <div class="floatr"><?php echo $this->_tpl_vars['lang111']; ?>
: <?php echo $this->_tpl_vars['p']['points']; ?>
</div>
                        <div class="clear"></div>
                    </div>
                    <div class="Center9001n">
                        <div class="Center9001RightG">
                            <div class="Center9001Content">
                            
                            	<div style="padding:10px;">
                                	<div style="float:left; display:inline">
                                    	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_member_profilepicture', 'assign' => 'profilepicture', 'value' => 'var', 'USERID' => $this->_tpl_vars['p']['USERID'])), $this); ?>

                            			<img src="<?php echo $this->_tpl_vars['membersprofilepicurl']; ?>
/thumbs/<?php echo $this->_tpl_vars['profilepicture']; ?>
" width="100" height="100" title="" class="who_avatar" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['p']['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /><br /><p  style="color: #fff;font-weight: bold;"><?php echo ((is_array($_tmp=$this->_tpl_vars['p']['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</p>
                                        <div class="clear"></div>
                            		</div>
                                    <div style="float:left; padding-left:10px; display:inline">
                                        <p style="color: #fff;font-weight: bold;"><label><?php echo $this->_tpl_vars['lang182']; ?>
: </label><?php echo ((is_array($_tmp=$this->_tpl_vars['p']['firstname'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['p']['lastname'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</p>
                                        <p style="color: #fff;font-weight: bold;"><label><?php echo $this->_tpl_vars['lang157']; ?>
: </label><?php echo $this->_tpl_vars['qtotal']; ?>
</p>     
                                        <p style="color: #fff;font-weight: bold;"><label><?php echo $this->_tpl_vars['lang158']; ?>
: </label><?php echo $this->_tpl_vars['atotal']; ?>
</p>  
                                        <p style="color: #fff;font-weight: bold;"><label><?php echo $this->_tpl_vars['lang159']; ?>
: </label><?php echo $this->_tpl_vars['btotal']; ?>
</p>  
                                        <p style="color: #fff;font-weight: bold;"><label><?php echo $this->_tpl_vars['lang112']; ?>
: </label><?php echo $this->_tpl_vars['p']['profileviews']; ?>
</p> 
                                        <p style="color: #fff;font-weight: bold;"><label><?php echo $this->_tpl_vars['lang109']; ?>
: </label><?php echo ((is_array($_tmp=$this->_tpl_vars['p']['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</p>                      
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                    <?php echo $this->_tpl_vars['lang156']; ?>
:<br /><?php echo ((is_array($_tmp=$this->_tpl_vars['p']['description'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>

                                    <div class="clear"></div>
                                </div>
                                <div class="clear"></div>
                            
                                <div class="answers_area">
                                    
                                    
                                    <div id="qtab">
                                        <div class="bb_day bb15"><h3><?php echo $this->_tpl_vars['lang160']; ?>
</h3></div>                                    
                                        <div class="bb_list">
                                            <ul class="list_alist">	
                                                <?php unset($this->_sections['i']);
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
?>
                                                <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_member_profilepicture', 'assign' => 'profilepicture', 'value' => 'var', 'USERID' => $this->_tpl_vars['ques'][$this->_sections['i']['index']]['USERID'])), $this); ?>

                                                <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'answer_count2', 'value' => 'a', 'assign' => 'tac', 'pid' => $this->_tpl_vars['ques'][$this->_sections['i']['index']]['PID'])), $this); ?>

                                                <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_seo_url', 'assign' => 'qtitle', 'value' => 'a', 'title' => $this->_tpl_vars['ques'][$this->_sections['i']['index']]['title'], 'PID' => $this->_tpl_vars['ques'][$this->_sections['i']['index']]['PID'])), $this); ?>

                                                <li>
                                                    <div class="and_rate mag15" onClick="top.location.href='<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['qtitle']; ?>
';"><?php echo $this->_tpl_vars['tac']; ?>
</div>
                                                    <div class="right">
                                                        <!-- <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['qtitle']; ?>
"><img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/icon_ask_1.gif" border="0" align="absmiddle" /></a>  -->
                                                        <a class="list_nn" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['qtitle']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['ques'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a>
                                                        <span class="silver_nn">
                                                            <ul class="sortby">
                                                                <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['ques'][$this->_sections['i']['index']]['seo']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['ques'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a></li>
                                                                <li><?php echo $this->_tpl_vars['lang60']; ?>
 <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/member/<?php echo $this->_tpl_vars['ques'][$this->_sections['i']['index']]['USERID']; ?>
/<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['ques'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 25, "...", true) : smarty_modifier_truncate($_tmp, 25, "...", true)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['ques'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a></li>
                                                                <li><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_time_to_days_ago', 'value' => 'var', 'time' => $this->_tpl_vars['ques'][$this->_sections['i']['index']]['time_added'])), $this); ?>
</li>
                                                                <li class="last"><?php echo $this->_tpl_vars['tac']; ?>
 <?php echo $this->_tpl_vars['lang161']; ?>
</li>
                                                            </ul>
                                                            <div class="clear"></div>
                                                        </span>
                                                    </div>
                                                    <div class="clear"></div>
                                                </li>
                                                <?php endfor; endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div id="qtab">
                                        <div class="bb_day bb15"><h3><?php echo $this->_tpl_vars['lang161']; ?>
</h3></div>                                    
                                        <div class="bb_list">
                                            <ul class="list_alist">	
                                                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['ans']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>
                                                <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_seo_url', 'assign' => 'qtitle', 'value' => 'a', 'title' => $this->_tpl_vars['ans'][$this->_sections['i']['index']]['title'], 'PID' => $this->_tpl_vars['ans'][$this->_sections['i']['index']]['PID'])), $this); ?>

                                                <li>
                                                    <div class="and_rate mag15" onClick="top.location.href='<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['qtitle']; ?>
';"><?php echo $this->_tpl_vars['tac']; ?>
</div>
                                                    <div class="right">
                                                        <!-- <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['qtitle']; ?>
"><img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/icon_ask_1.gif" border="0" align="absmiddle" /></a>  -->
                                                        <a class="list_nn" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['qtitle']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['ans'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a>
                                                        <span class="silver_nn">
                                                            <ul class="sortby">
                                                                <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['ans'][$this->_sections['i']['index']]['seo']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['ans'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a></li>
                                                                <li><?php echo $this->_tpl_vars['lang60']; ?>
 <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/member/<?php echo $this->_tpl_vars['ans'][$this->_sections['i']['index']]['USERID']; ?>
/<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['ans'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 25, "...", true) : smarty_modifier_truncate($_tmp, 25, "...", true)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['ans'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a></li>
                                                                <li><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_time_to_days_ago', 'value' => 'var', 'time' => $this->_tpl_vars['ans'][$this->_sections['i']['index']]['time_added'])), $this); ?>
</li>
                                                                <li class="last"><?php echo $this->_tpl_vars['tac']; ?>
 <?php echo $this->_tpl_vars['lang161']; ?>
</li>
                                                            </ul>
                                                            <div class="clear"></div>
                                                            <h2 style="margin-top:10px;"><?php echo ((is_array($_tmp=$this->_tpl_vars['p']['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
's <?php echo $this->_tpl_vars['lang164']; ?>
</h2>
                                                            <p><?php echo ((is_array($_tmp=$this->_tpl_vars['ans'][$this->_sections['i']['index']]['details'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</p>
                                                            <p style="margin:2px 0 0 0;padding:0;color:#696969;">
                                                                <?php echo $this->_tpl_vars['lang165']; ?>

                                                                <span><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_time_to_days_ago', 'value' => 'var', 'time' => $this->_tpl_vars['ans'][$this->_sections['i']['index']]['ctime'])), $this); ?>
</span> |
                                                                <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['qtitle']; ?>
"><?php echo $this->_tpl_vars['lang122']; ?>
 (<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'answer_count', 'value' => 'a', 'pid' => $this->_tpl_vars['ans'][$this->_sections['i']['index']]['PID'])), $this); ?>
)</a>
                                                            </p> 
                                                        </span>
                                                    </div>
                                                    <div class="clear"></div>
                                                </li>
                                                <?php endfor; endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div id="qtab">
                                        <div class="bb_day bb15"><h3><?php echo $this->_tpl_vars['lang159']; ?>
</h3></div>                                    
                                        <div class="bb_list">
                                            <ul class="list_alist">	
                                                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['bans']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>
                                                <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_seo_url', 'assign' => 'qtitle', 'value' => 'a', 'title' => $this->_tpl_vars['bans'][$this->_sections['i']['index']]['title'], 'PID' => $this->_tpl_vars['bans'][$this->_sections['i']['index']]['PID'])), $this); ?>

                                                <li>
                                                    <div class="and_rate mag15" onClick="top.location.href='<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['qtitle']; ?>
';"><?php echo $this->_tpl_vars['tac']; ?>
</div>
                                                    <div class="right">
                                                        <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['qtitle']; ?>
"><img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/icon_ask_1.gif" border="0" align="absmiddle" /></a> 
                                                        <a class="list_nn" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['qtitle']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['bans'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a>
                                                        <span class="silver_nn">
                                                            <ul class="sortby">
                                                                <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['bans'][$this->_sections['i']['index']]['seo']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['bans'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a></li>
                                                                <li><?php echo $this->_tpl_vars['lang60']; ?>
 <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/member/<?php echo $this->_tpl_vars['bans'][$this->_sections['i']['index']]['USERID']; ?>
/<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['bans'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 25, "...", true) : smarty_modifier_truncate($_tmp, 25, "...", true)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['bans'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a></li>
                                                                <li><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_time_to_days_ago', 'value' => 'var', 'time' => $this->_tpl_vars['bans'][$this->_sections['i']['index']]['time_added'])), $this); ?>
</li>
                                                                <li class="last"><?php echo $this->_tpl_vars['tac']; ?>
 <?php echo $this->_tpl_vars['lang161']; ?>
</li>
                                                            </ul>
                                                            <div class="clear"></div>
                                                            <h2 style="margin-top:10px;"><?php echo ((is_array($_tmp=$this->_tpl_vars['p']['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
's <?php echo $this->_tpl_vars['lang164']; ?>
</h2>
                                                            <span><?php echo ((is_array($_tmp=$this->_tpl_vars['bans'][$this->_sections['i']['index']]['details'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</span>
                                                            <p style="margin:2px 0 0 0;padding:0;color:#696969;">
                                                                <?php echo $this->_tpl_vars['lang165']; ?>

                                                                <span><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_time_to_days_ago', 'value' => 'var', 'time' => $this->_tpl_vars['bans'][$this->_sections['i']['index']]['ctime'])), $this); ?>
</span> |
                                                                <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['qtitle']; ?>
"><?php echo $this->_tpl_vars['lang122']; ?>
 (<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'answer_count', 'value' => 'a', 'pid' => $this->_tpl_vars['bans'][$this->_sections['i']['index']]['PID'])), $this); ?>
)</a>
                                                            </p> 
                                                        </span>
                                                    </div>
                                                    <div class="clear"></div>
                                                </li>
                                                <?php endfor; endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                                                                                            
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
    			</div>
                <div id="body_right"></div>
                <div class="clear"></div>
            </div>
            <div id="body_900F"></div>
        </div>
    </div>