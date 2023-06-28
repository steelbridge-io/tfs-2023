<?php
	
	// Retrieve the saved meta field data
	function january_flies() {
		$month        = 'January'; // Replace with the specific month value
		$meta_key     = 'table_data_' . strtolower( $month );
		$content_list = get_post_meta( get_the_ID(), $meta_key, true );
		$content_list = is_array( $content_list ) ? $content_list : array();
		
		if ( ! empty( $content_list ) && !empty(array_filter($content_list[0]))) {
			echo '<h3 class="text-center">Destination Fly Pattern Recommendations</h3>';
		}
		
		// Loop through the saved data and display it
		if ( ! empty( $content_list ) && !empty(array_filter($content_list[0]))) { ?>
		<button class="btn btn-flies" type="button" data-toggle="collapse" data-target="#collapseJanuary" aria-expanded="false" aria-controls="collapseJanuary">
			January Fly Selection | <span class="open-fly-list">Open List <i class="fa fa-chevron-right" aria-hidden="true"></i></span><span class="close-fly-list">Close List <i class="fa fa-times" aria-hidden="true"></i></span>
		</button>
			<div class="collapse" id="collapseJanuary">
				<table>
					<tbody>
					<tr>
						<th>Insect/Species</th>
						<th>Size</th>
						<th>Pattern</th>
					</tr>
					<?php foreach ($content_list as $row) {
						// Skip empty rows
						if (empty($row['column1']) && empty($row['column2']) && empty($row['column3'])) {
							continue;
						} ?>
						<tr>
							<td><?php echo esc_html($row['column1']) ?></td>
							<td><?php echo esc_html($row['column2']) ?></td>
							<td><?php echo esc_html($row['column3']) ?></td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		<?php }
	}
	add_action('jan_flies', 'january_flies' );
	
	// Retrieve the saved meta field data
	function february_flies() {
		$month        = 'February'; // Replace with the specific month value
		$meta_key     = 'table_data_' . strtolower( $month );
		$content_list = get_post_meta( get_the_ID(), $meta_key, true );
		$content_list = is_array( $content_list ) ? $content_list : array();
		
		// Loop through the saved data and display it
		if ( ! empty( $content_list ) && !empty(array_filter($content_list[0]))) { ?>
			<button class="btn btn-flies mt-1618" type="button" data-toggle="collapse" data-target="#collapseFebruary" aria-expanded="false" aria-controls="collapseFebruary">
			February Fly Selection | <span class="open-fly-list">Open List <i class="fa fa-chevron-right" aria-hidden="true"></i></span><span class="close-fly-list">Close List <i class="fa fa-times" aria-hidden="true"></i></span>
			</button>
				<div class="collapse" id="collapseFebruary">
					<table>
					<tr>
						<th>Insect/Species</th>
						<th>Size</th>
						<th>Pattern</th>
					</tr>
					<?php foreach ( $content_list as $row ) {
						// Skip empty rows
						if (empty($row['column1']) && empty($row['column2']) && empty($row['column3'])) {
							continue;
						} ?>
						<tr>
						<td> <?php echo esc_html( $row['column1'] ) ?> </td>
						<td> <?php echo esc_html( $row['column2'] ) ?> </td>
						<td> <?php echo esc_html( $row['column3'] ) ?> </td>
						</tr>
					<?php } ?>
					</table>
				</div>
		<?php }
	}
	add_action('feb_flies', 'february_flies' );
	
	function march_flies() {
		$month        = 'March'; // Replace with the specific month value
		$meta_key     = 'table_data_' . strtolower( $month );
		$content_list = get_post_meta( get_the_ID(), $meta_key, true );
		$content_list = is_array( $content_list ) ? $content_list : array();
		
		// Loop through the saved data and display it
		if (!empty($content_list) && !empty(array_filter($content_list[0]))) { ?>
			<button class="btn btn-flies mt-1618" type="button" data-toggle="collapse" data-target="#collapseMarch" aria-expanded="false" aria-controls="collapseMarch">
				March Fly Selection | <span class="open-fly-list">Open List <i class="fa fa-chevron-right" aria-hidden="true"></i></span><span class="close-fly-list">Close List <i class="fa fa-times" aria-hidden="true"></i></span>
			</button>
				<div class="collapse" id="collapseMarch">
					<table>
					<tr>
						<th>Insect/Species</th>
						<th>Size</th>
						<th>Pattern</th>
					</tr>
					<?php foreach ($content_list as $row) {
						// Skip empty rows
						if (empty($row['column1']) && empty($row['column2']) && empty($row['column3'])) {
							continue;
						} ?>
						<tr>
						<td> <?php echo esc_html($row['column1']) ?> </td>
						<td> <?php echo esc_html($row['column2']) ?> </td>
						<td> <?php echo esc_html($row['column3']) ?> </td>
						</tr>
					<?php } ?>
					</table>
				</div>
	<?php	}
	}
	add_action('mar_flies', 'march_flies' );
	
	function april_flies() {
		$month        = 'April'; // Replace with the specific month value
		$meta_key     = 'table_data_' . strtolower( $month );
		$content_list = get_post_meta( get_the_ID(), $meta_key, true );
		$content_list = is_array( $content_list ) ? $content_list : array();
		
		// Loop through the saved data and display it
		if (!empty($content_list) && !empty(array_filter($content_list[0]))) { ?>
			<button class="btn btn-flies mt-1618" type="button" data-toggle="collapse" data-target="#collapseApril" aria-expanded="false" aria-controls="collapseApril">
				April Fly Selection | <span class="open-fly-list">Open List <i class="fa fa-chevron-right" aria-hidden="true"></i></span><span class="close-fly-list">Close List <i class="fa fa-times" aria-hidden="true"></i></span>
			</button>
				<div class="collapse" id="collapseApril">
					<table>
						<tr>
							<th>Insect/Species</th>
							<th>Size</th>
							<th>Pattern</th>
						</tr>
						<?php foreach ($content_list as $row) {
							// Skip empty rows
							if (empty($row['column1']) && empty($row['column2']) && empty($row['column3'])) {
								continue;
							} ?>
							<tr>
								<td> <?php echo esc_html($row['column1']) ?> </td>
								<td> <?php echo esc_html($row['column2']) ?> </td>
								<td> <?php echo esc_html($row['column3']) ?> </td>
							</tr>
						<?php } ?>
					</table>
				</div>
		<?php	}
	}
	add_action('apr_flies', 'april_flies' );
	
	function may_flies() {
		$month        = 'May'; // Replace with the specific month value
		$meta_key     = 'table_data_' . strtolower( $month );
		$content_list = get_post_meta( get_the_ID(), $meta_key, true );
		$content_list = is_array( $content_list ) ? $content_list : array();
		
		// Loop through the saved data and display it
		if (!empty($content_list) && !empty(array_filter($content_list[0]))) { ?>
			<button class="btn btn-flies mt-1618" type="button" data-toggle="collapse" data-target="#collapseMay" aria-expanded="false" aria-controls="collapseMay">
				May Fly Selection | <span class="open-fly-list">Open List <i class="fa fa-chevron-right" aria-hidden="true"></i></span><span class="close-fly-list">Close List <i class="fa fa-times" aria-hidden="true"></i></span>
			</button>
			<div class="collapse" id="collapseMay">
				<table>
					<tr>
						<th>Insect/Species</th>
						<th>Size</th>
						<th>Pattern</th>
					</tr>
					<?php foreach ($content_list as $row) {
						// Skip empty rows
						if (empty($row['column1']) && empty($row['column2']) && empty($row['column3'])) {
							continue;
						} ?>
						<tr>
							<td> <?php echo esc_html($row['column1']) ?> </td>
							<td> <?php echo esc_html($row['column2']) ?> </td>
							<td> <?php echo esc_html($row['column3']) ?> </td>
						</tr>
					<?php } ?>
				</table>
			</div>
		<?php	}
	}
	add_action('may_flies', 'may_flies' );
	
	function june_flies() {
		$month        = 'June'; // Replace with the specific month value
		$meta_key     = 'table_data_' . strtolower( $month );
		$content_list = get_post_meta( get_the_ID(), $meta_key, true );
		$content_list = is_array( $content_list ) ? $content_list : array();
		
		// Loop through the saved data and display it
		if (!empty($content_list) && !empty(array_filter($content_list[0]))) { ?>
			<button class="btn btn-flies mt-1618" type="button" data-toggle="collapse" data-target="#collapseJune" aria-expanded="false" aria-controls="collapseJune">
				June Fly Selection | <span class="open-fly-list">Open List <i class="fa fa-chevron-right" aria-hidden="true"></i></span><span class="close-fly-list">Close List <i class="fa fa-times" aria-hidden="true"></i></span>
			</button>
			<div class="collapse" id="collapseJune">
				<table>
					<tr>
						<th>Insect/Species</th>
						<th>Size</th>
						<th>Pattern</th>
					</tr>
					<?php foreach ($content_list as $row) {
						// Skip empty rows
						if (empty($row['column1']) && empty($row['column2']) && empty($row['column3'])) {
							continue;
						} ?>
						<tr>
							<td> <?php echo esc_html($row['column1']) ?> </td>
							<td> <?php echo esc_html($row['column2']) ?> </td>
							<td> <?php echo esc_html($row['column3']) ?> </td>
						</tr>
					<?php } ?>
				</table>
			</div>
		<?php	}
	}
	add_action('jun_flies', 'june_flies' );
	
	function july_flies() {
		$month        = 'July'; // Replace with the specific month value
		$meta_key     = 'table_data_' . strtolower( $month );
		$content_list = get_post_meta( get_the_ID(), $meta_key, true );
		$content_list = is_array( $content_list ) ? $content_list : array();
		
		// Loop through the saved data and display it
		if (!empty($content_list) && !empty(array_filter($content_list[0]))) { ?>
			<button class="btn btn-flies mt-1618" type="button" data-toggle="collapse" data-target="#collapseJuly" aria-expanded="false" aria-controls="collapseJuly">
				July Fly Selection | <span class="open-fly-list">Open List <i class="fa fa-chevron-right" aria-hidden="true"></i></span><span class="close-fly-list">Close List <i class="fa fa-times" aria-hidden="true"></i></span>
			</button>
			<div class="collapse" id="collapseJuly">
				<table>
					<tr>
						<th>Insect/Species</th>
						<th>Size</th>
						<th>Pattern</th>
					</tr>
					<?php foreach ($content_list as $row) {
						// Skip empty rows
						if (empty($row['column1']) && empty($row['column2']) && empty($row['column3'])) {
							continue;
						} ?>
						<tr>
							<td> <?php echo esc_html($row['column1']) ?> </td>
							<td> <?php echo esc_html($row['column2']) ?> </td>
							<td> <?php echo esc_html($row['column3']) ?> </td>
						</tr>
					<?php } ?>
				</table>
			</div>
		<?php	}
	}
	add_action('jul_flies', 'july_flies' );
	
	function august_flies() {
		$month        = 'August'; // Replace with the specific month value
		$meta_key     = 'table_data_' . strtolower( $month );
		$content_list = get_post_meta( get_the_ID(), $meta_key, true );
		$content_list = is_array( $content_list ) ? $content_list : array();
		
		// Loop through the saved data and display it
		if (!empty($content_list) && !empty(array_filter($content_list[0]))) { ?>
			<button class="btn btn-flies mt-1618" type="button" data-toggle="collapse" data-target="#collapseAugust" aria-expanded="false" aria-controls="collapseAugust">
				August Fly Selection | <span class="open-fly-list">Open List <i class="fa fa-chevron-right" aria-hidden="true"></i></span><span class="close-fly-list">Close List <i class="fa fa-times" aria-hidden="true"></i></span>
			</button>
			<div class="collapse" id="collapseAugust">
				<table>
					<tr>
						<th>Insect/Species</th>
						<th>Size</th>
						<th>Pattern</th>
					</tr>
					<?php foreach ($content_list as $row) {
						// Skip empty rows
						if (empty($row['column1']) && empty($row['column2']) && empty($row['column3'])) {
							continue;
						} ?>
						<tr>
							<td> <?php echo esc_html($row['column1']) ?> </td>
							<td> <?php echo esc_html($row['column2']) ?> </td>
							<td> <?php echo esc_html($row['column3']) ?> </td>
						</tr>
					<?php } ?>
				</table>
			</div>
		<?php	}
	}
	add_action('aug_flies', 'august_flies' );
	
	function september_flies() {
		$month        = 'September'; // Replace with the specific month value
		$meta_key     = 'table_data_' . strtolower( $month );
		$content_list = get_post_meta( get_the_ID(), $meta_key, true );
		$content_list = is_array( $content_list ) ? $content_list : array();
		
		// Loop through the saved data and display it
		if (!empty($content_list) && !empty(array_filter($content_list[0]))) { ?>
			<button class="btn btn-flies mt-1618" type="button" data-toggle="collapse" data-target="#collapseSeptember" aria-expanded="false" aria-controls="collapseSeptember">
				September Fly Selection | <span class="open-fly-list">Open List <i class="fa fa-chevron-right" aria-hidden="true"></i></span><span class="close-fly-list">Close List <i class="fa fa-times" aria-hidden="true"></i></span>
			</button>
			<div class="collapse" id="collapseSeptember">
				<table>
					<tr>
						<th>Insect/Species</th>
						<th>Size</th>
						<th>Pattern</th>
					</tr>
					<?php foreach ($content_list as $row) {
						// Skip empty rows
						if (empty($row['column1']) && empty($row['column2']) && empty($row['column3'])) {
							continue;
						} ?>
						<tr>
							<td> <?php echo esc_html($row['column1']) ?> </td>
							<td> <?php echo esc_html($row['column2']) ?> </td>
							<td> <?php echo esc_html($row['column3']) ?> </td>
						</tr>
					<?php } ?>
				</table>
			</div>
		<?php	}
	}
	add_action('sept_flies', 'september_flies' );
	
	function october_flies() {
		$month        = 'October'; // Replace with the specific month value
		$meta_key     = 'table_data_' . strtolower( $month );
		$content_list = get_post_meta( get_the_ID(), $meta_key, true );
		$content_list = is_array( $content_list ) ? $content_list : array();
		
		// Loop through the saved data and display it
		if (!empty($content_list) && !empty(array_filter($content_list[0]))) { ?>
			<button class="btn btn-flies mt-1618" type="button" data-toggle="collapse" data-target="#collapseOctober" aria-expanded="false" aria-controls="collapseOctober">
				October Fly Selection | <span class="open-fly-list">Open List <i class="fa fa-chevron-right" aria-hidden="true"></i></span><span class="close-fly-list">Close List <i class="fa fa-times" aria-hidden="true"></i></span>
			</button>
			<div class="collapse" id="collapseOctober">
				<table>
					<tr>
						<th>Insect/Species</th>
						<th>Size</th>
						<th>Pattern</th>
					</tr>
					<?php foreach ($content_list as $row) {
						// Skip empty rows
						if (empty($row['column1']) && empty($row['column2']) && empty($row['column3'])) {
							continue;
						} ?>
						<tr>
							<td> <?php echo esc_html($row['column1']) ?> </td>
							<td> <?php echo esc_html($row['column2']) ?> </td>
							<td> <?php echo esc_html($row['column3']) ?> </td>
						</tr>
					<?php } ?>
				</table>
			</div>
		<?php	}
	}
	add_action('oct_flies', 'october_flies' );
	
	function november_flies() {
		$month        = 'November'; // Replace with the specific month value
		$meta_key     = 'table_data_' . strtolower( $month );
		$content_list = get_post_meta( get_the_ID(), $meta_key, true );
		$content_list = is_array( $content_list ) ? $content_list : array();
		
		// Loop through the saved data and display it
		if (!empty($content_list) && !empty(array_filter($content_list[0]))) { ?>
			<button class="btn btn-flies mt-1618" type="button" data-toggle="collapse" data-target="#collapseNovember" aria-expanded="false" aria-controls="collapseNovember">
				November Fly Selection | <span class="open-fly-list">Open List <i class="fa fa-chevron-right" aria-hidden="true"></i></span><span class="close-fly-list">Close List <i class="fa fa-times" aria-hidden="true"></i></span>
			</button>
			<div class="collapse" id="collapseNovember">
				<table>
					<tr>
						<th>Insect/Species</th>
						<th>Size</th>
						<th>Pattern</th>
					</tr>
					<?php foreach ($content_list as $row) {
						// Skip empty rows
						if (empty($row['column1']) && empty($row['column2']) && empty($row['column3'])) {
							continue;
						} ?>
						<tr>
							<td> <?php echo esc_html($row['column1']) ?> </td>
							<td> <?php echo esc_html($row['column2']) ?> </td>
							<td> <?php echo esc_html($row['column3']) ?> </td>
						</tr>
					<?php } ?>
				</table>
			</div>
		<?php	}
	}
	add_action('nov_flies', 'november_flies' );
	
	function december_flies() {
		$month        = 'December'; // Replace with the specific month value
		$meta_key     = 'table_data_' . strtolower( $month );
		$content_list = get_post_meta( get_the_ID(), $meta_key, true );
		$content_list = is_array( $content_list ) ? $content_list : array();
		
		// Loop through the saved data and display it
		if (!empty($content_list) && !empty(array_filter($content_list[0]))) { ?>
			<button class="btn btn-flies mt-1618" type="button" data-toggle="collapse" data-target="#collapseDecember" aria-expanded="false" aria-controls="collapseDecember">
				December Fly Selection | <span class="open-fly-list">Open List <i class="fa fa-chevron-right" aria-hidden="true"></i></span><span class="close-fly-list">Close List <i class="fa fa-times" aria-hidden="true"></i></span>
			</button>
			<div class="collapse" id="collapseDecember">
				<table>
					<tr>
						<th>Insect/Species</th>
						<th>Size</th>
						<th>Pattern</th>
					</tr>
					<?php foreach ($content_list as $row) {
						// Skip empty rows
						if (empty($row['column1']) && empty($row['column2']) && empty($row['column3'])) {
							continue;
						} ?>
						<tr>
							<td> <?php echo esc_html($row['column1']) ?> </td>
							<td> <?php echo esc_html($row['column2']) ?> </td>
							<td> <?php echo esc_html($row['column3']) ?> </td>
						</tr>
					<?php } ?>
				</table>
			</div>
		<?php	}
	}
	add_action('dec_flies', 'december_flies' );

