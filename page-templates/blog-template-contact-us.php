<?php
/**
 * Template Name: Blog Template Contact Us
 * Template Post Type: post, page, lower48blog
 * Developed for The Fly Shop
 * @package The_Fly_Shop
 * Author: Chris Parsons
 * Author URL: https://steelbridge.io
 */

$the_blogpost_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
$the_post_default = get_bloginfo('template_directory') . '/images/default/default-page-header.png';
$new_blog_logo = get_theme_mod ('blog_logo_new');

include_once('post-meta/post-meta-blog.php');

get_header();
?>
  
  
  </div> <!-- /.container-fluid. Opening tag found in header.php-->
  
  <div class="outer">
  <div class="inner">
    <div id="image" data-0="background-size: 150% auto; opacity:1;" data-380="background-size: 100% auto; top:0;" data-581="opacity:0; top=401;">
      <div class="center-content-flex template-header-content">
        <div class="basicpagelogo signature-header template-class text-center">
          <dl class="landing-hd">
            <dd class="dd-1"><img src="<?php echo $new_blog_logo ?>" class="img-responsive-logo" alt="" title=""></dd>
            <dd class="dd-2"><h2 class="logo-tel"><?php echo get_the_title(); ?></h2></dd>
            
            <?php if ( get_post_meta($post->ID, 'signature-description', true) )
              echo '<dd class="dd-3"><p class="template-description">' . $basic_page_description . '</p></dd>' ?>
            
            <dd class="dd-4"><h3 class="logo-tel"><a href="tel:18006693474">800 &bull; 669 &bull; 3474</a></h3></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  
  <script>
    $(document).ready(function() {
      var s = skrollr.init();
    })
  </script>
  
  <div class="wrapper">
    <div class="container">
      <div id="primary" class="content-area row">
        <main id="main" class="site-main col-md-8" role="main">
          
          <?php
          while ( have_posts() ) : the_post();
            
            get_template_part( 'template-parts/content-blog', get_post_format() );
          
          endwhile; // End of the loop.
          ?>
          <div id="contact-us-blog" class="container contact-us-blog">
            <div class="wrap">
              <h1>Contact Us</h1>
            </div>
          </div>
          
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
            </div>
          
          <?php endif; ?>
          
          <?php
          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;
          ?>
        
        </main>
        <div class="col-md-4">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </div>

<?php
get_footer();
