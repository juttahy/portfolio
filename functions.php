<?php 

function scripts() {
  
  wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,800|Quicksand:300,400&display=swap', false);

  wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
  wp_enqueue_style('style');
  
  wp_register_style('appstyle', get_template_directory_uri() . '/dist/app.css', [], 1, 'all');
  wp_enqueue_style('appstyle');

  wp_enqueue_script('jquery');

  wp_register_script('app', get_template_directory_uri() . '/dist/app.js', [], 1, true);
  wp_enqueue_script('app');
} 
add_action('wp_enqueue_scripts','scripts');

/* function load_stylesheets() {

  wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
  wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function load_js() {

  wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
  wp_enqueue_script('customjs');

}
add_action('wp_enqueue_scripts', 'load_js'); */ 

/* enable menus in site */
add_theme_support('menus');
/* enable post thumbnails */ 
add_theme_support('post-thumbnails');
add_theme_support('widgets');

register_nav_menus(

  array(
    'top-menu' => __('Top Menu', 'theme'),
    'footer-menu' => __('Footer Menu', 'theme'),
  )

);


/* custom image sizes */
add_image_size('blog-small', 300, 200, true);
add_image_size('blog-large', 800, 400, false);

/**
 * Custom Gutenberg Blocks
 */
require get_template_directory() . '/inc/gutenberg.php';

