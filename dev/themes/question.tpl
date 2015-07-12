{literal}

<script language="javascript" type="text/javascript">

    function VDM(id,nb) {
        $('#Dvote'+id).css('display','none');
        $.post("{/literal}{$baseurl}/vote_yes.php{literal}",{"id":id,"nb":nb},function(html) {
            $('#D2vote'+id).html(''+html+'').fadeIn();
            $('#D2vote'+id).css('display','');
        });
        $.post("{/literal}{$baseurl}/vote_yes_date.php{literal}",{"id":id,"nb":nb},function(html) {
            $('#CDvoteyesdate'+id).html(html).fadeIn(); 
        });
    }

    function VDM_BF(id,nb) {
        $('#Dvoteb'+id).css('display','none');
        $.post("{/literal}{$baseurl}/vote_no.php{literal}",{"id":id,"nb":nb},function(html) {
            $('#D2voteb'+id).html(''+html+'').fadeIn();
            $('#D2voteb'+id).css('display','');	
        });

        $.post("{/literal}{$baseurl}/vote_no_date.php{literal}",{"id":id,"nb":nb},function(html) {
            $('#CDvotenodate'+id).html(html).fadeIn(); 
        });
    }

    function CVDM(id,nb) {
        $('#CDvote'+id).css('display','none');
        $.post("{/literal}{$baseurl}/votec_yes.php{literal}",{"id":id,"nb":nb},function(html) {
            $('#CD2vote'+id).html(''+html+'').fadeIn();
            $('#CD2vote'+id).css('display','');
        });

        $.post("{/literal}{$baseurl}/votec_yes_date.php{literal}",{"id":id,"nb":nb},function(html) {
            $('#CDvoteyesbdate'+id).html(html).fadeIn(); 
        });

    }

    function CVDM_BF(id,nb) {
        $('#CDvoteb'+id).css('display','none');
        $.post("{/literal}{$baseurl}/votec_no.php{literal}",{"id":id,"nb":nb},function(html) {
            $('#CD2vote'+id).html(''+html+'').fadeIn();
            $('#CD2vote'+id).css('display','');
        });

        $.post("{/literal}{$baseurl}/votec_no_date.php{literal}",{"id":id,"nb":nb},function(html) {
            $('#CDvoteyesbdate'+id).html(html).fadeIn(); 
        });
    }

    function reportqAbuse(id) {	
        $('#qAbuse'+id).fadeOut();
        $.post("{/literal}{$baseurl}/report_question.php{literal}",{"id":id},function(html) {
            $('#qAbuse'+id).html(''+html+'').fadeIn();
        });
    }

    function reportcAbuse(id) {
        $('#cAbuse'+id).fadeOut();
        $.post("{/literal}{$baseurl}/report_answer.php{literal}",{"id":id},function(html) {
            $('#cAbuse'+id).html(''+html+'').fadeIn();	
        });
    }

</script>

{/literal}

<div class="common">
    <div id="new_body">
        <div id="body_900">
            <div id="body_left">
            </div>
            <div id="body_main" style="margin-top: 25px;">
                <div class="title">
                    {insert name=clickable_link value=var assign=la text=$parray.title}
                    <!-- <div class="floatr"><a href="{$baseurl}/ask" class="sharenowadd"><span>{$lang114}</span></a></div>
<div class="clear"></div> -->
                </div>
                <div class="Center9001n">
                    {include file="error.tpl"}
                    <div class="Center9001RightG">
                        <div class="Center9001Content">
                            <div class="answers_area">
                                <div class="original">
                                    <div class="right">
                                        <div class="original_text">
                                            <div class="original_text_line"><h1>{$la|stripslashes}</h1>
                                                <div id="QuseDs" style="margin-bottom:10px">
                                                    {if $parray.question ne "" AND $parray.question ne $parray.title}
                                                    {insert name=clickable_link value=var assign=lq text=$parray.question}{$lq|stripslashes|nl2br}
                                                    {/if}
                                                </div>
                                            </div>
                                            <div class="text_language">
                                                <div class="edit_left">
                                                    <span class="silver_nn">
                                                        <p>{$lang162}: {if $parent ne "0"}<a href='{$baseurl}/{$pseo}'>{$pname|stripslashes}</a> - {/if}<a href='{$baseurl}/{$nseo}'>{$name|stripslashes}</a><br/></p>
                                                        <p style="word-wrap: break-word;">{$lang184}: {insert name=get_tags assign=looptags tags=$parray.tags}{section name=tt loop=$looptags}<a href="{$baseurl}/search?query={$looptags[tt]|stripslashes}">{$looptags[tt]|stripslashes}</a> {/section}<br/></p>

                                                        {if $parray.picsuffix != ""}<img src="{$postpicurl}/{$PID}{$parray.picsuffix}" />{/if} 
                                                        <br>
                                                        {if $parray.city}<p>Location: {$parray.city}, {$parray.region}, {$parray.country}</p>{/if}

                                                        <br>
                                                        <div align="left" class='shareaholic-canvas' data-app='share_buttons' data-app-id='16112507'></div>


                                                    </span>
                                                </div>
                                                <div class="clear">	</div>
                                            </div>
                                            <div class="share">
                                                <script type="text/javascript">
                                                    addthis_url    = location.href;
                                                    addthis_title  = document.title;
                                                    addthis_pub    = 'videowatchpro';
                                                </script>
                                                <script type="text/javascript" src="http://s7.addthis.com/js/addthis_widget.php?v=12" ></script>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div style="margin-bottom:10px;padding:5px 0px 5px 0px">
                                            <span class="silver_nn">
                                                <ul class="sortby">
                                                    <li class="last">{$lang60} <a href="{$baseurl}/member/{$parray.USERID}/{$parray.username|stripslashes}" title="{$parray.username|stripslashes}">{$parray.username|stripslashes}</a> {insert name=get_time_to_days_ago value=var time=$parray.time_added}</li>
                                                </ul>
                                            </span>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>

                                {if $parray.open ne "1"}
                                <div class="correction">
                                    <div class="bb_day bb15"><h3 class="floatl">{$lang195}</h3>
                                        <div class="clear">	</div>
                                    </div>
                                    <div id="Div_Title">
                                        {section name=vc loop=$showcomments2}
                                        {insert name=get_username_from_userid value=var assign=uname USERID=$showcomments2[vc].USERID}
                                        {insert name=get_member_profilepicture assign=profilepicture value=var USERID=$showcomments2[vc].USERID}
                                        <div class="correct_loop" id="answer_{$showcomments2[vc].CID}">
                                            <div style="display:inline"><a href="{$baseurl}/member/{$showcomments2[vc].USERID}/{$uname|stripslashes}"><img src="{$membersprofilepicurl}/thumbs/{$profilepicture}" alt="{$uname|stripslashes}" width="55"/></a>
                                            </div>
                                            <div style="float: none; width: auto; word-wrap: break-word;background: #eee;padding: 10px;">
                                                <div class="edit_text">
                                                    <div class="edit_left">
                                                        <div id="An{$showcomments2[vc].CID}">
                                                            {insert name=clickable_link value=var assign=comdetails text=$showcomments2[vc].details}{$comdetails|stripslashes|nl2br}
                                                            {if $showcomments2[vc].address}<br/>{$showcomments2[vc].address} {$showcomments2[vc].city}, {$showcomments2[vc].region}, {$showcomments2[vc].country}{/if}
                                                            {if $showcomments2[vc].website_url}
                                                            {assign var="var" value=$showcomments2[vc].website_url|substr:0:4}
                                                            {assign var="weburl" value=$showcomments2[vc].website_url}
                                                            {if $var != "http"}{assign var="weburl" value="http://`$weburl`"}{/if}
                                                            <br/><a href="{$weburl}" target="_blank">{$weburl}</a>
                                                            {/if}
                                                            {if $showcomments2[vc].address && $showcomments2[vc].city}<iframe width="200" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q={$showcomments2[vc].address|replace:' ':'+'}+{$showcomments2[vc].city|replace:' ':'+'}+{$showcomments2[vc].region|replace:' ':'+'}+{$showcomments2[vc].country|replace:' ':'+'}&z=14&output=embed"></iframe>{/if}
                                                        </div>
                                                    </div>
                                                    <div class="edit_right">

                                                    </div>
                                                    <div class="cleartm">
                                                    </div>
                                                </div>
                                                <div class="original_comment">
                                                    <ul class="sortby">
                                                        <li class="last"><span class="silver_nn">By <a href="{$baseurl}/member/{$showcomments2[vc].USERID}/{$uname|stripslashes}" title="{$uname|stripslashes}">{$uname|stripslashes}</a> {$showcomments2[vc].time_added|date_format} {$showcomments2[vc].time_added|date_format:"%I:%M %p"}</span></li>
                                                    </ul>
                                                    <div class="clear"></div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        {/section}
                                    </div>
                                </div>
                                <div class="clear">	</div>
                                {/if}
                                <div class="correction">
                                    <div class="bb_day bb15"><h3 class="floatl">{$lang161}</h3>
                                        <div class="clear">	</div>
                                    </div>
                                    <div id="Div_Title">
                                        {section name=vc loop=$showcomments}
                                        {insert name=get_username_from_userid value=var assign=uname USERID=$showcomments[vc].USERID}
                                        {insert name=get_member_profilepicture assign=profilepicture value=var USERID=$showcomments[vc].USERID}
                                        <div class="correct_loop" id="answer_{$showcomments[vc].CID}">
                                            <div style=" display:inline" class="profile-pic"><a href="{$baseurl}/member/{$showcomments[vc].USERID}/{$uname|stripslashes}"><img src="{$membersprofilepicurl}/thumbs/{$profilepicture}" alt="{$uname|stripslashes}" width="55"/></a>
                                            </div>
                                            <div class="question-answer">
                                                <div class="edit_text">
                                                    <div class="edit_left">
                                                        <div id="An{$showcomments[vc].CID}">
                                                            <div class="the-answer">{insert name=clickable_link value=var assign=comdetails text=$showcomments[vc].details}{$comdetails|stripslashes|nl2br}
                                                                {if $showcomments[vc].address}<br/>{$showcomments[vc].address} {$showcomments[vc].city}, {$showcomments[vc].region}, {$showcomments[vc].country}{/if}
                                                                {if $showcomments[vc].website_url}
                                                                {assign var="var" value=$showcomments[vc].website_url|substr:0:4}
                                                                {assign var="weburl" value=$showcomments[vc].website_url}	
                                                                {if $var != "http"}{assign var="weburl" value="http://`$weburl`"}{/if}
                                                                <br/><a href="{$weburl}" target="_blank">{$weburl}</a>
                                                                {/if}
                                                            </div>
                                                            {if $showcomments[vc].address && $showcomments[vc].city}
                                                            <iframe width="200" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q={$showcomments[vc].address|replace:' ':'+'}+{$showcomments[vc].city|replace:' ':'+'}+{$showcomments[vc].region|replace:' ':'+'}+{$showcomments[vc].country|replace:' ':'+'}&z=14&output=embed"></iframe>
                                                            {/if}
                                                        </div>
                                                    </div>
                                                    <div class="edit_right">
                                                        <div class="thumbs-rating">
                                                            <div class="ans_rate">
                                                                {if $smarty.session.USERID GT "0"}
                                                                <a id="pos" class='positive' href="javascript:;" onclick="CVDM('{$showcomments[vc].CID}','{$showcomments[vc].vote_yes}');"><img src="{$imageurl}/icon_goodno.png"/ title="Yes, I do."></a>
                                                                {else}
                                                                <img class="positive1" src="{$imageurl}/icon_goodno.png"/ title="Yes, I do.">
                                                                {/if}
                                                            </div>
                                                            <div class="ans_rate">
                                                                {assign var="totalvotes" value="0"}
                                                                {assign var='x' value=$showcomments[vc].vote_yes}
                                                                {assign var='y' value=$showcomments[vc].vote_no}
                                                                {assign var="totalvotes" value=$x-$y}
                                                                <span class='positive1' id="CD2vote{$showcomments[vc].CID}">{$totalvotes}</span>
                                                            </div>
                                                            <div class="ans_rate">
                                                                {if $smarty.session.USERID GT "0"}
                                                                <a id="neg" class='negative' href="javascript:;" onclick="CVDM_BF('{$showcomments[vc].CID}','{$showcomments[vc].vote_no}');"><img src="{$imageurl}/icon_badno.png"/ title="No, I didn't."></a>
                                                                {else}
                                                                <img class="negative1" src="{$imageurl}/icon_badno.png"/ title="No, I didn't.">
                                                                {/if}
                                                            </div>
                                                            <br/><br />
                                                            <span class="ans_rate_date" id='CDvotenobdate{$showcomments[vc].CID}'>{if $totalvotes gte 1}{$showcomments[vc].thumbedtime|date_format}{else}{$showcomments[vc].thumbedtime_no|date_format}{/if}</span>

                                                            <div class="clear">	</div>
                                                        </div>
                                                    </div>
                                                    <div class="cleartm">
                                                    </div>
                                                </div>
                                                <div class="original_comment">
                                                    <ul class="sortby">
                                                        <li class="last"><span class="silver_nn">By <a href="{$baseurl}/member/{$showcomments[vc].USERID}/{$uname|stripslashes}" title="{$uname|stripslashes}">{$uname|stripslashes}</a> {$showcomments[vc].time_added|date_format} {$showcomments[vc].time_added|date_format:"%I:%M %p"}</span></li>
                                                    </ul>
                                                    <div class="clear"></div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        {/section}
                                    </div>
                                </div>
                                <div class="clear">	</div>	
                                {if $smarty.session.USERID GT "0" AND $parray.open eq "1"}
                                {literal}
                                <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
                                <script>
                                    // This example displays an address form, using the autocomplete feature
                                    // of the Google Places API to help users fill in the information.

                                    var placeSearch, autocomplete;
                                    var componentForm = {
                                        street_number: 'short_name',
                                        route: 'long_name',
                                        locality: 'long_name',
                                        administrative_area_level_1: 'short_name',
                                        country: 'long_name',
                                        postal_code: 'short_name'
                                    };

                                    function initialize() {
                                        // Create the autocomplete object, restricting the search
                                        // to geographical location types.
                                        autocomplete = new google.maps.places.Autocomplete(
                                            /** @type {HTMLInputElement} */(document.getElementById('autocomplete')),
                                            //                                            { types: ['establishment'] });
                                            { types: [] });
                                        // When the user selects an address from the dropdown,
                                        // populate the address fields in the form.
                                        google.maps.event.addListener(autocomplete, 'place_changed', function() {
                                            fillInAddress();
                                        });
                                    }

                                    // [START region_fillform]

                                    function fillInAddress() {
                                        // Get the place details from the autocomplete object.
                                        var place = autocomplete.getPlace();
                                        for (var component in componentForm) {
                                            document.getElementById(component).value = '';
                                            document.getElementById(component).disabled = false;
                                        }

                                        // Get each component of the address from the place details
                                        // and fill the corresponding field on the form.
                                        for (var i = 0; i < place.address_components.length; i++) {
                                            var addressType = place.address_components[i].types[0];
                                            if (componentForm[addressType]) {
                                                var val = place.address_components[i][componentForm[addressType]];
                                                document.getElementById(addressType).value = val;
                                            }
                                        }
                                    }
                                    // [END region_fillform]
                                </script>
                                {/literal}
                                <form name="qform" name="qform" action="" method="post" style="padding:5px 0;"  onsubmit="qform.subButton.disabled=true;">
                                    <div id="answerQ" style="text-align:left" class="write_area row">
                                        <div class="bb_day bb15"><h3 id="Ascro">{$lang247}</h3>
                                        </div>
                                        <div class="correct_loop">
                                            <div class="right">
                                                <div class="correct_text">
                                                    <p>Product or Store Name/Details:<br/><input type="text" id="answer" name="answer" class="textarea" style="width:595px" /></p>
                                                    <p>Website address:<br/><input name="website" type="text" id="website" style="width:595px" /></p>
                                                    <p>Address Location:<br/>
                                                        <input id="autocomplete" placeholder="" type="text" style="width:595px;">
                                                        <input type="hidden" name="street_number" id="street_number" value="" />
                                                        <input type="hidden" name="route" id="route" value="" />
                                                        <input type="hidden" name="locality" id="locality" value="" />
                                                        <input type="hidden" name="administrative_area_level_1" id="administrative_area_level_1" value="" />
                                                        <input type="hidden" name="postal_code" id="postal_code" value="" />
                                                        <input type="hidden" name="country" id="country" value="" />
                                                    </p>
                                                    <p><input id="subButton" name="subButton" type="submit" class="button" value="Submit" /></p>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>										
                                    <input type="hidden" name="subans" value="1" />
                                </form>
                                {literal}<script>initialize();</script>{/literal}
                                {elseif $smarty.session.USERID eq ""}
                                <a href="{$baseurl}/login?redirect={$goto}" class="answer-button">{$lang121}</a>
                                <div class="clear">	</div>
                                {/if}
                                <div class="related">
                                    <div style="padding-top:30px" class="bb15"><h3 style="color: #fff;font-weight: bold;text-transform: uppercase;">{$lang226}</h3>
                                    </div>
                                    <div>
                                        <ul class="entry_re">	{section name=i loop=$ques}                                                    {insert name=get_seo_url assign=qtitle value=a title=$ques[i].title PID=$ques[i].PID}                                                    {insert name=get_member_profilepicture assign=profilepicture value=var USERID=$ques[i].USERID}
                                            <li><a class="list_nn" href="{$baseurl}/{$qtitle}">{$ques[i].title|stripslashes}</a></li>{/section}
                                        </ul>
                                    </div>
                                </div>
                                <div style="padding-bottom:10px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div id="body_right">
            </div>
            <div class="clear"></div>
        </div>
        <div id="body_900F">
        </div>
    </div>
</div>