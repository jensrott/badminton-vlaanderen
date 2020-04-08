<?php 
/* This is a subpage for a specific color */
/* Bv. 3.4 Slagtechniek -> 3.4.1 Ruitenwisser geïsoleerd bovenhands, 3.4.2 Drop */
/* Template Name: Kleur rood subpagina Grepen */
/* Is not always the same */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description') ?>">
    <title><?php bloginfo('name') ?> 
    <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
     </title>
    <?php wp_head() ?> <!-- important meta stuff -->
    
  </head>
  <body>
  <div id="page-container">
    <div id="content-wrap">
      <?php get_header() ?> <!-- Header -->

      <div class="grid-container">

        <div class="title_subpage">3.2 Grepen</div>

        <div class="back_arrow_container color_rood" onclick="location.href='/kleur-rood';">
          <a><i class="fas fa-arrow-left"></i></a>
        </div>

        <div class="wrapper">
          <button class="one color_rood" onclick="location.href='kleur-rood/grepen/verder-werken-aan-een-correcte-basis-fh-greep/';">3.2.1 Verder werken aan een correcte basis FH-greep </button>
          <button class="two color_rood" onclick="location.href='kleur-rood/grepen/greepwissel-3-grepen/';">3.2.2 Greepwissel 3 grepen</button>
          <button class="three disabled"></button>
          <button class="four disabled"></button>
          <button class="five disabled"></button>
          <button class="six disabled"></button>
          <button class="seven disabled"></button>
          <button class="eight disabled"></button>
        </div>

        <div class="question_mark_container color_rood" onclick="location.href='/kleur-wit/kijkwijzers/';">
          <a><i class="fas fa-question"></i></a>
        </div>

      </div>
    </div> 
    <footer id="footer">
      <?php get_footer(); ?>
    </footer>
  </div>
  <?php wp_footer() ?>
  </body>
  </html>