<?php 

if ( have_posts() ) :

    echo "helo\n";

    echo get_search_query();

else :
    echo "test";
    get_template_part( 'content', 'none' );

endif;