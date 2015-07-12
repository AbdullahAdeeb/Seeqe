<link type="text/css" rel="stylesheet"  href="{$cssurl}/form.css"/>
	<div class="common">
        <div id="new_body">
            <div id="body_900">
                <div id="body_left"></div>
                <div id="body_main">
                	<div class="title">
                        <h1 class="floatl">{$lang1}</h1>
                        <div class="floatr"></div>
                        <div class="clear"></div>
                    </div>
                    <div>
                        <ul id="qa_nav" class="sort_sel">
                            <li class="selATags"><a href="{$baseurl}/account">{$lang1}</a></li>
                            <li class="none"><a href="{$baseurl}/editaccount">{$lang35}</a></li>
                            <li class="none"><a href="{$baseurl}/changeemail">{$lang18}</a></li>
                            <li class="none"><a href="{$baseurl}/changepass">{$lang155}</a></li>
                            <li class="none"><a href="{$baseurl}/myquestions">{$lang217}</a></li>
                            {if $p.store == 1}
                                <li class="none"><a href="{$baseurl}/import">Import Inventory</a></li>
                            {/if}
                        </ul>
                        <div class="clear"></div>							
                    </div>
                        
                    <div class="Center9001n">
                        <div class="title">
                            <h1>{$smarty.session.USERNAME|stripslashes} (<a href="{$baseurl}/member/{$smarty.session.USERID}/{$smarty.session.USERNAME|stripslashes}"><small>{$lang104}</small></a>)</h1>
                        </div>
                        {include file="error.tpl"}
                        <div style="width:400px; display:inline; float:left">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit_my">
                            <tr>
                                <th align="center" nowrap="nowrap" style="padding:5px;">&nbsp;
                                    
                                </th>
                                <th align="center" nowrap="nowrap" style="padding:5px;">&nbsp;
                                    				
                                </th>
                            </tr>
                
                            <tr>
                                <td align="right" nowrap="nowrap" style="padding-right:10px;">
                                    <strong>{$lang105}</strong>
                                </td>
                                <td width="80" align="center" style="padding:5px 5px 8px 5px;">
                                    {$yq}
                                </td>
                            </tr>
                        
                            <tr>
                                <td align="right" nowrap="nowrap" style="padding-right:10px;">
                                    <strong>{$lang106}</strong>
                                </td>
                                <td width="80" align="center" style="padding:5px 5px 8px 5px;">
                                    {$p.yourviewed}
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="right" nowrap="nowrap" style="padding-right:10px;">
                                    <strong>{$lang107}</strong>
                                </td>
                                <td width="80" align="center" style="padding:5px 5px 8px 5px;">
                                    {$p.youviewed}
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="right" nowrap="nowrap" style="padding-right:10px;">
                                    <strong>{$lang108}</strong>
                                </td>
                                <td width="80" align="center" style="padding:5px 5px 8px 5px;">
                                    {insert name=get_member_comments_count value=var USERID=$smarty.session.USERID}
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="right" nowrap="nowrap" style="padding-right:10px;">
                                    <strong>{$lang109}</strong>
                                </td>
                                <td width="80" align="center" style="padding:5px 5px 8px 5px;">
                                    {$p.addtime|date_format}
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="right" nowrap="nowrap" style="padding-right:10px;">
                                    <strong>{$lang110}</strong>
                                </td>
                                <td width="80" align="center" style="padding:5px 5px 8px 5px;">
                                    {if $p.verified eq "1"}Yes{else}No{/if}
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="right" nowrap="nowrap" style="padding-right:10px;">
                                    <strong>{$lang111}</strong>
                                </td>
                                <td width="80" align="center" style="padding:5px 5px 8px 5px;">
                                    {$p.points}
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="right" nowrap="nowrap" style="padding-right:10px;">
                                    <strong>{$lang112}</strong>
                                </td>
                                <td width="80" align="center" style="padding:5px 5px 8px 5px;">
                                    {$p.profileviews}
                                </td>
                            </tr>
                            
                        </table>
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