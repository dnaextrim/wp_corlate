<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}

$sliders = get_option('wp_corlate_slider');

if (isset($sliders[$_POST['id']]) && $sliders[$_POST['id']]['title'] == $_POST['title']) {

    if (!empty($sliders[$_POST['id']]['image1_path']) && isset($sliders[$_POST['id']]['image1_path']))
        unlink($sliders[$_POST['id']]['image1_path']);

    if (!empty($sliders[$_POST['id']]['image2_path']) && isset($sliders[$_POST['id']]['image2_path']))
        unlink($sliders[$_POST['id']]['image2_path']);

    unset($sliders[$_POST['id']]);
    $sliders = array_values($sliders);
    update_option('wp_corlate_slider', $sliders);
    echo json_encode(array('status' => 'OK', 'id' => array('id' => $_POST['id'], 'title' => $_POST['title'])));
} else
    echo json_encode(array('error' => 'Not Found'));