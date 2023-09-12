
<?php if(is_single(3945 ) ) { ?>
	
	<div id="fp-well" class="well well-sm text-center no-margin-bottom">
			
			<div id="pop-over-fp" class="form-group link-color-tfs-red">
				<div>
					<label for="exampleInputEmail2"><h3>Get Fishing Reports From Lava Creek Lodge</h3></label>
				</div>
				<div id="constant-contact-container" class="constant-contact-sign-up-container">
					<div class="row">
			     <div class="col-md-11">
						<?php echo do_shortcode('[gravityform id="9" title="false"]') ?>
			     </div>
					<div class="help-hover d-flex align-items-center col-md-1">
						<a tabindex="0" role="button" aria-hidden="true" data-trigger="hover" data-toggle="popover" data-placement="top" title="Safe Subscribe" data-content="We respect your privacy and do not tolerate spam and will never sell, rent, lease or give away your email address to any third party. Nor will we send you unsolicited email. You will have the option to safely unsubscribe upon receiving fishing reports related to Lava Creek Lodge. We just want to deleiver great photos, fantastic fly fishing ideas, reports and motivation!"><span class="glyphicon glyphicon-question-sign gi-2x"></span></a>
					</div>
					</div>
				</div>
				
			</div>
		
		<!-- Beginning -->
		<?php
			global $post;
			
			
			if( $post->ID == 3945 ) :
				
				$args = array(
					'post_type'      => 'fish_report',
					'post_status'    => 'publish',
					'tax_query'      => array(
						array(
							'taxonomy' => 'report-category',
							'field'    => 'slug',
              'terms'    => 'lcl' // End user provided term/cat name.
							//'terms'    => 'lava-creek-lodge', End user renamed category.
						),
					),
					'posts_per_page' => 2,
				);
				
				$the_query = new WP_Query($args); ?>
				
				<?php if ( $the_query->have_posts() ) : ?>
				
				<div id="blog-feed-fp-top" class="container-fluid mb-1618 mt-1 max-width-lg">
					<div class="row">
						<div class="newscta" id="news-cta">
							<div data-aos-duration="1000" data-aos="fade-up" class="news-section">
								<div>
									<h2>Latest Lava Creek Lodge News - The Fly Shop</h2>
                  <div class="row">
									<?php
										while ( $the_query->have_posts() ) : $the_query->the_post();
											echo '<div class="col-md-6">' .
											     '<div class="media">';
                            if(has_post_thumbnail()) {
	                           echo '<div class="col-lg-4">' .
	                                '<div class="media-left media-top">' .
	                            
	                                '<a href="' . get_permalink() . '" title="' . get_the_title() . '">' . get_the_post_thumbnail( get_the_id() ) . '</a>' .
											            '</div>' .
											            '</div>';
                             }
											         
                      echo   '<div class="col-lg-8">' .
                             '<div class="media-body caption">';
											the_title('<a class="post-permalink" title="'. get_the_title() .'" href="'. get_permalink() .'"><h3>', '</h3></a>');
											echo      '<b>' . get_the_date( 'F dS, Y', get_the_ID()) . '</b>';
											the_excerpt();
											echo    '</div>
                          </div>
                         </div>
                        </div>';
										endwhile;
										wp_reset_postdata(); ?>
								</div>
                </div>
							</div>
						</div>
					</div>
				</div>
			<?php endif;
			endif; ?>
		<!-- End -->
	</div>
<?php } ?>

