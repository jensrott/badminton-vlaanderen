<?php 
/* This is a subpage for a specific color */
/* Bv. 2.2 Slagtechniek -> 2.2.1 Ruitenwisser geïsoleerd bovenhands, 2.2.2 Drop */
/* Template Name: Kleur geel subpagina Footwork */
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

        <div class="title_subpage">1.5 Footwork</div>

        <div class="back_arrow_container color_geel" onclick="location.href='/kleur-geel';">
          <a><i class="fas fa-arrow-left"></i></a>
        </div>

        <div class="wrapper">
          <button class="one color_geel" onclick="location.href='/kleur-geel/footwork/splitstep/';">1.5.1 Splitstep </button>
          <button class="two color_geel" onclick="location.href='/kleur-geel/footwork/van-bh-servicehouding-over-splitstep-naar-schermhouding-dwars-op-het-net/';">1.5.2 Van BH-servicehouding over splitstep naar schermhouding dwars op het net.</button>
          <button class="three disabled"></button>
          <button class="four disabled"></button>
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