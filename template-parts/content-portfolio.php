<?php
$portfolio = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM ".$wpdb->prefix."wp_corlate_portfolio WHERE id = %d AND published=1", $atts['id'] ) );

if ( isset($portfolio->id) ) {
    $projects = $wpdb->get_results( $wpdb->prepare("SELECT * FROM `". $wpdb->prefix . "wp_corlate_portfolio_projects` WHERE portfolio_id=%d AND published=1", $portfolio->id ), object );
    $category = array();
    foreach ($projects as $project) {
        if (!empty($project->category))
            $category = array_merge( $category, explode(',', str_replace(array('  ', ', '), array(' ', ','), strtolower($project->category))));
    }
    $category = array_unique($category);
    sort($category);
    ?>
    <section id="portfolio">
        <div class="container">
            <div class="center">
               <h2><?php echo $portfolio->name ?></h2>
               <!-- <p class="lead"><?php echo $portfolio->description ?></p> -->
            </div>

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
                <?php foreach ($category as $key => $value): ?>
                <li><a class="btn btn-default" href="#" data-filter=".<?php echo strtolower($value) ?>"><?php echo $value ?></a></li>
                <?php endforeach ?>
            </ul><!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">
                    <?php
                    reset($projects);
                    foreach ($projects as $project):
                       
                        $project_category = explode(',', strtolower($project->category));
                        
                        if (is_array($project_category))
                            $project_category = implode(' ', $project_category);
                    ?>
                    
                        <div class="portfolio-item <?php echo $project_category ?> col-xs-12 col-sm-4 col-md-3">
                            <div class="recent-work-wrap">
                                <div style="height: 200px; overflow: hidden">
                                    <img class="img-responsive" src="<?php echo $project->image_url ?>" style="height: 100%; width: 100%;" alt="">
                                </div>
                                <div class="overlay">
                                    <div class="recent-work-inner">
                                        <h3><a><?php echo $project->name ?></a></h3>
                                        <p><?php echo substr(strip_tags($project->description), 0, 30); ?>...</p>
                                        <button type="button" class="btn_project btn btn-sm" data-read="<?php echo esc_url( get_template_directory_uri() ); ?>/get_project.php" data-id="<?php echo $project->id ?>" data-toggle="modal" data-target="#portfolio_project"><i class="fa fa-eye"></i> View</button>
                                        <!--<a class="preview" href="<?php echo $project->image_url ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>-->
                                    </div> 
                                </div>
                            </div>
                        </div><!--/.portfolio-item-->
                    <?php endforeach ?>
                </div><!--/.portfolio-items-->
            </div>

        </div>
    </section><!--/#portfolio-item-->


    <div id="portfolio_project" class="modal modal-project fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">       
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="portfolio_project_name" id="myModalLabel">MY PROJECT</h3>
                </div>
                
                <div class="modal-body" style="height: 80%; overflow-x:hidden">
                    <div id="portfolio_loading">
                        <i class="fa fa-spinner fa-pulse fa-5x"></i> Please wait....
                    </div>
                    
                    <div id="portfolio_box" style="display: none">
                        <div class="row" style="height: 250px">
                            <div class="col-md-4 img-thumbnail" style="height:95%; overflow: hidden;">
                                <div class="hvr-grow">
                                    <img id="portfolio_project_image" class="img-responsive" src="" height="100%" width="100%" />
                                </div>
                            </div>
                            <div class="col-md-8" style="height: 100%; overflow-y: auto; overflow-x: hidden">
                                <div id="portfolio_project_description"></div>
                                <div id="portfolio_project_url"></div>
                            </div>

                            <hr />
                            <strong>Image Gallery</strong>
                            <br />
                            <div class="col-md-12" style="height: 50%; overflow-y: auto;">
                                <div id="portfolio_project_images"  ></div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
