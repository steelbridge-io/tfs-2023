<?php
/**
 * Custom CSS For Private Water Template Customizer
 * Make sure to enqueue add_inline_style 'load_private_css' in functions.php
 * Otherwise your styles won't load in the preview window.
 */
function load_primetravel_css() {
	$css_prime = '';
	$primetravel_bg_img	    = get_theme_mod ('bg_prime_travel_img');


	if (is_page_template('page-templates/prime-travel-template.php')) {
		$css_prime .= ' 
		
		.prime-travel-left-col {
			background-image: url(' . $primetravel_bg_img . ');
		} 
		
		';
		return $css_prime;
	}
}
