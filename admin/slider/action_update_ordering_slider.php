<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    header("HTTP/1.0 404 Not Authorized");
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}

$sliders = get_option('wp_corlate_slider');
$slides = $sliders;
$id = $_POST['id'];
$fromPosition = intval($_POST['fromPosition']);
$toPosition = intval($_POST['toPosition']);
if ($fromPosition > $toPosition) {
    $start = $toPosition;
    $end = $fromPosition;
    if (is_array($slides)) {
        $tmp = $slides[$toPosition];
        $slides[$toPosition] = $slides[$fromPosition];
        for ($i = $toPosition + 1; $i < $fromPosition; $i++) {
            $tmp2 = $slides[$i];
            $slides[$i] = $tmp;
            $tmp = $tmp2;
        }
        $slides[$i] = $tmp;
    }
} else {
    $start = $fromPosition;
    $end = $toPosition;
    if (is_array($slides)) {
        $tmp = $slides[$toPosition];;
        $slides[$toPosition] = $slides[$fromPosition];
        for ($i = $toPosition - 1; $i > $fromPosition; $i--) {
            $tmp2 = $slides[$i];
            $slides[$i] = $tmp;
            $tmp = $tmp2;
        }
        $slides[$i] = $tmp;
    }
}

$sliders = $slides;
$ret = update_option('wp_corlate_slider', $sliders);

if ($ret === false) {
    header("HTTP/1.0 404 Failed Update");
    die("Update ordering Failed");
}

echo 'ok';