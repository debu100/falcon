<?php

/*
* Theme Functions

* @package Falcon
*/

function falcon_enqueue_scripts(){
    // wp_enqueue_style( 'style-css', get_stylesheet_uri(),[], filemtime(get_template_directory().'/style.css') , 'all' );

    // wp_enqueue_script('main-js', get_template_directory_uri().'/assets/main.js',[],filemtime(get_template_directory().'/assets/main.js'),array(
    //     'strategy'  => 'defer',
    //     'in_footer' => true
    //     ));

            //? Good practice to first register and then enqueue styles and scripts 

            //* Resgistering Styles (custom and bootstrap)

            wp_register_style( 'style-css', get_stylesheet_uri(),[], filemtime(get_template_directory().'/style.css') , 'all' );

            wp_register_style( 'bootstrap-css', get_template_directory_uri().'/assets/src/libraries/css/bootstrap.min.css',[] , 'all' );
            
            //* Resgistering Scripts (custom and bootstrap)

            wp_register_script('main-js', get_template_directory_uri().'/assets/main.js',[],filemtime(get_template_directory().'/assets/main.js'),array(
                'strategy'  => 'defer',
                'in_footer' => true
                ));

            wp_register_script('bootstrap-js', get_template_directory_uri().'/assets/src/libraries/js/bootstrap.min.js',['jquery'],array(
                'strategy'  => 'defer',
                'in_footer' => true
                ));
                
             //* Enquing Styles 

             wp_enqueue_style( 'style-css');

             wp_enqueue_style( 'bootstrap-css');

            //* Enquing Scripts 

             wp_enqueue_script( 'main-js');

             wp_enqueue_script( 'bootstrap-js');
}

add_action('wp_enqueue_scripts', 'falcon_enqueue_scripts');
?>