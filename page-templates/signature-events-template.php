<?php
/**
 * Template Name: Events Template
 * Template Post Type: post, page, travel_cpt, schools_cpt, adventures, guide_service, fishcamp_cpt
 * Developed for The Fly Shop
 * @package The_Fly_Shop
 * Author: Chris Parsons
 * Author URL: https://steelbridge.io
 */

$the_post_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
$the_post_default = get_bloginfo('template_directory') . '/images/default/default-page-header.png';
$basic_logo_upload = get_theme_mod ('basic_page_logo');

include_once('post-meta/post-meta-signature-events.php');

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
                 <div class="basicpagelogo signature-events-header template-class text-center">
                    <div class="inner">
                       <dl class="landing-hd">
                          <dd class="dd-1"><img src="<?php echo $sig_logo_events; ?>" class="img-responsive-logo" alt="The Fly Shop Logo" title="Basic Logo"></dd>

                          <dd class="dd-2"><h2 class="logo-tel"><?php echo get_the_title(); ?></h2></dd>

                         <?php if ( get_post_meta($post->ID, 'signature-events-description', true) )
                           echo '<dd class="dd-3"><p class="template-description">' . $signature_events_description . '</p></dd>' ?>

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

              <div class="basicpagelogo signature-events-header template-class text-center">

                 <img src="<?php echo $sig_logo_events; ?>" class="img-responsive center-block" alt="The Fly Shop Logo" title="Basic Logo">

                 <h2><?php echo get_the_title(); ?></h2>

                <?php if ( get_post_meta($post->ID, 'signature-events-description', true) )
                  echo '<p class="template-description">' . $signature_events_description . '</p>' ?>

                 <h3>800 &bull; 669 &bull; 3474</h3>

              </div>

           </header>

        <?php endif; ?>

         <!-- ==== POST SECTION ==== -->

         <div class="container">
            <div id="scrollto"></div>
            <div id="primary" class="content-area row">
               <main id="main" class="site-main col-md-12" role="main">

                 <?php
                 // WordPress Blog Content
                 while ( have_posts() ) : the_post();

                   get_template_part( 'template-parts/content', 'page-basic' );

                 endwhile; // End of the loop.
                 ?>

               </main>
            </div>
         </div>

         <!-- ==== GRID SECTION ==== -->

         <div class="pt-1618 container-fluid signature_events_bg_color">
            <div class="row">
               <div class="col-md-4">
                  <div class="thumbnail signature-events-text-color">
                     <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_events_image_1_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_events_image_1_title; ?></a></h3>
                     <a class="thumbnail-h3" href="<?php echo $signature_events_image_1_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_events_image_1; ?>"></a>
                     <section id="" class="widget-section">
                        <div class="caption">
                           <h4 class="widget-title"><?php echo $signature_events_image_1_sub_title; ?></h4>
                           <p class="text-justify"><?php echo $signature_events_image_1_caption; ?></p>
                           <button type="button" class="btn signature btn-primary btn-lg" data-toggle="modal" data-target="#myModal1">
                              Read more about <?php echo $signature_events_image_1_title; ?>
                           </button>
                        </div>
                     </section>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="thumbnail signature-events-text-color">
                     <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_events_image_2_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_events_image_2_title; ?></a></h3>
                     <a class="thumbnail-h3" href="<?php echo $signature_events_image_2_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_events_image_2; ?>"></a>
                     <section id="" class="widget-section">
                        <div class="caption">
                           <h4 class="widget-title"><?php echo $signature_events_image_2_sub_title; ?></h4>
                           <p class="text-justify"><?php echo $signature_events_image_2_caption; ?></p>
                           <button type="button" class="btn signature btn-primary btn-lg" data-toggle="modal" data-target="#myModal2">
                              Read more about <?php echo $signature_events_image_2_title; ?>
                           </button>
                        </div>
                     </section>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="thumbnail signature-events-text-color">
                     <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_events_image_3_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_events_image_3_title; ?></a></h3>
                     <a class="thumbnail-h3" href="<?php echo $signature_events_image_3_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_events_image_3; ?>"></a>
                     <section id="" class="widget-section">
                        <div class="caption">
                           <h4 class="widget-title"><?php echo $signature_events_image_3_sub_title; ?></h4>
                           <p class="text-justify"><?php echo $signature_events_image_3_caption; ?></p>
                           <button type="button" class="btn signature btn-primary btn-lg" data-toggle="modal" data-target="#myModal3">
                              Read more about <?php echo $signature_events_image_3_title; ?>
                           </button>
                        </div>
                     </section>
                  </div>
               </div>
            </div>

           <?php
           // Optional images 4, 5, 6
           if(get_post_meta(get_the_ID(), 'signature-events-456-checkbox', true) == 'yes') :?>

              <div class="row">
                 <div class="col-md-4">
                    <div class="thumbnail signature-events-text-color">
                       <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_events_image_4_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_events_image_4_title; ?></a></h3>
                       <a class="thumbnail-h3" href="<?php echo $signature_events_image_4_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_events_image_4; ?>"></a>
                       <section id="" class="widget-section">
                          <div class="caption">
                             <h4 class="widget-title"><?php echo $signature_events_image_4_sub_title; ?></h4>
                             <p class="text-justify"><?php echo $signature_events_image_4_caption; ?></p>
                             <button type="button" class="btn signature btn-primary btn-lg" data-toggle="modal" data-target="#myModal4">
                                Read more about <?php echo $signature_events_image_4_title; ?>
                             </button>
                          </div>
                       </section>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="thumbnail signature-events-text-color">
                       <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_events_image_5_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_events_image_5_title; ?></a></h3>
                       <a class="thumbnail-h3" href="<?php echo $signature_events_image_5_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_events_image_5; ?>"></a>
                       <section id="" class="widget-section">
                          <div class="caption">
                             <h4 class="widget-title"><?php echo $signature_events_image_5_sub_title; ?></h4>
                             <p class="text-justify"><?php echo $signature_events_image_5_caption; ?></p>
                             <button type="button" class="btn signature btn-primary btn-lg" data-toggle="modal" data-target="#myModal5">
                                Read more about <?php echo $signature_events_image_5_title; ?>
                             </button>
                          </div>
                       </section>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="thumbnail signature-events-text-color">
                       <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_events_image_6_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_events_image_6_title; ?></a></h3>
                       <a class="thumbnail-h3" href="<?php echo $signature_events_image_6_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_events_image_6; ?>"></a>
                       <section id="" class="widget-section">
                          <div class="caption">
                             <h4 class="widget-title"><?php echo $signature_events_image_6_sub_title; ?></h4>
                             <p class="text-justify"><?php echo $signature_events_image_6_caption; ?></p>
                             <button type="button" class="btn signature btn-primary btn-lg" data-toggle="modal" data-target="#myModal6">
                                Read more about <?php echo $signature_events_image_6_title; ?>
                             </button>
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
           if(get_post_meta(get_the_ID(), 'signature-events-789-checkbox', true) == 'yes') :?>

              <div class="row">
                 <div class="col-md-4">
                    <div class="thumbnail signature-events-text-color">
                       <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_events_image_7_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_events_image_7_title; ?></a></h3>
                       <a class="thumbnail-h3" href="<?php echo $signature_events_image_7_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_events_image_7; ?>"></a>
                       <section id="" class="widget-section">
                          <div class="caption">
                             <h4 class="widget-title"><?php echo $signature_events_image_7_sub_title; ?></h4>
                             <p class="text-justify"><?php echo $signature_events_image_7_caption; ?></p>
                             <button type="button" class="btn signature btn-primary btn-lg" data-toggle="modal" data-target="#myModal7">
                                Read more about <?php echo $signature_events_image_7_title; ?>
                             </button>
                          </div>
                       </section>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="thumbnail signature-events-text-color">
                       <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_events_image_8_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_events_image_8_title; ?></a></h3>
                       <a class="thumbnail-h3" href="<?php echo $signature_events_image_8_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_events_image_8; ?>"></a>
                       <section id="" class="widget-section">
                          <div class="caption">
                             <h4 class="widget-title"><?php echo $signature_events_image_8_sub_title; ?></h4>
                             <p class="text-justify"><?php echo $signature_events_image_8_caption; ?></p>
                             <button type="button" class="btn signature btn-primary btn-lg" data-toggle="modal" data-target="#myModal8">
                                Read more about <?php echo $signature_events_image_8_title; ?>
                             </button>
                          </div>
                       </section>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="thumbnail signature-events-text-color">
                       <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_events_image_9_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_events_image_9_title; ?></a></h3>
                       <a class="thumbnail-h3" href="<?php echo $signature_events_image_9_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_events_image_9; ?>"></a>
                       <section id="" class="widget-section">
                          <div class="caption">
                             <h4 class="widget-title"><?php echo $signature_events_image_9_sub_title; ?></h4>
                             <p class="text-justify"><?php echo $signature_events_image_9_caption; ?></p>
                             <button type="button" class="btn signature btn-primary btn-lg" data-toggle="modal" data-target="#myModal9">
                                Read more about <?php echo $signature_events_image_9_title; ?>
                             </button>
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
           if(get_post_meta(get_the_ID(), 'signature-events-101112-checkbox', true) == 'yes') :?>

              <div class="row">
                 <div class="col-md-4">
                    <div class="thumbnail signature-events-text-color">
                       <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_events_image_10_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_events_image_10_title; ?></a></h3>
                       <a class="thumbnail-h3" href="<?php echo $signature_events_image_10_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_events_image_10; ?>"></a>
                       <section id="" class="widget-section">
                          <div class="caption">
                             <h4 class="widget-title"><?php echo $signature_events_image_10_sub_title; ?></h4>
                             <p class="text-justify"><?php echo $signature_events_image_10_caption; ?></p>
                             <button type="button" class="btn signature btn-primary btn-lg" data-toggle="modal" data-target="#myModal10">
                                Read more about <?php echo $signature_events_image_10_title; ?>
                             </button>
                          </div>
                       </section>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="thumbnail signature-events-text-color">
                       <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_events_image_11_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_events_image_11_title; ?></a></h3>
                       <a class="thumbnail-h3" href="<?php echo $signature_events_image_11_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_events_image_11; ?>"></a>
                       <section id="" class="widget-section">
                          <div class="caption">
                             <h4 class="widget-title"><?php echo $signature_events_image_11_sub_title; ?></h4>
                             <p class="text-justify"><?php echo $signature_events_image_11_caption; ?></p>
                             <button type="button" class="btn signature btn-primary btn-lg" data-toggle="modal" data-target="#myModal11">
                                Read more about <?php echo $signature_events_image_11_title; ?>
                             </button>
                          </div>
                       </section>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="thumbnail signature-events-text-color">
                       <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_events_image_12_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_events_image_12_title; ?></a></h3>
                       <a class="thumbnail-h3" href="<?php echo $signature_events_image_12_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_events_image_12; ?>"></a>
                       <section id="" class="widget-section">
                          <div class="caption">
                             <h4 class="widget-title"><?php echo $signature_events_image_12_sub_title; ?></h4>
                             <p class="text-justify"><?php echo $signature_events_image_12_caption; ?></p>
                             <button type="button" class="btn signature btn-primary btn-lg" data-toggle="modal" data-target="#myModal12">
                                Read more about <?php echo $signature_events_image_12_title; ?>
                             </button>
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
include __DIR__.'/../library/modal-next-events.php';
get_footer();