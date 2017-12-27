<?php get_header(); ?>

<nav class="container">
  <div class="row">
    <div class="col-3">
      Logo
    </div>
      <?php
        wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
       ?>
  </div>
</nav>

<?php get_footer(); ?>

</html>
