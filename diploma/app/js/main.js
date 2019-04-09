let menu = document.querySelector('#menu');
let book = document.querySelector('#book__visible_false');
let contentArticle = document.querySelector('#content__article');
let body = document.querySelector('body');  

let menuu = () => {
    body.classList.toggle('hidden');
    menu.classList.toggle('menuUp');
    menu.classList.toggle('menuDown'); 
}

let menuClose = () => {
    menu.classList.toggle('menuDown');
    body.classList.remove('hidden');
    menu.classList.remove('menuUp');
}

let bookMenu = () => {
    book.classList.toggle('visible__false');
    contentArticle.classList.toggle('article__padding');
}

if (window.matchMedia("(max-width: 914.98px)").matches) {
    book.classList.add('visible__false');
    contentArticle.classList.add('article__padding');
}