<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
  <div class="meta">
    <p>Опубликовано: <?php the_time('j M Y'); ?> в <?php the_time('g:i'); ?></p>
    <p>Категории: <?php the_category(','); ?></p>
  </div>
  <?php if ( has_post_thumbnail() ) the_post_thumbnail(); ?>
  <?php the_content(''); ?>
  <?php the_tags('<p>Метки: ', ', ', '</p>'); ?>
</article>