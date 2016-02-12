<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}

include_once ABSPATH . 'wp-admin/includes/media.php';

$sliders = get_option('wp_corlate_slider');
if (isset($sliders[$_POST['id']]) && $sliders[$_POST['id']]['title'] == $_POST['title']) {
    if (isset($sliders[$_POST['id']]['image' . $_POST['image'] . '_path'])) {
        if (!empty($sliders[$_POST['id']]['image' . $_POST['image'] . '_path']) && file_exists($sliders[$_POST['id']]['image' . $_POST['image'] . '_path']))
            unlink($sliders[$_POST['id']]['image' . $_POST['image'] . '_path']);
    }

    $sliders[$_POST['id']]['image' . $_POST['image']] = '';
    $sliders[$_POST['id']]['image' . $_POST['image'] . '_path'] = '';

    update_option('wp_corlate_slider', $sliders);

    echo json_encode(array('status' => 'OK'));
} else
    echo json_encode(array('error' => 'Not Found'));
