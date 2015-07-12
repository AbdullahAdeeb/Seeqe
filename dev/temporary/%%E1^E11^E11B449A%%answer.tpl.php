<?php /* Smarty version 2.6.6, created on 2015-07-02 21:20:43
         compiled from answer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'get_member_profilepicture', 'answer.tpl', 61, false),array('insert', 'answer_count2', 'answer.tpl', 62, false),array('insert', 'get_seo_url', 'answer.tpl', 63, false),array('insert', 'get_time_to_days_ago', 'answer.tpl', 71, false),array('modifier', 'stripslashes', 'answer.tpl', 66, false),array('modifier', 'truncate', 'answer.tpl', 70, false),array('modifier', 'date_format', 'answer.tpl', 74, false),)), $this); ?>

<div class="common">
	<div id="new_body">
		<div id="body_900">
			<div id="body_left"></div>
			<div id="body_main">
				<div class="title">
					<h1 class="floatl"><?php echo $this->_tpl_vars['pagetitle']; ?>
</h1>
					<div class="clear"></div>
				</div>
				<div class="Center9001n">
				
					<div>
						<?php if (( $this->_tpl_vars['isfound'] )): ?>
							<?php echo ' 
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
							'; ?>

							<select id="category_filter" onchange="categoryChange()">
								<option value ="">Categories</option> 
								<?php if (count($_from = (array)$this->_tpl_vars['categories'])):
    foreach ($_from as $this->_tpl_vars['category']):
?>
									<option value ="<?php echo $this->_tpl_vars['category'][1]; ?>
"><?php echo $this->_tpl_vars['category'][1]; ?>
</option>
								<?php endforeach; unset($_from); endif; ?>
							</select>
						<?php endif; ?>
					</div>
				
					<div class="Center9001RightG">
						<div class="Center9001Content">
						
							<div class="answers_area">
								<div class="bb_list">
									<ul class="list_alist" id="list_items">
									<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['ques']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
										<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_member_profilepicture', 'assign' => 'profilepicture', 'value' => 'var', 'USERID' => $this->_tpl_vars['ques'][$this->_sections['i']['index']]['USERID'])), $this); ?>
                                            
										<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'answer_count2', 'value' => 'a', 'assign' => 'tac', 'pid' => $this->_tpl_vars['ques'][$this->_sections['i']['index']]['PID'])), $this); ?>
                                            
										<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_seo_url', 'assign' => 'qtitle', 'value' => 'a', 'title' => $this->_tpl_vars['ques'][$this->_sections['i']['index']]['title'], 'PID' => $this->_tpl_vars['ques'][$this->_sections['i']['index']]['PID'])), $this); ?>

										<li>
										<div class="and_rate mag15" onClick="top.location.href='<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['qtitle']; ?>
';"><?php echo $this->_tpl_vars['tac']; ?>
</div>
										<div class="right"><a class="list_nn" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['qtitle']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['ques'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a>
											<span class="silver_nn">
											<ul class="sortby">
												<li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/<?php echo $this->_tpl_vars['ques'][$this->_sections['i']['index']]['seo']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['ques'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a></li>
												<li><?php echo $this->_tpl_vars['lang60']; ?>
 <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/member/<?php echo $this->_tpl_vars['ques'][$this->_sections['i']['index']]['USERID']; ?>
/<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['ques'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 25, " ... ", true) : smarty_modifier_truncate($_tmp, 25, " ... ", true)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['ques'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a></li>
												<li><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_time_to_days_ago', 'value' => 'var', 'time' => $this->_tpl_vars['ques'][$this->_sections['i']['index']]['time_added'])), $this); ?>
</li>
												 
                                                <?php if (( $this->_tpl_vars['isfound'] ) && ( $this->_tpl_vars['ques'][$this->_sections['i']['index']]['lastfounddate'] > 0 )): ?>
												<li>Last found on: <?php echo ((is_array($_tmp=$this->_tpl_vars['ques'][$this->_sections['i']['index']]['lastfounddate'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</li>
                                                <?php endif; ?>
                                                
                                                <li>City: <?php if ($this->_tpl_vars['ques'][$this->_sections['i']['index']]['city'] != ""):  echo $this->_tpl_vars['ques'][$this->_sections['i']['index']]['city'];  endif;  if ($this->_tpl_vars['ques'][$this->_sections['i']['index']]['city'] != "" && $this->_tpl_vars['ques'][$this->_sections['i']['index']]['country'] != ""): ?>, <?php endif;  if ($this->_tpl_vars['ques'][$this->_sections['i']['index']]['country'] != ""):  echo $this->_tpl_vars['ques'][$this->_sections['i']['index']]['country'];  endif;  if ($this->_tpl_vars['ques'][$this->_sections['i']['index']]['city'] == "" && $this->_tpl_vars['ques'][$this->_sections['i']['index']]['country'] == ""): ?>Global<?php endif; ?></li>
												
                                                <li class="last"><?php echo $this->_tpl_vars['tac']; ?>
 <?php echo $this->_tpl_vars['lang161']; ?>
</li>
											</ul>
											<div class="clear"></div>
											</span>
										</div>
										<div class="clear"></div>
<!--                                        </li>-->
									<?php endfor; endif; ?>
									</ul>
								</div>
								<div id="divAskQuesPager" class="page_num">
									<?php echo $this->_tpl_vars['pagelinks']; ?>

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