
	<div class="common">
		<div id="new_body">
			<div id="body_900">
				<div id="body_left">
				</div>
				<div id="body_main">
					<div class="title"><h1 class="floatl">SEEQE Results</h1>
						<!-- <div class="floatr"><a href="{$baseurl}/ask" class="sharenowadd"><span>{$lang114}</span></a>
						</div> -->
						<div class="clear">
						</div>
					</div>
					<div class="Center9001n">
						<div class="Center9001RightG">
							<div class="Center9001Content">
								<div class="list_area">
									<div class="subsort">
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
										  // Create the autocomplete object, restricting the search
										  // to geographical location types.
										  autocomplete = new google.maps.places.Autocomplete(
										      /** @type {HTMLInputElement} */(document.getElementById('autocomplete')),
										      { types: ['geocode'] });
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
										<form class="form-wrapper cf" id="searchform" name="searchform" method="get" action="{$baseurl}/search" style="margin: 0; margin-bottom: 20px; padding: 0; width: auto;" onsubmit="fillInAddress();">
											<div style="position:relative;display:inline;">												
												<input type="text" id="query2" name="query" value="{$query|stripslashes}" />												
												<input id="autocomplete" name="searchlocation" placeholder="" type="text" value="{if $city}{$city},{/if}{if $prov}{$prov},{/if}{if $country}{$country}{/if}">												
												<input type="hidden" name="street_number" id="street_number" value="" />												
												<input type="hidden" name="route" id="route" value="" />												
												<input type="hidden" name="locality" id="locality" value="{$city}" />												
												<input type="hidden" name="administrative_area_level_1" id="administrative_area_level_1" value="{$prov}" />												
												<input type="hidden" name="postal_code" id="postal_code" value="" />												
												<input type="hidden" name="country" id="country" value="{$country}" />
											</div>											
											<button type="submit">Find It</button>
										</form>
										{literal}<script>initialize();</script>{/literal}
										<div class="clear">
										</div>
									</div>
								</div>
								<div class="answers_area">
									<div class="bb_day bb15"><h3>{$lang170} {$query|stripslashes}</h3>
									</div>
									<div class="bb_list">
										<ul class="list_alist">	{if $ques|@count gt 0}	                                            {section name=i loop=$ques}                                            {insert name=get_member_profilepicture assign=profilepicture value=var USERID=$ques[i].USERID}                                            {insert name=answer_count2 value=a assign=tac pid=$ques[i].PID}                                            {insert name=get_seo_url assign=qtitle value=a title=$ques[i].title PID=$ques[i].PID}
											<li>
											<div class="and_rate mag15" onClick="top.location.href='{$baseurl}/{$qtitle}';">	{$tac}
											</div>
											<div class="right"><!-- <a href="{$baseurl}/{$qtitle}"><img src="{$imageurl}/icon_ask_1.gif" border="0" align="absmiddle"/></a>  -->                                                    <a class="list_nn" href="{$baseurl}/{$qtitle}">{$ques[i].title|stripslashes}</a><span class="silver_nn">
												<ul class="sortby">
													<li><a href="{$baseurl}/{$ques[i].seo}">{$ques[i].name|stripslashes}</a></li>
													<li>{$lang60} <a href="{$baseurl}/member/{$ques[i].USERID}/{$ques[i].username|stripslashes|truncate:25:" ... ":true}">{$ques[i].username|stripslashes}</a></li>
													<li>{insert name=get_time_to_days_ago value=var time=$ques[i].time_added}</li>
													<li class="last">{$tac} {$lang161}</li>
												</ul>
												<div class="clear">
												</div></span>
											</div>
											<div class="clear">
											</div></li>{/section}										  {else}										  We are sorry but SEEQE has found no results with the term "{$query|stripslashes}". Please SEEQE again.										  {/if}
										</ul>
									</div>
									<div id="divAskQuesPager" class="page_num">	{$pagelinks}
									</div>
								</div>
							</div>
						</div>
						<div class="clear">
						</div>
					</div>
				</div>
				<div id="body_right">
				</div>
				<div class="clear">
				</div>
			</div>
			<div id="body_900F">
			</div>
		</div>
	</div>