<?php
/**
 * designubec functions and definitions
 *
 * @package designubec
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'designubec_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function designubec_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on designubec, use a find and replace
	 * to change 'designubec' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'designubec', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'designubec' ),
		'seconday' => __( 'Secondary Menu', 'designubec' )
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'designubec_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
}
endif; // designubec_setup
add_action( 'after_setup_theme', 'designubec_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function designubec_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'designubec' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'designubec_widgets_init' );

/**
 * Register Post Type Event Year
 */

function designubec_post_type_init() {

	// Register Post Type Events
	$args_event = array(
		'labels' => array(
			'name' => 'Events',
			'singular_name' => 'Event',
			'add_new' => 'Add Event',
			'add_new_item' => 'Add New Event',
			'edit' => 'Edit',
			'edit_item' => 'Edit Event',
			'new_item' => 'New Event',
			'view' => 'View Event',
			'view_item' => 'View Event',
			'search_items' => 'Search Event',
			'not_found' => 'No Event found',
			'not_found_in_trash' => 'No Events in the Trash',
		),
		'query_var' => 'designubecevent',
		'public' => true,
		'hierarchical' => true,
		'menu_position' => 5,
		'has_archive' => true,
		'show_ui' => true,
		'menu_icon' => 'dashicons-calendar',
		'rewrite' => array('slug' => 'events'),
		'supports' => array( 'title', 'editor', 'post-thumbnails', 'thumbnail', 'page-attributes', 'revisions'),
		'description' => "Designubec Event lists"
	);

	register_post_type('designubec_events', $args_event);

}
add_action( 'init', 'designubec_post_type_init' );

/**
 * Add Jquery script.
 */
function designubec_jquery() { ?>
		<script>
			var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
			if(!oldieCheck) {
				document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>');
			} else {
				document.write('<script src="//code.jquery.com/jquery-1.11.0.min.js"><\/script>');
				document.write('<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"><\/script>');
			}
		</script>
		<script>
			if(!window.jQuery) {
				if(!oldieCheck) {
					document.write('<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery-2.1.0.min.js"><\/script>');
				} else {
					document.write('<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery-1.11.0.min.js"><\/script>');
				}
			}
		</script>
<?php } 
add_action( 'wp_footer', 'designubec_jquery');


/**
 * Enqueue scripts and styles.
 */
function designubec_scripts() {
	wp_enqueue_style( 'designubec-style', get_stylesheet_uri() );
    
    wp_enqueue_style( 'designubec-bootstrap-style', get_template_directory_uri() . '/css/main.css' );

    wp_enqueue_script('designubec-bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.1.1', true  );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'designubec_scripts' );


function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/designubec_icon.png);
            padding-bottom: 10px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Designubec Cebu Art + Design Exhibit';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );


/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Boostrap navigation walker
 */
require get_template_directory() . '/inc/wp-bootstrap-navwalker.php';

