<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}


$portfolios = $wpdb->get_results("SELECT * FROM `" . $wpdb->prefix . "wp_corlate_portfolio`", object);

foreach ($portfolios as $portfolio) {
    $portfolio->actions = "{'id':$portfolio->id, 'name':'$portfolio->name'}";

    $portfolio->project = '<button type="button" class="btn btn-default btn-xs" onclick="return Project({\'id\':' . $portfolio->id . ',\'name\':\'' . $portfolio->name . '\'})"><i class="fa fa-folder-open"></i> Add Project</button>';

    $portfolio->shortcode = "<small><code>[wp_corlate_portfolio id=$portfolio->id]</code></small>";

    if (!isset($portfolio->published)) $portfolio->published = true;

    if (isset($portfolio->published)) {
        $checked = ($portfolio->published == true) ? 'checked="true"' : '';
        $portfolio->published = '<input type="checkbox" id="published_' . $portfolio->id . '" onclick="return Publish({\'id\':' . $portfolio->id . ',\'name\':\'' . $portfolio->name . '\'})" value="true" ' . $checked . '/>';
    }
}
echo json_encode(array('aaData' => $portfolios));