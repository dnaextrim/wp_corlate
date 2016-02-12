<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}


$project = $wpdb->get_row($wpdb->prepare("SELECT * FROM `" . $wpdb->prefix . "wp_corlate_portfolio_projects` WHERE id=%d", $_POST['id']));

if ($project) {
    if (!isset($project->published)) $project->published = true;

    echo json_encode($project);
} else
    echo json_encode(array('error' => 'Not Found'));