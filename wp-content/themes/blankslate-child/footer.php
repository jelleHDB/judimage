<?php // Eind div pagina ?>
</div>


<footer id="footer" role="contentinfo">
    <div class="footer-inner">
        <div class="footer-inner-c1">
            <h2 class="titel-footer"><?php the_field( 'titel-footer-c1', 'option' ); ?></h2>
            <?php if ( have_rows( 'navigatie_menu', 'option' ) ) : ?>
                <?php while ( have_rows( 'navigatie_menu', 'option' ) ) : the_row(); ?>
                    <?php $navigatie_item_footer_c1 = get_sub_field( 'navigatie_item-footer-c1' ); ?>
                    <?php if ( $navigatie_item_footer_c1 ) : ?>
                        <a class="menu-item-footer" href="<?php echo esc_url( $navigatie_item_footer_c1['url'] ); ?>" target="<?php echo esc_attr( $navigatie_item_footer_c1['target'] ); ?>"><?php echo esc_html( $navigatie_item_footer_c1['title'] ); ?></a>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // No rows found ?>
            <?php endif; ?>
        </div>
        <div class="footer-inner-c2">
            <?php if ( have_rows( 'awards-footer-c2', 'option' ) ) : ?>
                <?php while ( have_rows( 'awards-footer-c2', 'option' ) ) : the_row(); ?>     
                    <div class="awards-footer">
                        <div class="awards-footer-c1 awards-kolom-footer">
                            <?php if ( get_sub_field( 'awards-footer-afbeelding_1' ) ) : ?>
                                <img class="img-awards" src="<?php the_sub_field( 'awards-footer-afbeelding_1' ); ?>" />
                            <?php endif ?>
                        </div>
                        <div class="awards-footer-c2 awards-kolom-footer">
                            <?php if ( get_sub_field( 'awards-footer-afbeelding_2' ) ) : ?>
                                <img class="img-awards" src="<?php the_sub_field( 'awards-footer-afbeelding_2' ); ?>" />
                            <?php endif ?>
                        </div>
                        <div class="awards-footer-c3 awards-kolom-footer">
                            <?php if ( get_sub_field( 'awards-footer-afbeelding_3' ) ) : ?>
                                <img class="img-awards" src="<?php the_sub_field( 'awards-footer-afbeelding_3' ); ?>" />
                            <?php endif ?>
                        </div>
                        <div class="awards-footer-c4 awards-kolom-footer">
                            <?php if ( get_sub_field( 'awards-footer-afbeelding_4' ) ) : ?>
                                <img class="img-awards" src="<?php the_sub_field( 'awards-footer-afbeelding_4' ); ?>" />
                            <?php endif ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class="logo-footer-c2">
                <?php if ( get_field( 'afbeelding-footer-c2', 'option' ) ) : ?>
                    <img class="afbeelding-footer-c2" src="<?php the_field( 'afbeelding-footer-c2', 'option' ); ?>" />
                <?php endif ?>
                <div class="div-logo">
                    <?php if ( get_field( 'logo-footer-c2', 'option' ) ) : ?>
                        <img class="logo-footer" src="<?php the_field( 'logo-footer-c2', 'option' ); ?>" />
                    <?php endif ?>
                </div>
            </div>
        </div>
        <div class="footer-inner-c3">
            <h2 class="titel-footer"><?php the_field( 'titel-footer-c3', 'option' ); ?></h2>
            <?php $telefoonnummer_footer_c3 = get_field( 'telefoonnummer-footer-c3', 'option' ); ?>
            <?php if ( $telefoonnummer_footer_c3 ) : ?>
                <a class="telefoonnummer-footer" href="<?php echo esc_url( $telefoonnummer_footer_c3['url'] ); ?>" target="<?php echo esc_attr( $telefoonnummer_footer_c3['target'] ); ?>"><i class="fa fa-phone" aria-hidden="true"></i><?php echo esc_html( $telefoonnummer_footer_c3['title'] ); ?></a>
            <?php endif; ?>
            <?php $mail_footer_c3 = get_field( 'mail-footer-c3', 'option' ); ?>
            <?php if ( $mail_footer_c3 ) : ?>
                <a class="mail-footer" href="<?php echo esc_url( $mail_footer_c3['url'] ); ?>" target="<?php echo esc_attr( $mail_footer_c3['target'] ); ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo esc_html( $mail_footer_c3['title'] ); ?></a>
            <?php endif; ?>
            <p class="locatie-footer"><i class="fa fa-map-marker" aria-hidden="true"></i><?php the_field( 'locatie-footer-c3', 'option' ); ?></p>
            <p class="btw-nummer">BTW-id: <?php the_field( 'btw-footer-c3', 'option' ); ?></p>
            <p class="kvk-nummer">KvK: <?php the_field( 'kvk_footer-c3', 'option' ); ?></p>
        </div>
    </div>
    <div class="credit-footer">
        <div class="credit-footer-inner">
            <p><?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>. Alle rechten voorbehouden</p>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
