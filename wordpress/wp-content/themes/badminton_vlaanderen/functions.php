<?php 

/**
 * Proper way to enqueue scripts and styles
 */

/* Loading in libraries and linking */
function wpdocs_theme_name_scripts() {

    /* Libraries: 
       bootstrap for grid,
       jquery for header dropdown,
       fontawesome for icons,
       slick.js for carousel,
    */
    
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
    wp_enqueue_script('jquery-migrate', 'http://code.jquery.com/jquery-migrate-1.2.1.min.js');
    
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' );
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );

    wp_enqueue_style('font-awesome-css', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css'); /* Hamburger icon , social media, back-arrow, question-mark icon */

    /* Carousel library */ 
    wp_enqueue_script('carousel-js', get_template_directory_uri() . '/library/slick/slick.js');
    wp_enqueue_style('carousel-css', get_template_directory_uri() . '/library/slick/slick.css');
    wp_enqueue_style( 'carousel-css-theme',  get_template_directory_uri() . '/library/slick/slick-theme.css' ); /* Slick css theme for arrows and dots */

    /* Root styles */
    wp_enqueue_style( 'style', get_stylesheet_uri());

    /* Custom styles */
    wp_enqueue_style( 'header',  get_template_directory_uri() . '/styles/header.css' ); // Header
    wp_enqueue_style( 'footer',  get_template_directory_uri() . '/styles/footer.css' ); // Footer
    wp_enqueue_style( 'front-page',  get_template_directory_uri() . '/styles/front-page.css' ); // Home page

    wp_enqueue_style( 'page',  get_template_directory_uri() . '/styles/page.css' ); // A home color page like rood, groen, blauw...
    wp_enqueue_style( 'kleur-rood_subpage_klussce',  get_template_directory_uri() . '/styles/subpage.css' ); // Subpage
    wp_enqueue_style( 'kleur-rood_detailpage_slagtechniek',  get_template_directory_uri() . '/styles/detailpage.css' ); // Detailpage for the videos and text from the book   
  
    wp_enqueue_style( 'bestellen_subpagina',  get_template_directory_uri() . '/styles/bestellen.css' );  

    wp_enqueue_style( 'videos_subpagina',  get_template_directory_uri() . '/styles/videos.css' );  

    wp_enqueue_style( 'kijkwijzers_subpagina',  get_template_directory_uri() . '/styles/kijkwijzers.css' );
    
    /* Custom scripts I made */
    
    /* Slick.js carousel */
    wp_enqueue_script( 'carousel',  get_template_directory_uri() . '/javascript/carousel.js' );

    /* Smooth scroll jquery */
    wp_enqueue_script( 'smooth',  get_template_directory_uri() . '/javascript/smooth.js' );

    /* Hamburger menu and about button dropdown with jquery */
    wp_enqueue_script( 'dropdown',  get_template_directory_uri() . '/javascript/dropdown.js' );

    /* Video loading screen */
    wp_enqueue_script( 'video',  get_template_directory_uri() . '/javascript/video.js' );
}

add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

function wpb_theme_setup() {

  add_theme_support('post-thumbnails'); // now we can add images

  register_nav_menus(array(
    'primary' => __('Primary Menu') // Localistation function from wordpress , add it around the static text we write

  ));

  // Enable Post formats
  add_theme_support('post-formats', array('aside', 'gallery'));
}

add_action('init', 'wpb_theme_setup');