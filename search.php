<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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

                <?php if (have_posts()) : ?>

                    <header class="page-header">
                        <h1 class="page-title"><?php printf(esc_html__('Search Results for: %s', '_s'), '<span>' . get_search_query() . '</span>'); ?></h1>
                    </header><!-- .page-header -->

                    <?php /* Start the Loop */ ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <?php
                        /**
                         * Run the loop for the search to output the results.
                         * If you want to overload this in a child theme then include a file
                         * called content-search.php and that will be used instead.
                         */
                        get_template_part('template-parts/content', 'search');
                        ?>

                    <?php endwhile; ?>

                    <?php the_posts_navigation(); ?>

                <?php else : ?>

                    <?php //get_template_part( 'template-parts/content', 'none' ); ?>

                <?php endif; ?>

                <?php while (have_posts()) : the_post(); ?>

                    <?php //get_template_part( 'template-parts/content', 'page' ); ?>

                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    /*if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;*/
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
