<?php
/**
 * Template Name: Travel Form Posts
 * Template Post Type: travel-form
 * Developed for The Fly Shop
 *
 * @package The_Fly_Shop
 * Author: Chris Parsons
 * Author URL: https://steelbridge.io
 */

get_header();

echo '<div id="travel-form-posts" class="container-fluid">';

echo '<div class="container well"><h1>' . get_the_title() . '</h1></div>';

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

echo '<label for="filter_reservation_id">Reservation &#35;:</label>';
echo '<input type="text" id="filter_reservation_id" name="filter_reservation_id" value="'
    . (isset($reservation_id) ? $reservation_id : '')
    . '">';

/** @var  $arrival_date */

$arrival_date = filter_input(INPUT_GET, 'filter_arrival_date', FILTER_SANITIZE_SPECIAL_CHARS);

echo '<label for="filter_arrival_date">Arrival Date:</label>';
echo '<input type="date" id="filter_arrival_date" name="filter_arrival_date" value="'
    . (isset($arrival_date) ? $arrival_date : '')
    . '">';

/** @var  $departure_date */

$departure_date = filter_input(INPUT_GET, 'filter_departure_date', FILTER_SANITIZE_SPECIAL_CHARS);

echo '<label for="filter_departure_date">Departure Date:</label>';
echo '<input type="date" id="filter_departure_date" name="filter_departure_date" value="'
    . (isset($departure_date) ? $departure_date : '')
    . '">';

/** @var  $trip_type */

$trip_type = filter_input(INPUT_GET, 'filter_trip_type', FILTER_SANITIZE_SPECIAL_CHARS);

echo '<label for="filter_trip_type">Trip Type:</label>';

echo '<input type="radio" id="filter_trip_type_lodge" name="filter_trip_type" value="Lodge"'
    . (isset($trip_type) && $trip_type == 'Lodge' ? ' checked' : '') . '>';
echo '<label for="filter_trip_type_lodge">Lodge</label>';

echo '<input type="radio" id="filter_trip_type_wilderness" name="filter_trip_type" value="Wilderness Float"'
    . (isset($trip_type) && $trip_type == 'Wilderness Float' ? ' checked' : '') . '>';
echo '<label for="filter_trip_type_wilderness">Wilderness Float</label>';

echo '<input type="radio" id="filter_trip_type_both" name="filter_trip_type" value="Both"'
    . (isset($trip_type) && $trip_type == 'Both' ? ' checked' : '') . '>';
echo '<label for="filter_trip_type_both">Both</label>';


/** @var array $trip_destinations */

$trip_destinations = filter_input(INPUT_GET, 'filter_trip_destination',
    FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);

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
    echo '<input type="radio" id="filter_trip_destination_' . strtolower(str_replace(' ', '_', $label)) . '" name="filter_trip_destination[]" value="' . $value . '"' . $checked . '>';
    echo '<label for="filter_trip_destination_' . strtolower(str_replace(' ', '_', $label)) . '">' . $label . '</label><br>';
}


/** @var array $trip_rivers_floating_alaska */

$trip_rivers_floating_alaska = filter_input(INPUT_GET, 'filter_rivers_floating_alaska',
    FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);

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
    echo '<input type="radio" id="filter_rivers_floating_alaska' . strtolower(str_replace(' ', '_', $label)) . '" name="filter_rivers_floating_alaska[]" value="' . $value . '"' . $checked . '>';
    echo '<label for="filter_rivers_floating_alaska' . strtolower(str_replace(' ', '_', $label)) . '">' . $label . '</label><br>';
}





/** @var  $name */

$name = filter_input(INPUT_GET, 'filter_name', FILTER_SANITIZE_SPECIAL_CHARS);

echo '<label for="filter_name">Last Name:</label>';
echo '<input type="text" id="filter_name" name="filter_name" value="'
    . (isset($name) ? $name : '')
    . '">';

echo '<div id="question-items" class="display-items-inline">';

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
echo '<a href="'. $base_url .'" class="btn btn-danger" title="Clear results">Clear Results</a>';
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

if (isset($_GET['filter_name']) && $_GET['filter_name'] != '') {
    $search_criteria['field_filters'][] = array('key' => '1.6', 'value' => $_GET['filter_name']); // check name
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

echo '<pre>';
print_r($search_criteria);
echo '</pre>';

$entries = GFAPI::get_entries( $form_id, $search_criteria, $sorting );

$counter = 1;
foreach ( $entries as $entry ) {
    $date_created = date( "m/d/Y", strtotime( $entry['date_created'] ) );

    echo '<div class="container destination-form">';
    echo '<div class="row">';


    if (rgar($entry, '44') != '') {
        echo '<div class="col-12 form-entry"><b>Reservation - &#35;</b>'
            . rgar($entry, '44') . '</div>';
    }

    if (rgar($entry, '1.6') != '') {
        echo '<div class="col-12 name-fml form-entry"><b>Last Name:</b><span class="name-g">' . rgar($entry, '1.6') . '</span><b>First Name:</b><span class="name-g">' . rgar($entry, '1.3') . '</span><b>Middle Name:</b><span class="name-g">' . rgar($entry, '1.4') . '</span></div>';
    }

    if (rgar($entry, '46') != '') {
        echo '<div class="col-12 form-entry"><b>Date of arrival:</b> '
            . rgar($entry, '46') . '</div>';
    }

    if (rgar($entry, '47') != '') {
        echo '<div class="col-12 form-entry"><b>Date of departure:</b> '
            . rgar($entry, '47') . '</div>';
    }

    if (rgar($entry, '180') != '') {
        if (isset($trip_type)) {
            echo '<div class="col-12 form-entry"><b>Trip Type:</b>'
                . rgar($entry, '180') . '</div>';
        }
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


    if (isset($tel_number) && $tel_number == 'Yes') {
        echo '<div class="col-12 form-entry"><b>Tel:</b>'
            . rgar( $entry, '26' ) . '</div>';
    }

    if (isset($other_travelers) && $other_travelers == 'Yes') {
        echo '<div class="col-12 form-entry"><b>Names of others traveling with guest:</b><br>'
            . rgar( $entry, '21' ) . '</div>';
    }

    if (isset($shuttle_service) && $shuttle_service == 'Yes') {
        echo '<div class="col-12 form-entry"><b>Do you need Shuttle service?</b><br>'
            . rgar( $entry, '34' ) . '</div>';

        echo '<div class="col-12 form-entry"><b>If you are in need of a shuttle, please let us know location of pick-up either Jackson or Idaho Falls and put your arrival/departure flight numbers and arrival/departure times below. This service is extra and not included in the price of the trip:</b><br>'
            . rgar( $entry, '35' ) . '</div>';
    }

    if (isset($needs_equip) && $needs_equip == 'Yes') {
        echo '<div class="col-12 form-entry"><b>Needs Rods?</b><br>'
            . rgar( $entry, '36' ) . '</div>';
    }

    if (isset($dietary_allergies) && $dietary_allergies == 'Yes') {
        echo '<div class="col-12 form-entry"><b>Please list any allergies and/or dietary restrictions here:</b><br>'
            . rgar( $entry, '37' ) . '</div>';
    }

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

    echo '<div class="col-12 form-entry"><b>Trip Type</b><i>(Lodge/Wilderness Float/Both)</i>: ' . rgar( $entry,
            '180' ) . '</div>';

    echo '<div class="col-12 form-entry"><b>Date of birth:</b>' . rgar( $entry,
            '24' ) . '</div>';

    echo '<div class="col-12 form-entry"><b>Contact tel:</b>'
        . rgar( $entry, '26' ) . '</div>';

    echo '<div class="col-12 form-entry"><b>Names of others traveling with guest:</b><br>'
        . rgar( $entry, '21' ) . '</div>';

    echo '<div class="title-desc form-entry"><b>Emergency Contact Person (Name):</b><br><b>First name:</b><span class="name-g">'
        . rgar( $entry, '28.3' )
        . '</span><b>Last name:</b><span class="name-g">' . rgar( $entry,
            '28.6' ) . '</span></div>';

    echo '<div class="col-12 form-entry"><b>Relationship to traveler:</b><br>'
        . rgar( $entry, '29' ) . '</div>';

    echo '<div class="col-12 form-entry"><b>Contact person&#39;s preferred phone number:</b><br>'
        . rgar( $entry, '30' ) . '</div>';

    echo '<div class="col-12 form-entry"><b>How do you plan on arriving at Teton Valley Lodge?</b><br>'
        . rgar( $entry, '33' ) . '</div>';

    echo '<div class="col-12 form-entry"><b>Estimated time of arrival?</b><br>'
        . rgar( $entry, '32' ) . '</div>';

    echo '<div class="col-12 form-entry"><b>Do you need Shuttle service?</b><br>'
        . rgar( $entry, '34' ) . '</div>';

    echo '<div class="col-12 form-entry"><b>If you are in need of a shuttle, please let us know location of pick up either Jackson or Idaho Falls and put your arrival/departure flight numbers and arrival/departure times below. This service is extra and not included in the price of the trip:</b><br>'
        . rgar( $entry, '35' ) . '</div>';

    echo '<div class="col-12 form-entry"><b>Do you need to use rods provided by the lodge?</b><br>'
        . rgar( $entry, '36' ) . '</div>';

    echo '<div class="col-12 form-entry"><b>Did you purchase your Idaho fishing license?</b><br>'
        . rgar( $entry, '42' ) . '</div>';

    echo '<div class="col-12 form-entry"><b>Please list any allergies and/or dietary restrictions here:</b><br>'
        . rgar( $entry, '37' ) . '</div>';

    echo '<div class="col-12 form-entry"><b>Please list any special requests, needs, health concerns</b><br>'
        . rgar( $entry, '39' ) . '</div>';

    echo '<div class="col-12 form-entry"><b>Will you be celebrating a special occasion while at Teton Valley Lodge?</b><br>'
        . rgar( $entry, '41' ) . '</div>';

    echo '<div class="col-12 form-entry"><b>Please tell us about your event or celebration:</b><br>'
        . rgar( $entry, '40' ) . '</div>';

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
