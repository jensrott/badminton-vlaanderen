<?php 
/* Kleur wit Kijkwijzers page */
/* Template Name: Kleur wit subpagina Kijkwijzers */
?>

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

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <article class="post-<?php the_ID(); ?>">
          <div class="kijkwijzers_container">
            
            <div class="container"> <!-- Bootstrap container to get sides -->
              <div class="post_content">
                <div class="buttons_container">
                  <a href='/kleur-wit/'><i class="fas fa-arrow-left"></i></a>
                </div>
                  <?php the_content(); ?> <!-- Everything happens in here, we can put data here through the wordpress backend -->
              </div> 
            </div>

          </div>
        </article>
      <?php endwhile; ?>
      </div>
    

    <!-- <div class="wrapper" class="color_wit">
      <button class="one" onclick="location.href='kleur-wit/kijkwijzers/kijkwijzer1/';">Kijkwijzer1</button>
      <button class="two" onclick="location.href='kleur-wit/kijkwijzers/kijkwijzer2/';">Kijkwijzer2</button>
      <button class="three" onclick="location.href='kleur-wit/kijkwijzers/kijkwijzer3/';">Kijkwijzer3</button>
      <button class="four" onclick="location.href='kleur-wit/kijkwijzers/kijkwijzer4/';">Kijkwijzer4</button>
      <button class="five" onclick="location.href='kleur-wit/kijkwijzers/kijkwijzer5/';">Kijkwijzer5</button>
      <button class="six disabled"></button>
      
    </div> -->
    <footer id="footer">
      <?php get_footer(); ?>
    </footer>
  </div>
  <?php wp_footer() ?>
  </body>
  </html>