<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * Theme Name: Heera
 * Plugin URI:  http://solwinInfotech.com/
 * Version: 1.0
 * Author: Rajvi Madhani
 * Author URI: http://solwinInfotech.com
 * License: GPL
 */
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>
<div id="comments" class="comments-area pad">

    <?php if (have_comments()) : ?>
        <h3 class="comment-title">
            <span class="title-icon">
                <i class="fa fa-comments"></i>
            </span>
            <?php
            $comments_number = get_comments_number();
            if (1 === $comments_number) {
                /* translators: %s: post title */
                printf(_x('One comments', 'twentysixteen'));
            } else {
                printf(
                        /* translators: 1: number of comments, 2: post title */
                        _nx(
                                '%1$s comments', '%1$s comments', $comments_number, 'twentysixteen'
                        ), number_format_i18n($comments_number)
                );
            }
            ?>
        </h3>
        <?php the_comments_navigation(); ?>
        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style' => 'ol',
                'short_ping' => true,
                'avatar_size' => 42,
            ));
            ?>
        </ol>
        <?php the_comments_navigation(); ?>
    <?php endif; // Check for have_comments(). ?>
    <?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
        ?>
        <p class="no-comments"><?php _e('Comments are closed.', 'twentysixteen'); ?></p>
    <?php endif; ?>
    <div class="comment-area"><?php echo do_shortcode("[contact-form-7 id='101' title='Leave A Reply'']"); ?></div>
</div><!-- .comments-area -->
