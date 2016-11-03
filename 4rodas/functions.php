<?php

function wpdocs_theme_testeabril_scripts() {
    wp_enqueue_style( 'font-Asap', 'http://fonts.googleapis.com/css?family=Asap:300,400,700',false,'1.1','all');
    wp_enqueue_style( 'font-Dosis', 'http://fonts.googleapis.com/css?family=Dosis:300,400,700',false,'1.1','all');
    wp_enqueue_style( 'font-Helvetica', 'http://fonts.googleapis.com/css?family=Helvetica:300,400,700',false,'1.1','all');

    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome/css/font-awesome.min.css',false,'1.1','all');
    wp_enqueue_style( 'fonts', get_template_directory_uri() . '/css/fonts.css',false,'1.1','all');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css',false,'1.1','all');

    //wp_enqueue_script( 'jquery', get_template_directory_uri(), array('jquery'), '2.1.3', true);
    //wp_enqueue_script( 'teste', get_template_directory_uri() . '/js/script.js', array ( 'teste' ), 1.1, true);

}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_testeabril_scripts' );

?>