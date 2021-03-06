<?php

// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');

function bfg_setup_assets() {

  wp_register_style('Open Sans', 'https://fonts.googleapis.com/css?family=Open+Sans');
  wp_enqueue_style('Open Sans');
  wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/compiled.css');

  wp_register_script( 'jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', null, null, true );
  wp_enqueue_script( 'jQuery' );
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', null, null, true);

}

function bfg_init() {
  add_theme_support('menus');
  register_nav_menu('primary', 'Primary navigation menu.');
}

add_action('wp_enqueue_scripts', 'bfg_setup_assets');
add_action('init', 'bfg_init');

?>