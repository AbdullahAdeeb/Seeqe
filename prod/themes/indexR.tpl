	{literal}

	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>

    <script>

	// This example displays an address form, using the autocomplete feature

	// of the Google Places API to help users fill in the information.

	

	$(document).keypress(function(e) {

	    if(e.which == 13) {

		   e.preventDefault();

	  	   google.maps.event.trigger(autocomplete, 'place_changed');

	       

    	   return true;

	    }

	});

	

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

	  // Create the autocomplete object, restricting the search

	  // to geographical location types.

	  autocomplete = new google.maps.places.Autocomplete(

	      /** @type {HTMLInputElement} */

		 (document.getElementById('autocomplete')),{ types: ['geocode'] });

	  // When the user selects an address from the dropdown,

	  // populate the address fields in the form.

	  google.maps.event.addListener(autocomplete, 'place_changed', function() {

	    fillInAddress();

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

	  



	  if(typeof place.address_components == 'undefined') {

	  } else {

		  for (var i = 0; i < place.address_components.length; i++) {

		    var addressType = place.address_components[i].types[0];

		    if (componentForm[addressType]) {

			

		      var val = place.address_components[i][componentForm[addressType]];

			 // alert(addressType+'--'+val);

		      document.getElementById(addressType).value = val;

		    }

		  }

	   }

	}

	// [END region_fillform]

    </script>

	{/literal}

	<div class="common">

        <div id="new_body">

<div align="center" class="slogan">find anything, anywhere</div>

<form class="form-wrapper cf" id="searchform" name="searchform" method="get" action="{$baseurl}/search">

	<input id="search" name="query" keyboard="0"  type="text" placeholder="where can I find?" required>

	<input id="autocomplete" name="searchlocation" placeholder="Enter your city" type="text">

	

	<input type="hidden" name="street_number" id="street_number" value="" />

	<input type="hidden" name="route" id="route" value="" />

	<input type="hidden" name="locality" id="locality" value="" />

	<input type="hidden" name="administrative_area_level_1" id="administrative_area_level_1" value="" />

	<input type="hidden" name="postal_code" id="postal_code" value="" />

	<input type="hidden" name="country" id="country" value="" />

	

	<button type="submit">SEEQE</button>

</form>

{literal}<script>initialize();</script>{/literal}

        </div>

    </div>