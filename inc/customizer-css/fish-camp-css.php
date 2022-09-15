<?php
/**
 * Custom CSS For Fish Camp Template Customizer
 * Make sure to enqueue add_inline_style 'load_fish_camp_css' in functions.php
 * Otherwise your styles won't load in the preview window.
 */
function load_fish_camp_css() {
	$css_5 = '';
	$fc_cost_bg_color						= get_theme_mod ('fc_cost_bg_color');
	$fc_cost_text_color					= get_theme_mod ('fc_cost_text_color');
	$fc_cost_arrow_color				= get_theme_mod ('fc_cost_arrow_color');
	$fc_cost_border_color				= get_theme_mod ('fc_cost_border_color');
	$fc_dates_bg_color					= get_theme_mod ('fc_dates_bg_color');
	$fc_dates_text_color				= get_theme_mod ('fc_dates_text_color');
	$fc_dates_arrow_color				= get_theme_mod ('fc_dates_arrow_color');
	$fc_dates_border_color			= get_theme_mod ('fc_dates_border_color');
	$fc_lodging_bg_color				= get_theme_mod ('fc_lodging_bg_color');
	$fc_lodging_text_color			= get_theme_mod ('fc_lodging_text_color');
	$fc_lodging_arrow_color			= get_theme_mod ('fc_lodging_arrow_color');
	$fc_lodging_border_color		= get_theme_mod ('fc_lodging_border_color');
	$fc_getting_bg_color				= get_theme_mod ('fc_getting_bg_color');
	$fc_getting_text_color			= get_theme_mod ('fc_getting_text_color');
	$fc_getting_arrow_color			= get_theme_mod ('fc_getting_arrow_color');
	$fc_getting_border_color		= get_theme_mod ('fc_getting_border_color');
	$fc_itinerary_bg_color			= get_theme_mod ('fc_itinerary_bg_color');
	$fc_itinerary_text_color		= get_theme_mod ('fc_itinerary_text_color');
	$fc_itinerary_arrow_color		= get_theme_mod ('fc_itinerary_arrow_color');
	$fc_intinerary_border_color	= get_theme_mod ('fc_intinerary_border_color');
	$fc_h2_title								= get_theme_mod ('fc_h2_title');
	$fc_titleborder_color				= get_theme_mod ('fc_titleborder_color');
	$fc_decription_color				= get_theme_mod ('fc_decription_color');
	$fc_tel_color								= get_theme_mod ('fc_tel_color');
	
	if (is_page_template('page-templates/fish-camp-template.php')) {
		$css_5 .= ' 
		
		#fishcamp-two .spotlight:nth-child(1) {
		background:' . $fc_cost_bg_color . ';
		}
		.fishcamp1 h2, .fishcamp1 h4, .fishcamp1 .travel, .fishcamp1 .travel p, .fishcamp1 .travel strong {
		color:' . $fc_cost_text_color . '; 
		}
		.fishcamp1 h4 .arrow-down {
		color:' . $fc_cost_arrow_color . ';
		}
		.fishcamp .panel-heading + .panel-collapse > .panel-body {
		border-top: 1px solid ' . $fc_cost_border_color . ' ;
		}
		#fishcamp-two .spotlight:nth-child(2) {
		background:' . $fc_dates_bg_color . ';
		}
		.fishcamp2 h2, .fishcamp2 h4, .fishcamp2 .travel, .fishcamp2 .travel p, .fishcamp2 .travel strong, .fishcamp2 .travel em, #travel.travel, #travel.travel p, #travel.travel strong {
		color:' . $fc_dates_text_color . ';
		}
		.fishcamp2 h4 .arrow-down {
		color:' . $fc_dates_arrow_color . ';
		}
		.fishcamp2 .panel-heading + .panel-collapse > .panel-body {
		border-top: 1px solid ' . $fc_dates_border_color . ' ;
		}
		#fishcamp-two .spotlight:nth-child(3) {
		background:' . $fc_lodging_bg_color . ';
		}
		.fishcamp4 h2, .fishcamp4 h4, #travel-style.fishcamp4, #travel-style.fishcamp4 p, #travel-style.fishcamp4 strong  {
		color:' . $fc_lodging_text_color . ';
		}
		.fishcamp4 h4 .arrow-down {
		color:' . $fc_lodging_arrow_color . ';
		}
		.fishcamp4 .panel-heading + .panel-collapse > .panel-body {
		border-top: 1px solid ' . $fc_lodging_border_color . ' ;
		}
		#fishcamp-two .spotlight:nth-child(4) {
		background:' . $fc_getting_bg_color . ';
		}
		.fishcamp5 h2, .fishcamp5 h4, .fishcamp5 .travel, .fishcamp5 .travel p, .fishcamp5 .travel strong {
		color:' . $fc_getting_text_color . ';
		}
		.fishcamp5 h4 .arrow-down {
		color:' . $fc_getting_arrow_color . ';
		}
		.fishcamp5 .panel-heading + .panel-collapse > .panel-body {
		border-top: 1px solid ' . $fc_getting_border_color . ' ;
		}
		#fishcamp-two .spotlight:nth-child(5) {
		background:' . $fc_itinerary_bg_color . ';
		}
		.fishcamp3 h2, .fishcamp3 h4, .fishcamp3 .travel, .fishcamp3 .travel p, .fishcamp3 .travel strong {
		color:' . $fc_itinerary_text_color . ';
		}
		.fishcamp3 h4 .arrow-down {
		color:' . $fc_itinerary_arrow_color . ';
		}
		.fishcamp3 .panel-heading + .panel-collapse > .panel-body {
		border-top: 1px solid ' . $fc_intinerary_border_color . ' ;
		}
		h2#fishcamp-h2 {
		color:' . $fc_h2_title . ';
		}
		#banner h2#fishcamp-h2:before, #banner h2#fishcamp-h2:after  {
		background-color: ' . $fc_titleborder_color . ';
		}
		p#fishcamp-desc {
		color:' . $fc_decription_color . ';
		}
		h3#fishcamp-tel {
		color:' . $fc_tel_color . ';
		}

		';
	return $css_5;
	}
}
