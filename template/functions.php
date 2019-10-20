<?php

register_nav_menus( array(
  'header' => 'Меню в шапке',
  'footer' => 'Меню в подвале'
) );

add_theme_support('post-thumbnails');
set_post_thumbnail_size(500, 300);
//add_image_size('gallery', 1600, 1000, true);

// Sidebar
register_sidebar(array(
  'name' => 'Левый сайдбар',
  'id' => "left-sidebar",
  'description' => 'Да, это левый сайдбар',
  'before_widget' => '<div id="%1$s" class="widget-left %2$s">',
  'after_widget' => "</div>\n",
  'before_title' => '<span class="widget-title">',
  'after_title' => "</span>\n",
));

// Pagination
function showpagination() {
  global $wp_query;
  $big = 999999999;
  echo paginate_links(array(
    'base' => str_replace($big,'%#%',esc_url(get_pagenum_link($big))),
    'format' => '?paged=%#%',
    'current' => max(1, get_query_var('paged')),
    'type' => 'list',
    'prev_text'    => 'Назад',
    'next_text'    => 'Вперед',
    'total' => $wp_query->max_num_pages,
    'show_all'     => false,
    'end_size'     => 15,
    'mid_size'     => 15,
    'add_args'     => false,
    'add_fragment' => '',
    'before_page_number' => '',
    'after_page_number' => ''
  ));
}

// Breadcrumbs
function showbreadcrumb() {
  if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');}
}

// Separator in title
add_filter( 'wpseo_title', 'wpse137502_wpseo_title' );
function wpse137502_wpseo_title( $title ) {
  $site_title = get_bloginfo( 'name' );
  if ( ! strpos( $title, $site_title ) ) {
    $title .= " — " . $site_title;
  }
  return $title;
}

?>