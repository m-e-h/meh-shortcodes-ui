<?php
global $sc101_atts;
?>
<div class="pw-box <?php echo esc_attr( $sc101_atts['color'] ); ?>" style="border-width: <?php echo esc_attr( $sc101_atts['border'] ); ?>">
	
	<?php if( ! empty( $sc101_atts['icon'] ) ) : ?>
		<span class="icon icon-<?php echo esc_attr( $sc101_atts['icon'] ); ?>"></span>
	<?php endif; ?>

	<?php echo wpautop( $sc101_atts['content'] ); ?>

</div>