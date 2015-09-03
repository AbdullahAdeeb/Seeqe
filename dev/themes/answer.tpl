{literal}
<script>
function starpost(pid) {
        $.post("{/literal}{$baseurl}{literal}/star.php",{"pid":pid},function(res) {
            $('#star'+pid).attr('class','filled-'+res); // switch the star class between filled and unfilled
            $('#star'+pid).html('star: '+res);  // just for testing.. might not be needed when the front end change
        });
}
    


</script>
{/literal}
<div class="common">
	<div id="new_body">
		<div id="body_900">
			<div id="body_left"></div>
			<div id="body_main">
				<div class="title">
					<h1 class="floatl">{$pagetitle}</h1>
					<div class="clear"></div>
				</div>
				<div class="Center9001n">
				
					<div>
						{if ($isfound)}
							{literal} 
							<script type="text/javascript">
								function categoryChange() { 									
									var catFilter = document.getElementById("category_filter");
									var catFilterVal = catFilter.options[catFilter.selectedIndex].text;
									console.log(catFilterVal);
									var list = document.getElementById("list_items").getElementsByTagName("li");
									console.log(list);
									for(var i =0;i<list.length;i++)
									{
										
										if(list[i].innerText.indexOf(catFilterVal)>0)
										{
											console.log("i = "+i +" show = true");
											list[i].style.display = "block";
										
										}
										else
										{
											console.log("i = "+i +" show = false");

											list[i].style.display = "none";

										}
									}
								} 
								</script>
							{/literal}
							<select id="category_filter" onchange="categoryChange()">
								<option value ="">Categories</option> 
								{foreach from=$categories item=category}
									<option value ="{$category[1]}">{$category[1]}</option>
								{/foreach}
							</select>
						{/if}
					</div>
				
					<div class="Center9001RightG">
						<div class="Center9001Content">
						
							<div class="answers_area">
								<div class="bb_list">
									<ul class="list_alist" id="list_items">
									{section name=i loop=$ques}                                            
										{insert name=get_member_profilepicture assign=profilepicture value=var USERID=$ques[i].USERID}                                            
										{insert name=answer_count2 value=a assign=tac pid=$ques[i].PID}                                            
										{insert name=get_seo_url assign=qtitle value=a title=$ques[i].title PID=$ques[i].PID}
										<li>
										<div class="and_rate mag15" onClick="top.location.href='{$baseurl}/{$qtitle}';">{$tac}</div>
										<div class="right"><a class="list_nn" href="{$baseurl}/{$qtitle}">{$ques[i].title|stripslashes}</a><button href="javascript:;" onclick="starpost('{$ques[i].PID}');">Star Me</button>
											<span class="silver_nn">
											<ul class="sortby">
												<li><a href="{$baseurl}/{$ques[i].seo}">{$ques[i].name|stripslashes}</a></li>
												<li>{$lang60} <a href="{$baseurl}/member/{$ques[i].USERID}/{$ques[i].username|stripslashes|truncate:25:" ... ":true}">{$ques[i].username|stripslashes}</a></li>
												<li>{insert name=get_time_to_days_ago value=var time=$ques[i].time_added}</li>
												 
                                                {if ($isfound) && ($ques[i].lastfounddate > 0)}
												<li>Last found on: {$ques[i].lastfounddate|date_format}</li>
                                                {/if}
                                                
                                                <li>City: {if $ques[i].city != ""}{$ques[i].city}{/if}{if $ques[i].city != "" && $ques[i].country != ""}, {/if}{if $ques[i].country != ""}{$ques[i].country}{/if}{if $ques[i].city == "" && $ques[i].country == ""}Global{/if}</li>
                                                <li id="star{$ques[i].PID}" class="filled-{$ques[i].starred}">stars: {$ques[i].starred}</li>
                                                <li class="last">{$tac} {$lang161}</li>
                                                
											</ul>
											<div class="clear"></div>
											</span>
										</div>
										<div class="clear"></div>
<!--                                        </li>-->
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