<?php
get_header();
wp_enqueue_style('events');
require get_template_directory() . '/inc/section_vars.php';
?>

<!-- <h1>Events</h1> -->

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<div>
    <?php
    require 'inc/section_vars.php';
    // get_example_data is in /inc/template_functions.php
    $data  = get_example_data($event_repeater);
    if (!empty($data)) {
    ?>
        <section class="example">
            <div id="fontDefault">
                <!-- Event Header w/ Title -->
                <?php if ($data[$_GET['id']]['event_title']) { ?>
                    <div id="eventHeaderSection">
                        <img class="bracket" src=<?php echo get_template_directory_uri() . "/events_imgs/leftBracket.png" ?> alt="left bracket">
                        <span id="eventTitleEdit">
                            <p id="eventTitle"> <?php echo $data[$_GET['id']]['event_title'] ?> </p>
                        </span>
                        <img class="bracket" src=<?php echo get_template_directory_uri() . "/events_imgs/rightBracket.png" ?> alt="right bracket">
                    </div>
                <?php }  ?>

                <!-- Everything Else on the Page -->
                <div id="outer">

                    <?php $media = '';
                    if ($data[$_GET['id']]['poster_image']) {
                        // get_media_url function is in template_functions.php
                        $media = '<img src="' . esc_url(get_media_url($data[$_GET['id']]['poster_image'])) . '">';
                    } ?>

                    <!-- Poster Div (Image) -->
                    <div class="containers" id="poster">
                        <!-- Adding Image -->
                        <?php if ($data[$_GET['id']]['poster_image']) { ?>
                            <img id="posterImage" src=" <?php echo esc_url(get_media_url($data[$_GET['id']]["poster_image"])) ?> ">
                        <?php } ?>
                    </div>

                    <!-- Words Div -->
                    <div class="containers" id="details">

                        <!-- Date Section -->
                        <?php if ($data[$_GET['id']]['date']) { ?>
                            <span id="dateSectionEdit">
                                <div class="icon-heading-div">
                                    <img class="heading-icon" src=<?php echo get_template_directory_uri() . "/events_imgs/dateIcon.png" ?> alt="Calendar icon next to date">
                                    <p class="headings"> DATE </p>
                                </div>
                                <div class="body-text">
                                    <?php echo $data[$_GET['id']]['date']; ?>
                                    <br> <br>
                                </div>
                            </span>
                        <?php } ?>

                        <!-- Upcoming Meeting Section -->
                        <?php if ($data[$_GET['id']]['upcom_meet_info']) { ?>
                            <span id="upcomMeetEdit">
                                <div class="icon-heading-div">
                                    <img class="heading-icon" src=<?php echo get_template_directory_uri() . "/events_imgs/dateIcon.png" ?> alt="Calendar icon next to date">
                                    <p class="headings"> UPCOMING MEETING </p>
                                </div>
                                <div class="body-text">
                                    <!-- Upcoming Meeting Description-->
                                    <?php echo nl2br($data[$_GET['id']]['upcom_meet_info']) ?>
                                    <br> <br>
                                </div>
                            </span>
                        <?php } ?>

                        <!-- Location Section -->
                        <?php if ($data[$_GET['id']]['location']) { ?>
                            <span id="locationEdit">
                                <div class="icon-heading-div">
                                    <img class="heading-icon" src=<?php echo get_template_directory_uri() . "/events_imgs/locationIcon.png" ?> alt="Location icon">
                                    <p class="headings"> LOCATION </p>
                                </div>
                                <div class="body-text">
                                    <!-- With EventBrite Link -->
                                    <?php if ($data[$_GET['id']]['eventbrite_link']) { ?>
                                        <p class="body-text">Register for free here.
                                            <a class="linkEvent" href=<?php echo ($data[$_GET['id']]['eventbrite_link']) ?>> EventBrite</a>
                                        </p> <br>
                                    <?php } ?>
                                    <!-- Other Location Description -->
                                    <?php if ($data[$_GET['id']]['location']) {
                                        echo ($data[$_GET['id']]['location']);
                                    } ?>
                                    <br> <br>
                                </div>
                            </span>
                        <?php } ?>

                        <!-- Description Section -->
                        <?php if ($data[$_GET['id']]['event_desc']) { ?>
                            <span id="descSectionEdit">
                                <div class="icon-heading-div">
                                    <img class="heading-icon" src=<?php echo get_template_directory_uri() . "/events_imgs/descIcon.png" ?> alt="Description icon">
                                    <p class="headings"> DESCRIPTION </p>
                                </div>
                                <div class="body-text">
                                    <!-- Description -->
                                    <?php echo ($data[$_GET['id']]['event_desc']); ?>
                                    <br> <br>
                                </div>
                            </span>
                        <?php } ?>

                        <!-- Relevant Link Section -->
                        <?php if ($data[$_GET['id']]['rel_link_desc']) { ?>
                            <span id="relLinkEdit">
                                <div class="icon-heading-div">
                                    <img class="heading-icon" src=<?php echo get_template_directory_uri() . "/events_imgs/relLinkIcon.png" ?> alt="Relevant link icon">
                                    <p class="headings"> RELEVANT LINK </p>
                                </div>
                                <div class="body-text">
                                    <?php if ($data[$_GET['id']]['rel_link_desc']) {
                                        echo ($data[$_GET['id']]['rel_link_desc']);
                                    } ?>
                                    <?php if ($data[$_GET['id']]['rel_link']) { ?>
                                        <p> <a class="linkEvent" href=<?php echo ($data[$_GET['id']]['rel_link']) ?>><?php echo ($data[$_GET['id']]['rel_link']) ?> </p> <br>
                                    <?php } ?>
                                </div>
                            </span>
                        <?php } ?>
                    </div>
                </div>
            </div> <!-- Font Default Div -->
        </section>
    <?php } ?>

</div>

<div id="fontDefault">
    <!-- Event Header w/ Title -->
    <div id="eventHeaderSection">
        <img class="bracket" src=<?php echo get_template_directory_uri() . "/events_imgs/leftBracket.png" ?> alt="left bracket">
        <span id="eventTitleEdit">
            <?php if (get_theme_mod($event_title)) { ?>
                <p id="eventTitle"> <?php echo get_theme_mod($event_title) ?> </p>
            <?php } else { ?>
                <p id="eventTitle"> EVENT TITLE </p>
            <?php } ?>
        </span>
        <img class="bracket" src=<?php echo get_template_directory_uri() . "/events_imgs/rightBracket.png" ?> alt="right bracket">
    </div>

    <!-- Everything Else on the Page -->
    <div id="outer">

        <!-- Poster Div (Image) -->
        <div class="containers" id="poster">
            <!-- Adding Image -->
            <?php if (get_theme_mod($events_poster_img)) { ?>
                <img id="posterImage" src=<?php echo get_theme_mod($events_poster_img); ?> alt="Poster of the event">
            <?php } else { ?>
                <img id="posterImage" src=<?php echo get_template_directory_uri() . "/events_imgs/afterhoursbookclub.png" ?> alt="Poster of the event">
            <?php } ?>

            <!-- Dropdown -->
            <div id="width-control">
                <div class="dropdownBox">
                    <button type="button" class="dropButton">
                        <span class="dropTitle">FUTURE AND PAST BOOKS</span>
                        <i class="fas fa-angle-down"></i>
                    </button>
                    <div class="dropdownContent">
                        <li class="drop-heading">Future Dates and Reads: </li>
                        <li><span class="bookName">Paying Guests </span><span class="bookAuthor">
                                by Sarah Waters </span><br><span class="bookDate">January 13, 2021</span></li>
                        <li class="drop-heading">Past Selections: </li>
                        <li><span class="bookName">Heat and Light </span><span class="bookAuthor">
                                by Jennifer Haigh </span><br><span class="bookDate">November 2020</span></li>
                        <li><span class="bookName">Margaret the First </span><span class="bookAuthor">
                                by Danielle Dutton </span><br><span class="bookDate">October 2020</span></li>
                        <li><span class="bookName">Braiding Sweetgrass </span><span class="bookAuthor">
                                by Robin Wall Kimmerer </span><br><span class="bookDate">September 2020 – in-person outdoor meetup</span></li>
                        <li><span class="bookName">Bowlaway </span><span class="bookAuthor">
                                by Elizabeth McCracken </span><br><span class="bookDate">August 2020 – in-person outdoor meetup</span></li>
                        <li><span class="bookName">Turn of the Key </span><span class="bookAuthor">
                                by Ruth Ware </span><br><span class="bookDate">July 2020 – in-person outdoor meetup</span></li>
                        <li><span class="bookName">Gingerbread </span><span class="bookAuthor">
                                by Helen Oyeyemi </span><br><span class="bookDate">June 2020 – virtual meeting</span></li>
                        <li><span class="bookName">Small Great Things </span><span class="bookAuthor">
                                by Jodi Picoult </span><br><span class="bookDate">May 2020 – virtual meeting</span></li>
                    </div>
                </div>
            </div>


        </div>

        <!-- Words Div -->
        <div class="containers" id="details">

            <!-- Date Section -->
            <span id="dateSectionEdit">
                <div class="icon-heading-div">
                    <img class="heading-icon" src=<?php echo get_template_directory_uri() . "/events_imgs/dateIcon.png" ?> alt="Calendar icon next to date">
                    <p class="headings"> DATE </p>
                </div>
                <div class="body-text">
                    <?php if (get_theme_mod($date_desc)) {
                        echo get_theme_mod($date_desc);
                    } else {
                        echo 'September 10 - December 10, 2020';
                    }
                    ?>
                    <br> <br>
                </div>
            </span>

            <!-- Upcoming Meeting Section -->
            <span id="upcomMeetEdit">
                <div class="icon-heading-div">
                    <img class="heading-icon" src=<?php echo get_template_directory_uri() . "/events_imgs/dateIcon.png" ?> alt="Calendar icon next to date">
                    <p class="headings"> UPCOMING MEETING </p>
                </div>
                <div class="body-text">
                    <!-- Upcoming Meeting Description Part 1 -->
                    <?php if (get_theme_mod($upcom_meet_desc1)) {
                        echo get_theme_mod($upcom_meet_desc1);
                    } else {
                        echo 'December 9, 6:30 - 8:00pm';
                    } ?>
                    <br> <br>
                    <!-- Upcoming Meeting Description Part 2 -->
                    <?php if (get_theme_mod($upcom_meet_desc2)) {
                        echo get_theme_mod($upcom_meet_desc2);
                    } else {
                        echo '‘All American Boys‘ by Jason Reynolds and Brendan Kiely and ‘Long Way Down‘ by Jason Reynolds (a two book selection)';
                    }
                    ?>
                    <br> <br>
                </div>
            </span>

            <!-- Location Section -->
            <span id="locationEdit">
                <div class="icon-heading-div">
                    <img class="heading-icon" src=<?php echo get_template_directory_uri() . "/events_imgs/locationIcon.png" ?> alt="Location icon">
                    <p class="headings"> LOCATION </p>
                </div>
                <div class="body-text">
                    <!-- With EventBrite Link -->
                    <?php if (get_theme_mod($eventbrite_link)) { ?>
                        <p class="body-text">Register for free here.
                            <a class="linkEvent" href=<?php echo get_theme_mod($eventbrite_link) ?>> EventBrite</a>
                        </p> <br>
                    <?php } ?>
                    <!-- Other Location Description -->
                    <?php if (get_theme_mod($location_desc)) {
                        echo get_theme_mod($location_desc);
                    } else {
                        echo 'December meeting will be held over Zoom.';
                    } ?>
                    <br> <br>
                </div>
            </span>

            <!-- Description Section -->
            <span id="descSectionEdit">
                <div class="icon-heading-div">
                    <img class="heading-icon" src=<?php echo get_template_directory_uri() . "/events_imgs/descIcon.png" ?> alt="Description icon">
                    <p class="headings"> DESCRIPTION </p>
                </div>
                <div class="body-text">
                    <!-- Description Part 1 -->
                    <?php if (get_theme_mod($event_desc1)) {
                        echo get_theme_mod($event_desc1);
                    } else {
                        echo 'The book club is open to regular clock-work attendees or occasional drop-ins alike. No sign-up is needed, no purchases 
                    are necessary, just stop by ready to discuss the latest read.';
                    } ?>
                    <br> <br>
                    <!-- Description Part 2 -->
                    <?php if (get_theme_mod($event_desc2)) {
                        echo get_theme_mod($event_desc2);
                    } else {
                        echo 'The selections vary in genre and length. They are often tie-in reads with the Washtenaw Reads winning selection, the 
                    Midwest Literary Walk, and even high school favorites.';
                    }
                    ?>
                    <br> <br>
                    <!-- Description Part 3 -->
                    <?php if (get_theme_mod($event_desc3)) {
                        echo get_theme_mod($event_desc3);
                    } else {
                        echo 'Its always fun!';
                    }
                    ?>
                    <br> <br>
                </div>
            </span>

            <!-- Relevant Link Section -->
            <span id="relLinkEdit">
                <div class="icon-heading-div">
                    <img class="heading-icon" src=<?php echo get_template_directory_uri() . "/events_imgs/relLinkIcon.png" ?> alt="Relevant link icon">
                    <p class="headings"> RELEVANT LINK </p>
                </div>
                <div class="body-text">
                    <?php if (get_theme_mod($rel_link_desc)) {
                        echo get_theme_mod($rel_link_desc);
                    } else {
                        echo 'Jason Reynolds in Conversation at the Prince George’s Country Library: Broadcast Link: ';
                    }
                    ?>
                    <?php if (get_theme_mod($rel_link)) { ?>
                        <p> <a class="linkEvent" href=<?php echo get_theme_mod($rel_link) ?>><?php echo get_theme_mod($rel_link) ?> </p> <br>
                    <?php } else { ?>
                        <p> <a class="linkEvent" href="https://www.youtube.com/watch?v=wzfKP4ZXmSk"> https://www.youtube.com/watch?v=wzfKP4ZXmSk </p> <br>
                    <?php } ?>
                </div>
            </span>

        </div>
    </div>
</div> <!-- Font Default Div -->

<!-- <form class="message-form" method="post">
  <input id="message-title" type="text">
  <button  type="submit">Save!</button>
</form> -->

<?php get_footer(); ?>