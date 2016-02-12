<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    header("HTTP/1.0 404 Not Authorized");
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}

$sliders = get_option('wp_corlate_slider');

if (isset($sliders[$_POST['id']]) && $sliders[$_POST['id']]['title'] == $_POST['title']) {
    if (!isset($sliders[$_POST['id']]['show_on'])) $sliders[$_POST['id']]['show_on'] = 'All';
    if (!isset($sliders[$_POST['id']]['published'])) $sliders[$_POST['id']]['published'] = true;

    echo json_encode($sliders[$_POST['id']]);
} else
    echo json_encode(array('error' => 'Not Found'));