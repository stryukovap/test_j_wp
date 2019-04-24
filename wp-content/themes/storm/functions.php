<?php

add_action( 'wp_enqueue_scripts', 'storm_site_scripts' );
function storm_site_scripts() {
	wp_enqueue_style( 'site-style', get_stylesheet_uri(), array(), '_bld_1556145248112' );
	wp_enqueue_script( 'site-script', get_template_directory_uri() . '/assets/js/build.js', array('jquery'), '_bld_1556145248112', true );
}

add_action( 'after_setup_theme', 'storm_after_setup' );

function storm_after_setup() {
	register_nav_menu('top','For top site');
	register_nav_menu('header','For header site');
	register_nav_menu('footer','For footer site');
	register_nav_menu('mobile','For mobile');
}

add_theme_support( 'custom-logo');
add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );
