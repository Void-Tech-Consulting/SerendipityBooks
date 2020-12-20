<?php 
    get_header(); 
    wp_enqueue_style('events');
    require get_template_directory() . '/inc/section_vars.php';
?>

<!-- <h1>Events</h1> -->

<!-- Event Header w/ Title -->
<div id = "eventHeaderSection">
    <img src = <?php echo get_template_directory_uri() . "/events_imgs/leftBracket.png" ?> alt = "left bracket">
    <?php if(get_theme_mod($event_title)) { ?>
        <p id = "eventTitle"> <?php echo get_theme_mod($event_title) ?> </p>
    <?php } ?>
    <img src = <?php echo get_template_directory_uri() . "/events_imgs/rightBracket.png" ?> alt = "right bracket">
</div>

<!-- Everything Else on the Page -->
<div id = "outer">

    

    <!-- Poster Div (Image) -->
    <div class = "containers" id = "poster">
    <img id = "posterImage" src= <?php echo get_template_directory_uri() . "/events_imgs/afterhoursbookclub.png"?>  alt="Poster of the event">
        <!-- Adding Image -->
        <?php if(get_theme_mod($event_poster_img)) { ?>
            <img id = "posterImage" src= <?php echo get_theme_mod($event_poster_img) ?> alt="Poster of the event">
        <?php } ?>
    </div>

    <!-- Words Div -->
    <div class = "containers" id = "details">

        <!-- Date Section -->
        <?php if(get_theme_mod($date_desc)) { ?>
            <div class = "icon-heading-div">
                <img class = "heading-icon" src= <?php echo get_template_directory_uri() . "/events_imgs/dateIcon.png" ?> alt="Calendar icon next to date">
                <p class = "headings"> DATE </p>
            </div>
            <p class = "body-text"> <?php echo get_theme_mod($date_desc) ?> </p> <br>
        <?php } ?>

        <!-- Upcoming Meeting Section -->
        <?php if(get_theme_mod($upcom_meet_desc)) { ?>
            <div class = "icon-heading-div">
                <img class = "heading-icon" src= <?php echo get_template_directory_uri() . "/events_imgs/dateIcon.png" ?> alt="Calendar icon next to date">
                <p class = "headings"> UPCOMING MEETING </p>
            </div>
            <p class = "body-text"> <?php echo get_theme_mod($upcom_meet_desc) ?> </p> <br>
        <?php } ?>

        <!-- Location Section -->
        <?php if(get_theme_mod($location_desc)) { ?>
            <div class = "icon-heading-div">
                <img class = "heading-icon" src= <?php echo get_template_directory_uri() . "/events_imgs/locationIcon.png" ?> alt="Location icon">
                <p class = "headings"> LOCATION </p>
            </div>
            <p class = "body-text"> <?php echo get_theme_mod($location_desc) ?> </p> <br>
        <?php } ?>

        <!-- Description Section -->
        <?php if(get_theme_mod($event_desc)) { ?>
            <div class = "icon-heading-div">
                <img class = "heading-icon" src= <?php echo get_template_directory_uri() . "/events_imgs/descIcon.png" ?> alt="Description icon">
                <p class = "headings"> DESCRIPTION </p>
            </div>
            <p class = "body-text" ><?php echo get_theme_mod($event_desc) ?> </p> <br>
        <?php } ?>

        <!-- Relevant Link Section -->
        <?php if(get_theme_mod($rel_link_desc)) { ?>
            <div class = "icon-heading-div">
                <img class = "heading-icon" src= <?php echo get_template_directory_uri() . "/events_imgs/relLinkIcon.png" ?> alt="Relevant link icon">
                <p class = "headings"> RELEVANT LINK </p>
            </div>
            <p class = "body-text" ><?php echo get_theme_mod($rel_link_desc) ?> </p> <br>
        <?php } ?>

    </div>
</div>

<!-- <form class="message-form" method="post">
  <input id="message-title" type="text">
  <button  type="submit">Save!</button>
</form> -->

<?php get_footer(); ?>