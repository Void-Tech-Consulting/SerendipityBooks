<?php

function home_customizer($wp_customize) {
    require 'section_vars.php';
    $wp_customize->add_section($home_section, array(
        'title' => 'Home Page',
    ));

    // Description
    $wp_customize->add_setting($home_description, array(
        'default' => 'Michelle is the proud owner of Serendipity Books, a local, independent, curated community book shop.',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control($home_description, array(
        'label' => 'Home Page Description',
        'section' => $home_section,
        'type' => 'textarea'
    ));
    $wp_customize->selective_refresh->add_partial($home_description, array(
        'selector' => 'span#edit-description'
    ));

    // Bestsellers Section Title
    $wp_customize->add_setting($home_bestsellers_title, array(
        'default' => 'Bestsellers',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control($home_bestsellers_title, array(
        'label' => 'Bestsellers Section Title',
        'section' => $home_section,
    ));
    $wp_customize->selective_refresh->add_partial($home_bestsellers_title, array(
        'selector' => 'span#edit-bestsellers'
    ));

    // Favorites Section Title
    $wp_customize->add_setting($home_favorites_title, array(
        'default' => "Michelle's Favorites",
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control($home_favorites_title, array(
        'label' => 'Favorites Section Title',
        'section' => $home_section,
    ));
    $wp_customize->selective_refresh->add_partial($home_favorites_title, array(
        'selector' => 'span#edit-favorites'
    ));

    // Contactless Section Description
    $wp_customize->add_setting($home_contactless_description, array(
        'default' => 'Want to purchase books while staying safe? Check out our contactless options.',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control($home_contactless_description, array(
        'label' => 'Contactless Section Description',
        'section' => $home_section,
        'type' => 'textarea'
    ));
    $wp_customize->selective_refresh->add_partial($home_contactless_description, array(
        'selector' => 'span#edit-contactless-text'
    ));

    // Contactless Section Image
    $wp_customize->add_setting($home_contactless_img, array(
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        $home_contactless_img,
        array(
            'label' => 'Contactless Section Image',
            'section' => $home_section
        )
    ));
    $wp_customize->selective_refresh->add_partial($home_contactless_img, array(
        'selector' => 'span#edit-contactless-image'
    ));

    // Upcoming Events Section Title
    $wp_customize->add_setting($home_events_title, array(
        'default' => "Upcoming Events",
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control($home_events_title, array(
        'label' => 'Upcoming Events Section Title',
        'section' => $home_section,
    ));
    $wp_customize->selective_refresh->add_partial($home_events_title, array(
        'selector' => 'span#edit-upcoming-events'
    ));
}

add_action('customize_register', 'home_customizer');
