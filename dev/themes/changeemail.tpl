<link type="text/css" rel="stylesheet"  href="{$cssurl}/form.css"/>
	<div class="common">
        <div id="new_body">
            <div id="body_900">
                <div id="body_left"></div>
                <div id="body_main">
                	<div class="title">
                        <h1 class="floatl">{$lang18}</h1>
                        <div class="floatr"></div>
                        <div class="clear"></div>
                    </div>
                    <div>
                        <ul id="qa_nav" class="sort_sel">
                            <li class="none"><a href="{$baseurl}/account">{$lang1}</a></li>
                            <li class="none"><a href="{$baseurl}/editaccount">{$lang35}</a></li>
                            <li class="selATags"><a href="{$baseurl}/changeemail">{$lang18}</a></li>
                            <li class="none"><a href="{$baseurl}/changepass">{$lang155}</a></li>
                            <li class="none"><a href="{$baseurl}/myquestions">{$lang217}</a></li>
                        </ul>
                        <div class="clear"></div>							
                    </div>
                        
                    <div class="Center9001n">
                        {include file="error.tpl"}
                        
                        <form method="post" action="{$baseurl}/changeemail">
                        <div class="Center9001RightU">
                            <div class="Center9001Content">
                                <div class="login_area">    
                                    <div class="margin20D" style="line-height: 2">
                                        <strong>{$lang129}:</strong>
                                        <br />
                                        <input type="text" id="email" name="email" value="{$getemail}" class="Input_Big" size="25" maxlength="100" />
                                        <br />
                                    </div>
                                    <div class="margin20D" style="line-height: 2">
                                        <strong>{$lang130}: {$emailverified}{if $ev1 eq "0"} <a href="{$baseurl}/resendconfirmation/{$smarty.session.USERID}"><small>({$lang131})</small></a>{/if}</strong>
                                        <br />
                                    </div>
                                    <div class="margin20D">
                                        <div class="floatl"><label><input type="submit" id="change" name="change" class="button" value="{$lang132}" /></label></div>
                                        <div class="floatl grey12">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="change" value="{$lang132}" />
                        </form>
                        
                        <form method="post" action="{$baseurl}/changeemail">
                        <div class="Center9001RightU">
                            <div class="Center9001Content">
                                <div class="login_area">    
                                    <div class="margin20D" style="line-height: 2">
                                        <strong>{$lang201}:</strong>
                                        <br />
                                        <input type="radio" value="1" name="notify" {if $p.notify eq "1"}checked="checked"{/if} />{$lang202}
                                        <br />
                                        <input type="radio" value="0" name="notify" {if $p.notify eq "0"}checked="checked"{/if} />{$lang203}
                                        <br />
                                    </div>                                    
                                    <div class="margin20D">
                                        <div class="floatl"><label><input type="submit" id="nsub" name="nsub" class="button" value="{$lang138}" /></label></div>
                                        <div class="floatl grey12">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="nsub" value="{$lang138}" />
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