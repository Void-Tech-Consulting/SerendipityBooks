<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';
?>

<main>

  <!-- Description section -->
  <section id="description-container">
    <span class="bracket">[</span>
    <span id="description-text">
      Michelle is the proud owner of Serendipity Books, a local, independent, curated community book shop.
    </span>
    <span class="bracket">]</span>
  </section>


  <section id="bestsellers">
    <!-- Bestsellers header -->
    <header>
      <div class="header-part">
        <div class="header-text">Bestsellers</div>
        <button class="flat-button">SHOP ALL</button>
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
        echo
          "<div class='book-card'>
            <img alt='Eduacted Book Cover' src=" . get_template_directory_uri() . "'/img/book_cover.jpeg'>
          </div>";
      }
      ?>
    </div>

    <script>
      let carousel = document.querySelector("#bestsellers .carousel");

      let books = document.querySelectorAll(".book-card");
      let style = window.getComputedStyle(books[0]);
      let offset = books[0].scrollWidth + parseInt(style.marginRight);

      let splits = [0, 3, 6, 7];

      let i = 0;

      let left = document.querySelector("#bestsellers .header-part .left");
      let right = document.querySelector("#bestsellers .header-part .right");

      let options = {
        inline: "start",
        block: "nearest",
        behavior: "smooth"
      };

      left.addEventListener('click', () => {
        i = (i - 1) % splits.length;
        if (i < 0) i = 0;
        books[splits[i]].scrollIntoView(options);
      })

      right.addEventListener('click', () => {
        i = (i + 1) % splits.length;
        books[splits[i]].scrollIntoView(options);
      })
    </script>

  </section>

  <section id="favorites">
    <!-- Favorites header -->
    <header>
      <div class="header-part">
        <div class="header-text">Michelle's Favorites</div>
        <button class="flat-button">SHOP ALL</button>
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
        echo
          "<div class='book-card'>
            <img alt='Eduacted Book Cover' src=" . get_template_directory_uri() . "'/img/book_cover.jpeg'>
          </div>";
      }
      ?>
    </div>

  </section>

  <!-- Pick up section -->
  <section id="pick-up">
    <div id="pick-up-content">

      <div class="pick-up-part" id="pick-up-left">
        <div id="pick-up-text">
          Want to purchase books while staying safe? Check out our contactless options.
        </div>
        <div id="pick-up-buttons">
          <button class="flat-button">
            PICK-UP
          </button>
          <button class="flat-button">
            DELIVERY
          </button>
        </div>
      </div>

      <div class="pick-up-part">
        <img alt="Two birds on a branch" src=<?php echo get_template_directory_uri() . "/img/pick_up_birds.png" ?>>
      </div>

    </div>
  </section>

  <section id="upcoming-events">

    <!-- Upcoming events header -->
    <header>
      <div class="header-part">
        <div class="header-text">Upcoming Events</div>
        <button class="flat-button">VIEW ALL</button>
      </div>
    </header>

    <!-- Upcoming events content -->
    <div>

    </div>

  </section>
</main>
<?php get_footer(); ?>