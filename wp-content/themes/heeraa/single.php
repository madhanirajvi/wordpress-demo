<?php
/**
* Theme Name: Heera
* Plugin URI:  http://solwinInfotech.com/
* Description: The template for displaying all single posts and attachments
* Version: 1.0
* Author: Rajvi Madhani
* Author URI: http://solwinInfotech.com
* License: GPL
*/

 get_header(); ?>

<div id="primary" class="pad">
	<main id="blog" class="blog-post" role="main">
            <div id="single-post" class="single-post col-sm-9 col-xs-12">
                <?php if (have_posts()) :
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			// End of the loop.
                   if ( comments_open() || get_comments_number() ) {
				comments_template();
			}       
                endwhile;
                	// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );
             endif;
		?>
            </div>
            <div class="col-sm-3 col-xs-12">
                 <div class="blog-sidebar">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            </div>	      
	</main><!-- .site-main -->	
</div><!-- .content-area -->

<?php get_footer(); ?>
