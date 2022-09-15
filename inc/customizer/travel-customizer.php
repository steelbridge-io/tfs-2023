<?php
/**
 * Travel Template Customizer
 */

/* ==================== TRAVEL ==================== */

$wp_customize -> add_section(
	'travel_section_cust',
	array (
		'title' 		=> __('Travel Template'),
		'description'	=> __('Custom Options For Travel Template.'),
		'priority'		=> 80,
		'active_callback'		=> function() { return is_page_template('page-templates/travel-template.php');}
	)
);

//	Creates color picker for set the hook background color
	$wp_customize -> add_setting ( 'sth_bg_color', array(
		'default'							=> '#f0cf4d',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage',
	
		));
	
	// Add control for set the hook background control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control (
			$wp_customize,
			'sth_bg_color', array(
			'label'			=> __('Set The Hook Background Color', 'the-fly-shop' ),
			'priority' 	=> 16,
			'section'		=> 'travel_section_cust',
			'settings'	=> 'sth_bg_color',
			)
		)
	);

	// Set the hook text color
	$wp_customize -> add_setting ( 'sth_text_color', array(
			'default'						=> '#2E3842',
			'type'							=> 'theme_mod',
			'sanitize_callback'	=> 'sanitize_hex_color',
			'transport'					=> 'postMessage'
	));

	// Set the hook text color control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'sth_text_color', array(
			'label'					=> __('Set The Hook Text Color', 'the-fly-shop'),
			'priority'			=> 11,
			'section'				=> 'travel_section_cust',
			'settings'			=> 'sth_text_color',
			'description'		=> __('Text Color For Set The Hook Section.'),
			)
		)
	);
  
  // Travel template text color
  $wp_customize -> add_setting ( 'travel_text_color', array(
    'default'           => '#f5f5f5',
    'type'              => 'theme_mod',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport'         => 'postMessage'
  ));
  
  // Travel temaplate text color
  $wp_customize -> add_control (
    new WP_Customize_Color_Control(
      $wp_customize,
      'travel_text_color', array(
      'label'     => __('Travel Template Text Color', 'the-fly-shop'),
      'priority'  => 11,
      'section'   => 'travel_section_cust',
      'settings'  => 'travel_text_color',
      'transport' => 'postMessage'
      )
    )
  );
  
  // Font Awesome arrow colors
  $wp_customize -> add_setting ( 'travel_fa_arrows', array(
    'default'           => '#BDBDBD',
    'type'              => 'theme_mod',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport'         => 'postMessage'
  ));
  
  $wp_customize -> add_control (
    new WP_Customize_Color_Control(
      $wp_customize,
      'travel_fa_arrows', array(
        'label'     => __('Dropdown arrow color', 'the-fly-shop'),
        'priority'  => 11,
        'section'   => 'travel_section_cust',
        'transport' => 'postMessage'
      )
    )
  );