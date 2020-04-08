<?php 
/* This is a subpage for a specific color */
/* Bv. 5.4 Slagtechniek -> 5.4.1 Ruitenwisser geïsoleerd bovenhands, 5.4.2 Drop */
/* Template Name: Kleur blauw subpagina Slagtechniek */
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

        <div class="title_subpage">5.4 Slagtechniek</div>

        <div class="back_arrow_container color_blauw" onclick="location.href='/kleur-blauw';">
          <a><i class="fas fa-arrow-left"></i></a>
        </div>

        <div class="wrapper">
          <button class="one color_blauw" onclick="location.href='kleur-blauw/slagtechniek/wedstrijdclear-verkorte-slagbeweging-aanvallende-clear/';">5.4.1 Wedstrijdclear: verkorte slagbeweging – aanvallende clear</button>
          <button class="two color_blauw" onclick="location.href='kleur-blauw/slagtechniek/smash/';">5.4.2 Smash</button>
          <button class="three color_blauw" onclick="location.href='kleur-blauw/slagtechniek/drive/';">5.4.3 Drive</button>
          <button class="four color_blauw" onclick="location.href='kleur-blauw/slagtechniek/BH-drop/';">5.4.4 BH-drop</button>
          <button class="five color_blauw" onclick="location.href='kleur-blauw/slagtechniek/flick-service/';">5.4.5 Flick-service</button>
          <button class="six color_blauw" onclick="location.href='kleur-blauw/slagtechniek/hoge-smashverdediging/';">5.4.6 Hoge smashverdediging</button>
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