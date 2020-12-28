<?php

function book_customizer($wp_customize) {
    require 'section_vars.php';
    $wp_customize->add_section($book_section, array(
        'title' => 'Book Page',
    ));

    // Options Header
    $wp_customize->add_setting($option_header);
    $wp_customize->add_control($option_header, array(
        'label' => 'Shipping Options Header',
        'section' => $book_section,
    ));

    // Store Pickup Label
    $wp_customize->add_setting($pickup_label);
    $wp_customize->add_control($pickup_label, array(
        'label' => 'In-Store Pickup Option Label',
        'section' => $book_section,
    ));

    // Shipping Label
    $wp_customize->add_setting($shipping_label);
    $wp_customize->add_control($shipping_label, array(
        'label' => 'Shipping Option Label',
        'section' => $book_section,
    ));

    // Book Quantity Label
    $wp_customize->add_setting($book_quantity_label);
    $wp_customize->add_control($book_quantity_label, array(
        'label' => 'Shipping Option Label',
        'section' => $book_section,
    ));

    // Add to Cart button Label
    $wp_customize->add_setting($add_to_cart_label);
    $wp_customize->add_control($add_to_cart_label, array(
        'label' => 'Shipping Option Label',
        'section' => $book_section,
    ));
}

add_action('customize_register', 'book_customizer');