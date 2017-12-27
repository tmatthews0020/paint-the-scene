<?php get_header(); ?>

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

<div class="container">
  <div class="row">
    <?php  if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>

    <?php  endwhile; ?>
       </div>
</div>


<?php get_footer(); ?>

</html>
