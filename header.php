<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <?php wp_enqueue_style( 'style', get_stylesheet_uri() ); ?>
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>

<nav class="navbar navbar-toggleable-md navbar-expand-lg navbar-light bg-light border-bottom">
  <a class="navbar-brand" href="#">
    <?php
      if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
      }
    ?>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse pl-3" id="navbarNavDropdown">
     <?php wp_nav_menu( array(
       'theme-location' => 'nav-menu',
       'menu_class' => 'navbar-nav mr-auto',
       'fallback_cb' => false,
       // 'current_menu_item' => 'active',
       'before' => '<div class="nav-item"><div class="nav-link">',
       'after' => '</div></div>',
       // 'after' => '</div>',
       // 'items_wrap' => '%3$s'
      )); ?>
  </div>
</nav>
