<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}


include_once ABSPATH . 'wp-admin/includes/media.php';
include_once ABSPATH . 'wp-admin/includes/file.php';
include_once ABSPATH . 'wp-admin/includes/image.php';

$project = $wpdb->get_row($wpdb->prepare("SELECT * FROM `" . $wpdb->prefix . "wp_corlate_portfolio_projects` WHERE id=%d", $_POST['id_project']));

if ($project) {
    if (!empty($project->image_path) && file_exists($project->image_path))
        unlink($project->image_path);
}

$image_url = '';
$image_path = '';
$image_type = '';
if (!empty($_FILES["image_url_project"]["tmp_name"])) {
    $urls = wp_handle_upload($_FILES["image_url_project"], array('test_form' => FALSE));
    $image_url = $urls["url"];
    $image_path = $urls['file'];
    $image_type = $urls['type'];
}

$ret = $wpdb->update(
    $wpdb->prefix . "wp_corlate_portfolio_projects",
    array(
        'name' => sanitize_text_field(ucfirst($_POST['name_project'])),
        'description' => wp_kses($_POST['description_project'], null),
        'image_url' => $image_url,
        'image_path' => $image_path,
        'image_type' => $image_type,
        'project_url' => $_POST['project_url_project'],
        'open_new_tab' => ($_POST['open_new_tab_project'] == 'true') ? 1 : 0,
        'category' => sanitize_text_field($_POST['category_project']),
        'published' => ($_POST['published_project'] == 'true') ? 1 : 0
    ),
    array('id' => $_POST['id_project']),
    array(
        '%s',
        '%s',
        '%s',
        '%s',
        '%s',
        '%s',
        '%d',
        '%s',
        '%d'
    ),
    array('%d')
);

if ($ret !== false)
    echo json_encode(array('status' => 'OK'));
else
    echo json_encode(array('error' => 'Update failed!!!'));