<?php
/**
 * Custom CSS For Signature Destinations Template Customizer
 * Make sure to enqueue add_inline_style 'load_signature_events_css' in functions.php !!!!!!!!!!
 * Otherwise your styles won't load in the preview window.
 */
function load_signature_events_css() {
	$css_signature_events = '';
	
	$signature_events_bg_color			= get_theme_mod ('signature_events_bg_color');
	$signature_events_text_color		= get_theme_mod ('signature_events_text_color');
	$signature_events_link_color		= get_theme_mod ('signature_events_link_color');
	
	if (is_page_template('page-templates/signature-events-template.php')) {
		$css_signature_events .= ' 
		
		.signature_events_bg_color, .signature.modal-content, .signature.modal-footer {
				background-color: ' . $signature_events_bg_color . ';
		}	
		.signature-events-text-color h3.widget-title a:hover, .signature-events-text-color h3.widget-title, .signature-events-text-color h4.widget-title, .signature-events-text-color p, h4.modal-title, .signature.modal-body, button .times, button.btn-default { 
			color: ' . $signature_events_text_color . ';
		}
		
		.caption a, .signature .modal-body a {
			color: ' . $signature_events_link_color . ';
		}
		.signature.btn-primary, .modal-footer .btn-default, .modal-footer .btn-default:active {
			background-color:' . $signature_events_link_color . ';
			border-color:' . $signature_events_link_color  . ';
		}
		.signature.btn-primary:hover, .modal-footer .btn-default:hover, .modal-footer .btn-default:active:hover,
		.signature.btn-primary:focus, .modal-footer .btn-default:focus, .modal-footer .btn-default:focus,
		.signature.btn-primary:active, .modal-footer .btn-default:active, .modal-footer .btn-default:active,
		.signature.btn-primary:active:focus, .modal-footer .btn-default:active:focus, .modal-footer .btn-default:active:focus {
		filter: opacity();
		opacity: 0.8;
		box-shadow: none;
		background-color:' . $signature_events_link_color . ';
		border-color:' . $signature_events_link_color  . ';
		}
		
		';
	return $css_signature_events;
	}
}
