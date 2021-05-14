<?php 
  get_header(); 
  wp_enqueue_style('shop');
  require get_template_directory() . '/inc/section_vars.php';
?>
<script type="text/javascript">
  function changeFunc($i) {
      alert($i);
    }
</script>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop Page</title>
</head>
<body>
  <!-- Title of Page -->
  <header id="shop-header">
    <span class="brackets">[</span>
    <h1 id="shop-h1">Michelle's Shop</h1>
    <span class="brackets">]</span>
  </header>

  <div id="shop_layout">
      <!-- Left: Sidebar -->
    <section class="shop-sec" id="selection-sidebar">
      <!-- Categories -->
      <span id="edit-categories"></span>
      <?php if (get_theme_mod($shop_categories)) { ?>
        <span class="selection-title"><?php echo get_theme_mod($shop_categories) ?></span>
      <?php } else { ?>
        <span class="selection-title">Categories</span>
      <?php } ?>

      <div class="selection-container" id="select-categories">
            <div class="selection-active" value="1">All</div>
            <?php 
              $args = array(
                  'taxonomy'   => "product_cat",
                  'number'     => $number,
                  'orderby'    => $orderby,
                  'order'      => $order,
                  'hide_empty' => $hide_empty,
                  'include'    => $ids
              );
              $product_categories = get_terms($args);
              foreach ($product_categories as $cat) { ?>
                  <div value="1"><?php echo $cat->name ?></div>
              <?php } ?>
      </div>

      <!-- Conditions -->
      <span id="edit-condition"></span>
      <?php if (get_theme_mod($shop_condition)) { ?>
        <span class="selection-title"><?php echo get_theme_mod($shop_condition) ?></span>
      <?php } else { ?>
        <span class="selection-title">Condition</span>
      <?php } ?>
      
      <?php if (get_theme_mod($shop_condition_content)) { ?>
        <div class="selection-container" id="select-conditions"><?php echo get_theme_mod($shop_condition_content) ?></div>
      <?php } else { ?>
      <div class="selection-container" id="select-conditions">
        <div class="selection-active">All</div>
        <div>New</div>
        <div>Used</div>
      </div>
      <?php } ?>
    </section>

    <!-- Right: Bookshop -->
    <section class="shop-sec" id="bookstore">
      <div class="loading-container hide-load loading-background"></div>
      <div class="loading-container hide-load">
          <img class="books-loading" src=<?php echo get_template_directory_uri() . "/img/Hourglass.gif" ?> alt="Loading...">
      </div>
      <!-- Display Type -->
      <div id="sort-bookstore">
        <div id="phone-categories">
          <div class="display-content" id="select-categories">
            <select>
            <option value="1">All</option>
            <option value="1">All</option>
            <?php 
              $args = array(
                  'taxonomy'   => "product_cat",
                  'number'     => $number,
                  'orderby'    => $orderby,
                  'order'      => $order,
                  'hide_empty' => $hide_empty,
                  'include'    => $ids
              );
              $product_categories = get_terms($args);
              foreach ($product_categories as $cat) { ?>
                  <option value="1"><?php echo $cat->name ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        
        <div id ="phone-condition">
          <div class="display-content" id="select-conditions">
            <select>
              <option value="1">All</option>
              <option value="1">All</option>
              <option value="1">New</option>
              <option value="1">Used</option>
            </select>
          </div>
        </div>

        <span id="edit-display"></span>
        <div class="display-content" id="display-num">
        <?php if (get_theme_mod($shop_display)) { ?>
          <select id="change-post-num" id="display-num">
            <option value="<?php echo get_theme_mod($shop_display) ?>"><?php echo get_theme_mod($shop_display) ?></option>
            <option value="<?php echo get_theme_mod($shop_display) ?>"><?php echo get_theme_mod($shop_display) ?></option>
            <option value="<?php echo get_theme_mod($shop_display) ?>"><?php echo get_theme_mod($shop_display) ?></option>
            <option value="<?php echo get_theme_mod($shop_display) ?>"><?php echo get_theme_mod($shop_display) ?></option>
          </select>
        <?php } else { ?>
          <select id="change-post-num" id="display-num">
            <option value="30">Show 30</option>
            <option value="30">Show 30</option>
            <option value="60">Show 60</option>
            <option value="90">Show 90</option>
          </select>
        <?php } ?>
        </div>

        <div class="display-content" id="display-by">
          <select id="change-order">
            <option value="0">Popularity</option>
            <option value="0">Popularity</option>
            <option value="1">Featured</option>
            <option value="2">Newest Arrivals</option>
          </select>
        </div>
      </div>
      <div id="display-bookstore">
      </div>

      <div id="page-bar">
        <div class="page-bar-arrow page-bar-left" id="page-bar-left-arrow">
          <img src=<?php echo get_template_directory_uri() . "/img/arrow-point-to-right.svg" ?> alt="Right Arrow">
        </div>
        <div class="page-bar-nums" id="page_bar_holder"> </div>
        <div class="page-bar-arrow page-bar-right" id="page-bar-right-arrow">
          <img src=<?php echo get_template_directory_uri() . "/img/arrow-point-to-right.svg" ?> alt="Right Arrow">
        </div>
      </div>
    </section>
  </div>
  
  <section class="shop-sec" id="shop-more">
    <span id="edit-moreimg"></span>
    <?php if (get_theme_mod($shop_moreimg)) { ?>
      <img id="shop-more-leftimg" src=<?php echo get_theme_mod($shop_moreimg)?> alt="">
    <?php } else { ?>
      <img id="shop-more-leftimg" src=<?php echo get_template_directory_uri() . "/img/birds.png" ?> alt="Birds">
    <?php } ?>
    
    <span id="edit-shopmoretext"></span>
    <div class="shop-more-text">
      <p>Haven’t found what you’re looking for?</p>
      <p>Check out more books from Michelle below!</p>
      <span id="edit-shopdelivery"></span>
      <?php if (get_theme_mod($shop_delivery)) { ?>
        <a class="shop-more-button" href=<?php echo get_theme_mod($shop_delivery)?>>
          <button>Shop More for Home Delivery</button>
        </a>
      <?php } else { ?>
        <a class="shop-more-button" href="https://bookshop.org/shop/serendipitybooks">
          <button>Shop More for Home Delivery</button>
        </a>
      <?php } ?>

      <span id="edit-shoppickup"></span>
      <?php if (get_theme_mod($shop_pickup)) { ?>
        <a class="shop-more-button" href=<?php echo get_theme_mod($shop_pickup)?>>
          <button>Shop More for Chelsea Pickup</button>
        </a>
      <?php } else { ?>
        <a class="shop-more-button" href="https://docs.google.com/forms/d/e/1FAIpQLSd4BJ7A1TviezYOXWrA9SLyBcxcSJsrm1oym1xeU4-r2zjzTA/viewform">
          <button>Shop More for Chelsea Pickup</button>
        </a>
      <?php } ?>
    </div>
    <span id="edit-moreimg"></span>
    <?php if (get_theme_mod($shop_moreimg)) { ?>
      <img id="shop-more-leftimg" src=<?php echo get_theme_mod($shop_moreimg)?> alt="">
    <?php } else { ?>
      <img id="shop-more-leftimg" src=<?php echo get_template_directory_uri() . "/img/birds.png" ?> alt="Birds">
    <?php } ?>
  </section>

</body>

</html>

<?php get_footer(); ?>
