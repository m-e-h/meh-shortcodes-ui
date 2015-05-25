<?php

add_action( 'init', 'meh_add_shortcodes' );

function meh_add_shortcodes() {

add_shortcode( 'meh_block',	'meh_block_shortcode' );
add_shortcode( 'featurerow',	'meh_featurerow_shortcode' );
add_shortcode( 'pullquote',	'meh_pullquote_shortcode' );
add_shortcode( 'buttons',	'meh_buttons_shortcode' );
add_shortcode( 'email',	'meh_email_shortcode' );
add_shortcode( 'phone',	'meh_phone_shortcode' );
add_shortcode( 'address',	'meh_address_shortcode' );
}




/**
 * BLOCK
 */
function meh_block_shortcode( $atts, $content = null ) {

    global $mehsc_atts;

    $mehsc_atts   = shortcode_atts( array(
    	'width'   => '',
        'heading'   => '',
		'footer' => '',
		'icon' => '',
        'content' => $content
    ), $atts, 'meh_block' );

    $template = new MEHSC_Template_Loader;

    ob_start();

    $template->get_template_part( 'block' );

    return ob_get_clean();

}





/**
 * QUOTE
 */
function meh_pullquote_shortcode( $attr ) {

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
function meh_buttons_shortcode( $attr ) {

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
function meh_email_shortcode( $attr ) {

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
function meh_phone_shortcode( $attr ) {

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
function meh_address_shortcode( $attr ) {

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

