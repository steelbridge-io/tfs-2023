<?php
/**
 * Custom CSS For Travel Template Customizer
 * Make sure to enqueue add_inline_style 'load_staff_css' in functions.php
 * Otherwise your styles won't load in the preview window.
 */
function load_travel_css() {
	$css_travel = '';
	
	$travel_bg_color			= get_theme_mod ('staff_bg_color');
	$travel_text_color		= get_theme_mod ('staff_text_color');
	$sth_bg_color					= get_theme_mod ('sth_bg_color');
	$sth_text_color				= get_theme_mod ('sth_text_color');
  $travel_text_color    = get_theme_mod ('travel_text_color');
  $travel_fa_arrows     = get_theme_mod ('travel_fa_arrows');
	
	if (is_page_template('page-templates/travel-template.php')) {
		$css_travel .= '
		
		.travel_bg_color {
				background: ' . $travel_bg_color . ';
			}
			
		.staff-text-color h3.widget-title, .staff-text-color p {
			color: ' . $travel_text_color . ';
		}
		
		#two-325.wrapper.style1.special {
			background-color: ' . $sth_bg_color . ';
		}
		
		#setthehook-title h2, .travel.setthehook-p {
			color: '. $sth_text_color .';
		}
		
		.setthehook1 #setthehook1 strong,
		.setthehook1 #setthehook1 em,
		.setthehook1 #setthehook1 b
		.setthehook1 #setthehook1 ul li {
  		color:'. $sth_text_color .';
		}
    
    #travel-style-one h2,
    #travel-style-one h4,
    #travel-style-one p,
    #travel-style-two h2,
    #travel-style-two h4,
    #travel-style-two p,
    #travel-style-three h2,
    #travel-style-three h4,
    #travel-style-three p,
    #travel-style-four h2,
    #travel-style-four h4
    #travel-style-four p,
    #travel-style-five h2,
    #travel-style-five h4,
    #travel-style-five p {
      color: '. $travel_text_color .';
    }
    
    .panel-title.travel.travel-template .arrow-down {
      color: '. $travel_fa_arrows .';
    }
    
    #accordion1 .panel-collapse.collapse .panel-body.travel-template,
    #accordion2 .panel-collapse.collapse .panel-body.travel-template,
    #accordion3 .panel-collapse.collapse .panel-body.travel-template,
    #accordion4 .panel-collapse.collapse .panel-body.travel-template,
    #accordion5 .panel-collapse.collapse .panel-body.travel-template {
      border-top: 1px solid '. $travel_fa_arrows .';
    }
		
		';
	return $css_travel;
	}
}
