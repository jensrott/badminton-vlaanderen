<?php 
/* Kleur wit Hoe vervang ik de grip van mijn handvat page */
/* Template Name: Kleur wit detailpagina Hoe vervang ik de grip van mijn handvat */

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
      <?php get_header() ?> 
      
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>">
          <div class="hoe_leg_je_een_gripje_container">
            
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
    <footer id="footer">
      <?php get_footer(); ?>
    </footer>
  </div>
  <?php wp_footer() ?>
  </body>
  </html>
  <?php 
