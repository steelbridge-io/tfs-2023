<?php
/**
 * Holiday Template Customizer
 */
	
$wp_customize -> add_section(
	'holiday_section_cust',
	array (
		'title' 					=> __('Holiday Template'),
		'description'			=> __('Holiday Template Features'),
		'priority'				=> 80,
		'active_callback'	=> function() { return is_page_template('page-templates/holiday-template.php');}
	)
);

// Signature Text Color -> Add Setting
$wp_customize -> add_setting ( 'holiday_text_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

// Signature Text Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'holiday_text_color', array(
		'label'					=> __('Signature Text Color', 'the-fly-shop'),
		'priority'			=> 11,
		'section'				=> 'holiday_section_cust',
		'settings'			=> 'holiday_text_color',
		'description'		=> __('Text Color For Signature Images.'),
		)
	)
);

// Signature Link Color -> Add Setting
$wp_customize -> add_setting ( 'holiday_link_color', array(
		'default'						=> '#dd3333',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

// Signature Link Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'holiday_link_color', array(
		'label'					=> __('Signature Link Color', 'the-fly-shop'),
		'priority'			=> 11,
		'section'				=> 'holiday_section_cust',
		'settings'			=> 'holiday_link_color',
		'description'		=> __('Link Color For Signature Links.'),
		)
	)
);