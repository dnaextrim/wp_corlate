<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}

$sliders = get_option('wp_corlate_slider');
if (isset($sliders[$_POST['id']]) && $sliders[$_POST['id']]['title'] == $_POST['title']) {

    if ($_POST['published'] === 'true')
        $_POST['published'] = true;

    if ($_POST['published'] === 'false')
        $_POST['published'] = false;

    $sliders[$_POST['id']]['published'] = $_POST['published'];

    update_option('wp_corlate_slider', $sliders);

    echo json_encode(array('status' => 'OK'));
} else
    echo json_encode(array('error' => 'Not Found'));