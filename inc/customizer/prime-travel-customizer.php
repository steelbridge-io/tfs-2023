<?php
/**
 * Prime Travel Template Customizer
 */

$wp_customize -> add_section(
	'prime_travel',
	array (
		'title'				=> __('Prime Travel Section'),
		'description'		=> __('Prime Travel Section Features'),
		'priority'			=> 80,
		'active_callback'	=> function() { return is_page_template('page-templates/travel-signature-template.php');}
	)
);

/* ==== Prime Travel Settings & Controls ==== */

// Prime Travel Background Color
	$wp_customize -> add_setting ( 'pt_bg_color', array(
		'default'						=> '#cccccc',
		'capability'				=> 'edit_theme_options',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'refresh',
	));

// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'pt_bg_color', array(
				'label'							=> __('Prime Travel Background Color', 'the-fly-shop' ),
				'priority'					=>  10,
				'section'						=> 'prime_travel',
				'settings'				  => 'pt_bg_color',
			)
		)
	);
	
	// Prime Travel Font Color
	$wp_customize -> add_setting ( 'pt_font_color', array(
		'default'						=> '#000000',
		'capability'				=> 'edit_theme_options',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'refresh',
	));

// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'pt_font_color', array(
				'label'							=> __('Prime Travel Font Color', 'the-fly-shop' ),
				'priority'					=>  10,
				'section'						=> 'prime_travel',
				'settings'				  => 'pt_font_color',
			)
		)
	);
	
	// Prime Travel Button Font Color
	$wp_customize -> add_setting ( 'pt_btn_text_color', array(
		'default'						=> '#f5f5f5',
		'capability'				=> 'edit_theme_options',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'refresh',
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'pt_btn_text_color', array(
				'label'							=> __('Prime Travel Button Text Color', 'the-fly-shop' ),
				'priority'					=>  10,
				'section'						=> 'prime_travel',
				'settings'				  => 'pt_btn_text_color',
			)
		)
	);
	
	// Prime Travel Button Color
	$wp_customize -> add_setting ( 'pt_button_color', array(
		'default'						=> '#d9534f',
		'capability'				=> 'edit_theme_options',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'refresh',
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'pt_button_color', array(
				'label'							=> __('Prime Travel Button Color', 'the-fly-shop' ),
				'priority'					=>  10,
				'section'						=> 'prime_travel',
				'settings'				  => 'pt_button_color',
			)
		)
	);
	
	// Prime Travel Button Hover Color
	$wp_customize -> add_setting ( 'pt_btn_hover', array(
		'default'						=> '#c9302c',
		'capability'				=> 'edit_theme_options',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'refresh',
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'pt_btn_hover', array(
				'label'							=> __('Prime Travel Button Hover Color', 'the-fly-shop' ),
				'priority'					=>  10,
				'section'						=> 'prime_travel',
				'settings'				  => 'pt_btn_hover',
			)
		)
	);
	
	// Modal Logo
	$wp_customize -> add_setting ( 'pt_mdl_logo', array(
		'default'           => '',
		'type'              => 'theme_mod',
		'transport'         => 'refresh'
	));
	$wp_customize -> add_control (
		new WP_Customize_Image_Control (
			$wp_customize,
			'pt_mdl_logo',
			array (
				'label'             => __('Modal Logo'),
				'section'           => 'prime_travel',
				'settings'          => 'pt_mdl_logo',
				'priority'          => 10,
				'sanitize_callback' => 'esc_url_raw'
			)
		)
	);
	