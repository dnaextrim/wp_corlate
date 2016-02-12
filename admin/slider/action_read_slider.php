<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}

$sliders = get_option('wp_corlate_slider');

foreach ($sliders as $key => $value) {
    $sliders[$key]['actions'] = "{'id':$key, 'title':'$value[title]'}";
    $sliders[$key]['id'] = $key;

    $sliders[$key]['title'] = esc_textarea($sliders[$key]['title']);

    if (!isset($sliders[$key]['show_on'])) $sliders[$key]['show_on'] = 'All';
    if (!isset($sliders[$key]['published'])) $sliders[$key]['published'] = true;

    $show_on = array(
        'All' => '',
        'All Post' => '',
        'All Page' => '',
        'All Category' => '',
        'All Tag' => ''
    );

    $sliders[$key]['animation'] = '<button type="button" class="btn btn-default btn-xs" onclick="return Animation({\'id\':' . $key . ',\'title\':\'' . $sliders[$key]['title'] . '\'})"><i class="fa fa-play"></i> Animation</button>';
    $show_on[$sliders[$key]['show_on']] = 'selected';

    $sliders[$key]['show_on'] = '<select id="show_on_' . $key . '" class="form-control" onchange="return ShowOn({\'id\':' . $key . ',\'title\':\'' . $sliders[$key]['title'] . '\'})">';
    reset($show_on);
    foreach ($show_on as $key2 => $value2) {
        $sliders[$key]['show_on'] .= '<option value="' . $key2 . '" ' . $value2 . '>' . $key2 . '</option>';
    }
    $sliders[$key]['show_on'] .= '</select>';

    if (isset($sliders[$key]['published'])) {
        $checked = ($sliders[$key]['published'] == true) ? 'checked="true"' : '';
        $sliders[$key]['published'] = '<input type="checkbox" id="published_' . $key . '" onclick="return Publish({\'id\':' . $key . ',\'title\':\'' . $sliders[$key]['title'] . '\'})" value="true" ' . $checked . '/>';
    }
}
echo json_encode(array('aaData' => $sliders), JSON_PRETTY_PRINT);