<?php /* Template Name: Kleur rood */ ?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description') ?>">
    <title><?php bloginfo('name') ?> 
    <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
     </title>
    <?php wp_head() ?> <!-- important meta stuff -->
    
  </head>
  <body>
  <div id="page-container">
    <div id="content-wrap">
      <?php get_header() ?>
      <div class="grid-container">
        <div class="back_arrow_container color_rood" onclick="location.href='/';">
          <a><i class="fas fa-arrow-left"></i></a>
        </div>
        <div class="myButtons_clicked">
          <button class="wit" onclick="location.href='/kleur-wit';"><a><span class="no_show white">Extra informatie</span></a></button>
          <button class="geel"onclick="location.href='/kleur-geel';"><a><span class="no_show">Traject geel</span></a></button>
          <button class="oranje" onclick="location.href='/kleur-oranje';"><a><span class="no_show">Traject oranje</span></a></button>
          <button class="rood active" onclick="location.href='/kleur-rood';"><a><span class="no_show">Traject rood</span></a></button>
          <button class="paars" onclick="location.href='/kleur-paars';"><a><span class="no_show">Traject paars</span></a></button>
          <button class="blauw" onclick="location.href='/kleur-blauw';"><a><span class="no_show">Traject blauw</span></a></button>
        </div>

        <div class="wrapper">
          <div class="one color_rood" onclick="location.href='/kleur-rood/klussce';">3.1 Klussce</div>
          <div class="two color_rood" onclick="location.href='/kleur-rood/grepen';">3.2 Grepen</div>
          <div class="three color_rood" onclick="location.href='/kleur-rood/houdingen';">3.3 Houdingen</div>
          <div class="four color_rood" onclick="location.href='/kleur-rood/slagtechniek';">3.4 Slagtechniek</div>
          <div class="five color_rood" onclick="location.href='/kleur-rood/footwork';">3.5 Footwork</div>
          <div class="six color_rood" onclick="location.href='/kleur-rood/tactiek-abc-van-mills';">3.6 Tactiek</div>
        </div>

        <div class="question_mark_container color_rood" onclick="location.href='/kleur-wit/kijkwijzers/';">
          <a><i class="fas fa-question"></i></a>
        </div>
      </div>
    </div>
    <footer id="footer">
      <?php get_footer(); ?>
    </footer>
    <?php wp_footer() ?>
  </div>
  </body>
  </html>