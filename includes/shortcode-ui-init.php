<?php

add_action( 'init', 'meh_add_shortcake' );


/**
 * SHORTCAKE
 * https://github.com/fusioneng/Shortcake
 */
function meh_add_shortcake() {

	/* Make sure the Shortcake plugin https://github.com/fusioneng/Shortcake is active. */
if ( ! function_exists( 'shortcode_ui_register_for_shortcode' ) )
	return;

	/**
	 * PANEL
	 */
	shortcode_ui_register_for_shortcode(
		'meh_block',
		array(

			'label' => 'Block',

			'listItemImage' => 'dashicons-slides',

			// Attribute model expects 'attr', 'type' and 'label'
			// Supported field types: text, checkbox, textarea, radio, select, email, url, number, and date.
			'attrs' => array(
                array(
                    'label' => 'Icon',
                    'attr'  => 'icon',
                    'type' => 'select',
                    'options' => array(
                        '' => 'None',
                        'quote' => 'Quote',
                        'calendar' => 'Calendar',
                        'church' => 'Church',
                        'sports' => 'Sports',
                        'image' => 'Image',
                        'chat' => 'Chat',
                        'pencils' => 'Pencils',
                    ),
                        'description' => 'Don\'t use this if you are using an image.',
                ),
                array(
                    'label' => 'Heading',
                    'attr'  => 'heading',
                    'type'  => 'text',
                    'description' => 'Optional',
                ),
				array(
					'label' => 'Content',
					'attr'  => 'content',
					'type'  => 'textarea',
                    'description' => 'Optional',
				),
                array(
                    'label' => 'Footer Link',
                    'attr'  => 'footer',
                    'type'  => 'text',
                    'description' => 'Optional',
                ),
                array(
                    'label' => 'Width',
                    'attr'  => 'width',
                    'type' => 'select',
                    'options' => array(
                        'u-1of1@md' => 'Full Width',
                        'u-1of3@md' => 'One Third',
                        'u-1of4@md' => 'One Fourth',
                    ),
                ),
			),
		)
	);




	/**
	 * PANEL
	 */
	shortcode_ui_register_for_shortcode(
		'meh_block_row',
		array(

			'label' => 'Feature Row',

			'listItemImage' => 'dashicons-editor-insertmore',

			// Attribute model expects 'attr', 'type' and 'label'
			// Supported field types: text, checkbox, textarea, radio, select, email, url, number, and date.
			'attrs' => array(
				array(
					'label' => 'Icon',
					'attr'  => 'icon1',
					'type'  => 'select',
                    'options' => array(
                        '' => 'None',
                        'quote' => 'Quote',
                        'calendar' => 'Calendar',
                        'church' => 'Church',
                        'sports' => 'Sports',
                        'image' => 'Image',
                        'chat' => 'Chat',
                        'pencils' => 'Pencils',
					),
                    'description' => 'Don\'t use this if you are using an image.',
				),
				array(
					'label' => 'Heading',
					'attr'  => 'heading1',
					'type'  => 'text',
					'description' => 'Optional',
				),
				array(
					'label' => 'Content',
					'attr'  => 'content1',
					'type'  => 'textarea',
                    'description' => 'Optional',
				),
                array(
                    'label' => 'Footer Link',
                    'attr'  => 'footer1',
                    'type'  => 'text',
                    'description' => 'Optional',
                ),
				array(
					'label' => 'Icon',
					'attr'  => 'icon2',
					'type'  => 'select',
                    'options' => array(
                        '' => 'None',
                        'quote' => 'Quote',
                        'calendar' => 'Calendar',
                        'church' => 'Church',
                        'sports' => 'Sports',
                        'image' => 'Image',
                        'chat' => 'Chat',
                        'pencils' => 'Pencils',
					),
                    'description' => 'Don\'t use this if you are using an image.',
				),
				array(
					'label' => 'Heading',
					'attr'  => 'heading2',
					'type'  => 'text',
					'description' => 'Optional',
				),
				array(
					'label' => 'Content',
					'attr'  => 'content2',
					'type'  => 'textarea',
                    'description' => 'Optional',
				),
                array(
                    'label' => 'Footer Link',
                    'attr'  => 'footer2',
                    'type'  => 'text',
                    'description' => 'Optional',
                ),
				array(
					'label' => 'Icon',
					'attr'  => 'icon3',
					'type'  => 'select',
                    'options' => array(
                        '' => 'None',
                        'quote' => 'Quote',
                        'calendar' => 'Calendar',
                        'church' => 'Church',
                        'sports' => 'Sports',
                        'image' => 'Image',
                        'chat' => 'Chat',
                        'pencils' => 'Pencils',
					),
                    'description' => 'Don\'t use this if you are using an image.',
				),
				array(
					'label' => 'Heading',
					'attr'  => 'heading3',
					'type'  => 'text',
					'description' => 'Optional',
				),
				array(
					'label' => 'Content',
					'attr'  => 'content3',
					'type'  => 'textarea',
                    'description' => 'Optional',
				),
                array(
                    'label' => 'Footer Link',
                    'attr'  => 'footer3',
                    'type'  => 'text',
                    'description' => 'Optional',
                ),
			),
		)
	);




	/**
	 * QUOTE
	 */
	shortcode_ui_register_for_shortcode(
		'pullquote',
		array(

			'label' => 'Pullquote',

			'listItemImage' => 'dashicons-editor-quote',

			'attrs' => array(
				array(
					'label' => 'Quote',
					'attr'  => 'quote',
					'type'  => 'textarea',
				),
				array(
					'label' => 'Cite',
					'attr'  => 'source',
					'type'  => 'text',
				),
			),
		)
	);




	/**
	 * BUTTONS
	 */
    shortcode_ui_register_for_shortcode(
        'buttons',
        array(

            'label' => 'Button',

            'listItemImage' => 'dashicons-share-alt2',

            'attrs' => array(
            	array(
                    'label' => 'Button Type',
                    'attr'  => 'buttontype',
                    'type'  => 'select',
                    'options' => array(
                    	'btn'		=> __( 'General', 'meh' ),
						'info'		=> __( 'Information', 'meh' ),
						'form'		=> __( 'Form', 'meh' ),
						'donate'	=> __( 'Donate', 'meh' ),
						'link-ext'	=> __( 'External Link', 'meh' ),
					),
                ),
                array(
                    'label' => 'Label',
                    'attr'  => 'label',
                    'type'  => 'text',
                ),
                array(
                    'label' => 'Link',
                    'attr'  => 'link',
                    'type'  => 'url',
                ),
            ),
        )
    );




	/**
	 * EMAIL
	 */
	shortcode_ui_register_for_shortcode(
		'email',
		array(

			'label' => 'Email',

			'listItemImage' => 'dashicons-email-alt',

			'attrs' => array(
				array(
					'label' => 'Email Address',
					'attr'  => 'tomail',
					'type'  => 'email',
				),
				array(
					'label' => 'Email Subject Line',
					'attr'  => 'subject',
					'type'  => 'text',
					'description' => 'The subject line when an email is composed from this link.'
				),
			),
		)
	);




	/**
	 * PHONE
	 */
	shortcode_ui_register_for_shortcode(
		'phone',
		array(

			'label' => 'Phone',

			'listItemImage' => 'dashicons-phone',

			'attrs' => array(
				array(
					'label' => 'Area Code',
					'attr'  => 'areacode',
					'type'  => 'text',
					'description' => '(3 digits) ex: 704',
				),
				array(
					'label' => 'Local',
					'attr'  => 'local',
					'type'  => 'text',
					'description' => '(7 digits) ex: 555-5555',
				),
			),
		)
	);




    /**
     * ADDRESS
     */
    shortcode_ui_register_for_shortcode(
        'address',
        array(

            'label' => 'Address',

            'listItemImage' => 'dashicons-location-alt',

            'attrs' => array(
                array(
                    'label' => 'Name of Person',
                    'attr'  => 'nameperson',
                    'type'  => 'text',
                    'description'  => 'name or business name',
                ),
                array(
                    'label' => 'Place or Title',
                    'attr'  => 'nameplace',
                    'type'  => 'text',
                    'description'  => 'name or business name',
                ),
            	array(
                    'label' => 'Street',
                    'attr'  => 'street',
                    'type'  => 'text',
                ),
                array(
                    'label' => 'City',
                    'attr'  => 'city',
                    'type'  => 'text',
                ),
                array(
                    'label' => 'State',
                    'attr'  => 'state',
                    'type'  => 'text',
                ),
                array(
                    'label' => 'Zip',
                    'attr'  => 'zip',
                    'type'  => 'text',
                ),
            ),
        )
    );

}
