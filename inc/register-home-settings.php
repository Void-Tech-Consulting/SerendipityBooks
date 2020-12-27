<?php

function home_customizer($wp_customize) {
    require 'section_vars.php';
    $wp_customize->add_section($home_section, array(
        'title' => 'Home Page',
    ));

    // Description
    $wp_customize->add_setting($home_description, array(
        'default' => 'Michelle is the proud owner of Serendipity Books, a local, independent, curated community book shop.'
    ));
    $wp_customize->add_control($home_description, array(
        'label' => 'Home Page Description',
        'section' => $home_section,
        'type' => 'textarea'
    ));

    // Bestsellers Section Title
    $wp_customize->add_setting($home_bestsellers_title, array(
        'default' => 'Bestsellers'
    ));
    $wp_customize->add_control($home_bestsellers_title, array(
        'label' => 'Bestsellers Section Title',
        'section' => $home_section,
    ));

    // Favorites Section Title
    $wp_customize->add_setting($home_favorites_title, array(
        'default' => "Michelle's Favorites"
    ));
    $wp_customize->add_control($home_favorites_title, array(
        'label' => 'Favorites Section Title',
        'section' => $home_section,
    ));

    // Contactless Section Description
    $wp_customize->add_setting($home_contactless_description, array(
        'default' => 'Want to purchase books while staying safe? Check out our contactless options.'
    ));
    $wp_customize->add_control($home_contactless_description, array(
        'label' => 'Contactless Section Description',
        'section' => $home_section,
        'type' => 'textarea'
    ));

    // Contactless Section Image
    $wp_customize->add_setting($home_contactless_img);
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        $home_contactless_img,
        array(
            'label' => 'Contactless Section Image',
            'section' => $home_section
        )
    ));

    // Upcoming Events Section Title
    $wp_customize->add_setting($home_events_title, array(
        'default' => "Upcoming Events"
    ));
    $wp_customize->add_control($home_events_title, array(
        'label' => 'Upcoming Events Section Title',
        'section' => $home_section,
    ));

    // Book Title
    $wp_customize->add_setting($home_book_title, array(
        'default' => 'Educated'
    ));
    $wp_customize->add_control($home_book_title, array(
        'label' => 'Book Title',
        'section' => $home_section,
    ));

    // Book Price
    $wp_customize->add_setting($home_book_price, array(
        'default' => '$15.99'
    ));
    $wp_customize->add_control($home_book_price, array(
        'label' => 'Book Price',
        'section' => $home_section,
    ));

    // Book Image 
    $wp_customize->add_setting($home_book_img);
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        $home_book_img,
        array(
            'label' => 'Book Image',
            'section' => $home_section
        )
    ));
}

add_action('customize_register', 'home_customizer');
