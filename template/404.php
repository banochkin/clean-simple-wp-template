<?php get_header(); ?>
<section>
  <h1>404</h1>
  <?php if ( function_exists('yoast_breadcrumb') ) : yoast_breadcrumb('<p id="breadcrumbs">','</p>'); ?>
  <p>Тут страницы нет.</p>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>