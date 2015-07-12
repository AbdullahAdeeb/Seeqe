<link type="text/css" rel="stylesheet"  href="{$cssurl}/form.css"/>
	<div class="common">
        <div id="new_body">
            <div id="body_900">
                <div id="body_left"></div>
                <div id="body_main">
                	<div class="title">
                        <h1 class="floatl">{$lang222}</h1>
                        <div class="floatr"></div>
                        <div class="clear"></div>
                    </div>
                    <div>
                        <ul id="qa_nav" class="sort_sel">
                            <li class="none"><span><a href="{$baseurl}/account">{$lang1}</a></span></li>
                            <li class="none"><span><a href="{$baseurl}/editaccount">{$lang35}</a></span></li>
                            <li class="none"><span><a href="{$baseurl}/changeemail">{$lang18}</a></span></li>
                            <li class="none"><span><a href="{$baseurl}/changepass">{$lang155}</a></span></li>
                            <li class="selATags"><span><div class="text"><a href="{$baseurl}/myquestions">{$lang217}</a></div><div class="t"><img src="{$imageurl}/arr_pub_red.gif"/></div></span></li>
                        </ul>
                        <div class="clear"></div>							
                    </div>
                        
                    <div class="Center9001n">
                        {include file="error.tpl"}
                        <form id="qform" name="qform" method="post" action="{$baseurl}/edit?PID={$q.PID}">
                        <div class="Center9001RightU">
                            <div class="Center9001Content">
                                <div class="login_area">    
                                    <div class="margin20D" style="line-height: 2">
                                        <strong>{$lang222}:</strong>
                                        <br />
                                        <textarea name="qtitle" id="qtitle" style="width:475px;height:100px;">{$q.title|stripslashes}</textarea>
                                        <br />
                                    </div>
                                    <div class="margin20D" style="line-height: 2">
                                        <strong>{$lang62}:</strong>
                                        <br />
                                        <select name="category" id="category" style="margin-left:20px; font-size:24px">
                                            {section name=i loop=$cats}
                                            <option value="{$cats[i].CATID}" {if $q.category eq $cats[i].CATID}selected="selected"{/if}>{$cats[i].name|stripslashes}</option>
                                            {if $cats[i].CATID ne "0"}
                                                {insert name=get_subcategories assign=scats parent=$cats[i].CATID}
                                                {section name=j loop=$scats}
                                                <option value="{$scats[j].CATID}" {if $q.category eq $scats[j].CATID}selected="selected"{/if}>- {$scats[j].name|stripslashes}</option>
                                                {/section}
                                            {/if}
                                            {/section}  
                                        </select>
                                        <br />
                                    </div>
                                    <div class="margin20D" style="line-height: 2">
                                        <strong>{$lang218}:</strong>
                                        <br />
                                        <textarea name="question" id="question" style="width:475px;height:100px;">{$q.question|stripslashes}</textarea>
                                        <br />
                                    </div>
                                    <div class="margin20D">
                                        <div class="floatl"><label><input type="submit" class="button"  id="edit" name="edit" value="{$lang220}" /></label></div>
                                        <div class="floatl grey12">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="subform" value="yes" />
                        </form>                        
                        <div class="clear"></div>
                    </div>
    			</div>
                <div id="body_right"></div>
                <div class="clear"></div>
            </div>
            <div id="body_900F"></div>
        </div>
    </div>