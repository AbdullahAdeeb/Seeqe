<?php /* Smarty version 2.6.6, created on 2015-08-22 15:23:25
         compiled from account.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'account.tpl', 28, false),array('modifier', 'date_format', 'account.tpl', 83, false),array('insert', 'get_member_comments_count', 'account.tpl', 74, false),)), $this); ?>
<link type="text/css" rel="stylesheet"  href="<?php echo $this->_tpl_vars['cssurl']; ?>
/form.css"/>
	<div class="common">
        <div id="new_body">
            <div id="body_900">
                <div id="body_left"></div>
                <div id="body_main">
                	<div class="title">
                        <h1 class="floatl"><?php echo $this->_tpl_vars['lang1']; ?>
</h1>
                        <div class="floatr"></div>
                        <div class="clear"></div>
                    </div>
                    <div>
                        <ul id="qa_nav" class="sort_sel">
                            <li class="selATags"><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
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
                            <li class="none"><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/myquestions"><?php echo $this->_tpl_vars['lang217']; ?>
</a></li>
                            <?php if ($this->_tpl_vars['p']['store'] == 1): ?>
                                <li class="none"><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/import">Import Inventory</a></li>
                            <?php endif; ?>
                        </ul>
                        <div class="clear"></div>							
                    </div>
                        
                    <div class="Center9001n">
                        <div class="title">
                            <h1><?php echo ((is_array($_tmp=$_SESSION['USERNAME'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
 (<a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/member/<?php echo $_SESSION['USERID']; ?>
/<?php echo ((is_array($_tmp=$_SESSION['USERNAME'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"><small><?php echo $this->_tpl_vars['lang104']; ?>
</small></a>)</h1>
                        </div>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "error.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        <div style="width:400px; display:inline; float:left">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit_my">
                            <tr>
                                <th align="center" nowrap="nowrap" style="padding:5px;">&nbsp;
                                    
                                </th>
                                <th align="center" nowrap="nowrap" style="padding:5px;">&nbsp;
                                    				
                                </th>
                            </tr>
                
                            <tr>
                                <td align="right" nowrap="nowrap" style="padding-right:10px;">
                                    <strong><?php echo $this->_tpl_vars['lang105']; ?>
</strong>
                                </td>
                                <td width="80" align="center" style="padding:5px 5px 8px 5px;">
                                    <?php echo $this->_tpl_vars['yq']; ?>

                                </td>
                            </tr>
                        
                            <tr>
                                <td align="right" nowrap="nowrap" style="padding-right:10px;">
                                    <strong><?php echo $this->_tpl_vars['lang106']; ?>
</strong>
                                </td>
                                <td width="80" align="center" style="padding:5px 5px 8px 5px;">
                                    <?php echo $this->_tpl_vars['p']['yourviewed']; ?>

                                </td>
                            </tr>
                            
                            <tr>
                                <td align="right" nowrap="nowrap" style="padding-right:10px;">
                                    <strong><?php echo $this->_tpl_vars['lang107']; ?>
</strong>
                                </td>
                                <td width="80" align="center" style="padding:5px 5px 8px 5px;">
                                    <?php echo $this->_tpl_vars['p']['youviewed']; ?>

                                </td>
                            </tr>
                            
                            <tr>
                                <td align="right" nowrap="nowrap" style="padding-right:10px;">
                                    <strong><?php echo $this->_tpl_vars['lang108']; ?>
</strong>
                                </td>
                                <td width="80" align="center" style="padding:5px 5px 8px 5px;">
                                    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_member_comments_count', 'value' => 'var', 'USERID' => $_SESSION['USERID'])), $this); ?>

                                </td>
                            </tr>
                            
                            <tr>
                                <td align="right" nowrap="nowrap" style="padding-right:10px;">
                                    <strong><?php echo $this->_tpl_vars['lang109']; ?>
</strong>
                                </td>
                                <td width="80" align="center" style="padding:5px 5px 8px 5px;">
                                    <?php echo ((is_array($_tmp=$this->_tpl_vars['p']['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>

                                </td>
                            </tr>
                            
                            <tr>
                                <td align="right" nowrap="nowrap" style="padding-right:10px;">
                                    <strong><?php echo $this->_tpl_vars['lang110']; ?>
</strong>
                                </td>
                                <td width="80" align="center" style="padding:5px 5px 8px 5px;">
                                    <?php if ($this->_tpl_vars['p']['verified'] == '1'): ?>Yes<?php else: ?>No<?php endif; ?>
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="right" nowrap="nowrap" style="padding-right:10px;">
                                    <strong><?php echo $this->_tpl_vars['lang111']; ?>
</strong>
                                </td>
                                <td width="80" align="center" style="padding:5px 5px 8px 5px;">
                                    <?php echo $this->_tpl_vars['p']['points']; ?>

                                </td>
                            </tr>
                            
                            <tr>
                                <td align="right" nowrap="nowrap" style="padding-right:10px;">
                                    <strong><?php echo $this->_tpl_vars['lang112']; ?>
</strong>
                                </td>
                                <td width="80" align="center" style="padding:5px 5px 8px 5px;">
                                    <?php echo $this->_tpl_vars['p']['profileviews']; ?>

                                </td>
                            </tr>
                            
                        </table>
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