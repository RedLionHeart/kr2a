<?php
/**
 * kr2a functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kr2a
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'kr2a_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kr2a_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on kr2a, use a find and replace
		 * to change 'kr2a' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'kr2a', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'kr2a' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'kr2a_custom_background_args',
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
add_action( 'after_setup_theme', 'kr2a_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kr2a_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kr2a_content_width', 640 );
}
add_action( 'after_setup_theme', 'kr2a_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kr2a_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'kr2a' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'kr2a' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'kr2a_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kr2a_scripts() {
	wp_enqueue_style( 'kr2a-style', get_stylesheet_uri() );
	wp_enqueue_style( 'kr2a-swiper', 'https://unpkg.com/swiper/swiper-bundle.css' );

    wp_enqueue_script('kr2a-jquery', 'https://code.jquery.com/jquery-3.6.0.js', false, false, true);
    wp_enqueue_script('kr2a-swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', false, false, true);
    wp_enqueue_script('kr2a-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js', false, false, true);
    wp_enqueue_script('kr2a-inputmask', get_template_directory_uri() . '/assets/js/jquery.inputmask.js', false, false, true);
    wp_enqueue_script('kr2a-script', get_template_directory_uri() . '/assets/js/kr2a.js', false, false, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kr2a_scripts' );

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

add_action( 'init', 'register_post_type_benefits' );
function register_post_type_benefits(){
    $args = [
        'labels' => [
            'name' => 'Преимущества',
            'singular_name' => 'Преимущество',
            'add_new' => 'Добавить новое преимущество',
            'search_items' => 'Поиск преимуществ',
            'not_found' => 'Преимуществ не было найдено',
        ],
        'description' => 'Преимущества',
        'menu_icon' => 'dashicons-format-aside',
        'public'             => true,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => false,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports' => [ 'title'],
    ];
    register_post_type( 'benefits', $args );
}

add_action( 'init', 'register_post_type_review' );
function register_post_type_review(){
    $args = [
        'labels' => [
            'name' => 'Отзывы',
            'singular_name' => 'Отзыв',
            'add_new' => 'Добавить новый отзыв',
            'search_items' => 'Поиск отзывов',
            'not_found' => 'Отзывов не было найдено',
        ],
        'description' => 'Отзывы',
        'menu_icon' => 'dashicons-format-chat',
        'public'             => true,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => false,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports' => [ 'title'],
    ];
    register_post_type( 'reviews', $args );
}

add_action( 'init', 'register_post_type_questions' );
function register_post_type_questions(){
    $args = [
        'labels' => [
            'name' => ' Часто задаваемые вопросы',
            'singular_name' => 'Вопрос',
            'add_new' => 'Добавить новый вопрос',
            'search_items' => 'Поиск вопросов',
            'not_found' => 'Вопросов не было найдено',
        ],
        'description' => 'Вопросы',
        'menu_icon' => 'dashicons-editor-help',
        'public'             => true,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => false,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports' => [ 'title'],
    ];
    register_post_type( 'questions', $args );
}