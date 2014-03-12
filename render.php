<?php 
/**
 * sz_render_slider
 * Renders the slider for viewing
 **/
if ( ! function_exists('sz_render_slider') ) {

	function sz_render_slider() {

		if ( is_front_page() && is_home() ) {
		}

	}
}

add_action( 'init', 'sz_render_slider' );

/**
 * sz_sc_render
 * Create the Orbit Slider with a shortcode (can be used in a template file)
 **/
if ( ! function_exists('sz_sc_render') ) {
	function sz_sc_render() {

		$limit = 10;
		$post_type = 'slide';

		$args = array( 'post_type' => 'slide', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				the_title();
				echo '<div class="entry-content">';
				the_content();
				echo '</div>';
			endwhile;
	}
}
add_shortcode( 'sz_render_slider', 'sz_sc_render' );