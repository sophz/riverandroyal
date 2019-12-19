<?php
// Theme support for menus
function riverandroyal_setup() {

    /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */

	add_theme_support( 'title-tag' );

    // Register Menus
    register_nav_menus( array (
        'top-nav' => __( 'Top Nav', 'riverandroyal' ),
        'social-media'  => __( 'Social Media Nav', 'riverandroyal' ),
    ) );
}
add_action( 'after_setup_theme', 'riverandroyal_setup' );


/**
 * Enqueue scripts and styles.
 */
function riverandroyal_scripts() {
	wp_enqueue_style( 'riverandroyal-style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'riverandroyal_scripts' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function riverandroyal_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'riverandroyal' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'riverandroyal' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'riverandroyal_widgets_init' );

function riverandroyal_comments($comment, $args, $depth) {
	$comment  = '<li class="comment">';
	$comment .=	'<header class="comment-head">';
	$comment .= '<span class="comment-author">' . get_comment_author() . '</span>';
	$comment .= '<span class="comment-meta">' . get_comment_date('m/d/Y') . '&emsp;|&emsp;' . get_comment_reply_link(array('depth' => $depth, 'max_depth' => 5)) . '</span>';
	$comment .= '</header>';
	$comment .= '<div class="comment-body">';
	$comment .= '<p>' . get_comment_text() . '</p>';
	$comment .= '</div>';
	$comment .= '</li>';

	echo $comment;
}

// Changes excerpt symbol
function custom_excerpt_more($more) {
	return '...<div class="read-more"><a href="'. get_permalink() . '"><span>Read more</span> »</a></div>';
}
add_filter('excerpt_more', 'custom_excerpt_more');
/* Custom Post Type */
function create_custom_post_types() {
    register_post_type( 'about-me',
        array(
            'labels' => array(
                'name' => __( 'about-me' ),
                'singular_name' => __( 'about-me' )
            ),
            'public' => true,
        )
    );

}
add_action( 'init', 'create_custom_post_types' );
