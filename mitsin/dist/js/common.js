$(document).ready(function(){
$(".header__navbar").removeClass("default");
$(window).scroll(function(){
  if ($(this).scrollTop()>30) {
    $(".header__navbar").addClass("default").fadeIn('fast');
  }
  else{
    $(".header__navbar").removeClass("default").fadeIn('fast');
  };
});
});
