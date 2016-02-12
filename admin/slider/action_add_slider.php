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

if (isset($_POST['published']) && $_POST['published'] === 'true')
    $_POST['published'] = true;

if (isset($_POST['published']) && $_POST['published'] === 'false')
    $_POST['published'] = false;

$sliders = get_option('wp_corlate_slider');
if (!empty($sliders)) {
    $sliders[] = array(
        // Title
        'title' => sanitize_text_field(ucfirst($_POST['title'])),
        'title_animation' => "fadeInUp",
        'title_duration' => 300,
        'title_delay' => 300,
        // Sub Title
        'sub_title' => sanitize_text_field(ucfirst($_POST['sub_title'])),
        'sub_title_animation' => "fadeInUp",
        'sub_title_duration' => 300,
        'sub_title_delay' => 600,
        // Read More
        'read_more' => sanitize_text_field(ucfirst($_POST['read_more'])),
        'read_more_animation' => "fadeInUp",
        'read_more_duration' => 300,
        'read_more_delay' => 900,
        // Background
        'image1' => $image1,
        'image1_path' => $image1_path,
        'image1_animation' => "fadeIn",
        'image1_duration' => 300,
        'image1_delay' => 0,
        // Image Slider
        'image2' => $image2,
        'image2_path' => $image2_path,
        'image2_animation' => "fadeInUp",
        'image2_duration' => 600,
        'image2_delay' => 1200,

        'show_on' => (isset($_POST['show_on'])) ? sanitize_text_field($_POST['show_on']) : '',
        'published' => (isset($_POST['published'])) ? $_POST['published'] : false
    );

    update_option('wp_corlate_slider', $sliders);
} else {
    $sliders = array(
        array(
            // Title
            'title' => sanitize_text_field(ucfirst($_POST['title'])),
            'title_animation' => "fadeInUp",
            'title_duration' => 300,
            'title_delay' => 300,
            //Sub Title
            'sub_title' => sanitize_text_field(ucfirst($_POST['sub_title'])),
            'sub_title_animation' => "fadeInUp",
            'sub_title_duration' => 300,
            'sub_title_delay' => 600,
            // Read More
            'read_more' => sanitize_text_field(ucfirst($_POST['read_more'])),
            'read_more_animation' => "fadeInUp",
            'read_more_duration' => 300,
            'read_more_delay' => 900,
            // Background
            'image1' => $image1,
            'image1_path' => $image1_path,
            'image1_animation' => "fadeIn",
            'image1_duration' => 300,
            'image1_delay' => 0,
            // Image Slider
            'image2' => $image2,
            'image2_path' => $image2_path,
            'image2_animation' => "fadeInUp",
            'image2_duration' => 600,
            'image2_delay' => 1200,

            'show_on' => (isset($_POST['show_on'])) ? sanitize_text_field($_POST['show_on']) : 'All',
            'published' => (isset($_POST['published'])) ? $_POST['published'] : false
        )
    );

    add_option('wp_corlate_slider', $sliders);
}

echo json_encode(array('status' => 'OK'));