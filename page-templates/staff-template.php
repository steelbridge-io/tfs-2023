<?php
  /*
      * Template Name: Staff Template
      * Template Post Type: post, page
      * Developed for The Fly Shop
      * Author: Chris Parsons
      * Author URL: https://steelbridgemedia.com
  */
  $the_post_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
  $the_post_default = get_bloginfo('template_directory') . '/images/default/default-page-header.png';
  
  include_once('post-meta/post-meta-staff.php');
  
  get_header(); ?>
  
  </div> <!-- /.container-fluid. Opening tag found in header.php-->

<?php if ( has_post_thumbnail() ) : ?>
  
  <div class="parallax-window center-content-flex" data-parallax="scroll" data-image-src="<?php echo $the_post_img['0']; ?>">
    <div class="stafflogo template-class text-center">
      <div class="inner">
      <dl class="landing-hd">
        
        <dd class="dd-1"><img src="<?php echo $staff_logo; ?>" class="img-responsive center-block" alt="Staff Logo" title="Staff Logo"></dd>
        
        <dd class="dd-2"><h2 class="logo-tel"><?php echo get_the_title(); ?></h2></dd>
        
        <?php if ( get_post_meta($post->ID, 'staff-description', true) )
          echo '<dd class="dd-3"><p class="template-description">' . $staff_description . '</p></dd>' ?>
        
        <dd class="dd-4"><h3 class="logo-tel">800 &bull; 669 &bull; 3474</h3></dd>
      
      </dl>
      </div>
      <div class="scrollto animated animatedFadeInUp fadeInUp">
        <a href="#scrollto" class="template more">Learn More</a>
      </div>
    </div>
  </div>

<?php else: ?>
  
  <div class="parallax-window center-content-flex" data-parallax="scroll" data-image-src="<?php echo $the_post_default; ?>">
    <div class="stafflogo text-center">
      <img src="<?php echo $staff_logo; ?>" class="img-responsive center-block" alt="Staff Logo" title="Staff Logo">
      <h1><?php echo get_the_title(); ?></h1>
    </div>
  </div>

<?php endif; ?>
  
  <div class="container-fluid">
    <div class="container">
      <div id="scrollto"></div>
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
  </div>
  
  <div class="container-fluid staff_bg_color">
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail staff-text-color">
        <h3 class="widget-title"><?php echo $staff_image_1_title; ?></h3>
        <img src="<?php echo $staff_image_1; ?>">
        <section id="" class="widget">
          <div class="caption">
            <h4 class="widget-title"><?php echo $staff_image_1_sub_title; ?></h4>
            <p class="text-justify"><?php echo $staff_image_1_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail staff-text-color">
        <h3 class="widget-title"><?php echo $staff_image_2_title; ?></h3>
        <img src="<?php echo $staff_image_2; ?>">
        <section id="" class="widget">
          <div class="caption">
            <h4 class="widget-title"><?php echo $staff_image_2_sub_title; ?></h4>
            <p class="text-justify"><?php echo $staff_image_2_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail staff-text-color">
        <h3 class="widget-title"><?php echo $staff_image_3_title; ?></h3>
        <img src="<?php echo $staff_image_3; ?>">
        <section id="" class="widget">
          <div class="caption">
            <h4 class="widget-title"><?php echo $staff_image_3_sub_title; ?></h4>
            <p class="text-justify"><?php echo $staff_image_3_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  </div>

<?php
  // Double centered images
  if(get_post_meta(get_the_ID(), 'staff-456-checkbox', true) == 'yes') :?>
    
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_4_title; ?></h3>
          <img src="<?php echo $staff_image_4; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_4_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_4_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_5_title; ?></h3>
          <img src="<?php echo $staff_image_5; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_5_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_5_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_6_title; ?></h3>
          <img src="<?php echo $staff_image_6; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_6_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_6_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
    </div>
  
  <?php endif; ?>

<?php
  // Double centered images
  if(get_post_meta(get_the_ID(), 'staff-789-checkbox', true) == 'yes') :?>
    
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_7_title; ?></h3>
          <img src="<?php echo $staff_image_7; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_7_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_7_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_8_title; ?></h3>
          <img src="<?php echo $staff_image_8; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_8_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_8_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_9_title; ?></h3>
          <img src="<?php echo $staff_image_9; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_9_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_9_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
    </div>
  
  <?php endif; ?>

<?php
  // Images 10, 11, 12
  if(get_post_meta(get_the_ID(), 'staff-101112-checkbox', true) == 'yes') :?>
    
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_10_title; ?></h3>
          <img src="<?php echo $staff_image_10; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_10_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_10_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_11_title; ?></h3>
          <img src="<?php echo $staff_image_11; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_11_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_11_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_12_title; ?></h3>
          <img src="<?php echo $staff_image_12; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_12_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_12_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
    </div>
  
  <?php endif; ?>

<?php
  // Images 13, 14, 15
  if(get_post_meta(get_the_ID(), 'staff-131415-checkbox', true) == 'yes') :?>
    
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_13_title; ?></h3>
          <img src="<?php echo $staff_image_13; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_13_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_13_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_14_title; ?></h3>
          <img src="<?php echo $staff_image_14; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_14_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_14_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_15_title; ?></h3>
          <img src="<?php echo $staff_image_15; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_15_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_15_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
    </div>
  
  <?php endif; ?>

<?php
  // Images 16, 17, 18
  if(get_post_meta(get_the_ID(), 'staff-161718-checkbox', true) == 'yes') :?>
    
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_16_title; ?></h3>
          <img src="<?php echo $staff_image_16; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_16_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_16_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_17_title; ?></h3>
          <img src="<?php echo $staff_image_17; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_17_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_17_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_18_title; ?></h3>
          <img src="<?php echo $staff_image_18; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_18_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_18_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
    </div>
  
  <?php endif; ?>

<?php
  // Images 19, 20, 21
  if(get_post_meta(get_the_ID(), 'staff-192021-checkbox', true) == 'yes') :?>
    
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_19_title; ?></h3>
          <img src="<?php echo $staff_image_19; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_19_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_19_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_20_title; ?></h3>
          <img src="<?php echo $staff_image_20; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_20_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_20_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_21_title; ?></h3>
          <img src="<?php echo $staff_image_21; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_21_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_21_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
    </div>
  
  <?php endif; ?>

<?php
  // Images 22, 23, 24
  if(get_post_meta(get_the_ID(), 'staff-222324-checkbox', true) == 'yes') :?>
    
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_22_title; ?></h3>
          <img src="<?php echo $staff_image_22; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_22_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_22_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_23_title; ?></h3>
          <img src="<?php echo $staff_image_23; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_23_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_23_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_24_title; ?></h3>
          <img src="<?php echo $staff_image_24; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_24_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_24_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
    </div>
  
  <?php endif; ?>

<?php
  //Images 25, 26, 27 -->
  if(get_post_meta(get_the_ID(), 'staff-252627-checkbox', true) == 'yes') :?>
    
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_25_title; ?></h3>
          <img src="<?php echo $staff_image_25; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_25_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_25_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_26_title; ?></h3>
          <img src="<?php echo $staff_image_26; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_26_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_26_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_27_title; ?></h3>
          <img src="<?php echo $staff_image_27; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_27_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_27_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
    </div>
  
  <?php endif; ?>

<?php
  // Images 28, 29, 30
  if(get_post_meta(get_the_ID(), 'staff-282930-checkbox', true) == 'yes') :?>
    
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_28_title; ?></h3>
          <img src="<?php echo $staff_image_28; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_28_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_28_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_29_title; ?></h3>
          <img src="<?php echo $staff_image_29; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_29_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_29_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_image_30_title; ?></h3>
          <img src="<?php echo $staff_image_30; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_image_30_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_image_30_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
    </div>
  
  <?php endif; ?>
  
  <!-- === Double centered images === -->
<?php
  // Double centered images
  if(get_post_meta(get_the_ID(), 'staff-centered-l-r-checkbox', true) == 'yes') :?>
    
    <div class="row">
      <div class="col-md-4 col-md-offset-2">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_centered_left_title; ?></h3>
          <img src="<?php echo $staff_image_centered_left; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_centered_left_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_centered_left_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_centered_right_title; ?></h3>
          <img src="<?php echo $staff_image_centered_right; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_centered_right_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_centered_right_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
    </div>
  
  <?php endif; ?>
  
  <!-- === Single centered image === -->
<?php
  // Double centered images
  if(get_post_meta(get_the_ID(), 'staff-centered-checkbox', true) == 'yes') :?>
    
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="thumbnail staff-text-color">
          <h3 class="widget-title"><?php echo $staff_centered_title; ?></h3>
          <img src="<?php echo $staff_image_centered; ?>">
          <section id="" class="widget">
            <div class="caption">
              <h4 class="widget-title"><?php echo $staff_centered_sub_title; ?></h4>
              <p class="text-justify"><?php echo $staff_centered_caption; ?></p>
            </div>
          </section>
        </div>
      </div>
    </div>
    </div>
  
  <?php endif; get_footer(); ?>