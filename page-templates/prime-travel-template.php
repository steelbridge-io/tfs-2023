<?php
/**
 * Template Name: Prime Travel
 */
get_header();

echo '<div id="prime-travel">' .
		'<div  class="container-fluid">' .
            '<div class="container prime-travel-container">' .
            '<div class="row d-flex">' .
            '<div class="col-lg-4 prime-travel-left-col">
				
				<img class="prime-travel-logo img-responsive" src="'. get_theme_mod('prime_travel_logo') .'" alt="Prime Travel Logo">
				
			 </div>' .
            '<div class="col-lg-8">';

            if ( have_posts() ) :
	            while ( have_posts() ) : the_post();
		            get_template_part( '/template-parts/content', 'primetravel' );
	            endwhile;
            endif;

echo        '</div>' .
            '</div>' .
			'</div>' .
        '</div>' .
    '</div>';


get_footer();