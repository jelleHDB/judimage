<?php
/**
 * Template Name: Contact
 * Description: De template voor de contact pagina.
 *
 * @package Blankstate
 * @version 1.0.0
 */
?>

<?php get_header(); ?>

<div class="sliderContact">
    <div class="sliderContact-inner">
        <h2 class="titelSliderContact"><?php the_field( 'titel_boveninContact' ); ?></h2>
        <div class="informatieSliderContact"><?php the_field( 'informatie_boveninContact' ); ?></div>
    </div>
</div>

<div class="contactInformatie" >
    <div class="contactInformatie-inner">
        <div class="contactInformatie-c1">
            <h2 class="titelInformatieContact"><?php the_field( 'titel_informatieContact' ); ?></h2>
            <div class="infoInformatieContact"><?php the_field( 'info_informatieContact' ); ?></div>
            <?php $telefoonnummer_informatieContact = get_field( 'telefoonnummer_informatieContact' ); ?>
            <?php if ( $telefoonnummer_informatieContact ) : ?>
                <a class="telContact" href="<?php echo esc_url( $telefoonnummer_informatieContact['url'] ); ?>" target="<?php echo esc_attr( $telefoonnummer_informatieContact['target'] ); ?>"><i class="fa fa-phone" aria-hidden="true"></i><?php echo esc_html( $telefoonnummer_informatieContact['title'] ); ?></a>
            <?php endif; ?>
            <?php $mail_informatieContact = get_field( 'mail_informatieContact' ); ?>
            <?php if ( $mail_informatieContact ) : ?>
                <a class="mailContact" href="<?php echo esc_url( $mail_informatieContact['url'] ); ?>" target="<?php echo esc_attr( $mail_informatieContact['target'] ); ?>"><i class="fa fa-envelope-open-o" aria-hidden="true"></i><?php echo esc_html( $mail_informatieContact['title'] ); ?></a>
            <?php endif; ?>
            <?php if ( have_rows( 'kvk-btw-nummers' ) ) : ?>
                <?php while ( have_rows( 'kvk-btw-nummers' ) ) : the_row(); ?>
                    <p class="kvk-nummerContact"><i class="fa fa-building" aria-hidden="true"></i>KvK: <?php the_sub_field( 'kvk_nummer-informatieContact' ); ?></p>
                    <p class="btw-nummerContact">BTW-id: <?php the_sub_field( 'btw_nummer-informatieContact' ); ?></p>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class="bottom-left-quarter-circle"></div>
        </div>
        <div class="contactInformatie-c2">
            <div class="contactFormulier"><?php the_field( 'contactForm_informatieContact' ); ?></div>
        </div>
    </div>
</div>

<div class="googleMaps-contact">
    <div class="googleMaps-contact-inner">
        <div class="googleMaps"><?php the_field( 'googleMaps_informatieContact' ); ?></div>
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