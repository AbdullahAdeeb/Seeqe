<?php /* Smarty version 2.6.6, created on 2015-04-28 22:04:27
         compiled from administrator/answers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'administrator/answers.tpl', 102, false),array('modifier', 'truncate', 'administrator/answers.tpl', 116, false),array('modifier', 'date_format', 'administrator/answers.tpl', 119, false),)), $this); ?>
		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>Answers</h3>
						
                        <ul id="isoft" class="tabs">
    						<li >
        						<a href="answers.php" id="isoft_group_1" name="group_1" title="Manage Answers" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Manage Answers
                                    </span>
        						</a>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Manage Answers</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

                                        <div>
        			<div id="customerGrid">
        				<table cellspacing="0" class="actions">
        				<tr>
                    		<td class="pager">
                            	Showing <?php if ($this->_tpl_vars['total'] > 0):  echo $this->_tpl_vars['beginning']; ?>
 - <?php echo $this->_tpl_vars['ending']; ?>
 of <?php endif;  echo $this->_tpl_vars['total']; ?>
 Answers
                    		</td>
                			<td class="export a-right"></td>
            				<td class="filter-actions a-right">
                            	<button  id="id_ffba3971e132ae3d78c160244ea09b39" type="button" class="scalable " onclick="document.location.href='answers.php'" style=""><span>Reset Filter</span></button>
            					<button  id="id_56a0b03bf0b3be131176f3243cc289ff" type="button" class="scalable task" onclick="document.main_form.submit();" style=""><span>Search</span></button>        
                            </td>
        				</tr>
    					</table>
                        
                        <div class="grid">
							<div class="hor-scroll">
								<table cellspacing="0" class="data" id="customerGrid_table">
                                <col  width="50"  width="100px"  />
                                <col  width="100"  />
                                <col  width="250"  />
                                <col  width="100"  />
                                <col   />
                                <col  width="100"  />
                                <col  width="125"  />
	    	    	        	<thead>
	            	                <tr class="headings">
                                    
                                        <th ><span class="nobr"><a href="answers.php?page=<?php echo $this->_tpl_vars['currentpage']; ?>
&sortby=CID&sorthow=<?php if ($this->_tpl_vars['sortby'] == 'CID'):  if ($this->_tpl_vars['sorthow'] == 'desc'): ?>asc<?php else: ?>desc<?php endif;  else:  echo $this->_tpl_vars['sorthow'];  endif;  if ($this->_tpl_vars['search'] == '1'): ?>&fromid=<?php echo $this->_tpl_vars['fromid']; ?>
&toid=<?php echo $this->_tpl_vars['toid']; ?>
&pid=<?php echo $this->_tpl_vars['pid']; ?>
&story=<?php echo $this->_tpl_vars['story']; ?>
&details=<?php echo $this->_tpl_vars['details']; ?>
&username=<?php echo $this->_tpl_vars['username'];  endif; ?>" name="CID" class="<?php if ($this->_tpl_vars['sortby'] == 'CID'): ?>sort-arrow-<?php if ($this->_tpl_vars['sorthow'] == 'desc'): ?>desc<?php else: ?>asc<?php endif;  else: ?>not-sort<?php endif; ?>"><span class="sort-title">Answer ID</span></a></span></th>
                                        
                                        <th ><span class="nobr"><a href="answers.php?page=<?php echo $this->_tpl_vars['currentpage']; ?>
&sortby=PID&sorthow=<?php if ($this->_tpl_vars['sortby'] == 'PID'):  if ($this->_tpl_vars['sorthow'] == 'desc'): ?>asc<?php else: ?>desc<?php endif;  else:  echo $this->_tpl_vars['sorthow'];  endif;  if ($this->_tpl_vars['search'] == '1'): ?>&fromid=<?php echo $this->_tpl_vars['fromid']; ?>
&toid=<?php echo $this->_tpl_vars['toid']; ?>
&pid=<?php echo $this->_tpl_vars['pid']; ?>
&story=<?php echo $this->_tpl_vars['story']; ?>
&details=<?php echo $this->_tpl_vars['details']; ?>
&username=<?php echo $this->_tpl_vars['username'];  endif; ?>" name="PID" class="<?php if ($this->_tpl_vars['sortby'] == 'PID'): ?>sort-arrow-<?php if ($this->_tpl_vars['sorthow'] == 'desc'): ?>desc<?php else: ?>asc<?php endif;  else: ?>not-sort<?php endif; ?>"><span class="sort-title">Question ID</span></a></span></th>
                                        
                                        <th ><span class="nobr"><a href="answers.php?page=<?php echo $this->_tpl_vars['currentpage']; ?>
&sortby=story&sorthow=<?php if ($this->_tpl_vars['sortby'] == 'story'):  if ($this->_tpl_vars['sorthow'] == 'desc'): ?>asc<?php else: ?>desc<?php endif;  else:  echo $this->_tpl_vars['sorthow'];  endif;  if ($this->_tpl_vars['search'] == '1'): ?>&fromid=<?php echo $this->_tpl_vars['fromid']; ?>
&toid=<?php echo $this->_tpl_vars['toid']; ?>
&pid=<?php echo $this->_tpl_vars['pid']; ?>
&story=<?php echo $this->_tpl_vars['story']; ?>
&details=<?php echo $this->_tpl_vars['details']; ?>
&username=<?php echo $this->_tpl_vars['username'];  endif; ?>" name="story" class="<?php if ($this->_tpl_vars['sortby'] == 'story'): ?>sort-arrow-<?php if ($this->_tpl_vars['sorthow'] == 'desc'): ?>desc<?php else: ?>asc<?php endif;  else: ?>not-sort<?php endif; ?>"><span class="sort-title">Question</span></a></span></th>
                                        
                                        
                                        
                                        <th ><span class="nobr"><a href="answers.php?page=<?php echo $this->_tpl_vars['currentpage']; ?>
&sortby=username&sorthow=<?php if ($this->_tpl_vars['sortby'] == 'username'):  if ($this->_tpl_vars['sorthow'] == 'desc'): ?>asc<?php else: ?>desc<?php endif;  else:  echo $this->_tpl_vars['sorthow'];  endif;  if ($this->_tpl_vars['search'] == '1'): ?>&fromid=<?php echo $this->_tpl_vars['fromid']; ?>
&toid=<?php echo $this->_tpl_vars['toid']; ?>
&pid=<?php echo $this->_tpl_vars['pid']; ?>
&story=<?php echo $this->_tpl_vars['story']; ?>
&details=<?php echo $this->_tpl_vars['details']; ?>
&username=<?php echo $this->_tpl_vars['username'];  endif; ?>" name="username" class="<?php if ($this->_tpl_vars['sortby'] == 'username'): ?>sort-arrow-<?php if ($this->_tpl_vars['sorthow'] == 'desc'): ?>desc<?php else: ?>asc<?php endif;  else: ?>not-sort<?php endif; ?>"><span class="sort-title">Poster</span></a></span></th>
                                        
                                        <th ><span class="nobr"><a href="answers.php?page=<?php echo $this->_tpl_vars['currentpage']; ?>
&sortby=details&sorthow=<?php if ($this->_tpl_vars['sortby'] == 'details'):  if ($this->_tpl_vars['sorthow'] == 'desc'): ?>asc<?php else: ?>desc<?php endif;  else:  echo $this->_tpl_vars['sorthow'];  endif;  if ($this->_tpl_vars['search'] == '1'): ?>&fromid=<?php echo $this->_tpl_vars['fromid']; ?>
&toid=<?php echo $this->_tpl_vars['toid']; ?>
&pid=<?php echo $this->_tpl_vars['pid']; ?>
&story=<?php echo $this->_tpl_vars['story']; ?>
&details=<?php echo $this->_tpl_vars['details']; ?>
&username=<?php echo $this->_tpl_vars['username'];  endif; ?>" name="details" class="<?php if ($this->_tpl_vars['sortby'] == 'details'): ?>sort-arrow-<?php if ($this->_tpl_vars['sorthow'] == 'desc'): ?>desc<?php else: ?>asc<?php endif;  else: ?>not-sort<?php endif; ?>"><span class="sort-title">Answer</span></a></span></th>
                                        
                                        <th ><span class="nobr"><a href="answers.php?page=<?php echo $this->_tpl_vars['currentpage']; ?>
&sortby=time_added&sorthow=<?php if ($this->_tpl_vars['sortby'] == 'time_added'):  if ($this->_tpl_vars['sorthow'] == 'desc'): ?>asc<?php else: ?>desc<?php endif;  else:  echo $this->_tpl_vars['sorthow'];  endif;  if ($this->_tpl_vars['search'] == '1'): ?>&fromid=<?php echo $this->_tpl_vars['fromid']; ?>
&toid=<?php echo $this->_tpl_vars['toid']; ?>
&pid=<?php echo $this->_tpl_vars['pid']; ?>
&story=<?php echo $this->_tpl_vars['story']; ?>
&details=<?php echo $this->_tpl_vars['details']; ?>
&username=<?php echo $this->_tpl_vars['username'];  endif; ?>" name="time_added" class="<?php if ($this->_tpl_vars['sortby'] == 'time_added'): ?>sort-arrow-<?php if ($this->_tpl_vars['sorthow'] == 'desc'): ?>desc<?php else: ?>asc<?php endif;  else: ?>not-sort<?php endif; ?>"><span class="sort-title">Date Posted</span></a></span></th>
                                        
                                        <th  class=" no-link last"><span class="nobr">Action</span></th>
                                        
	                	            </tr>
	            	            	<tr class="filter">
                                        <th >
                                            <div class="range">
                                                <div class="range-line">
                                                    <span class="label">From:</span> 
                                                    <input type="text" name="fromid" id="fromid" value="<?php echo $this->_tpl_vars['fromid']; ?>
" class="input-text no-changes"/>
                                                </div>
                                                <div class="range-line">
                                                    <span class="label">To : </span>
                                                    <input type="text" name="toid" id="toid" value="<?php echo $this->_tpl_vars['toid']; ?>
" class="input-text no-changes"/>
                                                </div>
                                            </div>
                                        </th>
                                        <th ><input type="text" name="pid" id="pid" value="<?php echo $this->_tpl_vars['pid']; ?>
" class="input-text no-changes"/></th>
                                        <th ><input type="text" name="story" id="story" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" class="input-text no-changes"/></th>
                                        <th ><input type="text" name="username" id="username" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" class="input-text no-changes"/></th>
                                        <th ><input type="text" name="details" id="details" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['details'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" class="input-text no-changes"/></th>
                                        <th></th>
                                        <th  class=" no-link last">
                                            <div style="width: 100%;">&nbsp;</div>
                                        </th>
	                	            </tr>
	            	        	</thead>
	    	    	    		<tbody>
                                	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['results']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                                    <tr id="" >
                                        <td align="center"><?php echo $this->_tpl_vars['results'][$this->_sections['i']['index']]['CID']; ?>
</td>
                                        <td align="center"><?php echo $this->_tpl_vars['results'][$this->_sections['i']['index']]['PID']; ?>
</td>
                                        <td class=" "><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['results'][$this->_sections['i']['index']]['question'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 80, "...", true) : smarty_modifier_truncate($_tmp, 80, "...", true)); ?>
</td>
                                        <td class=" "><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['results'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true)); ?>
</td>
                                        <td class=" "><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['results'][$this->_sections['i']['index']]['details'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 300, "...", true) : smarty_modifier_truncate($_tmp, 300, "...", true)); ?>
</td>
                                        <td class=" "><?php echo ((is_array($_tmp=$this->_tpl_vars['results'][$this->_sections['i']['index']]['time_added'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b %e, %Y") : smarty_modifier_date_format($_tmp, "%b %e, %Y")); ?>
</td>
                                        <td class=" last">
                                        	<a href="answers_edit.php?CID=<?php echo $this->_tpl_vars['results'][$this->_sections['i']['index']]['CID']; ?>
">Edit</a>&nbsp;|&nbsp;
                                        	<a href="answers.php?page=<?php echo $this->_tpl_vars['currentpage']; ?>
&sortby=<?php echo $this->_tpl_vars['sortby']; ?>
&sorthow=<?php echo $this->_tpl_vars['sorthow'];  if ($this->_tpl_vars['search'] == '1'): ?>&fromid=<?php echo $this->_tpl_vars['fromid']; ?>
&toid=<?php echo $this->_tpl_vars['toid']; ?>
&pid=<?php echo $this->_tpl_vars['pid']; ?>
&story=<?php echo $this->_tpl_vars['story']; ?>
&details=<?php echo $this->_tpl_vars['details']; ?>
&username=<?php echo $this->_tpl_vars['username'];  endif; ?>&delete=1&CID=<?php echo $this->_tpl_vars['results'][$this->_sections['i']['index']]['CID']; ?>
&PID=<?php echo $this->_tpl_vars['results'][$this->_sections['i']['index']]['PID']; ?>
">Delete</a>
                                        </td>
                                	</tr>
                                    <?php endfor; endif; ?>
                                    <tr>
                                    	<td colspan="7">
                                        <?php echo $this->_tpl_vars['pagelinks']; ?>

                                        </td>
                                    </tr>
	    	    	    		</tbody>
								</table>
                            </div>
                        </div>
					</div>
				</div>
									</div>
								</div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                               
                                
                                
                                
    						</li>
                            
                            <li >
                                <a href="answers_reported.php" id="isoft_group_2" name="group_2" title="Reported Answers" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Reported Answers
                                    </span>
                                </a>
                                <div id="isoft_group_2_content" style="display:none;"></div>
                            </li>
    
						</ul>
                        
						<script type="text/javascript">
                            isoftJsTabs = new varienTabs('isoft', 'main_form', 'isoft_group_1', []);
                        </script>
                        
					</div>
                    
					<div class="main-col" id="content">
						<div class="main-col-inner">
							<div id="messages">
                            <?php if ($this->_tpl_vars['message'] != "" || $this->_tpl_vars['error'] != ""): ?>
                            	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "administrator/show_message.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                            <?php endif; ?>
                            </div>

                            <div class="content-header">
                               <h3 class="icon-head head-products">Answers - Manage Answers</h3>
                            </div>
                            
                            <form action="answers.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>