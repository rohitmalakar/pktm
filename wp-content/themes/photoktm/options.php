<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)

	$themename = get_option( 'photoktm' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {
$options[] = array(
		'name' => __('Input Text 1', 'options_check'),
		'desc' => __('A text input field.', 'options_check'),
		'id' => 'text1',
		'std' => 'Menu Name',
		'type' => 'text');
$options[] = array(
		'name' => __('Uploader 1', 'options_check'),
		'desc' => __('This creates a full size uploader that previews the image.', 'options_check'),
		'id' => 'example_uploader1',
		'type' => 'upload');
$options[] = array(
		'name' => __('Link 1', 'options_check'),
		'desc' => __('A text input field.', 'options_check'),
		'id' => 'link1',
		'std' => 'Menu Name',
		'type' => 'text');
$options[] = array(
		'name' => __('Input Text 2', 'options_check'),
		'desc' => __('A text input field.', 'options_check'),
		'id' => 'text2',
		'std' => 'Default Value',
		'type' => 'text');
$options[] = array(
		'name' => __('Uploader 2', 'options_check'),
		'desc' => __('This creates a full size uploader that previews the image.', 'options_check'),
		'id' => 'example_uploader2',
		'type' => 'upload');
$options[] = array(
		'name' => __('Link 2', 'options_check'),
		'desc' => __('A text input field.', 'options_check'),
		'id' => 'link2',
		'std' => 'Menu Name',
		'type' => 'text');
$options[] = array(
		'name' => __('Input Text 3', 'options_check'),
		'desc' => __('A text input field.', 'options_check'),
		'id' => 'text3',
		'std' => 'Default Value',
		'type' => 'text');
$options[] = array(
		'name' => __('Uploader 3', 'options_check'),
		'desc' => __('This creates a full size uploader that previews the image.', 'options_check'),
		'id' => 'example_uploader3',
		'type' => 'upload');
$options[] = array(
		'name' => __('Link 3', 'options_check'),
		'desc' => __('A text input field.', 'options_check'),
		'id' => 'link3',
		'std' => 'Menu Name',
		'type' => 'text');
$options[] = array(
		'name' => __('Input Text 4', 'options_check'),
		'desc' => __('A text input field.', 'options_check'),
		'id' => 'text4',
		'std' => 'Default Value',
		'type' => 'text');
$options[] = array(
		'name' => __('Uploader 4', 'options_check'),
		'desc' => __('This creates a full size uploader that previews the image.', 'options_check'),
		'id' => 'example_uploader4',
		'type' => 'upload');
$options[] = array(
		'name' => __('Link 4', 'options_check'),
		'desc' => __('A text input field.', 'options_check'),
		'id' => 'link4',
		'std' => 'Menu Name',
		'type' => 'text');
$options[] = array(
		'name' => __('Input Text 5', 'options_check'),
		'desc' => __('A text input field.', 'options_check'),
		'id' => 'text5',
		'std' => 'Default Value',
		'type' => 'text');
$options[] = array(
		'name' => __('Uploader 5', 'options_check'),
		'desc' => __('This creates a full size uploader that previews the image.', 'options_check'),
		'id' => 'example_uploader5',
		'type' => 'upload');
$options[] = array(
		'name' => __('Link 5', 'options_check'),
		'desc' => __('A text input field.', 'options_check'),
		'id' => 'link5',
		'std' => 'Menu Name',
		'type' => 'text');
$options[] = array(
		'name' => __('Input Text 6', 'options_check'),
		'desc' => __('A text input field.', 'options_check'),
		'id' => 'text6',
		'std' => 'Default Value',
		'type' => 'text');
$options[] = array(
		'name' => __('Uploader 6', 'options_check'),
		'desc' => __('This creates a full size uploader that previews the image.', 'options_check'),
		'id' => 'example_uploader6',
		'type' => 'upload');
$options[] = array(
		'name' => __('Link 6', 'options_check'),
		'desc' => __('A text input field.', 'options_check'),
		'id' => 'link6',
		'std' => 'Menu Name',
		'type' => 'text');
$options[] = array(
		'name' => __('Input Text 7', 'options_check'),
		'desc' => __('A text input field.', 'options_check'),
		'id' => 'text7',
		'std' => 'Default Value',
		'type' => 'text');

$options[] = array(
		'name' => __('Uploader 7', 'options_check'),
		'desc' => __('This creates a full size uploader that previews the image.', 'options_check'),
		'id' => 'example_uploader7',
		'type' => 'upload');
$options[] = array(
		'name' => __('Link 7', 'options_check'),
		'desc' => __('A text input field.', 'options_check'),
		'id' => 'link7',
		'std' => 'Menu Name',
		'type' => 'text');
$options[] = array(
		'name' => __('Input Text 8', 'options_check'),
		'desc' => __('A text input field.', 'options_check'),
		'id' => 'text8',
		'std' => 'Default Value',
		'type' => 'text');
$options[] = array(
		'name' => __('Uploader 8', 'options_check'),
		'desc' => __('This creates a full size uploader that previews the image.', 'options_check'),
		'id' => 'example_uploader8',
		'type' => 'upload');
	$options[] = array(
		'name' => __('Link 8', 'options_check'),
		'desc' => __('A text input field.', 'options_check'),
		'id' => 'link8',
		'std' => 'Menu Name',
		'type' => 'text');

	return $options;
}