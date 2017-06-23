<?php
function exercise_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style('exc_fileBox', get_template_directory_uri().'/css/fileBox.css');
}
add_action( 'wp_enqueue_scripts', 'exercise_scripts' );

/*function fix_the_excerpt($text) {
    return str_replace('[...]', '...', $text);
}
add_filter('the_excerpt', 'fix_the_excerpt');

function my_excerpt_length($length) {
    return 2; // Or whatever you want the length to be.
}
add_filter('excerpt_length', 'my_excerpt_length');*/