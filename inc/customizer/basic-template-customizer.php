<?php
/**
 * Basic Template Customizer
 */

$wp_customize -> add_section(
	'basic_template',
		array (
			'title'							=> __('Basic Template'),
			'description'				=> __('Basic Template Customizer Features'),
			'priority'					=> 80,
			'active_callback'		=> function() { return is_page_template('page-templates/basic-page-template.php');}
	)
);

/* ==== Basic Page Template Settings & Controls ==== */

$wp_customize -> add_setting(
	'basic_page_logo',
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
		'basic_page_logo',
			array(
				'label'								=> __('Basic Template Logo', 'the-fly-shop' ),
				'section'							=> 'basic_template',
				'settings'						=> 'basic_page_logo',
				'priority'						=> 10,
				'sanitize_callback'		=> 'themepatio_sanitize_image'
		)
	)
);

// Basic page template background color
$wp_customize -> add_setting(
	'basic_page_bg',
		array(
			'default'							=> '#f5f5f5',
			'type'								=> 'theme_mod',
			'capability'					=> 'edit_theme_options',
			'sanitize_callback'		=> 'sanitize_hex_color',
			'transport'						=> 'postMessage'
	)
);
// Add control
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'basic_page_bg', 
			array(
				'label'			=> __( '<div style="margin-top:1.618em;">' . 'Basic Page Template Background Color' . '</div>', 'the-fly-shop' ),
				'priority' 	=> 10,
				'section'		=> 'basic_template',
				'settings'	=> 'basic_page_bg'
		)
	)
);

// Basic page text color
$wp_customize -> add_setting(
	'basic_page_color',
		array(
			'default'							=> '#2e3842',
			'type'								=> 'theme_mod',
			'capability'					=> 'edit_theme_options',
			'sanitize_callback'		=> 'sanitize_hex_color',
			'transport'						=> 'postMessage'
	)
);
// Add control
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'basic_page_color', 
			array(
				'label'			=> __( '<div style="margin-top:1.618em;">' . 'Basic Page Text Color' . '</div>', 'the-fly-shop' ),
				'priority' 	=> 10,
				'section'		=> 'basic_template',
				'settings'	=> 'basic_page_color'
		)
	)
);







