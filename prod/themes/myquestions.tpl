<link type="text/css" rel="stylesheet"  href="{$cssurl}/form.css"/>
	<div class="common">
        <div id="new_body">
            <div id="body_900">
                <div id="body_left"></div>
                <div id="body_main">
                	<div class="title">
                        <h1 class="floatl">{$lang217}</h1>
                        <div class="floatr"></div>
                        <div class="clear"></div>
                    </div>
                    <div>
                        <ul id="qa_nav" class="sort_sel">
                            <li class="none"><a href="{$baseurl}/account">{$lang1}</a></li>
                            <li class="none"><a href="{$baseurl}/editaccount">{$lang35}</a></li>
                            <li class="none"><a href="{$baseurl}/changeemail">{$lang18}</a></li>
                            <li class="none"><a href="{$baseurl}/changepass">{$lang155}</a></li>
                            <li class="selATags"><a href="{$baseurl}/myquestions">{$lang217}</a></li>
                        </ul>
                        <div class="clear"></div>							
                    </div>
                        
                    <div class="Center9001n">
                        {include file="error.tpl"}
                        {section name=i loop=$ques}
                        {insert name=get_seo_url assign=qtitle value=a title=$ques[i].title PID=$ques[i].PID}
                        <div>
                            <div>
                                <h4>
                                    <a href="{$baseurl}/{$qtitle}">{$ques[i].title|stripslashes}</a>
                                </h4>
                                <p style="padding-bottom:5px;">
                                     {if $ques[i].open eq "0"}
                                     <span style="font-size:12px; color:#F00">{$lang185}</span>
                                     {else}
                                     <a href="{$baseurl}/edit?PID={$ques[i].PID}" style="color:#666">{$lang220}</a> | <a href="{$baseurl}/myquestions?d=1&DID={$ques[i].PID}" style="color:#666">{$lang223}</a>
                                     {/if}
                                </p>
                                <p>
                                    <a href="{$baseurl}/{$qtitle}">{insert name=answer_count pid=$ques[i].PID} {$lang219}</a> | 
                                    <span>{$lang60}:</span>
                                    <a href="{$baseurl}/member/{$ques[i].USERID}/{$ques[i].username|stripslashes|truncate:25:"...":true}">{$ques[i].username|stripslashes|truncate:25:"...":true}</a> | 
                                    {$lang128}
                                    <a href="{$baseurl}/{$ques[i].seo}">{$ques[i].name|stripslashes}</a> | 
                                    <span>{insert name=get_time_to_days_ago value=var time=$ques[i].time_added}</span>
                                </p>
                            </div>
                        </div>
                        <hr />
                        {/section}                        
                        <div class="clear"></div>
                    </div>
    			</div>
                <div id="body_right"></div>
                <div class="clear"></div>
            </div>
            <div id="body_900F"></div>
        </div>
    </div>