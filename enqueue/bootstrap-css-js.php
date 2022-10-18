<?php
	
	add_action( 'wp_enqueue_scripts', 'bootstrap_scripts' );
	function bootstrap_scripts() {
		
		if(!is_page_template(array('page-templates/hero-template.php', 'page-templates/travel-signature-template.php'))) {
			wp_enqueue_style( 'the-fly-shop-btstrp-template', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '3.3.7', 'all' );
		
		}
		
		if(is_page_template(array('page-templates/hero-template.php', 'page-templates/travel-signature-template.php'))) {
		
		}
		
		wp_register_style( 'the-fly-shop-btstrp-menu', get_template_directory_uri() . '/assets/css/bootstrap-submenu.min.css', array(), '2.0.4', 'all' );
		wp_enqueue_style( 'the-fly-shop-btstrp-menu' );
		
		wp_enqueue_script( 'the-fly-shop-btstrp-submenu', get_template_directory_uri() . '/assets/js/bootstrap-submenu.js', array(), '20161116', true );
	
	}
	
