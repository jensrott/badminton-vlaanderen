<?php 
/* This is a subpage for a specific color */
/* Bv. 4.4 Slagtechniek -> 4.4.1 Ruitenwisser geïsoleerd bovenhands, 4.4.2 Drop */
/* Template Name: Kleur paars subpagina Tactiek abc van Mills */
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

        <div class="title_subpage">4.6 Tactiek abc van Mills</div>

        <div class="back_arrow_container color_paars" onclick="location.href='/kleur-paars';">
          <a><i class="fas fa-arrow-left"></i></a>
        </div>

        <div class="wrapper">
          <button class="one color_paars" onclick="location.href='kleur-paars/tactiek-abc-van-mills/e-eerste-raakpunt-zo-vroeg-zo-hoog-mogelijk-de-shuttle-raken-als-een-magneet-naar-het-net/';">4.6.1 E: Eerste raakpunt: zo vroeg (zo hoog) mogelijk de shuttle raken: als een magneet naar het net!</button>
          <button class="two color_paars" onclick="location.href='kleur-paars/tactiek-abc-van-mills/e-kill-netdrop-of-push-als-return-bij-de-korte-bh-service-dubbelspel/';">4.6.2 E: Kill – netdrop of push als return bij de korte BH-service dubbelspel</button>
          <button class="three color_paars" onclick="location.href='kleur-paars/tactiek-abc-van-mills/f-fast-recovery-flitsend-terug-naar-de-basis/';">4.6.3 F: Fast recovery (Flitsend terug naar de basis)</button>
          <button class="four disabled" ></button>
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