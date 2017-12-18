<!DOCTYPE html>
<html dir="ltr" <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" >
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <title><?php wp_title(' |', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <a class="screen-reader-text" href="#main"><?php echo _x( 'Skip to content', 'skip link', 'naked-theme' ); ?></a>
    <header class="page-header" role="banner">
      <?php get_search_form(); ?>
      <nav id="main-menu" class="main-menu" role="navigation" aria-label="site links">
        <ul class="main-menu--list">
          <?php wp_nav_menu( array(
            'theme_location' => 'main-menu',
            'container' =>  false,
            'fallback_cb' => false,
            'items_wrap' => '%3$s',
            'depth' => 2,
          ) ); ?>
        </ul>
      </nav>
      <?php if (is_front_page()) {
          echo "<h1 class='page-title'>";
            bloginfo('name');
          echo '</h1>';
          echo '<p class="page-title--sub">'. get_bloginfo('description') .'</p>';
        } else {
          echo "<h1 class='page-title'>";
          echo "<a href='";
            echo esc_url( home_url('/') );
          echo "'>";
            bloginfo('name');
          echo '</a>';
          echo '</h1>';
          echo '<p class="page-title--sub">'. get_bloginfo('description') .'</p>';
        } ?></h1>
    </header>
