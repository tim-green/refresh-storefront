<?php
/**
 * refresh hooks
 *
 * @package refresh
 */


/**
 * General
 * @see  storefront_scripts()
 */

add_action( 'after_setup_theme',			'refresh_theme_setup' );
add_action( 'wp_enqueue_scripts',			'refresh_scripts');
add_action(	'wp_print_styles', 				'refresh_google_fonts');
add_action( 'widgets_init', 				'refresh_remove_widgets', 11 );

/**
 * Header
 * @see  storefront_skip_links()
 * @see  storefront_secondary_navigation()
 * @see  storefront_site_branding()
 * @see  storefront_primary_navigation()
 */

add_action( 'refresh_header_top', 'refresh_secondary_navigation',		10 );
add_action( 'refresh_header_top', 'refresh_social_media_links',		15 );


add_action( 'refresh_skip_links', 'storefront_skip_links', 		0 );
add_action( 'refresh_header_logo', 'refresh_site_branding',			20 );

add_action( 'refresh_main_nav', 'storefront_primary_navigation',	50 );
add_action( 'refresh_header_nav', 'refresh_product_search',	50 );

add_action( 'refresh_slider', 'refresh_featured_slider',	60 );

add_action( 'refresh_title', 'refresh_inner_title',	10 );

/**
 * Homepage
 * @see  storefront_homepage_content()
 * @see  storefront_product_categories()
 * @see  storefront_recent_products()
 * @see  storefront_featured_products()
 * @see  storefront_popular_products()
 * @see  storefront_on_sale_products()
 */
add_action( 'refresh_homepage', 'storefront_homepage_content',		10 );
add_action( 'refresh_homepage', 'storefront_product_categories',	20 );
add_action( 'refresh_homepage', 'storefront_recent_products',		30 );
add_action( 'refresh_homepage', 'storefront_featured_products',	40 );
add_action( 'refresh_homepage', 'storefront_popular_products',		50 );
add_action( 'refresh_homepage', 'storefront_on_sale_products',		60 );

/**
 * Posts
 * @see  storefront_post_meta()
 * @see  storefront_post_content()
 */
add_action( 'refresh_single_post',		'storefront_post_meta',			10 );
add_action( 'refresh_single_post',		'storefront_post_content',		20 );

add_action( 'refresh_blog_index_thumb',	'refresh_post_thumb',				10 );
add_action( 'refresh_blog_index_header',	'refresh_post_header',				10 );
add_action( 'refresh_blog_index_content',	'refresh_post_content',			10 );

/**
 * Pages
 * @see  storefront_page_content()
 */
add_action( 'refresh_page', 			'storefront_page_content',		10 );

/**
 * Footer
 * @see  storefront_footer_widgets()
 * @see  storefront_credit()
 */
add_action( 'refresh_footer_widgets', 'storefront_footer_widgets',	10 );
add_action( 'refresh_credit_area', 'refresh_credit',			20 );