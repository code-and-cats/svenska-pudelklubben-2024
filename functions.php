<?php
/**
 * SPK24 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SPK24
 */

if ( ! defined( '_S_VERSION' ) ) {
    define( '_S_VERSION', '1.0.0' );
}

// Theme setup functions
require get_template_directory() . '/inc/theme-setup.php';

// Custom post types
require get_template_directory() . '/inc/post-types.php';

// Meta boxes
require get_template_directory() . '/inc/meta-boxes.php';

// Enqueue scripts and styles
require get_template_directory() . '/inc/scripts-styles.php';

// Utility functions
require get_template_directory() . '/inc/utilities.php';

// Load Jetpack compatibility file if Jetpack is installed
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}
