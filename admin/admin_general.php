<?php
/**
 * Form
 */
function theme_settings_general()
{
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
        <h1>Corlate Settings</h1>
        <form method="post" action="options.php" enctype="multipart/form-data">
            <?php
            settings_fields("general-settings");
            do_settings_sections("corlate-general-settings");
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

// End Form

/**
 * Fields
 */
function display_contact_support_element()
{
    ?>
    <input type="text" name="wp_corlate_contact_support" id="wp_corlate_contact_support"
           class="form-control col-sm-6 col-xs-12" value="<?php echo get_option('wp_corlate_contact_support'); ?>"
           placeholder="Contact Phone/Email"/>
    <?php
}

function display_twitter_element()
{
    ?>
    <input type="url" name="wp_corlate_twitter_url" id="wp_corlate_twitter_url" class="form-control col-sm-6 col-xs-12"
           value="<?php echo get_option('wp_corlate_twitter_url'); ?>"/>
    <?php
}

function display_facebook_element()
{
    ?>
    <input type="url" name="wp_corlate_facebook_url" id="wp_corlate_facebook_url"
           class="form-control col-sm-6 col-xs-12" value="<?php echo get_option('wp_corlate_facebook_url'); ?>"/>
    <?php
}

function display_github_element()
{
    ?>
    <input type="url" name="wp_corlate_github_url" id="wp_corlate_github_url" class="form-control col-sm-6 col-xs-12"
           value="<?php echo get_option('wp_corlate_github_url'); ?>"/>
    <?php
}

function logo_display()
{
    ?>
    <input type="file" name="wp_corlate_logo"/>
    <?php
    $logo = get_option('wp_corlate_logo');
    if (!empty($logo)) { ?>
        <img class="img img-responsive" src="<?php echo $logo; ?>"/>
    <?php } ?>
    <?php
}

function handle_logo_upload()
{
    if (!empty($_FILES["logo"]["tmp_name"])) {
        $urls = wp_handle_upload($_FILES["logo"], array('test_form' => FALSE));
        $temp = $urls["url"];
        return $temp;
    }

    return $option;
}

// End Fields

/**
 * Display Form
 */
add_action("admin_menu", "display_theme_general_fields");
function display_theme_general_fields()
{
    global $my_corlate_admin_page;
    add_action("admin_init", "register_general_settings");

    if (!isset($_POST['option_page'])) {
        if (!isset($_GET['page']) || (isset($_GET['page']) && !in_array($_GET['page'], $my_corlate_admin_page)))
            return;
    }

    wp_enqueue_style('corlate-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
}

function register_general_settings()
{
    add_settings_section("general-settings", "Settings", null, "corlate-general-settings");

    add_settings_field("wp_corlate_contact_support", "Contact Support", "display_contact_support_element", "corlate-general-settings", "general-settings");
    add_settings_field("wp_corlate_facebook_url", "Facebook Profile Url", "display_facebook_element", "corlate-general-settings", "general-settings");
    add_settings_field("wp_corlate_twitter_url", "Twitter Profile Url", "display_twitter_element", "corlate-general-settings", "general-settings");
    add_settings_field("wp_corlate_github_url", "Github Profile Url", "display_github_element", "corlate-general-settings", "general-settings");
    add_settings_field("wp_corlate_logo", "Logo", "logo_display", "corlate-general-settings", "general-settings");

    register_setting("general-settings", "wp_corlate_contact_support");
    register_setting("general-settings", "wp_corlate_facebook_url");
    register_setting("general-settings", "wp_corlate_twitter_url");
    register_setting("general-settings", "wp_corlate_github_url");
    register_setting("general-settings", "wp_corlate_logo", "handle_logo_upload");
}
// End Display Form