<?php
require_once('../../../wp-load.php');

$project = $wpdb->get_row($wpdb->prepare("SELECT * FROM `" . $wpdb->prefix . "wp_corlate_portfolio_projects` WHERE id=%d AND published=1", $_POST['project_id']));

if ($project) {
    if (!isset($project->published)) $project->published = true;
    $project->name = strtoupper($project->name);
    if (!empty($project->project_url)) {
        $target = ($project->open_new_tab == true) ? 'target="_blank"' : '';
        $project->project_url = '<i class="fa fa-globe fa-lg"></i> <strong><a href="' . $project->project_url . '" ' . $target . '>' . $project->project_url . '</a></strong>';
    }
    $project->images = '';

    $images = $wpdb->get_results($wpdb->prepare("SELECT * FROM `" . $wpdb->prefix . "wp_corlate_portfolio_images` WHERE project_id=%d AND published=1 ORDER BY ordering ASC", $_POST['project_id']), object);

    foreach ($images as $image) {
        $project->images .= '<div class="col-sm-2 col-xs-12 img-thumbnail animated bounceIn" style="height: 120px; overflow: hidden; margin: 5px;">
			<a class="preview" rel="prettyPhoto[' . $project->name . ']" href="' . $image->image_url . '" title="' . addslashes(ucwords($image->description)) . '" ><strong style="z-index:10;">' . ucwords($image->name) . '</strong><img class="img-responsive hvr-grow" src="' . $image->image_url . '" style="z-index:0;"/></a>
	    </div>';
    }


    echo json_encode($project, JSON_PRETTY_PRINT);
} else
    echo json_encode(array('error' => 'Not Found'));