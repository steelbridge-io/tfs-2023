<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package The_Fly_Shop
 */

get_header(); ?>
	
	<div id="search-results-header" class="page-header">
		<div class="container">
		<header class="page-header search-results-cont">
			<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'the-fly-shop' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</header><!-- .page-header -->
		
		<div id="search-bar-search-page">
			<?php get_search_form(); ?>
		</div>
		</div>
	</div>

	<section id="primary" class="content-area search-results-cont">
     <!-- <div class="col-12 search-logo-wrap">
      <img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2018/01/TFSLogo-red.png" class="img-responsive" alt="The Fly Shop Logo">
      </div> -->
      
      <div id="search-container-row" class="row">
        <div class="col-md-8">
	        <h2 class="results">Here's what we found:</h2>
				<main id="main" class="search-results-target site-main" role="main">
				
				<?php
				if ( have_posts() ) : ?>
		
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();
		
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );
		
					endwhile;
		
					//the_posts_navigation();
					tfs_numeric_posts_nav();
				
				else :
		
					get_template_part( 'template-parts/content', 'none' );
		
				endif; ?>
		
				</main><!-- #main -->
      </div>
        <div class="col-md-3 col-md-offset-1">
          <?php get_sidebar(); ?>
        </div>
      </div>
	</section><!-- #primary -->

<?php
get_footer();
