<?php
  /**
   * The template for displaying the footer.
   *
   * Contains the closing of the #content div and all content after.
   *
   * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
   *
   * @package The_Fly_Shop
   */

  $antelopecreek_updated			= get_post_meta(get_the_ID(), 'antelopecreek-updated', true);
  $antelopecreek_report			  = get_post_meta(get_the_ID(), 'antelopecreek-report', true);
  $antelopecreek_hot_flies		= get_post_meta(get_the_ID(), 'antelopecreek-hot-flies', true);

  $baileycreek_updated			  = get_post_meta(get_the_ID(), 'baileycreek-updated', true);
  $baileycreek_report			    = get_post_meta(get_the_ID(), 'baileycreek-report', true);
  $baileycreek_hot_flies			= get_post_meta(get_the_ID(), 'baileycreek-hot-flies', true);

  $battlecreek_updated			  = get_post_meta(get_the_ID(), 'battlecreek-updated', true);
  $battlecreek_report			    = get_post_meta(get_the_ID(), 'battlecreek-report', true);
  $battlecreek_hot_flies			= get_post_meta(get_the_ID(), 'battlecreek-hot-flies', true);

  $baumlake_updated			      = get_post_meta(get_the_ID(), 'baumlake-updated', true);
  $baumlake_report			      = get_post_meta(get_the_ID(), 'baumlake-report', true);
  $baumlake_hot_flies			    = get_post_meta(get_the_ID(), 'baumlake-hot-flies', true);

  $bollibokka_updated			    = get_post_meta(get_the_ID(), 'bollibokka-updated', true);
  $bollibokka_report			    = get_post_meta(get_the_ID(), 'bollibokka-report', true);
  $bollibokka_hot_flies			  = get_post_meta(get_the_ID(), 'bollibokka-hot-flies', true);

  $circle7_updated			      = get_post_meta(get_the_ID(), 'circle7-updated', true);
  $circle7_report			        = get_post_meta(get_the_ID(), 'circle7-report', true);
  $circle7_hot_flies			    = get_post_meta(get_the_ID(), 'circle7-hot-flies', true);

  $clearcreek_updated			    = get_post_meta(get_the_ID(), 'clearcreek-updated', true);
  $clearcreek_report			    = get_post_meta(get_the_ID(), 'clearcreek-report', true);
  $clearcreek_hot_flies			  = get_post_meta(get_the_ID(), 'clearcreek-hot-flies', true);

  $fallriver_updated			    = get_post_meta(get_the_ID(), 'fallriver-updated', true);
  $fallriver_report			      = get_post_meta(get_the_ID(), 'fallriver-report', true);
  $fallriver_hot_flies			  = get_post_meta(get_the_ID(), 'fallriver-hot-flies', true);

  $goldriver_updated			    = get_post_meta(get_the_ID(), 'goldriver-updated', true);
  $goldriver_report			      = get_post_meta(get_the_ID(), 'goldriver-report', true);
  $goldriver_hot_flies			  = get_post_meta(get_the_ID(), 'goldriver-hot-flies', true);

  $hatcreek_report_update			= get_post_meta(get_the_ID(), 'hatcreek-report-update', true);
  $hatcreek_report				    = get_post_meta(get_the_ID(), 'hatcreek-report', true);
  $hatcreek_hot_flies				  = get_post_meta(get_the_ID(), 'hatcreek-hot-flies', true);

  $hatcreekranch_updated      = get_post_meta(get_the_ID(), 'hatcreekranch-updated', true);
  $hatcreekranch_report				= get_post_meta(get_the_ID(), 'hatcreekranch-report', true);
  $hatcreekranch_hot_flies		= get_post_meta(get_the_ID(), 'hatcreekranch-hot-flies', true);

  $ironcanyonres_report_update	= get_post_meta(get_the_ID(), 'ironcanyonres-report-update', true);
  $ironcanyonres_report				  = get_post_meta(get_the_ID(), 'ironcanyonres-report', true);
  $ironcanyonres_hot_flies			= get_post_meta(get_the_ID(), 'ironcanyonres-hot-flies', true);

  $keswickres_report_update	  = get_post_meta(get_the_ID(), 'keswickres-updated', true);
  $keswickres_report				  = get_post_meta(get_the_ID(), 'keswickres-report', true);
  $keswickres_hot_flies			  = get_post_meta(get_the_ID(), 'keswickres-hot-flies', true);

  $klamathriver_updated			  = get_post_meta(get_the_ID(), 'klamathriver-updated', true);
  $klamathriver_report			  = get_post_meta(get_the_ID(), 'klamathriver-report', true);
  $klamathriver_hot_flies			= get_post_meta(get_the_ID(), 'klamathriver-hot-flies', true);

  $lakeshasta_updated			    = get_post_meta(get_the_ID(), 'lakeshasta-updated', true);
  $lakeshasta_report			    = get_post_meta(get_the_ID(), 'lakeshasta-report', true);
  $lakeshasta_hot_flies			  = get_post_meta(get_the_ID(), 'lakeshasta-hot-flies', true);

  $lewistonlake_updated			  = get_post_meta(get_the_ID(), 'lewistonlake-updated', true);
  $lewistonlake_report			  = get_post_meta(get_the_ID(), 'lewistonlake-report', true);
  $lewistonlake_hot_flies			= get_post_meta(get_the_ID(), 'lewistonlake-hot-flies', true);

  $lowersacramento_report			= get_post_meta(get_the_ID(), 'lowersacramento-report', true);
  $lowersacramento_updated		= get_post_meta(get_the_ID(), 'lowersacramento-updated', true);
  $lowersacramento_hot_flies	= get_post_meta(get_the_ID(), 'lowersacramento-hot-flies', true);

  $luklake_updated				    = get_post_meta(get_the_ID(), 'luklake-updated', true);
  $luklake_report					    = get_post_meta(get_the_ID(), 'luklake-report', true);
  $luklake_hot_flies				  = get_post_meta(get_the_ID(), 'luklake-hot-flies', true);

  $manzanitalake_updated			= get_post_meta(get_the_ID(), 'manzanitalake-updated', true);
  $manzanitalake_report				= get_post_meta(get_the_ID(), 'manzanitalake-report', true);
  $manzanitalake_hot_flies		= get_post_meta(get_the_ID(), 'manzanitalake-hot-flies', true);

  $mccloudreservoir_report		= get_post_meta(get_the_ID(), 'mccloudreservoir-report', true);
  $mccloudreservoir_hot_flies	= get_post_meta(get_the_ID(), 'mccloudreservoir-hot-flies', true);
  $mccloudreservoir_updated		= get_post_meta(get_the_ID(), 'mccloudreservoir-updated', true);

  $mccloudriver_report			  = get_post_meta(get_the_ID(), 'mccloudriver-report', true);
  $mccloudriver_hot_flies			= get_post_meta(get_the_ID(), 'mccloudriver-hot-flies', true);
  $mccloudriver_updated			  = get_post_meta(get_the_ID(), 'mccloudriver-updated', true);

  $oasissprings_updated			  =  get_post_meta(get_the_ID(),'oasissprings-updated', true);
  $oasissprings_report		    = get_post_meta(get_the_ID(), 'oasissprings-report', true);
  $oasissprings_hot_flies			= get_post_meta(get_the_ID(), 'oasissprings-hot-flies', true);

  $pedrottiponds_updated			= get_post_meta(get_the_ID(),'pedrottiponds-updated', true);
  $pedrottiponds_report		    = get_post_meta(get_the_ID(),'pedrottiponds-report', true);
  $pedrottiponds_hot_flies		= get_post_meta(get_the_ID(),'pedrottiponds-hot-flies', true);

  $pitriver_updated			      = get_post_meta(get_the_ID(),'pitriver-updated', true);
  $pitriver_report		        = get_post_meta(get_the_ID(),'pitriver-report', true);
  $pitriver_hot_flies			    = get_post_meta(get_the_ID(),'pitriver-hot-flies', true);

  $pyramidlake_updated			  = get_post_meta(get_the_ID(),'pyramidlake-updated', true);
  $pyramidlake_report		      = get_post_meta(get_the_ID(),'pyramidlake-report', true);
  $pyramidlake_hot_flies			= get_post_meta(get_the_ID(),'pyramidlake-hot-flies', true);

  $rockcreek_updated			    =  get_post_meta(get_the_ID(),'rockcreek-updated', true);
  $rockcreek_report		        = get_post_meta(get_the_ID(), 'rockcreek-report', true);
  $rockcreek_hot_flies			  = get_post_meta(get_the_ID(), 'rockcreek-hot-flies', true);

  $sugarcreek_updated				  = get_post_meta(get_the_ID(), 'sugarcreek-updated', true);
  $sugarcreek_report				  = get_post_meta(get_the_ID(), 'sugarcreek-report', true);
  $sugarcreek_hot_flies			  = get_post_meta(get_the_ID(), 'sugarcreek-hot-flies', true);

  $trinityriver_updated			  = get_post_meta(get_the_ID(), 'trinityriver-updated', true);
  $trinityriver_report			  = get_post_meta(get_the_ID(), 'trinityriver-report', true);
  $trinityriver_hot_flies			= get_post_meta(get_the_ID(), 'trinityriver-hot-flies', true);

  $wilkspond_updated				  = get_post_meta(get_the_ID(), 'wilkspond-updated', true);
  $wilkspond_report				    = get_post_meta(get_the_ID(), 'wilkspond-report', true);
  $wilkspond_hot_flies			  = get_post_meta(get_the_ID(), 'wilkspond-hot-flies', true);

?>

<!-- Footer -->

<footer id="footer">
  <!-- ========= INSTAGRAM FEED ========== -->
  <!-- <div class="container-fluid">
    <section class="instagram-wrap">
      <div class="container-fluid">
        <div class="row">

          <div class="col-xs-12">
            <div class="instagram-content">
              <h2 class="mb-1618">Latest Photos <a href="https://www.instagram.com/esblodge/" target="_blank" class="icon icons fa-instagram"><span class="label">Instagram</span></a> on Instagram</h2>
              <div class="row photos-wrap">
                
                <div id="instafeed"></div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </div> -->

  <!-- ==== FOOTER CONTENT ==== -->

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">

        <h2 class="mt-1618">PAGES</h2>

        <ul class="mt-05">
          <a href="<?php echo get_theme_mod('page_1'); ?>"><li><?php echo get_theme_mod('page_1_label'); ?></li></a>
          <a href="<?php echo get_theme_mod('page_2'); ?>"><li><?php echo get_theme_mod('page_2_label'); ?></li></a>
          <a href="<?php echo get_theme_mod('page_3'); ?>"><li><?php echo get_theme_mod('page_3_label'); ?></li></a>
          <a href="<?php echo get_theme_mod('page_4'); ?>"><li><?php echo get_theme_mod('page_4_label'); ?></li></a>
          <a href="<?php echo get_theme_mod('page_5'); ?>"><li><?php echo get_theme_mod('page_5_label'); ?></li></a>
          <a href="<?php echo get_theme_mod('page_6'); ?>"><li><?php echo get_theme_mod('page_6_label'); ?></li></a>
        </ul>

        <h2 class="mt-1618">CONTACT US</h2>

        <ul class="mt-05">
          <li>
            <address>
             <?php echo get_theme_mod('address_field'); ?>
            </address>
          </li>
        </ul>

        <ul class="mt-05 link-color-tfs-red">
          <li>
            <address>
              <strong>Email</strong> <br>
              <a href="<?php echo get_theme_mod('tfs_email'); ?>"><?php echo get_theme_mod('tfs_email_label'); ?></a>
            </address>
          </li>
        </ul>

      </div>

      <div class="col-md-4">

        <h2 class="mt-1618">LINKS</h2>

        <ul class="mt-05">
          <a href="<?php echo get_theme_mod('link_1'); ?>"><li><?php echo get_theme_mod('link_1_label'); ?></li></a>
          <a href="<?php echo get_theme_mod('link_2'); ?>"><li><?php echo get_theme_mod('link_2_label'); ?></li></a>
          <a href="<?php echo get_theme_mod('link_3'); ?>"><li><?php echo get_theme_mod('link_3_label'); ?></li></a>
          <a href="<?php echo get_theme_mod('link_4'); ?>"><li><?php echo get_theme_mod('link_4_label'); ?></li></a>
          <a href="<?php echo get_theme_mod('link_5'); ?>"><li><?php echo get_theme_mod('link_5_label'); ?></li></a>
        </ul>

        <h2 class="mt-1618">HOURS</h2>

        <ul class="mt-05">
         <span class="hoursfield">
          <?php echo get_theme_mod('hours_field'); ?>
         </span>
        </ul>

      </div>
      <div class="col-md-4">
        <!-- ==== FACEBOOK FEED === -->
        <h2 class="mt-1618">FACEBOOK FEED</h2>

        <div class="mt-05">
          <div class="fb-page" data-href="https://www.facebook.com/The-Fly-Shop-111446768893973/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
            <blockquote cite="https://www.facebook.com/The-Fly-Shop-111446768893973/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/The-Fly-Shop-111446768893973/">The Fly Shop</a></blockquote>
          </div>
        </div>

      </div>
    </div>
  </div>

  <hr class="fancy">

  <ul class="icons">
    <li><a href="<?php echo get_theme_mod('twitter_link_footer'); ?>" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
    <li><a href="<?php echo get_theme_mod('facebook_link_footer'); ?>" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
    <li><a href="<a href="<?php echo get_theme_mod('instagram_link_footer'); ?>" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
    <li><a href="<a href="<?php echo get_theme_mod('youtube_link_footer'); ?>" class="icon fa-youtube"><span class="label">YouTube</span></a></li>
    <li><a href="mailto:<?php echo get_theme_mod('email_link_footer'); ?>" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
  </ul>
  <ul class="copyright">
    <li>&copy; The Fly Shop, Inc.<sup>&reg;</sup></li>
    <li>1978 - <?php echo date('Y'); ?></li>
  </ul>

</footer>

<?php if ( is_front_page() ) : ?>
  </div> <!-- Leave. Associated with stream report template. -->
<?php endif; ?>

</div> <!-- Leave. Associated with stream report template. -->

<!-- ====== MODALS ====== -->

<!-- Feature Report 1 -->

<div class="modal fade featuredreport1" tabindex="-1" role="dialog" aria-labelledby="featuredreport1">


  <?php include 'inc/modals/feature-one.php'; ?>


</div>

<!-- Feature Report 2 -->

<div class="modal fade featuredreport2" tabindex="-1" role="dialog" aria-labelledby="featuredreport2">

  <?php include 'inc/modals/feature-two.php'; ?>

</div>

<!-- Feature Report 3 -->

<div class="modal fade featuredreport3" tabindex="-1" role="dialog" aria-labelledby="featuredreport3">

  <?php include 'inc/modals/feature-three.php'; ?>

</div>

<!-- Feature Report 4 -->

<div class="modal fade featuredreport4" tabindex="-1" role="dialog" aria-labelledby="featuredreport4">

  <?php include 'inc/modals/feature-four.php'; ?>

</div>
</div> <!-- Leave. This /div is associated with the stream report template -->

<?php wp_footer(); ?>

</body> <!-- Leave. This /body is associated with the head -->
</html> <!-- Leave. This /html is associated with the doc html -->
