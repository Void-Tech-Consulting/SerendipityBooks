<?php
function header_customizer($wp_customize) {
  require 'section_vars.php';
  $wp_customize->add_section($header_section, array(
    'title' => 'Header Section',
  ));
  // Icon
  $wp_customize->add_setting($header_icon_img);
  $wp_customize->add_control( new WP_Customize_Image_Control( 
      $wp_customize, 
      $header_icon_img, 
      array(
          'label' => 'Icon Imgage',
          'section' => $header_section
      )
  ));

  $wp_customize->selective_refresh->add_partial($header_icon_img, array(
    'selector' => 'span#copy-write', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
    ));

  // Logo
  $wp_customize->add_setting($header_logo_img);
  $wp_customize->add_control( new WP_Customize_Image_Control( 
      $wp_customize, 
      $header_logo_img, 
      array(
          'label' => 'Logo Image',
          'section' => $header_section
      )
  ));

  // Home title
  $wp_customize->add_setting($header_home_title);
  $wp_customize->add_control($header_home_title, array(
      'label' => 'Home Title',
      'section' => $header_section,
      'default' => 'HOME'
  ));

  // FAQ title
  $wp_customize->add_setting($header_faq_title);
  $wp_customize->add_control($header_faq_title, array(
      'label' => 'FAQ Title',
      'section' => $header_section,
      'default' => 'FAQ'
  ));

  // Events title
  $wp_customize->add_setting($header_events_title);
  $wp_customize->add_control($header_events_title, array(
      'label' => 'Events Title',
      'section' => $header_section,
      'default' => 'EVENTS'
  ));

  // Shop title
  $wp_customize->add_setting($header_shop_title);
  $wp_customize->add_control($header_shop_title, array(
      'label' => 'Shop Title',
      'section' => $header_section,
      'default' => 'SHOP'
  ));

    // checkout icon
    $wp_customize->add_setting($header_checkout_img);
    $wp_customize->add_control( new WP_Customize_Image_Control( 
        $wp_customize, 
        $header_checkout_img, 
        array(
            'label' => 'Checkout Image',
            'section' => $header_section
        )
    ));
}
add_action( 'customize_register', 'header_customizer' );