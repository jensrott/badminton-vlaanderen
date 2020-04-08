<?php 
/* This is a subpage for a specific color */
/* Bv. 5.4 Slagtechniek -> 5.4.1 Ruitenwisser geïsoleerd bovenhands, 5.4.2 Drop */
/* Template Name: Kleur blauw subpagina Tactiek abc van Mills */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 5 meta tags *must* come first in the head; any other head content must come *after* these tags -->
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

        <div class="title_subpage">5.6 Tactiek abc van Mills</div>

        <div class="back_arrow_container color_blauw" onclick="location.href='/kleur-blauw';">
          <a><i class="fas fa-arrow-left"></i></a>
        </div>

        <div class="wrapper">
          <button class="one color_blauw" onclick="location.href='kleur-blauw/tactiek-abc-van-mills/g-grond-ik-speel-zoveel-mogelijk-neerwaarts-kill-drop-smash/';">5.6.1 G: Grond: Ik speel zoveel mogelijk neerwaarts: kill, drop, smash</button>
          <button class="two color_blauw" onclick="location.href='kleur-blauw/tactiek-abc-van-mills/h-ik-probeer-met-schijn-te-spelen-door-mijn-tegenstrever-in-de-gaten-te-houden/';">5.6.2 H: Ik probeer met schijn te spelen door mijn tegenstrever in de gaten te houden.</button>
          <button class="three color_blauw" onclick="location.href='kleur-blauw/tactiek-abc-van-mills/verantwoorde-shotselectie/';">5.6.3 Verantwoorde shotselectie</button>
          <button class="four color_blauw" onclick="location.href='kleur-blauw/tactiek-abc-van-mills/oefeningen-voor-dubbelspel/';">5.6.4 Oefeningen voor dubbelspel</button>
          <button class="five disabled"></button>
          <button class="six disabled"></button>
          <button class="seven disabled"></button>
          <button class="eight disabled"></button>
        </div>

        <div class="question_mark_container color_blauw" onclick="location.href='/kleur-wit/kijkwijzers/';">
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