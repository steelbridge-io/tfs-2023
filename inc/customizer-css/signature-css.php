<?php
/**
 * Custom CSS For Signature Destinations Template Customizer
 * Make sure to enqueue add_inline_style 'load_signature_css' in functions.php !!!!!!!!!!
 * Otherwise your styles won't load in the preview window.
 */
function load_signature_css() {
	$css_signature = '';
	
	$signature_bg_color			= get_theme_mod ('signature_bg_color');
	$signature_text_color		= get_theme_mod ('signature_text_color');
	$signature_link_color		= get_theme_mod ('signature_link_color');
	
	if (is_page_template('page-templates/signature-template.php') || is_page_template('page-templates/signature-template-blog.php')) {
		$css_signature .= '
		
		.signature_bg_color {
				background: ' . $signature_bg_color . ';
			}
			
		.signature-text-color h3.widget-title a:hover, .signature-text-color h3.widget-title, .signature-text-color h4.widget-title, .signature-text-color p, h2.logo-tel {
			color: ' . $signature_text_color . ';
		}
		
		.caption a {
			color: ' . $signature_link_color . ';
		}
		
		';
	return $css_signature;
	}
}
