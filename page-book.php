<?php 
  get_header(); 
  wp_enqueue_style('book');
  require get_template_directory() . '/inc/section_vars.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop Book Page</title>
</head>
<body>
  <div id="shop-book-path">All > Happily Ever Afters</div>
  <div id="shop-book-flex">
    <div id="shop-bookcover">
      <img src=<?php echo get_template_directory_uri() . "/img/bc_frida-atoz.png"?> alt="Frida A to Z Book Cover">
    </div>
    <div id="shop-bookdesc">

      <!-- Title, Author, Price -->
      <div class="book-sectionheader">Bailey, Nadia - Frida A to Z: The life of an icon from Activism to Zapotec</div>
      <div class="book-sectionheader">$14.95</div>
      <hr>

      <!-- Options -->
      <div class="book-sectionheader">Options</div>
      <div class="book-options">
        <div class="options-check"></div>
        <span class="options-text">Store Pickup</span>
      </div>
      <div class="book-options">
        <div class="options-check"></div>
        <span class="options-text">Shipping</span>
      </div>
      <hr>

      <!-- Quantity -->
      <div class="book-sectionheader">Quantity</div>
      <div class="book-quantity">
        <div class="quantity-box">
          <div class="quantity-operator">–</div>
          <div class="quantity-num">1</div>
          <div class="quantity-operator">+</div>
        </div>
        <button><img src=<?php echo get_template_directory_uri() . "/img/shopping_cart.png"?> alt="Shopping Cart">ADD TO CART</button>
      </div>
      <div class="quantity-left">1 left</div>
      <hr>

      <!-- Description -->
      <div class="book-sectionheader">Description</div>
      <div class="book-desc-content">
        <p>Date Published: 1/5/2021</p>
        <p>Condition: New</p>
        <p>Ages 14 And Up, Grades 9 And Up Young Adult Fiction / Romance / Romantic Comedy</p>
        <p>Summary:<br>Jane the Virgin meets To All the Boys I’ve Loved Before in this charming debut romantic comedy 
          filled with Black Girl Magic. Perfect for fans of Jenny Han, Mary H.K. Choi, and Nicola Yoon.
        </p>
        <p>Sixteen-year-old Tessa Johnson has never felt like the protagonist in her own life. She’s rarely seen herself 
          reflected in the pages of the romance novels she loves. The only place she’s a true leading lady is in her own 
          writing—in the swoony love stories she shares only with Caroline, her best friend and #1 devoted reader.
        </p>
        <p>When Tessa is accepted into the creative writing program of a prestigious art school, she’s excited to finally 
          let her stories shine. But when she goes to her first workshop, the words are just...gone. Fortunately, 
          Caroline has a solution: Tessa just needs to find some inspiration in a real-life love story of her own. And 
          she’s ready with a list of romance-novel-inspired steps to a happily ever after that will surely refill Tessa’s 
          creative well. Nico, the brooding artist who looks like he walked out of one of Tessa’s stories, is cast as the 
          perfect Prince Charming.
        </p>
        <p>But as Tessa checks each item off Caroline’s list, she gets further and further away from finding her words, 
          and herself, again. She’s well on her way to having her own real-life love story, yet she can’t help but wonder…
          Is it the one she wants, after all?
        </p>
      </div>
    </div>
  </div>
  
</body>
</html>

<?php get_footer(); ?>