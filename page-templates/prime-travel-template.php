<?php
/**
 * Template Name: Prime Travel
 */
get_header('primetravel');

echo  '<div id="prime-travel">' .
			'<div  class="container-fluid">' .
			'<div class="container prime-travel-container">' .
      
      '<div id="prime-travel-tfs-logo" class="">
				<a href="https://www.theflyshop.com" title="The Fly Shop Link"><img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2021/05/social_tfs_logo_og.png" alt="The Fly Shop" ></a>
			 </div> ' .
    
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


get_footer('primetravel');