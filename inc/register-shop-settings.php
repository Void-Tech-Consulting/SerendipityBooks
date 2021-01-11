<?php

function shop_customizer($wp_customize) {
  require 'section_vars.php';
  $wp_customize->add_section($shop_section, array(
    'title' => 'Shop Page',
  ));

  // Categories
  $wp_customize->add_setting($shop_categories);
  $wp_customize->add_control($shop_categories, array(
    'label' => 'Categories',
    'section' => $shop_section,
  ));

  $wp_customize->add_setting($shop_categories_content);
  $wp_customize->add_control($shop_categories_content, array(
    'label' => 'Categories Content',
    'section' => $shop_section,
    'type' => 'textarea'
  ));

  // Condition
  $wp_customize->add_setting($shop_condition);
  $wp_customize->add_control($shop_condition, array(
    'label' => 'Condition',
    'section' => $shop_section,
  ));

  $wp_customize->add_setting($shop_condition_content);
  $wp_customize->add_control($shop_condition_content, array(
    'label' => 'Condition Content',
    'section' => $shop_section,
    'type' => 'textarea'
  ));

  // Book Covers
  // 1
  $wp_customize->add_setting($shop_bc1);
  $wp_customize->add_control( new WP_Customize_Image_Control( 
      $wp_customize, 
      $shop_bc1, 
      array(
          'label' => 'Book Cover 1',
          'section' => $shop_section
      )
  ));

  $wp_customize->add_setting($shop_bi1);
  $wp_customize->add_control($shop_bi1, array(
    'label' => 'Book Info 1',
    'section' => $shop_section,
  ));

  // 2
  $wp_customize->add_setting($shop_bc2);
  $wp_customize->add_control( new WP_Customize_Image_Control( 
      $wp_customize, 
      $shop_bc2, 
      array(
          'label' => 'Book Cover 2',
          'section' => $shop_section
      )
  ));

  $wp_customize->add_setting($shop_bi2);
  $wp_customize->add_control($shop_bi2, array(
    'label' => 'Book Info 2',
    'section' => $shop_section,
  ));
  // 3
  $wp_customize->add_setting($shop_bc3);
  $wp_customize->add_control( new WP_Customize_Image_Control( 
      $wp_customize, 
      $shop_bc3, 
      array(
          'label' => 'Book Cover 3',
          'section' => $shop_section
      )
  ));

  $wp_customize->add_setting($shop_bi3);
  $wp_customize->add_control($shop_bi3, array(
    'label' => 'Book Info 3',
    'section' => $shop_section,
  ));

}
add_action( 'customize_register', 'shop_customizer' );