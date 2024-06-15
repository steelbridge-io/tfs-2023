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

$arrival_date = filter_input(INPUT_GET, 'filter_arrival_date', FILTER_SANITIZE_STRING);

echo '<label for="filter_arrival_date">Arrival Date:</label>';
echo '<input type="date" id="filter_arrival_date" name="filter_arrival_date" value="'
     . (isset($arrival_date) ? $arrival_date : '')
     . '">';

$name = filter_input(INPUT_GET, 'filter_name', FILTER_SANITIZE_STRING);

echo '<label for="filter_name">Last Name:</label>';
echo '<input type="text" id="filter_name" name="filter_name" value="'
     . (isset($name) ? $name : '')
     . '">';

echo '<div id="question-items" class="display-items-inline">';
$shuttle_service = filter_input(INPUT_GET, 'filter_shuttle_service', FILTER_SANITIZE_STRING);

echo '<label for="filter_shuttle_service">Shuttle Service:</label>';
echo '<input class="no-margin" type="checkbox" id="filter_shuttle_service" name="filter_shuttle_service" value="Yes"'
     . (isset($shuttle_service) && $shuttle_service == 'Yes' ? ' checked' : '') . '>';


$other_travelers = filter_input(INPUT_GET, 'filter_other_travelers', FILTER_SANITIZE_STRING);

echo '<label for="filter_other_travelers">Other Travelers:</label>';
echo '<input class="no-margin" type="checkbox" id="filter_other_travelers" name="filter_other_travelers" value="Yes"'
     . (isset($other_travelers) && $other_travelers == 'Yes' ? ' checked' : '') . '>';

echo '</div>';


$base_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$base_url = strtok($base_url, '?');

echo '<input class="filter-btn" type="submit" value="Filter">';
echo '<a href="'. $base_url .'" class="btn btn-danger" title="Clear results">Clear Results</a>';
echo '</form>';
echo '</div>';

$search_criteria['status'] = 'active';

if (isset($arrival_date) && $arrival_date != '') {
	$search_criteria['field_filters'][] = array('key' => '22', 'value' => $arrival_date); // check arrival date
}

if (isset($_GET['filter_name']) && $_GET['filter_name'] != '') {
	$search_criteria['field_filters'][] = array('key' => '1.6', 'value' => $_GET['filter_name']); // check name
}

if (isset($shuttle_service)) {
	$search_criteria['field_filters'][] = array('key' => '34', 'value' => 'Yes');
}

if ($other_travelers == 'Yes') {
	$search_criteria['field_filters'][] = array('key' => '21', 'operator' => 'isnot', 'value' => '');
}


/* end shuttle service */

echo '<div class="container form-list-wrap">';

$form_id                   = '16'; // Your form ID
$search_criteria['status'] = 'active';
$sorting                   = array(
	'key'        => '1.3',
	'direction'  => 'DESC',
	'is_numeric' => FALSE,
); // 1.3 is the field id for last name

$entries = GFAPI::get_entries( $form_id, $search_criteria, $sorting );

$counter = 1;
foreach ( $entries as $entry ) {
	$date_created = date( "m/d/Y", strtotime( $entry['date_created'] ) );
	
	echo '<div class="container destination-form">';
	echo '<div class="row">';
	
	echo '<div class="col-12 name-fml form-entry"><b>First Name:</b><span class="name-g">'
	     . rgar( $entry, '1.3' ) . '</span><b>Middle:</b><span class="name-g">'
	     . rgar( $entry, '1.4' )
	     . '</span><b>Last Name:</b><span class="name-g">' . rgar( $entry,
			'1.6' ) . '</span></div>';
	
	if (isset($other_travelers) && $other_travelers == 'Yes') {
		echo '<div class="col-12 form-entry"><b>Names of others traveling with guest:</b><br>'
		     . rgar( $entry, '21' ) . '</div>';
	}
	
	if (isset($shuttle_service)) {
		echo '<div class="col-12 form-entry"><b>Do you need Shuttle service?</b><br>'
		     . rgar( $entry, '34' ) . '</div>';
		
		echo '<div class="col-12 form-entry"><b>If you are in need of a shuttle, please let us know location of pick up either Jackson or Idaho Falls and put your arrival/departure flight numbers and arrival/departure times below. This service is extra and not included in the price of the trip:</b><br>'
		     . rgar( $entry, '35' ) . '</div>';
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
	
	echo '<div class="col-12 form-entry"><b>Names of others traveling with guest:</b><br>'
	     . rgar( $entry, '21' ) . '</div>';
	
	echo '<div class="col-12 form-entry"><b>Date of arrival:</b> '
	     . rgar( $entry, '22' ) . '</div>';
	echo '<div class="col-12 form-entry"><b>Date of departure:</b> '
	     . rgar( $entry, '23' ) . '</div>';
	echo '<div class="col-12 form-entry"><b>Date of birth:</b>' . rgar( $entry,
			'24' ) . '</div>';
	echo '<div class="col-12 form-entry"><b>Preferred contact tel:</b>'
	     . rgar( $entry, '26' ) . '</div>';
	
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