<?php /* Smarty version 2.6.6, created on 2015-04-13 04:31:32
         compiled from connect.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'connect.tpl', 18, false),)), $this); ?>
<link type="text/css" rel="stylesheet"  href="<?php echo $this->_tpl_vars['cssurl']; ?>
/form.css"/>
	<div class="common">
        <div id="new_body">
            <div id="body_900">
                <div id="body_left"></div>
                <div id="body_main">
                        
                    <div class="Center9001n">
                        <div class="title">
                            <h1><?php echo $this->_tpl_vars['lang258']; ?>
</h1>
                        </div>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "error.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        <form method="post" action="<?php echo $this->_tpl_vars['baseurl']; ?>
/connect.php">
                        <div class="Center9001RightU">
                            <div class="Center9001Content">
                                <div class="login_area">    
                                    <div class="margin20D" style="line-height: 2">
                                        <input type="text" id="l_username" name="l_username" value= "<?php echo ((is_array($_tmp=$this->_tpl_vars['user_username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" class="Input_Big" size="25" maxlength="100" />
                                        <br />
                                    </div>
                                    <div class="margin20D">
    
                                        <div class="floatl"><label><input type="submit" id="LoginButton" class="button" value="<?php echo $this->_tpl_vars['lang138']; ?>
" /></label></div>
                                        <div class="floatl grey12">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="jlog" id="jlog" value="1" />
                        </form>
                        <?php echo '
						<script type="text/javascript" charset="utf-8">
                            $(function(){
                                $(\'#l_username\').focus();
                            });
                        </script>
                        '; ?>

                        <div class="Center9001LeftU">
                            
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