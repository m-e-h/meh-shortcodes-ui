<?php

add_action( 'init', 'doc_add_shortcodes' );

function doc_add_shortcodes() {

add_shortcode( 'panel',	'doc_panel_shortcode' );
add_shortcode( 'pullquote',	'doc_pullquote_shortcode' );
add_shortcode( 'buttons',	'doc_buttons_shortcode' );
add_shortcode( 'email',	'doc_email_shortcode' );
add_shortcode( 'phone',	'doc_phone_shortcode' );
add_shortcode( 'address',	'doc_address_shortcode' );
}

/**
 * PANEL
 */
function doc_panel_shortcode( $attr ) {

	extract( shortcode_atts(
		array(
			'heading' => '',
			'message' => '',
			'type' => ''
		), $attr )
	);

	ob_start();

	$return = '<div class="panel panel--' .$type. '">';
	if (!empty($type)) $return .= '<div class="panel__icon"><span></span></div>';
	$return .= '<div class="panel__body">';
	if (!empty($heading)) $return .= '<h4>'.$heading.'</h4>';
	$return .= '<p>'.$message.'</p></div></div>';
	return $return;

	return ob_get_clean();
}




/**
 * QUOTE
 */
function doc_pullquote_shortcode( $attr ) {

	extract( shortcode_atts(
		array(
			'quote' => '',
			'source' => ''
		), $attr )
	);

	ob_start();

	$return = '<blockquote class="pullquote">' .$quote. '<br/>';
	$return .= '<cite>'.$source.'</cite></blockquote>';
	return $return;

	return ob_get_clean();
}




/**
 * BUTTONS
 */
function doc_buttons_shortcode( $attr ) {

	extract( shortcode_atts(
		array(
			'type' => '',
			'link' => '',
			'label' => ''
		), $attr )
	);

	ob_start();

	$return = '<a href="' .$link. '" class="button button--'.$type.'"> ';
	$return .= $label.'</a>';
	return $return;

	return ob_get_clean();
}




/**
 * EMAIL
 */
function doc_email_shortcode( $attr ) {

	extract( shortcode_atts(
		array(
			'tomail' => '',
			'subject' => ''
		), $attr )
	);

	ob_start();

	$return = '<a href="mailto:' .$tomail;
	if (!empty($subject)) $return .= ' ?subject='.$subject;
	$return .= '">'.$tomail .'</a><br>';
	return $return;

	return ob_get_clean();
}




/**
 * PHONE
 */
function doc_phone_shortcode( $attr ) {

	extract( shortcode_atts(
		array(
			'areacode' => '',
			'local' => ''
		), $attr )
	);

	ob_start();

	$return = '<a href="tel:'.$areacode.'-'.$local.'"">';
	$return .= '('.$areacode.')'.$local.'</a><br>';
	return $return;

	return ob_get_clean();
}




/**
 * ADDRESS
 */
function doc_address_shortcode( $attr ) {

	extract( shortcode_atts(
		array(
            'nameperson' => '',
            'nameplace' => '',
            'street' => '',
            'city' => '',
            'state' => '',
            'zip' => '',
		), $attr )
	);

	ob_start();

	$return = '<address>';
	if (!empty($nameperson)) $return .= '<h4>'.$nameperson.'</h4>';
	if (!empty($nameplace)) $return .= '<h4>'.$nameplace.'</h4>';
	if (!empty($street)) $return .= '<span>'.$street.'</span><br>';
	if (!empty($city)) $return .= '<span>'.$city.'</span>, ';
	if (!empty($state)) $return .= '<span>'.$state.'</span> ';
	if (!empty($zip)) $return .= '<span>'.$zip.'</span>';
	$return .= '</address>';
	return $return;

	return ob_get_clean();
}

