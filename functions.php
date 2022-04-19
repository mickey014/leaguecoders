<?php
/*
Template Name: Full-width layout
Template Post Type: post, page, product
*/

/* LC Means LEAGUE CODERS OUR TITLE IN WEBSITE */
add_action('init', 'lc_template_directory');
add_action('after_setup_theme', 'lc_custom_logo_setup');
add_action('after_setup_theme', 'lc_register_header_nav_menu');
add_action('init', 'html5_post_type');
add_action('init', 'css_post_type');
add_action('init', 'boot_post_type');
add_action('init', 'js_post_type');
add_action('init', 'php_post_type');
add_filter( 'posts_search', 'wpse_11826_search_by_title', 10, 2 );
add_filter('next_post_link','add_class_next_post_link',10,1);
add_filter('previous_post_link','add_class_previous_post_link',10,1);
add_filter( 'nav_menu_css_class', 'change_page_menu_classes', 10,2 );

// directory js/css
function lc_template_directory() {
  if(!is_admin()) {

    wp_enqueue_style('font-awesome', get_template_directory_uri(). '/assets/css/all.min.css');
    wp_enqueue_style('boot-css', get_template_directory_uri(). '/assets/css/bootstrap.min.css');
    wp_enqueue_script('boot-js', get_template_directory_uri(). '/assets/js/bootstrap.min.js', [],'',true);
    wp_enqueue_style('custom-style', get_template_directory_uri(). '/style.css?212wer1');
    wp_enqueue_script('jquery-js', get_template_directory_uri(). '/assets/js/jquery.min.js', [],'',true);
    wp_enqueue_script('active-links-js', get_template_directory_uri(). '/assets/js/wp-active-links.js', [],'',true);
    wp_enqueue_script('main-js', get_template_directory_uri(). '/assets/js/main.js', [],'',true);
   
  }
}

// the custom logo
function lc_custom_logo_setup() {
  $defaults = array(
    'height'               => 60,
    'width'                => 120,
    'flex-height'          => true,
    'flex-width'           => true,
    'header-text'          => array( 'site-title', 'site-description' ),
    'unlink-homepage-logo' => false, 
  );

  add_theme_support( 'custom-logo', $defaults );
}

// Navbar Section
function lc_register_header_nav_menu() {
  register_nav_menu('header_nav_menu', 'Header Navigation Menu');
}

// Custom Post Types
function html5_post_type() {
  $args = [
    'labels' => [
      'name' => 'Html5',
      'singular_name' => 'Html5'
    ],
    'hierarchical' => true,
    'public' => true,
    'show_in_rest' => true,
    'template' => array(
        array( 'core/paragraph', array(
            'placeholder' => 'Add Description...',
        ) ),
    ),
    'has_archive' => true,
    'supports' => ['title', 'editor', 'blocks'],
    'menu_position' => 3,
  ];
  
  register_post_type('html5', $args);
}

// Custom Post Types
function css_post_type() {
  $args = [
    'labels' => [
      'name' => 'Css3',
      'singular_name' => 'Css3',
    ],
    'hierarchical' => true,
    'public' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'template' => array(
        array( 'core/paragraph', array(
            'placeholder' => 'Add Description...',
        ) ),
    ),
    'show_ui'            => true,
    'show_in_menu'       => true,
    'supports' => ['title', 'editor', 'blocks'],
    'menu_position' => 4,
  ];

  register_post_type('css3', $args);

}

// Custom Post Types
function boot_post_type() {
  $args = [
    'labels' => [
      'name' => 'Bootstrap',
      'singular_name' => 'Bootstrap',
    ],
    'hierarchical' => true,
    'public' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'template' => array(
        array( 'core/paragraph', array(
            'placeholder' => 'Add Description...',
        ) ),
    ),
    'show_ui'            => true,
    'show_in_menu'       => true,
    'supports' => ['title', 'editor', 'blocks'],
    'menu_position' => 4,
  ];

  register_post_type('bootstrap', $args);

}

// Custom Post Types
function js_post_type() {
  $args = [
    'labels' => [
      'name' => 'Javascript',
      'singular_name' => 'Javascript',
    ],
    'hierarchical' => true,
    'public' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'template' => array(
        array( 'core/paragraph', array(
            'placeholder' => 'Add Description...',
        ) ),
    ),
    'show_ui'            => true,
    'show_in_menu'       => true,
    'supports' => ['title', 'editor', 'blocks'],
    'menu_position' => 4,
  ];

  register_post_type('javascript', $args);

}

// Custom Post Types
function php_post_type() {
  $args = [
    'labels' => [
      'name' => 'Php',
      'singular_name' => 'Php',
    ],
    'hierarchical' => true,
    'public' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'template' => array(
        array( 'core/paragraph', array(
            'placeholder' => 'Add Description...',
        ) ),
    ),
    'show_ui'            => true,
    'show_in_menu'       => true,
    'supports' => ['title', 'editor', 'blocks'],
    'menu_position' => 4,
  ];

  register_post_type('php', $args);

}

/**
 * Search SQL filter for matching against post title only.
 *
 * @link    http://wordpress.stackexchange.com/a/11826/1685
 *
 * @param   string      $search
 * @param   WP_Query    $wp_query
 */
function wpse_11826_search_by_title( $search, $wp_query ) {
  if ( ! empty( $search ) && ! empty( $wp_query->query_vars['search_terms'] ) ) {
      global $wpdb;

      $q = $wp_query->query_vars;
      $n = ! empty( $q['exact'] ) ? '' : '%';

      $search = array();

      foreach ( ( array ) $q['search_terms'] as $term )
          $search[] = $wpdb->prepare( "$wpdb->posts.post_title LIKE %s", $n . $wpdb->esc_like( $term ) . $n );

      if ( ! is_user_logged_in() )
          $search[] = "$wpdb->posts.post_password = ''";

      $search = ' AND ' . implode( ' AND ', $search );
  }

  return $search;
}

function add_class_next_post_link($html){
  $html = str_replace('<a','<a class="next"',$html);
  return $html;
}


function add_class_previous_post_link($html){
  $html = str_replace('<a','<a class="prev"',$html);
  return $html;
}


function change_page_menu_classes($menu)
{
    global $post;
    if (get_post_type($post) == 'bonsai')
    {
        $menu = str_replace( 'current-menu-item', '', $menu ); // remove all current_page_parent classes
        $menu = str_replace( 'menu-item-299', 'menu-item-299 current-menu-item', $menu ); // add the current_page_parent class to the page you want
    }
    return $menu;
}

function is_search_has_results() {
  return 0 != $GLOBALS['wp_query']->found_posts;
}

function test_data($data) {
  echo '<pre>';
  print_r($data);
  echo '</pre>';
}

require get_template_directory() . '/template-parts/walker-nav-menu.php';