<?php 
  get_header(); 
  wp_enqueue_style('events');
?>

<h1>Events</h1>

<form class="message-form" method="post">
  <input id="message-title" type="text">
  <button  type="submit">Save!</button>
</form>

<?php get_footer(); ?>