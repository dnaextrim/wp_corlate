<script type="text/javascript">
    var process = false;

    $(document).ready(function () {
        var oTable = $('#list_slider').dataTable({
            "sAjaxSource": "<?php echo get_template_directory_uri() ?>/admin/slider/action_read_slider.php",
            "sServerMethod": "POST",
            "bProcessing": true,
            "bAutoWidth": false,
            "aoColumns": [
                {
                    "mData": "actions",
                    "bSortable": false,
                    "mRender": function (id) {
                        return '<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons"> \
                                    <a style="color: #69aa46 !important" href="#" onClick="return Edit(' + id + ')"> \
                                        <i class="fa fa-pencil-square-o fa-lg hvr-grow"></i> \
                                    </a> \
                                    <a style="color: #dd5a43 !important" href="#" onClick="return Delete(' + id + ')"> \
                                        <i class="fa fa-trash-o fa-lg hvr-grow"></i> \
                                    </a> \
                                </div> \
                                <div class="visible-xs visible-sm hidden-md hidden-lg"> \
                                    <div> \
                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown"> \
                                            <i class="fa fa-caret-down icon-only fa-lg"></i> \
                                        </button> \
                                        <ul style="position:relative" class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close"> \
                                            <li> \
                                                <a href="#" onClick="return Edit(' + id + ')" class="tooltip-success" data-rel="tooltip" title="Edit"> \
                                                    <span style="color: #69aa46 !important"> \
                                                        <i class="fa fa-pencil-square-o fa-lg hvr-grow"></i> Edit\
                                                    </span> \
                                                </a> \
                                            </li> \
                                            <li> \
                                                <a href="#" onClick="return Delete(' + id + ')" class="tooltip-error" data-rel="tooltip" title="Delete"> \
                                                    <span style="color: #dd5a43 !important"> \
                                                        <i class="fa fa-trash-o fa-lg hvr-grow"></i> Delete\
                                                    </span> \
                                                </a> \
                                            </li> \
                                        </ul> \
                                    </div> \
                                </div>';
                    }
                },
                {"mData": "id", "sTitle": "ID"},
                {"mData": "title", "sTitle": "Title"},
                {"mData": "animation", "sTitle": "Animation"},
                {"mData": "show_on", "sTitle": "Show on"},
                {"mData": "published", "sTitle": "Published"}

            ],
            "fnRowCallback": function (nRow, aData, iDisplayIndex) {
                $(nRow).css({'cursor': 'move'});
                $(nRow).attr('id', aData.id);
                $(nRow).attr('data-position', (iDisplayIndex + 1));
            },
            'order': [[1, "asc"]],
            'columnDefs': [
                {"targets": [0, 1, -1, -2, -3], "className": "text-center"},
                {"targets": [1], "visible": false}
            ]
        }).rowReordering({
            'sURL': "<?php echo get_template_directory_uri() ?>/admin/slider/action_update_ordering_slider.php",
            'iIndexColumn': 1,
            fnAlert: function (text) {
                alert("Order cannot be changed on the server-side.\n" + text);
            },
            fnStartProcessingMode: function (obj) {
                process == true;
                $('#loading').modal('show');
            },
            fnEndProcessingMode: function (obj) {
                process == false;
                $('#loading').modal('hide');
            }
        });

        $.ajaxSetup({
            // timeout: 1000,
            type: "POST"
        });

        $(document).ajaxStart(function () {
            if (process == true)
                $('#loading').modal('show');
        });

        $(document).ajaxStop(function () {
            if (process == true) process = false;
            $('#loading').modal('hide');
        });

        $(document).ajaxError(function (e, x, settings, exception) {
            if (process == true) process = false;
            $('#loading').modal('hide');
            if (exception === "timeout") {
                alert("Request Timeout, Your Connection too slow");
            } else {
                if (exception != '')
                    alert(exception);
            }
        });

        $('#btn_add_new').bind("click", function () {
            clearform();
            $('#form_slider').modal('show');
            $('#form_slider #btn_delete_image1').addClass('hidden');
            $('#form_slider #btn_delete_image2').addClass('hidden');
        });

        $('button#btn_delete_image1').bind("click", function () {
            var id = $(this).data('id');
            process = true;
            $.ajax({
                url: '<?php echo get_template_directory_uri() ?>/admin/slider/action_delete_image_slider.php', // request ke file load_data.php
                data: {
                    id: id,
                    title: $('#title').val(),
                    image: 1
                },
                type: "POST",
                dataType: "json",
                success: function (data) {
                    if (typeof data.error === 'undefined') {
                        $('#image_box1').removeClass('visible');
                        $('#image_box1').addClass('hidden');
                    } else
                        alert(data.error);
                }
            });
        });

        $('button#btn_delete_image2').bind("click", function () {
            var id = $(this).data('id');
            process = true;
            $.ajax({
                url: '<?php echo get_template_directory_uri() ?>/admin/slider/action_delete_image_slider.php', // request ke file load_data.php
                data: {
                    id: id,
                    title: $('#title').val(),
                    image: 2
                },
                type: "POST",
                dataType: "json",
                success: function (data) {
                    if (typeof data.error === 'undefined') {
                        $('#image_box2').removeClass('visible');
                        $('#image_box2').addClass('hidden');
                    } else
                        alert(data.error);
                }
            });
        });

        $('#btn_preview_slider').bind("click", function () {
            process = true;
            $.ajax({
                url: '<?php echo get_template_directory_uri() ?>/admin/slider/action_preview_slider.php',
                data: {},
                type: "POST",
                success: function (data) {
                    $('#main-slider').html(data);
                    $('#preview_slider').modal('show');
                    //#main-slider
                    $(function () {
                        $('.carousel').carousel();

                        /*$('#main-slider .carousel').carousel({
                         interval: 8000
                         });*/

                        SlidePreview('div.item.active');
                        $('div.item.active .animation').each(function (index, el) {
                            SlidePreview(el);
                        });

                        $('#main-slider').bind('slid.bs.carousel', function () {
                            SlidePreview('div.item.active');
                            $('div.item.active .animation').each(function (index, el) {
                                SlidePreview(el);
                            });
                        });
                    });
                },
                error: function () {
                    $('#main-slider').html('');
                }
            })
        });

        /**
         * Input File Event
         */
        $("form#form-slider #image1").change(function () {
            ImagePreview(
                this,
                $('form#form-slider img#image1'),
                $('form#form-slider #image_box1')
            );
        });

        $("form#form-slider #image2").change(function () {
            ImagePreview(
                this,
                $('form#form-slider img#image2'),
                $('form#form-slider #image_box2')
            );
        });
        // End Input File Event

        $('form#form-slider').on('submit', function (event) {
            event.preventDefault();

            process = true;
            var submit_url = $('form#form-slider').attr('action');
            var deferred;
            if ("FormData" in window) {
                //for modern browsers that support FormData and uploading files via ajax
                var fd = new FormData($('form#form-slider').get(0));

                upload_in_progress = true;
                deferred = $.ajax({
                    url: submit_url,
                    type: $('form#form-slider').attr('method'),
                    processData: false,
                    contentType: false,
                    dataType: 'json',
                    data: fd,
                    xhr: function () {
                        var req = $.ajaxSettings.xhr();
                        if (req && req.upload) {
                            req.upload.addEventListener('progress', function (e) {
                                if (e.lengthComputable) {
                                    var done = e.loaded || e.position, total = e.total || e.totalSize;
                                    var percent = parseInt((done / total) * 100) + '%';
                                    //percentage of uploaded file
                                }
                            }, false);
                        }
                        return req;
                    },
                    beforeSend: function () {
                    },
                    success: function () {

                    }
                })

            }
            else {
                //for older browsers that don't support FormData and uploading files via ajax
                //we use an iframe to upload the form(file) without leaving the page
                upload_in_progress = true;
                deferred = new $.Deferred

                var iframe_id = 'temporary-iframe-' + (new Date()).getTime() + '-' + (parseInt(Math.random() * 1000));
                $('form#form-slider').after('<iframe id="' + iframe_id + '" name="' + iframe_id + '" frameborder="0" width="0" height="0" src="about:blank" style="position:absolute;z-index:-1;"></iframe>');
                $('form#form-slider').append('<input type="hidden" name="temporary-iframe-id" value="' + iframe_id + '" />');
                $('form#form-slider').next().data('deferrer', deferred);//save the deferred object to the iframe
                $('form#form-slider').attr({
                    'method': 'POST', 'enctype': 'multipart/form-data',
                    'target': iframe_id, 'action': submit_url
                });

                $('form#form-slider').get(0).submit();

                //if we don't receive the response after 60 seconds, declare it as failed!
                setTimeout(function () {
                    var iframe = document.getElementById(iframe_id);
                    if (iframe != null) {
                        iframe.src = "about:blank";
                        $(iframe).remove();

                        deferred.reject({'status': 'fail', 'message': 'Timeout!'});
                    }
                }, 60000);
            }


            ////////////////////////////
            deferred.done(function (result) {
                upload_in_progress = false;

                if (result.status == 'OK') {
                    // alert(result.message + ". Lokasi Server: " + result.url);
                    var oTable = $('#list_slider').dataTable();
                    $.getJSON('<?php echo get_template_directory_uri() ?>/admin/slider/action_read_slider.php', null, function (json) {
                        oTable.fnClearTable();
                        if (json.aaData.length > 0) {
                            oTable.fnAddData(json.aaData);
                            oTable.fnDraw();
                        }
                    });

                    $('#form_slider').modal('hide');
                }
                else {
                    alert(result.error);
                }

                clearform();
            }).fail(function (res) {
                upload_in_progress = false;
                alert(res.error);
            });

            deferred.promise();
        });

        $('form#form-animation').on('submit', function (event) {
            event.preventDefault();

            process = true;
            var submit_url = $('form#form-animation').attr('action');
            var deferred;
            if ("FormData" in window) {
                //for modern browsers that support FormData and uploading files via ajax
                var fd = new FormData($('form#form-animation').get(0));

                upload_in_progress = true;
                deferred = $.ajax({
                    url: submit_url,
                    type: $('form#form-animation').attr('method'),
                    processData: false,
                    contentType: false,
                    dataType: 'json',
                    data: fd,
                    xhr: function () {
                        var req = $.ajaxSettings.xhr();
                        if (req && req.upload) {
                            req.upload.addEventListener('progress', function (e) {
                                if (e.lengthComputable) {
                                    var done = e.loaded || e.position, total = e.total || e.totalSize;
                                    var percent = parseInt((done / total) * 100) + '%';
                                    //percentage of uploaded file
                                }
                            }, false);
                        }
                        return req;
                    },
                    beforeSend: function () {
                    },
                    success: function () {

                    }
                })

            }
            else {
                //for older browsers that don't support FormData and uploading files via ajax
                //we use an iframe to upload the form(file) without leaving the page
                upload_in_progress = true;
                deferred = new $.Deferred

                var iframe_id = 'temporary-iframe-' + (new Date()).getTime() + '-' + (parseInt(Math.random() * 1000));
                $('form#form-animation').after('<iframe id="' + iframe_id + '" name="' + iframe_id + '" frameborder="0" width="0" height="0" src="about:blank" style="position:absolute;z-index:-1;"></iframe>');
                $('form#form-animation').append('<input type="hidden" name="temporary-iframe-id" value="' + iframe_id + '" />');
                $('form#form-animation').next().data('deferrer', deferred);//save the deferred object to the iframe
                $('form#form-animation').attr({
                    'method': 'POST', 'enctype': 'multipart/form-data',
                    'target': iframe_id, 'action': submit_url
                });

                $('form#form-animation').get(0).submit();

                //if we don't receive the response after 60 seconds, declare it as failed!
                setTimeout(function () {
                    var iframe = document.getElementById(iframe_id);
                    if (iframe != null) {
                        iframe.src = "about:blank";
                        $(iframe).remove();

                        deferred.reject({'status': 'fail', 'message': 'Timeout!'});
                    }
                }, 60000);
            }


            ////////////////////////////
            deferred.done(function (result) {
                upload_in_progress = false;

                if (result.status == 'OK') {
                    $('#form_animation').modal('hide');
                }
                else {
                    alert(result.error);
                }

                clearformAnimation();
            }).fail(function (res) {
                upload_in_progress = false;
                alert(res.error);
            });

            deferred.promise();
        });

        function clearform() {
            $('#form-slider input[type=text]').val('');
            $('#form-slider input[type=file]').val('');
            // $('input[type=hidden]').val('');
            $('#form-slider input[type=checkbox]:checked').prop('checked', false);
            $('#form-slider input[type=radio]:checked').prop('checked', false);
            $('#form-slider textarea').val('');
            $('form#form-slider').attr('action', '<?php echo get_template_directory_uri() ?>/admin/slider/action_add_slider.php');
            $("form#form-slider")[0].reset();
            $('#loading').modal('hide');

            $('img#image1').attr("src", '');
            $('#image_box1').removeClass('visible');
            $('#image_box1').addClass('hidden');
            $('img#image2').attr("src", '');
            $('#image_box2').removeClass('visible');
            $('#image_box2').addClass('hidden');

            $('#form_slider #btn_delete_image1').removeClass('hidden');
            $('#form_slider #btn_delete_image2').removeClass('hidden');
        }

    });


    function Edit(id) {
        process = true;
        $('#form_slider').modal('show');
        $.ajax({
            url: '<?php echo get_template_directory_uri() ?>/admin/slider/action_edit_slider.php',
            data: id,
            type: "POST",
            dataType: "json",
            success: function (data) {
                if (typeof data.error === 'undefined') {
                    $('#form_slider #btn_delete_image1').removeClass('hidden');
                    $('#form_slider #btn_delete_image2').removeClass('hidden');

                    $('#id_slider').val(id.id);
                    $('#title').val(data.title);
                    $('#title_old').val(data.title);
                    $('#sub_title').val(data.sub_title);
                    $('#read_more').val(data.read_more);
                    $('img#image1').attr("src", data.image1);
                    $('button#btn_delete_image1').data("id", id.id);
                    if (data.image1 != '') {
                        $('#image_box1').removeClass('hidden');
                        $('#image_box1').addClass('visible');
                    } else {
                        $('#image_box1').removeClass('visible');
                        $('#image_box1').addClass('hidden');
                    }
                    $('img#image2').attr("src", data.image2);
                    $('button#btn_delete_image2').data("id", id.id);
                    if (data.image2 != '') {
                        $('#image_box2').removeClass('hidden');
                        $('#image_box2').addClass('visible');
                    } else {
                        $('#image_box2').removeClass('visible');
                        $('#image_box2').addClass('hidden');
                    }

                    if (data.published == 'true' || data.published == true)
                        $('#published').prop('checked', true);
                    else
                        $('#published').prop('checked', false);
                    $('#show_on').val(data.show_on);
                    $('form#form-slider').attr('action', '<?php echo get_template_directory_uri() ?>/admin/slider/action_update_slider.php');
                }
            }
        });
    }

    function Delete(id) {
        $(document).ready(function () {
            bootbox.dialog({
                message: "Title: '" + id.title + "'<br />Are you sure?",
                title: "Delete Confirmation",
                buttons: {
                    yes: {
                        label: "Yes",
                        className: "btn-success",
                        callback: function () {
                            process = true;
                            $.ajax({
                                url: '<?php echo get_template_directory_uri() ?>/admin/slider/action_delete_slider.php', // request ke file load_data.php
                                data: id,
                                type: "POST",
                                dataType: "json",
                                success: function (data) {
                                    if (typeof data.error === 'undefined') {
                                        var oTable = $('#list_slider').dataTable();
                                        $.getJSON('<?php echo get_template_directory_uri() ?>/admin/slider/action_read_slider.php', null, function (json) {
                                            oTable.fnClearTable();
                                            if (json.aaData.length > 0) {
                                                oTable.fnAddData(json.aaData);
                                                oTable.fnDraw();
                                            }
                                        });
                                    } else
                                        alert(data.error);
                                }
                            });
                        }
                    },
                    no: {
                        label: "No",
                        className: "btn-danger",
                        callback: function () {
                        }
                    },
                }
            });
        });
    }

    function Publish(id) {
        process = true;
        id.published = false;
        if ($('#published_' + id.id).is(':checked')) id.published = true;
        console.log(id);
        $.ajax({
            url: '<?php echo get_template_directory_uri() ?>/admin/slider/action_update_publish_slider.php', // request ke file load_data.php
            data: id,
            type: "POST",
            dataType: "json",
            success: function (data) {
                if (typeof data.error === 'undefined') {
                    var oTable = $('#list_slider').dataTable();
                    $.getJSON('<?php echo get_template_directory_uri() ?>/admin/slider/action_read_slider.php', null, function (json) {
                        oTable.fnClearTable();
                        if (json.aaData.length > 0) {
                            oTable.fnAddData(json.aaData);
                            oTable.fnDraw();
                        }
                    });
                } else {
                    alert(data.error);
                    id.published = (id.published == false) ? true : false;
                    $('#published_' + id.id).prop('checked', id.published);
                }
            }
        });
    }

    function ShowOn(id) {
        process = true;
        id.show_on = $('#show_on_' + id.id).val();
        console.log(id);
        $.ajax({
            url: '<?php echo get_template_directory_uri() ?>/admin/slider/action_update_show_on_slider.php', // request ke file load_data.php
            data: id,
            type: "POST",
            dataType: "json",
            success: function (data) {
                if (typeof data.error === 'undefined') {
                    var oTable = $('#list_slider').dataTable();
                    $.getJSON('<?php echo get_template_directory_uri() ?>/admin/slider/action_read_slider.php', null, function (json) {
                        oTable.fnClearTable();
                        if (json.aaData.length > 0) {
                            oTable.fnAddData(json.aaData);
                            oTable.fnDraw();
                        }
                    });
                } else {
                    alert(data.error);
                    $('#show_' + id.id).val('All');
                }
            }
        });
    }

    function clearformAnimation() {
        $("form#form-animation")[0].reset();
        $('#loading').modal('hide');
    }

    function Animation(id) {
        process = true;
        clearformAnimation();
        $('#form_animation').modal('show');
        $.ajax({
            url: '<?php echo get_template_directory_uri() ?>/admin/slider/action_edit_animation.php',
            data: id,
            type: "POST",
            dataType: "json",
            success: function (data) {
                if (typeof data.error === 'undefined') {
                    $('#id_slider_animation').val(id.id);
                    $('#title_animation_old').val(data.title);

                    $('#title_animation').val(data.title_animation);
                    $('#title_animation_preview').text(data.title);
                    $('#title_duration').val(data.title_duration);
                    $('#title_delay').val(data.title_delay);

                    $('#sub_title_animation').val(data.sub_title_animation);
                    $('#sub_title_animation_preview').text(data.sub_title);
                    $('#sub_title_duration').val(data.sub_title_duration);
                    $('#sub_title_delay').val(data.sub_title_delay);

                    $('#read_more_animation').val(data.read_more_animation);
                    $('#read_more_animation_preview').attr('href', data.read_more);
                    $('#read_more_duration').val(data.read_more_duration);
                    $('#read_more_delay').val(data.read_more_delay);

                    $('#image1_animation').val(data.image1_animation);
                    $('img#image1_animation_preview').attr("src", data.image1);
                    $('#image1_duration').val(data.image1_duration);
                    $('#image1_delay').val(data.image1_delay);

                    $('#image2_animation').val(data.image2_animation);
                    $('img#image2_animation_preview').attr("src", data.image2);
                    $('#image2_duration').val(data.image2_duration);
                    $('#image2_delay').val(data.image2_delay);
                }
            }
        });
    }

    function SlidePreview(el) {
        var animation = $(el).data('animation');
        var duration = $(el).data('duration');
        var delay = $(el).data('delay');

        $(el).css({
            "-webkit-animation-duration": duration + "ms", "-webkit-animation-delay": delay + "ms",
            "-moz-animation-duration": duration + "ms", "-moz-animation-delay": delay + "ms",
            "-o-animation-duration": duration + "ms", "-o-animation-delay": delay + "ms",
            "-ms-animation-duration": duration + "ms", "-ms-animation-delay": delay + "ms",
            "animation-duration": duration + "ms", "animation-delay": delay + "ms"
        });
        $(el).removeClass('animated ' + animation).addClass('animated ' + animation).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
            $(this).removeClass('animated ' + animation);
        });
    }
    ;

    function ImagePreview(input, output, box) {
        if (input.files && input.files[0]) {
            if ("FileReader" in window) {
                box.removeClass('hidden');
                var reader = new FileReader();
                reader.onload = function (e) {
                    output.attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    }
</script>