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

/* make featured images clickable */
function wcs_auto_link_post_thumbnails( $html, $post_id, $post_image_id ) {
  $html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
  return $html;
  }
  add_filter( 'post_thumbnail_html', 'wcs_auto_link_post_thumbnails', 10, 3 );


/* Add widget areas for footer */
function register_widget_areas() {

  register_sidebar( array(
    'name'          => 'Footer area one',
    'id'            => 'footer_area_one',
    'description'   => 'First container for footer content',
    'before_widget' => '<section class="footer-content-one">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ));

  register_sidebar( array(
    'name'          => 'Footer area two',
    'id'            => 'footer_area_two',
    'description'   => 'Second container for footer content',
    'before_widget' => '<section class="footer-content-two">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ));

  register_sidebar( array(
    'name'          => 'Footer area three',
    'id'            => 'footer_area_three',
    'description'   => 'Footer container for copyright infomation',
    'before_widget' => '<section class="copyright">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
  
}
add_action( 'widgets_init', 'register_widget_areas' );

/**
 * Custom color palette colors
 */
function portfolio_setup_theme_supported_features() {
  add_theme_support( 'editor-color-palette', array(
      array(
          'name' => __( 'yellow', 'portfolio' ),
          'slug' => 'yellow',
          'color' => '#c69c39',
      ),
      array(
          'name' => __( 'dark pink', 'portfolio' ),
          'slug' => 'dark-pink',
          'color' => '#da2f7c',
      ),
      array(
          'name' => __( 'light pink', 'portfolio' ),
          'slug' => 'light-pink',
          'color' => '#e082b9',
      ),
      array(
          'name' => __( 'black', 'portfolio' ),
          'slug' => 'black',
          'color' => '#191919',
      ),
      array(
        'name' => __( 'grey', 'portfolio' ),
        'slug' => 'grey',
        'color' => '#747474',
      ),
      array(
          'name' => __( 'Dark green', 'portfolio' ),
          'slug' => 'dark-green',
          'color' => '#3e402f',
      ),
      array(
          'name' => __( 'white', 'portfolio' ),
          'slug' => 'white',
          'color' => '#ffffff',
      ),
  ) );
}
add_action( 'after_setup_theme', 'portfolio_setup_theme_supported_features' );



/* custom image sizes */
add_image_size('blog-small', 300, 200, true);
add_image_size('blog-large', 800, 400, false);

/**
 * Custom Gutenberg Blocks
 */
require get_template_directory() . '/inc/gutenberg.php';



