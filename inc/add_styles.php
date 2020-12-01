<?php
function add_custom_styles() {
    wp_register_style("faq", get_template_directory_uri() . "/css/faq.css", '', '1.0.0');
    wp_register_style("events", get_template_directory_uri() . "/css/events.css", '', '1.0.0');
}
add_action('wp_enqueue_scripts', 'add_custom_styles');