<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">

<!-- Font inladen in header-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@400;700&family=Dancing+Script:wght@400..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header" id="header">
    <div class="container">
        <?php if ( get_field( 'logo-header', 'option' ) ) : ?>
            <img class="logo-header" src="<?php the_field( 'logo-header', 'option' ); ?>" />
        <?php endif ?>
        <div class="hamburger-menu" id="hamburger-menu">
            <div class="hamburger"></div>
            <div class="hamburger"></div>
            <div class="hamburger"></div>
            <div class="nav" id="nav">
            <?php if ( have_rows( 'navigatie-header', 'option' ) ) : ?>
                <?php while ( have_rows( 'navigatie-header', 'option' ) ) : the_row(); ?>
                    <?php $menu_item_header = get_sub_field( 'menu_item-header' ); ?>
                    <?php if ( $menu_item_header ) : ?>
                        <a class="menu-item-header" href="<?php echo esc_url( $menu_item_header['url'] ); ?>" target="<?php echo esc_attr( $menu_item_header['target'] ); ?>"><?php echo esc_html( $menu_item_header['title'] ); ?></a>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // No rows found ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
</header>

<script>
    /* JavaScript Code */
    window.addEventListener('DOMContentLoaded', function () {
        const hamburgerMenu = document.getElementById('hamburger-menu');
        const nav = document.getElementById('nav');

        hamburgerMenu.addEventListener('click', () => {
            nav.classList.toggle('open');
        });
    });
</script>

<?php // Start div pagina 
$titleName = get_the_title(); // Haal de titel op en sla deze op in de variabele $titleName.
$titleName = strtolower($titleName); // Zet de titel om naar kleine letters.
?>

<div class="pagina <?php echo $titleName ?>">