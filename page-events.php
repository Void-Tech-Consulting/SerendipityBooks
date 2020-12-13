<?php 
  get_header(); 
  wp_enqueue_style('events');
  // require get_template_directory() . 'page-events.php';
?>

<h1>Events</h1>

<div id = "eventHeaderSection">

  <img src = <?php echo get_template_directory_uri() . "/leftBracket.png" ?> alt = "left bracket">
  <p id = "eventTitle"> AFTERHOURS BOOK CLUB </p>
  <img src = <?php echo get_template_directory_uri() . "/rightBracket.png" ?> alt = "right bracket">
</div>

<div id = "outer">
  <div class = "containers" id = "poster">
      <img id = "posterImage" src= <?php echo get_template_directory_uri() . "/afterhoursbookclub.png" ?> alt="Poster of the event">
      <!-- <img id = "pic_of_poster" src= <?php echo get_template_directory_uri() . "writingseriesposter.png" ?> alt="Poster of the event"> -->
  </div>
  <div class = "containers" id = "details">
   <!-- Words Part -->
    <div class = "icon-heading-div">
      <img class = "heading-icon" src= <?php echo get_template_directory_uri() . "/dateIcon.png" ?> alt="Calendar icon next to date">
      <p class = "headings"> UPCOMING MEETING </p>
    </div>
      <p class = "body-text"> December 9, 6:30 - 8:00pm </p> <br>
      <p class = "body-text">‘All American Boys‘ by Jason Reynolds and Brendan Kiely and 
          ‘Long Way Down‘ by Jason Reynolds (a two book selection) </p> <br>

    <div class = "icon-heading-div">
      <img class = "heading-icon" src= <?php echo get_template_directory_uri() . "/locationIcon.png" ?> alt="Location icon">
      <p class = "headings"> LOCATION </p>
    </div>
      <p class = "body-text"> December meeting will be held over Zoom. Register for free below
          EventBrite </p> <br>

    <div class = "icon-heading-div">
      <img class = "heading-icon" src= <?php echo get_template_directory_uri() . "/descIcon.png" ?> alt="Description icon">
      <p class = "headings"> DESCRIPTION </p>
    </div>
      <p class = "body-text"> The book club is open to regular clock-work attendees or 
        occasional drop-ins alike. No sign-up is needed, no purchases are 
        necessary, just stop by ready to discuss the latest read. </p> <br>
      <p class = "body-text">The selections vary in genre and length. They are often 
        tie-in reads with the Washtenaw Reads winning selection, 
        the Midwest Literary Walk, and even high school favorites.</p> <br>
      <p class = "body-text">Its always fun! </p> <br>

    <div class = "icon-heading-div">
      <img class = "heading-icon" src= <?php echo get_template_directory_uri() . "/relLinkIcon.png" ?> alt="Relevant link icon">
      <p class = "headings"> RELEVANT LINK </p>
    </div>
      <p class = "body-text">Jason Reynolds in Conversation at the Prince George’s 
        Country Library: Broadcast Link: 
        https://www.youtube.com/watch?v=wzfKP4ZXmSk </p> <br>
      <p class = "body-text">GasLands Documentary </p> <br>

    <details id = "drop-down-books">
      <summary class = "body-text">Future and Past Books</summary>      
    </details>

    <!-- Words For Creative Writing Series -->
    <!-- <div class = "icon-heading-div">
      <img class = "heading-icon" src= <?php echo get_template_directory_uri() . "/dateIcon.png" ?> alt="Calendar icon next to date">
      <p class = "headings"> DATE </p>
    </div>
      <p class = "body-text"> September 10 - December 10, 2020</p> <br>

    <div class = "icon-heading-div">
      <img class = "heading-icon" src= <?php echo get_template_directory_uri() . "/locationIcon.png" ?> alt="Location icon">
      <p class = "headings"> LOCATION </p>
    </div>
      <p class = "body-text"> www.zoom.us/wassup </p> <br>

    <div class = "icon-heading-div">
      <img class = "heading-icon" src= <?php echo get_template_directory_uri() . "/descIcon.png" ?> alt="Description icon">
      <p class = "headings"> DESCRIPTION </p>
    </div>
      <p class = "body-text"> Creative Writing Virtual Series </p> <br>
      <p class = "body-text"> 9/10 <i>How to critique and why</i></p>
      <p class = "body-text"> 10/8 <i>How to be a POV whiz </i> </p>
      <p class = "body-text"> 11/12 <i>Mastering show and tell</i> </p>
      <p class = "body-text"> 12/10 <i> The revision process and your ego </i></p>
      <p class = "body-text">Fall classes will be help over zoom at 7pm on the second Thursday of the month</p> <br> -->
    
  </div>
</div>

<!-- <form class="message-form" method="post">
  <input id="message-title" type="text">
  <button  type="submit">Save!</button>
</form> -->

<?php get_footer(); ?>