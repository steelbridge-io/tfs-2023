<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until </header>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Fly_Shop
 */

$tfs_title       = get_post_meta(get_the_ID(), 'title-text', true);
$tfs_description = get_post_meta(get_the_ID(), 'seotfs-description', true );
$tfs_metatags    = get_post_meta(get_the_ID(), 'seotfs-meta-tags', true);
?>

<!DOCTYPE HTML>
<!--
	The Fly Shop - Custom Theme
	theflyshop.com | info@theflyshop.com
-->
<html <?php language_attributes(); ?>>

<head>
  
  <title><?php echo $tfs_title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta property="og:image:width" content="200" />
  <meta property="og:image:height" content="200" />
  <meta property = "og:type" content = "article" />
 
  <meta property="og:description" content="America's #1 fly fishing outfitter, travel agent, and shop.  Carrying the best in fly fishing for 40 years." />
  <meta property="og:url"content="https://tfs-spaces.sfo2.digitaloceanspaces.com/" />
  <meta property="og:title" content="The Fly Shop" />
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <meta name="description" content="<?php echo $tfs_description; ?>" />
  <meta name="Keywords" content="<?php echo $tfs_metatags; ?>" />
  <?php if(get_post_meta(get_the_ID(), 'seotfs-no-index', true) == 'yes') :?>
    <meta name="robots" content="noindex">
  <?php endif; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
  <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
  <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
  <!--<script src="assets/js/jquery.min.js"></script>-->
  
  <link href="/favicon.ico" rel="icon" type="image/x-icon" />
  <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <?php wp_head(); ?>

</head>

<!--<body class="landing">-->

<?php echo '<body class="scroll landing archivetemplate stream-report travel-destination outfitters-dept private-waters schools-template fish-camp-template default-template non-banner-loading&nbsp;'.implode('&nbsp;', get_body_class()).'">'.PHP_EOL; ?>

<div class="container-fluid">
  
  <!-- Facebook Feed -->
  <div id="fb-root"></div>
  
  <script>
    //FACEBOOK JAVASCRIPT SDK
    (function(d, s, id) {

         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) return;
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=1556606617893042";
         fjs.parentNode.insertBefore(js, fjs);

       }
       (document, 'script', 'facebook-jssdk')
    );
  </script>
  
  <script>
    // Handles the pop-over feature found on stream report.
    $(function () {
      $('[data-toggle="popover"]').popover()
    })
  </script>
 
  <!-- Hero image for home page -->
  
  <?php if ( is_front_page()) : ?>
  
   <div id="page-wrapper-front-page">
    
     <header id="header" <?php if ( is_admin_bar_showing() ){ echo 'style="margin-top:32px;"'; } ?> class="alt">
       
       <?php elseif ( is_page_template('page-templates/stream-report-template.php') ) : ?>
       
       <div id="page-wrapper-stream-report">
         <header id="header" <?php if ( is_admin_bar_showing() ){ echo 'style="margin-top:32px;"'; } ?> class="alt">
           
           <!-- ====== Hero image for travel header ====== -->
           
           <?php elseif (is_page_template('page-templates/travel-template.php')) : ?>
           
           <div id="page-wrapper-travel">
             <header id="header" <?php if ( is_admin_bar_showing() ){ echo 'style="margin-top:32px;"'; } ?> class="alt">
               
               <!-- ===== Hero image for private waters ===== -->
               
               <?php elseif (is_page_template('page-templates/private-template.php')): ?>
               
               <div id="page-wrapper-private-waters">
                 <header id="header" <?php if ( is_admin_bar_showing() ){ echo 'style="margin-top:32px;"'; } ?> class="alt">
                   
                   
                   <!-- ===== Hero image for guide service ===== -->
                   
                   <?php elseif (is_page_template('page-templates/guide-service-template.php')): ?>
                   
                   <div id="page-wrapper-guide-service">
                     <header id="header" <?php if ( is_admin_bar_showing() ){ echo 'style="margin-top:32px;"'; } ?> class="alt">
                       
                       <!-- ==== Hero image for schools ==== -->
                       
                       <?php elseif (is_page_template('page-templates/schools-template.php')): ?>
                       
                       <div id="page-wrapper-schools">
                         <header id="header" <?php if ( is_admin_bar_showing() ){ echo 'style="margin-top:32px;"'; } ?> class="alt">
                           
                           <!-- ==== Hero image for Fish Camp ==== -->
                           
                           <?php elseif (is_page_template('page-templates/fish-camp-template.php')): ?>
                           
                           <div id="page-wrapper-fish-camp">
                             <header id="header" <?php if ( is_admin_bar_showing() ){ echo 'style="margin-top:32px;"'; } ?> class="alt">
                               
                               <?php elseif (is_page_template('page-templates/hero-template.php')): ?>
   
                               <div id="page-wrapper-hero-template">
                                 <header id="header" <?php if ( is_admin_bar_showing() ){ echo 'style="margin-top:32px;"'; } ?> class="alt">
                               
                               <?php else: ?>
                               <header id="header" <?php if ( is_admin_bar_showing() ){ echo 'style="margin-top:32px;"'; } ?> class="alt">
                                 <?php endif; ?>
                                 
                                 <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'the-fly-shop' ); ?></a>
                                 
                                 <h1><a style="margin-right:1em;" href="<?php echo esc_url(home_url( '/' )); ?>" rel="home"><?php bloginfo('name'); ?><a href="tel:18006693474">800&middot;669&middot;3474</a></h1>
                                
                                <?php if( function_exists( 'ubermenu' ) ): ?>
                                <?php ubermenu( 'main' , array( 'theme_location' => 'megamenu' ) ); ?>
 
                                <?php else: ?>
                                 
                                 <nav id="nav">
                                   
                                   <ul>
                                     <li class="special">
                                       <a href="#menu" class="menuToggle"><span class="menu-title">Menu</span></a>
                                       <?php
                                       // This loads the custom menu from your wordpress dashboard
                                       wp_nav_menu( array(
                                         'theme_location'		=> 'primary',
                                         'container'				=> 'div',
                                         'container_id'			=> 'menu'
                                       ));
                                       ?>
                                     </li>
                                   </ul>
                                 
                                 </nav>
                                
                                <?php endif; ?>
                               
                               </header>
