<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_corlate
 */

get_header(); ?>

<?php
if (get_option('wp_corlate_enable_slider') == TRUE)
    include("slider.php")
?>

<section id="blog" class="container">
    <div class="center">
        <h2><?php bloginfo('name'); ?></h2>
        <p class="lead"><?php echo $description = get_bloginfo('description', 'display'); ?></p>
    </div>

    <div class="blog">
        <div class="row">
            <div class="col-md-8">
                <?php if (have_posts()) : ?>

                    <?php if (is_home() && !is_front_page()) : ?>
                        <header>
                            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                        </header>
                    <?php endif; ?>

                    <?php /* Start the Loop */ ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <?php

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part('template-parts/content', get_post_format());
                        ?>

                    <?php endwhile; ?>

                    <?php the_posts_navigation(); ?>

                <?php else : ?>

                    <?php get_template_part('template-parts/content', 'none'); ?>

                <?php endif; ?>
                <!--
                <ul class="pagination pagination-lg">
                    <li><a href="#"><i class="fa fa-long-arrow-left"></i>Previous Page</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">Next Page<i class="fa fa-long-arrow-right"></i></a></li>
                </ul>
                <!-- /.pagination -->
            </div>
            <!-- /.col-md-8 -->

            <aside class="col-md-4">
                <?php get_sidebar(); ?>
            </aside>
        </div>
        <!-- /.row -->
    </div>

</section>


<?php get_footer(); ?>
