<?php

function report_post_init() {
    $args = array(
      'public' => true,
      'label'  => 'Reports',
      'supports'      => array( 'title', 'thumbnail' ),
      'has_archive'   => true
    );
    register_post_type( 'report', $args );
}

add_action( 'init', 'report_post_init' );

function report_taxonomy() {
  	$args = array(
    	'hierarchical' => true
  	);
  register_taxonomy( 'report_year', 'report', $args );
}

add_action( 'init', 'report_taxonomy', 0 );

function report_update_sitemap_link($url, $post)
{
    if ('report' == get_post_type($post)) {

        $report_url = get_post_meta($post->ID, 'report-upload',true);


        if (!empty($report_url)) {
            $url = $report_url;
        }

    }

    return $url;
}
add_filter( 'wsp_cpt_link', 'report_update_sitemap_link', 10, 2 );