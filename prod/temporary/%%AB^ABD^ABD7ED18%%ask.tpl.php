<?php /* Smarty version 2.6.6, created on 2015-07-02 20:38:17
         compiled from ask.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'ask.tpl', 99, false),array('insert', 'get_subcategories', 'ask.tpl', 121, false),)), $this); ?>
<link type="text/css" rel="stylesheet"  href="<?php echo $this->_tpl_vars['cssurl']; ?>
/form.css"/>

<?php echo '

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>

<script>

    // This example displays an address form, using the autocomplete feature

    // of the Google Places API to help users fill in the information.



    var placeSearch, autocomplete;

    var componentForm = {
        street_number: \'short_name\',
        route: \'long_name\',
        locality: \'long_name\',
        administrative_area_level_1: \'short_name\',
        country: \'long_name\',
        postal_code: \'short_name\'
    };



    function initialize() {
        console.log("initialized");
        // Create the autocomplete object, restricting the search
        // to geographical location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {HTMLInputElement} */(document.getElementById(\'autocomplete\')),
            { types: [\'geocode\'] });
        // When the user selects an address from the dropdown,
        // populate the address fields in the form.
        google.maps.event.addListener(autocomplete, \'place_changed\', function() {
            console.log("filling >>> ");
            fillInAddress();
            console.log("done <<< ");
        });

        //disable submitting the form when enter is clicked while the location is auto completed
        $(\'#autocomplete\').keydown(function (e) {
            if (e.which == 13 && $(\'.pac-container:visible\').length) return false;
        });
    }



    // [START region_fillform]

    function fillInAddress() {

        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = \'\';
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

'; ?>


<div class="common">
    <div id="new_body">
        <div id="body_900">
            <!-- <p style="font-family:arial;font-size:14px;">Just type in what you want to find and a person from the community will answer you in no time.</p>
-->                <div id="body_left"></div>
            <div id="body_main">
                <div class="Center9001n">
                    <div class="title">
                        <h1>Just type in what you want to find and a person from the Seeqe community will answer you in no time.</h1>
                    </div>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "error.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <form id="qform" name="qform" method="post" action="<?php echo $this->_tpl_vars['baseurl']; ?>
/ask" onSubmit="qform.submitquestion.disabled=true;" enctype="multipart/form-data">
                        <div class="Center9001RightU">
                            <div class="Center9001Content">
                                <div class="login_area">    
                                    <div class="margin20D" style="line-height: 2; float: left; margin-right: 10px;">
                                            <strong>What you're looking for:</strong>
                                            <br>
                                            <input maxlength="200" type="text" name="qtitle" id="qtitle" required><?php echo ((is_array($_tmp=$this->_tpl_vars['qtitle'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</input>
                                        <!-- (200 characters maximum) -->
                                        <br />
                                    </div>
                                    <div class="margin20D" style="line-height: 2">
                                        <strong>Location:</strong>
                                        <br />
                                        <input id="autocomplete" placeholder="" type="text" style="width:475px;height:24px;" class="location" required />
                                        <input type="hidden" name="street_number" id="street_number" value="" />
                                        <input type="hidden" name="route" id="route" value="" />
                                        <input type="hidden" name="locality" id="locality" value="" />
                                        <input type="hidden" name="administrative_area_level_1" id="administrative_area_level_1" value="" />
                                        <input type="hidden" name="postal_code" id="postal_code" value="" />
                                        <input type="hidden" name="country" id="country" value="" />
                                    </div>
                                    <div class="margin20D" style="line-height: 2">
                                        <strong><?php echo $this->_tpl_vars['lang62']; ?>
:</strong>
                                        <br/>
                                        <select name="category" id="category" style="font-size:24px">
                                            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['cats']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                            <option value="<?php echo $this->_tpl_vars['cats'][$this->_sections['i']['index']]['CATID']; ?>
" <?php if ($this->_tpl_vars['cats'][$this->_sections['i']['index']]['CATID'] == '276'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['cats'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</option>
                                            <?php if ($this->_tpl_vars['cats'][$this->_sections['i']['index']]['CATID'] != '0'): ?>
                                            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_subcategories', 'assign' => 'scats', 'parent' => $this->_tpl_vars['cats'][$this->_sections['i']['index']]['CATID'])), $this); ?>

                                            <?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['scats']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>
                                            <option value="<?php echo $this->_tpl_vars['scats'][$this->_sections['j']['index']]['CATID']; ?>
" <?php if ($_REQUEST['category'] == $this->_tpl_vars['scats'][$this->_sections['j']['index']]['CATID']): ?>selected="selected"<?php endif; ?>>- <?php echo ((is_array($_tmp=$this->_tpl_vars['scats'][$this->_sections['j']['index']]['name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</option>
                                            <?php endfor; endif; ?>
                                            <?php endif; ?>
                                            <?php endfor; endif; ?>  
                                        </select>
                                        <br />
                                    </div>

                                    <div class="margin20D" style="line-height: 2">
                                        <strong><?php echo $this->_tpl_vars['lang267']; ?>
:</strong>
                                        <br />
                                        <input type="file" name="postpic" id="postpic" />
                                    </div>

                                    <div class="margin20D" align="center">
                                        <div class="floatl"><label><input type="submit" class="button" value="Ask" name="submitquestion" id="submitquestion" /></label></div>
                                        <div class="floatl grey12"></div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <input type="hidden" name="subform" value="yes"  />
                    </form>
                <?php echo '<script>initialize();</script>'; ?>

                <div class="clear"></div>
            </div>
        </div>
        <div id="body_right"></div>
        <div class="clear"></div>
    </div>
    <div id="body_900F"></div>
</div>
</div>