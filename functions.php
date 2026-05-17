<?php

function wjct_child_enqueue_styles()
{

    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Palette+Mosaic&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css',
        array(),
        $theme_version
    );

    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        array('parent-style'),
        $theme_version
    );
}

add_action('wp_enqueue_scripts', 'wjct_child_enqueue_styles');

function wjct_custom_footer_text()
{

    echo '<p class="wjct-footer-text">' .
        esc_html__('Built for WJCT skills test', 'twentytwentyfive-child') .
        '</p>';
}

add_action('wp_footer', 'wjct_custom_footer_text');
