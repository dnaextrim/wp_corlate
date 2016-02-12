<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wp_corlate
 */

get_header(); ?>

<section id="blog" class="container">
    <div class="center">
        <h2><?php bloginfo('name'); ?></h2>
        <p class="lead"><?php echo $description = get_bloginfo('description', 'display'); ?></p>
    </div>

    <div class="blog">
        <div class="row">
            <div class="col-md-8">
                <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', '_s'); ?></p>

                <!--<ul class="pagination pagination-lg">
                    <li><a href="#"><i class="fa fa-long-arrow-left"></i>Previous Page</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">Next Page<i class="fa fa-long-arrow-right"></i></a></li>
                </ul><!--/.pagination-->
            </div><!--/.col-md-8-->

            <aside class="col-md-4">
                <?php get_sidebar(); ?>
            </aside>
        </div><!--/.row-->
    </div>

</section>

<?php get_footer(); ?>
