<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Fly_Shop
 */

include_once(get_template_directory() . '/page-templates/post-meta/post-meta-default.php');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('default-template survey-template-article'); ?>>

    <div class="survey-template survey-template-container">

    <div id="survey-entry-styles" class="entry-content panel-body">
    <!-- <h2 class="logo-tel"><?php //echo get_the_title(); ?></h2> -->
        <?php
            the_content( sprintf(
                /* translators: %s: Name of current post. */
                wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'the-fly-shop' ), array( 'span' => array( 'class' => array() ) ) ),
                the_title( '<span class="screen-reader-text">"', '"</span>', false )
            ) );

            /*wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'the-fly-shop' ),
                'after'  => '</div>',
            ) );*/
        ?>
    </div><!-- .entry-content -->
		
	</div>

	<footer class="entry-footer">
		<?php the_fly_shop_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
