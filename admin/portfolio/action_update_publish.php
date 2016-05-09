<?php
require_once( '../../../../../wp-load.php' );

$sliders = get_option('corlate-slider');
if (isset($sliders[$_POST['id']]) && $sliders[$_POST['id']]['title'] == $_POST['title']) {

    if ($_POST['published'] === 'true') 
        $_POST['published'] = true;

    if ($_POST['published'] === 'false') 
        $_POST['published'] = false;

    $sliders[$_POST['id']]['published'] = $_POST['published'];

    update_option('corlate-slider', $sliders);

    echo json_encode(array('status'=>'OK'));
} else 
    echo json_encode(array('error'=>'Not Found'));