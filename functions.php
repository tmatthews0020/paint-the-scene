<?php
  // register menus
  function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
   }
  add_action( 'init', 'register_my_menus' );
  // support using a logo
  add_theme_support( 'custom-logo' );
  // support post thumbnails
  add_theme_support( 'post-thumbnails', array( 'post' ) );
  set_post_thumbnail_size( 286, 180, true );
?>
