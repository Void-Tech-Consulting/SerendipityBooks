<?php

function faq_customizer($wp_customize) {
  require 'section_vars.php';
  $wp_customize->add_section($faq_section, array(
    'title' => 'FAQ Page',
  ));

  // Trade Policy 
  $wp_customize->add_setting($faq_tradepolicy, array(
    'transport' => 'postMessage',
  ));
  $wp_customize->add_control($faq_tradepolicy, array(
    'label' => 'Trade Policy',
    'section' => $faq_section,
  ));

  $wp_customize->selective_refresh->add_partial($faq_tradepolicy, array(
    'selector' => 'span#edit-tradepolicy'
  ));

  $wp_customize->add_setting($faq_tradepolicy_content);
  $wp_customize->add_control($faq_tradepolicy_content, array(
    'label' => 'Trade Policy Content',
    'section' => $faq_section,
    'type' => 'textarea'
  ));

   // Local Authors
   $wp_customize->add_setting($faq_authors, array(
    'transport' => 'postMessage',
  ));
  $wp_customize->add_control($faq_authors, array(
    'label' => 'Local Authors',
    'section' => $faq_section,
  ));

  $wp_customize->selective_refresh->add_partial($faq_authors, array(
    'selector' => 'span#edit-authors'
  ));

  $wp_customize->add_setting($faq_authors_content);
  $wp_customize->add_control($faq_authors_content, array(
    'label' => 'Local Authors Content',
    'section' => $faq_section,
    'type' => 'textarea'
  ));

  // Shop Info
  $wp_customize->add_setting($faq_info, array(
    'transport' => 'postMessage',
  ));
  $wp_customize->add_control($faq_info, array(
    'label' => 'Shop Info',
    'section' => $faq_section,
  ));

  $wp_customize->selective_refresh->add_partial($faq_info, array(
    'selector' => 'span#edit-info'
  ));

  $wp_customize->add_setting($faq_info_content);
  $wp_customize->add_control($faq_info_content, array(
    'label' => 'Shop Info Content',
    'section' => $faq_section,
    'type' => 'textarea'
  ));

  // Image
  $wp_customize->add_setting($faq_img);
  $wp_customize->add_control( new WP_Customize_Image_Control( 
      $wp_customize, 
      $faq_img, 
      array(
          'label' => 'Image',
          'section' => $faq_section
      )
  ));

  $wp_customize->selective_refresh->add_partial($faq_img, array(
    'selector' => 'span#edit-img'
  ));
}
add_action( 'customize_register', 'faq_customizer' );

/* FAQ Repeater */
function faq_repeater_customizer($wp_customize) {
  require 'section_vars.php';  
  require_once 'controller.php';  
  
  $wp_customize->add_section($faq_rsection, array(
    'title' => 'FAQ Repeaters',
  ));
  
  $wp_customize->add_setting(
    $faq_repeater,
    array(
        'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
        'transport' => 'refresh',
    ) );

  $wp_customize->add_control(
      new Onepress_Customize_Repeatable_Control(
          $wp_customize,
          $faq_repeater,
          array(
              'label' 		=> esc_html__('FAQ Repeater'),
              'description'   => '',
              'section'       => $faq_rsection,
              'live_title_id' => 'faq_questype',
              'title_format'  => esc_html__('[live_title]'), // [live_title]
              'max_item'      => 10, // Maximum item can add
              'limited_msg' 	=> wp_kses_post( __( 'Max items added' ) ),
              'fields'    => array(
                  'faq_questype'  => array(
                      'title' => esc_html__('Question Type'),
                      'type'  =>'text',
                  ),
                  'faq_quescontent'  => array(
                      'title' => esc_html__('Answer'),
                      'type'  =>'editor',
                  )
              ),
          )
      )
  );
}
add_action( 'customize_register', 'faq_repeater_customizer' );