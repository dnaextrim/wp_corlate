<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>
<article id="post-<?php the_ID(); ?>" class="blog-item <?php get_post_class() ?>">
    <div class="row"> 
        <div class="col-xs-12 col-sm-3 text-center">
            <div class="entry-meta">
                <span id="publish_date"><?php _s_posted_on(); ?></span>
                <span><i class="fa fa-user"></i> <a href="#"><?php echo get_the_author() ?></a></span>
                <span><i class="fa fa-comment"></i> <a href="#comments"><?php echo get_comments_number() ?> Comments</a></span>
            </div>
        </div>

        <div class="col-xs-12 col-sm-9 blog-content entry-content">
            <?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
            <?php 
            if ( has_post_thumbnail( get_the_ID()) ) {
            ?>
            <?php
                the_post_thumbnail('full', array(
                    'class' => "img-responsive img-blog hvr-rotate",
                    'style' => "margin-bottom:20px;"
                ));
            }
            ?>
            <h3 style="margin: 0px;">
				<?php
					
                    /*the_content( sprintf(
                        wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', '_s' ), array( 'span' => array( 'class' => array() ) ) ),
                        the_title( '<span class="screen-reader-text">"', '"</span>', false )
                    ) );*/
                    
                    $post = get_post();
                    $matches = null;
                    if (!preg_match('/\\[wp_corlate_portfolio id=[0-9]+\\]/', get_the_content(), $matches, PREG_OFFSET_CAPTURE)) {
                        echo substr(preg_replace("/\[caption .+?\[\/caption\]|\< *[img][^\>]*[.]*\>/i","",get_the_content(),1), 0, 200).'[...]';

                        wp_link_pages( array(
                            'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
                            'after'       => '</div>',
                            'link_before' => '<span>',
                            'link_after'  => '</span>',
                        ) );
                    }
                ?>
            </h3>
            <a class="btn btn-primary readmore" href="<?php echo esc_url( get_permalink() ) ?>">Read More <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</article><!--/.blog-item-->
