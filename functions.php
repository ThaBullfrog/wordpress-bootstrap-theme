<?php

function bfg_setup_assets() {

  wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/compiled.css');

  wp_register_script( 'jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', null, null, true );
  wp_enqueue_script( 'jQuery' );
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', null, null, true);

}

add_action('wp_enqueue_scripts', 'bfg_setup_assets');

?>