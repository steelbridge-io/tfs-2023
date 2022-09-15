<?php
/**
 * Private Waters Template Customizer Settings/Features
 */
	
$wp_customize -> add_section(
	'fish_camp',
	array (
		'title' 						=> __('Fish Camp Template'),
		'description'							=> __('<h2>' . 'Custom options for the Fish Camp template.' . '</h2>'),
		'priority'					=> 80,
		'active_callback'		=> function() { return is_page_template('page-templates/fish-camp-template.php');}
	)
);

//	Spotlight:nth-child(1) Background Color -> Add Setting
$wp_customize -> add_setting ( 'fc_h2_title', array(
	'default'						=> '#f5f5f5',
	'type'							=> 'theme_mod',
	'sanitize_callback'	=> 'sanitize_hex_color',
	'transport'					=> 'postMessage'
	));

// Spotlight:nth-child(1) Background Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'fc_h2_title', array(
		'label'					=> __('Fish Camp title color', 'the-fly-shop' ),
		'priority'			=>  11,
		'section'				=> 'fish_camp',
		'description'		=> __(''),
		)
	)
);

//	Title border color
$wp_customize -> add_setting ( 'fc_titleborder_color', array(
	'default'						=> '#f5f5f5',
	'type'							=> 'theme_mod',
	'sanitize_callback'	=> 'sanitize_hex_color',
	'transport'					=> 'postMessage'
	));

// Title border color
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'fc_titleborder_color', array(
		'label'					=> __('Title borders color', 'the-fly-shop' ),
		'priority'			=>  11,
		'section'				=> 'fish_camp',
		'description'		=> __(''),
		)
	)
);

//	Spotlight:nth-child(1) Background Color -> Add Setting
$wp_customize -> add_setting ( 'fc_decription_color', array(
	'default'						=> '#f5f5f5',
	'type'							=> 'theme_mod',
	'sanitize_callback'	=> 'sanitize_hex_color',
	'transport'					=> 'postMessage'
	));

// Spotlight:nth-child(1) Background Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'fc_decription_color', array(
		'label'					=> __('Description color', 'the-fly-shop' ),
		'priority'			=>  11,
		'section'				=> 'fish_camp',
		'description'		=> __(''),
		)
	)
);

//	Spotlight:nth-child(1) Background Color -> Add Setting
$wp_customize -> add_setting ( 'fc_tel_color', array(
	'default'						=> '#f5f5f5',
	'type'							=> 'theme_mod',
	'sanitize_callback'	=> 'sanitize_hex_color',
	'transport'					=> 'postMessage'
	));

// Spotlight:nth-child(1) Background Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'fc_tel_color', array(
		'label'					=> __('Telephone &#35; color', 'the-fly-shop' ),
		'priority'			=>  11,
		'section'				=> 'fish_camp',
		'description'		=> __(''),
		)
	)
);

	
//	Spotlight:nth-child(1) Background Color -> Add Setting
$wp_customize -> add_setting ( 'fc_cost_bg_color', array(
	'default'						=> '#2b343d',
	'type'							=> 'theme_mod',
	'sanitize_callback'	=> 'sanitize_hex_color',
	'transport'					=> 'postMessage'
	));

// Spotlight:nth-child(1) Background Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'fc_cost_bg_color', array(
		'label'					=> __('Fish Camp costs background color', 'the-fly-shop' ),
		'priority'			=>  11,
		'section'				=> 'fish_camp',
		'description'		=> __(''),
		)
	)
);

// Spotlight:nth-child(1) Text Color -> Add Setting
$wp_customize -> add_setting ( 'fc_cost_text_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

// Spotlight:nth-child(1) Text Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'fc_cost_text_color', array(
		'label'					=> __('Fish Camp costs text color', 'the-fly-shop'),
		'priority'			=> 11,
		'section'				=> 'fish_camp',
		'description'		=> __(''),
		)
	)
);
	
// Spotlight:nth-child(1) Arrow Color -> Add Setting
$wp_customize -> add_setting ( 'fc_cost_arrow_color', array(
		'default'						=> '#7f7f7f',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

// Spotlight:nth-child(1) Arrow Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'fc_cost_arrow_color', array(
		'label'						=> __('Inclusions/Non-inclusions arrow color', 'the-fly-shop'),
		'priority'				=> 11,
		'section'					=> 'fish_camp',
		'description'			=> __(''),
		)
	)
);
	
// Spotlight:nth-child(1) Border Color -> Add Setting
$wp_customize -> add_setting ( 'fc_cost_border_color', array(
		'default'							=> '#ddd',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

// Spotlight:nth-child(1) Border Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'fc_cost_border_color', array(
		'label'						=> __('Drop-down border color', 'the-fly-shop'),
		'priority'				=> 11,
		'section'					=> 'fish_camp',
		'description'			=> __(''),
		)
	)
);
	
// Spotlight:nth-child(2) Background Color -> Add Setting	
$wp_customize -> add_setting ( 'fc_dates_bg_color', array(
		'default'							=> '#273038',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));
// Spotlight:nth-child(2) Background Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'fc_dates_bg_color', array(
		'label'						=> __('Dates background color', 'the-fly-shop'),
		'priority'				=> 12,
		'section'					=> 'fish_camp',
		'description'			=> __(''),
		)
	)
);

// Spotlight:nth-child(2) Text Color -> Add Setting
$wp_customize -> add_setting ( 'fc_dates_text_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

// Spotlight:nth-child(2) Text Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'fc_dates_text_color', array(
		'label'						=> __('Dates text color', 'the-fly-shop'),
		'priority'				=> 12,
		'section'					=> 'fish_camp',
		'description'			=> __(''),
		)
	)
);

// Dates arrow color
$wp_customize -> add_setting ( 'fc_dates_arrow_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'fc_dates_arrow_color', array(
		'label'						=> __('Dates arrow color', 'the-fly-shop'),
		'priority'				=> 12,
		'section'					=> 'fish_camp',
		'description'			=> __(''),
		)
	)
);

// Dates border color
$wp_customize -> add_setting ( 'fc_dates_border_color', array(
		'default'							=> '#ddd',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'fc_dates_border_color', array(
		'label'						=> __('Dates border color', 'the-fly-shop'),
		'priority'				=> 12,
		'section'					=> 'fish_camp',
		'description'			=> __(''),
		)
	)
);

// Lodging background color
$wp_customize -> add_setting ( 'fc_lodging_bg_color', array(
		'default'						=> '#2a333c',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'fc_lodging_bg_color', array(
		'label'						=> __('Lodging background color', 'the-fly-shop'),
		'priority'				=> 13,
		'section'					=> 'fish_camp',
		'description'			=> __(''),
		)
	)
);

// Spotlight:nth-child(3) Text Color -> Add Setting
$wp_customize -> add_setting ( 'fc_lodging_text_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));
// Spotlight:nth-child(3) Text Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'fc_lodging_text_color', array(
		'label'						=> __('Lodging text color', 'the-fly-shop'),
		'priority'				=> 13,
		'section'					=> 'fish_camp',
		'description'			=> __(''),
		)
	)
);
// Lodging arrow color
$wp_customize -> add_setting ( 'fc_lodging_arrow_color', array(
		'default'							=> '#7f7f7f',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'fc_lodging_arrow_color', array(
		'label'						=> __('Lodging arrow color', 'the-fly-shop'),
		'priority'				=> 13,
		'section'					=> 'fish_camp',
		'description'			=> __(''),
		)
	)
);	

// Lodging border color
$wp_customize -> add_setting ( 'fc_lodging_border_color', array(
		'default'							=> '#ddd',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'fc_lodging_border_color', array(
		'label'						=> __('Lodging border color', 'the-fly-shop'),
		'priority'				=> 13,
		'section'					=> 'fish_camp',
		'description'			=> __(''),
		)
	)
);

// Getting there background color
$wp_customize -> add_setting ( 'fc_getting_bg_color', array(
		'default'							=> '#20272e',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'fc_getting_bg_color', array(
		'label'						=> __('Getting There background color', 'the-fly-shop'),
		'priority'				=> 14,
		'section'					=> 'fish_camp',
		'description'			=> __(''),
		)
	)
);

// Getting there text color
$wp_customize -> add_setting ( 'fc_getting_text_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'fc_getting_text_color', array(
		'label'							=> __('Getting There text color', 'the-fly-shop'),
		'priority'					=> 14,
		'section'						=> 'fish_camp',
		'description'				=> __(''),
		)
	)
);

// Getting there arrow color
$wp_customize -> add_setting ( 'fc_getting_arrow_color', array(
		'default'							=> '#7f7f7f',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'fc_getting_arrow_color', array(
		'label'						=> __('Getting There arrow color', 'the-fly-shop'),
		'priority'				=> 14,
		'section'					=> 'fish_camp',
		'description'			=> __(''),
		)
	)
);

// Spotlight:nth-child(3) Border Color -> Add Setting
$wp_customize -> add_setting ( 'fc_getting_border_color', array(
		'default'							=> '#ddd',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));
// Spotlight:nth-child(3) Border Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'fc_getting_border_color', array(
		'label'						=> __('Getting There border color', 'the-fly-shop'),
		'priority'				=> 14,
		'section'					=> 'fish_camp',
		'description'			=> __(''),
		)
	)
);

// Spotlight:nth-child(5) Background Color -> Add Setting	
$wp_customize -> add_setting ( 'fc_itinerary_bg_color', array(
		'default'							=> '#2a333c',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));
// Spotlight:nth-child(5) Background Color -> Add Control		
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'fc_itinerary_bg_color', array(
		'label'						=> __('Itinerary background color', 'the-fly-shop'),
		'priority'				=> 14,
		'section'					=> 'fish_camp',
		'description'			=> __(''),
		)
	)
);

// Spotlight:nth-child(3) Border Color -> Add Setting
$wp_customize -> add_setting ( 'fc_itinerary_text_color', array(
		'default'							=> '#ddd',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));
// Spotlight:nth-child(3) Border Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'fc_itinerary_text_color', array(
		'label'						=> __('Itinerary text color', 'the-fly-shop'),
		'priority'				=> 14,
		'section'					=> 'fish_camp',
		'description'			=> __(''),
		)
	)
);	

// Spotlight:nth-child(4) Arrow Color -> Add Setting
$wp_customize -> add_setting ( 'fc_itinerary_arrow_color', array(
		'default'							=> '#7f7f7f',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

// Spotlight:nth-child(4) Arrow Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'fc_itinerary_arrow_color', array(
		'label'						=> __('Itinerary arrow color', 'the-fly-shop'),
		'priority'				=> 14,
		'section'					=> 'fish_camp',
		'description'			=> __(''),
		)
	)
);

// Spotlight:nth-child(4) Border Color -> Add Setting
$wp_customize -> add_setting ( 'fc_intinerary_border_color', array(
		'default'							=> '#ddd',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

// Spotlight:nth-child(4) Border Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'fc_intinerary_border_color', array(
		'label'						=> __('Itinerary border color', 'the-fly-shop'),
		'priority'				=> 14,
		'section'					=> 'fish_camp',
		'description'			=> __(''),
		)
	)
);