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

<div class="achtergrond-big" style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php the_field('bigImageBackground-home_1'); ?>)">
    <div class="achtergrond achtergrond-1">
        <div class="bruiloft-home">
            <div class="bruiloft-div-1" style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php the_field('bruiloft_afbeelding-home_1'); ?>)">
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
    <div class="achtergrond achtergrond-2">
        <div class="bruiloft-home">
            <div class="bruiloft-div-1" style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php the_field('bruiloft_afbeelding-home_2'); ?>)">
                <div class="vintagePapierMetPlakband" style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php the_field('vintage_papier_met_plakband-home_2'); ?>)">
                <?php if ( have_rows( 'tekst_in_vintage_papier_groep_2' ) ) : ?>
                    <?php while ( have_rows( 'tekst_in_vintage_papier_groep_2' ) ) : the_row(); ?>
                        <h2 class="titelPapierBruiloft"><?php the_sub_field( 'tekst_in_vintage_groep_3' ); ?></h2>
                        <h2 class="namenPapierBruiloft"><?php the_sub_field( 'tekst_in_vintage_groep_4' ); ?></h2>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
                <div class="bruiloftButton">
                    <?php $knop_bruiloft_home_1 = get_field( 'knop-bruiloft-home_2' ); ?>
                    <?php if ( $knop_bruiloft_home_1 ) : ?>
                        <a class="knopBruiloft" href="<?php echo esc_url( $knop_bruiloft_home_1['url'] ); ?>" target="<?php echo esc_attr( $knop_bruiloft_home_1['target'] ); ?>"><?php echo esc_html( $knop_bruiloft_home_1['title'] ); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
$(document).ready(function() {
    var scroll_start = 0;
    var start_change = $('.achtergrond-big');
    var offset = start_change.offset();
    var startchangePos = offset.top;

    $(document).scroll(function() {
        scroll_start = $(this).scrollTop();
        if(scroll_start > startchangePos) {
            $('.achtergrond-big').css('background-image', 'url(<?php the_field('bigImageBackground-home_2'); ?>)');
        } else {
            $('.achtergrond-big').css('background-image', 'url(<?php the_field('bigImageBackground-home_1'); ?>)');
        }
    });
});
</script>

<div class="waaromJudimage">
    <hr class="zwarte-lijn"> 
    <div class="waaromJudimage-inner">
        <div class="waaromJudimage-c1">
            <h2 class="titel-waaromJudimage"><?php the_field( 'titel-waaromJudimage-home' ); ?></h2>
            <div class="informatie-waaromJudimage"><?php the_field( 'informatie-waaromJudimage-home' ); ?></div>
            <?php $knop_waaromJudimage_home = get_field( 'knop-waaromJudimage-home' ); ?>
            <?php if ( $knop_waaromJudimage_home ) : ?>
                <a class="knopBruiloft" href="<?php echo esc_url( $knop_waaromJudimage_home['url'] ); ?>" target="<?php echo esc_attr( $knop_waaromJudimage_home['target'] ); ?>"><?php echo esc_html( $knop_waaromJudimage_home['title'] ); ?></a>
            <?php endif; ?>
        </div>
        <div class="waaromJudimage-c2">
            <?php if ( get_field( 'afbeelding-waaromJudimage-home' ) ) : ?>
                <img class="afbeelding-waaromJudimage" src="<?php the_field( 'afbeelding-waaromJudimage-home' ); ?>" />
            <?php endif ?>
        </div>
    </div>
</div>
<div class="portfolio-home" style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php the_field('wit_achtergrond-portfolio-home'); ?>)">
    <hr class="zwarte-lijn zwarte-lijn-portfolio-home" style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php the_field('achtergrond_afbeelding-portfolio-home'); ?>)">
    <h2 class="titel-portfolio"><?php the_field( 'titel-portfolio-home' ); ?></h2>
    <div class="portfolio-home-inner">
        <?php if ( have_rows( 'portfolio-herhaler-home' ) ) : ?>
            <?php while ( have_rows( 'portfolio-herhaler-home' ) ) : the_row(); ?>
                <div class="img-box">
                    <?php if ( get_sub_field( 'afbeelding-portfolio-home' ) ) : ?>
                        <img src="<?php the_sub_field( 'afbeelding-portfolio-home' ); ?>" />
                    <?php endif ?>
                    <?php if ( have_rows( 'informatie_in_afbeelding-portfolio-home' ) ) : ?>
                        <?php while ( have_rows( 'informatie_in_afbeelding-portfolio-home' ) ) : the_row(); ?>
                            <div class="transparent-box">
                                <div class="caption">
                                <p><?php the_sub_field( 'titel_in_afbeelding-herhaler-portfolio-home' ); ?></p>
                                <p class="opacity-low"><?php the_sub_field( 'info_in_afbeelding-herhaler-portfolio-home' ); ?></p>
                                </div>
                            </div> 
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>
    </div>
    <div class="knopDiv">
        <?php $knop_portfolio_home = get_field( 'knop-portfolio-home' ); ?>
        <?php if ( $knop_portfolio_home ) : ?>
            <a class="knopBruiloft" href="<?php echo esc_url( $knop_portfolio_home['url'] ); ?>" target="<?php echo esc_attr( $knop_portfolio_home['target'] ); ?>"><?php echo esc_html( $knop_portfolio_home['title'] ); ?></a>
        <?php endif; ?>
    </div>
</div>



<?php get_footer(); ?>