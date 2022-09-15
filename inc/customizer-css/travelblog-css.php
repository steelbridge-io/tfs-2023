<?php
/**
 * Custom CSS For Signature Destinations Template Customizer
 * Make sure to enqueue add_inline_style 'load_signature_css' in functions.php !!!!!!!!!!
 * Otherwise your styles won't load in the preview window.
 */
function load_travelblog_css() {
	$css_travelblog = '';
	
	$travelblog_bg_color			= get_theme_mod ('travelblog_bg_color');
	$travelblog_text_color		= get_theme_mod ('travelblog_text_color');
	$travelblog_link_color		= get_theme_mod ('travelblog_link_color');
	$travelnews_bg_color      = get_theme_mod ('travelnews_bg_color');
  
  $travelsig_bg_color       = get_theme_mod ('travelsig_bg_color');
  $travelsig_text_color     = get_theme_mod ('travelsig_text_color');
  $travelsig_link_color     = get_theme_mod ('travelsig_link_color');
	
	
	
	if (is_page_template('page-templates/travel-template-blog.php' || 'page-templates/travel-signature-template-customizer.php')) {
		$css_travelblog .= '
		
		.travelblog_bg_color,
		 #travel-blog.blog-well.well {
				background: ' . $travelblog_bg_color . ';
			}
			
		.travelblog-text-color h3.widget-title a:hover, .travelblog-text-color h3.widget-title, .travelblog-text-color h4.widget-title, .travelblog-text-color p, h2.logo-tel, #travel-blog h2 {
			color: ' . $travelblog_text_color . ';
		}
		
		.travel-blog.caption a {
			color: ' . $travelblog_link_color . ';
		}
		
		#travel-blog.blog-well.well .col-md-6 .inner-wrap {
		  background-color:' . $travelnews_bg_color . ';
		}
		
		.row.travel-signature-template-row {
		  background-color: ' . $travelsig_bg_color . ';
		}
		.caption.sig-caption h4,
		.caption.sig-caption p,
		.thumbnail.signature-text-color h3 {
		  color: '. $travelsig_text_color .';
		}
		a.thumbnail-h3,
		a.thumbnail-h3:hover {
			color: ' . $travelsig_text_color . ';
		}
		.caption.sig-caption p a {
		  color: '. $travelsig_link_color .';
		}
		';
	return $css_travelblog;
	}
}
