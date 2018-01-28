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
    <div class="border-bottom">
      <nav class="container">
        <div class="row">
          <div class="col-3">
            <?php
              if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
              }
            ?>
          </div>
          <div class="col-9">
            <?php
              wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
             ?>
          </div>
        </div>
      </nav>
    </div>
