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

/**
 * Open Reveal
 */
/*echo '<div class="container gda-filter-wrapper">
        <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Filter Table
        </button>
      </div>';*/

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

/**
 * The form_id variable is used to store the unique identifier of a form.
 *
 * @var string $form_id The unique identifier of the Gravity Form.
 */
//$form_id                   = '59'; // Your Gravity Form ID
$guest_number = get_post_meta(get_the_ID(),'_gda_meta_key', true);
if ($guest_number) {
	$form_id = ($guest_number);
}
$search_criteria['status'] = 'active';
$sorting                   = array(
	'key'        => '1.6',
	'direction'  => 'ASC',
	'is_numeric' => FALSE,
); // 1.6 is the field id for last name

if($form_id == 96) {
	include_once get_template_directory() . '/questionnaire-config/search/alaska-rainbow-adventures-search.php';
}

/**
 * Close reveal
 */
echo '</div>';

echo '<div class="container form-list-wrap">';

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
if($form_id == 59) {
	include_once(get_template_directory() . '/questionnaire-config/table-headings/master-questionnaire-table.php');
}

if($form_id == 96) {
	include_once( get_template_directory() . '/questionnaire-config/table-headings/alaska-rainbow-adventures-table.php' );
}

/*
 * Retrieves entries from a Gravity Form based on specified criteria and sorting order
 * $form_id: ID of the form to retrieve entries from
 * $search_criteria: Array to filter entries (e.g., status, date range, field values)
 * $sorting: Array to define the sorting order of entries (e.g., by date created, direction)
**/
$entries = GFAPI::get_entries( $form_id, $search_criteria, $sorting );

if( $form_id == 59) {
require_once get_template_directory() . '/questionnaire-config/question-config.php';
}
if( $form_id == 96) {
require_once get_template_directory() . '/questionnaire-config/questionnaire/alaska-rainbow-adventures-ak-questionnaire.php';
}

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
