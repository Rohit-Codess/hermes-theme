<?php

// 1. Enqueue Styles and Scripts (Basic Setup)
function hermes_scripts() {
    // We are using Tailwind via CDN in header, so we don't need much here yet
}
add_action( 'wp_enqueue_scripts', 'hermes_scripts' );

// 2. The Filtering Logic (The Magic Part)
function hermes_filter_jobs( $query ) {
    // Only run this on the main query and on the job archive page/feed
    if ( !is_admin() && $query->is_main_query() && (is_post_type_archive('job') || is_tax('job_category')) ) {

        $meta_query = array('relation' => 'AND');

        // Filter by Sector (Dropdown or Sidebar)
        if ( !empty( $_GET['sector'] ) ) {
            $meta_query[] = array(
                'key'     => 'sector',
                'value'   => sanitize_text_field( $_GET['sector'] ),
                'compare' => 'LIKE'
            );
        }

        // Filter by Location (Text Input)
        if ( !empty( $_GET['location'] ) ) {
            $meta_query[] = array(
                'key'     => 'location',
                'value'   => sanitize_text_field( $_GET['location'] ),
                'compare' => 'LIKE'
            );
        }

        // Apply the filters
        if ( count( $meta_query ) > 1 ) {
            $query->set( 'meta_query', $meta_query );
        }
    }
}
add_action( 'pre_get_posts', 'hermes_filter_jobs' );

?>