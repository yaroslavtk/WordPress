<?php

function medoslav_setup() {
    // add_theme_support('title-tag');
    load_theme_textdomain('medoslav', get_template_directory() . '/languages');
    add_theme_support('post-thumbnail');
    add_theme_support('woocommerce');

    register_nav_menus(
        array(
            'menu-1' => __('Top Menu', 'medoslav'),
            'menu-2' => __('Top Icons', 'medoslav'),
            'menu-3' => __('Social Menu', 'medoslav')
        )
        );
}

add_action('after_setup_theme', 'medoslav_setup');

function medoslav_scripts() {
    wp_enqueue_style('medoslav-slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css');
    wp_enqueue_style('medoslav-aos', get_template_directory_uri() . '/assets/css/aos.css');
    wp_enqueue_style('medoslav-slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('medoslav-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('medoslav-scrollbar', get_template_directory_uri() . '/assets/css/scrollbar.css');
    wp_enqueue_style('medoslav-acordeon', get_template_directory_uri() . '/assets/css/acordeon.css');
    wp_enqueue_style('medoslav-normalize', get_template_directory_uri() . '/assets/css/normalize.css');
    wp_enqueue_style('medoslav-google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&subset=latin,cyrillic');
    wp_enqueue_style('medoslav-leaflet', 'https://unpkg.com/leaflet@1.6.0/dist/leaflet.css');

    // wp_enqueue_script( 'jquery' );
    wp_enqueue_script('medoslav-jquery-js', '/assets/js/jquery.js', array(), null, true);
    wp_enqueue_script('medoslav-jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), null, true);
    wp_enqueue_script('medoslav-leaflet-js', 'https://unpkg.com/leaflet@1.6.0/dist/leaflet.js', array(), null, true);
    wp_script_add_data('medoslav-leaflet-js', array( 'integrity', 'crossorigin' ) , array( 'sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==', '' ) );
    wp_enqueue_script('medoslav-aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null, true);
    wp_enqueue_script('medoslav-aos-init-js', get_template_directory_uri() . '/assets/js/aos-init.js', array(), null, true);
    wp_enqueue_script('medoslav-logo-js', get_template_directory_uri() . '/assets/js/logo.js', array(), null, true);
    wp_enqueue_script('medoslav-upbutton-js', get_template_directory_uri() . '/assets/js/upbutton.js', array(), null, true);
    wp_enqueue_script('medoslav-slick-min-js', get_template_directory_uri() . '/assets/js/slick.min.js', array(), null, true);
    wp_enqueue_script('medoslav-slick_settengs-js', get_template_directory_uri() . '/assets/js/slick_settengs.js', array(), null, true);
    wp_enqueue_script('medoslav-leaflet-local-js', get_template_directory_uri() . '/assets/js/leaflet.js', array(), null, true);
    wp_enqueue_script('medoslav-hamburger-js', get_template_directory_uri() . '/assets/js/hamburger.js', array(), null, true);
    wp_enqueue_script('medoslav-modal-js', get_template_directory_uri() . '/assets/js/modal.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'medoslav_scripts');

require_once get_template_directory() . '/inc/woocommerce-hooks.php';

function medoslav_debug($data) {
    echo '<pre>' . print_r($data, true) . '</pre>';
}

add_filter( 'woocommerce_currencies', 'add_uah_currency' );
function add_uah_currency( $uah_currency ) {
     $uah_currency['HRYVNIA'] = __( 'HRYVNIA CURRECY', 'woocommerce' );
     return $uah_currency;
}
add_filter('woocommerce_currency_symbol', 'add_uah_currency_symbol', 10, 2);
function add_uah_currency_symbol( $custom_currency_symbol, $custom_currency ) {
     switch( $custom_currency ) {
         case 'HRYVNIA': $custom_currency_symbol = 'грн'; break;
     }
     return $custom_currency_symbol;
}

add_filter('woocommerce_add_to_cart_fragments', function ($fragments) {
    $fragments['.producs-added'] = '<div class="producs-added"><span>' . count( WC()->cart->get_cart()) . '</span></div>';
    
    return $fragments;
});