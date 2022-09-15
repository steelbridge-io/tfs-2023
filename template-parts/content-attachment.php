<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Fly_Shop
 */

include_once(get_template_directory() . '/page-templates/post-meta/post-meta-default.php');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('default-template'); ?>>

<?php if ( has_post_thumbnail() ) { ?>
		
  <header class="template-header">

  <img src="<?php echo $default_post_img['0']; ?>" class="paralaxed img-responsive-width-100 center-block">

  <div class="center-content-flex template-header-content">
  <div class="basicpagelogo signature-header template-class text-center">

    <dl class="landing-hd">
      <dd class="dd-1"><img src="<?php echo $default_logo_upload; ?>" class="img-responsive-logo" alt="The Fly Shop Logo" title="The Fly Shop Default Template Logo"></dd>

      <dd class="dd-2"><h2 class="logo-tel"><?php echo get_the_title(); ?></h2></dd>

       <?php if ( get_post_meta($post->ID, 'signature-description', true) )
          echo '<dd class="dd-3"><p class="template-description">' . $default_page_description . '</p></dd>' ?>

      <dd class="dd-4"><h3 class="logo-tel"><a href="tel:18006693474">800 &bull; 669 &bull; 3474</a></h3></dd>
    </dl>

    </div>
  </div>
  </header>
		
<?php } else { ?>
	
	<header class="entry-header basic-page text-center w-angle-att">
  
  <img src="<?php echo $default_logo_upload; ?>" class="img-responsive-logo" alt="The Fly Shop Logo" title="The Fly Shop Default Template Logo">
      
      <h3 class="logo-tel"><a href="tel:18006693474">800 &bull; 669 &bull; 3474</a></h3>
	
	</header><!-- .entry-header -->
  
  <?php } ?>

	<div class="container default-template">

		<div id="default-entry-styles" class="w-angle-att-img entry-content">
     <?php echo wp_get_attachment_image( get_the_ID(), 'large' ); ?>

      <h1 class="post-title"><?php the_title(); ?></h1>


      <div class="entry">
        <div class="entry-inner w-angle-att">
          <?php the_content(); ?>
        </div>
        <div class="clear"></div>
      </div><!--/.entry-->
    </div><!-- .entry-content -->
		
	</div><!-- .container-fluid -->

	<footer class="entry-footer">
		<?php the_fly_shop_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
