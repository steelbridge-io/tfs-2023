<?php
	
	add_action('wp_enqueue_scripts', 'add_inline_styles');
	function add_inline_styles() {
		wp_enqueue_style( 'the-fly-shop-custom-style', get_template_directory_uri() . '/assets/css/custom.css', array(), '20161116', 'all' );
		if ( function_exists( 'load_private_waters_css' ) ) {
			wp_add_inline_style( 'the-fly-shop-custom-style', load_private_waters_css() );
		}
		if ( function_exists( 'load_private_waters_css' ) ) {
			wp_add_inline_style( 'the-fly-shop-custom-style', load_private_waters_css() );
		}
		if ( function_exists( 'load_guideservice_css' ) ) {
			wp_add_inline_style( 'the-fly-shop-custom-style', load_guideservice_css() );
		}
		if ( function_exists( 'load_guide_service_css' ) ) {
			wp_add_inline_style( 'the-fly-shop-custom-style', load_guide_service_css() );
		}
		if ( function_exists( 'load_schools_css' ) ) {
			wp_add_inline_style( 'the-fly-shop-custom-style', load_schools_css() );
		}
		if ( function_exists( 'load_schools_hero_css' ) ) {
			wp_add_inline_style( 'the-fly-shop-custom-style', load_schools_hero_css() );
		}
		if ( function_exists( 'load_fish_camp_css' ) ) {
			wp_add_inline_style( 'the-fly-shop-custom-style', load_fish_camp_css() );
		}
		if ( function_exists( 'load_fish_camp_hero_css' ) ) {
			wp_add_inline_style( 'the-fly-shop-custom-style', load_fish_camp_hero_css() );
		}
		if ( function_exists( 'load_staff_css' ) ) {
			wp_add_inline_style( 'the-fly-shop-custom-style', load_staff_css() );
		}
		if ( function_exists( 'load_front_page_css' ) ) {
			wp_add_inline_style( 'the-fly-shop-custom-style', load_front_page_css() );
		}
		if ( function_exists( 'load_signature_css' ) ) {
			wp_add_inline_style( 'the-fly-shop-custom-style', load_signature_css() );
		}
		if ( function_exists( 'load_signature_events_css' ) ) {
			wp_add_inline_style( 'the-fly-shop-custom-style', load_signature_events_css() );
		}
		if ( function_exists( 'load_basic_css' ) ) {
			wp_add_inline_style( 'the-fly-shop-custom-style', load_basic_css() );
		}
		if ( function_exists( 'load_travel_css' ) ) {
			wp_add_inline_style( 'the-fly-shop-custom-style', load_travel_css() );
		}
		if ( function_exists( 'load_travel_destination_css' ) ) {
			wp_add_inline_style( 'the-fly-shop-custom-style', load_travel_destination_css() );
		}
		if ( function_exists( 'load_streamreport_css' ) ) {
			wp_add_inline_style( 'the-fly-shop-custom-style', load_streamreport_css() );
		}
		if ( function_exists( 'load_default_css' ) ) {
			wp_add_inline_style( 'the-fly-shop-custom-style', load_default_css() );
		}
		if ( function_exists( 'load_archive_css' ) ) {
			wp_add_inline_style( 'the-fly-shop-custom-style', load_archive_css() );
		}
		if ( function_exists( 'load_holiday_template_css' ) ) {
			wp_add_inline_style( 'the-fly-shop-custom-style', load_holiday_template_css() );
		}
		if ( function_exists( 'load_tfs_custom_fields_css' ) ) {
			wp_add_inline_style( 'the-fly-shop-custom-style', load_tfs_custom_fields_css() );
		}
		if ( function_exists( 'blog_css' ) ) {
			wp_add_inline_style( 'the-fly-shop-custom-style', blog_css() );
		}
		if ( function_exists( 'load_travelblog_css' ) ) {
			wp_add_inline_style( 'the-fly-shop-custom-style', load_travelblog_css() );
		}
		if ( function_exists( 'load_primetravel_css' ) ) {
			wp_add_inline_style( 'the-fly-shop-custom-style', load_primetravel_css() );
		}
		if ( function_exists( 'load_primetravel_template_css' ) ) {
			wp_add_inline_style( 'the-fly-shop-custom-style', load_primetravel_template_css() );
		}
	}
