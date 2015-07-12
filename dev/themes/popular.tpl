	<div class="common">
        <div id="new_body">
            <div id="body_900">
                <div id="body_left"></div>
                <div id="body_main">    
                    <div class="title">
                        <h1 class="floatl">{$lang49}</h1>
                        <!-- <div class="floatr"><a href="{$baseurl}/ask" class="sharenowadd"><span>{$lang114}</span></a></div> -->
                        <div class="clear"></div>
                    </div>
                    <div class="Center9001n">
                        <div class="Center9001RightG">
                            <div class="Center9001Content">
                            
                            	<div class="list_area">
									<div class="subsort">
                                    	<ul class="subsort">
                                        	<li {if $filter eq "all"}class="selATags"{/if}><a href="{$baseurl}/popular?filter=all">{$lang227}</a></li>
											<li {if $filter eq "unanswered"}class="selATags"{/if}><a href="{$baseurl}/popular?filter=unanswered">{$lang246}</a></li>
										</ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="answers_area">
                                    <!-- <div class="bb_day bb15"><h3>{$lang49}</h3></div>    -->                                 
                                    <div class="bb_list">
                                        <ul class="list_alist">	
                                            {section name=i loop=$ques}
                                            {insert name=get_member_profilepicture assign=profilepicture value=var USERID=$ques[i].USERID}
                                            {insert name=answer_count2 value=a assign=tac pid=$ques[i].PID}
                                            {insert name=get_seo_url assign=qtitle value=a title=$ques[i].title PID=$ques[i].PID}
                                            <li>
                                                <div class="and_rate mag15" onClick="top.location.href='{$baseurl}/{$qtitle}';">{$tac}</div>
                                                <div class="right">
                                                    <a href="{$baseurl}/{$qtitle}"><!-- <img src="{$imageurl}/icon_ask_1.gif" border="0" align="absmiddle" /> --></a> 
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
                                    <div id="divAskQuesPager" class="page_num">
                                    	{$pagelinks}
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