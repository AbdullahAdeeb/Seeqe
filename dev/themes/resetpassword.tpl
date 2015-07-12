<link type="text/css" rel="stylesheet"  href="{$cssurl}/form.css"/>
	<div class="common">
        <div id="new_body">
            <div id="body_900">
                <div id="body_left"></div>
                <div id="body_main">
                	<div class="title">
                        <h1 class="floatl">{$site_name|stripslashes}</h1>
                        <div class="floatr"></div>
                        <div class="clear"></div>
                    </div>
                        
                    <div class="Center9001n">
                        <div class="title">
                            <h1>{$lang169}</h1>
                        </div>
                        {include file="error.tpl"}
                        <form method="post" action="{$baseurl}/resetpassword/">
                        <div class="Center9001RightU">
                            <div class="Center9001Content">
                                <div class="login_area">    
                                    <div class="margin20D" style="line-height: 2">
                                        <input type="text" id="code" name="code" value= "{$code}" class="Input_Big" size="25" maxlength="100" />
                                        <br />
                                    </div>
                                    <div class="margin20D">
                                        <div class="floatl"><label><input type="submit" class="button" value="{$lang138}" /></label></div>
                                        <div class="floatl grey12">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                        <div class="Center9001LeftU">
                            <div class="right_layerA">
                                <div class="layer_contentA">
                                    <center>
                                    {insert name=get_advertisement AID=1}
                                    </center>    
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