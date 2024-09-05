<?php
/**
 * Template Name: Travel Form Posts v2
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
$form_id                   = '59'; // Your Gravity Form ID
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

echo '</div>';

//include get_template_directory() . '/template-parts/inc/form-grid-data.php';

echo '<div id="question-grid" class="table-wrapper">
        <div class="table-scrollable">
            <table>
            <thead>
            <tr>
            <th class="fixed-column">Name</th>
                <th>Reservation &#35;</th>
                <th>Arrival date</th>
                <th>Departure date</th>
                <th>Email</th>
                <th>Tel</th>
                <th>Shuttle?</th>
                <th>Trip Type</th>
                <th>Trip Destinations</th>
                <th>Alaska Destinations</th>
                <th>Date of Birth</th>
                <th>Body weight</th>
                <th>Height</th>
                <th>Gender</th>
                <th>Passport &#35;</th>
                <th>Passport exp</th>
                <th>Passport issuing country</th>
                <th>Other passport issuing country</th>
                <th>Emergency contact</th>
                <th>Emergency contact relationship</th>
                <th>Emergency contact tel</th>
                <th>Evacuation policy &#35;</th>
                <th>Cancellation insurance ?</th>
                <th>Travel insurance Co name?</th>
                <th>Travel insurance policy &#35;</th>
                <th>Passport photo copy</th>
                <th>Russian photo copy</th>
                <th>Occupation</th>
                <th>Arrival airport city/town</th>
                <th>Arrival airline</th>
                <th>Arrival airline (other)</th>
                <th>Arrival date</th>
                <th>Arrival airline flight number</th>
                <th>Arrival time</th>
                <th>Departure airport city/town</th>
                <th>Departure airline</th>
                <th>Departure airline (other)</th>
                <th>Departure date</th>
                <th>Departure airline flight number</th>
                <th>Depature time</th>
                <th>How do you plan at arriving at the lodge?</th>
                <th>Other option on arriving at the lodge</th>
                <th>Arriving time at the airstrip</th>
                <th>Needs shuttle service at airstrip</th>
                <th>Needs airport shuttle service</th>
                <th>Estimated time of arrival at lodge</th>
                <th>Arrival airport city/town</th>
                <th>Arrival airline</th>
                <th>Other airline</th>
                <th>Arrival date</th>
                <th>Arrival flight number</th>
                <th>Scheduled arrival time</th>
                <th>Departure city/town</th>
                <th>Departure airline</th>
                <th>Other departure airline</th>
                <th>Flight departure date</th>
                <th>Departure flight &#35;</th>
                <th>Scheduled departure time</th>
                <th>Name(s) of others traveling with</th>
                <th>Upgrade hotel in Ulaanbaatar?</th>
                <th>Need extra nights?</th>
                <th>Dates for extra nights</th>
                <th>Anchorage hotel</th>
                <th>Other Anchorage hotel</th>
                <th>Other Anchorage hotel address</th>
                <th>Anchorage hotel info</th>
                <th>Overnight in Manaus</th>
                <th>Who to room with</th>
                <th>Overnight on return?</th>
                <th>Room type</th>
                <th>Who room with</th>
                <th>Rent rods/reels?</th>
                <th>Rods/reels provided by lodge?</th>
                <th>What hand reel with?</th>
                <th>Needs to rent waders &amp; boots from lodge</th>
                <th>Needs to use waders provided by lodge</th>
                <th>Wader size</th>
                <th>Wader size: Men</th>
                <th>Wader size: Women</th>
                <th>Need to use wading boots provided by lodge</th>
                <th>Shoe size</th>
                <th>Men&apos;s size</th>
                <th>Women&apos;s size</th>
                <th>Rent sleeping bag</th>
                <th>Equipment to rent</th>
                <th>Preferred style of fishing</th>
                <th>Fish to target</th>
                <th>Fish species to target</th>
                <th>Interested in fishing the Kenai River?</th>
                <th>Type of preferred fishing</th>
                <th>Fishing 1 or 2 to a boat?</th>
                <th>Name of companion to share boat with</th>
                <th>What salt water species have they fished for?</th>
                <th>Other species</th>
                <th>Style of guiding</th>
                <th>Type of preferred fishing experience</th>
                <th>Rate fishing skills</th>
                <th>Rate boat/rafting experience</th>
                <th>Substitute horseback guided fishing?</th>
                <th>Date to subsitute horseback guided fishing</th>
                <th>Horseback riding experience</th>
                <th>Characterize wading ability</th>
                <th>Interested in heli-fishing at Poronoui Lodge?</th>
                <th>Characterize your physical fitness level</th>
                <th>Diet requirements/special menu</th>
                <th>Other special diet</th>
                <th>Allergies to food</th>
                <th>Other allergies</th>
                <th>Allergies include the following</th>
                <th>Other misc allergies</th>
                <th>Prescribed medicine</th>
                <th>Prescribed medicine details</th>
                <th>Blood type</th>
                <th>Additional allergy info</th>
                <th>Have or had any of the following</th>
                <th>Other reaction(s)</th>
                <th>Extended health condition info</th>
                <th>Diet aversions/dislikes</th>
                <th>Food preferences</th>
                <th>Aversion to eating game meat</th>
                <th>Special requests, needs, concerns</th>
                <th>Vaccinated for COVID-19</th>
                <th>Brand/type of vaccination &amp; date(s) received</th>
                <th>Upload vaccination card here</th>
                <th>Medical insurance including HTA CV19 related isolation, clinical care</th>
                <th>Ice cooler filled with block ice</th>
                <th>Would you to have personal gear packed to the River</th>
                <th>If you are arriving early and or departing late, would you like to hire a guide for those days?</th>
                <th>Lunch beverage</th>
                <th>Lodge to purchase beverages for you for the float</th>
                <th>Beverage choice &#35;1</th>
                <th>Beverage choice &#35;1 amount</th>
                <th>Beverage choice &#35;2</th>
                <th>Beverage choice &#35;2 amount</th>
                <th>Beverage choice &#35;3 </th>
                <th>Beverage choice &#35;3 amount</th>
                <th>Beverage Choice &#35;4</th>
                <th>Beverage choice &#35;4 amount</th>
                <th>Beverage Choice &#35;5</th>
                <th>Beverage choice &#35;5 amount</th>
                <th>Beverage Choice &#35;6 Box Wine @ Cost</th>
                <th>Beverage choice #6 amount</th>
                <th>Preferred house keeping</th>
                <th>Place an alcohol order?</th>
                <th>Preferred beverage to be purchased</th>
                <th>Amount</th>
                <th>Other amount to be purchased</th>
                <th>Drink preference</th>
                <th>Shirt size</th>
                <th>Choice of bed</th>
                <th>Preferred evening beverage</th>
                <th>Rooming/roommate request(s)</th>
                <th>Celebrating a special occasion?</th>
                <th>Tell us about the celebration/occasion</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>';

/*
 * Retrieves entries from a Gravity Form based on specified criteria and sorting order
 * $form_id: ID of the form to retrieve entries from
 * $search_criteria: Array to filter entries (e.g., status, date range, field values)
 * $sorting: Array to define the sorting order of entries (e.g., by date created, direction)
**/
$entries = GFAPI::get_entries( $form_id, $search_criteria, $sorting );


require_once 'questionnaire-config/question-config.php';
foreach ($entries as $entry ) {
	formatEntryData($entry, $counter);
}

    echo '</tbody>'; // end tbody
    echo '</table>'; // end table
    echo '</div>'; // end table-scrollable
    echo '</div>'; // end table-wrapper
    
    echo '</div>'; // end travel-form-posts div
?>
    <script>
        jQuery(document).ready(function(){
        // Initialize the popover
            jQuery('.btn-popover').popover();
            
            // Toggle popover on button click
            jQuery('.btn-popover').on('click', function (e) {
            e.stopPropagation();
            var $this = jQuery(this);
            // Hide other popovers
            jQuery('.btn-popover').not($this).popover('hide');
            // Toggle the clicked popover
            $this.popover('toggle');
            // Update the popover position after toggle
            setTimeout(function () {
            $this.popover('update');
            }, 1);
        });
        
           // Close popover when clicking outside
           jQuery(document).on('click', function (e) {
           var target = jQuery(e.target);
           if (!target.closest('.popover').length && !target.closest('.btn-popover').length) {
           jQuery('.btn-popover').popover('hide');
            }
        });

            function showFullContent(link) {
                var content = `{$escaped_content}`;
                var popoverTrigger = $(link).closest('.popover').prev('.btn-popover');
                popoverTrigger.popover('dispose'); // Dispose current popover
                popoverTrigger.popover({
                    content: content,
                    html: true
                }).popover('show'); // Show the updated popover with full content
            }
        });
    
    </script>

<?php

get_footer();
