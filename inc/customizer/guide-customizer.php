<?php
/*
 * Guide Template Customizer Features
 */

/**
*
* Guide Service Template Customizations
* Spotlight Call Back - The seetings and contols below are associated with the Guide Service Template 
*
*/
	$wp_customize -> add_section(
			'guideservice_section',
			array (
				'title'							=> __('Guide Service Template'),
				'description'				=> __('Guide Service Features'),
				'priority'					=> 80,
				'active_callback'		=> function() { return is_page_template('page-templates/guide-service-template.php');}
		)
	);
	
//	Spotlight:nth-child(1) Background Color -> Add Setting
$wp_customize -> add_setting ( 'gs_1_bg_color', array(
	'default'						=> '#2b343d',
	'type'							=> 'theme_mod',
	'sanitize_callback'	=> 'sanitize_hex_color',
	'transport'					=> 'postMessage'
	));

// Spotlight:nth-child(1) Background Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'gs_1_bg_color', array(
		'label'					=> __('Reservations &amp; Rates background color', 'the-fly-shop' ),
		'priority'			=>  11,
		'section'				=> 'guideservice_section',
		)
	)
);

// Spotlight:nth-child(1) Text Color -> Add Setting
$wp_customize -> add_setting ( 'gs_1_text_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

// Spotlight:nth-child(1) Text Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'gs_1_text_color', array(
		'label'					=> __('Reservations &amp; Rates text color', 'the-fly-shop'),
		'priority'			=> 11,
		'section'				=> 'guideservice_section',
		)
	)
);
	
// Spotlight:nth-child(1) Arrow Color -> Add Setting
$wp_customize -> add_setting ( 'gs_1_arrow_color', array(
		'default'						=> '#7f7f7f',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

// Spotlight:nth-child(1) Arrow Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'gs_1_arrow_color', array(
		'label'						=> __('Reservations &amp; Rates arrow color', 'the-fly-shop'),
		'priority'				=> 11,
		'section'					=> 'guideservice_section'
		)
	)
);
	
// Spotlight:nth-child(1) Border Color -> Add Setting
$wp_customize -> add_setting ( 'gs_1_border_color', array(
		'default'							=> '#ddd',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

// Spotlight:nth-child(1) Border Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'gs_1_border_color', array(
		'label'						=> __('Reservations &amp; Rates border color', 'the-fly-shop'),
		'priority'				=> 11,
		'section'					=> 'guideservice_section'
		)
	)
);
	
// Spotlight:nth-child(2) Background Color -> Add Setting	
$wp_customize -> add_setting ( 'gs_2_bg_color', array(
		'default'							=> '#273038',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));
// Spotlight:nth-child(2) Background Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'gs_2_bg_color', array(
		'label'						=> __('Seasons background color', 'the-fly-shop'),
		'priority'				=> 12,
		'section'					=> 'guideservice_section'
		)
	)
);

// Spotlight:nth-child(2) Text Color -> Add Setting
$wp_customize -> add_setting ( 'gs_2_text_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

// Spotlight:nth-child(2) Text Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'gs_2_text_color', array(
		'label'						=> __('Seasons text color', 'the-fly-shop'),
		'priority'				=> 12,
		'section'					=> 'guideservice_section'
		)
	)
);	
	
// Spotlight:nth-child(2) Arrow Color -> Add Setting
$wp_customize -> add_setting ( 'gs_2_arrow_color', array(
		'default'							=> '#7f7f7f',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

// Spotlight:nth-child(2) Arrow Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'gs_2_arrow_color', array(
		'label'						=> __('Seasons arrow color', 'the-fly-shop'),
		'priority'				=> 12,
		'section'					=> 'guideservice_section'
		)
	)
);
	
// Spotlight:nth-child(2) Border Color -> Add Setting
$wp_customize -> add_setting ( 'gs_2_border_color', array(
		'default'							=> '#ddd',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

// Spotlight:nth-child(2) Border Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'gs_2_border_color', array(
		'label'						=> __('Seasons border color', 'the-fly-shop'),
		'priority'				=> 12,
		'section'					=> 'guideservice_section'
		)
	)
);	
// Spotlight:nth-child(3) Background Color -> Add Setting	
$wp_customize -> add_setting ( 'gs_3_bg_color', array(
		'default'						=> '#2a333c',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));
// Spotlight:nth-child(3) Background Color -> Add Setting		
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'gs_3_bg_color', array(
		'label'						=> __('Fishing background color', 'the-fly-shop'),
		'priority'				=> 13,
		'section'					=> 'guideservice_section'
		)
	)
);
// Spotlight:nth-child(3) Text Color -> Add Setting
$wp_customize -> add_setting ( 'gs_3_text_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));
// Spotlight:nth-child(3) Text Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'gs_3_text_color', array(
		'label'						=> __('Fishing text color', 'the-fly-shop'),
		'priority'				=> 13,
		'section'					=> 'guideservice_section'
		)
	)
);
// Spotlight:nth-child(3) Arrow Color -> Add Setting
$wp_customize -> add_setting ( 'gs_3_arrow_color', array(
		'default'							=> '#7f7f7f',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));
// Spotlight:nth-child(3) Arrow Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'gs_3_arrow_color', array(
		'label'						=> __('Fishing arrow color', 'the-fly-shop'),
		'priority'				=> 13,
		'section'					=> 'guideservice_section'
		)
	)
);	
// Spotlight:nth-child(3) Border Color -> Add Setting
$wp_customize -> add_setting ( 'gs_3_border_color', array(
		'default'							=> '#ddd',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));
// Spotlight:nth-child(3) Border Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'gs_3_border_color', array(
		'label'						=> __('Fishing border color', 'the-fly-shop'),
		'priority'				=> 13,
		'section'					=> 'guideservice_section'
		)
	)
);	
// Spotlight:nth-child(4) Background Color -> Add Setting	
$wp_customize -> add_setting ( 'gs_4_bg_color', array(
		'default'							=> '#20272e',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));
// Spotlight:nth-child(4) Background Color -> Add Control		
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'gs_4_bg_color', array(
		'label'						=> __('Lodging background color', 'the-fly-shop'),
		'priority'				=> 14,
		'section'					=> 'guideservice_section'
		)
	)
);
	
// Spotlight:nth-child(4) Text Color -> Add Setting
$wp_customize -> add_setting ( 'gs_4_text_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

// Spotlight:nth-child(4) Text Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'gs_4_text_color', array(
		'label'							=> __('Lodging text color', 'the-fly-shop'),
		'priority'					=> 14,
		'section'						=> 'guideservice_section'
		)
	)
);
	
// Spotlight:nth-child(4) Arrow Color -> Add Setting
$wp_customize -> add_setting ( 'gs_4_arrow_color', array(
		'default'							=> '#7f7f7f',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

// Spotlight:nth-child(4) Arrow Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'gs_4_arrow_color', array(
		'label'						=> __('Lodging arrow color', 'the-fly-shop'),
		'priority'				=> 14,
		'section'					=> 'guideservice_section'
		)
	)
);
	
// Spotlight:nth-child(4) Border Color -> Add Setting
$wp_customize -> add_setting ( 'gs_4_border_color', array(
		'default'							=> '#ddd',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

// Spotlight:nth-child(4) Border Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'gs_4_border_color', array(
		'label'						=> __('Lodging border color', 'the-fly-shop'),
		'priority'				=> 14,
		'section'					=> 'guideservice_section'
		)
	)
);	
	// Spotlight:nth-child(5) Background Color -> Add Setting	
$wp_customize -> add_setting ( 'gs_5_bg_color', array(
		'default'							=> '#2a333c',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));
// Spotlight:nth-child(5) Background Color -> Add Control		
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'gs_5_bg_color', array(
		'label'						=> __('Getting To background color', 'the-fly-shop'),
		'priority'				=> 15,
		'section'					=> 'guideservice_section'
		)
	)
);
	
// Spotlight:nth-child(5) Text Color -> Add Setting
$wp_customize -> add_setting ( 'gs_5_text_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

// Spotlight:nth-child(5) Text Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'gs_5_text_color', array(
		'label'							=> __('Getting To text color', 'the-fly-shop'),
		'priority'					=> 15,
		'section'						=> 'guideservice_section'
		)
	)
);
	
// Spotlight:nth-child(5) Arrow Color -> Add Setting
$wp_customize -> add_setting ( 'gs_5_arrow_color', array(
		'default'							=> '#7f7f7f',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

// Spotlight:nth-child(5) Arrow Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'gs_5_arrow_color', array(
		'label'						=> __('Getting To arrow color', 'the-fly-shop'),
		'priority'				=> 15,
		'section'					=> 'guideservice_section'
		)
	)
);
	
// Spotlight:nth-child(5) Border Color -> Add Setting
$wp_customize -> add_setting ( 'gs_5_border_color', array(
		'default'							=> '#ddd',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

// Spotlight:nth-child(5) Border Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'gs_5_border_color', array(
		'label'						=> __('Getting To border color', 'the-fly-shop'),
		'priority'				=> 15,
		'section'					=> 'guideservice_section'
		)
	)
);	