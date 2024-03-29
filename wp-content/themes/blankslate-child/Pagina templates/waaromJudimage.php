<?php
/**
 * Template Name: Waarom Judimage
 * Description: De template voor de waarom judimage pagina.
 *
 * @package Blankstate
 * @version 1.0.0
 */
?>

<?php get_header(); ?>

<div class="waaromJudimage rellax" data-rellax-speed="0">
    <hr class="zwarte-lijn rellax" data-rellax-speed="1"> 
    <div class="waaromJudimage-inner">
        <div class="waaromJudimage-c1">
            <h2 class="titel-waaromJudimage titel-waaromJudimage-paginaZelf rellax" data-rellax-speed="1"><?php the_field( 'titel-inleiding-waaromJudimage' ); ?></h2>
            <div class="informatie-waaromJudimage"><?php the_field( 'informatie-inleiding-waaromJudimage' ); ?></div>
            <?php $knop_waaromJudimage_home = get_field( 'knop-inleiding-waaromJudimage' ); ?>
            <?php if ( $knop_waaromJudimage_home ) : ?>
                <a class="knopBruiloft" href="<?php echo esc_url( $knop_waaromJudimage_home['url'] ); ?>" target="<?php echo esc_attr( $knop_waaromJudimage_home['target'] ); ?>"><?php echo esc_html( $knop_waaromJudimage_home['title'] ); ?></a>
            <?php endif; ?>
        </div>
        <div class="waaromJudimage-c2">
            <?php if ( get_field( 'afbeelding-inleiding-waaromJudimage' ) ) : ?>
                <img class="afbeelding-waaromJudimage" src="<?php the_field( 'afbeelding-inleiding-waaromJudimage' ); ?>" />
            <?php endif ?>
        </div>
    </div>
</div>

<div class="afkomstJudimage" style="background-image: linear-gradient(rgb(255 255 255 / 25%), rgb(255 255 255 / 33%)), url(<?php the_field('bigImg-afkomst-waaromJudimage'); ?>)">
    <div class="afkomstJudimage-inner">
        <div class="afkomstJudimage-c1" style="background-image: linear-gradient(rgb(255 255 255 / 0%), rgb(255 255 255 / 0%)), url(<?php the_field('papierAchtergrond-afkomst-waaromJudimage'); ?>)">
            <div class="informatie-afkomst-waaromJudimage"><?php the_field( 'informatie-afkomst-waaromJudimage' ); ?></div>
        </div>
        <?php if ( have_rows( 'afbeeldingenGroep-afkomst-waaromJudimage' ) ) : ?>
	        <?php while ( have_rows( 'afbeeldingenGroep-afkomst-waaromJudimage' ) ) : the_row(); ?>
                <div class="afkomstJudimage-c2" style="background-image: linear-gradient(rgb(255 255 255 / 0%), rgb(255 255 255 / 0%)), url(<?php the_sub_field('afbeeldingGroot-afkomst-waaromJudimage'); ?>)">
                    <?php if ( get_sub_field( 'afbeeldingKlein-afkomst-waaromJudimage' ) ) : ?>
                        <img class="afbeeldingKlein-afkomst-waaromJudimage" src="<?php the_sub_field( 'afbeeldingKlein-afkomst-waaromJudimage' ); ?>" />
                    <?php endif ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<div class="waaromGroot-judimage" style="background-image: linear-gradient(rgb(255 255 255 / 0%), rgb(255 255 255 / 0%)), url(<?php the_field('achtergrondImgBig-waarom'); ?>)">
    <div class="waaromGroot-judimage-inner">
        <div class="informatie-waaromGroot">
            <?php the_field( 'informatieBig-waarom' ); ?>
        </div>
    </div>
</div>

<div class="afkomstJudimage" style="background-image: linear-gradient(rgb(255 255 255 / 25%), rgb(255 255 255 / 33%)), url(<?php the_field('bigImg-afkomst-waaromJudimage_2'); ?>)">
    <div class="afkomstJudimage-inner">
        <div class="afkomstJudimage-c1" style="background-image: linear-gradient(rgb(255 255 255 / 0%), rgb(255 255 255 / 0%)), url(<?php the_field('papierAchtergrond-afkomst-waaromJudimage_2'); ?>)">
            <div class="informatie-afkomst-waaromJudimage informatie-afkomst-waaromJudimage_2"><?php the_field( 'informatie-afkomst-waaromJudimage_2' ); ?></div>
        </div>
        <?php if ( have_rows( 'afbeeldingenGroep-afkomst-waaromJudimage_2' ) ) : ?>
	        <?php while ( have_rows( 'afbeeldingenGroep-afkomst-waaromJudimage_2' ) ) : the_row(); ?>
                <div class="afkomstJudimage-c2" style="background-image: linear-gradient(rgb(255 255 255 / 0%), rgb(255 255 255 / 0%)), url(<?php the_sub_field('afbeeldingGroot-afkomst-waaromJudimage_2'); ?>)">
                    <?php if ( get_sub_field( 'afbeeldingKlein-afkomst-waaromJudimage_2' ) ) : ?>
                        <img class="afbeeldingKlein-afkomst-waaromJudimage afbeeldingKlein-afkomst-waaromJudimage_2" src="<?php the_sub_field( 'afbeeldingKlein-afkomst-waaromJudimage_2' ); ?>" />
                    <?php endif ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<div class="judimage-ballonnen" style="background-image: linear-gradient(rgb(255 255 255 / 0%), rgb(255 255 255 / 0%)), url(<?php the_field('achtergrond_afbeelding-ballonnen'); ?>)">
    <div class="judimage-ballonnen-inner">
        <?php if ( have_rows( 'ballonnen_lagen_waaromGroep' ) ) : ?>
	        <?php while ( have_rows( 'ballonnen_lagen_waaromGroep' ) ) : the_row(); ?>
                <?php if ( get_sub_field( 'ballonnnen_laag_2' ) ) : ?>
                    <img class="ballonnnen_laag ballonnen_laag_2 rellax" data-rellax-speed="4" src="<?php the_sub_field( 'ballonnnen_laag_2' ); ?>" />
                <?php endif ?>
                <?php if ( get_sub_field( 'ballonnnen_laag_3' ) ) : ?>
                    <img class="ballonnnen_laag ballonnen_laag_3 rellax" data-rellax-speed="6" src="<?php the_sub_field( 'ballonnnen_laag_3' ); ?>" />
                <?php endif ?>
                <?php if ( get_sub_field( 'ballonnnen_laag_4' ) ) : ?>
                    <img class="ballonnnen_laag ballonnen_laag_4 rellax" data-rellax-speed="16" src="<?php the_sub_field( 'ballonnnen_laag_4' ); ?>" />
                <?php endif ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <div class="informatie-ballonnen rellax" data-rellax-speed="2"><?php the_field( 'informatie-ballonnen' ); ?></div>
    </div>
</div>

<div class="home-insta" style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php the_field('achtergrond_afbeelding-instaWaarom'); ?>)">
    <div class="home-insta-inner">
        <h2 class="titel-instaHome titel-waaromInsta rellax" data-rellax-speed="2"><?php the_field( 'titel-instaWaarom' ); ?></h2>
        <div class="fotos-instaWaarom">
            <?php if ( have_rows( 'fotos_instagram-instaWaarom' ) ) : ?>
                <?php while ( have_rows( 'fotos_instagram-instaWaarom' ) ) : the_row(); ?>
                    <?php if ( get_sub_field( 'afbeelding-WaaromInsta' ) ) : ?>
                        <img class="instagram-foto-home" src="<?php the_sub_field( 'afbeelding-WaaromInsta' ); ?>" />
                    <?php endif ?>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // No rows found ?>
            <?php endif; ?>
        </div>
        <div class="knopInstaDiv-home">
            <?php $knop_homeInsta = get_field( 'knop-WaaromInsta' ); ?>
            <?php if ( $knop_homeInsta ) : ?>
                <a class="knopBruiloft knopInsta" href="<?php echo esc_url( $knop_homeInsta['url'] ); ?>" target="<?php echo esc_attr( $knop_homeInsta['target'] ); ?>"><?php echo esc_html( $knop_homeInsta['title'] ); ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="../wp-content/themes/blankslate-child/node_modules/rellax/rellax.min.js"></script>
<script src="../wp-content/themes/blankslate-child/node_modules/simple-parallax-js/src/simpleParallax.js"></script>
<script>
    var rellax = new Rellax('.rellax', {
        horizontal: true,
    });

</script>


<?php get_footer(); ?>