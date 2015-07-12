<!doctype html public "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<title>{if $pagetitle ne ""}{$pagetitle} - {/if}{$site_name}</title>
<meta name="description" content="{if $pagetitle ne ''}{$pagetitle} - {/if}{if $metadescription ne ''}{$metadescription} - {/if}{$site_name}/>
<meta name="keywords" content="{if $pagetitle ne ''}{$pagetitle},{/if}{if $metakeywords ne ''}{$metakeywords},{/if}{$site_name}/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script language="javascript" type="text/javascript" src="{$baseurl}/js/jquery-1.3.2.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
<link rel="alternate" type="application/rss+xml" title="RSS" href="{$baseurl}"/>
<meta http-equiv="x-ua-compatible" content="ie=7"/>
<link type="text/css" rel="stylesheet" href="{$cssurl}/css.php"/>
<link type="text/css" rel="stylesheet" href="{$cssurl}/style.php"/>
<link type="text/css" rel="stylesheet" href="{$cssurl}/custom.css"/>
{include file='pre-header.tpl'}
</head>
<body leftmargin="0" topmargin="0" rightmargin="0">
	<div id="fb-root">
	</div>
	{if $enable_fc eq "1"}
	{literal}
	<script src="http://connect.facebook.net/en_US/all.js"></script>
	<script>
	  FB.init({appId: '{/literal}{$FACEBOOK_APP_ID}{literal}', status: true,
	           cookie: true, xfbml: true});
	  FB.Event.subscribe('auth.login', function(response) {
	  });	  
	</script>
	{/literal}
	{/if}
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
			<a href="{$baseurl}/"><img class="thelogo" src="{$imageurl}/logo.png" width="259" height="75" border="0" alt="{$site_name|stripslashes}"/></a>
			<div class="top_layer">
								<span class="thenav"><a href="{$baseurl}/answer?filter=recent">recently asked</a>  <a href="{$baseurl}/answer?filter=found">recently found</a>  <a href="{$baseurl}/popular">popular</a>  <a href="{$baseurl}/ask">seeqe</a></span>
				<div class="cleartm">
				</div>
			</div>
			 <div class="acctlogin" >
							{if $smarty.session.USERID ne ""}
                                {literal}
                                <script type="text/javascript">
                                function loadContent(elementSelector, sourceURL) {
                                $(""+elementSelector+"").load(""+sourceURL+"");
                                }
                                </script>
                                {/literal}
                                <a id="IA_Login" href="{$baseurl}/account">{$lang1}</a>
                                <a href="javascript:loadContent('#loadme', '{$baseurl}/log_out');" class="last">{$lang151}</a>
                             {else}
                            	<a id="IA_Login" href="{$baseurl}/login">{$lang46}</a>
                                <a href='{$baseurl}/signup'>{$lang76}</a>
                             {/if}
			</div>
		
			
		</div>
		</div>
		<div style="position: relative;height: 100px; z-index: 0;"></div>
	</div>