<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    header("HTTP/1.0 404 Not Authorized");
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}

$footer_links = get_option('wp_corlate_footer_links');

$_GET['group'] = (isset($_GET['group'])) ? urldecode($_GET['group']) : null;

if (is_array($footer_links) && isset($footer_links[$_GET['group']])) {
    $links = $footer_links[$_GET['group']];

    foreach ($links as $idx => $link) {
        $links[$idx]['ordering'] = intval($idx);
        $links[$idx]['actions'] = "{'id':$idx, 'title':'$link[title]', 'group':'{$_GET['group']}'}";
    }
    echo json_encode(array('aaData' => $links));
} else {
    echo json_encode(array('aaData' => array()));
}