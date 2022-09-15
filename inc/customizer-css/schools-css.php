<?php
/**
 * Custom CSS For Schools Template Customizer
 * Make sure to enqueue add_inline_style 'load_schools_css' in functions.php
 * Otherwise your styles won't load in the preview window.
 */
function load_schools_css() {
	$css_4 = '';
	
	$sch_title							= get_theme_mod ('sch_title_color');
	$sch_titleborder_color	= get_theme_mod ('sch_titleborder_color');
	$sch_description_color	= get_theme_mod ('sch_description_color');
	$sch_schoolstel_color		= get_theme_mod ('sch_schoolstel_color');
	
	$sch_1_bg_color					= get_theme_mod ('sch_1_bg_color');
	$sch_1_text_color				= get_theme_mod ('sch_1_text_color');
	$sch_1_arrow_color			= get_theme_mod ('sch_1_arrow_color');
	$sch_1_border_color			= get_theme_mod ('sch_1_border_color');
	
	$sch_2_bg_color					= get_theme_mod ('sch_2_bg_color');
	$sch_2_text_color				= get_theme_mod ('sch_2_text_color');
	$sch_2_arrow_color			= get_theme_mod ('sch_2_arrow_color');
	$sch_2_border_color			= get_theme_mod ('sch_2_border_color');
	
	$sch_3_bg_color					= get_theme_mod ('sch_3_bg_color');
	$sch_3_text_color				= get_theme_mod ('sch_3_text_color');
	$sch_3_arrow_color			= get_theme_mod ('sch_3_arrow_color');
	$sch_3_border_color			= get_theme_mod ('sch_3_border_color');
	
	$sch_4_bg_color					= get_theme_mod ('sch_4_bg_color');
	$sch_4_text_color				= get_theme_mod ('sch_4_text_color');
	$sch_4_arrow_color			= get_theme_mod ('sch_4_arrow_color');
	$sch_4_border_color			= get_theme_mod ('sch_4_border_color');
	
	$sch_5_bg_color					= get_theme_mod ('sch_5_bg_color');
	$sch_5_text_color				= get_theme_mod ('sch_5_text_color');
	$sch_5_arrow_color			= get_theme_mod ('sch_5_arrow_color');
	$sch_5_border_color			= get_theme_mod ('sch_5_border_color');

	if (is_page_template('page-templates/schools-template.php')) {
		$css_4 .= ' 
		
		h2#schools-title {
		color:' . $sch_title . ';
		}
		#banner h2#schools-title:before, #banner h2#schools-title:after {
		background-color:' . $sch_titleborder_color . ';
		}
		p#schools-description {
		color:' . $sch_description_color . ';
		}
		h3#schools-tel {
		color:' . $sch_schoolstel_color . ';
		}
		#schools-two .spotlight:nth-child(1) {
			background-color: ' . $sch_1_bg_color . ';
		}
		.schools1 h2, .schools1 h4, .schools1 .travel, .schools1 .travel p, .schools1 .travel strong, .schools1 .travel em { 
			color: ' . $sch_1_text_color . ';
		}
		.schools1 h4 .arrow-down {
			color: ' . $sch_1_arrow_color . ';
		}
		.schools1 #collapseTwo1 .panel-body, #collapseThree1 .panel-body, #collapseFour1 .panel-body, #collapseFive1 .panel-body {
			border-top: 1px solid ' . $sch_1_border_color . ';
		} 
		#schools-two .spotlight:nth-child(2) {
			background-color: ' . $sch_2_bg_color . ';
		}
		 .schools2 h2, .schools2 h4, .schools2 .travel, .schools2 .travel p, .schools2 .travel strong, .schools2 .travel em { 
			color: ' . $sch_2_text_color . ';
		}
		.schools2 h4 .arrow-down {
			color: ' . $sch_2_arrow_color . ';
		}
		.schools2 #collapseFive1 .panel-body, #collapseSix1 .panel-body, #collapseSeven1 .panel-body, #collapseEight1 .panel-body, #collapseNine1 .panel-body {
			border-top: 1px solid ' . $sch_2_border_color . ';
		} 
		#schools-two .spotlight:nth-child(3) {
			background-color: ' . $sch_3_bg_color . ';
		}
		.schools3 h2, .schools3 h4, .schools3 .travel, .schools3 .travel p, .schools3 .travel strong, .schools3 .travel em { 
			color: ' . $sch_3_text_color . ';
		}
		.schools3 h4 .arrow-down {
			color: ' . $sch_3_arrow_color . ';
		}
		.schools3 #collapseOne3 .panel-body {
			border-top: 1px solid ' . $sch_3_border_color . ';
		}
		#schools-two .spotlight:nth-child(4) {
			background-color: ' . $sch_4_bg_color . ';
		}
		.schools4 h2, .schools4 h4, .schools4 .travel, .schools4 .travel p, .schools4 .travel strong, .schools4 .travel em { 
			color: ' . $sch_4_text_color . ';
		}
		.schools4 h4 .arrow-down {
			color: ' . $sch_4_arrow_color . ';
		}
		.schools4 #collapseOne4 .panel-body {
			border-top: 1px solid ' . $sch_4_border_color . ';
		} 
		#schools-two .spotlight:nth-child(5) {
			background-color: ' . $sch_5_bg_color . ';
		}
		.schools5 h2, .schools5 h4, .schools5 .travel, .schools5 .travel p, .schools5 .travel strong, .schools5 .travel em {
		color:' . $sch_5_text_color . ';
		}
		.schools5 h4 .arrow-down {
			color: ' . $sch_5_arrow_color . ';
		}
		.schools5 #collapseOne5 .panel-body {
			border-top: 1px solid ' . $sch_5_border_color . ';
		} 
		
		';
	return $css_4;
	}
}
