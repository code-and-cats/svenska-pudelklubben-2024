<?php
/**
 * SPK24 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SPK24
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function spk24_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on SPK24, use a find and replace
		* to change 'spk24' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'spk24', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'spk24' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);


	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'spk24_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function spk24_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'spk24_content_width', 640 );
}
add_action( 'after_setup_theme', 'spk24_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function spk24_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'spk24' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'spk24' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'spk24_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function spk24_scripts() {
	wp_style_add_data( 'spk24-style', 'rtl', 'replace' );
	wp_enqueue_style('twd-googlefonts', '//fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',  array(), null );
	wp_enqueue_style( 'spk24-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_style('spk_page_style', get_theme_file_uri('/css/page.css'));
  wp_enqueue_style('spk_header_style', get_theme_file_uri('/css/header.css'));
  wp_enqueue_style('spk_main_styles', get_theme_file_uri('/css/styles.css'));
  wp_enqueue_style('spk_footer_styles', get_theme_file_uri('/css/footer.css'));
  wp_enqueue_style('spk_frontpage_styles', get_theme_file_uri('/css/frontpage.css'));

	wp_enqueue_script( 'spk24-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'spk24_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//Post types
add_action('init', 'spk24_post_types');

function spk24_post_types() {

  //Aktuellt post type
  register_post_type('aktuellt', array(
    'supports' => array('title', 'editor'),
    'public' => true,
    'show_in_rest' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-buddicons-tracking',
    'labels' => array(
      'name' => 'Aktuellt'
    )
  ));

  //Valpar post type
  register_post_type('valpar', array(
    'public' => true,
    'show_in_rest' => true,
    'menu_icon' => 'dashicons-pets',
    'labels' => array(
      'name' => 'Valpar'
    )
  ));
  
}

function add_custom_sidebar_meta_box() {
	add_meta_box(
			'custom_sidebar_content_box', // Unique ID
			'Sidebar Content', // Box title
			'custom_sidebar_content_box_html', // Content callback
			'page', // Post type
			'normal', // Context
			'high' // Priority
	);
}
add_action( 'add_meta_boxes', 'add_custom_sidebar_meta_box' );

function custom_sidebar_content_box_html( $post ) {
	$content = get_post_meta( $post->ID, 'custom_sidebar_content', true );
	wp_editor( $content, 'custom_sidebar_content', array(
			'textarea_name' => 'custom_sidebar_content',
			'media_buttons' => false,
			'textarea_rows' => 10,
			'teeny'         => false,
			'tinymce'       => array(
				'toolbar1' => 'formatselect bold italic bullist numlist link',
				'toolbar2' => 'alignleft aligncenter alignright',
		),
	) );
}

function save_custom_sidebar_content( $post_id ) {
	if ( array_key_exists( 'custom_sidebar_content', $_POST ) ) {
			update_post_meta(
					$post_id,
					'custom_sidebar_content',
					$_POST['custom_sidebar_content']
			);
	}
}
add_action( 'save_post', 'save_custom_sidebar_content' );
