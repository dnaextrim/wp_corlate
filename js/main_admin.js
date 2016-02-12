function SlideAnimation(el, animation, duration, delay) {
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
};

jQuery(function ($) {

    $('#title_play').bind("click", function () {
        var animation = $('#title_animation').val();
        var duration = $('#title_duration').val();
        var delay = $('#title_delay').val();

        SlideAnimation('#title_animation_preview', animation, duration, delay);
    });

    $('#sub_title_play').bind("click", function () {
        var animation = $('#sub_title_animation').val();
        var duration = $('#sub_title_duration').val();
        var delay = $('#sub_title_delay').val();

        SlideAnimation('#sub_title_animation_preview', animation, duration, delay);
    });

    $('#read_more_play').bind("click", function () {
        var animation = $('#read_more_animation').val();
        var duration = $('#read_more_duration').val();
        var delay = $('#read_more_delay').val();

        SlideAnimation('#read_more_animation_preview', animation, duration, delay);
    });

    $('#image1_play').bind("click", function () {
        var animation = $('#image1_animation').val();
        var duration = $('#image1_duration').val();
        var delay = $('#image1_delay').val();

        SlideAnimation('#image1_animation_preview', animation, duration, delay);
    });

    $('#image2_play').bind("click", function () {
        var animation = $('#image2_animation').val();
        var duration = $('#image2_duration').val();
        var delay = $('#image2_delay').val();

        SlideAnimation('#image2_animation_preview', animation, duration, delay);
    });

});