<?php 
  get_header(); 
  wp_enqueue_style('faq');
  require get_template_directory() . '/inc/section_vars.php';

  function show_faq($type, $content) {
    echo "
    <div>
      <div class='quescontainer'>
        <button type='button' class='questype'>
          <span class='questitle'>$type</span>
          <i class='fas fa-angle-down'></i>
        </button>
      <div class='quescontent'>$content</div>
    </div>
    ";
  }
  $faq = get_example_data($faq_repeater);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <title>FAQ Page</title>
</head>
<body>
  <!-- Title of Page -->
  <header id="faq-header">
    <span class="brackets">[</span>
    <h1 id="faq-h1">Frequently Asked Questions</h1>
    <span class="brackets">]</span>
  </header>    

  <div id="faq_layout">
    <!-- Section: Questions -->
    <section class="faq-sec" id="questions">
      <!-- Trade Policy -->
      <div class="quescontainer">
        <button type="button" class="questype">
          <span id="edit-tradepolicy">
            <?php if (get_theme_mod($faq_tradepolicy)) { ?>
              <span class="questitle"><?php echo get_theme_mod($faq_tradepolicy) ?></span>
            <?php } else { ?>
              <span class="questitle"> trade policy
              </span>
            <?php } ?>
          </span>
          <i class="fas fa-angle-down"></i>
        </button>

        
        <?php if (get_theme_mod($faq_tradepolicy_content)) { ?>
            <div class="quescontent"><?php echo get_theme_mod($faq_tradepolicy_content) ?></div>
        <?php } ?>
        <div class="quescontent">
          <p>We do take books in for trade but do not give cash. Instead:</p>
          <p>- for any books we take, we offer 20% of the new value of the book in store credit<br>
            - store credit can be used for up to 50% of a purchase<br>
            - store credit can accumulate on your account and will not expire<br>
            - we do not guarantee a return on any books previously purchased
          </p>

          <p>The kind of books we look for are:</p>

          <p>- book club choices and recent award winners in paperback<br>
            - classics in paperback or hardback<br>
            - popular children’s books in great condition (think Wimpy Kids, Harry Potter, Magic Tree House)<br>
            - unusual and eclectic vintage treasures<br>
            - popular current reads (think Grisham, Patterson, Lee Child, Nora Roberts)
          </p>

          <p>No appointment is necessary; books can be dropped off at any time. We’ll call you with the total to be 
          credited to your account. Unwanted books will be donated or you can pick them up.</p>

          <p>Store credit can be applied towards used books already in the store. It cannot be applied against special 
          orders, new books or other items (such as journals, soaps, pins etc).</p>
        </div>
      </div>

      <!-- Local Authors -->
      <div class="quescontainer">
        <button type="button" class="questype">
          <span id="edit-authors">
            <?php if (get_theme_mod($faq_authors)) { ?>
              <span class="questitle"><?php echo get_theme_mod($faq_authors) ?></span>
            <?php } else { ?>
              <span class="questitle">local authors</span>
            <?php } ?>
          </span>
          <i class="fas fa-angle-down"></i>
        </button>

        <?php if (get_theme_mod($faq_authors_content)) { ?>
            <div class="quescontent"><?php echo get_theme_mod($faq_authors_content) ?></div>
        <?php } ?>

        <div class="quescontent">
          <p>Congratulations on pursuing the best activity ever. As a writer, rest assured that I 
          understand all the effort, joy and pain that went into your work.</p>
          <p>I do carry a selection of local works on consignment. I also support a few authors 
          with book launches and events. However, Serendipity Books is a small Indie store 
          and the world of self-publishing has exploded. As much I’d like, I simply cannot 
          support every local author deserving of events and book launches and big fancy 
          parties. However, fill in the form below and let me know all about your work. If the 
          fit seems like a good one, I’ll be in touch.</p>
          <p>Many thanks for considering Serendipity Books–and congratulations on your 
          massive achievement,</p>
          <p>Michelle.</p>

          <div class="authorsform"> 
            <?php echo do_shortcode ( '[wpforms id="8812"]' ) ?>
          </div>
        </div>
      </div>

      <!-- Shop Info -->
      <div class="quescontainer">
        <button type="button" class="questype">
          <span id="edit-info">
            <?php if (get_theme_mod($faq_info)) { ?>
              <span class="questitle"><?php echo get_theme_mod($faq_info) ?></span>
            <?php } else { ?>
              <span class="questitle">shop info</span>
            <?php } ?>
          </span>
          <i class="fas fa-angle-down"></i>
        </button>

        <?php if (get_theme_mod($faq_info_content)) { ?>
            <div class="quescontent"><?php echo get_theme_mod($faq_info_content) ?></div>
        <?php } ?>

        <div class="quescontent">
          <p>Hours:<br>
            Tues - Sat: 11 -5<br>
            Sun: 12 - 4
          </p>
          <p>Address:<br>
            113 W Middle St<br>
            Chelseas, MI 48118
          </p>
          <p>Phone:<br>
            (734) 475-7148
          </p>
        </div>
      </div>
      
      <?php 
        if (!empty($faq)) { 
           $size = sizeof($faq);
           for($i = 0; $i < $size; $i++) {
              $type = $faq[$i]['faq_questype'];
              $content = $faq[$i]['faq_quescontent'];
              show_faq($type, $content);
            }  
        }
        ?>
      
  
    </section>

    <!-- Section: Image 2 -->
    <section class="faq-sec" id="images">
      <span id="edit-img">
        <?php if (get_theme_mod($faq_img)) { ?>
          <img src=<?php echo get_theme_mod($faq_img) ?>></div>
        <?php } else { ?>
          <img src=<?php echo get_template_directory_uri() . "/img/birds.png" ?> alt="Birds">
        <?php } ?>
      </span>
    </section>
    
  </div>
  
</body>
</html>

<?php get_footer(); ?>