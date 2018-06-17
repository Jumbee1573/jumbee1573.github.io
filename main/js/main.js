$(document).ready(function() {
  var curPos = $(document).scrollTop();
  var height = $("body").height();
  var scrollTime = 900;
  $("body,html").animate({
    "scrollTop": height
  }, scrollTime);

  $('.en').on('click', function() {
    $('[data-en]').each(function() {
      $(this).text($(this).attr('data-en'));
    });
    $(this).addClass('active');
    $('.ru').removeClass('active');
    $('form').find("#changeFirst").each(function() {
      $(this).attr("placeholder", "Your name and surname");
    });
    $('form').find("#changeSecond").each(function() {
      $(this).attr("placeholder", "Your e-mail");
    });
  });


  $('.ru').on('click', function() {
    $('[data-ru]').each(function() {
      $(this).text($(this).attr('data-ru'));
    });
    $(this).addClass('active');
    $('.en').removeClass('active');
    $('form').find("#changeFirst").each(function() {
      $(this).attr("placeholder", "Ваше имя и фамилия");
    });
    $('form').find("#changeSecond").each(function() {
      $(this).attr("placeholder", "Ваш e-mail");
    });
  });
});


new WOW().init();
