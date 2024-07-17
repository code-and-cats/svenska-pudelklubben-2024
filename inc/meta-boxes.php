<?php
// Add custom meta boxes
function add_custom_sidebar_meta_box() {
    $post_types = array('page', 'norra', 'västra', 'mellansvenska', 'sodra');
    
    foreach ($post_types as $post_type) {
        add_meta_box(
            'custom_sidebar_content_box_' . $post_type, // Unique ID
            'Sidebar Content', 
            'custom_sidebar_content_box_html', // Content callback
            $post_type, // Post type
            'normal', // Context
            'high' // Priority
        );
    }
}
add_action('add_meta_boxes', 'add_custom_sidebar_meta_box');


function custom_sidebar_content_box_html($post) {
    $content = get_post_meta($post->ID, 'custom_sidebar_content', true);
    wp_editor($content, 'custom_sidebar_content', array(
        'textarea_name' => 'custom_sidebar_content',
        'media_buttons' => false,
        'textarea_rows' => 10,
        'teeny' => false,
        'tinymce' => array(
            'toolbar1' => 'formatselect bold italic bullist numlist link',
            'toolbar2' => 'alignleft aligncenter alignright',
        ),
    ));
}

function save_custom_sidebar_content($post_id) {
    if (array_key_exists('custom_sidebar_content', $_POST)) {
        update_post_meta($post_id, 'custom_sidebar_content', $_POST['custom_sidebar_content']);
    }
}
add_action('save_post', 'save_custom_sidebar_content');
