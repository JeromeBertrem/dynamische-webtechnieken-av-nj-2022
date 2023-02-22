<?php
function twentytwentyone_child_enqueue_styles() {
    // Laad de parent theme CSS.
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    // Laad de child theme CSS.
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') ); 
}
// Voer de functie twentytwentyone_child_enqueue_styles uit.
add_action( 'wp_enqueue_scripts', 'twentytwentyone_child_enqueue_styles', PHP_INT_MAX );
?>