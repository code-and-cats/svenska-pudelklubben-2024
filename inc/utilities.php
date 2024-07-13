<?php
// Add custom body classes
function add_avdelning_body_class($classes) {
    if (is_singular()) {
        $post_type = get_post_type();
        if (in_array($post_type, ['norra', 'vastra', 'mellansvenska', 'sodra'])) {
            $classes[] = 'avdelning-' . $post_type;
        }
    }
    return $classes;
}
add_filter('body_class', 'add_avdelning_body_class');
