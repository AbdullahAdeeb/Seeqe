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
                            <h1>{insert name=get_static value=var sel=title ID=2}</h1>
                        </div>
                        {include file="error.tpl"}
                        
                        <div class="Center9001RightU">
                            <div class="Center9001Content">
                                <div class="login_area">    
                                    {insert name=get_static value=var sel=value ID=2}
                                </div>
                            </div>
                        </div>
                        
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