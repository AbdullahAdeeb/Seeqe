<?php /* Smarty version 2.6.6, created on 2015-05-18 00:02:20
         compiled from category.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'category.tpl', 7, false),array('modifier', 'truncate', 'category.tpl', 41, false),array('insert', 'get_member_profilepicture', 'category.tpl', 30, false),array('insert', 'answer_count2', 'category.tpl', 31, false),array('insert', 'get_seo_url', 'category.tpl', 32, false),array('insert', 'get_time_to_days_ago', 'category.tpl', 42, false),)), $this); ?>
	<div class="common">
        <div id="new_body">
            <div id="body_900">
                <div id="body_left"></div>
                <div id="body_main">    
                    <div class="title">
                        <h1 class="floatl"><?php if ($this->_tpl_vars['parent'] != '0'): ?><a href='<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['pseo']; ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['pname'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a> | <?php endif; ?><a href='<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['nseo']; ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a></h1>
                        <!-- <div class="floatr"><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/ask" class="sharenowadd"><span><?php echo $this->_tpl_vars['lang114']; ?>
</span></a></div> -->
                        <div class="clear"></div>
                    </div>
                    <div class="Center9001n">
                        <div class="Center9001RightG">
                            <div class="Center9001Content">
                            
                            	<div class="list_area">
									<div class="subsort">
                                    	<ul class="subsort">
                                        	<li <?php if ($this->_tpl_vars['filter'] == 'all'): ?>class="selATags"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['nseo']; ?>
?filter=all"><?php echo $this->_tpl_vars['lang227']; ?>
</a></li>
											<li <?php if ($this->_tpl_vars['filter'] == 'unanswered'): ?>class="selATags"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['nseo']; ?>
?filter=unanswered"><?php echo $this->_tpl_vars['lang246']; ?>
</a></li>
										</ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="answers_area">
                                    
                                    <div class="bb_day bb15"><h3><?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
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
                                    <div id="divAskQuesPager" class="page_num">
                                    	<?php echo $this->_tpl_vars['pagelinks']; ?>

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