<?php 
  get_header(); 
  wp_enqueue_style('shop');
?>
  <section id="description-shop-container">
    <span class="bracket-shop">[</span>
    <span id="description-header">
      MICHELLE'S SHOP
    </span>
    <span class="bracket-shop">]</span>
  </section>
  <div class="shop-wrapper">
    <!-- Categories -->
    <div class="shop-category-container">
      <div class="shop-category-header">
        Categories
      </div>
      <div class="categories">
        <div class="category">
          All
        </div>
        <div class="category">
          Kids
        </div>
        <div class="category">
          Mystery
        </div>
        <div class="category">
          Nonfiction
        </div>
        <div class="category">
          Fiction
        </div>
        <div class="category selected">
          Romance
        </div>
        <div class="category">
          History
        </div>
        <div class="category">
          Young Adult
        </div>
        <div class="category">
          Poetry
        </div>
        <div class="category">
          Journals
        </div>
        <div class="category">
          Christian Fiction
        </div>
        <div class="category">
          Fantasy
        </div>
        <div class="category">
          Memoir
        </div>
        <div class="category">
          Current Events
        </div>
        <div class="category">
          Travel
        </div>
        <div class="category">
          Nature
        </div>
        <div class="category">
          Cooking
        </div>
        <div class="category">
          Spiritual
        </div>
        <div class="category">
          Essays
        </div>
        <div class="category">
          Self-help
        </div>
      </div>
      <div class="shop-category-header">
        Condition
      </div>
      <div class="categories">
        <div class="category">
          All
        </div>
        <div class="category selected">
          New
        </div>
        <div class="category">
          Used
        </div>
      </div>
    </div>
    <!-- Shop results and category picker -->
    <div class="shop-search-container">
      <!-- Filters -->
      <div class="shop-filters-container">
          <div class="filter-box gray">
            <div class="filter-text">
              Show 60
            </div>
            <img class="filter-arrow" src=<?php echo get_template_directory_uri() . "/photos/arrow.png" ?> height="20px" alt="Arrow">
          </div>
          <div class="filter-box pink">
            <div class="filter-text">
              Popularity
            </div>
            <img class="filter-arrow" src=<?php echo get_template_directory_uri() . "/photos/arrow.png" ?> height="20px" alt="Arrow">
          </div>
      </div>
       <!-- Search Results -->
       <div class="search-grid">
        <div class="book-container">
          <img class="book-img" src=<?php echo get_template_directory_uri() . "/photos/book-img-example.png" ?> alt="Book Image">
          <div class="book-title">
            Educated
          </div>
          <div class="book-price">
            $15.99
          </div>
        </div>
        <div class="book-container">
          <img class="book-img" src=<?php echo get_template_directory_uri() . "/photos/book-img-example.png" ?> alt="Book Image">
          <div class="book-title">
            Educated
          </div>
          <div class="book-price">
            $15.99
          </div>
        </div>
        <div class="book-container">
          <img class="book-img" src=<?php echo get_template_directory_uri() . "/photos/book-img-example.png" ?> alt="Book Image">
          <div class="book-title">
            Educated
          </div>
          <div class="book-price">
            $15.99
          </div>
        </div>
        <div class="book-container">
          <img class="book-img" src=<?php echo get_template_directory_uri() . "/photos/book-img-example.png" ?> alt="Book Image">
          <div class="book-title">
            Educated
          </div>
          <div class="book-price">
            $15.99
          </div>
        </div>
        <div class="book-container">
          <img class="book-img" src=<?php echo get_template_directory_uri() . "/photos/book-img-example.png" ?> alt="Book Image">
          <div class="book-title">
            Educated
          </div>
          <div class="book-price">
            $15.99
          </div>
        </div>
        <div class="book-container">
          <img class="book-img" src=<?php echo get_template_directory_uri() . "/photos/book-img-example.png" ?> alt="Book Image">
          <div class="book-title">
            Educated
          </div>
          <div class="book-price">
            $15.99
          </div>
        </div>
        <div class="book-container">
          <img class="book-img" src=<?php echo get_template_directory_uri() . "/photos/book-img-example.png" ?> alt="Book Image">
          <div class="book-title">
            Educated
          </div>
          <div class="book-price">
            $15.99
          </div>
        </div>
        <div class="book-container">
          <img class="book-img" src=<?php echo get_template_directory_uri() . "/photos/book-img-example.png" ?> alt="Book Image">
          <div class="book-title">
            Educated
          </div>
          <div class="book-price">
            $15.99
          </div>
        </div>
        <div class="book-container">
          <img class="book-img" src=<?php echo get_template_directory_uri() . "/photos/book-img-example.png" ?> alt="Book Image">
          <div class="book-title">
            Educated
          </div>
          <div class="book-price">
            $15.99
          </div>
        </div>
       </div>
    </div>
    
    
  </div>
<?php get_footer(); ?>