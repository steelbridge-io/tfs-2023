<?php
/**
 * Front Page Customizer Settings/Features
 */

$wp_customize -> add_section(
	'tfs_front_page',
	array (
		'title' 						=> __('Front Page'),
		'description'				=> __('Custom options for the front page.'),
		'priority'					=> 20,
		'active_callback'		=> 'is_front_page'
	)
);

// Creates custom Hero Video field for Front Page
	$wp_customize -> add_setting ( 'front-page-hero-video', array(
		'default'           => '',
		'type'              => 'theme_mod',
		'transport'         => 'refresh',
	));
	$wp_customize -> add_control (
		new WP_Customize_Control (
			$wp_customize,
			'front-page-hero-video',
			array (
				'label'             => __('Front Page Hero Video'),
				'description'       => __('Add video url. Google Cloud, s3 object storage url recommended. To test, use https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4'),
				'type'              => 'url',
				'section'           => 'tfs_front_page',
				'settings'          => 'front-page-hero-video',
				'priority'          => 10,
				'sanitize_callback' => 'esc_url_raw',
				'active_callback'   => function() {return is_page_template('page-templates/front-page-template.php');}
			
			)
		)
	);
	
// Creates custom Hero Image field for Front Page
    $wp_customize -> add_setting ( 'front-page-hero-image', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'transport'         => 'refresh'
    ));
    $wp_customize -> add_control (
    new WP_Customize_Image_Control (
        $wp_customize,
        'front-page-hero-image',
            array (
                'label'             => __('Front Page Hero Image'),
                'section'           => 'tfs_front_page',
                'settings'          => 'front-page-hero-image',
                'priority'          => 10,
                'sanitize_callback' => 'esc_url_raw',
                'active_callback'   => function() {return is_page_template('page-templates/front-page-template.php');}
                
            )
        )
    );

// Creates telephone number field in Site Identity
	$wp_customize -> add_setting ( 'telephone_number', array(
		'default'							=> 'Add Phone Number',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_text_field',
		'transport'						=> 'postMessage',
	));
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Control (
			$wp_customize,
			'telephone_number', array (
			'label'		=> __( 'Telephone Number', 'the-fly-shop' ),
			'priority'=>  10,
			'section'	=> 'tfs_front_page',
			'settings'=> 'telephone_number',
			'type'		=> 'text',
			)
		)
	);

	// Creates article title on Front Page in Site Identity
	$wp_customize -> add_setting ( 'article_title', array(
		'default'							=> 'Article Title',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_text_field',
		'transport'						=> 'postMessage',
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Control (
			$wp_customize,
			'article_title', array (
			'label'		=> __( 'Article Title', 'the-fly-shop' ),
			'priority'=>  20,
			'section'	=> 'tfs_front_page',
			'settings'=> 'article_title',
			'type'		=> 'text',
			)
		)
	);
	
	// Creates article title small on Front Page in Site Identity
	$wp_customize -> add_setting ( 'article_title_small', array(
		'default'							=> 'Article Title Small',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_text_field',
		'transport'						=> 'postMessage',
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Control (
			$wp_customize,
			'article_title_small', array (
			'label'		=> __( 'Article Title Small', 'the-fly-shop' ),
			'priority'=>  20,
			'section'	=> 'tfs_front_page',
			'settings'=> 'article_title_small',
			'type'		=> 'text',
			)
		)
	);
	
	//	Telephone number color
	$wp_customize -> add_setting ( 'tel_color', array(
		'default'							=> '#f5f5f5',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage',
	
		));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control (
			$wp_customize,
			'tel_color', array(
			'label'							=> __('Telephone Number Color', 'the-fly-shop' ),
			'priority'					=>  30,
			'section'						=> 'tfs_front_page'
			)
		)
	);
	
	// Site Decription Color
	$wp_customize -> add_setting ( 'description_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage',
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'description_color', array(
			'label'							=> __('Front Page Header Description', 'the-fly-shop' ),
			'priority'					=>  30,
			'section'						=> 'tfs_front_page'
			)
		)
	);

	// Site decription borders
	$wp_customize -> add_setting ( 'description_border', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage',
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'description_border', array(
			'label'							=> __('Front Page Description Border Top', 'the-fly-shop' ),
			'priority'					=>  30,
			'section'						=> 'tfs_front_page',
			)
		)
	);

// Front page title background color
	$wp_customize -> add_setting ( 'frontp_title_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'frontp_title_color', array(
			'label'							=> __('Front Page Title Section Background Color', 'the-fly-shop' ),
			'priority'					=>  30,
			'section'						=> 'tfs_front_page',
			'decription'				=> __('Updates background color for title area.')
			)
		)
	);

// Flip Page Catalog Text & Title Color
	$wp_customize -> add_setting ( 'flip_page_title_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'flip_page_title_color', array(
			'label'							=> __('Flip Page Catalog Title Color', 'the-fly-shop' ),
			'priority'					=>  30,
			'section'						=> 'tfs_front_page',
			'decription'				=> __('Flip page catalog title color.')
			)
		)
	);

// Site background color
	$wp_customize -> add_setting ( 'frontp_bg_color', array(
		'default'						=> '#d75301',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'frontp_bg_color', array(
			'label'							=> __('Front Page Background Color', 'the-fly-shop' ),
			'priority'					=>  30,
			'section'						=> 'tfs_front_page',
			'decription'				=> __('Updates grid background color only.')
			)
		)
	);

// Front page text color
	$wp_customize -> add_setting ( 'frontp_text_color', array(
		'default'						=> '#2e3842',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'frontp_text_color', array(
			'label'							=> __('Front Page Text Color', 'the-fly-shop' ),
			'priority'					=>  30,
			'section'						=> 'tfs_front_page',
			'decription'				=> __('Updates text color.')
			)
		)
	);

// Front page grid link color
	$wp_customize -> add_setting ( 'frontp_grid_link', array(
		'default'						=> '#337ab7',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'frontp_grid_link', array(
			'label'							=> __('Front page grid link color', 'the-fly-shop' ),
			'priority'					=>  30,
			'section'						=> 'tfs_front_page',
			'decription'				=> __('Updates color of link within grid')
			)
		)
	);

// Email CTA & Flip Page background color
	$wp_customize -> add_setting ( 'frontp_email_bg', array(
		'default'						=> '#000',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'frontp_email_bg', array(
			'label'							=> __('Email CTA & Flip Page background color', 'the-fly-shop' ),
			'priority'					=>  30,
			'section'						=> 'tfs_front_page',
			'decription'				=> __('Updates background color')
			)
		)
	);
	
