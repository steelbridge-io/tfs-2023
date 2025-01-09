<?php
  /**
   * Template Name: Hero Template
   * Template Post Type: post, page, travel_cpt, schools_cpt, adventures, guide_service, fishcamp_cpt, travel_blog, lower48, lower48blog, esb_lodge
   * Developed for The Fly Shop
   * @package The_Fly_Shop
   * Author: Chris Parsons
   * Author URL: https://steelbridge.io
   */
  
  get_header();
  $basic_logo_upload = get_theme_mod ('basic_page_logo');
  $hero_description = get_post_meta(get_the_ID(), 'hero-video-image-description', true );
  $hero_video_url = get_post_meta(get_the_ID(), 'hero-video-url', true );
	 $hero_temp_image  = get_post_meta(get_the_ID(), 'hero-temp-image', true );
  $default  = '';
  ?>
 </div>
  </div>
  <div class="fades fadeOut" id="narf">
  <section id="heroheader" class="heroheader-nccffi video-control">
    <div class="overlay"></div>
	  <?php if ($hero_video_url !== $default) { ?>
    <video class="h-video" playsinline autoplay muted loop >
	    <source src="<?php  echo $hero_video_url; ?>" type="video/mp4">
    </video>
	  <?php  } else { ?>
		<img class="hero-temp-img" src="<?php echo $hero_temp_image; ?>" alt="The Fly Shop" >
		<?php } ?>
    <div class="container h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <img src="<?php  echo $basic_logo_upload; ?>" alt="The Fly Shop Logo">
          <h1 class="display-3"><?php  the_title(); ?></h1>
          <?php  if($hero_description !== $default ) { ?>
          <span class="lead mb-0"><?php  echo $hero_description; ?></span>
          <?php  } ?>
          <h3 class="logo-tel"><a href="tel:18006693474">800 &bull; 669 &bull; 3474</a></h3>
        </div>
      </div>
    </div>
  </section>
  </div>
  
  <div id="hero-template-cont">
		<div class="container">
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
  </div>

<?php
  get_footer();
