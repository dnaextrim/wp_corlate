<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
    <div class="center">
        <h2><?php bloginfo('name'); ?></h2>
        <p class="lead"><?php echo $description = get_bloginfo('description', 'display'); ?></p>
    </div>

    <div class="blog">
        <div class="row">
            <div class="col-md-8">
                <?php while (have_posts()) : the_post(); ?>

                    <?php get_template_part('template-parts/content', 'single'); ?>

                    <?php the_post_navigation(); ?>

                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    ?>

                <?php endwhile; // End of the loop. ?>

            </div><!--/.col-md-8-->

            <aside class="col-md-4">
                <?php get_sidebar(); ?>


            </aside>
        </div><!--/.row-->
    </div>

</section>

<?php get_footer(); ?>
