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
        <div>
          button
        </div>
        <div>
          button
        </div>
      </div>
    </header>
  </section>
  <section id="favorites">
    <header>
      <div class="header-part">
        <div class="header-text">Michelle's Favorites</div>
        <button class="button">SHOP ALL</button>
      </div>
      <div class="header-part">
        <div>
          button
        </div>
        <div>
          button
        </div>
      </div>
    </header>
  </section>
  <section id="pick-up">
    Want to purchase books while staying safe? Check out our contactless options.
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