<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Fly_Shop
 */
  global $post;
?>

<div id="default-blog-hero-image" class="inner">
  
  <?php
    if ( has_post_thumbnail() ) {
    $jumbotronImage_default = get_the_post_thumbnail_url($post->ID, 'full');
    $post_title = get_the_title($post->ID);
    $post_permalink = get_the_permalink($post->ID);
    $default_logo = get_theme_mod('default_page_logo');
  ?>
  
  <div id="outfitters-jumbotron" class="outfitters default-template jumbotron">
    <img class="img-responsive default-template-img outfitters" src="<?php echo $jumbotronImage_default ?>" alt="">
    <div class="container">
      
      <dl class="landing-hd">
        <?php if($default_logo !== '') { ?>
          <dd class="dd-1"><img src="<?php echo $default_logo; ?>" class="img-responsive-logo" alt="" title=""></dd>
        <?php } ?>
        <dd class="dd-2"><h2 class="logo-tel text-center outfitters"><?php echo get_the_title(); ?></h2></dd>
        <dd class="dd-4"><h3 class="logo-tel text-center outfitters"><a href="tel:18006693474">800 &bull; 669 &bull; 3474</a></h3></dd>
      </dl>
    
    </div>
  </div>
  
  <?php } ?>
  
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <div class="article-content row">

	<div id="content-template-part-content" class="container">

		<div id="default-entry-styles" class="entry-content content-part">
          
          <a href="<?php echo get_the_permalink($post->ID); ?>" title="<?php echo get_the_title($post->ID); ?>">
            <h2 class="content-title"><?php echo get_the_title(); ?></h2>
          </a>
          <p><b>Published:&nbsp;<?php echo get_the_date( 'F j, Y' ); ?></b></p>
			<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'the-fly-shop' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
		
	</div><!-- .container-fluid -->
  </div>
</article><!-- #post-## -->
