<?php /* Smarty version 2.6.6, created on 2015-06-25 09:25:50
         compiled from changeemail.tpl */ ?>
<link type="text/css" rel="stylesheet"  href="<?php echo $this->_tpl_vars['cssurl']; ?>
/form.css"/>
	<div class="common">
        <div id="new_body">
            <div id="body_900">
                <div id="body_left"></div>
                <div id="body_main">
                	<div class="title">
                        <h1 class="floatl"><?php echo $this->_tpl_vars['lang18']; ?>
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
                            <li class="selATags"><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
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
/changeemail">
                        <div class="Center9001RightU">
                            <div class="Center9001Content">
                                <div class="login_area">    
                                    <div class="margin20D" style="line-height: 2">
                                        <strong><?php echo $this->_tpl_vars['lang129']; ?>
:</strong>
                                        <br />
                                        <input type="text" id="email" name="email" value="<?php echo $this->_tpl_vars['getemail']; ?>
" class="Input_Big" size="25" maxlength="100" />
                                        <br />
                                    </div>
                                    <div class="margin20D" style="line-height: 2">
                                        <strong><?php echo $this->_tpl_vars['lang130']; ?>
: <?php echo $this->_tpl_vars['emailverified'];  if ($this->_tpl_vars['ev1'] == '0'): ?> <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/resendconfirmation/<?php echo $_SESSION['USERID']; ?>
"><small>(<?php echo $this->_tpl_vars['lang131']; ?>
)</small></a><?php endif; ?></strong>
                                        <br />
                                    </div>
                                    <div class="margin20D">
                                        <div class="floatl"><label><input type="submit" id="change" name="change" class="button" value="<?php echo $this->_tpl_vars['lang132']; ?>
" /></label></div>
                                        <div class="floatl grey12">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="change" value="<?php echo $this->_tpl_vars['lang132']; ?>
" />
                        </form>
                        
                        <form method="post" action="<?php echo $this->_tpl_vars['baseurl']; ?>
/changeemail">
                        <div class="Center9001RightU">
                            <div class="Center9001Content">
                                <div class="login_area">    
                                    <div class="margin20D" style="line-height: 2">
                                        <strong><?php echo $this->_tpl_vars['lang201']; ?>
:</strong>
                                        <br />
                                        <input type="radio" value="1" name="notify" <?php if ($this->_tpl_vars['p']['notify'] == '1'): ?>checked="checked"<?php endif; ?> /><?php echo $this->_tpl_vars['lang202']; ?>

                                        <br />
                                        <input type="radio" value="0" name="notify" <?php if ($this->_tpl_vars['p']['notify'] == '0'): ?>checked="checked"<?php endif; ?> /><?php echo $this->_tpl_vars['lang203']; ?>

                                        <br />
                                    </div>                                    
                                    <div class="margin20D">
                                        <div class="floatl"><label><input type="submit" id="nsub" name="nsub" class="button" value="<?php echo $this->_tpl_vars['lang138']; ?>
" /></label></div>
                                        <div class="floatl grey12">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="nsub" value="<?php echo $this->_tpl_vars['lang138']; ?>
" />
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