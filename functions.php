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
        'default-image'      => get_template_directory_uri() . '/assets/img/main.jpg',
        'default-text-color' => '000',
        'width'              => 1956,
        'height'             => 800,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support('custom-header', $args);
  }

  add_action( 'after_setup_theme', 'themename_custom_header_setup' );

  function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
  add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

  @ini_set( 'upload_max_size' , '64M' );

?>
