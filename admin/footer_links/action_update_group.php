<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    header("HTTP/1.0 404 Not Authorized");
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}

$footer_links = get_option('wp_corlate_footer_links');
if (is_array($footer_links) && isset($footer_links[$_POST['group_name_old']])) {

    $new_group = array();
    foreach ($footer_links as $key => $links) {
        if ($key != sanitize_text_field($_POST['group_name_old']))
            $new_group[$key] = $links;
        else
            $new_group[sanitize_text_field(ucfirst($_POST['group_name']))] = $links;
    }

    update_option('wp_corlate_footer_links', $new_group);

    echo json_encode(array('status' => 'OK'));
} else
    echo json_encode(array('error' => 'Not Found'));
