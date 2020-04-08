<?php 
/* This is a subpage for a specific color */
/* Bv. 2.2 Slagtechniek -> 2.2.1 Ruitenwisser geïsoleerd bovenhands, 2.2.2 Drop */
/* Template Name: Kleur oranje subpagina Grepen */
/* Is not always the same */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 2 meta tags *must* come first in the head; any other head content must come *after* these tags -->
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

        <div class="title_subpage">2.2 Grepen</div>

        <div class="back_arrow_container color_oranje" onclick="location.href='/kleur-oranje';">
          <a><i class="fas fa-arrow-left"></i></a>
        </div>

        <div class="wrapper">
          <button class="one color_oranje" onclick="location.href='kleur-oranje/grepen/duimgreep-lossen-en-knijpen/';">2.2.1 Duimgreep lossen en knijpen. </button>
          <button class="two color_oranje" onclick="location.href='kleur-oranje/grepen/palmgreep-lossen-en-knijpen/';">2.2.2 Palmgreep lossen en knijpen.</button>
          <button class="three color_oranje" onclick="location.href='kleur-oranje/grepen/greepwissels';">2.2.3 Greepwissels</button>
          <button class="four color_oranje" onclick="location.href='kleur-oranje/grepen/initiatie-van-de-basis-FH-greep-voor-de-ruitenwisser-opwaarts-en-verre-opslag';">2.2.4 Initiatie van de basis FH-greep voor de ruitenwisser opwaarts en verre opslag.</button>
          <button class="five disabled"></button>
          <button class="six disabled"></button>
          <button class="seven disabled"></button>
          <button class="eight disabled"></button>
        </div>

        <div class="question_mark_container color_oranje" onclick="location.href='/kleur-wit/kijkwijzers/';">
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