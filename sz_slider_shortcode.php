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

	// Default options, fade; disable slide_nmber; disable: timer;
	$orbit_options = 'data-options="animation: \'fade\'; timer_speed: 4000; slide_number: false; timer: false; resume_on_mouseout: true; "'; // TODO coming soon

	// Default options, slide; disable slide_nmber; disable: timer;
	// $orbit_options = 'data-options="timer_speed: 4000; slide_number: false; timer: false; resume_on_mouseout: true; "'; // TODO coming soon


	// Try default options a different way
	// $ar_orbit_options = array( 
	// 	'timer_speed' 	=> '1000',
	// 	'animation'		=> 'fade',
	// 	'slide_number'	=> 'false',
	// 	'timer'			=> 'false'
 // 	 );

	// Setup loop to get Slides
	$slides = get_posts( array(
		'post_type' => $custom_post_type
		) 
	);

	// Escape, if we have no slides to show
	if ( sizeof( $slides ) == 0 ){ 
		return;
	}

	// FIXME: remove check for interchange, replace with proper boolean.
	if ( current_theme_supports( 'foundation-interchange' ) ) {
		$interchange = 'interchange';
	} else {
		$interchange = '';
	}
	// var_dump( $slides ); // debug

	// Time to make the content for the slider shortcode
	$results = "<ul class=\"$wrapper_class $interchange\" $wrapper_data_role $orbit_options >";

	foreach ( $slides as $slide ) {
		// Open Slide
		$results .= '<li>' . "\n" ;
		
		// Slider Thumbnail
		$results .= get_the_post_thumbnail( $slide->ID ) . "\n";

		// Slider Content
		$results .= '<div class="sz_slider_content">' . "\n";
			$results .= '<h3>' . $slide->post_title . '</h3>' . "\n";
			$results .= '<p>' . $slide->post_content . '</p>' . "\n";		
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

