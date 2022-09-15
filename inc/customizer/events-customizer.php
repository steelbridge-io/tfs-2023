<?php
/**
 * Events Template Customizer
 */

$wp_customize -> add_section(
	'events_template',
		array (
			'title'							=> __('Events Template'),
			'description'				=> __('Events Template Customizer Features'),
			'priority'					=> 20,
			'active_callback'		=> function() { return is_page_template('page-templates/events-page-template.php');}
	)
);

// Creates custom Hero Image field for Front Page
    $wp_customize -> add_setting ( 'events-page-hero-image', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'transport'         => 'postMessage'   
    ));
    $wp_customize -> add_control (
    new WP_Customize_Image_Control (
        $wp_customize,
        'events-page-hero-image',
            array (
                'label'             => __('Events Page Hero Image'),
                'section'           => 'events_template',
                'settings'          => 'events-page-hero-image',
                'priority'          => 10,
                'sanitize_callback' => 'esc_url_raw',
                
            )
        )
    );