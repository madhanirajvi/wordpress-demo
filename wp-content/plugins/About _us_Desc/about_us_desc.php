<?php
/*
Plugin Name: About_Us_Desc
Plugin URI:  http://solwinInfotech.com/
Description: About_us_desc is the Wordpress Widget.
Version: 1.0
Author: Rajvi Madhani
Author URI: http://solwinInfotech.com
License: GPL
*/


add_action('widgets_init', 'widget_about_desc_register');

function widget_about_desc_register() {
    register_widget('widget_about_desc');
}

class widget_about_desc extends WP_Widget {

    public function __construct() {
        parent::__construct(
                'widget_about_desc', 'About Us Desc', array('description' => __('This is Widget for About Us Description'))
        );
    }

    public function widget($args, $instance) {
        $title = !empty($instance['title']) ? $instance['title'] : __('', 'text_domain');
        $sub_title = !empty($instance['sub_title']) ? $instance['sub_title'] : __('', 'text_domain');
        $description = !empty($instance['description']) ? $instance['description'] : __('', 'text_domain');
        ?>
                        <div class="col-sm-4">
                            <div class="item">
                                <div class="item-top">
                                    <h3 class="item-title"><?php echo $title ?></h3>
                                    <h4 class="sub-title"><?php echo $sub_title ?></h4></div>
                                <p class="item-description"><?php echo $description ?></p>
                                <a class="btn" href="#"><span class="btn-icon"><i class="fa fa-arrow-circle-right"></i></span>More</a>
                            </div>
                        </div>

        <?php
    }

    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : __('', 'text_domain');
        $sub_title = !empty($instance['sub_title']) ? $instance['sub_title'] : __('', 'text_domain');
        $description = !empty($instance['description']) ? $instance['description'] : __('', 'text_domain');
       ?>
       
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">Title</label>
            <input type="text" id="<?php echo $this->get_field_id('title'); ?>" class="widefat" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('sub_title'); ?>">Sub Title</label>
            <input type="text" id="<?php echo $this->get_field_id('sub_title'); ?>" class="widefat" name="<?php echo $this->get_field_name('sub_title'); ?>" value="<?php echo esc_attr($sub_title); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('description'); ?>">Description</label>
            <textarea id="<?php echo $this->get_field_id('description'); ?>" class="widefat" name="<?php echo $this->get_field_name('description'); ?>" style="resize: none;"><?php echo esc_attr($description); ?></textarea>
        </p>
        
        <?php
    }

    public function update($new_instance, $old_instance) {
        
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';
        $instance['sub_title'] = (!empty($new_instance['sub_title']) ) ? strip_tags($new_instance['sub_title']) : '';
        $instance['description'] = (!empty($new_instance['description']) ) ? strip_tags($new_instance['description']) : '';
       
        return $instance;
    }

}


