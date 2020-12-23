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
  <header>
    <span class="bracket">[</span>
    <h1>Michelle's Shop</h1>
    <span class="bracket">]</span>
  </header>

  <div id="shop_layout">
      <!-- Left: Sidebar -->
    <section id="selection-sidebar">
      <!-- Categories -->
      <?php if (get_theme_mod($shop_categories)) { ?>
        <span class="selection-title"><?php echo get_theme_mod($shop_categories) ?></span>
      <?php } else { ?>
        <span class="selection-title">Categories</span>
      <?php } ?>

      <?php if (get_theme_mod($shop_categories_content)) { ?>
        <div class="selection-container"><?php echo get_theme_mod($shop_categories_content) ?></div>
      <?php } else { ?>
      <div class="selection-container">
        <span class="selection-type">All</span>
        <span class="selection-type">Kids</span>
        <span class="selection-type">Mystery</span>
        <span class="selection-type">Nonfiction</span>
        <span class="selection-type">Fiction</span>
        <span class="selection-type">Romance</span>
        <span class="selection-type">History</span>
        <span class="selection-type">Young Adult</span>
        <span class="selection-type">Poetry</span>
        <span class="selection-type">Journals</span>
        <span class="selection-type">Christian Fiction</span>
        <span class="selection-type">Fantasy</span>
        <span class="selection-type">Memoir</span>
        <span class="selection-type">Current Events</span>
        <span class="selection-type">Travel</span>
        <span class="selection-type">Nature</span>
        <span class="selection-type">Cooking</span>
        <span class="selection-type">Spiritual</span>
        <span class="selection-type">Essays</span>
        <span class="selection-type">Self-help</span>
      </div>
      <?php } ?>

      <!-- Conditions -->
      <?php if (get_theme_mod($shop_condition)) { ?>
        <span class="selection-title"><?php echo get_theme_mod($shop_condition) ?></span>
      <?php } else { ?>
        <span class="selection-title">Condition</span>
      <?php } ?>
      
      <?php if (get_theme_mod($shop_condition_content)) { ?>
        <div class="selection-container"><?php echo get_theme_mod($shop_condition_content) ?></div>
      <?php } else { ?>
      <div class="selection-container">
        <span class="selection-type">All</span>
        <span class="selection-type">New</span>
        <span class="selection-type">Used</span>
      </div>
      <?php } ?>
    </section>

    <!-- Right: Bookshop -->
    <section id="bookstore">
      <!-- Display Type -->
      <div id="sort-bookstore">
        <div id="display-num">
          <div class="display-default">Show 30<img src=<?php echo get_template_directory_uri() . "/img/black_down_arrow.png" ?> alt=""></div>
          <div class="display-content">
            <div>Show 30</div>
            <div>Show 60</div>
            <div>Show 90</div>
          </div>
        </div>
        <div id="display-by">
          <div class="display-default">Popularity<img src=<?php echo get_template_directory_uri() . "/img/black_down_arrow.png" ?> alt=""></div>
          <div class="display-content">
            <a href="">Popularity</a>
            <a href="">Featured</a>
            <a href="">Newest Arrivals</a>
          </div>
        </div>
      </div>

      <div id="display-bookstore">
        <div class="book-content">
          <div class="book-cover">
            <?php if (get_theme_mod($shop_bc1)) { ?>
              <img src=<?php echo get_theme_mod($shop_bc1)?>>
            <?php } else { ?>
              <img src=<?php echo get_template_directory_uri() . "/img/bc_educated.png" ?> alt="Educated Book Cover">
            <?php } ?>
          </div>

          <?php if (get_theme_mod($shop_bi1)) { ?>
            <div class="book-info"><?php echo get_theme_mod($shop_bi1) ?></div>
          <?php } else { ?>
          <div class="book-info">
            <span class="book-title">Educated</span>
            <span class="book-price">$15.99</span>
          </div>
          <?php } ?>
        </div>

        <div class="book-content">
          <div class="book-cover">
            <?php if (get_theme_mod($shop_bc2)) { ?>
              <img src=<?php echo get_theme_mod($shop_bc2)?>>
            <?php } else { ?>
              <img src=<?php echo get_template_directory_uri() . "/img/bc_withthefire.png" ?> alt="With the Fire on High Book Cover">
            <?php } ?>
          </div>

          <?php if (get_theme_mod($shop_bi2)) { ?>
            <div class="book-info"><?php echo get_theme_mod($shop_bi2) ?></div>
          <?php } else { ?>
          <div class="book-info">
            <span class="book-title">With the Fire on High</span>
            <span class="book-price">$12.99</span>
          </div>
          <?php } ?>
        </div>

        <div class="book-content">
          <div class="book-cover">
          <?php if (get_theme_mod($shop_bc3)) { ?>
              <img src=<?php echo get_theme_mod($shop_bc3)?>>
            <?php } else { ?>
            <img src=<?php echo get_template_directory_uri() . "/img/bc_littlewomen.png" ?> alt="Little Women Book Cover">
          <?php } ?>
          </div>

          <?php if (get_theme_mod($shop_bi3)) { ?>
            <div class="book-info"><?php echo get_theme_mod($shop_bi3) ?></div>
          <?php } else { ?>
          <div class="book-info">
            <div class="book-title">Little Women</div>
            <div class="book-price">$13.99</div>
          </div>
          <?php } ?>
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
        <div class="page-bar"></div>
        <div class="page-bar-nums">1 2 3 4 5 6 ... 200</div>
        <div class="page-bar page-bar-right"></div>
      </div>

    </section>
  </div>
  
  <section id="shop-more">
    <img id="shop-more-leftimg" src=<?php echo get_template_directory_uri() . "/img/birds.png" ?> alt="Birds">
    <div class="shop-more-text">
      <p>Haven’t found what you’re looking for?</p>
      <p>Check out more books from Michelle below!</p>
    </div>
    <img src=<?php echo get_template_directory_uri() . "/img/birds.png" ?> alt="Birds">
  </section>

</body>

</html>

<?php get_footer(); ?>