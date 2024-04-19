<?php
/**
 * Theme Name: Heera
 * Plugin URI:  http://solwinInfotech.com/
 * Description: This is header template page.
 * Version: 1.0
 * Author: Rajvi Madhani
 * Author URI: http://solwinInfotech.com
 * License: GPL
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js html-top">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php if (is_singular() && pings_open(get_queried_object())) : ?>
            <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php endif; ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="page" class="site-content header-fixed-top img-responsive">
            <div id="page-top" class="page-top"></div><!-- /.page-top -->
            <div id="top-contact" class="top-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-xs-12 pull-left"><?php dynamic_sidebar('headerleft'); ?></div>
                        <div class="col-sm-4 col-xs-12 pull-right"><?php dynamic_sidebar('headerright'); ?></div>
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /#top-contact -->
            <div id="site-banner" class="site-banner text-center">
                <div class="container">
                    <div class="site-logo">
                        <div class="site-branding">
                            <?php if (get_header_image()) : ?>
                                <?php
                                /**
                                 * Filter the default twentysixteen custom header sizes attribute.
                                 *
                                 * @since Twenty Sixteen 1.0
                                 *
                                 * @param string $custom_header_sizes sizes attribute
                                 * for Custom Header. Default '(max-width: 709px) 85vw,
                                 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
                                 */
                                $custom_header_sizes = apply_filters('twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px');
                                ?>
                                <div class="header-image">
                                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                        <img class="without_sticky" src="<?php header_image(); ?>" sizes="<?php echo esc_attr($custom_header_sizes); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" />
                                    </a>
                                </div>
                            <?php endif;
                            ?>
                        </div>
                    </div><!-- /.site-logo -->
                </div><!-- /.container -->
            </div><!-- /#site-banner -->
            <header id="main-menu" class="main-menu" role="banner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-xs-12">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </div>
                            <nav id="menu" class="menu collapse navbar-collapse">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'menu_class' => 'menu-list nav navbar-nav',
                                    'menu_id' => 'headernavigation',
                                ));
                                ?>
                            </nav><!-- .main-navigation -->
                        </div>
                        <div class="col-sm-5 col-xs-12">
                            <div class="menu-search pull-right">
                                <div class="search-form" role="search">
                                    <?php dynamic_sidebar('searchbar'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header><!-- .site-header -->

            <div id="content" class="site-content">
