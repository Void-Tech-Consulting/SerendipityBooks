<?php

function faq_customizer($wp_customize) {
  require 'section_vars.php';
  $wp_customize->add_section($faq_section, array(
    'title' => 'FAQ Page',
  ));

  $wp_customize->add_setting($faq_questype);
  $wp_customize->add_control($faq_questype, array(
      'label' => 'Question Type',
      'section' => $faq_section,
      'type' => 'textarea'
  ));

  $wp_customize->add_setting($faq_quescontent);
  $wp_customize->add_control($faq_quescontent, array(
      'label' => 'Question Content',
      'section' => $faq_section,
      'type' => 'textarea'
  ));
}
add_action( 'customize_register', 'faq_customizer' );