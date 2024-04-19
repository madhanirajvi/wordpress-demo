<?php
/**
 * The template part for displaying single posts
 * Theme Name: Heera
 * Plugin URI:  http://solwinInfotech.com/
 * Version: 1.0
 * Author: Rajvi Madhani
 * Author URI: http://solwinInfotech.com
 * License: GPL
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content">
        <div class="post-thumbnail">
            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
        </div>
        <div class="entry-meta">
            <div class="author-avatar"><?php echo get_avatar($comment, 32); ?></div>
            <div class="post-meta-detail">
                <span class="entry-date"><?php the_time('j M Y'); ?></span>
                <span><a href="#Author"><?php the_author(''); ?></a></span>
            </div><!-- /.entry-meta -->
        </div><!-- /.post-meta -->
        <h2 class="entry-title title-pad"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    </div>
    <div class="entry-content">
        <?php
        the_content();

        wp_link_pages(array(
            'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'twentysixteen') . '</span>',
            'after' => '</div>',
            'link_before' => '<span>',
            'link_after' => '</span>',
            'pagelink' => '<span class="screen-reader-text">' . __('Page', 'twentysixteen') . ' </span>%',
            'separator' => '<span class="screen-reader-text">, </span>',
        ));

        if ('' !== get_the_author_meta('description')) {
            get_template_part('template-parts/biography');
        }
        ?>

    </div><!-- .entry-content -->

</article><!-- #post-## -->
