<?php
/**
 * Custom Gravity Forms Settings And Features
 *
 */
add_filter( 'gform_shortcode_entry_count', 'gwiz_entry_count_shortcode', 10, 2 );
function gwiz_entry_count_shortcode( $output, $atts ) {

    extract( shortcode_atts( array(
        'id' => false,
        'status' => 'total', // accepts 'total', 'unread', 'starred', 'trash', 'spam'
        'format' => false // should be 'comma', 'decimal'
    ), $atts ) );

    $valid_statuses = array( 'total', 'unread', 'starred', 'trash', 'spam' );

    if( ! $id || ! in_array( $status, $valid_statuses ) ) {
        return current_user_can( 'update_core' ) ? __( 'Invalid "id" (the form ID) or "status" (i.e. "total", "trash", etc.) parameter passed.' ) : '';
    }

    $counts = GFFormsModel::get_form_counts( $id );
    $output = rgar( $counts, $status );

    if( $format ) {
        $format = $format == 'decimal' ? '.' : ',';
        $output = number_format( $output, 0, false, $format );
    }

    return $output;
}