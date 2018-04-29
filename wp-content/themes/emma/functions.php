<?php
add_theme_support( 'woocommerce' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
define("THEME_DIR", get_template_directory_uri());
function enqueue_styles() {
	wp_register_style( 'style', THEME_DIR.'/css/style.css', array(), '1', 'all' );
	wp_enqueue_style( 'style' );
	wp_register_style( 'font', 'https://fonts.googleapis.com/css?family=Montserrat:400,600|Antic+Didone', array(), '1', 'all' );
	wp_enqueue_style( 'font' );
	wp_register_style( 'font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '1', 'all' );
	wp_enqueue_style( 'font-awesome' );
	wp_register_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '1', 'all' );
	wp_enqueue_style( 'bootstrap' );
}
function enqueue_scripts(){
	wp_enqueue_script( 'jquery' );
	wp_register_script('script', THEME_DIR.'/js/script.js', array('jquery'), '1', true );
	wp_enqueue_script( 'script' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );
add_filter( 'the_content', 'remove_thumbnail_dimensions', 10, 3 );
function remove_thumbnail_dimensions( $html ) {
  $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
  return $html;
}