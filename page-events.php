<?php 
    get_header(); 
    wp_enqueue_style('events');
    require get_template_directory() . '/inc/section_vars.php';
?>

<!-- <h1>Events</h1> -->

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

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

        <!-- Dropdown but icon next to title won't work????? -->
        <!-- <div class="quescontainer">
            <div class = "icon-heading-div">
                <img class = "heading-icon" src= <?php echo get_template_directory_uri() . "/events_imgs/bookIcon.png" ?> alt="Bookstack icon next to dropdown">
                <button type="button" class="questype">
                    <span class="questitle">FUTURE AND PAST BOOKS</span>
                    <i class="fas fa-angle-down"></i>
                </button>
            </div>
            <div class="quescontent">
                <li>Option 1 </li>
                <li>Option 2 </li>
            </div>
        </div> -->
        <div id = "width-control">
        <div class="quescontainer">
            <button type="button" class="questype">
                <span class="questitle">FUTURE AND PAST BOOKS</span>
                <i class="fas fa-angle-down"></i>
            </button>
            <div class="quescontent">
                <li class = "drop-heading">Future Dates and Reads: </li>
                <li>January 13 – ‘Paying Guests‘ by Sarah Waters</li>
                <li class = "drop-heading">Past Selections: </li>
                <li>‘Heat and Light‘ by Jennifer Haigh (November, 2020)</li>
                <li>‘Margaret the First‘ by Danielle Dutton (October, 2020)</li>
                <li>‘Braiding Sweetgrass‘ by Robin Wall Kimmerer (September, 2020 – in-person outdoor meetup)</li>
                <li>‘Bowlaway‘ by Elizabeth McCracken (August, 2020 – in-person outdoor meetup)</li>
                <li>‘Turn of the Key’, by Ruth Ware (July, 2020 – in-person outdoor meetup)</li>
                <li>Gingerbread, by Helen Oyeyemi (June, 2020 – virtual meeting)</li>
                <li>Small Great Things, by Jodi Picoult (May, 2020 – virtual meeting)</li>
                <li>Fever, 1793, by Laurie Halse Anderson (April, 2020 – virtual meeting)</li>
                <li>OptThe World According to Fannie Davis: My Mother’s Life in the Detroit Numbers, by Brigett Davis (March 2020)ion</li>
            </div>
        </div>
        </div>
            
        
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
        <?php if(get_theme_mod($upcom_meet_desc1)) { ?>
            <div class = "icon-heading-div">
                <img class = "heading-icon" src= <?php echo get_template_directory_uri() . "/events_imgs/dateIcon.png" ?> alt="Calendar icon next to date">
                <p class = "headings"> UPCOMING MEETING </p>
            </div>
            <p class = "body-text"> <?php echo get_theme_mod($upcom_meet_desc1) ?> </p> <br>
            <?php if(get_theme_mod($upcom_meet_desc2)) { ?>
                <p class = "body-text"> <?php echo get_theme_mod($upcom_meet_desc2) ?> </p> <br>
            <?php } ?>
        <?php } ?>

        <!-- Location Section -->
        <?php if(get_theme_mod($location_desc) || get_theme_mod($eventbrite_link)) { ?>
            <div class = "icon-heading-div">
                <img class = "heading-icon" src= <?php echo get_template_directory_uri() . "/events_imgs/locationIcon.png" ?> alt="Location icon">
                <p class = "headings"> LOCATION </p>
            </div>
            <!-- With EventBrite Link -->
            <?php if(get_theme_mod($eventbrite_link)) { ?>
                <p class = "body-text">Register for free here. 
                    <a class = "link" href = <?php echo get_theme_mod($eventbrite_link) ?> > EventBrite</a> 
                </p> <br>
            <?php } ?>
            <!-- Other Location Description -->
            <p class = "body-text"> <?php echo get_theme_mod($location_desc) ?> </p> <br>
            
        <?php } ?>
        

        <!-- Description Section -->
        <?php if(get_theme_mod($event_desc1)) { ?>
            <div class = "icon-heading-div">
                <img class = "heading-icon" src= <?php echo get_template_directory_uri() . "/events_imgs/descIcon.png" ?> alt="Description icon">
                <p class = "headings"> DESCRIPTION </p>
            </div>
            <p class = "body-text" ><?php echo get_theme_mod($event_desc1) ?> </p> <br>
            <?php if(get_theme_mod($event_desc2)) { ?>
                <p class = "body-text"> <?php echo get_theme_mod($event_desc2) ?> </p> <br>
            <?php } ?>
            <?php if(get_theme_mod($event_desc3)) { ?>
                <p class = "body-text"> <?php echo get_theme_mod($event_desc3) ?> </p> <br>
            <?php } ?>
        <?php } ?>

        <!-- Relevant Link Section -->
        <?php if(get_theme_mod($rel_link_desc)) { ?>
            <div class = "icon-heading-div">
                <img class = "heading-icon" src= <?php echo get_template_directory_uri() . "/events_imgs/relLinkIcon.png" ?> alt="Relevant link icon">
                <p class = "headings"> RELEVANT LINK </p>
            </div>
            <p class = "body-text" ><?php echo get_theme_mod($rel_link_desc) ?> </p> 
            <a class = "body-text link" href = <?php echo get_theme_mod($rel_link) ?> ><?php echo get_theme_mod($rel_link) ?> </p> <br>

        <?php } ?>

    </div>
</div>

<!-- <form class="message-form" method="post">
  <input id="message-title" type="text">
  <button  type="submit">Save!</button>
</form> -->

<?php get_footer(); ?>