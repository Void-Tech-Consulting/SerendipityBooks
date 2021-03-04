<?php

function shop_customizer($wp_customize) {
  require 'section_vars.php';
  $wp_customize->add_section($shop_section, array(
    'title' => 'Shop Page',
  ));

  // Categories
  $wp_customize->add_setting($shop_categories, array(
    'transport' => 'postMessage',
  ));
  $wp_customize->add_control($shop_categories, array(
    'label' => 'Categories',
    'section' => $shop_section,
  ));
  $wp_customize->selective_refresh->add_partial($shop_categories, array(
    'selector' => 'span#edit-categories'
  ));

  $wp_customize->add_setting($shop_categories_content, array(
    'transport' => 'postMessage',
  ));
  $wp_customize->add_control($shop_categories_content, array(
    'label' => 'Categories Content',
    'section' => $shop_section,
    'type' => 'textarea'
  ));

  // Condition
  $wp_customize->add_setting($shop_condition, array(
    'transport' => 'postMessage',
  ));
  $wp_customize->add_control($shop_condition, array(
    'label' => 'Condition',
    'section' => $shop_section,
  ));
  $wp_customize->selective_refresh->add_partial($shop_condition, array(
    'selector' => 'span#edit-condition'
  ));

  $wp_customize->add_setting($shop_condition_content);
  $wp_customize->add_control($shop_condition_content, array(
    'label' => 'Condition Content',
    'section' => $shop_section,
    'type' => 'textarea'
  ));


  // Display
  $wp_customize->add_setting($shop_display, array(
    'transport' => 'postMessage',
  ));
  $wp_customize->add_control($shop_display, array(
    'label' => 'Display',
    'section' => $shop_section,
  ));
  $wp_customize->selective_refresh->add_partial($shop_display, array(
    'selector' => 'span#edit-display'
  ));

  // $wp_customize->add_setting($shop_display_content);
  // $wp_customize->add_control($shop_display_content, array(
  //   'label' => 'Display Content',
  //   'section' => $shop_section,
  //   'type' => 'textarea'
  // ));

  // Book Cover
  $wp_customize->add_setting($shop_bc);
  $wp_customize->add_control( new WP_Customize_Image_Control( 
      $wp_customize, 
      $shop_bc, 
      array(
          'label' => 'Book Cover',
          'section' => $shop_section
      )
  ));

  $wp_customize->add_setting($shop_bi);
  $wp_customize->add_control($shop_bi, array(
    'label' => 'Book Info',
    'section' => $shop_section,
  ));
  $wp_customize->selective_refresh->add_partial($shop_bi, array(
    'selector' => 'span#edit-bi'
  ));

  // Shop More
  $wp_customize->add_setting($shop_moretext, array(
    'transport' => 'postMessage',
  ));
  $wp_customize->add_control($shop_moretext, array(
    'label' => 'Shop More text',
    'section' => $shop_section,
  ));
  $wp_customize->selective_refresh->add_partial($shop_moretext, array(
    'selector' => 'span#edit-shopmoretext'
  ));

  $wp_customize->add_setting($shop_moreimg);
  $wp_customize->add_control( new WP_Customize_Image_Control( 
      $wp_customize, 
      $shop_moreimg, 
      array(
          'label' => 'Shop More Image',
          'section' => $shop_section
      )
  ));
  $wp_customize->selective_refresh->add_partial($shop_moreimg, array(
    'selector' => 'span#edit-moreimg'
  ));

}
add_action( 'customize_register', 'shop_customizer' );



function script_enqueuer() {
   
  if (is_page('shop')) {
    // Register the JS file with a unique handle, file location, and an array of dependencies
    wp_register_script( "shop_script",  get_template_directory_uri() .'/js/shop_script.js', array('jquery') );
    
    // localize the script to your domain name, so that you can reference the url to shop_functions.php file easily
    wp_localize_script( 'shop_script', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ));        
    
    // enqueue jQuery library and the script you registered above
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'shop_script' );
  }
}

// Fires after WordPress has finished loading, but before any headers are sent.
add_action( 'init', 'script_enqueuer' );