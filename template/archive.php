<?php get_header(); ?>
<section>
  <h1><?php
    if (is_day()) : echo 'Архив за день: ' . get_the_date();
    elseif (is_month()) : echo 'Архив за месяц: ' . get_the_date('F Y');
    elseif (is_year()) : echo 'Архив за год: ' . get_the_date('Y');
    else : echo 'Архив';
    endif; ?></h1>
  <?php showbreadcrumb(); ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php get_template_part('loop'); ?>
  <?php endwhile;
  else: echo '<h1>Записей нет. Либо ошибка, либо категория пуста.</h1>'; endif; ?>  
  <?php showpagination(); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>