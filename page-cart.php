<?php

use function Automattic\Jetpack\Extensions\Amazon\register_block;

get_header(); 
?>
<div class="woocommerce-cart-wrapper">
  <?php echo do_shortcode("[woocommerce_cart]"); ?>
</div>

<?php get_footer(); ?>