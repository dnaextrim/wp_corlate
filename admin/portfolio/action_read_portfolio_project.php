<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}

if (isset($_GET['id'])) {
    $projects = $wpdb->get_results($wpdb->prepare("SELECT * FROM `" . $wpdb->prefix . "wp_corlate_portfolio_projects` WHERE portfolio_id=%d", $_GET['id']), object);

    foreach ($projects as $project) {
        $project->actions = "{'id':$project->id, 'name':'$project->name', 'portfolio_id':{$_GET['id']}}";

        $project->images = '<button type="button" class="btn btn-default btn-xs" onclick="return Images({\'id\':' . $project->id . ',\'name\':\'' . $project->name . '\'})" ><i class="fa fa-picture-o"></i> Add Images</button>';

        if (!isset($project->open_new_tab)) $project->open_new_tab = true;
        if (isset($project->open_new_tab)) {
            $checked = ($project->open_new_tab == true) ? 'checked="true"' : '';
            $project->open_new_tab = '<input type="checkbox" id="open_new_tab_project_' . $project->id . '" onclick="return OpenNewTabProject({\'id\':' . $project->id . ',\'name\':\'' . $project->name . '\', \'portfolio_id\':' . $_GET['id'] . '})" value="true" ' . $checked . '/>';
        }

        if (!isset($project->published)) $project->published = true;
        if (isset($project->published)) {
            $checked = ($project->published == true) ? 'checked="true"' : '';
            $project->published = '<input type="checkbox" id="published_project_' . $project->id . '" onclick="return PublishProject({\'id\':' . $project->id . ',\'name\':\'' . $project->name . '\', \'portfolio_id\':' . $_GET['id'] . '})" value="true" ' . $checked . '/>';
        }
    }
    echo json_encode(array('aaData' => $projects));
} else
    echo json_encode(array('aaData' => array()));