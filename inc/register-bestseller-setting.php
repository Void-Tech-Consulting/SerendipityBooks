<?php
function bestseller_repeatable_customizer($wp_customize) {
    require 'section_vars.php';
    require_once 'controller.php';
    
    $wp_customize->add_section($bestseller_section, array(
      'title' => 'Bestselling Books',
    ));
    
    $wp_customize->add_setting(
      $bestseller_repeater,
      array(
          'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
          'transport' => 'refresh',
      ) );
  
    $wp_customize->add_control(
        new Onepress_Customize_Repeatable_Control(
            $wp_customize,
            $bestseller_repeater,
            array(
                'label' 		=> esc_html__('Bestselling books'),
                'description'   => "Add bestselling books here",
                'section' => $bestseller_section,
                'live_title_id' => 'bestseller',
                'title_format'  => esc_html__('[live_title]'), // [live_title]
                'max_item'      => PHP_INT_MAX, // Maximum item can add
                'limited_msg' 	=> wp_kses_post( __( 'Max bestsellers added' ) ),
                'fields'    => array(
                    'bestseller'  => array(
                        'title' => esc_html__('Book ID'),
                        'type'  =>'text',
                    )
                ),
            )
        )
    );
  }
  add_action( 'customize_register', 'bestseller_repeatable_customizer' );
