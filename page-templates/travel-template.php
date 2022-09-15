<?php
/*
	* Template Name: Travel Template
	* Template Post Type: travel_cpt, lower48
	* Developed for The Fly Shop
	* Author: Chris Parsons
	* Author URL: https://steelbridgemedia.com
*/

include_once('post-meta/post-meta-travel.php'); // Includes all the custom meta-data

get_header();?>
<!-- Banner -->
<section id="banner" class="travel-template-banner">
  <div class="inner">
    <img src="<?php echo $travel_logo;?>" class="img-responsive center-block" alt="The Fly Shop Signature Travel Destination">
    
    <h2><?php the_title();?></h2>
    
    <?php if ( get_post_meta($post->ID, 'travel-description', true) )
      echo '<p class="template-description">' . $travel_description . '</p>' ?>
    
    <h3>800 &bull; 669 &bull; 3474</h3>
  
  </div>
  
  <a href="#main" class="more scrolly">Learn More</a>

</section>
<?php if(is_single(1760)) { ?>
  
  <div id="fp-well" class="well well-sm text-center no-margin-bottom">
    
    <form class="form-inline" method="post" action="https://oi.vresp.com?fid=976c4b8f87" target="vr_optin_popup"  onsubmit="window.open( 'https://www.verticalresponse.com', 'vr_optin_popup', 'scrollbars=yes,width=600,height=450' ); return true">
      
      <div id="pop-over-fp" class="form-group link-color-tfs-red">
        <div>
          <label for="exampleInputEmail2"><h3>Get Fishing Reports From Espiritu Santo Bay Lodge</h3></label>
        </div>
        <input name="email_address" type="email" class="form-control removeglow" id="exampleInputEmail2" placeholder="Add Your Email Here"><span class="mt-1618-mobile">

      <button class="btn-md btn background-color-tfs-red font-color-white opacity-7"  type="submit" value="Sign Up!">Click Here To Have Reports Emailed To You</button>

      <a tabindex="0" role="button" aria-hidden="true" data-trigger="hover" data-toggle="popover" data-placement="top" title="Safe Subscribe" data-content="We respect your privacy and do not tolerate spam and will never sell, rent, lease or give away your email address to any third party. Nor will we send you unsolicited email. You will have the option to safely unsubscribe upon receiving fishing reports related to Espiritu Santo Bay Lodge. We just want to deleiver great photos, fantastic fly fishing ideas, reports and motivation!"><span class="glyphicon glyphicon-question-sign gi-2x"></span></a></span>
      </div>
    </form>
  </div>
<?php } ?>

<article id="main">
  <!-- One -->
  <section id="one" class="wrapper style5 special">
    <div class="inner">
      <h2><?php echo $masthead_bold_textarea;?></h2>
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
        <!-- Costs Video/Text/Image Option -->
        <?php
        $video_feature_one = get_post_meta(get_the_ID(), 'feature-1-video', true);
        if(!empty($video_feature_one)) :?>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php echo $video_feature_one; ?>" allowfullscreen></iframe>
          </div>
        <?php else: ?>
          <img src="<?php echo $feature_1_image;?>" alt="The Fly Shop Travel Image" />
        <?php endif; ?>
      </div>
      
      <!-- RATES AND RESERVATIONS CONTENT. TABLE MODAL. ACTIVATION CHECKBOX -->
      
      <div id="travel-style-one" class="content travel-template">
        <h2><?php echo $feature_1_title;?></h2>
        
        <?php
        if(!empty($rr_table_title)) :?>
          <button type="button" class="table-btn btn btn-transparent" data-toggle="modal" data-target=".travel-table-modal"><h4 class="panel-title travel travel-template table-h4">Click To Review Rates
              &amp; Reservations&nbsp;<span class="arrow-down"></span></h4></button>
        <?php else: ?>
          <p class="travel"><?php echo $feature_1_cost_textarea;?></p>
          <div class="panel-group" id="accordion1">
            <div class="panel-travel">
              <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseTwo1">
                <h4 class="panel-title travel travel-template">Inclusions&nbsp;<span class="arrow-down"></span></h4>
              </div>
              <div id="collapseTwo1" class="panel-collapse collapse">
                <div class="panel-body travel-template">
                  <p class="travel"><?php echo $feature_1_inclusions_textarea;?></p>
                </div>
              </div>
            </div>
            <div class="panel-travel">
              <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseThree1">
                <h4 class="panel-title travel travel-template">Non-Inclusions&nbsp;<span class="arrow-down"></span></h4>
              </div>
              <div id="collapseThree1" class="panel-collapse collapse">
                <div class="panel-body travel-template">
                  <p class="travel"><?php echo $feature_1_noninclusions_textarea;?></p>
                </div>
              </div>
            </div>
            <div class="panel-travel">
              <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseFour1">
                <h4 class="panel-title travel travel-template">Travel Insurance&nbsp;<span class="arrow-down"></span></h4>
              </div>
              <div id="collapseFour1" class="panel-collapse collapse">
                <div class="panel-body travel-template">
                  <p class="travel"><?php echo $feature_1_travelins_textarea;?></p>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </section>
    <section class="spotlight">
      <div class="image">
        <!-- Seasons Video/Text/Image Option -->
        <?php
        $video_feature_two = get_post_meta(get_the_ID(), 'feature-2-video', true);
        if(!empty($video_feature_two)) :?>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php echo $video_feature_two; ?>" allowfullscreen></iframe>
          </div>
        <?php else: ?>
          <img src="<?php echo $feature_2_image;?>" alt="The Fly Shop Travel Image" />
        <?php endif; ?>
      </div>
      
      <!--
        The tabbed section found in the Customizer.
        Visibility is set by checkbox seeting/control in customizer.php.
        Travel Template Customizer setting section shows only when template is selected.
       -->
      
      <?php
      $visibility_basic_season = ( '' == get_theme_mod( 'add_basic' ) ) ? 'hidebasic' : '1';
      $visibility_hilo_season  = ( '' == get_theme_mod( 'add_hilo' ) ) ? 'hidehilo' : '1';
      ?>
      
      <!-- Seasons. Includes two options that are selectable within the Customizer. -->
      <div id="travel-style-two" class="content travel-template">
        <h2><?php echo $feature_2_seasons_title;?></h2>
        
        <!-- Option: Basic Season -->
        <?php
        // Basic Season
        if(!empty($feature_2_seasons_content)) :?>
          
          <div id="element-basic" class="fishing-basic-season">
            <p class="travel"><?php echo $feature_2_seasons_content;?></p>
            <div class="panel-group" id="accordion2">
              <div class="panel-travel">
                <?php if(!empty($feature_2_seasons_readmore)) : ?>
                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" data-target="#collapseOne2">
                  <h4 class="panel-title travel travel-template">Read More&nbsp;<span class="arrow-down"></span>
                    <?php if( !empty( $feature_2_read_more_info  )) {
                      echo '<span class="readmore-info">' . $feature_2_read_more_info . '</span>';
                    } ?>
                  </h4>
                </div>
                <div id="collapseOne2" class="panel-collapse collapse">
                  <div class="panel-body travel-template">
                    <p class="travel"><?php echo $feature_2_seasons_readmore;?></p>
                  </div>
                </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        
        <?php endif; ?>
        
        <!-- Option: Hi / Low Season -->
        <?php
        // Fishing
        if(get_post_meta(get_the_ID(), 'high-low-checkbox', true) == 'yes') :?>
          
          <div id="element-hilo" class="high-low-season">
            <p class="travel"><?php echo $feature_2_seasons_hi_lo_content;?></p>
            <div class="panel-group" id="accordion2hilo">
              <div class="panel-travel">
                <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2hilo" data-target="#collapseOne2hilo">
                  <h4 class="panel-title travel travel-template">High Season&nbsp;<span class="arrow-down"></span></h4>
                </div>
                <div id="collapseOne2hilo" class="panel-collapse collapse">
                  <div class="panel-body travel-template">
                    <p class="travel"><?php echo $feature_2_seasons_hiseason;?></p>
                  </div>
                </div>
                
                <!-- Low Season Collapse -->
                <div class="panel-group" id="accordion3hilo">
                  <div class="panel-travel">
                    <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3hilo" data-target="#collapseOne3hilo">
                      <h4 class="panel-title travel travel-template">Low Season&nbsp;<span class="arrow-down"></span></h4>
                    </div>
                    <div id="collapseOne3hilo" class="panel-collapse collapse">
                      <div class="panel-body travel-template">
                        <p class="travel"><?php echo $feature_2_seasons_lowseason;?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        <?php endif; ?>
      
      </div>
    </section>
    <section class="spotlight">
      <div class="image">
        
        <!-- Getting To Video/Text/Image Option -->
        
        <?php
        $video_feature_three = get_post_meta(get_the_ID(), 'feature-3-video', true);
        
        if(!empty($video_feature_three)) :?>
          
          <div class="embed-responsive embed-responsive-16by9">
            
            <iframe class="embed-responsive-item" src="<?php echo $video_feature_three; ?>" allowfullscreen></iframe>
          
          </div>
        
        <?php else: ?>
          
          <img src="<?php echo $feature_3_gettingto_image; ?>" alt="The Fly Shop Travel Image" />
        
        <?php endif; ?>
      
      </div>
      
      <div id="travel-style-three" class="content travel-template">
        <h2><?php echo $feature_3_get_to_title;?></h2>
        <p class="travel"><?php echo $feature_3_get_to_content;?></p>
        <div class="panel-group" id="accordion3">
          <div class="panel-travel">
            <?php if(!empty($feature_3_get_to_readmore)) : ?>
            <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" data-target="#collapseOne3">
              <h4 class="panel-title travel travel-template">Read More&nbsp;<span class="arrow-down"></span>
                <?php if( !empty( $feature_3_read_more_info  )) {
                  echo '<span class="readmore-info">' . $feature_3_read_more_info . '</span>';
                } ?>
              </h4>
            </div>
            <div id="collapseOne3" class="panel-collapse collapse">
              <div class="panel-body travel-template">
                <p class="travel"><?php echo $feature_3_get_to_readmore;?></p>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div><!-- /#accordion3 -->
      </div>
    
    </section>
    
    <section class="spotlight">
      <div class="image">
        <!-- Lodging Video/Text/Image Option -->
        <?php
        $video_feature_four = get_post_meta(get_the_ID(), 'feature-4-video', true);
        if(!empty($video_fearture_four)) :?>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php echo $video_feature_four; ?>" allowfullscreen></iframe>
          </div>
        <?php else: ?>
          <img src="<?php echo $feature_4_lodging_image;?>" alt="The Fly Shop Travel Image" />
        <?php endif; ?>
      </div>
      
      <div id="travel-style-four" class="content travel-template">
        <h2><?php echo $feature_4_lodging_title;?></h2>
        <p class="travel"><?php echo $feature_4_lodging_content;?></p>
        <div class="panel-group" id="accordion4">
          <div class="panel-travel">
            
            <?php if(!empty($feature_4_lodging_readmore)) : ?>
              
              <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" data-target="#collapseOne4">
                <h4 class="panel-title travel travel-template">Read More&nbsp;<span class="arrow-down"></span>
                  <?php if( !empty( $feature_4_read_more_info  )) {
                    echo '<span class="readmore-info">' . $feature_4_read_more_info . '</span>';
                  } ?>
                </h4>
              </div>
              <div id="collapseOne4" class="panel-collapse collapse">
                <div class="panel-body travel-template">
                  <p class="travel"><?php echo $feature_4_lodging_readmore;?></p>
                </div>
              </div>
            
            <?php endif; ?>
          
          </div>
        </div><!-- /#accordion4 -->
      </div>
    </section>
    <section class="spotlight">
      
      <!-- ==== Fishing Section ==== -->
      
      <div class="image">
        
        <!-- Fishing Video/Text/Image Option -->
        
        <?php // Checkbox to activate video or image
        $video_feature_five = get_post_meta(get_the_ID(), 'feature-5-video', true);
        if(!empty($video_feature_five)) :?>
          
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php echo $video_feature_five; ?>" allowfullscreen></iframe>
          </div>
        
        <?php else: ?>
          
          <img src="<?php echo $feature_5_angling_image;?>" alt="The Fly Shop Travel Image" />
        
        <?php endif; ?>
      
      </div>
      
      <!-- ==== Content And Readmore ==== -->
      
      <div id="travel-style-five" class="content travel-template">
        <h2><?php echo $feature_5_angling_title;?></h2>
        <p class="travel"><?php echo $feature_5_angling_content;?></p>
        <div class="panel-group" id="accordion5">
          <div class="panel-travel">
            
            <?php if(!empty($feature_5_angling_readmore)) : ?>
              
              <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion5" data-target="#collapseOne5">
                <h4 class="panel-title travel travel-template">Read More&nbsp;<span class="arrow-down"></span>
                  <?php if( !empty( $feature_5_read_more_info  )) {
                    echo '<span class="readmore-info">' . $feature_5_read_more_info . '</span>';
                  } ?>
                </h4>
              </div>
              <div id="collapseOne5" class="panel-collapse collapse">
                <div class="panel-body travel-template">
                  <p class="travel"><?php echo $feature_5_angling_readmore;?></p>
                </div>
              </div>
            
            <?php endif; ?>
          
          </div>
        </div><!-- /#accordion5 -->
      </div>
    </section>
  </section>
  
  <!-- ==== Set The Hook ==== -->
  <?php
  if(!empty($sth_content_1)) : ?>
    <section id="two-325" class="wrapper style1 special">
      <div class="setthehook">
        
        <div class="row row-flex-sth-title">
          <div id="setthehook-title" class="col-md-8 col-md-offset-2">
            <h2>What Makes This Destination Special and Unique?</h2>
          </div>
        </div>
        
        <div id="sthook" class="">
          <!-- Set The Hook #1 -->
          <section class="setthehook1">
            <div id="setthehook1" class="container hook">
              
              <div class="container">
                <p class="travel setthehook-p"><?php _e($sth_content_1); ?></p>
              </div>
            
            
            </div>
          </section>
        </div>
      </div>
    </section>
  <?php endif; ?>
  
  <!-- Three -->
  <section id="three" class="wrapper style7 special">
    <div class="inner">
      <header class="major">
        <h2>Additional Photos</h2>
        <hr class="fancy1">
        <div class="row">
          <div class="additional-listing">
            
            <?php if(get_post_meta(get_the_ID(), 'additional-info-image1', true)) {
              
              echo '<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#travel-carousel" data-slide-to="0"><img src="' . $additional_info_image1 . '" data-toggle="modal" data-target=".travel-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
            
            <?php if(get_post_meta(get_the_ID(), 'additional-info-image2', true)) {
              
              echo '<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#travel-carousel" data-slide-to="1"><img src="' . $additional_info_image2 . '" data-toggle="modal" data-target=".travel-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
            
            <?php if(get_post_meta(get_the_ID(), 'additional-info-image3', true)) {
              
              echo '<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#travel-carousel" data-slide-to="2"><img src="' . $additional_info_image3 . '" data-toggle="modal" data-target=".travel-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
            
            <?php if(get_post_meta(get_the_ID(), 'additional-info-image4', true)) {
              
              echo '<div class="col-xs-6 col-md-3">',
                
                '<div class="thumbnail">'.
                
                '<a href="#travel-carousel" data-slide-to="3"><img src="' . $additional_info_image4 . '" data-toggle="modal" data-target=".travel-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
          
          </div>
        </div>
        <!-- Second Row Travel Images -->
        <div class="row">
          <div class="additional-listing">
            
            <?php if(get_post_meta(get_the_ID(), 'additional-info-image5', true)) {
              
              echo '<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#travel-carousel" data-slide-to="4"><img src="' . $additional_info_image5 . '" data-toggle="modal" data-target=".travel-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
            
            <?php if(get_post_meta(get_the_ID(), 'additional-info-image6', true)) {
              
              echo '<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#travel-carousel" data-slide-to="5"><img src="' . $additional_info_image6 . '" data-toggle="modal" data-target=".travel-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
            
            <?php if(get_post_meta(get_the_ID(), 'additional-info-image7', true)) {
              
              echo '<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#travel-carousel" data-slide-to="6"><img src="' . $additional_info_image7 . '" data-toggle="modal" data-target=".travel-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
            
            <?php if(get_post_meta(get_the_ID(), 'additional-info-image8', true)) {
              
              echo '<div class="col-xs-6 col-md-3">',
              
              '<div class="thumbnail">',
                
                '<a href="#travel-carousel" data-slide-to="7"><img src="' . $additional_info_image8 . '" data-toggle="modal" data-target=".travel-modal" alt="The Fly Shop Images"></a>',
              
              '</div>',
              
              '</div>';
              
            } ?>
          
          </div>
        </div>
    </div>
  </section>
  
  <!-- ====== MODAL SLIDER ====== -->
  
  <div class="additional-img modal fade travel-modal" tabindex="-1" role="dialog" aria-labelledby="travelTableModalLabel">
    <div class="additional-img modal-dialog" role="document">
      
      <div id="travel-carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          
          <?php if(get_post_meta(get_the_ID(), 'additional-info-image1', true)) {
            
            echo '<li data-target="#travel-carousel" data-slide-to="0" class="active"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'additional-info-image2', true)) {
            
            echo '<li data-target="#travel-carousel" data-slide-to="1"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'additional-info-image3', true)) {
            
            echo '<li data-target="#travel-carousel" data-slide-to="2"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'additional-info-image4', true)) {
            
            echo '<li data-target="#travel-carousel" data-slide-to="3"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'additional-info-image5', true)) {
            
            echo '<li data-target="#travel-carousel" data-slide-to="4"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'additional-info-image6', true)) {
            
            echo '<li data-target="#travel-carousel" data-slide-to="5"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'additional-info-image7', true)) {
            
            echo '<li data-target="#travel-carousel" data-slide-to="6"></li>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'additional-info-image8', true)) {
            
            echo '<li data-target="#travel-carousel" data-slide-to="7"></li>';
            
          } ?>
        
        </ol>
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <?php if(get_post_meta(get_the_ID(), 'additional-info-image1', true)) {
            
            echo	'<div class="item active">',
              
              '<img src="' . $additional_info_image1 . '" alt="The Fly Shop World Fly Fishing Travel">',
            
            '</div>';
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'additional-info-image2', true)) {
            
            echo	'<div class="item">',
              
              '<img src="' . $additional_info_image2 . '" alt="The Fly Shop World Fly Fishing Travel">',
            
            '</div>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'additional-info-image3', true)) {
            
            echo	'<div class="item">',
              
              '<img src="' . $additional_info_image3 . '" alt="The Fly Shop World Fly Fishing Travel">',
            
            '</div>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'additional-info-image4', true)) {
            
            echo	'<div class="item">',
              
              '<img src="' . $additional_info_image4 . '" alt="The Fly Shop World Fly Fishing Travel">',
            
            '</div>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'additional-info-image5', true)) {
            
            echo	'<div class="item">',
              
              '<img src="' . $additional_info_image5 . '" alt="The Fly Shop World Fly Fishing Travel">',
            
            '</div>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'additional-info-image6', true)) {
            
            echo	'<div class="item">',
              
              '<img src="' . $additional_info_image6 . '" alt="The Fly Shop World Fly Fishing Travel">',
            
            '</div>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'additional-info-image7', true)) {
            
            echo  '<div class="item">',
              
              '<img src="' . $additional_info_image7 . '" alt="The Fly Shop World Fly Fishing Travel">',
            
            '</div>';
            
          } ?>
          
          <?php if(get_post_meta(get_the_ID(), 'additional-info-image8', true)) {
            
            echo	'<div class="item">',
              
              '<img src="' . $additional_info_image8 . '" alt="The Fly Shop World Fly Fishing Travel">',
            
            '</div>';
            
          } ?>
        
        </div>
        
        <!-- Controls -->
        <a class="left carousel-control" href="#travel-carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#travel-carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</article>

<!-- CALL TO ACTION ROW -->
<section id="cta" class="wrapper style4">
  <div class="inner">
    <header class="text-center">
      <h2><?php echo $cta_strong_intro;?></h2>
      <p class="lead text-center text-justify"><?php echo $cta_content;?></p>
    </header>
  </div>
</section>
<!-- Table Modal -->
<div id="travelmodal-table" class="modal fade travel-table-modal" tabindex="-1" role="dialog"
     aria-labelledby="travelTableModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="table-bg-img modal-content">
      <div class="table-header modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $rr_table_title; ?></h4>
      </div>
      <div class="modal-body">
        <?php
        $rr_table_content_textarea = get_post_meta(get_the_ID(), 'rr-table-content-textarea', true );
        if(!empty($rr_table_content_textarea)) : ?>
          <div class="modal-body-content mb-1618"><?php echo $rr_table_content_textarea; ?></div>
        <?php endif; ?>
        <div class="table-responsive">
          <table class="table-travel table table-hover"><?php echo $rr_table_textarea;?></table>
        </div>
        <h4>Inclusions:</h4>
        <?php echo '<p>' . $feature_1_inclusions_textarea . '</p>'; ?>
        <h4>Non-Inclusions</h4>
        <?php echo '<p>' . $feature_1_noninclusions_textarea . '</p>'; ?>
      
      </div>
    </div>
  </div>
</div>
<?php get_footer();?>
