<?php
/**
 * Template Name: Fish Camp Template
 * Template Post Type: fishcamp_cpt
 * Developed for The Fly Shop
 * @package The_Fly_Shop
 * Author: Chris Parsons
 * Author URL: https://steelbridgemedia.com
 */
include_once('post-meta/post-meta-fish-camp.php');

get_header(); ?>
  <!-- Banner -->
  <span class="fishcamphack"></span>
  <section id="banner">
    <div class="inner fishcamp-inner">
      
      <img src="<?php echo $fish_camp_logo;?>" class="img-responsive center-block" alt="The Fly Shop Private Waters">
      
      <h2 id="fishcamp-h2"><?php the_title();?></h2>
      <!--<p id="fishcamp-desc">< //echo $fish_camp_description;?></p>-->
      
      <?php if ( get_post_meta($post->ID, 'fish-camp-description', true) )
        echo '<p class="template-description">' . $fish_camp_description . '</p>' ?>
      
      <h3 id="fishcamp-tel">800 &bull; 669 &bull; 3474</h3>
    
    </div>
    
    <a href="#main" id="fishcamp-more" class="more scrolly">Read more here!</a>
  
  </section>
  
  <!-- One -->
  <section id="fishcamp-one" class="wrapper style5 special">
    <span id="main"></span>
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
  <section id="fishcamp-two" class="wrapper alt style2">
    <section class="spotlight">
      
      <div class="image">
        <!-- Feature #2 Video/Text/Image Option -->
        <?php
        if(!empty($video_fcfeature_one)) :?>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php echo $video_fcfeature_one; ?>" allowfullscreen></iframe>
          </div>
        <?php else: ?>
          <img src="<?php echo $feature_fc1_image;?>" alt="The Fly Shop Private Waters Image" />
        <?php endif; ?>
      </div>
      <div class="content">
        <div id="travel-style" class="fishcamp1">
          
          <?php if(!empty($feature_fc1_title)) : ?>
            <h2><?php echo $feature_fc1_title;?></h2>
          <?php endif; ?>
          
          <?php if(!empty($feature_fc1_cost_textarea)) : ?>
            <div class="travel"><?php echo $feature_fc1_cost_textarea; ?></div>
          <?php endif; ?>
          
          <div class="panel-group" id="accordion1">
            
            <div class="panel-travel fishcamp1">
              
              <?php if(!empty($feature_fc1_inclusions_textarea)) : ?>
                
                <div class="fishcamp">
                  <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseTwo1">
                    <h4 class="panel-title travel">Inclusions&nbsp;<span class="arrow-down"></span></h4>
                  </div>
                  
                  <div id="collapseTwo1" class="panel-collapse collapse">
                    <div class="panel-body">
                      <div class="travel"><?php echo $feature_fc1_inclusions_textarea;?></div>
                    </div>
                  </div>
                </div>
              
              <?php endif; ?>
            
            </div>
            
            <div class="panel-travel fishcamp1">
              
              <?php if(!empty($feature_fc1_noninclusions_textarea)) : ?>
                
                <div class="fishcamp">
                  <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseThree1">
                    <h4 class="panel-title travel">Non-Inclusions&nbsp;<span class="arrow-down"></span></h4>
                  </div>
                  <div id="collapseThree1" class="panel-collapse collapse">
                    <div class="panel-body">
                      <div class="travel"><?php echo $feature_fc1_noninclusions_textarea;?></div>
                    </div>
                  </div>
                </div>
              
              <?php endif; ?>
            
            </div>
          
          </div>
        </div>
      </div>
    </section>
    
    <!-- ===  DATES === -->
    <section class="spotlight">
      
      <div class="image">
        <!-- Dates Video/Text/Image Option -->
        <?php
        if(!empty($video_fcfeature_two)) :?>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php echo $video_fcfeature_two; ?>" allowfullscreen></iframe>
          </div>
        <?php else: ?>
          <img src="<?php echo $feature_fc2_image;?>" alt="The Fly Shop Private Waters Image" />
        <?php endif; ?>
      </div>
      
      <div class="content">
        <div id="travel-style" class="fishcamp2">
          
          <?php if(!empty($feature_fc2_title)) : ?>
            <h2><?php echo $feature_fc2_title;?></h2>
          <?php endif; ?>
          
          <?php if(!empty($feature_fc2_seasons_textarea)) : ?>
            <div class="travel" id="travel"><?php echo $feature_fc2_seasons_textarea; ?></div>
          <?php endif; ?>
          
          <div class="panel-group" id="accordiondates">
            <div class="panel-travel">
              
              <?php
              // Dates read more
              if(!empty($feature_fc2_readmore_textarea)) :?>
                
                <div class="fishcamp2">
                  <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordiondates" data-target="#collapseOnedates">
                    <h4 class="panel-title travel lodging-arrow">Read More&nbsp;<span class="arrow-down"></span>
                      
                      <?php if( !empty( $feature_fc2_readmore_info   )) {
                        echo '<span class="readmore-info">' . $feature_fc2_readmore_info  . '</span>';
                      } ?>
                    
                    </h4>
                  </div>
                  
                  <div id="collapseOnedates" class="panel-collapse collapse">
                    <div class="panel-body fishcamp2">
                      <div class="travel"><?php echo $feature_fc2_readmore_textarea;?></div>
                    </div>
                  </div>
                </div>
              
              <?php endif; ?>
            
            </div>
          </div><!-- /#accordiondates -->
        </div>
      </div>
    </section>
    
    <!-- === LODGING === -->
    <section class="spotlight">
      
      <div class="image">
        <!-- Feature #4 Video/Text/Image Option -->
        <?php
        
        if(!empty($video_fcfeature_four)) :?>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php echo $video_fcfeature_four; ?>" allowfullscreen></iframe>
          </div>
        <?php else: ?>
          <img src="<?php echo $feature_fc3_fishing_image; ?>" alt="The Fly Shop Private Waters Image" />
        <?php endif; ?>
      </div>
      
      <div class="content">
        <div id="travel-style" class="fishcamp4">
          
          <h2>
            <?php if(!empty($feature_4_fclodging_title)) : ?>
              <?php echo $feature_4_fclodging_title;?><
            <?php endif; ?>
          </h2>
          
          <div class="travel">
            <?php if(!empty($feature_4_fclodging_content)) : ?>
              <?php echo $feature_4_fclodging_content;?>
            <?php endif; ?>
          </div>
          
          <div class="panel-group" id="accordion4">
            <div class="panel-travel fishcamp4">
              
              <?php
              // Read more option
              if(!empty($feature_4_fclodging_readmore)) :?>
                
                <div class="fishcamp">
                  <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" data-target="#collapseOne4">
                    <h4 class="panel-title travel lodging-arrow">Read More&nbsp;<span class="arrow-down"></span>
                      
                      <?php if( !empty( $feature_fc4_readmore_info   )) {
                        echo '<span class="readmore-info">' . $feature_fc4_readmore_info  . '</span>';
                      } ?>
                    
                    </h4>
                  </div>
                  
                  <div id="collapseOne4" class="panel-collapse collapse">
                    <div class="panel-body">
                      <div class="travel"><?php echo $feature_4_fclodging_readmore;?></div>
                    </div>
                  </div>
                </div>
              
              <?php endif; ?>
            
            </div>
          </div><!-- /#accordion4 -->
        </div>
      </div>
    </section>
    
    <!-- ===  GETTING TO === -->
    <section class="spotlight">
      
      <div class="image">
        <!-- Getting To Video/Text/Image Option -->
        <?php
        if(!empty($video_fcfeature_five)) :?>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php echo $video_fcfeature_five; ?>" allowfullscreen></iframe>
          </div>
        <?php else: ?>
          <img src="<?php echo $feature_fc4_image; ?>" alt="The Fly Shop Travel Image" />
        <?php endif; ?>
      </div>
      
      <div class="content">
        <div id="travel-style" class="fishcamp5">
          
          <h2>
            <?php if(!empty($feature_fc5_get_to_title)) {
              echo $feature_fc5_get_to_title;
            } ?>
          </h2>
          
          <div class="travel">
            <?php if(!empty($feature_fc5_get_to_content)) {
              echo $feature_fc5_get_to_content;
            } ?>
          </div>
          
          <div class="panel-group" id="accordion5">
            <div class="panel-travel fishcamp5">
              
              <?php
              // Read more Option
              if(!empty($feature_fc5_get_to_readmore)) :?>
                
                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion5" data-target="#collapseOne5">
                  <h4 class="panel-title travel">Read More&nbsp;<span class="arrow-down"></span>
                    
                    <?php if( !empty( $feature_fc3_readmore_info )) {
                      echo '<span class="readmore-info">' . $feature_fc3_readmore_info . '</span>';
                    } ?>
                  
                  </h4>
                
                </div>
                <div id="collapseOne5" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="travel"><?php echo $feature_fc5_get_to_readmore;?></div>
                  </div>
                </div>
              
              <?php endif; ?>
            
            </div>
          </div><!-- /#accordion5 -->
        </div>
      </div>
    </section>
    
    <section class="spotlight">
      
      <div class="image">
        
        <!-- Itinerary Video/Text/Image Option -->
        <?php
        if(!empty($video_fcfeature_five)) :?>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php echo $video_fcfeature_five; ?>" allowfullscreen></iframe>
          </div>
        <?php else: ?>
          <img src="<?php echo $feature_fc5_image; ?>" alt="The Fly Shop Travel Image" />
        <?php endif; ?>
      
      </div>
      
      <!-- Itinerary section  -->
      <div class="content">
        <div id="travel-style" class="fishcamp3">
          
          <h2>
            <?php if(!empty($feature_fcfive_title)) {
              echo $feature_fcfive_title;
            } ?>
          </h2>
          
          <div class="travel">
            <?php if(!empty($feature_fcfive_textarea)) {
              echo $feature_fcfive_textarea;
            } ?>
          </div>
          
          <div class="panel-group" id="accordionfive">
            <div class="panel-travel fishcamp3">
              
              <?php
              // Readmore Option
              if(!empty($feature_fcfive_readmore_textarea)) :?>
                
                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordionfive" data-target="#collapseOnefive">
                  <h4 class="panel-title travel">Read More&nbsp;<span class="arrow-down"></span>
                    
                    <?php if( !empty( $feature_fcfive_readmore_info )) {
                      echo '<span class="readmore-info">' . $feature_fcfive_readmore_info . '</span>';
                    } ?>
                  
                  </h4>
                </div>
                <div id="collapseOnefive" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="travel"><?php echo $feature_fcfive_readmore_textarea;?></div>
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
        <!-- First row additional info -->
        <div class="row">
          <div class="additional-listing">
            
            <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image1', true)) {
              
              echo	'<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#fishcamp-carousel" data-slide-to="0"><img src="' . $fish_camp_additional_info_image1 . '" class="img-responsive" data-toggle="modal" data-target=".fishcamp-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            }?>
            
            <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image2', true)) {
              
              echo	'<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#fishcamp-carousel" data-slide-to="1"><img src="' . $fish_camp_additional_info_image2 . '" class="img-responsive" data-toggle="modal" data-target=".fishcamp-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
            
            <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image3', true)) {
              
              echo	'<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#fishcamp-carousel" data-slide-to="2"><img src="' . $fish_camp_additional_info_image3 . '" class="img-responsive" data-toggle="modal" data-target=".fishcamp-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
            
            <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image4', true)) {
              
              echo	'<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#fishcamp-carousel" data-slide-to="3"><img src="' . $fish_camp_additional_info_image4 . '" class="img-responsive" data-toggle="modal" data-target=".fishcamp-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
          
          </div>
        </div>
        <!-- Second Row Fish Camp Images -->
        <div class="row">
          <div class="additional-listing">
            
            <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image5', true)) {
              echo	'<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#fishcamp-carousel" data-slide-to="4"><img src="' . $fish_camp_additional_info_image5 . '" class="img-responsive" data-toggle="modal" data-target=".fishcamp-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
            
            <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image6', true)) {
              
              echo	'<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#fishcamp-carousel" data-slide-to="5"><img src="' . $fish_camp_additional_info_image6 . '" class="img-responsive" data-toggle="modal" data-target=".fishcamp-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
            
            <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image7', true)) {
              
              echo	'<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#fishcamp-carousel" data-slide-to="6"><img src="' . $fish_camp_additional_info_image7 . '" class="img-responsive" data-toggle="modal" data-target=".fishcamp-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
            
            <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image8', true)) {
              
              echo	'<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#fishcamp-carousel" data-slide-to="7"><img src="' . $fish_camp_additional_info_image8 . '" class="img-responsive" data-toggle="modal" data-target=".fishcamp-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
          
          </div>
        </div>
    </div>
    </header>
  </section>
  
  <!-- ====== MODAL SLIDER ====== -->
  
  <div class="additional-img modal fade fishcamp-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="additional-img modal-dialog" role="document">
      
      <div id="fishcamp-carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          
          <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image1', true)) {
            
            echo '<li data-target="#fishcamp-carousel" data-slide-to="0" class="active"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image2', true)) {
            
            echo '<li data-target="#fishcamp-carousel" data-slide-to="1"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image3', true)) {
            
            echo '<li data-target="#fishcamp-carousel" data-slide-to="2"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image4', true)) {
            
            echo '<li data-target="#fishcamp-carousel" data-slide-to="3"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image5', true)) {
            
            echo '<li data-target="#fishcamp-carousel" data-slide-to="4"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image6', true)) {
            
            echo '<li data-target="#fishcamp-carousel" data-slide-to="5"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image7', true)) {
            
            echo '<li data-target="#fishcamp-carousel" data-slide-to="6"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image8', true)) {
            
            echo '<li data-target="#fishcamp-carousel" data-slide-to="7"></li>';
            
          } ?>
        
        </ol>
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          
          <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image1', true)) {
            
            echo	'<div class="item active">',
              
              '<img src="' . $fish_camp_additional_info_image1 . '" alt="The Fly Shop World Fly Fishing Travel">',
            
            '</div>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image2', true)) {
            
            echo	'<div class="item">',
              
              '<img src="' . $fish_camp_additional_info_image2 . '" alt="The Fly Shop World Fly Fishing Travel">',
            
            '</div>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image3', true)) {
            
            echo 	'<div class="item">',
              
              '<img src="' . $fish_camp_additional_info_image3 . '" alt="The Fly Shop World Fly Fishing Travel">',
            
            '</div>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image4', true)) {
            
            echo	'<div class="item">',
              
              '<img src="' . $fish_camp_additional_info_image4 . '" alt="The Fly Shop World Fly Fishing Travel">',
            
            '</div>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image5', true)) {
            
            echo	'<div class="item">',
              
              '<img src="' . $fish_camp_additional_info_image5 . '" alt="The Fly Shop World Fly Fishing Travel">',
            
            '</div>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image6', true)) {
            
            echo	'<div class="item">',
              
              '<img src="' . $fish_camp_additional_info_image6 . '" alt="The Fly Shop World Fly Fishing Travel">',
            
            '</div>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image7', true)) {
            
            echo	'<div class="item">',
              
              '<img src="' . $fish_camp_additional_info_image7 . '" alt="The Fly Shop World Fly Fishing Travel">',
            
            '</div>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image8', true)) {
            
            echo	'<div class="item">',
              
              '<img src="' . $fish_camp_additional_info_image8 . '" alt="The Fly Shop World Fly Fishing Travel">',
            
            '</div>';
            
          } ?>
        
        </div>
        
        <!-- Controls -->
        <a class="left carousel-control" href="#fishcamp-carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#fishcamp-carousel" role="button" data-slide="next">
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
        <h2><?php echo $cta_fish_camp_strong_intro;?></h2>
        <p><?php echo $cta_fish_camp_content;?></p>
      </header>
    </div>
  </section>

<?php
get_footer();
