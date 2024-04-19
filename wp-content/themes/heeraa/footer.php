<?php
/**
* Theme Name: Heera
* Plugin URI:  http://solwinInfotech.com/
* Description: this is footer template page.
* Version: 1.0
* Author: Rajvi Madhani
* Author URI: http://solwinInfotech.com
* License: GPL
*/
?>
</div><!-- .site-content -->
<footer id="colophon" class="" role="contentinfo">
    <div id="footer-top" class="footer-top">
        <div class="container">
            <div class="row">
                <div id="tweet" class="tweet text-left">
                    <div class="col-xs-12 col-sm-4">
                        <?php dynamic_sidebar('left_content'); ?>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <?php dynamic_sidebar('center_content'); ?>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <?php dynamic_sidebar('right_content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer-bottom" class="footer-bottom text-center">
        <div class="container">
            <div class="site-info">
                <span class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></span>
                <?php echo of_get_option('info'); ?>
                <span class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name', printf(__('Theme '))); ?></a></span>

            </div><!-- .site-info -->
        </div>
    </div>
</footer><!-- .site-footer -->

</div><!-- .site-inner -->

<div id="scroll-to-top" class="scroll-to-top" style="display: block;">
    <span>
        <i class="fa fa-chevron-up"></i>
    </span>
</div>
</body>
</html>
