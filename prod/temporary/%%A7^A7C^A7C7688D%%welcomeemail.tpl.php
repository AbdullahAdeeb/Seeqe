<?php /* Smarty version 2.6.6, created on 2015-06-22 14:59:46
         compiled from sendmail/welcomeemail.tpl */ ?>
<?php echo $this->_tpl_vars['lang209']; ?>
 <?php echo $_SESSION['USERNAME']; ?>
,

<?php echo $this->_tpl_vars['lang210']; ?>
:

<a href=<?php echo $this->_tpl_vars['baseurl']; ?>
/confirmemail/<?php echo $this->_tpl_vars['verifycode']; ?>
><?php echo $this->_tpl_vars['baseurl']; ?>
/confirmemail/<?php echo $this->_tpl_vars['verifycode']; ?>
</a>

<?php echo $this->_tpl_vars['lang211']; ?>
: 

<a href=<?php echo $this->_tpl_vars['baseurl']; ?>
/confirmemail/><?php echo $this->_tpl_vars['baseurl']; ?>
/confirmemail/</a>

<?php echo $this->_tpl_vars['lang212']; ?>
:

<?php echo $this->_tpl_vars['lang213']; ?>
: <?php echo $this->_tpl_vars['verifycode']; ?>



<?php echo $this->_tpl_vars['lang214']; ?>
,
<?php echo $this->_tpl_vars['sendername']; ?>
