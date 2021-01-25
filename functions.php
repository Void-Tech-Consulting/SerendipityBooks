<?php
  require get_template_directory() . '/inc/example-post-type.php';
  require get_template_directory() . '/inc/enqueue-scripts.php';

  require get_template_directory() . '/inc/register-home-settings.php';
  require get_template_directory() . '/inc/register-header-settings.php';
  require get_template_directory() . '/inc/register-footer-settings.php';
  require get_template_directory() . '/inc/register-book-settings.php';
  require get_template_directory() . '/inc/register-faq-settings.php';
  require get_template_directory() . '/inc/register-shop-settings.php';

  require get_template_directory() . '/inc/register-event-settings.php';

  require get_template_directory() . '/inc/add_styles.php';
  
  require get_template_directory() . '/inc/register-favorite-type.php';

  // Add widgets in appearance sidebar
  function serendipity_widgets_init() {

    register_sidebar( array(
        'name'          => 'Header',
        'id'            => 'header',
        'description'   =>  'Search here',
      ));
  }
  add_action( 'widgets_init', 'serendipity_widgets_init');