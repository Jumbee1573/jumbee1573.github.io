"use strict";

$(document).ready(function () {
  $(".header__menu-mobile, .header__menu").on("click", "a", function (event) {
    // event.preventDefault(); 
    var id = $(this).attr('href'),
        top = $(id).offset().top;
    $('body,html').animate({
      scrollTop: top
    }, 1200);
  });
});
var isFlag = true;
var menu = document.querySelectorAll('#menu')[0];
var body = document.querySelectorAll('body')[0];

var menuu = function menuu() {
  if (isFlag) {
    body.classList.add('hidden');
    menu.classList.add('menuUp');
    menu.classList.remove('menuDown');
    isFlag = false;
  } else {
    body.classList.remove('hidden');
    menu.classList.add('menuDown');
    menu.classList.remove('menuUp');
    isFlag = true;
  }
};

var menuClose = function menuClose() {
  var menu = document.querySelectorAll('#menu')[0];
  var body = document.querySelectorAll('body')[0];
  menu.classList.add('menuDown');
  body.classList.remove('hidden');
  menu.classList.remove('menuDown');
  menu.classList.remove('menuUp');
  isFlag = !isFlag;
};