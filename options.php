<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'options_framework_theme'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __('One', 'options_framework_theme'),
		'two' => __('Two', 'options_framework_theme'),
		'three' => __('Three', 'options_framework_theme'),
		'four' => __('Four', 'options_framework_theme'),
		'five' => __('Five', 'options_framework_theme')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'options_framework_theme'),
		'two' => __('Pancake', 'options_framework_theme'),
		'three' => __('Omelette', 'options_framework_theme'),
		'four' => __('Crepe', 'options_framework_theme'),
		'five' => __('Waffle', 'options_framework_theme')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );
		
	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __('Slider', 'options_framework_theme'),
		'type' => 'heading');	
	$options[] = array(
		'name' => __('Display Home Page Slider', 'options_framework_theme'),
		'desc' => __('Check to display slider on the home page.', 'options_framework_theme'),
		'id' => 'cb_home_slider',
		'std' => '0',
		'type' => 'checkbox');

	$options[] = array(
		'name' => __('Slide 1', 'options_framework_theme'),				
		'type' => 'info');
		
	$options[] = array(		
		'id' => 'cb_home_slider_image_1',
		'desc' => 'Upload Image',
		'type' => 'upload');
		
	$options[] = array(		
		'id' => 'cb_home_slider_title_1',
		'desc' => 'Image Title Text',
		'std' => '',		
		'type' => 'text');
	
	$options[] = array(		
		'id' => 'cb_home_slider_sub_title_1',
		'desc' => 'Image Sub Title',
		'std' => '',		
		'type' => 'text');
	
	$options[] = array(
		'name' => __('Slide 2', 'options_framework_theme'),				
		'type' => 'info');
		
	$options[] = array(			
		'id' => 'cb_home_slider_image_2',
		'desc' => 'Upload Image',
		'type' => 'upload');
		
	$options[] = array(		
		'id' => 'cb_home_slider_title_2',
		'desc' => 'Image Title Text',
		'std' => '',		
		'type' => 'text');
	
	$options[] = array(			
		'id' => 'cb_home_slider_sub_title_2',
		'desc' => 'Image Sub Title',
		'std' => '',		
		'type' => 'text');
	$options[] = array(
		'name' => __('Slide 3', 'options_framework_theme'),				
		'type' => 'info');
	$options[] = array(			
		'id' => 'cb_home_slider_image_3',
		'desc' => 'Upload Image',
		'type' => 'upload');
		
	$options[] = array(			
		'id' => 'cb_home_slider_title_3',
		'desc' => 'Image Title Text',
		'std' => '',		
		'type' => 'text');
	
	$options[] = array(			
		'id' => 'cb_home_slider_sub_title_3',
		'desc' => 'Image Sub Title',
		'std' => '',		
		'type' => 'text');
	$options[] = array(
		'name' => __('Slide 4', 'options_framework_theme'),				
		'type' => 'info');
	$options[] = array(				
		'id' => 'cb_home_slider_image_4',
		'desc' => 'Upload Image',
		'type' => 'upload');
		
	$options[] = array(		
		'id' => 'cb_home_slider_title_4',
		'desc' => 'Image Title Text',
		'std' => '',		
		'type' => 'text');
	
	$options[] = array(				
		'id' => 'cb_home_slider_sub_title_4',
		'desc' => 'Image Sub Title',
		'std' => '',		
		'type' => 'text');
	$options[] = array(
		'name' => __('Slide 5', 'options_framework_theme'),						
		'type' => 'info');
	$options[] = array(		
		'id' => 'cb_home_slider_image_5',
		'desc' => 'Upload Image',
		'type' => 'upload');
		
	$options[] = array(				
		'id' => 'cb_home_slider_title_5',
		'desc' => 'Image Title Text',
		'std' => '',		
		'type' => 'text');
	
	$options[] = array(			
		'id' => 'cb_home_slider_sub_title_5',
		'desc' => 'Image Sub Title',
		'std' => '',		
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Services', 'options_framework_theme'),
		'type' => 'heading');
	
	$options[] = array(
		'name' => __('Service Area 1', 'options_framework_theme'),				
		'type' => 'info');
		
	$options[] = array(		
		'desc' => __('This image will be placed at home page.', 'options_framework_theme'),
		'id' => 'cb_home_image_1',
		'type' => 'upload');
		
	$options[] = array(		
		'desc' => __('Tage Line.', 'options_framework_theme'),
		'id' => 'cb_home_tag_1',
		'std' => '',		
		'type' => 'text');
	
	$options[] = array(		
		'desc' => __('Navigate link for image.', 'options_framework_theme'),
		'id' => 'cb_home_link_1',
		'std' => '',		
		'type' => 'text');
		
	$options[] = array(		
		'desc' => __('Short Description for Image 1.', 'options_framework_theme'),
		'id' => 'cb_home_desc_1',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'name' => __('Service Area 2', 'options_framework_theme'),				
		'type' => 'info');
	$options[] = array(		
		'desc' => __('This image will be placed at home page.', 'options_framework_theme'),
		'id' => 'cb_home_image_2',
		'type' => 'upload');
		
	$options[] = array(		
		'desc' => __('Tage Line.', 'options_framework_theme'),
		'id' => 'cb_home_tag_2',
		'std' => '',
		'class' => 'mini',
		'type' => 'text');
		
	$options[] = array(		
		'desc' => __('Navigate link for image.', 'options_framework_theme'),
		'id' => 'cb_home_link_2',
		'std' => '',		
		'type' => 'text');
		
	$options[] = array(		
		'desc' => __('Short Description for Image 2.', 'options_framework_theme'),
		'id' => 'cb_home_desc_2',
		'std' => '',
		'type' => 'textarea');	
	$options[] = array(
		'name' => __('Service Area 3', 'options_framework_theme'),				
		'type' => 'info');	
	$options[] = array(		
		'desc' => __('This image will be placed at home page.', 'options_framework_theme'),
		'id' => 'cb_home_image_3',
		'type' => 'upload');
		
	$options[] = array(		
		'desc' => __('Tage Line.', 'options_framework_theme'),
		'id' => 'cb_home_tag_3',
		'std' => '',		
		'type' => 'text');
	$options[] = array(		
		'desc' => __('Navigate link for image.', 'options_framework_theme'),
		'id' => 'cb_home_link_3',
		'std' => '',		
		'type' => 'text');
	$options[] = array(
		'desc' => __('Short Description for Image 3.', 'options_framework_theme'),
		'id' => 'cb_home_desc_3',
		'std' => '',
		'type' => 'textarea');
	$options[] = array(
		'name' => __('Service Area 4', 'options_framework_theme'),				
		'type' => 'info');	
	$options[] = array(		
		'desc' => __('This image will be placed at home page.', 'options_framework_theme'),
		'id' => 'cb_home_image_4',
		'type' => 'upload');
		
	$options[] = array(		
		'desc' => __('Tage Line.', 'options_framework_theme'),
		'id' => 'cb_home_tag_4',
		'std' => '',		
		'type' => 'text');
	$options[] = array(		
		'desc' => __('Navigate link for image.', 'options_framework_theme'),
		'id' => 'cb_home_link_4',
		'std' => '',		
		'type' => 'text');
	$options[] = array(		
		'desc' => __('Short Description for Image 4.', 'options_framework_theme'),
		'id' => 'cb_home_desc_4',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'name' => __('Home Page Settings', 'options_framework_theme'),
		'type' => 'heading');
	
		
	$options[] = array(
		'name' => __('Custom HTML for home page', 'options_framework_theme'),
		'desc' => __('Custom HTML for home page.', 'options_framework_theme'),
		'id' => 'cb_home_custom_html',
		'std' => '',
		'type' => 'textarea');		
	
		
		$options[] = array(
		'name' => __('Contact Email Address', 'options_framework_theme'),
		'desc' => __('Email Address for contact', 'options_framework_theme'),
		'id' => 'cb_home_email',
		'std' => '',		
		'type' => 'text');
		
		$options[] = array(
		'name' => __('Telephone #', 'options_framework_theme'),
		'desc' => __('Telephone #', 'options_framework_theme'),
		'id' => 'cb_home_telephone',
		'std' => '',		
		'type' => 'text');
	$options[] = array(
		'name' => __('General Settings', 'options_framework_theme'),
		'type' => 'heading');
	$options[] = array(
		'name' => __('Slogan', 'options_framework_theme'),
		'desc' => __('Slogan for all blog pages.', 'options_framework_theme'),
		'id' => 'slogan_text',
		'std' => '',
		'type' => 'text');
		
	/*$options[] = array(
		'name' => __('Input Text', 'options_framework_theme'),
		'desc' => __('A text input field.', 'options_framework_theme'),
		'id' => 'example_text',
		'std' => 'Default Value',
		'type' => 'text');

	$options[] = array(
		'name' => __('Textarea', 'options_framework_theme'),
		'desc' => __('Textarea description.', 'options_framework_theme'),
		'id' => 'example_textarea',
		'std' => 'Default Text',
		'type' => 'textarea');

	$options[] = array(
		'name' => __('Input Select Small', 'options_framework_theme'),
		'desc' => __('Small Select Box.', 'options_framework_theme'),
		'id' => 'example_select',
		'std' => 'three',
		'type' => 'select',
		'class' => 'mini', //mini, tiny, small
		'options' => $test_array);

	$options[] = array(
		'name' => __('Input Select Wide', 'options_framework_theme'),
		'desc' => __('A wider select box.', 'options_framework_theme'),
		'id' => 'example_select_wide',
		'std' => 'two',
		'type' => 'select',
		'options' => $test_array);

	$options[] = array(
		'name' => __('Select a Category', 'options_framework_theme'),
		'desc' => __('Passed an array of categories with cat_ID and cat_name', 'options_framework_theme'),
		'id' => 'example_select_categories',
		'type' => 'select',
		'options' => $options_categories);

	$options[] = array(
		'name' => __('Select a Page', 'options_framework_theme'),
		'desc' => __('Passed an pages with ID and post_title', 'options_framework_theme'),
		'id' => 'example_select_pages',
		'type' => 'select',
		'options' => $options_pages);

	$options[] = array(
		'name' => __('Input Radio (one)', 'options_framework_theme'),
		'desc' => __('Radio select with default options "one".', 'options_framework_theme'),
		'id' => 'example_radio',
		'std' => 'one',
		'type' => 'radio',
		'options' => $test_array);

	$options[] = array(
		'name' => __('Example Info', 'options_framework_theme'),
		'desc' => __('This is just some example information you can put in the panel.', 'options_framework_theme'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Input Checkbox', 'options_framework_theme'),
		'desc' => __('Example checkbox, defaults to true.', 'options_framework_theme'),
		'id' => 'example_checkbox',
		'std' => '1',
		'type' => 'checkbox');
	*/
	/*$options[] = array(
		'name' => __('Advanced Settings', 'options_framework_theme'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Check to Show a Hidden Text Input', 'options_framework_theme'),
		'desc' => __('Click here and see what happens.', 'options_framework_theme'),
		'id' => 'example_showhidden',
		'type' => 'checkbox');
		
	$options[] = array(
		'name' => __('Hidden Text Input', 'options_framework_theme'),
		'desc' => __('This option is hidden unless activated by a checkbox click.', 'options_framework_theme'),
		'id' => 'example_text_hidden',
		'std' => 'Hello',
		'class' => 'hidden',
		'type' => 'text');

	$options[] = array(
		'name' => __('Uploader Test', 'options_framework_theme'),
		'desc' => __('This creates a full size uploader that previews the image.', 'options_framework_theme'),
		'id' => 'example_uploader',
		'type' => 'upload');

	$options[] = array(
		'name' => "Example Image Selector",
		'desc' => "Images for layout.",
		'id' => "example_images",
		'std' => "2c-l-fixed",
		'type' => "images",
		'options' => array(
			'1col-fixed' => $imagepath . '1col.png',
			'2c-l-fixed' => $imagepath . '2cl.png',
			'2c-r-fixed' => $imagepath . '2cr.png')
	);

	$options[] = array(
		'name' =>  __('Example Background', 'options_framework_theme'),
		'desc' => __('Change the background CSS.', 'options_framework_theme'),
		'id' => 'example_background',
		'std' => $background_defaults,
		'type' => 'background' );

	$options[] = array(
		'name' => __('Multicheck', 'options_framework_theme'),
		'desc' => __('Multicheck description.', 'options_framework_theme'),
		'id' => 'example_multicheck',
		'std' => $multicheck_defaults, // These items get checked by default
		'type' => 'multicheck',
		'options' => $multicheck_array);

	$options[] = array(
		'name' => __('Colorpicker', 'options_framework_theme'),
		'desc' => __('No color selected by default.', 'options_framework_theme'),
		'id' => 'example_colorpicker',
		'std' => '',
		'type' => 'color' );
		
	$options[] = array( 'name' => __('Typography', 'options_framework_theme'),
		'desc' => __('Example typography.', 'options_framework_theme'),
		'id' => "example_typography",
		'std' => $typography_defaults,
		'type' => 'typography' );
		
	$options[] = array(
		'name' => __('Custom Typography', 'options_framework_theme'),
		'desc' => __('Custom typography options.', 'options_framework_theme'),
		'id' => "custom_typography",
		'std' => $typography_defaults,
		'type' => 'typography',
		'options' => $typography_options );

	$options[] = array(
		'name' => __('Text Editor', 'options_framework_theme'),
		'type' => 'heading' );
	*/
	/**
	 * For $settings options see:
	 * http://codex.wordpress.org/Function_Reference/wp_editor
	 *
	 * 'media_buttons' are not supported as there is no post to attach items to
	 * 'textarea_name' is set by the 'id' you choose
	 */

	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress' )
	);
	
	/*$options[] = array(
		'name' => __('Default Text Editor', 'options_framework_theme'),
		'desc' => sprintf( __( 'You can also pass settings to the editor.  Read more about wp_editor in <a href="%1$s" target="_blank">the WordPress codex</a>', 'options_framework_theme' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'example_editor',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
	*/
	return $options;
}

/*
 * This is an example of how to add custom scripts to the options panel.
 * This example shows/hides an option when a checkbox is clicked.
 */

add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function($) {

	$('#example_showhidden').click(function() {
  		$('#section-example_text_hidden').fadeToggle(400);
	});

	if ($('#example_showhidden:checked').val() !== undefined) {
		$('#section-example_text_hidden').show();
	}

});
</script>

<?php
}