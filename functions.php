<?php

function bfg_setup_assets() {

  wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/compiled.css');

  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', null, null, true);

}

add_action('wp_enqueue_scripts', 'bfg_setup_assets');

?>