<?php
function site_scripts() {
wp_enqueue_style('site-style', get_stylesheet_uri(), array(), '_bld_1555503495883' );
wp_enqueue_script('site-script', get_template_directory_uri() . '/assets/js/build.js', array('jquery'), '_bld_1555503495883', true );
}
add_action( 'wp_enqueue_scripts', 'site_scripts' );