/* Carousel on front-page */

jQuery(document).ready(function ($) {
  // console.log('carousel');
  $('.carousel-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    adaptiveHeight: true,
    dots: true,
    speed: 800,
    cssEase: "ease-in-out",

    responsive: [
      {
        breakpoint: 575,
        settings: {
          arrows: false,
          dots: false,
          slidesToShow: 1,
          autoplay: false,
          adaptiveHeight: true,
        }
      },

      {
        breakpoint: 1024,
        settings: {
          arrows: false,
          dots: false,
          slidesToShow: 1,
          autoplay: false,
          adaptiveHeight: true,
        }
      }
    ]
  });
})