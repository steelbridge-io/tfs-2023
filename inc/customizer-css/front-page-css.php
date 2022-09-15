<?php
/**
 * Custom CSS For Front Page Customizer
 * Make sure to enqueue add_inline_style 'load_front_page_css' in functions.php
 * Otherwise your styles won't load in the preview window.
 */

function load_front_page_css() {
	$default = '';
    $css_1 = '';
    $front_page_hero_image      = get_theme_mod ('front-page-hero-image');
	$front_page_hero_video      = get_theme_mod ('front-page-hero-video');
    $tel_color				    = get_theme_mod ('tel_color');
    $description_color		    = get_theme_mod ('description_color');
    $description_border		    = get_theme_mod ('description_border');
    $menu_color 				= get_theme_mod ('menu_color');
    $frontp_bg_color   		    = get_theme_mod ('frontp_bg_color');
    $frontp_title_color		    = get_theme_mod ('frontp_title_color');
    $frontp_article_title	    = get_theme_mod ('frontp_article_title');
    $frontp_grid_link			= get_theme_mod ('frontp_grid_link');
    $frontp_email_bg			= get_theme_mod ('frontp_email_bg');
    $frontp_text_color		    = get_theme_mod ('frontp_text_color');
    $flip_page_title_color      = get_theme_mod ('flip_page_title_color');
    
    // Modified menu color css
	if ( $front_page_hero_image !== $default ) {
		$css_1 .= '
		body.landing #page-wrapper-front-page, body.is-mobile.landing #page-wrapper-front-page #banner, body.is-mobile.landing #page-wrapper-front-page .wrapper.style4 {
        background-image: url(' . $front_page_hero_image . ');
        }
		';
	}
	
	if ( $front_page_hero_video !== $default ) {
		$css_1 .= '
		#banner {
		padding: 0 !important;
		}
		';
	}

    $css_1 .= '
      #fp-well h3, #fp-well p {
        color: ' . $flip_page_title_color . ';
      }
      #menu {
				background: ' . $menu_color . ';
			}
			.inner h3 {
				color: ' . $tel_color . ';
			}
			h2.site-description {
				color: ' . $description_color . ';
			}
			#banner h2:before, #banner h2:after {
				background-color: ' . $description_border . ';
			}
			.container-fluid2 {
				background:' . $frontp_bg_color .';
			}
			.container-fluid2 .caption a {
				color:' . $frontp_grid_link . ';
			}
			.wrapper-home.style5 {
			background:' . $frontp_title_color .';
			}
			#title-section-fp h1, #title-section-fp h2 {
				color:' . $frontp_article_title .';
			}
			#fp-well.well {
				background:' . $frontp_email_bg . ';
			}
			.container-fluid2 h3.widget-title, .container-fluid2 .caption h3, .container-fluid2 .caption p {
				color:' .  $frontp_text_color . ';
			}
		';
    return $css_1;
}
