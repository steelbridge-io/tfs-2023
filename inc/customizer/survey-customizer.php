<?php
$wp_customize -> add_section(
    'survey_page',
    array (
        'title' 			=> __('Survey Template'),
        'description'		=> __('Custom options for the Survey Template.'),
        'priority'			=> 20,
        'active_callback'   => function() {return is_page_template('page-templates/survey-template.php');}
    )
);

// Adds logo to survey template <header>
$wp_customize -> add_setting ( 'survey-logo', array(
    'default'           => '',
    'type'              => 'theme_mod',
    'transport'         => 'postMessage'
));
$wp_customize -> add_control (
    new WP_Customize_Image_Control (
        $wp_customize,
        'survey-logo',
        array (
            'label'             => __('Survey Logo'),
            'section'           => 'survey_page',
            'settings'          => 'survey-logo',
            'priority'          => 10,
            'sanitize_callback' => 'esc_url_raw',
            'active_callback'   => function() {return is_page_template('page-templates/survey-template.php');}

        )
    )
);