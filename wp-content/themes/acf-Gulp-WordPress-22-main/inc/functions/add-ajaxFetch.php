<?php

// Define the AJAX action for logged-in users
add_action('wp_ajax_my_custom_fetch', 'my_custom_fetch_function');
// Define the AJAX action for non-logged-in users
add_action('wp_ajax_nopriv_my_custom_fetch', 'my_custom_fetch_function');

function my_custom_fetch_function()
{
    // Ensure this function runs only on weekdays
    $day_of_week = date('w');

    if ($day_of_week > 0 && $day_of_week < 6) {
        $fecha = date('Y-m-d');
        $url = 'https://www.imprentanacional.go.cr/gaceta/?date='.$fecha;

        // Use wp_remote_get to fetch the URL
        $response = wp_remote_get($url);

        if (is_wp_error($response)) {
            wp_send_json_error('Failed to fetch URL: '.$response->get_error_message());
        } else {
            $body = wp_remote_retrieve_body($response);
            // Process the response body as needed
            wp_send_json_success($body);
        }
    } else {
        wp_send_json_error('Fetch is allowed only on weekdays');
    }
}
