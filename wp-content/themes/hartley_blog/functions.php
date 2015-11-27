<?php
// Add featured image support for Theme
add_theme_support('post-thumbnails');
define( 'WP_USE_THEMES', false );

// Register Theme Nav Menus
function register_theme_menus() {
    register_nav_menus(
        array('main-menu' => __( 'Main Menu' ))
    );
}
add_action( 'init', 'register_theme_menus' );

//Remove Height Width Attributes of Post Thumbs

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

add_action( 'after_setup_theme', 'set_image_sizes' );
function set_image_sizes() {
    add_image_size( 'blog-thumb', 400, 300, true ); // Collection Image
    add_image_size( 'blog-image', 1024, 768, true ); // Vendor Thumb Image
}

add_filter('image_size_names_choose', 'my_image_sizes');
function my_image_sizes($sizes) {
    $addsizes = array(
        "blog-thumb" => __( "Blog Small Thumb"),
        "blog-image" => __( "Blog Image"),
    );

    $newsizes = array_merge($sizes, $addsizes);

    return $newsizes;
}
?>

