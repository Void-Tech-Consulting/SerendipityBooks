<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';

$base_uri = get_template_directory_uri();

$favorites  = get_example_data($favorite_repeater);
$bestsellers  = get_example_data($bestseller_repeater);
$events = get_example_data($event_repeater);

function display_book(&$product) {
  $name = $product->get_name();
  $price = (float) $product->get_price();
  $url = get_post_permalink($product->id);
  $price = number_format($price, 2);

  // echo wc_display_product_attributes( $product );

  $imgsrc = $imgsrc = get_the_post_thumbnail_url($product->id);

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

function display_theme_var($var, $default) {
  if (get_theme_mod($var)) {
    echo get_theme_mod($var);
  } else {
    echo $default;
  }
}

function carousel_loop(&$books, $key) {
  $len = min(count($books), 10);
  for ($i = 0; $i < $len; $i++) {
    $sku = $books[$i][$key];
    $id = wc_get_product_id_by_sku($sku);
    $product = wc_get_product($id);
    if ($product) {
      display_book($product);
    }
  }
}

$shop_url = get_page_link(get_page_by_title('Shop')->ID); 
?>

<main id="home-main">

  <!-- Description section -->
  <section class="home-section" id="description-container">
    <img class="bracket" alt="bracket" style="transform: rotate(180deg);" src=<?php echo "$base_uri/img/bracket.svg" ?>>
    <span id="description-text">
      <span id="edit-description"></span>
      <?php display_theme_var(
        $home_description,
        "Michelle is the proud owner of Serendipity Books, a local, independent, curated community book shop."
      );
      ?>
    </span>
    <img class="bracket" alt="bracket" src=<?php echo "$base_uri/img/bracket.svg" ?>>
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
        <?php if (!empty($bestsellers)) { ?>
          <div class="header-text active" id="bestsellers-tab">
            <?php display_theme_var($home_bestsellers_title, "Bestsellers"); ?>
          </div>
        <?php } ?>
        <?php if (!empty($favorites)) { ?>
          <div class="header-text" id="favorites-tab">
            <?php display_theme_var($home_favorites_title, "Michelle's Favorites"); ?>
          </div>
        <?php } ?>
        <?php if (!empty($events)) { ?>
          <div class="header-text" id="upcoming-events-tab">
            <?php display_theme_var($home_events_title, "Upcoming Events"); ?>
          </div>
        <?php } ?>
      </div>
    </header>
  </section>

  <?php if (!empty($bestsellers)) { ?>
    <section class="home-section mobile-visible" id="bestsellers">
      <!-- Bestsellers header -->
      <header>
        <div class="header-part">
          <div class="header-text">
            <span id="edit-bestsellers"></span>
            <?php display_theme_var($home_bestsellers_title, "Bestsellers"); ?>
          </div>
          <a href="<?php echo $shop_url ?>" class="flat-button"><span>SHOP ALL</span></a>
        </div>
        <div class="header-part">
          <div class="carousel-button left">
            <img alt="Left arrow" src=<?php echo "$base_uri/img/arrow.svg" ?>>
          </div>
          <div class="carousel-button right">
            <img alt="Right arrow" src=<?php echo "$base_uri/img/arrow.svg" ?>>
          </div>
        </div>
      </header>

      <!-- Bestsellers carousel -->
      <div class="carousel">
        <?php carousel_loop($bestsellers, 'bestseller'); ?>
      </div>

    </section>
  <?php } ?>

  <?php if (!empty($favorites)) { ?>
    <section class="home-section mobile-hidden" id="favorites">
      <!-- Favorites header -->
      <header>
        <div class="header-part">
          <div class="header-text">
            <span id="edit-favorites"></span>
            <?php display_theme_var($home_favorites_title, "Michelle's Favorites"); ?>
          </div>
          <a href="<?php echo $shop_url ?>" class="flat-button"><span>SHOP ALL</span></a>
        </div>
        <div class="header-part">
          <div class="carousel-button left">
            <img alt="Left arrow" src=<?php echo "$base_uri/img/arrow.svg" ?>>
          </div>
          <div class="carousel-button right">
            <img alt="Right arrow" src=<?php echo "$base_uri/img/arrow.svg" ?>>
          </div>
        </div>
      </header>

      <!-- Favorites carousel -->
      <div class="carousel">
        <?php carousel_loop($favorites, 'favorite'); ?>
      </div>

    </section>
  <?php } ?>

  <?php if (!empty($events)) { ?>
    <section class="home-section mobile-hidden" id="upcoming-events">
      <!-- Upcoming events header -->
      <header>
        <div class="header-part">
          <div class="header-text">
            <span id="edit-upcoming-events"></span>
            <?php display_theme_var($home_events_title, "Upcoming Events"); ?>
          </div>
        </div>
      </header>

      <!-- Upcoming events container -->
      <div class="event-container">
        <?php
        $num_events = count($events);
        for ($i = 0; $i < $num_events; $i++) {
        ?>
          <div class="event-wrapper">
            <a class="event-link" href=<?php echo get_site_url() . "/events?id=$i" ?>>
              <img 
                class="event"
                src=<?php echo esc_url(get_media_url($events[$i]['poster_image'])) ?>
                alt=<?php echo $events[$i]['event_title']?>>
            </a>
          </div>
        <?php } ?>
      </div>
    </section>
  <?php } ?>
</main>
<?php get_footer(); ?>