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
        <span id="eventEdit"></span>
        <section class="example">
            <div id="fontDefault">
                <!-- Event Header w/ Title -->
                <?php if ($data[$_GET['id']]['event_title']) { ?>
                    <div id="eventHeaderSection">
                        <img class="bracket" src=<?php echo get_template_directory_uri() . "/events_imgs/leftBracket.png" ?> alt="left bracket">
                        <p id="eventTitle"> <?php echo $data[$_GET['id']]['event_title'] ?> </p>
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


                        <!-- Dropdown -->
                        <?php if ($data[$_GET['id']]['dropdown_past_books']) { ?>
                            <div id="width-control">
                                <div class="dropdownBox">
                                    <button type="button" class="dropButton">
                                        <span class="dropTitle">FUTURE AND PAST BOOKS</span>
                                        <i class="fas fa-angle-down"></i>
                                    </button>
                                    <!-- Print each book separated by new line -->
                                    <div class="dropdownContent">
                                        <!-- Future Reads -->
                                        <li class="drop-heading">Future Dates and Reads: </li>
                                        <?php $futureBooks  = $data[$_GET['id']]['dropdown_future_books'];
                                        $listF = explode("\n", $futureBooks);
                                        $listFSize = sizeof($listF);
                                        for ($i = 0; $i < $listFSize; ++$i) {
                                            $bookFInfo = explode(",", $listF[$i]); ?>
                                            <li><span class="bookName"> <?php echo $bookFInfo[0] ?> </span><span class="bookAuthor">
                                                    by <?php echo $bookFInfo[1] ?> </span><br><span class="bookDate"> <?php echo $bookFInfo[2] ?> </span></li>
                                        <?php } ?>

                                        <!-- Past Reads -->
                                        <li class="drop-heading">Past Selections: </li>
                                        <?php $pastBooks  = $data[$_GET['id']]['dropdown_past_books'];
                                        $listP = explode("\n", $pastBooks);
                                        $listPSize = sizeof($listP);
                                        for ($i = 0; $i < $listPSize; ++$i) {
                                            $bookPInfo = explode(",", $listP[$i]); ?>
                                            <li><span class="bookName"> <?php echo $bookPInfo[0] ?> </span><span class="bookAuthor">
                                                    by <?php echo $bookPInfo[1] ?> </span><br><span class="bookDate"> <?php echo $bookPInfo[2] ?> </span></li>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>

                    <!-- Words Div -->
                    <div class="containers" id="details">

                        <!-- Date Section -->
                        <?php if ($data[$_GET['id']]['date']) { ?>
                            <div class="icon-heading-div">
                                <img class="heading-icon" src=<?php echo get_template_directory_uri() . "/events_imgs/dateIcon.png" ?> alt="Calendar icon next to date">
                                <p class="headings"> DATE </p>
                            </div>
                            <div class="body-text">
                                <?php echo $data[$_GET['id']]['date']; ?>
                                <br> <br>
                            </div>
                        <?php } ?>

                        <!-- Upcoming Meeting Section -->
                        <?php if ($data[$_GET['id']]['upcom_meet_info']) { ?>
                            <div class="icon-heading-div">
                                <img class="heading-icon" src=<?php echo get_template_directory_uri() . "/events_imgs/dateIcon.png" ?> alt="Calendar icon next to date">
                                <p class="headings"> UPCOMING MEETING </p>
                            </div>
                            <div class="body-text">
                                <!-- Upcoming Meeting Description-->
                                <?php echo nl2br($data[$_GET['id']]['upcom_meet_info']) ?>
                                <br> <br>
                            </div>
                        <?php } ?>

                        <!-- Location Section -->
                        <?php if ($data[$_GET['id']]['location']) { ?>
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
                                    echo nl2br($data[$_GET['id']]['location']);
                                } ?>
                                <br> <br>
                            </div>
                        <?php } ?>

                        <!-- Description Section -->
                        <?php if ($data[$_GET['id']]['event_desc']) { ?>
                            <div class="icon-heading-div">
                                <img class="heading-icon" src=<?php echo get_template_directory_uri() . "/events_imgs/descIcon.png" ?> alt="Description icon">
                                <p class="headings"> DESCRIPTION </p>
                            </div>
                            <div class="body-text">
                                <!-- Description -->
                                <?php echo nl2br($data[$_GET['id']]['event_desc']); ?>
                                <br> <br>
                            </div>
                        <?php } ?>

                        <!-- Relevant Link Section -->
                        <?php if ($data[$_GET['id']]['rel_link_desc']) { ?>
                            <div class="icon-heading-div">
                                <img class="heading-icon" src=<?php echo get_template_directory_uri() . "/events_imgs/relLinkIcon.png" ?> alt="Relevant link icon">
                                <p class="headings"> RELEVANT LINK </p>
                            </div>
                            <div class="body-text">
                                <?php if ($data[$_GET['id']]['rel_link_desc']) {
                                    echo nl2br($data[$_GET['id']]['rel_link_desc']);
                                } ?>
                                <?php if ($data[$_GET['id']]['rel_link']) { ?>
                                    <p> <a class="linkEvent" href=<?php echo ($data[$_GET['id']]['rel_link']) ?>><?php echo ($data[$_GET['id']]['rel_link']) ?> </p> <br>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div> <!-- Font Default Div -->
        </section>
    <?php } ?>
    <br>
    <br>
    <br>

</div>

<!-- <form class="message-form" method="post">
  <input id="message-title" type="text">
  <button  type="submit">Save!</button>
</form> -->

<?php get_footer(); ?>