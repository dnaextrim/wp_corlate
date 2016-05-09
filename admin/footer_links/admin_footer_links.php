<?php
/**
 * Form
 */
function theme_settings_footer_links()
{
    /*update_option('wp_corlate_footer_links', array(
        'MY PORTFOLIO' => array(
            array(
                'title' => 'Kecik Framework',
                'link'  => 'http://kecik-framework.com'
            ),
            array(
                'title' => 'donywahyuisp.com',
                'link'  => 'http://donywahyuisp.com'
            ),
            array(
                'title' => 'PHP ZKLib',
                'link'  => 'https://github.com/dnaextrim/php_zklib'
            ),
            array(
                'title' => 'Python ZKLib',
                'link'  => 'https://github.com/dnaextrim/python_zklib'
            ),
        ),
        'MY SOCIAL' => array(
            array(
                'title' => 'Facebook',
                'link'  => 'https://facebook.com/dnaextrim'
            ),
            array(
                'title' => 'Twitter',
                'link'  => 'https://twitter.com/dnaextrim'
            ),
            array(
                'title' => 'Google Plus',
                'link'  => 'https://plus.google.com/+DonyWahyuIsprananda'
            ),
            array(
                'title' => 'Instagram',
                'link'  => 'https://instagram.com/dnaextrim'
            ),
            array(
                'title' => 'Pixoto',
                'link'  => 'https://pixoto.com/dnaextrim'
            ),
        ),
        'MY COMMUNITY' => array(
            array(
                'title' => 'PHP Palembang',
                'link'  => 'https://www.facebook.com/groups/1056016617797983'
            ),
            array(
                'title' => 'PHP Indonesia',
                'link'  => 'https://www.facebook.com/groups/35688476100'
            ),
            array(
                'title' => 'Kecik Framework',
                'link'  => 'https://www.facebook.com/groups/35688476100'
            ),
        )
    ));*/
    ?>

    <div class="wrap">
        <div class="alert alert-success" role="alert">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#english" aria-controls="english" role="tab"
                                                          data-toggle="tab">English</a></li>
                <li role="presentation"><a href="#indonesian" aria-controls="indonesian" role="tab" data-toggle="tab">Indonesian</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="english">
                    <br/>
                    <div class="row">
                        <div class="col-sm-2 text-center">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
                                    ">
                                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif"
                                       border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/id_ID/i/scr/pixel.gif"
                                     width="1" height="1">
                            </form>
                        </div>
                        <div class="col-sm-10">
                            <p>
                                <small>
                                    <strong>WP Corlate</strong> Themes is a <strong>Free</strong> Wordpress themes<br/>
                                    <strong>Corlate</strong> is a Free HTML template owned by <strong><a
                                            href="https://shapebootstrap.net/item/1524962-corlate-free-responsive-business-html-template"
                                            target="_blank">shapebootstrap</a>.</strong><br/>
                                    <strong>WP Corlate</strong> is convertion result of <strong>Corlate</strong> HTML
                                    Template with some addtional fiture at Admin section and modification at portfolio
                                    section owned by <strong>Dony Wahyu Isp</strong> (<strong><a
                                            href="http://donywahyuisp.com"
                                            target="_blank">www.donywahyuisp.com</a></strong>)<br />
                                    <strong>Sponsored by <a href="http://www.ferenz.com.br" target="_blank">www.ferenz.com.br</a></strong>
                                </small>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <hr style="margin: 2px;"/>
                            <p>
                                <small>
                                    Your donation so I need to be able to continue to develop these templates, for those
                                    of you who already donate I will send to you this template in which there is no
                                    message donations like this, and you'll always send me updates on this template,
                                    and each time you donate you have the right to request one feature to the next
                                    updates, and
                                    The features of your request will be my immediate process to be realized.
                                </small>
                                <br/>
                                <strong>Once you make a donation please confirm by sending a confirmation email with the
                                    title "Confirm Donation WP Corlate" to <a href="mailto:dna.extrim@gmail.com">dna.extrim@gmail.com</a></i>
                                </strong>
                                <br/>
                                Thank you :-D
                            </p>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="indonesian">
                    <br/>
                    <div class="row">
                        <div class="col-sm-2 text-center">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIHXwYJKoZIhvcNAQcEoIIHUDCCB0wCAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYAkw9a4K4WdxghjqDZ1pvZ8o22c1clTaobOKpf74CCLXbKbrFQhanRlEZ4VO7F1yK0qK0BapUVQfSeuZALC4LQ9KZNqj42CazqpllU0syn1PpetseSOfl+fWw1cWxdL0N2VES6ZZmU4/41H71xFCAifmaRWTHNfKTjHXAB9BdEJGjELMAkGBSsOAwIaBQAwgdwGCSqGSIb3DQEHATAUBggqhkiG9w0DBwQIoOw8dhvvI7uAgbjCib5j4OThgy+3Pnw4xFVfDxMaliG4HIYOUXUvaxmrAIVC7kKyVDHFVGrQhWdNzWboHkkhjS1Can6wG19cwRwqZheeBNdHGkLkw2iPy/66+FPccIMeAkxu/Yq6ncaaELXHhpPFWDtnHSIK6KbviSgMxETXqFvIsBkJNjPlIJJXL9v5EkJ0Dwqf18ctSLVqYKJSeDJ50wSbLR7fdM7SafuTt/atUd+1wYCV/73+VWQtQiqOJFuBXoP2oIIDhzCCA4MwggLsoAMCAQICAQAwDQYJKoZIhvcNAQEFBQAwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMB4XDTA0MDIxMzEwMTMxNVoXDTM1MDIxMzEwMTMxNVowgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDBR07d/ETMS1ycjtkpkvjXZe9k+6CieLuLsPumsJ7QC1odNz3sJiCbs2wC0nLE0uLGaEtXynIgRqIddYCHx88pb5HTXv4SZeuv0Rqq4+axW9PLAAATU8w04qqjaSXgbGLP3NmohqM6bV9kZZwZLR/klDaQGo1u9uDb9lr4Yn+rBQIDAQABo4HuMIHrMB0GA1UdDgQWBBSWn3y7xm8XvVk/UtcKG+wQ1mSUazCBuwYDVR0jBIGzMIGwgBSWn3y7xm8XvVk/UtcKG+wQ1mSUa6GBlKSBkTCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb22CAQAwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQUFAAOBgQCBXzpWmoBa5e9fo6ujionW1hUhPkOBakTr3YCDjbYfvJEiv/2P+IobhOGJr85+XHhN0v4gUkEDI8r2/rNk1m0GA8HKddvTjyGw/XqXa+LSTlDYkqI8OwR8GEYj4efEtcRpRYBxV8KxAW93YDWzFGvruKnnLbDAF6VR5w/cCMn5hzGCAZowggGWAgEBMIGUMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbQIBADAJBgUrDgMCGgUAoF0wGAYJKoZIhvcNAQkDMQsGCSqGSIb3DQEHATAcBgkqhkiG9w0BCQUxDxcNMTYwMTMxMDY1MzE4WjAjBgkqhkiG9w0BCQQxFgQUzNZFUDSENk6EjapR1n2FMSzHTP8wDQYJKoZIhvcNAQEBBQAEgYBP+Q5JhvkWuHxXQcmmpdCDuRNx+1fBhnqwzqREWcuFwp/5sCBb1L8WX03oa8Ku6sVYnJhlTjid7x2oHIO1y2+u46h5p/7jazrFn+9pf7e3DbKJ13fYntr4FRzUvnDAJlJQgcgsEvw9YcUUMVrvQZuECXr/h+JmqC/9q8FVO/w3zQ==-----END PKCS7-----
                                    ">
                                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif"
                                       border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/id_ID/i/scr/pixel.gif"
                                     width="1" height="1">
                            </form>
                        </div>
                        <div class="col-sm-10">
                            <p>
                                <small>
                                    <strong>WP Corlate</strong> Themes merupakan themes Wordpress
                                    <strong>Gratis.</strong><br/>
                                    <strong>Corlate</strong> merupakan template HTML Gratis milik <strong><a
                                            href="https://shapebootstrap.net/item/1524962-corlate-free-responsive-business-html-template"
                                            target="_blank">shapebootstrap</a>.</strong><br/>
                                    <strong>WP Corlate</strong> merupakan hasil konversi dari <strong>Corlate</strong>
                                    HTML Template dengan penambahan beberapa fitur pada bagian Admin dan modifikasi pada
                                    bagian portfolio milik <strong>Dony Wahyu Isp</strong> (<strong><a
                                            href="http://donywahyuisp.com"
                                            target="_blank">www.donywahyuisp.com</a></strong>)<br />
                                    <strong>Sponsored by <a href="http://www.ferenz.com.br" target="_blank">www.ferenz.com.br</a></strong>
                                </small>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <hr style="margin: 2px;"/>
                            <p>
                                <small>
                                    Donasi anda sangat saya perlukan untuk saya agar bisa tetap mengembangkan template
                                    ini, bagi anda
                                    yang telah berdonasi saya akan kirimkan kepada anda Template ini yang didalamnya
                                    tidak terdapat
                                    pesan donasi seperti ini, dan saya akan selalu mengirimkan update dari template ini
                                    kepada anda,
                                    dan setiap anda berdonasi anda berhak untuk meminta 1 fitur untuk update-update
                                    berikutnya, dan
                                    fitur permintaan anda tersebut akan segera saya proses untuk segera di realisasikan.
                                </small>
                                <br/>
                                <strong><i>Setelah anda melakukan donasi silakan anda melakukan konfirmasi dengan
                                        mengirimkan email konfirmasi dengan judul "Konfirmasi Donasi WP Corlate" ke <a
                                            href="mailto:dna.extrim@gmail.com">dna.extrim@gmail.com</a></i></strong>
                                <br/>
                                Terima Kasih :-D
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1>Corlate Footer Links Settings</h1>
        <div class="row">
            <div class="col-md-4">
                <select name="group" id="group" class="form-control">
                    <?php
                    $footer_links = get_option('wp_corlate_footer_links');
                    if (is_array($footer_links) && count($footer_links) > 0):
                        $groups = array_keys($footer_links);
                        foreach ($groups as $group):
                            ?>
                            <option value="<?php echo $group ?>"><?php echo $group ?></option>
                            <?php
                        endforeach;
                    endif;
                    ?>
                </select>
            </div>
            <div class="col-md-4">
                <button id="btn_add_group" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add</button>
                <button id="btn_edit_group" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</button>
                <button id="btn_delete_group" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete
                </button>
            </div>
        </div>
        <h3>
            Footer Links List
            <button id="btn_add_new" class="btn btn-success pull-right" style="margin-right: 6px;"><i
                    class="fa fa-plus"></i> Add New
            </button>
        </h3>
        <hr/>
        <div class="table-responsive">
            <table id="list_footer_links" class="table table-striped table-bordered table-hover" cellspacing="0"
                   width="100%">
                <thead>
                <tr>
                    <th width="80px">Action</th>
                    <th>Order</th>
                    <th>Title</th>
                    <th>Link</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                <tr>
                    <th width="80px">Action</th>
                    <th>Order</th>
                    <th>Title</th>
                    <th>Link</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div id="form_group_footer_links" class="modal fade" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Form Group Footer Links</h3>
                </div>

                <form id="form-group-footer-links" method="post"
                      action="<?php echo get_template_directory_uri() ?>/admin/footer_links/action_add_group.php">
                    <div class="modal-body">
                        <div class="wrap">
                            <?php
                            // settings_fields("section-footer_links-form");
                            ?>
                            <table class="form-table">
                                <tr>
                                    <th><label for="group_name">Group Name</label></th>
                                    <td><input type="text" name="group_name" id="group_name" value=""
                                               class="regular-text" required/></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" id="group_name_old" name="group_name_old" value=""/>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="form_footer_links" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Form Footer Links</h3>
                </div>

                <form id="form-footer-links" method="post"
                      action="<?php echo get_template_directory_uri() ?>/admin/footer_links/action_add_links.php">
                    <div class="modal-body">
                        <div class="wrap">
                            <?php
                            // settings_fields("section-footer_links-form");
                            ?>
                            <table class="form-table">
                                <tr>
                                    <th><label for="title_links">Title</label></th>
                                    <td><input type="text" name="title_links" id="title_links" value=""
                                               class="regular-text" required/></td>
                                </tr>
                                <tr>
                                    <th><label for="link_links">Link</label></th>
                                    <td><input type="url" name="link_links" id="link_links" value=""
                                               class="regular-text" required/></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" id="id_links" name="id_links" value=""/>
                        <input type="hidden" id="title_links_old" name="title_links_old" value=""/>
                        <button class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="loading" class="modal fade" data-backdrop="static" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 id="myModalLabel">In Progress.....</h3>
                </div>

                <div class="modal-body">
                    <img src="<?php echo get_template_directory_uri() ?>/images/gear_loader.gif"/>
                    <b>Please Wait.....</b>
                </div>
            </div>
        </div>
    </div>

    <div id="process"></div>
    <?php
}

// End Form


/**
 * Display Form
 */
add_action("admin_menu", "display_theme_footer_links_fields");
function display_theme_footer_links_fields()
{
    global $my_corlate_admin_page;

    add_action("admin_init", "register_footer_links_settings");

    if (!isset($_POST['option_page'])) {
        if (!isset($_GET['page']) || (isset($_GET['page']) && !in_array($_GET['page'], $my_corlate_admin_page)))
            return;
    }

    wp_enqueue_style('corlate-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('corlate-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    // wp_enqueue_style('corlate-datatables', get_template_directory_uri().'/css/jquery.dataTables.min.css');
    // wp_enqueue_style('corlate-datatables-foundation', get_template_directory_uri().'/css/dataTables.foundation.min.css');
    wp_enqueue_style('corlate-datatables-bootstrap', get_template_directory_uri() . '/css/dataTables.bootstrap.min.css');
    wp_enqueue_style('corlate-hover', get_template_directory_uri() . '/css/hover-min.css');
    wp_enqueue_style('corlate-animate', get_template_directory_uri() . '/css/animate.min.css');
    wp_enqueue_style('corlate-hover', get_template_directory_uri() . '/css/hover-min.css');
    wp_enqueue_style('corlate-main', get_template_directory_uri() . '/css/main_admin.css');

    wp_enqueue_script('corlate-jquery', get_template_directory_uri() . '/js/jquery.js');
    wp_enqueue_script('corlate-jquery-ui', get_template_directory_uri() . '/js/jquery-ui.min.js');
    wp_enqueue_script('corlate-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('corlate-datatables', get_template_directory_uri() . '/js/jquery.dataTables.min.js');
    wp_enqueue_script('corlate-datatables-bootstrap', get_template_directory_uri() . '/js/dataTables.bootstrap.min.js');
    wp_enqueue_script('corlate-datatables-ordering', get_template_directory_uri() . '/js/jquery.dataTables.rowReordering.js');
    wp_enqueue_script('corlate-bootbox', get_template_directory_uri() . '/js/bootbox.min.js');
    wp_enqueue_script('corlate-main', get_template_directory_uri() . '/js/main_admin.js', array(), false, true);

    add_action('admin_footer', 'footer_links_list_script');


}

function register_footer_links_settings()
{
    add_settings_section("section-footer_links", "Footer Links", null, "corlate-footer_links-settings");

    add_settings_field("wp_corlate_enable_footer_links", "Enable footer_links", "display_enable_footer_links_element", "corlate-footer_links-settings", "section-footer_links");
    add_settings_field("wp_corlate_footer_links_show_on", "Footer Links show on", "display_show_on_element", "corlate-footer_links-settings", "section-footer_links");

    register_setting("section-footer_links", "wp_corlate_enable_footer_links");
    register_setting("section-footer_links", "wp_corlate_footer_links_show_on");
}

// End Display Form


/**
 * Add Script
 */
function footer_links_list_script()
{
    if (wp_script_is('corlate-datatables', 'done')) {
        include('footer_links_js_script.php');
    }
}
// End Add Script