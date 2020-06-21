<?php
/**
 * @package refresh
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="" itemtype="http://schema.org/BlogPosting">

	<?php
		/**
		* refresh_blog_index_thumb hook
		*
		* @hooked refresh_post_thumb - 10
		*/	
		do_action( 'refresh_blog_index_thumb' );
	?>
	<div class="post-content-area">
	<?php
		/**
		* refresh_blog_index_header hook
		*
		* @hooked refresh_post_header - 10
		*/	
		do_action( 'refresh_blog_index_header' );
		/**
		* refresh_blog_index_content hook
		*
		* @hooked refresh_post_content - 10
		*/	
		do_action( 'refresh_blog_index_content' );
	?>
	</div>
	<div class="clearfix"></div>
</article><!-- #post-## -->