<?php
function footer_customizer($wp_customize) {
  require 'section_vars.php';
  $wp_customize->add_section($footer_section, array(
    'title' => 'Footer Section',
  ));

  // Hours
  $wp_customize->add_setting($footer_hours);
  $wp_customize->add_control($footer_hours, array(
      'label' => 'Hours',
      'section' => $footer_section,
      'default' => 'Tues – Sat: 11 – 5 Sunday: 12 – 4'
  ));

  $wp_customize->selective_refresh->add_partial($footer_hours, array(
    'selector' => 'span#footer-info-select', 
    ));

  // Address
  $wp_customize->add_setting($footer_address);
  $wp_customize->add_control($footer_address, array(
      'label' => 'Address',
      'section' => $footer_section,
      'default' => '113 W Middle St Chelsea, MI 48118'
  ));

  // Phone Number
  $wp_customize->add_setting($footer_phone_number);
  $wp_customize->add_control($footer_phone_number, array(
      'label' => 'Phone Number',
      'section' => $footer_section,
      'default' => '734 475-7148'
  ));

  // Facebook Link
  $wp_customize->add_setting($footer_facebook_link);
  $wp_customize->add_control($footer_facebook_link, array(
      'label' => 'Facebook Link',
      'section' => $footer_section
  ));

  $wp_customize->selective_refresh->add_partial($footer_facebook_link, array(
    'selector' => 'span#footer-social-select', 
    ));

    // Twitter Link
    $wp_customize->add_setting($footer_twitter_link);
    $wp_customize->add_control($footer_twitter_link, array(
        'label' => 'Twitter Link',
        'section' => $footer_section
    ));

    // Instagram Link
    $wp_customize->add_setting($footer_instagram_link);
    $wp_customize->add_control($footer_instagram_link, array(
        'label' => 'Instagram Link',
        'section' => $footer_section
    ));

    // Email
    $wp_customize->add_setting($footer_email, array(
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control($footer_email, array(
        'label' => 'Email',
        'section' => $footer_section
    ));
    $wp_customize->selective_refresh->add_partial($footer_email, array(
        'selector' => 'span#edit-email'
    ));

}
add_action( 'customize_register', 'footer_customizer' );