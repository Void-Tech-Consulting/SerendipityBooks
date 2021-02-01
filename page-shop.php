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

      <?php if (get_theme_mod($shop_categories_content)) { ?>
        <div class="selection-container"><?php echo get_theme_mod($shop_categories_content) ?></div>
      <?php } else { ?>
      <div class="selection-container" id="select-categories">
        <div>All</div>
        <div>Nonfiction</div>
        <div>Fiction</div>
        <div>Childrens</div>
        <div>Young Adult</div>
        <div class="selection-active">Gifts</div>
      </div>
      <?php } ?>

      <!-- Conditions -->
      <span id="edit-condition"></span>
      <?php if (get_theme_mod($shop_condition)) { ?>
        <span class="selection-title"><?php echo get_theme_mod($shop_condition) ?></span>
      <?php } else { ?>
        <span class="selection-title">Condition</span>
      <?php } ?>
      
      <?php if (get_theme_mod($shop_condition_content)) { ?>
        <div class="selection-container"><?php echo get_theme_mod($shop_condition_content) ?></div>
      <?php } else { ?>
      <div class="selection-container" id="select-conditions">
        <div>All</div>
        <div class="selection-active">New</div>
        <div>Used</div>
      </div>
      <?php } ?>
    </section>

    <!-- Right: Bookshop -->
    <section class="shop-sec" id="bookstore">
      <!-- Display Type -->
      <div id="sort-bookstore">

        <span id="edit-display"></span>
        <div class="display-content" id="display-num">
        <?php if (get_theme_mod($shop_display)) { ?>
          <select id="change-post-num">
            <option value="0"><?php echo get_theme_mod($shop_display) ?></option>
            <option value="0"><?php echo get_theme_mod($shop_display) ?></option>
            <option value="1"><?php echo get_theme_mod($shop_display) ?></option>
            <option value="2"><?php echo get_theme_mod($shop_display) ?></option>
          </select>
        <?php } else { ?>
          <select id="change-post-num" onchange="change_num_posts(value)">
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

      <div id="display-bookstore"> </div>

      <div id="page-bar">
        <div class="page-bar-arrow page-bar-left">
          <img src=<?php echo get_template_directory_uri() . "/img/arrow-point-to-right.svg" ?> alt="Right Arrow">
        </div>
        <div class="page-bar-nums" id="page_bar_holder">
          <div class="page-bar-active">1</div>
          <div>2</div>
          <div>3</div>
          <div>4</div>
          <div>5</div>
          <div>6</div>
          <div>...</div>
          <div>200</div>
        </div>
        <div class="page-bar-arrow page-bar-right">
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
      <button>SHOP MORE</button>
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