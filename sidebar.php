<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_corlate
 */
global $is_portfolio;
if ($is_portfolio)
    return true;

get_search_form() ?>

    <div class="widget categories">
        <h3>Recent Comments</h3>
        <div class="row">
            <div class="col-sm-12">
                <?php
                $recent_comments = get_comments(array(
                    'number' => 5,
                    'status' => 'approve'
                ));

                foreach ($recent_comments as $comment):
                    ?>

                    <div class="single_comments">
                        <?php echo get_avatar(get_comment_author_email($comment->comment_ID), 56); ?>
                        <p><?php echo substr($comment->comment_content, 0, 50) ?>...</p>
                        <div class="entry-meta small muted">
                            <span>By <a href="#"><?php echo $comment->comment_author ?></a></span>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div><!--/.recent comments-->


    <div class="widget categories">
        <h3>Categories</h3>
        <div class="row">
            <div class="col-sm-6">
                <ul class="blog_category">
                    <?php
                    $args = array(
                        'orderby' => 'name',
                        'order' => 'ASC'
                    );
                    $categories = get_categories($args);
                    foreach ($categories as $category):
                        ?>
                        <li>
                            <a href="<?php echo esc_url(get_category_link($category->term_id)) ?>"><?php echo $category->name ?>
                                <span class="badge"><?php echo $category->count ?></span></a></li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div><!--/.categories-->

    <div class="widget archieve">
        <h3>Archieve</h3>
        <div class="row">
            <div class="col-sm-12">
                <ul class="blog_archieve">
                    <?php
                    wp_get_archives(array(
                        'type' => 'monthly',
                        'show_post_count' => 1
                    ));
                    ?>
                    <!--<li><a href="#"><i class="fa fa-angle-double-right"></i> December 2013 <span class="pull-right">(97)</span></a></li>-->
                </ul>
            </div>
        </div>
    </div><!--/.archieve-->

    <div class="widget tags">
        <h3>Tag Cloud</h3>
        <ul class="tag-cloud">
            <?php
            $posttags = get_the_tags();
            if ($posttags) {
                foreach ($posttags as $tag) { ?>
                    <li><a class="btn btn-xs btn-primary"
                           href="<?php echo get_tag_link($tag->term_id) ?>"><?php echo $tag->name ?></a></li>
                    <?php
                }
            }
            ?>
        </ul>
    </div><!--/.tags-->

    <!--<div class="widget blog_gallery">
    <h3>Our Gallery</h3>
    <ul class="sidebar-gallery">
        <li><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/blog/gallery1.png" alt="" /></a></li>
        <li><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/blog/gallery2.png" alt="" /></a></li>
        <li><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/blog/gallery3.png" alt="" /></a></li>
        <li><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/blog/gallery4.png" alt="" /></a></li>
        <li><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/blog/gallery5.png" alt="" /></a></li>
        <li><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/blog/gallery6.png" alt="" /></a></li>
    </ul>
</div><!--/.blog_gallery-->

<?php dynamic_sidebar(); ?>