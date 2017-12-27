<?php get_header(); ?>

<?php
  $menu = wp_get_nav_menu_items('Main', array(
  'fallback_cb'    => 'false',
  'echo' => 'false',
  ));
?>
<nav class="container">
  <div class="row">
    <div class="col-3">
      Logo
    </div>
      <?php
        var_dump($menu);
        foreach($menu as $m):
       ?>
        <div class="col-1">
          <a href="<?php echo $m['url']; ?>"><?php echo $m['title']; ?></a>
        </div>
      <?php endforeach; ?>
    </div>
</nav>

<?php get_footer(); ?>

</html>
