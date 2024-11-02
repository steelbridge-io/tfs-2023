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

if (have_posts()) :
	while (have_posts()) : the_post();
		echo '<div class="post-content container">';
		the_content();
		echo '</div>';
	endwhile;
else :
	echo '<p>' . __('Sorry, no posts matched your criteria.') . '</p>';
endif;

/**
 * Open Reveal
 */
echo '<div class="container gda-search-wrapper">
        <div class="row display-flex align-items-center">
            <div class="col-md-4">
                <input type="text" id="searchInput" placeholder="Search table..">
            </div>
            <div class="col-md-4">
                <div class="search-buttons">
                    <button id="prevMatch">Previous</button>
                    <button id="nextMatch">Next</button>
                    <span id="matchInfo"></span>
                </div>
            </div>
            <div class="col-md-4">
                <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Filter Table
                </button>
            </div>
        </div>
      </div>';

echo '<div class="collapse" id="collapseExample">';

// Retrieve form ID based on the guest number
$guest_number = get_post_meta(get_the_ID(), '_gda_meta_key', true);
if ($guest_number) {
	$form_id = ($guest_number);
}

$search_criteria['status'] = 'active';

// Sorting based on "Arrival date" field with ID 46 in descending order
$sorting = array(
	'key' => '46', // Field ID for "Arrival date"
	'direction' => 'ASC', // Sorting in descending order
	'is_numeric' => false,
);

if ($form_id == 96) {
	require_once get_template_directory() . '/questionnaire-config/search/alaska-rainbow-adventures-search.php';
}
if ($form_id == 95) {
	require_once get_template_directory() . '/questionnaire-config/search/alaska-steelhead-co-search.php';
}
if ($form_id == 85) {
	require_once get_template_directory() . '/questionnaire-config/search/epic-alaska-search.php';
}

/**
 * Close reveal
 */
echo '</div>';
echo '<div class="container form-list-wrap"></div>';

if ($form_id == 96) {
	include_once(get_template_directory() . '/questionnaire-config/table-headings/alaska-rainbow-adventures-table.php');
}
if ($form_id == 95) {
	require_once get_template_directory() . '/questionnaire-config/table-headings/alaska-steelhead-co-table.php';
}
if ($form_id == 85) {
	require_once get_template_directory() . '/questionnaire-config/table-headings/epic-alaska-table.php';
}

/**
 * Retrieves entries from a Gravity Form based on specified criteria and sorting order
 * $form_id: ID of the form to retrieve entries from
 * $search_criteria: Array to filter entries (e.g., status, date range, field values)
 * $sorting: Array to define the sorting order of entries (e.g., by date created, direction)
 */
$entries = GFAPI::get_entries($form_id, $search_criteria, $sorting);

if ($form_id == 59) {
	require_once get_template_directory() . '/questionnaire-config/question-config.php';
}
if ($form_id == 96) {
	require_once get_template_directory() . '/questionnaire-config/questionnaire/alaska/alaska-rainbow-adventures-ak-questionnaire.php';
}
if ($form_id == 95) {
	require_once get_template_directory() . '/questionnaire-config/questionnaire/alaska/alaska-steelhead-co-questionnaire.php';
}
if ($form_id == 85) {
	require_once get_template_directory() . '/questionnaire-config/questionnaire/epic-alaska-questionnaire.php';
}

foreach ($entries as $entry) {
	formatEntryData($entry, $counter);
}

echo '</tbody>'; // end tbody
echo '</table>'; // end table
echo '</div>'; // end table-scrollable
echo '</div>'; // end table-wrapper
echo '</div>'; // end travel-form-posts div

?>



<?php
get_footer();