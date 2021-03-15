<?php

  function events_page_repeater($wp_customize) {
    require 'section_vars.php';  
    require_once 'controller.php';  
    
    $wp_customize->add_section($events_section2, array(
      'title' => 'Events Page',
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
    $wp_customize->selective_refresh->add_partial('event_title', array(
        'selector' => '#eventEdit'
    ));
  }
  add_action( 'customize_register', 'events_page_repeater' );


//Example of repeater

// function example_repeatable_customizer($wp_customize) {
//     require 'section_vars.php';  
//     require_once 'controller.php';  
    
//     $wp_customize->add_section($example_section, array(
//       'title' => 'Example Home Repeaters',
//     ));
    
//     $wp_customize->add_setting(
//       $example_repeater,
//       array(
//           'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
//           'transport' => 'refresh',
//       ) );
  
//     $wp_customize->add_control(
//         new Onepress_Customize_Repeatable_Control(
//             $wp_customize,
//             $example_repeater,
//             array(
//                 'label' 		=> esc_html__('Example Q & A Repeater'),
//                 'description'   => '',
//                 'section'       => $example_section,
//                 'live_title_id' => 'question',
//                 'title_format'  => esc_html__('[live_title]'), // [live_title]
//                 'max_item'      => 10, // Maximum item can add
//                 'limited_msg' 	=> wp_kses_post( __( 'Max items added' ) ),
//                 'fields'    => array(
//                     'question'  => array(
//                         'title' => esc_html__('Question'),
//                         'type'  =>'text',
//                     ),
//                     'answer'  => array(
//                         'title' => esc_html__('Answer'),
//                         'type'  =>'editor',
//                     ),
//                     'link'  => array(
//                         'title' => esc_html__('Link'),
//                         'type'  =>'url',
//                     ),
//                     'some_image'  => array(
//                         'title' => esc_html__('some_image'),
//                         'type'  =>'media',
//                     ),
//                 ),
//             )
//         )
//     );
//   }
//   add_action( 'customize_register', 'example_repeatable_customizer' );
