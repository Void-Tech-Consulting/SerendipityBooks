<!-- If you have a navbar or html on the top of every page put it here -->
<?php wp_head(); 
 wp_enqueue_style('header');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Serendipity Books</title>
</head>
<body>
<div class="top-header">
  <a href="<?php echo get_site_url(); ?>">
    <div class="images">
      <img src=<?php echo get_template_directory_uri() . "/photos/logo_birds.png" ?> height="40px" alt="Birds">
      <img src=<?php echo get_template_directory_uri() . "/photos/logo.png" ?> height="40px" alt="Logo">
    </div>
  </a>
  
  <div class="links">
    <a href="<?php echo get_site_url(); ?>">
      <div class="link">
        HOME
      </div>
    </a>
    <a href="<?php echo get_page_link( get_page_by_title('FAQ page')->ID ); ?>">
      <div class="link">
        FAQ
      </div>
    </a>
    <a href="<?php echo get_page_link( get_page_by_title('Events')->ID ); ?>">
      <div class="link">
        EVENTS
      </div>
    </a>
    <a href="<?php echo get_page_link( get_page_by_title('Shop')->ID ); ?>">
      <div class="link shop">
        SHOP
      </div>
    </a>
    <a href="<?php echo get_page_link( get_page_by_title('Cart')->ID ); ?>">
      <div class="link">
        <img src=<?php echo get_template_directory_uri() . "/photos/cart.png" ?> height = "30px" alt="Logo">
      </div>
    </a>
  </div>
</div>
