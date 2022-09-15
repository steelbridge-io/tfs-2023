<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Fly_Shop
 */

get_header(); ?>
</div>
<?php
 $tax_logo = get_theme_mod('tax_logo');
 $tax_page_hero = get_theme_mod('tax_page_hero');
 if ( $tax_page_hero !== '' ) : ?>
 
 <div class="template-header">
  <div id="basic-scrolly">
   <img src="<?php echo $tax_page_hero; ?>" class="archive-hero paralaxed img-responsive-width-100 center-block tax-hero-selective">
   
   <div class="center-content-flex template-header-content">
    <div class="basicpagelogo signature-header template-class text-center">
     
     <dl class="landing-hd">
      <dd class="dd-1"><img src="<?php echo $tax_logo; ?>" class="img-responsive-logo tax-logo-selective" alt="The Fly Shop Logo" title="Basic Logo"></dd>
      
      <?php the_archive_title( '<h1 class="archive-title">', '</h1>' ); ?>
      
      <dd class="dd-4"><h3 class="archive logo-tel"><a href="tel:18006693474">800 &bull; 669 &bull; 3474</a></h3></dd>
     </dl>
    
    </div>
   </div>
   <a href="#main" class="more scrolly">Read More!</a>
  </div>
 </div>

<?php else: ?>
 
 <div class="template-header">
  <div id="basic-scrolly">
   <img src="/img/default-1800x650.jpg" class="archive-hero paralaxed img-responsive-width-100 center-block">
  
   <div class="center-content-flex template-header-content">
    <div class="basicpagelogo signature-header template-class text-center">
    
    <dl class="landing-hd">
    <dd class="dd-1"><img src="<?php echo $tax_logo; ?>" class="img-responsive-logo" alt="The Fly Shop Logo" title="Basic Logo"></dd>
    
    <?php the_archive_title( '<h1 class="archive-title">', '</h1>' ); ?>
    
    <dd class="dd-4"><h3 class="archive logo-tel"><a href="tel:18006693474">800 &bull; 669 &bull; 3474</a></h3></dd>
    </dl>
    
    </div>
   </div>
    <a href="#main" class="more scrolly">Read More!</a>
  </div>
 </div>

<?php endif;
$category_desc = get_the_archive_description( '<div class="archive-description">', '</div>' );

if($category_desc !== '') :?>
 
  <div id="taxonomy" class="container-fluid">
   <div class="container">
    <?php echo $category_desc; ?>
   </div>
  </div>
 
 <?php endif; ?>
  
  <div id="taxonomy-content">
    <div class="taxonomy content-area row">
      <div id="main" class="col-lg-8 taxonomy-body">
       <?php
        $taxonomy_page_textarea = get_theme_mod('taxonomy_page_textarea');
        if($taxonomy_page_textarea !== '') {
        echo '<div id="taxonomy-desc">
               <div class="taxonomy-panel panel">
                <div id="panel-body-selective" class="panel-body">' . $taxonomy_page_textarea  . '</div>
               </div>
              </div>';
        }
        
        if ( have_posts() ) : ?>
          
          <?php
          
          while ( have_posts() ) : the_post();
           
           get_template_part('template-parts/content', 'taxonomy');
          
          endwhile;
          
 
         echo '<div id="archive-nav">';
 
         the_posts_pagination( array(
   
           'mid_size' => 2,
   
           'prev_text' => __( '<i class="fas fa-chevron-left"></i>', 'the-fly-shop' ),
   
           'next_text' => __( '<i class="fas fa-chevron-right"></i>', 'the-fly-shop' ),
 
         ) );
 
         echo '</div>';
        
        else :
          
          //get_template_part( 'template-parts/content', 'none' );
         echo '<h3>Sorry, No Posts To Show.</h3>';
        
        endif; ?>
      
      </div><!-- /col -->
      <div class="col-lg-4 taxonomy-sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div><!-- /row -->
  </div>

<?php
get_footer();
