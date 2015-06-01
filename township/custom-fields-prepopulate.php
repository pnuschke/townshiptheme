<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_homepage',
		'title' => 'Homepage',
		'fields' => array (
			array (
				'key' => 'field_54184430c0543',
				'label' => 'Main image',
				'name' => 'main_image',
				'type' => 'image',
				'instructions' => 'Upload a large, landscape type image. It will be automatically resized to fit the available space.',
				'required' => 1,
				'save_format' => 'object',
				'preview_size' => 'large',
				'library' => 'all',
			),
			array (
				'key' => 'field_541844bec0544',
				'label' => 'Read more label',
				'name' => 'read_more_label',
				'type' => 'text',
				'instructions' => 'Change the label on the Read More field',
				'required' => 1,
				'default_value' => 'READ MORE',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_54184645ca207',
				'label' => 'Read more link',
				'name' => 'read_more_link',
				'type' => 'page_link',
				'instructions' => 'Enter the where you want the read more link to go',
				'post_type' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_54197e9957d81',
				'label' => 'Action List',
				'name' => 'action_list',
				'type' => 'wysiwyg',
				'instructions' => 'Enter a bullet list of the actions that should go here along with the label',
				'required' => 1,
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'homepage.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_secondary-navigation-menu',
		'title' => 'Secondary Navigation Menu',
		'fields' => array (
			array (
				'key' => 'field_542ca069df0fb',
				'label' => 'Secondary navigation',
				'name' => 'secondary_navigation',
				'type' => 'nav_menu',
				'save_format' => 'id',
				'container' => 'div',
				'allow_null' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'two-column.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
?>
