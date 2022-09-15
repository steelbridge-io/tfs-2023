<?php
/**
 * Template part for displaying post meta in front-page-template.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Fly_Shop
 */

$front_page_logo								= get_post_meta(get_the_ID(), 'front-page-logo', true);

$front_page_image_1_title				= get_post_meta(get_the_ID(), 'front-page-image-1-title', true);
$front_page_image_1_title_link	= get_post_meta(get_the_ID(), 'front-page-image-1-title-link', true);
$front_page_image_1							= get_post_meta(get_the_ID(), 'front-page-image-1', true);
$front_page_image_1_sub_title		= get_post_meta(get_the_ID(), 'front-page-image-1-sub-title', true);
$front_page_image_1_caption			= get_post_meta(get_the_ID(), 'front-page-image-1-caption', true);

$front_page_image_2_title				= get_post_meta(get_the_ID(), 'front-page-image-2-title', true);
$front_page_image_2_title_link	= get_post_meta(get_the_ID(), 'front-page-image-2-title-link', true);
$front_page_image_2							= get_post_meta(get_the_ID(), 'front-page-image-2', true);
$front_page_image_2_sub_title		= get_post_meta(get_the_ID(), 'front-page-image-2-sub-title', true);
$front_page_image_2_caption			= get_post_meta(get_the_ID(), 'front-page-image-2-caption', true);

$front_page_image_3_title				= get_post_meta(get_the_ID(), 'front-page-image-3-title', true);
$front_page_image_3_title_link	= get_post_meta(get_the_ID(), 'front-page-image-3-title-link', true);
$front_page_image_3							= get_post_meta(get_the_ID(), 'front-page-image-3', true);
$front_page_image_3_sub_title		= get_post_meta(get_the_ID(), 'front-page-image-3-sub-title', true);
$front_page_image_3_caption			= get_post_meta(get_the_ID(), 'front-page-image-3-caption', true);

$front_page_image_4_title				= get_post_meta(get_the_ID(), 'front-page-image-4-title', true);
$front_page_image_4_title_link	= get_post_meta(get_the_ID(), 'front-page-image-4-title-link', true);
$front_page_image_4							= get_post_meta(get_the_ID(), 'front-page-image-4', true);
$front_page_image_4_sub_title		= get_post_meta(get_the_ID(), 'front-page-image-4-sub-title', true);
$front_page_image_4_caption			= get_post_meta(get_the_ID(), 'front-page-image-4-caption', true);

$flippage1_title                = get_post_meta(get_the_ID(), 'flippage1-title', true);
$flippage1_title_link           = get_post_meta(get_the_ID(), 'flippage1-title-link', true);
$flippage1_image                = get_post_meta(get_the_ID(), 'flippage1-image', true);

$flippage1_image_id             = attachment_url_to_postid($flippage1_image);
$flippage1_image_alt            = get_post_meta ($flippage1_image_id, '_wp_attachment_image_alt', true);

$flippage1_sub_title            = get_post_meta(get_the_ID(), 'flippage1-sub-title', true);
$flippage1_caption              = get_post_meta(get_the_ID(), 'flippage1-caption', true);

$flippage2_title                = get_post_meta(get_the_ID(), 'flippage2-title', true);
$flippage2_title_link           = get_post_meta(get_the_ID(), 'flippage2-title-link', true);
$flippage2_image                = get_post_meta(get_the_ID(), 'flippage2-image', true);

$flippage2_image_id             = attachment_url_to_postid($flippage2_image);
$flippage2_image_alt            = get_post_meta ($flippage2_image_id, '_wp_attachment_image_alt', true);

$flippage2_sub_title            = get_post_meta(get_the_ID(), 'flippage2-sub-title', true);
$flippage2_caption              = get_post_meta(get_the_ID(), 'flippage2-caption', true);

$flippage3_title                = get_post_meta(get_the_ID(), 'flippage3-title', true);
$flippage3_title_link           = get_post_meta(get_the_ID(), 'flippage3-title-link', true);
$flippage3_image                = get_post_meta(get_the_ID(), 'flippage3-image', true);

$flippage3_image_id             = attachment_url_to_postid($flippage3_image);
$flippage3_image_alt            = get_post_meta ($flippage3_image_id, '_wp_attachment_image_alt', true);

$flippage3_sub_title            = get_post_meta(get_the_ID(), 'flippage3-sub-title', true);
$flippage3_caption              = get_post_meta(get_the_ID(), 'flippage3-caption', true);

$flippage4_title                = get_post_meta(get_the_ID(), 'flippage4-title', true);
$flippage4_title_link           = get_post_meta(get_the_ID(), 'flippage4-title-link', true);
$flippage4_image                = get_post_meta(get_the_ID(), 'flippage4-image', true);

$flippage4_image_id             = attachment_url_to_postid($flippage4_image);
$flippage4_image_alt            = get_post_meta ($flippage4_image_id, '_wp_attachment_image_alt', true);

$flippage4_sub_title            = get_post_meta(get_the_ID(), 'flippage4-sub-title', true);
$flippage4_caption              = get_post_meta(get_the_ID(), 'flippage4-caption', true);

$front_page_image_5_title				= get_post_meta(get_the_ID(), 'front-page-image-5-title', true);
$front_page_image_5_title_link	= get_post_meta(get_the_ID(), 'front-page-image-5-title-link', true);
$front_page_image_5							= get_post_meta(get_the_ID(), 'front-page-image-5', true);
$front_page_image_5_sub_title		= get_post_meta(get_the_ID(), 'front-page-image-5-sub-title', true);
$front_page_image_5_caption			= get_post_meta(get_the_ID(), 'front-page-image-5-caption', true);

$front_page_image_6_title				= get_post_meta(get_the_ID(), 'front-page-image-6-title', true);
$front_page_image_6_title_link	= get_post_meta(get_the_ID(), 'front-page-image-6-title-link', true);
$front_page_image_6							= get_post_meta(get_the_ID(), 'front-page-image-6', true);
$front_page_image_6_sub_title		= get_post_meta(get_the_ID(), 'front-page-image-6-sub-title', true);
$front_page_image_6_caption			= get_post_meta(get_the_ID(), 'front-page-image-6-caption', true);

$front_page_image_7_title				= get_post_meta(get_the_ID(), 'front-page-image-7-title', true);
$front_page_image_7_title_link	= get_post_meta(get_the_ID(), 'front-page-image-7-title-link', true);
$front_page_image_7							= get_post_meta(get_the_ID(), 'front-page-image-7', true);
$front_page_image_7_sub_title		= get_post_meta(get_the_ID(), 'front-page-image-7-sub-title', true);
$front_page_image_7_caption			= get_post_meta(get_the_ID(), 'front-page-image-7-caption', true);

$front_page_image_8_title				= get_post_meta(get_the_ID(), 'front-page-image-8-title', true);
$front_page_image_8_title_link	= get_post_meta(get_the_ID(), 'front-page-image-8-title-link', true);
$front_page_image_8							= get_post_meta(get_the_ID(), 'front-page-image-8', true);
$front_page_image_8_sub_title		= get_post_meta(get_the_ID(), 'front-page-image-8-sub-title', true);
$front_page_image_8_caption			= get_post_meta(get_the_ID(), 'front-page-image-8-caption', true);

$front_page_image_9_title				= get_post_meta(get_the_ID(), 'front-page-image-9-title', true);
$front_page_image_9_title_link	= get_post_meta(get_the_ID(), 'front-page-image-9-title-link', true);
$front_page_image_9							= get_post_meta(get_the_ID(), 'front-page-image-9', true);
$front_page_image_9_sub_title		= get_post_meta(get_the_ID(), 'front-page-image-9-sub-title', true);
$front_page_image_9_caption			= get_post_meta(get_the_ID(), 'front-page-image-9-caption', true);

$front_page_image_10_title			= get_post_meta(get_the_ID(), 'front-page-image-10-title', true);
$front_page_image_10						= get_post_meta(get_the_ID(), 'front-page-image-10', true);
$front_page_image_10_sub_title	= get_post_meta(get_the_ID(), 'front-page-image-10-sub-title', true);
$front_page_image_10_caption		= get_post_meta(get_the_ID(), 'front-page-image-10-caption', true);

$front_page_image_11_title			= get_post_meta(get_the_ID(), 'front-page-image-11-title', true);
$front_page_image_11						= get_post_meta(get_the_ID(), 'front-page-image-11', true);
$front_page_image_11_sub_title	= get_post_meta(get_the_ID(), 'front-page-image-11-sub-title', true);
$front_page_image_11_caption		= get_post_meta(get_the_ID(), 'front-page-image-11-caption', true);

$front_page_image_12_title			= get_post_meta(get_the_ID(), 'front-page-image-12-title', true);
$front_page_image_12						= get_post_meta(get_the_ID(), 'front-page-image-12', true);
$front_page_image_12_sub_title	= get_post_meta(get_the_ID(), 'front-page-image-12-sub-title', true);
$front_page_image_12_caption		= get_post_meta(get_the_ID(), 'front-page-image-12-caption', true);

$front_page_image_13_title			= get_post_meta(get_the_ID(), 'front-page-image-13-title', true);
$front_page_image_13						= get_post_meta(get_the_ID(), 'front-page-image-13', true);
$front_page_image_13_sub_title	= get_post_meta(get_the_ID(), 'front-page-image-13-sub-title', true);
$front_page_image_13_caption		= get_post_meta(get_the_ID(), 'front-page-image-13-caption', true);

$front_page_image_14_title			= get_post_meta(get_the_ID(), 'front-page-image-14-title', true);
$front_page_image_14						= get_post_meta(get_the_ID(), 'front-page-image-14', true);
$front_page_image_14_sub_title	= get_post_meta(get_the_ID(), 'front-page-image-14-sub-title', true);
$front_page_image_14_caption		= get_post_meta(get_the_ID(), 'front-page-image-14-caption', true);

$front_page_image_15_title			= get_post_meta(get_the_ID(), 'front-page-image-15-title', true);
$front_page_image_15						= get_post_meta(get_the_ID(), 'front-page-image-15', true);
$front_page_image_15_sub_title	= get_post_meta(get_the_ID(), 'front-page-image-15-sub-title', true);
$front_page_image_15_caption		= get_post_meta(get_the_ID(), 'front-page-image-15-caption', true);

$front_page_image_16_title			= get_post_meta(get_the_ID(), 'front-page-image-16-title', true);
$front_page_image_16						= get_post_meta(get_the_ID(), 'front-page-image-16', true);
$front_page_image_16_sub_title	= get_post_meta(get_the_ID(), 'front-page-image-16-sub-title', true);
$front_page_image_16_caption		= get_post_meta(get_the_ID(), 'front-page-image-16-caption', true);

$front_page_image_17_title			= get_post_meta(get_the_ID(), 'front-page-image-17-title', true);
$front_page_image_17						= get_post_meta(get_the_ID(), 'front-page-image-17', true);
$front_page_image_17_sub_title	= get_post_meta(get_the_ID(), 'front-page-image-17-sub-title', true);
$front_page_image_17_caption		= get_post_meta(get_the_ID(), 'front-page-image-17-caption', true);

$front_page_image_18_title			= get_post_meta(get_the_ID(), 'front-page-image-18-title', true);
$front_page_image_18						= get_post_meta(get_the_ID(), 'front-page-image-18', true);
$front_page_image_18_sub_title	= get_post_meta(get_the_ID(), 'front-page-image-18-sub-title', true);
$front_page_image_18_caption		= get_post_meta(get_the_ID(), 'front-page-image-18-caption', true);

$front_page_image_19_title			= get_post_meta(get_the_ID(), 'front-page-image-19-title', true);
$front_page_image_19						= get_post_meta(get_the_ID(), 'front-page-image-19', true);
$front_page_image_19_sub_title	= get_post_meta(get_the_ID(), 'front-page-image-19-sub-title', true);
$front_page_image_19_caption		= get_post_meta(get_the_ID(), 'front-page-image-19-caption', true);

$front_page_image_20_title			= get_post_meta(get_the_ID(), 'front-page-image-20-title', true);
$front_page_image_20						= get_post_meta(get_the_ID(), 'front-page-image-20', true);
$front_page_image_20_sub_title	= get_post_meta(get_the_ID(), 'front-page-image-20-sub-title', true);
$front_page_image_20_caption		= get_post_meta(get_the_ID(), 'front-page-image-20-caption', true);

$front_page_image_21_title			= get_post_meta(get_the_ID(), 'front-page-image-21-title', true);
$front_page_image_21						= get_post_meta(get_the_ID(), 'front-page-image-21', true);
$front_page_image_21_sub_title	= get_post_meta(get_the_ID(), 'front-page-image-21-sub-title', true);
$front_page_image_21_caption		= get_post_meta(get_the_ID(), 'front-page-image-21-caption', true);

$front_page_image_22_title			= get_post_meta(get_the_ID(), 'front-page-image-22-title', true);
$front_page_image_22						= get_post_meta(get_the_ID(), 'front-page-image-22', true);
$front_page_image_22_sub_title	= get_post_meta(get_the_ID(), 'front-page-image-22-sub-title', true);
$front_page_image_22_caption		= get_post_meta(get_the_ID(), 'front-page-image-22-caption', true);

$front_page_image_23_title			= get_post_meta(get_the_ID(), 'front-page-image-23-title', true);
$front_page_image_23						= get_post_meta(get_the_ID(), 'front-page-image-23', true);
$front_page_image_23_sub_title	= get_post_meta(get_the_ID(), 'front-page-image-23-sub-title', true);
$front_page_image_23_caption		= get_post_meta(get_the_ID(), 'front-page-image-23-caption', true);

$front_page_image_24_title			= get_post_meta(get_the_ID(), 'front-page-image-24-title', true);
$front_page_image_24						= get_post_meta(get_the_ID(), 'front-page-image-24', true);
$front_page_image_24_sub_title	= get_post_meta(get_the_ID(), 'front-page-image-24-sub-title', true);
$front_page_image_24_caption		= get_post_meta(get_the_ID(), 'front-page-image-24-caption', true);

$front_page_cta_title						= get_post_meta(get_the_ID(), 'front-page-cta-title', true);
$front_page_cta_content					= get_post_meta(get_the_ID(), 'front-page-cta-content', true);