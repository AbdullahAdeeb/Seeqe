<link type="text/css" rel="stylesheet"  href="{$cssurl}/form.css"/>

{literal}

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>

<script>

    // This example displays an address form, using the autocomplete feature

    // of the Google Places API to help users fill in the information.



    var placeSearch, autocomplete;

    var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
    };



    function initialize() {
        console.log("initialized");
        // Create the autocomplete object, restricting the search
        // to geographical location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {HTMLInputElement} */(document.getElementById('autocomplete')),
            { types: ['geocode'] });
        // When the user selects an address from the dropdown,
        // populate the address fields in the form.
        google.maps.event.addListener(autocomplete, 'place_changed', function() {
            console.log("filling >>> ");
            fillInAddress();
            console.log("done <<< ");
        });

        //disable submitting the form when enter is clicked while the location is auto completed
        $('#autocomplete').keydown(function (e) {
            if (e.which == 13 && $('.pac-container:visible').length) return false;
        });
    }



    // [START region_fillform]

    function fillInAddress() {

        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
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

{/literal}

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
                    {include file="error.tpl"}
                    <form id="qform" name="qform" method="post" action="{$baseurl}/ask" onSubmit="qform.submitquestion.disabled=true;" enctype="multipart/form-data">
                        <div class="Center9001RightU">
                            <div class="Center9001Content">
                                <div class="login_area">    
                                    <div class="margin20D" style="line-height: 2; float: left; margin-right: 10px;">
                                            <strong>What you're looking for:</strong>
                                            <br>
                                            <input maxlength="200" type="text" name="qtitle" id="qtitle" required>{$qtitle|stripslashes}</input>
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
                                        <strong>{$lang62}:</strong>
                                        <br/>
                                        <select name="category" id="category" style="font-size:24px">
                                            {section name=i loop=$cats}
                                            <option value="{$cats[i].CATID}" {if $cats[i].CATID eq "276"}selected="selected"{/if}>{$cats[i].name|stripslashes}</option>
                                            {if $cats[i].CATID ne "0"}
                                            {insert name=get_subcategories assign=scats parent=$cats[i].CATID}
                                            {section name=j loop=$scats}
                                            <option value="{$scats[j].CATID}" {if $smarty.request.category eq $scats[j].CATID}selected="selected"{/if}>- {$scats[j].name|stripslashes}</option>
                                            {/section}
                                            {/if}
                                            {/section}  
                                        </select>
                                        <br />
                                    </div>

                                    <div class="margin20D" style="line-height: 2">
                                        <strong>{$lang267}:</strong>
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
                {literal}<script>initialize();</script>{/literal}
                <div class="clear"></div>
            </div>
        </div>
        <div id="body_right"></div>
        <div class="clear"></div>
    </div>
    <div id="body_900F"></div>
</div>
</div>