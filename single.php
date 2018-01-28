<?php get_header(); ?>

<!--  start loop-->
<?php   while ( have_posts() ) : the_post(); ?>

  <div class="container text-center">
    <div class="row">
       <h1 class="col-12"><?php the_title() ?> </h1>
    </div>
    <div class="row">
      <span class="col-6 text-center text-secondary"><?php the_author()?> </span> <span class="col-6 text-center text-secondary"> <?php the_time() ?></span>
    </div>
    <div class="row col-12 text-center">
      <?php the_content() ?>
    </div>
  </div>

  <?php  get_template_part( 'content', get_post_format() ); ?>

  <div class="container">
    <div class="row">
       <?php
          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) :
              comments_template();
          endif;
        ?>
    </div>
  </div>

<!-- /End the loop. -->
<?php  endwhile;  ?>

<?php get_footer(); ?>

</html>
