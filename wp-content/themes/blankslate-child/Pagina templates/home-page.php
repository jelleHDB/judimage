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
    <div class="achtergrond achtergrond-1 rellax" data-rellax-speed="-5">
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
    <div class="achtergrond achtergrond-2 rellax" data-rellax-speed="2" data-rellax-zindex="5">
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

<div class="waaromJudimage rellax" data-rellax-speed="0">
    <hr class="zwarte-lijn rellax" data-rellax-speed="1"> 
    <div class="waaromJudimage-inner">
        <div class="waaromJudimage-c1">
            <h2 class="titel-waaromJudimage rellax" data-rellax-speed="1"><?php the_field( 'titel-waaromJudimage-home' ); ?></h2>
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
    <h2 class="titel-portfolio rellax" data-rellax-speed="0"><?php the_field( 'titel-portfolio-home' ); ?></h2>
    <div class="portfolio-home-inner rellax" data-rellax-speed="4">
        <?php if ( have_rows( 'portfolio-herhaler-home' ) ) : ?>
            <?php while ( have_rows( 'portfolio-herhaler-home' ) ) : the_row(); ?>
                <div class="img-box">
                    <?php if ( get_sub_field( 'afbeelding-portfolio-home' ) ) : ?>
                        <img class="portfolio-home-img-rep" src="<?php the_sub_field( 'afbeelding-portfolio-home' ); ?>" />
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

<div class="home-ervaringen" style="background-image: linear-gradient( rgb(255 255 255 / 57%), rgb(255 255 255 / 54%) ), url(<?php the_field('achtergrond_afbeelding-ervaringenHome'); ?>)">
    <div class="home-ervaringen-inner">
        <h2 class="titel-ervaringenHome rellax" data-rellax-speed="1.5"><?php the_field( 'titel-ervaringenHome' ); ?></h2>
        <?php $knop_ervaringenHome = get_field( 'knop-ervaringenHome' ); ?>
        <?php if ( $knop_ervaringenHome ) : ?>
            <div class="knopErvaringenHome rellax" data-rellax-speed="-1.5">
                <a class="knop-ervaringenHome knopBruiloft" href="<?php echo esc_url( $knop_ervaringenHome['url'] ); ?>" target="<?php echo esc_attr( $knop_ervaringenHome['target'] ); ?>"><?php echo esc_html( $knop_ervaringenHome['title'] ); ?></a>
            </div>
        <?php endif; ?>
            <div class="ervaringenHome">
            <?php if ( have_rows( 'ervaringen-repeaterHome' ) ) : ?>
                <?php while ( have_rows( 'ervaringen-repeaterHome' ) ) : the_row(); ?>
                    <?php if ( have_rows( 'groupHome-ervaring' ) ) : ?>
                        <?php while ( have_rows( 'groupHome-ervaring' ) ) : the_row(); ?>
                            <div class="ervaring-single rellax" data-rellax-speed="-0.5">
                                <?php if ( get_sub_field( 'GroupHome-afbeelding' ) ) : ?>
                                    <img class="ervaring-single-img" src="<?php the_sub_field( 'GroupHome-afbeelding' ); ?>" />
                                <?php endif ?>
                                <h3 class="ervaring-single-naam rellax" data-rellax-speed="0"><?php the_sub_field( 'GroupHome-namen' ); ?></h3>
                                <div class="ervaring-single-info"><?php the_sub_field( 'GroupHome-informatie' ); ?></div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // No rows found ?>
            <?php endif; ?>
        </div>
    </div>
    <hr class="witteLijn-achtergrond" style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php the_field('achtergrond_afbeelding_wit-ervaringenHome'); ?>)">
</div>

<div class="home-cta" style="background-image: linear-gradient( rgb(0 0 0 / 60%), rgb(0 0 0 / 60%) ), url(<?php the_field('achtergrond_afbeelding-ctaHome'); ?>)">
    <div class="home-cta-inner">
        <div class="home-cta-info">
            <h2 class="titel-home-cta"><span class="rellax" data-rellax-speed="1"><?php the_field( 'titel-home-cta' ); ?></span></h2>
            <div class="div-knop-ctaHome">
                <?php $knop_ctaHome = get_field( 'knop-ctaHome' ); ?>
                <?php if ( $knop_ctaHome ) : ?>
                    <a class="knopBruiloft knopCtaHome" href="<?php echo esc_url( $knop_ctaHome['url'] ); ?>" target="<?php echo esc_attr( $knop_ctaHome['target'] ); ?>"><?php echo esc_html( $knop_ctaHome['title'] ); ?></a>
                <?php endif; ?>
            </div>
        </div>
        <div class="home-cta-images">
            <?php if ( have_rows( 'afbeeldingen-ctaHome' ) ) : ?>
                <?php while ( have_rows( 'afbeeldingen-ctaHome' ) ) : the_row(); ?>
                    <?php if ( get_sub_field( 'afbeelding-homeCta_1' ) ) : ?>
                        <img class="img-cta-home img-cta-home-1" src="<?php the_sub_field( 'afbeelding-homeCta_1' ); ?>" />
                    <?php endif ?>
                    <?php if ( get_sub_field( 'afbeelding-homeCta_2' ) ) : ?>
                        <img class="img-cta-home img-cta-home-2" src="<?php the_sub_field( 'afbeelding-homeCta_2' ); ?>" />
                    <?php endif ?>
                    <?php if ( get_sub_field( 'afbeelding-homeCta_3' ) ) : ?>
                        <img class="img-cta-home img-cta-home-3" src="<?php the_sub_field( 'afbeelding-homeCta_3' ); ?>" />
                    <?php endif ?>
                    <?php if ( get_sub_field( 'afbeelding-homeCta_4' ) ) : ?>
                        <img class="img-cta-home img-cta-home-4" src="<?php the_sub_field( 'afbeelding-homeCta_4' ); ?>" />
                    <?php endif ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="home-insta" style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php the_field('achtergrond_afbeelding-instaHome'); ?>)">
    <div class="home-insta-inner">
        <h2 class="titel-instaHome rellax" data-rellax-speed="2"><?php the_field( 'titel-instaHome' ); ?></h2>
        <div class="fotos-instaHome">
            <?php if ( have_rows( 'fotos_instagram-instaHome' ) ) : ?>
                <?php while ( have_rows( 'fotos_instagram-instaHome' ) ) : the_row(); ?>
                    <?php if ( get_sub_field( 'afbeelding-homeInsta' ) ) : ?>
                        <img class="instagram-foto-home" src="<?php the_sub_field( 'afbeelding-homeInsta' ); ?>" />
                    <?php endif ?>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // No rows found ?>
            <?php endif; ?>
        </div>
        <div class="knopInstaDiv-home">
            <?php $knop_homeInsta = get_field( 'knop-homeInsta' ); ?>
            <?php if ( $knop_homeInsta ) : ?>
                <a class="knopBruiloft knopInsta" href="<?php echo esc_url( $knop_homeInsta['url'] ); ?>" target="<?php echo esc_attr( $knop_homeInsta['target'] ); ?>"><?php echo esc_html( $knop_homeInsta['title'] ); ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="../judimage/wp-content/themes/blankslate-child/node_modules/rellax/rellax.min.js"></script>
<script src="../judimage/wp-content/themes/blankslate-child/node_modules/simple-parallax-js/src/simpleParallax.js"></script>
<script>
    var rellax = new Rellax('.rellax', {
        horizontal: true,
    });

    var image = document.getElementsByClassName('afbeelding-waaromJudimage');
    new simpleParallax(image, {
        overflow: true,
        orientation: 'right'
    });

    var image1 = document.getElementsByClassName('img-cta-home-1');
    new simpleParallax(image1, {
        overflow: true,
        orientation: 'right',
        delay: 3
    });

    var image2 = document.getElementsByClassName('img-cta-home-2');
    new simpleParallax(image2, {
        overflow: true,
        orientation: 'left',
        delay: 2.2
    });

    var image3 = document.getElementsByClassName('img-cta-home-3');
    new simpleParallax(image3, {
        overflow: true,
        orientation: 'right',
        delay: 1.4
    });

    var image4 = document.getElementsByClassName('img-cta-home-4');
    new simpleParallax(image4, {
        overflow: true,
        orientation: 'left',
        delay: .9
    });

    var imageInsta = document.getElementsByClassName('instagram-foto-home');
    new simpleParallax(imageInsta, {
        overflow: true,
        orientation: 'left',
        delay: 2
    });


</script>


<?php get_footer(); ?>