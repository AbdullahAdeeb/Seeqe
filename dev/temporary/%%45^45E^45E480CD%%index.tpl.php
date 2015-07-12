<?php /* Smarty version 2.6.6, created on 2015-07-11 18:59:15
         compiled from index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'pre-index.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<div class="common">

        <div id="new_body">

			<div align="center" class="slogan">
				<strong>Find</strong> <i>Anything</i>, <strong>Anywhere</strong>
			</div>

			<form class="form-wrapper cf" id="searchform" name="searchform" method="get" action="<?php echo $this->_tpl_vars['baseurl']; ?>
/search">
				
				<h2>Where can I find </h2>
				<span class="main_form">
					<input maxlength="200" id="search" name="query" keyboard="0" required type="text">
					<label class="input_label">
						<span id="error1">What you're looking for</span>
					</label>
				</span>
				<h2>in</h2>

				<span class="main_form">
					<input id="autocomplete" name="searchlocation" placeholder="" required type="text">
					<label class="input_label">
						<span id="error2">Enter your city</span>
					</label>
				</span>
				<h2>?</h2>

				<input type="hidden" name="street_number" id="street_number" value="" />

				<input type="hidden" name="route" id="route" value="" />

				<input type="hidden" name="locality" id="locality" value="" />

				<input type="hidden" name="administrative_area_level_1" id="administrative_area_level_1" value="" />

				<input type="hidden" name="postal_code" id="postal_code" value="" />

				<input type="hidden" name="country" id="country" value="" />

				<button type="submit" class="seeque-button" id="seequebut">Seeque</button>

			</form>

<?php echo '<script>initialize();</script>'; ?>

    
        </div>

    </div>