<?php
/**
 * Template Name: Blog Template Travel
 * Template Post Type: travel-blog, esb_lodge, fish_report
 * Developed for The Fly Shop
 * @package The_Fly_Shop
 * Author: Chris Parsons
 * Author URL: https://steelbridge.io
 */

$the_blogpost_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
$the_post_default = get_bloginfo('template_directory') . '/images/default/default-page-header.png';
$new_blog_logo = get_theme_mod ('blog_logo_new');
$blog_template_logo = get_post_meta(get_the_ID(), 'blog-template-logo', true );
$basic_page_description = get_post_meta(get_the_ID(), 'blog-description-new', true );
$hero_video_url = get_post_meta(get_the_ID(), 'hero-video-url', true );
$default = '';

include_once('post-meta/post-meta-blog.php');

get_header();
?>

    </div> <!-- /.container-fluid. Opening tag found in header.php-->
    </div>

    <?php if ($hero_video_url !== $default) : ?>

    <div id="primary" class="content-area hero-video-wrap basic-template-wrap" style="position: relative;">
    <div id="main" role="main">

    <div class="fades fadeOut" id="narf">
        <section id="heroheader">
        <div class="overlay"></div>

            <video class="h-video" playsinline autoplay muted loop >
            <source src="<?php  echo $hero_video_url; ?>" type="video/mp4">
            </video>

            <div class="container h-100">
                <div class="d-flex flex-direction-column h-100 text-center align-items-center justify-content-center">

                    <div class="w-100 text-white">
                     <?php if($blog_template_logo !== $default) : ?>
                    <img src="<?php  echo $blog_template_logo; ?>" alt="The Fly Shop Logo">
                    <?php  else : ?>
                    <img src="/img/tfs-logo-white.png" alt="The Fly Shop Logo">
                    <?php endif; ?>
                    <h1 class="display-3"><?php the_title(); ?></h1>
                    <?php  if($basic_page_description !== $default ) { ?>
                      <span class="lead mb-0"><?php  echo $basic_page_description; ?></span>
                    <?php  } ?>
                    <h3 class="logo-tel"><a href="tel:18006693474">800 &bull; 669 &bull; 3474</a></h3>
                    </div>

                    <div id="scrollto-icon-basic-template" class="scrollto animated animatedFadeInUp fadeInUp">
                    <a href="#scrollto" class="template more">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
    </div>

    <?php else : ?>

    <div class="outer">
        <div id="blog-travel-template-hero" class="inner">
            <div class="overlay"></div>
            <div id="image" data-0="background-size: 150% auto; opacity:1;" data-380="background-size: 170% auto;"
            data-581="opacity:0;">
                <div class="center-content-flex template-header-content">
                <div class="basicpagelogo signature-header template-class text-center">
                <dl class="landing-hd">

                <dd id="travel-blog-logo" class="dd-1">
                 <?php if( $blog_template_logo !== $default ) : ?>
                 <img src="<?php echo $blog_template_logo; ?>" class="img-responsive-logo" alt="The Fly Shop Logo" >
                 <?php else : ?>
                  <img src="/img/tfs-logo-white.png" class="img-responsive-logo" alt="The Fly Shop Logo" >
                 <?php endif; ?>
                </dd>
 
                <!-- <dd id="travel-blog-logo" class="dd-1"><img src="<?php //echo $new_blog_logo; ?>" class="img-responsive-logo" alt="The Fly Shop Logo" title=""></dd> -->

     <?php endif; ?>

                <dd class="dd-2 travel-blog"><h2 class="logo-tel"><?php echo get_the_title(); ?></h2></dd>

                <?php if ( get_post_meta($post->ID, 'blog-description-new', true) )
                echo '<dd class="dd-3"><p class="template-description">' . $basic_page_description . '</p></dd>' ?>

                <dd class="dd-4"><h3 class="logo-tel"><a href="tel:18006693474">800 &bull; 669 &bull; 3474</a></h3></dd>

                </dl>
                </div>
                </div>
            </div>
        </div>

        <?php do_action('after_body'); ?>
        <span id="scrollto"></span>
        <div class="wrap">
            <div class="container">
                <div id="primary" class="content-area row">
                    <main id="main" class="site-main col-md-8" role="main">

                        <?php
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content-blog', get_post_format() );

                        endwhile; // End of the loop.
                        ?>

                        <?php
                        // Get Author Data
                        $author             = get_the_author();
                        $author_description = get_the_author_meta( 'description' );
                        $author_url         = esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );
                        $author_avatar      = get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'wpex_author_bio_avatar_size', 75 ) );

                        // Only display if author has a description
                        if ( $author_description ) : ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="author-info clr">
                                <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                    <div class="author-info-inner clr">
                                        <div class="col-sm-12">

                                        <div class="media">
                                        <div class="media-left">
                                        <a href="<?php echo esc_url( $author_url ); ?>" rel="author"><?php echo $author_avatar; ?></a>
                                        </div>
                                        <div class="media-body">
                                        <h4 class=" heading media-heading"><span><?php printf( esc_html__( 'Written by %s', 'text_domain' ), esc_html( $author ) ); ?></span></h4>
                                        <div class="author-description">
                                        <p><?php echo wp_kses_post( $author_description ); ?></p>
                                        <p><a href="<?php echo esc_url( $author_url ); ?>" title="<?php esc_html_e( 'View all author posts', 'text_domain' ); ?>"><?php esc_html_e( 'View all author posts', 'text_domain' ); ?> →</a></p>
                                        </div><!-- .author-description -->
                                        </div>
                                        </div>

                                        </div><!-- .author-info-inner -->
                                    </div>
                                    </div><!-- .author-info -->
                                </div>
                                </div>
                                </div>
                            </div>

                            <?php endif; ?>

                            <?php echo '<div id="archive-nav">';
                              //previous_post_link();     next_post_link();
                              //the_post_navigation();
                              wpb_posts_nav();
                            echo '</div>'; ?>

                            <?php
                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                            ?>

                    </main>

                    <div class="col-md-4">
                      <?php
                      $select_sidebar = get_post_meta(get_the_ID(), 'select-sidebar', true );
                      get_sidebar($select_sidebar); ?>
                    </div>
                </div>
            </div>
        </div>

<?php
get_footer();
