<?php

function event_customizer($wp_customize) {
    require 'section_vars.php';
    $wp_customize->add_section($events_section, array(
        'title' => 'Events Page',
    ));

    //Event Title
    $wp_customize->add_setting($event_title);
    $wp_customize->add_control($event_title, array(
        'label' => 'Event Title',
        'section' => $events_section,
        'type' => 'textarea'
    ));

    //Event Poster
    $wp_customize->add_setting($events_poster_img);
    $wp_customize->add_control( new WP_Customize_Image_Control( 
        $wp_customize, 
        $events_poster_img, 
        array(
            'label' => 'Event Poster Image',
            'section' => $events_section
        )
    ));

    //Date
    $wp_customize->add_setting($date_desc);
    $wp_customize->add_control($date_desc, array(
        'label' => 'Date',
        'section' => $events_section,
        'type' => 'textarea'
    ));

    //Upcoming Meeting
    $wp_customize->add_setting($upcom_meet_desc);
    $wp_customize->add_control($upcom_meet_desc, array(
        'label' => 'Upcoming Meeting Info',
        'section' => $events_section,
        'type' => 'textarea'
    ));

    //Location
    $wp_customize->add_setting($location_desc);
    $wp_customize->add_control($location_desc, array(
        'label' => 'Location',
        'section' => $events_section,
        'type' => 'textarea'
    ));

    //Description
    $wp_customize->add_setting($event_desc);
    $wp_customize->add_control($event_desc, array(
        'label' => 'Description',
        'section' => $events_section,
        'type' => 'textarea'
    ));

    //Relevant Link
    $wp_customize->add_setting($rel_link_desc);
    $wp_customize->add_control($rel_link_desc, array(
        'label' => 'Relevant Link',
        'section' => $events_section,
        'type' => 'textarea'
    ));

}

add_action( 'customize_register', 'event_customizer' );