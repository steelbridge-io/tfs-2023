<?php
/**
 * Signature Events Destinations Template Customizer
 */
	
$wp_customize -> add_section(
	'signature_events_section_cust',
	array (
		'title' 					=> __('Signature Events Template'),
		'description'			=> __('Signature Events Template Features'),
		'priority'				=> 80,
		'active_callback'	=> function() { return is_page_template('page-templates/signature-events-template.php');}
	)
);
	
//	Creates color picker for signature rows - signature template
	$wp_customize -> add_setting ( 'signature_events_bg_color', array(
		'default'							=> '#2b343d',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage',
	
		));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control (
			$wp_customize,
			'signature_events_bg_color', array(
			'label'			=> __('Signature Events Background Color', 'the-fly-shop' ),
			'priority' 	=> 16,
			'section'		=> 'signature_events_section_cust',
			'settings'	=> 'signature_events_bg_color',
			)
		)
	);

// Signature Events Text Color -> Add Setting
$wp_customize -> add_setting ( 'signature_events_text_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

// Signature Events Text Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'signature_events_text_color', array(
		'label'					=> __('Signature Events Text Color', 'the-fly-shop'),
		'priority'			=> 11,
		'section'				=> 'signature_events_section_cust',
		'settings'			=> 'signature_events_text_color',
		'description'		=> __('Text Color For Signature Events Images.'),
		)
	)
);

// Signature Events Link Color -> Add Setting
$wp_customize -> add_setting ( 'signature_events_link_color', array(
		'default'						=> '#dd3333',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

// Signature Events Link Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'signature_events_link_color', array(
		'label'					=> __('Signature Events Link Color', 'the-fly-shop'),
		'priority'			=> 11,
		'section'				=> 'signature_events_section_cust',
		'settings'			=> 'signature_events_link_color',
		'description'		=> __('Link Color For Signature Events Links.'),
		)
	)
);