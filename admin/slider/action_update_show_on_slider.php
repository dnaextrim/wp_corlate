<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}

$sliders = get_option('wp_corlate_slider');
if (isset($sliders[$_POST['id']]) && $sliders[$_POST['id']]['title'] == $_POST['title']) {

    $sliders[$_POST['id']]['show_on'] = sanitize_text_field($_POST['show_on']);

    update_option('wp_corlate_slider', $sliders);

    echo json_encode(array('status' => 'OK'));
} else
    echo json_encode(array('error' => 'Not Found'));