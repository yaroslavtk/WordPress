<?php
/**
 * medoslavbasic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package medoslavbasic
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

	register_sidebar(
		array(
			'name' => esc_html__('Medoslav sidebar', 'medoslavbasic'),
			'id' => 'medoslavsidebar',
			'description' => esc_html__('Add widgets here.', 'medoslavbasic'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'medoslavbasic_widgets_init');

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

	load_theme_textdomain('medoslavbasic', get_template_directory() . '/languages');

	add_theme_support('post-thumbnails');
	add_image_size('product-cover', 240, 188);

	add_theme_support(
		'post-formats',
		array(
			'video',
			'quote',
			'image',
			'gallery'
		)
	);

	add_post_type_support('Products', 'post-formats');

}

add_action('after_setup_theme', 'medoslavbasic_theme_init', 0);


/*function medoslavbasic_custom_search($form){
$form = "html for form";
return $form;
};
add_filter('get_search_form','medoslavbasic_custom_search');*/


function medoslavbasic_register_post_type()
{
	$args = array(
		'hierarchical' => true,
		'labels' => array(
			'name' => esc_html_x('Flavours', 'taxonomy general name', 'medoslavbasic'),
			'singular_name' => esc_html_x('Flavour', 'taxonomy singular name', 'medoslavbasic'),
			'search_items' => esc_html__('Search Flavours', 'medoslavbasic'),
			'all_items' => esc_html__('All Flavours', 'medoslavbasic'),
			'parent_item' => esc_html__('Parent Flavour', 'medoslavbasic'),
			'parent_item_colon' => esc_html__('Parent Flavour:', 'medoslavbasic'),
			'edit_item' => esc_html__('Edit Flavour', 'medoslavbasic'),
			'update_item' => esc_html__('Update Flavour', 'medoslavbasic'),
			'add_new_item' => esc_html__('Add New Flavour', 'medoslavbasic'),
			'new_item_name' => esc_html__('New Flavour Name', 'medoslavbasic'),
			'menu_name' => esc_html__('Flavour', 'medoslavbasic'),
		),
		'show_ui' => true,
		'rewrite' => array('slug' => 'flavours'),
		'query_var' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
		'menu_icon' => 'dashicons-buddicons-topics',
	);

	if (!taxonomy_exists('flavour')) {
		register_taxonomy('flavour', array('products'), $args);
	}


	unset($args);

	$args = array(
		'label' => esc_html__('Products', 'medoslavbasic'),
		'labels' => array(
			'name' => esc_html_x('Products', 'Post type general name', 'recipe'),
			'singular_name' => esc_html_x('Recipe', 'Post type singular name', 'recipe'),
			'menu_name' => esc_html_x('Products', 'Admin Menu text', 'recipe'),
			'name_admin_bar' => esc_html_x('Recipe', 'Add New on Toolbar', 'recipe'),
			'add_new' => esc_html__('Add New', 'recipe'),
			'add_new_item' => esc_html__('Add New recipe', 'recipe'),
			'new_item' => esc_html__('New recipe', 'recipe'),
			'edit_item' => esc_html__('Edit recipe', 'recipe'),
			'view_item' => esc_html__('View recipe', 'recipe'),
			'all_items' => esc_html__('All Products', 'recipe'),
			'search_items' => esc_html__('Search Products', 'recipe'),
			'parent_item_colon' => esc_html__('Parent Products:', 'recipe'),
			'not_found' => esc_html__('No Products found.', 'recipe'),
			'not_found_in_trash' => esc_html__('No Products found in Trash.', 'recipe'),
			'featured_image' => esc_html_x('Recipe Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'recipe'),
			'set_featured_image' => esc_html_x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'recipe'),
			'remove_featured_image' => esc_html_x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'recipe'),
			'use_featured_image' => esc_html_x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'recipe'),
			'archives' => esc_html_x('Recipe archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'recipe'),
			'insert_into_item' => esc_html_x('Insert into recipe', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'recipe'),
			'uploaded_to_this_item' => esc_html_x('Uploaded to this recipe', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'recipe'),
			'filter_items_list' => esc_html_x('Filter Products list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'recipe'),
			'items_list_navigation' => esc_html_x('Products list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'recipe'),
			'items_list' => esc_html_x('Products list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'recipe'),
		),
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes', 'post-formats'),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'has_archive' => true,
		//'hierarchical' => true,
		'show_in_rest' => true, //gutenberg
		//'rewrite' => array('slug' => 'product')
	);
	register_post_type('products', $args);
}

add_action('init', 'medoslavbasic_register_post_type');

function medoslavbasic_rewrite_rules()
{
	medoslavbasic_register_post_type();
	flush_rewrite_rules();
}

add_action('after_switch_theme', 'medoslavbasic_rewrite_rules');


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

function medoslavbasic_paginate($query)
{
	$big = 999999999; // need an unlikely integer

	echo paginate_links(
		array(
			'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
			'format' => '?paged=%#%',
			'current' => max(1, get_query_var('paged')),
			'total' => $query->max_num_pages,
		)
	);
}

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