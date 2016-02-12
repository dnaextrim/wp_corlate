<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    header("HTTP/1.0 404 Not Authorized");
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}

$footer_links = get_option('wp_corlate_footer_links');
if (is_array($footer_links)) {
    echo json_encode(array_keys($footer_links));
} else
    echo json_encode(array());