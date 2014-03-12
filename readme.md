# Sennza Orbit Slider

A slider plugin for usage with The Flair Theme

## Known issues

- Reported Foundation 5.20 & Webkit users are experiencing a 0px height on the slider.
- Conflict with Interchange: Removes the height of the image from the img tag. Same symptom as above.
- Foundation V5.20: jQuery reflow hack doesn't calculate dimensions, https://github.com/zurb/foundation/issues/4286
- Thumbnail image size gets hard cropped to the wrong dimensions, have removed it for now

## Possible fixes

- Get the thumbnail height of the images insert them into a temporary CSS class fix
- Bail on using Orbit until 5.20 is addressed

## TODO

- Add sanitizing to content displayed on the slider.
- Customise CSS classes
- Mobile styles: Font-size, image height
- Change image sizes to optional / proportional

## Roadmap

1. Stand-alone without Flair Theme dependency
2. User Customisation of caption styles etc
3. Custom styles
4. Custom arrows and buttons on slider
5. Custom fonts
6. Increase shortcode functionality to include 'wrapper class', 'cpt' and 'data role'

## Usage

Use shortcode `[sz_slider]` whereever you want a slider to display

## Setup

1. Install plugin
2. Add slides to new CPT "Slides"
3. Add shortcode whereever you'd like the slideshow to work

## Notes

1. Slider expands to full-width of container
