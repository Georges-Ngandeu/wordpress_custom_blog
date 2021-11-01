<?php
    function personalblog_register_styles(){
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('personalblog-jquery', get_template_directory_uri()."/assets/css/jquery.bxslider.css", array(), $version, 'all');
        wp_enqueue_style('personalblog-bootstrap', get_template_directory_uri()."/assets/css/bootstrap.min.css", array('personalblog-jquery'), $version, 'all');
        wp_enqueue_style('personalblog-style', get_template_directory_uri()."/assets/css/style.min.css", array('personalblog-bootstrap'), $version, 'all');
        wp_enqueue_style('personalblog-custom-style', get_template_directory_uri()."/assets/css/mystyles.css", array('personalblog-style'), $version, 'all');
    }
    
    add_action('wp_enqueue_scripts', 'personalblog_register_styles');    

    function personalblog_register_scritps() {
        wp_enqueue_script('personalblog-jquery', get_template_directory_uri()."/assets/js/jquery-3.1.1.min.js", array(), '1.0', true);
        wp_enqueue_script('personalblog-slicknav', get_template_directory_uri()."/assets/js/jquery.slicknav.min.js", array('personalblog-jquery'), '1.0', true);
        wp_enqueue_script('personalblog-bxslider', get_template_directory_uri()."/assets/js/jquery.bxslider.min.js", array('personalblog-slicknav'), '1.0', true);
        wp_enqueue_script('personalblog-main', get_template_directory_uri()."/assets/js/script.js", array('personalblog-bxslider'), '1.0', true);
        wp_enqueue_script('personalblog-custom-scripts', get_template_directory_uri()."/assets/js/myscripts.js", array('personalblog-main'), '1.0', true);
    }
    
    add_action('wp_enqueue_scripts', 'personalblog_register_scritps');

    function personalblog_menus_location() {
        $locations = array(
            'primary' => 'Main Navigation Menu', 
            'footer' => 'Footer Navigation Menu' 
        );
    
        register_nav_menus($locations);
    }
    
    add_action('init', 'personalblog_menus_location');

    function personalblog_theme_support(){
        add_theme_support(
            'html5',
            array(
                'comment-list',
                'comment-form',
                'search-form'
            )
        );
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');
    }
    
    add_action('after_setup_theme', 'personalblog_theme_support');

    // function personalblog_custom_post_type() {
    //     register_post_type(
    //         'project',
    //         array(
    //             'rewrite' => array('slug' => 'projects'),
    //             'labels'=> array(
    //                 'name' => 'Projects',
    //                 'singular_name' => 'Project',
    //                 'add_new_item' => 'Add New Project',
    //                 'edit_item' => 'Edit Project'
    //             ),
    //             'menu-icon' => 'dashicons-clipboard',
    //             'public' => true,
    //             'has_archive' => true,
    //             'supports' => array(
    //                 'title', 'thumbnails', 'editor', 'excerpt', 'comments'
    //             )
    //          )
    //     );
           
    // }
    
    // add_action('init', 'personalblog_custom_post_type');

?>