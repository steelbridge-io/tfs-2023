<?php
	/**
	 * Custom CSS For Search Results Customizer
	 * Make sure to enqueue add_inline_style 'load_search_css' in functions.php
	 * Otherwise your styles won't load in the preview window.
	 */
	
	function load_search_css() {
		$css_search = '';
		
		$search_header_img	= get_theme_mod ('search_header_img');
		
		if (is_search()) {
			$css_search .= '
				#search-results-header {
		      background-image: url('. $search_header_img .');
				}
		';
			return $css_search;
		}
		
		return '';
	}
