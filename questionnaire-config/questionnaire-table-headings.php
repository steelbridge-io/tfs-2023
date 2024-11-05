<?php

echo '<div id="question-grid" class="table-wrapper">
        <div class="table-scrollable">
            <table id="gda-table">
            <thead>
            <tr>';

$gda_meta_value = get_post_meta($post->ID, '_gda_meta_key', true);

/**
 * Function to render table headers with an option to add a class.
 *
 * @param int $post_ID
 * @param string $meta_key
 * @param string $default_value
 * @param string $additional_class
 */
function render_table_header($post_ID, $meta_key, $default_value, $additional_class = '') {
	$header_title = get_post_meta($post_ID, $meta_key, true);
	$header_title = !empty($header_title) ? $header_title : $default_value;
	if (!empty($header_title)) {
		echo '<th' . (!empty($additional_class) ? ' class="' . esc_attr($additional_class) . '"' : '') . '>' . esc_html($header_title) . '</th>';
	}
}

if (!empty($gda_meta_value)) {
	// Render the 'Name' header with the fixed-column class
	render_table_header($post->ID, '_gda_meta_key_table_header_title', 'Name', 'fixed-column');
	
	// Render other headers
	render_table_header($post->ID, '_gda_meta_key_header_title_res', 'Reservation');
	render_table_header($post->ID, '_gda_meta_key_header_date_of_arrival', 'Date of arrival');
	render_table_header($post->ID, '_gda_meta_key_header_date_of_departure', 'Date of departure');
	render_table_header($post->ID, '_gda_meta_key_header_cell_phone', 'Cell phone');
	render_table_header($post->ID, '_gda_meta_key_header_date_of_birth', 'Date of birth');
	render_table_header($post->ID, '_gda_meta_key_header_body_weight', 'Body weight');
	render_table_header($post->ID, '_gda_meta_key_header_emergency_contact', 'Emergency contact');
	render_table_header($post->ID, '_gda_meta_key_header_relationship_to_traveler', 'Relationship to traveler');
	render_table_header($post->ID, '_gda_meta_key_header_ec_tel_number', 'Emergency contact tel number');
	render_table_header($post->ID, '_gda_meta_key_header_purchase_cancellation_ins', 'Did you purchase cancellation insurance?');
	render_table_header($post->ID, '_gda_meta_key_header_ins_co_name', 'Travel insurance company name');
	render_table_header($post->ID, '_gda_meta_key_header_ins_co_policy_number', 'Travel insurance policy number');
	render_table_header($post->ID, '_gda_meta_key_header_what_float_doing', 'What float are you doing?');
	render_table_header($post->ID, '_gda_meta_key_header_arrival_airport', 'Arrival airport city/town');
	
	// Checkboxes for showing additional fields
	if (get_post_meta($post->ID, '_gda_show_meta_field_arrival_airline', true)) {
		render_table_header($post->ID, '_gda_meta_key_header_arrival_airline', 'Arrival airline');
	}
	if (get_post_meta($post->ID, '_gda_show_meta_field_other_arrival_airline', true)) {
		render_table_header($post->ID, '_gda_meta_key_header_other_arrival_airline', 'Arrival airline (other)');
	}
	if (get_post_meta($post->ID, '_gda_show_meta_field_flight_arrival_date', true)) {
		render_table_header($post->ID, '_gda_meta_key_header_flight_arrival_date', 'Flight arrival date');
	}
	if (get_post_meta($post->ID, '_gda_show_meta_field_flight_arrival_number', true)) {
		render_table_header($post->ID, '_gda_meta_key_header_flight_arrival_number', 'Flight arrival number');
	}
	if (get_post_meta($post->ID, '_gda_show_meta_field_flight_arrival_time', true)) {
		render_table_header($post->ID, '_gda_meta_key_header_flight_arrival_time', 'Flight arrival time');
	}
	if (get_post_meta($post->ID, '_gda_show_meta_field_flight_departure_date', true)) {
		render_table_header($post->ID, '_gda_meta_key_header_flight_departure_date', 'Flight departure date');
	}
	if (get_post_meta($post->ID, '_gda_show_meta_field_flight_departure_number', true)) {
		render_table_header($post->ID, '_gda_meta_key_header_flight_departure_number', 'Flight departure number');
	}
	if (get_post_meta($post->ID, '_gda_show_meta_field_flight_departure_time', true)) {
		render_table_header($post->ID, '_gda_meta_key_header_flight_departure_time', 'Flight departure time');
	}
	
	// Static headers that are always displayed
	echo '<th>Departure airline</th>';
	echo '<th>Other departure airline</th>';
	echo '<th>Departure flight &#35;</th>';
	echo '<th>Scheduled departure time</th>';
	echo '<th>Name(s) of others traveling with you</th>';
	echo '<th>Hotel you will be staying in at your final destination?</th>';
	echo '<th>Other hotel</th>';
	echo '<th>Hotel address</th>';
	echo '<th>Rent rods/reels?</th>';
	echo '<th>What hand reel with?</th>';
	echo '<th>Fish species to target</th>';
	echo '<th>How would you rate your fishing skills?</th>';
	echo '<th>Rate boat/rafting experience</th>';
	echo '<th>Characterize wading ability</th>';
	echo '<th>Characterize your physical fitness level</th>';
	echo '<th>Allergies (Food and environmental)</th>';
	echo '<th>Allergies (Other)</th>';
	echo '<th>Diet aversions/dislikes</th>';
	echo '<th>Please list any Special Requests...</th>';
	echo '<th>Do you need a sleeping bag?</th>';
	echo '<th>Rooming\roommate requests</th>';
	echo '<th>Will you be celebrating a special occasion while on the float?</th>';
	echo '<th>Please tell us about your event or celebration</th>';
	echo '<th>What are you most looking forward to during your stay?</th>';
}

echo '</tr>
            </thead>
            <tbody>';
?>