<?php

add_action("wp_ajax_shop_by_category", "shop_by_category");

function shop_by_category() {
    $cat_name = $_REQUEST["cat_name"];
    $posts_per_page = $_REQUEST["posts_per_page"];
    $paged = $_REQUEST["paged"];
    $condition = $_REQUEST["condition"];
    $order_by = $_REQUEST["order_by"];

    $args = array(
        'post_type' => 'product',
        'orderby' => $order_by,
        'order'   => 'DESC',
        'suppress_filters' => true,
        'posts_per_page' => $posts_per_page,
        'paged' => $paged,
        'meta_query' => array(
          array(
            'key' => '_stock_status',
            'value' => 'instock',
            'compare' => '=',
        ))
      );
      if ($cat_name != 'All') {
        $args['tax_query'] = array( 
          array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => $cat_name
          )
        );
      }

      if ($condition != "") {
        array_push($args['meta_query'], array(
          'key' => 'condition',
          'value' => $condition,
          'compare' => 'like',
        ));
      }

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
    $url = get_post_permalink($product->id);
    $price = number_format($price, 2);
    $imgsrc = get_the_post_thumbnail_url($product->id);
    $img = $imgsrc ? "<img src='$imgsrc' alt='Book Cover'>" : file_get_contents(get_template_directory_uri() . "/img/book.svg");
    $book_color = $imgsrc ? "" : "no-shadow green-svg";
    return "
    <a href='$url'>
      <div class='book-content'>
        <div class='book-cover $book_color'>
            $img
        </div>
        <span id='edit-bi'></span>
        <div  class='book-info'>
          <span class='book-title'>$name</span>
          <span class='book-price'>$price</span>
        </div>
      </div>
    </a>";
  }
