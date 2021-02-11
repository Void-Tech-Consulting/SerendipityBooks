<?php
get_header();
wp_enqueue_style('search');

if (have_posts()) :
?>
    hello, world
<?php
else :
?>
    <section id="search-container">
        <div id="search-content">

            <div class="search-part" id="search-left">
                <div id="search-text-main">
                    “<?php echo get_search_query() ?>” was not found in our store. Check the extended inventory <span class="highlight">here.</span>
                </div>
                <div id="search-text-sub">
                    If you still haven't found what you wanted, please contact us at enteremail@gmail.com. We'd love to work with you and help us find each other on <span class="highlight">the same page.</span>
                </div>
            </div>

            <div class="search-part" id="search-right">
                <img width="60%" height="auto" alt="Birds on top of books" src=<?php echo get_template_directory_uri() . "/img/not_found.png" ?>>
            </div>

        </div>
    </section>

<?php
endif;

get_footer();
