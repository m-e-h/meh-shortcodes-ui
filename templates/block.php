<?php
global $mehsc_atts;
?>

<div class="block grid__item <?php echo esc_attr( $mehsc_atts['width'] ); ?>">
    <div class="block__content">

        <?php if( ! empty( $mehsc_atts['icon'] ) ) : ?>
        <div class="block__icon u-round t-bg__grey--light u-p@respond u-mt">
            <?php get_template_part( 'images/vector/svg', esc_attr($mehsc_atts['icon'] )); ?>
        </div>
        <?php endif; ?>

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
