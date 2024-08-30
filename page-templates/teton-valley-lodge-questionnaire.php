<?php
/**
 * Template Name: Teton Valley Lodge Template
 * Template Post Type: travel-form
 * Developed for The Fly Shop
 *
 * @package The_Fly_Shop
 * Author: Chris Parsons
 * Author URL: https://steelbridge.io
 */

get_header();

echo '<div id="travel-form-posts" class="container-fluid">';

echo '<div class="container"><h1>' . get_the_title() . '</h1></div>';

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        echo '<div class="post-content container">';
        the_content();
        echo '</div>';
    endwhile;
else :
    echo '<p>';
    _e( 'Sorry, no posts matched your criteria.' );
    echo '</p>';
endif;

echo '<div id="filter-cont" class="container filter-wrap">';
echo '<form method="GET">';

/** @var  $reservation_id */

$reservation_id = filter_input(INPUT_GET, 'filter_reservation_id', FILTER_SANITIZE_SPECIAL_CHARS);
echo '<div class="well">';
echo '<label for="filter_reservation_id">Reservation &#35;:</label>';
echo '<input type="text" id="filter_reservation_id" name="filter_reservation_id" value="'
    . (isset($reservation_id) ? $reservation_id : '')
    . '">';
echo '</div>';

/** @var  $name */

$name = filter_input(INPUT_GET, 'filter_name', FILTER_SANITIZE_SPECIAL_CHARS);
echo '<div class="well">';
echo '<label for="filter_name">Last Name:</label>';
echo '<input type="text" id="filter_name" name="filter_name" value="'
    . (isset($name) ? $name : '')
    . '">';
echo '</div>';


/** @var  $email */

$email = filter_input(INPUT_GET, 'filter_email', FILTER_SANITIZE_SPECIAL_CHARS);
echo '<div class="well">';
echo '<label for="filter_email">Email:</label>';
echo '<input type="text" id="filter_email" name="filter_email" value="'
     . (isset($email) ? $email : '')
     . '">';
echo '</div>';

/** @var  $cell_phone */

$cell_phone = filter_input(INPUT_GET, 'filter_cell_phone', FILTER_SANITIZE_SPECIAL_CHARS);
echo '<div class="well">';
echo '<label for="filter_cell_phone">Cell Phone:</label>';
echo '<input type="tel" id="filter_cell_phone" name="filter_cell_phone" value="'
    . (isset($cell_phone) ? $cell_phone : '')
    . '">';
echo '</div>';

/** @var  $arrival_date */

$arrival_date = filter_input(INPUT_GET, 'filter_arrival_date', FILTER_SANITIZE_SPECIAL_CHARS);
echo '<div class="well">';
echo '<label for="filter_arrival_date">Arrival Date:</label>';
echo '<input type="date" id="filter_arrival_date" name="filter_arrival_date" value="'
    . (isset($arrival_date) ? $arrival_date : '')
    . '">';
echo '</div>';

/** @var  $departure_date */

$departure_date = filter_input(INPUT_GET, 'filter_departure_date', FILTER_SANITIZE_SPECIAL_CHARS);
echo '<div class="well">';
echo '<label for="filter_departure_date">Departure Date:</label>';
echo '<input type="date" id="filter_departure_date" name="filter_departure_date" value="'
    . (isset($departure_date) ? $departure_date : '')
    . '">';
echo '</div>';

/** @var  $trip_type */

/*$trip_type = filter_input(INPUT_GET, 'filter_trip_type', FILTER_SANITIZE_SPECIAL_CHARS);
echo '<div class="well">';
echo '<label class="form-check-label" for="filter_trip_type">Trip Type:</label>';

echo '<div class="form-check form-check-inline">';
echo '<input class="form-check-input" type="radio" id="filter_trip_type_lodge" name="filter_trip_type" value="Lodge"'
    . (isset($trip_type) && $trip_type == 'Lodge' ? ' checked' : '') . '>';
echo '<label class="form-check-label" for="filter_trip_type_lodge">Lodge</label>';
echo '</div>';

echo '<div class="form-check form-check-inline">';
echo '<input class="form-check-input" type="radio" id="filter_trip_type_wilderness" name="filter_trip_type" value="Wilderness Float"' . (isset($trip_type) && $trip_type == 'Wilderness Float' ? ' checked' : '') . '>';
echo '<label class="form-check-label" for="filter_trip_type_wilderness">Wilderness Float</label>';
echo '</div>';

echo '<div class="form-check form-check-inline">';
echo '<input class="form-check-input" type="radio" id="filter_trip_type_both" name="filter_trip_type" value="Both"'
    . (isset($trip_type) && $trip_type == 'Both' ? ' checked' : '') . '>';
echo '<label class="form-check-label" for="filter_trip_type_both">Both</label>';
echo '</div>';

echo '</div>';*/

/** @var array $trip_destinations */

/*$trip_destinations = filter_input(INPUT_GET, 'filter_trip_destination',
    FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
echo '<div class="well">';
echo '<label for="filter_trip_destination">What Destination(s) are you fishing at &#x3f;:</label><br>';

$destinations = [
    'Limay River Lodge' => 'Limay River Lodge',
    'Estancia Arroyo Verde' => 'Estancia Arroyo Verde',
    'Estancia Pilolil' => 'Estancia Pilolil',
    'Collon Cura Lodge' => 'Collon Cura Lodge',
    'Estancia Tipiliuke' => 'Estancia Tipiliuke',
    'Estancia San Huberto' => 'Estancia San Huberto',
    'Estancia Quemquemtreu' => 'Estancia Quemquemtreu',
    'Tres Rios Lodge' => 'Tres Rios Lodge'
];

foreach ($destinations as $value => $label) {
    $checked = isset($trip_destinations) && in_array($value, $trip_destinations) ? ' checked' : '';
    echo '<div class="form-check form-check-inline">';
    echo '<input type="radio" class="form-check-input" id="filter_trip_destination_' . strtolower(str_replace(' ', '_', $label)) . '" name="filter_trip_destination[]" value="' . $value . '"' . $checked . '>';
    echo '<label class="form-check-label" for="filter_trip_destination_' . strtolower(str_replace(' ', '_', $label)) . '">' . $label . '</label><br>';
    echo '</div>';
}
echo '</div>';*/


/** @var array $trip_rivers_floating_alaska */

/*$trip_rivers_floating_alaska = filter_input(INPUT_GET, 'filter_rivers_floating_alaska',
    FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
echo '<div class="well">';
echo '<label for="filter_trip_destination">Rivers in Alaska you are floating:</label><br>';

$float_destinations = [
    'Kanektok River Float' => 'Kanektok River Float',
    'Goodnews River Float' => 'Goodnews River Float',
    'Kisarolik River Float' => 'Kisarolik River Float',
    'Arolik River' => 'Arolik River',
    'Moraine River' => 'Moraine River',
    'Alagnak River' => 'Alagnak River',
    'Other' => 'Other'
];

foreach ($float_destinations as $value => $label) {
    $checked = isset($trip_rivers_floating_alaska) && in_array($value, $trip_rivers_floating_alaska) ? ' checked' : '';
    echo '<div class="form-check form-check-inline">';
    echo '<input class="form-check-input" type="radio" id="filter_rivers_floating_alaska' . strtolower(str_replace(' ', '_', $label)) . '" name="filter_rivers_floating_alaska[]" value="' . $value . '"' . $checked . '>';
    echo '<label class="form-check-label" for="filter_rivers_floating_alaska' . strtolower(str_replace(' ', '_', $label)) . '">' . $label . '</label><br>';
    echo '</div>';
}
echo '</div>';*/

echo '<div id="question-items" class="display-items-inline well">';

/** @var  $tel_number */

$tel_number = filter_input(INPUT_GET, 'filter_tel_number', FILTER_SANITIZE_SPECIAL_CHARS);

echo '<label for="filter_tel_number">Tel:</label>';
echo '<input class="no-margin" type="checkbox" id="filter_tel_number" name="filter_tel_number" value="Yes"'
    . (isset($tel_number) && $tel_number == 'Yes' ? ' checked' : '') . '>';

/** @var  $shuttle_service */

$shuttle_service = filter_input(INPUT_GET, 'filter_shuttle_service', FILTER_SANITIZE_SPECIAL_CHARS);

echo '<label for="filter_shuttle_service">Shuttle Service:</label>';
echo '<input class="no-margin" type="checkbox" id="filter_shuttle_service" name="filter_shuttle_service" value="Yes"'
    . (isset($shuttle_service) && $shuttle_service == 'Yes' ? ' checked' : '') . '>';

/** @var  $other_travelers */

$other_travelers = filter_input(INPUT_GET, 'filter_other_travelers', FILTER_SANITIZE_SPECIAL_CHARS);

echo '<label for="filter_other_travelers">Other Travelers:</label>';
echo '<input class="no-margin" type="checkbox" id="filter_other_travelers" name="filter_other_travelers" value="Yes"'
    . (isset($other_travelers) && $other_travelers == 'Yes' ? ' checked' : '') . '>';

/** @var  $needs_equip */

$needs_equip = filter_input(INPUT_GET, 'filter_needs_equip', FILTER_SANITIZE_SPECIAL_CHARS);

echo '<label for="filter_needs_equip">Needs Rods:</label>';
echo '<input class="no-margin" type="checkbox" id="filter_needs_equip" name="filter_needs_equip" value="Yes"'
    . (isset($needs_equip) && $needs_equip == 'Yes' ? ' checked' : '') . '>';

/** @var  $dietary_allergies */

$dietary_allergies = filter_input(INPUT_GET, 'filter_dietary_allergies', FILTER_SANITIZE_SPECIAL_CHARS);

echo '<label for="filter_dietary_allergies">Allergies &amp; Dietary:</label>';
echo '<input class="no-margin" type="checkbox" id="filter_dietary_allergies" name="filter_dietary_allergies" value="Yes"'
    . (isset($dietary_allergies) && $dietary_allergies == 'Yes' ? ' checked' : '') . '>';

echo '</div>';

$base_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$base_url = strtok($base_url, '?');

echo '<input class="filter-btn" type="submit" value="Filter">';
echo '<a href="'. $base_url .'" class="btn btn-danger clear-results" title="Clear results">Clear Results</a>';
echo '</form>';
echo '</div>';

/**
 * This script is setting up some search criteria
 * Initially, it's setting up that only the 'active' status is wanted in the search criteria
 */

$search_criteria['status'] = 'active';

if (isset($reservation_id) && $reservation_id != '') {
    $search_criteria['field_filters'][] = array('key' => '44', 'value' => $reservation_id); // check reservation id
}

if (isset($_GET['filter_name']) && $_GET['filter_name'] != '') {
	$search_criteria['field_filters'][] = array('key' => '1.6', 'value' => $_GET['filter_name']); // check last name
}

if (isset($_GET['filter_email']) && $_GET['filter_email'] != '') {
	$search_criteria['field_filters'][] = array('key' => '261', 'value' => $_GET['filter_email']); // check email
}

if (isset($_GET['filter_cell_phone']) && $_GET['filter_cell_phone'] != '') {
    $search_criteria['field_filters'][] = array('key' => '101', 'value' => $_GET['filter_cell_phone']); // check cell phone
}

if (isset($arrival_date) && $arrival_date != '') {
    $search_criteria['field_filters'][] = array('key' => '46', 'value' => $arrival_date); // check arrival date
}

if (isset($departure_date) && $departure_date != '') {
    $search_criteria['field_filters'][] = array('key' => '47', 'value' => $departure_date); // check departure date
}

if (isset($trip_type) && $trip_type != '') {
    $search_criteria['field_filters'][] = array('key' => '180', 'value' => $trip_type);
}

if (isset($trip_destinations) && !empty($trip_destinations)) {
    foreach ($trip_destinations as $destination) {
        $search_criteria['field_filters'][] = array('key' => '223', 'value' => $destination);
    }
}

if (isset($trip_rivers_floating_alaska) && !empty($trip_rivers_floating_alaska)) {
    foreach ($trip_rivers_floating_alaska as $float_destination) {
        $search_criteria['field_filters'][] = array('key' => '212', 'value' => $float_destination);
    }
}

if (isset($shuttle_service)) {
    $search_criteria['field_filters'][] = array('key' => '34', 'value' => 'Yes');
}

if (isset($needs_equip)) {
    $search_criteria['field_filters'][] = array('key' => '36', 'value' => 'Yes');
}

if ($other_travelers == 'Yes') {
    $search_criteria['field_filters'][] = array('key' => '21', 'operator' => 'isnot', 'value' => '');
}

if ($dietary_allergies == 'Yes') {
    $search_criteria['field_filters'][] = array('key' => '37', 'operator' => 'isnot', 'value' => '');
}

if ($tel_number == 'Yes') {
    $search_criteria['field_filters'][] = array('key' => '26', 'operator' => 'isnot', 'value' => '');
}

echo '<div class="container form-list-wrap">';
/**
 * The form_id variable is used to store the unique identifier of a form.
 *
 * @var string $form_id The unique identifier of the Gravity Form.
 */
$form_id                   = '41'; // Your Gravity Form ID
$search_criteria['status'] = 'active';
$sorting                   = array(
    'key'        => '1.6',
    'direction'  => 'ASC',
    'is_numeric' => FALSE,
); // 1.6 is the field id for last name

/**
 * This variable contains the entries for some specific data.
 *
 * The entries are stored as an array, where each element represents an entry.
 * Each entry is an associative array with the following structure:
 * - 'id': (integer) The unique identifier of the entry.
 * - 'name': (string) The name of the entry.
 * - 'description': (string) The description of the entry.
 * - 'created_at': (string) The timestamp when the entry was created.
 *
 * Example usage:
 * $entries = [
 *     [
 *         'id' => 1,
 *         'name' => 'Entry 1',
 *         'description' => 'Lorem ipsum dolor sit amet.',
 *         'created_at' => '2022-01-01 10:00:00',
 *     ],
 *     [
 *         'id' => 2,
 *         'name' => 'Entry 2',
 *         'description' => 'Consectetur adipiscing elit.',
 *         'created_at' => '2022-01-02 12:30:00',
 *     ],
 *     ...
 * ];
 *
 * @var array $entries The array of entries.
 */

/*
echo '<pre>';
print_r($search_criteria);
echo '</pre>';
 */

$entries = GFAPI::get_entries( $form_id, $search_criteria, $sorting );

$counter = 1;
foreach ( $entries as $entry ) {
    $date_created = date( "m/d/Y", strtotime( $entry['date_created'] ) );

    echo '<div class="container destination-form">';
    echo '<div class="row">';

    // Reservation #
    if (rgar($entry, '44') != '') {
        echo '<div class="col-12 form-entry"><b>Reservation - &#35;</b>'
            . rgar($entry, '44') . '</div>';
    }

    // Date of arrival
    if (rgar($entry, '46') != '') {
        echo '<div class="col-12 form-entry"><b>Date of arrival:</b> '
            . rgar($entry, '46') . '</div>';
    }

    // Date of departure
    if (rgar($entry, '47') != '') {
        echo '<div class="col-12 form-entry"><b>Date of departure:</b> '
            . rgar($entry, '47') . '</div>';
    }

    // Name
    if (rgar($entry, '1.6') != '') {
        echo '<div class="col-12 name-fml form-entry"><b>Last Name:</b><span class="name-g">' . rgar($entry, '1.6') . '</span><b>First Name:</b><span class="name-g">' . rgar($entry, '1.3') . '</span><b>Middle Name:</b><span class="name-g">' . rgar($entry, '1.4') . '</span></div>';
    }

    // Email
	if (rgar($entry, '261') != '') {
		echo '<div class="col-12 name-fml form-entry"><b>Email:</b><span class="name-g">' . rgar($entry, '261') . '</div>';
	}

    // Cell Phone - Text/SMS
    if (rgar($entry, '101') != '') {
        echo '<div class="col-12 name-fml form-entry"><b>Cell Phone:</b><span class="name-g">' . rgar($entry, '101') . '</div>';
    }

    if (isset($tel_number) && $tel_number == 'Yes') {
        echo '<div class="col-12 form-entry"><b>Tel:</b>'
            . rgar( $entry, '26' ) . '</div>';
    }




    if (isset($shuttle_service) && $shuttle_service == 'Yes') {
        echo '<div class="col-12 form-entry"><b>Do you need Shuttle service?</b><br>'
            . rgar( $entry, '34' ) . '</div>';

       /* echo '<div class="col-12 form-entry"><b>If you are in need of a shuttle, please let us know location of pick-up either Jackson or Idaho Falls and put your arrival/departure flight numbers and arrival/departure times below. This service is extra and not included in the price of the trip:</b><br>'
            . rgar( $entry, '35' ) . '</div>'; */
    }

    /*if (isset($needs_equip) && $needs_equip == 'Yes') {
        echo '<div class="col-12 form-entry"><b>Needs Rods?</b><br>'
            . rgar( $entry, '36' ) . '</div>';
    }

    if (isset($dietary_allergies) && $dietary_allergies == 'Yes') {
        echo '<div class="col-12 form-entry"><b>Please list any allergies and/or dietary restrictions here:</b><br>'
            . rgar( $entry, '37' ) . '</div>';
    }*/

    ?>

    <p>
        <a class="btn btn-primary" data-bs-toggle="collapse"
           href="#revealButton<?= $counter ?>" role="button" aria-expanded="false"
           aria-controls="revealButton<?= $counter ?>">More details:&nbsp;<?php echo rgar($entry, '1.6') ?></a>
    </p>

    <div class="row">
    <div class="col">
    <div class="collapse multi-collapse" id="revealButton<?= $counter ?>">

    <?php


    // Trip Type
    if (rgar($entry, '180') != '') {
        echo '<div class="col-12 form-entry"><b>Trip Type</b><i>(Lodge/Wilderness Float/Both)</i>: ' . rgar($entry, '180') . '</div>';
    }

    // Extract trip destinations
    $trip_destinations = [];
    foreach ($entry as $key => $value) {
        if (strpos($key, '223.') === 0 && !empty($value)) {
            $trip_destinations[] = $value;
        }
    }

    if (!empty($trip_destinations)) {
        echo '<div class="col-12 form-entry"><b>What Destination(s) are you fishing at &#x3f; :</b> ';
        echo esc_html(implode(', ', $trip_destinations));
        echo '</div>';
    }

    // Extract Alaska float destinations
    $trip_rivers_floating_alaska = [];
    foreach ($entry as $key => $value) {
        if (strpos($key, '212.') === 0 && !empty($value)) {
            $trip_rivers_floating_alaska[] = $value;
        }
    }

    if (!empty($trip_rivers_floating_alaska)) {
        echo '<div class="col-12 form-entry"><b>Rivers in Alaska you are floating:</b> ';
        echo esc_html(implode(', ', $trip_rivers_floating_alaska));
        echo '</div>';
    }

    // Cell Phone
    if (rgar($entry, '101') != '') {
        echo '<div class="col-12 form-entry"><b>Cell Phone:</b>'
            . rgar($entry, '101') . '</div>';
    }

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
	    echo '<div class="col-12 form-entry"><b>Date of birth:</b>'
	         . $formattedDateOfBirth . '</div>';
    }

	// Body Weight
	if (rgar($entry, '284') != '') {
		echo '<div class="col-12 form-entry"><b>Body weight:</b>'
		     . rgar( $entry, '284' ) . '</div>';
	}

	// Height
	if (rgar($entry, '52') != '') {
		echo '<div class="col-12 form-entry"><b>Height:</b>'
		     . rgar( $entry, '52' ) . '</div>';
	}

    // Gender
    if (rgar($entry, '267') != '') {
        echo '<div class="col-12 form-entry"><b>Gender:</b>'
            . rgar( $entry, '267' ) . '</div>';
    }

    // Passport Number
    if (rgar($entry, '64') != '') {
        echo '<div class="col-12 form-entry"><b>Passport Number:</b>'
            . rgar( $entry, '64' ) . '</div>';
    }

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
        echo '<div class="col-12 form-entry"><b>Passport Expiration Date:</b>'
            . $formattedDateOfPassport . '</div>';
    }

    // Passport Issuing Country
    if (rgar($entry, '281') != '') {
        echo '<div class="col-12 form-entry"><b>Passport Issuing Country:</b>'
            . rgar( $entry, '281' ) . '</div>';
    }

    // Other Country where your passport was issued
    if (rgar($entry, '282') != '') {
        echo '<div class="col-12 form-entry"><b>Passport Issuing Country:</b>'
            . rgar( $entry, '282' ) . '</div>';
    }

    // Emergency Contact Person
    if (rgar($entry, '28.3') != '') {
        echo '<div class="col-12 name-fml form-entry"><b>Emergency Contact Person (Name):</b><br><b>First Name:</b><span class="name-g">' . rgar($entry, '28.3') . '</span><b>Last Name:</b><span class="name-g">' . rgar($entry, '28.6') . '</span></div>';
    }

    // Relationship to Traveler
    if (rgar($entry, '29') != '') {
        echo '<div class="col-12 form-entry"><b>Relationship to Traveler:</b>'
            . rgar( $entry, '29' ) . '</div>';
    }

    // Emergency Contact Person's Preferred Phone Number
    if (rgar($entry, '30') != '') {
        echo '<div class="col-12 form-entry"><b>Emergency Contact Person&#39;s Preferred Phone Number:</b>'
            . rgar( $entry, '30' ) . '</div>';
    }

    // Mandatory Medical Evacuation Company/Policy Number
    if (rgar($entry, '72') != '') {
        echo '<div class="col-12 form-entry"><b>Mandatory Medical Evacuation Company/Policy Number:</b>'
            . rgar( $entry, '72' ) . '</div>';
    }

    // Did you purchase Trip Cancellation Insurance?
    if (rgar($entry, '210') != '') {
        echo '<div class="col-12 form-entry"><b>Did you purchase Trip Cancellation Insurance?:</b>'
            . rgar( $entry, '210' ) . '</div>';
    }

    // Name of Travel Insurance company
    if (rgar($entry, '207') != '') {
        echo '<div class="col-12 form-entry"><b>Name of Travel Insurance company:</b>'
            . rgar( $entry, '207' ) . '</div>';
    }

    // Travel Insurance Policy Number
    if (rgar($entry, '209') != '') {
        echo '<div class="col-12 form-entry"><b>Travel Insurance Policy Number:</b>'
            . rgar( $entry, '209' ) . '</div>';
    }

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
        echo '<div class="col-12 form-entry"><b>Passport Photo Copy:</b><br>';
        echo '<img src="' . $file_url . '" alt="Uploaded Photo" style="max-width: 100%; height: auto;"></div>';
    }

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
        echo '<div class="col-12 form-entry"><b>Russian Visa Photo Copy:</b><br>';
        echo '<img src="' . $file_url . '" alt="Uploaded Photo" style="max-width: 100%; height: auto;"></div>';
    }

    // Occupation
    if (rgar($entry, '277') != '') {
        echo '<div class="col-12 form-entry"><b>Occupation:</b>'
            . rgar($entry, '277') . '</div>';
    }

    // Arrival Airline. Carrier being used.
    if (rgar($entry, '48') != '') {
        echo '<div class="col-12 form-entry"><b>Arrival Airline:</b>'
            . rgar($entry, '48') . '</div>';
    }

    // Arrival Airline. Other carrier being used.
    if (rgar($entry, '50') != '') {
        echo '<div class="col-12 form-entry"><b>Other Arrival Airline:</b>'
            . rgar($entry, '50') . '</div>';
    }

    // Flight Arrival Date
    if (rgar($entry, '66') != '') {
        echo '<div class="col-12 form-entry"><b>Flight Arrival Date:</b>'
            . rgar($entry, '66') . '</div>';
    }

    // Arrival Airline Flight Number
    if (rgar($entry, '172') != '') {
        echo '<div class="col-12 form-entry"><b>Arrival Airline Flight Number:</b>'
            . rgar($entry, '172') . '</div>';
    }

    // Scheduled Arrival Time
    if (rgar($entry, '60') != '') {
        echo '<div class="col-12 form-entry"><b>Scheduled Arrival Time:</b>'
            . rgar($entry, '60') . '</div>';
    }

    // Departure Airline
    if (rgar($entry, '56') != '') {
        echo '<div class="col-12 form-entry"><b>Departure Airline:</b>'
            . rgar($entry, '56') . '</div>';
    }

    // Other Departure Airline
    if (rgar($entry, '57') != '') {
        echo '<div class="col-12 form-entry"><b>Other Departure Airline:</b>'
            . rgar($entry, '57') . '</div>';
    }


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
        echo '<div class="col-12 form-entry"><b>Flight Departure Date:</b>'
            . $formattedDateOfDeparture . '</div>';
    }

    // Departure Airline Flight Number
    if (rgar($entry, '58') != '') {
        echo '<div class="col-12 form-entry"><b>Departure Airline Flight Number:</b>'
            . rgar($entry, '58') . '</div>';
    }

    // Scheduled Departure Time
    if (rgar($entry, '61') != '') {
        echo '<div class="col-12 form-entry"><b>Scheduled Daparture Time:</b>'
            . rgar($entry, '61') . '</div>';
    }

    // How do you plan on arriving at the lodge?
    if (rgar($entry, '168') != '') {
        echo '<div class="col-12 form-entry"><b>How do you plan on arriving at the lodge?:</b>'
            . rgar($entry, '168') . '</div>';
    }

    // Other option on arriving at the lodge
    if (rgar($entry, '175') != '') {
        echo '<div class="col-12 form-entry"><b>Other option on arriving at the lodge:</b>'
            . rgar($entry, '175') . '</div>';
    }

    // What time do you plan on arriving at the airstrip?
    if (rgar($entry, '236') != '') {
        echo '<div class="col-12 form-entry"><b>What time do you plan on arriving at the airstrip?:</b>'
            . rgar($entry, '236') . '</div>';
    }

    // Do you need shuttle service from the airstrip?
    if (rgar($entry, '294') != '') {
        echo '<div class="col-12 form-entry"><b>Do you need shuttle service from the airstrip?:</b>'
            . rgar($entry, '294') . '</div>';
    }

    // Do you need shuttle service from the airstrip?
    if (rgar($entry, '287') != '') {
        echo '<div class="col-12 form-entry"><b>Do you need shuttle service from the airstrip?:</b>'
            . rgar($entry, '287') . '</div>';
    }

    // Do you need shuttle service?
    if (rgar($entry, '34') != '') {
        echo '<div class="col-12 form-entry"><b>Do you need shuttle service?:</b>'
            . rgar($entry, '34') . '</div>';
    }

    // Estimated time of arrival at lodge?
    if (rgar($entry, '32') != '') {
        echo '<div class="col-12 form-entry"><b>Estimated time of arrival at lodge?:</b>'
            . rgar($entry, '32') . '</div>';
    }

    // Arrival airport city/town
    if (rgar($entry, '178') != '') {
        echo '<div class="col-12 form-entry"><b>Arrival airport city/town?:</b>'
            . rgar($entry, '178') . '</div>';
    }

    // Arrival airline
    if (rgar($entry, '171') != '') {
        echo '<div class="col-12 form-entry"><b>Arrival airline:</b>'
            . rgar($entry, '171') . '</div>';
    }

    // Other arrival airline
    if (rgar($entry, '173') != '') {
        echo '<div class="col-12 form-entry"><b>Other arrival airline:</b>'
            . rgar($entry, '173') . '</div>';
    }

    // Flight arrival date formating to m-d-Y
    $dateOfArrival = rgar($entry, '169');
    $arrivalDateTime = DateTime::createFromFormat('Y-m-d', $dateOfArrival);

    if ($arrivalDateTime) {
        $formattedDateOfArrival = $arrivalDateTime->format('m-d-Y');
    } else {
        $formattedDateOfArrival = 'Invalid date format';
    }

    // Flight arrival date
    if (rgar($entry, '169') != '') {
        echo '<div class="col-12 form-entry"><b>Flight Departure Date:</b>'
            . $formattedDateOfArrival . '</div>';
    }

    // Arrival airline flight number
    if (rgar($entry, '170') != '') {
        echo '<div class="col-12 form-entry"><b>Arrival airline flight number:</b>'
            . rgar($entry, '170') . '</div>';
    }

    // Scheduled arrival time
    if (rgar($entry, '174') != '') {
        echo '<div class="col-12 form-entry"><b>Scheduled arrival time:</b>'
            . rgar($entry, '174') . '</div>';
    }

    // Departure airlaine
    if (rgar($entry, '224') != '') {
        echo '<div class="col-12 form-entry"><b>Departure airline:</b>'
            . rgar($entry, '224') . '</div>';
    }

    // Other departure airline
    if (rgar($entry, '225') != '') {
        echo '<div class="col-12 form-entry"><b>Other departure airline:</b>'
            . rgar($entry, '225') . '</div>';
    }

    // Flight depature date formating to m-d-Y
    $dateOfDepature226 = rgar($entry, '226');
    $departureDateTime226 = DateTime::createFromFormat('Y-m-d', $dateOfDepature226);

    if ($departureDateTime226) {
        $formattedDateOfDeparture226 = $departureDateTime226->format('m-d-Y');
    } else {
        $formattedDateOfDeparture226 = 'Invalid date format';
    }

    // Flight arrival date
    if (rgar($entry, '226') != '') {
        echo '<div class="col-12 form-entry"><b>Flight Departure Date:</b>'
            . $formattedDateOfDeparture226 . '</div>';
    }

    // Departure airlaine flight number
    if (rgar($entry, '227') != '') {
        echo '<div class="col-12 form-entry"><b>Departure airline flight number:</b>'
            . rgar($entry, '227') . '</div>';
    }

    // Scheduled departure time
    if (rgar($entry, '228') != '') {
        echo '<div class="col-12 form-entry"><b>Scheduled departure time:</b>'
            . rgar($entry, '228') . '</div>';
    }

    // Name(s) of others traveling with you
    if (rgar($entry, '21') != '') {
        echo '<div class="col-12 form-entry"><b>Name(s) of others traveling with you:</b>'
            . rgar($entry, '21') . '</div>';
    }

    // Will you need extra nights arranged for you?
    if (rgar($entry, '247') != '') {
        echo '<div class="col-12 form-entry"><b>Will you need extra nights arranged for you?:</b>'
            . rgar($entry, '247') . '</div>';
    }

    // Please let us know the dates of the extra nights
    if (rgar($entry, '251') != '') {
        echo '<div class="col-12 form-entry"><b>Please let us know the dates of the extra nights:</b>'
            . rgar($entry, '251') . '</div>';
    }

    // Anchorage Alaska Hotel you will be staying in
    if (rgar($entry, '205') != '') {
        echo '<div class="col-12 form-entry"><b>Anchorage Alaska Hotel you will be staying in:</b>'
            . rgar($entry, '205') . '</div>';
    }

    // Other hotel
    if (rgar($entry, '206') != '') {
        echo '<div class="col-12 form-entry"><b>Other hotel:</b>'
            . rgar($entry, '206') . '</div>';
    }

    // Other Hotel address
    if (rgar($entry, '237.1') != '') {
        echo '<legend class="gfield_label gform-field-label gfield_label_before_complex">Address of Hotel</legend><br>';
        echo '<div class="col-12 name-fml form-entry"><b>Street address:</b><span class="name-g">' . rgar($entry, '237.1') . '</span><b>City:</b><span class="name-g">' . rgar($entry, '237.3') . '</span><b>ZIP / Postal Code:</b><span class="name-g">' . rgar($entry, '237.5') . '</span></div>';
    }

    // Hotel Info - Include telephone number - special instructions
    if (rgar($entry, '216') != '') {
        echo '<div class="col-12 form-entry"><b>Hotel info - Telephone number - Special instructions:</b>'
            . rgar($entry, '216') . '</div>';
    }

    // Overnight in Manaus
    if (rgar($entry, '231') != '') {
        echo '<div class="col-12 form-entry"><b>Overnight in Manaus:</b>'
            . rgar($entry, '231') . '</div>';
    }

    // Who would you like to share a room with?
    if (rgar($entry, '232') != '') {
        echo '<div class="col-12 form-entry"><b>Who would you like to share a room with?:</b>'
            . rgar($entry, '232') . '</div>';
    }

    // Overnight on return
    if (rgar($entry, '233') != '') {
        echo '<div class="col-12 form-entry"><b>Overnight on return?:</b>'
            . rgar($entry, '233') . '</div>';
    }

    // Room type
    if (rgar($entry, '234') != '') {
        echo '<div class="col-12 form-entry"><b>Room type?:</b>'
            . rgar($entry, '234') . '</div>';
    }

    // Who would you like to share a room with?
    if (rgar($entry, '234') != '') {
        echo '<div class="col-12 form-entry"><b>Who would you like to share a room with?:</b>'
            . rgar($entry, '234') . '</div>';
    }

    echo '<h3 class="gsection_title">Fishing Gear and Information</h3>';

    // Do you need to rent rods and reels from the lodge?
    if (rgar($entry, '163') != '') {
        echo '<div class="col-12 form-entry"><b>Do you need to rent rods and reels from the lodge?:</b>'
            . rgar($entry, '163') . '</div>';
    }

    // Do you need to use rods and reels provided by the lodge?
    if (rgar($entry, '36') != '') {
        echo '<div class="col-12 form-entry"><b>Do you need to use rods and reels provided by the lodge?:</b>'
            . rgar($entry, '36') . '</div>';
    }

    // What hand do you reel with?
    if (rgar($entry, '75') != '') {
        echo '<div class="col-12 form-entry"><b>What hand do you reel with?:</b>'
            . rgar($entry, '75') . '</div>';
    }

    // Do you need to rent waders and boots from the lodge?
    if (rgar($entry, '164') != '') {
        echo '<div class="col-12 form-entry"><b>Do you need to rent waders and boots from the lodge?:</b>'
            . rgar($entry, '164') . '</div>';
    }

    // Do you need to use waders provided by the lodge?
    if (rgar($entry, '74') != '') {
        echo '<div class="col-12 form-entry"><b>Do you need to use waders provided by the lodge?:</b>'
            . rgar($entry, '74') . '</div>';
    }

    // Wader size?
    if (rgar($entry, '123') != '') {
        echo '<div class="col-12 form-entry"><b>Wader size?:</b>'
            . rgar($entry, '123') . '</div>';
    }

    // Wader size chart for men
    if (rgar($entry, '126') != '') {
        echo '<div class="col-12 form-entry"><b>Wader size chart for men:</b>'
            . rgar($entry, '126') . '</div>';
    }

    // Wader size chart for women
    if (rgar($entry, '266') != '') {
        echo '<div class="col-12 form-entry"><b>Wader size chart for women:</b>'
            . rgar($entry, '266') . '</div>';
    }

    // Do you need to use wading boots provided bt the lodge?
    if (rgar($entry, '122') != '') {
        echo '<div class="col-12 form-entry"><b>Do you need to use wading boots provided bt the lodge?:</b>'
            . rgar($entry, '122') . '</div>';
    }

    // Shoe size?
    if (rgar($entry, '121') != '') {
        echo '<div class="col-12 form-entry"><b>Shoe size?:</b>'
            . rgar($entry, '121') . '</div>';
    }

    // Men's sizes
    if (rgar($entry, '119') != '') {
        echo '<div class="col-12 form-entry"><b>Men&apos;s sizes:</b>'
            . rgar($entry, '119') . '</div>';
    }

    // Womens's sizes
    if (rgar($entry, '120') != '') {
        echo '<div class="col-12 form-entry"><b>Women&apos;s sizes:</b>'
            . rgar($entry, '120') . '</div>';
    }

    // Do you need to rent a sleeping bag
    if (rgar($entry, '221') != '') {
        echo '<div class="col-12 form-entry"><b>Do you need to rent a sleeping bag?:</b>'
            . rgar($entry, '221') . '</div>';
    }

    // Do you need any of the following equipment provided by the outfitter?
    if (rgar($entry, '136') != '') {
        echo '<div class="col-12 form-entry"><b>Do you need any of the following equipment provided by the outfitter?:</b>'
            . rgar($entry, '136') . '</div>';
    }

    // Preferred style of fishing
    if (rgar($entry, '118') != '') {
        echo '<div class="col-12 form-entry"><b>Preferred style of fishing:</b>'
            . rgar($entry, '118') . '</div>';
    }

    // Is there a particular fish you wish to target?
    if (rgar($entry, '182') != '') {
        echo '<div class="col-12 form-entry"><b>Is there a particular fish you wish to target?:</b>'
            . rgar($entry, '182') . '</div>';
    }

    /**
     * Define the range of checkbox IDs based on your form configuration. For certain species of fish being targeting.
     */
    $checkbox_ids = ['214.1', '214.2', '214.3', '214.4', '214.5', '214.6', '214.7', '214.8', '214.9']; // Add as many as needed, or determine dynamically based on your specific form setup.

    $selected_species = [];

    foreach ($checkbox_ids as $checkbox_id) {
        $species_value = rgar($entry, $checkbox_id);
        if (!empty($species_value)) {
            $selected_species[] = $species_value;
        }
    }

    // Is there a certain species of fish you are targeting on this trip?
    if (!empty($selected_species)) {
        echo '<div class="col-12 form-entry form-entry-ul"><b>Is there a certain species of fish you are targeting on this trip?:</b><ul>';
        foreach ($selected_species as $species) {
            echo '<li>' . esc_html($species) . '</li>';
        }
        echo '</ul></div>';
    }

    // Do you have interest in fishing the Kenai River to target Trout and/or Silver Salmon?
    if (rgar($entry, '217') != '') {
        echo '<div class="col-12 form-entry"><b>Do you have interest in fishing the Kenai River to target Trout and/or Silver Salmon?:</b>'
            . rgar($entry, '217') . '</div>';
    }

    // Type of fishing you prefer?
    if (rgar($entry, '244') != '') {
        echo '<div class="col-12 form-entry"><b>Type of fishing you prefer?:</b>'
            . rgar($entry, '244') . '</div>';
    }

    // Are you fishing 1 or 2 to a boat/guide?
    if (rgar($entry, '240') != '') {
        echo '<div class="col-12 form-entry"><b>Are you fishing 1 or 2 to a boat/guide?:</b>'
            . rgar($entry, '240') . '</div>';
    }

    // Name of fishing companion you would like to share the boat with
    if (rgar($entry, '241') != '') {
        echo '<div class="col-12 form-entry"><b>Name of fishing companion you would like to share the boat with:</b>'
            . rgar($entry, '241') . '</div>';
    }

    /**
     * Define the range of checkbox IDs based on your form configuration. For what species have you fished for?
     */
    $checkbox_ids_saltSpecies = ['242.1', '242.2', '242.3', '242.4', '242.5']; // Add as many as needed, or determine dynamically based on your specific form setup.

    $selected_saltSpecies = [];

    foreach ($checkbox_ids_saltSpecies as $checkbox_id_saltSpecie) {
        $saltSpecies_value = rgar($entry, $checkbox_id_saltSpecie);
        if (!empty($saltSpecies_value)) {
            $selected_saltSpecies[] = $saltSpecies_value;
        }
    }

    // Have you fished in saltwater before? If so, where and for what species?
    if (!empty($selected_saltSpecies)) {
        echo '<div class="col-12 form-entry form-entry-ul"><b>Have you fished in saltwater before? If so, where and for what species?:</b><ul>';
        foreach ($selected_saltSpecies as $saltSpecies) {
            echo '<li>' . esc_html($saltSpecies) . '</li>';
        }
        echo '</ul></div>';
    }

    // Other saltwater species
    if (rgar($entry, '243') != '') {
        echo '<div class="col-12 form-entry"><b>Other saltwater species:</b>'
            . rgar($entry, '243') . '</div>';
    }

    // Which style of guiding sounds like the best fit for you?
    if (rgar($entry, '246') != '') {
        echo '<div class="col-12 form-entry"><b>Which style of guiding sounds like the best fit for you?:</b>'
            . rgar($entry, '246') . '</div>';
    }

    // What type of fishing experience do you prefer?
    if (rgar($entry, '125') != '') {
        echo '<div class="col-12 form-entry"><b>What type of fishing experience do you prefer?:</b>'
            . rgar($entry, '125') . '</div>';
    }

    // How would you rate your fishing skills?
    if (rgar($entry, '114') != '') {
        echo '<div class="col-12 form-entry"><b>How would you rate your fishing skills?:</b>'
            . rgar($entry, '114') . '</div>';
    }

    // How would you rate boating/rafting experience?
    if (rgar($entry, '222') != '') {
        echo '<div class="col-12 form-entry"><b>How would you rate boating/rafting experience?:</b>'
            . rgar($entry, '222') . '</div>';
    }

    // Do you want to substitute Horseback Guided Fishing for one angling day?
    if (rgar($entry, '254') != '') {
        echo '<div class="col-12 form-entry"><b>Do you want to substitute horseback guided fishing for one angling day?:</b>'
            . rgar($entry, '254') . '</div>';
    }

    // Date to substitute horseback guided fishing day
    if (rgar($entry, '255') != '') {
        echo '<div class="col-12 form-entry"><b>Do you want to substitute horseback guided fishing for one angling day?:</b>'
            . rgar($entry, '255') . '</div>';
    }

    // Horse riding experience
    if (rgar($entry, '181') != '') {
        echo '<div class="col-12 form-entry"><b>Horse riding experience:</b>'
            . rgar($entry, '181') . '</div>';
    }

    // Characterize your wading ability
    if (rgar($entry, '218') != '') {
        echo '<div class="col-12 form-entry"><b>Characterize your wading ability:</b>'
            . rgar($entry, '218') . '</div>';
    }

    // Interested in heli fishing at Poronoui Lodge?
    if (rgar($entry, '265') != '') {
        echo '<div class="col-12 form-entry"><b>Interested in heli fishing at Poronoui Lodge?:</b>'
            . rgar($entry, '265') . '</div>';
    }

    echo '<h3 class="gsection_title">Health, Diet &amp; Medical Information</h3>';

    // Characterize your physical fitness level
    if (rgar($entry, '280') != '') {
        echo '<div class="col-12 form-entry"><b>Characterize your physical fitness level:</b>'
            . rgar($entry, '280') . '</div>';
    }

    /**
     * Define the range of checkbox IDs based on your form configuration. For diet requirements.
     */
    $checkbox_ids_diet = ['86.1', '86.2', '86.3', '86.4', '86.5', '86.6', '88.7', '88.8', '88.9', '88.10']; // Add as many as needed, or determine dynamically based on your specific form setup.

    $selected_diet = [];

    foreach ($checkbox_ids_diet as $checkbox_id_diet) {
        $diet_value = rgar($entry, $checkbox_id_diet);
        if (!empty($diet_value)) {
            $selected_diet[] = $diet_value;
        }
    }

    // Diet Requirements/Special Menu
    if (!empty($selected_diet)) {
        echo '<div class="col-12 form-entry form-entry-ul"><b>Diet Requirements/Special Menu:</b><ul>';
        foreach ($selected_diet as $diet) {
            echo '<li>' . esc_html($diet) . '</li>';
        }
        echo '</ul></div>';
    }

    // Other special diet
    if (rgar($entry, '87') != '') {
        echo '<div class="col-12 form-entry"><b>Other special diet:</b>'
            . rgar($entry, '87') . '</div>';
    }

    /**
     * Define the range of checkbox IDs based on your form configuration. For food and environmental allergies
     */
    $checkbox_ids_allergy = ['88.1', '88.2', '88.3', '88.4', '88.5', '88.6', '88.7', '88.8']; // Add as many as needed, or determine dynamically based on your specific form setup.

    $selected_allergy = [];

    foreach ($checkbox_ids_allergy as $checkbox_id_allergy) {
        $allergy_value = rgar($entry, $checkbox_id_allergy);
        if (!empty($allergy_value)) {
            $selected_allergy[] = $allergy_value;
        }
    }

    // Allergies (Food and Environmental)
    if (!empty($selected_allergy)) {
        echo '<div class="col-12 form-entry form-entry-ul"><b>Allergies (Food and Environmental):</b><ul>';
        foreach ($selected_allergy as $allergy) {
            echo '<li>' . esc_html($allergy) . '</li>';
        }
        echo '</ul></div>';
    }

    // Other allergies
    if (rgar($entry, '89') != '') {
        echo '<div class="col-12 form-entry"><b>Other allergies:</b>'
            . rgar($entry, '89') . '</div>';
    }

    /**
     * Define the range of checkbox IDs based on your form configuration. For misc allergic reactions
     */
    $checkbox_ids_allergyMisc = ['183.1', '183.2', '183.3', '183.4', '183.5']; // Add as many as needed, or determine dynamically based on your specific form setup.

    $selected_allergyMisc = [];

    foreach ($checkbox_ids_allergyMisc as $checkbox_id_allergyMisc) {
        $allergyMisc_value = rgar($entry, $checkbox_id_allergyMisc);
        if (!empty($allergyMisc_value)) {
            $selected_allergyMisc[] = $allergyMisc_value;
        }
    }

    // Have you had allergic reactions to any of the following?
    if (!empty($selected_allergyMisc)) {
        echo '<div class="col-12 form-entry form-entry-ul"><b>Have you had allergic reactions to any of the following?:</b><ul>';
        foreach ($selected_allergyMisc as $allergyMisc) {
            echo '<li>' . esc_html($allergyMisc) . '</li>';
        }
        echo '</ul></div>';
    }

    // Other misc allergies
    if (rgar($entry, '184') != '') {
        echo '<div class="col-12 form-entry"><b>Other allergies:</b>'
            . rgar($entry, '184') . '</div>';
    }

    // Will you be using any prescribed medicine?
    if (rgar($entry, '274') != '') {
        echo '<div class="col-12 form-entry"><b>Will you be using any prescribed medicine?:</b>'
            . rgar($entry, '274') . '</div>';
    }

    // Please provide details of Medications you are taking
    if (rgar($entry, '275') != '') {
        echo '<div class="col-12 form-entry"><b>Please provide details of Medications you are taking:</b><br>'
            . rgar($entry, '275') . '</div>';
    }

    // Blood type
    if (rgar($entry, '276') != '') {
        echo '<div class="col-12 form-entry"><b>Blood type:</b><br>'
            . rgar($entry, '276') . '</div>';
    }

    // Further information
    if (rgar($entry, '185') != '') {
        echo '<div class="col-12 form-entry"><b>Further information:</b><br>'
            . rgar($entry, '185') . '</div>';
    }

    /**
     * Define the range of checkbox IDs based on your form configuration. For have you ever had any of the following.
     */
    $checkbox_ids_reactions = ['186.1', '186.2', '186.3', '186.4', '186.5', '186.6', '186.7', '186.8', '186.9',]; // Add as many as needed, or determine dynamically based on your specific form setup.

    $selected_reactions = [];

    foreach ($checkbox_ids_reactions as $checkbox_id_reactions) {
        $reactions_value = rgar($entry, $checkbox_id_reactions);
        if (!empty($reactions_value)) {
            $selected_reactions[] = $reactions_value;
        }
    }

    // Do you have or have you ever had any of the following?
    if (!empty($selected_reactions)) {
        echo '<div class="col-12 form-entry form-entry-ul"><b>Do you have or have you ever had any of the following?:</b><ul>';
        foreach ($selected_reactions as $reactions) {
            echo '<li>' . esc_html($reactions) . '</li>';
        }
        echo '</ul></div>';
    }

    // Other reactions
    if (rgar($entry, '187') != '') {
        echo '<div class="col-12 form-entry"><b>Other reaction(s):</b><br>'
            . rgar($entry, '187') . '</div>';
    }

    // If you checked any of the conditions above, please explain as necessary. Please include any other health requirements.
    if (rgar($entry, '188') != '') {
        echo '<div class="col-12 form-entry"><b>If you checked any of the conditions above, please explain as necessary. Please include any other health requirements:</b><br>'
            . rgar($entry, '188') . '</div>';
    }

    // Diet Aversions/Dislikes
    if (rgar($entry, '100') != '') {
        echo '<div class="col-12 form-entry"><b>Diet Aversions/Dislikes:</b><br>'
            . rgar($entry, '100') . '</div>';
    }

    // Do you have any really strong food preferences? Are there any foods that would make or break your trip?
    if (rgar($entry, '201') != '') {
        echo '<div class="col-12 form-entry"><b>Do you have any really strong food preferences? Are there any foods that would make or break your trip?:</b><br>'
            . rgar($entry, '201') . '</div>';
    }

    // Do you have any aversion to eating game meat?
    if (rgar($entry, '272') != '') {
        echo '<div class="col-12 form-entry"><b>Do you have any aversion to eating game meat?:</b><br>'
            . rgar($entry, '272') . '</div>';
    }

    // Please list any Special Requests, Needs, Health Concerns, Physical Challenges
    if (rgar($entry, '39') != '') {
        echo '<div class="col-12 form-entry"><b>Please list any special requests, needs, health concerns, physical challenges:</b><br>'
            . rgar($entry, '39') . '</div>';
    }

    // Have you been Vaccinated for COVID-19?
    if (rgar($entry, '257') != '') {
        echo '<div class="col-12 form-entry"><b>Have you been vaccinated for COVID-19?:</b><br>'
            . rgar($entry, '257') . '</div>';
    }

    // Brand/type of Vaccination and dates recieved
    if (rgar($entry, '262') != '') {
        echo '<div class="col-12 form-entry"><b>Brand/type of vaccination and dates recieved:</b><br>'
            . rgar($entry, '262') . '</div>';
    }

    // Vaccination photo copy
    if (rgar($entry, '264') != '') {
        // Retrieve the relative URL from the entry.
        $vax_url = rgar($entry, '264');

        // Remove any leading slash.
        $vax_url = ltrim($vax_url, '/');

        // Define your custom base URL. Edit based on hosting environment.
        $custom_vax_url = 'http://www.theflyshop.local/wp-content/uploads';

        // Derive the relative part of the path after "uploads" directory.
        $path_relative_to_vax_uploads = strstr($vax_url, 'gravity_forms');

        // Construct the full URL using custom base URL.
        $full_vax_url = $custom_vax_url . '/' . $path_relative_to_vax_uploads;

        // Sanitize the constructed URL.
        $vax_file_url = esc_url($full_vax_url);

        // Output the image.
        echo '<div class="col-12 form-entry"><b>Upload vaccination card here:</b><br>';
        echo '<img src="' . $vax_file_url . '" alt="Uploaded Photo" style="max-width: 100%; height: auto;"></div>';
    }

    // Medical insurance including HTA CV19 related isolation, quarantine and clinical care?
    if (rgar($entry, '263') != '') {
        echo '<div class="col-12 form-entry"><b>Medical insurance including HTA CV19 related isolation, quarantine and clinical care?:</b><br>'
            . rgar($entry, '263') . '</div>';
    }

    echo '<h3 class="gsection_title">Additional Information</h3>';

    // If you are arriving early and or departing late, would you like to hire a guide for those days?
    if (rgar($entry, '220') != '') {
        echo '<div class="col-12 form-entry"><b>If you are arriving early and or departing late, would you like to hire a guide for those days?:</b><br>'
            . rgar($entry, '220') . '</div>';
    }

    // What Beverage would you like with your Lunches?
    if (rgar($entry, '213') != '') {
        echo '<div class="col-12 form-entry"><b>What Beverage would you like with your Lunches?:</b><br>'
            . rgar($entry, '213') . '</div>';
    }

    // Would you like the Lodge to purchase Beverages for you for the Float?
    if (rgar($entry, '159') != '') {
        echo '<div class="col-12 form-entry"><b>Would you like the Lodge to purchase Beverages for you for the Float?:</b><br>'
            . rgar($entry, '159') . '</div>';
    }

    // Beverage Choice #1 (Soda, Coke, Sprite, etc) $7.50
    if (rgar($entry, '146') != '') {
        echo '<div class="col-12 form-entry"><b>Beverage choice #1 (soda, Coke, Sprite, etc):</b><br>'
            . rgar($entry, '146') . '</div>';
    }

    // Beverage Choice #1 Amount
    if (rgar($entry, '147') != '') {
        echo '<div class="col-12 form-entry"><b>Beverage choice #1 amount:</b><br>'
            . rgar($entry, '147') . '</div>';
    }

    // Beverage Choice #2 (Gatorade, Iced Tea, etc) $9.50
    if (rgar($entry, '148') != '') {
        echo '<div class="col-12 form-entry"><b>Beverage choice #2 (Gatorade, Iced Tea, etc):</b><br>'
            . rgar($entry, '148') . '</div>';
    }

    // Beverage Choice #2 Amount
    if (rgar($entry, '149') != '') {
        echo '<div class="col-12 form-entry"><b>Beverage choice #2 amount:</b><br>'
            . rgar($entry, '149') . '</div>';
    }

    // Beverage choice #3 (domestic, Bud, Miller, etc) $9.50
    if (rgar($entry, '151') != '') {
        echo '<div class="col-12 form-entry"><b>Beverage choice #3 (domestic, Bud, Miller, etc):</b><br>'
            . rgar($entry, '151') . '</div>';
    }

    // Beverage choice #3 amount
    if (rgar($entry, '152') != '') {
        echo '<div class="col-12 form-entry"><b>Beverage choice #3 amount:</b><br>'
            . rgar($entry, '152') . '</div>';
    }

    // Beverage Choice #4 (Import, Heineken, etc) $11.50
    if (rgar($entry, '153') != '') {
        echo '<div class="col-12 form-entry"><b>Beverage choice #4 (import, Heineken, etc):</b><br>'
            . rgar($entry, '153') . '</div>';
    }

    // Beverage choice #4 amount
    if (rgar($entry, '154') != '') {
        echo '<div class="col-12 form-entry"><b>Beverage choice #4 amount:</b><br>'
            . rgar($entry, '154') . '</div>';
    }

    // Beverage Choice #5 (Microbrews) $13.50
    if (rgar($entry, '156') != '') {
        echo '<div class="col-12 form-entry"><b>Beverage choice #5 (microbrews):</b><br>'
            . rgar($entry, '156') . '</div>';
    }

    // Beverage choice #5 amount
    if (rgar($entry, '155') != '') {
        echo '<div class="col-12 form-entry"><b>Beverage choice #5 amount:</b><br>'
            . rgar($entry, '155') . '</div>';
    }

    // Beverage Choice #6 Box Wine @ Cost
    if (rgar($entry, '157') != '') {
        echo '<div class="col-12 form-entry"><b>Beverage Choice #6 Box Wine @ Cost:</b><br>'
            . rgar($entry, '157') . '</div>';
    }

    // Beverage choice #6 amount
    if (rgar($entry, '158') != '') {
        echo '<div class="col-12 form-entry"><b>Beverage choice #6 amount:</b><br>'
            . rgar($entry, '158') . '</div>';
    }

    // Please let us know the level of housekeeping you prefer:
    if (rgar($entry, '189') != '') {
        echo '<div class="col-12 form-entry"><b>Please let us know the level of housekeeping you prefer:</b><br>'
            . rgar($entry, '189') . '</div>';
    }

    // Would you like to place an alcohol order?
    if (rgar($entry, '133') != '') {
        echo '<div class="col-12 form-entry"><b>Would you like to place an alcohol order?:</b><br>'
            . rgar($entry, '133') . '</div>';
    }

    // Preferred beverage to be purchased
    if (rgar($entry, '134') != '') {
        echo '<div class="col-12 form-entry"><b>Preferred beverage to be purchased:</b><br>'
            . rgar($entry, '134') . '</div>';
    }

    // Amount
    if (rgar($entry, '135') != '') {
        echo '<div class="col-12 form-entry"><b>Amount:</b><br>'
            . rgar($entry, '135') . '</div>';
    }

    // Other amount to be purchased
    if (rgar($entry, '238') != '') {
        echo '<div class="col-12 form-entry"><b>Other amount to be purchased:</b><br>'
            . rgar($entry, '238') . '</div>';
    }

    /**
     * Define the range of checkbox IDs based on your form configuration. For drink preference.
     */
    $checkbox_ids_drinks = ['229.1', '229.2', '229.3', '229.4', '229.5']; // Add as many as needed, or determine dynamically based on your specific form setup.

    $selected_drinks = [];

    foreach ($checkbox_ids_drinks as $checkbox_id_drinks) {
        $drinks_value = rgar($entry, $checkbox_id_drinks);
        if (!empty($drinks_value)) {
            $selected_drinks[] = $drinks_value;
        }
    }

    // Do you have or have you ever had any of the following?
    if (!empty($selected_drinks)) {
        echo '<div class="col-12 form-entry form-entry-ul"><b>Please let us know your drink preference:</b><ul>';
        foreach ($selected_drinks as $drinks) {
            echo '<li>' . esc_html($drinks) . '</li>';
        }
        echo '</ul></div>';
    }

    // Shirt size
    if (rgar($entry, '253') != '') {
        echo '<div class="col-12 form-entry"><b>Shirt size:</b><br>'
            . rgar($entry, '253') . '</div>';
    }

    // Choice of bed
    if (rgar($entry, '230') != '') {
        echo '<div class="col-12 form-entry"><b>Choice of bed:</b><br>'
            . rgar($entry, '230') . '</div>';
    }

    // Preferred evening beverage
    if (rgar($entry, '99') != '') {
        echo '<div class="col-12 form-entry"><b>Preferred evening beverage:</b><br>'
            . rgar($entry, '99') . '</div>';
    }

    // If applicable, please note rooming/roommate requests
    if (rgar($entry, '167') != '') {
        echo '<div class="col-12 form-entry"><b>If applicable, please note rooming/roommate requests:</b><br>'
            . rgar($entry, '167') . '</div>';
    }

    // Will you be celebrating a special occasion while at the lodge?
    if (rgar($entry, '41') != '') {
        echo '<div class="col-12 form-entry"><b>Will you be celebrating a special occasion while at the lodge?:</b><br>'
            . rgar($entry, '41') . '</div>';
    }

    // Please tell us about your event or celebration
    if (rgar($entry, '40') != '') {
        echo '<div class="col-12 form-entry"><b>Please tell us about your event or celebration:</b><br>'
            . rgar($entry, '40') . '</div>';
    }

    /**
     * Define the range of checkbox IDs based on your form configuration. For participating in any guided activities during your stay? Select all that apply.
     */
    $checkbox_ids_activities = ['285.1', '285.2', '285.3', '285.4', '285.5', '285.6', '285.7', '285.8']; // Add as many as needed, or determine dynamically based on your specific form setup.

    $selected_activities = [];

    foreach ($checkbox_ids_activities as $checkbox_id_activities) {
        $activities_value = rgar($entry, $checkbox_id_activities);
        if (!empty($activities_value)) {
            $selected_activities[] = $activities_value;
        }
    }

    // Do you have or have you ever had any of the following?
    if (!empty($selected_activities)) {
        echo '<div class="col-12 form-entry form-entry-ul"><b>Are you interested in participating in any guided activities during your stay?:</b><ul>';
        foreach ($selected_activities as $activities) {
            echo '<li>' . esc_html($activities) . '</li>';
        }
        echo '</ul></div>';
    }

    // Were you interested in massages during your stay at Taylor River Lodge?
    if (rgar($entry, '200') != '') {
        echo '<div class="col-12 form-entry"><b>Were you interested in massages during your stay at Taylor River Lodge?:</b><br>'
            . rgar($entry, '200') . '</div>';
    }

    // Date you would prefer your Massage?
    if (rgar($entry, '269') != '') {
        echo '<div class="col-12 form-entry"><b>Date you would prefer your Massage?:</b><br>'
            . rgar($entry, '269') . '</div>';
    }

    // What are you most looking forward to during your stay?
    if (rgar($entry, '161') != '') {
        echo '<div class="col-12 form-entry"><b>What are you most looking forward to during your stay?:</b><br>'
            . rgar($entry, '161') . '</div>';
    }

    // Trip Goals. Let us know what you hope to accomplish
    if (rgar($entry, '202') != '') {
        echo '<div class="col-12 form-entry"><b>Trip Goals. Let us know what you hope to accomplish:</b><br>'
            . rgar($entry, '202') . '</div>';
    }

    // Interested in pre-booking Scuba diving?
    if (rgar($entry, '258') != '') {
        echo '<div class="col-12 form-entry"><b>Interested in pre-booking Scuba diving?:</b><br>'
            . rgar($entry, '258') . '</div>';
    }

    // Date you wish to arrange Scuba Diving?
    if (rgar($entry, '258') != '') {
        echo '<div class="col-12 form-entry"><b>Date you wish to arrange Scuba Diving?:</b><br>'
            . rgar($entry, '258') . '</div>';
    }

    // Scuba diving date formating to m-d-Y
    $dateOfScuba = rgar($entry, '259');
    $scubaDateTime = DateTime::createFromFormat('Y-m-d', $dateOfScuba);

    if ($scubaDateTime) {
        $formattedDateOfScuba = $scubaDateTime->format('m-d-Y');
    } else {
        $formattedDateOfScuba = 'Invalid date format';
    }

    // Date you wish to arrange scuba diving?
    if (rgar($entry, '259') != '') {
        echo '<div class="col-12 form-entry"><b>Flight Departure Date:</b>'
            . $formattedDateOfScuba . '</div>';
    }

    /**
     * Define the range of checkbox IDs based on your form configuration. For selecting leisure activities.
     */
    $checkbox_ids_leisureActivity = ['260.1', '260.2', '260.3', '260.4', '260.5', '260.6', '260.7', '260.8', '260.9']; // Add as many as needed, or determine dynamically based on your specific form setup.

    $selected_leisureActivity = [];

    foreach ($checkbox_ids_leisureActivity as $checkbox_id_leisureActivity) {
        $leisureActivity_value = rgar($entry, $checkbox_id_leisureActivity);
        if (!empty($leisureActivity_value)) {
            $selected_leisureActivity[] = $leisureActivity_value;
        }
    }

    // Do you have or have you ever had any of the following?
    if (!empty($selected_leisureActivity)) {
        echo '<div class="col-12 form-entry form-entry-ul"><b>Are you interested in booking any leisure activities?:</b><ul>';
        foreach ($selected_leisureActivity as $leisureActivity) {
            echo '<li>' . esc_html($leisureActivity) . '</li>';
        }
        echo '</ul></div>';
    }

    // Do you give permission for East Coast Angling to use photo's taken of yourself with fish onboard during your trip?
    if (rgar($entry, '278') != '') {
        echo '<div class="col-12 form-entry"><b>Do you give permission for East Coast Angling to use photo&apos;s taken of yourself with fish onboard during your trip?:</b>'
            . rgar($entry, '278') . '</div>';
    }

    echo '</div>'; // end .collapse div
    echo '</div>'; // end col div
    echo '</div>'; // end row div

    echo '</div>'; // end row div
    echo '</div>'; // end destination-form div
    $counter++;
}
echo '</div>'; // end form-list-wrap div

echo '</div>'; // end travel-form-posts div

get_footer();
