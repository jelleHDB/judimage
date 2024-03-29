<?php
/**
 * Template Name: Trouw locaties
 * Description: De template voor de trouwlocaties.
 *
 * @package Blankstate
 * @version 1.0.0
 */
?>

<?php get_header(); ?>

<div class="achtergrond-big" style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php the_field('bigImageBackground-trouwlocatie_1'); ?>)">
    <div class="achtergrond achtergrond-1 rellax" data-rellax-speed="-5">
        <div class="bruiloft-home">
            <div class="bruiloft-div-1" style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php the_field('trouwlocatie_afbeelding-trouwlocatie_1'); ?>)">
                <div class="vintagePapierMetPlakband" style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php the_field('vintage_papier_met_plakband-trouwlocatie_1'); ?>)">
                <?php if ( have_rows( 'tekst_in_vintage_papier_trouwlocatie_1' ) ) : ?>
                    <?php while ( have_rows( 'tekst_in_vintage_papier_trouwlocatie_1' ) ) : the_row(); ?>
                        <h2 class="titelPapierBruiloft"><?php the_sub_field( 'tekst_in_vintage_groep-trouwlocatie_1' ); ?></h2>
                        <h2 class="namenPapierBruiloft"><?php the_sub_field( 'tekst_in_vintage_groep-trouwlocatie_2' ); ?></h2>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
                <div class="bruiloftButton">
                    <?php $knop_bruiloft_home_1 = get_field( 'knop-bruiloft-trouwlocaties_1' ); ?>
                    <?php if ( $knop_bruiloft_home_1 ) : ?>
                        <a class="knopBruiloft" href="<?php echo esc_url( $knop_bruiloft_home_1['url'] ); ?>" target="<?php echo esc_attr( $knop_bruiloft_home_1['target'] ); ?>"><?php echo esc_html( $knop_bruiloft_home_1['title'] ); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="achtergrond achtergrond-2 rellax" data-rellax-speed="2" data-rellax-zindex="5">
        <div class="bruiloft-home">
            <div class="bruiloft-div-1" style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php the_field('trouwlocatie_afbeelding-trouwlocatie_2'); ?>)">
                <div class="vintagePapierMetPlakband" style="background-image: linear-gradient( rgb(0 0 0 / 0%), rgb(0 0 0 / 0%) ), url(<?php the_field('vintage_papier_met_plakband-trouwlocatie_2'); ?>)">
                <?php if ( have_rows( 'tekst_in_vintage_papier_trouwlocatie_2' ) ) : ?>
                    <?php while ( have_rows( 'tekst_in_vintage_papier_trouwlocatie_2' ) ) : the_row(); ?>
                        <h2 class="titelPapierBruiloft"><?php the_sub_field( 'tekst_in_vintage_groep-trouwlocatie_3' ); ?></h2>
                        <h2 class="namenPapierBruiloft"><?php the_sub_field( 'tekst_in_vintage_groep-trouwlocatie_4' ); ?></h2>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
                <div class="bruiloftButton">
                    <?php $knop_bruiloft_home_1 = get_field( 'knop-bruiloft-trouwlocaties_2' ); ?>
                    <?php if ( $knop_bruiloft_home_1 ) : ?>
                        <a class="knopBruiloft" href="<?php echo esc_url( $knop_bruiloft_home_1['url'] ); ?>" target="<?php echo esc_attr( $knop_bruiloft_home_1['target'] ); ?>"><?php echo esc_html( $knop_bruiloft_home_1['title'] ); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="achtergrondGrootTrouwLocatie" style="background-image: linear-gradient(rgb(255 255 255 / 40%), rgb(255 255 255 / 40%)), url(<?php the_field('achtergrond_afbeelding-trouwLocatie_1'); ?>)">
    <div class="trouwlocatie-1">
        <?php if ( have_rows( 'titels-trouwLocatieInfo_1' ) ) : ?>
            <?php while ( have_rows( 'titels-trouwLocatieInfo_1' ) ) : the_row(); ?>
                <h2 class="titel-informatieTrouwLocatie-1"><span class="netteFont"><?php the_sub_field( 'titelGroepTrouwLocatie_1' ); ?></span><span class="normaalFont"><?php the_sub_field( 'titelGroepTrouwLocatie_2' ); ?></span></h2>
            <?php endwhile; ?>
        <?php endif; ?>
        <div class="trouwlocatie-1-inner">
            <div class="trouwlocatie-1-c1">
                <?php if ( have_rows( 'afbeeldingenGroep-trouwlocaties_1' ) ) : ?>
                    <?php while ( have_rows( 'afbeeldingenGroep-trouwlocaties_1' ) ) : the_row(); ?>
                        <?php if ( get_sub_field( 'afbeelding_trouwlocatieInfo_1' ) ) : ?>
                            <img class="afbeelding-trouwlocatie1-links afbeelding-trouwlocatie1-links-1 rellax" data-rellax-speed="4" src="<?php the_sub_field( 'afbeelding_trouwlocatieInfo_1' ); ?>" />
                        <?php endif ?>
                        <div class="afbeeldingTrouwLocatiePlakBandDiv">
                            <?php if ( get_field( 'plakband_afbeelding-trouwLocaties_1' ) ) : ?>
                                <img class="plakband_afbeelding-trouwLocaties_1" src="<?php the_field( 'plakband_afbeelding-trouwLocaties_1' ); ?>" />
                            <?php endif ?>
                            <?php if ( get_sub_field( 'afbeelding_trouwlocatieInfo_1' ) ) : ?>
                                <img class="afbeelding-trouwlocatie1-links afbeelding-trouwlocatie1-links-2" src="<?php the_sub_field( 'afbeelding_trouwlocatieInfo_2' ); ?>" />
                            <?php endif ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="trouwlocatie-1-c2">
                <div class="informatieTrouwLocatie-1"><?php the_field( 'informatieTrouwLocatie_1' ); ?></div>
                <div class="div-knopInformatieTrouwLocatie-1">
                    <?php $knop_trouwLocatie_1 = get_field( 'knop-trouwLocatie_1' ); ?>
                    <?php if ( $knop_trouwLocatie_1 ) : ?>
                        <a class="knopBruiloft" href="<?php echo esc_url( $knop_trouwLocatie_1['url'] ); ?>" target="<?php echo esc_attr( $knop_trouwLocatie_1['target'] ); ?>"><?php echo esc_html( $knop_trouwLocatie_1['title'] ); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="trouwlocatie-2">
        <?php if ( have_rows( 'titels-trouwLocatieInfo_1' ) ) : ?>
            <?php while ( have_rows( 'titels-trouwLocatieInfo_2' ) ) : the_row(); ?>
                <h2 class="titel-informatieTrouwLocatie-1"><span class="netteFont"><?php the_sub_field( 'titelGroepTrouwLocatie_3' ); ?></span><span class="normaalFont"><?php the_sub_field( 'titelGroepTrouwLocatie_4' ); ?></span></h2>
            <?php endwhile; ?>
        <?php endif; ?>
        <div class="trouwlocatie-1-inner">
            <div class="trouwlocatie-1-c1">
                <?php if ( have_rows( 'afbeeldingenGroep-trouwlocaties_2' ) ) : ?>
                    <?php while ( have_rows( 'afbeeldingenGroep-trouwlocaties_2' ) ) : the_row(); ?>
                        <?php if ( get_sub_field( 'afbeelding_trouwlocatieInfo_3' ) ) : ?>
                            <img class="afbeelding-trouwlocatie1-links afbeedling-trouwlocatie-2 afbeelding-trouwlocatie1-links-1 rellax" data-rellax-speed="4"  src="<?php the_sub_field( 'afbeelding_trouwlocatieInfo_3' ); ?>" />
                        <?php endif ?>
                        <div class="afbeeldingTrouwLocatiePlakBandDiv">
                            <?php if ( get_field( 'plakband_afbeelding-trouwLocaties_2' ) ) : ?>
                                <img class="plakband_afbeelding-trouwLocaties_1" src="<?php the_field( 'plakband_afbeelding-trouwLocaties_2' ); ?>" />
                            <?php endif ?>
                            <?php if ( get_sub_field( 'afbeelding_trouwlocatieInfo_4' ) ) : ?>
                                <img class="afbeelding-trouwlocatie1-links afbeelding-trouwlocatie1-links-2" src="<?php the_sub_field( 'afbeelding_trouwlocatieInfo_4' ); ?>" />
                            <?php endif ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="trouwlocatie-1-c2">
                <div class="informatieTrouwLocatie-1"><?php the_field( 'informatieTrouwLocatie_2' ); ?></div>
                <div class="div-knopInformatieTrouwLocatie-1">
                    <?php $knop_trouwLocatie_1 = get_field( 'knop-trouwLocatie_2' ); ?>
                    <?php if ( $knop_trouwLocatie_1 ) : ?>
                        <a class="knopBruiloft" href="<?php echo esc_url( $knop_trouwLocatie_1['url'] ); ?>" target="<?php echo esc_attr( $knop_trouwLocatie_1['target'] ); ?>"><?php echo esc_html( $knop_trouwLocatie_1['title'] ); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="formulier-trouwlocatie" style="background-image: linear-gradient(rgb(255 255 255 / 25%), rgb(255 255 255 / 33%)), url(<?php the_field('bigImg-cfTrouwLocatie'); ?>)">
    <div class="formulier-trouwlocatie-inner"  style="background-image: linear-gradient(rgb(255 255 255 / 50%), rgb(255 255 255 / 50%)), url(<?php the_field('bigImgWhite-cfTrouwLocatie'); ?>)">
        <h2 class="titel-cfTrouwLocatie"><?php the_field( 'titel-cfTrouwLocatie' ); ?></h2>
        <div class="contactForm-trouwLocatie"><?php the_field( 'contact_formulier-cf' ); ?></div>
    </div>
</div>



<script>
// Selecteer de parent div en de tweede child div
const parent = document.querySelector('.achtergrondGrootTrouwLocatie');
const child2 = document.querySelector('.trouwlocatie-2');

let observer;

// Functie om de observer in te stellen
function setupObserver() {
  // Maak een IntersectionObserver aan
  observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Als de tweede child div in het viewport verschijnt, voeg een class toe aan de parent div
        parent.style.backgroundImage = "url(<?php the_field('achtergrond_afbeelding-trouwLocatie_2'); ?>)";
        parent.style.transition = "background-image 0.5s ease";
      } else {
        // Als de tweede child div niet in het viewport is, verwijder de class van de parent div
        parent.style.backgroundImage = "url(<?php the_field('achtergrond_afbeelding-trouwLocatie_1'); ?>)";
        parent.style.transition = "background-image 0.5s ease";
      }
    });
  });

  // Observeer de tweede child div
  observer.observe(child2);
}

// Functie om te controleren of de tweede child div al in het viewport is
function checkIfInView() {
  const rect = child2.getBoundingClientRect();
  if (rect.top <= window.innerHeight) {
    // Als de tweede child div al in het viewport is, stel de observer in
    setupObserver();
  } else {
    // Als de tweede child div nog niet in het viewport is, wacht en controleer opnieuw
    setTimeout(checkIfInView, 100);
  }
}

// Start de controle wanneer de pagina laadt
checkIfInView();
</script>

<script>
$(document).ready(function() {
    var scroll_start = 0;
    var start_change = $('.achtergrond-big');
    var offset = start_change.offset();
    var startchangePos = offset.top;

    $(document).scroll(function() {
        scroll_start = $(this).scrollTop();
        if(scroll_start > startchangePos) {
            $('.achtergrond-big').css('background-image', 'url(<?php the_field('bigImageBackground-trouwlocatie_2'); ?>)');
        } else {
            $('.achtergrond-big').css('background-image', 'url(<?php the_field('bigImageBackground-trouwlocatie_1'); ?>)');
        }
    });
});
</script>

<!-- Scripts -->
<script src="../wp-content/themes/blankslate-child/node_modules/rellax/rellax.min.js"></script>
<script src="../wp-content/themes/blankslate-child/node_modules/simple-parallax-js/src/simpleParallax.js"></script>
<script>
    var rellax = new Rellax('.rellax', {
        horizontal: true,
    });

</script>


<?php get_footer(); ?>