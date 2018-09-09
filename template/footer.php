<footer>
  <?php $args = array( 'theme_location' => 'footer', 'container'=> 'ul', 'menu_class' => 'footer-menu', 'menu_id' => 'footer-menu' );
    wp_nav_menu($args);
  ?>
  <p><b><?php bloginfo('name'); ?></b>, <? echo date('Y'); ?></p>
</footer>
<?php wp_footer(); ?>
</body>
</html>