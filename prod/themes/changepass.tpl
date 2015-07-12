<link type="text/css" rel="stylesheet"  href="{$cssurl}/form.css"/>
	<div class="common">
        <div id="new_body">
            <div id="body_900">
                <div id="body_left"></div>
                <div id="body_main">
                	<div class="title">
                        <h1 class="floatl">{$lang155}</h1>
                        <div class="floatr"></div>
                        <div class="clear"></div>
                    </div>
                    <div>
                        <ul id="qa_nav" class="sort_sel">
                            <li class="none"><a href="{$baseurl}/account">{$lang1}</a></li>
                            <li class="none"><a href="{$baseurl}/editaccount">{$lang35}</a></li>
                            <li class="none"><a href="{$baseurl}/changeemail">{$lang18}</a></li>
                            <li class="selATags"><a href="{$baseurl}/changepass">{$lang155}</a></li>
                            <li class="none"><a href="{$baseurl}/myquestions">{$lang217}</a></li>
                        </ul>
                        <div class="clear"></div>							
                    </div>
                        
                    <div class="Center9001n">
                        {include file="error.tpl"}
                        
                        <form method="post" action="{$baseurl}/changepass">
                        <div class="Center9001RightU">
                            <div class="Center9001Content">
                                <div class="login_area">    
                                    <div class="margin20D" style="line-height: 2">
                                        <strong>{$lang133}:</strong>
                                        <br />
                                        <input type="password" id="cpassword" name="cpassword" value="" class="Input_Big" size="25" maxlength="100" />
                                        <br />
                                    </div>
                                    <div class="margin20D" style="line-height: 2">
                                        <strong>{$lang134}:</strong>
                                        <br />
                                        <input type="password" id="npassword" name="npassword" value="" class="Input_Big" size="25" maxlength="40" />
                                        <br />
                                    </div>  
                                    <div class="margin20D" style="line-height: 2">
                                        <strong>{$lang135}:</strong>
                                        <br />
                                        <input type="password" id="rnpassword" name="rnpassword" value="" class="Input_Big" size="25" maxlength="40" />
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