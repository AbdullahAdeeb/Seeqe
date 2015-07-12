<?php /* Smarty version 2.6.6, created on 2015-04-29 21:35:12
         compiled from termsofuse.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'termsofuse.tpl', 8, false),array('insert', 'get_static', 'termsofuse.tpl', 15, false),)), $this); ?>
<link type="text/css" rel="stylesheet"  href="<?php echo $this->_tpl_vars['cssurl']; ?>
/form.css"/>
	<div class="common">
        <div id="new_body">
            <div id="body_900">
                <div id="body_left"></div>
                <div id="body_main">
                	<div class="title">
                        <h1 class="floatl"><?php echo ((is_array($_tmp=$this->_tpl_vars['site_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</h1>
                        <div class="floatr"></div>
                        <div class="clear"></div>
                    </div>
                        
                    <div class="Center9001n">
                        <div class="title">
                            <h1><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_static', 'value' => 'var', 'sel' => 'title', 'ID' => 1)), $this); ?>
</h1>
                        </div>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "error.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        
                        <div class="Center9001RightU">
                            <div class="Center9001Content">
                                <div class="login_area">    
                                    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_static', 'value' => 'var', 'sel' => 'value', 'ID' => 1)), $this); ?>

                                </div>
                            </div>
                        </div>
                        
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