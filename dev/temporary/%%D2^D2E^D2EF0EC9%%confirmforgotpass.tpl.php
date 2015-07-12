<?php /* Smarty version 2.6.6, created on 2015-04-02 16:42:45
         compiled from sendmail/confirmforgotpass.tpl */ ?>
Dear <?php echo $this->_tpl_vars['gotusername']; ?>
,

We have received a forgot password request for this account. To reset your password, click this link:

<a href=<?php echo $this->_tpl_vars['baseurl']; ?>
/resetpassword/<?php echo $this->_tpl_vars['passcode']; ?>
><?php echo $this->_tpl_vars['baseurl']; ?>
/resetpassword/<?php echo $this->_tpl_vars['passcode']; ?>
</a>

If you cannot click the link, then visit this url: 

<a href=<?php echo $this->_tpl_vars['baseurl']; ?>
/resetpassword/><?php echo $this->_tpl_vars['baseurl']; ?>
/resetpassword/</a>

And enter the following code:

Code: <?php echo $this->_tpl_vars['passcode']; ?>



Thank You,
<?php echo $this->_tpl_vars['sendername']; ?>