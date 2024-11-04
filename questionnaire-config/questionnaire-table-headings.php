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

						// Table header reservation
						$default_reservation_value = 'Reservation';
						$gda_header_title_reservation = get_post_meta($post->ID, '_gda_meta_key_header_title_res',true);
						// Use default values if the meta values are empty
						$gda_header_title_reservation = !empty($gda_header_title_reservation) ? $gda_header_title_reservation : $default_reservation_value;
						// Table Name
						if (!empty($gda_header_title_reservation)) {
							echo '<th>' . $gda_header_title_reservation . '</th>';
						}

						// Table header date of arrival
						$default_date_of_arrival_value = 'Date of arrival';
						$gda_header_title_date_of_arrival = get_post_meta($post->ID, '_gda_meta_key_header_date_of_arrival',true);
						// Use default values if the meta values are empty
						$gda_header_title_date_of_arrival = !empty($gda_header_title_date_of_arrival) ? $gda_header_title_date_of_arrival : $default_date_of_arrival_value;
						// Table Name
						if (!empty($gda_header_title_date_of_arrival)) {
							echo '<th>' . $gda_header_title_date_of_arrival . '</th>';
						}

						// Table header date of departure
						$default_date_of_departure_value = 'Date of departure';
						$gda_header_title_date_of_departure = get_post_meta($post->ID, '_gda_meta_key_header_date_of_departure',true);
						// Use default values if the meta values are empty
						$gda_header_title_date_of_departure = !empty($gda_header_title_date_of_departure) ? $gda_header_title_date_of_departure : $default_date_of_departure_value;
						// Table Name
						if (!empty($gda_header_title_date_of_departure)) {
							echo '<th>' . $gda_header_title_date_of_departure . '</th>';
						}

						// Table header cell phone
						$default_cell_phone_value = 'Cell phone';
						$gda_header_title_cell_phone = get_post_meta($post->ID, '_gda_meta_key_header_cell_phone',true);
						// Use default values if the meta values are empty
						$gda_header_title_cell_phone = !empty($gda_header_title_cell_phone) ? $gda_header_title_cell_phone : $default_cell_phone_value;
						// Table Name
						if (!empty($gda_header_title_cell_phone)) {
							echo '<th>' . $gda_header_title_cell_phone . '</th>';
						}

            // Table header date of birth
            $default_date_of_birth_value = 'Date of birth';
            $gda_header_title_date_of_birth = get_post_meta($post->ID, '_gda_meta_key_header_date_of_birth',true);
            // Use default values if the meta values are empty
            $gda_header_title_date_of_birth = !empty($gda_header_title_date_of_birth) ? $gda_header_title_date_of_birth : $default_date_of_birth_value;
            // Table Name
            if (!empty($gda_header_title_date_of_birth)) {
              echo '<th>' . $gda_header_title_date_of_birth . '</th>';
            }

            // Table header body weight
            $default_body_weight_value = 'Body weight';
            $gda_header_title_body_weight = get_post_meta($post->ID, '_gda_meta_key_header_body_weight',true);
            // Use default values if the meta values are empty
            $gda_header_title_body_weight = !empty($gda_header_title_body_weight) ? $gda_header_title_body_weight : $default_body_weight_value;
            // Table Name
            if (!empty($gda_header_title_body_weight)) {
              echo '<th>' . $gda_header_title_body_weight . '</th>';
            }

            // Table header emergency contact
            $default_emergency_contact_value = 'Emergency contact';
            $gda_header_title_emergency_contact = get_post_meta($post->ID, '_gda_meta_key_header_emergency_contact',true);
            // Use default values if the meta values are empty
            $gda_header_title_emergency_contact = !empty($gda_header_title_emergency_contact) ? $gda_header_title_emergency_contact : $default_emergency_contact_value;
            // Table Name
            if (!empty($gda_header_title_emergency_contact)) {
              echo '<th>' . $gda_header_title_emergency_contact . '</th>';
            }

            // Table header emergency contact relationship
            $default_relationship_to_traveler_value = 'Relationship to traveler';
            $gda_header_title_relationship_to_traveler = get_post_meta($post->ID, '_gda_meta_key_header_relationship_to_traveler',true);
            // Use default values if the meta values are empty
            $gda_header_title_relationship_to_traveler = !empty($gda_header_title_relationship_to_traveler) ? $gda_header_title_relationship_to_traveler : $default_relationship_to_traveler_value;
            // Table Name
            if (!empty($gda_header_title_relationship_to_traveler)) {
              echo '<th>' . $gda_header_title_relationship_to_traveler . '</th>';
            }

            // Table header emergency contact telephone number
            $default_ec_tel_number_value = 'Emergency contact tel number';
            $gda_header_title_ec_tel_number = get_post_meta($post->ID, '_gda_meta_key_header_ec_tel_number',true);
            // Use default values if the meta values are empty
            $gda_header_title_ec_tel_number = !empty($gda_header_title_ec_tel_number) ? $gda_header_title_ec_tel_number : $default_ec_tel_number_value;
            // Emergency contact telephone number
            if (!empty($gda_header_title_ec_tel_number)) {
              echo '<th>' . $gda_header_title_ec_tel_number . '</th>';
            }

            // Table header did you purchase cancellation insurance?
            $default_purchase_cancellation_ins_value = 'Emergency contact tel number';
            $gda_header_title_purchase_cancellation_ins = get_post_meta($post->ID, '_gda_meta_key_header_purchase_cancellation_ins',true);
            // Use default values if the meta values are empty
            $gda_header_title_purchase_cancellation_ins = !empty($gda_header_title_purchase_cancellation_ins) ? $gda_header_title_purchase_cancellation_ins : $default_purchase_cancellation_ins_value;
            // Did you purchase cancellation insurance
            if (!empty($gda_header_title_purchase_cancellation_ins)) {
              echo '<th>' . $gda_header_title_purchase_cancellation_ins . '</th>';
            }

            // Table header Travel insurance company name
            $default_ins_co_name_value = 'Travel insurance company name';
            $gda_header_title_ins_co_name = get_post_meta($post->ID, '_gda_meta_key_header_ins_co_name',true);
            // Use default values if the meta values are empty
            $gda_header_title_ins_co_name = !empty($gda_header_title_ins_co_name) ? $gda_header_title_ins_co_name : $default_ins_co_name_value;
            // Travel insurance company name
            if (!empty($gda_header_title_ins_co_name)) {
              echo '<th>' . $gda_header_title_ins_co_name . '</th>';
            }

            // Table header Travel insurance policy number
            $default_ins_co_policy_number_value = 'Travel insurance policy number';
            $gda_header_title_ins_co_policy_number = get_post_meta($post->ID, '_gda_meta_key_header_ins_co_policy_number',true);
            // Use default values if the meta values are empty
            $gda_header_title_ins_co_policy_number = !empty($gda_header_title_ins_co_policy_number) ? $gda_header_title_ins_co_policy_number : $default_ins_co_policy_number_value;
            // Travel insurance policy number
            if (!empty($gda_header_title_ins_co_policy_number)) {
              echo '<th>' . $gda_header_title_ins_co_policy_number . '</th>';
            }

            // Table header Travel insurance policy number
            $default_what_float_doing_value = 'What float are you doing?';
            $gda_header_title_what_float_doing = get_post_meta($post->ID, '_gda_meta_key_header_what_float_doing',true);
            // Use default values if the meta values are empty
            $gda_header_title_what_float_doing = !empty($gda_header_title_what_float_doing) ? $gda_header_title_what_float_doing : $default_what_float_doing_value;
            // Travel insurance policy number
            if (!empty($gda_header_title_what_float_doing)) {
              echo '<th>' . $gda_header_title_what_float_doing . '</th>';
            }
						

						
						
						

					echo   '
					
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

