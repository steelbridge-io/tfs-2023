<?php
/**
 * Template Name: Blog Template Basic
 * Template Post Type: post, page, travel_blog, lower48blog, fish_report
 * Developed for The Fly Shop
 * @package The_Fly_Shop
 * Author: Chris Parsons
 * Author URL: https://steelbridge.io
 */

$the_basic_blog_tmp_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
$the_basic_temp_default = get_bloginfo('template_directory') . '/images/default/default-page-header.png';
$blog_logo_basic_temp_upload   = get_theme_mod('blog_logo');
$hero_video_url = get_post_meta(get_the_ID(), 'hero-video-url', true );
$default = '';

include_once('post-meta/post-meta-blog.php');

get_header();
?>
  
  </div> <!-- /.container-fluid. Opening tag found in header.php-->
  </div>
 
  <div id="primary" class="hero-video-wrap basic-template-wrap content-area" style="position: relative;">
    <div id="main" role="main">

    <?php if ($hero_video_url !== $default) : ?>
       <div class="fades fadeOut" id="narf">
        <section id="heroheader" class="video-control">
         <div class="overlay"></div>
         <video class="h-video" playsinline autoplay muted loop preload >
          <source src="<?php  echo $hero_video_url; ?>" type="video/mp4">
         </video>
         <div class="container h-100">
          <div class="d-flex flex-direction-column h-100 text-center align-items-center justify-content-center">
           <div class="w-100 text-white tfs-logo-tel-video">
            <img src="<?php  echo $blog_logo_basic_temp_upload; ?>" alt="The Fly Shop Logo">
            <h1 class="display-6"><?php the_title(); ?></h1>
             <?php  if($blog_description !== $default ) { ?>
                    <span class="lead mb-0"><?php  echo $blog_description; ?></span>
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
      
      <?php elseif ( has_post_thumbnail() ) : ?>
        
        <!-- <header class="parallax-window center-content-flex" data-parallax="scroll" data-image-src="< //echo $the_basic_blog_tmp_img['0']; ?>"> -->
        <div id="blog-template-basic-hero-image" class="template-header">
          <div class="overlay"></div>
          <img src="<?php echo $the_basic_blog_tmp_img['0']; ?>" class="paralaxed img-responsive-width-100 center-block">
          <div class="center-content-flex template-header-content">
            <div class="basicpagelogo signature-header template-class text-center">
              <dl class="landing-hd">
                <dd class="dd-1"><img src="<?php echo $blog_logo_basic_temp_upload; ?>" class="img-responsive-logo" alt="The Fly Shop Logo" title="Basic Logo"></dd>
                <dd class="dd-2"><h2 class="logo-tel"><?php echo get_the_title(); ?></h2></dd>
                
                <?php if(!empty($blog_description)) : ?>
                  <dd class="dd-3"><p class="template-description"><?php echo $blog_description; ?></p></dd>
                <?php endif;  ?>
                
                <dd class="dd-4"><h3 class="logo-tel"><a href="tel:18006693474">800 &bull; 669 &bull; 3474</a></h3></dd>
              </dl>
            </div>
          </div>
        </div>
      
      <?php else: ?>
        
        <header class="parallax-window center-content-flex" data-parallax="scroll" data-image-src="<?php echo $the_basic_temp_default; ?>">
          <div id="blogpage" class="text-center template-class">
            <img src="<?php echo $blog_logo_basic_temp_upload; ?>" class="img-responsive center-block" alt="Staff Logo" title="Blog Logo">
            <h2><?php echo get_the_title();  ?></h2>
            
            <?php if(!empty($blog_description)) : ?>
              <p class="template-description"><?php echo $blog_description; ?></p>
            <?php endif; ?>
            
            <h3>800 &bull; 669 &bull; 3474</h3>
          
          </div>
        </header>
      
      <?php endif; ?>
    
    </div>
  </div>
 
  <span id="scrollto"></span>
  <div class="wrapper">
    <div class="container">
      <div id="primary" class="content-area row">
        <main id="main" class="site-main col-md-8" role="main">
          
          <?php
          while ( have_posts() ) : the_post();
            
            get_template_part( 'template-parts/content-blog', get_post_format() );
          
          endwhile; // End of the loop.
          ?>
          
          <?php
          
          // Call To Action
          if(!empty($blog_cta_title)) :?>
            <!-- CALL TO ACTION ROW -->
            <section id="blog-cta">
              <div class="blog wrapper style4">
                <div class="inner">
                  <header class="text-center">
                    <h2><?php echo $blog_cta_title;?></h2>
                  </header>
                  <div class="blog-cta-content"><?php echo do_shortcode($blog_cta_content); ?></div>
                </div>
              </div>
            </section>
          
          <?php endif;
          
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
        
        <div class="basic-blog-temp-sidebar col-md-3 col-sm-offset-1">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </div>

<?php
get_footer();
