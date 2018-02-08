<footer>
  <?php $args = array( 'theme_location' => 'bottom', 'container'=> false, 'menu_class' => 'bottom-menu', 'menu_id' => 'bottom-nav' );
    wp_nav_menu($args);
  ?>
  <p><b><?php bloginfo('name'); ?></b>, <? echo date('Y'); ?></p>
</footer>
<?php wp_footer(); ?>
</body>
</html>