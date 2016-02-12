<?php
require_once('../../../../../wp-load.php');
if (!is_user_logged_in()) {
    header("HTTP/1.0 404 Not Authorized");
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}

$footer_links = get_option('wp_corlate_footer_links');

if (is_array($footer_links) && isset($footer_links[$_POST['group']])) {
    unset($footer_links[$_POST['group']]);

    update_option('wp_corlate_footer_links', $footer_links);
    echo json_encode(array('status' => 'OK', 'id' => array('group' => $_POST['group'])));
} else
    echo json_encode(array('error' => 'Not Found'));