<?php
/**
 * Custom CSS For Basic Template Customizer
 * Make sure to enqueue add_inline_style 'load_basic_css' in functions.php
 * Otherwise your styles won't load in the preview window.
 */

function load_basic_css() {
	$css_basic = '';
	
	$basic_page_bg			= get_theme_mod ('basic_page_bg');
	$basic_page_color		= get_theme_mod ('basic_page_color');
	
	if (is_page_template('page-templates/basic-page-template.php')) {
		$css_basic .= '
		
		.container-fluid.basic-page-template {
				background: ' . $basic_page_bg . ';
			}
		.basic-page-template p,
		 .container #primary #main article #basic-content h2,
		 .container #primary #main article #basic-content p,
		 .row .col-sm-4 p,
		 .row .col-sm-4 ul li a{
			color: ' . $basic_page_color . ';
		}
		
		';
	return $css_basic;
	}
}
