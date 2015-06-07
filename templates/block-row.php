<?php
global $mehsc_atts;
?>
<section class="section block-section u-pt@respond t-bg__grey--light u-mb@respond">
<div class="block-row grid u-flex u-flex--row@md u-flex--w wrap">
<div class="block u-mb@respond grid__item u-flexed--1 u-pr@respond">
    <div class="block__content shadow--z1 t-bg__white">

        <?php if( ! empty( $mehsc_atts['icon1'] ) ) : ?>
        <div class="block__icon u-mhAuto u-pt">
            <?php get_template_part( 'images/vector/svg', esc_attr($mehsc_atts['icon1'] )); ?>
        </div>
        <?php endif; ?>

    <?php if( ! empty( $mehsc_atts['heading1'] ) ) : ?>
    <h2 class="block__title u-center u-bold u-ph"><?php echo esc_attr( $mehsc_atts['heading1'] ); ?></h2>
    <?php endif; ?>

    <p class="block__body t-bg__1 u-p"><?php echo wp_kses_post( $mehsc_atts['content1'] ); ?></p>

        <?php if( ! empty( $mehsc_atts['footer1'] ) ) : ?>
        <div class="block__action u-center t-bg__1--dark u-ph u-pv-">
            <a href="#"><?php echo esc_attr( $mehsc_atts['footer1'] ); ?></a>
        </div>
        <?php endif; ?>
    </div>
</div>

<div class="block u-mb@respond grid__item u-flexed--1">
    <div class="block__content shadow--z1 t-bg__white">

        <?php if( ! empty( $mehsc_atts['icon2'] ) ) : ?>
        <div class="block__icon u-mhAuto u-pt">
            <?php get_template_part( 'images/vector/svg', esc_attr($mehsc_atts['icon2'] )); ?>
        </div>
        <?php endif; ?>

    <?php if( ! empty( $mehsc_atts['heading2'] ) ) : ?>
    <h2 class="block__title u-center u-bold u-ph"><?php echo esc_attr( $mehsc_atts['heading2'] ); ?></h2>
    <?php endif; ?>

    <p class="block__body t-bg__1 u-p"><?php echo wp_kses_post( $mehsc_atts['content2'] ); ?></p>

        <?php if( ! empty( $mehsc_atts['footer2'] ) ) : ?>
        <div class="block__action u-center t-bg__1--dark u-ph u-pv-">
            <a href="#"><?php echo esc_attr( $mehsc_atts['footer2'] ); ?></a>
        </div>
        <?php endif; ?>
    </div>
</div>

<div class="block u-mb@respond grid__item u-flexed--1 u-pl@respond">
    <div class="block__content shadow--z1 t-bg__white">

        <?php if( ! empty( $mehsc_atts['icon3'] ) ) : ?>
        <div class="block__icon u-mhAuto u-pt">
            <?php get_template_part( 'images/vector/svg', esc_attr($mehsc_atts['icon3'] )); ?>
        </div>
        <?php endif; ?>

    <?php if( ! empty( $mehsc_atts['heading3'] ) ) : ?>
    <h2 class="block__title u-center u-bold u-ph"><?php echo esc_attr( $mehsc_atts['heading3'] ); ?></h2>
    <?php endif; ?>

    <p class="block__body t-bg__1 u-p"><?php echo wp_kses_post( $mehsc_atts['content3'] ); ?></p>

        <?php if( ! empty( $mehsc_atts['footer3'] ) ) : ?>
        <div class="block__action u-center t-bg__1--dark u-ph u-pv-">
            <a href="#"><?php echo esc_attr( $mehsc_atts['footer3'] ); ?></a>
        </div>
        <?php endif; ?>
    </div>
</div>
</div>
</section>
