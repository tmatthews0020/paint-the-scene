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

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Simply Smart Travel</h1>
    <p class="lead">Travel tips and shit dawg.</p>
  </div>
</div>

<div class="container">
  <div class="row">
    <?php  if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
      <div class="col-4">
        <div class="card">
          <?php the_post_thumbnail(array('318', '180'), ['class' => 'card-img-top']) ?>
          <div class="card-body">
            <h4 class="card-title"><?php the_title() ?> </h4>
            <div class="card-text"><?php the_excerpt() ?> </div>
            <a class="btn btn-primary" href="<?php get_permalink(the_ID()) ?>">Read more</a>
          </div>
        </div>
      </div>
     <?php  endwhile; ?>
    <?php  endif; ?>
  </div>
</div>


<?php get_footer(); ?>

</html>
