<?php 
/* This is a subpage for a specific color */
/* Bv. 4.4 Slagtechniek -> 4.4.1 Ruitenwisser geïsoleerd bovenhands, 4.4.2 Drop */
/* Template Name: Kleur paars subpagina Klussce */
/* Is not always the same */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
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

        <div class="title_subpage">4.1 Klussce</div>

        <div class="back_arrow_container color_paars" onclick="location.href='/kleur-paars';">
          <a><i class="fas fa-arrow-left"></i></a>
        </div>

        <div class="wrapper">
          <button class="one color_paars" onclick="location.href='kleur-paars/klussce/agility-behendigheid-en-startsnelheid-via-ladderoefeningen-stimuleren/';">4.1.1 Agility: behendigheid en startsnelheid via ladderoefeningen stimuleren.</button>
          <button class="two color_paars" onclick="location.href='kleur-paars/klussce/rompstabiliteit-meer-gevorderde-oefeningen-houdingscontrole/';">4.1.2 Rompstabiliteit: meer gevorderde oefeningen: houdingscontrole.</button>
          <button class="three color_paars" onclick="location.href='kleur-paars/klussce/lenigheid-kan-gestimuleerd-worden-via-oefening-met-actieve-stretch-film/';">4.1.3 Lenigheid kan gestimuleerd worden via oefening met actieve stretch. (Film)</button>
          <button class="four disabled"></button>
          <button class="five disabled"></button>
          <button class="six disabled"></button>
          <button class="seven disabled"></button>
          <button class="eight disabled"></button>
        </div>

        <div class="question_mark_container color_paars" onclick="location.href='/kleur-wit/kijkwijzers/';">
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