<?php
/**
* Template Name:Full_Width_page
* Theme Name: Heera
* Plugin URI:  http://solwinInfotech.com/
* Version: 1.0
* Author: Rajvi Madhani
* Author URI: http://solwinInfotech.com
* License: GPL
*/

get_header();
?>
<div id="primary" class="site-content">
    <main id="main" class="site-main" role="main">
        <div id="main-slider" class="main-slider carousel slide text-lowercase" data-ride="carousel">
            <!-- Wrapper for slides -->
            <?php dynamic_sidebar('slider'); ?>
            <!-- Controls -->
        </div><!-- /#main-slider -->
        <div id="about" class="about">
            <div class="container">
                <div class="about-area row">
                    <div class="title-area text-center">
                        <h2 class="about-title"><?php echo of_get_option('about_title'); ?></h2>
                        <p class="title-description"><?php echo of_get_option('about_subtitle'); ?></p>
                    </div><!-- /.title-area -->
                    <div class="about-items"><?php dynamic_sidebar('about_us_desc'); ?></div>
                </div>
            </div>
        </div>
        <div id="portfolio" class="portfolio text-center">
            <div class="container">
                <div class="portfolio-area row">
                    <div class="portfolio-top">
                        <h2 class="portfolio-title"><?php echo of_get_option('portfolio_title'); ?></h2>
                        <p class="title-description"><?php echo of_get_option('portfolio_discription'); ?></p>
                        <div class="slide-nav-container">
                            <a class="slide-nav left slide-left post-prev" data-slide="post-prev"><i class="fa fa-angle-left"></i></a>
                            <a class="slide-nav right slide-right post-next" data-slide="post-next"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div><!-- /.portfolio-top -->
                    <?php dynamic_sidebar('image_gallary'); ?>
                </div><!-- /.portfolio-area -->
            </div><!-- /.container -->
        </div><!-- /#portfolio -->
        <div id="services" class="services">
            <div class="container">
                <div class="service-area">
                    <div class="row">
                        <div class="service-items">
                            <div class="col-sm-6 col-xs-12"><?php dynamic_sidebar('details'); ?></div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="service-accordion"><?php dynamic_sidebar('accordion'); ?></div><!-- /.service-accordion -->
                            </div>
                        </div><!-- /.service-items -->
                    </div><!-- /.row -->
                </div><!-- /.service-area -->
            </div><!-- /.container -->
        </div><!-- /#services -->
        <div id="blog">
            <div id="latest-post" class="latest-post">
                <div class="container">
                    <div class="post-area row">
                        <div class="post-area-top text-center">
                            <h2 class="post-area-title"><?php echo of_get_option('post_title'); ?></h2>
                            <p class="title-description"><?php echo of_get_option('post_discription'); ?></p>
                        </div><!-- /.post-area-top -->
                        <div class="row">
                            <div class="latest-posts">
                                <?php
                                // Display blog posts on any page @ http://m0n.co/l
                                $temp = $wp_query;
                                $wp_query = null;
                                $wp_query = new WP_Query();
                                $wp_query->query('showposts=2' . '&paged=' . $paged);
                                while ($wp_query->have_posts()) : $wp_query->the_post();
                                    ?>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="item">
                                            <article class="post type-post">
                                                <div class="post-top">
                                                    <div class="post-thumbnail"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a></div>
                                                    <div class="post-meta">
                                                        <div class="entry-meta">
                                                            <span class="entry-date"><?php the_time('j M Y'); ?></span>
                                                            <span><a href="#Author"><?php the_author(''); ?></a></span>
                                                            <span><?php the_category(', '); ?> </span>
                                                        </div><!-- /.entry-meta -->
                                                    </div><!-- /.post-meta -->
                                                </div><!-- /.post-top -->
                                                <div class="post-content">
                                                    <h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                                                                                                        <br/>
                                                    <a class="btn" href="<?php the_permalink() ?>"><i class="fa fa-arrow-circle-right"></i>Read More</a>
                                                </div><!-- /.post-content -->
                                            </article>
                                        </div><!-- /.item -->
                                    </div>
                                <?php endwhile; ?>
                            </div><!-- /.latest-posts -->
                        </div><!-- /.row -->

                    </div><!-- /.post-area -->
                </div><!-- /.container -->
            </div><!-- /#latest-post -->
        </div>
        <div id="contact" class="contact">
            <div class="contact-area">
                <div id="subscribe-section" class="subscribe-section text-center">
                    <div class="container">
                        <div class="news-letter row" method="post">
                            <p class="alert-success"></p>
                            <p class="alert-warning"></p>
                            <div class="subscribe-hide"><?php dynamic_sidebar('subscribe'); ?><div class="subscribe-error"></div></div><!-- /.subscribe-hide -->
                            <div class="subscribe-message"></div>
                        </div><!-- /.news-letter -->
                    </div><!-- /.container -->
                </div><!-- /#subscribe-section -->
                <!-- Google Map Section -->
               <div class="container">
                        <div class="row"> <div id="googleMaps" class="google-map-container" style="position: relative; background-color: rgb(229, 227, 223); overflow: hidden;">
                    <iframe src="http://maps.google.co.in/maps?f=q&source=s_q&hl=en&geocode=&q=(905)+488+0234,102%2F101+Matheson+Blvd.+E,Mississauga,+ON,L4Z+2G7&aq=&sll=21.167124,72.822189&sspn=0.34193,0.441513&ie=UTF8&hq=(905)+488+0234&hnear=100+Matheson+Blvd+E,+Mississauga,+Ontario+L4Z+2G7,+Canada&t=m&ll=43.621889,-79.666996& z=10&iwloc=near&spn=0.006295,0.006295&output=embed" marginwidth="0" marginheight="0" scrolling="no">
                    </iframe>
                </div></div></div>
                <!-- Google Map Section End -->


        <div id="contact" class="contact text-center">
                <div id="message-details" class="msg">
                    <div class="container">
<div class="contact-area row">
<h2 class="portfolio-title"  style='padding-bottom:20px;'><?php echo "Contact Us"; ?></h2> 
</div>
                        <div class="row">
<?php echo do_shortcode("[contact-form-7 id='25' title='Contact form 1']"); ?></div>
                    </div><!-- /.container -->
                </div><!-- /.message-details --></div>
            </div><!-- /.contact-area -->
        </div><!-- /#contact -->
    </main>
</div>
<?php
get_footer();
