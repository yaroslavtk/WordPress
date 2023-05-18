<?php

// remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
// remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

// add_action('woocommerce_before_main_content', 'medoslav_theme_wrapper_start', 10);
// add_action('woocommerce_after_main_content', 'medoslav_theme_wrapper_end', 10);

// function medoslav_theme_wrapper_start() {
//     echo '<div class="container test3">';
// }

// function medoslav_theme_wrapper_end() {
//     echo '</div>';
// }

// remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
// add_action('woocommerce_after_main_content', 'woocommerce_breadcrumb', 20);
// add_action('woocommerce_after_shop_loop', 'woocommerce_breadcrumb', 20);

//remove wocommerce stylesheets
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);

add_action('woocommerce_shop_loop_item_title', function () {
    echo '<h3 class="' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ) . '">' . get_the_title() . '</h3>';
}, 10);

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);

remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);