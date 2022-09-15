<?php
/**
 * Custom CSS For Staff Template Customizer
 * Make sure to enqueue add_inline_style 'load_staff_css' in functions.php
 * Otherwise your styles won't load in the preview window.
 */
function load_staff_css() {
	$css_8 = '';
	
	$staff_bg_color			= get_theme_mod ('staff_bg_color');
	$staff_text_color		= get_theme_mod ('staff_text_color');
	$staff_link_color		= get_theme_mod ('staff_link_color');
	
	if (is_page_template('page-templates/staff-template.php')) {
		$css_8 .= '
		
		.staff_bg_color {
				background: ' . $staff_bg_color . ';
			}
			
		.staff-text-color h3.widget-title, .staff-text-color h4.widget-title, .staff-text-color p {
			color: ' . $staff_text_color . ';
		}
		.caption p a {
			color:' . $staff_link_color  . ';
		}
		
		';
	return $css_8;
	}
}
