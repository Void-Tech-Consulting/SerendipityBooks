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
    <img class = "bracket" src = <?php echo get_template_directory_uri() . "/events_imgs/leftBracket.png" ?> alt = "left bracket">
    <?php if(get_theme_mod($event_title)) { ?>
        <p id = "eventTitle"> <?php echo get_theme_mod($event_title) ?> </p>
    <?php } else { ?>
        <p id = "eventTitle"> EVENT TITLE </p>
    <?php } ?>
    <img class = "bracket" src = <?php echo get_template_directory_uri() . "/events_imgs/rightBracket.png" ?> alt = "right bracket">
</div>

<!-- Everything Else on the Page -->
<div id = "outer">

    <!-- Poster Div (Image) -->
    <div class = "containers" id = "poster">
        <!-- Adding Image -->
        <?php if(get_theme_mod($events_poster_img)) { ?>
            <img id = "posterImage" src= <?php echo get_theme_mod($events_poster_img); ?> alt="Poster of the event">
        <?php } else { ?>
            <img id = "posterImage" src= <?php echo get_template_directory_uri() . "/events_imgs/afterhoursbookclub.png"?>  alt="Poster of the event">
        <?php } ?>

        <!-- Dropdown -->
        <div id = "width-control">
        <div class="dropdownBox">
            <button type="button" class="dropButton">
                <span class="dropTitle">FUTURE AND PAST BOOKS</span>
                <i class="fas fa-angle-down"></i>
            </button>
            <div class="dropdownContent">
                <li class = "drop-heading">Future Dates and Reads: </li>
                <li><span class = "bookName">Paying Guests </span><span class = "bookAuthor">
                    by Sarah Waters </span><br><span class = "bookDate">January 13, 2021</span></li>
                <li class = "drop-heading">Past Selections: </li>
                <li><span class = "bookName">Heat and Light </span><span class = "bookAuthor">
                    by Jennifer Haigh </span><br><span class = "bookDate">November 2020</span></li>
                <li><span class = "bookName">Margaret the First </span><span class = "bookAuthor">
                    by Danielle Dutton </span><br><span class = "bookDate">October 2020</span></li>
                <li><span class = "bookName">Braiding Sweetgrass </span><span class = "bookAuthor">
                    by Robin Wall Kimmerer </span><br><span class = "bookDate">September 2020 – in-person outdoor meetup</span></li>
                <li><span class = "bookName">Bowlaway </span><span class = "bookAuthor">
                    by Elizabeth McCracken </span><br><span class = "bookDate">August 2020 – in-person outdoor meetup</span></li>
                <li><span class = "bookName">Turn of the Key </span><span class = "bookAuthor">
                    by Ruth Ware </span><br><span class = "bookDate">July 2020 – in-person outdoor meetup</span></li>
                <li><span class = "bookName">Gingerbread </span><span class = "bookAuthor">
                    by Helen Oyeyemi </span><br><span class = "bookDate">June 2020 – virtual meeting</span></li>
                <li><span class = "bookName">Small Great Things </span><span class = "bookAuthor">
                    by Jodi Picoult </span><br><span class = "bookDate">May 2020 – virtual meeting</span></li>
            </div>
        </div>
        </div>
            
        
    </div>

    <!-- Words Div -->
    <div class = "containers" id = "details">

        <!-- Date Section -->
        <span id = "dateSection">
        <?php if(get_theme_mod($date_desc)) { ?>
            <div class = "icon-heading-div">
                <img class = "heading-icon" src= <?php echo get_template_directory_uri() . "/events_imgs/dateIcon.png" ?> alt="Calendar icon next to date">
                <p class = "headings"> DATE </p>
            </div>
            <p class = "body-text"> <?php echo get_theme_mod($date_desc) ?> </p> <br>
        <?php } ?>
        </span>

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
                    <a class = "linkEvent" href = <?php echo get_theme_mod($eventbrite_link) ?> > EventBrite</a> 
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
            <p class = "body-text" ><?php echo get_theme_mod($rel_link_desc) ?>
            <a class = "linkEvent" href = <?php echo get_theme_mod($rel_link) ?>><?php echo get_theme_mod($rel_link) ?> </p> <br>

        <?php } ?>

    </div>
</div>

<!-- <form class="message-form" method="post">
  <input id="message-title" type="text">
  <button  type="submit">Save!</button>
</form> -->

<?php get_footer(); ?>