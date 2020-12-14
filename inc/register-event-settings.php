<?php

function event_customizer($wp_customize) {
    require 'section_vars.php';
    $wp_customize->add_section($events_section, array(
        'title' => 'Events Page',
    ));

    $wp_customize->add_setting($events_poster_img);
    $wp_customize->add_control( new WP_Customize_Image_Control( 
        $wp_customize, 
        $events_poster_img, 
        array(
            'label' => 'Top Image',
            'section' => $events_section
        )
    ));

    add_action( 'customize_register', 'event_customizer' );

}