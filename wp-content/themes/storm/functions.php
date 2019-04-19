<?php

add_action( 'wp_enqueue_scripts', 'storm_site_scripts' );
function storm_site_scripts() {
	wp_enqueue_style( 'site-style', get_stylesheet_uri(), array(), '_bld_1555716636685' );
	wp_enqueue_script( 'site-script', get_template_directory_uri() . '/assets/js/build.js', array('jquery'), '_bld_1555716636685', true );
}

add_action( 'after_setup_theme', 'storm_after_setup' );

function storm_after_setup() {
	register_nav_menu('top','For top site');
	register_nav_menu('header','For header site');
	register_nav_menu('footer','For footer site');
}

add_theme_support( 'custom-logo', [
	'width'       => 198,
	'flex-width'  => false,
	'flex-height' => false,
	'header-text' => '',
] );
add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );
