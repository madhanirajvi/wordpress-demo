<?php

/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 * @package Solwin WordPress Theme Framework
 * @subpackage JeweLUX
 * @author Solwin Infotech - www.solwininfotech.com
 */
function optionsframework_option_name() {

    $theme = wp_get_theme();
    $themename = $theme['Template'];
    $themename = preg_replace("/\W/", "_", strtolower($themename));

    $optionsframework_settings = get_option('optionsframework');
    $optionsframework_settings['id'] = $themename;
    update_option('optionsframework', $optionsframework_settings);
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *
 */
function optionsframework_options() {

    $options = array();

    $options[] = array(
        "name" => __("Header Setting", "blog-designer-site"),
        "type" => "heading"
    );

    $options[] = array(
        "name" => __("About HEERAA Header Setting", "blog-designer-site"),
        "type" => "info"
    );

    $options[] = array(
        "name" => __("Footer Theme Info", 'blog-designer-site'),
        "desc" => __("Write information of theme in footer", 'blog-designer-site'),
        "id" => "info",
        "std" => '',
        "class" => "",
        "type" => "text"
    );

    $options[] = array(
        "name" => __("About_Page", "blog-designer-site"),
        "type" => "heading"
    );

    $options[] = array(
        "name" => __("About_Us Page Setting", "blog-designer-site"),
        "type" => "info"
    );

    $options[] = array(
        "name" => __("AboutUs-Title", 'blog-designer-site'),
        "desc" => __("Write aboutus title", 'blog-designer-site'),
        "id" => "about_title",
        "std" => '',
        "class" => "",
        "type" => "text"
    );

    $options[] = array(
        "name" => __("AboutUs-SubTitle", 'blog-designer-site'),
        "desc" => __("Write aboutus subtitle", 'blog-designer-site'),
        "id" => "about_subtitle",
        "std" => '',
        "class" => "",
        "type" => "text"
    );

    $options[] = array(
        "name" => __("Project_Page", "blog-designer-site"),
        "type" => "heading"
    );

    $options[] = array(
        "name" => __("Project Page Setting", "blog-designer-site"),
        "type" => "info"
    );

    $options[] = array(
        "name" => __("Portfolio-Title", 'blog-designer-site'),
        "desc" => __("Write portfoliopage title", 'blog-designer-site'),
        "id" => "portfolio_title",
        "std" => '',
        "class" => "",
        "type" => "text"
    );

    $options[] = array(
        "name" => __("Portfolio-Description", 'blog-designer-site'),
        "desc" => __("Write portfoliopage Description", 'blog-designer-site'),
        "id" => "portfolio_discription",
        "std" => '',
        "class" => "",
        "type" => "text"
    );

    $options[] = array(
        "name" => __("Post Page", "blog-designer-site"),
        "type" => "heading"
    );

    $options[] = array(
        "name" => __("Project Page Setting", "blog-designer-site"),
        "type" => "info"
    );

    $options[] = array(
        "name" => __("Postpage-Title", 'blog-designer-site'),
        "desc" => __("Write postpage title", 'blog-designer-site'),
        "id" => "post_title",
        "std" => '',
        "class" => "",
        "type" => "text"
    );

    $options[] = array(
        "name" => __("Postpage-Description", 'blog-designer-site'),
        "desc" => __("Write postpage Description", 'blog-designer-site'),
        "id" => "post_discription",
        "std" => '',
        "class" => "",
        "type" => "text"
    );
    
    $options[] = array(
        "name" => __("Post Image", 'blog-designer-site'),
        "desc" => __("Select post image", 'blog-designer-site'),
        "id" => "img",
        "std" => '',
        "class" => "",
        "type" => "upload"
    );

    $options[] = array(
        "name" => __("Post Title", 'blog-designer-site'),
        "desc" => __("Write post Title", 'blog-designer-site'),
        "id" => "posttitle",
        "std" => '',
        "class" => "",
        "type" => "text"
    );
    
    return $options;
}
