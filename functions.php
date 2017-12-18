<?php
/**
 * Register Stylesheet
 */
  function nkd_register_styles(){
    wp_register_style(
      'main-stylesheet', //handle
      get_template_directory_uri() . '/style.css', //source
      null, //no dependencies
      filemtime( get_template_directory() . '/style.css' ) //version
    );
  }
  add_action('init', 'nkd_register_styles');

  function nkd_enqueue_styles(){
    if (!is_admin()):
      wp_enqueue_style('main-stylesheet'); //style.css
    endif; //!is_admin
  }
  add_action('wp_print_styles', 'nkd_enqueue_styles');

/**
 * Add internationalization
 */
  function custom_theme_setup() {

    // Retrieve the directory for the internationalization files
    $lang_dir = get_template_directory() . '/languages';

    // Set the theme's text domain using the unique identifier from above
    load_theme_textdomain('naked-theme', $lang_dir);

  } // end custom_theme_setup
  add_action('after_setup_theme', 'custom_theme_setup');

/**
 * Remove WordPress Version Number
 */
  function nkd_remove_version() {
    return '';
  }
  add_filter('the_generator', 'nkd_remove_version');

/**
 * Add support for post-thumbnails
 */
  if ( function_exists('add_theme_support') )
  add_theme_support('post-thumbnails');

/**
 * Add Excerpt for pages
 */
  add_post_type_support( 'page', 'excerpt' );

/**
 * MENUS
 */
  function nkd_menus() {
     register_nav_menus(
       array(
         'main-menu' => __( 'Main Menu', 'naked-theme' ),
         'footer-menu' => __( 'Footer Menu', 'naked-theme' )
       )
     );
   }
   add_action( 'init', 'nkd_menus' );

/**
 * Add automatic-feed-links to the head
 */
  global $wp_version;
  if ( version_compare( $wp_version, '3.0', '>=' ) ) :
    add_theme_support( 'automatic-feed-links' );
  else :
    automatic_feed_links();
  endif;
