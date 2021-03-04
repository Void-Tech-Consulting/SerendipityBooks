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
<!-- Search bar -->
<div id="search-bar-container">
  <div class="searching-container">
    <?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?>
    <div class="search-cancel">
      <img id="cancel" src=<?php echo get_template_directory_uri() . "/photos/XButton.png" ?> height="20px" alt="Cancel">
    </div>
  </div>
</div>

<div id="top-header">
  <!-- Top Icons/Logo link to home page -->
  <a href="<?php echo get_site_url(); ?>">
    <div id="top-images">
      <img src=<?php if (get_theme_mod($header_icon_img)) {
        echo get_theme_mod($header_icon_img);
      }  else { echo get_template_directory_uri() . "/photos/logo_birds.png"; }?> height="40px" alt="Birds">
      <img src=<?php if (get_theme_mod($header_logo_img)) {
        echo get_theme_mod($header_logo_img);
      }  else { echo get_template_directory_uri() . "/photos/logo.png"; }?> height="40px" alt="logo">
    </div>
  </a>
  <span id="header-icon-select"></span>
  <!-- Links to the different pages of the site -->
  <div class="links">
  <span id="header-title-select"></span>
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
    <div class="event-dropdown">
      <div class="link">
        <?php if (get_theme_mod($header_events_title)) { 
          echo get_theme_mod($header_events_title);
          } else {?>
          EVENTS
        <?php }?>
      </div>
      <div class="event-dropdown-content">
            <?php $data  = get_example_data($event_repeater);
            if (!empty($data)) {
            $size = sizeof($data);
            for($i = 0; $i < $size; $i++) { ?>
                <a id = "fontDefault" href = <?php echo get_site_url() . "/events?id=$i" ?> > <?php echo $data[$i]['event_title'] ?> </a>
            <?php }
            } ?>
      </div>
    </div>
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

    <a href="<?php echo $woocommerce->cart->get_cart_url();?>">
      <div class="link">
        <img src=<?php if (get_theme_mod($header_checkout_img)) {
          echo get_theme_mod($header_checkout_img);
        }  else { echo get_template_directory_uri() . "/photos/cart.png"; }?> height="40px" alt="Cart">
      </div>
    </a>
  </div>
  <div id="mobile-header">
    <div id="mobile-search-bar-container">
      <div class="searching-container">
        <?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?>
        <?php echo do_shortcode("[add_to_cart_url id='76']"); ?>
        <div class="search-cancel">
          <img id="mobile-cancel" src=<?php echo get_template_directory_uri() . "/photos/XButton.png" ?> height="20px" alt="Cancel">
        </div>
      </div>
    </div>
        <!-- Search icon -->
    <div id="mobile-search-icon" class="link">
      <img src=<?php echo get_template_directory_uri() . "/photos/Vector.png" ?> height="20px" alt="Mobile Search">
    </div>
    <div id="mobile-icon">
        <img src=<?php if (get_theme_mod($header_checkout_img)) {
          echo get_theme_mod($header_checkout_img);
        }  else { echo get_template_directory_uri() . "/photos/mobile-icon.png"; }?> height="40px" alt="Icon">
    </div>
    <div id="mobile-menu-cancel">
        <img src=<?php if (get_theme_mod($header_checkout_img)) {
          echo get_theme_mod($header_checkout_img);
        }  else { echo get_template_directory_uri() . "/photos/mobile-cancel.png"; }?> height="40px" alt="Icon">
    </div>
  </div>
  <div id="menu-popover" class="menu-links">
      <a href="<?php echo get_site_url(); ?>">
        <div class="menu-link">
          <?php if (get_theme_mod($header_home_title)) { 
            echo get_theme_mod($header_home_title);
            } else {?>
            HOME
          <?php }?>
        </div>
      </a>
      <a href="<?php echo get_page_link( get_page_by_title('FAQ page')->ID ); ?>">
        <div class="menu-link">
          <?php if (get_theme_mod($header_faq_title)) { 
            echo get_theme_mod($header_faq_title);
            } else {?>
            FAQ
          <?php }?>
        </div>
      </a>
      <div class="event-dropdown">
        <div class="menu-link">
          <?php if (get_theme_mod($header_events_title)) { 
            echo get_theme_mod($header_events_title);
            } else {?>
            EVENTS
          <?php }?>
        </div>
        <div class="event-dropdown-content">
            <?php $data  = get_example_data($event_repeater);
              if (!empty($data)) {
                $size = sizeof($data);
                for($i = 0; $i < $size; $i++) { ?>
                    <a id = "fontDefault" href = <?php echo get_site_url() . "/events?id=$i" ?> > <?php echo $data[$i]['event_title'] ?> </a>
                <?php }
              } ?>
        </div>
      </div>
      <a href="<?php echo get_page_link( get_page_by_title('Shop')->ID ); ?>">
        <div class="menu-link">
           <div class="shop">
            <?php if (get_theme_mod($header_shop_title)) { 
              echo get_theme_mod($header_shop_title);
              } else {?>
              SHOP
            <?php }?>
           </div>
        </div>
      </a>

      <a href="<?php echo $woocommerce->cart->get_cart_url();?>">
      <div class="menu-link">
          <?php if (get_theme_mod($header_shop_title)) { 
            echo get_theme_mod($header_shop_title);
            } else {?>
            CHECKOUT NOW
          <?php }?>
        </div>
      </a>
  </div>
</div>
<body>

