"use strict";

$(document).ready(function () {
  var isFlagCourse = true;
  $(".fade").fadeOut(0);
  $(".header__menu-mobile, .header__menu").on("click", "a", function (event) {
    // event.preventDefault(); 
    var id = $(this).attr('href'),
        top = $(id).offset().top;
    $('body,html').animate({
      scrollTop: top
    }, 1200);
  });
  $(".course__button").click(function () {
    if (isFlagCourse) {
      $(".fade").fadeIn('linear');
      $(".course__button").text('Скрыть');
      isFlagCourse = false;
    } else {
      $(".fade").fadeOut('linear');
      $(".course__button").text('Показать еще...');
      isFlagCourse = true;
    }
  });
  $(window).scroll(function () {
    if ($(window).scrollTop() > 150) {
      $('.top__button').addClass('show');
    } else {
      $('.top__button').removeClass('show');
    }
  });
  $('.top__button').on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, '300');
  });
});
var isFlagMenu = true;
var menu = document.querySelectorAll('#menu')[0];
var body = document.querySelectorAll('body')[0];

var menuu = function menuu() {
  if (isFlagMenu) {
    body.classList.add('hidden');
    menu.classList.add('menuUp');
    menu.classList.remove('menuDown');
    isFlagMenu = false;
  } else {
    body.classList.remove('hidden');
    menu.classList.add('menuDown');
    menu.classList.remove('menuUp');
    isFlagMenu = true;
  }
};

var menuClose = function menuClose() {
  menu.classList.add('menuDown');
  body.classList.remove('hidden');
  menu.classList.remove('menuDown');
  menu.classList.remove('menuUp');
  isFlagMenu = !isFlagMenu;
};