<?php
/**
 * Signature Destinations Template Customizer
 */
	
$wp_customize -> add_section(
	'signature_section_cust',
	array (
		'title' 					=> __('Signature Template'),
		'description'			=> __('Signature Template Features'),
		'priority'				=> 80,
		'active_callback'	=> function() { return is_page_template('page-templates/signature-template.php') || is_page_template('page-templates/signature-template-blog.php'); }
	)
);

//	Creates color picker for signature rows - signature template
	$wp_customize -> add_setting ( 'signature_bg_color', array(
		'default'							=> '#2b343d',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage',
	
		));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control (
			$wp_customize,
			'signature_bg_color', array(
			'label'			=> __('Signature Background Color', 'the-fly-shop' ),
			'priority' 	=> 16,
			'section'		=> 'signature_section_cust',
			'settings'	=> 'signature_bg_color',
			)
		)
	);

// Signature Text Color -> Add Setting
$wp_customize -> add_setting ( 'signature_text_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

// Signature Text Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'signature_text_color', array(
		'label'					=> __('Signature Text Color', 'the-fly-shop'),
		'priority'			=> 11,
		'section'				=> 'signature_section_cust',
		'settings'			=> 'signature_text_color',
		'description'		=> __('Text Color For Signature Images.'),
		)
	)
);

// Signature Link Color -> Add Setting
$wp_customize -> add_setting ( 'signature_link_color', array(
		'default'						=> '#dd3333',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

// Signature Link Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'signature_link_color', array(
		'label'					=> __('Signature Link Color', 'the-fly-shop'),
		'priority'			=> 11,
		'section'				=> 'signature_section_cust',
		'settings'			=> 'signature_link_color',
		'description'		=> __('Link Color For Signature Links.'),
		)
	)
);
