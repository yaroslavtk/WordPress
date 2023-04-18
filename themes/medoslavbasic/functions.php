<?php
/**
 * medoslavbasic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package medoslavbasic
 */

function medoslavbasic_enqueue_scripsts()
{
	wp_enqueue_style('medoslavbasic-general', get_template_directory_uri() . '/accets/css/general.css', array(), '1.0', 'all');

	if (is_singular()) {
		wp_enqueue_script('medoslavbasic-script', get_template_directory_uri() . '/accets/js/script.js', array('jquery'), '1.0', true);
	} // if page is open

	// wp_register_script();
	// wp_enqueue_style('medoslavbasic-general');
	// wp_enqueue_script('medoslavbasic-script');

}
;

add_action('wp_enqueue_scripts', 'medoslavbasic_enqueue_scripsts');

/**function medoslavbasic_show_meta() {
echo "<meta name='author' content='Medoslav'>";
};
add_action('wp_head', 'medoslavbasic_show_meta');
if (!defined('_S_VERSION')) {
// Replace the version number of the theme on each release.
define('_S_VERSION', '1.0.0');
};*/

/**function medoslavbasic_body_clas($classes) {
if(is_front_page()){
$classes[] = 'main_class';
} else if (is_singular()) {
$classes[] = 'extra_class';
}
return $classes;
};
add_filter('body_class', 'medoslavbasic_body_clas');*/

function medoslavbasic_theme_init()
{
	register_nav_menus(
		array(
			'header_nav' => 'Header Navigation',
			'footer_nav' => 'Footer Navigation'
		)
	);

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

	load_theme_textdomain('medoslavbasic', get_template_directory().'/languages');
}

add_action('after_setup_theme', 'medoslavbasic_theme_init', 0);


/*function medoslavbasic_custom_search($form){
	$form = "html for form";
	return $form;
};

add_filter('get_search_form','medoslavbasic_custom_search');*/



function medoslavbasic_register_post_type(){};



/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */


function medoslavbasic_setup()
{
	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'medoslavbasic_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'medoslavbasic_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function medoslavbasic_content_width()
{
	$GLOBALS['content_width'] = apply_filters('medoslavbasic_content_width', 640);
}
add_action('after_setup_theme', 'medoslavbasic_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function medoslavbasic_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Sidebar', 'medoslavbasic'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'medoslavbasic'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'medoslavbasic_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function medoslavbasic_scripts()
{

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'medoslavbasic_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}