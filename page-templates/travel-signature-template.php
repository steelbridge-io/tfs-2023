<?php
/**
 * Template Name: Travel Signature Template
 * Template Post Type: travel_cpt
 * Developed for The Fly Shop
 * @package The_Fly_Shop
 * Author: Chris Parsons
 * Author URL: https://steelbridge.io
 */

$the_post_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
$the_post_default = get_bloginfo('template_directory') . '/images/default/default-page-header.png';
$basic_logo_upload = get_theme_mod ('basic_page_logo');

include_once('post-meta/post-meta-travel-signature.php');
$default = '';
get_header(); ?>
  
  </div> <!-- /.container-fluid. Opening tag found in header.php-->
  
  <div id="primary" class="content-area signature-template" style="position: relative;">
  <div id="main-main" role="main">

<?php if ( has_post_thumbnail() ) : ?>
  
  <section id="banner" class="signature-hero-cont">
  <div class="template-header">
    
    <img src="<?php echo $the_post_img['0']; ?>" class="paralaxed img-responsive-width-100 center-block">
    
    <div id="signature-featured-img-logo" class="center-content-flex template-header-content">
      <div class="basicpagelogo signature-header template-class mega-menu text-center">
        
        <div class="inner">
          <dl class="landing-hd">
            <?php if ( get_post_meta($post->ID, 'signature-travel-logo', true) )
            { echo '<dd class="dd-1"><img src="' . $sig_travel_logo . '" class="img-responsive-logo" alt="The Fly Shop Logo" title="Basic Logo"></dd>'; } ?>
            
            <div id="s3">
              <dd class="dd-2">
                <h2 class="logo-tel"><?php echo get_the_title(); ?></h2>
                <h3 class="logo-tel"><a href="tel:18006693474">800 &bull; 669 &bull; 3474</a></h3>
              </dd>
              
              <?php if ( get_post_meta($post->ID, 'signature-travel-description', true) )
              { echo '<dd class="dd-3"><p class="template-description">' . $signature_travel_description . '</p></dd>'; } ?>
              
            </div>
          </dl>
        </div>
        <div class="scrollto animated animatedFadeInUp fadeInUp">
          <!--<a href="#scrollto" class="template more">Learn More</a>-->
	        <a href="#main" class="more scrolly">Reports are here!</a>
        </div>
      </div>
    </div>
  </div>
  </section>
	<?php else: ?>
  <header class="parallax-window center-content-flex" data-parallax="scroll" data-image-src="<?php echo $the_post_default; ?>">
    
    <div class="basicpagelogo signature-header template-class text-center">
      
      <img src="<?php echo $sig_travel_logo; ?>" class="img-responsive center-block" alt="The Fly Shop Logo" title="Basic Logo">
      
      <h2><?php echo get_the_title(); ?></h2>
      
      <?php if ( get_post_meta($post->ID, 'signature-travel-description', true) )
      {echo '<p class="template-description">' . $signature_travel_description . '</p>';} ?>
      <h3>800 &bull; 669 &bull; 3474</h3>
    </div>
  </header>
	<?php endif;
	if($prime_travel_header_image !== '' || $prime_travel_logo !== '' || $prime_travel_description !== '' ) : ?>
	<section>
	<div id="main"></div>
	<!-- Prime Travel -->
	<div id="prime-travel-travel-template" data-aos="fade-up">
		<div class="container-fluid">
			<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">
					<!-- <img class="img-reponsive center-block" src="<?php //echo $prime_travel_header_image; ?>" alt="Prime Travel Image" title="Prime Travel Image"> -->
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-6">
							<img class="img-reponsive center-block prime-travel-logo" src="<?php echo $prime_travel_logo; ?>" alt="Prime Travel Logo" >
						</div>
						<div class="col-md-6">
							<div class="card">
								<div class="card-body prime-travel-content">
									<?php echo $prime_travel_description; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	</section>
	
	<?php endif; ?>
  
  <!-- <div id="travel-signature-template" class="travel-signature-template container-fluid mb-1618">
    <div class="row">
      <div class="newscta" id="news-cta">
        <div data-aos-duration="2000" data-aos="fade-up" class="news-section">
          <div class="mt-2618 mb-2618 desktop">
            <h2>Latest Travel News</h2> -->
            <?php /*
            $args = array(
              'post_type' => 'travel-blog',
              'post_status' => 'publish',
              'posts_per_page' => 4 );
            
            $loop = new WP_Query($args);
            while ( $loop->have_posts() ) : $loop->the_post();
              echo '<div class="col-md-6">' .
                '<div class="media">' .
                '<div class="col-lg-4">' .
                '<div class="media-left media-top">' .
                '<a href="'. get_permalink() .'" title="'. get_the_title() .'">' . get_the_post_thumbnail( get_the_id()) . '</a>';
              echo    '</div>' .
                '</div>' .
                '<div class="col-lg-8">' .
                '<div class="media-body caption">';
              the_title('<a class="post-permalink" title="'. get_the_title() .'" href="'. get_permalink() .'"><h3>', '</h3></a>');
              echo  '<b>' . get_the_date( 'F dS, Y', get_the_ID()) . '</b>';
              the_excerpt();
              echo  '</div>
                        </div>
                      </div>
                     </div>';
            endwhile;
            wp_reset_postdata(); ?>
          </div>
          
          <div class="mt-2618 mb-2618 mobile">
            <h2>Latest Travel News</h2>
            <?php
            $args = array(
              'post_type' => 'travel-blog',
              'post_status' => 'publish',
              'posts_per_page' => 1 );
            
            $loop = new WP_Query($args);
            while ( $loop->have_posts() ) : $loop->the_post();
              echo '<div class="col-md-6">' .
                '<div class="media">' .
                '<div class="col-lg-4">' .
                '<div class="media-left media-top">' .
                '<a href="'. get_permalink() .'" title="'. get_the_title() .'">' . get_the_post_thumbnail( get_the_id()) . '</a>';
              echo  '</div>' .
                '</div>' .
                '<div class="col-lg-8">' .
                '<div class="media-body caption">';
              the_title('<a class="post-permalink" title="'. get_the_title() .'" href="'. get_permalink() .'"><h3>', '</h3></a>');
              echo  '<b>' . get_the_date( 'F dS, Y', get_the_ID()) . '</b>';
              the_excerpt();
              echo  '</div>
                     </div>
                     </div>
                     </div>';
            endwhile;
            wp_reset_postdata(); */ ?>
        <!--  </div>
        </div>
        <div class="mb-2618">
          <a href="/travelblog-category/travel-blog"><button type="button" class="blog-read-more btn btn-red">Read More News Here</button></a>
        </div>
      </div>
    </div>
  </div> -->

  <!-- body content -->
  <div class="container">
    <!--<div id="scrollto"></div>-->
    <div id="primary" class="content-area row">
      <main id="main-main" class="site-main col-md-12" role="main">
        
        <?php
        // WordPress Blog Content
        while ( have_posts() ) : the_post();
          
          get_template_part( 'template-parts/content', 'page-basic' );
        
        endwhile; // End of the loop.
        ?>
      
      </main>
    </div>
  </div>
  <!-- ==== CAROUSEL ==== -->
  <!-- Item slider-->
  <!-- Javascript is in main.js -->
<?php
// Carousel Images
if(get_post_meta(get_the_ID(), 'signature-travel-csel-checkbox', true) == 'yes') : ?>
  
  <div class="container-fluid">
    
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="carousel carousel-showallmove1 slide" id="itemslider">
          <div class="carousel-inner">
            
            <div class="item active">
              <div class="col-xs-12 col-sm-6 col-md-2">
                <a href="<?php echo $signature_travel_csel_1_link; ?>"><img src="<?php echo esc_url($signature_travel_csel_1_img); ?>" class="img-responsive center-block"></a>
              </div>
            </div>
            
            <div class="item">
              <div class="col-xs-12 col-sm-6 col-md-2">
                <a href="<?php echo $signature_travel_csel_2_link; ?>"><img src="<?php echo esc_url($signature_travel_csel_2_img); ?>" class="img-responsive center-block"></a>
              </div>
            </div>
            
            <div class="item">
              <div class="col-xs-12 col-sm-6 col-md-2">
                <a href="<?php echo $signature_travel_csel_3_link; ?>"><img src="<?php echo esc_url($signature_travel_csel_3_img); ?>" class="img-responsive center-block"></a>
              </div>
            </div>
            
            <div class="item">
              <div class="col-xs-12 col-sm-6 col-md-2">
                <a href="<?php echo $signature_travel_csel_4_link; ?>"><img src="<?php echo esc_url($signature_travel_csel_4_img); ?>" class="img-responsive center-block"></a>
              </div>
            </div>
            
            <div class="item">
              <div class="col-xs-12 col-sm-6 col-md-2">
                <a href="<?php echo $signature_travel_csel_5_link; ?>"><img src="<?php echo esc_url($signature_travel_csel_5_img); ?>" class="img-responsive center-block"></a>
              </div>
            </div>
            
            <div class="item">
              <div class="col-xs-12 col-sm-6 col-md-2">
                <a href="<?php echo $signature_travel_csel_6_link; ?>"><img src="<?php echo esc_url($signature_travel_csel_6_img); ?>" class="img-responsive center-block"></a>
              </div>
            </div>
          
          </div>
          
          <div id="slider-control">
            <a class="left carousel-control" href="#itemslider" data-slide="prev"><i class="fa fa-chevron-left fa-4x" aria-hidden="true"></i></a>
            <a class="right carousel-control" href="#itemslider" data-slide="next"><i class="fa fa-chevron-right fa-4x" aria-hidden="true"></i></a>
          </div>
        
        </div>
      </div>
    </div>
  </div><!-- Item slider end-->
<?php endif; ?>
  
  <!-- ==== GRID SECTION #1-10 ==== -->
  <div id="travel-sig-grid" class="pt-1618 container-fluid signature_bg_color">
<?php
if($signature_travel_section_1_title !== '') :?>
  <div class="row travel-signature-template-row">
  <div class="col-md-6 col-lg-4 one">
    <div class="thumbnail signature-text-color">
      <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_1_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_1_title; ?></a></h3>
      <a class="thumbnail-h3" href="<?php echo $signature_travel_section_1_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_1_image; ?>"></a>
      <section id="" class="widget-section">
        
        <?php if ($signature_travel_1_sub_title !== '' || $signature_travel_1_caption !== '') {
          echo '<div class="caption sig-caption">
                            <h4 class="widget-title">' . $signature_travel_1_sub_title . '</h4>
                            <p class="text-justify">' . $signature_travel_1_caption . '</p>
                          </div>';
        } ?>
      </section>
    </div>
  </div>
  <?php if($signature_travel_section_2_title !== '' || $signature_travel_2_image !== '' ) :?>
    <div class="col-md-6 col-lg-4 two">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_2_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_2_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_2_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_2_image; ?>"></a>
        <section id="" class="widget-section">
          <?php //if($signature_travel_section_2_sub_title !== '' || $signature_travel_section_2_caption !== '') {
						if($signature_travel_2_sub_title !== '' || $signature_travel_2_caption !== '') {
            echo '<div class="caption sig-caption">
                  <h4 class="widget-title">' . $signature_travel_2_sub_title . '</h4>
                  <p class="text-justify">' . $signature_travel_2_caption . '</p>
                </div>';
          } ?>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_3_title !== '' || $signature_travel_3_image !== '' ) : ?>
    <div class="col-md-6 col-lg-4 three">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_3_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_3_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_3_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_3_image; ?>"></a>
        <section id="" class="widget-section">
          <?php if($signature_travel_3_sub_title !== '' || $signature_travel_3_caption !== '' ) {
            echo '<div class="caption sig-caption">
                      <h4 class="widget-title">' . $signature_travel_3_sub_title . '</h4>
                      <p class="text-justify">' . $signature_travel_3_caption . '</p>
                      </div>';
          } ?>
        </section>
      </div>
    </div>
  <?php endif; ?>
  <?php  if($signature_travel_section_4_title !== '' || $signature_travel_4_image !== '' ) : ?>
    <div class="col-md-6 col-lg-4 four">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_4_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_4_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_4_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_4_image; ?>"></a>
        <section id="" class="widget-section">
          <?php if($signature_travel_4_sub_title !== '' || $signature_travel_4_caption !== '' ) {
            echo '<div class="caption sig-caption">
                        <h4 class="widget-title">' . $signature_travel_4_sub_title . '</h4>
                        <p class="text-justify">' . $signature_travel_4_caption . '</p>
                        </div>';
          } ?>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_5_title !== '' || $signature_travel_5_image !== '') : ?>
    <div class="col-md-6 col-lg-4 five">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_5_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_5_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_5_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_5_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_5_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_5_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_6_title !== '' || $signature_travel_6_image  !== '') : ?>
    <div class="col-md-6 col-lg-4 six">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_6_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_6_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_6_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_6_image; ?>"></a>
        <section id="" class="widget-section">
          <?php if($signature_travel_6_sub_title !== '' || $signature_travel_6_caption !== '') {
            echo '<div class="caption sig-caption">
                    <h4 class="widget-title">' . $signature_travel_6_sub_title . '</h4>
                    <p class="text-justify">' . $signature_travel_6_caption . '</p>
                  </div>';
          } ?>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_7_title !== '' || $signature_travel_7_image !== '') : ?>
    <div class="col-md-6 col-lg-4 seven">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_7_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_7_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_7_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_7_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_7_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_7_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_8_title !== '' || $signature_travel_8_image !== '') : ?>
    <div class="col-md-6 col-lg-4 eight">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_8_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_8_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_8_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_8_image; ?>"></a>
        <section id="" class="widget-section">
          <?php if($signature_travel_8_sub_title !== '' || $signature_travel_8_caption !== '') {
            echo '<div class="caption sig-caption">
                        <h4 class="widget-title">' . $signature_travel_8_sub_title . '</h4>
                        <p class="text-justify">' . $signature_travel_8_caption . '</p>
                        </div>';
          } ?>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_9_title !== '' || $signature_travel_9_image !== '') : ?>
    <div class="col-md-6 col-lg-4 nine">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_9_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_9_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_9_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_9_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_9_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_9_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_10_title !== '') : ?>
    <div class="col-md-6 col-lg-4 ten">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_10_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_10_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_10_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_10_image; ?>"></a>
        <section id="" class="widget-section">
          <?php if($signature_travel_10_sub_title !== '' || $signature_travel_10_caption !== '') {
            echo '<div class="caption sig-caption">
                    <h4 class="widget-title">' . $signature_travel_10_sub_title . '</h4>
                    <p class="text-justify">' . $signature_travel_10_caption . '</p>
                  </div>';
          } ?>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_11_title !== '' || $signature_travel_11_image !== '') : ?>
    <div class="col-md-6 col-lg-4 eleven">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_11_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_11_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_11_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_11_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_11_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_11_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_12_title !== '') : ?>
    <div class="col-md-6 col-lg-4 tweleve">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_12_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_12_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_12_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_12_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_12_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_12_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if(get_post_meta($post->ID,'signature-travel-section-13-title',true)) : ?>
    <div class="col-md-6 col-lg-4 thirteen">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_13_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_13_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_13_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_13_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_13_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_13_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if(get_post_meta($post->ID,'signature-travel-section-14-title',true)) : ?>
    <div class="col-md-6 col-lg-4 fouteen">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_14_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_14_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_14_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_14_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_14_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_14_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if(get_post_meta($post->ID,'signature-travel-section-15-title',true)) : ?>
    <div class="col-md-6 col-lg-4 fifteen">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_15_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_15_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_15_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_15_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_15_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_15_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if(get_post_meta($post->ID,'signature-travel-section-16-title',true)) : ?>
    <div class="col-md-6 col-lg-4 sixteen">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_16_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_16_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_16_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_16_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_16_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_16_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if(get_post_meta($post->ID,'signature-travel-section-17-title',true)) : ?>
    <div class="col-md-6 col-lg-4 seventeen">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_17_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_17_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_17_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_17_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_17_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_17_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if(get_post_meta($post->ID,'signature-travel-section-18-title',true)) : ?>
    <div class="col-md-6 col-lg-4 eighteen">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_18_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_18_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_18_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_18_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_18_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_18_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if(get_post_meta($post->ID,'signature-travel-section-19-title',true)) : ?>
    <div class="col-md-6 col-lg-4 nineteen">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_19_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_19_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_19_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_19_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_19_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_19_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if(get_post_meta($post->ID,'signature-travel-section-20-title',true)) : ?>
    <div class="col-md-6 col-lg-4 twenty">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_20_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_20_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_20_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_20_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_20_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_20_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if(get_post_meta($post->ID,'signature-travel-section-21-title',true)) : ?>
    <div class="col-md-6 col-lg-4 twentyone">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_21_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_21_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_21_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_21_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_21_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_21_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if(get_post_meta($post->ID,'signature-travel-section-22-title',true)) : ?>
    <div class="row">
    <div class="col-md-6 col-lg-4 twentytwo">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_22_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_22_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_22_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_22_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_22_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_22_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if(get_post_meta($post->ID,'signature-travel-section-23-title',true)) : ?>
    <div class="col-md-6 col-lg-4 twentythree">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_23_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_23_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_23_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_23_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_23_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_23_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_24_title !== '' || $signature_travel_24_image !== '' ) : ?>
    <div class="col-md-6 col-lg-4 twentyfour">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_24_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_24_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_24_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_24_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_24_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_24_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_25_title !== '' || $signature_travel_25_image !== '' ) : ?>
    <div class="col-md-6 col-lg-4 twentyfive">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_25_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_25_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_25_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_25_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_25_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_25_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_26_title !== '' || $signature_travel_26_image !== '' ) :  ?>
    <div class="col-md-6 col-lg-4 twentysix">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_26_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_26_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_26_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_26_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_26_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_26_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_27_title !== '' || $signature_travel_27_image !== '' ) : ?>
    <div class="col-md-6 col-lg-4 twentyseven">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_27_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_27_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_27_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_27_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_27_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_27_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_28_title !== '' || $signature_travel_28_image !== '' ) : ?>
    <div class="col-md-6 col-lg-4 twentyeight">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_28_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_28_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_28_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_28_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_28_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_28_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_29_title !== '' || $signature_travel_29_image !== '' ) : ?>
    <div class="col-md-6 col-lg-4 twentynine">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_29_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_29_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_29_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_29_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_29_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_29_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_30_title !== '' || $signature_travel_30_image !== '' ) : ?>
    <div class="col-md-6 col-lg-4 thirty">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_30_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_30_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_30_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_30_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_30_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_30_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_31_title !== '' || $signature_travel_31_image !== '' ) : ?>
    <div class="col-md-6 col-lg-4 thirtyone">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_31_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_31_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_31_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_31_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_31_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_31_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_32_title !== '' || $signature_travel_32_image !== '' ) : ?>
    <div class="col-md-6 col-lg-4 thirtytwo">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_32_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_32_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_32_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_32_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_32_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_32_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_33_title !== '' || $signature_travel_33_image !== '' ) : ?>
    <div class="col-md-6 col-lg-4 thirtythree">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_33_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_33_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_33_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_33_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_33_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_33_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_34_title !== '' || $signature_travel_34_image !== '' ) : ?>
    <div class="col-md-6 col-lg-4 thirtyfour">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_34_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_34_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_34_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_34_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_34_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_34_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_35_title !== '' || $signature_travel_35_image !== '' ) : ?>
    <div class="col-md-6 col-lg-4 thirtyfive">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_35_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_35_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_35_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_35_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_35_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_35_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_36_title !== '' || $signature_travel_36_image !== '' ) : ?>
    <div class="col-md-6 col-lg-4 thirtysix">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_36_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_36_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_36_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_36_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_36_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_36_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_37_title !== '' || $signature_travel_37_image !== '' ) : ?>
    <div class="col-md-6 col-lg-4 thirtyseven">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_37_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_37_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_37_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_37_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_37_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_37_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_38_title !== '' || $signature_travel_38_image !== '' ) : ?>
    <div class="col-md-6 col-lg-4 thirtyeight">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_38_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_38_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_38_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_38_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_38_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_38_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_39_title !== '' || $signature_travel_39_image !== '' ) : ?>
    <div class="col-md-6 col-lg-4 thirtynine">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_39_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_39_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_39_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_39_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_39_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_39_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_40_title !== '' || $signature_travel_40_image !== '' ) : ?>
    <div class="col-md-6 col-lg-4 fourty">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_40_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_40_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_40_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_40_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_40_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_40_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_41_title !== '' || $signature_travel_41_image !== '' ) : ?>
    <div class="col-md-6 col-lg-4 fourtyone">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_41_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_41_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_41_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_41_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_41_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_41_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
  <?php endif;
  if($signature_travel_section_42_title !== '' || $signature_travel_42_image !== '' ) : ?>
    <div class="col-md-6 col-lg-4 fourtytwo">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_travel_section_42_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_travel_section_42_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_travel_section_42_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_travel_42_image; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption sig-caption">
            <h4 class="widget-title"><?php echo $signature_travel_42_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_travel_42_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
    <?php endif; ?>
  </div><!-- /.row -->
<?php endif; ?>
	
	<!-- Modal -->
	<div class="modal fade" id="primeTravelTempmodal" tabindex="-1" aria-labelledby="primeTravelTempmodalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<div class="modal-title" id="primeTravelTempmodalLabel"><img src="<?php echo get_theme_mod('pt_mdl_logo');  ?>" alt="The Fly Shop"></div>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><!--<i class="lni lni-close"></i>--></button>
				</div>
				<div class="modal-body">
					<?php echo do_shortcode('[gravityform id="6" title="true" description="true"]'); ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	
	
<?php
get_footer();
