<link type="text/css" rel="stylesheet"  href="{$cssurl}/form.css"/>
	<div class="common">
        <div id="new_body">
            <div id="body_900">
                <div id="body_left"></div>
                <div id="body_main">
                        
                    <div class="Center9001n">
                        <div class="title">
                            <h1>{$lang258}</h1>
                        </div>
                        {include file="error.tpl"}
                        <form method="post" action="{$baseurl}/connect.php">
                        <div class="Center9001RightU">
                            <div class="Center9001Content">
                                <div class="login_area">    
                                    <div class="margin20D" style="line-height: 2">
                                        <input type="text" id="l_username" name="l_username" value= "{$user_username|stripslashes}" class="Input_Big" size="25" maxlength="100" />
                                        <br />
                                    </div>
                                    <div class="margin20D">
    
                                        <div class="floatl"><label><input type="submit" id="LoginButton" class="button" value="{$lang138}" /></label></div>
                                        <div class="floatl grey12">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="jlog" id="jlog" value="1" />
                        </form>
                        {literal}
						<script type="text/javascript" charset="utf-8">
                            $(function(){
                                $('#l_username').focus();
                            });
                        </script>
                        {/literal}
                        <div class="Center9001LeftU">
                            
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