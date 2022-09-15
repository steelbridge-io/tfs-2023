<?php
/**
 * Private Waters Template Customizer Settings/Features
 */
	
$wp_customize -> add_section(
	'schools',
	array (
		'title' 						=> __('Schools Template'),
		'description'				=> __('<h2>' . 'Custom options for the schools template.' . '</h2>'),
		'priority'					=> 80,
		'active_callback'		=> function() { return is_page_template('page-templates/schools-template.php');}
	)
);

// Page title
$wp_customize -> add_setting ( 'sch_title_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'sch_title_color', array(
		'label'					=> __('Title color', 'the-fly-shop'),
		'priority'			=> 11,
		'section'				=> 'schools',
		'description'		=> __(''),
		)
	)
);

//	Title borders
$wp_customize -> add_setting ( 'sch_titleborder_color', array(
	'default'						=> '#f5f5f5',
	'type'							=> 'theme_mod',
	'sanitize_callback'	=> 'sanitize_hex_color',
	'transport'					=> 'postMessage'
	));

$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'sch_titleborder_color', array(
		'label'					=> __('Title border color', 'the-fly-shop' ),
		'priority'			=>  11,
		'section'				=> 'schools',
		'description'		=> __(''),
		)
	)
);

//	Description text color
$wp_customize -> add_setting ( 'sch_description_color', array(
	'default'						=> '#f5f5f5',
	'type'							=> 'theme_mod',
	'sanitize_callback'	=> 'sanitize_hex_color',
	'transport'					=> 'postMessage'
	));

$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'sch_description_color', array(
		'label'					=> __('Description color', 'the-fly-shop' ),
		'priority'			=>  11,
		'section'				=> 'schools',
		'description'		=> __(''),
		)
	)
);

//	Description text color
$wp_customize -> add_setting ( 'sch_schoolstel_color', array(
	'default'						=> '#f5f5f5',
	'type'							=> 'theme_mod',
	'sanitize_callback'	=> 'sanitize_hex_color',
	'transport'					=> 'postMessage'
	));
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'sch_schoolstel_color', array(
		'label'					=> __('Telephone &#35; color', 'the-fly-shop' ),
		'priority'			=>  11,
		'section'				=> 'schools',
		'description'		=> __(''),
		)
	)
);
			
//	Costs background color
$wp_customize -> add_setting ( 'sch_1_bg_color', array(
	'default'						=> '#2b343d',
	'type'							=> 'theme_mod',
	'sanitize_callback'	=> 'sanitize_hex_color',
	'transport'					=> 'postMessage'
	));

$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'sch_1_bg_color', array(
		'label'					=> __('Costs background color', 'the-fly-shop' ),
		'priority'			=>  11,
		'section'				=> 'schools',
		'description'		=> __(''),
		)
	)
);

// Costs text color
$wp_customize -> add_setting ( 'sch_1_text_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'sch_1_text_color', array(
		'label'					=> __('Costs text color', 'the-fly-shop'),
		'priority'			=> 11,
		'section'				=> 'schools',
		'description'		=> __(''),
		)
	)
);
	
// Costs arrow color
$wp_customize -> add_setting ( 'sch_1_arrow_color', array(
		'default'						=> '#7f7f7f',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'sch_1_arrow_color', array(
		'label'						=> __('Costs arrow color', 'the-fly-shop'),
		'priority'				=> 11,
		'section'					=> 'schools',
		'description'			=> __(''),
		)
	)
);
	
// Costs border
$wp_customize -> add_setting ( 'sch_1_border_color', array(
		'default'							=> '#ddd',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'sch_1_border_color', array(
		'label'						=> __('Costs border color', 'the-fly-shop'),
		'priority'				=> 11,
		'section'					=> 'schools',
		'description'			=> __(''),
		)
	)
);
	
// Dates background color
$wp_customize -> add_setting ( 'sch_2_bg_color', array(
		'default'							=> '#273038',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'sch_2_bg_color', array(
		'label'						=> __('Dates background color', 'the-fly-shop'),
		'priority'				=> 12,
		'section'					=> 'schools',
		'description'			=> __(''),
		)
	)
);

// Dates text color
$wp_customize -> add_setting ( 'sch_2_text_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

// Spotlight:nth-child(2) Text Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'sch_2_text_color', array(
		'label'						=> __('Dates text color', 'the-fly-shop'),
		'priority'				=> 12,
		'section'					=> 'schools',
		'description'			=> __(''),
		)
	)
);	
	
// Lodging background color
$wp_customize -> add_setting ( 'sch_3_bg_color', array(
		'default'						=> '#2a333c',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));
	
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'sch_3_bg_color', array(
		'label'						=> __('Lodging background color', 'the-fly-shop'),
		'priority'				=> 13,
		'section'					=> 'schools',
		'description'			=> __(''),
		)
	)
);

// Lodging text color
$wp_customize -> add_setting ( 'sch_3_text_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'sch_3_text_color', array(
		'label'						=> __('Lodging text color', 'the-fly-shop'),
		'priority'				=> 13,
		'section'					=> 'schools',
		'description'			=> __(''),
		)
	)
);

// Lodging arrow color
$wp_customize -> add_setting ( 'sch_3_arrow_color', array(
		'default'							=> '#7f7f7f',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'sch_3_arrow_color', array(
		'label'						=> __('Lodging arrow color', 'the-fly-shop'),
		'priority'				=> 13,
		'section'					=> 'schools',
		'description'			=> __(''),
		)
	)
);	
// Lodging border color
$wp_customize -> add_setting ( 'sch_3_border_color', array(
		'default'							=> '#ddd',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'sch_3_border_color', array(
		'label'						=> __('Lodging border color', 'the-fly-shop'),
		'priority'				=> 13,
		'section'					=> 'schools',
		'description'			=> __(''),
		)
	)
);	

// Getting there background color
$wp_customize -> add_setting ( 'sch_4_bg_color', array(
		'default'							=> '#20272e',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'sch_4_bg_color', array(
		'label'						=> __('Getting There background color', 'the-fly-shop'),
		'priority'				=> 14,
		'section'					=> 'schools',
		'description'			=> __(''),
		)
	)
);
	
// Getting There text color
$wp_customize -> add_setting ( 'sch_4_text_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'sch_4_text_color', array(
		'label'							=> __('Getting There text color', 'the-fly-shop'),
		'priority'					=> 14,
		'section'						=> 'schools',
		'description'				=> __(''),
		)
	)
);
	
// Getting there arrow color
$wp_customize -> add_setting ( 'sch_4_arrow_color', array(
		'default'							=> '#7f7f7f',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));


$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'sch_4_arrow_color', array(
		'label'						=> __('Getting there arrow color', 'the-fly-shop'),
		'priority'				=> 14,
		'section'					=> 'schools',
		'description'			=> __(''),
		)
	)
);
	
// Getting There border color
$wp_customize -> add_setting ( 'sch_4_border_color', array(
		'default'							=> '#ddd',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));


$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'sch_4_border_color', array(
		'label'						=> __('Getting There border color', 'the-fly-shop'),
		'priority'				=> 14,
		'section'					=> 'schools',
		'description'			=> __(''),
		)
	)
);	

// Itinerary background color
$wp_customize -> add_setting ( 'sch_5_bg_color', array(
		'default'							=> '#2a333c',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'sch_5_bg_color', array(
		'label'						=> __('Itinerary background color', 'the-fly-shop'),
		'priority'				=> 14,
		'section'					=> 'schools',
		'description'			=> __(''),
		)
	)
);
	
// Itinerary text color
$wp_customize -> add_setting ( 'sch_5_text_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'sch_5_text_color', array(
		'label'							=> __('Itinerary text color', 'the-fly-shop'),
		'priority'					=> 14,
		'section'						=> 'schools',
		'description'				=> __(''),
		)
	)
);
	
// Itinerary arrow color
$wp_customize -> add_setting ( 'sch_5_arrow_color', array(
		'default'							=> '#7f7f7f',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));


$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'sch_5_arrow_color', array(
		'label'						=> __('Itinerary arrow color', 'the-fly-shop'),
		'priority'				=> 14,
		'section'					=> 'schools',
		'description'			=> __(''),
		)
	)
);
	
// Itinerary border color
$wp_customize -> add_setting ( 'sch_5_border_color', array(
		'default'							=> '#ddd',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));


$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'sch_5_border_color', array(
		'label'						=> __('Itinerary border color', 'the-fly-shop'),
		'priority'				=> 14,
		'section'					=> 'schools',
		'description'			=> __(''),
		)
	)
);	
