<?php
get_header();
wp_enqueue_style('search');
require get_template_directory() . '/inc/section_vars.php';

function display_book($product) {
    $name = $product->get_name();
    $price = (float) $product->get_price();
    $url = get_post_permalink($product->id);

    $isbn = $product->get_attribute('ISBN');

    $price = number_format($price, 2);

    $imgsrc = "http://covers.openlibrary.org/b/isbn/$isbn-L.jpg";

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

if (have_posts()) :
    $query = get_search_query();
    echo "<section id='search-results-container'>
    <div id='search-query'>Search Results For : “{$query}”</div>
    <section id='search-results'>";
    while (have_posts()) {
        the_post();

        $id = get_the_ID();
        $product = wc_get_product($id);

        display_book($product);
      }
    echo '</section>
    </section>';
else :
?>
    <section id="search-container">
        <div id="search-content">

            <div class="search-part" id="search-left">
                <div id="search-text-main">
                    “<?php echo get_search_query() ?>” was not found in our store. Check the extended inventory 
                    <span id="edit-shopdelivery"></span>
                    <a 
                        class="highlight" 
                        href=
                        <?php if (get_theme_mod($shop_delivery)) {
                            echo get_theme_mod($shop_delivery);
                        } else {
                            echo "https://bookshop.org/shop/serendipitybooks";
                        }?>
                    >
                        here.
                    </a>
                </div>
                <div id="search-text-sub">
                    If you still haven't found what you wanted, please contact us at 
                    <span id="edit-email"></span>
                    <a style="color: black"
                        href=
                        <?php if (get_theme_mod($footer_email)) {
                            echo "mailto:" . get_theme_mod($footer_email);
                        } else {
                            echo "mailto:entergmail@gmail.com";
                        }?>
                    >
                        <?php if (get_theme_mod($footer_email)) {
                            echo get_theme_mod($footer_email) . ".";
                        } else {
                            echo "entergmail@gmail.com" . ".";
                        }?>
                    </a>
                    We'd love to work with you and help us find each other on 
                    <a 
                        class="highlight" 
                        href=
                        <?php if (get_theme_mod($shop_pickup)) {
                            echo get_theme_mod($shop_pickup);
                        } else {
                            echo "https://docs.google.com/forms/d/e/1FAIpQLSd4BJ7A1TviezYOXWrA9SLyBcxcSJsrm1oym1xeU4-r2zjzTA/viewform";
                        }?>
                    >
                        the same page.
                    </a>
                </div>
                <span id="edit-shoppickup"></span>
            </div>

            <div class="search-part" id="search-right">
                <img width="60%" height="auto" alt="Birds on top of books" src=<?php echo get_template_directory_uri() . "/img/not_found.png" ?>>
            </div>

        </div>
    </section>

<?php
endif;

get_footer();
