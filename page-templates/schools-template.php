<?php
/**
 * Template Name: Schools Template

 * Template Post Type: schools_cpt
 * Developed for The Fly Shop
 * @package tfsSchools
 * @since		1.2.8
 * Author: Chris Parsons
 * Author URL: https://steelbridgemedia.com
 */
include_once('post-meta/post-meta-schools.php');

get_header(); ?>
<!-- Banner -->
<style class="schoolshack"></style>
	<section id="banner">
	
		<div class="inner">
		
			<img src="<?php echo $schools_waters_logo;?>" class="img-responsive center-block" alt="The Fly Shop Schools">
			
			<h2 id="schools-title"><?php the_title();?></h2>
			
			 <?php if ( get_post_meta($post->ID, 'schools-description', true) )
						echo '<p class="template-description">' . $schools_waters_description . '</p>' ?>
      
			<h3 id="schools-tel">800 &bull; 669 &bull; 3474</h3>
			
		</div>
		
			<a href="#main" class="more scrolly">Read more here!</a>
			
	</section>

<!-- One -->
	<section id="one" class="wrapper style5 special">
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
<section id="schools-two" class="wrapper alt style2">
	<section class="spotlight">

		<div class="image">
		<!-- Video/Text/Image Option -->
		<?php
		if(get_post_meta(get_the_ID(), 'feature-sch1-checkbox', true) == 'yes') :?>
		<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" src="<?php echo $video_schfeature_one; ?>" allowfullscreen></iframe>
		</div>
		<?php else: ?>
		<img src="<?php echo $feature_sch1_image;?>" alt="The Fly Shop Schools Image" />
		<?php endif; ?>
		</div>

		<div class="content">
			<div id="travel-style" class="schools1">

			<h2><?php echo $feature_sch1_title;?></h2>

			<div class="travel"><?php echo $feature_sch1_cost_textarea;?></div>

				<div class="panel-group" id="accordion1">

					<div class="panel-travel schools1">
					<div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseTwo1">
					<h4 class="panel-title travel">Inclusions&nbsp;<span class="arrow-down"></span></h4>
					</div>

					<div id="collapseTwo1" class="panel-collapse collapse">
					<div class="panel-body">
					<div class="travel"><?php echo $feature_sch1_inclusions_textarea;?></div>
					</div>
					</div>
					</div>

					<div class="panel-travel schools1">
					<div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseThree1">
					<h4 class="panel-title travel">Non-Inclusions&nbsp;<span class="arrow-down"></span></h4>
					</div>
					<div id="collapseThree1" class="panel-collapse collapse">
					<div class="panel-body">
					<div class="travel"><?php echo $feature_sch1_noninclusions_textarea;?></div>
					</div>
					</div>

					</div>
				</div>
			</div>
		</div>
	</section>

<!-- === SCHOOLS DATES === -->
	<section class="spotlight">

		<div class="image">
		<!-- Schools Dates Video/Text/Image Option -->
		<?php
		if(get_post_meta(get_the_ID(), 'feature-sch2-checkbox', true) == 'yes') :?>
		<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" src="<?php echo $video_schfeature_two; ?>" allowfullscreen></iframe>
		</div>
		<?php else: ?>
		<img src="<?php echo $feature_sch2_image;?>" alt="The Fly Shop Schools Image" />
		<?php endif; ?>
		</div>

		<div class="content">
			<div id="travel-style" class="schools2">

			<!-- Dates title -->
			<h2><?php echo $feature_sch2_title;?></h2>

			<div class="travel"><?php echo $feature_sch2_dates_textarea;?></div>

			<div class="panel-group" id="accordionDates">
				<div class="panel-travel schools2">

				<?php
				// Read more option
				if(get_post_meta(get_the_ID(), 'sch-dates-readmore-checkbox', true) == 'yes') :?>

				<div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordionDates" data-target="#collapseOneDates">
				<h4 class="panel-title travel">Read More&nbsp;<span class="arrow-down"></span></h4>
				</div>

				<div id="collapseOneDates" class="panel-collapse collapse">
				<div class="panel-body">
				 <div class="travel"><?php echo $sch_dates_readmore_textarea;?></div>
				</div>
				</div>

				<?php endif; ?>

				</div>
			</div>

			</div>
		</div>
	</section>

<!-- === SCHOOLS LODGING === -->
	<section class="spotlight">

		<div class="image">
			<!-- Schools Video/Text/Image Option -->
			<?php

			if(get_post_meta(get_the_ID(), 'feature-sch4-checkbox', true) == 'yes') :?>
			<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="<?php echo $video_schfeature_four; ?>" allowfullscreen></iframe>
			</div>
			<?php else: ?>
			<img src="<?php echo $feature_4_schlodging_image;?>" alt="The Fly Shop Schools Image" />
			<?php endif; ?>
		</div>

		<div class="content">
			<div id="travel-style" class="schools3">

			<h2><?php echo $feature_4_schlodging_title;?></h2>

			<div class="travel"><?php echo $feature_4_schlodging_content;?></div>

				<div class="panel-group" id="accordion3">
					<div class="panel-travel schools3">
					
					<?php
					// Readmore option
					if(get_post_meta(get_the_ID(), 'sch-lodging-readmore-checkbox', true) == 'yes') :?>

					<div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" data-target="#collapseOne3">
					<h4 class="panel-title travel">Read More&nbsp;<span class="arrow-down"></span></h4>
					</div>

					<div id="collapseOne3" class="panel-collapse collapse">
					<div class="panel-body">
					 <div class="travel"><?php echo $feature_4_schlodging_readmore;?></div>
					</div>
					</div>
					
					<?php endif; ?>

					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- === GETTING THERE === -->
	<section class="spotlight">

		<div class="image">
			<!-- Itinerary/Text/Image Option -->
			<?php
			if(get_post_meta(get_the_ID(), 'feature-sch5-checkbox', true) == 'yes') :?>
			<div class="embed-responsive embed-responsive-16by9">
			<!-- Itinerary map -->
			<iframe class="embed-responsive-item" src="<?php echo $video_schfeature_five; ?>" allowfullscreen></iframe>
			</div>
			<?php else: ?>
			<!-- Itinerary image -->
			<img src="<?php echo $feature_sch5_gettingto_image;?>" alt="The Fly Shop Travel Image" />
			<?php endif; ?>

		</div>

		<div class="content">
			<div id="travel-style" class="schools4">
			<!-- Itineray title -->
			<h2><?php echo $feature_sch5_get_to_title;?></h2>
			<!-- Itineray content -->
			<div class="travel"><?php echo $feature_sch5_get_to_content;?></div>

				<div class="panel-group" id="accordion4">
					<div class="panel-travel schools4">
						
						<?php
						// Readmore option
						if(get_post_meta(get_the_ID(), 'sch-gettingthere-readmore-checkbox', true) == 'yes') :?>

						<div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" data-target="#collapseOne4">
						<h4 class="panel-title travel">Read More&nbsp;<span class="arrow-down"></span></h4>
						</div>
						<div id="collapseOne4" class="panel-collapse collapse">
						<div class="panel-body">
						<div class="travel"><?php echo $feature_sch5_get_to_readmore;?></div>
						</div>
						</div>
						
						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>
	</section>

  <!-- === ITINERARY === -->
  
	<section class="spotlight">

	<div class="image">
		<!-- Itinerary Video/Text/Image Option -->
		<?php
		if(get_post_meta(get_the_ID(), 'feature-sch3-checkbox', true) == 'yes') :?>
		<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" src="<?php echo $video_schfeature_three; ?>" allowfullscreen></iframe>
		</div>
		<?php else: ?>
		<img src="<?php echo $feature_sch3_itinerary_image;?>" alt="The Fly Shop Travel Image" />
		<?php endif; ?>

	</div>

	<!-- === ITINERARY === -->
		<div class="content">
		<div id="travel-style" class="schools5">
		<h2><?php echo $feature_sch3_fishing_title;?></h2>
		<div class="travel"><?php echo $feature_sch3_fishing_content;?></div>

				<div class="panel-group" id="accordion5">
					<div class="panel-travel schools5">
						
						<?php
						// Readmore option
						if(get_post_meta(get_the_ID(), 'sch-itinerary-readmore-checkbox', true) == 'yes') :?>

						<div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion5" data-target="#collapseOne5">
						<h4 class="panel-title travel">Read More&nbsp;<span class="arrow-down"></span></h4>
						</div>
						<div id="collapseOne5" class="panel-collapse collapse">
						<div class="panel-body">
						<div class="travel"><?php echo $feature_sch3_fishing_readmore;?></div>
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
					
					<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image1', true)) {
	
          echo	'<div class="col-xs-6 col-md-3">',
          
									'<div class="thumbnail">',

										'<a href="#schools-carousel" data-slide-to="0"><img src="'. $schools_additional_info_image1 .'" class="img-responsive" data-toggle="modal" data-target=".schools-modal" alt="The Fly Shop Images"></a>',

									'</div>',
	
								'</div>';

					} ?>
					
					<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image2', true)) {
					
          echo	'<div class="col-xs-6 col-md-3">',
          
									'<div class="thumbnail">',

										'<a href="#schools-carousel" data-slide-to="1"><img src=" ' . $schools_additional_info_image2 . '" class="img-responsive" data-toggle="modal" data-target=".schools-modal" alt="The Fly Shop Images"></a>',

									'</div>',

								'</div>';
						
					} ?>
					
					<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image3', true)) {
						
						echo	'<div class="col-xs-6 col-md-3">',
          
										'<div class="thumbnail">',

											'<a href="#schools-carousel" data-slide-to="2"><img src=" ' . $schools_additional_info_image3 . '" class="img-responsive" data-toggle="modal" data-target=".schools-modal" alt="The Fly Shop Images"></a>',

										'</div>',

									'</div>';
						
					} ?>
					
					<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image4', true)) {
	
          echo	'<div class="col-xs-6 col-md-3">',
	
									'<div class="thumbnail">',

										'<a href="#schools-carousel" data-slide-to="3"><img src=" ' . $schools_additional_info_image4 . ' " class="img-responsive" data-toggle="modal" data-target=".schools-modal" alt="The Fly Shop Images"></a>',

									'</div>',

								'</div>';
						
						} ?>
						
					</div>
        </div>
        <!-- Second Row Travel Images -->
        <div class="row">
					<div class="additional-listing">
					
					<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image5', true)) {
	
          echo'<div class="col-xs-6 col-md-3">',
          
								'<div class="thumbnail">',

									'<a href="#schools-carousel" data-slide-to="4"><img src=" ' . $schools_additional_info_image5 . ' " class="img-responsive" data-toggle="modal" data-target=".schools-modal" alt="The Fly Shop Images"></a>',

								'</div>',

							'</div>';
						
							} ?>
						
						<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image6', true)) {
						
						echo	'<div class="col-xs-6 col-md-3">',

										'<div class="thumbnail">',

											'<a href="#schools-carousel" data-slide-to="5"><img src=" ' . $schools_additional_info_image6 . ' " class="img-responsive" data-toggle="modal" data-target=".schools-modal" alt="The Fly Shop Images"></a>',

										'</div>',

									'</div>';
						
						} ?>
						
					<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image7', true)) {
					
					echo	'<div class="col-xs-6 col-md-3">',
					
									'<div class="thumbnail">',

										'<a href="#schools-carousel" data-slide-to="6"><img src=" ' . $schools_additional_info_image7 . ' " class="img-responsive" data-toggle="modal" data-target=".schools-modal" alt="The Fly Shop Images"></a>',

									'</div>',

								'</div>';
						
					} ?>
					
					<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image8', true)) {
					
					echo	'<div class="col-xs-6 col-md-3">',
					
									'<div class="thumbnail">',

										'<a href="#schools-carousel" data-slide-to="7"><img src=" ' . $schools_additional_info_image8 . ' " class="img-responsive" data-toggle="modal" data-target=".schools-modal" alt="The Fly Shop Images"></a>',

									'</div>',

								'</div>';
						
						} ?>
						
					</div>
				</div>
			</div>
    </header>
  </section>

  <!-- ====== MODAL SLIDER ====== -->
		
	<div class="additional-img modal fade schools-modal" tabindex="-1" role="dialog" aria-labelledby="schoolsModalLabel">
  <div class="additional-img modal-dialog" role="document">

    <div id="schools-carousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
			<ol class="carousel-indicators">
			
			<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image1', true)) {
	
				echo '<li data-target="#schools-carousel" data-slide-to="0" class="active"></li>';
	
			} ?>
			
			<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image2', true)) {
	
				echo '<li data-target="#schools-carousel" data-slide-to="1"></li>';
				
			} ?>
			
			<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image3', true)) {
			
				echo '<li data-target="#schools-carousel" data-slide-to="2"></li>';
				
			} ?>
			
			<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image4', true)) {
	
				echo '<li data-target="#schools-carousel" data-slide-to="3"></li>';
				
			} ?>
			
			<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image5', true)) {
			
				echo '<li data-target="#schools-carousel" data-slide-to="4"></li>';
				
			} ?>
			
			<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image6', true)) {
	
				echo '<li data-target="#schools-carousel" data-slide-to="5"></li>';
				
			} ?>
			
			<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image7', true)) {
				
				echo '<li data-target="#schools-carousel" data-slide-to="6"></li>';
				
			} ?>
			
			<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image8', true)) {
	
				echo '<li data-target="#schools-carousel" data-slide-to="7"></li>';
	
			} ?>
			
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				
				<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image1', true)) {
	
				echo	'<div class="item active">',
	
								'<img src="' . $schools_additional_info_image1 . '" alt="The Fly Shop World Fly Fishing Travel">',
	
							'</div>';
				} ?>
			
				<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image2', true)) {
	
				echo	'<div class="item">',
					
								'<img src="' . $schools_additional_info_image2 . '" alt="The Fly Shop World Fly Fishing Travel">',
					
							'</div>';
					
				} ?>
				
				<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image3', true)) {
				
				echo	'<div class="item">',
					
								'<img src="' . $schools_additional_info_image3 . '" alt="The Fly Shop World Fly Fishing Travel">',
					
							'</div>';
					
				} ?>
				
				<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image4', true)) {
				
				echo	'<div class="item">',
					
								'<img src="' . $schools_additional_info_image4 . '" alt="The Fly Shop World Fly Fishing Travel">',
					
							'</div>';
					
				} ?>
				
				<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image5', true)) {
				
				echo	'<div class="item">',
					
								'<img src="' . $schools_additional_info_image5 . '" alt="The Fly Shop World Fly Fishing Travel">',
					
							'</div>';
					
				} ?>
				
				<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image6', true)) {
				
				echo	'<div class="item">',
					
								'<img src="' . $schools_additional_info_image6 . '" alt="The Fly Shop World Fly Fishing Travel">',
					
							'</div>';
					
				} ?>
				
				<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image7', true)) {
				
				echo  '<div class="item">',
					
								'<img src="' . $schools_additional_info_image7 . '" alt="The Fly Shop World Fly Fishing Travel">',
					
							'</div>';
					
				} ?>
				
				<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image8', true)) {
	
				echo	'<div class="item">',

								'<img src="' . $schools_additional_info_image8 . '" alt="The Fly Shop World Fly Fishing Travel">',

							'</div>';
					
				} ?>
				
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#schools-carousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#schools-carousel" role="button" data-slide="next">
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
		<h2><?php echo $cta_schools_strong_intro;?></h2>
		<p><?php echo $cta_schools_content;?></p>
	</header>
	
	</div>
</section>

<?php
get_footer();
