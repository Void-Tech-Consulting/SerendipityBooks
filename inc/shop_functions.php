<?php

use function PHPSTORM_META\type;

add_action("wp_ajax_shop_by_category", "shop_by_category");

function shop_by_category() {
    $cat_name = $_REQUEST["cat_name"];
    $posts_per_page = $_REQUEST["posts_per_page"];
    $paged = $_REQUEST["paged"];
    $condition = $_REQUEST["condition"];
    $order_by = $_REQUEST["order_by"];

    $args = array(
        'post_type' => 'product',
        'meta_key' => 'total_sales',
        'orderby' => $order_by,
        'order'   => 'DESC',
        'suppress_filters' => true,
        'tax_query' => array( 
          array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => $cat_name
          )
        ),
        // 'meta_query'     => array(array(
        //   'key' => 'condition',
        //   'value' => $condition,
        //   'compare' => 'IN',
        // )),
        'posts_per_page' => $posts_per_page,
        'paged' => $paged
      );
      $shop_query = new WP_Query($args);
      $html['html'] = '';
      $html['pages'] = $shop_query->max_num_pages;
      
      if ($shop_query->have_posts()) {
        while ($shop_query->have_posts()) {
          $shop_query->the_post();
    
          $id = get_the_ID();
          $product = wc_get_product($id);
            
          $html['html'] .= display_product($product);
        }
      }
      $result = json_encode($html);
      echo $result;
      // don't forget to end your scripts with a die() function - very important
      die();
}

function display_product($product) {
    $name = $product->get_name();
    $price = (float) $product->get_price();
    $isbn = $product->get_attribute('ISBN');
    $url = get_post_permalink($product->id);
    $price = number_format($price, 2);
  
    $imgsrc = "http://covers.openlibrary.org/b/isbn/$isbn-L.jpg";
  
    return "
    <a href='$url'>
      <div class='book-content'>
        <div class='book-cover'>
            <img src=$imgsrc alt='Book Cover'>
        </div>
        <span id='edit-bi'></span>
        <div  class='book-info'>
          <span class='book-title'>$name</span>
          <span class='book-price'>$price</span>
        </div>
      </div>
    </a>";
  }
