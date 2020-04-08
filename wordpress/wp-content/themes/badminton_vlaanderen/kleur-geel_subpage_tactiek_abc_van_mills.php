<?php 
/* This is a subpage for a specific color */
/* Bv. 2.2 Slagtechniek -> 2.2.1 Ruitenwisser geïsoleerd bovenhands, 2.2.2 Drop */
/* Template Name: Kleur geel subpagina Tactiek abc van Mills */
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

        <div class="title_subpage">1.6 Tactiek abc van Mills</div>

        <div class="back_arrow_container color_geel" onclick="location.href='/kleur-geel';">
          <a><i class="fas fa-arrow-left"></i></a>
        </div>

        <div class="wrapper">
          <button class="one color_geel" onclick="location.href='/kleur-geel/tactiek-abc-van-mills/a-away-ik-speel-weg-van-de-tegenstrever/';">1.6.1: A: ‘Away’: Ik speel weg van de tegenstrever:</button>
          <button class="two color_geel" onclick="location.href='/kleur-geel/tactiek-abc-van-mills/g-grond-ik-speel-zoveel-mogelijk-naar-de-grond/'">1.6.2: G: ‘Grond’: Ik speel zoveel mogelijk naar de grond: </button>
          <button class="three disabled"></button>
          <button class="four disabled" ></button>
          <button class="five disabled"></button>
          <button class="six disabled"></button>
          <button class="seven disabled"></button>
          <button class="eight disabled"></button>
        </div>

        <div class="question_mark_container color_geel" onclick="location.href='/kleur-wit/kijkwijzers/';">
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