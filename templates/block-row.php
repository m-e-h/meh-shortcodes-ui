<?php
global $mehsc_atts;
?>

<div class="block-row grid flex flex--row@md flex--wrap">
<div class="block grid__item flex--1 u-pr@respond">
    <div class="block__content">

        <?php if( ! empty( $mehsc_atts['icon1'] ) ) : ?>
        <div class="block__icon u-round t-bg__grey--light u-p@respond u-mt">
            <?php get_template_part( 'images/vector/svg', esc_attr($mehsc_atts['icon1'] )); ?>
        </div>
        <?php endif; ?>

    <?php if( ! empty( $mehsc_atts['heading1'] ) ) : ?>
    <h2 class="block__title"><?php echo esc_attr( $mehsc_atts['heading1'] ); ?></h2>
    <?php endif; ?>

    <p class="block__body"><?php echo esc_html( $mehsc_atts['content1'] ); ?></p>

        <?php if( ! empty( $mehsc_atts['footer1'] ) ) : ?>
        <div class="block__action">
            <a href="#"><?php echo esc_attr( $mehsc_atts['footer1'] ); ?></a>
        </div>
        <?php endif; ?>
    </div>
</div>

<div class="block grid__item flex--1">
    <div class="block__content">

        <?php if( ! empty( $mehsc_atts['icon2'] ) ) : ?>
        <div class="block__icon u-round t-bg__grey--light u-p@respond u-mt">
            <?php get_template_part( 'images/vector/svg', esc_attr($mehsc_atts['icon2'] )); ?>
        </div>
        <?php endif; ?>

    <?php if( ! empty( $mehsc_atts['heading2'] ) ) : ?>
    <h2 class="block__title"><?php echo esc_attr( $mehsc_atts['heading2'] ); ?></h2>
    <?php endif; ?>

    <p class="block__body"><?php echo esc_attr( $mehsc_atts['content2'] ); ?></p>

        <?php if( ! empty( $mehsc_atts['footer2'] ) ) : ?>
        <div class="block__action">
            <a href="#"><?php echo esc_attr( $mehsc_atts['footer2'] ); ?></a>
        </div>
        <?php endif; ?>
    </div>
</div>

<div class="block grid__item flex--1 u-pl@respond">
    <div class="block__content">

        <?php if( ! empty( $mehsc_atts['icon3'] ) ) : ?>
        <div class="block__icon u-round t-bg__grey--light u-p@respond u-mt">
            <?php get_template_part( 'images/vector/svg', esc_attr($mehsc_atts['icon3'] )); ?>
        </div>
        <?php endif; ?>

    <?php if( ! empty( $mehsc_atts['heading3'] ) ) : ?>
    <h2 class="block__title"><?php echo esc_attr( $mehsc_atts['heading3'] ); ?></h2>
    <?php endif; ?>

    <p class="block__body"><?php echo esc_html( $mehsc_atts['content3'] ); ?></p>

        <?php if( ! empty( $mehsc_atts['footer3'] ) ) : ?>
        <div class="block__action">
            <a href="#"><?php echo esc_attr( $mehsc_atts['footer3'] ); ?></a>
        </div>
        <?php endif; ?>
    </div>
</div>
</div>
