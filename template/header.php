<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title><?php wp_title(); ?> | <?php bloginfo('name'); ?></title>
  <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <?php
      $args = array('theme_location' => 'header', 'container'=> 'ul', 'menu_class' => 'header-menu', 'menu_id' => 'header-menu');
      wp_nav_menu($args);
    ?>
  </header>