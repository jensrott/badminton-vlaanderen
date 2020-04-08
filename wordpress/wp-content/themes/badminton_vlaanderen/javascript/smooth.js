/* Animate Smooth Scroll */

jQuery(document).ready(function ($) {

  /* Go to bottom of the page */
  function arrowDown() {
    // console.log('about-section');
    const about_section = $('.about-section-with-images').position().top;

    $('html, body').animate(
      {
        scrollTop: about_section
      },
      1400
    );
  }

  /* Go back to top button */
  function backButton() {
    // console.log('back_button');

    $('html, body').animate(
      {
        scrollTop: 0
      },
      1400
    );
  }

  /* Scroll to videos from coachworkbook */
  function coachVideos() {
    // console.log('coachvideos');
    const coachVideos = $('#coach_videos').position().top;

    $('html, body').animate(
      {
        scrollTop: coachVideos
      },
      800
    );
  }

  /* Select the buttons and use the functions */
  $('#down-arrow').on('click', arrowDown)
  $('#back-button').on('click', backButton)
  $('#videos-button').on('click', coachVideos)
})
