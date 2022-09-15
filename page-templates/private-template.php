<?php
/**
 * Template Name: Private Template
 * Template Post Type: adventures
 * Developed for The Fly Shop
 * @package The_Fly_Shop
 * Author: Chris Parsons
 * Author URL: https://steelbridgemedia.com
 */
include_once('post-meta/post-meta-private.php');

get_header(); ?>
  <!-- Banner -->
  <section id="banner">
    <div class="inner">
      <img src="<?php echo $private_waters_logo;?>" class="img-responsive center-block" alt="The Fly Shop Private Waters">
      
      <h2><?php the_title();?></h2>
      
      <?php if ( get_post_meta($post->ID, 'private-description', true) )
        echo '<p class="template-description">' . $private_waters_description . '</p>' ?>
      
      <h3>800 &bull; 669 &bull; 3474</h3>
    
    </div>
    
    <a href="#main" class="more scrolly">Read more here!</a>
  
  </section>
  
  <!-- One -->
  <section id="one" class="wrapper style5 special">
    <div id="main"></div>
    <div class="inner">
      
      <h2><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></h2>
      
      <?php
      // Page content from editor
      while ( have_posts() ) : the_post();?>
        <?php the_content();?>
      <?php
      endwhile;
      wp_reset_query();?>
    
    </div>
  </section>
  
  <!-- Two -->
  <section id="two" class="wrapper alt style2">
    <section class="spotlight">
      
      <div class="image">
        <!-- Feature #2 Video/Text/Image Option -->
        <?php
        if(!empty($video_pwfeature_one)) :?>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php echo $video_pwfeature_one; ?>" allowfullscreen></iframe>
          </div>
        <?php else: ?>
          <img src="<?php echo $feature_pw1_image;?>" alt="The Fly Shop Private Waters Image" />
        <?php endif; ?>
      </div>
      
      
      <div class="content">
        <div id="travel-style" class="privatewaters1">
          
          <h2><?php echo $feature_pw1_title;?></h2>
          
          <?php if(!empty($feature_pw1_cost_textarea)) : ?>
          <p class="travel"><?php echo $feature_pw1_cost_textarea;?></p>
          <?php endif; ?>
          
          <div class="panel-group" id="accordion1">
            
            <div class="panel-travel privatewaters1">
              
              <?php if(!empty($feature_pw1_inclusions_textarea)) : ?>
              
              <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseTwo1">
                <h4 class="panel-title travel">Inclusions&nbsp;<span class="arrow-down"></span></h4>
              </div>
              
              <div id="collapseTwo1" class="panel-collapse collapse">
                <div class="panel-body">
                  <p class="travel"><?php echo $feature_pw1_inclusions_textarea;?></p>
                </div>
              </div>
              
              <?php endif; ?>
              
            </div>
            
            <div class="panel-travel privatewaters1">
              
              <?php if(!empty($feature_pw1_noninclusions_textarea)) : ?>
              
              <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseThree1">
                <h4 class="panel-title travel">Non-Inclusions&nbsp;<span class="arrow-down"></span></h4>
              </div>
              <div id="collapseThree1" class="panel-collapse collapse">
                <div class="panel-body">
                  <p class="travel"><?php echo $feature_pw1_noninclusions_textarea;?></p>
                </div>
              </div>
              
              <?php endif; ?>
              
            </div>
            
            <div class="panel-travel privatewaters1">
              <?php if(!empty($feature_pw1_travelins_textarea)) : ?>
              <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseFour1">
                <h4 class="panel-title travel">Travel Insurance&nbsp;<span class="arrow-down"></span></h4>
              </div>
              <div id="collapseFour1" class="panel-collapse collapse">
                <div class="panel-body">
                  <p class="travel"><?php echo $feature_pw1_travelins_textarea;?></p>
                </div>
              </div>
              
              <?php endif; ?>
            
            </div>
            <div class="panel-travel privatewaters1">
              <?php if(!empty($feature_pw1_nonangler_textarea)) : ?>
              <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseFive1">
                <h4 class="panel-title travel">Non-Angling Companions&nbsp;<span class="arrow-down"></span></h4>
              </div>
              <div id="collapseFive1" class="panel-collapse collapse">
                <div class="panel-body">
                  <p class="travel"><?php echo $feature_pw1_nonangler_textarea;?></p>
                </div>
              </div>
            <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- === SPOTLIGHT 2 SEASONS === -->
    <section class="spotlight">
      
      <div class="image">
        <!-- Feature #2 Seasons Video/Text/Image Option -->
        <?php
        if(!empty($video_pwfeature_two)) :?>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php echo $video_pwfeature_two; ?>" allowfullscreen></iframe>
          </div>
        <?php else: ?>
          <img src="<?php echo $feature_pw2_image;?>" alt="The Fly Shop Private Waters Image" />
        <?php endif; ?>
      </div>
      
      <div class="content">
        <div id="travel-style" class="privatewaters2">
          
          <!-- Feature #2 Seasons -->
          <?php if(!empty($feature_pw2_title)) : ?>
          <h2><?php echo $feature_pw2_title;?></h2>
          <?php endif; ?>
          
          <?php if(!empty($feature_pw2_seasons_textarea)) : ?>
          <p class="travel"><?php echo $feature_pw2_seasons_textarea;?></p>
          <?php endif; ?>
          
          <div class="panel-group" id="accordion1">
            
            <div class="panel-travel privatewaters2">
              <?php if(!empty($feature_pw2_spring_textarea)) : ?>
              <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseEight1">
                <h4 class="panel-title travel">Spring&nbsp;<span class="arrow-down"></span></h4>
              </div>
              <div id="collapseEight1" class="panel-collapse collapse">
                <div class="panel-body">
                  <p class="travel"><?php echo $feature_pw2_spring_textarea;?></p>
                </div>
              </div>
            <?php endif; ?>
            </div>
            
            <div class="panel-travel privatewaters2">
              
              <?php if(!empty($feature_pw2_summer_textarea)) : ?>
              
              <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseNine1">
                <h4 class="panel-title travel">Summer&nbsp;<span class="arrow-down"></span></h4>
              </div>
              <div id="collapseNine1" class="panel-collapse collapse">
                <div class="panel-body">
                  <p class="travel"><?php echo $feature_pw2_summer_textarea;?></p>
                </div>
              </div>
              
              <?php endif; ?>
              
            </div>
            
            <div class="panel-travel privatewaters2">
              <?php if(!empty($feature_pw2_autumn_textarea)) : ?>
              <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseSix1">
                <h4 class="panel-title travel">Fall&nbsp;<span class="arrow-down"></span></h4>
              </div>
              <div id="collapseSix1" class="panel-collapse collapse">
                <div class="panel-body">
                  <p class="travel"><?php echo $feature_pw2_autumn_textarea;?></p>
                </div>
              </div>
              <?php endif; ?>
            </div>
            
            <div class="panel-travel privatewaters2">
              
              <?php if(!empty($feature_pw2_winter_textarea)) : ?>
              
              <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseSeven1">
                <h4 class="panel-title travel">Winter&nbsp;<span class="arrow-down"></span></h4>
              </div>
              <div id="collapseSeven1" class="panel-collapse collapse">
                <div class="panel-body">
                  <p class="travel"><?php echo $feature_pw2_winter_textarea;?></p>
                </div>
              </div>
              
              <?php endif; ?>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- === SPOTLIGHT 3 FISHING SECTION === -->
    <!--
   The tabbed section found in TFS Custom Fields.
   Visibility is set by checkbox seeting/control in customizer.php.
   Travel Template Customizer setting section shows only when template is selected.
  -->
    
    <?php
    // Fishing section
    if(!empty($feature_pw3_fishing_title)) : ?>
      
      <section class="spotlight">
        
        <div class="image">
          <!-- Feature #3 Video/Text/Image Option -->
          <?php
          if(!empty($video_feature_three)) :?>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="<?php echo $video_feature_three; ?>" allowfullscreen></iframe>
            </div>
          <?php else: ?>
            <img src="<?php echo $feature_pw3_fishing_image;?>" alt="The Fly Shop Travel Image" />
          <?php endif; ?>
        
        </div>
        
        <!-- Feature #2 Seasons. Includes two options that are selectable within the Customizer. -->
        <div class="content">
          <div id="travel-style" class="privatewaters3">
            <h2><?php echo $feature_pw3_fishing_title;?></h2>
            <p class="travel"><?php echo $feature_pw3_fishing_content;?></p>
            
            <div class="panel-group" id="accordion-beat1">
              <!-- Option: Fishing Beat #1 Content -->
              <?php
              // Fishing beat #1
              if(!empty($fishing_beat1_label)) :?>
                
                <div id="beat-1" class=fishing-beat-1>
                  <div class="panel-travel">
                    <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-beat1" data-target="#collapse-beat1">
                      <h4 class="panel-title travel"><?php echo $fishing_beat1_label; ?>&nbsp;<span class="arrow-down"></span></h4>
                    </div>
                    <div id="collapse-beat1" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p class="travel"><?php echo $feature_pw3_fishing_beat1;?></p>
                      </div>
                    </div>
                  </div>
                </div>
              
              <?php endif; ?>
              
              <!-- Option: Beat #2 Content -->
              <?php
              // Fishing beat #2
              if(!empty($fishing_beat2_label)) :?>
                
                <div id="beat-2" class="fishing-beat-2">
                  <div class="panel-travel">
                    <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-beat1" data-target="#collapse-beat2">
                      <h4 class="panel-title travel"><?php echo $fishing_beat2_label; ?>&nbsp;<span class="arrow-down"></span></h4>
                    </div>
                    <div id="collapse-beat2" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p class="travel"><?php echo $feature_pw3_fishing_beat2;?></p>
                      </div>
                    </div>
                  </div>
                </div>
              
              <?php endif; ?>
              
              <!-- Option: Beat #3 Content -->
              <?php
              // Fishing beat #3
              if(!empty($fishing_beat3_label)) :?>
                
                <div id="beat-3" class="fishing-beat-3">
                  <div class="panel-travel">
                    <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-beat1" data-target="#collapse-beat3">
                      <h4 class="panel-title travel"><?php echo $fishing_beat3_label; ?>&nbsp;<span class="arrow-down"></span></h4>
                    </div>
                    <div id="collapse-beat3" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p class="travel"><?php echo $feature_pw3_fishing_beat3;?></p>
                      </div>
                    </div>
                  </div>
                </div>
              
              <?php endif; ?>
              
              <!-- Option: Beat #4 Content -->
              <?php
              // Fishing beat #1
              if(!empty($fishing_beat4_label)) :?>
                
                <div id="beat-4" class="fishing-beat-4">
                  <div class="panel-travel">
                    <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-beat1" data-target="#collapse-beat4">
                      <h4 class="panel-title travel"><?php echo $fishing_beat4_label; ?>&nbsp;<span class="arrow-down"></span></h4>
                    </div>
                    <div id="collapse-beat4" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p class="travel"><?php echo $feature_pw3_fishing_beat4;?></p>
                      </div>
                    </div>
                  </div>
                </div>
              
              <?php endif; ?>
              
              <!-- Option: Beat #5 Content -->
              <?php
              // Fishing beat #1
              if(!empty($fishing_beat5_label)) :?>
                
                <div id="beat-5" class="fishing-beat-5">
                  <div class="panel-travel">
                    <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-beat1" data-target="#collapse-beat5">
                      <h4 class="panel-title travel"><?php echo $fishing_beat5_label; ?>&nbsp;<span class="arrow-down"></span></h4>
                    </div>
                    <div id="collapse-beat5" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p class="travel"><?php echo $feature_pw3_fishing_beat5;?></p>
                      </div>
                    </div>
                  </div>
                </div>
              
              <?php endif; ?>
              
              <!-- Option: Beat #6 Content -->
              <?php
              // Fishing beat #1
              if(!empty($fishing_beat6_label)) :?>
                
                <div id="beat-6" class="fishing-beat-6">
                  <div class="panel-travel">
                    <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-beat1" data-target="#collapse-beat6">
                      <h4 class="panel-title travel"><?php echo $fishing_beat6_label; ?>&nbsp;<span class="arrow-down"></span></h4>
                    </div>
                    <div id="collapse-beat6" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p class="travel"><?php echo $feature_pw3_fishing_beat6;?></p>
                      </div>
                    </div>
                  </div>
                </div>
              
              <?php endif; ?>
            
            </div> <!-- /end panel group -->
          </div>
        </div>
      </section>
    <?php endif; ?>
    
    <!-- === SPOTLIGHT #4 LODGING -->
    <section class="spotlight">
      
      <div class="image">
        <!-- Feature #4 Video/Text/Image Option -->
        <?php
        
        if(!empty($video_pwfeature_four)) :?>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php echo $video_pwfeature_four; ?>" allowfullscreen></iframe>
          </div>
        <?php else: ?>
          <img src="<?php echo $feature_4_pwlodging_image;?>" alt="The Fly Shop Private Waters Image" />
        <?php endif; ?>
      </div>
      
      <div class="content">
        <div id="travel-style" class="privatewaters4">
          
          <?php if(!empty($feature_4_pwlodging_title)) : ?>
          <h2><?php echo $feature_4_pwlodging_title;?></h2>
          <?php endif; ?>
          
          <?php if(!empty($feature_4_pwlodging_content)) : ?>
          <p class="travel"><?php echo $feature_4_pwlodging_content;?></p>
          <?php endif; ?>
          
          <div class="panel-group" id="accordion4">
            <div class="panel-travel privatewaters4">
              
              <?php if(!empty($feature_4_pwlodging_readmore)) : ?>
              
              <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" data-target="#collapseOne4">
                <h4 class="panel-title travel">Read More&nbsp;<span class="arrow-down"></span>
                
                <?php if( !empty( $feature_4_pwlodging_readmore_info   )) {
                  echo '<span class="readmore-info">' . $feature_4_pwlodging_readmore_info  . '</span>';
                } ?>

                </h4>
              </div>
              
              <div id="collapseOne4" class="panel-collapse collapse">
                <div class="panel-body">
                  <p class="travel"><?php echo $feature_4_pwlodging_readmore;?></p>
                </div>
              </div>
            <?php endif; ?>
            </div>
          </div><!-- /#accordion4 -->
        </div>
      </div>
    </section>
    
    <!-- === SPOTLIGHT 5 GETTING TO === -->
    <section class="spotlight">
      
      <div class="image">
        <!-- Feature #3 Video/Text/Image Option -->
        <?php
        if(!empty($video_feature_five)) :?>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php echo $video_feature_five; ?>" allowfullscreen></iframe>
          </div>
        <?php else: ?>
          <img src="<?php echo $feature_pw5_gettingto_image;?>" alt="The Fly Shop Travel Image" />
        <?php endif; ?>
      
      </div>
      
      <div class="content">
        <div id="travel-style" class="privatewaters5">
          
          <?php if(!empty($feature_pw5_get_to_title)) : ?>
          <h2><?php echo $feature_pw5_get_to_title;?></h2>
          <?php endif; ?>
          
          <?php if(!empty($feature_pw5_get_to_content)) : ?>
          <p class="travel"><?php echo $feature_pw5_get_to_content;?></p>
          <?php endif; ?>
          
          <div class="panel-group" id="accordion5">
            <div class="panel-travel privatewaters5">
              
              <?php if(!empty($feature_pw5_get_to_readmore)) : ?>
              
              <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion5" data-target="#collapseOne5">
                <h4 class="panel-title travel">Read More&nbsp;<span class="arrow-down"></span>
                  
                  <?php if( !empty( $feature_pw5_get_to_readmore_info   )) {
                    echo '<span class="readmore-info">' . $feature_pw5_get_to_readmore_info  . '</span>';
                  } ?>
                
                </h4>
              </div>
              <div id="collapseOne5" class="panel-collapse collapse">
                <div class="panel-body">
                  <p class="travel"><?php echo $feature_pw5_get_to_readmore;?></p>
                </div>
              </div>
              
              <?php endif; ?>
              
            </div>
          </div><!-- /#accordion3 -->
        </div>
      </div>
    </section>
  
  </section>
  
  <section id="three" class="wrapper style7 special">
    <div class="inner">
      
      <header class="major">
        <h2>Additional Information</h2>
        <hr class="fancy1">
        <div class="row">
          <div class="additional-listing">
            
            <?php if(get_post_meta(get_the_ID(), 'private-additional-info-image1', true)) {
              
              echo	'<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#private-carousel" data-slide-to="0"><img src="' . $private_additional_info_image1 . '" class="img-responsive" data-toggle="modal" data-target=".private-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
            
            <?php if(get_post_meta(get_the_ID(), 'private-additional-info-image2', true)) {
              
              echo	'<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#private-carousel" data-slide-to="1"><img src="' . $private_additional_info_image2 . '" class="img-responsive" data-toggle="modal" data-target=".private-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
            
            <?php if(get_post_meta(get_the_ID(), 'private-additional-info-image3', true)) {
              
              echo	'<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#private-carousel" data-slide-to="2"><img src="' . $private_additional_info_image3 . '" class="img-responsive" data-toggle="modal" data-target=".private-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
            
            <?php if(get_post_meta(get_the_ID(), 'private-additional-info-image4', true)) {
              
              echo	'<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#private-carousel" data-slide-to="3"><img src="' . $private_additional_info_image4 . '" class="img-responsive" data-toggle="modal" data-target=".private-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
          
          </div>
        </div>
        
        <!-- Second Row Travel Images -->
        
        <div class="row">
          <div class="additional-listing">
            
            <?php if(get_post_meta(get_the_ID(), 'private-additional-info-image5', true)) {
              
              echo	'<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#private-carousel" data-slide-to="4"><img src="' . $private_additional_info_image5 . '" class="img-responsive" data-toggle="modal" data-target=".private-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
            
            <?php if(get_post_meta(get_the_ID(), 'private-additional-info-image6', true)) {
              
              echo	'<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#private-carousel" data-slide-to="5"><img src="' . $private_additional_info_image6 . '" class="img-responsive" data-toggle="modal" data-target=".private-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
            
            <?php if(get_post_meta(get_the_ID(), 'private-additional-info-image7', true)) {
              
              echo	'<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#private-carousel" data-slide-to="6"><img src="' . $private_additional_info_image7 . '" class="img-responsive" data-toggle="modal" data-target=".private-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
            
            <?php if(get_post_meta(get_the_ID(), 'private-additional-info-image8', true)) {
              
              echo	'<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#private-carousel" data-slide-to="7"><img src="' . $private_additional_info_image8 . '" class="img-responsive" data-toggle="modal" data-target=".private-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
            } ?>
          
          </div>
        </div>
    </div>
    </header>
  </section>
  
  <!-- ====== MODAL SLIDER ====== -->
  
  <div class="additional-img modal fade private-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="additional-img modal-dialog" role="document">
      
      <div id="private-carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          
          <?php if(get_post_meta(get_the_ID(), 'private-additional-info-image1', true)) {
            
            echo '<li data-target="#private-carousel" data-slide-to="0" class="active"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'private-additional-info-image2', true)) {
            
            echo '<li data-target="#private-carousel" data-slide-to="1"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'private-additional-info-image3', true)) {
            
            echo '<li data-target="#private-carousel" data-slide-to="2"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'private-additional-info-image4', true)) {
            
            echo '<li data-target="#private-carousel" data-slide-to="3"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'private-additional-info-image5', true)) {
            
            echo '<li data-target="#private-carousel" data-slide-to="4"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'private-additional-info-image6', true)) {
            
            echo '<li data-target="#private-carousel" data-slide-to="5"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'private-additional-info-image7', true)) {
            
            echo '<li data-target="#private-carousel" data-slide-to="6"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'private-additional-info-image8', true)) {
            
            echo '<li data-target="#private-carousel" data-slide-to="7"></li>';
            
          } ?>
        
        </ol>
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <?php if(get_post_meta(get_the_ID(), 'private-additional-info-image1', true)) {
            
            echo	'<div class="item active">',
              
              '<img src="' . $private_additional_info_image1 . '" alt="The Fly Shop World Fly Fishing Travel">',
            
            '</div>';
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'private-additional-info-image2', true)) {
            
            echo	'<div class="item">',
              
              '<img src="' . $private_additional_info_image2 . '" alt="The Fly Shop World Fly Fishing Travel">',
            
            '</div>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'private-additional-info-image3', true)) {
            
            echo	'<div class="item">',
              
              '<img src="' . $private_additional_info_image3 . '" alt="The Fly Shop World Fly Fishing Travel">',
            
            '</div>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'private-additional-info-image4', true)) {
            
            echo	'<div class="item">',
              
              '<img src="' . $private_additional_info_image4 . '" alt="The Fly Shop World Fly Fishing Travel">',
            
            '</div>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'private-additional-info-image5', true)) {
            
            echo	'<div class="item">',
              
              '<img src="' . $private_additional_info_image5 . '" alt="The Fly Shop World Fly Fishing Travel">',
            
            '</div>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'private-additional-info-image6', true)) {
            
            echo	'<div class="item">',
              
              '<img src="' . $private_additional_info_image6 . '" alt="The Fly Shop World Fly Fishing Travel">',
            
            '</div>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'private-additional-info-image7', true)) {
            
            echo  '<div class="item">',
              
              '<img src="' . $private_additional_info_image7 . '" alt="The Fly Shop World Fly Fishing Travel">',
            
            '</div>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'private-additional-info-image8', true)) {
            
            echo	'<div class="item">',
              
              '<img src="' . $private_additional_info_image8 . '" alt="The Fly Shop World Fly Fishing Travel">',
            
            '</div>';
            
          } ?>
        
        </div>
        
        <!-- Controls -->
        <a class="left carousel-control" href="#private-carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#private-carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  
  <!-- CALL TO ACTION ROW -->
  <section id="cta" class="wrapper style4">
    <div class="inner">
      <header class="text-center">
        <h2><?php echo $cta_private_strong_intro;?></h2>
        <p><?php echo $cta_private_content;?></p>
      </header>
    </div>
  </section>

<?php
get_footer();
