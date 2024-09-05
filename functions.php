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

function fetch_facebook_events() {
    $page_ids = [
        '154281127963485'
    ];

    $access_token = 'EAAOiboBZCYEUBOz9QYFiOlKeVWu5U4AJJDZChW3z4PPoPJHbb2Wx9I2cUeGM5I6rlNp8MZCufcl2fqm82DEvylEhw268eEvWyL7xto2Xa0H7JSwneBPCQJ3RkgtAbtrXL8fUfTDfmbVJuAVQhoo8smGNLSsOgZARZCXIdtBfmDzOgFxKZB5QNs7kK00BpebON43bPg3gZDZD';
    $all_events = [];

    foreach ($page_ids as $page_id) {
        $url = "https://graph.facebook.com/v12.0/{$page_id}/events?access_token={$access_token}&fields=id,name,description,start_time,end_time,place,cover";

        $response = wp_remote_get($url);

        if (!is_wp_error($response)) {
            $body = wp_remote_retrieve_body($response);
            $events = json_decode($body, true);

            if (!empty($events['data'])) {
                $all_events = array_merge($all_events, $events['data']);
            }
        }
    }

    return $all_events;
}

function display_facebook_events() {
    $events = fetch_facebook_events();

    if (empty($events)) {
        return '<p>No upcoming events found.</p>';
    }

    $output = '<div class="facebook-events">';

    foreach ($events as $event) {
        $output .= '<div class="event">';

        // Display the event cover image if it exists
        if (isset($event['cover']['source'])) {
            $output .= '<img src="' . esc_url($event['cover']['source']) . '" alt="' . esc_attr($event['name']) . '" style="max-width:100%; height:auto;" />';
        }

        // Construct the event URL
        $event_url = 'https://www.facebook.com/events/' . esc_attr($event['id']);

        // Make the event title a clickable link
        $output .= '<h3><a href="' . esc_url($event_url) . '" target="_blank" rel="noopener noreferrer">' . esc_html($event['name']) . '</a></h3>';
        
        // Trim the description to 39 words
        $description = wp_trim_words( $event['description'], 39, '...' );
        $output .= '<p>' . esc_html($description) . '</p>';

        $output .= '<p><strong>Start Time:</strong> ' . date('F j, Y, g:i a', strtotime($event['start_time'])) . '</p>';

        if (isset($event['end_time'])) {
            $output .= '<p><strong>End Time:</strong> ' . date('F j, Y, g:i a', strtotime($event['end_time'])) . '</p>';
        }

        if (isset($event['place']['name'])) {
            $output .= '<p><strong>Location:</strong> ' . esc_html($event['place']['name']) . '</p>';
        }

        $output .= '</div>';
    }

    $output .= '</div>';

    return $output;
}
add_shortcode('facebook_events', 'display_facebook_events');

