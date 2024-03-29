<?php
/**
 * Template Name: Blog
 * Description: De template voor de blog pagina.
 *
 * @package Blankstate
 * @version 1.0.0
 */
?>

<?php get_header(); ?>


<div class="blog-pagina">
    <div class="blog-pagina-inner">
        <div class="titelsKnopBlog-div">
        <?php if ( have_rows( 'titelKnop-groep' ) ) : ?>
            <?php while ( have_rows( 'titelKnop-groep' ) ) : the_row(); ?>
                <?php if ( have_rows( 'titelsBlog-groep' ) ) : ?>
                    <?php while ( have_rows( 'titelsBlog-groep' ) ) : the_row(); ?>
                        <div class="titelsBlog-div">
                            <h2 class="titelBlog"><span class="titelBlogDruk"><?php the_sub_field( 'titelBlog_1' ); ?></span><span class="titelBlogLicht"><?php the_sub_field( 'titelBlog_2' ); ?></span></h2>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
        <div class="blogs"><?php the_field( 'blog-blog' ); ?></div>
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