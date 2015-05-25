<?php
global $mehsc_atts;
?>
<div class="block">
  <div class="block__content">

    <?php if( ! empty( $mehsc_atts['heading'] ) ) : ?>
    <h2 class="block__title"><?php echo esc_attr( $mehsc_atts['heading'] ); ?></h2>
    <?php endif; ?>

    <p class="block__body"><?php echo esc_html( $mehsc_atts['content'] ); ?></p>

        <?php if( ! empty( $mehsc_atts['footer'] ) ) : ?>
        <div class="block__action">
        <a href="#"><?php echo esc_attr( $mehsc_atts['footer'] ); ?></a>
        </div>
        <?php endif; ?>
  </div>
</div>
