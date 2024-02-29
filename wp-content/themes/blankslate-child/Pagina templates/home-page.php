<?php
/**
 * Template Name: Home
 * Description: De template voor de homepagina.
 *
 * @package Blankstate
 * @version 1.0.0
 */
?>

<?php get_header(); ?>

<div class="achtergrond" style="background-image: linear-gradient( rgb(0 0 0 / 5%), rgb(0 0 0 / 5%) ), url(<?php the_field('bigImageBackground-home_1'); ?>)">
    <div class="bruiloft-home">
        <div class="bruiloft-div-1" style="background-image: linear-gradient( rgb(0 0 0 / 5%), rgb(0 0 0 / 5%) ), url(<?php the_field('bruiloft_afbeelding-home_1'); ?>)">
            <div class="vintagePapierMetPlakband" style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php the_field('vintage_papier_met_plakband-home'); ?>)">
            <?php if ( have_rows( 'tekst_in_vintage_papier_groep' ) ) : ?>
                <?php while ( have_rows( 'tekst_in_vintage_papier_groep' ) ) : the_row(); ?>
                    <h2 class="titelPapierBruiloft"><?php the_sub_field( 'tekst_in_vintage_groep_1' ); ?></h2>
                    <h2 class="namenPapierBruiloft"><?php the_sub_field( 'tekst_in_vintage_groep_2' ); ?></h2>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
            <div class="bruiloftButton">
                <?php $knop_bruiloft_home_1 = get_field( 'knop-bruiloft-home_1' ); ?>
                <?php if ( $knop_bruiloft_home_1 ) : ?>
                    <a class="knopBruiloft" href="<?php echo esc_url( $knop_bruiloft_home_1['url'] ); ?>" target="<?php echo esc_attr( $knop_bruiloft_home_1['target'] ); ?>"><?php echo esc_html( $knop_bruiloft_home_1['title'] ); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>