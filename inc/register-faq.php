<?php

function faq_customizer($wp_customize) {
  require 'section_vars.php';
  $wp_customize->add_section($faq_section, array(
    'title' => 'FAQ Page',
  ));

  // Trade Policy 
  $wp_customize->add_setting($faq_type1);
  $wp_customize->add_control($faq_type1, array(
    'label' => 'Question Type 1',
    'section' => $faq_section,
  ));

  $wp_customize->add_setting($faq_content1);
  $wp_customize->add_control($faq_content1, array(
    'label' => 'Question Content 1',
    'section' => $faq_section,
    'type' => 'textarea'
  ));
  
   // Gift Cards
   $wp_customize->add_setting($faq_type2);
  $wp_customize->add_control($faq_type2, array(
    'label' => 'Question Type 2',
    'section' => $faq_section,
  ));

  $wp_customize->add_setting($faq_content2);
  $wp_customize->add_control($faq_content2, array(
    'label' => 'Question Content 2',
    'section' => $faq_section,
    'type' => 'textarea'
  ));

   // Local Authors
   $wp_customize->add_setting($faq_type3);
  $wp_customize->add_control($faq_type3, array(
    'label' => 'Question Type 3',
    'section' => $faq_section,
  ));

  $wp_customize->add_setting($faq_content3);
  $wp_customize->add_control($faq_content3, array(
    'label' => 'Question Content 3',
    'section' => $faq_section,
    'type' => 'textarea'
  ));

   // Contactless Pickup
   $wp_customize->add_setting($faq_type4);
  $wp_customize->add_control($faq_type4, array(
    'label' => 'Question Type 4',
    'section' => $faq_section,
  ));

  $wp_customize->add_setting($faq_content4);
  $wp_customize->add_control($faq_content4, array(
    'label' => 'Question Content 4',
    'section' => $faq_section,
    'type' => 'textarea'
  ));

 // Delivery Service
  $wp_customize->add_setting($faq_type5);
  $wp_customize->add_control($faq_type5, array(
    'label' => 'Question Type 5',
    'section' => $faq_section,
  ));

  $wp_customize->add_setting($faq_content5);
  $wp_customize->add_control($faq_content5, array(
    'label' => 'Question Content 5',
    'section' => $faq_section,
    'type' => 'textarea'
  ));

   // Private Appointments
   $wp_customize->add_setting($faq_type6);
  $wp_customize->add_control($faq_type6, array(
    'label' => 'Question Type 6',
    'section' => $faq_section,
  ));

  $wp_customize->add_setting($faq_content6);
  $wp_customize->add_control($faq_content6, array(
    'label' => 'Question Content 6',
    'section' => $faq_section,
    'type' => 'textarea'
  ));

  $wp_customize->add_setting($faq_img);
  $wp_customize->add_control( new WP_Customize_Image_Control( 
      $wp_customize, 
      $faq_img, 
      array(
          'label' => 'Image',
          'section' => $faq_section
      )
  ));

}
add_action( 'customize_register', 'faq_customizer' );