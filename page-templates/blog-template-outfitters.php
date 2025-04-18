<?php
/**
 * Template Name: Outfitters Blog Template
 * Template Post Type: flyfishing-news
 * Developed for The Fly Shop
 * @package The_Fly_Shop
 * Author: Chris Parsons
 * Author URL: https://steelbridge.io
 */

$hero_video_url = get_post_meta(get_the_ID(), 'hero-video-url', true );
$outfitter_blogpost_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
$outfitter_blog_logo = get_post_meta(get_the_ID(), 'outfitters-logo', true );
$default_logo = get_theme_mod('default_page_logo');
$jumbotronImage_Outfitters = get_the_post_thumbnail_url($post->ID, 'full');
$default = '';

include('post-meta/post-meta-blog.php');

get_header();
?>
  
  
  </div> <!-- /.container-fluid. Opening tag found in header.php-->

<?php if ($hero_video_url !== $default) : ?>
    <div id="primary" class="content-area hero-video-wrap basic-template-wrap" style="position: relative;">
        <div id="main" role="main">
            <div class="fades fadeOut" id="narf">
                <section id="heroheader" class="video-control">
                    <div class="overlay"></div>
                    <video class="h-video" muted playsinline autoplay loop >
                        <source src="<?php  echo $hero_video_url; ?>" type="video/mp4">
                    </video>
                    <div class="container h-100">
                        <div class="d-flex flex-direction-column h-100 text-center align-items-center justify-content-center">
                            <div class="w-100 text-white tfs-logo-tel-video">
                                <img src="<?php  echo $default_logo; ?>" alt="The Fly Shop Logo">
                                <h1 class="display-6"><?php the_title(); ?></h1>
																														<?php  if($blog_page_description !== $default ) { ?>
                                  <span class="lead mb-0"><?php  echo $blog_page_description; ?></span>
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
  <div class="inner">
    <div id="outfitters-jumbotron" class="outfitters jumbotron jumbotron-fluid">
      <div class="overlay"></div>
      <img class="img-responsive outfitters jumbotron__background" src="<?php echo $jumbotronImage_Outfitters ?>" alt="">
      <div class="container template-outfitters">
  
        <dl class="landing-hd">
          <?php if($outfitter_blog_logo !== '') { ?>
            <dd class="dd-1"><img src="<?php echo $outfitter_blog_logo; ?>" class="img-responsive-logo" alt="" title=""></dd>
          <?php } else { ?>
            <dd class="dd-1"><img src="<?php echo $default_logo; ?>" class="img-responsive-logo" alt="" title=""></dd>
          <?php } ?>
          <dd class="dd-2"><h2 class="logo-tel text-center outfitters"><?php echo get_the_title(); ?></h2></dd>
          <?php if ( get_post_meta($post->ID, 'signature-description', true) )
            echo '<dd class="dd-3"><p class="template-description text-center outfitters">' . $blog_page_description . '</p></dd>' ?>
          <dd class="dd-4"><h3 class="logo-tel text-center outfitters"><a href="tel:18006693474">800 &bull; 669 &bull; 3474</a></h3></dd>
        </dl>
       
      </div>
    </div>
  </div>
  
  <script>
    $(document).ready(function() {
      var s = skrollr.init();
    })
  </script>
    <?php endif; ?>
    <span id="scrollto"></span>
  <div class="wrapper-blog">
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
            
            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
              comments_template();
            endif;
            ?>
        
        </main>
        
        <div class="col-md-4">
          <?php
          $selectsidebar = get_post_meta(get_the_ID(), 'outfitters-select-sidebar', true);
          get_sidebar($selectsidebar);
          //get_sidebar('outfitter'); ?>
        </div>
      </div>
    </div>
  </div>

<?php
get_footer();
