<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_corlate
 */

get_header(); ?>

<?php
if (get_option('wp_corlate_enable_slider') == true)
    include("slider.php");

$post = get_post();
$matches = null;
$is_portfolio = false;
if (preg_match('/\\[wp_corlate_portfolio id=[0-9]+\\]/', $post->post_content, $matches, PREG_OFFSET_CAPTURE))
    $is_portfolio = true;
?>

<section id="blog" class="container">
    <?php if (!$is_portfolio): ?>
        <div class="center">
            <h2><?php bloginfo('name'); ?></h2>
            <p class="lead"><?php echo $description = get_bloginfo('description', 'display'); ?></p>
        </div>
    <?php endif ?>
    <div class="blog">
        <div class="row">
            <div class="col-md-8">

                <?php while (have_posts()) : the_post(); ?>

                    <?php get_template_part('template-parts/content', 'page'); ?>

                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    ?>

                <?php endwhile; // End of the loop. ?>

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
