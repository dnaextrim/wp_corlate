jQuery(function ($) {
    'use strict',

        $('.dropdown').bind('click', function () {
            $(this).toggleClass('open');
        });

    //#main-slider
    $(function () {
        $('.carousel').carousel();

        /*$('#main-slider .carousel').carousel({
         interval: 8000
         });*/
    });

    function SlideAnimation(el) {
        var efek = $(el).data('animation');
        var duration = $(el).data('duration');
        var delay = $(el).data('delay');

        $(el).css({
            "-webkit-animation-duration": duration + "ms", "-webkit-animation-delay": delay + "ms",
            "-moz-animation-duration": duration + "ms", "-moz-animation-delay": delay + "ms",
            "-o-animation-duration": duration + "ms", "-o-animation-delay": delay + "ms",
            "-ms-animation-duration": duration + "ms", "-ms-animation-delay": delay + "ms",
            "animation-duration": duration + "ms", "animation-delay": delay + "ms"
        });
        $(el).removeClass('animated ' + efek).addClass('animated ' + efek).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
            $(this).removeClass('animated ' + efek);
        });
    };

    SlideAnimation('div.item.active');
    $('div.item.active .animation').each(function (index, el) {
        SlideAnimation(el);
    });

    $('#main-slider').bind('slid.bs.carousel', function () {
        SlideAnimation('div.item.active');
        $('div.item.active .animation').each(function (index, el) {
            SlideAnimation(el);
        });
    });

    /*$('#main-slider .next').bind("click", function() {
     $('div.item.active .animation').each(function(index, el) {
     SlideAnimation(el);
     });
     });

     $('#main-slider .prev').bind("click", function() {
     $('div.item.active .animation').each(function(index, el) {
     SlideAnimation(el);
     });
     });*/

    // accordian
    $('.accordion-toggle').on('click', function () {
        $(this).closest('.panel-group').children().each(function () {
            $(this).find('>.panel-heading').removeClass('active');
        });

        $(this).closest('.panel-heading').toggleClass('active');
    });

    //Initiat WOW JS
    new WOW().init();

    // portfolio filter
    $(window).load(function () {
        'use strict';
        var $portfolio_selectors = $('.portfolio-filter >li>a');
        var $portfolio = $('.portfolio-items');
        if ($.isFunction($().isotope)) {
            $portfolio.isotope({
                itemSelector: '.portfolio-item',
                layoutMode: 'fitRows'
            });

            $portfolio_selectors.on('click', function () {
                $portfolio_selectors.removeClass('active');
                $(this).addClass('active');
                var selector = $(this).attr('data-filter');
                $portfolio.isotope({filter: selector});
                return false;
            });
        }
    });

    // Contact form
    var form = $('#main-contact-form');
    form.submit(function (event) {
        event.preventDefault();
        var form_status = $('<div class="form_status"></div>');
        $.ajax({
            url: $(this).attr('action'),
            method: 'post',
            beforeSend: function () {
                form.prepend(form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Email is sending...</p>').fadeIn());
            }
        }).done(function (data) {
            form_status.html('<p class="text-success">' + data.message + '</p>').delay(3000).fadeOut();
        });
    });


    //goto top
    $('.gototop').click(function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $("body").offset().top
        }, 500);
    });

    //Pretty Photo
    if ($.isFunction($().prettyPhoto)) {
        $("a[rel^='prettyPhoto']").prettyPhoto({
            social_tools: false
        });
    }

    $('#portfolio_box').on('hidden.bs.modal', function (e) {
        $('#portfolio_project_name').html("");
        $('#portfolio_project_image').attr('src', "");
        $('#portfolio_project_description').html("");
        $('#portfolio_project_url').html("");
        $('#portfolio_project_images').html("");

        $('#portfolio_project_image').removeClass('animated bounceIn');
        $('#portfolio_project_description').removeClass('animated slideInRight');
        $('#portfolio_project_url').removeClass('animated slideInRight');
    });

    $('.btn_project').bind("click", function () {
        var project_id = $(this).data('id');
        $('#portfolio_loading').show();
        $('#portfolio_box').hide();

        $.ajax({
            url: $(this).data('read'),
            type: 'post',
            data: {project_id: project_id},
            dataType: 'json',
            success: function (data) {
                if (typeof data.error === 'undefined') {
                    $('#portfolio_project_image').addClass('animated bounceIn');
                    $('#portfolio_project_description').addClass('animated slideInRight');
                    $('#portfolio_project_url').addClass('animated slideInRight');

                    $('#portfolio_project_name').html(data.name);
                    $('#portfolio_project_image').attr('src', data.image_url);
                    $('#portfolio_project_description').html(data.description);
                    $('#portfolio_project_url').html(data.project_url);
                    $('#portfolio_project_images').html(data.images);

                    if ($.isFunction($().prettyPhoto)) {
                        $("a[rel^='prettyPhoto']").prettyPhoto({
                            social_tools: false
                        });
                    }

                    $('#portfolio_loading').hide();
                    $('#portfolio_box').show();

                }
            }
        })
    });
});