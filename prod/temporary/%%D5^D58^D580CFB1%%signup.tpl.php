<?php /* Smarty version 2.6.6, created on 2015-07-02 21:20:58
         compiled from signup.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'signup.tpl', 30, false),)), $this); ?>
<link type="text/css" rel="stylesheet"  href="<?php echo $this->_tpl_vars['cssurl']; ?>
/form.css"/>

<div class="common">
    <div id="new_body">
        <div id="body_900">
            <div id="body_left"></div>
            <div id="body_main">

                <div class="Center9001n">
                    <div class="title">
                        <h1><?php echo $this->_tpl_vars['lang76']; ?>
 to SEEQE</h1>
                    </div>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "error.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <form method="post" action="<?php echo $this->_tpl_vars['baseurl']; ?>
/signup">
                        <div class="Center9001RightU">
                            <div class="Center9001Content">
                                <div class="login_area"> 
                                    <div class="margin20D" style="line-height: 2">
                                        <strong><?php echo $this->_tpl_vars['lang264']; ?>
:</strong>
                                        <input type="checkbox" id="store" name="store" class="Input_Big" size="25" 
                                               <?php if ($this->_tpl_vars['store'] == 'on'): ?>
                                               checked
                                               <?php endif; ?>
                                               />
                                        <br />
                                    </div>
                                    <div class="margin20D" style="line-height: 2">
                                        <strong><?php echo $this->_tpl_vars['lang154']; ?>
:</strong>
                                        <br />
                                        <input type="text" id="username" name="username" value= "<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" class="Input_Big" size="25" maxlength="100" />
                                        <br />
                                    </div>
                                    <div class="margin20D" style="line-height: 2">
                                        <strong><?php echo $this->_tpl_vars['lang155']; ?>
:</strong>
                                        <br />
                                        <input type="password" id="password" name="password" class="Input_Big" autocomplete="off" size="25" maxlength="40" />
                                    </div>
                                    <div class="margin20D" style="line-height: 2">
                                        <strong><?php echo $this->_tpl_vars['lang172']; ?>
:</strong>
                                        <br />
                                        <input type="password" id="confirmpassword" name="confirmpassword" class="Input_Big" autocomplete="off" size="25" maxlength="40" />
                                    </div>
                                    <div class="margin20D" style="line-height: 2">
                                        <strong><?php echo $this->_tpl_vars['lang173']; ?>
:</strong>
                                        <br />
                                        <input type="text" id="email" name="email" value= "<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" class="Input_Big" size="25" maxlength="100" />
                                        <br />
                                    </div>
                                    <div id="store_form" style="display:none">
                                        <div class="margin20D" style="line-height: 2">
                                            <strong><?php echo $this->_tpl_vars['lang260']; ?>
:</strong>
                                            <br />
                                            <input type="text" id="address" name="address" value= "<?php echo ((is_array($_tmp=$this->_tpl_vars['address'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" class="Input_Big" size="25" maxlength="100" />
                                            <br />
                                        </div>
                                        <div class="margin20D" style="line-height: 2">
                                            <strong><?php echo $this->_tpl_vars['lang261']; ?>
:</strong>
                                            <br />
                                            <input type="text" id="city" name="city" value= "<?php echo ((is_array($_tmp=$this->_tpl_vars['city'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" class="Input_Big" size="25" maxlength="100" />
                                            <br />
                                        </div>
                                        <div class="margin20D" style="line-height: 2">
                                            <strong><?php echo $this->_tpl_vars['lang262']; ?>
: (<?php echo $this->_tpl_vars['lang263']; ?>
)</strong>
                                            <br />
                                            <input type="text" id="website" name="website" value= "<?php echo ((is_array($_tmp=$this->_tpl_vars['website'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" class="Input_Big" size="25" maxlength="100" />
                                            <br />
                                        </div>
                                    </div>
<!--
                                    <div class="margin20D" style="line-height: 2">
                                        <strong><?php echo $this->_tpl_vars['lang174']; ?>
:</strong>
                                        <br />
                                        <input type="text" id="imagecode" name="imagecode" value= "" class="Input_Big" size="5" maxlength="5" />
                                        <br /><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/include/captcha.php" style="border: 1px solid #999999" />
                                    </div>
-->
                                    
                                    <div class="g-recaptcha Input_Big" data-sitekey="6LcU-wcTAAAAADpNU5KEr09AqrwdY-ffGNGkzrax"></div>

                                    <br>
                                    <div class="margin20D">
                                        <div class="floatl"><label><input type="submit" class="button" name="register" value="<?php echo $this->_tpl_vars['lang76']; ?>
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
                            $(\'#username\').focus();

                            // handle store form
                            $(\'#store\').click(function(){
                                checkStoreForm();
                            });
                            checkStoreForm();

                        });

                        function checkStoreForm(){
                            if($(\'#store\').is(":checked")){
                                $("#store_form").css({"display":"block"});
                                $(".otheracc-main").css({"display":"none"});
                            }else{
                                $("#store_form").css({"display":"none"});
                                $(".otheracc-main").css({"display":"block"});
                            }
                        }

                    </script>
                    <script src=\'https://www.google.com/recaptcha/api.js\'></script>
                    '; ?>

                    <div class="Center9001LeftU">
                        <div class="right_layerA">
                            <div class="layer_contentA">
                                <h3><?php echo $this->_tpl_vars['lang175']; ?>
</h3>
                                <div class="floatl" style="margin-bottom:20px"><a class="sharenowadd" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/login" style="text-decoration:none"><span><?php echo $this->_tpl_vars['lang176']; ?>
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