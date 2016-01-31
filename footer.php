<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_corlate
 */

?>
	
	<?php 
	$footer_links = get_option('wp_corlate_footer_links');
	?>
	<section id="bottom">
	    <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
	        <div class="row">
	        	<?php
	        	if (is_array($footer_links)):

	        		$groups = array_keys($footer_links);
	        		if (is_array($groups) && count($groups) > 0):
	        			foreach ($groups as $group):
	        			
	        	?>
	            <div class="col-md-3 col-sm-6">
	                <div class="widget">
	                    <h3><?php echo $group ?></h3>
		                    <?php 
		                    $links = $footer_links[$group];
		                    if (is_array($links) && count($links)):
		                    ?>
		                    <ul>
		                    	<?php
		                    	foreach ($links as $link):
		                    	?>
		                        <li><a target="_blank" href="<?php echo $link['link'] ?>"><?php echo $link['title'] ?></a></li>
		                    	<?php 
		                    	endforeach; 
		                    	?>
		                    </ul>
		                	<?php
		                	endif;
		                	?>
	                </div>
	            </div><!--/.col-md-3-->
				<?php 
						endforeach;
					endif;
				endif;
				?>
	        </div>
	    </div>
	</section><!--/#bottom-->

	<footer id="footer" class="midnight-blue" style="margin-top:0px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 <a target="_blank" href="<?php echo esc_url( __( 'https://donywahyuisp.com/', '_s' ) ); ?>" title="<?php printf( esc_html__( 'Proudly powered by %s', '_s' ), 'WordPress' ); ?>">DonyWahyuIsp.com</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="<?php echo esc_url(site_url()) ?>">Home</a></li>
                        <li><a href="<?php echo esc_url(site_url('about_us')) ?>">About Us</a></li>
                        <li><a href="<?php echo esc_url(site_url('faq')) ?>">Faq</a></li>
                        <li><a href="<?php echo esc_url(site_url('contact_us')) ?>">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
    
    <?php wp_footer(); ?>

</body>
</html>
