<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';
?>

<main>
  <section id="description-container">
    <span class="bracket">[</span>
    <span id="description-text">
      Michelle is the proud owner of Serendipity Books, a local, independent, curated community book shop.
    </span>
    <span class="bracket">]</span>
  </section>
  <section id="bestsellers">
    <header>
      <div class="header-part">
        <div class="header-text">Bestsellers</div>
        <button class="button">SHOP ALL</button>
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
    <div class="carousel">
      <div class="book-card">
        <img alt="Eduacted Book Cover" src=<?php echo get_template_directory_uri() . "/img/book_cover.jpeg" ?>>
      </div>
      <div class="book-card">
        <img alt="Eduacted Book Cover" src=<?php echo get_template_directory_uri() . "/img/book_cover.jpeg" ?>>
      </div>
      <div class="book-card">
        <img alt="Eduacted Book Cover" src=<?php echo get_template_directory_uri() . "/img/book_cover.jpeg" ?>>
      </div>
    </div>
  </section>
  <section id="favorites">
    <header>
      <div class="header-part">
        <div class="header-text">Michelle's Favorites</div>
        <button class="button">SHOP ALL</button>
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
    <div class="carousel">
      <div class="book-card">
        <img alt="Eduacted Book Cover" src=<?php echo get_template_directory_uri() . "/img/book_cover.jpeg" ?>>
      </div>
      <div class="book-card">
        <img alt="Eduacted Book Cover" src=<?php echo get_template_directory_uri() . "/img/book_cover.jpeg" ?>>
      </div>
      <div class="book-card">
        <img alt="Eduacted Book Cover" src=<?php echo get_template_directory_uri() . "/img/book_cover.jpeg" ?>>
      </div>
    </div>
  </section>
  <section id="pick-up">
    <div id="pick-up-content">
      <div id="pick-up-part">
        <div id="pick-up-text">
          Want to purchase books while staying safe? Check out our contactless options.
        </div>
        <button class="button">
          PICK-UP
        </button>
      </div>
      <div id="pick-up-part">
        <img alt="Two birds on a branch" src=<?php echo get_template_directory_uri() . "/img/pick_up_birds.png"?>>
      </div>
    </div>
  </section>
  <section id="upcoming-events">
    <header>
      <div class="header-part">
        <div class="header-text">Upcoming Events</div>
        <button class="button">VIEW ALL</button>
      </div>
    </header>
  </section>
</main>
<?php get_footer(); ?>