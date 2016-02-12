<nav class="navbar navbar-inverse" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo get_site_url() ?>">
                <?php
                $logo = get_option('wp_corlate_logo');
                if (empty($logo))
                    $logo = esc_url(get_template_directory_uri()) . "/images/logo.png";
                ?>
                <img src="<?php echo $logo ?>" alt="logo">
            </a>
        </div>

        <?php
        wp_nav_menu(array(
            /*'menu'              => 'primary',
          'theme_location'    => 'primary',*/
            'depth' => 2,
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse navbar-right',
            'menu_class' => 'nav navbar-nav',
            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
            'walker' => new wp_bootstrap_navwalker()
        ));
        ?>

    </div>
    </div><!--/.container-->
</nav><!--/nav-->
