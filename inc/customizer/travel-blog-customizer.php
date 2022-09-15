<?php
/**
 * Travel Blog Template Customizer
 */
	
$wp_customize -> add_section(
	'travelblog_section_cust',
	array (
		'title' 					=> __('Travel Blog Template'),
		'description'			=> __('Travel Blog Template Features'),
		'priority'				=> 80,
		'active_callback'	=> function() { return is_page_template('page-templates/travel-template-blog.php'); }
	)
);

//	Creates color picker for travel blog rows - travel blog template
	$wp_customize -> add_setting ( 'travelblog_bg_color', array(
		'default'							=> '#2b343d',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'refresh',
	
		));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control (
			$wp_customize,
			'travelblog_bg_color', array(
			'label'			=> __('Travel Blog Background Color', 'the-fly-shop' ),
			'priority' 	=> 16,
			'section'		=> 'travelblog_section_cust',
			'settings'	=> 'travelblog_bg_color',
			)
		)
	);
	
//	Creates color picker for travel blog background color news - travel blog template
$wp_customize -> add_setting ( 'travelnews_bg_color', array(
  'default'							=> '#2b343d',
  'type'								=> 'theme_mod',
  'sanitize_callback'		=> 'sanitize_hex_color',
  'transport'						=> 'refresh',

));

// Add control
$wp_customize -> add_control (
  new WP_Customize_Color_Control (
    $wp_customize,
    'travelnews_bg_color', array(
      'label'			=> __('Travel Blog News Background Color', 'the-fly-shop' ),
      'priority' 	=> 16,
      'section'		=> 'travelblog_section_cust',
      'settings'	=> 'travelnews_bg_color',
    )
  )
);

// STravel Blog Text Color -> Add Setting
$wp_customize -> add_setting ( 'travelblog_text_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'refresh'
));

// Travel Blog Text Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'travelblog_text_color', array(
		'label'					=> __('Travel Blog Text Color', 'the-fly-shop'),
		'priority'			=> 11,
		'section'				=> 'travelblog_section_cust',
		'settings'			=> 'travelblog_text_color',
		'description'		=> __('Text Color For Travel Blog Images.'),
		)
	)
);

// Travel Blog Link Color -> Add Setting
$wp_customize -> add_setting ( 'travelblog_link_color', array(
		'default'						=> '#dd3333',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'refresh'
));

// Travel Blog Link Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'travelblog_link_color', array(
		'label'					=> __('Travel Blog Link Color', 'the-fly-shop'),
		'priority'			=> 11,
		'section'				=> 'travelblog_section_cust',
		'settings'			=> 'travelblog_link_color',
		'description'		=> __('Link Color For Travel Blog Links.'),
		)
	)
);

// Creates telephone number field in Site Identity
$wp_customize -> add_setting ( 'travelblog_title', array(
  'default'							=> 'Blog News Title',
  'type'								=> 'theme_mod',
  'sanitize_callback'		=> 'sanitize_text_field',
  'transport'						=> 'postMessage',
));
// Add control
$wp_customize -> add_control (
  new WP_Customize_Control (
    $wp_customize,
    'travelblog_title', array (
      'label'		=> __( 'Blog News Title', 'the-fly-shop' ),
      'priority'=>  16,
      'section'	=> 'travelblog_section_cust',
      'settings'=> 'travelblog_title',
      'type'		=> 'text',
    )
  )
);

// Travel Blog Title
$wp_customize->selective_refresh->add_partial('travelblog_title', array(
    'selector' 				=> '#travel-blog h2.travelBlogtitle',
    'settings' 				=> 'travelblog_title',
    'render_callback' => wp_get_attachment_image(get_theme_mod('travelblog_title'), '')
  )
);


