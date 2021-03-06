<?php
/**
 * MashHimProm functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MashHimProm
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'MashHimProm_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function MashHimProm_setup() {


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
				'menu-1' => esc_html__( 'Main Menu', 'MashHimProm' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'menus',
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'MashHimProm_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'MashHimProm_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function MashHimProm_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'MashHimProm_content_width', 640 );
}
add_action( 'after_setup_theme', 'MashHimProm_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function MashHimProm_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'MashHimProm' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'MashHimProm' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'MashHimProm_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function MashHimProm_scripts() {
	wp_enqueue_style( 'MashHimProm-style', get_stylesheet_uri(), array(), _S_VERSION );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'MashHimProm_scripts' );


add_action( 'init', 'uslugi' );
 
function uslugi() {
 
	$args = array(
		'labels' => array(
			'menu_name' => '????????????'
		),
		'public' => true,
		'menu_icon' => 'dashicons-list-view',
		'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type( 'uslugi', $args );
}

add_action( 'init', 'project' );
 
function project() {
 
	$args = array(
		'labels' => array(
			'menu_name' => '??????????????'
		),
		'public' => true,
		'menu_icon' => 'dashicons-category',
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')
	);
	register_post_type( 'project', $args );
}

add_action( 'init', 'since' );
 
function since() {
 
	$args = array(
		'labels' => array(
			'menu_name' => '?????????????? ????????????????????????'
		),
		'public' => true,
		'menu_icon' => 'dashicons-chart-line',
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')
	);
	register_post_type( 'since', $args );
}

add_action('wp_enqueue_scripts', 'add_my_scripts');//?????????? ???????????????????? ?????????????????????????? ????????????????, ?????????????????? ???????? ?????????????? ?????? ?????????????????????? ?????? ????????????????
function add_my_scripts() {
    if (!is_admin()) {//?????? ????????????????, ?????? ?? ?????????????? ???? ?????????? ???????????????????? ?? ???????????????? jquery ?????? ?????? ?????????? ?????????????????? ???????????????????? ????????????????????
        wp_deregister_script('jquery');//?????????????????? ?????????????????????? jquery

    }
}