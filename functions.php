<?php

include_once("bs4navwalker.php");

/*
|-------------------------------------------------
| Add Custom Styles
| By Group
| wp_enqueue_style
|-------------------------------------------------
*/

function add_my_style(){

    wp_enqueue_style("bootstrap",get_template_directory_uri()."/css/bootstrap.min.css" );
    wp_enqueue_style("fontawesome",get_template_directory_uri()."/css/font-awesome.min.css" );
    wp_enqueue_style("main",get_template_directory_uri()."/css/main.css");
}

/*
|-------------------------------------------------
| Add Custom Scripts
| By Group
| wp_enqueue_script
|wp_deregister_script()
|wp_register_script()
|-------------------------------------------------
*/

function add_my_script(){

    wp_deregister_script('jquery'); // Remove Jquery from Header
    wp_register_script('jquery', includes_url('/js/jquery/jquery.js'),false,'',true); // Add Jquery to Footer
    wp_enqueue_script('jquery');
    wp_enqueue_script("popper-js",get_template_directory_uri()."/js/bootstrap.bundle.min.js",array('jquery'),false,true);
    wp_enqueue_script("popper-js",get_template_directory_uri()."/js/popper.min.js",array('jquery'),false,true);
    wp_enqueue_script("bootstrap-js",get_template_directory_uri()."/js/bootstrap.min.js",false,'',true);
}


/*
|-------------------------------------------------
| Add Custom Menu Support
| By Group
| register_nav_menu($location, $description)
|-------------------------------------------------
*/

function add_custom_menu(){
    register_nav_menu("Custom-menu",__("Navigation Bar"));
}

/*
|-------------------------------------------------
| Display Menu
| By Group
|  wp_nav_menu($args)
|-------------------------------------------------
*/

function display_menu(){
    wp_nav_menu(array(
        'theme_location'    => "Custom-menu",
        "menu_class"        => "navbar-nav ml-auto",
        "container"         => false,
        "depth"             => 2,
        "walker"            => new bs4navwalker()
    ));
}

/*
|-------------------------------------------------
| All Action
| By Mundher
| add_action()
|-------------------------------------------------
*/
add_action("wp_enqueue_scripts",'add_my_style'); // Action of Style Css
add_action("wp_enqueue_scripts",'add_my_script'); // Action of Script Js
add_action("init",'add_custom_menu'); // Action of Menu
