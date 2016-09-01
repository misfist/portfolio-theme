<?php

add_action( 'wp_enqueue_scripts', 'tar_parent_theme_enqueue_styles' );

function tar_parent_theme_enqueue_styles() {
    wp_enqueue_style( 'tar-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'portfolio-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'tar-style' )
    );

}
