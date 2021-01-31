<?php 

add_action("wp_ajax_shop_by_category", "shop_by_category");

function shop_by_category() {
    $cat_name = $_REQUEST["cat_name"];
    if ($cat_name == 'all') {
      $cat_name = 'kids';
    }
    $posts_per_page = $_REQUEST["posts_per_page"];
    $args = array(
        'post_type' => 'product',
        'product_cat' => $cat_name,
        'meta_key' => 'total_sales',
        'orderby' => 'meta_value_num',
        'posts_per_page' => $posts_per_page,
        'paged' => 1
      );
      $shop_query = new WP_Query($args);
      $html = '';
      
      if ($shop_query->have_posts()) {
        while ($shop_query->have_posts()) {
            $html['type'] = 'success';
          $shop_query->the_post();
    
          $id = get_the_ID();
          $product = wc_get_product($id);
            
          $html .= display_product($product);
        }
      }
      echo $html;
      // don't forget to end your scripts with a die() function - very important
      die();
}

function display_product($product) {
    $name = $product->get_name();
    $price = (float) $product->get_price();
    $ean = $product->get_attribute('ean');
  
    $price = number_format($price, 2);
  
    $imgsrc = "http://covers.openlibrary.org/b/isbn/$ean-L.jpg";
  
    return "
    <div class='book-content'>
      <div class='book-cover'>
          <img src=$imgsrc alt='Book Cover'>
      </div>
      <span id='edit-bi'></span>
      <div class='book-info'>
        <span class='book-title'>$name</span>
        <span class='book-price'>$price</span>
      </div>
    </div>";
  }
