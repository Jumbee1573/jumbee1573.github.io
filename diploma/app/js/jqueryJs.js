$(document).ready(() => {

    let isFlagCourse = true;
    $(".fade").fadeOut(0);

    $(".header__menu-mobile, .header__menu, .book__menu_main").on("click","a", function (event) {
        // event.preventDefault(); 
        var id  = $(this).attr('href'),
        top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1200);
    });

    $(".course__button").click(() => {
        if(isFlagCourse) {
            $(".fade").fadeIn('linear')
            $(".course__button").text('Скрыть');
            isFlagCourse = false;
        } else {
            $(".fade").fadeOut('linear')
            $(".course__button").text('Показать еще...');
            isFlagCourse = true;
        }
    });

    $(window).scroll(function() {
        if ($(window).scrollTop() > 150) {
            $('.top__button').addClass('show');
        } else {
            $('.top__button').removeClass('show');
        }
    });

    $('.top__button').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });

    $(window).scroll(function(){
        $("a").each(function() {
        let window_top = $(window).scrollTop();
        let h2 = $(this).offset().top;
        let item = $(this).attr('href');
            if (window_top > h2 - 120){
                $('#book__visible_false').find('a').removeClass('active');                        
                $('#book__visible_false').find('a[href="' + item + '"]').addClass('active');                        
            }
            else{
                $('#book__visible_false').find('a[href="' + item + '"]').removeClass('active');                      
            };
        });
    });
});