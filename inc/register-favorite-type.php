<?php

function create_favorite() {
    $labels = array(
        'name' => 'Favorites',
        'singular_name' => 'Favorite',
        'menu_name' => 'Favorites',
        'all_items' => 'All Favorites',
        'view_item' => 'View Favorite',
        'add_new_item' => 'Add New',
        'add_new' => 'Add New',
        'edit_item' => 'Edit Favorite',
        'update_item' => 'Update Favorite',
        'search_items' => 'Search Favorite',
        'not_found' => 'Not Found',
        'not_found_in_trash' => 'Not Found in Trash'
    );

    $args = array(
        'label' => 'favorites',
        'description' =>  "Michelle's favorite books",
        'labels' => $labels,
        'supports' => array('title'),
        'hierarchical' => false, 
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true
    );

    register_post_type('favorites', $args);
}

add_action('init', 'create_favorite', 0);