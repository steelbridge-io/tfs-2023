<?php
/**
 * Template Name: Survery Template
 * Template Post Type: post, page, travel_cpt, schools_cpt, adventures, guide_service, fishcamp_cpt, travel_blog
 * Developed for The Fly Shop
 * @package The_Fly_Shop
 * Author: Chris Parsons
 * Author URL: https://steelbridge.io
 */
get_header()
?>

    </div> <!-- /.container-fluid. Opening tag found in header.php-->

    <!-- Header Image -->
    <div id="header-<?php the_ID(); ?>" <?php post_class('default-template survey-default-template'); ?>>
        <?php if ( has_post_thumbnail() ) { ?>
            <header class="entry-header basic-page survey-page text-center">
                <?php
                $thumbnail_id = get_post_thumbnail_id( $post->ID );
                $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), ''); ?>
                <img class="survey-feat-img" src="<?php echo $image[0]; ?>" alt="<?php echo $alt; ?>" >

                <div class="survey-title-cont">
                <?php $survey_logo = get_theme_mod('survey-logo' ); ?>
                 <img src="<?php echo $survey_logo; ?>" class="img-responsive survey-logo
                 center-block" align="center" alt="The Fly Shop">
                <?php
                if ( is_single() ) :
                    the_title( '<h1 class="entry-title">', '</h1>' );
                else :
                    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif; ?>

                </div><!-- .survey-title-cont -->

            </header><!-- .entry-header -->
        <?php } else { ?>
            <header class="entry-header basic-page survey-page survey-page-no-feat-img text-center">

                <div class="survey-title-cont-no-feat-image">

                <?php $survey_logo = get_theme_mod('survey-logo' ); ?>
                <img src="<?php echo $survey_logo; ?>" class="img-responsive survey-logo
                 center-block" align="center" alt="The Fly Shop">
                <?php
                if ( is_single() ) :
                    the_title( '<h1 class="entry-title">', '</h1>' );
                else :
                    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif; ?>

                </div>

            </header>
    <?php } ?>
    </div>

    <div id="primary" class="content-area survey-content-area row">
            <div class="container survey-content">
            <main id="survey-main" class="survey-site-main">

                <?php
                while ( $wp_query->have_posts() ) : $wp_query->the_post();

                    get_template_part( 'template-parts/content', 'survey' );

                    // the_post_navigation();
                  /*  if(term_exists('polls')) {
                        echo polls_the_post_navigation();
                    } else {
                        echo basic_the_post_navigation();
                    } */
                    ?>

                    <div id="author-info" class="survey-author well">
                    <div class="row">
                        <div class="col-md-2 col-sm-12">
                        <div id="author-avatar">
                        <?php echo get_avatar( get_the_author_meta('user_email'), '', '' ); ?>
                        </div>
                        </div>

                        <div class="col-md-9 col-sm-12">
                        <div id="author-description">
                        <h3><?php the_author_link(); ?></h3>
                            <div class="author_desc">
                            <?php the_author_meta('description'); ?>
                            </div>
                            <!-- <div class="author_posts">
                            <?php //the_author(); ?> has written <?php //the_author_posts(); ?> posts
                            on <?php// bloginfo ('name'); ?>.&nbsp;See all posts by  <?php //the_author_posts_link(); ?>
                            </div> -->
                        </div>
                        </div>

                    </div>
                    </div>


    <?php
    endwhile; // End of the loop.
                ?>
            </main><!-- #main -->

        </div>
        <?php // get_sidebar('survey'); ?>
    </div><!-- #primary -->

<?php
get_footer();
