<?php
/**
 * NPL Giveaway theme functions.
 */

function npl_giveaway_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'height'      => 64,
		'width'       => 64,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'responsive-embeds' );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'npl-giveaway' ),
		'footer'  => __( 'Footer Menu', 'npl-giveaway' ),
	) );
}
add_action( 'after_setup_theme', 'npl_giveaway_setup' );

function npl_giveaway_assets() {
	wp_enqueue_style(
		'npl-giveaway-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@600;700;800&display=swap',
		array(),
		null
	);
	wp_enqueue_style( 'npl-giveaway-style', get_stylesheet_uri(), array(), '1.0.0' );
	wp_enqueue_script( 'npl-giveaway-nav', get_template_directory_uri() . '/js/navigation.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'npl_giveaway_assets' );

function npl_giveaway_widgets() {
	register_sidebar( array(
		'name'          => __( 'Footer', 'npl-giveaway' ),
		'id'            => 'footer-1',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'npl_giveaway_widgets' );
