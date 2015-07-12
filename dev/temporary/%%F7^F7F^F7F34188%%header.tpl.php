<?php /* Smarty version 2.6.6, created on 2015-07-11 18:59:15
         compiled from header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'header.tpl', 67, false),)), $this); ?>
<!doctype html public "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
    <head>
        <title><?php if ($this->_tpl_vars['pagetitle'] != ""):  echo $this->_tpl_vars['pagetitle']; ?>
 - <?php endif;  echo $this->_tpl_vars['site_name']; ?>
</title>
        <meta name="description" content="<?php if ($this->_tpl_vars['pagetitle'] != ''):  echo $this->_tpl_vars['pagetitle']; ?>
 - <?php endif;  if ($this->_tpl_vars['metadescription'] != ''):  echo $this->_tpl_vars['metadescription']; ?>
 - <?php endif;  echo $this->_tpl_vars['site_name']; ?>
/>
                                          <meta name="keywords" content="<?php if ($this->_tpl_vars['pagetitle'] != ''):  echo $this->_tpl_vars['pagetitle']; ?>
,<?php endif;  if ($this->_tpl_vars['metakeywords'] != ''):  echo $this->_tpl_vars['metakeywords']; ?>
,<?php endif;  echo $this->_tpl_vars['site_name']; ?>
/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/jquery-1.3.2.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
        <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo $this->_tpl_vars['baseurl']; ?>
"/>
        <meta http-equiv="x-ua-compatible" content="ie=7"/>
        <link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['cssurl']; ?>
/css.php"/>
        <link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['cssurl']; ?>
/style.php"/>
        <link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['cssurl']; ?>
/custom.css"/>

        <?php echo '
        <script type="text/javascript">
            //<![CDATA[
            (function() {
                var shr = document.createElement(\'script\');
                shr.setAttribute(\'data-cfasync\', \'false\');
                shr.src = \'//dsms0mj1bbhn4.cloudfront.net/assets/pub/shareaholic.js\';
                shr.type = \'text/javascript\'; shr.async = \'true\';
                shr.onload = shr.onreadystatechange = function() {
                    var rs = this.readyState;
                    if (rs && rs != \'complete\' && rs != \'loaded\') return;
                    var site_id = \'e06dc0c55ae4ce25b2fbf2f0403240cf\';
                    try { Shareaholic.init(site_id); } catch (e) {}
                };
                var s = document.getElementsByTagName(\'script\')[0];
                s.parentNode.insertBefore(shr, s);
            })();
            //]]>
        </script>

        '; ?>


        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'pre-header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </head>
    <body leftmargin="0" topmargin="0" rightmargin="0">
        <div id="fb-root">
        </div>
        <?php if ($this->_tpl_vars['enable_fc'] == '1'): ?>
        <?php echo '
        <script src="http://connect.facebook.net/en_US/all.js"></script>
        <script>
            FB.init({appId: \'';  echo $this->_tpl_vars['FACEBOOK_APP_ID'];  echo '\', status: true,
                     cookie: true, xfbml: true});
            FB.Event.subscribe(\'auth.login\', function(response) {
            });	  
        </script>
        '; ?>

        <?php endif; ?>
        <div id="loadme">
        </div>
        <form name="langselecten" id="langselecten" method="post" style="padding:0; margin:0">		
            <input type="hidden" name="language" value="english" />
        </form>
        <form name="langselectes" id="langselectes" method="post" style="padding:0; margin:0">		
            <input type="hidden" name="language" value="spanish" />
        </form>
        <form name="langselectfr" id="langselectfr" method="post" style="padding:0; margin:0">		
            <input type="hidden" name="language" value="french" />
        </form>
        <div class="common" style="position: fixed; z-index: 1;">
            <div class="topmenu_op">
                <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/"><img class="thelogo" src="<?php echo $this->_tpl_vars['imageurl']; ?>
/logo.png" width="259" height="75" border="0" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['site_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"/></a>
                <div class="top_layer">
                    <span class="thenav">
                        <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/answer?filter=recent">recently asked</a>
                        <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/answer?filter=found">Browse</a>  
                        <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/popular?filter=unanswered">Discover</a>  
                        <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/ask">ask</a>
                    </span>
                    <div class="cleartm">
                    </div>
                </div>
                <div class="acctlogin" >
                    <?php if ($_SESSION['USERID'] != ""): ?>
                    <?php echo '
                    <script type="text/javascript">
                        function loadContent(elementSelector, sourceURL) {
                            $(""+elementSelector+"").load(""+sourceURL+"");
                        }
                    </script>
                    '; ?>

                    <a id="IA_Login" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/account"><?php echo $this->_tpl_vars['lang1']; ?>
</a>
                    <a href="javascript:loadContent('#loadme', '<?php echo $this->_tpl_vars['baseurl']; ?>
/log_out');" class="last"><?php echo $this->_tpl_vars['lang151']; ?>
</a>
                    <?php else: ?>
                    <a id="IA_Login" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/login"><?php echo $this->_tpl_vars['lang46']; ?>
</a>
                    <a href='<?php echo $this->_tpl_vars['baseurl']; ?>
/signup'><?php echo $this->_tpl_vars['lang76']; ?>
</a>
                    <?php endif; ?>
                </div>


            </div>
        </div>

        <div style="position: relative;height: 100px; z-index: 0;"></div>
        </div>