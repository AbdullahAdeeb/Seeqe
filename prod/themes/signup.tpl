<link type="text/css" rel="stylesheet"  href="{$cssurl}/form.css"/>

<div class="common">
    <div id="new_body">
        <div id="body_900">
            <div id="body_left"></div>
            <div id="body_main">

                <div class="Center9001n">
                    <div class="title">
                        <h1>{$lang76} to SEEQE</h1>
                    </div>
                    {include file="error.tpl"}
                    <form method="post" action="{$baseurl}/signup">
                        <div class="Center9001RightU">
                            <div class="Center9001Content">
                                <div class="login_area"> 
                                    <div class="margin20D" style="line-height: 2">
                                        <strong>{$lang264}:</strong>
                                        <input type="checkbox" id="store" name="store" class="Input_Big" size="25" 
                                               {if $store eq 'on'}
                                               checked
                                               {/if}
                                               />
                                        <br />
                                    </div>
                                    <div class="margin20D" style="line-height: 2">
                                        <strong>{$lang154}:</strong>
                                        <br />
                                        <input type="text" id="username" name="username" value= "{$username|stripslashes}" class="Input_Big" size="25" maxlength="100" />
                                        <br />
                                    </div>
                                    <div class="margin20D" style="line-height: 2">
                                        <strong>{$lang155}:</strong>
                                        <br />
                                        <input type="password" id="password" name="password" class="Input_Big" autocomplete="off" size="25" maxlength="40" />
                                    </div>
                                    <div class="margin20D" style="line-height: 2">
                                        <strong>{$lang172}:</strong>
                                        <br />
                                        <input type="password" id="confirmpassword" name="confirmpassword" class="Input_Big" autocomplete="off" size="25" maxlength="40" />
                                    </div>
                                    <div class="margin20D" style="line-height: 2">
                                        <strong>{$lang173}:</strong>
                                        <br />
                                        <input type="text" id="email" name="email" value= "{$email|stripslashes}" class="Input_Big" size="25" maxlength="100" />
                                        <br />
                                    </div>
                                    <div id="store_form" style="display:none">
                                        <div class="margin20D" style="line-height: 2">
                                            <strong>{$lang260}:</strong>
                                            <br />
                                            <input type="text" id="address" name="address" value= "{$address|stripslashes}" class="Input_Big" size="25" maxlength="100" />
                                            <br />
                                        </div>
                                        <div class="margin20D" style="line-height: 2">
                                            <strong>{$lang261}:</strong>
                                            <br />
                                            <input type="text" id="city" name="city" value= "{$city|stripslashes}" class="Input_Big" size="25" maxlength="100" />
                                            <br />
                                        </div>
                                        <div class="margin20D" style="line-height: 2">
                                            <strong>{$lang262}: ({$lang263})</strong>
                                            <br />
                                            <input type="text" id="website" name="website" value= "{$website|stripslashes}" class="Input_Big" size="25" maxlength="100" />
                                            <br />
                                        </div>
                                    </div>
<!--
                                    <div class="margin20D" style="line-height: 2">
                                        <strong>{$lang174}:</strong>
                                        <br />
                                        <input type="text" id="imagecode" name="imagecode" value= "" class="Input_Big" size="5" maxlength="5" />
                                        <br /><img src="{$baseurl}/include/captcha.php" style="border: 1px solid #999999" />
                                    </div>
-->
                                    
                                    <div class="g-recaptcha Input_Big" data-sitekey="6LcU-wcTAAAAADpNU5KEr09AqrwdY-ffGNGkzrax"></div>

                                    <br>
                                    <div class="margin20D">
                                        <div class="floatl"><label><input type="submit" class="button" name="register" value="{$lang76}" /></label></div>
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
                            $('#username').focus();

                            // handle store form
                            $('#store').click(function(){
                                checkStoreForm();
                            });
                            checkStoreForm();

                        });

                        function checkStoreForm(){
                            if($('#store').is(":checked")){
                                $("#store_form").css({"display":"block"});
                                $(".otheracc-main").css({"display":"none"});
                            }else{
                                $("#store_form").css({"display":"none"});
                                $(".otheracc-main").css({"display":"block"});
                            }
                        }

                    </script>
                    <script src='https://www.google.com/recaptcha/api.js'></script>
                    {/literal}
                    <div class="Center9001LeftU">
                        <div class="right_layerA">
                            <div class="layer_contentA">
                                <h3>{$lang175}</h3>
                                <div class="floatl" style="margin-bottom:20px"><a class="sharenowadd" href="{$baseurl}/login" style="text-decoration:none"><span>{$lang176}</span></a></div><div class="clear"></div>    
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
