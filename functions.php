<?php


function themenpm_scripts(){
	wp_enqueue_script('theme-npm-style', get_template_directory_uri() . '/prod/index.css');
    wp_enqueue_script('theme-npm-scripts', get_template_directory_uri() . '/prod/index.js');
}
add_action('wp_enqueue_scripts', 'themenpm_scripts');