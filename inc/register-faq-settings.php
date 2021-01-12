<?php

function faq_customizer($wp_customize) {
  require 'section_vars.php';
  $wp_customize->add_section($faq_section, array(
    'title' => 'FAQ Page',
  ));

  // Trade Policy 
  $wp_customize->add_setting($faq_tradepolicy);
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
    'type' => 'textarea',
    'transport' => 'postMessage'
  ));

  // $wp_customize->selective_refresh->add_partial($faq_tradepolicy_content, array(
  //   'selector' => 'span#edit-tradepolicy-content'
  // ));
  
   // Gift Cards
  $wp_customize->add_setting($faq_giftcards);
  $wp_customize->add_control($faq_giftcards, array(
    'label' => 'Gift Cards',
    'section' => $faq_section,
  ));

  $wp_customize->selective_refresh->add_partial($faq_giftcards, array(
    'selector' => 'span#edit-giftcards'
  ));

  $wp_customize->add_setting($faq_giftcards_content);
  $wp_customize->add_control($faq_giftcards_content, array(
    'label' => 'Gift Cards Content',
    'section' => $faq_section,
    'type' => 'textarea'
  ));
  

   // Local Authors
   $wp_customize->add_setting($faq_authors);
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

   // Contactless Pickup
   $wp_customize->add_setting($faq_pickup);
  $wp_customize->add_control($faq_pickup, array(
    'label' => 'Contactless Pickup',
    'section' => $faq_section,
  ));

  $wp_customize->selective_refresh->add_partial($faq_pickup, array(
    'selector' => 'span#edit-pickup'
  ));

  $wp_customize->add_setting($faq_pickup_content);
  $wp_customize->add_control($faq_pickup_content, array(
    'label' => 'Contactless Pickup',
    'section' => $faq_section,
    'type' => 'textarea'
  ));

 // Delivery Service
  $wp_customize->add_setting($faq_delivery);
  $wp_customize->add_control($faq_delivery, array(
    'label' => 'Delivery Service',
    'section' => $faq_section,
  ));

  $wp_customize->selective_refresh->add_partial($faq_delivery, array(
    'selector' => 'span#edit-delivery'
  ));

  $wp_customize->add_setting($faq_delivery_content);
  $wp_customize->add_control($faq_delivery_content, array(
    'label' => 'Delivery Service Content',
    'section' => $faq_section,
    'type' => 'textarea'
  ));

   // Private Appointments
   $wp_customize->add_setting($faq_appoint);
  $wp_customize->add_control($faq_appoint, array(
    'label' => 'Private Appointments',
    'section' => $faq_section,
  ));

  $wp_customize->selective_refresh->add_partial($faq_appoint, array(
    'selector' => 'span#edit-appoint'
  ));

  $wp_customize->add_setting($faq_appoint_content);
  $wp_customize->add_control($faq_appoint_content, array(
    'label' => 'Private Appointments Content',
    'section' => $faq_section,
    'type' => 'textarea'
  ));

  // Shop Info
  $wp_customize->add_setting($faq_info);
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