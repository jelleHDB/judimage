<?php
/**
 * Template Name: Fotoshoots
 * Description: De template voor de fotoshoots pagina.
 *
 * @package Blankstate
 * @version 1.0.0
 */
?>

<?php get_header(); ?>

<div class="portfolio-slider" style="background-image: linear-gradient( rgb(0 0 0 / 20%), rgb(0 0 0 / 20%) ), url(<?php the_field('afbeeldingSlider-fotoshoots'); ?>)">
    <div class="portfolio-slider-inner">
        <h2 class="titelPortfolioSlider"><?php the_field( 'titelSlider-fotoshoots' ); ?></h2>
    </div>
</div>

<div class="informatie-fotoshoots">
    <div class="informatie-fotoshoots-inner">
        <div class="informatie-fotoshoots-c1">
            <div class="informatie-fotoshoot"><?php the_field( 'informatie-fotoshoots' ); ?></div>
        </div>
        <div class="informatie-fotoshoots-c2">
            <?php if ( get_field( 'afbeelding-fotoshoots' ) ) : ?>
                <img class="afbeelding-fotoshoot afbeelding-fotoshoot-1" src="<?php the_field( 'afbeelding-fotoshoots' ); ?>" />
            <?php endif ?>
        </div>
    </div>
</div>

<div class="informatie-fotoshoots informatie-fotoshoots-2">
    <div class="informatie-fotoshoots-inner informatie-fotoshoots-inner-2">
        <div class="informatie-fotoshoots-c1">
            <div class="informatie-fotoshoot"><?php the_field( 'informatie-fotoshoots_2' ); ?></div>
            <?php $knop_infoFotoshoots = get_field( 'knop-infoFotoshoots' ); ?>
            <?php if ( $knop_infoFotoshoots ) : ?>
                <a class="knop-fotoshoots" href="<?php echo esc_url( $knop_infoFotoshoots['url'] ); ?>" target="<?php echo esc_attr( $knop_infoFotoshoots['target'] ); ?>"><?php echo esc_html( $knop_infoFotoshoots['title'] ); ?></a>
            <?php endif; ?>
        </div>
        <div class="informatie-fotoshoots-c2">
            <?php if ( get_field( 'afbeelding-fotoshoots_2' ) ) : ?>
                <img class="afbeelding-fotoshoot afbeelding-fotoshoot-2" src="<?php the_field( 'afbeelding-fotoshoots_2' ); ?>" />
            <?php endif ?>
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
    
    var image = document.getElementsByClassName('afbeelding-fotoshoot-1');
    new simpleParallax(image, {
        delay: 1.6,
        overflow: true,
	    transition: 'cubic-bezier(0,0,0,1)'
    });

    var image = document.getElementsByClassName('afbeelding-fotoshoot-2');
    new simpleParallax(image, {
        delay: 1.1,
        overflow: true,
        orientation: 'right'
    });


</script>


<?php get_footer(); ?>