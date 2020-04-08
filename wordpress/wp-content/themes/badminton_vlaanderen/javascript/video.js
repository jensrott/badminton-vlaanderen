jQuery(document).ready(function ($) {
  // TODO: not fully ready yet
  $('#video_id').on('loadstart', function (event) {
    $(this).addClass('loading');
    console.log("videooo");
  });
  $('#video_id').on('canplay', function (event) {
    $(this).removeClass('loading');
    $(this).attr('poster', '');
  });
})
