<?php get_header(); ?>

<!--
  <div class="container">
    <img alt="" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>">
    <h1 class="display-4">Simply Smart Travel</h1>
    <p class="lead">Travel tips and shit dawg.</p>
  </div> -->

<div class="container">
  <div class="row">
    <?php  if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
      <div class="col-4">
        <div class="card">
          <?php the_post_thumbnail(array('318', '180'), ['class' => 'card-img-top']) ?>
          <div class="card-body">
            <h4 class="card-title"><?php the_title() ?> </h4>
            <div class="card-text"><?php the_excerpt() ?> </div>
            <a class="btn btn-primary" href="<?php echo get_permalink($ID) ?>">Read more</a>
          </div>
        </div>
      </div>
     <?php  endwhile; ?>
    <?php  endif; ?>
  </div>
</div>


<?php get_footer(); ?>

</html>
