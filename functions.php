<?php

function sj_load_scripts() {
    if ( !is_admin() ) {
        wp_deregister_script( 'jquery' );
        wp_register_script(
            'jquery',
            'http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js',
            false,
            null,
            true
        );
        wp_register_script(
            'carousel',
            get_template_directory_uri().'/js/carousel.js',
            array('jquery'),
            SKIPJACK_VERSION,
            true
        );
        wp_register_script(
            'skipjack',
            get_stylesheet_directory_uri().'/js/theta.js',
            array('jquery', 'carousel'),
            filemtime(dirname(__FILE__).'/js/theta.js'),
            true
        );
        wp_enqueue_script('skipjack');
    }
}

?>
