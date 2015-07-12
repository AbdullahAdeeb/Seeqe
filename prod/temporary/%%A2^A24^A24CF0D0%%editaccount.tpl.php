<?php /* Smarty version 2.6.6, created on 2015-06-25 09:25:46
         compiled from editaccount.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'editaccount.tpl', 33, false),array('insert', 'get_member_profilepicture', 'editaccount.tpl', 53, false),)), $this); ?>
<link type="text/css" rel="stylesheet"  href="<?php echo $this->_tpl_vars['cssurl']; ?>
/form.css"/>
	<div class="common">
        <div id="new_body">
            <div id="body_900">
                <div id="body_left"></div>
                <div id="body_main">
                	<div class="title">
                        <h1 class="floatl"><?php echo $this->_tpl_vars['lang35']; ?>
</h1>
                        <div class="floatr"></div>
                        <div class="clear"></div>
                    </div>
                    <div>
                        <ul id="qa_nav" class="sort_sel">
                            <li class="none"><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/account"><?php echo $this->_tpl_vars['lang1']; ?>
</a></li>
                            <li class="selATags"><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/editaccount"><?php echo $this->_tpl_vars['lang35']; ?>
</a></li>
                            <li class="none"><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/changeemail"><?php echo $this->_tpl_vars['lang18']; ?>
</a></li>
                            <li class="none"><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/changepass"><?php echo $this->_tpl_vars['lang155']; ?>
</a></li>
                            <li class="none"><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
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
                        
                        <form method="post" action="<?php echo $this->_tpl_vars['baseurl']; ?>
/editaccount" enctype="multipart/form-data">
                        <div class="Center9001RightU">
                            <div class="Center9001Content">
                                <div class="login_area">    
                                    <div class="margin20D" style="line-height: 2">
                                        <strong><?php echo $this->_tpl_vars['lang143']; ?>
:</strong>
                                        <br />
                                        <input type="text" id="firstname" name="firstname" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['memberarray'][0]['firstname'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" class="Input_Big" size="25" maxlength="100" />
                                        <br />
                                    </div>
                                    <div class="margin20D" style="line-height: 2">
                                        <strong><?php echo $this->_tpl_vars['lang144']; ?>
:</strong>
                                        <br />
                                        <input type="text" id="lastname" name="lastname" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['memberarray'][0]['lastname'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" class="Input_Big" size="25" maxlength="40" />
                                        <br />
                                    </div>
                                    
                                    <div class="margin20D" style="line-height: 2">
                                        <strong><?php echo $this->_tpl_vars['lang145']; ?>
:</strong>
                                        <br />
                                        <textarea name="vdescription" id="vdescription" style="width:475px;height:100px;"><?php echo ((is_array($_tmp=$this->_tpl_vars['memberarray'][0]['description'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</textarea>
                                        <br />
                                    </div>
                                    <div class="margin20D" style="line-height: 2">
                                        <strong><?php echo $this->_tpl_vars['lang146']; ?>
:</strong>
                                        <br />
                                        <input type="file" name="profilepicimage" id="profilepicimage" />
                                        <br /><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_member_profilepicture', 'assign' => 'profilepicture', 'value' => 'var', 'USERID' => $this->_tpl_vars['memberarray'][0]['USERID'])), $this); ?>
<img src="<?php echo $this->_tpl_vars['membersprofilepicurl']; ?>
/thumbs/<?php echo $this->_tpl_vars['profilepicture']; ?>
?time=<?php echo time(); ?>
" />
                                    </div>
                                    
                                    <div class="margin20D">
    
                                        <div class="floatl"><label><input type="submit" id="change" name="change" class="button" value="<?php echo $this->_tpl_vars['lang138']; ?>
" /></label></div>
                                        <div class="floatl grey12">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                        
                        <div class="clear"></div>
                    </div>
    			</div>
                <div id="body_right"></div>
                <div class="clear"></div>
            </div>
            <div id="body_900F"></div>
        </div>
    </div>