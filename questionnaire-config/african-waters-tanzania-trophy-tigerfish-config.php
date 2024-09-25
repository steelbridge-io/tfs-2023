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
	// #name
	if (rgar($entry, '1.6') != '') {
		echo '<b>' . rgar($entry, '1.6') . '&comma;&nbsp;' . rgar($entry, '1.3') . /*. rgar($entry, '1.4') .*/ '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #reservation-#
	if (rgar($entry, '44') != '') {
		echo '<b>' . rgar($entry, '44') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #date-of-arrival-formating to m-d-Y
	$dateOfArrival = rgar($entry, '46');
	$dateTime = DateTime::createFromFormat('Y-m-d', $dateOfArrival);
	
	if ($dateTime) {
		$formattedDateOfArrival = $dateTime->format('m-d-Y');
	} else {
		$formattedDateOfArrival = 'Invalid date format';
	}
	
	// #date-of-arrival
	if (rgar($entry, '46') != '') {
		echo '<b>' . $formattedDateOfArrival . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #date-of-departure-formating -> m-d-Y
	$dateOfDeparture = rgar($entry, '47');
	$departureDateTime = DateTime::createFromFormat('Y-m-d', $dateOfDeparture);
	
	if ($departureDateTime) {
		$formattedDateOfDeparture = $departureDateTime->format('m-d-Y');
	} else {
		$formattedDateOfDeparture = 'Invalid date format';
	}
	
	// #date-of-depature
	if (rgar($entry, '47') != '') {
		echo '<b>' . $formattedDateOfDeparture . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #home-address
	if ( rgar( $entry, '69.1' ) != '' ) {
		// Retrieve address entries
		$street_address = rgar( $entry, '69.1' );
		$address_line_2 = rgar( $entry, '69.2' ) != '' ? rgar( $entry, '69.2' ) : '';
		$city = rgar( $entry, '69.3' );
		$state_province_region = rgar( $entry, '69.4' );
		$zip_postal_code = rgar( $entry, '69.5' );
		
		// Escape content for safe JavaScript usage
		$escaped_address = htmlspecialchars( $street_address, ENT_QUOTES, 'UTF-8' );
		$escaped_address_line_2 = htmlspecialchars( $address_line_2, ENT_QUOTES, 'UTF-8' );
		$escaped_city = htmlspecialchars( $city, ENT_QUOTES, 'UTF-8' );
		$escaped_state_province = htmlspecialchars( $state_province_region, ENT_QUOTES, 'UTF-8' );
		$escaped_zip_postal_code = htmlspecialchars( $zip_postal_code, ENT_QUOTES, 'UTF-8' );
		
		// Construct the popover content with proper line breaks
		$address_data_content = "{$escaped_address}<br>";
		if ($escaped_address_line_2) {
			$address_data_content .= "{$escaped_address_line_2}<br>";
		}
		$address_data_content .= "{$escaped_city}<br>{$escaped_state_province}<br>{$escaped_zip_postal_code}";
		
		// Address button
		echo <<<HTML
    <button type="button" class="btn btn-popover" data-toggle="popover" data-placement="bottom" data-html="true"
    data-content="{$address_data_content}">
        <b>{$escaped_city}...<span style="color:red;">&nbsp;Click to see more</span></b>
    </button>

    <style>
        .popover {
            max-width: none; /* Allow the popover to expand to the size of the content */
        }
    </style>
HTML;
	}
	echo '</td>';
	
	echo '<td>';
	// #email
	if (rgar($entry, '261') != '') {
		echo '<b>' . rgar($entry, '261') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #cell-phone
	if (rgar($entry, '101') != '') {
		echo '<b>' . rgar($entry, '101') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #date-of-birth -> m-d-Y
	$dateOfBirth = rgar($entry, '24');
	$dateTime = DateTime::createFromFormat('Y-m-d', $dateOfBirth);
	
	if ($dateTime) {
		$formattedDateOfBirth = $dateTime->format('m-d-Y');
	} else {
		$formattedDateOfBirth = 'Invalid date format';
	}
	
	// #date-of-birth
	if (rgar($entry, '24') != '') {
		echo '<b>' . $formattedDateOfBirth . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #body-weight
	if (rgar($entry, '284') != '') {
		echo '<b>' . rgar($entry, '284') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #passport-number
	if (rgar($entry, '64') != '') {
		echo '<b>' . rgar($entry, '64') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #passport-expiration-date-formating -> m-d-Y
	$dateOfPassport = rgar($entry, '65');
	$passPortdateTime = DateTime::createFromFormat('Y-m-d', $dateOfPassport);
	
	if ($passPortdateTime) {
		$formattedDateOfPassport = $passPortdateTime->format('m-d-Y');
	} else {
		$formattedDateOfPassport = 'Invalid date format';
	}
	
	// #passport-expiration-date
	if (rgar($entry, '65') != '') {
		echo '<b>' . $formattedDateOfPassport . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #passport-issuing-country
	if (rgar($entry, '281') != '') {
		echo '<b>' . rgar($entry, '281') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #other-country-where-your-passport-was-issued
	if (rgar($entry, '282') != '') {
		echo '<b>' . rgar($entry, '282') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #emergency-contact-person
	if (rgar($entry, '28.3') != '') {
		echo '<b>' . rgar($entry, '28.3') . '&nbsp;</b><b>' . rgar($entry, '28.6') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #relationship-to-traveler
	if (rgar($entry, '29') != '') {
		echo '<b>' . rgar($entry, '29') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #emergency-contact-persons-preferred-phone-number
	if (rgar($entry, '30') != '') {
		echo '<b>' . rgar($entry, '30') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #mandatory-medical-evacuation-company/policy-number
	if (rgar($entry, '72') != '') {
		echo '<b>' . rgar($entry, '72') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #did-you-purchase-trip-cancellation-insurance?
	if (rgar($entry, '210') != '') {
		echo '<b>' . rgar($entry, '210') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #name-of-insurnace-company
	if (rgar($entry, '207') != '') {
		echo '<b>' . rgar($entry, '207') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #travel-insurance-policy-number
	if (rgar($entry, '209') != '') {
		echo '<b>' . rgar($entry, '209') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #passport-photo
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
	// #occupation
	if (rgar($entry, '277') != '') {
		echo '<b>' . rgar($entry, '277') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #please-specify-one
	if (rgar($entry, '296') != '') {
		echo '<b>' . rgar($entry, '296') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #arrival-airline-carrier-being-used
	if (rgar($entry, '48') != '') {
		echo '<b>' . rgar($entry, '48') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #arrival-airline-other-carrier-being-used
	if (rgar($entry, '50') != '') {
		echo '<b>' . rgar($entry, '50') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #flight-arrival-date-formating -> m-d-Y
	$dateOfFlightArr66 = rgar($entry, '66');
	$flightArrDateTime66 = DateTime::createFromFormat('Y-m-d', $dateOfFlightArr66);
	
	if ($flightArrDateTime66) {
		$formattedDateOfFlightArr66 = $flightArrDateTime66->format('m-d-Y');
	} else {
		$formattedDateOfFlightArr66 = 'Invalid date format';
	}
	
	// #flight-arrival-date
	if (rgar($entry, '66') != '') {
		echo '<b>' . $formattedDateOfFlightArr66 . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #arrival-airline-flight-number
	if (rgar($entry, '172') != '') {
		echo '<b>' . rgar($entry, '172') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #scheduled-arrival-time
	if (rgar($entry, '60') != '') {
		echo '<b>' . rgar($entry, '60') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #departure-airline
	if (rgar($entry, '56') != '') {
		echo '<b>' . rgar($entry, '56') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #other-departure-airline
	if (rgar($entry, '57') != '') {
		echo '<b>' . rgar($entry, '57') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #flight-departure-date-formating -> m-d-Y
	$dateOfDeparture = rgar($entry, '67');
	$departureDateTime = DateTime::createFromFormat('Y-m-d', $dateOfDeparture);
	
	if ($departureDateTime) {
		$formattedDateOfDeparture = $departureDateTime->format('m-d-Y');
	} else {
		$formattedDateOfDeparture = 'Invalid date format';
	}
	
	// #flight-departure-date
	if (rgar($entry, '67') != '') {
		echo '<b>' . $formattedDateOfDeparture . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #departure-airline-flight-number
	if (rgar($entry, '58') != '') {
		echo '<b>' . rgar($entry, '58') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #scheduled-departure-time
	if (rgar($entry, '61') != '') {
		echo '<b>' . rgar($entry, '61') . '</b>';
	}
	echo '</td>';
	
	echo  '<td>';
	// Name(s) of others traveling with you
	if (rgar($entry, '21') != '') {
		echo '<b>' . rgar($entry, '21') . '</b>';
	}
	echo  '</td>';
	
	echo '<td>';
	// #dar-es-salaam-hotel-you-will-be-staying-in
	if (rgar($entry, '205') != '') {
		echo '<b>' . rgar($entry, '205') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #other-hotel
	if (rgar($entry, '206') != '') {
		echo '<b>' . rgar($entry, '206') . '</b>';
	}
	echo '</td>';
	
	echo '<td>';
	// #other-hotel-address
	if ( rgar( $entry, '237.1' ) != '' ) {
		// Retrieve address entries
		$other_street_address = rgar( $entry, '237.1' );
		$other_city = rgar( $entry, '237.3' );
		$other_zip_postal_code = rgar( $entry, '237.5' );
		
		// Escape content for safe JavaScript usage
		$other_escaped_address = htmlspecialchars( $other_street_address, ENT_QUOTES, 'UTF-8' );
		$other_escaped_city = htmlspecialchars( $other_city, ENT_QUOTES, 'UTF-8' );
		$other_escaped_zip_postal_code = htmlspecialchars( $other_zip_postal_code, ENT_QUOTES, 'UTF-8' );
		
		// Construct the popover content with proper line breaks
		$other_address_data_content = "{$other_escaped_address}<br>";
		$other_address_data_content .= "{$other_escaped_city}<br>{$other_escaped_zip_postal_code}";
		
		// #other-address-button
		echo <<<HTML
    <button type="button" class="btn btn-popover" data-toggle="popover" data-placement="bottom" data-html="true"
    data-content="{$other_address_data_content}">
        <b>{$other_escaped_city}...<span style="color:red;">&nbsp;Click to see more</span></b>
    </button>

    <style>
        .popover {
            max-width: none; /* Allow the popover to expand to the size of the content */
        }
    </style>
HTML;
	}
	echo '</td>';
	
	echo  '<td>';
	// #how-would-you-rate-your-fishing-skills?
	if (rgar($entry, '114') != '') {
		echo '<b>' . rgar($entry, '114') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// #characterize-your-physical-fitness-level
	if (rgar($entry, '280') != '') {
		echo '<b>' . rgar($entry, '280') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	/**
	 * Define the range of checkbox IDs based on your form configuration. For diet requirements.
	 */
	$checkbox_ids_diet = ['86.1', '86.2', '86.3', '86.4', '86.5', '86.6', '86.7', '86.8', '86.9', '86.10']; // Add as
	// many as needed, or determine dynamically based on your specific form setup.
	
	$selected_diet = [];
	
	foreach ($checkbox_ids_diet as $checkbox_id_diet) {
		$diet_value = rgar($entry, $checkbox_id_diet);
		if (!empty($diet_value)) {
			$selected_diet[] = $diet_value;
		}
	}
	
	// #diet-requirements/special-menu
	if (!empty($selected_diet)) {
		$dietCount = count( $selected_diet );
		foreach ( $selected_diet as $index => $diet ) {
			echo '<b>' . esc_html( $diet ) . '</b>';
			if ( $index !== $dietCount - 1 ) {
				echo '&#44;&nbsp;';
			}
		}
	}
	echo  '</td>';
	
	echo  '<td>';
	// #other-special-diet
	if (rgar($entry, '87') != '') {
		echo '<b>' . rgar($entry, '87') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	/**
	 * Define the range of checkbox IDs based on your form configuration. For food and environmental allergies
	 */
	$checkbox_ids_allergy = ['88.1', '88.2', '88.3', '88.4', '88.5', '88.6', '88.7', '88.8', '88.9']; // Add as many as
	// needed, or determine dynamically based on your specific form setup.
	
	$selected_allergy = [];
	
	foreach ($checkbox_ids_allergy as $checkbox_id_allergy) {
		$allergy_value = rgar($entry, $checkbox_id_allergy);
		if (!empty($allergy_value)) {
			$selected_allergy[] = $allergy_value;
		}
	}
	
	// #diet-requirements/special-menu
	if (!empty($selected_allergy)) {
		$allergyCount = count( $selected_allergy );
		foreach ( $selected_allergy as $index => $allergy ) {
			echo '<b>' . esc_html( $allergy ) . '</b>';
			if ( $index !== $allergyCount - 1 ) {
				echo '&#44;&nbsp;';
			}
		}
	}
	echo  '</td>';
	
	echo  '<td>';
	// #other-allergies
	if (rgar($entry, '89') != '') {
		echo '<b>' . rgar($entry, '89') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// #will-you-be-using-any-prescribed-medicine?
	if (rgar($entry, '274') != '') {
		echo '<b>' . rgar($entry, '274') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// #perscription-details
	if ( rgar( $entry, '275' ) != '' ) {
		// Retrieve the paragraph content from the entry
		$paragraph_content = rgar( $entry, '275' );
		
		// Extract the first 10 words from the paragraph content
		$words_array = explode( ' ', $paragraph_content );
		$excerpt     = implode( ' ', array_slice( $words_array, 0, 2 ) );
		
		// Escape content for safe JavaScript usage
		$escaped_excerpt = htmlspecialchars( $excerpt, ENT_QUOTES, 'UTF-8' );
		$escaped_content = htmlspecialchars( $paragraph_content, ENT_QUOTES, 'UTF-8' );
		
		// Construct the "Read more" link to display in the popover
		$read_more_link = '<a href="#" class="read-more" onclick="showFullContent(this); return false;"></a>';
		
		// Combine the excerpt and "Read more" link for the popover content
		$data_content = "{$escaped_content}";
		
		// #output-perscription-details-button-with-popover
		echo <<<HTML
	    <button type="button" class="btn btn-popover" data-toggle="popover" data-placement="bottom" data-html="true"
	    data-content="{$data_content}"> <b>{$escaped_excerpt}...<span style="color:red;">&nbsp;Click to see
	    more</span></b></button>
	
	    <style>
	        .popover {
	            max-width: none; /* Allow the popover to expand to the size of the content */
	        }
	    </style>
	HTML;
	}
	echo  '</td>';
	
	echo  '<td>';
	// #blood-type
	if (rgar($entry, '276') != '') {
		echo '<b>' . rgar($entry, '276') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// #diet-aversions/dislikes
	if (rgar($entry, '100') != '') {
		echo '<b>' . rgar($entry, '100') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// #do-you-have-any-aversion-to-eating-game-meat?
	if (rgar($entry, '272') != '') {
		echo '<b>' . rgar($entry, '272') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// #please-list-any-special-requests-needs-health-concerns-physical-challenges.
	if ( rgar( $entry, '39' ) != '' ) {
		// Retrieve the paragraph content from the entry
		$specialRequest_paragraph_content = rgar( $entry, '39' );
		
		// Extract the first 10 words from the paragraph content
		$specialRequest_words_array = explode( ' ', $specialRequest_paragraph_content );
		$specialRequest_excerpt     = implode( ' ', array_slice( $specialRequest_words_array, 0, 2 ) );
		
		// Escape content for safe JavaScript usage
		$specialRequest_escaped_excerpt = htmlspecialchars( $specialRequest_excerpt, ENT_QUOTES, 'UTF-8' );
		$specialRequest_escaped_content = htmlspecialchars( $specialRequest_paragraph_content, ENT_QUOTES, 'UTF-8' );
		
		// Construct the "Read more" link to display in the popover
		$specialRequest_read_more_link = '<a href="#" class="read-more" onclick="showFullContent(this); return false;"></a>';
		
		// Combine the excerpt and "Read more" link for the popover content
		$specialRequest_data_content = "{$specialRequest_escaped_content}";
		
		// #output-perscription-details-button-with-popover
		echo <<<HTML
	    <button type="button" class="btn btn-popover" data-toggle="popover" data-placement="bottom" data-html="true"
	    data-content="{$specialRequest_data_content}"> <b>{$specialRequest_escaped_excerpt}...<span style="color:red;">&nbsp;Click to see
	    more</span></b></button>
	
	    <style>
	        .popover {
	            max-width: none; /* Allow the popover to expand to the size of the content */
	        }
	    </style>
	HTML;
	}
	echo  '</td>';
	
	echo  '<td>';
	// #if-applicable-please-note-rooming/roommate-requests
	if (rgar($entry, '167') != '') {
		echo '<b>' . rgar($entry, '167') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// #will-you-be-celebrating-a-special-occasion-while-at-the-lodge?
	if (rgar($entry, '41') != '') {
		echo '<b>' . rgar($entry, '41') . '</b>';
	}
	echo  '</td>';
	
	echo  '<td>';
	// #please-tell-us-about-your-event-or-celebration
	if ( rgar( $entry, '40' ) != '' ) {
		// Retrieve the paragraph content from the entry
		$specialOccasion_paragraph_content = rgar( $entry, '40' );
		
		// Extract the first 10 words from the paragraph content
		$specialOccasion_words_array = explode( ' ', $specialOccasion_paragraph_content );
		$specialOccasion_excerpt     = implode( ' ', array_slice( $specialOccasion_words_array, 0, 2 ) );
		
		// Escape content for safe JavaScript usage
		$specialOccasion_escaped_excerpt = htmlspecialchars( $specialOccasion_excerpt, ENT_QUOTES, 'UTF-8' );
		$specialOccasion_escaped_content = htmlspecialchars( $specialOccasion_paragraph_content, ENT_QUOTES, 'UTF-8' );
		
		// Construct the "Read more" link to display in the popover
		$specialOccasion_read_more_link = '<a href="#" class="read-more" onclick="showFullContent(this); return false;"></a>';
		
		// Combine the excerpt and "Read more" link for the popover content
		$specialOccasion_data_content = "{$specialOccasion_escaped_content}";
		
		// #please-tell-us-about-your-event-or-celebration-popover
		echo <<<HTML
	    <button type="button" class="btn btn-popover" data-toggle="popover" data-placement="bottom" data-html="true"
	    data-content="{$specialOccasion_data_content}"> <b>{$specialOccasion_escaped_excerpt}...<span style="color:red;">&nbsp;Click to see
	    more</span></b></button>
	
	    <style>
	        .popover {
	            max-width: none; /* Allow the popover to expand to the size of the content */
	        }
	    </style>
	HTML;
	}
	echo  '</td>';
	
	echo  '<td>';
	// #what-are-you-most-looking-forward-to-during-your-stay?
	if ( rgar( $entry, '161' ) != '' ) {
		// Retrieve the paragraph content from the entry
		$lookingForwardto_paragraph_content = rgar( $entry, '161' );
		
		// Extract the first 10 words from the paragraph content
		$lookingForwardto_words_array = explode( ' ', $lookingForwardto_paragraph_content );
		$lookingForwardto_excerpt     = implode( ' ', array_slice( $lookingForwardto_words_array, 0, 2 ) );
		
		// Escape content for safe JavaScript usage
		$lookingForwardto_escaped_excerpt = htmlspecialchars( $lookingForwardto_excerpt, ENT_QUOTES, 'UTF-8' );
		$lookingForwardto_escaped_content = htmlspecialchars( $lookingForwardto_paragraph_content, ENT_QUOTES, 'UTF-8' );
		
		// Construct the "Read more" link to display in the popover
		$lookingForwardto_read_more_link = '<a href="#" class="read-more" onclick="showFullContent(this); return false;"></a>';
		
		// Combine the excerpt and "Read more" link for the popover content
		$lookingForwardto_data_content = "{$lookingForwardto_escaped_content}";
		
		//  #what-are-you-most-looking-forward-to-during-your-stay?-popover
		echo <<<HTML
	    <button type="button" class="btn btn-popover" data-toggle="popover" data-placement="bottom" data-html="true"
	    data-content="{$lookingForwardto_data_content}"> <b>{$lookingForwardto_escaped_excerpt}...<span style="color:red;">&nbsp;Click to see
	    more</span></b></button>
	
	    <style>
	        .popover {
	            max-width: none; /* Allow the popover to expand to the size of the content */
	        }
	    </style>
	HTML;
	}
	echo  '</td>';
	
	echo '</tr>';
	
	$counter++;
}

