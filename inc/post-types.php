<?php

// Register custom post types
function register_avdelning_post_types() {
    global $avdelning_color_palettes; // Access global color palettes array

    $avdelningar = ['Norra', 'Västra', 'Mellansvenska', 'Södra'];
    foreach ($avdelningar as $avdelning) {
        $slug = strtolower($avdelning);
        $labels = array(
            'name' => $avdelning,
            'singular_name' => $avdelning,
            'menu_name' => $avdelning,
            'name_admin_bar' => $avdelning,
            'add_new' => 'Add New',
            'add_new_item' => "Add New $avdelning",
            'new_item' => "New $avdelning",
            'edit_item' => "Edit $avdelning",
            'view_item' => "View $avdelning",
            'all_items' => "All $avdelning",
            'search_items' => "Search $avdelning",
            'parent_item_colon' => "Parent $avdelning:",
            'not_found' => "No $avdelning found.",
            'not_found_in_trash' => "No $avdelning found in Trash."
        );
        $args = array(
            'labels' => $labels,
            'public' => true,
            'menu_icon' => 'dashicons-pets',
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array('slug' => $slug),
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
        );

        // Add custom color palette selection to args
        if (isset($avdelning_color_palettes[$slug])) {
            $args['avdelning_color_palette'] = $avdelning_color_palettes[$slug];
        }

        register_post_type($slug, $args);
    }
}
add_action('init', 'register_avdelning_post_types');



function spk_post_types() {

    //Aktuellt post type
    register_post_type('aktuellt', array(
      'supports' => array('title', 'editor'),
      'public' => true,
      'show_in_rest' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-buddicons-tracking',
      'labels' => array(
        'name' => 'Aktuellt'
      )
    ));
  
    //Valpar post type
    register_post_type('valpar', array(
      'public' => true,
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-pets',
      'labels' => array(
        'name' => 'Valpar'
      )
    ));
    
  }