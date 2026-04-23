<?php

function theme_setup() {
  add_theme_support('post-thumbnails');

  register_nav_menus([
    'primary' => 'Primary Menu'
  ]);
}
add_action('after_setup_theme', 'theme_setup');

function load_assets() {
  wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'load_assets');
