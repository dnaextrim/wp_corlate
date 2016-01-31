<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */
global $is_portfolio;
if ($is_portfolio) {
    the_content();
    return true;
}
?>
<div class="blog-item">
    
    <div class="row">  
        <div class="col-xs-12 col-sm-3 text-center">
            <div class="entry-meta">
                <span id="publish_date"><?php _s_posted_on(); ?></span>
                <span><i class="fa fa-user"></i> <a href="#"> <?php echo get_the_author() ?></a></span>
                <span><i class="fa fa-comment"></i> <a href="#comments"><?php echo get_comments_number() ?> Comments</a></span>
            </div>
        </div>
        <div class="col-xs-12 col-sm-9 blog-content">
        	<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
            <?php
            if ( has_post_thumbnail( get_the_ID()) ) {
                the_post_thumbnail('full', array(
                    'class' => "img-responsive img-blog",
                    'alt' => get_the_title()
                ));
            }
            ?>
    
            <p>
            	<?php the_content(); ?>

            	<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
						'after'  => '</div>',
					) );
				?>
            </p>

            <div class="post-tags">
                <strong>Tag:</strong> 
				<?php
				$posttags = get_the_tags();
				$tags = array();
				if ($posttags) {
				  	foreach($posttags as $tag) {
				    	$tags[] = '<a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a>';
					}
				}
				?>
                <?php echo implode('/', $tags) ?>
            </div>
			
            <footer class="entry-footer">
                <?php
                    function custom_edit_post_link($output) {

                        return $output = str_replace(array(
                            '">',
                            'class="post-edit-link"'
                        ), 
                        array(
                            '"><i class="fa fa-pencil"></i> ',
                            'class="post-edit-link btn btn-warning"'
                        ), 
                        $output);
                    }
                    add_filter('edit_post_link', 'custom_edit_post_link');

                    edit_post_link(
                        sprintf(
                            /* translators: %s: Name of current post */
                            esc_html__( 'Edit %s', '_s' ),
                            the_title( '<span class="screen-reader-text">"', '"</span>', false )
                        )
                    );
                ?>
            </footer><!-- .entry-footer -->

        </div>
    </div>
</div><!--/.blog-item-->

<div class="media reply_section">
    <div class="pull-left post_reply text-center">
        <a href="#">
        	<?php echo get_avatar( get_the_author_meta( 'ID' ), 128, null, null, array('class'=>'img-circle')); ?>
        </a>
        <ul>
            <?php 
            $facebook = get_the_author_meta('wp_corlate_facebook');
            if ( !empty($facebook)) { ?>
            <li><a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <?php  
            } 
            $twitter = get_the_author_meta('wp_corlate_twitter');
            if (!empty($twitter)) {
            ?>
            <li><a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <?php
            }
            $gplus = get_the_author_meta('wp_corlate_gplus');
            if (!empty($gplus)) {
            ?>
            <li><a href="<?php echo $gplus; ?>" target="_blank"><i class="fa fa-google-plus"></i> </a></li>
            <?php
            }
            $github = get_the_author_meta('wp_corlate_github');
            if (!empty($github)) {
            ?>
            <li><a href="<?php echo $github; ?>" target="_blank"><i class="fa fa-github"></i> </a></li>
            <?php
            }
            ?>
        </ul>
    </div>
    <div class="media-body post_reply_content">
        <h3><?php echo get_the_author() ?></h3>
        <p class="lead"><?php echo get_the_author_meta( 'description' ) ?></p>
        <p><strong>Web:</strong> <a href="<?php echo get_the_author_meta( 'url' ) ?>"><?php echo get_the_author_meta( 'url' ) ?></a></p>
        <br />
    </div>
</div> 
<br />
<?php //_s_entry_footer(); ?>