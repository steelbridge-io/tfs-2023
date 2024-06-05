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

?>

<!-- Begin Constant Contact Active Forms -->
<script> var _ctct_m = "0a0f5b541f83f517b80813b9cfbdb8d9"; </script>
<script id="signupScript" src="//static.ctctcdn.com/js/signup-form-widget/current/signup-form-widget.min.js" async defer></script>
<!-- End Constant Contact Active Forms -->
	<!-- Footer -->
<footer id="footer">
<!-- ========= INSTAGRAM FEED ========== -->
<div class="container-fluid">
<!-- ========== END INSTAGRAM FEED =========== -->

 <div class="row">
  <div class="col-md-4">
    <h2 class="mt-1618">PAGES</h2>
          <ul class="mt-05">
    
            <a class="page1" href="<?php echo get_theme_mod('page_1'); ?>" target="_self" title="TFS page"><li><span class="page1label"><?php echo get_theme_mod('page_1_label'); ?></span></li></a>

            <a class="page2" href="<?php echo get_theme_mod('page_2'); ?>" target="_self" title="TFS page"><li><span class="page2label"><?php echo get_theme_mod('page_2_label'); ?></span></li></a>

            <a class="page3" href="<?php echo get_theme_mod('page_3'); ?>" target="_self" title="TFS page"><li><span class="page3label"><?php echo get_theme_mod('page_3_label'); ?></span></li></a>

            <a class="page4" href="<?php echo get_theme_mod('page_4'); ?>" target="_self" title="TFS page"><li><span class="page4label"><?php echo get_theme_mod('page_4_label'); ?></span></li></a>

            <a class="page5" href="<?php echo get_theme_mod('page_5'); ?>" target="_self" title="TFS page"><li><span class="page5label"><?php echo get_theme_mod('page_5_label'); ?></span></li></a>

            <a class="page6" href="<?php echo get_theme_mod('page_6'); ?>" target="_self" title="TFS page"><li><span class="page6label"><?php echo get_theme_mod('page_6_label'); ?></span></li></a>
    
          </ul>

          <h2 class="mt-1618">CONTACT US</h2>
          <ul class="mt-05 link-color-tfs-red">
            <li>
              <a class="tfs-tel" href="tel:18006693474" title="Telephone Number">(800) 669-3474</a>
            </li>
          </ul>
    
          <ul class="mt-05">
            <li class="addressfield">
            <address>
            <?php echo get_theme_mod('address_field'); ?>
            </address>
            </li>
          </ul>

          <ul class="mt-05 link-color-tfs-red">
            <li>
            <strong>Email</strong> <br>
            <a class="tfsemail" href="<?php echo get_theme_mod('tfs_email'); ?>"><span class="tfsemaillabel"><?php echo get_theme_mod('tfs_email_label'); ?></span></a>
            </li>
          </ul>
		</div>

		<div class="col-md-4">
			<h2 class="mt-1618">LINKS</h2>
				<ul class="mt-05">

				<a class="link1" href="<?php echo get_theme_mod('link_1'); ?>"><li><span class="link1label"><?php echo get_theme_mod('link_1_label'); ?></span></li></a>

				<a class="link2" href="<?php echo get_theme_mod('link_2'); ?>"><li><span class="link2label"><?php echo get_theme_mod('link_2_label'); ?></span></li></a>

				<a class="link3" href="<?php echo get_theme_mod('link_3'); ?>"><li><span class="link3label"><?php echo get_theme_mod('link_3_label'); ?></span></li></a>

				<a class="link4" href="<?php echo get_theme_mod('link_4'); ?>"><li><span class="link4label"><?php echo get_theme_mod('link_4_label'); ?></span></li></a>

				<a class="link5" href="<?php echo get_theme_mod('link_5'); ?>"><li><span class="link5label"><?php echo get_theme_mod('link_5_label'); ?></span></li></a>

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
        <h2 class="mt-1618">PUBLICATIONS</h2>
          <div class="vert-scroller"><?php echo do_shortcode('[my-vertical-scroller]'); ?></div>
    
        </div>
     </div> <!-- /row -->
</div> <!-- /Container Fluid -->

<hr class="fancy">

<ul id="social-footer" class="icons">
  <li class="twitter"><a href="<?php echo get_theme_mod('twitter_link_footer'); ?>" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
  <li class="facebook"><a href="<?php echo get_theme_mod('facebook_link_footer'); ?>" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
  <li class="instagram"><a href="<?php echo get_theme_mod('instagram_link_footer'); ?>" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
  <li class="youtube"><a href="<?php echo get_theme_mod('youtube_link_footer'); ?>" class="icon fa-youtube"><span class="label">YouTube</span></a></li>
  <li class="email"><a href="mailto:<?php echo get_theme_mod('email_link_footer'); ?>" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
</ul>
<ul class="copyright">
  <li>&copy; The Fly Shop, Inc.<sup>&reg;</sup></li>
  <li>1978 - <?php echo date('Y'); ?></li>
</ul>
</footer>
<?php
			if ( is_front_page() ) : ?>
</div>
<?php
			endif;

 wp_footer(); ?>
</div>
</body>
</html>
