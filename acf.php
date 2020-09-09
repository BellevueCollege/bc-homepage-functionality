<?php
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5f58f9f3b2dc8',
		'title' => 'Around Campus fields',
		'fields' => array(
			array(
				'key' => 'field_5f58fa0888627',
				'label' => 'Date or Date/Time',
				'name' => '_ct_text_5a15b9e1548df',
				'type' => 'text',
				'instructions' => 'Publish date for articles, or date/time or date/time range for events. This is an open text field- type dates using AP style.',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5f58fa5688628',
				'label' => 'Link URL',
				'name' => '_ct_text_5a15ba386625f',
				'type' => 'url',
				'instructions' => 'Enter the URL which you would like this featured area to link to from the homepage',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'around_campus',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	acf_add_local_field_group(array(
		'key' => 'group_5f58f71fa87e3',
		'title' => 'Content Modules fields',
		'fields' => array(
			array(
				'key' => 'field_5f58f7a2eb671',
				'label' => 'Module Type',
				'name' => '_ct_radio_5a296fd821ba3',
				'type' => 'radio',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'Text' => 'Text',
					'Image Link' => 'Image Link',
					'Image Link with Button' => 'Image Link with Button',
					'Full Size Content (Embeds, etc)' => 'Full Size Content (Embeds, etc)',
				),
				'allow_null' => 0,
				'other_choice' => 0,
				'default_value' => 'Text',
				'layout' => 'vertical',
				'return_format' => 'label',
				'save_other_choice' => 0,
			),
			array(
				'key' => 'field_5f58f959eb672',
				'label' => 'Module Width',
				'name' => '_ct_selectbox_5a2999d4a9f67',
				'type' => 'select',
				'instructions' => 'Three column grid',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'one-third' => 'one-third',
					'two-thirds' => 'two-thirds',
					'full' => 'full',
				),
				'default_value' => 'one-third',
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'return_format' => 'value',
				'ajax' => 0,
				'placeholder' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'content_modules',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	endif;
