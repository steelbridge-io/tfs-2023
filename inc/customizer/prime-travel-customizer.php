<?php
/**
 * Prime Travel Template Customizer
 */

$wp_customize -> add_section(
	'prime_travel',
	array (
		'title'				=> __('Prime Travel Template'),
		'description'		=> __('Prime Travel Template Features'),
		'priority'			=> 80,
		'active_callback'	=> function() { return is_page_template('page-templates/prime-travel-template.php');}
	)
);

/* ==== Basic Page Template Settings & Controls ==== */

$wp_customize -> add_setting(
	'prime_travel_logo',
	array(
		'default'		=> '',
		'type'			=> 'theme_mod',
		'capability'	=> 'edit_theme_options',
		'transport'		=> 'refresh'
	)
);

$wp_customize -> add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'prime_travel_logo',
		array(
			'label'				    => __('Prime Travel Logo', 'the-fly-shop' ),
			'section'				=> 'prime_travel',
			'settings'				=> 'prime_travel_logo',
			'priority'				=> 10,
			'sanitize_callback'		=> 'themepatio_sanitize_image'
		)
	)
);

$wp_customize->add_setting( 'bg_prime_travel_img', array(
	'capability'        => 'edit_theme_options',
	'default'           => '',
	'transport'		    => 'refresh',
	'type'			    => 'theme_mod',
	'sanitize_callback' => 'themepatio_sanitize_image',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bg_prime_travel_img',
	array(
		'label'    => __( 'Prime Travel Background Image', 'the-fly-shop' ),
		'section'  => 'prime_travel',
		'settings' => 'bg_prime_travel_img',
	)
) );