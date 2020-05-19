<?php 

/**
 * Custom Gutenberg Functions
 */


function jhy_gutenberg_blocks() 
{

  wp_register_script( 'custom-title-js', get_template_directory_uri() . '/build/index.js', array('wp-blocks', 'wp-editor', 'wp-components'));

  register_block_type( 'jhy/custom-title', array(
    'editor_script' => 'custom-title-js'
  ) );

}
add_action('init', 'jhy_gutenberg_blocks');