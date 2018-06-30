$(document).ready(function() {

  var curPos = $(document).scrollTop();
  var height = $("body").height();
  var scrollTime = 10;
  $("body,html").animate({
    "scrollTop": height
  }, scrollTime);

  $('.en').on('click', function() {
    $('[data-en]').each(function() {
      $(this).text($(this).attr('data-en'));
    });
    $(this).addClass('active');
    $('.ru').removeClass('active');
  });

  $('.ru').on('click', function() {
    $('[data-ru]').each(function() {
      $(this).text($(this).attr('data-ru'));
    });
    $(this).addClass('active');
    $('.en').removeClass('active');
  });
});

new WOW().init();
