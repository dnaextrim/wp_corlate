<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    header("HTTP/1.0 404 Not Authorized");
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}


$images = $wpdb->get_results($wpdb->prepare("SELECT id, ordering FROM `" . $wpdb->prefix . "wp_corlate_portfolio_images` WHERE project_id = %d ORDER BY ordering ASC", $_GET['project_id']), object);
$id = $_POST['id'];
$fromPosition = $_POST['fromPosition'];
$toPosition = $_POST['toPosition'];
if ($fromPosition > $toPosition) {
    $start = $toPosition;
    $end = $fromPosition;
    if (is_array($images)) {
        $tmp = $images[$toPosition - 1];
        $images[$toPosition - 1] = $images[$fromPosition - 1];
        for ($i = $toPosition; $i < $fromPosition; $i++) {
            $tmp2 = $images[$i];
            $images[$i] = $tmp;
            $tmp = $tmp2;
        }
    }
} else {
    $start = $fromPosition;
    $end = $toPosition;
    if (is_array($images)) {
        $tmp = $images[$toPosition - 1];;
        $images[$toPosition - 1] = $images[$fromPosition - 1];
        for ($i = $toPosition - 2; $i > $fromPosition - 1; $i--) {
            $tmp2 = $images[$i];
            $images[$i] = $tmp;
            $tmp = $tmp2;
        }
        $images[$i] = $tmp;
    }
}

for ($i = ($start - 1); $i < $end; $i++) {
    $ret = $wpdb->update(
        $wpdb->prefix . "wp_corlate_portfolio_images",
        array(
            'ordering' => $i
        ),
        array('id' => $images[$i]->id),
        array('%d'),
        array('%d')
    );

    if ($ret === false) {
        header("HTTP/1.0 404 Failed Update");
        die("Update ordering Failed");
    }
}

echo 'ok';