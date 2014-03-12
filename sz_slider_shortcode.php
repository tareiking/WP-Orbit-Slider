<?php 
/**
 * Creates a shortcode to render in templates or content editor
 * 
 * Returns HTML output for a full slider
 **/
if ( ! function_exists('sz_slider_shortcode') ) {

function sz_slider_shortcode() {

	// Escape if we are in the admin - no sliders are displayed here
	if ( is_admin() ){
		return;
	}

	// Setup some variables; defaults
	$custom_post_type = 'sz_slider';
	$wrapper_class = 'sz_slider_wrapper';
	$wrapper_data_role = 'data-orbit';

	// Setup loop to get Slides
	$slides = get_posts( array(
		'post_type' => $custom_post_type
		) 
	);

	// Escape, if we have no slides to show
	if ( sizeof( $slides ) == 0 ){ 
		return;
	}

	// var_dump( $slides ); // debug

	// Time to make the content for the slider shortcode
	$results = "<ul class=\"$wrapper_class\" $wrapper_data_role>";

	foreach ( $slides as $slide ) {
		// Open slide
		$results .= '<li>' . "\n" ;
		
		// Slider thumbnail
		$results .= get_the_post_thumbnail( $slide->ID ) . "\n";

		// Slider Title
		$results .= '<div class="sz_slider_title">' . "\n";
		$results .= $slide->post_title . "\n";
		$results .= '</div>' . "\n";

		// Slider Content
		$results .= '<div class="sz_slider_content">' . "\n";
		$results .= $slide->post_content . "\n";
		$results .= '</div>' . "\n";

		// Close slide
		$results .= '</li>' . "\n";
	}	

	$results .= '</ul>';

	return $results;

}

// Add shortcode
add_shortcode( 'sz_slider', 'sz_slider_shortcode' );

} // endif;

