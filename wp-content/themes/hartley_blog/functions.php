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
add_action( 'wp_ajax_nopriv_get_recent_posts', 'get_recent_posts' );
add_action( 'wp_ajax_get_recent_posts', 'get_recent_posts' );

function get_recent_posts()
{
    header("Access-Control-Allow-Origin: " . MAIN_SITE_URL);
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'order'    => 'DESC',
    );

    $blog_posts = query_posts($args);

    $html = "";

    foreach($blog_posts as $blog)
    {
        $terms = get_the_terms( $blog->ID, 'category' );
        $i = 0;
        if(count($terms > 0))
        {
            foreach($terms as $term) {
                if($i == (count($terms) - 1) )
                {
                    $term_list = $term->name;
                }
                else
                {
                    $term_list = $term->name . ", ";
                }
            }
        }

        $content = $blog->post_content;
        $content = wp_trim_words( $content, 50, "");

        $auther_id = $blog->post_author;
        $user = get_userdata($auther_id);

        $html .= '<div class="col-md-4 col-sm-6">';
        $html .= '<div class="blog-snippet-1 postList postBlogHome">';
        $html .= '<div class="btmArea">';
        $html .= '<div class="blogCategory">';
        $html .= '<span class="category"><a href="#">'.$term_list.'</a></span>';
        $html .= '</div>';
        $html .= '<a href="'. get_the_permalink($blog->ID).'" class="blogTitle">'. get_the_title($blog->ID).'</a>';
        $html .= '<p class="postDate">'. date('F d, Y', strtotime($blog->post_date)) .'</p>';
        $html .= '<p class="blogEntry">';
        $html .= $content;
        $html .= '</p>';
        $html .= '<a class="text-link" href="'. get_the_permalink($blog->ID).'">Read the rest<i class="icon ti ti-arrow-right arrow_right"></i></a>';
        $html .= '<div class="blogMeta clearfix">';
        $html .= '<span class="author">';
        $html .= 'By&nbsp;<a href="" title="Author" rel="author">'. $user->display_name .'</a>';
        $html .= '</span>';
        $html .= '</div>';
        $html .= '</div>';
        $html .= '</div>';
        $html .= '</div>';
    }

    $response = array("success" => true, data => $html);
    wp_send_json($response);
}
?>

