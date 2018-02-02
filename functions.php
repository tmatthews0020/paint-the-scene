<?php
  // register menus
  function register_my_menus() {
    register_nav_menus(
      array(
        'nav-menu' => __( 'Navigation' ),
        'footer-menu' => __( 'Footer' )
       )
     );
   }
  add_action( 'init', 'register_my_menus' );

  // support using a logo
  add_theme_support( 'custom-logo' );

  // support post thumbnails
  add_theme_support( 'post-thumbnails', array( 'post' ) );
  set_post_thumbnail_size( 286, 180, true );

  // custom header support
  function themename_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . '/assets/img/default-header.jpg',
        'default-text-color' => '000',
        'width'              => 1956,
        'height'             => 800,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support('custom-header', $args);
  }

  add_action( 'after_setup_theme', 'themename_custom_header_setup' );
?>
