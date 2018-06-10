<?php get_header(); ?>

<div class="header_with_image">
  <!-- <imgsrc="wp-content/themes/paint-the-scene/assets/img/main.jpg"/> -->
  <img  class="fill-image" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php echo get_custom_header()->alt ?>" />
  <div class="header-text container">
    <div class="row">
      <h1 class="display-2"><?php echo get_bloginfo('name') ?></h1>
    </div>
    <div class="row">
      <p class="lead"><?php echo get_bloginfo('description') ?></p>
    </div>
  </div>
</div>
<div class="container pt-3">
  <div class="row">
    <span class="pt-3">
      <p>Welcome Aboard Simply Smart Travel.
  Whether you travel for business, pleasure, health, love of learning , adventure, the love of others, to explore the open road or to just get there, we know that your primary goal is to travel with as little hassle and the most pleasure possible. We’re here to help you do that.
      </p>
      <ul>
        <li>While we focus on providing superb information for travelers over 50 (yep, that includes us) that’s not all. We know we have readers and followers of all ages.</li>
        <li> We love learning and provide advice on how you can enjoy learning from and about your specific destination, from museums to cultural events and a whole lot more. </li>
        <li>We also love to explore Florida and report on our explorations so you can benefit from our love affair with this gorgeous state.</li>
        <li>We also simply adore traveling by train so we including a lot on that subject too. Our goal is to weave together ideas and tips to help make your traveling easier, more enjoyable and help you squeeze more value from your precious time and money.</li>
      </ul>
      <p> We invite you to look around, use whatever might be useful and, if you like what you see, to please join our little online travel club (it’s free and always will be) so we can keep you in the loop about what we have learned, pass on any deals and discounts we unearth and number you among our travel friends.</p>
      <p> If you have ideas, tips and experiences you want to pass on to others, we invite you to select the Contact Us link above and submit them. </p>
      <p>Thanks for traveling the information highway with us. We hope you enjoy the trip. </p>
    </span>
  </div>
  <div class="row border-bottom mt-3 mb-3">
    <h1 class="display-6">latest posts...</h1>
  </div>
  <div class="row pb-3">
    <?php  if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
      <div class="col-md-6 pb-3">
        <div class="card">
          <?php the_post_thumbnail(array('500', '250'), ['class' => 'card-img-top']) ?>
          <div class="card-body">
            <h4 class="card-title"><?php the_title() ?> </h4>
            <h6 class="card-subtitle mb-2 text-muted"><?php the_time('F j, Y') ?></h6>
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
<?php wp_footer(); ?>
