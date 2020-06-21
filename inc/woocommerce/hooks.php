<?php
/**
 * On Sale WooCommerce hooks
 *
 * @package refresh
 */


/**
 * Header
 * @see  storefront_header_cart()
 */
add_action( 'refresh_header_nav', 'storefront_header_cart', 		60 );


add_action( 'refresh_breadcrumb', 				'woocommerce_breadcrumb', 					10 );
add_action( 'refresh_shop_messages', 			'storefront_shop_messages', 				10 );