<?php
// Theme Setup
function safenet_setup() {
  // Add support for title tag
  add_theme_support('title-tag');
  
  // Add support for post thumbnails
  add_theme_support('post-thumbnails');
  
  // Add support for custom logo
  add_theme_support('custom-logo', array(
    'height'      => 100,
    'width'       => 300,
    'flex-height' => true,
    'flex-width'  => true,
  ));
  
  // Register navigation menu
  register_nav_menus(array(
    'primary' => __('Primary Menu', 'safenet'),
  ));
  
  // Add support for responsive embedded content
  add_theme_support('responsive-embeds');
  
  // Add support for HTML5 markup
  add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}

// Hook theme setup
add_action('after_setup_theme', 'safenet_setup');

// Enqueue Styles and Scripts
function safenet_enqueue_styles() {
  // Main style.css with cache-busting
  wp_enqueue_style('safenet-style', get_stylesheet_uri(), array(), filemtime(get_stylesheet_directory() . '/style.css'));
  
  // Google Fonts: Poppins & Roboto
  wp_enqueue_style('safenet-google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Roboto:wght@400;500&display=swap', array(), null);
  
  // Custom JavaScript for interactive elements (e.g., quiz)
  wp_enqueue_script('safenet-script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), filemtime(get_stylesheet_directory() . '/js/scripts.js'), true);
  
  // Localize script for AJAX or dynamic URLs
  wp_localize_script('safenet-script', 'safenet_vars', array(
    'ajax_url' => admin_url('admin-ajax.php'),
    'home_url' => home_url('/')
  ));
}

// Hook styles and scripts
add_action('wp_enqueue_scripts', 'safenet_enqueue_styles');

// Create directory for JavaScript files if it doesn't exist
function safenet_create_js_directory() {
  $upload_dir = wp_upload_dir();
  $js_dir = get_stylesheet_directory() . '/js';
  if (!file_exists($js_dir)) {
    wp_mkdir_p($js_dir);
  }
}

// Hook to create JS directory
add_action('init', 'safenet_create_js_directory');
?>




