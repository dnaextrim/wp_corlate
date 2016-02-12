<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}


if (isset($_GET['id'])) {
    $images = $wpdb->get_results($wpdb->prepare("SELECT * FROM `" . $wpdb->prefix . "wp_corlate_portfolio_images` WHERE project_id=%d ORDER BY ordering ASC", $_GET['id']), object);

    $order = 1;
    foreach ($images as $image) {
        $image->actions = "{'id':$image->id, 'name':'$image->name', 'project_id':{$_GET['id']}}";

        $image->image = '<img src="' . $image->image_url . '" width="100%" />';

        if (!isset($image->published)) $image->published = true;
        if (isset($image->published)) {
            $checked = ($image->published == true) ? 'checked="true"' : '';
            $image->published = '<input type="checkbox" id="published_images_' . $image->id . '" onclick="return PublishImages({\'id\':' . $image->id . ',\'name\':\'' . $image->name . '\', \'portfolio_id\':' . $_GET['id'] . '})" value="true" ' . $checked . '/>';
        }

        $ret = $wpdb->update(
            $wpdb->prefix . "wp_corlate_portfolio_images",
            array('ordering' => $order),
            array('id' => $image->id),
            array('%d'),
            array('%d')
        );

        $image->ordering = $order;
        $order++;
    }

    echo json_encode(array('aaData' => $images));
} else
    echo json_encode(array('aaData' => array()));