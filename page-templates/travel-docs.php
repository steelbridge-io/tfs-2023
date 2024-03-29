<?php
	/**
	 * Template Name: Travel Docs
	 * Template Post Type: travel-questionaire
	 * Developed for The Fly Shop
	 * @package The_Fly_Shop
	 * Author: Chris Parsons
	 * Author URL: https://steelbridge.io
	 */
	
	$basic_the_post_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
	$the_post_default = get_bloginfo('template_directory') . '/images/default/default-page-header.png';
	$basic_logo_upload = get_theme_mod ('basic_page_logo');
	
	include_once('post-meta/post-meta-basic.php');
	get_header(); ?>

</div> <!-- /.container-fluid. Opening tag found in header.php-->
<div id="primary" class="content-area travel-questionaire-wrap" style="position: relative;">
	<div id="main" role="main">
		
		<?php if ( has_post_thumbnail() ) : ?>
			
			<div id="travel-questions-pdf" class="template-header">
				<img src="<?php echo $basic_the_post_img['0']; ?>" class="paralaxed img-responsive-width-100 center-block">
				<div class="center-content-flex template-header-content">
					<div class="basicpagelogo travel-docs-template template-class text-center">
						<div class="inner">
							<dl class="landing-hd">
								<dd class="dd-1"><img src="<?php echo $basic_logo_upload; ?>" class="travel-docs-logo" alt="The Fly Shop Logo" title="Basic Logo"></dd>
								<dd class="dd-2"><h2 class="logo-tel"><?php echo get_the_title(); ?></h2></dd>
								
								<?php if ( get_post_meta($post->ID, 'basic-page-description', true) )
									echo '<dd class="dd-3"><p class="template-description">' . $basic_page_description . '</p></dd>' ?>
								
								<dd class="dd-4"><h3 class="logo-tel"><a href="tel:18006693474">800 &bull; 669 &bull; 3474</a></h3></dd>
								<!-- <a href="#main" class="more scrolly">Learn More</a> -->
							</dl>
						</div>
						<div class="scrollto animated animatedFadeInUp fadeInUp">
							<a href="#scrollto" class="template more">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		
		<?php else: ?>
			
			<div class="parallax-window center-content-flex" data-parallax="scroll" data-image-src="<?php echo $the_post_default; ?>">
				
				<div id="basicpage" class="basicpagelogo text-center">
					<img src="<?php echo $basic_logo_upload; ?>" class="img-responsive center-block" alt="The Fly Shop Logo" title="Basic Logo">
					<h2><?php echo get_the_title();  ?></h2>
					
					<?php if ( get_post_meta($post->ID, 'basic-page-description', true) )
						echo '<p class="template-description">' . $basic_page_description . '</p>' ?>
					
					<h3>800 &bull; 669 &bull; 3474</h3>
				</div>
			</div>
		
		<?php endif; ?>
	
	</div>
</div>

<div class="container-fluid basic-page-template travel-docs-wrap">
	<div id="scrollto" class="container">
		<div id="primary" class="content-area row">
			<main id="main" class="site-main" role="main">
				<?php
					while ( have_posts() ) : the_post();
						
						get_template_part( 'template-parts/content', 'page-basic' );
					
					endwhile; // End of the loop.
				?>
				
				<?php
					$pdf_title_1  = get_post_meta(get_the_ID(), 'travel-pdf-title-1', true);
					$pdf_text_1   = get_post_meta(get_the_ID(), 'travel-pdf-text-1', true);
					$pdf_file_1   = get_post_meta(get_the_ID(), 'travel-pdf-upload-1', true);
					$pdf_title_2  = get_post_meta(get_the_ID(), 'travel-pdf-title-2', true);
					$pdf_text_2   = get_post_meta(get_the_ID(), 'travel-pdf-text-2', true);
					$pdf_file_2   = get_post_meta(get_the_ID(), 'travel-pdf-upload-2', true);
					$pdf_title_3  = get_post_meta(get_the_ID(), 'travel-pdf-title-3', true);
					$pdf_text_3   = get_post_meta(get_the_ID(), 'travel-pdf-text-3', true);
					$pdf_file_3   = get_post_meta(get_the_ID(), 'travel-pdf-upload-3', true);
					$pdf_title_4  = get_post_meta(get_the_ID(), 'travel-pdf-title-4', true);
					$pdf_text_4   = get_post_meta(get_the_ID(), 'travel-pdf-text-4', true);
					$pdf_file_4   = get_post_meta(get_the_ID(), 'travel-pdf-upload-4', true);
					$pdf_title_5  = get_post_meta(get_the_ID(), 'travel-pdf-title-5', true);
					$pdf_text_5   = get_post_meta(get_the_ID(), 'travel-pdf-text-5', true);
					$pdf_file_5   = get_post_meta(get_the_ID(), 'travel-pdf-upload-5', true);
					$pdf_title_6  = get_post_meta(get_the_ID(), 'travel-pdf-title-6', true);
					$pdf_text_6   = get_post_meta(get_the_ID(), 'travel-pdf-text-6', true);
					$pdf_file_6   = get_post_meta(get_the_ID(), 'travel-pdf-upload-6', true);
					$travel_sidebar_img_upload_6  = get_post_meta(get_the_ID(), 'travel-sidebar-img-upload-6', true);
					$travel_doc_list  = get_post_meta(get_the_ID(), 'travel-doc-list', true);
					$travel_doc_list_mandatory = get_post_meta(get_the_ID(), 'travel-doc-list-mandatory', true);
				?>
				<?php if(!empty($travel_doc_list) || !empty($travel_doc_list_mandatory) ) : ?>
				<div class="fly-list-cont mb-2618">
					<h3 class="text-center">Our Recommended &amp; Mandatory Items List</h3>
					<a class="fly-list btn btn-flies" role="button" href="#travelListitems" data-toggle="collapse" aria-expanded="false" aria-controls="travelListitems">Open Our Recommended &amp; Mandatory Items To Bring | <span class="open-fly-list">Open List <i class="fa fa-chevron-right" aria-hidden="true"></i></span><span class="close-fly-list">Close List <i class="fa fa-times" aria-hidden="true"></i></span></a>
					<div id="travelListitems" class="collapse container">
					<h2 style="text-align: center"><strong>Packing and Gear Checklist</strong></h2>
					<div id="travelListitems" class="container">
						<div class="row mt-1618">
					<?php
					
					$post_id = get_the_ID();
					// Meta Keys for recomended and mandatory items
					$meta_key = 'travel-doc-list';
					$meta_key_mandatory = 'travel-doc-list-mandatory';
					
					 if (metadata_exists('post', $post_id, $meta_key_mandatory)) {
							$content_list_mandatory = get_post_meta($post_id, $meta_key_mandatory, true);
							$content_list_mandatory = explode(',', $content_list_mandatory);
							
							if (!empty($content_list_mandatory) && (is_array($content_list_mandatory) || is_object($content_list_mandatory))) {
								
								// To make a second column, change / 1 -> / 2
								$columns_mandatory = array_chunk($content_list_mandatory, ceil(count($content_list_mandatory) / 1));
								
								if ( !empty(array_filter( $columns_mandatory[0]))) {
									// First column
									echo '<div class="col-md-6">';
									echo '<h3>Mandatory Items</h3>';
									foreach ( $columns_mandatory[0] as $content_mandatory ) {
										echo '<p>&#9634;&nbsp;' . $content_mandatory . '</p>';
									}
									echo '</div>';
									
								}
								
								/**  This would be the second column
								echo '<div class="col-md-6">';
								foreach ( $columns_mandatory[1] as $content_mandatory ) {
									echo '<p>&#9634;&nbsp;' . $content_mandatory . '</p>';
								}
								echo '</div>';	*/
							}
						} if (metadata_exists('post', $post_id, $meta_key, $meta_key_mandatory ) ) {
						$content_list = get_post_meta($post_id, $meta_key, true);
						$content_list = explode(',', $content_list);
						
						if (!empty($content_list) && (is_array($content_list) || is_object($content_list))) {
							
							// To make a second column, change / 1 -> / 2
							$columns = array_chunk($content_list, ceil(count($content_list) / 1));
							
							if ( !empty(array_filter( $columns[0]))) {
								// First column
								echo '<div class="col-md-6">';
								echo '<h3>Recomended Items</h3>';
								foreach ( $columns[0] as $content ) {
									echo '<p>&#9634;&nbsp;' . $content . '</p>';
								}
								echo '</div>';
							}
							
							/**	 This would be the second column
							echo '<div class="col-md-6">';
							foreach ( $columns[1] as $content ) {
							echo '<p>&#9634;&nbsp;' . $content . '</p>';
							}
							echo '</div>'; */
							
						}
					}
					?>
					</div>
					</div>
					</div>
				</div>
				<?php endif;
				
					if (!empty($pdf_file_1)) {
						$imagick1 = new Imagick();
						$imagick1->readImage($pdf_file_1);
						$imagick1->setImageFormat('png');
						//$base641 = base64_encode($imagick1);
						$base641 = base64_encode($imagick1->getImageBlob());
					}
					if (!empty($pdf_file_2)) {
						$imagick2 = new Imagick();
						$imagick2->readImage($pdf_file_2);
						$imagick2->setImageFormat('png');
						//$base642 = base64_encode($imagick2);
						$base642 = base64_encode($imagick2->getImageBlob());
					}
					if (!empty($pdf_file_3)) {
						$imagick3 = new Imagick();
						$imagick3->readImage($pdf_file_3);
						$imagick3->setImageFormat('png');
						//$base643 = base64_encode($imagick3);
						$base643 = base64_encode($imagick3->getImageBlob());
					}
					if (!empty($pdf_file_4)) {
						$imagick4 = new Imagick();
						$imagick4->readImage($pdf_file_4);
						$imagick4->setImageFormat('png');
						//$base643 = base64_encode($imagick3);
						$base644 = base64_encode($imagick4->getImageBlob());
					}
					if (!empty($pdf_file_5)) {
						$imagick5 = new Imagick();
						$imagick5->readImage($pdf_file_5);
						$imagick5->setImageFormat('png');
						//$base643 = base64_encode($imagick3);
						$base645 = base64_encode($imagick5->getImageBlob());
					}
					if (!empty($pdf_file_6)) {
						$imagick6 = new Imagick();
						$imagick6->readImage($pdf_file_6);
						$imagick6->setImageFormat('png');
						//$base643 = base64_encode($imagick3);
						$base646 = base64_encode($imagick6->getImageBlob());
					}
				?>
				
				<section>
					<div id="monthly-fly-list" class="container fly-selection-list mb-5">
						<?php
							include_once 'fly-list-meta/fly-list.php';
							do_action(january_flies());
							do_action(february_flies());
							do_action(march_flies());
							do_action(april_flies());
							do_action(may_flies());
							do_action(june_flies());
							do_action(july_flies());
							do_action(august_flies());
							do_action(september_flies());
							do_action(october_flies());
							do_action(november_flies());
							do_action(december_flies());
						?>
					</div>
				</section>
				
				<?php if (!empty($pdf_file_1)) : ?>
				<div id="questionaire-travel-section" class="container" style="margin-bottom: 5em;">
					<h3 class="text-center">Optional Travel &amp; Tackle PDF Downloads</h3>
					<div class="row">
						<?php if(!empty($travel_sidebar_img_upload_6)) : ?>
						<div class="col-lg-5">
							<?php else : ?>
							<div class="well">
								<?php endif; ?>
						<div class="card">
							<div class="card-body">
							<a href="<?php echo $pdf_file_1 ?>" title="Download" download="file" target="_blank">
							<h4 class="pdf-title"><?php echo $pdf_title_1 ?></h4>
							<?php if(!empty($pdf_text_1)) : ?>
							<div class="desc-bite">
								<?php echo $pdf_text_1 ?>
							</div>
							</a>
							<?php endif; ?>
							</div>
						</div>
						<?php if (!empty($pdf_file_2)) : ?>
						<div class="card">
							<div class="card-body">
							<a href="<?php echo $pdf_file_2 ?>" title="Dounload" target="_blank" rel="noopener noreferrer">
							<h4 class="pdf-title"><?php echo $pdf_title_2 ?></h4>
							<?php if(!empty($pdf_text_2)) : ?>
							<div class="desc-bite">
							<?php echo $pdf_text_2 ?>
							</div>
							</a>
							<?php endif; ?>
							</div>
						</div>
						<?php endif; ?>
						<?php if (!empty($pdf_file_3)) : ?>
						<div class="card">
							<div class="card-body">
							<h4 class="pdf-title"><a href="<?php echo $pdf_file_3 ?>" title="Dounload" target="_blank" rel="noopener noreferrer"><?php echo $pdf_title_3 ?></a></h4>
							<?php if(!empty($pdf_text_3)) : ?>
							<div class="desc-bite">
							<?php echo $pdf_text_3 ?>
							</div>
							<?php endif; ?>
							</div>
						</div>
						<?php endif; ?>
						<?php if (!empty($pdf_file_4)) : ?>
						<div class="card">
							<div class="card-body">
							<h4 class="pdf-title"><a href="<?php echo $pdf_file_4 ?>" title="Dounload" target="_blank" rel="noopener noreferrer"><?php echo $pdf_title_4 ?></a></h4>
							<?php if(!empty($pdf_text_4)) : ?>
							<div class="desc-bite">
							<?php echo $pdf_text_4 ?>
							</div>
							<?php endif; ?>
							</div>
						</div>
						<?php endif; ?>
						<?php if (!empty($pdf_file_5)) : ?>
						<div class="card">
							<div class="card-body">
							<h4 class="pdf-title"><a href="<?php echo $pdf_file_5 ?>" title="Dounload" target="_blank" rel="noopener noreferrer"><?php echo $pdf_title_5 ?></a></h4>
							<?php if(!empty($pdf_text_5)) : ?>
							<div class="desc-bite">
							<?php echo $pdf_text_5 ?>
							</div>
							<?php endif; ?>
							</div>
						</div>
						<?php endif; ?>
						<?php if (!empty($pdf_file_6)) : ?>
						<div class="card">
							<div class="card-body">
							<h4 class="pdf-title"><a href="<?php echo $pdf_file_6 ?>" title="Dounload" target="_blank" rel="noopener noreferrer"><?php echo $pdf_title_6 ?></a></h4>
							<?php if(!empty($pdf_text_6)) : ?>
							<div class="desc-bite">
							<?php echo $pdf_text_6 ?>
							</div>
							<?php endif; ?>
							</div>
						</div>
						<?php endif; ?>
						</div>
						<?php if(!empty($travel_sidebar_img_upload_6)) : ?>
						<div class="col-lg-7 feature-image-uploads" style="background-image: url('<?php //echo $travel_sidebar_img_upload_6 ?>')">
							<img class="img-responsive center-block" src="<?php echo $travel_sidebar_img_upload_6; ?>" alt="The Fly Shop - Travel Questionaire">
						</div>
						<?php endif; ?>
					</div>
				</div>
				<?php endif; ?>
			</main>
		</div>
	</div>
	
	<?php
		// Call To Action
		if(!empty($basic_cta_title) ):?>
	<!-- CALL TO ACTION ROW -->
	<div id="page-wrapper" style="background-image:url(<?php echo $the_post_img['0']; ?>);">
		<section id="cta" class="wrapper style4">
			<div class="inner">
				<header class="text-center">
					<h2><?php echo $basic_cta_title;?></h2>
					<p><?php echo do_shortcode($basic_cta_content);?></p>
				</header>
			</div>
		</section>
		
		<?php
			get_footer();
			
			echo '</div>';
			
			else: get_footer();
			endif;
		?>



