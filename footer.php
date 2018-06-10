<nav class="footer bg-dark mt-3 text-white">
  <div class="container pt-3">
    <div class="row text-center justify-content-center">
      <div class="col-6">Simply Smart Travel - Copyright <?php echo date("Y") ?> </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-6">
             <?php wp_nav_menu( array(
               'theme-location' => 'nav-menu',
               'menu_class' => 'text-white',
               'fallback_cb' => false,
               // 'after' => '</div>',
               // 'items_wrap' => '%3$s'
              )); ?>

      </div>
    </div>
</nav>
