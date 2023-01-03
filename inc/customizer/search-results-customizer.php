<?php
	/**
	 * Search Results Customizer
	 */
	
	$wp_customize -> add_section(
		'search_results_cust',
		array (
			'title' 					=> __('Search Results'),
			'description'			=> __('Search Results Features'),
			'priority'				=> 80,
			'active_callback'	=> function(){return is_search();},
		)
	);
	
	// Header Hero Image
	$wp_customize -> add_setting(
		'search_header_img',
		array(
			'default'				=> '',
			'type'					=> 'theme_mod',
			'capability'		=> 'edit_theme_options',
			'transport'			=> 'refresh'
		)
	);
	
	$wp_customize -> add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'search_header_img',
			array(
				'label'								=> __('Header Image', 'the-fly-shop' ),
				'section'							=> 'search_results_cust',
				'settings'						=> 'search_header_img',
				'priority'						=> 10,
				'sanitize_callback'		=> 'themepatio_sanitize_image'
			)
		)
	);
	
	$wp_customize->selective_refresh->add_partial('search_header_img', array(
			'selector' 				=> '#search-results-header',
			'settings' 				=> 'search_header_img',
			'render_callback' => wp_get_attachment_image(get_theme_mod('travelblog_title'), '')
		)
	);