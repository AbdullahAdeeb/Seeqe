<?php /* Smarty version 2.6.6, created on 2015-08-22 15:24:09
         compiled from error.tpl */ ?>
<?php if ($this->_tpl_vars['error'] != ""): ?>
<div id="MessagesBox" style="padding-bottom:10px;"><div class="FailPanel"><?php echo $this->_tpl_vars['error']; ?>
</div></div>
<?php endif;  if ($this->_tpl_vars['message'] != ""): ?>
<div id="MessagesBox" style="padding-bottom:10px;"><div class="SuccessPanel"><?php echo $this->_tpl_vars['message']; ?>
</div></div>
<?php endif; ?>