<?php
/**
 * Template part for displaying post meta in travel-template.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Fly_Shop
 */

$travel_logo							        = get_post_meta(get_the_ID(), 'travel-logo', true);
$travel_description						    = get_post_meta(get_the_ID(), 'travel-description', true);
$masthead_bold_textarea					  = get_post_meta(get_the_ID(), 'masthead-bold-textarea', true);

$feature_1_title						      = get_post_meta(get_the_ID(), 'feature-1-title', true);
$feature_1_cost_textarea				  = get_post_meta(get_the_ID(), 'feature-1-cost-textarea', true);
$feature_1_inclusions_textarea		= get_post_meta(get_the_ID(), 'feature-1-inclusions-textarea', true);
$feature_1_noninclusions_textarea	= get_post_meta(get_the_ID(), 'feature-1-noninclusions-textarea', true);
$feature_1_travelins_textarea			= get_post_meta(get_the_ID(), 'feature-1-travelins-textarea', true);
$feature_1_image						      = get_post_meta(get_the_ID(), 'feature-1-image', true);

$feature_2_image						      = get_post_meta(get_the_ID(), 'feature-2-image', true);
$feature_2_seasons_title				  = get_post_meta(get_the_ID(), 'feature-2-seasons-title', true);
$feature_2_seasons_content				= get_post_meta(get_the_ID(), 'feature-2-seasons-content', true);
$feature_2_seasons_readmore				= get_post_meta(get_the_ID(), 'feature-2-seasons-readmore', true);
$feature_2_read_more_info         = get_post_meta(get_the_ID(), 'feature-2-read-more-info',true);
$feature_2_seasons_hi_lo_content	= get_post_meta(get_the_ID(), 'feature-2-seasons-hi-lo-content', true);
$feature_2_seasons_hiseason				= get_post_meta(get_the_ID(), 'feature-2-seasons-hiseason', true);
$feature_2_seasons_lowseason			= get_post_meta(get_the_ID(), 'feature-2-seasons-lowseason', true);

$feature_3_gettingto_image				= get_post_meta(get_the_ID(), 'feature-3-gettingto-image', true);
$feature_3_get_to_title					  = get_post_meta(get_the_ID(), 'feature-3-get-to-title', true);
$feature_3_get_to_content				  = get_post_meta(get_the_ID(), 'feature-3-get-to-content', true);
$feature_3_read_more_info         = get_post_meta(get_the_ID(), 'feature-3-read-more-info',true);
$feature_3_get_to_readmore				= get_post_meta(get_the_ID(), 'feature-3-get-to-readmore', true);

$feature_4_lodging_image				  = get_post_meta(get_the_ID(), 'feature-4-lodging-image', true);
$feature_4_lodging_title				  = get_post_meta(get_the_ID(), 'feature-4-lodging-title', true);
$feature_4_lodging_content				= get_post_meta(get_the_ID(), 'feature-4-lodging-content', true);
$feature_4_read_more_info         = get_post_meta(get_the_ID(), 'feature-4-read-more-info',true);
$feature_4_lodging_readmore				= get_post_meta(get_the_ID(), 'feature-4-lodging-readmore', true);

$feature_5_angling_image				  = get_post_meta(get_the_ID(), 'feature-5-angling-image', true);
$feature_5_angling_title				  = get_post_meta(get_the_ID(), 'feature-5-angling-title', true);
$feature_5_angling_content				= get_post_meta(get_the_ID(), 'feature-5-angling-content', true);
$feature_5_read_more_info         = get_post_meta(get_the_ID(), 'feature-5-read-more-info',true);
$feature_5_angling_readmore				= get_post_meta(get_the_ID(), 'feature-5-angling-readmore', true);

$sth_content_1                    = get_post_meta(get_the_ID(), 'sth-textarea-1', true);

$additional_info_image1					  = get_post_meta(get_the_ID(), 'additional-info-image1', true);
$additional_info_image1_link			= get_post_meta(get_the_ID(), 'additional-info-image1-link', true);
$additional_info_image2					  = get_post_meta(get_the_ID(), 'additional-info-image2', true);
$additional_info_image2_link			= get_post_meta(get_the_ID(), 'additional-info-image2-link', true);
$additional_info_image3					  = get_post_meta(get_the_ID(), 'additional-info-image3', true);
$additional_info_image3_link			= get_post_meta(get_the_ID(), 'additional-info-image3-link', true);
$additional_info_image4					  = get_post_meta(get_the_ID(), 'additional-info-image4', true);
$additional_info_image4_link			= get_post_meta(get_the_ID(), 'additional-info-image4-link', true);
$additional_info_image5					  = get_post_meta(get_the_ID(), 'additional-info-image5', true);
$additional_info_image5_link			= get_post_meta(get_the_ID(), 'additional-info-image5-link', true);
$additional_info_image6					  = get_post_meta(get_the_ID(), 'additional-info-image6', true);
$additional_info_image6_link			= get_post_meta(get_the_ID(), 'additional-info-image6-link', true);
$additional_info_image7					  = get_post_meta(get_the_ID(), 'additional-info-image7', true);
$additional_info_image7_link			= get_post_meta(get_the_ID(), 'additional-info-image7-link', true);
$additional_info_image8					  = get_post_meta(get_the_ID(), 'additional-info-image8', true);
$additional_info_image8_link			= get_post_meta(get_the_ID(), 'additional-info-image8-link', true);

$cta_strong_intro					        = get_post_meta(get_the_ID(), 'cta-strong-intro', true);
$cta_content							        = get_post_meta(get_the_ID(), 'cta-content', true);

// Table Modal
$rr_table_title                   = get_post_meta(get_the_ID(), 'rr-table-title', true);
$rr_table_textarea                = get_post_meta(get_the_ID(), 'rr-table-textarea',true);
