<?php
// Enqueue scripts and styles
function spk24_scripts() {
    wp_enqueue_style('spk24-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_enqueue_style('spk_page_style', get_theme_file_uri('/css/page.css'));
    wp_enqueue_style('spk_header_style', get_theme_file_uri('/css/header.css'));
    wp_enqueue_style('spk_main_styles', get_theme_file_uri('/css/styles.css'));
    wp_enqueue_style('spk_footer_styles', get_theme_file_uri('/css/footer.css'));
    wp_enqueue_style('spk_frontpage_styles', get_theme_file_uri('/css/frontpage.css'));
    wp_enqueue_style('spk_avdelningar_styles', get_theme_file_uri('/css/avdelningar.css'));
    wp_enqueue_script('spk24-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'spk24_scripts');

function enqueue_gutenberg_sidebar_scripts($hook) {
    // Check if we are on the post edit screen
    if (!in_array($hook, ['post.php', 'post-new.php'])) {
        return;
    }

    // Gutenberg scripts
    wp_enqueue_script(
        'gutenberg-editor',
        get_template_directory_uri() . '/js/gutenberg-editor.js',
        array('wp-blocks', 'wp-element', 'wp-editor', 'wp-components', 'wp-i18n'),
        filemtime(get_template_directory() . '/js/gutenberg-editor.js'),
        true
    );


}
add_action('admin_enqueue_scripts', 'enqueue_gutenberg_sidebar_scripts');

