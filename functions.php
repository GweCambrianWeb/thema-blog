<?php
function theme_enqueue_styles() {

    $parent_style = 'thema';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'thema-blog',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function thema_blog_fonts(){
  wp_enqueue_style( 'thema-blog-google-fonts', 'https://fonts.googleapis.com/css?family=Josefin+Sans|Libre+Baskerville', false );
}

add_action('wp_enqueue_scripts', 'thema_blog_fonts');
?>
