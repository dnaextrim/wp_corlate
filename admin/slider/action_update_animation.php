<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}

$sliders = get_option('wp_corlate_slider');
if (isset($sliders[$_POST['id_slider_animation']]) && $sliders[$_POST['id_slider_animation']]['title'] == $_POST['title_animation_old']) {
    // var_dump($_POST['published']);
    // Title
    $sliders[$_POST['id_slider_animation']]['title_animation'] = sanitize_text_field($_POST['title_animation']);
    $sliders[$_POST['id_slider_animation']]['title_duration'] = sanitize_text_field($_POST['title_duration']);
    $sliders[$_POST['id_slider_animation']]['title_delay'] = sanitize_text_field($_POST['title_delay']);
    // Sub Title
    $sliders[$_POST['id_slider_animation']]['sub_title_animation'] = sanitize_text_field($_POST['sub_title_animation']);
    $sliders[$_POST['id_slider_animation']]['sub_title_duration'] = sanitize_text_field($_POST['sub_title_duration']);
    $sliders[$_POST['id_slider_animation']]['sub_title_delay'] = sanitize_text_field($_POST['sub_title_delay']);
    // Background
    $sliders[$_POST['id_slider_animation']]['image1_animation'] = sanitize_text_field($_POST['image1_animation']);
    $sliders[$_POST['id_slider_animation']]['image1_duration'] = sanitize_text_field($_POST['image1_duration']);
    $sliders[$_POST['id_slider_animation']]['image1_delay'] = sanitize_text_field($_POST['image1_delay']);
    // Image Slide
    $sliders[$_POST['id_slider_animation']]['image2_animation'] = sanitize_text_field($_POST['image2_animation']);
    $sliders[$_POST['id_slider_animation']]['image2_duration'] = sanitize_text_field($_POST['image2_duration']);
    $sliders[$_POST['id_slider_animation']]['image2_delay'] = sanitize_text_field($_POST['image2_delay']);

    update_option('wp_corlate_slider', $sliders);

    echo json_encode(array('status' => 'OK'));
} else
    echo json_encode(array('error' => 'Not Found'));
