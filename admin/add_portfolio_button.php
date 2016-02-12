<?php
function insert_portfolio_button()
{
    ?>
    <a href="#" id="add-portfolio_button" class="button"
       data-read="<?php echo get_template_directory_uri() ?>/admin/get_portfolio.php"><i class="fa fa-desktop"></i> Add
        Portfolio</a>
    <?php
}

add_action('media_buttons', 'insert_portfolio_button');

add_action("wp_enqueue_media", "insert_button_scripts");
function insert_button_scripts()
{
    wp_enqueue_style('corlate-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('corlate-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');

    // wp_enqueue_script('corlate-jquery', get_template_directory_uri().'/js/jquery.js');
    wp_enqueue_script('corlate-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('corlate-main', get_template_directory_uri() . '/js/portfolio_button.js', array(), false, true);
}
