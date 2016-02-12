<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}

$sliders = get_option('wp_corlate_slider');

if (isset($sliders[$_POST['id']]) && $sliders[$_POST['id']]['title'] == $_POST['title']) {
    $sliders[$_POST['id']]['title_animation'] = (!isset($sliders[$_POST['id']]['title_animation'])) ? 'fadeInUp' : $sliders[$_POST['id']]['title_animation'];
    $sliders[$_POST['id']]['title_duration'] = (!isset($sliders[$_POST['id']]['title_duration'])) ? 300 : $sliders[$_POST['id']]['title_duration'];
    $sliders[$_POST['id']]['title_delay'] = (!isset($sliders[$_POST['id']]['title_delay'])) ? 300 : $sliders[$_POST['id']]['title_delay'];

    $sliders[$_POST['id']]['sub_title_animation'] = (!isset($sliders[$_POST['id']]['sub_title_animation'])) ? 'fadeInUp' : $sliders[$_POST['id']]['sub_title_animation'];
    $sliders[$_POST['id']]['sub_title_duration'] = (!isset($sliders[$_POST['id']]['sub_title_duration'])) ? 300 : $sliders[$_POST['id']]['sub_title_duration'];
    $sliders[$_POST['id']]['sub_title_delay'] = (!isset($sliders[$_POST['id']]['sub_title_delay'])) ? 600 : $sliders[$_POST['id']]['sub_title_delay'];

    $sliders[$_POST['id']]['read_more_animation'] = (!isset($sliders[$_POST['id']]['read_more_animation'])) ? 'fadeInUp' : $sliders[$_POST['id']]['read_more_animation'];
    $sliders[$_POST['id']]['read_more_duration'] = (!isset($sliders[$_POST['id']]['read_more_duration'])) ? 300 : $sliders[$_POST['id']]['read_more_duration'];
    $sliders[$_POST['id']]['read_more_delay'] = (!isset($sliders[$_POST['id']]['read_more_delay'])) ? 900 : $sliders[$_POST['id']]['read_more_delay'];

    $sliders[$_POST['id']]['image1_animation'] = (!isset($sliders[$_POST['id']]['image1_animation'])) ? 'fadeInUp' : $sliders[$_POST['id']]['image1_animation'];
    $sliders[$_POST['id']]['image1_duration'] = (!isset($sliders[$_POST['id']]['image1_duration'])) ? 300 : $sliders[$_POST['id']]['image1_duration'];
    $sliders[$_POST['id']]['image1_delay'] = (!isset($sliders[$_POST['id']]['image1_delay'])) ? 0 : $sliders[$_POST['id']]['image1_delay'];

    $sliders[$_POST['id']]['image2_animation'] = (!isset($sliders[$_POST['id']]['image2_animation'])) ? 'fadeInUp' : $sliders[$_POST['id']]['image2_animation'];
    $sliders[$_POST['id']]['image2_duration'] = (!isset($sliders[$_POST['id']]['image2_duration'])) ? 300 : $sliders[$_POST['id']]['image2_duration'];
    $sliders[$_POST['id']]['image2_delay'] = (!isset($sliders[$_POST['id']]['image2_delay'])) ? 1200 : $sliders[$_POST['id']]['image2_delay'];

    echo json_encode($sliders[$_POST['id']]);
} else
    echo json_encode(array('error' => 'Not Found'));