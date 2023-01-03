<?php
/**
 * The Fly Shop Theme Customizer.
 *
 * @package The_Fly_Shop
 */

/**
 * Include template CSS
 */
	include 'customizer-css/events-css.php';
	include 'customizer-css/guide-css.php';
	include 'customizer-css/private-css.php';
	include 'customizer-css/schools-css.php';
	include 'customizer-css/fish-camp-css.php';
	include 'customizer-css/staff-css.php';
	include 'customizer-css/front-page-css.php';
	include 'customizer-css/signature-css.php';
	include 'customizer-css/signature-events-css.php';
	include 'customizer-css/basic-css.php';
	include 'customizer-css/travel-css.php';
	include 'customizer-css/default-css.php';
	include 'customizer-css/archive-css.php';
	include 'customizer-css/holiday-css.php';
	include 'customizer-css/travelblog-css.php';
	include 'customizer-css/primetravel-css.php';
	include 'customizer-css/primetravel-template-css.php';
	include 'customizer-css/search-results-css.php';

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function the_fly_shop_customize_register( $wp_customize ) {

/**
 * The following include external files containing additional settings and controls for specific templates.
 */
	include 'customizer/events-customizer.php';
	include 'customizer/guide-customizer.php';
	include 'customizer/private-customizer.php';
	include 'customizer/schools-customizer.php';
	include 'customizer/fish-camp-customizer.php';
	include 'customizer/basic-template-customizer.php';
	include 'customizer/blog-customizer.php';
	include 'customizer/staff-customizer.php';
	include 'customizer/front-page-customizer.php';
	include 'customizer/signature-customizer.php';
	include 'customizer/signature-events-customizer.php';
	include 'customizer/footer-customizer.php';
	include 'customizer/travel-customizer.php';
	include 'customizer/default-template-customizer.php';
	include 'customizer/archive-template-customizer.php';
	include 'customizer/survey-customizer.php';
	include 'customizer/holiday-customizer.php';
	include 'customizer/travel-blog-customizer.php';
	include 'customizer/travel-signature-template-customizer.php';
	include 'customizer/taxonomy-template-customizer.php';
	include 'customizer/prime-travel-customizer.php';
	include 'customizer/prime-travel-template-customizer.php';
	include 'customizer/search-results-customizer.php';
	
	
/**
 * Main Customizer settings
 */
	$wp_customize->get_setting( 'blogname' ) ->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' ) -> transport  = 'postMessage';
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_control( 'header_textcolor' );
	$wp_customize->remove_control( 'background_color' );
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->get_section( 'title_tagline' )->active_callback = 'is_front_page';
	$wp_customize->remove_section( 'header_image' );

	/*
	*	Custom options for The Fly Shop Theme
	*/
	
	//	Creates color picker for menu
	$wp_customize -> add_setting ( 'menu_color', array(
		'default'							=> '#000000',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_hex_color',
		'transport'						=> 'postMessage',
	
		));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control (
			$wp_customize,
			'menu_color', array(
			'label'							=> __('Menu Color', 'the-fly-shop' ),
			'priority'					=>  10,
			'section'						=> 'colors',
			'active_callback'		=> 'is_front_page'
			)
		)
	);
	
	
/*
 * Sanitize
 */
	 function sanitize_checkbox( $input ) {
		return ( 1 === absint( $input ) ) ? 1 : 0;
	}
	
	// Sanitize Text
	function sanitize_text( $input ) {
		return wp_kses_post( force_balance_tags( $input ));
	}
	
	function themepatio_sanitize_image( $input ) {
	$filetype = wp_check_filetype( $input );
	if ( $filetype['ext'] && wp_ext2type( $filetype['ext'] ) === 'image' ) {
		return esc_url( $input );
	}
	return '';
}

}
add_action( 'customize_register', 'the_fly_shop_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function the_fly_shop_customize_preview_js() {
	wp_enqueue_script( 'the_fly_shop_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'jquery', 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'the_fly_shop_customize_preview_js' );
