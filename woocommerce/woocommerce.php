<?php
/**
 * Woocommerce Compatibility 
 *
 * @package Sinan
 */


if ( !class_exists('WooCommerce') )
    return;

/**
 * Declare support
 */

function sinan_woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'sinan_woocommerce_support' );

/**
 * Add and remove actions
 */
function sinan_woo_actions() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
    remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
    add_action('woocommerce_before_main_content', 'sinan_wrapper_start', 10);
    add_action('woocommerce_after_main_content', 'sinan_wrapper_end', 10);
}
add_action('wp','sinan_woo_actions');

/**
 * Archive titles
 */
function sinan_woo_archive_title() {
    echo '<h3 class="entry-title">';
    echo woocommerce_page_title();
    echo '</h3>';
}
add_filter( 'woocommerce_show_page_title', 'sinan_woo_archive_title' );

/**
 * Theme wrappers
 */
function sinan_wrapper_start() {
    echo '<div id="primary" class="content-area">';
        echo '<main id="main" class="site-main" role="main">';
}

function sinan_wrapper_end() {
        echo '</main>';
    echo '</div>';
}

/**
 * Number of columns per row
 */
function sinan_shop_columns() {
    return 3;
}
add_filter('loop_shop_columns', 'sinan_shop_columns');

/**
 * Number of related products
 */
function sinan_related_products_args( $args ) {
    $args['posts_per_page'] = 3;
    $args['columns'] = 3;
    return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'sinan_related_products_args' );