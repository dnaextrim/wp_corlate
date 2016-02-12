<script type="text/javascript">
    var process = false;

    $(document).ready(function () {

        /**
         * Portfolio DataTables
         */
        var oTable = $('#list_portfolio').dataTable({
            "sAjaxSource": "<?php echo get_template_directory_uri() ?>/admin/portfolio/action_read_portfolio.php",
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
                {"mData": "name", "sTitle": "Name"},
                {"mData": "project", "sTitle": "Add Project"},
                {"mData": "shortcode", "sTitle": "Shortcode"},
                {"mData": "published", "sTitle": "Published"}

            ],
            'order': [[1, "asc"]],
            'columnDefs': [
                {"targets": [0, 1, -1, -2, -3], "className": "text-center"}
            ]
        });

        /**
         * Project DataTables
         */
        var oTable = $('#list_portfolio_project').dataTable({
            "sAjaxSource": "<?php echo get_template_directory_uri() ?>/admin/portfolio/action_read_portfolio_project.php",
            "sServerMethod": "POST",
            "bProcessing": true,
            "bAutoWidth": false,
            "aoColumns": [
                {
                    "mData": "actions",
                    "bSortable": false,
                    "mRender": function (id) {
                        return '<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons"> \
                                    <a style="color: #69aa46 !important" href="#" onClick="return EditProject(' + id + ')"> \
                                        <i class="fa fa-pencil-square-o fa-lg hvr-grow"></i> \
                                    </a> \
                                    <a style="color: #dd5a43 !important" href="#" onClick="return DeleteProject(' + id + ')"> \
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
                                                <a href="#" onClick="return EditProject(' + id + ')" class="tooltip-success" data-rel="tooltip" title="Edit"> \
                                                    <span style="color: #69aa46 !important"> \
                                                        <i class="fa fa-pencil-square-o fa-lg hvr-grow"></i> Edit\
                                                    </span> \
                                                </a> \
                                            </li> \
                                            <li> \
                                                <a href="#" onClick="return DeleteProject(' + id + ')" class="tooltip-error" data-rel="tooltip" title="Delete"> \
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
                {"mData": "name", "sTitle": "Name"},
                {"mData": "images", "sTitle": "Add Images"},
                {"mData": "open_new_tab", "sTitle": "Open New Tab"},
                {"mData": "published", "sTitle": "Published"}

            ],
            'order': [[1, "asc"]],
            'columnDefs': [
                {"targets": [0, 1, -1, -2, -3], "className": "text-center"}
            ]
        });

        /**
         * Images DataTables
         */
        var oTable = $('#list_portfolio_images').dataTable({
            "sAjaxSource": "<?php echo get_template_directory_uri() ?>/admin/portfolio/action_read_portfolio_images.php",
            "sServerMethod": "POST",
            "bProcessing": true,
            "bAutoWidth": false,
            "aoColumns": [
                {
                    "mData": "actions",
                    "bSortable": false,
                    "mRender": function (id, type, full) {
                        return '<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons"> \
                                    <a style="color: #69aa46 !important" href="#" onClick="return EditImages(' + id + ')"> \
                                        <i class="fa fa-pencil-square-o fa-lg hvr-grow"></i> \
                                    </a> \
                                    <a style="color: #dd5a43 !important" href="#" onClick="return DeleteImages(' + id + ')"> \
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
                                                <a href="#" onClick="return EditImages(' + id + ')" class="tooltip-success" data-rel="tooltip" title="Edit"> \
                                                    <span style="color: #69aa46 !important"> \
                                                        <i class="fa fa-pencil-square-o fa-lg hvr-grow"></i> Edit\
                                                    </span> \
                                                </a> \
                                            </li> \
                                            <li> \
                                                <a href="#" onClick="return DeleteImages(' + id + ')" class="tooltip-error" data-rel="tooltip" title="Delete"> \
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
                {"mData": "id", "sTitle": "ID", "bSortable": false},
                {"mData": "ordering", "sTitle": "Order", "bSortable": false},
                {"mData": "name", "sTitle": "Name", "bSortable": false},
                {"mData": "image", "sTitle": "Images", "bSortable": false},
                {"mData": "published", "sTitle": "Published", "bSortable": false}

            ],
            "fnRowCallback": function (nRow, aData, iDisplayIndex) {
                $(nRow).css({'cursor': 'move'});
                $(nRow).attr('id', aData.id);
                $(nRow).attr('data-position', (iDisplayIndex + 1));
            },
            'order': [[2, "asc"]],
            'columnDefs': [
                {"targets": [0, 1, -1, -2], "className": "text-center"},
                {"targets": [2], "visible": false}
            ]
        }).rowReordering({
            'sURL': "<?php echo get_template_directory_uri() ?>/admin/portfolio/action_update_ordering_portfolio_images.php",
            'iIndexColumn': 2,
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


        /**
         * Ajax Setup and Loading window
         */
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
        // End Ajax Setup


        /**
         * Button Event
         */
        $('#btn_back_project').bind("click", function () {
            $('#box_portfolio_project').hide('slide');
            $('#box_portfolio').show('slide');
        });

        $('#btn_back_images').bind("click", function () {
            $('#box_portfolio_images').hide('slide');
            $('#box_portfolio_project').show('slide');
        });

        $('#btn_add_new').bind("click", function () {
            clearform();
            $('#form_portfolio').modal('show');
        });

        $('#btn_add_new_project').bind("click", function () {
            clearformProject();
            $('#form_portfolio_project').modal('show');
        });

        $('#btn_add_new_images').bind("click", function () {
            clearformImages();
            $('#form_portfolio_images').modal('show');
        });

        $('#btn_preview_portfolio').bind("click", function () {
            process = true;
            $.ajax({
                url: '<?php echo get_template_directory_uri() ?>/admin/portfolio/action_preview_portfolio.php',
                data: {},
                type: "POST",
                success: function (data) {
                    $('#main-portfolio').html(data);
                    $('#preview_portfolio').modal('show');
                    //#main-portfolio
                    $(function () {
                        $('.carousel').carousel();

                        /*$('#main-portfolio .carousel').carousel({
                         interval: 8000
                         });*/

                        SlidePreview('div.item.active');
                        $('div.item.active .animation').each(function (index, el) {
                            SlidePreview(el);
                        });

                        $('#main-portfolio').bind('slid.bs.carousel', function () {
                            SlidePreview('div.item.active');
                            $('div.item.active .animation').each(function (index, el) {
                                SlidePreview(el);
                            });
                        });
                    });
                },
                error: function () {
                    $('#main-portfolio').html('');
                }
            })
        });
        // End Button Event

        /**
         * Input File Event
         */
        $("form#form-portfolio-project #image_url_project").change(function () {
            ImagePreview(
                this,
                $('form#form-portfolio-project img#image_url_project'),
                $('form#form-portfolio-project #image_url_project_box')
            );
        });

        $("form#form-portfolio-images #image_url_images").change(function () {
            ImagePreview(
                this,
                $('form#form-portfolio-images img#image_url_images'),
                $('form#form-portfolio-images #image_url_images_box')
            );
        });
        // End Input File Event

        /**
         * Submit Portfolio
         */
        $('form#form-portfolio').on('submit', function (event) {
            event.preventDefault();

            process = true;
            var submit_url = $('form#form-portfolio').attr('action');
            var deferred;
            if ("FormData" in window) {
                //for modern browsers that support FormData and uploading files via ajax
                var fd = new FormData($('form#form-portfolio').get(0));

                console.log(fd);
                upload_in_progress = true;
                deferred = $.ajax({
                    url: submit_url,
                    type: $('form#form-portfolio').attr('method'),
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
                $('form#form-portfolio').after('<iframe id="' + iframe_id + '" name="' + iframe_id + '" frameborder="0" width="0" height="0" src="about:blank" style="position:absolute;z-index:-1;"></iframe>');
                $('form#form-portfolio').append('<input type="hidden" name="temporary-iframe-id" value="' + iframe_id + '" />');
                $('form#form-portfolio').next().data('deferrer', deferred);//save the deferred object to the iframe
                $('form#form-portfolio').attr({
                    'method': 'POST', 'enctype': 'multipart/form-data',
                    'target': iframe_id, 'action': submit_url
                });

                $('form#form-portfolio').get(0).submit();

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
                    var oTable = $('#list_portfolio').dataTable();
                    $.getJSON('<?php echo get_template_directory_uri() ?>/admin/portfolio/action_read_portfolio.php', null, function (json) {
                        oTable.fnClearTable();
                        if (json.aaData.length > 0) {
                            oTable.fnAddData(json.aaData);
                            oTable.fnDraw();
                        }
                    });

                    $('#form_portfolio').modal('hide');
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


        /**
         * Submit Project
         */
        $('form#form-portfolio-project').on('submit', function (event) {
            event.preventDefault();
            $('form#form-portfolio-project #description_project').val(tinymce.get('description_project').getContent());

            process = true;
            var portfolio_id = 0;
            var submit_url = $('form#form-portfolio-project').attr('action');
            var deferred;
            if ("FormData" in window) {
                //for modern browsers that support FormData and uploading files via ajax
                var fd = new FormData($('form#form-portfolio-project').get(0));
                portfolio_id = $('form#form-portfolio-project #portfolio_id_project').val();
                // fd.set('description_project', tinymce.get('description_project').getContent());

                upload_in_progress = true;
                deferred = $.ajax({
                    url: submit_url,
                    type: $('form#form-portfolio-project').attr('method'),
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
                $('form#form-portfolio-project').after('<iframe id="' + iframe_id + '" name="' + iframe_id + '" frameborder="0" width="0" height="0" src="about:blank" style="position:absolute;z-index:-1;"></iframe>');
                $('form#form-portfolio-project').append('<input type="hidden" name="temporary-iframe-id" value="' + iframe_id + '" />');
                $('form#form-portfolio-project').next().data('deferrer', deferred);//save the deferred object to the iframe
                $('form#form-portfolio-project').attr({
                    'method': 'POST', 'enctype': 'multipart/form-data',
                    'target': iframe_id, 'action': submit_url
                });

                $('form#form-portfolio-project').get(0).submit();

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
                    var oTable = $('#list_portfolio_project').dataTable();
                    $.getJSON('<?php echo get_template_directory_uri() ?>/admin/portfolio/action_read_portfolio_project.php', {id: portfolio_id}, function (json) {
                        oTable.fnClearTable();
                        if (json.aaData.length > 0) {
                            oTable.fnAddData(json.aaData);
                            oTable.fnDraw();
                        }
                    });

                    $('#form_portfolio_project').modal('hide');
                }
                else {
                    alert(result.error);
                }

                clearformImages();

                $('#portfolio_id_images').val(portfolio_id);
                $('#name_images_old').val(portfolio_name);

            }).fail(function (res) {
                upload_in_progress = false;
                alert(res.error);
            });

            deferred.promise();
        });


        /**
         * Submit Images
         */
        $('form#form-portfolio-images').on('submit', function (event) {
            event.preventDefault();

            process = true;
            var project_id = 0;
            var submit_url = $('form#form-portfolio-images').attr('action');
            var deferred;
            if ("FormData" in window) {
                //for modern browsers that support FormData and uploading files via ajax
                var fd = new FormData($('form#form-portfolio-images').get(0));
                project_id = $('form#form-portfolio-images #project_id_images').val();
                // fd.set('description', tinymce.get('description').getContent());

                upload_in_progress = true;
                deferred = $.ajax({
                    url: submit_url,
                    type: $('form#form-portfolio-images').attr('method'),
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
                $('form#form-portfolio-images').after('<iframe id="' + iframe_id + '" name="' + iframe_id + '" frameborder="0" width="0" height="0" src="about:blank" style="position:absolute;z-index:-1;"></iframe>');
                $('form#form-portfolio-images').append('<input type="hidden" name="temporary-iframe-id" value="' + iframe_id + '" />');
                $('form#form-portfolio-images').next().data('deferrer', deferred);//save the deferred object to the iframe
                $('form#form-portfolio-images').attr({
                    'method': 'POST', 'enctype': 'multipart/form-data',
                    'target': iframe_id, 'action': submit_url
                });

                $('form#form-portfolio-images').get(0).submit();

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
                    var oTable = $('#list_portfolio_images').dataTable();
                    $.getJSON('<?php echo get_template_directory_uri() ?>/admin/portfolio/action_read_portfolio_images.php', {id: project_id}, function (json) {
                        oTable.fnClearTable();
                        if (json.aaData.length > 0) {
                            oTable.fnAddData(json.aaData);
                            oTable.fnDraw();
                        }
                    });

                    $('#form_portfolio_images').modal('hide');
                }
                else {
                    alert(result.error);
                }

                clearformImages();

                $('#project_id_images').val(project_id);

            }).fail(function (res) {
                upload_in_progress = false;
                alert(res.error);
            });

            deferred.promise();
        });


        function clearform() {
            $('#form-portfolio input[type=text]').val('');
            $('#form-portfolio input[type=file]').val('');
            // $('input[type=hidden]').val('');
            $('#form-portfolio input[type=checkbox]:checked').attr('checked', false);
            $('#form-portfolio input[type=radio]:checked').attr('checked', false);
            $('#form-portfolio textarea').val('');
            $('form#form-portfolio').attr('action', '<?php echo get_template_directory_uri() ?>/admin/portfolio/action_add_portfolio.php');
            $("form#form-portfolio")[0].reset();
            $('#loading').modal('hide');

            $('img#image1').attr("src", '');
            $('#image_box1').removeClass('visible');
            $('#image_box1').addClass('hidden');
            $('img#image2').attr("src", '');
            $('#image_box2').removeClass('visible');
            $('#image_box2').addClass('hidden');
        }

    });


    /**
     * Edit
     */
    function Edit(id) {
        process = true;
        $.ajax({
            url: '<?php echo get_template_directory_uri() ?>/admin/portfolio/action_edit_portfolio.php',
            data: id,
            type: "POST",
            dataType: "json",
            success: function (data) {
                if (typeof data.error === 'undefined') {
                    $('#form_portfolio').modal('show');
                    $('#id_portfolio').val(id.id);
                    $('#name').val(data.name);
                    $('#name_old').val(data.name);

                    if (data.published == 'true' || data.published == true)
                        $('#published').prop('checked', true);
                    else
                        $('#published').prop('checked', false);
                    $('form#form-portfolio').attr('action', '<?php echo get_template_directory_uri() ?>/admin/portfolio/action_update_portfolio.php');
                }
            }
        });
    }

    function EditProject(id) {
        process = true;
        $.ajax({
            url: '<?php echo get_template_directory_uri() ?>/admin/portfolio/action_edit_portfolio_project.php',
            data: id,
            type: "POST",
            dataType: "json",
            success: function (data) {
                if (typeof data.error === 'undefined') {
                    $('#form_portfolio_project').modal('show');
                    $('#id_project').val(id.id);
                    $('#name_project').val(data.name);
                    $('#name_project_old').val(data.name);
                    if (data.image_url != '') {
                        $('#image_url_project').prop('required', false);
                        $('img#image_url_project').attr('src', data.image_url);
                        $('#image_url_project_box').removeClass('hidden');
                    }
                    $('#project_url_project').val(data.project_url);
                    $('#category_project').val(data.category);
                    tinymce.get('description_project').setContent(data.description);

                    if (data.open_new_tab == 'true' || data.open_new_tab == true)
                        $('#open_new_tab_project').prop('checked', true);
                    else
                        $('#open_new_tab_project').prop('checked', false);

                    if (data.published == 'true' || data.published == true)
                        $('#published_project').prop('checked', true);
                    else
                        $('#published_project').prop('checked', false);
                    $('form#form-portfolio-project').attr('action', '<?php echo get_template_directory_uri() ?>/admin/portfolio/action_update_portfolio_project.php');
                }
            }
        });
    }

    function EditImages(id) {
        process = true;
        $.ajax({
            url: '<?php echo get_template_directory_uri() ?>/admin/portfolio/action_edit_portfolio_images.php',
            data: id,
            type: "POST",
            dataType: "json",
            success: function (data) {
                if (typeof data.error === 'undefined') {
                    $('#form_portfolio_images').modal('show');
                    $('#id_images').val(id.id);
                    $('#name_images').val(data.name);
                    $('#name_images_old').val(data.name);
                    if (data.image_url != '') {
                        $('#image_url_images').prop('required', false);
                        $('img#image_url_images').attr('src', data.image_url);
                        $('#image_url_images_box').removeClass('hidden');
                    }
                    // tinymce.get('description_images').setContent(data.description);
                    $('#description_images').val(data.description);

                    if (data.published == 'true' || data.published == true)
                        $('#published_images').prop('checked', true);
                    else
                        $('#published_images').prop('checked', false);
                    $('form#form-portfolio-images').attr('action', '<?php echo get_template_directory_uri() ?>/admin/portfolio/action_update_portfolio_images.php');
                }
            }
        });
    }
    // End Edit


    /**
     * Delete
     */
    function Delete(id) {
        $(document).ready(function () {
            bootbox.dialog({
                message: "Name: '" + id.name + "'<br />Are you sure?",
                title: "Delete Confirmation",
                buttons: {
                    yes: {
                        label: "Yes",
                        className: "btn-success",
                        callback: function () {
                            process = true;
                            $.ajax({
                                url: '<?php echo get_template_directory_uri() ?>/admin/portfolio/action_delete_portfolio.php', // request ke file load_data.php
                                data: id,
                                type: "POST",
                                dataType: "json",
                                success: function (data) {
                                    if (typeof data.error === 'undefined') {
                                        var oTable = $('#list_portfolio').dataTable();
                                        $.getJSON('<?php echo get_template_directory_uri() ?>/admin/portfolio/action_read_portfolio.php', null, function (json) {
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

    function DeleteProject(id) {
        $(document).ready(function () {
            bootbox.dialog({
                message: "Name: '" + id.name + "'<br />Are you sure?",
                title: "Delete Confirmation",
                buttons: {
                    yes: {
                        label: "Yes",
                        className: "btn-success",
                        callback: function () {
                            process = true;
                            $.ajax({
                                url: '<?php echo get_template_directory_uri() ?>/admin/portfolio/action_delete_portfolio_project.php', // request ke file load_data.php
                                data: id,
                                type: "POST",
                                dataType: "json",
                                success: function (data) {
                                    if (typeof data.error === 'undefined') {
                                        var oTable = $('#list_portfolio_project').dataTable();
                                        $.getJSON('<?php echo get_template_directory_uri() ?>/admin/portfolio/action_read_portfolio_project.php', {id: id.portfolio_id}, function (json) {
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

    function DeleteImages(id) {
        $(document).ready(function () {
            bootbox.dialog({
                message: "Name: '" + id.name + "'<br />Are you sure?",
                title: "Delete Confirmation",
                buttons: {
                    yes: {
                        label: "Yes",
                        className: "btn-success",
                        callback: function () {
                            process = true;
                            $.ajax({
                                url: '<?php echo get_template_directory_uri() ?>/admin/portfolio/action_delete_portfolio_images.php', // request ke file load_data.php
                                data: id,
                                type: "POST",
                                dataType: "json",
                                success: function (data) {
                                    if (typeof data.error === 'undefined') {
                                        var oTable = $('#list_portfolio_images').dataTable();
                                        $.getJSON('<?php echo get_template_directory_uri() ?>/admin/portfolio/action_read_portfolio_images.php', {id: id.project_id}, function (json) {
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
    // End Delete


    /**
     * Publish
     */
    function Publish(id) {
        process = true;
        id.published = false;
        if ($('#published_' + id.id).is(':checked')) id.published = true;
        $.ajax({
            url: '<?php echo get_template_directory_uri() ?>/admin/portfolio/action_update_publish_portfolio.php', // request ke file load_data.php
            data: id,
            type: "POST",
            dataType: "json",
            success: function (data) {
                if (typeof data.error === 'undefined') {
                    var oTable = $('#list_slider').dataTable();
                    $.getJSON('<?php echo get_template_directory_uri() ?>/admin/portfolio/action_read_portfolio.php', null, function (json) {
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
            },
            error: function () {
                id.published = (id.published == false) ? true : false;
                $('#published_' + id.id).prop('checked', id.published);
            }
        });
    }

    function PublishProject(id) {
        process = true;
        id.published = false;
        if ($('#published_project_' + id.id).is(':checked')) id.published = true;
        $.ajax({
            url: '<?php echo get_template_directory_uri() ?>/admin/portfolio/action_update_publish_portfolio_project.php', // request ke file load_data.php
            data: id,
            type: "POST",
            dataType: "json",
            success: function (data) {
                if (typeof data.error === 'undefined') {
                    var oTable = $('#list_portfolio_project').dataTable();
                    $.getJSON('<?php echo get_template_directory_uri() ?>/admin/portfolio/action_read_portfolio_project.php', {id: id.portfolio_id}, function (json) {
                        oTable.fnClearTable();
                        if (json.aaData.length > 0) {
                            oTable.fnAddData(json.aaData);
                            oTable.fnDraw();
                        }
                    });
                } else {
                    alert(data.error);
                    id.published = (id.published == false) ? true : false;
                    $('#published_project_' + id.id).prop('checked', id.published);
                }
            },
            error: function () {
                id.published = (id.published == false) ? true : false;
                $('#published_project_' + id.id).prop('checked', id.published);
            }
        });
    }

    function PublishImages(id) {
        process = true;
        id.published = false;
        if ($('#published_images_' + id.id).is(':checked')) id.published = true;
        $.ajax({
            url: '<?php echo get_template_directory_uri() ?>/admin/portfolio/action_update_publish_portfolio_images.php', // request ke file load_data.php
            data: id,
            type: "POST",
            dataType: "json",
            success: function (data) {
                if (typeof data.error === 'undefined') {
                    var oTable = $('#list_portfolio_images').dataTable();
                    $.getJSON('<?php echo get_template_directory_uri() ?>/admin/portfolio/action_read_portfolio_images.php', {id: id.portfolio_id}, function (json) {
                        oTable.fnClearTable();
                        if (json.aaData.length > 0) {
                            oTable.fnAddData(json.aaData);
                            oTable.fnDraw();
                        }
                    });
                } else {
                    alert(data.error);
                    id.published = (id.published == false) ? true : false;
                    $('#published_images_' + id.id).prop('checked', id.published);
                }
            },
            error: function () {
                id.published = (id.published == false) ? true : false;
                $('#published_images_' + id.id).prop('checked', id.published);
            }
        });
    }
    // End Publish


    function OpenNewTabProject(id) {
        process = true;
        id.open_new_tab = false;
        if ($('#open_new_tab_project_' + id.id).is(':checked')) id.open_new_tab = true;
        $.ajax({
            url: '<?php echo get_template_directory_uri() ?>/admin/portfolio/action_update_open_new_tab_portfolio_project.php', // request ke file load_data.php
            data: id,
            type: "POST",
            dataType: "json",
            success: function (data) {
                if (typeof data.error === 'undefined') {
                    var oTable = $('#list_portfolio_project').dataTable();
                    $.getJSON('<?php echo get_template_directory_uri() ?>/admin/portfolio/action_read_portfolio_project.php', {id: id.portfolio_id}, function (json) {
                        oTable.fnClearTable();
                        if (json.aaData.length > 0) {
                            oTable.fnAddData(json.aaData);
                            oTable.fnDraw();
                        }
                    });
                } else {
                    alert(data.error);
                    id.open_new_tab = (id.open_new_tab == false) ? true : false;
                    $('#open_new_tab_project_' + id.id).prop('checked', id.open_new_tab);
                }
            },
            error: function () {
                id.published = (id.published == false) ? true : false;
                $('#published_project_' + id.id).prop('checked', id.published);
            }
        });
    }


    /**
     * Clear Form
     */
    function clearformProject() {
        $('form#form-portfolio-project').attr('action', '<?php echo get_template_directory_uri() ?>/admin/portfolio/action_add_portfolio_project.php');
        $("form#form-portfolio-project")[0].reset();
        $('#loading').modal('hide');
        $('img#image_url_project').attr('src', '');
        $('#image_url_project_box').addClass('hidden');
        $('#image_url_project').prop('required', true);
    }

    function clearformImages() {
        $('form#form-portfolio-images').attr('action', '<?php echo get_template_directory_uri() ?>/admin/portfolio/action_add_portfolio_images.php');
        $("form#form-portfolio-images")[0].reset();
        $('#loading').modal('hide');
        $('img#image_url_images').attr('src', '');
        $('#image_url_images_box').addClass('hidden');
        $('#image_url_images').prop('required', true);
    }
    // End Clear Form


    /**
     * Show Project Form
     */
    function Project(id) {
        $('#portfolio_name').text(id.name);
        $('#box_portfolio').hide('slide');
        $('#box_portfolio_project').show('slide');
        $('#portfolio_id_project').val(id.id);
        $('#name_project_old').val(id.name);

        process = true;
        var oTable = $('#list_portfolio_project').dataTable();
        $.getJSON('<?php echo get_template_directory_uri() ?>/admin/portfolio/action_read_portfolio_project.php', id, function (json) {
            oTable.fnClearTable();
            if (json.aaData.length > 0) {
                oTable.fnAddData(json.aaData);
                oTable.fnDraw();
            }
            process = false;
        });
    }
    // End Show Project Form


    /**
     * Show Images Form
     */
    function Images(id) {
        $('#project_name').text(id.name);
        $('#box_portfolio_project').hide('slide');
        $('#box_portfolio_images').show('slide');
        $('#project_id_images').val(id.id);
        $('#name_images_old').val(id.name);

        process = true;
        var oTable = $('#list_portfolio_images').dataTable().rowReordering({
            'sURL': "<?php echo get_template_directory_uri() ?>/admin/portfolio/action_update_ordering_portfolio_images.php?project_id=" + id.id,
            'iIndexColumn': 2,
            fnAlert: function (text) {
                alert("Order canot be changed on the server-side.\n" + text);
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
        $.getJSON('<?php echo get_template_directory_uri() ?>/admin/portfolio/action_read_portfolio_images.php', id, function (json) {
            oTable.fnClearTable();
            if (json.aaData.length > 0) {
                oTable.fnAddData(json.aaData);
                oTable.fnDraw();
            }
            process = false;
        });
    }
    // End Show Images Form


    /*function SlidePreview(el) {
     var animation = $(el).data('animation');
     var duration = $(el).data('duration');
     var delay = $(el).data('delay');

     $(el).css({
     "-webkit-animation-duration": duration+"ms", "-webkit-animation-delay": delay+"ms",
     "-moz-animation-duration": duration+"ms", "-moz-animation-delay": delay+"ms",
     "-o-animation-duration": duration+"ms", "-o-animation-delay": delay+"ms",
     "-ms-animation-duration": duration+"ms", "-ms-animation-delay": delay+"ms",
     "animation-duration": duration+"ms", "animation-delay": delay+"ms"
     });
     $(el).removeClass('animated '+animation).addClass('animated '+animation).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
     $(this).removeClass('animated '+animation);
     });
     };*/

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