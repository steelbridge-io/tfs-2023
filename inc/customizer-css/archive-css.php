<?php
/**
 * Custom CSS For Basic Template Customizer
 * Make sure to enqueue add_inline_style 'load_archive_css' in functions.php
 * Otherwise your styles won't load in the preview window.
 */

function load_archive_css() {
	$css_archive = '';
	
	$archive_page_bg			= get_theme_mod ('archive_page_bg');
	$archive_page_color		= get_theme_mod ('archive_page_color');
  $archive_cont_color   = get_theme_mod ('archive_cont_color');
	
	if (is_archive()) {
		$css_archive .= '
		
		body.archivetemplate, #archive, .archive .panel, .archive .panel .panel-body {
				background-color: ' . $archive_page_bg . ';
			}
   
		#archive-entry-styles table th,
    #archive-entry-styles table td,
    #archive-entry-styles strong,
    #archive-entry-styles b,
    h2.archive.archive-event-title,
    h3.archive.archive-event-title,
    h4.archive.archive-event-title{
        color: ' . $archive_page_color . ';
      }
      
    article.archive-template {
      background-color: ' . $archive_cont_color . ';
    }
    
		';
	return $css_archive;
	}
}
