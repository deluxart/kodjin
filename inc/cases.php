<?php
add_action( 'init', 'register_cases_post_type' );

function register_cases_post_type() {
    register_taxonomy('casecat', array('cases'), array(
        'label'                 => 'Categories',
        'labels'                => array(
            'name'              => 'Categories',
            'singular_name'     => 'Categories',
            'search_items'      => 'Search category',
            'all_items'         => 'All categories',
            'parent_item'       => 'Parent category',
            'parent_item_colon' => 'Parent category:',
            'edit_item'         => 'Edit category',
            'update_item'       => 'Update category',
            'add_new_item'      => 'Add category',
            'new_item_name'     => 'Add new category',
            'menu_name'         => 'Categories',
        ),
        'description'           => 'Categories for cases',
        'public'                => true,
        'show_in_nav_menus'     => false,
        'show_in_rest'          => true,
        'show_ui'               => true,
        'show_tagcloud'         => false,
        'hierarchical'          => true,
        'show_admin_column'     => true,
    ) );

    register_post_type('cases', array(
        'label'               => 'Cases',
        'labels'              => array(
            'name' => 'Cases',
            'singular_name' => 'Case',
            'add_new' => 'Add case',
            'add_new_item' => 'Add new case',
            'edit_item' => 'Edit case',
            'new_item' => 'New case',
            'all_items' => 'All cases',
            'search_items' => 'Cases search',
            'menu_name' => 'Cases'
        ),
        'menu_icon' => 'dashicons-welcome-widgets-menus',
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'menu_position' 	  => 2,
        'rest_base'           => '',
        'show_in_menu'        => true,
        'exclude_from_search' => false,
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
        'hierarchical'        => false,
        'rewrite'           => array(
            'slug' => 'cases',
            'with_front' => false
        ),
        'has_archive'         => true,
        'query_var'           => true,
        'show_in_rest' 		  => true,
        'supports'            => array( 'title', 'thumbnail', 'revisions' ),
    ) );
}

?>