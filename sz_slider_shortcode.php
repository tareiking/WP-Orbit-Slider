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

	// Try default options a different way
	$defaults = array( 
		'timer_speed' 	=> '2000',
		'animation'		=> 'slide',
		'slide_number'	=> 'false',
		'timer'			=> 'false',
		'interchange'	=> 'false',
 	 );

	// Use Orbit Options as variables
	$data_options = 'data-options=';

	foreach( $defaults as $k => $v ) {
		$data_options .= $k . ':' . $v .'; ';
	}

	// Setup loop to get Slides
	$slides = get_posts( array(
		'post_type' => $custom_post_type
		) 
	);

	// Escape, if we have no slides to show
	if ( sizeof( $slides ) == 0 ){ 
		return;
	}

	// Time to make the content for the slider shortcode
	$results = "<ul class=\"$wrapper_class\" $wrapper_data_role $data_options >";

	foreach ( $slides as $slide ) {
		// Open Slide
		$results .= '<li>' . "\n" ;
		
		// Slider Thumbnail
		$results .= get_the_post_thumbnail( $slide->ID ) . "\n";

		// Slider Content
		$results .= '<div class="sz_slider_content">' . "\n";
			$results .= '<h3><span>' . $slide->post_title . '</span></h3>' . "\n";
			$results .= '<p><span>' . $slide->post_content . '</span></p>' . "\n";		
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

