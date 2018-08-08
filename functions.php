<?php

function theme_style () {
	wp_enqueue_style( 'style.css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'theme_style');

?>