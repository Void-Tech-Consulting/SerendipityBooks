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

    $wp_customize->selective_refresh->add_partial($event_title, array(
        'selector' => '#eventTitleEdit'
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

    $wp_customize->selective_refresh->add_partial($events_poster_img, array(
        'selector' => '#poster',
    ));

    //Date
    $wp_customize->add_setting($date_desc);
    $wp_customize->add_control($date_desc, array(
        'label' => 'Date',
        'section' => $events_section,
        'type' => 'textarea'
    ));

    $wp_customize->selective_refresh->add_partial($date_desc, array(
        'selector' => '#dateSectionEdit',
    ));

    //Upcoming Meeting
    $wp_customize->add_setting($upcom_meet_desc1);
    $wp_customize->add_control($upcom_meet_desc1, array(
        'label' => 'Upcoming Meeting Info Pt. 1',
        'section' => $events_section,
        'type' => 'textarea'
    ));
    $wp_customize->add_setting($upcom_meet_desc2);
    $wp_customize->add_control($upcom_meet_desc2, array(
        'label' => 'Upcoming Meeting Info Pt. 2',
        'section' => $events_section,
        'type' => 'textarea'
    ));

    $wp_customize->selective_refresh->add_partial($upcom_meet_desc1, array(
        'selector' => '#upcomMeetEdit',
    ));

    //Location
    $wp_customize->add_setting($location_desc);
    $wp_customize->add_control($location_desc, array(
        'label' => 'Location',
        'section' => $events_section,
        'type' => 'textarea'
    ));
    
    //EventBrite if on Zoom
    $wp_customize->add_setting($eventbrite_link);
    $wp_customize->add_control($eventbrite_link, array(
        'label' => 'EventBrite Link if on Zoom',
        'section' => $events_section,
        // 'type' => 'textarea'
    ));

    $wp_customize->selective_refresh->add_partial($location_desc, array(
        'selector' => '#locationEdit',
    ));

    //Description
    $wp_customize->add_setting($event_desc1);
    $wp_customize->add_control($event_desc1, array(
        'label' => 'Description Pt. 1',
        'section' => $events_section,
        'type' => 'textarea'
    ));
    $wp_customize->add_setting($event_desc2);
    $wp_customize->add_control($event_desc2, array(
        'label' => 'Description Pt. 2',
        'section' => $events_section,
        'type' => 'textarea'
    ));
    $wp_customize->add_setting($event_desc3);
    $wp_customize->add_control($event_desc3, array(
        'label' => 'Description Pt. 3',
        'section' => $events_section,
        'type' => 'textarea'
    ));

    $wp_customize->selective_refresh->add_partial($event_desc1, array(
        'selector' => '#descSectionEdit',
    ));

    //Relevant Link
    $wp_customize->add_setting($rel_link_desc);
    $wp_customize->add_control($rel_link_desc, array(
        'label' => 'Relevant Link Description',
        'section' => $events_section,
        'type' => 'textarea'
    ));
    $wp_customize->add_setting($rel_link);
    $wp_customize->add_control($rel_link, array(
        'label' => 'Link',
        'section' => $events_section,
    ));

    $wp_customize->selective_refresh->add_partial($rel_link_desc, array(
        'selector' => '#relLinkEdit',
    ));

}

add_action( 'customize_register', 'event_customizer' );
