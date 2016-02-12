<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}


$images = $wpdb->get_row($wpdb->prepare("SELECT * FROM `" . $wpdb->prefix . "wp_corlate_portfolio_images` WHERE id=%d", $_POST['id']));

if ($images) {
    if (!empty($images->image_path) && file_exists($images->image_path))
        unlink($images->image_path);
}

$ret = $wpdb->delete($wpdb->prefix . "wp_corlate_portfolio_images", array('id' => $_POST['id']), array('%d'));

if ($ret !== false)
    echo json_encode(array('status' => 'OK'));
else
    echo json_encode(array('error' => 'Delete failed!!!'));
