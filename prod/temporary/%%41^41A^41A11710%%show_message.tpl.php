<?php /* Smarty version 2.6.6, created on 2015-04-28 22:04:23
         compiled from administrator/show_message.tpl */ ?>
<?php if ($this->_tpl_vars['error'] != ""): ?>
								<ul class="messages">
                                    <li class="error-msg">
                                    	<ul><li><?php echo $this->_tpl_vars['error']; ?>
</li></ul>
                                    </li>
                                </ul>
<?php endif;  if ($this->_tpl_vars['message'] != ""): ?>
								<ul class="messages">
                                	<li class="success-msg">
                                    	<ul><li><?php echo $this->_tpl_vars['message']; ?>
</li></ul>
                                    </li>
                                </ul>
<?php endif; ?>