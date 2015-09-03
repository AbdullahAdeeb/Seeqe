<?php /* Smarty version 2.6.6, created on 2015-08-22 15:23:23
         compiled from login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'login.tpl', 20, false),)), $this); ?>
<link type="text/css" rel="stylesheet"  href="<?php echo $this->_tpl_vars['cssurl']; ?>
/form.css"/>
	<div class="common">
        <div id="new_body">
            <div id="body_900">
                <div id="body_left"></div>
                <div id="body_main">
                        
                    <div class="Center9001n">
                        <div class="title">
                            <h1><?php echo $this->_tpl_vars['lang46']; ?>
</h1>
                        </div>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "error.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        <form method="post" action="<?php echo $this->_tpl_vars['baseurl']; ?>
/login" class="login-form">
                        <div class="Center9001RightU">
                            <div class="Center9001Content">
                                <div class="login_area">    
                                    <div class="margin20D" style="line-height: 2">
                                        <strong><?php echo $this->_tpl_vars['lang154']; ?>
:</strong>
                                        <br />
                                        <input type="text" id="lusername" name="lusername" value= "<?php echo ((is_array($_tmp=$this->_tpl_vars['lusername'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" class="Input_Big" size="25" maxlength="100" />
                                        <br />
                                    </div>
                                    <div class="margin20D" style="line-height: 2">
                                        <strong><?php echo $this->_tpl_vars['lang155']; ?>
:</strong>
                                        <br />
                                        <input type="password" id="lpassword" name="lpassword" class="Input_Big" autocomplete="off" size="25" maxlength="40" />
                                        <br /><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/forgot"><?php echo $this->_tpl_vars['lang41']; ?>
</a> <input type="checkbox" name="autologin" id="autologin" value="1" /> Remember Me
                                    </div>
                                    <div class="margin20D">
    
                                        <div class="floatl"><label><input type="submit" id="LoginButton" class="button" value="<?php echo $this->_tpl_vars['lang150']; ?>
" /></label></div>
                                        <div class="floatl grey12">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="otheracc-main">
									  	<?php if ($this->_tpl_vars['enable_fc'] == '1'): ?>
                                        <div class="connectbyscriptolution"><a href="https://www.facebook.com/dialog/permissions.request?app_id=<?php echo $this->_tpl_vars['FACEBOOK_APP_ID']; ?>
&display=page&next=<?php echo $this->_tpl_vars['baseurl']; ?>
/&response_type=code&fbconnect=1&perms=email" class="scriptolutionconnect"><?php echo $this->_tpl_vars['lang257']; ?>
</a></div>
                                        <br />
                                        <div style="clear:both"></div>
                                        <?php endif; ?>                                      
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="authenticate" value="1" />
                        <input type="hidden" name="redirect" value="<?php echo ((is_array($_tmp=$_REQUEST['redirect'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" />
                        </form>
                        <?php echo '
						<script type="text/javascript" charset="utf-8">
                            $(function(){
                                $(\'#lusername\').focus();
                            });
                        </script>
                        '; ?>

                        <div class="Center9001LeftU signup-form">
                            <div class="right_layerA">
                                <div class="layer_contentA">
                                    <h3><?php echo $this->_tpl_vars['lang139']; ?>
</h3>
                                    <div class="floatl" style="margin-bottom:20px"><a class="sharenowadd" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/signup" style="text-decoration:none"><span><?php echo $this->_tpl_vars['lang140']; ?>
</span></a></div><div class="clear"></div>    
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