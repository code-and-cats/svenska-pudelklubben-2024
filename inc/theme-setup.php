<?php
// Basic theme setup
function spk24_setup() {
    load_theme_textdomain('spk24', get_template_directory() . '/languages');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array('menu-1' => esc_html__('Primary', 'spk24')));
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'spk24_setup');

// Set the content width based on the theme's design and stylesheet.
function spk24_content_width() {
    $GLOBALS['content_width'] = apply_filters('spk24_content_width', 640);
}
add_action('after_setup_theme', 'spk24_content_width', 0);

// Register widget areas.
function spk24_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'spk24'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'spk24'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'spk24_widgets_init');
