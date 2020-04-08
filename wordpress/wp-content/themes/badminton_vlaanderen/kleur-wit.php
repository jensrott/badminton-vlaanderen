<?php /* Template Name: Kleur wit */ ?>


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
      <?php get_header() ?> <!-- Header -->
      <div class="grid-container">
        <div class="back_arrow_container color_wit" onclick="location.href='/';">
          <a><i class="fas fa-arrow-left"></i></a>
        </div>
        <div class="myButtons_clicked">
          <button class="wit active extra_informatie" onclick="location.href='/kleur-wit';"><a><span class="no_show white">Extra informatie</span></a></button>
          <button class="geel"onclick="location.href='/kleur-geel';"><a><span class="no_show">Traject geel</span></a></button>
          <button class="oranje" onclick="location.href='/kleur-oranje';"><a><span class="no_show">Traject oranje</span></a></button>
          <button class="rood" onclick="location.href='/kleur-rood';"><a><span class="no_show">Traject rood</span></a></button>
          <button class="paars" onclick="location.href='/kleur-paars';"><a><span class="no_show">Traject paars</span></a></button>
          <button class="blauw" onclick="location.href='/kleur-blauw';"><a><span class="no_show">Traject blauw</span></a></button>
        </div>


        <div class="wrapper">
          <div class="one color_wit" onclick="location.href='/kleur-wit/kijkwijzers';">Kijkwijzers</div>
          <div class="two color_wit" onclick="location.href='/kleur-wit/get-fit-2-badminton';">Get Fit 2 Badminton</div>
          <div class="three color_wit" onclick="location.href='/kleur-wit/hoe-vervang-ik-de-grip-van-mijn-handvat';">Vervangen grip handvat</div>
          <div class="four color_wit" onclick="location.href='/kleur-wit/minibad-badminton-op-kindermaat';">MiniBad</div>
          <div class="five color_wit" onclick="location.href='/kleur-wit/didactische-wenken';">Didactische wenken</div>
          <div class="six color_wit" onclick="location.href='/kleur-wit/multimove';">Multimove</div>
          <div class="seven color_wit" onclick="location.href='/kleur-wit/spelregels';">Spelregels</div>
          <div class="eight color_wit" onclick="location.href='/kleur-wit/legende';" >Legende</div>
        </div>

        <div class="question_mark_container color_wit" onclick="location.href='/kleur-wit/kijkwijzers/';">
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