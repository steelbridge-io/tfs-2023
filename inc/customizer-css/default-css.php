<?php
/**
 * Custom CSS For Default Template Customizer
 * Make sure to enqueue add_inline_style 'load_default_css' in functions.php
 * Otherwise your styles won't load in the preview window.
 */

function load_default_css() {
    $css_default = '';

    $default_page_bg			= get_theme_mod ('default_page_bg');
    $default_page_color		= get_theme_mod ('default_page_color');
    $default_cont_bg      = get_theme_mod ('default_cont_bg');

    if (is_singular()) {
        $css_default .= ' 
		
		body.default-template {
				background: ' . $default_page_bg . ';
			}
		body.default-template, #default-entry-styles table th,
    #default-entry-styles td strong,
    #default-entry-styles .event-tickets form div table tbody tr td b { 
			color: ' . $default_page_color . ';
		}
    #default-entry-styles table tbody tr {
      border: solid 1px ' . $default_page_color . ';
      border-left: 0;
      border-right: 0;
    }
    #default-entry-styles table thead {
      border-bottom: solid 2px ' . $default_page_color . ';
    }
    .container.default-template {
      background: ' . $default_cont_bg . ';
      margin-top: 4.618em;
    }
		
		';
        return $css_default;
    }
}