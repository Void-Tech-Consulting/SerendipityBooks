<?php 
  get_header(); 
  wp_enqueue_style('shop');
  require get_template_directory() . '/inc/section_vars.php';
?>

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
    <section id="selection-sidebar">
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
    <section id="bookstore">
      <!-- Display Type -->
      <div id="sort-bookstore">
        <div class="display-content" id="phone-categories">
          <select>
            <option value="0">Category</option>
            <option value="1">All</option>
            <option value="2">Nonfiction</option>
            <option value="3">Fiction</option>
            <option value="4">Childrens</option>
            <option value="5">Young Adult</option>
            <option value="6">Gifts</option>
          </select>
        </div>

        <div class="display-content" id="phone-condition">
          <select>
            <option value="0">Condition</option>
            <option value="1">All</option>
            <option value="2">New</option>
            <option value="3">Used</option>
          </select>
        </div>

        <span id="edit-display"></span>
        <div class="display-content" id="display-num">
        <?php if (get_theme_mod($shop_display)) { ?>
          <select>
            <option value="0"><?php echo get_theme_mod($shop_display) ?></option>
            <option value="1"><?php echo get_theme_mod($shop_display) ?></option>
            <option value="2"><?php echo get_theme_mod($shop_display) ?></option>
          </select>
        <?php } else { ?>
          <select>
            <option value="0">Show 30</option>
            <option value="1">Show 60</option>
            <option value="2">Show 90</option>
          </select>
        <?php } ?>
        </div>

        <div class="display-content" id="display-by">
          <select>
            <option value="0">Popularity</option>
            <option value="1">Featured</option>
            <option value="2">Newest Arrivals</option>
          </select>
        </div>
      </div>

      <div id="display-bookstore">
        <div class="book-content">
          <div class="book-cover">
            <?php if (get_theme_mod($shop_bc)) { ?>
              <img src=<?php echo get_theme_mod($shop_bc)?>>
            <?php } else { ?>
              <img src=<?php echo get_template_directory_uri() . "/img/bc_educated.png" ?> alt="Educated Book Cover">
            <?php } ?>
          </div>

          <?php if (get_theme_mod($shop_bi)) { ?>
            <div class="book-info"><?php echo get_theme_mod($shop_bi) ?></div>
          <?php } else { ?>
          <span id="edit-bi"></span>
          <div class="book-info">
            <span class="book-title">Educated</span>
            <span class="book-price">$15.99</span>
          </div>
          <?php } ?>
        </div>

        <div class="book-content">
          <div class="book-cover">
            <img src=<?php echo get_template_directory_uri() . "/img/bc_withthefire.png" ?> alt="With the Fire on High Book Cover">
          </div>
            <div class="book-info">
            <span class="book-title">With the Fire on High</span>
            <span class="book-price">$12.99</span>
          </div>
        </div>

        <div class="book-content">
          <div class="book-cover">
            <img src=<?php echo get_template_directory_uri() . "/img/bc_littlewomen.png" ?> alt="Little Women Book Cover">
          </div>
            <div class="book-info">
            <div class="book-title">Little Women</div>
            <div class="book-price">$13.99</div>
          </div>
        </div>

        <div class="book-content">
          <div class="book-cover">
            <img src=<?php echo get_template_directory_uri() . "/img/bc_miraclecreek.png" ?> alt="Miracle Creek Book Cover">
          </div>
          <div class="book-info">
            <div class="book-title">Miracle Creek</div>
            <div class="book-price">$15.99</div>
          </div>
        </div>

        <div class="book-content">
          <div class="book-cover">
            <img src=<?php echo get_template_directory_uri() . "/img/bc_becoming.png" ?> alt="Becoming Book Cover">
          </div>
          <div class="book-info">
            <div class="book-title">Becoming</div>
            <div class="book-price">$12.99</div>
          </div>
        </div>

        <div class="book-content">
          <div class="book-cover">
            <img src=<?php echo get_template_directory_uri() . "/img/bc_atalefor.png" ?> alt="A Tale for the Time Being Book Cover">
          </div>
          <div class="book-info">
            <div class="book-title">A Tale for the Time Being</div>
            <div class="book-price">$13.99</div>
          </div>
        </div>

        <div class="book-content">
          <div class="book-cover">
            <img src=<?php echo get_template_directory_uri() . "/img/bc_a1000.png" ?> alt="A Thousand Splendid Suns Book Cover">
          </div>
          <div class="book-info">
            <div class="book-title">A Thousand Splendid Suns</div>
            <div class="book-price">$15.99</div>
          </div>
        </div>

        <div class="book-content">
          <div class="book-cover">
            <img src=<?php echo get_template_directory_uri() . "/img/bc_lesmiserables.png" ?> alt="Les Miserables Book Cover">
          </div>
          <div class="book-info">
            <div class="book-title">Les Misérables</div>
            <div class="book-price">$12.99</div>
          </div>
        </div>

        <div class="book-content">
          <div class="book-cover">
            <img src=<?php echo get_template_directory_uri() . "/img/bc_catchandkill.png" ?> alt="Catch and Kill Book Cover">
          </div>
          <div class="book-info">
            <div class="book-title">Catch and Kill</div>
            <div class="book-price">$13.99</div>
          </div>
        </div>

        <div class="book-content">
          <div class="book-cover">
            <img src=<?php echo get_template_directory_uri() . "/img/bc_redwhite.png" ?> alt="Red, White, & Royal Blue Book Cover">
          </div>
          <div class="book-info">
            <div class="book-title">Red, White, & Royal Blue</div>
            <div class="book-price">$15.99</div>
          </div>
        </div>

        <div class="book-content">
          <div class="book-cover">
            <img src=<?php echo get_template_directory_uri() . "/img/bc_andthenthere.png" ?> alt="And Then There Were None Book Cover">
          </div>
          <div class="book-info">
            <div class="book-title">And Then There Were None</div>
            <div class="book-price">$12.99</div>
          </div>
        </div>

        <div class="book-content">
          <div class="book-cover">
            <img src=<?php echo get_template_directory_uri() . "/img/bc_eleanor&park.png" ?> alt="Eleanor & Park Book Cover">
          </div>
          <div class="book-info">
            <div class="book-title">Eleanor & Park</div>
            <div class="book-price">$13.99</div>
          </div>
        </div>

        <div class="book-content">
          <div class="book-cover">
            <img src=<?php echo get_template_directory_uri() . "/img/bc_whenbreath.png" ?> alt="When Breath Becomes Air Book Cover">
          </div>
          <div class="book-info">
            <div class="book-title">When Breath Becomes Air</div>
            <div class="book-price">$15.99</div>
          </div>
        </div>

        <div class="book-content">
          <div class="book-cover">
            <img src=<?php echo get_template_directory_uri() . "/img/bc_thebelljar.png" ?> alt="The Bell Jar Book Cover">
          </div>
          <div class="book-info">
            <div class="book-title">The Bell Jar</div>
            <div class="book-price">$12.99</div>
          </div>
        </div>

        <div class="book-content">
          <div class="book-cover">
            <img src=<?php echo get_template_directory_uri() . "/img/bc_untamed.png" ?> alt="Untamed Book Cover">
          </div>
          <div class="book-info">
            <div class="book-title">Untamed</div>
            <div class="book-price">$13.99</div>
          </div>
        </div>

        <div class="book-content">
          <div class="book-cover">
            <img src=<?php echo get_template_directory_uri() . "/img/bc_thewindupbird.png" ?> alt="The Wind-Up Bird Chronicle Book Cover">
          </div>
          <div class="book-info">
            <div class="book-title">The Wind-Up Bird Chronicle</div>
            <div class="book-price">$15.99</div>
          </div>
        </div>

        <div class="book-content">
          <div class="book-cover">
            <img src=<?php echo get_template_directory_uri() . "/img/bc_thecolorpurple.png" ?> alt="The Color Purple Book Cover">
          </div>
          <div class="book-info">
            <div class="book-title">The Color Purple</div>
            <div class="book-price">$12.99</div>
          </div>
        </div>

        <div class="book-content">
          <div class="book-cover">
            <img src=<?php echo get_template_directory_uri() . "/img/bc_nakedecon.png" ?> alt="Naked Economics Book Cover">
          </div>
          <div class="book-info">
            <div class="book-title">Naked Economics</div>
            <div class="book-price">$13.99</div>
          </div>
        </div>
      </div>

      <div id="page-bar">
        <div class="page-bar-arrow page-bar-left">
          <img src=<?php echo get_template_directory_uri() . "/img/arrow-point-to-right.svg" ?> alt="Right Arrow">
        </div>
        <div class="page-bar-nums">
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
  
  <section id="shop-more">
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