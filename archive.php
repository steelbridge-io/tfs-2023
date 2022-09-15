<?php
 /**
  * The template for displaying archive pages.
  *
  * @link https://codex.wordpress.org/Template_Hierarchy
  *
  * @package The_Fly_Shop
  */
 $archive_page_hero = get_theme_mod( 'archive_page_hero', '' );
 $archive_page_default = get_bloginfo('template_directory') . '/images/default/default-1800x650.jpg';
 $archive_logo_upload = get_theme_mod ('archive_page_logo');
 
 include_once('page-templates/post-meta/post-meta-archive.php');
 
 get_header(); ?>
 
 </div>

<?php if ( $archive_page_hero !== '' ) : ?>
 
 <div class="template-header">
  <div id="basic-scrolly">
   <img src="<?php echo $archive_page_hero; ?>" class="archive-hero paralaxed img-responsive-width-100 center-block">
   
   <div class="center-content-flex template-header-content">
    <div class="basicpagelogo signature-header template-class text-center">
     
     <dl class="landing-hd">
      <dd class="dd-1"><img src="<?php echo $archive_logo_upload; ?>" class="img-responsive-logo" alt="The Fly Shop Logo" title="Basic Logo"></dd>
      
      <?php
       $value1 = get_theme_mod( 'archive_page_title', '' );
       
       if (!empty(post_type_archive_title())) {
        
        echo '<dd class="dd-2">' . post_type_archive_title( '<h1 class="archive-title">', '</h1>' ) . '</dd>';
        
       } else {
        
        the_archive_title( '<h1 class="archive-title">', '</h1>' );
        
       }
      ?>
      
      <dd class="dd-4"><h3 class="archive logo-tel"><a href="tel:18006693474">800 &bull; 669 &bull; 3474</a></h3></dd>
     </dl>
    
    </div>
   </div>
   <a href="#main" class="more scrolly">Read More!</a>
  </div>
 </div>

<?php else: ?>
 
 <div class="template-header">
  
  <img src="<?php echo $archive_page_default; ?>" class="archive-hero paralaxed img-responsive-width-100 center-block">
  
  <div class="center-content-flex template-header-content">
   <div class="basicpagelogo signature-header template-class text-center">
    
    <dl class="landing-hd">
     <dd class="dd-1"><img src="<?php echo $archive_logo_upload; ?>" class="img-responsive-logo" alt="The Fly Shop Logo" title="Basic Logo"></dd>
     
     <?php
      $value2 = get_theme_mod( 'archive_page_title', '' );
      
      if(!empty(post_type_archive_title())) {
       
       echo '<dd class="dd-2">' . post_type_archive_title( '<h1 class="archive-title">', '</h1>' ) . '</dd>';
       
      } else {
       
       the_archive_title( '<h1 class="archive-title">', '</h1>' );
       
      }
     ?>
     
     <dd class="dd-4"><h3 class="archive logo-tel"><a href="tel:18006693474">800 &bull; 669 &bull; 3474</a></h3></dd>
    </dl>
   
   </div>
  </div>
  <div id="basic-scrolly">
   <a href="#main" class="more scrolly">Read More!</a>
  </div>
 </div>

<?php endif; ?>

<?php $cat_description = get_the_archive_description();
 if($cat_description !== '') : ?>
  
  <div id="archive" class="archive-description container">
   <?php echo $cat_description; ?>
  </div>
 
 <?php endif; ?>
 
 <div id="main" class="container-fluid">
  <?php if ( get_theme_mod('archive_page_textarea') !== '' ) : ?>
   <div class="archive panel panel-default">
    <div class="archive panel-body">
     <?php echo do_shortcode(get_theme_mod('archive_page_textarea')); ?>
    </div>
   </div>
  <?php endif; ?>
  <div id="archive-container">
   <div class="archive content-area row display-flex">
    <div class="col-md-9">
     
     <?php
      
      if ( have_posts() ) :
       
       while ( have_posts() ) : the_post();
        
        get_template_part('template-parts/content', 'archive');
       
       endwhile;
      
      echo '<div id="archive-nav">';
      
      the_posts_pagination(array(
        
        'mid_size' => 2,
        
        'prev_text' => __('<i class="fas fa-chevron-left"></i>', 'the-fly-shop'),
        
        'next_text' => __('<i class="fas fa-chevron-right"></i>', 'the-fly-shop'),
      
      ));
      
      
      echo '</div>';

      else :
 
       //get_template_part( 'template-parts/content', 'none' );
       echo '<h3>Sorry, No Posts To Show.</h3>';

      endif; ?>
    
    </div>
    <div class="col-md-3 archive-sidebar">
     <?php get_sidebar(); ?>
    </div>
   </div><!-- /row -->
  </div>
 </div><!-- /container-fluid -->


<?php
 get_footer();
