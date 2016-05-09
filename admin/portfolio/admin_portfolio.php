<?php
/**
 * Form
 */
function theme_settings_portfolio()
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
        <h1>Corlate Portfolio Settings</h1>
        Using Shortcode in Page or Post, Page is recomended for better view
    </div>

    <div id="box_portfolio">
        <div class="wrap">
            <h3>
                Portfolio List
                <button id="btn_add_new" class="btn btn-success pull-right" style="margin-right: 6px;"><i
                        class="fa fa-plus"></i> Add New
                </button>
            </h3>
            <hr/>
            <div class="table-responsive">
                <table id="list_portfolio" class="table table-striped table-bordered table-hover" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th width="80px">Action</th>
                        <th width="30px">ID</th>
                        <th>Name</th>
                        <th width="90px">Add Project</th>
                        <th width="120px">Shortcode</th>
                        <th width="40px">Published</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                    <tr>
                        <th width="80px">Action</th>
                        <th width="30px">ID</th>
                        <th>Name</th>
                        <th width="90px">Add Project</th>
                        <th width="120px">Shortcode</th>
                        <th width="40px">Published</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div id="form_portfolio" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Form Portfolio</h3>
                </div>

                <form id="form-portfolio" method="post"
                      action="<?php echo get_template_directory_uri() ?>/admin/slider/action_add_portfolio.php"
                      enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="wrap">
                            <?php
                            // settings_fields("section-portfolio-form");
                            ?>
                            <table class="form-table">
                                <tr>
                                    <th><label for="name">Name</label></th>
                                    <td><input type="text" name="name" id="name" value="" class="regular-text"
                                               required/></td>
                                </tr>

                                <tr>
                                    <th><label for="published">Published</label></th>
                                    <td><input type="checkbox" name="published" id="published" value="true"/></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" id="id_portfolio" name="id_portfolio" value=""/>
                        <input type="hidden" id="name_old" name="name_old" value=""/>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="box_portfolio_project" style="display: none">
        <br/>

        <div class="wrap">
            <button type="button" id="btn_back_project" class="btn btn-primary"><i class="fa fa-backward"></i> Back to
                Portfolio
            </button>
            <h3>
                <h1 id="portfolio_name"></h1>
                Portfolio Project List
                <button id="btn_add_new_project" class="btn btn-success pull-right" style="margin-right: 6px;"><i
                        class="fa fa-plus"></i> Add New
                </button>
            </h3>
            <hr/>
            <div class="table-responsive">
                <table id="list_portfolio_project" class="table table-striped table-bordered table-hover"
                       cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th width="80px">Action</th>
                        <th width="30px">ID</th>
                        <th>Name</th>
                        <th width="100px">Add Images</th>
                        <th width="100px">Open New Tab</th>
                        <th width="40px">Published</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                    <tr>
                        <th width="80px">Action</th>
                        <th width="30px">ID</th>
                        <th>Name</th>
                        <th width="40px">Add Images</th>
                        <th width="100px">Open New Tab</th>
                        <th width="40px">Published</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div id="form_portfolio_project" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Form Portfolio Project</h3>
                </div>

                <form id="form-portfolio-project" method="post"
                      action="<?php echo get_template_directory_uri() ?>/admin/portfolio/action_add_portfolio_project.php"
                      enctype="multipart/form-data">
                    <div class="modal-body" style="height: 400px; overflow-y: auto;">
                        <div class="wrap">
                            <?php
                            // settings_fields("section-portfolio-form");
                            ?>
                            <table class="form-table">
                                <tr>
                                    <th><label for="name_project">Name</label></th>
                                    <td><input type="text" name="name_project" id="name_project" value=""
                                               class="regular-text" required/></td>
                                </tr>

                                <tr>
                                    <th><label for="image_url_project">Cover Image</label></th>
                                    <td>
                                        <input type="file" name="image_url_project" id="image_url_project" required
                                               accept="image/gif,image/jpeg,image/png"/>
                                        <div id="image_url_project_box" class="col-xs-12 hidden">
                                            <img id="image_url_project" class="col-xs-12" src=""/>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th><label for="description_project">Description</label></th>
                                    <td>
                                        <!-- <textarea name="description" id="description" class="regular-text" style="width: 100%" rows="5"></textarea> -->
                                        <?php
                                        $settings = array('media_buttons' => false, 'teeny' => true);
                                        wp_editor('', 'description_project', $settings);
                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th><label for="project_url_project">Project Url</label></th>
                                    <td><input type="url" name="project_url_project" id="project_url_project" value=""
                                               class="regular-text" required/></td>
                                </tr>

                                <tr>
                                    <th><label for="category_project">Category</label></th>
                                    <td><input type="text" name="category_project" id="category_project" value=""
                                               class="regular-text" required/></td>
                                </tr>

                                <tr>
                                    <th><label for="open_new_tab_project">Open New Tab</label></th>
                                    <td><input type="checkbox" name="open_new_tab_project" id="open_new_tab_project"
                                               value="true"/></td>
                                </tr>

                                <tr>
                                    <th><label for="published_project">Published</label></th>
                                    <td><input type="checkbox" name="published_project" id="published_project"
                                               value="true"/></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" id="id_project" name="id_project" value=""/>
                        <input type="hidden" id="portfolio_id_project" name="portfolio_id_project" value=""/>
                        <input type="hidden" id="name_project_old" name="name_project_old" value=""/>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="box_portfolio_images" style="display: none">
        <br/>

        <div class="wrap">
            <button type="button" id="btn_back_images" class="btn btn-primary"><i class="fa fa-backward"></i> Back to
                Project
            </button>
            <h3>
                <h1 id="project_name"></h1>
                Portfolio Images List
                <button id="btn_add_new_images" class="btn btn-success pull-right" style="margin-right: 6px;"><i
                        class="fa fa-plus"></i> Add New
                </button>
            </h3>
            <hr/>
            <div class="table-responsive">
                <table id="list_portfolio_images" class="table table-striped table-bordered table-hover" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th width="80px">Action</th>
                        <th width="30px">ID</th>
                        <th width="30px">Order</th>
                        <th>Name</th>
                        <th width="100px">Images</th>
                        <th width="40px">Published</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                    <tr>
                        <th width="80px">Action</th>
                        <th width="30px">ID</th>
                        <th width="30px">Order</th>
                        <th>Name</th>
                        <th width="40px">Images</th>
                        <th width="40px">Published</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div id="form_portfolio_images" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Form Portfolio Images</h3>
                </div>

                <form id="form-portfolio-images" method="post"
                      action="<?php echo get_template_directory_uri() ?>/admin/portfolio/action_add_portfolio_images.php"
                      enctype="multipart/form-data">
                    <div class="modal-body" style="height: 400px; overflow-y: auto;">
                        <div class="wrap">
                            <?php
                            // settings_fields("section-portfolio-form");
                            ?>
                            <table class="form-table">
                                <tr>
                                    <th><label for="name_images">Name</label></th>
                                    <td><input type="text" name="name_images" id="name_images" value=""
                                               class="regular-text" required/></td>
                                </tr>

                                <tr>
                                    <th><label for="image_url_images">Image</label></th>
                                    <td>
                                        <input type="file" name="image_url_images" id="image_url_images" required
                                               accept="image/gif,image/jpeg,image/png"/>
                                        <div id="image_url_images_box" class="col-xs-12 hidden">
                                            <img id="image_url_images" class="col-xs-12" src=""/>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th><label for="description_images">Description</label></th>
                                    <td>
                                        <input type="text" name="description_images" id="description_images"
                                               class="regular-text"/>
                                    </td>
                                </tr>

                                <tr>
                                    <th><label for="published_images">Published</label></th>
                                    <td><input type="checkbox" name="published_images" id="published_images"
                                               value="true"/></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" id="id_images" name="id_images" value=""/>
                        <input type="hidden" id="project_id_images" name="project_id_images" value=""/>
                        <input type="hidden" id="name_images_old" name="name_images_old" value=""/>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="loading" class=" modal fade" data-backdrop="static" role="dialog" aria-labelledby="myModalLabel"
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

    <?php
}

// End Form

/**
 * Display Form
 */
add_action("admin_menu", "display_theme_portfolio_fields");
function display_theme_portfolio_fields()
{
    global $my_corlate_admin_page;

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

    add_settings_section("section-portfolio", "Portfolio", null, "corlate-portfolio-settings");

    add_action('admin_footer', 'portfolio_list_script');
}

// End Display Form

/**
 * Add Script
 */
function portfolio_list_script()
{
    if (wp_script_is('corlate-datatables', 'done')) {
        include('portfolio_js_script.php');
    }

    // add_action( 'after_wp_tiny_mce', 'afterTinyMCEInit' );
}

function afterTinyMCEInit()
{
    ?>
    <script type="text/javascript">
        $(function () {
            $('#box_portfolio_project').hide();
        }());
    </script>
    <?php
}
// End Add Script