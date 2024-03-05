<?php
/**
 * Template Name: Test template
 * Description: Template voor het testen.
 *
 * @package Blankstate
 * @version 1.0.0
 */
?>

<?php get_header(); ?>

<section style="padding: 700px 0px; height: 100vh; display: flex;">
    <h2  class="titelTest"><span style="background:red;" class="rellax" data-rellax-speed="10"> test </span> </h2>
    <h2  class="titelTest"><span style="background:green;" class="rellax" data-rellax-speed="5"> test </span> </h2>
    <h2  class="titelTest"><span style="background:blue;" class="rellax" data-rellax-speed="2"> test </span> </h2>
    <h2  class="titelTest"><span style="background:yellow;" class="rellax" data-rellax-speed="-2"> test </span> </h2>
</section>

<img class="testImg" src="http://localhost/judimage/wp-content/uploads/2024/03/instaFotoJudimage-5.png">




<!-- Scripts -->
<script src="../wp-content/themes/blankslate-child/node_modules/rellax/rellax.min.js"></script>
<script src="../wp-content/themes/blankslate-child/node_modules/simple-parallax-js/src/simpleParallax.js"></script>
<script>
    var rellax = new Rellax('.rellax', {
        horizontal: true,
    });

    var image = document.getElementsByClassName('testImg');
    new simpleParallax(image, {
        delay: .8,
	    transition: 'cubic-bezier(0,0,0,1)'
    });

</script>


<?php get_footer(); ?>