<?php
/**
 * Custom CSS For Private Water Template Customizer
 * Make sure to enqueue add_inline_style 'load_private_css' in functions.php
 * Otherwise your styles won't load in the preview window.
 */
function load_private_css() {
	$css_2 = '';
	$spotlight_1_bg_color			= get_theme_mod ('spotlight_1_bg_color');
	$spotlight_1_text_color		= get_theme_mod ('spotlight_1_text_color');
	$spotlight_1_arrow_color	= get_theme_mod ('spotlight_1_arrow_color');
	$spotlight_1_border_color	= get_theme_mod ('spotlight_1_border_color');
	$spotlight_2_arrow_color	= get_theme_mod ('spotlight_2_arrow_color');
	$spotlight_2_border_color	= get_theme_mod ('spotlight_2_border_color');
	$spotlight_3_arrow_color	= get_theme_mod ('spotlight_3_arrow_color');
	$spotlight_3_border_color	= get_theme_mod ('spotlight_3_border_color');
	$spotlight_2_bg_color			= get_theme_mod ('spotlight_2_bg_color');
	$spotlight_2_text_color		= get_theme_mod ('spotlight_2_text_color');
	$spotlight_3_bg_color			= get_theme_mod ('spotlight_3_bg_color');
	$spotlight_3_text_color		= get_theme_mod ('spotlight_3_text_color');
	$spotlight_4_bg_color			= get_theme_mod ('spotlight_4_bg_color');
	$spotlight_4_text_color		= get_theme_mod ('spotlight_4_text_color');
	$spotlight_4_arrow_color	= get_theme_mod ('spotlight_4_arrow_color');
	$spotlight_4_border_color	= get_theme_mod ('spotlight_4_border_color');
	$spotlight_5_bg_color			= get_theme_mod ('spotlight_5_bg_color');
	$spotlight_5_text_color		= get_theme_mod ('spotlight_5_text_color');
	$spotlight_5_arrow_color	= get_theme_mod ('spotlight_5_arrow_color');
	$spotlight_5_border_color	= get_theme_mod ('spotlight_5_border_color');
	
	if (is_page_template('page-templates/private-template.php')) {
		$css_2 .= ' 
		
		.spotlight:nth-child(1) {
			background-color: ' . $spotlight_1_bg_color . ';
		}
		
		.privatewaters1 h2, .privatewaters1 h4, .privatewaters1 p.travel, .panel { 
			color: ' . $spotlight_1_text_color . ';
		}
		
		.privatewaters1 h4 .arrow-down {
			color: ' . $spotlight_1_arrow_color . ';
		}
		
		#collapseTwo1 .panel-body, #collapseThree1 .panel-body, #collapseFour1 .panel-body, #collapseFive1 .panel-body {
			border-top: 1px solid ' . $spotlight_1_border_color . ';
		} 
		
		.spotlight:nth-child(2) {
			background-color: ' . $spotlight_2_bg_color . ';
		}
		
		.privatewaters2 h2, .privatewaters2 h4, .privatewaters2 p.travel, .panel { 
			color: ' . $spotlight_2_text_color . ';
		}
		
		.privatewaters2 h4 .arrow-down {
			color: ' . $spotlight_2_arrow_color . ';
		}
		
		#collapseFive1 .panel-body, #collapseSix1 .panel-body, #collapseSeven1 .panel-body, #collapseEight1 .panel-body, #collapseNine1 .panel-body {
			border-top: 1px solid ' . $spotlight_2_border_color . ';
		} 
		
		.spotlight:nth-child(3) {
			background-color: ' . $spotlight_3_bg_color . ';
		}
		
		.privatewaters3 h2, .privatewaters3 h4, .privatewaters3 p.travel, .panel { 
			color: ' . $spotlight_3_text_color . ';
		}
		
		.privatewaters3 h4 .arrow-down {
			color: ' . $spotlight_3_arrow_color . ';
		}
		
		#collapse-beat1 .panel-body,
		#collapse-beat3 .panel-body,
		#collapse-beat4 .panel-body,
		#collapse-beat5 .panel-body,
		#collapse-beat6 .panel-body {
			border-top: 1px solid ' . $spotlight_3_border_color . ';
		} 
		
		.spotlight:nth-child(4) {
			background-color: ' . $spotlight_4_bg_color . ';
		}
		
		.privatewaters4 h2, .privatewaters4 h4, .privatewaters4 p.travel, .panel { 
			color: ' . $spotlight_4_text_color . ';
		}
		
		.privatewaters4 h4 .arrow-down {
			color: ' . $spotlight_4_arrow_color . ';
		}
		
		#collapseOne4 .panel-body {
			border-top: 1px solid ' . $spotlight_4_border_color . ';
		} 
		
		.spotlight:nth-child(5) {
			background-color: ' . $spotlight_5_bg_color . ';
		}
		
		.privatewaters5 h2, .privatewaters5 h4, .privatewaters5 p.travel, .panel { 
			color: ' . $spotlight_5_text_color . ';
		}
		
		.privatewaters5 h4 .arrow-down {
			color: ' . $spotlight_5_arrow_color . ';
		}
		
		#collapseOne5 .panel-body {
			border-top: 1px solid ' . $spotlight_5_border_color . ';
		} 
		
		';
	return $css_2;
	}
}
