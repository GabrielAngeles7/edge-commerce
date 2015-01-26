<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = wp_get_theme();
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

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
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

	// $options[] = array(
	// 	'name' => __('General Options', 'options_framework_theme'),
	// 	'type' => 'heading');

	// $options[] = array(
	// 	'name' => __('Banner', 'options_framework_theme'),
	// 	'desc' => sprintf( __( 'Place the link of your banner here.', 'options_framework_theme' )),
	// 	'id' => 'banner',
	// 	'type' => 'text',
	// 	'settings' => $wp_editor_settings );

	// $options[] = array(
	// 	'name' => __('Logo Image', 'options_framework_theme'),
	// 	'desc' => __('Upload your custom logo', 'options_framework_theme'),
	// 	'id' => 'branding',
	// 	'type' => 'upload');

	// $options[] = array(
	// 	'name' => __('Introduction', 'options_framework_theme'),
	// 	'desc' => sprintf( __( 'Introduction part.', 'options_framework_theme' )),
	// 	'id' => 'intro',
	// 	'type' => 'editor',
	// 	'settings' => '$wp_editor_settings' );

	$options[] = array(
		'name' => __('Header', 'options_framework_theme'),
		'type' => 'heading' );

	$options[] = array(
		'name' => __('Logo Image', 'options_framework_theme'),
		'desc' => __('Upload your custom logo', 'options_framework_theme'),
		'id' => 'branding',
		'type' => 'upload');

	// $options[] = array(
	// 	'name' => __('Logo Text', 'options_framework_theme'),
	// 	'desc' => __('Enter Your Logo Text', 'options_framework_theme'),
	// 	'id' => 'logo_text',
	// 	'std' => '',
	// 	'type' => 'text');

	//Contacts

	$options[] = array(
		'name' => __('Contacts', 'options_framework_theme'),
		'type' => 'heading' );

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
	
	

	$options[] = array(
		'name' => __('Title', 'options_framework_theme'),
		'desc' => __('Enter Title', 'options_framework_theme'),
		'id' => 'title',
		'std' => '',
		'type' => 'textarea');


	$options[] = array(
		'name' => __('Description', 'options_framework_theme'),
		'desc' => __('Enter Description', 'options_framework_theme'),
		'id' => 'description',
		'std' => '',
		'type' => 'textarea');

	$options[] = array(
		'name' => __('Address', 'options_framework_theme'),
		'desc' => __('Enter Your Address', 'options_framework_theme'),
		'id' => 'address',
		'std' => '',
		'type' => 'textarea');	

	$options[] = array(
		'name' => __('Phone', 'options_framework_theme'),
		'desc' => __('Enter Your Phone number', 'options_framework_theme'),
		'id' => 'phone',
		'std' => '',
		'type' => 'textarea');


	//Social Media

	// $options[] = array(
	// 	'name' => __('Social Media', 'options_framework_theme'),
	// 	'type' => 'heading' );

	// $options[] = array(
	// 	'name' => __('Facebook', 'options_framework_theme'),
	// 	'desc' => __('It makes it easy for you to connect and share with your family and friends online', 'options_framework_theme'),
	// 	'id' => 'facebook',
	// 	'std' => '',
	// 	'type' => 'text');

	// $options[] = array(
	// 	'name' => __('Twitter', 'options_framework_theme'),
	// 	'desc' => __('Connect with people, express yourself and discover what is happening on Twitter. Join the global conversation.', 'options_framework_theme'),
	// 	'id' => 'twitter',
	// 	'std' => '',
	// 	'type' => 'text');

	// $options[] = array(
	// 	'name' => __('Pinterest', 'options_framework_theme'),
	// 	'desc' => __('Capture and Share the Worlds Moments. Pinterest is a fast, beautiful and fun way to share your life with friends and family', 'options_framework_theme'),
	// 	'id' => 'pinterest',
	// 	'std' => '',
	// 	'type' => 'text');

	// $options[] = array(
	// 	'name' => __('Tumblr', 'options_framework_theme'),
	// 	'desc' => __('Post anything (from anywhere!), customize everything, and find and follow what you love.', 'options_framework_theme'),
	// 	'id' => 'tumblr',
	// 	'std' => '',
	// 	'type' => 'text');

	// $options[] = array(
	// 	'name' => __('Instagram', 'options_framework_theme'),
	// 	'desc' => __('Tune in to images and live video broadcasts on topics that matter to you. Check out the schedule of upcoming Hangouts On Air', 'options_framework_theme'),
	// 	'id' => 'instagram',
	// 	'std' => '',
	// 	'type' => 'text');

	// Footer

	$options[] = array(
		'name' => __('Footer', 'options_framework_theme'),
		'type' => 'heading' );

	$options[] = array(
		'name' => __('Copyright', 'options_framework_theme'),
		'desc' => __('Enter Copyright', 'options_framework_theme'),
		'id' => 'copyright',
		'std' => '',
		'type' => 'text');


	return $options;
}