<?php
/**
 * @param mixed $entry
 * @param int $counter
 * @return void
 */
function formatEntryData(mixed $entry, int $counter = 1): void {
	global $post;
	$date_created = date("m/d/Y", strtotime($entry['date_created']));
	
	echo '<tr>';
	$gda_meta_value = get_post_meta($post->ID, '_gda_meta_key', true);
	
	if (!empty($gda_meta_value)) {
		// Default values for various fields
		$defaults = [
			'first_name' => '1.3',
			'last_name' => '1.6',
			'reservation' => '44',
			'arrival' => '46',
			'departure' => '47',
			'cell_phone' => '101',
			'date_of_birth' => '24',
			'body_weight' => '284',
			'ec_first_name' => '28.3',
			'ec_last_name' => '28.6',
			'relationship_to_traveler' => '29',
			'ec_tel_number' => '30',
			'purchase_cancellation_ins' => '210',
			'ins_co_name' => '207',
			'ins_co_policy_number' => '209',
			'what_float_doing' => '288',
			'arrival_airport' => '289',
			'arrival_airline' => '48',
			'other_arrival_airline' => '50',
			'flight_arrival_date' => '66',
			'flight_arrival_number' => '172',
			'flight_arrival_time' => '60',
			'flight_departure_date' => '67',
			'flight_departure_number' => '58',
			'flight_departure_time' => '61'
		];
		
		foreach ($defaults as $key => $default) {
			$$key = get_post_meta($post->ID, '_gda_meta_key_' . $key . '_id', true);
			$$key = !empty($$key) ? $$key : $default;
		}
		
		// Render each field conditionally
		$fields = [
			['field' => $last_name, 'label' => '<td class="fixed-column"><b>' . rgar($entry, $last_name) . ', ' . rgar($entry, $first_name) . '</b></td>'],
			['field' => $reservation, 'label' => '<td><b>' . rgar($entry, $reservation) . '</b></td>'],
			['field' => $arrival, 'label' => '<td><b>' . formatDate(rgar($entry, $arrival)) . '</b></td>'],
			['field' => $departure, 'label' => '<td><b>' . formatDate(rgar($entry, $departure)) . '</b></td>'],
			['field' => $cell_phone, 'label' => '<td><b>' . rgar($entry, $cell_phone) . '</b></td>'],
			['field' => $date_of_birth, 'label' => '<td><b>' . formatDate(rgar($entry, $date_of_birth)) . '</b></td>'],
			['field' => $body_weight, 'label' => '<td><b>' . rgar($entry, $body_weight) . '</b></td>'],
			['field' => $ec_first_name, 'label' => '<td><b>' . rgar($entry, $ec_first_name) . ' ' . rgar($entry, $ec_last_name) . '</b></td>'],
			['field' => $relationship_to_traveler, 'label' => '<td><b>' . rgar($entry, $relationship_to_traveler) . '</b></td>'],
			['field' => $ec_tel_number, 'label' => '<td><b>' . rgar($entry, $ec_tel_number) . '</b></td>'],
			['field' => $purchase_cancellation_ins, 'label' => '<td><b>' . rgar($entry, $purchase_cancellation_ins) . '</b></td>'],
			['field' => $ins_co_name, 'label' => '<td><b>' . rgar($entry, $ins_co_name) . '</b></td>'],
			['field' => $ins_co_policy_number, 'label' => '<td><b>' . rgar($entry, $ins_co_policy_number) . '</b></td>'],
			['field' => $what_float_doing, 'label' => '<td><b>' . rgar($entry, $what_float_doing) . '</b></td>'],
			['field' => $arrival_airport, 'label' => '<td><b>' . rgar($entry, $arrival_airport) . '</b></td>'],
			['field' => $arrival_airline, 'label' => '<td><b>' . rgar($entry, $arrival_airline) . '</b></td>'],
			['field' => $other_arrival_airline, 'label' => '<td><b>' . rgar($entry, $other_arrival_airline) . '</b></td>'],
			['field' => $flight_arrival_date, 'label' => '<td><b>' . formatDate(rgar($entry, $flight_arrival_date)) . '</b></td>'],
			['field' => $flight_arrival_number, 'label' => '<td><b>' . rgar($entry, $flight_arrival_number) . '</b></td>'],
			['field' => $flight_arrival_time, 'label' => '<td><b>' . rgar($entry, $flight_arrival_time) . '</b></td>'],
			['field' => $flight_departure_date, 'label' => '<td><b>' . formatDate(rgar($entry, $flight_departure_date)) . '</b></td>'],
			['field' => $flight_departure_number, 'label' => '<td><b>' . rgar($entry, $flight_departure_number) . '</b></td>'],
			['field' => $flight_departure_time, 'label' => '<td><b>' . rgar($entry, $flight_departure_time) . '</b></td>']
		];
		
		foreach ($fields as $field) {
			if (rgar($entry, $field['field']) != '') {
				echo $field['label'];
			}
		}
	}
	echo '</tr>';
	
	$counter++;
}

/**
 * Helper function to format date
 * @param string $date
 * @return string
 */
function formatDate(string $date): string {
	$dateTime = DateTime::createFromFormat('Y-m-d', $date);
	return $dateTime ? $dateTime->format('m-d-Y') : 'Invalid date format';
}