<?php
/**
* Theme Name: Heera
* Plugin URI:  http://solwinInfotech.com/
* Description: Template for displaying search forms in Heera
* Version: 1.0
* Author: Rajvi Madhani
* Author URI: http://solwinInfotech.com
* License: GPL
*/
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'please fill out this field', 'label', 'twentysixteen' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Here', 'placeholder', 'twentysixteen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Please fill out this Field', 'label', 'twentysixteen' ); ?>" />
	</label>
	<button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'twentysixteen' ); ?></span></button>
</form>
