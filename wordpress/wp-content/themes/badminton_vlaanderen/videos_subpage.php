<?php /* Videos page */
/* Template Name: Videos subpagina */
/* The page where we can choose between which type of videos we want to see */

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
  <?php get_header() ?> 
  
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <article class="videos" id="post-<?php the_ID(); ?>">
      <div class="container">
        <div class="videos_container">
          <div class="buttons_container_videos">
            <a href='/'><i class="fas fa-home"></i></a>
          </div>
          <!-- <?php //the_content(); ?> Not sure if we need this in subpage -->
          <div class="main-title">Badminton in beeld</div>
          <p style="margin-bottom: 2rem;">Op deze pagina vindt u een aantal leuke en informatieve video’s die badminton belichten in zijn vele aspecten. <br>
            De technische video’s voor de trainer zijn beschikbaar bij de afzonderlijke vaardigheden onder elk van de 5 trajecten.
          </p>
          <?php the_content(); ?> <!-- Filmpjes toevoegen kan via de backend -->
      </div>
    </article>
  <?php endwhile; ?>
  <?php get_footer(); ?>
  <?php wp_footer() ?>
  </body>
  </html>