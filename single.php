<?php get_header(); ?>

<!--  start loop-->
<?php   while ( have_posts() ) : the_post(); ?>

<div class="container">
  <div class="row">
     <h1 class="display-2 col-12 mt-3"><?php the_title() ?></h1>
  </div>
  <div class="row">
    <span class="col-12 text-center text-secondary">By: <?php the_author()?> </span>
  </div>
  <div class="row">
    <span class="mt-5 mb-5">
      <?php the_content() ?>
    </span>
  </div>
</div>

<?php  get_template_part( 'content', get_post_format() ); ?>

<!-- /End the loop. -->
<?php  endwhile;  ?>

<?php get_footer() ?>

<?php wp_footer(); ?>
