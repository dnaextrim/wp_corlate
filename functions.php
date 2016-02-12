<?php
/**
 * wp_corlate functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp_corlate
 */

if (!function_exists('corlate_setup')) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function corlate_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on corlate, use a find and replace
         * to change 'corlate' to the name of your theme in all the template files.
         */
        load_theme_textdomain('corlate', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Primary', 'corlate'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        /*
         * Enable support for Post Formats.
         * See https://developer.wordpress.org/themes/functionality/post-formats/
         */
        add_theme_support('post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('corlate_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
    }
} // corlate_setup

add_action('after_setup_theme', 'corlate_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function corlate_content_width()
{
    $GLOBALS['content_width'] = apply_filters('corlate_content_width', 640);
}

add_action('after_setup_theme', 'corlate_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function corlate_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'corlate'),
        'id' => 'sidebar-1',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget tags %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
}

add_action('widgets_init', 'corlate_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function corlate_scripts()
{
    $post = get_post();
    $matches = null;
    $is_portfolio = false;
    if (preg_match('/\\[wp_corlate_portfolio id=[0-9]+\\]/', $post->post_content, $matches, PREG_OFFSET_CAPTURE))
        $is_portfolio = true;

    wp_enqueue_style('corlate-style', get_stylesheet_uri());
    wp_enqueue_style('corlate-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('corlate-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('corlate-animate', get_template_directory_uri() . '/css/animate.min.css');
    wp_enqueue_style('corlate-prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css');
    wp_enqueue_style('corlate-main', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('corlate-responsive', get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('corlate-hover', get_template_directory_uri() . '/css/hover-min.css');

    wp_enqueue_script('corlate-jquery', get_template_directory_uri() . '/js/jquery.js');
    wp_enqueue_script('corlate-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script('corlate-prettyPhoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array(), false, true);
    if ($is_portfolio) {
        wp_enqueue_script('corlate-isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array(), false, true);
    }
    wp_enqueue_script('corlate-main', get_template_directory_uri() . '/js/main.js', array(), false, true);
    wp_enqueue_script('corlate-wow', get_template_directory_uri() . '/js/wow.min.js', array(), false, true);


    wp_enqueue_script('corlate-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true);

    wp_enqueue_script('corlate-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'corlate_scripts');

/**
 * Shortcode
 */
function corlate_portfolio($atts)
{
    global $wpdb;

    if (isset($atts['id']) && !empty($atts['id'])) {
        ob_start();
        include("template-parts/content-portfolio.php");
        return ob_get_clean();
    }
}

add_shortcode('wp_corlate_portfolio', 'corlate_portfolio');

/*function wp_corlate_detect_shortcode()
{
    global $post;
    $pattern = get_shortcode_regex();

    print_r($pattern);
    if (   preg_match_all( '/'. $pattern .'/s', $post->post_content, $matches )
        && array_key_exists( 2, $matches )
        && in_array( '[wp_corlate_portfolio]', $matches[2] ) )
    {
        echo 'Test';
    }
}
add_action( 'wp', 'wp_corlate_detect_shortcode' );*/


function thumbnail_share()
{
    global $post;
    if (!is_singular()) //if it is not a post or a page
        return;
    if (!has_post_thumbnail($post->ID)) { //the post does not have featured image, use a default image
        $default_image = get_option('wp_corlate_logo'); //replace this with a default image on your server or an image in your media library
        if (empty($default_image))
            $default_image = esc_url(get_template_directory_uri()) . "/images/logo.png";
        echo '<meta property="og:image" content="' . $default_image . '" />';
    } else {
        $thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
        echo '<meta property="og:image" content="' . esc_url($thumbnail_src[0]) . '" />';
    }
    echo "
";
}

// add_action( 'wp_head', 'thumbnail_share', 1 );

/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

require get_template_directory() . '/inc/menu_bootstrap.php';

if (is_admin())
    require get_template_directory() . '/admin/init.php';