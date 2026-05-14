<?php

function wjct_child_enqueue_styles() {
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        array('parent-style')
    );
}

add_action('wp_enqueue_scripts', 'wjct_child_enqueue_styles');

function wjct_custom_footer_text() {
    echo '<p style="text-align:center;">Built for WJCT skills test</p>';
}

add_action('wp_footer', 'wjct_custom_footer_text');