<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package refresh
 */

/**
 * Check whether the Storefront Customizer settings ar enabled
 * @return boolean
 * @since  1.1.2
 */
function is_refresh_customizer_enabled() {
	return apply_filters( 'refresh_customizer_enabled', true );
}


remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display');

/* social icons*/
function refresh_social_icons()  { 

	$social_networks = array( array( 'name' => __('Facebook','refresh'), 'theme_mode' => 'refresh_facebook','icon' => 'fa-facebook' ),
	array( 'name' => __('Twitter','refresh'), 'theme_mode' => 'refresh_twitter','icon' => 'fa-twitter' ),
	array( 'name' => __('Google+','refresh'), 'theme_mode' => 'refresh_google','icon' => 'fa-google-plus' ),
	array( 'name' => __('Pinterest','refresh'), 'theme_mode' => 'refresh_pinterest','icon' => 'fa-pinterest' ),
	array( 'name' => __('Linkedin','refresh'), 'theme_mode' => 'refresh_linkedin','icon' => 'fa-linkedin' ),
	array( 'name' => __('Youtube','refresh'), 'theme_mode' => 'refresh_youtube','icon' => 'fa-youtube' ),
	array( 'name' => __('Tumblr','refresh'), 'theme_mode' => 'refresh_tumblr','icon' => 'fa-tumblr' ),
	array( 'name' => __('Instagram','refresh'), 'theme_mode' => 'refresh_instagram','icon' => 'fa-instagram' ),
	array( 'name' => __('Flickr','refresh'), 'theme_mode' => 'refresh_flickr','icon' => 'fa-flickr' ),
	array( 'name' => __('Vimeo','refresh'), 'theme_mode' => 'refresh_vimeo','icon' => 'fa-vimeo-square' ),
	array( 'name' => __('RSS','refresh'), 'theme_mode' => 'refresh_rss','icon' => 'fa-rss' )
	);


	for ($row = 0; $row < 11; $row++){
		if (get_theme_mod( $social_networks[$row]["theme_mode"])): ?>
			<a href="<?php echo esc_url( get_theme_mod($social_networks[$row]['theme_mode']) ); ?>" class="social-tw" title="<?php echo esc_url( get_theme_mod( $social_networks[$row]['theme_mode'] ) ); ?>" target="_blank">
			<span class="fa <?php echo $social_networks[$row]['icon']; ?>"></span> 
			</a>
		<?php endif;
	}
										
}

function refresh_check_number( $value ) {
		$value = (int) $value; // Force the value into integer type.
		return ( 0 < $value ) ? $value : null;
}