<?php
/**
 * Archive Template Customizer
 */

$wp_customize -> add_section(
	'archive_template',
		array (
			'title'							=> __('Archive Template'),
			'description'				=> __('Archive Template Customizer Features'),
			'priority'					=> 80,
			'active_callback'		=> function() { return is_archive() && !is_tax();}
	)
);

/* ==== Archive Page Template Settings & Controls ==== */
// Archive Page Title
$wp_customize -> add_setting (
  'archive_page_textarea',
    array(
      'default'							=> __('Archive Page Text Area'),
      'type'								=> 'theme_mod',
      'sanitize_callback'		=> 'wp_kses_post',
      'transport'						=> 'postMessage',
  )
);

// Add control
$wp_customize -> add_control (
  new WP_Customize_Control (
    $wp_customize,
    'archive_page_textarea',
      array (
        'label'			=> __( 'Archive Page Text Area', 'the-fly-shop' ),
        'section'		=> 'archive_template',
        'settings'	=> 'archive_page_textarea',
        'type'			=> 'textarea',
        'priority' 	=> 10,
    )
  )
);

// Header Hero Image
$wp_customize -> add_setting(
	'archive_page_hero',
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
		'archive_page_hero',
			array(
				'label'								=> __('Archive Template Hero Image', 'the-fly-shop' ),
				'section'							=> 'archive_template',
				'settings'						=> 'archive_page_hero',
				'priority'						=> 10,
				'sanitize_callback'		=> 'themepatio_sanitize_image'
		)
	)
);

// Logo
$wp_customize -> add_setting(
	'archive_page_logo',
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
		'archive_page_logo',
			array(
				'label'								=> __('Archive Template Logo', 'the-fly-shop' ),
				'section'							=> 'archive_template',
				'settings'						=> 'archive_page_logo',
				'priority'						=> 10,
				'sanitize_callback'		=> 'themepatio_sanitize_image'
		)
	)
);

// Archive Page Title
$wp_customize -> add_setting (
  'archive_page_title',
    array(
      'default'							=> __('Archive Page Title'),
      'type'								=> 'theme_mod',
      'sanitize_callback'		=> 'sanitize_text_field',
      'transport'						=> 'refresh',
  )
);

// Add control
$wp_customize -> add_control (
  new WP_Customize_Control (
    $wp_customize,
    'archive_page_title',
      array (
        'label'			=> __( 'Archive Page Title', 'the-fly-shop' ),
        'section'		=> 'archive_template',
        'settings'	=> 'archive_page_title',
        'type'			=> 'text',
        'priority' 	=> 10,
    )
  )
);

// Archive page template background color
$wp_customize -> add_setting(
	'archive_page_bg',
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
		'archive_page_bg',
			array(
				'label'			=> __( '<div style="margin-top:1.618em;">' . 'Archive Page Template Background Color' . '</div>', 'the-fly-shop' ),
				'priority' 	=> 10,
				'section'		=> 'archive_template',
				'settings'	=> 'archive_page_bg'
		)
	)
);

// Archive container background color
$wp_customize -> add_setting(
	'archive_article',
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
		'archive_page_color',
			array(
				'label'			=> __( '<div style="margin-top:1.618em;">' . 'Archive Text Color' . '</div>', 'the-fly-shop' ),
				'priority' 	=> 10,
				'section'		=> 'archive_template',
				'settings'	=> 'archive_page_color'
		)
	)
);

// Archive entry container text color
$wp_customize -> add_setting(
	'archive_cont_color',
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
		'archive_cont_color',
			array(
				'label'			=> __( '<div style="margin-top:1.618em;">' . 'Archive Container Color' . '</div>', 'the-fly-shop' ),
				'priority' 	=> 10,
				'section'		=> 'archive_template',
				'settings'	=> 'archive_cont_color'
		)
	)
);

