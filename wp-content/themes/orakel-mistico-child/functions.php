<?php
/**
 * Orakel Místico Child functions.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue child styles and scripts.
 */
add_action(
	'wp_enqueue_scripts',
	function () {
		$parent_style = 'astra-theme-css';

		// Fuente de marca: Dancing Script.
		wp_enqueue_style(
			'orakel-mistico-fonts',
			'https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500;600;700&display=swap',
			array(),
			null
		);

		wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css', array(), wp_get_theme( 'astra' )->get( 'Version' ) );
		wp_enqueue_style(
			'orakel-mistico-child',
			get_stylesheet_uri(),
			array( 'orakel-mistico-fonts', $parent_style ),
			wp_get_theme()->get( 'Version' )
		);

		// Animaciones místicas (GSAP + ScrollTrigger + script propio).
		wp_enqueue_script(
			'orakel-mistico-gsap',
			'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
			array(),
			'3.12.5',
			true
		);

		wp_enqueue_script(
			'orakel-mistico-scrolltrigger',
			'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js',
			array( 'orakel-mistico-gsap' ),
			'3.12.5',
			true
		);

		wp_enqueue_script(
			'orakel-mistico-animations',
			get_stylesheet_directory_uri() . '/js/theme-animations.js',
			array( 'orakel-mistico-scrolltrigger' ),
			wp_get_theme()->get( 'Version' ),
			true
		);
	},
	20
);

