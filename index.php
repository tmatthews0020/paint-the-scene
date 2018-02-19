<?php get_header(); ?>


  <div class="header_with_image">
    <!-- <imgsrc="wp-content/themes/paint-the-scene/assets/img/main.jpg"/> -->
    <img  class="fill-image" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
    <div class="header-text container">
      <div class="row">
        <h1 class="display-2">Simply Smart Travel</h1>
      </div>
      <div class="row">
        <p class="lead"> tips and tricks </p>
      </div>
    </div>
  </div>


<div class="container pt-3">
  <div class="row">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae urna risus. Nam magna nisl, ullamcorper eget ornare at, commodo eu lectus. Donec dolor urna, posuere sit amet tellus eu, luctus sollicitudin ipsum. In gravida molestie viverra. Mauris pharetra nunc at mauris elementum placerat. Mauris elementum nibh lacinia aliquam molestie. Etiam ultrices, sem a varius sagittis, orci turpis mattis velit, in fermentum elit dolor quis sem. Vestibulum sed imperdiet arcu. Nullam rhoncus mi a metus accumsan, vitae ornare metus iaculis. Mauris sit amet suscipit mauris. Curabitur pulvinar dolor felis, ut maximus nibh cursus non. Donec porta porta dolor, a tempus tortor eleifend id. Morbi dapibus nunc erat. Morbi ultrices volutpat finibus.

Donec mollis egestas metus in pharetra. Etiam gravida cursus erat, in hendrerit elit volutpat at. Morbi eget tortor at ipsum semper vehicula ac nec mauris. Nunc venenatis, tellus ullamcorper fringilla faucibus, nibh turpis eleifend nisl, et dapibus lorem dui dignissim purus. Nullam non consectetur elit. Maecenas non venenatis magna. Nunc lacinia ex eget libero efficitur, ac hendrerit metus scelerisque. Praesent mattis euismod velit in sagittis. Quisque consequat, mi quis tincidunt consequat, ipsum ante lobortis nulla, quis fermentum risus leo in ipsum. Sed sollicitudin orci metus, ornare facilisis nisi viverra condimentum. Aliquam rhoncus placerat est quis dignissim. In sit amet est nisi. In laoreet ex ac neque vestibulum, vel efficitur nibh bibendum.

Integer leo nunc, tincidunt sed tortor ut, accumsan gravida ex. Fusce malesuada viverra elementum. Pellentesque vehicula augue quis quam scelerisque convallis. Praesent vitae vestibulum tortor. Donec vel lorem nec lectus fringilla facilisis et in mi. Pellentesque commodo dignissim feugiat. Maecenas efficitur pulvinar lacus.

Mauris maximus lacus ac est commodo mattis. Vivamus interdum diam quis nisl vulputate, quis imperdiet dolor rutrum. Etiam tincidunt, ante id tincidunt auctor, nulla turpis ultricies erat, sed luctus ipsum felis commodo elit. Quisque volutpat sapien at nibh sollicitudin, id pulvinar justo egestas. Nulla at sem urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sagittis vulputate efficitur. Proin a ligula vestibulum, blandit urna eu, rutrum nisi. Nam aliquam mattis arcu, a sodales mauris ornare quis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum iaculis maximus euismod. Nullam scelerisque, augue et dapibus tincidunt, tortor risus rutrum tellus, eget commodo purus arcu non urna. Nam laoreet consectetur condimentum. Sed quis velit tempus tortor maximus interdum. Integer convallis magna et nisl tincidunt facilisis.

Morbi a interdum dui. Sed quis risus et risus ultricies congue. Donec et eleifend nisi, eu blandit nulla. Phasellus finibus nunc sodales
  </p>
  </div>
  <div class="row">
    <?php  if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
      <div class="col-md-4">
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


<?php wp_footer(); ?>
