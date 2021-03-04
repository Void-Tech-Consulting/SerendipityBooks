<?php
function favorite_repeatable_customizer($wp_customize) {
    require 'section_vars.php';  
    require_once 'controller.php';  
    
    $wp_customize->add_section($favorite_section, array(
      'title' => 'Favorite Books',
    ));
    
    $wp_customize->add_setting(
      $favorite_repeater,
      array(
          'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
          'transport' => 'refresh',
      ) );
  
    $wp_customize->add_control(
        new Onepress_Customize_Repeatable_Control(
            $wp_customize,
            $favorite_repeater,
            array(
                'label' 		=> esc_html__('Favorite books'),
                'description'   => "Add your favorite books here",
                'section' => $favorite_section,
                // 'section'       => $home_section,
                'live_title_id' => 'favorite',
                'title_format'  => esc_html__('[live_title]'), // [live_title]
                'max_item'      => PHP_INT_MAX, // Maximum item can add
                'limited_msg' 	=> wp_kses_post( __( 'Max favorites added' ) ),
                'fields'    => array(
                    'favorite'  => array(
                        'title' => esc_html__('Book ID'),
                        'type'  =>'text',
                    )
                ),
            )
        )
    );
  }
  add_action( 'customize_register', 'favorite_repeatable_customizer' );
