<?php 

function headerBlock() {
  wp_register_script('bannerBlockScript', get_stylesheet_directory_uri() . '/build/Header.js', array(
    'wp-blocks', 'wp-editor'
  ), null, true);

  register_block_type('components-blocks/header-block', array(
    'editor_script' => 'bannerBlockScript'
  ));
}

add_action('init', 'headerBlock');