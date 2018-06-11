$(document).ready(function() {
  var curPos = $(document).scrollTop();
  var height = $("body").height();
  var scrollTime = 400;
  $("body,html").animate({
    "scrollTop": height
  }, scrollTime);
});
