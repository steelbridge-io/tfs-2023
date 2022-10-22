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
	
	<div id="prime-travel-template">
		
		<header id="header" <?php if ( is_admin_bar_showing() ){ echo 'style="margin-top:32px;"'; } ?> class="alt"></header>
