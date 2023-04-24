<?php
/**
 * Plugin Name: Sample CURL on Wordpress
 * Version: 0.1
 * Author: Agus Suroyo
 * Description: Sample CURL request using WP Remote Request
 */

add_shortcode('curl_wordpress', function() {
    $get = wp_remote_get(rest_url('wp/v2/posts'));
    $body = wp_remote_retrieve_body($get);
    $data = json_decode($body, true);

    ob_start();

    echo '<ul>';
    foreach ($data as $datum) {
        echo '<li>';
        echo $datum['title']['rendered'];
        echo '<li>';
    }
    echo '<ul>';
    
    return ob_get_clean();
});