<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';

function display_book(& $product) {
  $name = $product->get_name();
  $price = (float) $product->get_price();
  $ean = $product->get_attribute('ean');

  $price = number_format($price, 2);

  $imgsrc = "http://covers.openlibrary.org/b/isbn/$ean-L.jpg";

  echo "
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
    </div>";
}

function carousel_loop(& $books, $key) {
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

$favorites  = get_example_data($favorite_repeater);
$bestsellers  = get_example_data($bestseller_repeater);
$base_uri = get_template_directory_uri();

function display_theme_var($var, $default) {
  if (get_theme_mod($var)) {
    echo get_theme_mod($var);
  } else {
    echo $default;
  }
}
?>

<main id="home-main">

  <!-- Description section -->
  <section class="home-section" id="description-container">
    <img class="bracket" style="transform: rotate(180deg);" src=<?php echo "$base_uri/img/bracket.svg" ?>>
    <span id="description-text">
      <span id="edit-description"></span>
      <?php display_theme_var(
        $home_description,
        "Michelle is the proud owner of Serendipity Books, a local, independent, curated community book shop."
      );
      ?>
    </span>
    <img class="bracket" src=<?php echo "$base_uri/img/bracket.svg" ?>>
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
          <?php display_theme_var($home_bestsellers_title, "Bestsellers");?>
        </div>
        <?php } ?>
        <?php if (!empty($favorites)) { ?>
        <div class="header-text" id="favorites-tab">
          <?php display_theme_var($home_favorites_title, "Michelle's Favorites");?>
        </div>
        <?php } ?>
        <div class="header-text" id="upcoming-events-tab">
          <?php display_theme_var($home_events_title, "Upcoming Events");?>
        </div>
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
          <?php display_theme_var($home_bestsellers_title, "Bestsellers");?>
        </div>
        <a href="" class="flat-button"><span>SHOP ALL</span></a>
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
      <?php carousel_loop($bestsellers, 'bestseller');?>
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
          <?php display_theme_var($home_favorites_title, "Michelle's Favorites");?>
        </div>
        <a href="" class="flat-button"><span>SHOP ALL</span></a>
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

  <section class="home-section mobile-hidden" id="upcoming-events">

    <!-- Upcoming events header -->
    <header>
      <div class="header-part">
        <div class="header-text">
          <span id="edit-upcoming-events"></span>
          <?php display_theme_var($home_events_title, "Upcoming Events");?>
        </div>
      </div>
    </header>

    <!-- Upcoming events images -->
    <div class="event-container">
      <div id="left-event">
        <img class="event" width="90%" height="auto" src=<?php echo "$base_uri/img/creative_writing.png" ?> alt="Creative writing poster">
      </div>
      <div id="right-event">
        <img class="event" width="65%" height="auto" src=<?php echo "$base_uri/img/afterhours.png" ?> alt="AfterHours poster">
        <img class="event" width="65%" height="auto" src=<?php echo "$base_uri/img/staysafe.png" ?> alt="Stay safe poster">
      </div>
    </div>

  </section>
</main>
<?php get_footer(); ?>