<?php
  /**
   * Taxonomy Template Customizer
   */
  
  /* ==== Taxonomy Page Template Settings & Controls ==== */
      $wp_customize -> add_section(
        'taxonomy_template',
        array (
          'title'							=> __('Taxonomy Template'),
          'description'				=> __('Taxonomy Template Customizer Features'),
          'priority'					=> 80,
          'active_callback'		=> function() { return is_tax();}
        )
      );
      
      // Taxonomy logo
      $wp_customize -> add_setting(
        'tax_logo',
        array(
          'default'				=> __(''),
          'type'					=> 'theme_mod',
          'capability'		=> 'edit_theme_options',
          'transport'			=> 'refresh'
        )
      );
      
      // Add control
      $wp_customize -> add_control(
        new WP_Customize_Image_Control(
          $wp_customize,
          'tax_logo',
          array(
            'label'								=> __('Taxonomy Template Logo', 'the-fly-shop' ),
            'section'							=> 'taxonomy_template',
            'settings'						=> 'tax_logo',
            'priority'						=> 10,
            'sanitize_callback'		=> 'themepatio_sanitize_image'
          )
        )
      );
      
      // Selective refresh
      $wp_customize->selective_refresh->add_partial('tax_logo', array(
          'selector' => '.tax-logo-selective',
          'settings' => 'tax_logo',
          'render_callback' => function() {
            return wp_get_attachment_image(get_theme_mod('tax_logo'));
          }
        )
      );
      
      // Header Hero Image
      $wp_customize -> add_setting(
        'tax_page_hero',
        array(
          'default'				=> __(''),
          'type'					=> 'theme_mod',
          'capability'		=> 'edit_theme_options',
          'transport'			=> 'refresh'
        )
      );
      
      // Add control
      $wp_customize -> add_control(
        new WP_Customize_Image_Control(
          $wp_customize,
          'tax_page_hero',
          array(
            'label'								=> __('Taaxonomy Template Hero Image', 'the-fly-shop' ),
            'section'							=> 'taxonomy_template',
            'settings'						=> 'tax_page_hero',
            'priority'						=> 10,
            'sanitize_callback'		=> 'themepatio_sanitize_image'
          )
        )
      );
      // Selective refresh
      $wp_customize->selective_refresh->add_partial('tax_page_hero', array(
          'selector' => '.tax-hero-selective',
          'settings' => 'tax_page_hero',
          'render_callback' => function() {
            return wp_get_attachment_image(get_theme_mod('tax_page_hero'));
          }
        )
      );
      
      // Taxonomy Page Text Area
      $wp_customize -> add_setting (
        'taxonomy_page_textarea',
        array(
          'default'							=> __(''),
          'type'								=> 'theme_mod',
          'sanitize_callback'		=> 'wp_kses_post',
          'transport'						=> 'postMessage',
        )
      );

      // Add control
      $wp_customize -> add_control (
        new WP_Customize_Control (
          $wp_customize,
          'taxonomy_page_textarea',
          array (
            'label'			=> __( 'Taxonomy Page Text Area', 'the-fly-shop' ),
            'section'		=> 'taxonomy_template',
            'settings'	=> 'taxonomy_page_textarea',
            'type'			=> 'textarea',
            'priority' 	=> 10,
          )
        )
      );
      // Selective refresh
      $wp_customize->selective_refresh->add_partial( 'taxonomy_page_textarea', array(
          'selector'  =>  '#panel-body-selective',
          'settings'  =>  'taxonomy_page_textarea',
          'render_callback' => function() {
            return get_theme_mod('taxonomy_page_textarea');
          }
        )
      );
      
