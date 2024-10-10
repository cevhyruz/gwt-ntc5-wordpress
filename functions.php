<?php

require get_stylesheet_directory() . '/inc/ntc-widget.php';

function gwt_ntc_mock1_enqueue_scripts() {
  $js_dir = get_stylesheet_directory() . '/js/';
  $js_files = glob($js_dir . '*.js');

  foreach ($js_files as $js_file) {
    $file_name = basename($js_file);
    $handle = 'custom-js-' . pathinfo($file_name, PATHINFO_FILENAME);
    wp_enqueue_script($handle, get_stylesheet_directory_uri() . '/js/' . $file_name, array(), null, true);
  }
}
add_action('wp_enqueue_scripts', 'gwt_ntc_mock1_enqueue_scripts');


/* Display page content anywhere */
function display_page_content($atts) {
    $atts = shortcode_atts(
        array('id' => ''), $atts, 'display_page'
    );
    
    $page = get_post($atts['id']);
    
    if ($page) {
        return apply_filters('the_content', $page->post_content);
    } else {
        return 'Page not found.';
    }
}
add_shortcode('display_page', 'display_page_content');


?>
