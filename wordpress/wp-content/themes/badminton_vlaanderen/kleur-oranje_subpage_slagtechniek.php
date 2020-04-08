<?php 
/* This is a subpage for a specific color */
/* Bv. 2.2 Slagtechniek -> 2.2.1 Ruitenwisser geïsoleerd bovenhands, 2.2.2 Drop */
/* Template Name: Kleur oranje subpagina Slagtechniek */
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

        <div class="title_subpage">2.4 Slagtechniek</div>

        <div class="back_arrow_container color_oranje" onclick="location.href='/kleur-oranje';">
          <a><i class="fas fa-arrow-left"></i></a>
        </div>

        <div class="wrapper">
          <button class="one color_oranje" onclick="location.href='kleur-oranje/slagtechniek/basisclear/';">2.4.1 Basisclear </button>
          <button class="two color_oranje" onclick="location.href='kleur-oranje/slagtechniek/dab-of-kill/';">2.4.2 Dab of kill</button>
          <button class="three color_oranje" onclick="location.href='kleur-oranje/slagtechniek/speedminton/';">2.4.3 Speedminton</button>
          <button class="four color_oranje" onclick="location.href='kleur-oranje/slagtechniek/ruitenwisser-onderhands/';">2.4.4 Ruitenwisser onderhands</button>
          <button class="five color_oranje" onclick="location.href='kleur-oranje/slagtechniek/verre-opslag-met-ruitenwisser-en-uitzwaai-over-de-niet-racketschouder/';">2.4.5 Verre opslag met ruitenwisser en uitzwaai over de niet-racketschouder</button>
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