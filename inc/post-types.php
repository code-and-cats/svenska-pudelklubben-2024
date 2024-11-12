<?php

// Register custom post types
function register_avdelning_post_types() {
    $avdelningar = ['Norra', 'Västra', 'Mellansvenska', 'Södra'];
    foreach ($avdelningar as $avdelning) {
        $slug = strtolower($avdelning);
        $labels = array(
            'name' => $avdelning,
            'singular_name' => $avdelning,
            'menu_name' => $avdelning,
            'name_admin_bar' => $avdelning,
            'add_new' => 'Lägg till',
            'add_new_item' => "Lägg till $avdelning",
            'new_item' => "Ny $avdelning",
            'edit_item' => "Redigera $avdelning",
            'view_item' => "Visa $avdelning",
            'all_items' => "Alla $avdelning",
            'search_items' => "Sök $avdelning",
            'parent_item_colon' => "Parent $avdelning:",
            'not_found' => "Ingen $avdelning hittad.",
            'not_found_in_trash' => "Ingen $avdelning hittad i papperskorgen."
        );
        $args = array(
            'labels' => $labels,
            'public' => true,
            'menu_icon' => 'dashicons-pets',
            'publicly_queryable' => true,
            'show_in_menu' => true,
            'show_in_rest' => true,
            'query_var' => true,
            'rewrite' => array('slug' => $slug),
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => array('title', 'editor', 'thumbnail'),
        );
        register_post_type($slug, $args);
    }
}
add_action('init', 'register_avdelning_post_types');

?>
