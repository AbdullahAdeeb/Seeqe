		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>Categories</h3>
						
                        <ul id="isoft" class="tabs">
    						<li >
        						<a href="cat_manage.php" id="isoft_group_1" name="group_1" title="Manage Categories" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Manage Categories
                                    </span>
        						</a>
                                <div id="isoft_group_1_content" style="display:none;"></div>
    						</li>
                            
                            <li >
                                <a href="cat_add.php" id="isoft_group_2" name="group_2" title="Add Category" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Add Category
                                    </span>
                                </a>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div id="isoft_group_2_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Add Category</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

										<fieldset id="group_fields4">
                                            <div class="hor-scroll">
                                                <table cellspacing="0" class="form-list">
                                                <tbody>
                                                	<tr class="hidden">
                                                        <td class="label"><label for="name">Parent Category </label></td>
                                                        <td class="value">
                                                        	<select id="parent" name="parent">
                                                            <option value="0">None</option>
                                                            {insert name=get_categories value=a assign=cats}
                                                            {section name=i loop=$cats}
                                                            <option value="{$cats[i].CATID}">{$cats[i].name}</option>
                                                            {/section}
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[IF YOU WANT THIS TO BE A SUB-CATEGORY, SELECT A PARENT CATEGORY]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Name </label></td>
                                                        <td class="value">
                                                        	<input id="name" name="name" value="{$smarty.request.name|stripslashes}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[NAME OF THE CATEGORY]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">SEO Name </label></td>
                                                        <td class="value">
                                                        	<input id="seo" name="seo" value="{$smarty.request.seo|stripslashes}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[NAME OF THE CATEGORY THAT WILL APPEAR ON URL'S, SLASHES ARE NOT ALLOWED]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    
                                                </tbody>
                                                </table>
                                            </div>
                                        </fieldset>
                                        
									</div>
								</div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                            </li>
    
						</ul>
                        
						<script type="text/javascript">
                            isoftJsTabs = new varienTabs('isoft', 'main_form', 'isoft_group_2', []);
                        </script>
                        
					</div>
                    
					<div class="main-col" id="content">
						<div class="main-col-inner">
							<div id="messages">
                            {if $message ne "" OR $error ne ""}
                            	{include file="administrator/show_message.tpl"}
                            {/if}
                            </div>

                            <div class="content-header">
                               <h3 class="icon-head head-products">Categories - Add Category</h3>
                               <p class="content-buttons form-buttons">
                                    <button  id="id_be616be1324d8ae4516f276d17d34b9c" type="button" class="scalable save" onclick="document.main_form.submit();" style=""><span>Submit</span></button>			
                                </p>
                            </div>
                            
                            <form action="cat_add.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>