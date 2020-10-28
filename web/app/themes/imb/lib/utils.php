<?php
/**
 * Utility functions
 */
function is_element_empty($element) {
  $element = trim($element);
  return !empty($element);
}

// Tell WordPress to use searchform.php from the templates/ directory
function roots_get_search_form($form) {
  $form = '';
  locate_template('/templates/searchform.php', true, false);
  return $form;
}
add_filter('get_search_form', 'roots_get_search_form');

// Add a favicon to the browser tab of the logo
function imb_add_favicon() {
    echo '<link rel="shortcut icon" href="' . get_bloginfo('stylesheet_directory') . '/imb_logo_icon.ico" />';
}
add_action('wp_head', 'imb_add_favicon');
