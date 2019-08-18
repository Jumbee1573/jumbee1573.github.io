"use strict";

var menu = document.querySelector('#menu');
var book = document.querySelector('#book__visible_false');
var contentArticle = document.querySelector('#content__article');
var body = document.querySelector('body');

var menuu = function menuu() {
  body.classList.toggle('hidden');
  menu.classList.toggle('menuUp');
  menu.classList.toggle('menuDown');
};

var menuClose = function menuClose() {
  menu.classList.toggle('menuDown');
  body.classList.remove('hidden');
  menu.classList.remove('menuUp');
};

var bookMenu = function bookMenu() {
  book.classList.toggle('visible__false');
  contentArticle.classList.toggle('article__padding');
};

if (window.matchMedia("(max-width: 914.98px)").matches) {
  book.classList.add('visible__false');
  contentArticle.classList.add('article__padding');
}