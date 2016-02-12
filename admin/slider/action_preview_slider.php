<?php
require_once('../../../../../wp-load.php');

if (!is_user_logged_in()) {
    echo json_encode(array('error' => 'You Don\'t have authorized'));
    exit();
}

$sliders = get_option('wp_corlate_slider');
?>

<div class="carousel slide">
    <ol class="carousel-indicators">
        <li data-target="#main-slider" data-slide-to="0" class="active"></li>
        <?php for ($i = 1; $i < count($sliders); $i++) { ?>
            <li data-target="#main-slider" data-slide-to="<?php echo $i ?>"></li>
        <?php } ?>
    </ol>
    <div class="carousel-inner" style="height: 400px;">
        <?php
        foreach ($sliders as $key => $slider):
            $slider['title_animation'] = (!isset($slider['title_animation'])) ? 'fadeInUp' : $slider['title_animation'];
            $slider['title_duration'] = (!isset($slider['title_duration'])) ? 300 : $slider['title_duration'];
            $slider['title_delay'] = (!isset($slider['title_delay'])) ? 300 : $slider['title_delay'];

            $slider['sub_title_animation'] = (!isset($slider['sub_title_animation'])) ? 'fadeInUp' : $slider['sub_title_animation'];
            $slider['sub_title_duration'] = (!isset($slider['sub_title_duration'])) ? 300 : $slider['sub_title_duration'];
            $slider['sub_title_delay'] = (!isset($slider['sub_title_delay'])) ? 600 : $slider['sub_title_delay'];

            $slider['read_more_animation'] = (!isset($slider['read_more_animation'])) ? 'fadeInUp' : $slider['read_more_animation'];
            $slider['read_more_duration'] = (!isset($slider['read_more_duration'])) ? 300 : $slider['read_more_duration'];
            $slider['read_more_delay'] = (!isset($slider['read_more_delay'])) ? 900 : $slider['read_more_delay'];

            $slider['image1_animation'] = (!isset($slider['image1_animation'])) ? 'fadeInUp' : $slider['image1_animation'];
            $slider['image1_duration'] = (!isset($slider['image1_duration'])) ? 300 : $slider['image1_duration'];
            $slider['image1_delay'] = (!isset($slider['image1_delay'])) ? 0 : $slider['image1_delay'];

            $slider['image2_animation'] = (!isset($slider['image2_animation'])) ? 'fadeInUp' : $slider['image2_animation'];
            $slider['image2_duration'] = (!isset($slider['image2_duration'])) ? 300 : $slider['image2_duration'];
            $slider['image2_delay'] = (!isset($slider['image2_delay'])) ? 1200 : $slider['image2_delay'];

            ?>
            <div class="item <?php echo ($key == 0) ? 'active' : '' ?>" class="animation"
                 data-animation="<?php echo $slider['image1_animation'] ?>"
                 data-duration="<?php echo $slider['image1_duration'] ?>"
                 data-delay="<?php echo $slider['image1_delay'] ?>"
                 style="background-image: url(<?php echo $slider['image1']; ?>)">
                <div class="container" style="width: 100%;">
                    <div class="row slide-margin" style="width: 100%">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <?php
                                if (!empty($slider['title'])):
                                    ?>
                                    <h1 style="font-size: 18px; color: #FFFFFF;" class="animation"
                                        data-animation="<?php echo $slider['title_animation'] ?>"
                                        data-duration="<?php echo $slider['title_duration'] ?>"
                                        data-delay="<?php echo $slider['title_delay'] ?>"><?php echo $slider['title'] ?></h1>
                                    <?php
                                endif;
                                if (!empty($slider['sub_title'])):
                                    ?>
                                    <h2 style="font-size: 14px" class="animation"
                                        data-animation="<?php echo $slider['sub_title_animation'] ?>"
                                        data-duration="<?php echo $slider['sub_title_duration'] ?>"
                                        data-delay="<?php echo $slider['sub_title_delay'] ?>"><?php echo $slider['sub_title'] ?></h2>
                                    <?php
                                endif;
                                if (!empty($slider['read_more'])):
                                    ?>
                                    <a class="btn-slide animation" style="padding: 8px; font-size: 10px;"
                                       data-animation="<?php echo $slider['read_more_animation'] ?>"
                                       data-duration="<?php echo $slider['read_more_duration'] ?>"
                                       data-delay="<?php echo $slider['read_more_delay'] ?>"
                                       href="<?php echo $slider['read_more'] ?>">Read More</a>
                                    <?php
                                endif
                                ?>
                            </div>
                        </div>

                        <div class="col-sm-6 hidden-xs animation"
                             data-animation="<?php echo $slider['image2_animation'] ?>"
                             data-duration="<?php echo $slider['image2_duration'] ?>"
                             data-delay="<?php echo $slider['image2_delay'] ?>">
                            <div class="slider-img col-sm-12">
                                <img src="<?php echo $slider['image2'] ?>" class="img-responsive pull-right"
                                     style="height: 300px;">
                            </div>
                        </div>
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