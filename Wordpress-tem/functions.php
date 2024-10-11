<?php


function followbec_register_styles(){
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('follow-bec-style', get_template_directory_uri() . "/style.css", array('follow-bec-bootstrap'), $version, 'all');
        wp_enqueue_style('follow-bec-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
        wp_enqueue_style('follow-bec-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
};

add_action('wp_enqueue_scripts','followbec_register_styles');


function followbec_register_scripts(){
    wp_enqueue_script('follow-bec-bootstrap','followbec_register_scripts','https://code.jquery.com/jquery-3.4.1.slim.min.js', array(),'3.4.1', true);
};

add_action('wp_enqueue_scripts', 'followbec_register_scripts')

?>