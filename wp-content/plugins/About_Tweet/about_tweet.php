<?php
/*
Plugin Name: About_Tweet
Plugin URI:  http://solwinInfotech.com/
Description: About_tweet is the Wordpress Widget.
Version: 1.0
Author: Rajvi Madhani
Author URI: http://solwinInfotech.com
License: GPL
*/

add_action('widgets_init', 'widget_about_tweet_register');

function widget_about_tweet_register() {
    register_widget('widget_about_tweet');
}

class widget_about_tweet extends WP_Widget {

    public function __construct() {
        parent::__construct(
                'widget_about_tweet', 'About Tweet', array('description' => __('This is Widget for Tweet'))
        );
    }

    public function widget($args, $instance) {
        $title = !empty($instance['title']) ? $instance['title'] : __('', 'text_domain');
        $title2 = !empty($instance['title2']) ? $instance['title2'] : __('', 'text_domain');
        $description = !empty($instance['description']) ? $instance['description'] : __('', 'text_domain');
        $iconclass = !empty($instance['iconclass']) ? $instance['iconclass'] : __('', 'text_domain');
        ?>  
            <lable class="about_tweet">
                <span class="tweet-icon"><i class="<?php echo $iconclass; ?>"></i></span> 
                <span class="tweet-author"><?php echo $title ?></span>
                <p class="tweet-details"><?php echo $description ?></p>
                <time datetime="PT2H"><?php echo $title2; ?></time>
            </lable>
        <?php
    }

    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : __('', 'text_domain');
        $title2 = !empty($instance['title2']) ? $instance['title2'] : __('', 'text_domain');
        $description = !empty($instance['description']) ? $instance['description'] : __('', 'text_domain');
        $iconclass = !empty($instance['iconclass']) ? $instance['iconclass'] : __('', 'text_domain');
        ?>
    
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">Title</label>
            <input type="text" id="<?php echo $this->get_field_id('title'); ?>" class="widefat" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('title2'); ?>">Sub Title</label>
            <input type="text" id="<?php echo $this->get_field_id('title2'); ?>" class="widefat" name="<?php echo $this->get_field_name('title2'); ?>" value="<?php echo esc_attr($title2); ?>" />
        </p>
        <p>
           <label for="<?php echo $this->get_field_id('description'); ?>">Description</label>
           <textarea id="<?php echo $this->get_field_id('description'); ?>" class="widefat" name="<?php echo $this->get_field_name('description'); ?>" style="resize: none;"><?php echo esc_attr($description); ?></textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('iconclass'); ?>">Icon class</label>
            <input type="text" id="<?php echo $this->get_field_id('iconclass'); ?>" class="widefat" name="<?php echo $this->get_field_name('iconclass'); ?>" value="<?php echo esc_attr($iconclass); ?>" placeholder="eg. fa fa-phone"/>
        <p>Choose <a href="https://fortawesome.github.io/Font-Awesome/icons/" target="_blank">icon class</a> that you want to show.
        </p>
        
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';
         $instance['title2'] = (!empty($new_instance['title2']) ) ? strip_tags($new_instance['title2']) : '';
        $instance['description'] = (!empty($new_instance['description']) ) ? strip_tags($new_instance['description']) : '';
        $instance['iconclass'] = (!empty($new_instance['iconclass']) ) ? strip_tags($new_instance['iconclass']) : '';
        return $instance;
    }

}


