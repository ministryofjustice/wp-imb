<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('<span class="more-link">Read more ></span>', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Manage output of wp_title()
 */
function roots_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'roots_wp_title', 10);

/**
 * Only allow administrators to access the Ninja Forms 'All Forms' page.
 *
 * @param $capabilities
 * @return string
 */
function imb_ninja_forms_admin_all_forms_capabilities($capabilities) {
  return 'manage_options';
}
add_filter('ninja_forms_admin_all_forms_capabilities', 'imb_ninja_forms_admin_all_forms_capabilities');

/**
 * Allow editors to access the Ninja Forms 'Submissions' page.
 *
 * @param $cap
 * @return string
 */
function imb_ninja_forms_submissions_capabilities($cap) {
  return 'edit_posts';
}
add_filter('ninja_forms_admin_submissions_capabilities', 'imb_ninja_forms_submissions_capabilities');
add_filter('ninja_forms_admin_parent_menu_capabilities', 'imb_ninja_forms_submissions_capabilities');
add_filter('ninja_forms_admin_menu_capabilities', 'imb_ninja_forms_submissions_capabilities');
