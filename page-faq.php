<?php 
  get_header(); 
  wp_enqueue_style('faq');
?>

<h1>FAQ</h1>

<form class="message-form" method="post">
  <input id="message-title" type="text">
  <button  type="submit">Save!</button>
</form>

<?php get_footer(); ?>