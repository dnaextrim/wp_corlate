<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_corlate
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?php echo esc_url(get_template_directory_uri()); ?>/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="<?php echo esc_url(get_template_directory_uri()); ?>/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="<?php echo esc_url(get_template_directory_uri()); ?>/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
          href="<?php echo esc_url(get_template_directory_uri()); ?>/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body <?php body_class('homepage'); ?>>
<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-xs-4">
                    <?php
                    $contact_support = get_option('wp_corlate_contact_support');
                    if (!empty($contact_support)):
                        ?>
                        <div class="top-number"><p><i class="fa fa-phone-square"></i> <?php echo $contact_support ?></p>
                        </div>
                    <?php endif ?>
                </div>

                <div class="col-sm-6 col-xs-8">
                    <div class="social">
                        <ul class="social-share">
                            <?php
                            $facebook = get_option('wp_corlate_facebook_url');
                            if (!empty($facebook)) {
                                ?>
                                <li><a target="_blank" href="<?php echo $facebook ?>"><i class="fa fa-facebook"></i></a>
                                </li>
                                <?php
                            }
                            $twitter = get_option('wp_corlate_twitter_url');
                            if (!empty($twitter)) {
                                ?>
                                <li><a target="_blank" href="<?php echo $twitter ?>"><i class="fa fa-twitter"></i></a>
                                </li>
                                <?php
                            }
                            $github = get_option('wp_corlate_github_url');
                            if (!empty($github)) {
                                ?>
                                <li><a target="_blank" href="<?php echo $github ?>"><i class="fa fa-github"></i></a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <div class="search">
                            <form role="search" method="get" id="searchform" class="searchform"
                                  action="<?php echo esc_url(home_url('/')); ?>">
                                <input type="text" name="s" id="s" class="search-form" autocomplete="off"
                                       placeholder="Search">
                                <i class="fa fa-search"></i>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </div><!--/.top-bar-->

    <?php require_once("menu.php"); ?>

</header><!--/header-->
