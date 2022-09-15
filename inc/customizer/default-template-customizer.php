<?php
/**
 * Default Template Customizer
 */
function is_certain_page_template(){
    // Get the page's template
    $template = get_post_meta( get_the_ID(), '_wp_page_template', true );
    $is_template = preg_match( '%fullwidth.php%', $template );
    if ( $is_template == 0 ){
        return false;
    } else {
        return true;
    }
}

$wp_customize -> add_section(
	'default_template',
		array (
			'title'							=> __('Default Template'),
			'description'				=> __('Default Template Customizer Features'),
			'priority'					=> 80,
			'active_callback'		=> function() { return is_singular() && !is_page_template('page-templates/basic-page-template.php') && !is_page_template('page-templates/blog-template.php') && !is_page_template('page-templates/fish-camp-template.php') && !is_page_template('page-templates/travel-template.php') && !is_page_template('page-templates/stream-report-template.php') && !is_page_template('page-templates/staff-template.php') && !is_page_template('page-templates/signature-template.php') && !is_page_template('page-templates/sections-template.php') && !is_page_template('page-templates/schools-template.php') && !is_page_template('page-templates/private-template.php') && !is_page_template('page-templates/guide-service-template.php') && !is_page_template('page-templates/front-page-template.php');}
	)
);

/* ==== Default Page Template Settings & Controls ==== */

$wp_customize -> add_setting(
	'default_page_logo',
		array(
			'default'				=> '',
			'type'					=> 'theme_mod',
			'capability'		=> 'edit_theme_options',
			'transport'			=> 'refresh'
	)
);

$wp_customize -> add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'default_page_logo',
			array(
				'label'								=> __('Default Template Logo', 'the-fly-shop' ),
				'section'							=> 'default_template',
				'settings'						=> 'default_page_logo',
				'priority'						=> 10,
				'sanitize_callback'		=> 'themepatio_sanitize_image'
		)
	)
);

// Default page template background color
$wp_customize -> add_setting(
	'default_page_bg',
		array(
			'default'							=> '#f5f5f5',
			'type'								=> 'theme_mod',
			'capability'					=> 'edit_theme_options',
			'sanitize_callback'		=> 'sanitize_hex_color',
			'transport'						=> 'postMessage'
	)
);
// Add control
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'default_page_bg', 
			array(
				'label'			=> __( '<div style="margin-top:1.618em;">' . 'Default Page Template Background Color' . '</div>', 'the-fly-shop' ),
				'priority' 	=> 10,
				'section'		=> 'default_template',
				'settings'	=> 'default_page_bg'
		)
	)
);

// Default container background color
$wp_customize -> add_setting(
	'default_cont_bg',
		array(
			'default'							=> '#f5f5f5',
			'type'								=> 'theme_mod',
			'capability'					=> 'edit_theme_options',
			'sanitize_callback'		=> 'sanitize_hex_color',
			'transport'						=> 'postMessage'
	)
);
// Add control
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'default_cont_bg', 
			array(
				'label'			=> __( '<div style="margin-top:1.618em;">' . 'Default Page Template Background Color' . '</div>', 'the-fly-shop' ),
				'priority' 	=> 10,
				'section'		=> 'default_template',
				'settings'	=> 'default_cont_bg'
		)
	)
);

// Default page text color
$wp_customize -> add_setting(
	'default_page_color',
		array(
			'default'							=> '#2e3842',
			'type'								=> 'theme_mod',
			'capability'					=> 'edit_theme_options',
			'sanitize_callback'		=> 'sanitize_hex_color',
			'transport'						=> 'postMessage'
	)
);
// Add control
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'default_page_color', 
			array(
				'label'			=> __( '<div style="margin-top:1.618em;">' . 'Default Text Color' . '</div>', 'the-fly-shop' ),
				'priority' 	=> 10,
				'section'		=> 'default_template',
				'settings'	=> 'default_page_color'
		)
	)
);

// Default entry container text color
$wp_customize -> add_setting(
	'default_entry_color',
		array(
			'default'							=> '#2e3842',
			'type'								=> 'theme_mod',
			'capability'					=> 'edit_theme_options',
			'sanitize_callback'		=> 'sanitize_hex_color',
			'transport'						=> 'postMessage'
	)
);
// Add control
$wp_customize -> add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'default_entry_color', 
			array(
				'label'			=> __( '<div style="margin-top:1.618em;">' . 'Default Container Text Color' . '</div>', 'the-fly-shop' ),
				'priority' 	=> 10,
				'section'		=> 'default_template',
				'settings'	=> 'default_entry_color'
		)
	)
);

