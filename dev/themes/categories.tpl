<link type="text/css" rel="stylesheet"  href="{$cssurl}/form.css"/>
	<div class="common">
        <div id="new_body">
            <div id="body_900">
                <div id="body_left"></div>
                <div id="body_main">
                	&nbsp;
                        
                    <div class="Center9001n">
                        <div class="title">
                            <h1>{$lang153}</h1>
                        </div>
                        {include file="error.tpl"}
                        
                        <div class="Center9001RightU">
                            <div class="Center9001Content">
                                <div class="login_area">    
                                    <ul style="clear:both;margin:5px 0 0 7px;font-size:1.3em;">
                                        {section name=i loop=$cats}
                                        {insert name=get_subcategories assign=scats parent=$cats[i].CATID}
                                        <li>
                                            {if $scats|@count GT "0"}
                                            <img src="{$imageurl}/Offline.gif" />
                                            {/if}
                                            <a href="{$baseurl}/{$cats[i].seo|stripslashes}">{$cats[i].name|stripslashes}</a>	
                                        </li>
                                        {if $scats|@count GT "0"}
                                        <ul style="margin-left:25px;">
                                            {section name=j loop=$scats}
                                            <li>
                                                <span style="padding-left:12px"></span>
                                                <a href="{$baseurl}/{$scats[j].seo|stripslashes}">{$scats[j].name|stripslashes}</a>	
                                            </li>
                                            {/section}
                                        </ul>
                                        {/if}
                                        {/section}                
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="Center9001LeftU">
                            <div class="right_layerA">
                                <div class="layer_contentA">
                                    <center>
                                    {insert name=get_advertisement AID=1}
                                    </center>  
                                    <div class="clear"></div>
                                    
                                    <div class="col_row">
                                        <h3>{$lang238}</h3>
                                        <ul class="list_qs">
                                            {section name=i loop=$l}
                                            <li><a href="{$baseurl}/{$l[i].seo|stripslashes}">{$l[i].name|stripslashes}</a></li>
                                            {/section}
                                        </ul>
                                        <div class="clear"></div>
                                    </div>  
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