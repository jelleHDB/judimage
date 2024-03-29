<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// Hook in de ACF init action to add options page for header
add_action('acf/init', 'add_header_options_page');

function add_header_options_page() {
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title'    => __('Header content', 'textdomain'),
            'menu_title'    => __('Header content', 'textdomain'),
            'menu_slug'     => 'header-settings',
            'capability'    => 'edit_theme_options',
            'icon_url' => 'dashicons-align-full-width',
            'redirect'      => false
        ));
    }
}

// Hook in de ACF init action to add options page for footer
add_action('acf/init', 'add_footer_options_page');

function add_footer_options_page() {
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title'    => __('Footer content', 'textdomain'),
            'menu_title'    => __('Footer content', 'textdomain'),
            'menu_slug'     => 'footer-settings',
            'capability'    => 'edit_theme_options',
            'icon_url' => 'dashicons-editor-table',
            'redirect'      => false
        ));
    }
}

// Hook in de ACF init action to add options page for footer
add_action('acf/init', 'add_hdb_options_page');

function add_hdb_options_page() {
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title'    => __('Helemaal de bom', 'textdomain'),
            'menu_title'    => __('Helemaal de bom', 'textdomain'),
            'menu_slug'     => 'hdb-settings',
            'capability'    => 'edit_theme_options',
            'icon_url' => 'dashicons-admin-tools',
            'redirect'      => false
        ));
    }
}

// Voeg de shortcode toe
function custom_blog_posts_shortcode($atts) {
    // Shortcode attributen (indien nodig)
    $atts = shortcode_atts( array(
        'posts_per_page' => 15, // Aantal berichten per pagina
    ), $atts );

    // Paginering variabelen
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'category_name' => 'blog',
        'posts_per_page' => $atts['posts_per_page'],
        'paged' => $paged
    );

    // Query voor blogberichten
    $blog_posts_query = new WP_Query( $args );

    // Output variabele
    $output = '';

    // Loop door de berichten
    if ( $blog_posts_query->have_posts() ) {
        while ( $blog_posts_query->have_posts() ) {
            $blog_posts_query->the_post();

            // Haal de postdata op
            $post_id = get_the_ID();
            $post_title = get_the_title();
            $post_author = get_the_author();
            $post_date = get_the_date();
            $post_thumbnail = get_the_post_thumbnail( $post_id, 'thumbnail' ); // Uitgelichte afbeelding
            $post_permalink = get_permalink(); // Permalink van de blogpost

            // Bouw de uitvoer op
            $output .= '<a href="' . esc_url( $post_permalink ) . '" class="blog-post">';
            $output .= '<div class="blog-post">';
            if ( $post_thumbnail ) {
                $output .= '<div class="post-thumbnail">' . $post_thumbnail . '</div>';
            }
            $output .= '<h2 class="post-title">' . $post_title . '</h2>';
            $output .= '<div class="post-meta">';
            $output .= '<span class="post-author"><i class="fa fa-user" aria-hidden="true"></i>' . $post_author . '</span>';
            $output .= '<span class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i>' . $post_date . '</span>';
            $output .= '</div>';
            $output .= '</div>';
            $output .= '</a>';
        }

        // Voeg paginering toe als er meer dan 9 berichten zijn
        if ( $blog_posts_query->max_num_pages > 1 ) {
            $output .= '<div class="pagination">';
            $output .= paginate_links( array(
                'total' => $blog_posts_query->max_num_pages
            ) );
            $output .= '</div>';
        }

        // Reset de query
        wp_reset_postdata();
    } else {
        $output = '<p>Geen berichten gevonden.</p>';
    }

    return $output;
}
add_shortcode('custom_blog_posts', 'custom_blog_posts_shortcode');



?>