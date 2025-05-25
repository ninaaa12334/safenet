<?php


// Theme Setup
function safenet_setup() {
  // ...existing setup code...
}
add_action('after_setup_theme', 'safenet_setup');

// Enqueue Styles and Scripts (only one function!)
function safenet_enqueue_scripts() {
    wp_enqueue_style('safenet-style', get_stylesheet_uri(), array(), '2.1');
    wp_enqueue_style('leaflet-style', 'https://unpkg.com/leaflet@1.9.3/dist/leaflet.css');
    wp_enqueue_script('leaflet', 'https://unpkg.com/leaflet@1.9.3/dist/leaflet.js', array(), null, true);
    wp_enqueue_script('safenet-scripts', get_template_directory_uri() . '/js/scripts.js', array('leaflet'), null, true);
    wp_enqueue_script('chatbox-js', get_template_directory_uri() . '/js/chatbox.js', array(), '1.0', true);
    wp_enqueue_script('mental-health-chat', get_template_directory_uri() . '/js/mental-health-chat.js', array(), null, true);
    wp_enqueue_style('mental-health-chat-style', get_template_directory_uri() . '/css/mental-health-chat.css');
}
add_action('wp_enqueue_scripts', 'safenet_enqueue_scripts');

// (Optional) Only if you need page-specific scripts, keep this:
function enqueue_womens_rights_scripts() {
    if (is_page_template('template-womens-rights.php')) {
        wp_enqueue_script('map-js', get_template_directory_uri() . '/js/map.js', array('leaflet'), null, true);
        wp_enqueue_script('womens-rights-js', get_template_directory_uri() . '/js/womens-rights.js', array('jquery'), null, true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_womens_rights_scripts');

// Create directory for JavaScript files if it doesn't exist
function safenet_create_js_directory() {
  $upload_dir = wp_upload_dir();
  $js_dir = get_stylesheet_directory() . '/js';
  if (!file_exists($js_dir)) {
    wp_mkdir_p($js_dir);
  }
}
add_action('init', 'safenet_create_js_directory');

// REST API endpoint for abuse report submissions
function safenet_register_abuse_report_endpoint() {
  register_rest_route('safenet/v1', '/report', array(
    'methods' => 'POST',
    'callback' => 'safenet_handle_abuse_report',
    'permission_callback' => '__return_true'
  ));
}
add_action('rest_api_init', 'safenet_register_abuse_report_endpoint');

function safenet_handle_abuse_report($request) {
  $params = $request->get_json_params();

  $lat = sanitize_text_field($params['lat']);
  $lng = sanitize_text_field($params['lng']);
  $message = sanitize_textarea_field($params['message']);

  $report_post = array(
    'post_title' => 'Abuse Report - ' . current_time('Y-m-d H:i:s'),
    'post_content' => "Location: ($lat, $lng)\n\n$message",
    'post_status' => 'private',
    'post_type' => 'post'
  );

  $post_id = wp_insert_post($report_post);

  if ($post_id) {
    return array('success' => true);
  } else {
    return new WP_Error('report_error', 'Failed to save the report', array('status' => 500));
  }
}