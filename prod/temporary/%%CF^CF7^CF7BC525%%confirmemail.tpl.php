<?php /* Smarty version 2.6.6, created on 2015-04-09 10:36:00
         compiled from sendmail/confirmemail.tpl */ ?>
To confirm your e-mail address click this link:

<a href=<?php echo $this->_tpl_vars['baseurl']; ?>
/confirmemail/<?php echo $this->_tpl_vars['verifycode']; ?>
><?php echo $this->_tpl_vars['baseurl']; ?>
/confirmemail/<?php echo $this->_tpl_vars['verifycode']; ?>
</a>

If you cannot click the link, then visit this url: 

<a href=<?php echo $this->_tpl_vars['baseurl']; ?>
/confirmemail/><?php echo $this->_tpl_vars['baseurl']; ?>
/confirmemail/</a>

And enter the following code:

Code: <?php echo $this->_tpl_vars['verifycode']; ?>



Thank You,
<?php echo $this->_tpl_vars['sendername']; ?>
