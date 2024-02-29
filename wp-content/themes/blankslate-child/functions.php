<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// Hook in de ACF init action to add options page for header
add_action('acf/init', 'add_header_options_page');

function add_header_options_page() {
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title'    => __('Header content', 'textdomain'),
            'menu_title'    => __('Header content', 'textdomain'),
            'menu_slug'     => 'header-settings',
            'capability'    => 'edit_theme_options',
            'redirect'      => false
        ));
    }
}

// Hook in de ACF init action to add options page for footer
add_action('acf/init', 'add_footer_options_page');

function add_footer_options_page() {
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title'    => __('Footer content', 'textdomain'),
            'menu_title'    => __('Footer content', 'textdomain'),
            'menu_slug'     => 'footer-settings',
            'capability'    => 'edit_theme_options',
            'redirect'      => false
        ));
    }
}


?>