<?php get_header(); ?>
<div class="container pt-3">
  <div class="row border-bottom mb-3">
    <div class="col-md-6">
      <h1 class="display-3"><p><?php single_cat_title(); ?></p></h1>
    </div>
  </div>
  <div class="row">
    <?php  if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
      <div class="col-md-4">
        <div class="card">
          <?php the_post_thumbnail(array('318', '180'), ['class' => 'card-img-top']) ?>
          <div class="card-body">
            <h4 class="card-title"><?php the_title() ?> </h4>
            <div class="card-text"><?php the_excerpt('25'); ?> </div>
            <a class="btn btn-primary" href="<?php echo get_permalink($ID) ?>">Read more</a>
          </div>
        </div>
      </div>
     <?php  endwhile; ?>
    <?php  endif; ?>
  </div>
</div>

<?php get_footer(); ?>

<?php wp_footer(); ?>
