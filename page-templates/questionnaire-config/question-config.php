<?php

$counter = 1;
/**
 * @param mixed $entry
 * @param int $counter
 * @return void
 */
function formatEntryData(mixed $entry, int $counter): void
{
	$date_created = date("m/d/Y", strtotime($entry['date_created']));
	
	echo '<tr>';
	
	echo '<td class="fixed-column">';
	// Name
	if (rgar($entry, '1.6') != '') {
		echo '<b>' . rgar($entry, '1.6') . '&comma;&nbsp;' . rgar($entry, '1.3') . /*. rgar($entry, '1.4') .*/ '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Reservation #
	if (rgar($entry, '44') != '') {
		echo '<b>' . rgar($entry, '44') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Date of arrival formating to m-d-Y
	$dateOfArrival = rgar($entry, '46');
	$dateTime = DateTime::createFromFormat('Y-m-d', $dateOfArrival);
	
	if ($dateTime) {
		$formattedDateOfArrival = $dateTime->format('m-d-Y');
	} else {
		$formattedDateOfArrival = 'Invalid date format';
	}
	
	// Date of arrival
	if (rgar($entry, '46') != '') {
		echo '<b>' . $formattedDateOfArrival . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Date of departure formating to m-d-Y
	$dateOfDeparture = rgar($entry, '47');
	$departureDateTime = DateTime::createFromFormat('Y-m-d', $dateOfDeparture);
	
	if ($departureDateTime) {
		$formattedDateOfDeparture = $departureDateTime->format('m-d-Y');
	} else {
		$formattedDateOfDeparture = 'Invalid date format';
	}
	
	// Date of departure
	if (rgar($entry, '47') != '') {
		echo '<b>' . $formattedDateOfDeparture . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Email
	if (rgar($entry, '261') != '') {
		echo '<b>' . rgar($entry, '261') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Cell Phone - Text/SMS
	if (rgar($entry, '101') != '') {
		echo '<b>' . rgar($entry, '101') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Shuttle service?
	if (rgar($entry, '34') != '') {
		echo '<b>' . rgar($entry, '34') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Trip Type
	if (rgar($entry, '180') != '') {
		echo '<b>' . rgar($entry, '180') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Extract trip destinations
	$trip_destinations = [];
	foreach ($entry as $key => $value) {
		if (strpos($key, '223.') === 0 && !empty($value)) {
			$trip_destinations[] = $value;
		}
	}
	// Trip destinations
	if (!empty($trip_destinations)) {
		echo '<b>';
		echo esc_html(implode(', ', $trip_destinations));
		echo '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Extract Alaska float destinations
	$trip_rivers_floating_alaska = [];
	foreach ($entry as $key => $value) {
		if (strpos($key, '212.') === 0 && !empty($value)) {
			$trip_rivers_floating_alaska[] = $value;
		}
	}
	// Alaska destinations
	if (!empty($trip_rivers_floating_alaska)) {
		echo '<b>';
		echo esc_html(implode(', ', $trip_rivers_floating_alaska));
		echo '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Birth Date Formating to m-d-Y
	$dateOfBirth = rgar($entry, '24');
	$dateTime = DateTime::createFromFormat('Y-m-d', $dateOfBirth);
	
	if ($dateTime) {
		$formattedDateOfBirth = $dateTime->format('m-d-Y');
	} else {
		$formattedDateOfBirth = 'Invalid date format';
	}
	
	// Birth Date
	if (rgar($entry, '24') != '') {
		echo '<b>' . $formattedDateOfBirth . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Body Weight
	if (rgar($entry, '284') != '') {
		echo '<b>' . rgar($entry, '284') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Height
	if (rgar($entry, '52') != '') {
		echo '<b>' . rgar($entry, '52') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Gender
	if (rgar($entry, '267') != '') {
		echo '<b>' . rgar($entry, '267') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Passport Number
	if (rgar($entry, '64') != '') {
		echo '<b>' . rgar($entry, '64') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Passport Expiration Date Formating to m-d-Y
	$dateOfPassport = rgar($entry, '65');
	$passPortdateTime = DateTime::createFromFormat('Y-m-d', $dateOfPassport);
	
	if ($passPortdateTime) {
		$formattedDateOfPassport = $passPortdateTime->format('m-d-Y');
	} else {
		$formattedDateOfPassport = 'Invalid date format';
	}
	
	// Passport Expiration Date
	if (rgar($entry, '65') != '') {
		echo '<b>' . $formattedDateOfPassport . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Passport Issuing Country
	if (rgar($entry, '281') != '') {
		echo '<b>' . rgar($entry, '281') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Other Country where your passport was issued
	if (rgar($entry, '282') != '') {
		echo '<b>' . rgar($entry, '282') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Emergency Contact Person
	if (rgar($entry, '28.3') != '') {
		echo '<b>' . rgar($entry, '28.3') . '&nbsp;</b><b>' . rgar($entry, '28.6') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Relationship to Traveler
	if (rgar($entry, '29') != '') {
		echo '<b>' . rgar($entry, '29') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Emergency Contact Person's Preferred Phone Number
	if (rgar($entry, '30') != '') {
		echo '<b>' . rgar($entry, '30') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Mandatory Medical Evacuation Company/Policy Number
	if (rgar($entry, '72') != '') {
		echo '<b>' . rgar($entry, '72') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Did you purchase Trip Cancellation Insurance?
	if (rgar($entry, '210') != '') {
		echo '<b>' . rgar($entry, '210') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Name of Travel Insurance company
	if (rgar($entry, '207') != '') {
		echo '<b>' . rgar($entry, '207') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Travel Insurance Policy Number
	if (rgar($entry, '209') != '') {
		echo '<b>' . rgar($entry, '209') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Passport Photo Copy
	if (rgar($entry, '111') != '') {
		// Retrieve the relative URL from the entry.
		$relative_url = rgar($entry, '111');
		
		// Remove any leading slash.
		$relative_url = ltrim($relative_url, '/');
		
		// Define your custom base URL. Edit based on hosting environment.
		$custom_base_url = 'http://www.theflyshop.local/wp-content/uploads';
		
		// Derive the relative part of the path after "uploads" directory.
		$path_relative_to_uploads = strstr($relative_url, 'gravity_forms');
		
		// Construct the full URL using custom base URL.
		$full_url = $custom_base_url . '/' . $path_relative_to_uploads;
		
		// Sanitize the constructed URL.
		$file_url = esc_url($full_url);
		
		// Output the image.
		echo <<<HTML
        <button type="button" class="btn btn-passport-preview btn-popover" data-toggle="popover" data-placement="bottom" data-html="true" data-content="<img src='{$file_url}' alt='Uploaded Photo' style='width: 600px; height: auto;'>">
        <div class="overlay-container">
            <img class='passport-copy-preview' src='{$file_url}' alt='Uploaded Photo'/>
            <p class="overlay-text">Click to see image</p>
        </button>
        </div>
        <style>
            .popover {
                max-width: none; /* Allow the popover to expand to the size of the content */
            }
            .popover-content img {
                width: 600px; /* Adjust the width as needed */
                height: auto; /* Maintain aspect ratio */
            }
        </style>
        HTML;
	}
	echo '</td>';
	
	echo '<td>';
	
	// Russian Visa Photo Copy
	if (rgar($entry, '271') != '') {
		// Retrieve the relative URL from the entry.
		$relative_url = rgar($entry, '271');
		
		// Remove any leading slash.
		$relative_url = ltrim($relative_url, '/');
		
		// Define your custom base URL. Edit based on hosting environment.
		$custom_base_url = 'http://www.theflyshop.local/wp-content/uploads';
		
		// Derive the relative part of the path after "uploads" directory.
		$path_relative_to_uploads = strstr($relative_url, 'gravity_forms');
		
		// Construct the full URL using custom base URL.
		$full_url = $custom_base_url . '/' . $path_relative_to_uploads;
		
		// Sanitize the constructed URL.
		$file_url = esc_url($full_url);
		
		// Output the image.
		echo <<<HTML
            <button type="button" class="btn btn-passport-preview btn-popover" data-toggle="popover" data-placement="bottom" data-html="true" data-content="<img src='{$file_url}' alt='Uploaded Photo' style='width: 600px; height: auto;'>">
            <div class="overlay-container">
                <img class='passport-copy-preview' src='{$file_url}' alt='Uploaded Photo'/>
                <p class="overlay-text">Click to see image</p>
            </button>
            </div>
            <style>
                .popover {
                    max-width: none; /* Allow the popover to expand to the size of the content */
                }
                .popover-content img {
                    width: 600px; /* Adjust the width as needed */
                    height: auto; /* Maintain aspect ratio */
                }
            </style>
        HTML;
	}
	echo '</td>';
	
	echo '<td>';
	// Occupation
	if (rgar($entry, '277') != '') {
		echo '<b>' . rgar($entry, '277') . '</b>';
	}
	echo '</td>';
	
	echo  '<td>';
	// Arrival airport city/town
	if (rgar($entry, '289') != '') {
		echo '<b>' . rgar($entry, '289') . '</b>';
	}
	echo  '</td>';
	
	echo '<td>';
	// Arrival Airline. Carrier being used.
	if (rgar($entry, '48') != '') {
		echo '<b>' . rgar($entry, '48') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Arrival Airline. Other carrier being used.
	if (rgar($entry, '50') != '') {
		echo '<b>' . rgar($entry, '50') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	//Flight arrival date formating to m-d-Y
	$dateOfFlightArr66 = rgar($entry, '66');
	$flightArrDateTime66 = DateTime::createFromFormat('Y-m-d', $dateOfFlightArr66);
	
	if ($flightArrDateTime66) {
		$formattedDateOfFlightArr66 = $flightArrDateTime66->format('m-d-Y');
	} else {
		$formattedDateOfFlightArr66 = 'Invalid date format';
	}
	
	// Flight arrival date
	if (rgar($entry, '66') != '') {
		echo '<b>' . $formattedDateOfFlightArr66 . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Arrival Airline Flight Number
	if (rgar($entry, '172') != '') {
		echo '<b>' . rgar($entry, '172') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Scheduled Arrival Time
	if (rgar($entry, '60') != '') {
		echo '<b>' . rgar($entry, '60') . '</b>';
	}
	echo '</td>';
	
	echo  '<td>';
	// Departure airport city/town
	if (rgar($entry, '290') != '') {
		echo '<b>' . rgar($entry, '290') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Departure Airline
	if (rgar($entry, '56') != '') {
		echo '<b>' . rgar($entry, '56') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Other Departure Airline
	if (rgar($entry, '57') != '') {
		echo '<b>' . rgar($entry, '57') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Flight Departure Date Formating to m-d-Y
	$dateOfDeparture = rgar($entry, '67');
	$departureDateTime = DateTime::createFromFormat('Y-m-d', $dateOfDeparture);
	
	if ($departureDateTime) {
		$formattedDateOfDeparture = $departureDateTime->format('m-d-Y');
	} else {
		$formattedDateOfDeparture = 'Invalid date format';
	}
	
	// Flight Departure Date
	if (rgar($entry, '67') != '') {
		echo '<b>' . $formattedDateOfDeparture . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Departure Airline Flight Number
	if (rgar($entry, '58') != '') {
		echo '<b>' . rgar($entry, '58') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Scheduled Departure Time
	if (rgar($entry, '61') != '') {
		echo '<b>' . rgar($entry, '61') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// How do you plan on arriving at the lodge?
	if (rgar($entry, '168') != '') {
		echo '<b>' . rgar($entry, '168') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Other option on arriving at the lodge
	if (rgar($entry, '175') != '') {
		echo '<b>' . rgar($entry, '175') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// What time do you plan on arriving at the airstrip?
	if (rgar($entry, '236') != '') {
		echo '<b>' . rgar($entry, '236') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Do you need shuttle service from the airstrip?
	if (rgar($entry, '287') != '') {
		echo '<b>' . rgar($entry, '287') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// Do you need shuttle service?
	if (rgar($entry, '34') != '') {
		echo '<b>' . rgar($entry, '34') . '</b>';
	}
	echo '</td>';
	
	echo  '<td>';
	// Estimated time of arrival at lodge?
	if (rgar($entry, '32') != '') {
		echo '<b>' . rgar($entry, '32') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Arrival airport city/town
	if (rgar($entry, '178') != '') {
		echo '<b>' . rgar($entry, '178') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Arrival airline
	if (rgar($entry, '171') != '') {
		echo '<b>' . rgar($entry, '171') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Other airline
	if (rgar($entry, '173') != '') {
		echo '<b>' . rgar($entry, '173') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Flight arrival date formating to m-d-Y
	$dateOfFlightArr = rgar($entry, '169');
	$flightArrDateTime = DateTime::createFromFormat('Y-m-d', $dateOfFlightArr);
	
	if ($flightArrDateTime) {
		$formattedDateOfFlightArr = $flightArrDateTime->format('m-d-Y');
	} else {
		$formattedDateOfFlightArr = 'Invalid date format';
	}
	// Flight arrival date
	if (rgar($entry, '169') != '') {
		echo '<b>' . $formattedDateOfFlightArr . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Arrival airline flight number
	if (rgar($entry, '170') != '') {
		echo '<b>' . rgar($entry, '170') . '</b>';
	}
	echo  '</td>';
	
	echo '<td>';
	// Scheduled arrival time
	if (rgar($entry, '174') != '') {
		echo '<b>' . rgar($entry, '174') . '</b';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Depature airport city/town
	if (rgar($entry, '288') != '') {
		echo '<b>' . rgar($entry, '288') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Departure airline
	if (rgar($entry, '224') != '') {
		echo '<b>' . rgar($entry, '224') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Other departure airline
	if (rgar($entry, '225') != '') {
		echo '<b>' . rgar($entry, '225') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Flight depature date formating to m-d-Y
	$dateOfDepature226 = rgar($entry, '226');
	$departureDateTime226 = DateTime::createFromFormat('Y-m-d', $dateOfDepature226);
	
	if ($departureDateTime226) {
		$formattedDateOfDeparture226 = $departureDateTime226->format('m-d-Y');
	} else {
		$formattedDateOfDeparture226 = 'Invalid date format';
	}
	
	// Flight departure date
	if (rgar($entry, '226') != '') {
		echo '<b>' . $formattedDateOfDeparture226 . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Departure airline flight number
	if (rgar($entry, '227') != '') {
		echo '<b>' . rgar($entry, '227') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Scheduled departure time
	if (rgar($entry, '228') != '') {
		echo '<b>' . rgar($entry, '228') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Name(s) of others traveling with you
	if (rgar($entry, '21') != '') {
		echo '<b>' . rgar($entry, '21') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Would you like to upgrade your hotel in Ulaanbaatar?
	if (rgar($entry, '179') != '') {
		echo '<b>' . rgar($entry, '179') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Will you need extra nights arranged for you?
	if (rgar($entry, '247') != '') {
		echo '<b>' . rgar($entry, '247') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Please let us know the dates of the extra nights
	if (rgar($entry, '251') != '') {
		echo '<b>' . rgar($entry, '251') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Anchorage Alaska Hotel you will be staying in
	if (rgar($entry, '205') != '') {
		echo '<b>' . rgar($entry, '205') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Other Anchorage hotel
	if (rgar($entry, '206') != '') {
		echo '<b>' . rgar($entry, '206') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Other Hotel address
	if (rgar($entry, '237.1') != '') {
		echo '<b>' . rgar($entry, '237.1') . '&#44;</b>&nbsp;<b>' . rgar($entry, '237.3') . '&#44;</b>&nbsp;<b>' . rgar($entry,	'237.5') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Hotel Info - Include telephone number - special instructions
	if (rgar($entry, '216') != '') {
		echo '<b>' . rgar($entry, '216') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Overnight in Manaus
	if (rgar($entry, '231') != '') {
		echo '<b>' . rgar($entry, '231') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Who would you like to share a room with?
	if (rgar($entry, '232') != '') {
		echo '<b>' . rgar($entry, '232') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Overnight on return
	if (rgar($entry, '233') != '') {
		echo '<b>' . rgar($entry, '233') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Room type
	if (rgar($entry, '234') != '') {
		echo '<b>' . rgar($entry, '234') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Who would you like to share a room with?
	if (rgar($entry, '235') != '') {
		echo '<b>' . rgar($entry, '235') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Do you need to rent rods and reels from the lodge?
	if (rgar($entry, '163') != '') {
		echo '<b>' . rgar($entry, '163') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Do you need to use rods and reels provided by the lodge?
	if (rgar($entry, '36') != '') {
		echo '<b>' . rgar($entry, '36') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// What hand do you reel with?
	$reel_with = [];
	foreach ($entry as $key => $value) {
		if (strpos($key, '75.') === 0 && !empty($value)) {
			$reel_with[] = $value;
		}
	}
	// Hand you reel with
	if (!empty($reel_with)) {
		echo '<b> ' . esc_html(implode(', ', $reel_with)) . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Do you need to rent waders and boots from the lodge?
	if (rgar($entry, '164') != '') {
		echo '<b>' . rgar($entry, '164') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Do you need to use waders provided by the lodge?
	if (rgar($entry, '74') != '') {
		echo '<b>' . rgar($entry, '74') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Wader size?
	if (rgar($entry, '123') != '') {
		echo '<b>' . rgar($entry, '123') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Wader size chart for men
	if (rgar($entry, '126') != '') {
		echo '<b>' . rgar($entry, '126') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Wader size chart for women
	if (rgar($entry, '266') != '') {
		echo '<b>' . rgar($entry, '266') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Do you need to use wading boots provided bt the lodge?
	if (rgar($entry, '122') != '') {
		echo '<b>' . rgar($entry, '122') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Shoe size?
	if (rgar($entry, '121') != '') {
		echo '<b>' . rgar($entry, '121') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Men's sizes
	if (rgar($entry, '119') != '') {
		echo '<b>' . rgar($entry, '119') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Womens's sizes
	if (rgar($entry, '120') != '') {
		echo '<b>' . rgar($entry, '120') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Do you need to rent a sleeping bag
	if (rgar($entry, '221') != '') {
		echo '<b>' . rgar($entry, '221') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Do you need any of the following equipment provided by the outfitter?
	$rent_equip = [];
	foreach ($entry as $key => $value) {
		if (strpos($key, '136.') === 0 && !empty($value)) {
			$rent_equip[] = $value;
		}
	}
	// Equipment to rent
	if (!empty($rent_equip)) {
		echo '<b> ' . esc_html(implode(', ', $rent_equip)) . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// Preferred style of fishing
	if (rgar($entry, '118') != '') {
		echo '<b>' . rgar($entry, '118') . '</b>';
	}
	echo  '</td>';
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	echo '</tr>';
	
	$counter++;
}

