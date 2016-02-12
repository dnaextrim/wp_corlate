<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}

include_once ABSPATH . 'wp-admin/includes/media.php';
include_once ABSPATH . 'wp-admin/includes/file.php';
include_once ABSPATH . 'wp-admin/includes/image.php';

$image_url = '';
$image_path = '';
$image_type = '';
if (!empty($_FILES["image_url_images"]["tmp_name"])) {
    $urls = wp_handle_upload($_FILES["image_url_images"], array('test_form' => FALSE));
    $image_url = $urls["url"];
    $image_path = $urls['file'];
    $image_type = $urls['type'];
}

$image = $wpdb->get_row($wpdb->prepare("SELECT * FROM `" . $wpdb->prefix . "wp_corlate_portfolio_images` WHERE project_id=%d ORDER BY ordering DESC LIMIT 1", $_POST['project_id_images']));
$ordering = $image->ordering + 1;


$ret = $wpdb->insert(
    $wpdb->prefix . "wp_corlate_portfolio_images",
    array(
        'project_id' => sanitize_text_field($_POST['project_id_images']),
        'name' => sanitize_text_field(ucfirst($_POST['name_images'])),
        'description' => sanitize_text_field(ucfirst($_POST['description_images'])),
        'image_url' => $image_url,
        'image_path' => $image_path,
        'image_type' => $image_type,
        'published' => ($_POST['published_images'] == 'true') ? 1 : 0,
        'ordering' => $ordering
    ),
    array(
        '%d',
        '%s',
        '%s',
        '%s',
        '%s',
        '%s',
        '%d',
        '%d'
    )
);

if ($ret !== false)
    echo json_encode(array('status' => 'OK'));
else
    echo json_encode(array('error' => 'Add new failed!!!'));