<?php 
/* This is a subpage for a specific color */
/* Bv. 5.4 Slagtechniek -> 5.4.1 Ruitenwisser geïsoleerd bovenhands, 5.4.2 Drop */
/* Template Name: Kleur blauw subpagina Houdingen */
/* Is not always the same */
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

        <div class="title_subpage">5.3 Houdingen</div>

        <div class="back_arrow_container color_blauw" onclick="location.href='/kleur-blauw';">
          <a><i class="fas fa-arrow-left"></i></a>
        </div>

        <div class="wrapper">
          <button class="one color_blauw" onclick="location.href='kleur-blauw/houdingen/lang-de-dakhouding-aanhouden-in-functie-van-schijn-long-hold/';">5.3.1 Lang de dakhouding aanhouden in functie van schijn (long-hold) </button>
          <button class="two color_blauw" onclick="location.href='kleur-blauw/houdingen/dubbelspel-mix-service-opstelling-en-return/';">5.3.2 Dubbelspel/mix service-opstelling en return</button>
          <button class="three disabled"></button>
          <button class="four disabled"></button>
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