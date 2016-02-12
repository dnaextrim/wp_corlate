<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    header("HTTP/1.0 404 Not Authorized");
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}

$footer_links = get_option('wp_corlate_footer_links');

$footer_links[sanitize_text_field(ucwords($_POST['group_name']))] = array();

$ret = update_option('wp_corlate_footer_links', $footer_links);

if ($ret)
    echo json_encode(array('status' => 'OK'));
else
    echo json_encode(array('error' => 'Adding Failed'));