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

/* Remove sidebar for woocommerce single product pages
add_action( 'wp', function() {
    if ( is_product() ) {
        error_log( 'WooCommerce sidebar removed on product page.' );
        remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
    }
});
*/

// jQuery for mobile nav overlay
function add_overlay_script() {
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            // Remove overlay if user clicks outside the menu
            $(document).on('click', function(event) {
                if (!$(event.target).closest('.mega-menu, .mega-menu-toggle').length) {
                    $('body').removeClass('mega-menu-menu-1-mobile-open');
                }
            });
        });
    </script>
    <?php
}
add_action('wp_footer', 'add_overlay_script');
