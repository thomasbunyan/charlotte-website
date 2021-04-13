<?php

function load_stylesheets() {

  wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Roboto&family=Open+Sans&family=Bodoni+Moda&display=swap');

  wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.15.3/css/all.css', array(), false, 'all');
  wp_enqueue_style('fontawesome');

  wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
  wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascript() {

  wp_deregister_script('jquery');
  wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);
  wp_enqueue_script('jquery');

  wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
  wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts', 'load_javascript');