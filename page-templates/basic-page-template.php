<?php
/**
 * Template Name: Basic Template
 * Template Post Type: post, page, travel_cpt, schools_cpt, adventures, guide_service, fishcamp_cpt, travel_blog, lower48, lower48blog
 * Developed for The Fly Shop
 * @package The_Fly_Shop
 * Author: Chris Parsons
 * Author URL: https://steelbridge.io
 */

$basic_the_post_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
$the_post_default = get_bloginfo('template_directory') . '/images/default/default-page-header.png';
$basic_logo_upload = get_theme_mod ('basic_page_logo');

include_once('post-meta/post-meta-basic.php');
get_header(); ?>

</div> <!-- /.container-fluid. Opening tag found in header.php-->
<div id="primary" class="content-area" style="position: relative;">
  <div id="main" role="main">
    
    <?php if ( has_post_thumbnail() ) : ?>
      
      <div class="template-header">
        <img src="<?php echo $basic_the_post_img['0']; ?>" class="paralaxed img-responsive-width-100 center-block">
        <div class="center-content-flex template-header-content">
          <div class="basicpagelogo signature-header template-class text-center">
            <div class="inner">
              <dl class="landing-hd">
                <dd class="dd-1"><img src="<?php echo $basic_logo_upload; ?>" class="img-responsive-logo" alt="The Fly Shop Logo" title="Basic Logo"></dd>
                <dd class="dd-2"><h2 class="logo-tel"><?php echo get_the_title(); ?></h2></dd>
                
                <?php if ( get_post_meta($post->ID, 'basic-page-description', true) )
                  echo '<dd class="dd-3"><p class="template-description">' . $basic_page_description . '</p></dd>' ?>
                
                <dd class="dd-4"><h3 class="logo-tel"><a href="tel:18006693474">800 &bull; 669 &bull; 3474</a></h3></dd>
                <!-- <a href="#main" class="more scrolly">Learn More</a> -->
              </dl>
            </div>
            <div class="scrollto animated animatedFadeInUp fadeInUp">
              <a href="#scrollto" class="template more">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    
    <?php else: ?>
      
      <div class="parallax-window center-content-flex" data-parallax="scroll" data-image-src="<?php echo $the_post_default; ?>">
        
        <div id="basicpage" class="basicpagelogo text-center">
          <img src="<?php echo $basic_logo_upload; ?>" class="img-responsive center-block" alt="The Fly Shop Logo" title="Basic Logo">
          <h2><?php echo get_the_title();  ?></h2>
          
          <?php if ( get_post_meta($post->ID, 'basic-page-description', true) )
            echo '<p class="template-description">' . $basic_page_description . '</p>' ?>
          
          <h3>800 &bull; 669 &bull; 3474</h3>
        </div>
      </div>
    
    <?php endif; ?>
  
  </div>
</div>

<div class="container-fluid basic-page-template">
  <div id="scrollto" class="container">
    <div id="primary" class="content-area row">
      <main id="main" class="site-main col-md-12" role="main">
        <?php
        while ( have_posts() ) : the_post();
          
          get_template_part( 'template-parts/content', 'page-basic' );
          
          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;
        
        endwhile; // End of the loop.
        ?>
      </main>
    </div>
  </div>
  
  <?php
  // Call To Action
  if(!empty($basic_cta_title) ):?>
  <!-- CALL TO ACTION ROW -->
  <div id="page-wrapper" style="background-image:url(<?php echo $the_post_img['0']; ?>);">
    <section id="cta" class="wrapper style4">
      <div class="inner">
        <header class="text-center">
          <h2><?php echo $basic_cta_title;?></h2>
          <p><?php echo do_shortcode($basic_cta_content);?></p>
        </header>
      </div>
    </section>
    
    <?php
    get_footer();
    
    echo '</div>';
    
    else: get_footer();
    endif;
    ?>



