<?php
/*
 * Footer customizer features
 */

		// Add Footer Section
	$wp_customize->add_section(
	'theflyshop_footer',
	array(
	'title' 			=> __('Footer'),
	'description' => __(''),
	'priority' 		=> 80,
	));

	// Adds Page URL 1 URL - Footer
	$wp_customize->add_setting( 'page_1', array(
	'default' 					=> __('www.theflyshop.com'),
	'type' 							=> 'theme_mod',
	'capability' 				=> 'edit_theme_options',
	'transport' 				=> '',
	'sanitize_callback' => 'esc_url',
	));
	// Add control
	$wp_customize->add_control( 'page_1', array(
	'type' 						=> 'url',
	'priority' 				=> 18,
	'section' 				=> 'theflyshop_footer',
	'label'						=> __( 'Pages URL 1', 'the-fly-shop' ),
	'description' 		=> 'Add a URL to PAGES item #1',
	));

	// Adds Page URL 1 Label - Footer
	$wp_customize -> add_setting ( 'page_1_label', array(
		'default'							=> __('Pages label &#35;1'),
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_text_field',
		'transport'						=> 'postMessage',
	));
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Control (
			$wp_customize,
			'page_1_label', array (
			'label'				=> __( 'Pages URL 1 Label', 'the-fly-shop' ),
			'section'			=> 'theflyshop_footer',
			'settings'		=> 'page_1_label',
			'type'				=> 'text',
			'description'	=> __('Label for Pages #1.'),
			'priority' 		=> 19,
			)
		)
	);

	// Adds Page URL 2 - Footer
	$wp_customize->add_setting( 'page_2', array(
	'default' 					=> __('www.theflyshop.com'),
	'type' 							=> 'theme_mod',
	'capability' 				=> 'edit_theme_options',
	'transport' 				=> '',
	'sanitize_callback' => 'esc_url',
	));
	// Add control
	$wp_customize->add_control( 'page_2', array(
	'type' 				=> 'url',
	'priority' 		=> 20,
	'section' 		=> 'theflyshop_footer',
	'label' 			=> __( 'Pages URL 2', 'the-fly-shop' ),
	'description' => __('URL for Pages &#35;2.'),
	));

	// Adds Page URL 2 Label - Footer
	$wp_customize -> add_setting ( 'page_2_label', array(
		'default'							=> __('Pages label #2'),
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_text_field',
		'transport'						=> 'postMessage',
	));
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Control (
			$wp_customize,
			'page_2_label', array (
			'label'			=> __( 'Pages URL 2 Label', 'the-fly-shop' ),
			'section'		=> 'theflyshop_footer',
			'settings'	=> 'page_2_label',
			'type'			=> 'text',
			'priority' 	=> 21,
			)
		)
	);

	// Adds Page URL 3 - Footer
	$wp_customize->add_setting( 'page_3', array(
	'default' 					=> __('www.theflyshop.com'),
	'type' 							=> 'theme_mod',
	'capability' 				=> 'edit_theme_options',
	'transport' 				=> '',
	'sanitize_callback' => 'esc_url',
	));
	// Add control
	$wp_customize->add_control( 'page_3', array(
	'type' 						=> 'url',
	'priority' 				=> 22,
	'section' 				=> 'theflyshop_footer',
	'label' 					=> __( 'Pages URL 3', 'the-fly-shop' ),
	'description' 		=> __('URL for Pages &#35;3'),
	));

	// Adds Page URL 3 Label - Footer
	$wp_customize -> add_setting ( 'page_3_label', array(
		'default'							=> __('Pages label &#35;3'),
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_text_field',
		'transport'						=> 'postMessage',
	));
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Control (
			$wp_customize,
			'page_3_label', array (
			'label'			=> __( 'Pages URL 3 Label', 'the-fly-shop' ),
			'section'		=> 'theflyshop_footer',
			'settings'	=> 'page_3_label',
			'type'			=> 'text',
			'priority' 	=> 23,
			)
		)
	);

	// Adds Page URL 4 - Footer
	$wp_customize->add_setting( 'page_4', array(
	'default' 					=> __('www.theflyshop.com'),
	'type' 							=> 'theme_mod',
	'capability' 				=> 'edit_theme_options',
	'transport' 				=> '',
	'sanitize_callback' => 'esc_url',
	));
	// Add control
	$wp_customize->add_control( 'page_4', array(
	'type' 				=> 'url',
	'priority' 		=> 24,
	'section' 		=> 'theflyshop_footer',
	'label' 			=> __( 'Pages URL 4', 'the-fly-shop' ),
	'description' => 'URL for Pages &#35;4',
	));

	// Adds Page URL 4 Label - Footer
	$wp_customize -> add_setting ( 'page_4_label', array(
		'default'							=> __('Pages label &#35;4'),
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_text_field',
		'transport'						=> 'postMessage',
	));
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Control (
			$wp_customize,
			'page_4_label', array (
			'label'			=> __( 'Pages URL 4 Label', 'the-fly-shop' ),
			'section'		=> 'theflyshop_footer',
			'settings'	=> 'page_4_label',
			'type'			=> 'text',
			'priority'	=> 25,
			)
		)
	);

	// Adds Page URL 5 - Footer
	$wp_customize->add_setting( 'page_5', array(
	'default' 					=> '',
	'type' 							=> 'theme_mod',
	'capability' 				=> 'edit_theme_options',
	'transport' 				=> '',
	'sanitize_callback' => 'esc_url',
	));
	// Add control
	$wp_customize->add_control( 'page_5', array(
	'type' 				=> 'url',
	'priority' 		=> 26,
	'section' 		=> 'theflyshop_footer',
	'label' 			=> __( 'Pages URL 5', 'the-fly-shop' ),
	'description' => '',
	));

	// Adds Page URL 5 Label - Footer
	$wp_customize -> add_setting ( 'page_5_label', array(
		'default'							=> '',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_text_field',
		'transport'						=> 'postMessage',
	));
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Control (
			$wp_customize,
			'page_5_label', array (
			'label'			=> __( 'Pages URL 5 Label', 'the-fly-shop' ),
			'section'		=> 'theflyshop_footer',
			'settings'	=> 'page_5_label',
			'type'			=> 'text',
			'priority' 	=> 27,
			)
		)
	);

	// Adds Page URL 6 - Footer
	$wp_customize->add_setting( 'page_6', array(
	'default' 					=> '',
	'type' 							=> 'theme_mod',
	'capability' 				=> 'edit_theme_options',
	'transport' 				=> '',
	'sanitize_callback' => 'esc_url',
	));
	// Add control
	$wp_customize->add_control( 'page_6', array(
	'type' 				=> 'url',
	'priority' 		=> 28,
	'section' 		=> 'theflyshop_footer',
	'label' 			=> __( 'Pages URL 6', 'the-fly-shop' ),
	'description' => '',
	));

	// Adds Page URL 6 Label - Footer
	$wp_customize -> add_setting ( 'page_6_label', array(
		'default'							=> '',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_text_field',
		'transport'						=> 'postMessage',
	));
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Control (
			$wp_customize,
			'page_6_label', array (
			'label'			=> __( 'Pages URL 6 Label', 'the-fly-shop' ),
			'section'		=> 'theflyshop_footer',
			'settings'	=> 'page_6_label',
			'type'			=> 'text',
			'priority' 	=> 29,
			)
		)
	);

	// Creates address field in footer
	$wp_customize -> add_setting ( 'address_field', array(
		'default'							=> '',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_text_field',
		'transport'						=> 'postMessage',
	));
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Control (
			$wp_customize,
			'address_field', array (
			'label'			=> __( 'TFS Address', 'the-fly-shop' ),
			'section'		=> 'theflyshop_footer',
			'settings'	=> 'address_field',
			'type'			=> 'textarea',
			'priority' 	=> 30,
			)
		)
	);

	// Adds Email - Footer
	$wp_customize->add_setting( 'tfs_email', array(
	'default' 					=> '',
	'type' 							=> 'theme_mod',
	'capability' 				=> 'edit_theme_options',
	'transport' 				=> '',
	'sanitize_callback' => 'esc_url',
	));
	// Add control
	$wp_customize->add_control( 'tfs_email', array(
	'type' 				=> 'url',
	'priority' 		=> 31,
	'section' 		=> 'theflyshop_footer',
	'label' 			=> __( 'TFS Email', 'the-fly-shop' ),
	'description' => '',
	));

	// Adds Email Label - Footer
	$wp_customize -> add_setting ( 'tfs_email_label', array(
		'default'							=> '',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_text_field',
		'transport'						=> 'postMessage',
	));
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Control (
			$wp_customize,
			'tfs_email_label', array (
			'label'			=> __( 'Email label', 'the-fly-shop' ),
			'section'		=> 'theflyshop_footer',
			'settings'	=> 'tfs_email_label',
			'type'			=> 'text',
			'priority' 	=> 32,
			)
		)
	);

	// Add List 1 Link - Footer
	$wp_customize->add_setting( 'link_1', array(
	'default' 					=> '',
	'type' 							=> 'theme_mod',
	'capability' 				=> 'edit_theme_options',
	'transport' 				=> '',
	'sanitize_callback' => 'esc_url',
	));
	// Add control
	$wp_customize->add_control( 'link_1', array(
	'type' 				=> 'url',
	'priority' 		=> 33,
	'section' 		=> 'theflyshop_footer',
	'extra'				=> '<h1>Links</h1>',
	'label' 			=> __( 'Link 1 URL', 'the-fly-shop' ),
	'description' => 'Add the URL for the 1st link in the "Links" section.',
	));

	// Adds List 1 Link Label - Footer
	$wp_customize -> add_setting ( 'link_1_label', array(
		'default'							=> '',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_text_field',
		'transport'						=> 'postMessage',
	));
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Control (
			$wp_customize,
			'link_1_label', array (
			'label'			=> __( 'Link 1 Label', 'the-fly-shop' ),
			'section'		=> 'theflyshop_footer',
			'settings'	=> 'link_1_label',
			'type'			=> 'text',
			'priority' 	=> 34,
			)
		)
	);

	// Add List 2 Link - Footer
	$wp_customize->add_setting( 'link_2', array(
	'default' 					=> '',
	'type' 							=> 'theme_mod',
	'capability' 				=> 'edit_theme_options',
	'transport' 				=> '',
	'sanitize_callback' => 'esc_url',
	));
	// Add control
	$wp_customize->add_control( 'link_2', array(
	'type' 				=> 'url',
	'priority' 		=> 35,
	'section' 		=> 'theflyshop_footer',
	'label' 			=> __( 'Link 2 URL', 'the-fly-shop' ),
	'description' => '',
	));

	// Adds List 2 Link Label - Footer
	$wp_customize -> add_setting ( 'link_2_label', array(
		'default'							=> '',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_text_field',
		'transport'						=> 'postMessage',
	));
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Control (
			$wp_customize,
			'link_2_label', array (
			'label'			=> __( 'Link 2 Label', 'the-fly-shop' ),
			'section'		=> 'theflyshop_footer',
			'settings'	=> 'link_2_label',
			'type'			=> 'text',
			'priority' 	=> 36,
			)
		)
	);

	// Add List 3 Link - Footer
	$wp_customize->add_setting( 'link_3', array(
	'default' 					=> '',
	'type' 							=> 'theme_mod',
	'capability' 				=> 'edit_theme_options',
	'transport' 				=> '',
	'sanitize_callback' => 'esc_url',
	));
	// Add control
	$wp_customize->add_control( 'link_3', array(
	'type' 				=> 'url',
	'priority' 		=> 37,
	'section' 		=> 'theflyshop_footer',
	'label' 			=> __( 'Link 3 URL', 'the-fly-shop' ),
	'description' => '',
	));

	// Adds List 3 Link Label - Footer
	$wp_customize -> add_setting ( 'link_3_label', array(
		'default'							=> '',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_text_field',
		'transport'						=> 'postMessage',
	));
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Control (
			$wp_customize,
			'link_3_label', array (
			'label'			=> __( 'Link 3 Label', 'the-fly-shop' ),
			'section'		=> 'theflyshop_footer',
			'settings'	=> 'link_3_label',
			'type'			=> 'text',
			'priority' 	=> 38,
			)
		)
	);

	// Add List 4 Link - Footer
	$wp_customize->add_setting( 'link_4', array(
	'default' => '',
	'type' => 'theme_mod',
	'capability' => 'edit_theme_options',
	'transport' => '',
	'sanitize_callback' => 'esc_url',
	));
	// Add control
	$wp_customize->add_control( 'link_4', array(
	'type' => 'url',
	'priority' => 39,
	'section' => 'theflyshop_footer',
	'label' => __( 'Link 4 URL', 'the-fly-shop' ),
	'description' => '',
	));

	// Adds List 4 Link Label - Footer
	$wp_customize -> add_setting ( 'link_4_label', array(
		'default'							=> '',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_text_field',
		'transport'						=> 'postMessage',
	));
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Control (
			$wp_customize,
			'link_4_label', array (
			'label'		=> __( 'Link 4 Label', 'the-fly-shop' ),
			'section'	=> 'theflyshop_footer',
			'settings'=> 'link_4_label',
			'type'		=> 'text',
			'priority' => 40,
			)
		)
	);

	// Add List 5 Link - Footer
	$wp_customize->add_setting( 'link_5', array(
	'default' => '',
	'type' => 'theme_mod',
	'capability' => 'edit_theme_options',
	'transport' => '',
	'sanitize_callback' => 'esc_url',
	));
	// Add control
	$wp_customize->add_control( 'link_5', array(
	'type' => 'url',
	'priority' => 41,
	'section' => 'theflyshop_footer',
	'label' => __( 'Link 5 URL', 'the-fly-shop' ),
	'description' => '',
	));

	// Adds List 5 Link Label - Footer
	$wp_customize -> add_setting ( 'link_5_label', array(
		'default'							=> '',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_text_field',
		'transport'						=> 'postMessage',
	));
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Control (
			$wp_customize,
			'link_5_label', array (
			'label'		=> __( 'Link 5 Label', 'the-fly-shop' ),
			'section'	=> 'theflyshop_footer',
			'settings'=> 'link_5_label',
			'type'		=> 'text',
			'priority' => 42,
			)
		)
	);

	// Adds Hours Of Opperation
	$wp_customize -> add_setting ( 'hours_field', array(
		'default'							=> '',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> '',
		'transport'						=> 'postMessage',
	));
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Control (
			$wp_customize,
			'hours_field', array (
			'label'		=> __( 'TFS Hours', 'the-fly-shop' ),
			'section'	=> 'theflyshop_footer',
			'settings'=> 'hours_field',
			'type'		=> 'textarea',
			'priority' => 43,
			)
		)
	);

  // Twitter Footer Link
  $wp_customize -> add_setting ( 'twitter_link_footer', array(
    'default'             => '',
    'type'                => 'theme_mod',
    'sanitize_callback'   => 'esc_url_raw',
    'transport'           => 'refresh'
  ));

  // Add control
  $wp_customize -> add_control (
    new WP_Customize_Control (
      $wp_customize,
      'twitter_link_footer', array (
        'label'     => __('Twitter Link', 'the-fly-shop'),
        'section'   => 'theflyshop_footer',
        'settings'  => 'twitter_link_footer',
        'type'      => 'url',
        'priority'  => 45
      )
    )
  );

  // Facebook Footer Link
  $wp_customize -> add_setting ( 'facebook_link_footer', array(
    'default'             => '',
    'type'                => 'theme_mod',
    'sanitize_callback'   => 'esc_url_raw',
    'transport'           => 'refresh'
  ));

  // Add control
  $wp_customize -> add_control (
    new WP_Customize_Control (
      $wp_customize,
      'facebook_link_footer', array (
        'label'     => __('Facebook Link', 'the-fly-shop'),
        'section'   => 'theflyshop_footer',
        'settings'  => 'facebook_link_footer',
        'type'      => 'url',
        'priority'  => 45
      )
    )
  );

  // Instagram Footer Link
  $wp_customize -> add_setting ( 'instagram_link_footer', array(
    'default'             => '',
    'type'                => 'theme_mod',
    'sanitize_callback'   => 'esc_url_raw',
    'transport'           => 'refresh'
  ));
  // Add control
  $wp_customize -> add_control (
    new WP_Customize_Control (
      $wp_customize,
      'instagram_link_footer', array (
        'label'     => __('Instagram Link', 'the-fly-shop'),
        'section'   => 'theflyshop_footer',
        'settings'  => 'instagram_link_footer',
        'type'      => 'url',
        'priority'  => 45
      )
    )
  );

  // Instagram Footer Link
  $wp_customize -> add_setting ( 'youtube_link_footer', array(
    'default'             => '',
    'type'                => 'theme_mod',
    'sanitize_callback'   => 'esc_url_raw',
    'transport'           => 'refresh'
  ));
  // Add control
  $wp_customize -> add_control (
    new WP_Customize_Control (
      $wp_customize,
      'youtube_link_footer', array (
        'label'     => __('Youtube Link', 'the-fly-shop'),
        'section'   => 'theflyshop_footer',
        'settings'  => 'youtube_link_footer',
        'type'      => 'url',
        'priority'  => 45
      )
    )
  );

  // Email Footer Link
  $wp_customize -> add_setting ( 'email_link_footer', array(
    'default'             => '',
    'type'                => 'theme_mod',
    'sanitize_callback'   => 'sanitize_text_field',
    'transport'           => 'refresh'
  ));
  // Add control
  $wp_customize -> add_control (
    new WP_Customize_Control (
      $wp_customize,
      'email_link_footer', array (
        'label'     => __('Email Link', 'the-fly-shop'),
        'section'   => 'theflyshop_footer',
        'settings'  => 'email_link_footer',
        'type'      => 'text',
        'priority'  => 45
      )
    )
  );
