<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';

function display_book($product) {
  $name = $product->get_name();
  $price = (float) $product->get_price();
  $ean = $product->get_attribute('ean');
  $url = get_post_permalink($product->id);
  $price = number_format($price, 2);

  $imgsrc = "http://covers.openlibrary.org/b/isbn/$ean-L.jpg";

  echo "
  <a href='$url'>
    <div class='book'>
      <div class='book-card'>
        <img 
          alt='$name Book Cover' 
          src=$imgsrc>
      </div>
      <div class='book-desc'>
        <div class='book-title'>$name</div>
        <div class='book-price'>$$price</div>
      </div>
    </div>
  </a>";
}
?>

<main id="home-main">

<?php echo do_shortcode("[add_to_cart_url id='76']"); ?>
<a class="ui large primary button" href=<?php echo do_shortcode("[add_to_cart_url id='76']"); ?> >Add to cart</a>
  <!-- Description section -->
  <section class="home-section" id="description-container">
    <img class="bracket" style="transform: rotate(180deg);" src=<?php echo get_template_directory_uri() . "/img/bracket.svg" ?>>
    <span id="description-text">
      <span id="edit-description"></span>
      <?php if (get_theme_mod($home_description)) {
        echo get_theme_mod($home_description);
      } else {
        echo "Michelle is the proud owner of Serendipity Books, a local, independent, curated community book shop.";
      } ?>
    </span>
    <img class="bracket" src=<?php echo get_template_directory_uri() . "/img/bracket.svg" ?>>
  </section>

  <!-- Mobile header -->
  <section class="home-section" id="mobile-section">
    <header id="mobile-explore-header">
      <div class="header-part">
        <div class="header-text">
          Explore
        </div>
      </div>
      <div class="header-part" id="mobile-tabs">
        <div class="header-text active" id="bestsellers-tab">
          Bestsellers
        </div>
        <div class="header-text" id="favorites-tab">
          Michelle's Favorites
        </div>
        <div class="header-text" id="upcoming-events-tab">
          Events
        </div>
      </div>
    </header>
  </section>


  <section class="home-section mobile-visible" id="bestsellers">
    <!-- Bestsellers header -->
    <header>
      <div class="header-part">
        <div class="header-text">
          <span id="edit-bestsellers"></span>
          <?php if (get_theme_mod($home_bestsellers_title)) {
            echo get_theme_mod($home_bestsellers_title);
          } else {
            echo "Bestsellers";
          }
          ?>
        </div>
        <a href="" class="flat-button"><span>SHOP ALL</span></a>
      </div>
      <div class="header-part">
        <div class="carousel-button left">
          <img alt="Left arrow" src=<?php echo get_template_directory_uri() . "/img/arrow.svg" ?>>
        </div>
        <div class="carousel-button right">
          <img alt="Right arrow" src=<?php echo get_template_directory_uri() . "/img/arrow.svg" ?>>
        </div>
      </div>
    </header>

    <!-- Bestsellers carousel -->
    <div class="carousel">
      <?php

      $best_query = new WP_Query(array(
        'post_type' => 'product',
        'meta_key' => 'total_sales',
        'orderby' => 'meta_value_num',
        'posts_per_page' => 10
      ));

      if ($best_query->have_posts()) {
        while ($best_query->have_posts()) {
          $best_query->the_post();

          $id = get_the_ID();
          $product = wc_get_product($id);

          display_book($product);
        }
      }
      ?>
    </div>

  </section>

  <section class="home-section mobile-hidden" id="favorites">
    <!-- Favorites header -->
    <header>
      <div class="header-part">
        <div class="header-text">
          <span id="edit-favorites"></span>
          <?php if (get_theme_mod($home_favorites_title)) {
            echo get_theme_mod($home_favorites_title);
          } else {
            echo "Michelle's Favorites";
          }
          ?>
        </div>
        <a href="" class="flat-button"><span>SHOP ALL</span></a>
      </div>
      <div class="header-part">
        <div class="carousel-button left">
          <img alt="Left arrow" src=<?php echo get_template_directory_uri() . "/img/arrow.svg" ?>>
        </div>
        <div class="carousel-button right">
          <img alt="Right arrow" src=<?php echo get_template_directory_uri() . "/img/arrow.svg" ?>>
        </div>
      </div>
    </header>

    <!-- Favorites carousel -->
    <div class="carousel">
      <?php

      $fav_query = new WP_Query(array(
        'post_type' => 'favorites',
        'posts_per_page' => 10
      ));

      if ($fav_query->have_posts()) {
        while ($fav_query->have_posts()) {
          $fav_query->the_post();

          $sku = get_the_title();
          $pid = wc_get_product_id_by_sku($sku);

          $product = wc_get_product($pid);

          display_book($product);
        }
      }
      ?>
    </div>

  </section>

  <!-- Contactless section -->
  <section class="home-section" id="contactless">
    <div id="contactless-content">

      <div class="contactless-part" id="contactless-left">
        <div id="contactless-text">
          <span id="edit-contactless-text"></span>
          <?php if (get_theme_mod($home_contactless_description)) {
            echo get_theme_mod($home_contactless_description);
          } else {
            echo "Want to purchase books while staying safe? Check out our contactless options.";
          }
          ?>
        </div>
        <div id="contactless-buttons">
          <a href="" class="flat-button">
            <span>PICK-UP</span>
          </a>
          <a href="" class="flat-button">
            <span>DELIVERY</span>
          </a>
        </div>
      </div>

      <div class="contactless-part" id="contactless-right">
        <span id="edit-contactless-image"></span>
        <img src=<?php if (get_theme_mod($home_contactless_img)) {
                    echo get_theme_mod($home_contactless_img);
                  } else {
                    echo get_template_directory_uri() . "/img/pick_up_birds.png";
                  }
                  ?> width="90%" height="auto" alt="Two birds on a branch">
      </div>

    </div>
  </section>

  <section class="home-section mobile-hidden" id="upcoming-events">

    <!-- Upcoming events header -->
    <header>
      <div class="header-part">
        <div class="header-text">
          <span id="edit-upcoming-events"></span>
          <?php if (get_theme_mod($home_events_title)) {
            echo get_theme_mod($home_events_title);
          } else {
            echo "Upcoming Events";
          }
          ?>
        </div>
        <a href="" class="flat-button"><span>VIEW ALL</span></a>
      </div>
    </header>

    <!-- Upcoming events images -->
    <div class="event-container">
      <div id="left-event">
        <img class="event" width="90%" height="auto" src=<?php echo get_template_directory_uri() . "/img/creative_writing.png" ?> alt="Creative writing poster">
      </div>
      <div id="right-event">
        <img class="event" width="65%" height="auto" src=<?php echo get_template_directory_uri() . "/img/afterhours.png" ?> alt="AfterHours poster">
        <img class="event" width="65%" height="auto" src=<?php echo get_template_directory_uri() . "/img/staysafe.png" ?> alt="Stay safe poster">
      </div>
    </div>

  </section>
</main>
<?php get_footer(); ?>