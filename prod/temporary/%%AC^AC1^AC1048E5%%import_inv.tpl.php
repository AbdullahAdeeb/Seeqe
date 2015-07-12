<?php /* Smarty version 2.6.6, created on 2015-05-30 14:53:47
         compiled from import_inv.tpl */ ?>
<?php if ($_SESSION['USERID'] > '0' && $this->_tpl_vars['parray']['open'] == '1'):  echo '
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
        // Create the autocomplete object, restricting the search
        // to geographical location types.

        autocomplete = new google.maps.places.Autocomplete(
            /** @type {HTMLInputElement} */(document.getElementById(\'autocomplete\')),
            { types: [\'geocode\'] });
        // When the user selects an address from the dropdown,
        // populate the address fields in the form.
        google.maps.event.addListener(autocomplete, \'place_changed\', function() {
            fillInAddress();
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

<form name="qform" name="qform" action="" method="post" style="padding:5px 0;"  onsubmit="qform.subButton.disabled=true;">
    <div id="answerQ" style="text-align:left" class="write_area row">
        <div class="bb_day bb15"><h3 id="Ascro"><?php echo $this->_tpl_vars['lang247']; ?>
</h3>
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
<?php echo '<script>initialize();</script>'; ?>


<?php elseif ($_SESSION['USERID'] == ""): ?>

    <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/login?redirect=<?php echo $this->_tpl_vars['goto']; ?>
" class="answer-button">Log in</a>
    <div class="clear">	</div>
<?php endif; ?>