<link type="text/css" rel="stylesheet"  href="{$cssurl}/form.css"/>
	<div class="common">
        <div id="new_body">
            <div id="body_900">
                <div id="body_left"></div>
                <div id="body_main">
                        
                    <div class="Center9001n">
                        <div class="title">
                            <h1>{$lang46}</h1>
                        </div>
                        {include file="error.tpl"}
                        <form method="post" action="{$baseurl}/login" class="login-form">
                        <div class="Center9001RightU">
                            <div class="Center9001Content">
                                <div class="login_area">    
                                    <div class="margin20D" style="line-height: 2">
                                        <strong>{$lang154}:</strong>
                                        <br />
                                        <input type="text" id="lusername" name="lusername" value= "{$lusername|stripslashes}" class="Input_Big" size="25" maxlength="100" />
                                        <br />
                                    </div>
                                    <div class="margin20D" style="line-height: 2">
                                        <strong>{$lang155}:</strong>
                                        <br />
                                        <input type="password" id="lpassword" name="lpassword" class="Input_Big" autocomplete="off" size="25" maxlength="40" />
                                        <br /><a href="{$baseurl}/forgot">{$lang41}</a> <input type="checkbox" name="autologin" id="autologin" value="1" /> Remember Me
                                    </div>
                                    <div class="margin20D">
    
                                        <div class="floatl"><label><input type="submit" id="LoginButton" class="button" value="{$lang150}" /></label></div>
                                        <div class="floatl grey12">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="otheracc-main">
									  	{if $enable_fc eq "1"}
                                        <div class="connectbyscriptolution"><a href="https://www.facebook.com/dialog/permissions.request?app_id={$FACEBOOK_APP_ID}&display=page&next={$baseurl}/&response_type=code&fbconnect=1&perms=email" class="scriptolutionconnect">{$lang257}</a></div>
                                        <br />
                                        <div style="clear:both"></div>
                                        {/if}                                      
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="authenticate" value="1" />
                        <input type="hidden" name="redirect" value="{$smarty.request.redirect|stripslashes}" />
                        </form>
                        {literal}
						<script type="text/javascript" charset="utf-8">
                            $(function(){
                                $('#lusername').focus();
                            });
                        </script>
                        {/literal}
                        <div class="Center9001LeftU signup-form">
                            <div class="right_layerA">
                                <div class="layer_contentA">
                                    <h3>{$lang139}</h3>
                                    <div class="floatl" style="margin-bottom:20px"><a class="sharenowadd" href="{$baseurl}/signup" style="text-decoration:none"><span>{$lang140}</span></a></div><div class="clear"></div>    
                                </div>
                            </div>
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