<?php
/**
 * Custom CSS For Events Page Customizer
 * Make sure to enqueue add_inline_style 'load_front_page_css' in functions.php
 * Otherwise your styles won't load in the preview window. It will be sad.
 */

function events_page_css() {
	$events_css_1 = '';
	$events_page_hero_image  = get_theme_mod ('events-page-hero-image');

	/* The CSS. Inserted into the template. So wonderful */
	$events_css_1 .= '
			#banner.events-background {
			background-image: url(' . $events_page_hero_image . ');
		}
	';
	
return $events_css_1;
}
