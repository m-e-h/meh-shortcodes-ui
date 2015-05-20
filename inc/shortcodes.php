<?php

add_action( 'init', 'doc_add_shortcodes' );

function doc_add_shortcodes() {

add_shortcode( 'block',	'doc_block_shortcode' );
add_shortcode( 'featurerow',	'doc_featurerow_shortcode' );
add_shortcode( 'pullquote',	'doc_pullquote_shortcode' );
add_shortcode( 'buttons',	'doc_buttons_shortcode' );
add_shortcode( 'email',	'doc_email_shortcode' );
add_shortcode( 'phone',	'doc_phone_shortcode' );
add_shortcode( 'address',	'doc_address_shortcode' );
}

/**
 * BLOCK
 */
function doc_block_shortcode( $attr ) {

	extract( shortcode_atts(
		array(
			'heading' => '',
			'message' => '',
			'blocktype' => ''
		), $attr )
	);

	ob_start();

	$return = '<div class="block block--' .$blocktype. '">';
	if (!empty($blocktype)) $return .= '<div class="block__icon"><span></span></div>';
	$return .= '<div class="block__body">';
	if (!empty($heading)) $return .= '<h4>'.$heading.'</h4>';
	$return .= '<p>'.$message.'</p></div></div>';
	return $return;

	return ob_get_clean();
}




/**
 * FEATURE ROW
 */
function doc_featurerow_shortcode( $attr ) {

	extract( shortcode_atts(
		array(
			'heading1' => '',
			'message1' => '',
			'icon1' => '',
			'heading2' => '',
			'message2' => '',
			'icon2' => '',
			'heading3' => '',
			'message3' => '',
			'icon3' => ''
		), $attr )
	);

	ob_start();

	$return = '<aside class="grid flex flex--row">';

	$return .= '<section class="u-pr- u-pr@md u-pr+@lg u-mb- u-mb@md u-mb+@lg grid__item grid__item--flexed"><div class="br u-p@all t-bg__1">';

	$return .= '<div class="block__icon"><i class="fa fa-heart"></i></div>';
	$return .= '<h4 class="block__header">'.$heading1.'</h4>';
	$return .= '<p class="text-muted">'.$message1.'</p>';

	$return .= '</div></section>';

	$return .= '<section class="u-pr- u-pr@md u-pr+@lg u-mb- u-mb@md u-mb+@lg grid__item grid__item--flexed"><div class="br u-p@all t-bg__1">';

	$return .= '<div class="block__icon"><i class="fa fa-heart"></i></div>';
	$return .= '<h4 class="block__header">'.$heading2.'</h4>';
	$return .= '<p class="text-muted">'.$message2.'</p>';

	$return .= '</div></section>';

	$return .= '<section class="u-pr- u-pr@md u-pr+@lg u-mb- u-mb@md u-mb+@lg grid__item grid__item--flexed"><div class="br u-p@all t-bg__1">';

	$return .= '<div class="block__icon"><i class="fa fa-heart"></i></div>';
	$return .= '<h4 class="block__header">'.$heading3.'</h4>';
	$return .= '<p class="text-muted">'.$message3.'</p>';

	$return .= '</div></section>';

	$return .= '</aside>';

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
			'buttontype' => '',
			'link' => '',
			'label' => ''
		), $attr )
	);

	ob_start();

	$return = '<a href="' .$link. '" class="button button--'.$buttontype.'"> ';
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

