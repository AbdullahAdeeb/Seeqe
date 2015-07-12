	<div class="common">
        <div id="new_body">
            <div id="body_900">
                <div id="body_left"></div>
                <div id="body_main">    
                    <div class="title">
                        <h1 class="floatl">{$p.username|stripslashes}</h1>
                        <div class="floatr">{$lang111}: {$p.points}</div>
                        <div class="clear"></div>
                    </div>
                    <div class="Center9001n">
                        <div class="Center9001RightG">
                            <div class="Center9001Content">
                            
                            	<div style="padding:10px;">
                                	<div style="float:left; display:inline">
                                    	{insert name=get_member_profilepicture assign=profilepicture value=var USERID=$p.USERID}
                            			<img src="{$membersprofilepicurl}/thumbs/{$profilepicture}" width="100" height="100" title="" class="who_avatar" alt="{$p.username|stripslashes}" /><br /><p  style="color: #fff;font-weight: bold;">{$p.username|stripslashes}</p>
                                        <div class="clear"></div>
                            		</div>
                                    <div style="float:left; padding-left:10px; display:inline">
                                        <p style="color: #fff;font-weight: bold;"><label>{$lang182}: </label>{$p.firstname|stripslashes} {$p.lastname|stripslashes}</p>
                                        <p style="color: #fff;font-weight: bold;"><label>{$lang157}: </label>{$qtotal}</p>     
                                        <p style="color: #fff;font-weight: bold;"><label>{$lang158}: </label>{$atotal}</p>  
                                        <p style="color: #fff;font-weight: bold;"><label>{$lang159}: </label>{$btotal}</p>  
                                        <p style="color: #fff;font-weight: bold;"><label>{$lang112}: </label>{$p.profileviews}</p> 
                                        <p style="color: #fff;font-weight: bold;"><label>{$lang109}: </label>{$p.addtime|date_format}</p>                      
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                    {$lang156}:<br />{$p.description|stripslashes}
                                    <div class="clear"></div>
                                </div>
                                <div class="clear"></div>
                            
                                <div class="answers_area">
                                    
                                    
                                    <div id="qtab">
                                        <div class="bb_day bb15"><h3>{$lang160}</h3></div>                                    
                                        <div class="bb_list">
                                            <ul class="list_alist">	
                                                {section name=i loop=$ques}
                                                {insert name=get_member_profilepicture assign=profilepicture value=var USERID=$ques[i].USERID}
                                                {insert name=answer_count2 value=a assign=tac pid=$ques[i].PID}
                                                {insert name=get_seo_url assign=qtitle value=a title=$ques[i].title PID=$ques[i].PID}
                                                <li>
                                                    <div class="and_rate mag15" onClick="top.location.href='{$baseurl}/{$qtitle}';">{$tac}</div>
                                                    <div class="right">
                                                        <!-- <a href="{$baseurl}/{$qtitle}"><img src="{$imageurl}/icon_ask_1.gif" border="0" align="absmiddle" /></a>  -->
                                                        <a class="list_nn" href="{$baseurl}/{$qtitle}">{$ques[i].title|stripslashes}</a>
                                                        <span class="silver_nn">
                                                            <ul class="sortby">
                                                                <li><a href="{$baseurl}/{$ques[i].seo}">{$ques[i].name|stripslashes}</a></li>
                                                                <li>{$lang60} <a href="{$baseurl}/member/{$ques[i].USERID}/{$ques[i].username|stripslashes|truncate:25:"...":true}">{$ques[i].username|stripslashes}</a></li>
                                                                <li>{insert name=get_time_to_days_ago value=var time=$ques[i].time_added}</li>
                                                                <li class="last">{$tac} {$lang161}</li>
                                                            </ul>
                                                            <div class="clear"></div>
                                                        </span>
                                                    </div>
                                                    <div class="clear"></div>
                                                </li>
                                                {/section}
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div id="qtab">
                                        <div class="bb_day bb15"><h3>{$lang161}</h3></div>                                    
                                        <div class="bb_list">
                                            <ul class="list_alist">	
                                                {section name=i loop=$ans}
                                                {insert name=get_seo_url assign=qtitle value=a title=$ans[i].title PID=$ans[i].PID}
                                                <li>
                                                    <div class="and_rate mag15" onClick="top.location.href='{$baseurl}/{$qtitle}';">{$tac}</div>
                                                    <div class="right">
                                                        <!-- <a href="{$baseurl}/{$qtitle}"><img src="{$imageurl}/icon_ask_1.gif" border="0" align="absmiddle" /></a>  -->
                                                        <a class="list_nn" href="{$baseurl}/{$qtitle}">{$ans[i].title|stripslashes}</a>
                                                        <span class="silver_nn">
                                                            <ul class="sortby">
                                                                <li><a href="{$baseurl}/{$ans[i].seo}">{$ans[i].name|stripslashes}</a></li>
                                                                <li>{$lang60} <a href="{$baseurl}/member/{$ans[i].USERID}/{$ans[i].username|stripslashes|truncate:25:"...":true}">{$ans[i].username|stripslashes}</a></li>
                                                                <li>{insert name=get_time_to_days_ago value=var time=$ans[i].time_added}</li>
                                                                <li class="last">{$tac} {$lang161}</li>
                                                            </ul>
                                                            <div class="clear"></div>
                                                            <h2 style="margin-top:10px;">{$p.username|stripslashes}'s {$lang164}</h2>
                                                            <p>{$ans[i].details|stripslashes}</p>
                                                            <p style="margin:2px 0 0 0;padding:0;color:#696969;">
                                                                {$lang165}
                                                                <span>{insert name=get_time_to_days_ago value=var time=$ans[i].ctime}</span> |
                                                                <a href="{$baseurl}/{$qtitle}">{$lang122} ({insert name=answer_count value=a pid=$ans[i].PID})</a>
                                                            </p> 
                                                        </span>
                                                    </div>
                                                    <div class="clear"></div>
                                                </li>
                                                {/section}
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div id="qtab">
                                        <div class="bb_day bb15"><h3>{$lang159}</h3></div>                                    
                                        <div class="bb_list">
                                            <ul class="list_alist">	
                                                {section name=i loop=$bans}
                                                {insert name=get_seo_url assign=qtitle value=a title=$bans[i].title PID=$bans[i].PID}
                                                <li>
                                                    <div class="and_rate mag15" onClick="top.location.href='{$baseurl}/{$qtitle}';">{$tac}</div>
                                                    <div class="right">
                                                        <a href="{$baseurl}/{$qtitle}"><img src="{$imageurl}/icon_ask_1.gif" border="0" align="absmiddle" /></a> 
                                                        <a class="list_nn" href="{$baseurl}/{$qtitle}">{$bans[i].title|stripslashes}</a>
                                                        <span class="silver_nn">
                                                            <ul class="sortby">
                                                                <li><a href="{$baseurl}/{$bans[i].seo}">{$bans[i].name|stripslashes}</a></li>
                                                                <li>{$lang60} <a href="{$baseurl}/member/{$bans[i].USERID}/{$bans[i].username|stripslashes|truncate:25:"...":true}">{$bans[i].username|stripslashes}</a></li>
                                                                <li>{insert name=get_time_to_days_ago value=var time=$bans[i].time_added}</li>
                                                                <li class="last">{$tac} {$lang161}</li>
                                                            </ul>
                                                            <div class="clear"></div>
                                                            <h2 style="margin-top:10px;">{$p.username|stripslashes}'s {$lang164}</h2>
                                                            <span>{$bans[i].details|stripslashes}</span>
                                                            <p style="margin:2px 0 0 0;padding:0;color:#696969;">
                                                                {$lang165}
                                                                <span>{insert name=get_time_to_days_ago value=var time=$bans[i].ctime}</span> |
                                                                <a href="{$baseurl}/{$qtitle}">{$lang122} ({insert name=answer_count value=a pid=$bans[i].PID})</a>
                                                            </p> 
                                                        </span>
                                                    </div>
                                                    <div class="clear"></div>
                                                </li>
                                                {/section}
                                            </ul>
                                        </div>
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