<?php /* Over Subsidies page */
/* Template Name: Over Subsidies detailpagina */

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
          <div class="container">
            <div class="buttons_container">
              <a href='/'><i class="fas fa-home"></i></a>
            </div>
            <?php the_content(); ?> 
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