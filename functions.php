<?php

function dutchcopy_files() {
	wp_enqueue_style('dutchcopy_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'dutchcopy_files');
