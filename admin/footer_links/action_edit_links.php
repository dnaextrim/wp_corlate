<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    header("HTTP/1.0 404 Not Authorized");
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}

$links = get_option('wp_corlate_footer_links');

if (is_array($links) && isset($links[$_POST['group']]) && isset($links[$_POST['group']][intval($_POST['id'])])) {
    echo json_encode($links[$_POST['group']][$_POST['id']]);
} else
    echo json_encode(array('error' => 'Not Found'));