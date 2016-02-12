<?php
add_action("admin_menu", "add_theme_menu_item");
function add_theme_menu_item()
{
    // add_submenu_page('themes.php',"Theme Options", "Theme Options", "manage_options", "theme-panel", "theme_settings_page", null, 99);
    add_menu_page('Theme page title', 'Corlate Theme', 'delete_pages', 'theme_settings_general', 'theme_settings_general', 'dashicons-format-image');
    add_submenu_page('theme_settings_general', 'General', 'General', 'delete_pages', 'theme_settings_general', 'theme_settings_general');
    add_submenu_page('theme_settings_general', 'Portfolio', 'Portfolio', 'delete_pages', 'theme_settings_portfolio', 'theme_settings_portfolio');
    add_submenu_page('theme_settings_general', 'Slider', 'Slider', 'delete_pages', 'theme_settings_slider', 'theme_settings_slider');
    add_submenu_page('theme_settings_general', 'Footer Links', 'Footer Links', 'delete_pages', 'theme_settings_footer_links', 'theme_settings_footer_links');
}

$my_corlate_admin_page = array(
    'theme_settings_general',
    'theme_settings_portfolio',
    'theme_settings_slider',
    'theme_settings_footer_links'
);


function corlate_activation($oldname, $oldtheme = false)
{
    global $wpdb;
    $sql_wp_corlate_portfolio = "
        CREATE TABLE IF NOT EXISTS `" . $wpdb->prefix . "wp_corlate_portfolio` (
            `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
            `name` varchar(255) NOT NULL,
            `published` tinyint(4) unsigned DEFAULT NULL,
            PRIMARY KEY (`id`),
            UNIQUE KEY `id` (`id`)
        ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";

    $sql_wp_corlate_portfolio_projects = "
        CREATE TABLE IF NOT EXISTS `" . $wpdb->prefix . "wp_corlate_portfolio_projects` (
            `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
            `portfolio_id` int(11) unsigned DEFAULT 0,
            `name` varchar(255) NOT NULL,
            `description` text,
            `image_url` text,
            `image_path` text,
            `image_type` text,
            `project_url` varchar(255) DEFAULT NULL,
            `open_new_tab` tinyint(4) unsigned DEFAULT 0,
            `published` tinyint(4) unsigned DEFAULT NULL,
            `category`  varchar(255) NOT NULL,
            PRIMARY KEY (`id`),
            UNIQUE KEY `id` (`id`)
        ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";

    $sql_wp_corlate_portfolio_images = "
        CREATE TABLE IF NOT EXISTS `" . $wpdb->prefix . "wp_corlate_portfolio_images` (
            `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
            `project_id` int(11) unsigned DEFAULT 0,
            `name` varchar(255) NOT NULL,
            `description` text,
            `image_url` text,
            `image_path` text,
            `image_type` text,
            `ordering` int(11) DEFAULT 0,
            `published` tinyint(4) unsigned DEFAULT NULL,
            PRIMARY KEY (`id`),
            UNIQUE KEY `id` (`id`)
        ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";


    $wpdb->query($sql_wp_corlate_portfolio);
    $portfolios = $wpdb->get_results("SELECT * FROM `" . $wpdb->prefix . "wp_corlate_portfolio`", object);
    if ($wpdb->num_rows <= 0) {
        $ret = $wpdb->insert(
            $wpdb->prefix . "wp_corlate_portfolio",
            array(
                'id' => 1,
                'name' => 'My Portfolio',
                'published' => 1
            ),
            array('%d', '%s', '%d')
        );
    }

    $wpdb->query($sql_wp_corlate_portfolio_projects);
    $projects = $wpdb->get_results("SELECT * FROM `" . $wpdb->prefix . "wp_corlate_portfolio_projects`", object);
    if ($wpdb->num_rows <= 0) {
        $ret = $wpdb->insert(
            $wpdb->prefix . "wp_corlate_portfolio_projects",
            array(
                'id' => 1,
                'portfolio_id' => 1,
                'name' => 'WP Corlate Themes',
                'description' => 'WP Corlate Themes is converted from Corlate Themes HTML, with some fiture included such as slider management for add slide and custom animation, portfolio management, and footer link management.',
                'image_url' => esc_url(get_template_directory_uri()) . '/images/portfolio/wp_corlate.jpg',
                'image_path' => '',
                'image_type' => 'image/jpeg',
                'project_url' => 'http://donywahyuisp.com',
                'open_new_tab' => 1,
                'category' => 'Template, Wordpress',
                'published' => 1
            ),
            array('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%s', '%d', '%s', '%d')
        );

        $ret = $wpdb->insert(
            $wpdb->prefix . "wp_corlate_portfolio_projects",
            array(
                'id' => 2,
                'portfolio_id' => 1,
                'name' => 'Kecik Framework',
                'description' => 'Kecik Framework is a PHP framework that is simple, lightweight and modular.',
                'image_url' => esc_url(get_template_directory_uri()) . '/images/portfolio/kecik_cover.jpg',
                'image_path' => '',
                'image_type' => 'image/jpeg',
                'project_url' => 'https://github.com/kecik-framework/kecik',
                'open_new_tab' => 1,
                'category' => 'PHP, Framework',
                'published' => 1
            ),
            array('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%s', '%d', '%s', '%d')
        );
    }

    $wpdb->query($sql_wp_corlate_portfolio_images);
    $projects = $wpdb->get_results("SELECT * FROM `" . $wpdb->prefix . "wp_corlate_portfolio_images`", object);
    if ($wpdb->num_rows <= 0) {
        $ret = $wpdb->insert(
            $wpdb->prefix . "wp_corlate_portfolio_images",
            array(
                'id' => 1,
                'project_id' => 1,
                'name' => 'General Settings',
                'description' => 'To perform general settings in corlate template',
                'image_url' => esc_url(get_template_directory_uri()) . '/images/portfolio/general.jpg',
                'image_path' => '',
                'image_type' => 'image/jpeg',
                'published' => 1,
                'ordering' => 1
            ),
            array('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%d')
        );

        $ret = $wpdb->insert(
            $wpdb->prefix . "wp_corlate_portfolio_images",
            array(
                'id' => 2,
                'project_id' => 1,
                'name' => 'Porfolio Settings',
                'description' => 'Portfolio Management',
                'image_url' => esc_url(get_template_directory_uri()) . '/images/portfolio/portfolio.jpg',
                'image_path' => '',
                'image_type' => 'image/jpeg',
                'published' => 1,
                'ordering' => 2
            ),
            array('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%d')
        );

        $ret = $wpdb->insert(
            $wpdb->prefix . "wp_corlate_portfolio_images",
            array(
                'id' => 3,
                'project_id' => 1,
                'name' => 'Portfolio Project Manegement',
                'description' => 'To perform Portfolio Projects',
                'image_url' => esc_url(get_template_directory_uri()) . '/images/portfolio/portfolio_project.jpg',
                'image_path' => '',
                'image_type' => 'image/jpeg',
                'published' => 1,
                'ordering' => 3
            ),
            array('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%d')
        );

        $ret = $wpdb->insert(
            $wpdb->prefix . "wp_corlate_portfolio_images",
            array(
                'id' => 4,
                'project_id' => 1,
                'name' => 'Image Gallery from Portfolio Projects',
                'description' => 'To manage images from Portfolio Projects',
                'image_url' => esc_url(get_template_directory_uri()) . '/images/portfolio/portfolio_project_images.jpg',
                'image_path' => '',
                'image_type' => 'image/jpeg',
                'published' => 1,
                'ordering' => 4
            ),
            array('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%d')
        );

        $ret = $wpdb->insert(
            $wpdb->prefix . "wp_corlate_portfolio_images",
            array(
                'id' => 5,
                'project_id' => 1,
                'name' => 'Portfolio View',
                'description' => 'Portfolio Display on the blog',
                'image_url' => esc_url(get_template_directory_uri()) . '/images/portfolio/portfolio_front.jpg',
                'image_path' => '',
                'image_type' => 'image/jpeg',
                'published' => 1,
                'ordering' => 5
            ),
            array('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%d')
        );

        $ret = $wpdb->insert(
            $wpdb->prefix . "wp_corlate_portfolio_images",
            array(
                'id' => 6,
                'project_id' => 1,
                'name' => 'Portfolio Project View',
                'description' => 'Portfolio Projects Display on the blog',
                'image_url' => esc_url(get_template_directory_uri()) . '/images/portfolio/portfolio_project_front.jpg',
                'image_path' => '',
                'image_type' => 'image/jpeg',
                'published' => 1,
                'ordering' => 6
            ),
            array('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%d')
        );

        $ret = $wpdb->insert(
            $wpdb->prefix . "wp_corlate_portfolio_images",
            array(
                'id' => 7,
                'project_id' => 1,
                'name' => 'Portfolio Project Images View',
                'description' => 'Portfolio Image Projects Display on the blog',
                'image_url' => esc_url(get_template_directory_uri()) . '/images/portfolio/portfolio_project_images_front.jpg',
                'image_path' => '',
                'image_type' => 'image/jpeg',
                'published' => 1,
                'ordering' => 7
            ),
            array('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%d')
        );

        $ret = $wpdb->insert(
            $wpdb->prefix . "wp_corlate_portfolio_images",
            array(
                'id' => 8,
                'project_id' => 1,
                'name' => 'Slider Management',
                'description' => 'For setting up a sliders',
                'image_url' => esc_url(get_template_directory_uri()) . '/images/portfolio/slider_management.jpg',
                'image_path' => '',
                'image_type' => 'image/jpeg',
                'published' => 1,
                'ordering' => 8
            ),
            array('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%d')
        );

        $ret = $wpdb->insert(
            $wpdb->prefix . "wp_corlate_portfolio_images",
            array(
                'id' => 9,
                'project_id' => 1,
                'name' => 'Slider Preview',
                'description' => 'Preview of Sliders',
                'image_url' => esc_url(get_template_directory_uri()) . '/images/portfolio/slider_preview.jpg',
                'image_path' => '',
                'image_type' => 'image/jpeg',
                'published' => 1,
                'ordering' => 9
            ),
            array('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%d')
        );

        $ret = $wpdb->insert(
            $wpdb->prefix . "wp_corlate_portfolio_images",
            array(
                'id' => 10,
                'project_id' => 1,
                'name' => 'Slider Animation Settings',
                'description' => 'For setting up an animation on a slide',
                'image_url' => esc_url(get_template_directory_uri()) . '/images/portfolio/slider_animation_settings.jpg',
                'image_path' => '',
                'image_type' => 'image/jpeg',
                'published' => 1,
                'ordering' => 10
            ),
            array('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%d')
        );

        $ret = $wpdb->insert(
            $wpdb->prefix . "wp_corlate_portfolio_images",
            array(
                'id' => 11,
                'project_id' => 1,
                'name' => 'Slider View',
                'description' => 'Slider display on the blog',
                'image_url' => esc_url(get_template_directory_uri()) . '/images/portfolio/slider_front.jpg',
                'image_path' => '',
                'image_type' => 'image/jpeg',
                'published' => 1,
                'ordering' => 11
            ),
            array('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%d')
        );

        $ret = $wpdb->insert(
            $wpdb->prefix . "wp_corlate_portfolio_images",
            array(
                'id' => 12,
                'project_id' => 1,
                'name' => 'Footer Links Management',
                'description' => 'For setting up footer links',
                'image_url' => esc_url(get_template_directory_uri()) . '/images/portfolio/footer_links.jpg',
                'image_path' => '',
                'image_type' => 'image/jpeg',
                'published' => 1,
                'ordering' => 12
            ),
            array('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%d')
        );

        $ret = $wpdb->insert(
            $wpdb->prefix . "wp_corlate_portfolio_images",
            array(
                'id' => 13,
                'project_id' => 1,
                'name' => 'Footer Links View',
                'description' => 'Display Footer Links on the blog',
                'image_url' => esc_url(get_template_directory_uri()) . '/images/portfolio/footer_links_front.jpg',
                'image_path' => '',
                'image_type' => 'image/jpeg',
                'published' => 1,
                'ordering' => 13
            ),
            array('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%d')
        );

        $ret = $wpdb->insert(
            $wpdb->prefix . "wp_corlate_portfolio_images",
            array(
                'id' => 14,
                'project_id' => 1,
                'name' => 'Insert Portfolio in Page',
                'description' => 'How to enter the portfolio on a Page',
                'image_url' => esc_url(get_template_directory_uri()) . '/images/portfolio/portfolio_button.jpg',
                'image_path' => '',
                'image_type' => 'image/jpeg',
                'published' => 1,
                'ordering' => 14
            ),
            array('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%d')
        );

        $ret = $wpdb->insert(
            $wpdb->prefix . "wp_corlate_portfolio_images",
            array(
                'id' => 15,
                'project_id' => 2,
                'name' => 'Kecik Framework Site',
                'description' => 'http://kecik-framework.com',
                'image_url' => esc_url(get_template_directory_uri()) . '/images/portfolio/kecik_framework_site.jpg',
                'image_path' => '',
                'image_type' => 'image/jpeg',
                'published' => 1,
                'ordering' => 1
            ),
            array('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%d')
        );

        $ret = $wpdb->insert(
            $wpdb->prefix . "wp_corlate_portfolio_images",
            array(
                'id' => 16,
                'project_id' => 2,
                'name' => 'Hello World',
                'description' => 'Hello World Code',
                'image_url' => esc_url(get_template_directory_uri()) . '/images/portfolio/code.jpg',
                'image_path' => '',
                'image_type' => 'image/jpeg',
                'published' => 1,
                'ordering' => 2
            ),
            array('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%d')
        );

        $ret = $wpdb->insert(
            $wpdb->prefix . "wp_corlate_portfolio_images",
            array(
                'id' => 17,
                'project_id' => 2,
                'name' => 'Kecik Framework Github',
                'description' => 'https://github.com/kecik-framework/kecik',
                'image_url' => esc_url(get_template_directory_uri()) . '/images/portfolio/github_kecik_framework.jpg',
                'image_path' => '',
                'image_type' => 'image/jpeg',
                'published' => 1,
                'ordering' => 3
            ),
            array('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%d')
        );

        $ret = $wpdb->insert(
            $wpdb->prefix . "wp_corlate_portfolio_images",
            array(
                'id' => 18,
                'project_id' => 2,
                'name' => 'Kecik Framework Skeleton',
                'description' => 'Skeleton for Kecik Framework',
                'image_url' => esc_url(get_template_directory_uri()) . '/images/portfolio/skeleton.jpg',
                'image_path' => '',
                'image_type' => 'image/jpeg',
                'published' => 1,
                'ordering' => 4
            ),
            array('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%d')
        );

        $ret = $wpdb->insert(
            $wpdb->prefix . "wp_corlate_portfolio_images",
            array(
                'id' => 19,
                'project_id' => 2,
                'name' => 'Corlate Template Kecik Framework Skeleton',
                'description' => 'Corlate template on Skeleton of Kecik Framework',
                'image_url' => esc_url(get_template_directory_uri()) . '/images/portfolio/corlate.jpg',
                'image_path' => '',
                'image_type' => 'image/jpeg',
                'published' => 1,
                'ordering' => 5
            ),
            array('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%d')
        );

        $ret = $wpdb->insert(
            $wpdb->prefix . "wp_corlate_portfolio_images",
            array(
                'id' => 20,
                'project_id' => 2,
                'name' => 'Margo Template Kecik Framework Skeleton',
                'description' => 'Margo template on Skeleton of Kecik Framework',
                'image_url' => esc_url(get_template_directory_uri()) . '/images/portfolio/margo.jpg',
                'image_path' => '',
                'image_type' => 'image/jpeg',
                'published' => 1,
                'ordering' => 6
            ),
            array('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%d')
        );

        $ret = $wpdb->insert(
            $wpdb->prefix . "wp_corlate_portfolio_images",
            array(
                'id' => 21,
                'project_id' => 2,
                'name' => 'SB-Admin Template Kecik Framework Skeleton',
                'description' => 'SB-Admin Template on Skeleton of Kecik Framework',
                'image_url' => esc_url(get_template_directory_uri()) . '/images/portfolio/sb-admin.jpg',
                'image_path' => '',
                'image_type' => 'image/jpeg',
                'published' => 1,
                'ordering' => 7
            ),
            array('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%d')
        );

        $ret = $wpdb->insert(
            $wpdb->prefix . "wp_corlate_portfolio_images",
            array(
                'id' => 22,
                'project_id' => 2,
                'name' => 'AdminLTE Template Kecik Framework Skeleton',
                'description' => 'AdminLTE Template on Skeleton of Kecik Framework',
                'image_url' => esc_url(get_template_directory_uri()) . '/images/portfolio/adminlte.jpg',
                'image_path' => '',
                'image_type' => 'image/jpeg',
                'published' => 1,
                'ordering' => 8
            ),
            array('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%d')
        );
    }

    $sliders = get_option('wp_corlate_slider');
    if (!is_array($sliders) || count($sliders) <= 0) {
        add_option('wp_corlate_slider', array(
            array(
                // Title
                'title' => "Lorem ipsum dolor sit amet consectetur adipisicing elit 1",
                'title_animation' => "fadeInUp",
                'title_duration' => 300,
                'title_delay' => 300,
                //Sub Title
                'sub_title' => "Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...",
                'sub_title_animation' => "fadeInUp",
                'sub_title_duration' => 300,
                'sub_title_delay' => 600,
                // Read More
                'read_more' => "http://donywahyuisp.com",
                'read_more_animation' => "fadeInUp",
                'read_more_duration' => 300,
                'read_more_delay' => 900,
                // Background
                'image1' => esc_url(get_template_directory_uri()) . '/images/slider/bg1.jpg',
                'image1_path' => '',
                'image1_animation' => "fadeIn",
                'image1_duration' => 300,
                'image1_delay' => 0,
                // Image Slider
                'image2' => esc_url(get_template_directory_uri()) . '/images/slider/img1.png',
                'image2_path' => '',
                'image2_animation' => "fadeInUp",
                'image2_duration' => 600,
                'image2_delay' => 1200,

                'show_on' => 'All',
                'published' => true
            ),
            array(
                // Title
                'title' => "Lorem ipsum dolor sit amet consectetur adipisicing elit 2",
                'title_animation' => "fadeInUp",
                'title_duration' => 300,
                'title_delay' => 300,
                //Sub Title
                'sub_title' => "Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...",
                'sub_title_animation' => "fadeInUp",
                'sub_title_duration' => 300,
                'sub_title_delay' => 600,
                // Read More
                'read_more' => "http://donywahyuisp.com",
                'read_more_animation' => "fadeInUp",
                'read_more_duration' => 300,
                'read_more_delay' => 900,
                // Background
                'image1' => esc_url(get_template_directory_uri()) . '/images/slider/bg2.jpg',
                'image1_path' => '',
                'image1_animation' => "fadeIn",
                'image1_duration' => 300,
                'image1_delay' => 0,
                // Image Slider
                'image2' => esc_url(get_template_directory_uri()) . '/images/slider/img2.png',
                'image2_path' => '',
                'image2_animation' => "fadeInUp",
                'image2_duration' => 600,
                'image2_delay' => 1200,

                'show_on' => 'All',
                'published' => true
            ),
            array(
                // Title
                'title' => "Lorem ipsum dolor sit amet consectetur adipisicing elit 3",
                'title_animation' => "fadeInUp",
                'title_duration' => 300,
                'title_delay' => 300,
                //Sub Title
                'sub_title' => "Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...",
                'sub_title_animation' => "fadeInUp",
                'sub_title_duration' => 300,
                'sub_title_delay' => 600,
                // Read More
                'read_more' => "http://donywahyuisp.com",
                'read_more_animation' => "fadeInUp",
                'read_more_duration' => 300,
                'read_more_delay' => 900,
                // Background
                'image1' => esc_url(get_template_directory_uri()) . '/images/slider/bg3.jpg',
                'image1_path' => '',
                'image1_animation' => "fadeIn",
                'image1_duration' => 300,
                'image1_delay' => 0,
                // Image Slider
                'image2' => esc_url(get_template_directory_uri()) . '/images/slider/img3.png',
                'image2_path' => '',
                'image2_animation' => "fadeInUp",
                'image2_duration' => 600,
                'image2_delay' => 1200,

                'show_on' => 'All',
                'published' => true
            )
        ));
    }

    $facebook = get_option('wp_corlate_facebook_url');
    if (empty($facebook)) add_option('wp_corlate_facebook_url', 'https://facebook.com/dnaextrim');
    $twitter = get_option('wp_corlate_twitter_url');
    if (empty($twitter)) add_option('wp_corlate_twitter_url', 'https://twitter.com/dnaextrim');
    $github = get_option('wp_corlate_github_url');
    if (empty($github)) add_option('wp_corlate_github_url', 'https://github.com/dnaextrim');


    $footer_links = get_option('wp_corlate_footer_links');
    if (!is_array($footer_links) || count($footer_links) <= 0) {
        add_option('wp_corlate_footer_links', array(
            'MY PORTFOLIO' => array(
                array(
                    'title' => 'Kecik Framework',
                    'link' => 'http://kecik-framework.com'
                ),
                array(
                    'title' => 'donywahyuisp.com',
                    'link' => 'http://donywahyuisp.com'
                ),
                array(
                    'title' => 'PHP ZKLib',
                    'link' => 'https://github.com/dnaextrim/php_zklib'
                ),
                array(
                    'title' => 'Python ZKLib',
                    'link' => 'https://github.com/dnaextrim/python_zklib'
                ),
            ),
            'MY SOCIAL' => array(
                array(
                    'title' => 'Facebook',
                    'link' => 'https://facebook.com/dnaextrim'
                ),
                array(
                    'title' => 'Twitter',
                    'link' => 'https://twitter.com/dnaextrim'
                ),
                array(
                    'title' => 'Google Plus',
                    'link' => 'https://plus.google.com/+DonyWahyuIsprananda'
                ),
                array(
                    'title' => 'Instagram',
                    'link' => 'https://instagram.com/dnaextrim'
                ),
                array(
                    'title' => 'Pixoto',
                    'link' => 'https://pixoto.com/dnaextrim'
                ),
            ),
            'MY COMMUNITY' => array(
                array(
                    'title' => 'PHP Palembang',
                    'link' => 'https://www.facebook.com/groups/1056016617797983'
                ),
                array(
                    'title' => 'PHP Indonesia',
                    'link' => 'https://www.facebook.com/groups/35688476100'
                ),
                array(
                    'title' => 'Kecik Framework',
                    'link' => 'https://www.facebook.com/groups/35688476100'
                ),
            )
        ));
    }
}

add_action("after_switch_theme", "corlate_activation", 10, 2);

function corlate_deactivation($newname, $newtheme)
{

}

add_action("switch_theme", "corlate_deactivation", 10, 2);

include_once("add_portfolio_button.php");

// if (isset($_GET['page']) && $_GET['page'] == 'theme_settings_general')
require("admin_general.php");

if (isset($_GET['page']) && $_GET['page'] == 'theme_settings_portfolio')
    require("portfolio/admin_portfolio.php");

// if (isset($_GET['page']) && $_GET['page'] == 'theme_settings_slider')
require("slider/admin_slider.php");

if (isset($_GET['page']) && $_GET['page'] == 'theme_settings_footer_links')
    require("footer_links/admin_footer_links.php");

require("admin_user.php");