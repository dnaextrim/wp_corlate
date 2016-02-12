<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}


$images = $wpdb->get_row($wpdb->prepare("SELECT * FROM `" . $wpdb->prefix . "wp_corlate_portfolio_images` WHERE id=%d", $_POST['id']));

if ($images) {
    if (!isset($images->published)) $images->published = true;

    echo json_encode($images);
} else
    echo json_encode(array('error' => 'Not Found'));