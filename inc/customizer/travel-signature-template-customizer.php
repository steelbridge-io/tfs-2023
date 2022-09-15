<?php
/**
 * Travel Signature Template Customizer
 */

$wp_customize -> add_section(
  'travelsig_section_cust',
  array (
    'title' 					=> __('Travel Signature Template'),
    'description'			=> __('Travel Signature Template Features'),
    'priority'				=> 80,
    'active_callback'	=> function() { return is_page_template('page-templates/travel-signature-template.php'); }
  )
);

//	Creates color picker for travel blog rows - travel blog template
$wp_customize -> add_setting ( 'travelsig_bg_color', array(
  'default'							=> '#2b343d',
  'type'								=> 'theme_mod',
  'sanitize_callback'		=> 'sanitize_hex_color',
  'transport'						=> 'refresh',

));

// Add control
$wp_customize -> add_control (
  new WP_Customize_Color_Control (
    $wp_customize,
    'travelsig_bg_color', array(
      'label'			=> __('Travel Signature Background Color', 'the-fly-shop' ),
      'priority' 	=> 16,
      'section'		=> 'travelsig_section_cust',
      'settings'	=> 'travelsig_bg_color',
    )
  )
);

//	Creates color picker for travel signature background color news - travel blog template
/*$wp_customize -> add_setting ( 'travelnews_bg_color', array(
  'default'							=> '#2b343d',
  'type'								=> 'theme_mod',
  'sanitize_callback'		=> 'sanitize_hex_color',
  'transport'						=> 'refresh',

));

// Add control
$wp_customize -> add_control (
  new WP_Customize_Color_Control (
    $wp_customize,
    'travelnews_bg_color', array(
      'label'			=> __('Travel Signature News Background Color', 'the-fly-shop' ),
      'priority' 	=> 16,
      'section'		=> 'travelsig_section_cust',
      'settings'	=> 'travelnews_bg_color',
    )
  )
);*/

// STravel Signature Text Color -> Add Setting
$wp_customize -> add_setting ( 'travelsig_text_color', array(
  'default'						=> '#f5f5f5',
  'type'							=> 'theme_mod',
  'sanitize_callback'	=> 'sanitize_hex_color',
  'transport'					=> 'refresh'
));

// Travel Signature Text Color -> Add Control
$wp_customize -> add_control (
  new WP_Customize_Color_Control(
    $wp_customize,
    'travelsig_text_color', array(
      'label'					=> __('Travel Signature Text Color', 'the-fly-shop'),
      'priority'			=> 11,
      'section'				=> 'travelsig_section_cust',
      'settings'			=> 'travelsig_text_color',
      'description'		=> __('Text Color For Travel Signature Images.'),
    )
  )
);

// Travel Signature Link Color -> Add Setting
$wp_customize -> add_setting ( 'travelsig_link_color', array(
  'default'						=> '#dd3333',
  'type'							=> 'theme_mod',
  'sanitize_callback'	=> 'sanitize_hex_color',
  'transport'					=> 'refresh'
));

// Travel Signature Link Color -> Add Control
$wp_customize -> add_control (
  new WP_Customize_Color_Control(
    $wp_customize,
    'travelsig_link_color', array(
      'label'					=> __('Travel Signature Link Color', 'the-fly-shop'),
      'priority'			=> 11,
      'section'				=> 'travelsig_section_cust',
      'settings'			=> 'travelsig_link_color',
      'description'		=> __('Link Color For Travel Signature Links.'),
    )
  )
);

// Creates telephone number field in Site Identity
/*$wp_customize -> add_setting ( 'travelsig_title', array(
  'default'							=> 'Signature News Title',
  'type'								=> 'theme_mod',
  'sanitize_callback'		=> 'sanitize_text_field',
  'transport'						=> 'postMessage',
));
// Add control
$wp_customize -> add_control (
  new WP_Customize_Control (
    $wp_customize,
    'travelsig_title', array (
      'label'		=> __( 'Signature News Title', 'the-fly-shop' ),
      'priority'=>  16,
      'section'	=> 'travelsig_section_cust',
      'settings'=> 'travelsig_title',
      'type'		=> 'text',
    )
  )
);

// Travel Signature Title
$wp_customize->selective_refresh->add_partial('travelsig_title', array(
    'selector' 				=> '#travel-blog h2.travelBlogtitle',
    'settings' 				=> 'travelsig_title',
    'render_callback' => wp_get_attachment_image(get_theme_mod('travelsig_title'), '')
  )
);*/


