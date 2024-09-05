<?php
/**
 * Template Name: Travel Questionnaire
 * Template Post Type: travel-questionnaire
 * Developed for The Fly Shop
 *
 * @package The_Fly_Shop
 * Author: Chris Parsons
 * Author URL: https://steelbridge.io
 */

get_header();

echo '<div id="travel-form-questionnaire" class="container-fluid">';

//echo '<div class="container well"><h1>' . get_the_title() . '</h1></div>';

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		echo '<div class="post-content container">';
		the_content();
		echo '</div>';
	endwhile;
else :
	echo '<p>';
	_e( 'Sorry, the post appears to be missing.' );
	echo '</p>';
endif;

echo '<div class="container question-form-wrap">';
echo '</div>'; // end question-form-wrap div

echo '</div>'; // end travel-form-questionnaire div

get_footer();

