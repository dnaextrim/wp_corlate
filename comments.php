<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_corlate
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php // You can start editing here -- including this comment! ?>

    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            printf( // WPCS: XSS OK.
                esc_html(_nx('One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', '_s')),
                number_format_i18n(get_comments_number()),
                '<span>' . get_the_title() . '</span>'
            );
            ?>
        </h2>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // Are there comments to navigate through? ?>
            <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php esc_html_e('Comment navigation', '_s'); ?></h2>
                <div class="nav-links">

                    <div class="nav-previous"><?php previous_comments_link(esc_html__('Older Comments', '_s')); ?></div>
                    <div class="nav-next"><?php next_comments_link(esc_html__('Newer Comments', '_s')); ?></div>

                </div><!-- .nav-links -->
            </nav><!-- #comment-nav-above -->
        <?php endif; // Check for comment navigation. ?>

        <!--<ol class="comment-list">
			<?php
        /*wp_list_comments( array(
            'style'      => 'ol',
            'short_ping' => true,
        ) );*/
        ?>
		</ol><!-- .comment-list -->

        <h1 id="comments_title"><?php echo get_comments_number() ?> Comments</h1>
        <?php
        $comments = get_comments(array(
            // 'number'    => 5,
            'status' => 'approve',
            'post_id' => get_the_ID()
        ));

        foreach ($comments as $comment):
            ?>
            <div class="media comment_section">
                <div class="pull-left post_comments">
                    <a href="#">
                        <?php echo get_avatar(get_comment_author_email($comment->comment_ID), 128, null, null, array('class' => 'img-circle')); ?>
                    </a>
                </div>
                <div class="media-body post_reply_comments">
                    <h3><?php echo $comment->comment_author ?></h3>
                    <h4><?php echo date("M d, Y \A\T H:i:s", strtotime($comment->comment_date)) ?></h4>
                    <p><?php echo $comment->comment_content ?></p>
                    <!--<a href="#">Reply</a>-->
                </div>
            </div>
        <?php endforeach ?>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // Are there comments to navigate through? ?>
            <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php esc_html_e('Comment navigation', '_s'); ?></h2>
                <div class="nav-links">

                    <div class="nav-previous"><?php previous_comments_link(esc_html__('Older Comments', '_s')); ?></div>
                    <div class="nav-next"><?php next_comments_link(esc_html__('Newer Comments', '_s')); ?></div>

                </div><!-- .nav-links -->
            </nav><!-- #comment-nav-below -->
        <?php endif; // Check for comment navigation. ?>

    <?php endif; // Check for have_comments(). ?>

    <?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
        ?>
        <p class="no-comments"><?php esc_html_e('Comments are closed.', '_s'); ?></p>
    <?php endif; ?>

</div><!-- #comments -->

<div id="contact-page clearfix">
    <div class="status alert alert-success" style="display: none"></div>
    <div class="message_heading">
        <h4>Leave a Replay</h4>
        <p>Make sure you enter the(*)required information where indicate.HTML code is not allowed</p>
        <p class="comment-notes"></p>
    </div>

    <form id="commentform" class="contact-form" novalidate name="contact-form" method="post"
          action="<?php echo esc_url(get_site_url() . '/wp-comments-post.php') ?>">
        <div class="row">
            <div class="col-sm-5">
                <div class="form-group">
                    <label><?php echo __('Your Name') ?> *</label>
                    <input type="text" id="author" name="author" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label><?php echo __('Your Email') ?> *</label>
                    <input type="email" id="email" name="email" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label><?php echo __('Your Website') ?></label>
                    <input type="url" id="url" name="url" class="form-control">
                </div>

                <?php
                do_action('comment_form_before_fields');
                foreach ((array)$args['fields'] as $name => $field) {
                    /**
                     * Filter a comment form field for display.
                     *
                     * The dynamic portion of the filter hook, `$name`, refers to the name
                     * of the comment form field. Such as 'author', 'email', or 'url'.
                     *
                     * @since 3.0.0
                     *
                     * @param string $field The HTML-formatted output of the comment form field.
                     */
                    echo apply_filters("comment_form_field_{$name}", $field) . "\n";
                }
                /**
                 * Fires after the comment fields in the comment form.
                 *
                 * @since 3.0.0
                 */
                do_action('comment_form_after_fields');
                ?>

            </div>
            <div class="col-sm-7">
                <div class="form-group">
                    <label><?php echo __('Your Comments') ?> *</label>
                    <textarea name="comment" id="comment" required="required" class="form-control" rows="8"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" id="submit" name="submmit" class="btn btn-primary btn-lg" required="required">
                        Post Comment
                    </button>
                    <input type="hidden" id="comment_post_ID" name="comment_post_ID" value="<?php the_ID() ?>">
                    <input type="hidden" id="comment_parent" name="comment_parent" value="0">
                </div>
            </div>
        </div>
    </form>
</div><!--/#contact-page-->