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

// Display post title and content.
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

// Search and filter section.
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
                <button class="btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Filter Table
                </button>
            </div>
        </div>
      </div>';

echo '<div class="collapse" id="collapseExample">
        <div id="filter-cont" class="container filter-wrap">
            <form method="GET">
                <div class="row">';

// Filter for arrival date.
$arrival_date = filter_input(INPUT_GET, 'filter_arrival_date', FILTER_SANITIZE_SPECIAL_CHARS);
echo '<div class="well col-md-4">
        <label for="filter_arrival_date">Arrival Date:</label>
        <input type="date" id="filter_arrival_date" name="filter_arrival_date" value="' . esc_attr($arrival_date) . '">
      </div>';

echo '      </div>
              <input class="filter-btn" type="submit" value="Filter">
              <a href="' . esc_url(strtok((isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], '?')) . '" class="btn btn-danger clear-results" title="Clear results">Clear Results</a>
            </form>
        </div>
      </div>'; // Close collapse container

// Retrieve form ID based on the guest number.
$guest_number = get_post_meta(get_the_ID(), '_gda_meta_key', true);
if ($guest_number) {
  $form_id = $guest_number;
}

$search_criteria = [
  'status' => 'active'
];

/* Filter logic */
if (isset($_GET['filter_arrival_date']) && !empty($_GET['filter_arrival_date'])) {
  try {
    $date = new DateTime($_GET['filter_arrival_date']);
    $arrival_date_formatted = $date->format('Y-m-d');
    $search_criteria['field_filters'][] = ['key' => '46', 'value' => $arrival_date_formatted]; // check arrival date
  } catch (Exception $e) {
    error_log('Invalid arrival date: ' . $_GET['filter_arrival_date']);
  }
}

if ($form_id) {
  $form = GFAPI::get_form($form_id);

  if ($form) {
    // Retrieve form fields dynamically
    $fields = $form['fields'];

    echo '<div class="container form-list-wrap"></div>';

    echo '<div id="question-grid" class="table-wrapper">
          <div class="table-scrollable">
          <table id="gda-table" class="table">
          <thead>
          <tr>';

    $name_field = null;
    $allergies_field = null;
    $other_allergies_field = null;
    $special_requests_field = null;
    $reservation_number_field = null;
    $arrival_date_field = ['label' => 'Trip Arrival Date', 'id' => 46, 'type' => 'date'];
    $other_fields = [];

    // Identify fields including specific ones
    foreach ($fields as $field) {
      if (in_array($field->type, ['section', 'page', 'html', 'captcha'])) {
        continue;
      }
      $label = !empty($field->label) ? $field->label : 'Field ' . $field->id;
      $field_entry = ['label' => $label, 'id' => $field->id, 'type' => $field->type];
      switch (strtolower($field->label)) {
        case 'name':
          $name_field = $field_entry;
          break;
        case 'allergies (food and environmental)':
          $allergies_field = $field_entry;
          break;
        case 'other allergies':
          $other_allergies_field = $field_entry;
          break;
        case 'please list any special requests, needs, dietary restrictions, health concerns, physical challenges':
          $special_requests_field = $field_entry;
          break;
        case 'reservation number':
          $reservation_number_field = $field_entry;
          break;
        default:
          $other_fields[] = $field_entry;
          break;
      }
    }

    // Collect headers in an array to ensure consistent counts
    $headers = [];
    if ($name_field) $headers[] = $name_field['label'];
    if ($allergies_field) $headers[] = $allergies_field['label'];
    if ($other_allergies_field) $headers[] = $other_allergies_field['label'];
    if ($special_requests_field) $headers[] = $special_requests_field['label'];
    if ($arrival_date_field) $headers[] = $arrival_date_field['label'];

    foreach ($other_fields as $index => $field) {
      if ($index == 2 && $reservation_number_field) {  // To insert at the 7th position, considering already rendered fields
        $headers[] = $reservation_number_field['label'];
      }
      $headers[] = $field['label'];
    }

    // Render headers
    foreach ($headers as $header) {
      echo '<th>' . esc_html($header) . '</th>';
    }

    echo '</tr></thead><tbody>';

    // Fetch entries from Gravity Forms
    $entries = GFAPI::get_entries($form_id, $search_criteria);

    // Function to sort entries manually based on Arrival date
    usort($entries, function($a, $b) {
      $date_a = DateTime::createFromFormat('Y-m-d', rgar($a, '46'));
      $date_b = DateTime::createFromFormat('Y-m-d', rgar($b, '46'));
      if ($date_a && $date_b) {
        return $date_a <=> $date_b;
      }
      return 0;
    });

    // Render table rows with entry data
    foreach ($entries as $entry) {
      echo '<tr>';

      // Collect values in an array to ensure consistent counts
      $row_values = [];
      if ($name_field) {
        $field_id = $name_field['id'];
        $first_name = rgar($entry, "{$field_id}.3");
        $last_name = rgar($entry, "{$field_id}.6");
        $full_name = trim("$first_name $last_name");
        $name_value = !empty($full_name) ? esc_html($full_name) : '&nbsp;';
        $row_values[] = $name_value;
      }

      if ($allergies_field) {
        $field_id = $allergies_field['id'];
        $allergies_value = rgar($entry, $field_id);
        $allergies_value = !empty($allergies_value) ? esc_html($allergies_value) : '&nbsp;';
        $row_values[] = $allergies_value;
      }

      if ($other_allergies_field) {
        $field_id = $other_allergies_field['id'];
        $other_allergies_value = rgar($entry, $field_id);
        $other_allergies_value = !empty($other_allergies_value) ? esc_html($other_allergies_value) : '&nbsp;';
        $row_values[] = $other_allergies_value;
      }

      if ($special_requests_field) {
        $field_id = $special_requests_field['id'];
        $special_requests_value = rgar($entry, $field_id);
        if (!empty($special_requests_value)) {
          $excerpt = (strlen($special_requests_value) > 50) ? substr($special_requests_value, 0, 50) . '...' : $special_requests_value;
          $popover_link = '';
          if (strlen($special_requests_value) > 50) {
            $popover_link = ' <a tabindex="0" class="popover-dismiss" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="' . esc_html($special_requests_value) . '">Read More</a>';
          }
          $row_values[] = esc_html($excerpt) . $popover_link;
        } else {
          $row_values[] = '&nbsp;';
        }
      }

      if ($arrival_date_field) {
        $field_id = $arrival_date_field['id'];
        $arrival_date_value = rgar($entry, $field_id);
        if (DateTime::createFromFormat('Y-m-d', $arrival_date_value)) {
          $date = new DateTime($arrival_date_value);
          $arrival_date_value = $date->format('m/d/Y');
        }
        $row_values[] = !empty($arrival_date_value) ? esc_html($arrival_date_value) : '&nbsp;';
      }

      foreach ($other_fields as $index => $field) {
        if ($index == 2 && $reservation_number_field) {
          $field_id = $reservation_number_field['id'];
          $reservation_number_value = rgar($entry, $field_id);
          $row_values[] = !empty($reservation_number_value) ? esc_html($reservation_number_value) : '&nbsp;';
        }

        $field_id = $field['id'];
        $cell_value = rgar($entry, $field_id);

        // Handle specific field types
        switch ($field['type']) {
          case 'date':
            try {
              $date = new DateTime($cell_value);
              $cell_value = $date->format('m/d/Y');
            } catch (Exception $e) {
              // Invalid date, retain original value
              $cell_value = !empty($cell_value) ? esc_html($cell_value) : '&nbsp;';
            }
            break;
          case 'multiselect':
            $cell_value = !empty($cell_value) ? esc_html(implode(', ', $cell_value)) : '&nbsp;';
            break;
          case 'checkbox':
            $checkbox_values = [];
            foreach ($entry as $key => $value) {
              if (strpos($key, "{$field_id}.") === 0 && !empty($value)) {
                $checkbox_values[] = esc_html($value);
              }
            }
            $cell_value = !empty($checkbox_values) ? implode(', ', $checkbox_values) : '&nbsp;';
            break;
          case 'textarea':
            $excerpt = (strlen($cell_value) > 50) ? substr($cell_value, 0, 50) . '...' : $cell_value;
            $popover_link = '';
            if (strlen($cell_value) > 50) {
              $popover_link = ' <a tabindex="0" class="popover-dismiss" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="' . esc_html($cell_value) . '">Read More</a>';
            }
            $cell_value = esc_html($excerpt) . $popover_link;
            break;
          default:
            $cell_value = !empty($cell_value) ? esc_html($cell_value) : '&nbsp;';
        }

        $row_values[] = $cell_value;
      }

      // Render row values
      foreach ($row_values as $value) {
        echo '<td>' . $value . '</td>';
      }

      echo '</tr>';
    }

    echo '</tbody>'; // End tbody
    echo '</table>'; // End table
    echo '</div>'; // End table-scrollable
    echo '</div>'; // End table-wrapper
  } else {
    echo '<p>Form with ID ' . esc_html($form_id) . ' not found.</p>';
  }
}
echo '</div>'; // End travel-form-posts div

get_footer();
?>

<!-- Initialize Bootstrap Popover -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl, {
                trigger: 'focus',
                html: true,
            });
        });
    });
</script>