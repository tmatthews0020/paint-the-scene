<?php get_header(); ?>

<!--  start loop-->
<?php   while ( have_posts() ) : the_post(); ?>

  <div class="container">
      <div class="row pt-4">
        <div class="card bg-dark text-white">
          <?php the_post_thumbnail(array('1140', '500'), ['class' => 'card-img']) ?>
          <!-- <img  class="card-img" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php the_title() ?>" /> -->
          <div class="card-img-overlay mt-4">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text">Last updated 3 mins ago</p>
          </div>
        </div>
      </div>
  </div>

  <div class="container text-center">
    <div class="row">
       <h1 class="col-12 mt-3"><?php the_title() ?> </h1>
    </div>
    <div class="row">
      <span class="col-6 text-center text-secondary">By: <?php the_author()?> </span> <span class="col-6 text-center text-secondary"> <?php the_time('F j, Y') ?></span>
    </div>
    <div class="row ">
      <span class="mt-5 mb-5">
        <?php the_content() ?>
      </span>
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

<?php get_footer() ?>

<?php wp_footer(); ?>
