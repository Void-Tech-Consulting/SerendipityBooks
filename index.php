<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';

$book_map = array(
  $home_book_title => 'Educated',
  $home_book_price => '$15.99',
  $home_book_img => get_template_directory_uri() . '/img/book_cover.jpeg'
);

foreach ($book_map as $k => $v) {
  if (get_theme_mod($k)) {
    $book_map[$k] = get_theme_mod($k);
  }
}
?>

<main>

  <!-- Description section -->
  <!-- <section id="description-container">
    <img class="bracket" style="transform: rotate(180deg);"src=<?php echo get_template_directory_uri() . "/img/bracket.svg"?>>
    <span id="description-text">
      <?php if (get_theme_mod($home_description)) {
        echo get_theme_mod($home_description);
      } else {
        echo "Michelle is the proud owner of Serendipity Books, a local, independent, curated community book shop.";
      } ?>
    </span>
    <img class="bracket" src=<?php echo get_template_directory_uri() . "/img/bracket.svg"?>>
  </section> -->

  <!-- Mobile header -->
  <section id="mobile-section"> 
    <header id="mobile-header">
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


  <section id="bestsellers">
    <!-- Bestsellers header -->
    <header>
      <div class="header-part">
        <div class="header-text">
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
      for ($i = 0; $i < 10; $i++) {
        echo "
          <div class='book'>
            <div class='book-card'>
              <img 
                alt='$book_map[$home_book_title] Book Cover' 
                src=$book_map[$home_book_img]>
            </div>
            <div class='book-desc'>
              <div class='book-title'>$book_map[$home_book_title]</div>
              <div class='book-price'>$book_map[$home_book_price]</div>
            </div>
          </div>";
      }
      ?>
    </div>

  </section>

  <section id="favorites">
    <!-- Favorites header -->
    <header>
      <div class="header-part">
        <div class="header-text">
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
      for ($i = 0; $i < 10; $i++) {
        echo "
          <div class='book'>
            <div class='book-card'>
              <img 
                alt='$book_map[$home_book_title] Book Cover' 
                src=$book_map[$home_book_img]>
            </div>
            <div class='book-desc'>
              <div class='book-title'>$book_map[$home_book_title]</div>
              <div class='book-price'>$book_map[$home_book_price]</div>
            </div>
          </div>";
      }
      ?>
    </div>

  </section>

  <!-- Contactless section -->
  <!-- <section id="contactless">
    <div id="contactless-content">

      <div class="contactless-part" id="contactless-left">
        <div id="contactless-text">
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

      <div class="contactless-part">
        <img src=<?php if (get_theme_mod($home_contactless_img)) {
                    echo get_theme_mod($home_contactless_img);
                  } else {
                    echo get_template_directory_uri() . "/img/pick_up_birds.png";
                  }
                  ?> alt="Two birds on a branch">
      </div>

    </div>
  </section> -->

  <section id="upcoming-events">

    <!-- Upcoming events header -->
    <header>
      <div class="header-part">
        <div class="header-text">
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
    <!-- <div class="event-container">
      <div id="left-event">
        <img 
          class="event" width="523px" height="698px"
          src=<?php echo get_template_directory_uri() . "/img/creative_writing.png" ?> alt="Creative writing poster"
        >
      </div>
      <div id="right-event">
        <img 
          class="event" width="351px" height="294px"
          src=<?php echo get_template_directory_uri() . "/img/afterhours.png" ?> alt="AfterHours poster"
        >
        <img 
          class="event" width="351px" height="351px"
          src=<?php echo get_template_directory_uri() . "/img/staysafe.png" ?> alt="Stay safe poster"
        >
      </div>
    </div> -->

  </section>
</main>
<?php get_footer(); ?>