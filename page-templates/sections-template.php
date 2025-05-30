<?php
	/*
		* Template Name: Sections Template
		* Template Post Type: post, page, travel_cpt, schools_cpt, adventures, guide_service, fishcamp_cpt, travel-blog
		* Developed for The Fly Shop
		* Author: Chris Parsons
		* Author URL: https://steelbridge.io
	*/
	
	$sections_featured_img = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
	$the_sections_default  = get_bloginfo( 'template_directory' ) . '/images/default/default-page-header.png';
	$sections_page_logo    = get_theme_mod( 'sections_page_logo' );
	$sections_hero_image   = get_post_meta( get_the_ID(), 'sections-hero-image', true );
	$sections_video        = get_post_meta( get_the_ID(), 'sections-video', true );
	$sections_video_poster = get_post_meta( get_the_ID(), 'sections-video-poster', true );
	
	include_once( 'post-meta/post-meta-sections.php' );
	get_header( 'sections' ); ?>

<?php if ( empty( $sections_hero_image ) ) : ?>
  </div>    <!-- .container-fluid. Opening tag found in header.php-->
<?php endif; ?>

<?php if ( ! empty( $sections_hero_image ) || ( ! empty( $sections_video ) ) && ! has_post_thumbnail() ) : ?>
  <!-- Banner -->
  <section id="banner" class="video-control">
    <video id="sections-background-video" autoplay loop muted poster="<?php echo $sections_video_poster; ?>">
      <source src="<?php echo $sections_video; ?>" type="video/mp4">
    </video>
    <div class="inner">
			<?php
				$guide_logo = get_post_meta( get_the_ID(), 'guideservice-logo', true );
				if ( ! empty( $sections_logo ) ) { ?>
          <img src="<?php echo $sections_logo; ?>" class="img-responsive center-block" alt="The Fly Shop Signature Travel Destination">
				<?php } ?>
      <h2><?php the_title(); ?></h2>
			<?php
				$guideservice_description = get_post_meta( get_the_ID(), 'guideservice-description', true );
				if ( ! empty( $sections_description ) ) { ?>
          <p class="template-description"><?php echo $sections_description; ?></p>
				<?php } ?>
      <h3>800 &bull; 669 &bull; 3474</h3>
    </div>
    <a href="#main" class="more scrolly">Read more here!</a>
  </section>

<?php endif; ?>
  
  <div id="primary" class="content-area section-template-content" style="position: relative;">
  <div id="main" role="main">
  
  <!-- === Featured Image For Header === -->
<?php if ( has_post_thumbnail() && ( empty( $sections_hero_image ) ) && ( empty( $sections_video ) ) ) : ?>
  
  <div id="sections-hero-image" class="template-header">
    <!-- Featured Imgae -->
    <img src="<?php echo $sections_featured_img['0']; ?>" class="paralaxed img-responsive-width-100 center-block">
    <div id="sections-content-center" class="center-content-flex template-header-content">
      <div id="sections-temp-hero-content" class="basicpagelogo
      signature-header template-class
           text-center">
        <div class="inner">
          <dl class="landing-hd">
            <dd class="dd-1"><img src="<?php echo $sections_logo; ?>" class="img-responsive-logo" alt="The Fly Shop Logo" title="Sections Logo"></dd>
            <dd class="dd-2"><h2 class="logo-tel"><?php echo get_the_title(); ?></h2></dd>
						<?php
							if ( get_post_meta( $post->ID, 'sections-description', true ) )
								echo '<dd class="dd-3"><p class="template-description">' . $sections_description . '</p></dd>'
						?>
            <dd class="dd-4"><h3 class="logo-tel"><a href="tel:18006693474">800 &bull; 669 &bull; 3474</a></h3></dd>
          </dl>
        </div>
        <div class="scrollto animated animatedFadeInUp fadeInUp">
          <a href="#scrollto" class="template more scrolly">Learn More</a>
        </div>
      </div>
    </div>
  </div>

<?php endif; ?>
  
  <!-- === If there isn't a Featured Image, use default === -->
<?php if ( ! has_post_thumbnail() && ( empty( $sections_hero_image ) ) && ( empty( $sections_video ) ) ) : ?>
  
  <header class="parallax-window center-content-flex" data-parallax="scroll" data-image-src="<?php echo $the_sections_default; ?>">
    <div class="basicpagelogo signature-header sections-header template-class text-center">
      <img src="<?php echo $sections_logo; ?>" class="img-responsive center-block" alt="The Fly Shop Logo" title="Sections Logo">
      <h2><?php echo get_the_title(); ?></h2>
			<?php if ( get_post_meta( $post->ID, 'sections-description', true ) )
				echo '<p class="template-description">' . $sections_description . '</p>' ?>
      <h3>800 &bull; 669 &bull; 3474</h3>
    </div>
  </header>

<?php endif; ?>

<?php if ( ! empty( $sections_hero_image ) ) : ?>
  <section id="one" class="sections-wrap wrapper style5 special">
  <div class="inner">
<?php endif; ?>
  <!-- === Introduction Section === -->
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
<?php if ( ! empty( $sections_hero_image ) ) : ?>
  </div>
  </section>
<?php endif; ?>
  
  <!-- ==== CAROUSEL ==== -->
  <!-- Item slider-->
  <!-- Javascript is in main.js -->
<?php
	// Carousel Images activated by check-box
	if ( get_post_meta( get_the_ID(), 'sections-csel-checkbox', true ) == 'yes' ) :?>
    
    <div class="container-fluid">
      
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="carousel carousel-showallmove1 slide" id="itemslider">
            <div class="carousel-inner">
              
              <div class="item active">
                <div class="col-xs-12 col-sm-6 col-md-2">
                  <a href="<?php echo $sections_csel_1_link; ?>"><img src="<?php echo esc_url( $sections_csel_1_img ); ?>" class="img-responsive center-block"></a>
                </div>
              </div>
              
              <div class="item">
                <div class="col-xs-12 col-sm-6 col-md-2">
                  <a href="<?php echo $sections_csel_2_link; ?>"><img src="<?php echo esc_url( $sections_csel_2_img ); ?>" class="img-responsive center-block"></a>
                </div>
              </div>
              
              <div class="item">
                <div class="col-xs-12 col-sm-6 col-md-2">
                  <a href="<?php echo $sections_csel_3_link; ?>"><img src="<?php echo esc_url( $sections_csel_3_img ); ?>" class="img-responsive center-block"></a>
                </div>
              </div>
              
              <div class="item">
                <div class="col-xs-12 col-sm-6 col-md-2">
                  <a href="<?php echo $sections_csel_4_link; ?>"><img src="<?php echo esc_url( $sections_csel_4_img ); ?>" class="img-responsive center-block"></a>
                </div>
              </div>
              
              <div class="item">
                <div class="col-xs-12 col-sm-6 col-md-2">
                  <a href="<?php echo $sections_csel_5_link; ?>"><img src="<?php echo esc_url( $sections_csel_5_img ); ?>" class="img-responsive center-block"></a>
                </div>
              </div>
              
              <div class="item">
                <div class="col-xs-12 col-sm-6 col-md-2">
                  <a href="<?php echo $sections_csel_6_link; ?>"><img src="<?php echo esc_url( $sections_csel_6_img ); ?>" class="img-responsive center-block"></a>
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
  
  <section id="two" class="wrapper alt style2">
    
    <!-- ==== Section #1 ==== -->
		
		<?php
			if ( get_post_meta( get_the_ID(), 'sections-1-option-checkbox', true ) == 'yes' ) : ?>
        <section class="spotlight">
          
          <div class="image">
            <!-- Costs Video/Text/Image Option -->
						<?php
							if ( get_post_meta( get_the_ID(), 'sections-1-video-image-checkbox', true ) == 'yes' ) :?>
                
                <div class="embed-responsive embed-responsive-16by9">
                  
                  <iframe class="embed-responsive-item" src="<?php echo $sections_1_video; ?>" allowfullscreen></iframe>
                
                </div>
							
							<?php else: ?>
                
                <img src="<?php echo $sections_1_image; ?>" alt="The Fly Shop Travel Image"/>
							
							<?php endif; ?>
          
          </div>
          
          <div class="content">
            <div id="travel-style">
              
              <h2><?php echo $sections_1_title; ?></h2>
              
              <p class="travel"><?php echo $sections_1_textarea; ?></p>
							
							<?php // Displays read more section if needed
								if ( get_post_meta( get_the_ID(), 'sections-1-readmore-checkbox', true ) == 'yes' ) :?>
                  
                  <div class="panel-group" id="accordion1">
                    <div class="panel-travel">
                      
                      <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseTwo1">
                        
                        <h4 class="panel-title travel">Read more...&nbsp;<span class="arrow-down"></span></h4>
                      
                      </div>
                      
                      <div id="collapseTwo1" class="panel-collapse collapse">
                        <div class="panel-body">
                          
                          <p class="travel"><?php echo $sections_1_readmore; ?></p>
                        
                        </div>
                      </div>
                    
                    </div>
                  </div> <!-- /.panel-group -->
								
								<?php endif; ?>
            
            </div> <!-- /#travel-style -->
          </div> <!-- /.content -->
        
        </section>
			<?php endif; ?> <!-- sections-1-option-checkbox -->
    
    <!-- ==== Section #2 ==== -->
		
		<?php
			if ( get_post_meta( get_the_ID(), 'sections-2-option-checkbox', true ) == 'yes' ) : ?>
        <section class="spotlight">
          
          <div class="image">
            <!-- Costs Video/Text/Image Option -->
						<?php
							if ( get_post_meta( get_the_ID(), 'sections-2-video-image-checkbox', true ) == 'yes' ) :?>
                
                <div class="embed-responsive embed-responsive-16by9">
                  
                  <iframe class="embed-responsive-item" src="<?php echo $sections_2_video; ?>" allowfullscreen></iframe>
                
                </div>
							
							<?php else: ?>
                
                <img src="<?php echo $sections_2_image; ?>" alt="The Fly Shop Travel Image"/>
							
							<?php endif; ?>
          
          </div>
          
          <div class="content">
            <div id="travel-style">
              
              <h2><?php echo $sections_2_title; ?></h2>
              
              <p class="travel"><?php echo $sections_2_textarea; ?></p>
							
							<?php // Displays read more section if needed
								if ( get_post_meta( get_the_ID(), 'sections-2-readmore-checkbox', true ) == 'yes' ) :?>
                  
                  <div class="panel-group" id="accordion2">
                    <div class="panel-travel">
                      
                      <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" data-target="#collapseTwo2">
                        
                        <h4 class="panel-title travel">Read more...&nbsp;<span class="arrow-down"></span></h4>
                      
                      </div>
                      
                      <div id="collapseTwo2" class="panel-collapse collapse">
                        <div class="panel-body">
                          
                          <p class="travel"><?php echo $sections_2_readmore; ?></p>
                        
                        </div>
                      </div>
                    
                    </div>
                  </div> <!-- /.panel-group -->
								
								<?php endif; ?> <!-- sections-2-readmore-checkbox -->
            
            </div> <!-- /#travel-style -->
          </div> <!-- /.content -->
        
        </section>
			<?php endif; ?> <!-- sections-2-option-checkbox -->
    
    <!-- ==== Section #3 ==== -->
		
		<?php
			if ( get_post_meta( get_the_ID(), 'sections-3-option-checkbox', true ) == 'yes' ) : ?>
        <section class="spotlight">
          
          <div class="image">
            <!-- Costs Video/Text/Image Option -->
						<?php
							if ( get_post_meta( get_the_ID(), 'sections-3-video-image-checkbox', true ) == 'yes' ) :?>
                
                <div class="embed-responsive embed-responsive-16by9">
                  
                  <iframe class="embed-responsive-item" src="<?php echo $sections_3_video; ?>" allowfullscreen></iframe>
                
                </div>
							
							<?php else: ?>
                
                <img src="<?php echo $sections_3_image; ?>" alt="The Fly Shop Travel Image"/>
							
							<?php endif; ?>
          
          </div>
          
          <div class="content">
            <div id="travel-style">
              
              <h2><?php echo $sections_3_title; ?></h2>
              
              <p class="travel"><?php echo $sections_3_textarea; ?></p>
							
							<?php // Displays read more section if needed
								if ( get_post_meta( get_the_ID(), 'sections-3-readmore-checkbox', true ) == 'yes' ) :?>
                  
                  <div class="panel-group" id="accordion3">
                    <div class="panel-travel">
                      
                      <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" data-target="#collapseTwo3">
                        
                        <h4 class="panel-title travel">Read more...&nbsp;<span class="arrow-down"></span></h4>
                      
                      </div>
                      
                      <div id="collapseTwo3" class="panel-collapse collapse">
                        <div class="panel-body">
                          
                          <p class="travel"><?php echo $sections_3_readmore; ?></p>
                        
                        </div>
                      </div>
                    
                    </div>
                  </div> <!-- /.panel-group -->
								
								<?php endif; ?> <!-- sections-3-readmore-checkbox -->
            
            </div> <!-- /#travel-style -->
          </div> <!-- /.content -->
        
        </section>
			<?php endif; ?> <!-- sections-3-option-checkbox -->
    
    <!-- ==== Section #4 ==== -->
		
		<?php
			if ( get_post_meta( get_the_ID(), 'sections-4-option-checkbox', true ) == 'yes' ) : ?>
        <section class="spotlight">
          
          <div class="image">
            <!-- Costs Video/Text/Image Option -->
						<?php
							if ( get_post_meta( get_the_ID(), 'sections-4-video-image-checkbox', true ) == 'yes' ) :?>
                
                <div class="embed-responsive embed-responsive-16by9">
                  
                  <iframe class="embed-responsive-item" src="<?php echo $sections_4_video; ?>" allowfullscreen></iframe>
                
                </div>
							
							<?php else: ?>
                
                <img src="<?php echo $sections_4_image; ?>" alt="The Fly Shop Travel Image"/>
							
							<?php endif; ?>
          
          </div>
          
          <div class="content">
            <div id="travel-style">
              
              <h2><?php echo $sections_4_title; ?></h2>
              
              <p class="travel"><?php echo $sections_4_textarea; ?></p>
							
							<?php // Displays read more section if needed
								if ( get_post_meta( get_the_ID(), 'sections-4-readmore-checkbox', true ) == 'yes' ) :?>
                  
                  <div class="panel-group" id="accordion4">
                    <div class="panel-travel">
                      
                      <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" data-target="#collapseTwo4">
                        
                        <h4 class="panel-title travel">Read more...&nbsp;<span class="arrow-down"></span></h4>
                      
                      </div>
                      
                      <div id="collapseTwo4" class="panel-collapse collapse">
                        <div class="panel-body">
                          
                          <p class="travel"><?php echo $sections_4_readmore; ?></p>
                        
                        </div>
                      </div>
                    
                    </div>
                  </div> <!-- /.panel-group -->
								
								<?php endif; ?> <!-- sections-4-readmore-checkbox -->
            
            </div> <!-- /#travel-style -->
          </div> <!-- /.content -->
        
        </section>
			<?php endif; ?> <!-- sections-4-option-checkbox -->
    
    <!-- ==== Section #5 ==== -->
		
		<?php
			if ( get_post_meta( get_the_ID(), 'sections-5-option-checkbox', true ) == 'yes' ) : ?>
        <section class="spotlight">
          
          <div class="image">
            <!-- Costs Video/Text/Image Option -->
						<?php
							if ( get_post_meta( get_the_ID(), 'sections-5-video-image-checkbox', true ) == 'yes' ) :?>
                
                <div class="embed-responsive embed-responsive-16by9">
                  
                  <iframe class="embed-responsive-item" src="<?php echo $sections_5_video; ?>" allowfullscreen></iframe>
                
                </div>
							
							<?php else: ?>
                
                <img src="<?php echo $sections_5_image; ?>" alt="The Fly Shop Travel Image"/>
							
							<?php endif; ?>
          
          </div>
          
          <div class="content">
            <div id="travel-style">
              
              <h2><?php echo $sections_5_title; ?></h2>
              
              <p class="travel"><?php echo $sections_5_textarea; ?></p>
							
							<?php // Displays read more section if needed
								if ( get_post_meta( get_the_ID(), 'sections-5-readmore-checkbox', true ) == 'yes' ) :?>
                  
                  <div class="panel-group" id="accordion5">
                    <div class="panel-travel">
                      
                      <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion5" data-target="#collapseTwo5">
                        
                        <h4 class="panel-title travel">Read more...&nbsp;<span class="arrow-down"></span></h4>
                      
                      </div>
                      
                      <div id="collapseTwo5" class="panel-collapse collapse">
                        <div class="panel-body">
                          
                          <p class="travel"><?php echo $sections_5_readmore; ?></p>
                        
                        </div>
                      </div>
                    
                    </div>
                  </div> <!-- /.panel-group -->
								
								<?php endif; ?> <!-- sections-5-readmore-checkbox -->
            
            </div> <!-- /#travel-style -->
          </div> <!-- /.content -->
        
        </section>
			<?php endif; ?> <!-- sections-5-option-checkbox -->
    
    <!-- ==== Section #6 ==== -->
		
		<?php
			if ( get_post_meta( get_the_ID(), 'sections-6-option-checkbox', true ) == 'yes' ) : ?>
        <section class="spotlight">
          
          <div class="image">
            <!-- Costs Video/Text/Image Option -->
						<?php
							if ( get_post_meta( get_the_ID(), 'sections-6-video-image-checkbox', true ) == 'yes' ) :?>
                
                <div class="embed-responsive embed-responsive-16by9">
                  
                  <iframe class="embed-responsive-item" src="<?php echo $sections_6_video; ?>" allowfullscreen></iframe>
                
                </div>
							
							<?php else: ?>
                
                <img src="<?php echo $sections_6_image; ?>" alt="The Fly Shop Travel Image"/>
							
							<?php endif; ?>
          
          </div>
          
          <div class="content">
            <div id="travel-style">
              
              <h2><?php echo $sections_6_title; ?></h2>
              
              <p class="travel"><?php echo $sections_6_textarea; ?></p>
							
							<?php // Displays read more section if needed
								if ( get_post_meta( get_the_ID(), 'sections-6-readmore-checkbox', true ) == 'yes' ) :?>
                  
                  <div class="panel-group" id="accordion6">
                    <div class="panel-travel">
                      
                      <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion6" data-target="#collapseTwo6">
                        
                        <h4 class="panel-title travel">Read more...&nbsp;<span class="arrow-down"></span></h4>
                      
                      </div>
                      
                      <div id="collapseTwo6" class="panel-collapse collapse">
                        <div class="panel-body">
                          
                          <p class="travel"><?php echo $sections_6_readmore; ?></p>
                        
                        </div>
                      </div>
                    
                    </div>
                  </div> <!-- /.panel-group -->
								
								<?php endif; ?> <!-- sections-6-readmore-checkbox -->
            
            </div> <!-- /#travel-style -->
          </div> <!-- /.content -->
        
        </section>
			<?php endif; ?> <!-- sections-6-option-checkbox -->
    
    <!-- ==== Section #7 ==== -->
		
		<?php
			if ( get_post_meta( get_the_ID(), 'sections-7-option-checkbox', true ) == 'yes' ) : ?>
        <section class="spotlight">
          
          <div class="image">
            <!-- Costs Video/Text/Image Option -->
						<?php
							if ( get_post_meta( get_the_ID(), 'sections-7-video-image-checkbox', true ) == 'yes' ) :?>
                
                <div class="embed-responsive embed-responsive-16by9">
                  
                  <iframe class="embed-responsive-item" src="<?php echo $sections_7_video; ?>" allowfullscreen></iframe>
                
                </div>
							
							<?php else: ?>
                
                <img src="<?php echo $sections_7_image; ?>" alt="The Fly Shop Travel Image"/>
							
							<?php endif; ?>
          
          </div>
          
          <div class="content">
            <div id="travel-style">
              
              <h2><?php echo $sections_7_title; ?></h2>
              
              <p class="travel"><?php echo $sections_7_textarea; ?></p>
							
							<?php // Displays read more section if needed
								if ( get_post_meta( get_the_ID(), 'sections-7-readmore-checkbox', true ) == 'yes' ) :?>
                  
                  <div class="panel-group" id="accordion7">
                    <div class="panel-travel">
                      
                      <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion7" data-target="#collapseTwo7">
                        
                        <h4 class="panel-title travel">Read more...&nbsp;<span class="arrow-down"></span></h4>
                      
                      </div>
                      
                      <div id="collapseTwo7" class="panel-collapse collapse">
                        <div class="panel-body">
                          
                          <p class="travel"><?php echo $sections_7_readmore; ?></p>
                        
                        </div>
                      </div>
                    
                    </div>
                  </div> <!-- /.panel-group -->
								
								<?php endif; ?> <!-- sections-7-readmore-checkbox -->
            
            </div> <!-- /#travel-style -->
          </div> <!-- /.content -->
        
        </section>
			<?php endif; ?> <!-- sections-7-option-checkbox -->
    
    <!-- ==== Section #8 ==== -->
		
		<?php
			if ( get_post_meta( get_the_ID(), 'sections-8-option-checkbox', true ) == 'yes' ) : ?>
        <section class="spotlight">
          
          <div class="image">
            <!-- Costs Video/Text/Image Option -->
						<?php
							if ( get_post_meta( get_the_ID(), 'sections-8-video-image-checkbox', true ) == 'yes' ) :?>
                
                <div class="embed-responsive embed-responsive-16by9">
                  
                  <iframe class="embed-responsive-item" src="<?php echo $sections_8_video; ?>" allowfullscreen></iframe>
                
                </div>
							
							<?php else: ?>
                
                <img src="<?php echo $sections_8_image; ?>" alt="The Fly Shop Travel Image"/>
							
							<?php endif; ?>
          
          </div>
          
          <div class="content">
            <div id="travel-style">
              
              <h2><?php echo $sections_8_title; ?></h2>
              
              <p class="travel"><?php echo $sections_8_textarea; ?></p>
							
							<?php // Displays read more section if needed
								if ( get_post_meta( get_the_ID(), 'sections-8-readmore-checkbox', true ) == 'yes' ) :?>
                  
                  <div class="panel-group" id="accordion8">
                    <div class="panel-travel">
                      
                      <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion8" data-target="#collapseTwo8">
                        
                        <h4 class="panel-title travel">Read more...&nbsp;<span class="arrow-down"></span></h4>
                      
                      </div>
                      
                      <div id="collapseTwo8" class="panel-collapse collapse">
                        <div class="panel-body">
                          
                          <p class="travel"><?php echo $sections_8_readmore; ?></p>
                        
                        </div>
                      </div>
                    
                    </div>
                  </div> <!-- /.panel-group -->
								
								<?php endif; ?> <!-- sections-8-readmore-checkbox -->
            
            </div> <!-- /#travel-style -->
          </div> <!-- /.content -->
        
        </section>
			<?php endif; ?> <!-- sections-8-option-checkbox -->
    
    <!-- ==== Section #9 ==== -->
		
		<?php
			if ( get_post_meta( get_the_ID(), 'sections-9-option-checkbox', true ) == 'yes' ) : ?>
        <section class="spotlight">
          
          <div class="image">
            <!-- Costs Video/Text/Image Option -->
						<?php
							if ( get_post_meta( get_the_ID(), 'sections-9-video-image-checkbox', true ) == 'yes' ) :?>
                
                <div class="embed-responsive embed-responsive-16by9">
                  
                  <iframe class="embed-responsive-item" src="<?php echo $sections_9_video; ?>" allowfullscreen></iframe>
                
                </div>
							
							<?php else: ?>
                
                <img src="<?php echo $sections_9_image; ?>" alt="The Fly Shop Travel Image"/>
							
							<?php endif; ?>
          
          </div>
          
          <div class="content">
            <div id="travel-style">
              
              <h2><?php echo $sections_9_title; ?></h2>
              
              <p class="travel"><?php echo $sections_9_textarea; ?></p>
							
							<?php // Displays read more section if needed
								if ( get_post_meta( get_the_ID(), 'sections-9-readmore-checkbox', true ) == 'yes' ) :?>
                  
                  <div class="panel-group" id="accordion9">
                    <div class="panel-travel">
                      
                      <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion9" data-target="#collapseTwo9">
                        
                        <h4 class="panel-title travel">Read more...&nbsp;<span class="arrow-down"></span></h4>
                      
                      </div>
                      
                      <div id="collapseTwo9" class="panel-collapse collapse">
                        <div class="panel-body">
                          
                          <p class="travel"><?php echo $sections_9_readmore; ?></p>
                        
                        </div>
                      </div>
                    
                    </div>
                  </div> <!-- /.panel-group -->
								
								<?php endif; ?> <!-- sections-9-readmore-checkbox -->
            
            </div> <!-- /#travel-style -->
          </div> <!-- /.content -->
        
        </section>
			<?php endif; ?> <!-- sections-9-option-checkbox -->
    
    <!-- ==== Section #10 ==== -->
		
		<?php
			if ( get_post_meta( get_the_ID(), 'sections-10-option-checkbox', true ) == 'yes' ) : ?>
        <section class="spotlight">
          
          <div class="image">
            <!-- Costs Video/Text/Image Option -->
						<?php
							if ( get_post_meta( get_the_ID(), 'sections-10-video-image-checkbox', true ) == 'yes' ) :?>
                
                <div class="embed-responsive embed-responsive-16by9">
                  
                  <iframe class="embed-responsive-item" src="<?php echo $sections_10_video; ?>" allowfullscreen></iframe>
                
                </div>
							
							<?php else: ?>
                
                <img src="<?php echo $sections_10_image; ?>" alt="The Fly Shop Travel Image"/>
							
							<?php endif; ?>
          
          </div>
          
          <div class="content">
            <div id="travel-style">
              
              <h2><?php echo $sections_10_title; ?></h2>
              
              <p class="travel"><?php echo $sections_10_textarea; ?></p>
							
							<?php // Displays read more section if needed
								if ( get_post_meta( get_the_ID(), 'sections-10-readmore-checkbox', true ) == 'yes' ) :?>
                  
                  <div class="panel-group" id="accordion10">
                    <div class="panel-travel">
                      
                      <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion10" data-target="#collapseTwo10">
                        
                        <h4 class="panel-title travel">Read more...&nbsp;<span class="arrow-down"></span></h4>
                      
                      </div>
                      
                      <div id="collapseTwo10" class="panel-collapse collapse">
                        <div class="panel-body">
                          
                          <p class="travel"><?php echo $sections_10_readmore; ?></p>
                        
                        </div>
                      </div>
                    
                    </div>
                  </div> <!-- /.panel-group -->
								
								<?php endif; ?> <!-- sections-10-readmore-checkbox -->
            
            </div> <!-- /#travel-style -->
          </div> <!-- /.content -->
        
        </section>
			<?php endif; ?> <!-- sections-10-option-checkbox -->
  
  </section>

<?php
	$default = '';
	if ( $galleryphoto_1_image !== $default ) : ?>
    <section id="three" class="wrapper style7 special">
      <div class="inner">
        <header class="major">
          <h2>Additional Photos!</h2>
          <hr class="fancy1">
          <div class="row">
            <div class="additional-listing">
							
							<?php if ( get_post_meta( get_the_ID(), 'galleryphoto-1-image', true ) ) {
								
								echo '<div class="col-xs-6 col-md-3">',
								
								'<div class="thumbnail">',
								 
								 '<a href="#guide-carousel" data-slide-to="0"><img src="' . $galleryphoto_1_image . '" class="img-responsive" data-toggle="modal" data-target=".guide-modal" alt="The Fly Shop Images"></a>',
								
								'</div>',
								
								'</div>';
								
							} ?>
							
							<?php if ( get_post_meta( get_the_ID(), 'galleryphoto-2-image', true ) ) {
								
								echo '<div class="col-xs-6 col-md-3">',
								
								'<div class="thumbnail">',
								 
								 '<a href="#guide-carousel" data-slide-to="1"><img src="' . $galleryphoto_2_image . '" class="img-responsive" data-toggle="modal" data-target=".guide-modal" alt="The Fly Shop Images"></a>',
								
								'</div>',
								
								'</div>';
								
							} ?>
							
							<?php if ( get_post_meta( get_the_ID(), 'galleryphoto-3-image', true ) ) {
								
								echo '<div class="col-xs-6 col-md-3">',
								
								'<div class="thumbnail">',
								 
								 '<a href="#guide-carousel" data-slide-to="2"><img src="' . $galleryphoto_3_image . '" class="img-responsive" data-toggle="modal" data-target=".guide-modal" alt="The Fly Shop Images"></a>',
								
								'</div>',
								
								'</div>';
								
							} ?>
							
							<?php if ( get_post_meta( get_the_ID(), 'galleryphoto-4-image', true ) ) {
								
								echo '<div class="col-xs-6 col-md-3">',
								
								'<div class="thumbnail">',
								 
								 '<a href="#guide-carousel" data-slide-to="3"><img src="' . $galleryphoto_4_image . '" class="img-responsive" data-toggle="modal" data-target=".guide-modal" alt="The Fly Shop Images"></a>',
								
								'</div>',
								
								'</div>';
								
							} ?>
            
            </div>
          </div>
          
          <!-- Second Row Travel Images -->
          
          <div class="row">
            <div class="additional-listing">
							
							<?php if ( get_post_meta( get_the_ID(), 'galleryphoto-5-image', true ) ) {
								
								echo '<div class="col-xs-6 col-md-3">',
								
								'<div class="thumbnail">',
								 
								 '<a href="#guide-carousel" data-slide-to="4"><img src="' . $galleryphoto_5_image . '" class="img-responsive" data-toggle="modal" data-target=".guide-modal" alt="The Fly Shop Images"></a>',
								
								'</div>',
								
								'</div>';
								
							} ?>
							
							<?php if ( get_post_meta( get_the_ID(), 'galleryphoto-6-image', true ) ) {
								
								echo '<div class="col-xs-6 col-md-3">',
								
								'<div class="thumbnail">',
								 
								 '<a href="#guide-carousel" data-slide-to="5"><img src="' . $galleryphoto_6_image . '" class="img-responsive" data-toggle="modal" data-target=".guide-modal" alt="The Fly Shop Images"></a>',
								
								'</div>',
								
								'</div>';
								
							} ?>
							
							<?php if ( get_post_meta( get_the_ID(), 'galleryphoto-7-image', true ) ) {
								
								echo '<div class="col-xs-6 col-md-3">',
								
								'<div class="thumbnail">',
								 
								 '<a href="#guide-carousel" data-slide-to="6"><img src="' . $galleryphoto_7_image . '" class="img-responsive" data-toggle="modal" data-target=".guide-modal" alt="The Fly Shop Images"></a>',
								
								'</div>',
								
								'</div>';
								
							} ?>
							
							<?php if ( get_post_meta( get_the_ID(), 'galleryphoto-8-image', true ) ) {
								
								echo '<div class="col-xs-6 col-md-3">',
								'<div class="thumbnail">',
								 
								 '<a href="#guide-carousel" data-slide-to="7"><img src="' . $galleryphoto_8_image . '" class="img-responsive" data-toggle="modal" data-target=".guide-modal" alt="The Fly Shop Images">',
								
								'</div>',
								
								'</div>';
								
							} ?>
            
            </div>
          </div>
      </div>
      </header>
    </section>
    
    <div class="additional-img modal fade guide-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="additional-img modal-dialog" role="document">
        
        <div id="guide-carousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
						
						<?php if ( get_post_meta( get_the_ID(), 'galleryphoto-1-image', true ) ) {
							
							echo '<li data-target="#guide-carousel" data-slide-to="0" class="active"></li>';
							
						} ?>
						
						<?php if ( get_post_meta( get_the_ID(), 'galleryphoto-2-image', true ) ) {
							
							echo '<li data-target="#guide-carousel" data-slide-to="1"></li>';
							
						} ?>
						
						<?php if ( get_post_meta( get_the_ID(), 'galleryphoto-3-image', true ) ) {
							
							echo '<li data-target="#guide-carousel" data-slide-to="2"></li>';
							
						} ?>
						
						<?php if ( get_post_meta( get_the_ID(), 'galleryphoto-4-image', true ) ) {
							
							echo '<li data-target="#guide-carousel" data-slide-to="3"></li>';
							
						} ?>
						
						<?php if ( get_post_meta( get_the_ID(), 'galleryphoto-5-image', true ) ) {
							
							echo '<li data-target="#guide-carousel" data-slide-to="4"></li>';
							
						} ?>
						
						<?php if ( get_post_meta( get_the_ID(), 'galleryphoto-6-image', true ) ) {
							
							echo '<li data-target="#guide-carousel" data-slide-to="5"></li>';
							
						} ?>
						
						<?php if ( get_post_meta( get_the_ID(), 'galleryphoto-7-image', true ) ) {
							
							echo '<li data-target="#guide-carousel" data-slide-to="6"></li>';
							
						} ?>
						
						<?php if ( get_post_meta( get_the_ID(), 'galleryphoto-8-image', true ) ) {
							
							echo '<li data-target="#guide-carousel" data-slide-to="7"></li>';
							
						} ?>
          
          </ol>
          
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
						<?php if ( get_post_meta( get_the_ID(), 'galleryphoto-1-image', true ) ) {
							
							echo '<div class="item active">',
							 
							 '<img src="' . $galleryphoto_1_image . '" alt="The Fly Shop Guided Fly Fishing">',
							
							'</div>';
						} ?>
						
						<?php if ( get_post_meta( get_the_ID(), 'galleryphoto-2-image', true ) ) {
							
							echo '<div class="item">',
							 
							 '<img src="' . $galleryphoto_2_image . '" alt="The Fly Shop Guided Fly Fishing">',
							
							'</div>';
							
						} ?>
						
						<?php if ( get_post_meta( get_the_ID(), 'galleryphoto-3-image', true ) ) {
							
							echo '<div class="item">',
							 
							 '<img src="' . $galleryphoto_3_image . '" alt="The Fly Shop Guided Fly Fishing">',
							
							'</div>';
							
						} ?>
						
						<?php if ( get_post_meta( get_the_ID(), 'galleryphoto-4-image', true ) ) {
							
							echo '<div class="item">',
							 
							 '<img src="' . $galleryphoto_4_image . '" alt="The Fly Shop Guided Fly Fishing">',
							
							'</div>';
							
						} ?>
						
						<?php if ( get_post_meta( get_the_ID(), 'galleryphoto-5-image', true ) ) {
							
							echo '<div class="item">',
							 
							 '<img src="' . $galleryphoto_5_image . '" alt="The Fly Shop Guided Fly Fishing">',
							
							'</div>';
							
						} ?>
						
						<?php if ( get_post_meta( get_the_ID(), 'galleryphoto-6-image', true ) ) {
							
							echo '<div class="item">',
							 
							 '<img src="' . $galleryphoto_6_image . '" alt="The Fly Shop Guided Fly Fishing">',
							
							'</div>';
							
						} ?>
						
						<?php if ( get_post_meta( get_the_ID(), 'galleryphoto-7-image', true ) ) {
							
							echo '<div class="item">',
							 
							 '<img src="' . $galleryphoto_7_image . '" alt="The Fly Shop Guided Fly Fishing">',
							
							'</div>';
							
						} ?>
						
						<?php if ( get_post_meta( get_the_ID(), 'galleryphoto-8-image', true ) ) {
							
							echo '<div class="item">',
							 
							 '<img src="' . $galleryphoto_8_image . '" alt="The Fly Shop Guided Fly Fishing">',
							
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
	<?php endif; ?>

    <!-- Modal -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="primeTravelTempmodalLabel">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="primeTravelTempmodalLabel"><img src="<?php echo get_theme_mod('pt_mdl_logo');  ?>" alt="The Fly Shop"></div>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode('[gravityform id="6" title="true" description="true"]'); ?>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    </div>

<?php
	get_footer();
