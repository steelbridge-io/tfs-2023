<?php
/**
 *  Template Name: Front Page
 *  Template Post Type: page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Fly_Shop
 */

include_once('post-meta/post-meta-front-page.php');

get_header(); ?>

  <!-- Banner -->
  <!-- The .banner hack is used with the Theme Customizer feature. Because JQuery does not target pseudo elements, we can target a class in the DOM and change it to a <style> element -->
  <span class="bannerhack"></span>
  <section id="banner">

<?php

 $default = '';
 $front_page_hero_video = get_post_meta( get_the_ID(),'front-page-hero-video',TRUE );

 if (is_front_page() && $front_page_hero_video !== $default ) : ?>

 <?php

    $front_page_hero_poster = get_post_meta( get_the_ID(), 'front-page-video-poster', TRUE ); ?>

    <div id="safari_video_section" style="display: none;">
        <div class="video video-control">
        <div class="overlay"></div>

        <video id="vid" autoplay loop muted poster="<?php echo $front_page_hero_poster ?>" >
        <source src="<?php echo $front_page_hero_video ?>" type="video/mp4" />
        </video>

            <div class="container h-100">
                <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white">

                    <img src="<?php echo $front_page_logo;	?>" class="img-responsive center-block" align="center" alt="The Fly Shop">
                    <h2 class="site-description"><?php bloginfo('description'); ?></h2>
                    <h3><?php echo get_theme_mod('telephone_number'); ?></h3>

                    <!-- <div id="playButton" class="play-button-overlay">
                    <span class="glyphicon glyphicon-play-circle gi-2x"></span>
                        <p>( Click To Play Intro Video! )</p>
                    </div> -->

                    <a href="#main" class="more scrolly">Learn More</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="non_safari_video_section" style="display: none;">
        <div class="video video-control">
         <div class="overlay"></div>

         <video autoplay playsinline loop muted id="vid">
             <source src="<?php echo $front_page_hero_video ?>" type="video/mp4" />
         </video>

             <div class="container h-100">
                 <div class="d-flex h-100 text-center align-items-center">
                     <div class="w-100 text-white">

                         <img src="<?php echo $front_page_logo;	?>" class="img-responsive center-block" align="center" alt="The Fly Shop">
                         <h2 class="site-description"><?php bloginfo('description'); ?></h2>
                         <h3><?php echo get_theme_mod('telephone_number'); ?></h3>

                         <a href="#main" class="more scrolly">Learn More</a>

                     </div>
                 </div>
             </div>
        </div>
    </div>

    <?php else : ?>

    <div class="inner">
        <img src="<?php echo $front_page_logo;	?>" class="img-responsive center-block" align="center" alt="The Fly Shop">
        <h2 class="site-description"><?php bloginfo('description'); ?></h2>
        <h3><?php echo get_theme_mod('telephone_number'); ?></h3>
    </div>

    <a href="#main" class="more scrolly">Learn More</a>

  <?php endif; ?>

  </section>

  <article id="main">
    <!-- === JOIN NEWS LETTER === -->
    <div id="fp-well" class="well well-sm text-center no-margin-bottom">
      <div id="fp-well" class="well well-sm text-center no-margin-bottom">

        <!-- Begin Constant Contact Inline Form Code -->
        <div>
          <label for="exampleInputEmail2"><h3>Sign Up For Our Newsletter</h3></label>
        </div>
        <div class="row front-page-email-signup">
          <div class="col-6 mobile-position">
            <div class="ctct-inline-form form-inline" data-form-id="0ad001fb-1027-4de2-9265-5dede2414e0d"></div>
          </div>
          <div id="pop-over-fp" class="col-4">
           <a role="button" data-toggle="collapse" href="#collapseFrontpage" aria-expanded="false" aria-controls="collapseFrontpage"><span class="glyphicon glyphicon-question-sign gi-2x"></span></a>
          </div>
        </div>
          <div class="collapse" id="collapseFrontpage">
              <div class="well">
                  <p>"We respect your privacy and do not tolerate spam and will never sell, rent, lease or give away your email address to any third party. Nor will we send you unsolicited email. You will have the option to safely unsubscribe upon receiving our newsletters. We just want to deleiver great photos, fantastic fly fishing ideas and motivation!</p>
              </div>
          </div>
        <!-- End Constant Contact Inline Form Code -->

        <!-- Begin Constant Contact Active Forms -->
        <script> var _ctct_m = "0a0f5b541f83f517b80813b9cfbdb8d9"; </script>
        <!-- <script id="signupScript" src="https://static.ctctcdn.com/js/signup-form-widget/current/signup-form-widget.min.js" async defer></script> -->
        <!-- End Constant Contact Active Forms -->

      </div>
      <div id="blog-feed-fp-top" class="container-fluid mb-1618 mt-1">
        <div class="row">
          <div class="newscta" id="news-cta">
            <div data-aos-duration="1000" data-aos="fade-up" class="news-section">
              <div id="front-page-blog-cta">
                <h2>Latest News - The Fly Shop</h2>
                <?php
                $args = array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 2 );
                $loop = new WP_Query($args);
                while ( $loop->have_posts() ) : $loop->the_post();
                  echo '<div class="col-md-6">' .
                          '<div class="media">' .
                            '<div class="col-lg-4">' .
                            '<div class="media-left media-top">' .
                              '<a href="'. get_permalink() .'" title="' . get_the_title() . '">' . get_the_post_thumbnail( get_the_id()) . '</a>';
                  echo     '</div>' .
                          '</div>' .
                        '<div class="col-lg-8">' .
                          '<div class="media-body caption">';
                            the_title('<a class="post-permalink" title="'. get_the_title() .'" href="'. get_permalink() .'"><h3>', '</h3></a>');
                  echo      '<b>' . get_the_date( 'F dS, Y', get_the_ID()) . '</b>';
                              the_excerpt();
                  echo    '</div>
                          </div>
                         </div>
                        </div>';
                endwhile;
                wp_reset_postdata(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ====== FEATURE ROW ====== -->

    <div class="container-fluid2">
      <div class="row">
        <div class="col-md-4">
          <!-- Front Page Widget #1 -->
          <div class="thumbnail-no-border">
            <h3 class="widget-title"><a href="<?php echo $front_page_image_1_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><?php echo $front_page_image_1_title; ?></a></h3>
            <a href="<?php echo $front_page_image_1_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><img src="<?php echo $front_page_image_1; ?>"></a>
            <section id="" class="widget">
              <div class="caption">
                <h3 class="widget-title"><?php echo $front_page_image_1_sub_title; ?></h3>
                <p class="text-justify"><?php echo $front_page_image_1_caption; ?></p>
              </div>
            </section>
          </div>
        </div>
        <div class="col-md-4">
          <!-- Front Page Widget #2 -->
          <div class="thumbnail-no-border">
            <h3 class="widget-title"><a href="<?php echo $front_page_image_2_title_link; ?>" target="_blank" title="The Fly Shop Featured Content"><?php echo $front_page_image_2_title; ?></a></h3>
            <a href="<?php echo $front_page_image_2_title_link; ?>" target="_blank" title="The Fly Shop Featured Content"><img src="<?php echo $front_page_image_2; ?>"></a>
            <section id="" class="widget">
              <div class="caption">
                <h3 class="widget-title"><?php echo $front_page_image_2_sub_title; ?></h3>
                <p class="text-justify"><?php echo $front_page_image_2_caption; ?></p>
              </div>
            </section>
          </div>
        </div>
        <div class="col-md-4">
          <!-- Front Page Widget #3 -->
          <div class="thumbnail-no-border">
            <h3 class="widget-title"><a href="<?php echo $front_page_image_3_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><?php echo $front_page_image_3_title; ?></a></h3>
            <a href="<?php echo $front_page_image_3_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><img src="<?php echo $front_page_image_3; ?>"></a>
            <section id="" class="widget">
              <div class="caption">
                <h3 class="widget-title"><?php echo $front_page_image_3_sub_title; ?></h3>
                <p class="text-justify"><?php echo $front_page_image_3_caption; ?></p>
              </div>
            </section>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <!-- Front Page Widget #4 -->
          <div class="thumbnail-no-border">
            <h3 class="widget-title"><a href="<?php echo $front_page_image_4_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><?php echo $front_page_image_4_title; ?></a></h3>
            <a href="<?php echo $front_page_image_4_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><img src="<?php echo $front_page_image_4; ?>"></a>
            <section id="" class="widget">
              <div class="caption">
                <h3 class="widget-title"><?php echo $front_page_image_4_sub_title; ?></h3>
                <p class="text-justify"><?php echo $front_page_image_4_caption; ?></p>
              </div>
            </section>
          </div>
        </div>
        <div class="col-md-4">
          <!-- Front Page Widget #5 -->
          <div class="thumbnail-no-border">
            <h3 class="widget-title"><a href="<?php echo $front_page_image_5_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><?php echo $front_page_image_5_title; ?></a></h3>
            <a href="<?php echo $front_page_image_5_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><img src="<?php echo $front_page_image_5; ?>"></a>
            <section id="" class="widget">
              <div class="caption">
                <h3 class="widget-title"><?php echo $front_page_image_5_sub_title; ?></h3>
                <p class="text-justify"><?php echo $front_page_image_5_caption; ?></p>
              </div>
            </section>
          </div>
        </div>
        <div class="col-md-4">
          <!-- Front Page Widget #6 -->
          <div class="thumbnail-no-border">
            <h3 class="widget-title"><a href="<?php echo $front_page_image_6_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><?php echo $front_page_image_6_title; ?></a></h3>
            <a href="<?php echo $front_page_image_6_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><img src="<?php echo $front_page_image_6; ?>"></a>
            <section id="" class="widget">
              <div class="caption">
                <h3 class="widget-title"><?php echo $front_page_image_6_sub_title; ?></h3>
                <p class="text-justify"><?php echo $front_page_image_6_caption; ?></p>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>

    <!-- ====== FEATURE ROW ====== -->

    <div class="container-fluid2">
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail-no-border">
            <h3 class="widget-title"><a href="<?php echo $front_page_image_7_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><?php echo $front_page_image_7_title; ?></a></h3>
            <a href="<?php echo $front_page_image_7_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><img src="<?php echo $front_page_image_7; ?>"></a>
            <section id="" class="widget">
              <div class="caption">
                <h3 class="widget-title"><?php echo $front_page_image_7_sub_title; ?></h3>
                <p class="text-justify"><?php echo $front_page_image_7_caption; ?></p>
              </div>
            </section>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail-no-border">
            <h3 class="widget-title"><a href="<?php echo $front_page_image_8_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><?php echo $front_page_image_8_title; ?></a></h3>
            <a href="<?php echo $front_page_image_8_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><img src="<?php echo $front_page_image_8; ?>"></a>
            <section id="" class="widget">
              <div class="caption">
                <h3 class="widget-title"><?php echo $front_page_image_8_sub_title; ?></h3>
                <p class="text-justify"><?php echo $front_page_image_8_caption; ?></p>
              </div>
            </section>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail-no-border">
            <h3 class="widget-title"><a href="<?php echo $front_page_image_9_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><?php echo $front_page_image_9_title; ?></a></h3>
            <a href="<?php echo $front_page_image_9_title_link; ?>" target="_self" title="The Fly Shop Featured Content"><img src="<?php echo $front_page_image_9; ?>"></a>
            <section id="" class="widget">
              <div class="caption">
                <h3 class="widget-title"><?php echo $front_page_image_9_sub_title; ?></h3>
                <p class="text-justify"><?php echo $front_page_image_9_caption; ?></p>
              </div>
            </section>
          </div>
        </div>
      </div>
     <!--
     --- Might use later ---
     <div class="blog-well well">
        <h2>N. California Fly Fishing News</h2>
        <hr/>
        <div class="row nc-fly-fishing-news">

         /* $args = array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 2 );
          $loop = new WP_Query($args);
          while ( $loop->have_posts() ) : $loop->the_post();
            echo '<div class="col-md-6"><div class="inner-wrap">';
            the_title('<a class="post-permalink" href="'. get_permalink() .'"><h3>', '</h3></a>');
            echo '<p>' . get_the_date( 'F dS, Y', get_the_ID() ) . '</p>';
            echo '<div class="fp-post-img"><a href="'.get_permalink().'">'. get_the_post_thumbnail( get_the_id()) .'</a></div>';
            echo '<div class="entry-content">';
            the_excerpt();
            echo '</div></div></div>';
          endwhile;
          wp_reset_postdata(); */
        </div>
      </div> -->
    </div> <!--</section>-->

    <!-- === FLIP PAGE SECTION === -->

    <div id="fp-well" class="well well-sm text-center no-margin-bottom">



        <?php echo do_shortcode('[my-horizontal-scroller]'); ?>





    </div>
  </article>

  <!-- CTA -->
  <section id="cta" class="wrapper style4 text-justify">
    <div class="inner">
      <header class="text-center">
        <section class="widget tfs_customtext front-page-cta" id="tfs_customtext-15">
          <div class="caption">
            <h2 class="widget-title"><?php echo $front_page_cta_title; ?></h2>
            <p class="lead"><?php echo $front_page_cta_content; ?></p>
          </div>
        </section>

      </header>
    </div>
  </section>

<?php
get_footer();
