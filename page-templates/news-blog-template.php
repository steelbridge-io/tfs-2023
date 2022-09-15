<?php
	/**
	 * Template Name: News Template
	 * Template Post Type: post, page
	 * Developed for The Fly Shop
	 * @package The_Fly_Shop
	 * Author: Chris Parsons
	 * Author URL: https://steelbridge.io
	 */
    global $post;
	$newstemplate_blog_logo = get_post_meta(get_the_ID(), 'news-template-logo', true );
	$default_logo = get_theme_mod('default_page_logo');
	$newstemplate_description = get_post_meta($post->ID, 'news-template-description', true );
  $news_template_read_more_cat_one = get_post_meta($post->ID, 'news-template-read-more-cat-one', true );
  $read_more_image_one = get_post_meta($post->ID, 'read-more-image-one', true );
  $news_template_read_more_cat_two = get_post_meta($post->ID, 'news-template-read-more-cat-two', true );
  $read_more_image_two = get_post_meta($post->ID, 'read-more-image-two', true );
  $news_template_read_more_cat_three = get_post_meta($post->ID, 'news-template-read-more-cat-three', true );
  $read_more_image_three = get_post_meta($post->ID, 'read-more-image-three', true );
  $news_template_read_more_cat_four = get_post_meta($post->ID, 'news-template-read-more-cat-four', true );
  $read_more_image_four = get_post_meta($post->ID, 'read-more-image-four', true );
  
  $default = '';
 
 get_header(); ?>
  
  <div id="news-blog-hero-image" class="inner">
		<?php
			$jumbotronImage_newstemplate = get_the_post_thumbnail_url($post->ID, 'full');
		?>
    <div id="outfitters-jumbotron" class="outfitters jumbotron">
      <img class="img-responsive outfitters" src="<?php echo $jumbotronImage_newstemplate ?>" alt="">
      <div class="container">
        
        <dl class="landing-hd">
					<?php if($newstemplate_blog_logo !== '') { ?>
            <dd class="dd-1"><img src="<?php echo $newstemplate_blog_logo; ?>" class="img-responsive-logo" alt="" title=""></dd>
					<?php } else { ?>
            <dd class="dd-1"><img src="<?php echo $default_logo; ?>" class="img-responsive-logo" alt="" title=""></dd>
					<?php } ?>
          <dd class="dd-2"><h2 class="logo-tel text-center outfitters"><?php echo get_the_title(); ?></h2></dd>
					<?php if ( get_post_meta($post->ID, 'news-template-description', true) )
						echo '<dd class="dd-3"><p class="template-description text-center newstemplate-description">' . $newstemplate_description . '</p></dd>' ?>
          <dd class="dd-4"><h3 class="logo-tel text-center outfitters"><a href="tel:18006693474">800 &bull; 669 &bull; 3474</a></h3></dd>
        </dl>
      
      </div>
    </div>
  </div>
  
  <div id="news-header" class="container-fluid featured-post">
    
    <?php
    $hasposts_post = get_posts('post_type=post');
    if(!empty($hasposts_post)) { ?>
    
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="row">
          <?php
            $selectpost = get_post_meta(get_the_ID(), 'news-template-select-post', true);
            
              if ('flyfishing-news' == $selectpost) {
               $taxonomy = 'outfitters';
              } elseif ('lower48blog' == $selectpost) {
               $taxonomy = 'lwr48blog';
              } elseif ('travel-blog' == $selectpost) {
               $taxonomy = 'travelblog-category';
              }
              
              if ($selectpost !== '') {
              $top_options = array(
                'post_type' => $selectpost,
                'tax_query' => array(
                    array(
                    'taxonomy' => $taxonomy,
                    'field' => 'slug',
                    'terms' => 'featured'
                    )
                ),
                'posts_per_page'  => 1,
              );} else {
                $top_options = array(
                  'post_type' => $selectpost,
                  'category_name' => 'featured',
                  'posts_per_page'  => 1,
                );
              }
              
            $top_query  = new WP_Query($top_options);
            while($top_query -> have_posts()) : $top_query -> the_post();
      
                $top_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                $top_thumbnail_id = get_post_thumbnail_id( $post->ID );
                $alt_top = get_post_meta($top_thumbnail_id, '_wp_attachment_image_alt', true);
                $top_permalink = get_post_permalink();
                $top_title = get_the_title();
      
                echo '<div class="col-md-4 featured-caption">' .
                     '<a href="'. $top_permalink .'" title="'. $top_title .'"><h1>'. $top_title .'</h1></a>';
                echo '<p class="author-date featured"><span class="the-author">by: '.get_the_author().'</span> <span class="the-date">'.get_the_date().'</span></p>';
                      the_excerpt(__('(more…)'));
                echo '</div>';
                
                echo '<div class="col-md-8 featured-news-image">' .
                     '<a href="'. $top_permalink .'" title="' . $alt_top . '"><img class="img-responsive news-featured-image" src="'. $top_img_url .'" alt="' . $alt_top . '"></a>' .
                     '</div>';
  
            endwhile;
              wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  <?php } ?>
  </div>
	
  <div id="news-blog-template" class="container-fluid blog-posts">
    <div class="row news-blog-template-wrap">
      <div class="col-lg-9">
	
      <?php $hasposts_post = get_posts('post_type=post');
            if(!empty($hasposts_post)) { ?>
      
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
          
          <?php
          // Define our WP Query Parameters
          $query_options = array(
          'post_type'   => 'post',
          'posts_per_page' => 1,
          );
          $the_query = new WP_Query( $query_options );
          
          while ($the_query -> have_posts()) : $the_query -> the_post();
          
          $news_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
          $news_thumbnail_id = get_post_thumbnail_id( $post->ID );
          $alt_news = get_post_meta($news_thumbnail_id, '_wp_attachment_image_alt', true);
          $news_permalink = get_post_permalink();
          $news_title = get_the_title();
          
          echo '<div class="col-md-6 featured-image">' .
               '<a href="'.$news_permalink .'" title="'. $news_title .'"><img class="img-responsive" src="' . $news_img_url . '" alt="' . $alt_news . '"></a>' .
               '</div>' .
               '<div class="col-md-6 featured-caption">' .
               '<h2>The Fly Shop News</h2>' .
               '<a href="'. $news_permalink .'" title="'. $news_title .'"><h3>' . $news_title . '</h3></a>';
          
          echo '<p class="author-date featured"><span class="the-author">by: '. get_the_author() .'</span> <span class="the-date">'. get_the_date() .'</span></p>';
          
          the_excerpt(__('(more…)'));
          
          echo '<div class="more-btn row">
                <div class="col-lg-12">
                <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapse-news-archive-one" aria-expanded="false" aria-controls="collapse-news-archive-one">
                See more News articles
                </button>
                </div>
                </div>
                </div>';
          
          endwhile;
          wp_reset_postdata(); ?>
          
          </div><!-- /row -->
        </div><!-- /panel-body -->
      </div><!-- /panel-default -->
  
      <div class="collapse" id="collapse-news-archive-one">
        <div class="well">
          <div class="row">
          
          <?php
          $query_post_collapse_options = array(
          'post_type'   => 'post',
          'posts_per_page' => 6,
          'offset'  => 1
          );
          $the_post_collapse_query = new WP_Query( $query_post_collapse_options );
          
          while ($the_post_collapse_query -> have_posts()) : $the_post_collapse_query -> the_post();
          
          $news_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
          $news_thumbnail_id = get_post_thumbnail_id( $post->ID );
          $alt_news = get_post_meta($news_thumbnail_id, '_wp_attachment_image_alt', true);
          $news_permalink = get_post_permalink();
          $news_title = get_the_title();
          
          echo '<div class="col-sm-6 col-md-4 featured">' .
               '<div class="thumbnail">' .
               '<a href="'.$news_permalink .'" title="'. $news_title .'"><img class="img-responsive collapse-grid" src="' . $news_img_url . '" alt="' . $alt_news . '"></a>' .
               '</div>' .
               '<div class="caption">' .
               '<a href="'. $news_permalink .'" title="'. $news_title .'"><h4>' . $news_title . '</h4></a>';
          echo '<p class="author-date"><span class="the-author">by: '.get_the_author().'</span> <span class="the-date">'.get_the_date().'</span></p>';
                
                the_excerpt(__('(more…)'));
                
          echo '</div>' .
          '</div>';
          
          endwhile;
          wp_reset_postdata(); ?>
          
         </div>
         
         <?php if ($news_template_read_more_cat_one !== $default) : ?>
          <div class="container-fluid">
          <div class="row">
           <div class="col-xs-12 read-more-posts-cont">
            <a href="<?php echo $news_template_read_more_cat_one; ?>" title="Read More Posts">
            <div class="readmore-bg-img" style="background-image: url('<?php echo $read_more_image_one; ?>');"><button class="tfs-btn tfs-btn-dark btn btn-center" type="button"><h4>Read More Articles Here</h4></button></div>
            </a>
           </div>
          </div>
          </div>
         <?php endif; ?>
        </div>
      </div>
			
      <?php }
      $hasposts_travelblog = get_posts('post_type=travel-blog');
      if(!empty($hasposts_travelblog)) { ?>
      
      <div class="panel panel-default section-margin">
        <div class="panel-body">
          <div class="row">
          
          <?php
          // Define our WP Query Parameters
          $query_options = array(
          'post_type'   => 'travel-blog',
          'posts_per_page' => 1,
          );
          $the_query = new WP_Query( $query_options );
          
          while ($the_query -> have_posts()) : $the_query -> the_post();
          
          $travel_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
          $travel_thumbnail_id = get_post_thumbnail_id( $post->ID );
          $alt_travel = get_post_meta($travel_thumbnail_id, '_wp_attachment_image_alt', true);
          $travel_permalink = get_post_permalink();
          $travel_title = get_the_title();
          
          echo '<div class="col-md-6 featured-image">' .
               '<a href="'. $travel_permalink .'" title="'. $travel_title .'"><img class="img-responsive" src="' . $travel_img_url . '" alt="' . $alt_travel . '">' .
               '</div>' .
               '<div class="col-md-6 featured-caption">' .
               '<h2>Travel News</h2>' .
               '<a href="'. $travel_permalink .'" title="'. $travel_title .'"><h3>' . $travel_title . '</h3></a>';
          echo '<p class="author-date featured"><span class="the-author">by: '. get_the_author() .'</span> <span class="the-date">'. get_the_date() .'</span></p>';
          
          the_excerpt(__('(more…)'));
          
          echo '<div class="more-btn row">
                <div class="col-lg-12">
                <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapse-news-archive-two" aria-expanded="false" aria-controls="collapse-news-archive-two">
                See more News articles
                </button>
                </div>
                </div>
                </div>';
          
          endwhile;
          wp_reset_postdata(); ?>
          
          </div>
        </div>
      </div>
      
      <div class="collapse" id="collapse-news-archive-two">
        <div class="well">
          <div class="row">
          
          <?php
          $query_travel_collapse_options = array(
          'post_type'   => 'travel-blog',
          'posts_per_page' => 6,
          'offset'  => 1
          );
          $the_travel_collapse_query = new WP_Query( $query_travel_collapse_options );
          
          while ($the_travel_collapse_query -> have_posts()) : $the_travel_collapse_query -> the_post();
          
          $travel_collapse_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
          $travel_collapse_thumbnail_id = get_post_thumbnail_id( $post->ID );
          $alt_travel_collapse = get_post_meta($travel_collapse_thumbnail_id, '_wp_attachment_image_alt', true);
          $travel_collapse_permalink = get_post_permalink();
          $travel_collapse_title = get_the_title();
          
          echo '<div class="col-sm-6 col-md-4 featured">' .
               '<div class="thumbnail">' .
               '<a href="'.$travel_collapse_permalink .'" title="'. $travel_collapse_title .'"><img class="img-responsive collapse-grid" src="' . $travel_collapse_img_url . '" alt="' . $alt_travel_collapse . '"></a>' .
               '</div>' .
               '<div class="caption">' .
               '<a href="'. $travel_collapse_permalink .'" title="'. $travel_collapse_title .'"><h4>' . $travel_collapse_title . '</h4></a>';
          echo '<p class="author-date"><span class="the-author">by: ' . get_the_author() .'</span> <span class="the-date">'. get_the_date() .'</span></p>';
          
          the_excerpt(__('(more…)'));
          
          echo '</div>' .
          '</div>';
          
          endwhile;
          wp_reset_postdata(); ?>
          
          </div>
 
         <?php if ($news_template_read_more_cat_two !== $default ) : ?>
          <div class="container-fluid">
           <div class="row">
            <div class="col-xs-12 read-more-posts-cont">
             <a href="<?php echo $news_template_read_more_cat_two; ?>" title="Read More Posts">
              <div class="readmore-bg-img" style="background-image: url('<?php echo $read_more_image_two; ?>');"><button class="tfs-btn tfs-btn-dark btn btn-center" type="button"><h4>Read More Articles Here</h4></button></div>
             </a>
            </div>
           </div>
          </div>
        <?php endif; ?>
        
        </div>
      </div>
	
      <?php }
      $hasposts_lower48blog = get_posts('post_type=lower48blog');
      if(!empty($hasposts_lower48blog)) { ?>
      
      <div class="panel panel-default section-margin">
        <div class="panel-body">
          <div class="row">
          <?php
          $query_l48_options = array(
          'post_type'   => 'lower48blog',
          'posts_per_page' => 1,
          );
          
          $the_l48_query = new WP_Query( $query_l48_options );
          
          while ($the_l48_query -> have_posts()) : $the_l48_query -> the_post();
          
          $l48_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
          $l48_thumbnail_id = get_post_thumbnail_id( $post->ID );
          $alt_l48 = get_post_meta($l48_thumbnail_id, '_wp_attachment_image_alt', true);
          $l48_permalink = get_post_permalink();
          $l48_title = get_the_title();
          
          echo '<div class="col-md-6 featured-image">' .
               '<a href="'. $l48_permalink .'" title="'. $l48_title .'"><img class="img-responsive" src="' . $l48_img_url . '" alt="' . $alt_l48 . '">' .
               '</div>' .
               '<div class="col-md-6 featured-caption">' .
               '<h2>Travel News</h2>' .
               '<a href="'. $l48_permalink .'" title="'. $l48_title .'"><h3>' . $l48_title . '</h3></a>';
          echo '<p class="author-date featured"><span class="the-author">by: ' . get_the_author() .'</span> <span class="the-date">'. get_the_date() .'</span></p>';
          
          the_excerpt(__('(more…)'));
          
          echo '<div class="more-btn row">
                <div class="col-lg-12">
                <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapse-news-archive-three" aria-expanded="false" aria-controls="collapse-news-archive-three">
                See more News articles
                </button>
                </div>
                </div>
                </div>';
          
          endwhile;
          wp_reset_postdata(); ?>
          
          </div>
        </div>
      </div>
      
      <div class="collapse" id="collapse-news-archive-three">
        <div class="well">
          <div class="row">
          
          <?php
          // Define our WP Query Parameters
          $query_l48_options = array(
          'post_type'   => 'lower48blog',
          'posts_per_page' => 6,
          'offset'  => 1
          );
          $the_l48_query = new WP_Query( $query_l48_options );
          
          while ($the_l48_query -> have_posts()) : $the_l48_query -> the_post();
          
          $l48_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
          $l48_thumbnail_id = get_post_thumbnail_id( $post->ID );
          $alt_l48 = get_post_meta($l48_thumbnail_id, '_wp_attachment_image_alt', true);
          $l48_permalink = get_post_permalink();
          $l48_title = get_the_title();
          
          echo '<div class="col-sm-6 col-md-4 featured">' .
               '<div class="thumbnail">' .
               '<a href="'.$l48_permalink .'" title="'. $l48_title .'"><img class="img-responsive collapse-grid" src="' . $l48_img_url . '" alt="' . $alt_l48 . '"></a>' .
               '</div>' .
               '<div class="caption">' .
               '<a href="'. $l48_permalink .'" title="'. $l48_title .'"><h4>' . $l48_title . '</h4></a>';
          echo '<p class="author-date"><span class="the-author">by: ' . get_the_author() .'</span> <span class="the-date">'. get_the_date() .'</span></p>';
          
          the_excerpt(__('(more…)'));
          
          echo '</div>' .
          '</div>';
          
          endwhile;
          wp_reset_postdata(); ?>
          
          </div>
         <?php if ($news_template_read_more_cat_three !== $default) : ?>
          <div class="container-fluid">
           <div class="row">
            <div class="col-xs-12 read-more-posts-cont">
             <a href="<?php echo $news_template_read_more_cat_three; ?>" title="Read More Posts">
              <div class="readmore-bg-img" style="background-image: url('<?php echo $read_more_image_three; ?>');"><button class="tfs-btn tfs-btn-dark btn btn-center" type="button"><h4>Read More Articles Here</h4></button></div>
             </a>
            </div>
           </div>
          </div>
        <?php endif; ?>
        
        </div>
      </div>
	
        <?php }
        $hasposts_flyfishing_news = get_posts('post_type=flyfishing-news');
        if(!empty($hasposts_flyfishing_news)) { ?>
      
      <div class="panel panel-default section-margin">
        <div class="panel-body">
          <div class="row">
          
          <?php
          // Define our WP Query Parameters
          $query_outfitters_options = array(
          'post_type'   => 'flyfishing-news',
          'posts_per_page' => 1,
          );
          $the_outfitters_query = new WP_Query( $query_outfitters_options );
          
          while ($the_outfitters_query -> have_posts()) : $the_outfitters_query -> the_post();
          
          $outfitters_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
          $outfitters_thumbnail_id = get_post_thumbnail_id( $post->ID );
          $alt_outfitters = get_post_meta($outfitters_thumbnail_id, '_wp_attachment_image_alt', true);
          $outfitters_permalink = get_post_permalink();
          $outfitters_title = get_the_title();
          
          echo '<div class="col-md-6 featured-image">' .
               '<a href="'. $outfitters_permalink .'" title="'. $outfitters_title .'"><img class="img-responsive" src="' . $outfitters_img_url . '" alt="' . $alt_outfitters . '">' .
               '</div>' .
               '<div class="col-md-6 featured-caption">' .
               '<h2>Outfitters News</h2>' .
               '<a href="'. $outfitters_permalink .'" title="'. $outfitters_title .'"><h3>' . $outfitters_title . '</h3></a>';
          echo '<p class="author-date featured"><span class="the-author">by: ' . get_the_author() .'</span> <span class="the-date">'. get_the_date() .'</span></p>';
          
          the_excerpt(__('(more…)'));
          
          endwhile;
          wp_reset_postdata();
          
          echo '<div class="more-btn row">
                <div class="col-lg-12">
                <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapse-news-archive-four" aria-expanded="false" aria-controls="collapse-news-archive-four">
                See more News articles
                </button>
                </div>
                </div>
                </div>'; ?>
          
          </div>
        </div>
      </div>
  
      <div class="collapse" id="collapse-news-archive-four">
        <div class="well">
          <div class="row">
          
          <?php
          $query_outfitters_options = array(
          'post_type'   => 'flyfishing-news',
          'posts_per_page' => 6,
          'offset'  => 1
          );
          $the_outfitters_query = new WP_Query( $query_outfitters_options );
          
          while ($the_outfitters_query -> have_posts()) : $the_outfitters_query -> the_post();
          
          $outfitters_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
          $outfitters_thumbnail_id = get_post_thumbnail_id( $post->ID );
          $alt_outfitters = get_post_meta($outfitters_thumbnail_id, '_wp_attachment_image_alt', true);
          $outfitters_permalink = get_post_permalink();
          $outfitters_title = get_the_title();
          
          echo '<div class="col-sm-6 col-md-4 featured">' .
               '<div class="thumbnail">' .
               '<a href="'.$outfitters_permalink .'" title="'. $outfitters_title .'"><img class="img-responsive collapse-grid" src="' . $outfitters_img_url . '" alt="' . $alt_outfitters . '"></a>' .
               '</div>' .
               '<div class="caption">' .
               '<a href="'. $outfitters_permalink .'" title="'. $outfitters_title .'"><h4>' . $outfitters_title . '</h4></a>';
          echo '<p class="author-date"><span class="the-author">by: ' . get_the_author() .'</span> <span class="the-date">'. get_the_date() .'</span></p>';
          
          the_excerpt(__('(more…)'));
          
          echo  '</div>' .
          '</div>';
          
          endwhile;
          wp_reset_postdata();
          ?>
          
          </div>
         <?php if ($news_template_read_more_cat_four !== $default) : ?>
          <div class="container-fluid">
           <div class="row">
            <div class="col-xs-12 read-more-posts-cont">
             <a href="<?php echo $news_template_read_more_cat_four; ?>" title="Read More Posts">
              <div class="readmore-bg-img" style="background-image: url('<?php echo $read_more_image_four; ?>');"><button class="tfs-btn tfs-btn-dark btn btn-center" type="button"><h4>Read More Articles Here</h4></button></div>
             </a>
            </div>
           </div>
          </div>
         <?php endif; ?>
        </div>
      </div>
      
      <?php } ?>
      
      </div>
      <div class="col-lg-3 sidebar">
      <?php
        $selectsidebar = get_post_meta(get_the_ID(), 'news-template-select-sidebar', true);
        get_sidebar($selectsidebar); ?>
      </div>
    </div>
  </div>

	
	<?php
	get_footer();
