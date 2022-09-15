<?php
/*
	* Template Name: Guide Service Template
	* Template Post Type: guide_service
	* Developed for The Fly Shop
	* Author: Chris Parsons
	* Author URL: https://steelbridgemedia.com
*/

include_once('post-meta/post-meta-guide.php'); // Includes all the custom meta-data

get_header();?>
  <!-- Banner -->
  <section id="banner">
    <div class="inner">
      <img src="<?php echo $guide_logo;?>" class="img-responsive center-block" alt="The Fly Shop Signature Travel Destination">
      <h2><?php the_title();?></h2>
      
      <?php if ( get_post_meta($post->ID, 'guideservice-description', true) )
        echo '<p class="template-description">' . $guideservice_description . '</p>' ?>
      
      <h3>800 &bull; 669 &bull; 3474</h3>
    </div>
    <a href="#main" class="more scrolly">Read more here!</a>
  </section>
  
  
  <!-- GUIDE SERVICE TEMPLATE CONTENT -->
  <!-- One -->
  <span id="main"></span>
  <section id="one" class="wrapper style5 special">
    <div class="inner">
      
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
        if(!empty($video_gsfeature_one)) :?>
          
          <!-- start with above get the check box -->
          
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php echo $video_gsfeature_one; ?>" allowfullscreen></iframe>
          </div>
        <?php else: ?>
          <img src="<?php echo $feature_gs1_image;?>" alt="The Fly Shop Guide Service Image" />
        <?php endif; ?>
      </div>
      
      <div class="content">
        <div id="travel-style" class="privatewaters1">
          <h2><?php echo $feature_gs1_title;?></h2>
          <p class="travel"><?php echo $feature_gs1_cost_textarea;?></p>
          <div class="panel-group" id="accordion1">
            
            <?php if(!empty($feature_gs1_inclusions_textarea)) : ?>
            <div class="panel-travel privatewaters1">
              <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseTwo1">
                <h4 class="panel-title travel">Inclusions&nbsp;<span class="arrow-down"></span></h4>
              </div>
              <div id="collapseTwo1" class="panel-collapse collapse">
                <div class="panel-body">
                  <p class="travel"><?php echo $feature_gs1_inclusions_textarea;?></p>
                </div>
              </div>
            </div>
            <?php endif; ?>
            
            <?php if(!empty($feature_gs1_noninclusions_textarea)) : ?>
            <div class="panel-travel privatewaters1">
              <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseThree1">
                <h4 class="panel-title travel">Non-Inclusions&nbsp;<span class="arrow-down"></span></h4>
              </div>
              <div id="collapseThree1" class="panel-collapse collapse">
                <div class="panel-body">
                  <p class="travel"><?php echo $feature_gs1_noninclusions_textarea;?></p>
                </div>
              </div>
            </div>
            <?php endif; ?>
            
            <?php if(!empty($feature_gs1_packagedeal_textarea)) : ?>
            <div class="panel-travel privatewaters1">
              <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseFive1">
                <h4 class="panel-title travel">Package Deal&nbsp;<span class="arrow-down"></span></h4>
              </div>
              <div id="collapseFive1" class="panel-collapse collapse">
                <div class="panel-body">
                  <p class="travel"><?php echo $feature_gs1_packagedeal_textarea;?></p>
                </div>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
    
    <!-- ==== GUIDE SERVICE SEASONS ==== -->
    
    <section class="spotlight">
      
      <div class="image">
        <!-- Seasons Video/Text/Image Option -->
        <?php
        if(!empty($video_gsfeature_two)) :?>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php echo $video_gsfeature_two; ?>" allowfullscreen></iframe>
          </div>
        <?php else: ?>
          <img src="<?php echo $feature_gs2_image;?>" alt="The Fly Shop Guide Service Image" />
        <?php endif; ?>
      </div>
      
      <div class="content">
        <div id="travel-style" class="privatewaters2">
          <!-- Feature #2 Seasons -->
          <h2><?php echo $feature_gs2_title;?></h2>
          <p class="travel"><?php echo $feature_gs2_seasons_textarea;?></p>
          <div class="panel-group" id="accordion-seasons-readmore">
            <div class="panel-travel guidewaters_fishing4">
              
              <?php
              // Read more
              if(!empty($feature_gs2_seasons_readmore)) :?>
                
                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-seasons-readmore" data-target="#collapseSeasonsmore">
                  <h4 class="panel-title travel">Read More&nbsp;<span class="arrow-down"></span>
                    
                    <?php if( !empty( $feature_gs2_seasons_readmore_info   )) {
                      echo '<span class="readmore-info">' . $feature_gs2_seasons_readmore_info . '</span>';
                    } ?>
                  </h4>
                  
                </div>
                
                <div id="collapseSeasonsmore" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="travel"><?php echo $feature_gs2_seasons_readmore;?></p>
                  </div>
                </div>
              
              <?php endif; ?>
            
            </div>
          </div>
          
          
          <div class="panel-group" id="accordion1">
            
            <?php
            // Spring Option
            if(!empty($feature_gs2_spring_textarea)) :?>
              
              <div class="panel-travel privatewaters2">
                
                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseEight1">
                  <h4 class="panel-title travel">Spring&nbsp;<span class="arrow-down"></span></h4>
                </div>
                <div id="collapseEight1" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="travel"><?php echo $feature_gs2_spring_textarea;?></p>
                  </div>
                </div>
              
              </div>
            
            <?php endif; ?>
            
            <?php
            // Summer Option
            if(!empty($feature_gs2_summer_textarea)) :?>
              
              <div class="panel-travel privatewaters2">
                
                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseNine1">
                  <h4 class="panel-title travel">Summer&nbsp;<span class="arrow-down"></span></h4>
                </div>
                <div id="collapseNine1" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="travel"><?php echo $feature_gs2_summer_textarea;?></p>
                  </div>
                </div>
              
              </div>
            
            <?php endif; ?>
            
            <?php
            // Autumn option
            if(!empty($feature_gs2_autumn_textarea)) :?>
              
              <div class="panel-travel privatewaters2">
                
                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseSix1">
                  <h4 class="panel-title travel">Fall&nbsp;<span class="arrow-down"></span></h4>
                </div>
                <div id="collapseSix1" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="travel"><?php echo $feature_gs2_autumn_textarea;?></p>
                  </div>
                </div>
              
              </div>
            
            <?php endif; ?>
            
            <?php
            // WinterOption
            if(!empty($feature_gs2_winter_textarea)) :?>
              
              <div class="panel-travel privatewaters2">
                
                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseSeven1">
                  <h4 class="panel-title travel">Winter&nbsp;<span class="arrow-down"></span></h4>
                </div>
                <div id="collapseSeven1" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="travel"><?php echo $feature_gs2_winter_textarea;?></p>
                  </div>
                </div>
              
              </div>
            
            <?php endif; ?>
          
          </div>
        </div>
      </div>
    </section>
    
    <!-- === SPOTLIGHT 3 FISHING SECTION === -->
    
    <section class="spotlight">
      
      <div class="image">
        <!-- Feature #3 Video/Text/Image Option -->
        <?php
        if(!empty($video_gsfeature_three)) :?>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php echo $video_gsfeature_three; ?>" allowfullscreen></iframe>
          </div>
        <?php else: ?>
          <img src="<?php echo $feature_gs3_fishing_image;?>" alt="The Fly Shop Guide Service Image" />
        <?php endif; ?>
      
      </div>
      
      <!-- Feature #2 Seasons. Includes two options that are selectable within the Customizer. -->
      <div class="content">
        <div id="travel-style" class="privatewaters3">
          <h2><?php echo $feature_gs3_fishing_title;?></h2>
          <p class="travel"><?php echo $feature_gs3_fishing_content;?></p>
          <div class="panel-group" id="accordion-fishing-guide-readmore">
            <div class="panel-travel guidewaters_fishing4">
              
              <?php
              // Read more
              if(!empty($feature_gs3_fishing_readmore)) :?>
                
                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-fishing-guide-readmore" data-target="#collapseFishing4">
                  <h4 class="panel-title travel">Read More&nbsp;<span class="arrow-down"></span>
                    
                    <?php if( !empty( $feature_gs3_fishing_readmore_info   )) {
                      echo '<span class="readmore-info">' . $feature_gs3_fishing_readmore_info  . '</span>';
                    } ?>
                  
                  </h4>
                </div>
                
                <div id="collapseFishing4" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="travel"><?php echo $feature_gs3_fishing_readmore;?></p>
                  </div>
                </div>
              
              <?php endif; ?>
            
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- === GUIDED FISHING LODGING === -->
    <section class="spotlight">
      
      <div class="image">
        <!-- Guide Service Video/Text/Image Option -->
        <?php
        
        if(!empty($video_gsfeature_four)) : ?>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php echo $video_gsfeature_four; ?>" allowfullscreen></iframe>
          </div>
        <?php else: ?>
          <img src="<?php echo $feature_4_gslodging_image;?>" alt="The Fly Shop Guide Service Waters Image" />
        <?php endif; ?>
      </div>
      
      <div class="content">
        <div id="travel-style" class="privatewaters4">
          
          <h2><?php echo $feature_4_gslodging_title;?></h2>
          
          <p class="travel"><?php echo $feature_4_gslodging_content;?></p>
          
          <div class="panel-group" id="accordion4">
            <div class="panel-travel privatewaters4">
              
              <?php
              // Readmore
              if(!empty($feature_4_gslodging_readmore)) : ?>
                
                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" data-target="#collapseLodging4">
                  <h4 class="panel-title travel">Read More&nbsp;<span class="arrow-down"></span></h4>
                </div>
                
                <div id="collapseLodging4" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="travel"><?php echo $feature_4_gslodging_readmore;?></p>
                  </div>
                </div>
              
              <?php endif; ?>
            
            </div>
          </div><!-- /#accordion4 -->
        </div>
      </div>
    </section>
    
    <!-- === GETTING TO === -->
    <section class="spotlight">
      
      <div class="image">
        <!-- Video/Text/Image Option -->
        <?php
        if(!empty($video_gsfeature_five)) : ?>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php echo $video_gsfeature_five; ?>" allowfullscreen></iframe>
          </div>
        <?php else: ?>
          <img src="<?php echo $feature_gs5_gettingto_image;?>" alt="The Fly Shop Travel Image" />
        <?php endif; ?>
      
      </div>
      
      <div class="content">
        <div id="travel-style" class="privatewaters5">
          
          <h2><?php echo $feature_gs5_get_to_title;?></h2>
          
          <p class="travel"><?php echo $feature_gs5_get_to_content;?></p>
          
          <div class="panel-group" id="accordion5">
            <div class="panel-travel privatewaters5">
              
              <?php
              // Readmore
              if(!empty($feature_gs5_get_to_readmore)) : ?>
                
                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion5" data-target="#collapseOne5">
                  <h4 class="panel-title travel">Read More&nbsp;<span class="arrow-down"></span>
  
                    <?php if( !empty( $feature_gs5_readmore_info   )) {
                      echo '<span class="readmore-info">' . $feature_gs5_readmore_info  . '</span>';
                    } ?>
                    
                  </h4>
                </div>
                <div id="collapseOne5" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p class="travel"><?php echo $feature_gs5_get_to_readmore;?></p>
                  </div>
                </div>
              
              <?php endif; ?>
            
            </div>
          </div>
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
            
            <?php if(get_post_meta(get_the_ID(), 'guideservice-additional-info-image1', true)) {
              
              echo	'<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#guide-carousel" data-slide-to="0"><img src="' . $guideservice_additional_info_image1 . '" class="img-responsive" data-toggle="modal" data-target=".guide-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
            
            <?php if(get_post_meta(get_the_ID(), 'guideservice-additional-info-image2', true)) {
              
              echo	'<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#guide-carousel" data-slide-to="1"><img src="' . $guideservice_additional_info_image2 . '" class="img-responsive" data-toggle="modal" data-target=".guide-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
            
            <?php if(get_post_meta(get_the_ID(), 'guideservice-additional-info-image3', true)) {
              
              echo	'<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#guide-carousel" data-slide-to="2"><img src="' . $guideservice_additional_info_image3 . '" class="img-responsive" data-toggle="modal" data-target=".guide-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
            
            <?php if(get_post_meta(get_the_ID(), 'guideservice-additional-info-image4', true)) {
              
              echo	'<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#guide-carousel" data-slide-to="3"><img src="' . $guideservice_additional_info_image4 . '" class="img-responsive" data-toggle="modal" data-target=".guide-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
          
          </div>
        </div>
        
        <!-- Second Row Travel Images -->
        
        <div class="row">
          <div class="additional-listing">
            
            <?php if(get_post_meta(get_the_ID(), 'guideservice-additional-info-image5', true)) {
              
              echo	'<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#guide-carousel" data-slide-to="4"><img src="' . $guideservice_additional_info_image5 . '" class="img-responsive" data-toggle="modal" data-target=".guide-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
            
            <?php if(get_post_meta(get_the_ID(), 'guideservice-additional-info-image6', true)) {
              
              echo	'<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#guide-carousel" data-slide-to="5"><img src="' . $guideservice_additional_info_image6 . '" class="img-responsive" data-toggle="modal" data-target=".guide-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
            
            <?php if(get_post_meta(get_the_ID(), 'guideservice-additional-info-image7', true)) {
              
              echo	'<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#guide-carousel" data-slide-to="6"><img src="' . $guideservice_additional_info_image7 . '" class="img-responsive" data-toggle="modal" data-target=".guide-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
            
            <?php if(get_post_meta(get_the_ID(), 'guideservice-additional-info-image8', true)) {
              
              echo	'<div class="col-xs-6 col-md-3">',
              '<div class="thumbnail">',
                
                '<a href="#guide-carousel" data-slide-to="7"><img src="' . $guideservice_additional_info_image8 . '" class="img-responsive" data-toggle="modal" data-target=".guide-modal" alt="The Fly Shop Images">',
              
              '</div>',
              
              '</div>';
              
            } ?>
          
          </div>
        </div>
    </div>
    </header>
  </section>
  
  <!-- ====== MODAL SLIDER ====== -->
  
  <div class="additional-img modal fade guide-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="additional-img modal-dialog" role="document">
      
      <div id="guide-carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          
          <?php if(get_post_meta(get_the_ID(), 'guideservice-additional-info-image1', true)) {
            
            echo '<li data-target="#guide-carousel" data-slide-to="0" class="active"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'guideservice-additional-info-image2', true)) {
            
            echo '<li data-target="#guide-carousel" data-slide-to="1"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'guideservice-additional-info-image3', true)) {
            
            echo '<li data-target="#guide-carousel" data-slide-to="2"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'guideservice-additional-info-image4', true)) {
            
            echo '<li data-target="#guide-carousel" data-slide-to="3"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'guideservice-additional-info-image5', true)) {
            
            echo '<li data-target="#guide-carousel" data-slide-to="4"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'guideservice-additional-info-image6', true)) {
            
            echo '<li data-target="#guide-carousel" data-slide-to="5"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'guideservice-additional-info-image7', true)) {
            
            echo '<li data-target="#guide-carousel" data-slide-to="6"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'guideservice-additional-info-image8', true)) {
            
            echo '<li data-target="#guide-carousel" data-slide-to="7"></li>';
            
          } ?>
        
        </ol>
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <?php if(get_post_meta(get_the_ID(), 'guideservice-additional-info-image1', true)) {
            
            echo	'<div class="item active">',
              
              '<img src="' . $guideservice_additional_info_image1 . '" alt="The Fly Shop Guided Fly Fishing">',
            
            '</div>';
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'guideservice-additional-info-image2', true)) {
            
            echo	'<div class="item">',
              
              '<img src="' . $guideservice_additional_info_image2 . '" alt="The Fly Shop Guided Fly Fishing">',
            
            '</div>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'guideservice-additional-info-image3', true)) {
            
            echo	'<div class="item">',
              
              '<img src="' . $guideservice_additional_info_image3 . '" alt="The Fly Shop Guided Fly Fishing">',
            
            '</div>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'guideservice-additional-info-image4', true)) {
            
            echo	'<div class="item">',
              
              '<img src="' . $guideservice_additional_info_image4 . '" alt="The Fly Shop Guided Fly Fishing">',
            
            '</div>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'guideservice-additional-info-image5', true)) {
            
            echo	'<div class="item">',
              
              '<img src="' . $guideservice_additional_info_image5 . '" alt="The Fly Shop Guided Fly Fishing">',
            
            '</div>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'guideservice-additional-info-image6', true)) {
            
            echo	'<div class="item">',
              
              '<img src="' . $guideservice_additional_info_image6 . '" alt="The Fly Shop Guided Fly Fishing">',
            
            '</div>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'guideservice-additional-info-image7', true)) {
            
            echo  '<div class="item">',
              
              '<img src="' . $guideservice_additional_info_image7 . '" alt="The Fly Shop Guided Fly Fishing">',
            
            '</div>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'guideservice-additional-info-image8', true)) {
            
            echo	'<div class="item">',
              
              '<img src="' . $guideservice_additional_info_image8 . '" alt="The Fly Shop Guided Fly Fishing">',
            
            '</div>';
            
          } ?>
        
        </div>
        
        <!-- Controls -->
        <a class="left carousel-control" href="#guide-carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#guide-carousel" role="button" data-slide="next">
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
        <h2><?php echo $cta_guideservice_strong_intro;?></h2>
        <p><?php echo $cta_guideservice_content;?></p>
      </header>
    </div>
  </section>

<?php get_footer();
