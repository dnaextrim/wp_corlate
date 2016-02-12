<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}

include_once ABSPATH . 'wp-admin/includes/media.php';
include_once ABSPATH . 'wp-admin/includes/file.php';
include_once ABSPATH . 'wp-admin/includes/image.php';

$image1 = '';
$image2_path = '';
if (!empty($_FILES["image1"]["tmp_name"])) {
    $urls = wp_handle_upload($_FILES["image1"], array('test_form' => FALSE));
    $image1 = $urls["url"];
    $image1_path = $urls['file'];
}

$image2 = '';
$image2_path = '';
if (!empty($_FILES["image2"]["tmp_name"])) {
    $urls = wp_handle_upload($_FILES["image2"], array('test_form' => FALSE));
    $image2 = $urls["url"];
    $image2_path = $urls['file'];
}

$sliders = get_option('wp_corlate_slider');
if (isset($sliders[$_POST['id_slider']]) && $sliders[$_POST['id_slider']]['title'] == $_POST['title_old']) {
    if (isset($sliders[$_POST['id_slider']]['image1_path']) && !empty($sliders[$_POST['id_slider']]['image1_path'])) {
        if (file_exists($sliders[$_POST['id_slider']]['image1_path']))
            unlink($sliders[$_POST['id_slider']]['image1_path']);
    }

    if (isset($sliders[$_POST['id_slider']]['image2_path']) && !empty($sliders[$_POST['id_slider']]['image2_path'])) {
        if (file_exists($sliders[$_POST['id_slider']]['image2_path']))
            unlink($sliders[$_POST['id_slider']]['image2_path']);
    }

    $_POST['title_animation'] = (!isset($sliders[$_POST['id_slider']]['title_animation']) || empty($sliders[$_POST['id_slider']]['title_animation'])) ? 'fadeInUp' : $sliders[$_POST['id_slider']]['title_animation'];
    $_POST['title_duration'] = (!isset($sliders[$_POST['id_slider']]['title_duration']) || empty($sliders[$_POST['id_slider']]['title_duration'])) ? 300 : $sliders[$_POST['id_slider']]['title_duration'];
    $_POST['title_delay'] = (!isset($sliders[$_POST['id_slider']]['title_delay']) || empty($sliders[$_POST['id_slider']]['title_delay'])) ? 300 : $sliders[$_POST['id_slider']]['title_delay'];

    $_POST['sub_title_animation'] = (!isset($sliders[$_POST['id_slider']]['sub_title_animation']) || empty($sliders[$_POST['id_slider']]['sub_title_animation'])) ? 'fadeInUp' : $sliders[$_POST['id_slider']]['sub_title_animation'];
    $_POST['sub_title_duration'] = (!isset($sliders[$_POST['id_slider']]['sub_title_duration']) || empty($sliders[$_POST['id_slider']]['sub_title_duration'])) ? 300 : $sliders[$_POST['id_slider']]['sub_title_duration'];
    $_POST['sub_title_delay'] = (!isset($sliders[$_POST['id_slider']]['sub_title_delay']) || empty($sliders[$_POST['id_slider']]['sub_title_delay'])) ? 600 : $sliders[$_POST['id_slider']]['sub_title_delay'];

    $_POST['read_more_animation'] = (!isset($sliders[$_POST['id_slider']]['read_more_animation']) || empty($sliders[$_POST['id_slider']]['read_more_animation'])) ? 'fadeInUp' : $sliders[$_POST['id_slider']]['read_more_animation'];
    $_POST['read_more_duration'] = (!isset($sliders[$_POST['id_slider']]['read_more_duration']) || empty($sliders[$_POST['id_slider']]['read_more_duration'])) ? 300 : $sliders[$_POST['id_slider']]['read_more_duration'];
    $_POST['read_more_delay'] = (!isset($sliders[$_POST['id_slider']]['read_more_delay']) || empty($sliders[$_POST['id_slider']]['read_more_delay'])) ? 900 : $sliders[$_POST['id_slider']]['read_more_delay'];

    $_POST['image1_animation'] = (!isset($sliders[$_POST['id_slider']]['image1_animation']) || empty($sliders[$_POST['id_slider']]['image1_animation'])) ? 'fadeInUp' : $sliders[$_POST['id_slider']]['image1_animation'];
    $_POST['image1_duration'] = (!isset($sliders[$_POST['id_slider']]['image1_duration']) || empty($sliders[$_POST['id_slider']]['image1_duration'])) ? 300 : $sliders[$_POST['id_slider']]['image1_duration'];
    $_POST['image1_delay'] = (!isset($sliders[$_POST['id_slider']]['image1_delay']) || empty($sliders[$_POST['id_slider']]['image1_delay'])) ? 0 : $sliders[$_POST['id_slider']]['image1_delay'];

    $_POST['image2_animation'] = (!isset($sliders[$_POST['id_slider']]['image2_animation']) || empty($sliders[$_POST['id_slider']]['image2_animation'])) ? 'fadeInUp' : $sliders[$_POST['id_slider']]['image2_animation'];
    $_POST['image2_duration'] = (!isset($sliders[$_POST['id_slider']]['image2_duration']) || empty($sliders[$_POST['id_slider']]['image2_duration'])) ? 300 : $sliders[$_POST['id_slider']]['image2_duration'];
    $_POST['image2_delay'] = (!isset($sliders[$_POST['id_slider']]['image2_delay']) || empty($sliders[$_POST['id_slider']]['image2_delay'])) ? 1200 : $sliders[$_POST['id_slider']]['image2_delay'];


    if (isset($_POST['published']) && $_POST['published'] === 'true')
        $_POST['published'] = true;

    if (isset($_POST['published']) && $_POST['published'] === 'false')
        $_POST['published'] = false;
    // var_dump($_POST['published']);
    $sliders[$_POST['id_slider']] = array(
        // Title
        'title' => sanitize_text_field(ucfirst($_POST['title'])),
        'title_animation' => sanitize_text_field($_POST['title_animation']),
        'title_duration' => sanitize_text_field($_POST['title_duration']),
        'title_delay' => sanitize_text_field($_POST['title_delay']),
        // Sub Title
        'sub_title' => sanitize_text_field(ucfirst($_POST['sub_title'])),
        'sub_title_animation' => sanitize_text_field($_POST['sub_title_animation']),
        'sub_title_duration' => sanitize_text_field($_POST['sub_title_duration']),
        'sub_title_delay' => sanitize_text_field($_POST['sub_title_delay']),
        // Read More
        'read_more' => sanitize_text_field($_POST['read_more']),
        'read_more_animation' => sanitize_text_field($_POST['read_more_animation']),
        'read_more_duration' => sanitize_text_field($_POST['read_more_duration']),
        'read_more_delay' => sanitize_text_field($_POST['read_more_delay']),
        // Background
        'image1' => (empty($image1)) ? $sliders[$_POST['id_slider']]['image1'] : $image1,
        'image1_path' => (empty($image1_path)) ? $sliders[$_POST['id_slider']]['image1_path'] : $image1_path,
        'image1_animation' => sanitize_text_field($_POST['image1_animation']),
        'image1_duration' => sanitize_text_field($_POST['image1_duration']),
        'image1_delay' => sanitize_text_field($_POST['image1_delay']),
        // Slider Image
        'image2' => (empty($image2)) ? $sliders[$_POST['id_slider']]['image2'] : $image2,
        'image2_path' => (empty($image2_path)) ? $sliders[$_POST['id_slider']]['image2_path'] : $image2_path,
        'image2_animation' => sanitize_text_field($_POST['image2_animation']),
        'image2_duration' => sanitize_text_field($_POST['image2_duration']),
        'image2_delay' => sanitize_text_field($_POST['image2_delay']),

        'show_on' => (isset($_POST['show_on'])) ? sanitize_text_field($_POST['show_on']) : 'All',
        'published' => (isset($_POST['published'])) ? $_POST['published'] : false
    );

    update_option('wp_corlate_slider', $sliders);

    echo json_encode(array('status' => 'OK'));
} else
    echo json_encode(array('error' => 'Not Found'));
