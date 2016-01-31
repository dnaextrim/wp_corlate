<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<div class="blog-item">
    <div class="row">
        <div class="col-xs-12 col-sm-3 text-center">
            <div class="entry-meta">
                <span id="publish_date"><?php _s_posted_on(); ?></span>
                <span><i class="fa fa-user"></i> <a href="#"><?php echo get_the_author() ?></a></span>
                <span><i class="fa fa-comment"></i> <a href="#comments"><?php echo get_comments_number() ?> Comments</a></span>
            </div>
        </div>

        <div class="col-xs-12 col-sm-9 blog-content">
			<?php
        	if ( has_post_thumbnail( get_the_ID()) ):
        	?>
            <a href="#"><img class="img-responsive img-blog" src="<?php echo esc_url( get_the_post_thumbnail() ); ?>" width="100%" alt="" /></a>
            <?php endif ?>
            <?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
            <h3>
				<?php the_excerpt(); ?>
            </h3>
        </div>
    </div>
</div><!--/.blog-item-->

