<?php 
/* This is a subpage for a specific color */
/* Bv. 4.4 Slagtechniek -> 4.4.1 Ruitenwisser geïsoleerd bovenhands, 4.4.2 Drop */
/* Template Name: Kleur paars subpagina Slagtechniek */
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

        <div class="title_subpage">4.4 Slagtechniek</div>

        <div class="back_arrow_container color_paars" onclick="location.href='/kleur-paars';">
          <a><i class="fas fa-arrow-left"></i></a>
        </div>

        <div class="wrapper">
          <button class="one color_paars" onclick="location.href='kleur-paars/slagtechniek/wedstrijdclear/';">4.4.1 Wedstrijdclear</button>
          <button class="two color_paars" onclick="location.href='kleur-paars/slagtechniek/overhead-clear/';">4.4.2 Overhead clear</button>
          <button class="three color_paars" onclick="location.href='kleur-paars/slagtechniek/drop-met-schijn/';">4.4.3 Drop met schijn</button>
          <button class="four color_paars" onclick="location.href='/kleur-paars/slagtechniek/initiatie-smash/';">4.4.4 Initiatie smash</button>
          <button class="five color_paars" onclick="location.href='kleur-paars/slagtechniek/bh-extensie-lob/';">4.4.5 BH-extensie lob</button>
          <button class="six color_paars" onclick="location.href='kleur-paars/slagtechniek/fh-extensie-lob/';">4.4.6 FH-extensie lob</button>
          <button class="seven color_paars" onclick="location.href='kleur-paars/slagtechniek/kort-smashverdediging-halve-smash/';">4.4.7 Kort smashverdediging halve smash</button>
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