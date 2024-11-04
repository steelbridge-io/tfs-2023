<?php

echo '<div id="question-grid" class="table-wrapper">
        <div class="table-scrollable">
            <table id="gda-table">
            <thead>
            <tr>';
						// Table header Name
						$default_name_value = 'Name';
						$gda_meta_value_th = get_post_meta($post->ID, '_gda_meta_key_table_header_title', true);
						// Use default values if the meta values are empty
						$gda_meta_value_th = !empty($gda_meta_value_th) ? $gda_meta_value_th : $default_name_value;
						// Table Name
						if (!empty($gda_meta_value_th)) {
							echo '<th class="fixed-column">' . $gda_meta_value_th . '</th>';
						}

						// Table header Reservation
						$default_reservation_value = 'Reservation';
						$gda_header_title_reservation = get_post_meta($post->ID, '_gda_meta_key_header_title_res',true);
						// Use default values if the meta values are empty
						$gda_header_title_reservation = !empty($gda_header_title_reservation) ? $gda_header_title_reservation : $default_reservation_value;
						// Table Name
						if (!empty($gda_header_title_reservation)) {
							echo '<th>' . $gda_header_title_reservation . '</th>';
						}

						// Table header Date of arrival
						$default_date_of_arrival_value = 'Date of arrival';
						$gda_header_title_date_of_arrival = get_post_meta($post->ID, '_gda_meta_key_header_date_of_arrival',true);
						// Use default values if the meta values are empty
						$gda_header_title_date_of_arrival = !empty($gda_header_title_date_of_arrival) ? $gda_header_title_date_of_arrival : $default_date_of_arrival_value;
						// Table Name
						if (!empty($gda_header_title_date_of_arrival)) {
							echo '<th>' . $gda_header_title_date_of_arrival . '</th>';
						}

						// Table header Date of departure
						$default_date_of_departure_value = 'Date of departure';
						$gda_header_title_date_of_departure = get_post_meta($post->ID, '_gda_meta_key_header_date_of_departure',true);
						// Use default values if the meta values are empty
						$gda_header_title_date_of_departure = !empty($gda_header_title_date_of_departure) ? $gda_header_title_date_of_departure : $default_date_of_departure_value;
						// Table Name
						if (!empty($gda_header_title_date_of_departure)) {
							echo '<th>' . $gda_header_title_date_of_departure . '</th>';
						}

						// Table header Date of departure
						$default_cell_phone_value = 'Cell phone';
						$gda_header_title_cell_phone = get_post_meta($post->ID, '_gda_meta_key_header_cell_phone',true);
						// Use default values if the meta values are empty
						$gda_header_title_cell_phone = !empty($gda_header_title_cell_phone) ? $gda_header_title_cell_phone : $default_cell_phone_value;
						// Table Name
						if (!empty($gda_header_title_cell_phone)) {
							echo '<th>' . $gda_header_title_cell_phone . '</th>';
						}
						

						
						
						

					echo   '
					
                <th>Date of Birth</th>
                <th>Body weight</th>
                <th>Emergency contact</th>
                <th>Emergency contact relationship</th>
                <th>Emergency contact tel</th>
                <th>Cancellation insurance ?</th>
                <th>Travel insurance Co name?</th>
                <th>Travel insurance policy &#35;</th>
                <th>What float are you doing?</th>
                <th>Arrival airport city/town</th>
                <th>Arrival airline</th>
                <th>Arrival airline (other)</th>
                <th>Arrival date</th>
                <th>Arrival airline flight number</th>
                <th>Arrival time</th>
                <th>Departure date</th>
                <th>Departure airline flight number</th>
                <th>Depature time</th>
                <th>Departure airline</th>
                <th>Other departure airline</th>
                <th>Flight departure date</th>
                <th>Departure flight &#35;</th>
                <th>Scheduled departure time</th>
                <th>Name(s) of others traveling with you</th>
                <th>Hotel you will be staying in at your final destination?</th>
                <th>Other hotel</th>
                <th>Hotel address</th>
                <th>Rent rods/reels?</th>
                <th>What hand reel with?</th>
                <th>Fish species to target</th>
                <th>How would you rate your fishing skills?</th>
                <th>Rate boat/rafting experience</th>
                <th>Characterize wading ability</th>
                <th>Characterize your physical fitness level</th>
                <th>Allergies (Food and environmental)</th>
                <th>Allergies (Other)</th>
                <th>Diet aversions/dislikes</th>
                <th>Please list any Special Requests...</th>
                <th>Do you need a sleeping bag?</th>
                <th>Rooming\roommate requests</th>
                <th>Will you be celebrating a special occasion while on the float?</th>
                <th>Please tell us about your event or celebration</th>
                <th>What are you most looking forward to during your stay?</th>
            </tr>
            </thead>
            <tbody>';

