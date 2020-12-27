<!-- If you have a navbar or html on the top of every page put it here -->
<?php wp_head(); 
 wp_enqueue_style('header');
 require get_template_directory() . '/inc/section_vars.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Serendipity Books</title>
</head>
<body>
<!-- Search bar -->
<div id="search-bar-container">
  <input type="text" class="search-bar" onkeyup="myFunction()" placeholder="Search books, authors, genres, and more">
  <div class="link">
      <img id="search" src=<?php echo get_template_directory_uri() . "/photos/Vector.png" ?> height="20px" alt="Search">
  </div>
  <div class="link">
    <img id="cancel" src=<?php echo get_template_directory_uri() . "/photos/XButton.png" ?> height="20px" alt="Cancel">
  </div>
</div>

<div id="top-header">
  <!-- Top Icons/Logo link to home page -->
  <a href="<?php echo get_site_url(); ?>">
    <div class="images">
      <img src=<?php if (get_theme_mod($header_icon_img)) {
        echo get_theme_mod($header_icon_img);
      }  else { echo get_template_directory_uri() . "/photos/logo_birds.png"; }?> height="40px" alt="Birds">
      <img src=<?php if (get_theme_mod($header_logo_img)) {
        echo get_theme_mod($header_logo_img);
      }  else { echo get_template_directory_uri() . "/photos/logo.png"; }?> height="40px" alt="logo">
    </div>
  </a>
  <!-- Links to the different pages of the site -->
  <div class="links">
    <a href="<?php echo get_site_url(); ?>">
      <div class="link">
        <?php if (get_theme_mod($header_home_title)) { 
          echo get_theme_mod($header_home_title);
          } else {?>
          HOME
        <?php }?>
      </div>
    </a>
    <a href="<?php echo get_page_link( get_page_by_title('FAQ page')->ID ); ?>">
      <div class="link">
        <?php if (get_theme_mod($header_faq_title)) { 
          echo get_theme_mod($header_faq_title);
          } else {?>
          FAQ
        <?php }?>
      </div>
    </a>
    <a href="<?php echo get_page_link( get_page_by_title('Events')->ID ); ?>">
      <div class="link">
        <?php if (get_theme_mod($header_events_title)) { 
          echo get_theme_mod($header_events_title);
          } else {?>
          EVENTS
        <?php }?>
      </div>
    </a>
    <a href="<?php echo get_page_link( get_page_by_title('Shop')->ID ); ?>">
      <div class="link shop">
        <?php if (get_theme_mod($header_shop_title)) { 
          echo get_theme_mod($header_shop_title);
          } else {?>
          SHOP
        <?php }?>
      </div>
    </a>
    <!-- Search icon -->
    <div id="search-icon" class="link">
      <img src=<?php echo get_template_directory_uri() . "/photos/Vector.png" ?> height="20px" alt="Search">
    </div>

    <a href="<?php echo get_page_link( get_page_by_title('Cart')->ID ); ?>">
      <div class="link">
        <img src=<?php if (get_theme_mod($header_checkout_img)) {
          echo get_theme_mod($header_checkout_img);
        }  else { echo get_template_directory_uri() . "/photos/cart.png"; }?> height="40px" alt="Cart">
      </div>
    </a>
  </div>
</div>

