<?php /* Smarty version 2.6.6, created on 2015-06-29 17:40:04
         compiled from myquestions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'get_seo_url', 'myquestions.tpl', 26, false),array('insert', 'answer_count', 'myquestions.tpl', 40, false),array('insert', 'get_time_to_days_ago', 'myquestions.tpl', 45, false),array('modifier', 'stripslashes', 'myquestions.tpl', 30, false),array('modifier', 'truncate', 'myquestions.tpl', 42, false),)), $this); ?>
<link type="text/css" rel="stylesheet"  href="<?php echo $this->_tpl_vars['cssurl']; ?>
/form.css"/>
	<div class="common">
        <div id="new_body">
            <div id="body_900">
                <div id="body_left"></div>
                <div id="body_main">
                	<div class="title">
                        <h1 class="floatl"><?php echo $this->_tpl_vars['lang217']; ?>
</h1>
                        <div class="floatr"></div>
                        <div class="clear"></div>
                    </div>
                    <div>
                        <ul id="qa_nav" class="sort_sel">
                            <li class="none"><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/account"><?php echo $this->_tpl_vars['lang1']; ?>
</a></li>
                            <li class="none"><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/editaccount"><?php echo $this->_tpl_vars['lang35']; ?>
</a></li>
                            <li class="none"><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/changeemail"><?php echo $this->_tpl_vars['lang18']; ?>
</a></li>
                            <li class="none"><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/changepass"><?php echo $this->_tpl_vars['lang155']; ?>
</a></li>
                            <li class="selATags"><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/myquestions"><?php echo $this->_tpl_vars['lang217']; ?>
</a></li>
                        </ul>
                        <div class="clear"></div>							
                    </div>
                        
                    <div class="Center9001n">
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "error.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_seo_url', 'assign' => 'qtitle', 'value' => 'a', 'title' => $this->_tpl_vars['ques'][$this->_sections['i']['index']]['title'], 'PID' => $this->_tpl_vars['ques'][$this->_sections['i']['index']]['PID'])), $this); ?>

                        <div>
                            <div>
                                <h4>
                                    <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['qtitle']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['ques'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a>
                                </h4>
                                <p style="padding-bottom:5px;">
                                     <?php if ($this->_tpl_vars['ques'][$this->_sections['i']['index']]['open'] == '0'): ?>
                                     <span style="font-size:12px; color:#F00"><?php echo $this->_tpl_vars['lang185']; ?>
</span>
                                     <?php else: ?>
                                     <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/edit?PID=<?php echo $this->_tpl_vars['ques'][$this->_sections['i']['index']]['PID']; ?>
" style="color:#666"><?php echo $this->_tpl_vars['lang220']; ?>
</a> | <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/myquestions?d=1&DID=<?php echo $this->_tpl_vars['ques'][$this->_sections['i']['index']]['PID']; ?>
" style="color:#666"><?php echo $this->_tpl_vars['lang223']; ?>
</a>
                                     <?php endif; ?>
                                </p>
                                <p>
                                    <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['qtitle']; ?>
"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'answer_count', 'pid' => $this->_tpl_vars['ques'][$this->_sections['i']['index']]['PID'])), $this); ?>
 <?php echo $this->_tpl_vars['lang219']; ?>
</a> | 
                                    <span><?php echo $this->_tpl_vars['lang60']; ?>
:</span>
                                    <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/member/<?php echo $this->_tpl_vars['ques'][$this->_sections['i']['index']]['USERID']; ?>
/<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['ques'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 25, "...", true) : smarty_modifier_truncate($_tmp, 25, "...", true)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['ques'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 25, "...", true) : smarty_modifier_truncate($_tmp, 25, "...", true)); ?>
</a> | 
                                    <?php echo $this->_tpl_vars['lang128']; ?>

                                    <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['ques'][$this->_sections['i']['index']]['seo']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['ques'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a> | 
                                    <span><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_time_to_days_ago', 'value' => 'var', 'time' => $this->_tpl_vars['ques'][$this->_sections['i']['index']]['time_added'])), $this); ?>
</span>
                                </p>
                            </div>
                        </div>
                        <hr />
                        <?php endfor; endif; ?>                        
                        <div class="clear"></div>
                    </div>
    			</div>
                <div id="body_right"></div>
                <div class="clear"></div>
            </div>
            <div id="body_900F"></div>
        </div>
    </div>