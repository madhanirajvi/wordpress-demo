<?php
/**
* Theme Name: Heera
* Plugin URI:  http://solwinInfotech.com/
* Description: The template for the sidebar containing the main widget area
* Version: 1.0
* Author: Rajvi Madhani
* Author URI: http://solwinInfotech.com
* License: GPL
*/
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
