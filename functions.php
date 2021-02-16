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
  require get_template_directory() . '/inc/shop_functions.php';

  require get_template_directory() . '/inc/add_styles.php';
  
  require get_template_directory() . '/inc/register-favorite-type.php';

  require get_template_directory() . '/inc/customizer.php';
  require get_template_directory() . '/inc/template_functions.php';

  
add_filter( 'woocommerce_loop_add_to_cart_link', 'quantity_inputs_for_woocommerce_loop_add_to_cart_link', 10, 2 );
function quantity_inputs_for_woocommerce_loop_add_to_cart_link( $html, $product ) {
	if ( $product && $product->is_type( 'simple' ) && $product->is_purchasable() && $product->is_in_stock() && ! $product->is_sold_individually() ) {
		$html = '<form action="' . esc_url( $product->add_to_cart_url() ) . '" class="cart" method="post" enctype="multipart/form-data">';
		$html .= woocommerce_quantity_input( array(), $product, false );
		$html .= '<button type="submit" class="button alt">' . esc_html( $product->add_to_cart_text() ) . '</button>';
		$html .= '</form>';
	}
	return $html;
}