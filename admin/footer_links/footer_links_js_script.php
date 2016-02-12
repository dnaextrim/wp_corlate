<script type="text/javascript">
    var process = false;

    $(document).ready(function () {
        var oTable = $('#list_footer_links').dataTable({
            "sAjaxSource": "<?php echo get_template_directory_uri() ?>/admin/footer_links/action_read_links.php?group=" + $('#group').val(),
            "sServerMethod": "POST",
            "bProcessing": true,
            "bAutoWidth": false,
            "aoColumns": [
                {
                    "mData": "actions",
                    "bSortable": false,
                    "mRender": function (id) {
                        return '<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons"> \
                                    <a style="color: #69aa46 !important" href="#" onClick="return EditLinks(' + id + ')"> \
                                        <i class="fa fa-pencil-square-o fa-lg hvr-grow"></i> \
                                    </a> \
                                    <a style="color: #dd5a43 !important" href="#" onClick="return DeleteLinks(' + id + ')"> \
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
                                                <a href="#" onClick="return EditLinks(' + id + ')" class="tooltip-success" data-rel="tooltip" title="EditLinks"> \
                                                    <span style="color: #69aa46 !important"> \
                                                        <i class="fa fa-pencil-square-o fa-lg hvr-grow"></i> Edit\
                                                    </span> \
                                                </a> \
                                            </li> \
                                            <li> \
                                                <a href="#" onClick="return DeleteLinks(' + id + ')" class="tooltip-error" data-rel="tooltip" title="DeleteLinks"> \
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
                {"mData": "ordering", "sTitle": "Order", "bSortable": false},
                {"mData": "title", "sTitle": "Title", "bSortable": false},
                {"mData": "link", "sTitle": "Link", "bSortable": false},

            ],
            "fnRowCallback": function (nRow, aData, iDisplayIndex) {
                $(nRow).css({'cursor': 'move'});
                $(nRow).attr('id', aData.ordering);
                $(nRow).attr('data-position', (iDisplayIndex + 1));
            },
            'order': [[1, "asc"]],
            'columnDefs': [
                {"targets": [1], "visible": false}
            ]
        }).rowReordering({
            'sURL': "<?php echo get_template_directory_uri() ?>/admin/footer_links/action_update_ordering_links.php?group=" + $('#group').val(),
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

        $('#group').bind('change', function () {
            process = true;
            var oTable = $('#list_footer_links').dataTable();
            $.getJSON('<?php echo get_template_directory_uri() ?>/admin/footer_links/action_read_links.php', {group: $(this).val()}, function (json) {
                oTable.fnClearTable();
                if (json.aaData.length > 0) {
                    oTable.fnAddData(json.aaData);
                    oTable.fnDraw();
                }
                process = false;
            });
        });

        $('#btn_add_group').bind("click", function () {
            clearform();
            $('#form_group_footer_links').modal('show');
        });

        $('#btn_edit_group').bind("click", function () {
            clearform();
            $('#form_group_footer_links').modal('show');
            $('#group_name').val($('#group').val());
            $('#group_name_old').val($('#group').val());
            $('form#form-group-footer-links').attr('action', '<?php echo get_template_directory_uri() ?>/admin/footer_links/action_update_group.php');
        });

        $('#btn_delete_group').bind("click", function () {
            bootbox.dialog({
                message: "Group: '" + $('#group').val() + "'<br />Are you sure?",
                title: "Delete Confirmation",
                buttons: {
                    yes: {
                        label: "Yes",
                        className: "btn-success",
                        callback: function () {
                            process = true;
                            $.ajax({
                                url: '<?php echo get_template_directory_uri() ?>/admin/footer_links/action_delete_group.php', // request ke file load_data.php
                                data: {group: $('#group').val()},
                                type: "POST",
                                dataType: "json",
                                success: function (data) {
                                    if (typeof data.error === 'undefined') {
                                        $('#group').html('');
                                        $.getJSON('<?php echo get_template_directory_uri() ?>/admin/footer_links/action_read_group.php', null, function (json) {
                                            if (json.length > 0) {
                                                $.each(json, function (index, val) {
                                                    $('#group').append('<option value="' + val + '">' + val + '</option>');
                                                });
                                            }

                                            var oTable = $('#list_footer_links').dataTable();
                                            $.getJSON('<?php echo get_template_directory_uri() ?>/admin/footer_links/action_read_links.php', {group: $('#group').val()}, function (json) {
                                                oTable.fnClearTable();
                                                if (json.aaData.length > 0) {
                                                    oTable.fnAddData(json.aaData);
                                                    oTable.fnDraw();
                                                }
                                            });
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

        $('#btn_add_new').bind("click", function () {
            clearformLinks();
            $('#form_footer_links').modal('show');
        });

        $('form#form-group-footer-links').on('submit', function (event) {
            event.preventDefault();

            process = true;
            var submit_url = $('form#form-group-footer-links').attr('action');
            var deferred;
            if ("FormData" in window) {
                //for modern browsers that support FormData and uploading files via ajax
                var fd = new FormData($('form#form-group-footer-links').get(0));

                upload_in_progress = true;
                deferred = $.ajax({
                    url: submit_url,
                    type: $('form#form-group-footer-links').attr('method'),
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
                $('form#form-group-footer-links').after('<iframe id="' + iframe_id + '" name="' + iframe_id + '" frameborder="0" width="0" height="0" src="about:blank" style="position:absolute;z-index:-1;"></iframe>');
                $('form#form-group-footer-links').append('<input type="hidden" name="temporary-iframe-id" value="' + iframe_id + '" />');
                $('form#form-group-footer-links').next().data('deferrer', deferred);//save the deferred object to the iframe
                $('form#form-group-footer-links').attr({
                    'method': 'POST', 'enctype': 'multipart/form-data',
                    'target': iframe_id, 'action': submit_url
                });

                $('form#form-grouo-footer-links').get(0).submit();

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
                    $('#group').html('');
                    $.getJSON('<?php echo get_template_directory_uri() ?>/admin/footer_links/action_read_group.php', null, function (json) {
                        if (json.length > 0) {
                            $.each(json, function (index, val) {
                                $('#group').append('<option value="' + val + '">' + val + '</option>');
                            });
                        }

                        var oTable = $('#list_footer_links').dataTable();
                        $.getJSON('<?php echo get_template_directory_uri() ?>/admin/footer_links/action_read_links.php', {group: $('#group').val()}, function (json) {
                            oTable.fnClearTable();
                            if (json.aaData.length > 0) {
                                oTable.fnAddData(json.aaData);
                                oTable.fnDraw();
                            }
                        });
                    });

                    $('#form_group_footer_links').modal('hide');
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


        $('form#form-footer-links').on('submit', function (event) {
            event.preventDefault();

            process = true;
            var submit_url = $('form#form-footer-links').attr('action');
            var deferred;
            if ("FormData" in window) {
                //for modern browsers that support FormData and uploading files via ajax
                var fd = new FormData($('form#form-footer-links').get(0));
                fd.append("group", $('#group').val());
                upload_in_progress = true;
                deferred = $.ajax({
                    url: submit_url,
                    type: $('form#form-footer-links').attr('method'),
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
                $('form#form-footer-links').after('<iframe id="' + iframe_id + '" name="' + iframe_id + '" frameborder="0" width="0" height="0" src="about:blank" style="position:absolute;z-index:-1;"></iframe>');
                $('form#form-footer-links').append('<input type="hidden" name="temporary-iframe-id" value="' + iframe_id + '" />');
                $('form#form-footer-links').next().data('deferrer', deferred);//save the deferred object to the iframe
                $('form#form-footer-links').attr({
                    'method': 'POST', 'enctype': 'multipart/form-data',
                    'target': iframe_id, 'action': submit_url
                });

                $('form#form-footer-links').get(0).submit();

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
                    var oTable = $('#list_footer_links').dataTable();
                    $.getJSON('<?php echo get_template_directory_uri() ?>/admin/footer_links/action_read_links.php', {group: $('#group').val()}, function (json) {
                        oTable.fnClearTable();
                        if (json.aaData.length > 0) {
                            oTable.fnAddData(json.aaData);
                            oTable.fnDraw();
                        }
                        process = false;
                    });

                    $('#form_footer_links').modal('hide');
                }
                else {
                    alert(result.error);
                }

                clearformLinks();
            }).fail(function (res) {
                upload_in_progress = false;
                alert(res.error);
            });

            deferred.promise();
        });


        function clearform() {
            $('#form-group-footer-links input[type=text]').val('');
            $('#form-group-footer-links input[type=file]').val('');
            $('#form-group-footer-links input[type=hidden]').val('');
            $('#form-group-footer-links input[type=checkbox]:checked').prop('checked', false);
            $('#form-group-footer-links input[type=radio]:checked').prop('checked', false);
            $('#form-group-footer-links textarea').val('');
            $('form#form-group-footer-links').attr('action', '<?php echo get_template_directory_uri() ?>/admin/footer_links/action_add_group.php');
            $("form#form-group-footer-links")[0].reset();
            $('#loading').modal('hide');
        }

        function clearformLinks() {
            $('#form-footer-links input[type=text]').val('');
            $('#form-footer-links input[type=file]').val('');
            $('#form-footer-links input[type=hidden]').val('');
            $('#form-footer-links input[type=checkbox]:checked').prop('checked', false);
            $('#form-footer-links input[type=radio]:checked').prop('checked', false);
            $('#form-footer-links textarea').val('');
            $('form#form-footer-links').attr('action', '<?php echo get_template_directory_uri() ?>/admin/footer_links/action_add_links.php');
            $("form#form-footer-links")[0].reset();
            $('#loading').modal('hide');
        }

    });


    function EditLinks(id) {
        process = true;
        $('#form_footer_links').modal('show');
        $.ajax({
            url: '<?php echo get_template_directory_uri() ?>/admin/footer_links/action_edit_links.php',
            data: id,
            type: "POST",
            dataType: "json",
            success: function (data) {
                if (typeof data.error === 'undefined') {
                    $('#title_links').val(data.title);
                    $('#title_links_old').val(data.title);
                    $('#link_links').val(data.link);
                    $('#id_links').val(id.id);

                    $('form#form-footer-links').attr('action', '<?php echo get_template_directory_uri() ?>/admin/footer_links/action_update_links.php');
                }
            }
        });
    }

    function DeleteLinks(id) {
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
                                url: '<?php echo get_template_directory_uri() ?>/admin/footer_links/action_delete_links.php', // request ke file load_data.php
                                data: id,
                                type: "POST",
                                dataType: "json",
                                success: function (data) {
                                    if (typeof data.error === 'undefined') {
                                        var oTable = $('#list_footer_links').dataTable();
                                        $.getJSON('<?php echo get_template_directory_uri() ?>/admin/footer_links/action_read_links.php', {group: $('#group').val()}, function (json) {
                                            oTable.fnClearTable();
                                            if (json.aaData.length > 0) {
                                                oTable.fnAddData(json.aaData);
                                                oTable.fnDraw();
                                            }
                                            process = false;
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
</script>