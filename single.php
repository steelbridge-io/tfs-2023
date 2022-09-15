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

<div id="primary" class="content-area default-single">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
			
            the_post_navigation( array(
              'prev_text'                  => __( '<span class="post-nav"><i class="fas fa-2x fa-chevron-left"></i>&nbsp;prev post: %title</span>' ),
              'next_text'                  => __( '<span class="post-nav">next post: %title&nbsp;<i class="fas fa-2x fa-chevron-right"></i></span>' ),
              'screen_reader_text' => __( 'Continue Reading' ),
            ) );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();

