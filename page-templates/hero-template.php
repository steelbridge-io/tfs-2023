<?php
  /**
   * Template Name: Hero Template
   * Template Post Type: post, page, travel_cpt, schools_cpt, adventures, guide_service, fishcamp_cpt, travel_blog, lower48, lower48blog
   * Developed for The Fly Shop
   * @package The_Fly_Shop
   * Author: Chris Parsons
   * Author URL: https://steelbridge.io
   */
  
  get_header();
  $basic_logo_upload = get_theme_mod ('basic_page_logo');
  $hero_description = get_post_meta(get_the_ID(), 'hero-video-image-description', true );
  $hero_video_url = get_post_meta(get_the_ID(), 'hero-video-url', true );
  $default  = '';
  ?>
  </div>
  </div>
  <div id="narf">
  <section id="hero-header">
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <?php if ($hero_video_url !== $default) { ?>
        <source src="<?php echo $hero_video_url; ?>" type="video/mp4">
      <?php  } else { ?>
        <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
    <?php } ?>
    </video>
    <div class="container h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <img src="<?php echo $basic_logo_upload; ?>" alt="The Fly Shop Logo">
          <h1 class="display-3"><?php the_title(); ?></h1>
          <?php if($hero_description !== $default ) { ?>
          <span class="lead mb-0"><?php echo $hero_description; ?></span>
          <?php } ?>
          <h3 class="logo-tel"><a href="tel:18006693474">800 &bull; 669 &bull; 3474</a></h3>
        </div>
      </div>
    </div>
  </section>
  </div>
  
  <div class="container-fluid">
    <div class="row hero-template-content">
      <div class="col-md-9">
  
        
        <?php
          while ( have_posts() ) : the_post();
  
            get_template_part( 'template-parts/content', 'hero' );
  
          endwhile; // End of the loop.
        ?>
      
      </div>
      <div class="col-md-3">
      <?php
      $get_hero_sidebar = get_post_meta(get_the_ID(), 'hero-template-select-sidebar', true );
      get_sidebar($get_hero_sidebar);
      ?>
      </div>
    </div>
  </div>
  <div class="container-fluid">

<?php
  get_footer();
