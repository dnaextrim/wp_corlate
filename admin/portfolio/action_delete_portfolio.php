<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}


$ret = $wpdb->delete($wpdb->prefix . "wp_corlate_portfolio", array('id' => $_POST['id']), array('%d'));

if ($ret !== false)
    echo json_encode(array('status' => 'OK'));
else
    echo json_encode(array('error' => 'Delete failed!!!'));
