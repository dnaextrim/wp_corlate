<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}


$portfolio = $wpdb->get_row($wpdb->prepare("SELECT * FROM `" . $wpdb->prefix . "wp_corlate_portfolio` WHERE id=%d", $_POST['id']));

if ($portfolio) {
    if (!isset($portfolio->published)) $portfolio->published = true;

    echo json_encode($portfolio);
} else
    echo json_encode(array('error' => 'Not Found'));