<?php
/**
 * Form
 */
function theme_settings_slider()
{
    $animation = array(
        "bounce",
        "flash",
        // "headShake",
        "hinge",
        // "jello",
        "lightSpeedIn",
        "lightSpeedOut",
        "pulse",
        "rollIn",
        "rollOut",
        "rubberBand",
        "shake",
        "swing",
        "tada",
        "wobble",
        "bounceIn" => array(
            "bounceIn",
            "bounceInDown",
            "bounceInLeft",
            "bounceInRight",
            "bounceInUp",
        ),
        "bounceOut" => array(
            "bounceOut",
            "bounceOutDown",
            "bounceOutLeft",
            "bounceOutRight",
            "bounceOutUp",
        ),
        "fadeIn" => array(
            "fadeIn",
            "fadeInDown",
            "fadeInDownBig",
            "fadeInLeft",
            "fadeInLeftBig",
            "fadeInRight",
            "fadeInRightBig",
            "fadeInUp",
            "fadeInUpBig",
        ),
        "fadeOut" => array(
            "fadeOut",
            "fadeOutDown",
            "fadeOutDownBig",
            "fadeOutLeft",
            "fadeOutLeftBig",
            "fadeOutRight",
            "fadeOutRightBig",
            "fadeOutUp",
            "fadeOutUpBig",
        ),
        "flipIn" => array(
            "flipInX",
            "flipInY",
        ),
        "flipOut" => array(
            "flipOutX",
            "flipOutY",
        ),
        "rotateIn" => array(
            "rotateIn",
            "rotateInDownLeft",
            "rotateInDownRight",
            "rotateInUpLeft",
            "rotateInUpRight",
        ),
        "rotateOut" => array(
            "rotateOut",
            "rotateOutDownLeft",
            "rotateOutDownRight",
            "rotateOutUpLeft",
            "rotateOutUpRight",
        ),
        "zoomIn" => array(
            "zoomIn",
            "zoomInDown",
            "zoomInLeft",
            "zoomInRight",
            "zoomInUp",
        ),
        "zoomOut" => array(
            "zoomOut",
            "zoomOutDown",
            "zoomOutLeft",
            "zoomOutRight",
            "zoomOutUp",
        ),
        "slideIn" => array(
            "slideInDown",
            "slideInLeft",
            "slideInRight",
            "slideInUp",
        ),
        "slideOut" => array(
            "slideOutDown",
            "slideOutLeft",
            "slideOutRight",
            "slideOutUp",
        ),
    );
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
        <h1>Corlate Slider Settings</h1>
        <form method="post" action="options.php" enctype="multipart/form-data">
            <?php
            settings_fields("section-slider");
            do_settings_sections("corlate-slider-settings");
            submit_button();
            ?>
        </form>
    </div>

    <div class="wrap">
        <h3>
            Slider List
            <button id="btn_preview_slider" class="btn btn-primary pull-right"><i class="fa fa-play"></i> Preview Slider
            </button>
            <button id="btn_add_new" class="btn btn-success pull-right" style="margin-right: 6px;"><i
                    class="fa fa-plus"></i> Add New
            </button>
        </h3>
        <hr/>
        <div class="table-responsive">
            <table id="list_slider" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th width="80px">Action</th>
                    <th width="30px">ID</th>
                    <th>Title</th>
                    <th width="70px">Animation</th>
                    <th width="100px">Show on</th>
                    <th width="40px">Published</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                <tr>
                    <th width="80px">Action</th>
                    <th width="30px">ID</th>
                    <th>Title</th>
                    <th width="70px">Animation</th>
                    <th width="100px">Show on</th>
                    <th width="40px">Published</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div id="form_slider" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Form Slider</h3>
                </div>

                <form id="form-slider" method="post"
                      action="<?php echo get_template_directory_uri() ?>/admin/slider/action_add_slider.php"
                      enctype="multipart/form-data">
                    <div class="modal-body" style="height: 400px; overflow-y: auto;">
                        <div class="wrap">
                            <?php
                            // settings_fields("section-slider-form");
                            ?>
                            <table class="form-table">
                                <tr>
                                    <th><label for="title">Title</label></th>
                                    <td><input type="text" name="title" id="title" value="" class="regular-text"
                                               required/></td>
                                </tr>

                                <tr>
                                    <th><label for="sub_title">Sub Title</label></th>
                                    <td><input type="text" name="sub_title" id="sub_title" value=""
                                               class="regular-text"/></td>
                                </tr>

                                <tr>
                                    <th><label for="read_more">Read More</label></th>
                                    <td><input type="url" name="read_more" id="read_more" value=""
                                               class="regular-text"/></td>
                                </tr>

                                <tr>
                                    <th><label for="image1">Background</label></th>
                                    <td>
                                        <input type="file" name="image1" id="image1" required
                                               accept="image/gif,image/jpeg,image/png"/>
                                        <div id="image_box1" class="col-xs-12 hidden">
                                            <img id="image1" class="col-xs-12" src=""/><br/>
                                            <button type="button" id="btn_delete_image1" class="btn btn-danger">Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th><label for="image2">Slider Image</label></th>
                                    <td>
                                        <input type="file" name="image2" id="image2"
                                               accept="image/gif,image/jpeg,image/png"/>
                                        <div id="image_box2" class="col-xs-12 hidden">
                                            <img id="image2" class="col-xs-12" src=""/> <br/>
                                            <button type="button" id="btn_delete_image2" class="btn btn-danger">Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th><label for="show_on">Show on</label></th>
                                    <td>
                                        <select name="show_on" id="show_on">
                                            <option value="All">All</option>
                                            <option value="All Post">All Post</option>
                                            <option value="All Page">All Page</option>
                                            <option value="All Page">All Category</option>
                                            <option value="All Page">All Tag</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="published">Published</label></th>
                                    <td><input type="checkbox" name="published" id="published" value="true"/></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" id="id_slider" name="id_slider" value=""/>
                        <input type="hidden" id="title_old" name="title_old" value=""/>
                        <?php
                        submit_button(_("Save"));
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="form_animation" class="modal fade col-xs-12" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Animation Settings</h3>
                </div>

                <form id="form-animation" method="post"
                      action="<?php echo get_template_directory_uri() ?>/admin/slider/action_update_animation.php"
                      enctype="multipart/form-data">
                    <div class="modal-body" style="height: 400px; overflow-y: auto;">
                        <div class="wrap">
                            <?php
                            // settings_fields("section-slider-form");
                            ?>
                            <table class="form-table table table-striped">
                                <tr>
                                    <th>
                                        Title
                                        <button type="button" id="title_play" class="btn btn-primary btn-xs pull-right">
                                            <i class="fa fa-play"></i> Play
                                        </button>
                                        <br/>
                                        <br/>
                                        <div class="well col-sm-12 col-xs-12 text-center"
                                             style="padding: 20px; overflow: hidden">
                                            <h1 id="title_animation_preview" class="animation">ABC</h1>
                                        </div>
                                        <table class="table table-striped table-bordered">
                                            <tr>
                                                <th>Animation</th>
                                                <th>
                                                    <select id="title_animation" name="title_animation">
                                                        <?php
                                                        reset($animation);
                                                        foreach ($animation as $key => $efek):
                                                            if (is_array($efek)):
                                                                ?>
                                                                <optgroup label="<?php echo $key ?>">
                                                                    <?php
                                                                    foreach ($efek as $key2 => $efek2):
                                                                        ?>
                                                                        <option
                                                                            value="<?php echo $efek2 ?>" <?php if ($efek2 == 'fadeInUp') echo 'selected'; ?>><?php echo $efek2 ?></option>
                                                                    <?php endforeach ?>
                                                                </optgroup>
                                                                <?php
                                                            else:
                                                                ?>
                                                                <option
                                                                    value="<?php echo $efek ?>"><?php echo $efek ?></option>
                                                                <?php
                                                            endif;
                                                        endforeach ?>
                                                    </select>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Duration</th>
                                                <th><input type="number" id="title_duration" name="title_duration"
                                                           size="30" value="300"/>ms
                                                </th>
                                            </tr>
                                            <tr>
                                                <th><label>Delay</label></th>
                                                <th><input type="number" id="title_delay" name="title_delay" size="30"
                                                           value="300"/>ms
                                                </th>
                                            </tr>
                                        </table>
                                    </th>
                                </tr>

                                <tr>
                                    <th>
                                        Sub Title
                                        <button type="button" id="sub_title_play"
                                                class="btn btn-primary btn-xs pull-right"><i class="fa fa-play"></i>
                                            Play
                                        </button>
                                        <br/>
                                        <br/>
                                        <div class="well col-sm-12 col-xs-12 text-center"
                                             style="padding: 20px; overflow: hidden">
                                            <h1 id="sub_title_animation_preview" class="animation">ABC</h1>
                                        </div>
                                        <table class="table table-striped table-bordered">
                                            <tr>
                                                <th>Animaton</th>
                                                <th>
                                                    <select id="sub_title_animation" name="sub_title_animation">
                                                        <?php
                                                        reset($animation);
                                                        foreach ($animation as $key => $efek):
                                                            if (is_array($efek)):
                                                                ?>
                                                                <optgroup label="<?php echo $key ?>">
                                                                    <?php
                                                                    foreach ($efek as $key2 => $efek2):
                                                                        ?>
                                                                        <option
                                                                            value="<?php echo $efek2 ?>" <?php if ($efek2 == 'fadeInUp') echo 'selected'; ?>><?php echo $efek2 ?></option>
                                                                    <?php endforeach ?>
                                                                </optgroup>
                                                                <?php
                                                            else:
                                                                ?>
                                                                <option
                                                                    value="<?php echo $efek ?>"><?php echo $efek ?></option>
                                                                <?php
                                                            endif;
                                                        endforeach ?>
                                                    </select>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Duration</th>
                                                <th>
                                                    <input type="number" id="sub_title_duration"
                                                           name="sub_title_duration" value="300"/>ms&nbsp;&nbsp;
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Delay</th>
                                                <th>
                                                    <input type="number" id="sub_title_delay" name="sub_title_delay"
                                                           value="300"/>ms&nbsp;&nbsp;
                                                </th>
                                            </tr>
                                        </table>
                                    </th>
                                </tr>

                                <tr>
                                    <th>
                                        Read More
                                        <button type="button" id="read_more_play"
                                                class="btn btn-primary btn-xs pull-right"><i class="fa fa-play"></i>
                                            Play
                                        </button>
                                        <br/>
                                        <br/>
                                        <div class="well col-sm-12 col-xs-12 text-center"
                                             style="padding: 20px; overflow: hidden">
                                            <a id="read_more_animation_preview" class="btn btn-danger animation">Read
                                                More</a>
                                        </div>
                                        <table class="table table-striped table-bordered">
                                            <tr>
                                                <th>Animation</th>
                                                <th>
                                                    <select id="read_more_animation" name="read_more_animation">
                                                        <?php
                                                        reset($animation);
                                                        foreach ($animation as $key => $efek):
                                                            if (is_array($efek)):
                                                                ?>
                                                                <optgroup label="<?php echo $key ?>">
                                                                    <?php
                                                                    foreach ($efek as $key2 => $efek2):
                                                                        ?>
                                                                        <option
                                                                            value="<?php echo $efek2 ?>" <?php if ($efek2 == 'fadeInUp') echo 'selected'; ?>><?php echo $efek2 ?></option>
                                                                    <?php endforeach ?>
                                                                </optgroup>
                                                                <?php
                                                            else:
                                                                ?>
                                                                <option
                                                                    value="<?php echo $efek ?>"><?php echo $efek ?></option>
                                                                <?php
                                                            endif;
                                                        endforeach ?>
                                                    </select>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Duration</th>
                                                <th><input type="number" id="read_more_duration" size="30" value="300"/>ms
                                                </th>
                                            </tr>
                                            <tr>
                                                <th><label>Delay</label></th>
                                                <th><input type="number" id="read_more_delay" size="30" value="300"/>ms
                                                </th>
                                            </tr>
                                        </table>
                                    </th>
                                </tr>

                                <tr>
                                    <th>
                                        Background
                                        <button type="button" id="image1_play"
                                                class="btn btn-primary btn-xs pull-right"><i class="fa fa-play"></i>
                                            Play
                                        </button>
                                        <br/>
                                        <br/>
                                        <div class="well col-sm-12 col-xs-12 text-center"
                                             style="padding: 20px; overflow: hidden">
                                            <img id="image1_animation_preview" class="animation center-block"
                                                 style="width:70%;" alt="Backround"/>
                                        </div>
                                        <table class="table table-striped table-bordered">
                                            <tr>
                                                <th>Animation</th>
                                                <th>
                                                    <select id="image1_animation" name="image1_animation">
                                                        <?php
                                                        reset($animation);
                                                        foreach ($animation as $key => $efek):
                                                            if (is_array($efek)):
                                                                ?>
                                                                <optgroup label="<?php echo $key ?>">
                                                                    <?php
                                                                    foreach ($efek as $key2 => $efek2):
                                                                        ?>
                                                                        <option
                                                                            value="<?php echo $efek2 ?>" <?php if ($efek2 == 'fadeInUp') echo 'selected'; ?>><?php echo $efek2 ?></option>
                                                                    <?php endforeach ?>
                                                                </optgroup>
                                                                <?php
                                                            else:
                                                                ?>
                                                                <option
                                                                    value="<?php echo $efek ?>"><?php echo $efek ?></option>
                                                                <?php
                                                            endif;
                                                        endforeach ?>
                                                    </select>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Duration</th>
                                                <th>
                                                    <input type="number" id="image1_duration" name="image1_duration"
                                                           value="300"/>ms&nbsp;&nbsp;
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Delay</th>
                                                <th>
                                                    <input type="number" id="image1_delay" name="image1_delay"
                                                           value="300"/>ms&nbsp;&nbsp;
                                                </th>
                                            </tr>
                                        </table>
                                    </th>
                                </tr>

                                <tr>
                                    <th>
                                        Slider Image
                                        <button type="button" id="image2_play"
                                                class="btn btn-primary btn-xs pull-right"><i class="fa fa-play"></i>
                                            Play
                                        </button>
                                        <br/>
                                        <br/>
                                        <div class="well col-sm-12 col-xs-12" style="padding: 20px; overflow: hidden">
                                            <img id="image2_animation_preview" class="animation center-block"
                                                 style="width:20%;" alt="Slider Image"/>
                                        </div>
                                        <table class="table table-striped table-bordered">
                                            <tr>
                                                <th>Animation</th>
                                                <th>
                                                    <select id="image2_animation" name="image2_animation">
                                                        <?php
                                                        reset($animation);
                                                        foreach ($animation as $key => $efek):
                                                            if (is_array($efek)):
                                                                ?>
                                                                <optgroup label="<?php echo $key ?>">
                                                                    <?php
                                                                    foreach ($efek as $key2 => $efek2):
                                                                        ?>
                                                                        <option
                                                                            value="<?php echo $efek2 ?>" <?php if ($efek2 == 'fadeInUp') echo 'selected'; ?>><?php echo $efek2 ?></option>
                                                                    <?php endforeach ?>
                                                                </optgroup>
                                                                <?php
                                                            else:
                                                                ?>
                                                                <option
                                                                    value="<?php echo $efek ?>"><?php echo $efek ?></option>
                                                                <?php
                                                            endif;
                                                        endforeach ?>
                                                    </select>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Duration</th>
                                                <th>
                                                    <input type="number" id="image2_duration" name="image2_duration"
                                                           value="300"/>ms&nbsp;&nbsp;
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Delay</th>
                                                <th>
                                                    <input type="number" id="image2_delay" name="image2_delay"
                                                           value="300"/>ms&nbsp;&nbsp;
                                                </th>
                                            </tr>
                                        </table>
                                    </th>
                                </tr>

                            </table>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" id="id_slider_animation" name="id_slider_animation" value=""/>
                        <input type="hidden" id="title_animation_old" name="title_animation_old" value=""/>
                        <?php
                        submit_button(_("Save"));
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="preview_slider" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width: 800px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Preview Slider</h3>
                </div>

                <div class="modal-body">
                    <section id="main-slider" class="no-margin">

                    </section><!--/#main-slider-->
                </div>
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
 * Fields
 */
function display_enable_slider_element()
{
    ?>
    <input type="checkbox" name="wp_corlate_enable_slider" class="form-control"
           value="1" <?php checked(1, get_option('wp_corlate_enable_slider'), true); ?> />
    <?php
}

function display_show_on_element()
{
    ?>
    <select name="wp_corlate_slider_show_on">
        <option value="All" <?php echo (get_option('wp_corlate_slider_show_on') == 'All') ? 'selected' : ''; ?>>All
        </option>
        <option
            value="Home Only" <?php echo (get_option('wp_corlate_slider_show_on') == 'Home Only') ? 'selected' : ''; ?>>
            Home Only
        </option>
        <option
            value="All Post" <?php echo (get_option('wp_corlate_slider_show_on') == 'All Post') ? 'selected' : ''; ?>>
            All Post
        </option>
        <option
            value="All Page" <?php echo (get_option('wp_corlate_slider_show_on') == 'All Page') ? 'selected' : ''; ?>>
            All Page
        </option>
        <option
            value="All Category" <?php echo (get_option('wp_corlate_slider_show_on') == 'All Category') ? 'selected' : ''; ?>>
            All Category
        </option>
        <option value="All Tag" <?php echo (get_option('wp_corlate_slider_show_on') == 'All Tag') ? 'selected' : ''; ?>>
            All Tag
        </option>
    </select>
    <?php
}

// End Fields


/**
 * Display Form
 */
add_action("admin_menu", "display_theme_slider_fields");
function display_theme_slider_fields()
{
    global $my_corlate_admin_page;

    add_action("admin_init", "register_slider_settings");

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

    if (isset($_GET['page']) && $_GET['page'] == 'theme_settings_slider')
        add_action('admin_footer', 'slider_list_script');


}

function register_slider_settings()
{
    add_settings_section("section-slider", "Slider", null, "corlate-slider-settings");

    add_settings_field("wp_corlate_enable_slider", "Enable slider", "display_enable_slider_element", "corlate-slider-settings", "section-slider");
    add_settings_field("wp_corlate_slider_show_on", "Slider show on", "display_show_on_element", "corlate-slider-settings", "section-slider");

    register_setting("section-slider", "wp_corlate_enable_slider");
    register_setting("section-slider", "wp_corlate_slider_show_on");
}

// End Display Form


/**
 * Add Script
 */
function slider_list_script()
{
    if (wp_script_is('corlate-datatables', 'done')) {
        include('slider_js_script.php');
    }
}
// End Add Script