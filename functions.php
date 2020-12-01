<?php
  require get_template_directory() . '/inc/example-post-type.php';
  require get_template_directory() . '/inc/enqueue-scripts.php';
  require get_template_directory() . '/inc/register-settings.php';
  wp_register_style("home", get_template_directory_uri() . "/css/home.css", '', '1.0.0');
  wp_enqueue_style('home');
?>

