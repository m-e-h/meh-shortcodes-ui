<?php

add_action( 'init', 'doc_add_shortcake' );


/**
 * SHORTCAKE
 * https://github.com/fusioneng/Shortcake
 */
function doc_add_shortcake() {

	/**
	 * PANEL
	 */
	shortcode_ui_register_for_shortcode(
		'panel',
		array(

			'label' => 'Panel',

			'listItemImage' => 'dashicons-info',

			// Attribute model expects 'attr', 'type' and 'label'
			// Supported field types: text, checkbox, textarea, radio, select, email, url, number, and date.
			'attrs' => array(
				array(
					'label' => 'Panel Type',
					'attr'  => 'type',
					'type'  => 'select',
                    'options' => array(
                    	''		=> __( 'Highlight', 'doc' ),
						'info'		=> __( 'Information', 'doc' ),
						'warning'		=> __( 'Warning', 'doc' ),
						'important'	=> __( 'Important', 'doc' ),
					),
				),
				array(
					'label' => 'Heading',
					'attr'  => 'heading',
					'type'  => 'text',
					'description' => 'Optional',
				),
				array(
					'label' => 'Content',
					'attr'  => 'message',
					'type'  => 'textarea',
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
                    'attr'  => 'type',
                    'type'  => 'select',
                    'options' => array(
                    	'btn'		=> __( 'General', 'doc' ),
						'info'		=> __( 'Information', 'doc' ),
						'form'		=> __( 'Form', 'doc' ),
						'donate'	=> __( 'Donate', 'doc' ),
						'link-ext'	=> __( 'External Link', 'doc' ),
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
