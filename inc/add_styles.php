<?php
function add_custom_styles() {
    wp_enqueue_style( "style", get_stylesheet_uri());
    wp_register_style("faq", get_template_directory_uri() . "/css/faq.css", '', '1.0.0');
    wp_register_style("shop", get_template_directory_uri() . "/css/shop.css", '', '1.0.0');
    wp_register_style("book", get_template_directory_uri() . "/css/book.css", '', '1.0.0');
    wp_register_style("events", get_template_directory_uri() . "/css/events.css", '', '1.0.0');
    wp_register_style("header", get_template_directory_uri() . "/css/header.css", '', '1.0.0');
    wp_register_style("footer", get_template_directory_uri() . "/css/footer.css", '', '1.0.0');
    wp_register_style("shop", get_template_directory_uri() . "/css/shop.css", '', '1.0.0');
    wp_register_style("cart", get_template_directory_uri() . "/css/cart.css", '', '1.0.0');
    wp_register_style("search", get_template_directory_uri() . "/css/search.css", '', '1.0.0');

    wp_enqueue_style( "home", get_theme_file_uri('/css/home.css'));

    if (is_page('faq')) {
        wp_enqueue_script("faq", get_template_directory_uri() . "/js/faq.js", '', '1.0.0');
    } else if (is_page('events')) {
        wp_enqueue_script("events", get_template_directory_uri() . "/js/events.js", '', '1.0.0');
    } else if (is_front_page()) {
        wp_enqueue_script("home", get_template_directory_uri() . "/js/home.js", '', '1.0.0');
    } else if (is_page('shop')) {
        wp_enqueue_script("shop", get_template_directory_uri() . "/js/shop.js", '', '1.0.0');
    } else if (is_product()) {
        wp_enqueue_script("book", get_template_directory_uri() . "/js/book.js", '', '1.0.0');
        wp_enqueue_script('bodycommerce-add-to-cart-ajax', get_stylesheet_directory() . '/js/add-to-cart-ajax.js', array('jquery'), '', true );
    }

    wp_enqueue_script("header", get_template_directory_uri() . "/js/header.js", '', '1.0.0');
}
add_action('wp_enqueue_scripts', 'add_custom_styles');