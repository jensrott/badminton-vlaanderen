<?php 
/* This is a subpage for a specific color */
/* Bv. 2.2 Slagtechniek -> 2.2.1 Ruitenwisser geïsoleerd bovenhands, 2.2.2 Drop */
/* Template Name: Kleur geel subpagina Slagtechniek */
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

        <div class="title_subpage">1.4 Slagtechniek</div>

        <div class="back_arrow_container color_geel" onclick="location.href='/kleur-geel';">
          <a><i class="fas fa-arrow-left"></i></a>
        </div>

        <div class="wrapper">
          <button class="one color_geel" onclick="location.href='/kleur-geel/slagtechniek/verre-opslag-hoog-en-ver-in-fh-opslaan-zonder-rotatie/';">1.4.1 Verre opslag – hoog en ver in FH opslaan (zonder rotatie). </button>
          <button class="two color_geel" onclick="location.href='/kleur-geel/slagtechniek/initiatie-basisclear-bovenhandse-slagen-met-de-werpbeweging-en-palmgreep-uit-dakhouding/';">1.4.2 Initiatie basisclear: bovenhandse slagen met de werpbeweging en palmgreep uit dakhouding. </button>
          <button class="three color_geel" onclick="location.href='/kleur-geel/slagtechniek/initiatie-naar-beneden-spelen/';">1.4.3 Initiatie naar beneden spelen</button>
          <button class="four color_geel" onclick="location.href='/kleur-geel/slagtechniek/push-forehand-en-backhand-en-voorbereiding-dab/';">1.4.4 Push forehand en backhand en voorbereiding ‘dab’</button>
          <button class="five color_geel" onclick="location.href='/kleur-geel/slagtechniek/korte-backhand-opslag-als-voorbereiding-op-dubbelspel-mikvormen-onderhandse-precisie/';">1.4.5 Korte backhand opslag als voorbereiding op dubbelspel (mikvormen onderhandse precisie).</button>
          <button class="six color_geel" onclick="location.href='/kleur-geel/slagtechniek/netdrop-in-backhandgreep-rechtdoor/';">1.4.6 Netdrop in backhandgreep rechtdoor.</button>
          <button class="seven color_geel" onclick="location.href='/kleur-geel/slagtechniek/voorbereiding-extensie-lob/'">1.4.7 Voorbereiding extensie lob</button>
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