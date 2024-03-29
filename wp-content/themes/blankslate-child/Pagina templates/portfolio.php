<?php
/**
 * Template Name: Portfolio
 * Description: De template voor de portfolio.
 *
 * @package Blankstate
 * @version 1.0.0
 */
?>

<?php get_header(); ?>

<div class="portfolio-slider" style="background-image: linear-gradient( rgb(0 0 0 / 20%), rgb(0 0 0 / 20%) ), url(<?php the_field('afbeeldingSlider-portfolio'); ?>)">
    <div class="portfolio-slider-inner">
        <h2 class="titelPortfolioSlider"><?php the_field( 'titelSlider-portfolio' ); ?></h2>
    </div>
</div>

<div class="portfolio">
    <div class="portfolio-inner">
        <?php if ( have_rows( 'portfolio-repeater' ) ) : ?>
            <?php while ( have_rows( 'portfolio-repeater' ) ) : the_row(); ?>
            <div class="container-shoots">
                <?php $linkShoot_portfolioRepeater = get_sub_field( 'linkShoot-portfolioRepeater' ); ?>
                <a href="<?php echo esc_url( $linkShoot_portfolioRepeater); ?>">
                    <?php if ( get_sub_field( 'afbeelding-portfolioRepeater' ) ) : ?>
                        <img class="shoot-image" src="<?php the_sub_field( 'afbeelding-portfolioRepeater' ); ?>" />
                    <?php endif ?>
                    <?php if ( have_rows( 'teksten-portfolioRepeater' ) ) : ?>
                        <?php while ( have_rows( 'teksten-portfolioRepeater' ) ) : the_row(); ?>
                            <div class="middle-shoot">
                                <div class="text-shoot"><?php the_sub_field( 'titel-portfolioRepeater' ); ?></div>
                                <div class="text-shoot"><?php the_sub_field( 'namen-portfolioRepeater' ); ?></div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </a>
            </div>
            <?php endwhile; ?>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>
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