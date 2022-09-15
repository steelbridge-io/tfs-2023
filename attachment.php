<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package The_Fly_Shop
 */

get_header();
?>
</div>

<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content-attachment', get_post_type() );
        ?>
      
      <nav id="image-navigation" class="navigation image-navigation">
        <div class="nav-links">
          <div class="nav-previous"><?php previous_image_link( false, __( 'Previous Image', '' ) ); ?></div><div class="nav-next"><?php next_image_link( false, __( 'Next Image', '' ) ); ?></div>
        </div><!-- .nav-links -->
      </nav><!-- .image-navigation --><?php

			// If comments are open or we have at least one comment, load up the comment template.
			//if ( comments_open() || get_comments_number() ) :
			//	comments_template();
			//endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();

