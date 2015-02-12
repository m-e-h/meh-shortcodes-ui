<?php
add_action( 'init', function() {

	add_shortcode( 'pullquote', function( $attr, $content = '' ) {
		$attr = wp_parse_args( $attr, array(
			'source' => ''
		) );

		ob_start();
		?>

		<blockquote class="pullquote">
			<?php echo esc_html( $content ); ?><br/>
			<cite><?php echo esc_html( $attr['source'] ); ?></cite>
		</blockquote>

		<?php
		return ob_get_clean();
	} );

	shortcode_ui_register_for_shortcode(
		'pullquote',
		array(
			// Display label. String. Required.
			'label' => 'Pullquote',
			// Icon/image for shortcode. Optional. src or dashicons-$icon. Defaults to carrot.
			'listItemImage' => 'dashicons-editor-quote',
			// Available shortcode attributes and default values. Required. Array.
			// Attribute model expects 'attr', 'type' and 'label'
			// Supported field types: text, checkbox, textarea, radio, select, email, url, number, and date.
			'attrs' => array(
				array(
					'label' => 'Quote',
					'attr'  => 'content',
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

	add_shortcode( 'callout', function( $attr, $content = '' ) {
		$attr = wp_parse_args( $attr, array(
			'source' => ''
		) );

		ob_start();
		?>

		<blockquote class="callout">
			<?php echo esc_html( $content ); ?><br/>
			<cite><?php echo esc_html( $attr['source'] ); ?></cite>
		</blockquote>

		<?php
		return ob_get_clean();
	} );

	shortcode_ui_register_for_shortcode(
		'callout',
		array(
			// Display label. String. Required.
			'label' => 'Callout',
			// Icon/image for shortcode. Optional. src or dashicons-$icon. Defaults to carrot.
			'listItemImage' => 'dashicons-slides',
			// Available shortcode attributes and default values. Required. Array.
			// Attribute model expects 'attr', 'type' and 'label'
			// Supported field types: text, checkbox, textarea, radio, select, email, url, number, and date.
			'attrs' => array(
				array(
					'label' => 'Callout',
					'attr'  => 'content',
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
} );