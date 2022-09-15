<?php
/**
 * Template Name: Holiday Template
 * Template Post Type: post, page, travel_cpt, schools_cpt, adventures, guide_service, fishcamp_cpt
 * Developed for The Fly Shop
 * @package The_Fly_Shop
 * Author: Chris Parsons
 * Author URL: https://steelbridge.io
 */

$the_post_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
$the_post_default = get_bloginfo('template_directory') . '/images/default/default-page-header.png';
$basic_logo_upload = get_theme_mod ('basic_page_logo');

include_once('post-meta/post-meta-holiday.php');
get_header(); ?>

  </div> <!-- /.container-fluid. Opening tag found in header.php-->

  <div id="primary" class="content-area" style="position: relative;">
  <div id="main" role="main">

    <?php if ( has_post_thumbnail() ) : ?>

      <!--<header class="parallax-window center-content-flex" data-parallax="scroll" data-image-src="< //echo $the_post_img['0']; ?>">-->
      <!--<header class="parallax-window center-content-flex" style="background-image: url(' echo $the_post_img['0']; ?>'); background-size:cover;">-->

      <div class="template-header">

        <img src="<?php echo $the_post_img['0']; ?>" class="paralaxed img-responsive-width-100 center-block">

        <div class="center-content-flex template-header-content">
          <div class="basicpagelogo holiday-header template-class text-center">

            <div class="inner">
            <dl class="landing-hd">
              <dd class="dd-1"><img src="<?php echo $sig_logo; ?>" class="img-responsive-logo" alt="The Fly Shop Logo" title="Basic Logo"></dd>

              <dd class="dd-2"><h2 class="logo-tel"><?php echo get_the_title(); ?></h2></dd>

              <?php if ( get_post_meta($post->ID, 'holiday-description', true) )
                echo '<dd class="dd-3"><p class="template-description">' . $holiday_description . '</p></dd>' ?>

              <dd class="dd-4"><h3 class="logo-tel"><a href="tel:18006693474">800 &bull; 669 &bull; 3474</a></h3></dd>
            </dl>
            </div>
            <div class="scrollto animated animatedFadeInUp fadeInUp">
              <a href="#scrollto" class="template more">Learn More</a>
            </div>
          </div>
        </div>
      </div>

    <?php else: ?>

      <header class="parallax-window center-content-flex" data-parallax="scroll" data-image-src="<?php echo $the_post_default; ?>">

        <div class="basicpagelogo holiday-header template-class text-center">

          <img src="<?php echo $sig_logo; ?>" class="img-responsive center-block" alt="The Fly Shop Logo" title="Basic Logo">

          <h2><?php echo get_the_title(); ?></h2>

          <?php if ( get_post_meta($post->ID, 'holiday-description', true) )
            echo '<p class="template-description">' . $holiday_description . '</p>' ?>

          <h3>800 &bull; 669 &bull; 3474</h3>

        </div>

      </header>

    <?php endif; ?>
    <div class="holiday-blog-container blog-container">
      <div class="container">
        <div id="scrollto"></div>
        <div id="primary" class="content-area row">
          <main id="main" class="site-main col-md-12" role="main">

            <?php
            // WordPress Blog Content
            while ( have_posts() ) : the_post();

              get_template_part( 'template-parts/content', 'holiday' );

            endwhile; // End of the loop.
            ?>

          </main>
        </div>
      </div>
    </div>
    <!-- ==== CAROUSEL ==== -->
    <!-- Item slider-->
    <!-- Javascript is in main.js -->
    <?php
    // Carousel Images
    if(get_post_meta(get_the_ID(), 'holiday-holidaydsel-checkbox', true) == 'yes') :?>

    <?php if( get_post_meta(get_the_ID(), 'meta-carousel-bg-color', true ) !== '' ): ?>

    <!-- Option background color found in template settings -->

    <div id="holiday-template-carousel" class="container-fluid pt-1618" style="background-color:<?php echo
    $meta_carousel_bg_color;
    ?>">
      <?php else: ?>
      <div id="holiday-template-carousel" class="container-fluid pt-1618" style="background-color:#2b343d">
        <?php endif; ?>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="carousel carousel-showallmove1 slide" id="itemslider">
              <div class="carousel-inner">

                <div class="item active">
                  <div class="col-xs-12 col-sm-6 col-md-2">
                    <a href="<?php echo $holidaydsel_1_link; ?>"><img src="<?php echo esc_url($holidaydsel_1_img); ?>" class="img-responsive center-block"></a>
                  </div>
                </div>

                <div class="item">
                  <div class="col-xs-12 col-sm-6 col-md-2">
                    <a href="<?php echo $holidaydsel_2_link; ?>"><img src="<?php echo esc_url($holidaydsel_2_img); ?>" class="img-responsive center-block"></a>
                  </div>
                </div>

                <div class="item">
                  <div class="col-xs-12 col-sm-6 col-md-2">
                    <a href="<?php echo $holidaydsel_3_link; ?>"><img src="<?php echo esc_url($holidaydsel_3_img); ?>" class="img-responsive center-block"></a>
                  </div>
                </div>

                <div class="item">
                  <div class="col-xs-12 col-sm-6 col-md-2">
                    <a href="<?php echo $holidaydsel_4_link; ?>"><img src="<?php echo esc_url($holidaydsel_4_img); ?>" class="img-responsive center-block"></a>
                  </div>
                </div>

                <div class="item">
                  <div class="col-xs-12 col-sm-6 col-md-2">
                    <a href="<?php echo $holidaydsel_5_link; ?>"><img src="<?php echo esc_url($holidaydsel_5_img); ?>" class="img-responsive center-block"></a>
                  </div>
                </div>

                <div class="item">
                  <div class="col-xs-12 col-sm-6 col-md-2">
                    <a href="<?php echo $holidaydsel_6_link; ?>"><img src="<?php echo esc_url($holidaydsel_6_img); ?>" class="img-responsive center-block"></a>
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

      <!-- ==== GRID SECTION ==== -->
      <?php
      $meta_grid_bg_color  = get_post_meta(get_the_ID(), 'meta-grid-bg-color', true );

      if( get_post_meta(get_the_ID(), 'meta-grid-bg-color', true ) !== '' ): ?>
       <div id="holiday-template-grid" class="pt-1618 container-fluid holiday_bg_color" style="background-color:<?php
        echo $meta_grid_bg_color;?>" >
      <?php else: ?>
      <div id="holiday-template-grid" class="pt-1618 container-fluid holiday_bg_color">
      <?php endif; ?>
        <div class="row">
          <div class="col-md-4">
            <div class="thumbnail holiday-text-color">
              <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_1_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_1_title; ?></a></h3>
              <a class="thumbnail-h3" href="<?php echo $holiday_image_1_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_1; ?>"></a>
              <section id="" class="widget-section">
                <div class="caption">
                  <h4 class="widget-title"><?php echo $holiday_image_1_sub_title; ?></h4>
                  <p class="text-justify"><?php echo $holiday_image_1_caption; ?></p>
                </div>
              </section>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail holiday-text-color">
              <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_2_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_2_title; ?></a></h3>
              <a class="thumbnail-h3" href="<?php echo $holiday_image_2_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_2; ?>"></a>
              <section id="" class="widget-section">
                <div class="caption">
                  <h4 class="widget-title"><?php echo $holiday_image_2_sub_title; ?></h4>
                  <p class="text-justify"><?php echo $holiday_image_2_caption; ?></p>
                </div>
              </section>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail holiday-text-color">
              <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_3_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_3_title; ?></a></h3>
              <a class="thumbnail-h3" href="<?php echo $holiday_image_3_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_3; ?>"></a>
              <section id="" class="widget-section">
                <div class="caption">
                  <h4 class="widget-title"><?php echo $holiday_image_3_sub_title; ?></h4>
                  <p class="text-justify"><?php echo $holiday_image_3_caption; ?></p>
                </div>
              </section>
            </div>
          </div>
        </div>

        <?php
        // Optional images 4, 5, 6
        if(get_post_meta(get_the_ID(), 'holiday-456-checkbox', true) == 'yes') :?>

          <div class="row">
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_4_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_4_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_4_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_4; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_4_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_4_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_5_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_5_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_5_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_5; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_5_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_5_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_6_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_6_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_6_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_6; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_6_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_6_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
          </div>

        <?php else: ?>
          <div style="display:none"></div>
        <?php endif; ?>

        <?php
        // Optional images 7, 8, 9
        if(get_post_meta(get_the_ID(), 'holiday-789-checkbox', true) == 'yes') :?>

          <div class="row">
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_7_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_7_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_7_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_7; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_7_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_7_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_8_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_8_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_8_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_8; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_8_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_8_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_9_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_9_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_9_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_9; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_9_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_9_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
          </div>

        <?php else: ?>
          <div style="display:none"></div>
        <?php endif; ?>

        <?php
        // Optional images 10, 11, 12
        if(get_post_meta(get_the_ID(), 'holiday-101112-checkbox', true) == 'yes') :?>

          <div class="row">
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_10_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_10_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_10_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_10; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_10_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_10_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_11_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_11_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_11_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_11; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_11_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_11_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_12_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_12_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_12_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_12; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_12_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_12_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
          </div>

        <?php else: ?>
          <div style="display:none"></div>
        <?php endif; ?>

        <?php
        // Optional images 13, 14, 15
        if(get_post_meta(get_the_ID(), 'holiday-131415-checkbox', true) == 'yes') :?>

          <div class="row">
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_13_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_13_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_13_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_13; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_13_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_13_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_14_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_14_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_14_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_14; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_14_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_14_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_15_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_15_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_15_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_15; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_15_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_15_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
          </div>

        <?php else: ?>
          <div style="display:none"></div>
        <?php endif; ?>

        <?php
        // Optional images 16, 17, 18
        if(get_post_meta(get_the_ID(), 'holiday-161718-checkbox', true) == 'yes') :?>

          <div class="row">
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_16_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_16_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_16_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_16; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_16_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_16_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_17_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_17_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_17_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_17; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_17_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_17_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_18_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_18_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_18_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_18; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_18_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_18_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
          </div>

        <?php else: ?>
          <div style="display:none"></div>
        <?php endif; ?>

        <?php
        // Optional images 19, 20, 21
        if(get_post_meta(get_the_ID(), 'holiday-192021-checkbox', true) == 'yes') :?>

          <div class="row">
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_19_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_19_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_19_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_19; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_19_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_19_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_20_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_20_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_20_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_20; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_20_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_20_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_21_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_21_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_21_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_21; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_21_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_21_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
          </div>

        <?php else: ?>
          <div style="display:none"></div>
        <?php endif; ?>

        <?php
        // Optional images 22, 23, 24
        if(get_post_meta(get_the_ID(), 'holiday-222324-checkbox', true) == 'yes') :?>

          <div class="row">
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_22_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_22_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_22_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_22; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_22_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_22_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_23_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_23_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_23_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_23; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_23_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_23_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_24_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_24_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_24_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_24; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_24_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_24_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
          </div>

        <?php else: ?>
          <div style="display:none"></div>
        <?php endif; ?>

        <?php
        // Optional images 25, 26, 27
        if(get_post_meta(get_the_ID(), 'holiday-252627-checkbox', true) == 'yes') :?>

          <div class="row">
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_25_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_25_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_25_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_25; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_25_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_25_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_26_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_26_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_26_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_26; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_26_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_26_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_27_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_27_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_27_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_27; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_27_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_27_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
          </div>

        <?php else: ?>
          <div style="display:none"></div>
        <?php endif; ?>

        <?php
        // Optional images 28, 29, 30
        if(get_post_meta(get_the_ID(), 'holiday-282930-checkbox', true) == 'yes') :?>

          <div class="row">
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_28_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_28_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_28_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_28; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_28_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_28_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_29_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_29_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_29_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_29; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_29_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_29_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_30_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_30_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_30_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_30; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_30_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_30_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
          </div>

        <?php else: ?>
          <div style="display:none"></div>
        <?php endif; ?>

        <?php
        // Optional images 31, 32, 33
        if(get_post_meta(get_the_ID(), 'holiday-313233-checkbox', true) == 'yes') :?>

          <div class="row">
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_31_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_31_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_31_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_31; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_31_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_31_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_32_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_32_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_32_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_32; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_32_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_32_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_33_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_33_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_33_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_33; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_33_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_33_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
          </div>

        <?php else: ?>
          <div style="display:none"></div>
        <?php endif; ?>

        <?php
        // Optional images 34, 35, 36
        if(get_post_meta(get_the_ID(), 'holiday-343536-checkbox', true) == 'yes') :?>

          <div class="row">
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_34_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_34_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_34_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_34; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_34_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_34_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_35_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_35_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_35_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_35; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_35_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_35_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_36_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_36_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_36_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_36; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_36_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_36_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
          </div>

        <?php else: ?>
          <div style="display:none"></div>
        <?php endif; ?>

        <?php
        // Optional images 37, 38, 39
        if(get_post_meta(get_the_ID(), 'holiday-373839-checkbox', true) == 'yes') :?>

          <div class="row">
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_37_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_37_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_37_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_37; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_37_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_37_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_38_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_38_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_38_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_38; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_38_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_38_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_39_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_39_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_39_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_39; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_39_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_39_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
          </div>

        <?php else: ?>
          <div style="display:none"></div>
        <?php endif; ?>

        <?php
        // Optional images 40, 41, 42
        if(get_post_meta(get_the_ID(), 'holiday-404142-checkbox', true) == 'yes') :?>

          <div class="row">
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_40_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_40_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_40_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_40; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_40_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_40_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_41_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_41_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_41_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_41; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_41_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_41_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_image_42_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_image_42_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_image_42_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_image_42; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_image_42_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_image_42_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
          </div>

        <?php else: ?>
          <div style="display:none"></div>
        <?php endif; ?>

        <?php
        // Optional centered left and right images
        if(get_post_meta(get_the_ID(), 'holiday-2-checkbox', true) == 'yes') :?>

          <div class="row">
            <div class="col-md-4 col-md-offset-2">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_centered_l_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_centered_l_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_centered_l_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_centered_l; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_centered_l_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_centered_l_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_centered_r_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_centered_r_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_centered_r_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_centered_r; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_centered_r_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_centered_r_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
          </div>

        <?php else: ?>
          <div style="display:none"></div>
        <?php endif; ?>

        <?php
        // Optional final centered image
        if(get_post_meta(get_the_ID(), 'holiday-1-checkbox', true) == 'yes') :?>

          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <div class="thumbnail holiday-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $holiday_centered_image_title_link; ?>" target="_self" title="Holiday Destination"><?php echo $holiday_centered_image_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $holiday_centered_image_title_link; ?>" target="_self" title="Holiday Destination"><img src="<?php echo $holiday_centered_image; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $holiday_centered_image_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $holiday_centered_image_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>
          </div>

        <?php else: ?>
          <div style="display:none"></div>
        <?php endif; ?>

        <!-- ./end of template content -->
      </div><!-- ./container-fluid -->
    </div><!-- #/main -->
  </div>

<?php
get_footer();