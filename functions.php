<?php
function exercise_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style('exc_fileBox', get_template_directory_uri().'/css/fileBox.css');
}
add_action( 'wp_enqueue_scripts', 'exercise_scripts' );
