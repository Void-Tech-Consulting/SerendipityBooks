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
      <span class="selection-title">Categories</span>
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

      <!-- Conditions -->
      <span class="selection-title">Condition</span>
      <div class="selection-container">
        <span class="selection-type">All</span>
        <span class="selection-type">New</span>
        <span class="selection-type">Used</span>
      </div>
    </section>

    <!-- Right: Bookshop -->
    <section id="bookstore">
      <!-- Display Type -->
      <div id="sort-bookstore">
        <select id="display-num">
          <option value="">Show 30</option>
          <option value="">Show 60</option>
          <option value="">Show 90</option>
        </select>

        <select id="display-by">
          <option value="">Show 30</option>
          <option value="">Show 60</option>
          <option value="">Show 90</option>
        </select>
      </div>

      <div id="display-bookstore">
        <div class="book-content">
          <div class="book-cover">
            <img src=<?php echo get_template_directory_uri() . "/img/book_cover.jpeg" ?> alt="Educated Book Cover">
          </div>
          <div class="book-info">
            <span class="book-title">Educated</span>
            <span class="book-price">$15.99</span>
          </div>
        </div>

        <div class="book-content">
          <div class="book-cover">
            <img src=<?php echo get_template_directory_uri() . "/img/book_cover.jpeg" ?> alt="Educated Book Cover">
          </div>
          <div class="book-info">
            <span class="book-title">Educated</span>
            <span class="book-price">$15.99</span>
          </div>
        </div>

        <div class="book-content">
          <div class="book-cover">
            <img src=<?php echo get_template_directory_uri() . "/img/book_cover.jpeg" ?> alt="Educated Book Cover">
          </div>
          <div class="book-info">
            <div class="book-title">Educated</div>
            <div class="book-price">$15.99</div>
          </div>
        </div>
      </div>
      
    </section>
  </div>
  
  
</body>
</html>

<?php get_footer(); ?>