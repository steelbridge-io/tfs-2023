<?php
/**
 * Private Waters Template Customizer Settings/Features
 */
	
$wp_customize -> add_section(
	'private_waters',
	array (
		'title' 						=> __('Private Template'),
		'description'				=> __('Custom options for the private waters template.'),
		'priority'					=> 80,
		'active_callback'		=> function() { return is_page_template('page-templates/private-template.php');}
	)
);
			
//	Spotlight:nth-child(1) Background Color -> Add Setting
$wp_customize -> add_setting ( 'spotlight_1_bg_color', array(
	'default'						=> '#2b343d',
	'type'							=> 'theme_mod',
	'sanitize_callback'	=> 'sanitize_hex_color',
	'transport'					=> 'postMessage'
	));

// Spotlight:nth-child(1) Background Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'spotlight_1_bg_color', array(
		'label'					=> __('Spotlight 1 Background Color', 'the-fly-shop' ),
		'priority'			=>  11,
		'section'				=> 'private_waters',
		'description'		=> __('For the Private Waters Template.'),
		)
	)
);

// Spotlight:nth-child(1) Text Color -> Add Setting
$wp_customize -> add_setting ( 'spotlight_1_text_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

// Spotlight:nth-child(1) Text Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'spotlight_1_text_color', array(
		'label'					=> __('Spotlight 1 Text Color', 'the-fly-shop'),
		'priority'			=> 11,
		'section'				=> 'private_waters',
		'description'		=> __('Text Color For Spotlight 1.'),
		)
	)
);
	
// Spotlight:nth-child(1) Arrow Color -> Add Setting
$wp_customize -> add_setting ( 'spotlight_1_arrow_color', array(
		'default'						=> '#7f7f7f',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

// Spotlight:nth-child(1) Arrow Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'spotlight_1_arrow_color', array(
		'label'						=> __('Spotlight 1 Arrow Color', 'the-fly-shop'),
		'priority'				=> 11,
		'section'					=> 'private_waters',
		'description'			=> __('Arrow Color For Spotlight 1.'),
		)
	)
);
	
// Spotlight:nth-child(1) Border Color -> Add Setting
$wp_customize -> add_setting ( 'spotlight_1_border_color', array(
		'default'							=> '#ddd',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

// Spotlight:nth-child(1) Border Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'spotlight_1_border_color', array(
		'label'						=> __('Spotlight 1 Border Color', 'the-fly-shop'),
		'priority'				=> 11,
		'section'					=> 'private_waters',
		'description'			=> __('Border Color For Spotlight 1.'),
		)
	)
);
	
// Spotlight:nth-child(2) Background Color -> Add Setting	
$wp_customize -> add_setting ( 'spotlight_2_bg_color', array(
		'default'							=> '#273038',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));
// Spotlight:nth-child(2) Background Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'spotlight_2_bg_color', array(
		'label'						=> __('Spotlight 2 Background Color', 'the-fly-shop'),
		'priority'				=> 12,
		'section'					=> 'private_waters',
		'description'			=> __('Background color for Private Waters Seaosns Section.'),
		)
	)
);

// Spotlight:nth-child(2) Text Color -> Add Setting
$wp_customize -> add_setting ( 'spotlight_2_text_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

// Spotlight:nth-child(2) Text Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'spotlight_2_text_color', array(
		'label'						=> __('Spotlight 2 Text Color', 'the-fly-shop'),
		'priority'				=> 12,
		'section'					=> 'private_waters',
		'description'			=> __('Text Color For Spotlight 2.'),
		)
	)
);	
	
// Spotlight:nth-child(2) Arrow Color -> Add Setting
$wp_customize -> add_setting ( 'spotlight_2_arrow_color', array(
		'default'							=> '#7f7f7f',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

// Spotlight:nth-child(2) Arrow Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'spotlight_2_arrow_color', array(
		'label'						=> __('Spotlight 2 Arrow Color', 'the-fly-shop'),
		'priority'				=> 12,
		'section'					=> 'private_waters',
		'description'			=> __('Arrow Color For Spotlight 2.'),
		)
	)
);
	
// Spotlight:nth-child(2) Border Color -> Add Setting
$wp_customize -> add_setting ( 'spotlight_2_border_color', array(
		'default'							=> '#ddd',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

// Spotlight:nth-child(2) Border Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'spotlight_2_border_color', array(
		'label'						=> __('Spotlight 2 Border Color', 'the-fly-shop'),
		'priority'				=> 12,
		'section'					=> 'private_waters',
		'description'			=> __('Border Color For Spotlight 2.'),
		)
	)
);	
// Spotlight:nth-child(3) Background Color -> Add Setting	
$wp_customize -> add_setting ( 'spotlight_3_bg_color', array(
		'default'						=> '#2a333c',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));
// Spotlight:nth-child(3) Background Color -> Add Setting		
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'spotlight_3_bg_color', array(
		'label'						=> __('Spotlight 3 Background Color', 'the-fly-shop'),
		'priority'				=> 13,
		'section'					=> 'private_waters',
		'description'			=> __('Background color for Private Waters Get To Section.'),
		)
	)
);
// Spotlight:nth-child(3) Text Color -> Add Setting
$wp_customize -> add_setting ( 'spotlight_3_text_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));
// Spotlight:nth-child(3) Text Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'spotlight_3_text_color', array(
		'label'						=> __('Spotlight 3 Text Color', 'the-fly-shop'),
		'priority'				=> 13,
		'section'					=> 'private_waters',
		'description'			=> __('Text Color For Spotlight 3, Getting to section.'),
		)
	)
);
// Spotlight:nth-child(3) Arrow Color -> Add Setting
$wp_customize -> add_setting ( 'spotlight_3_arrow_color', array(
		'default'							=> '#7f7f7f',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));
// Spotlight:nth-child(3) Arrow Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'spotlight_3_arrow_color', array(
		'label'						=> __('Spotlight 3 Arrow Color', 'the-fly-shop'),
		'priority'				=> 13,
		'section'					=> 'private_waters',
		'description'			=> __('Arrow Color For Spotlight 3.'),
		)
	)
);	
// Spotlight:nth-child(3) Border Color -> Add Setting
$wp_customize -> add_setting ( 'spotlight_3_border_color', array(
		'default'							=> '#ddd',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));
// Spotlight:nth-child(3) Border Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'spotlight_3_border_color', array(
		'label'						=> __('Spotlight 3 Border Color', 'the-fly-shop'),
		'priority'				=> 13,
		'section'					=> 'private_waters',
		'description'			=> __('Border Color For Spotlight 3.'),
		)
	)
);	
// Spotlight:nth-child(4) Background Color -> Add Setting	
$wp_customize -> add_setting ( 'spotlight_4_bg_color', array(
		'default'							=> '#20272e',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));
// Spotlight:nth-child(4) Background Color -> Add Control		
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'spotlight_4_bg_color', array(
		'label'						=> __('Spotlight 4 Background Color', 'the-fly-shop'),
		'priority'				=> 14,
		'section'					=> 'private_waters',
		'description'			=> __('Background color for Private Waters Get Loding Section.'),
		)
	)
);
	
// Spotlight:nth-child(4) Text Color -> Add Setting
$wp_customize -> add_setting ( 'spotlight_4_text_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

// Spotlight:nth-child(4) Text Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'spotlight_4_text_color', array(
		'label'							=> __('Spotlight 4 Text Color', 'the-fly-shop'),
		'priority'					=> 14,
		'section'						=> 'private_waters',
		'description'				=> __('Text Color For Spotlight 4, Getting to section.'),
		)
	)
);
	
// Spotlight:nth-child(4) Arrow Color -> Add Setting
$wp_customize -> add_setting ( 'spotlight_4_arrow_color', array(
		'default'							=> '#7f7f7f',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

// Spotlight:nth-child(4) Arrow Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'spotlight_4_arrow_color', array(
		'label'						=> __('Spotlight 4 Arrow Color', 'the-fly-shop'),
		'priority'				=> 14,
		'section'					=> 'private_waters',
		'description'			=> __('Arrow Color For Spotlight 4.'),
		)
	)
);
	
// Spotlight:nth-child(4) Border Color -> Add Setting
$wp_customize -> add_setting ( 'spotlight_4_border_color', array(
		'default'							=> '#ddd',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

// Spotlight:nth-child(4) Border Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'spotlight_4_border_color', array(
		'label'						=> __('Spotlight 4 Border Color', 'the-fly-shop'),
		'priority'				=> 14,
		'section'					=> 'private_waters',
		'description'			=> __('Border Color For Spotlight 4.'),
		)
	)
);	
	// Spotlight:nth-child(5) Background Color -> Add Setting	
$wp_customize -> add_setting ( 'spotlight_5_bg_color', array(
		'default'							=> '#20272e',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));
// Spotlight:nth-child(5) Background Color -> Add Control		
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'spotlight_5_bg_color', array(
		'label'						=> __('Spotlight 5 Background Color', 'the-fly-shop'),
		'priority'				=> 15,
		'section'					=> 'private_waters',
		'description'			=> __('Background color for Private Waters Get Loding Section.'),
		)
	)
);
	
// Spotlight:nth-child(5) Text Color -> Add Setting
$wp_customize -> add_setting ( 'spotlight_5_text_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
));

// Spotlight:nth-child(5) Text Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'spotlight_5_text_color', array(
		'label'							=> __('Spotlight 5 Text Color', 'the-fly-shop'),
		'priority'					=> 15,
		'section'						=> 'private_waters',
		'description'				=> __('Text Color For Spotlight 5, Getting to section.'),
		)
	)
);
	
// Spotlight:nth-child(5) Arrow Color -> Add Setting
$wp_customize -> add_setting ( 'spotlight_5_arrow_color', array(
		'default'							=> '#7f7f7f',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

// Spotlight:nth-child(5) Arrow Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'spotlight_5_arrow_color', array(
		'label'						=> __('Spotlight 5 Arrow Color', 'the-fly-shop'),
		'priority'				=> 15,
		'section'					=> 'private_waters',
		'description'			=> __('Arrow Color For Spotlight 5.'),
		)
	)
);
	
// Spotlight:nth-child(5) Border Color -> Add Setting
$wp_customize -> add_setting ( 'spotlight_5_border_color', array(
		'default'							=> '#ddd',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage'
));

// Spotlight:nth-child(5) Border Color -> Add Control
$wp_customize -> add_control (
	new WP_Customize_Color_Control(
		$wp_customize,
		'spotlight_5_border_color', array(
		'label'						=> __('Spotlight 5 Border Color', 'the-fly-shop'),
		'priority'				=> 15,
		'section'					=> 'private_waters',
		'description'			=> __('Border Color For Spotlight 5.'),
		)
	)
);	