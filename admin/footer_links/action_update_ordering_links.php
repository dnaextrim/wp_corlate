<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    header("HTTP/1.0 404 Not Authorized");
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}

$footer_links = get_option('wp_corlate_footer_links');
$links = $footer_links[$_GET['group']];
$id = $_POST['id'];
$fromPosition = intval($_POST['fromPosition']);
$toPosition = intval($_POST['toPosition']);

if ($fromPosition > $toPosition) {
    $start = $toPosition;
    $end = $fromPosition;

    if (is_array($links)) {
        $tmp = $links[$toPosition];
        $links[$toPosition] = $links[$fromPosition];

        for ($i = $toPosition + 1; $i < $fromPosition; $i++) {
            $tmp2 = $links[$i];
            $links[$i] = $tmp;
            $tmp = $tmp2;
        }

        $links[$i] = $tmp;
    }

} else {
    $start = $fromPosition;
    $end = $toPosition;

    if (is_array($links)) {
        $tmp = $links[$toPosition];;
        $links[$toPosition] = $links[$fromPosition];

        for ($i = $toPosition - 1; $i > $fromPosition; $i--) {
            $tmp2 = $links[$i];
            $links[$i] = $tmp;
            $tmp = $tmp2;
        }

        $links[$i] = $tmp;
    }

}

$footer_links[$_GET['group']] = $links;
$ret = update_option('wp_corlate_footer_links', $footer_links);

if ($ret === false) {
    header("HTTP/1.0 404 Failed Update");
    die("Update ordering Failed");
}

echo 'ok';