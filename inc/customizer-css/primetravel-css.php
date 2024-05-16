<?php
/**
 * Custom CSS For Private Water Template Customizer
 * Make sure to enqueue add_inline_style 'load_private_css' in functions.php
 * Otherwise your styles won't load in the preview window.
 */
function load_primetravel_css() {
	$css_prime = '';
	$pt_bg_color            = get_theme_mod('pt_bg_color');
	$pt_font_color          = get_theme_mod('pt_font_color');
	$pt_button_color        = get_theme_mod('pt_button_color');
	$pt_btn_text_color      = get_theme_mod('pt_btn_text_color');
	$pt_btn_hover           = get_theme_mod('pt_btn_hover');


	if (is_page_template('page-templates/travel-signature-template.php')) {
		$css_prime .= '
		
		#prime-travel-travel-template {
      background: '. $pt_bg_color .';
    }
    
    .prime-travel-content p,
    .prime-travel-content h1,
    .prime-travel-content h2,
    .prime-travel-content h3,
    .prime-travel-content h4 {
      color: '. $pt_font_color .';
    }
    
    button.btn.btn-danger {
      background: '. $pt_button_color .';
      border: '. $pt_button_color .';
      color: '. $pt_btn_text_color .';
    }
    
     button.btn.btn-danger:hover {
      background:'. $pt_btn_hover .';
      border:'. $pt_btn_hover .';
     }
    
		';
		return $css_prime;
	}
	
	return '';
}
