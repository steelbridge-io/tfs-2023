<?php
/**
 * Staff Template Customizer
 */
	
$wp_customize -> add_section(
	'staff_section_cust',
	array (
		'title' 					=> __('Staff Template'),
		'description'			=> __('Staff Template Features'),
		'priority'				=> 80,
		'active_callback'	=> function() { return is_page_template('page-templates/staff-template.php');}
	)
);
	
//	Creates color picker for staff rows - staff template
	$wp_customize -> add_setting ( 'staff_bg_color', array(
		'default'							=> '#2b343d',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage',
	
		));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control (
			$wp_customize,
			'staff_bg_color', array(
			'label'			=> __('Staff Background Color', 'the-fly-shop' ),
			'priority' 	=> 16,
			'section'		=> 'staff_section_cust',
			'settings'	=> 'staff_bg_color',
			)
		)
	);

// Staff Text Color -> Add Setting
$wp_customize -> add_setting ( 'staff_text_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

// Staff Text Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'staff_text_color', array(
		'label'					=> __('Staff Text Color', 'the-fly-shop'),
		'priority'			=> 11,
		'section'				=> 'staff_section_cust',
		'settings'			=> 'staff_text_color',
		'description'		=> __('Text Color For Staff Images.'),
		)
	)
);

// Staff Link Color -> Add Setting
$wp_customize -> add_setting ( 'staff_link_color', array(
		'default'						=> '#337ab7',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

// Staff Text Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'staff_link_color', array(
		'label'					=> __('Staff Link Color', 'the-fly-shop'),
		'priority'			=> 11,
		'section'				=> 'staff_section_cust',
		'settings'			=> 'staff_link_color',
		'description'		=> __('Link Color For Staff Content.'),
		)
	)
);