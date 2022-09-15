<?php
/**
 * Blog Template Customizer
 */

$wp_customize -> add_section(
  'blog_template',
  array (
    'title'							=> __('Blog Template'),
    'description'				=> __(''),
    'priority'					=> 80,
    'active_callback'		=> function() { return is_page_template('page-templates/blog-template.php');}
  )
);

/* ==== Blog settings ==== */

$wp_customize -> add_setting(
  'blog_logo',
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
    'blog_logo',
    array(
      'label'								=> __('Logo', 'the-fly-shop' ),
      'section'							=> 'blog_template',
      'settings'						=> 'blog_logo',
      'priority'						=> 10,
      'sanitize_callback'		=> 'themepatio_sanitize_image'
    )
  )
);


$wp_customize -> add_section(
  'blog_template_new',
  array (
    'title'							=> __('Blog Template New'),
    'description'				=> __(''),
    'priority'					=> 80,
    'active_callback'		=> function() { return is_page_template('page-templates/blog-template-new.php') || is_page_template('page-templates/blog-template-travel.php') ;}
  )
);

/* ==== Blog settings ==== */

$wp_customize -> add_setting(
  'blog_logo_new',
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
    'blog_logo_new',
    array(
      'label'								=> __('Logo', 'the-fly-shop' ),
      'section'							=> 'blog_template_new',
      'settings'						=> 'blog_logo_new',
      'priority'						=> 10,
      'sanitize_callback'		=> 'themepatio_sanitize_image'
    )
  )
);
