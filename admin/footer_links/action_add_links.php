<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    header("HTTP/1.0 404 Not Authorized");
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}

$links = get_option('wp_corlate_footer_links');
if (!empty($links)) {
    $links[$_POST['group']][] = array(
        'title' => sanitize_text_field(ucwords($_POST['title_links'])),
        'link' => esc_url($_POST['link_links']),
    );
    // print_r($links);
    update_option('wp_corlate_footer_links', $links);
}

echo json_encode(array('status' => 'OK'));