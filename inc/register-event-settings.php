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

// Example of how to use a repeatable box

function example_repeatable_customizer($wp_customize) {
    require 'section_vars.php';  
    require_once 'controller.php';  
    
    $wp_customize->add_section($example_section, array(
      'title' => 'Example Home Repeaters',
    ));
    
    $wp_customize->add_setting(
      $example_repeater,
      array(
          'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
          'transport' => 'refresh',
      ) );
  
    $wp_customize->add_control(
        new Onepress_Customize_Repeatable_Control(
            $wp_customize,
            $example_repeater,
            array(
                'label' 		=> esc_html__('Example Q & A Repeater'),
                'description'   => '',
                'section'       => $example_section,
                'live_title_id' => 'question',
                'title_format'  => esc_html__('[live_title]'), // [live_title]
                'max_item'      => 10, // Maximum item can add
                'limited_msg' 	=> wp_kses_post( __( 'Max items added' ) ),
                'fields'    => array(
                    'question'  => array(
                        'title' => esc_html__('Question'),
                        'type'  =>'text',
                    ),
                    'answer'  => array(
                        'title' => esc_html__('Answer'),
                        'type'  =>'editor',
                    ),
                    'link'  => array(
                        'title' => esc_html__('Link'),
                        'type'  =>'url',
                    ),
                    'some_image'  => array(
                        'title' => esc_html__('some_image'),
                        'type'  =>'media',
                    ),
                ),
            )
        )
    );
  }
  add_action( 'customize_register', 'example_repeatable_customizer' );

  function events_page_repeater($wp_customize) {
    require 'section_vars.php';  
    require_once 'controller.php';  
    
    $wp_customize->add_section($events_section2, array(
      'title' => 'Event Page',
    ));
    
    $wp_customize->add_setting(
      $event_repeater,
      array(
          'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
          'transport' => 'refresh',
      ) );
  
    $wp_customize->add_control(
        new Onepress_Customize_Repeatable_Control(
            $wp_customize,
            $event_repeater,
            array(
                'label' 		=> esc_html__('Event'),
                'description'   => '',
                'section'       => $events_section2,
                'live_title_id' => 'event_title',
                'title_format'  => esc_html__('[live_title]'), // [live_title]
                'max_item'      => 10, // Maximum item can add
                'limited_msg' 	=> wp_kses_post( __( 'Max items added' ) ),
                'fields'    => array(
                    'event_title'  => array(
                        'title' => esc_html__('Event Title'),
                        'type'  =>'text',
                    ),
                    'poster_image'  => array(
                        'title' => esc_html__('Poster Image'),
                        'type'  =>'media',
                    ),
                    'date'  => array(
                        'title' => esc_html__('Date'),
                        'type'  =>'text',
                    ),
                    'upcom_meet_info'  => array(
                        'title' => esc_html__('Upcoming Meeting Info'),
                        'type'  =>'editor',
                    ),
                    'location'  => array(
                        'title' => esc_html__('Location'),
                        'type'  =>'text',
                    ),
                    'eventbrite_link'  => array(
                        'title' => esc_html__('EventBrite Link'),
                        'type'  =>'url',
                    ),
                    'event_desc'  => array(
                        'title' => esc_html__('Event Description'),
                        'type'  =>'editor',
                    ),
                    'rel_link_desc'  => array(
                        'title' => esc_html__('Relevant Link Description'),
                        'type'  =>'editor',
                    ),
                    'rel_link'  => array(
                        'title' => esc_html__('Relevant Link'),
                        'type'  =>'url',
                    ),
                    'dropdown_past_books'  => array(
                        'title' => esc_html__('Dropdown - Past Books'),
                        'type'  =>'editor',
                    ),
                    'dropdown_future_books'  => array(
                        'title' => esc_html__('Dropdown - Future Books'),
                        'type'  =>'editor',
                    ),
                ),
            )
        )
    );
  }
  add_action( 'customize_register', 'events_page_repeater' );
