<?php

register_nav_menus( array(
  'top' => 'Верхнее меню',
  'bottom' => 'Нижнее меню'
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

// Disable REST API
add_filter('rest_enabled', '__return_false');
remove_action( 'xmlrpc_rsd_apis',            'rest_output_rsd' );
remove_action( 'wp_head',                    'rest_output_link_wp_head', 10, 0 );
remove_action( 'template_redirect',          'rest_output_link_header', 11, 0 );
remove_action( 'auth_cookie_malformed',      'rest_cookie_collect_status' );
remove_action( 'auth_cookie_expired',        'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_username',   'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_hash',       'rest_cookie_collect_status' );
remove_action( 'auth_cookie_valid',          'rest_cookie_collect_status' );
remove_filter( 'rest_authentication_errors', 'rest_cookie_check_errors', 100 );
remove_action( 'init',          'rest_api_init' );
remove_action( 'rest_api_init', 'rest_api_default_filters', 10, 1 );
remove_action( 'parse_request', 'rest_api_loaded' );
remove_action( 'rest_api_init',          'wp_oembed_register_route'              );
remove_filter( 'rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );

?>