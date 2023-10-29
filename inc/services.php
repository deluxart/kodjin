<?php
add_action( 'init', 'kodjin_services_func' );

function kodjin_services_func() {
    $labels = array(
        'name' => 'Services',
        'singular_name' => 'Service',
        'add_new' => 'Add service',
        'add_new_item' => 'Add new service',
        'edit_item' => 'Edit service',
        'new_item' => 'New service',
        'all_items' => 'All services',
        'search_items' => 'Service search',
        'menu_name' => 'Services'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-excerpt-view',
        'menu_position' => 5,
        'supports' => array( 'title', 'revisions'),
        'rewrite'           => array(
            'slug' => 'service',
            'with_front' => false
        ),
    );
    register_post_type('service', $args);
}

// Shortcode for cases [product-list posts="3"]
function service_listing_parameters_shortcode( $atts ) {
    ob_start();

    $args = shortcode_atts( array (
        'type' => 'service',
        'posts' => 12,
    ), $atts );

    $options = array(
        'post_type' => $args['type'],
        'posts_per_page' => $args['posts'],
    );

    $query = new WP_Query( $options );

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) : $query->the_post();;
            get_template_part( 'template-parts/service-card', get_post_format() );
        endwhile;
        wp_reset_postdata();
        $myvariable = ob_get_clean();
        return $myvariable;
    }
}
add_shortcode( 'services-list', 'service_listing_parameters_shortcode' );


?>