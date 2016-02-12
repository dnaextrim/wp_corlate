<?php
$slider_show_on = get_option('wp_corlate_slider_show_on');

$slider_show = false;

if ($slider_show_on == 'All' || empty($slider_show_on)) $slider_show = true;
if ($slider_show_on == 'Home Only' && is_home()) $slider_show = true;
if ($slider_show_on == 'All Post' && is_single()) $slider_show = true;
if ($slider_show_on == 'All Page' && is_page()) $slider_show = true;
if ($slider_show_on == 'All Category' && is_category()) $slider_show = true;
if ($slider_show_on == 'All Tag' && is_tag()) $slider_show = true;


if ($slider_show):
    ?>
    <?php
    $sliders = get_option('wp_corlate_slider');

    if (is_array($sliders)):
        foreach ($sliders as $key => $slider) {
            if ($sliders[$key]['published'] === false)
                unset($sliders[$key]);

            if (is_home() && $sliders[$key]['show_on'] != 'All')
                unset($sliders[$key]);

            if (is_single() && $sliders[$key]['show_on'] != 'All' && $sliders[$key]['show_on'] != 'All Post')
                unset($sliders[$key]);

            if (is_page() && $sliders[$key]['show_on'] != 'All' && $sliders[$key]['show_on'] != 'All Page')
                unset($sliders[$key]);

            if (is_category() && $sliders[$key]['show_on'] != 'All' && $sliders[$key]['show_on'] != 'All Category')
                unset($sliders[$key]);

            if (is_tag() && $sliders[$key]['show_on'] != 'All' && $sliders[$key]['show_on'] != 'All Tag')
                unset($sliders[$key]);
        }

        $sliders = array_values($sliders);
        ?>
        <section id="main-slider" class="no-margin">
            <div class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                    <?php for ($i = 1; $i < count($sliders); $i++) { ?>
                        <li data-target="#main-slider" data-slide-to="<?php echo $i ?>"></li>
                    <?php } ?>
                </ol>
                <div class="carousel-inner">

                    <?php
                    foreach ($sliders as $key => $slider):
                        ?>
                        <div class="item <?php echo ($key == 0) ? 'active' : '' ?>" class="animation"
                             data-animation="<?php echo $slider['image1_animation'] ?>"
                             data-duration="<?php echo $slider['image1_duration'] ?>"
                             data-delay="<?php echo $slider['image1_delay'] ?>"
                             style="background-image: url(<?php echo $slider['image1']; ?>)">
                            <div class="container">
                                <div class="row slide-margin">
                                    <div class="col-sm-6">
                                        <div class="carousel-content">
                                            <?php
                                            if (!empty($slider['title'])):
                                                ?>
                                                <h1 class="animation"
                                                    data-animation="<?php echo $slider['title_animation'] ?>"
                                                    data-duration="<?php echo $slider['title_duration'] ?>"
                                                    data-delay="<?php echo $slider['title_delay'] ?>"><?php echo $slider['title'] ?></h1>
                                                <?php
                                            endif;
                                            if (!empty($slider['sub_title'])):
                                                ?>
                                                <h2 class="animation"
                                                    data-animation="<?php echo $slider['sub_title_animation'] ?>"
                                                    data-duration="<?php echo $slider['sub_title_duration'] ?>"
                                                    data-delay="<?php echo $slider['sub_title_delay'] ?>"><?php echo $slider['sub_title'] ?></h2>
                                                <?php
                                            endif;
                                            if (!empty($slider['read_more'])):
                                                ?>
                                                <a class="btn-slide animation"
                                                   data-animation="<?php echo $slider['read_more_animation'] ?>"
                                                   data-duration="<?php echo $slider['read_more_duration'] ?>"
                                                   data-delay="<?php echo $slider['read_more_delay'] ?>"
                                                   href="<?php echo $slider['read_more'] ?>">Read More</a>
                                                <?php
                                            endif
                                            ?>
                                        </div>
                                    </div>

                                    <?php if (!empty($slider['image2'])): ?>
                                        <div class="col-sm-6 hidden-xs animation"
                                             data-animation="<?php echo $slider['image2_animation'] ?>"
                                             data-duration="<?php echo $slider['image2_duration'] ?>"
                                             data-delay="<?php echo $slider['image2_delay'] ?>">
                                            <div class="slider-img">
                                                <img src="<?php echo $slider['image2']; ?>" class="img-responsive">
                                            </div>
                                        </div>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div><!--/.item-->
                    <?php endforeach ?>

                </div><!--/.carousel-inner-->
            </div><!--/.carousel-->
            <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
                <i class="fa fa-chevron-left"></i>
            </a>
            <a class="next hidden-xs" href="#main-slider" data-slide="next">
                <i class="fa fa-chevron-right"></i>
            </a>
        </section><!--/#main-slider-->
    <?php endif;
endif ?>