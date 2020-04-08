/* Hamburger menu */

jQuery(document).ready(function ($) {
  $(".icon").click(function () {
    $(".hamburger-dropdown").slideToggle("fast");
    // console.log('hamburger');
  });
})

/* About sub dropdown */
jQuery(document).ready(function ($) {
  $(".about").click(function () {
    $(".hamburger-dropdown_content_about").slideToggle({
      duration: 300,
      start: function () {
        jQuery(this).css('display', 'flex');
      }
    });
  })
})