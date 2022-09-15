<?php
/*
 * Custom CSS for Guide Template Customizer
 */

function load_guideservice_css() {
	$css_3 = '';
	
	$gs_1_bg_color			= get_theme_mod ('gs_1_bg_color');
	$gs_1_text_color		= get_theme_mod ('gs_1_text_color');
	$gs_1_arrow_color		= get_theme_mod ('gs_1_arrow_color');
	$gs_1_border_color	= get_theme_mod ('gs_1_border_color');
	
	$gs_2_bg_color			= get_theme_mod ('gs_2_bg_color');
	$gs_2_text_color		= get_theme_mod ('gs_2_text_color');
	$gs_2_arrow_color		= get_theme_mod ('gs_2_arrow_color');
	$gs_2_border_color	= get_theme_mod ('gs_2_border_color');
	
	$gs_3_bg_color			= get_theme_mod ('gs_3_bg_color');
	$gs_3_text_color		= get_theme_mod ('gs_3_text_color');
	$gs_3_arrow_color		= get_theme_mod ('gs_3_arrow_color');
	$gs_3_border_color	= get_theme_mod ('gs_3_border_color');
	
	$gs_4_bg_color			= get_theme_mod ('gs_4_bg_color');
	$gs_4_text_color		= get_theme_mod ('gs_4_text_color');
	$gs_4_arrow_color		= get_theme_mod ('gs_4_arrow_color');
	$gs_4_border_color	= get_theme_mod ('gs_4_border_color');
	
	$gs_5_bg_color			= get_theme_mod ('gs_5_bg_color');
	$gs_5_text_color		= get_theme_mod ('gs_5_text_color');
	$gs_5_arrow_color		= get_theme_mod ('gs_5_arrow_color');
	$gs_5_border_color	= get_theme_mod ('gs_5_border_color');
	
	if (is_page_template('page-templates/guide-service-template.php')) {
		$css_3 .= ' 
		
		.spotlight:nth-child(1) {
			background-color: ' . $gs_1_bg_color . ';
		}
		
		.privatewaters1 h2, .privatewaters1 h4, .privatewaters1 p.travel, .panel { 
			color: ' . $gs_1_text_color . ';
		}
		
		.privatewaters1 h4 .arrow-down {
			color: ' . $gs_1_arrow_color . ';
		}
		
		#collapseTwo1 .panel-body, #collapseThree1 .panel-body, #collapseFour1 .panel-body, #collapseFive1 .panel-body {
			border-top: 1px solid ' . $gs_1_border_color . ';
		} 
		
		.spotlight:nth-child(2) {
			background-color: ' . $gs_2_bg_color . ';
		}
		
		.privatewaters2 h2, .privatewaters2 h4, .privatewaters2 p.travel, .panel { 
			color: ' . $gs_2_text_color . ';
		}
		
		.privatewaters2 h4 .arrow-down {
			color: ' . $gs_2_arrow_color . ';
		}
		
		#collapseFive1 .panel-body, #collapseSix1 .panel-body, #collapseSeven1 .panel-body, #collapseEight1 .panel-body, #collapseNine1 .panel-body {
			border-top: 1px solid ' . $gs_2_border_color . ';
		} 
		
		.spotlight:nth-child(3) {
			background-color: ' . $gs_3_bg_color . ';
		}
		
		.privatewaters3 h2, .privatewaters3 h4, .privatewaters3 p.travel, .panel { 
			color: ' . $gs_3_text_color . ';
		}
		
		.privatewaters3 h4 .arrow-down {
			color: ' . $gs_3_arrow_color . ';
		}
		
		#collapseFishing4 .panel-body {
			border-top: 1px solid ' . $gs_3_border_color . ';
		} 
		
		.spotlight:nth-child(4) {
			background-color: ' . $gs_4_bg_color . ';
		}
		
		.privatewaters4 h2, .privatewaters4 h4, .privatewaters4 p.travel, .panel { 
			color: ' . $gs_4_text_color . ';
		}
		
		.privatewaters4 h4 .arrow-down {
			color: ' . $gs_4_arrow_color . ';
		}
		
		#collapseLodging4 .panel-body {
			border-top: 1px solid ' . $gs_4_border_color . ';
		} 
		
		.spotlight:nth-child(5) {
			background-color: ' . $gs_5_bg_color . ';
		}
		
		.privatewaters5 h2, .privatewaters5 h4, .privatewaters5 p.travel, .panel { 
			color: ' . $gs_5_text_color . ';
		}
		
		.privatewaters5 h4 .arrow-down {
			color: ' . $gs_5_arrow_color . ';
		}
		
		#collapseOne5 .panel-body {
			border-top: 1px solid ' . $gs_5_border_color . ';
		} 
		
		';
	return $css_3;
	}
}

