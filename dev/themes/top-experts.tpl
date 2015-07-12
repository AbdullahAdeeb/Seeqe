<link type="text/css" rel="stylesheet"  href="{$cssurl}/form.css"/>
	<div class="common">
        <div id="new_body">
            <div id="body_900">
                <div id="body_left"></div>
                <div id="body_main">
                	<div class="title">
                        <h1 class="floatl">{$lang81}</h1>
                        <div class="floatr"></div>
                        <div class="clear"></div>
                    </div>
                        
                    <div class="Center9001n">
                        <div class="title">
                            <h1>{$lang81}</h1>
                        </div>
                        {include file="error.tpl"}
                        <div style="width:550px; display:inline; float:left">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <th align="center" width="20%">{$lang181}</th>
                                <th align="center" width="20%">{$lang154}</th>
                                <th align="center" width="20%">{$lang109}</th>
                                <th align="center" width="20%">{$lang112}</th>
                                <th align="center" width="20%">{$lang111}</th>
                            </tr>
                			{section name=i loop=$mems}
                            {insert name=get_member_profilepicture assign=profilepicture value=var USERID=$mems[i].USERID}
                            <tr>
                                <td align="center"><strong>{$smarty.section.i.iteration}</strong></td>
                                <td align="left" class="buzz_grey" style="padding:10px 0 10px 10px;">
                                    <div style="float:left;"><a href="{$baseurl}/member/{$mems[i].USERID}/{$mems[i].username|stripslashes}" class="sticky" style=""><img src="{$membersprofilepicurl}/thumbs/{$profilepicture}" width="50" height="50" title="{$mems[i].username|stripslashes}" style="" alt="{$mems[i].username|stripslashes}" /></a></div>
                                    <div style="margin-left:55px;text-align:center;margin-top:2px;">
                                        <strong><a href="{$baseurl}/member/{$mems[i].USERID}/{$mems[i].username|stripslashes}" class="sticky" style="">{$mems[i].username|stripslashes}</a></strong>
                                    </div>
                                </td>
                                <td align="center">{$mems[i].addtime|date_format}</td>
                                <td align="center" class="buzz_grey">{$mems[i].profileviews}</td>
                                <td align="center">{$mems[i].points}</td>
                            </tr>
                            {/section}                
                        </table>
                        </div>
                        <div class="Center9001LeftU" style="display:inline; float:right">
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