<? 
	require_once dirname( __FILE__ ) . '/db/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../css/course.css">
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/fonts.css">
	<link rel="stylesheet" href="../css/courseMedia.css">
	<link rel="icon" type="image/png" href="../img/favicon.png" />
	<link rel="apple-touch-icon-precomposed" href="../img/favicon.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Знакомство с HTML, CSS, JavaScript</title>
</head>
<body>    

    <!-- <div class="preloader">
        <span class="preloader__animation">
            <img class="preloader__animation_atom" src="../img/logo.svg" alt="GuruWeb">
        </span>
    </div> -->

    <div class="top__button_grey">
        <a class="top__button"><i class="fas fa-chevron-up"></i></a>
    </div>
    
	<main class="book">
        <aside class="book__aside"  id="book__visible_false">
            <div class="book__back book__item_border">
                <div class="book__back_item">
                    <a href="../index.php"><i class="fas fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <nav class="book__menu">
                <ul class="book__menu_wrapper">
                    <li>
                        <a class="book__menu_item book__menu_item_title book__item_border" 
                        href="#">Знакомство с HTML, CSS, JavaScript</a>
                    </li>
                    <li>
                        <ul class="book__menu_main">
                            <li>
                                <a class="book__menu_item active"
                                href="#semantic-markup">Семантическая вёрстка</a>
                            </li>
                            <li>
                                <a class="book__menu_item" 
                                href="#markup-validation">Валидный HTML</a>
                            </li>
                            <li>
                                <a class="book__menu_item" 
                                href="#css-selectors-and-rules">CSS-правила и селекторы</a>
                            </li>
                            <li>
                                <a class="book__menu_item" 
                                href="#css-advanced">CSS. Погружение</a>
                            </li>
                            <li>
                                <a class="book__menu_item" 
                                href="#divide-and-impera">Разделяй и властвуй</a>
                            </li>
                            <li>
                                <a class="book__menu_item" 
                                href="#javascript-introduction">Немного о JavaScript</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="book__mrc">
                <span class="book__mrc_description"> 
					БГУИР Филиал "Минский радиотехнический колледж"
                </span>
            </div>
        </aside>
        <article class="article__animation" id="content__article">
            <header class="article__header">
                <button class="menu__button" onclick="bookMenu()">
                    <i class="fas fa-bars"></i>
                </button>
            </header>
            
            <section class="section__wrapper">
                <span class="course__subtitle">
                    <a href="#semantic-markup" id="semantic-markup">
                        Семантическая вёрстка
                    </a>
                </span>
                <p id="book__menu_ite">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Veritatis, mollitia quod? Fugiat ipsam veniam expedita distinctio iusto quod 
                    fuga unde! Repellendus, incidunt fugiat error optio suscipit ducimus quasi 
                    nobis blanditiis similique consectetur dignissimos labore distinctio ipsa 
                    ipsam provident quibusdam quidem in placeat vero repudiandae laudantium. 
                    Accusamus sequi, omnis consequuntur autem ut possimus libero. Delectus ad, 
                    nihil eos modi natus accusantium, minima dolores neque odio cum optio 
                    architecto quod autem aliquid sed deserunt vitae reiciendis omnis ea odit 
                    eligendi obcaecati corrupti. Dolor ullam officiis optio deleniti, temporibus 
                    quidem ab odit a quibusdam corporis laboriosam natus facilis rem, animi maxime 
                    exercitationem tempore, hic distinctio tenetur modi. Saepe eius excepturi ab 
                    error, adipisci eaque velit rerum minima, quaerat, soluta doloremque corporis 
                    quibusdam dolor reiciendis libero magni sint ducimus provident. Possimus 
                    aliquid, nemo dolor reprehenderit animi eligendi voluptate ipsam tempora 
                    suscipit facere in fuga vel. Perferendis minima optio in sint, dolore facere 
                    aperiam et rerum, amet nesciunt asperiores similique ut vitae expedita tenetur 
                    ratione praesentium sit impedit autem possimus rem repellat consequuntur! 
                    Architecto quam doloremque quo molestiae maiores illo, dicta earum libero 
                    sit officia? Amet earum veritatis dolorem expedita sint natus voluptatem vel 
                    quas, vitae illo quisquam ex? Velit aliquam omnis numquam reprehenderit magnam.
                </p>
                <span class="course__subtitle">
                    <a href="#markup-validation" id="markup-validation">
                        Валидный HTML
                    </a>
                </span>
                <p id="book__menu_ite">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Veritatis, mollitia quod? Fugiat ipsam veniam expedita distinctio iusto quod 
                    fuga unde! Repellendus, incidunt fugiat error optio suscipit ducimus quasi 
                    nobis blanditiis similique consectetur dignissimos labore distinctio ipsa 
                    ipsam provident quibusdam quidem in placeat vero repudiandae laudantium. 
                    Accusamus sequi, omnis consequuntur autem ut possimus libero. Delectus ad, 
                    nihil eos modi natus accusantium, minima dolores neque odio cum optio 
                    architecto quod autem aliquid sed deserunt vitae reiciendis omnis ea odit 
                    eligendi obcaecati corrupti. Dolor ullam officiis optio deleniti, temporibus 
                    quidem ab odit a quibusdam corporis laboriosam natus facilis rem, animi maxime 
                    exercitationem tempore, hic distinctio tenetur modi. Saepe eius excepturi ab 
                    error, adipisci eaque velit rerum minima, quaerat, soluta doloremque corporis 
                    quibusdam dolor reiciendis libero magni sint ducimus provident. Possimus 
                    aliquid, nemo dolor reprehenderit animi eligendi voluptate ipsam tempora 
                    suscipit facere in fuga vel. Perferendis minima optio in sint, dolore facere 
                    aperiam et rerum, amet nesciunt asperiores similique ut vitae expedita tenetur 
                    ratione praesentium sit impedit autem possimus rem repellat consequuntur! 
                    Architecto quam doloremque quo molestiae maiores illo, dicta earum libero 
                    sit officia? Amet earum veritatis dolorem expedita sint natus voluptatem vel 
                    quas, vitae illo quisquam ex? Velit aliquam omnis numquam reprehenderit magnam.
                </p>
                <span class="course__subtitle">
                    <a href="#css-selectors-and-rules" id="css-selectors-and-rules">
                        CSS-правила и селекторы
                    </a>
                </span>
                <p id="book__menu_ite">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Veritatis, mollitia quod? Fugiat ipsam veniam expedita distinctio iusto quod 
                    fuga unde! Repellendus, incidunt fugiat error optio suscipit ducimus quasi 
                    nobis blanditiis similique consectetur dignissimos labore distinctio ipsa 
                    ipsam provident quibusdam quidem in placeat vero repudiandae laudantium. 
                    Accusamus sequi, omnis consequuntur autem ut possimus libero. Delectus ad, 
                    nihil eos modi natus accusantium, minima dolores neque odio cum optio 
                    architecto quod autem aliquid sed deserunt vitae reiciendis omnis ea odit 
                    eligendi obcaecati corrupti. Dolor ullam officiis optio deleniti, temporibus 
                    quidem ab odit a quibusdam corporis laboriosam natus facilis rem, animi maxime 
                    exercitationem tempore, hic distinctio tenetur modi. Saepe eius excepturi ab 
                    error, adipisci eaque velit rerum minima, quaerat, soluta doloremque corporis 
                    quibusdam dolor reiciendis libero magni sint ducimus provident. Possimus 
                    aliquid, nemo dolor reprehenderit animi eligendi voluptate ipsam tempora 
                    suscipit facere in fuga vel. Perferendis minima optio in sint, dolore facere 
                    aperiam et rerum, amet nesciunt asperiores similique ut vitae expedita tenetur 
                    ratione praesentium sit impedit autem possimus rem repellat consequuntur! 
                    Architecto quam doloremque quo molestiae maiores illo, dicta earum libero 
                    sit officia? Amet earum veritatis dolorem expedita sint natus voluptatem vel 
                    quas, vitae illo quisquam ex? Velit aliquam omnis numquam reprehenderit magnam.
                </p>
                <span class="course__subtitle">
                    <a href="#css-advanced" id="css-advanced">
                        CSS. Погружение
                    </a>
                </span>
                <p id="book__menu_ite">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Veritatis, mollitia quod? Fugiat ipsam veniam expedita distinctio iusto quod 
                    fuga unde! Repellendus, incidunt fugiat error optio suscipit ducimus quasi 
                    nobis blanditiis similique consectetur dignissimos labore distinctio ipsa 
                    ipsam provident quibusdam quidem in placeat vero repudiandae laudantium. 
                    Accusamus sequi, omnis consequuntur autem ut possimus libero. Delectus ad, 
                    nihil eos modi natus accusantium, minima dolores neque odio cum optio 
                    architecto quod autem aliquid sed deserunt vitae reiciendis omnis ea odit 
                    eligendi obcaecati corrupti. Dolor ullam officiis optio deleniti, temporibus 
                    quidem ab odit a quibusdam corporis laboriosam natus facilis rem, animi maxime 
                    exercitationem tempore, hic distinctio tenetur modi. Saepe eius excepturi ab 
                    error, adipisci eaque velit rerum minima, quaerat, soluta doloremque corporis 
                    quibusdam dolor reiciendis libero magni sint ducimus provident. Possimus 
                    aliquid, nemo dolor reprehenderit animi eligendi voluptate ipsam tempora 
                    suscipit facere in fuga vel. Perferendis minima optio in sint, dolore facere 
                    aperiam et rerum, amet nesciunt asperiores similique ut vitae expedita tenetur 
                    ratione praesentium sit impedit autem possimus rem repellat consequuntur! 
                    Architecto quam doloremque quo molestiae maiores illo, dicta earum libero 
                    sit officia? Amet earum veritatis dolorem expedita sint natus voluptatem vel 
                    quas, vitae illo quisquam ex? Velit aliquam omnis numquam reprehenderit magnam.
                </p>
                <span class="course__subtitle">
                    <a href="#divide-and-impera" id="divide-and-impera">
                        Разделяй и властвуй
                    </a>
                </span>
                <p id="book__menu_ite">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Veritatis, mollitia quod? Fugiat ipsam veniam expedita distinctio iusto quod 
                    fuga unde! Repellendus, incidunt fugiat error optio suscipit ducimus quasi 
                    nobis blanditiis similique consectetur dignissimos labore distinctio ipsa 
                    ipsam provident quibusdam quidem in placeat vero repudiandae laudantium. 
                    Accusamus sequi, omnis consequuntur autem ut possimus libero. Delectus ad, 
                    nihil eos modi natus accusantium, minima dolores neque odio cum optio 
                    architecto quod autem aliquid sed deserunt vitae reiciendis omnis ea odit 
                    eligendi obcaecati corrupti. Dolor ullam officiis optio deleniti, temporibus 
                    quidem ab odit a quibusdam corporis laboriosam natus facilis rem, animi maxime 
                    exercitationem tempore, hic distinctio tenetur modi. Saepe eius excepturi ab 
                    error, adipisci eaque velit rerum minima, quaerat, soluta doloremque corporis 
                    quibusdam dolor reiciendis libero magni sint ducimus provident. Possimus 
                    aliquid, nemo dolor reprehenderit animi eligendi voluptate ipsam tempora 
                    suscipit facere in fuga vel. Perferendis minima optio in sint, dolore facere 
                    aperiam et rerum, amet nesciunt asperiores similique ut vitae expedita tenetur 
                    ratione praesentium sit impedit autem possimus rem repellat consequuntur! 
                    Architecto quam doloremque quo molestiae maiores illo, dicta earum libero 
                    sit officia? Amet earum veritatis dolorem expedita sint natus voluptatem vel 
                    quas, vitae illo quisquam ex? Velit aliquam omnis numquam reprehenderit magnam.
                </p>
                <span class="course__subtitle">
                    <a href="#javascript-introduction" id="javascript-introduction">
                        Немного о JavaScript
                    </a>
                </span>
                <p id="book__menu_ite">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Veritatis, mollitia quod? Fugiat ipsam veniam expedita distinctio iusto quod 
                    fuga unde! Repellendus, incidunt fugiat error optio suscipit ducimus quasi 
                    nobis blanditiis similique consectetur dignissimos labore distinctio ipsa 
                    ipsam provident quibusdam quidem in placeat vero repudiandae laudantium. 
                    Accusamus sequi, omnis consequuntur autem ut possimus libero. Delectus ad, 
                    nihil eos modi natus accusantium, minima dolores neque odio cum optio 
                    architecto quod autem aliquid sed deserunt vitae reiciendis omnis ea odit 
                    eligendi obcaecati corrupti. Dolor ullam officiis optio deleniti, temporibus 
                    quidem ab odit a quibusdam corporis laboriosam natus facilis rem, animi maxime 
                    exercitationem tempore, hic distinctio tenetur modi. Saepe eius excepturi ab 
                    error, adipisci eaque velit rerum minima, quaerat, soluta doloremque corporis 
                    quibusdam dolor reiciendis libero magni sint ducimus provident. Possimus 
                    aliquid, nemo dolor reprehenderit animi eligendi voluptate ipsam tempora 
                    suscipit facere in fuga vel. Perferendis minima optio in sint, dolore facere 
                    aperiam et rerum, amet nesciunt asperiores similique ut vitae expedita tenetur 
                    ratione praesentium sit impedit autem possimus rem repellat consequuntur! 
                    Architecto quam doloremque quo molestiae maiores illo, dicta earum libero 
                    sit officia? Amet earum veritatis dolorem expedita sint natus voluptatem vel 
                    quas, vitae illo quisquam ex? Velit aliquam omnis numquam reprehenderit magnam.
                </p>
                <iframe width="100%" height="300" src="//jsfiddle.net/jumbee1573/myp5xw87/4/embedded" allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>
            </section>
            
        </article>
    </main>
    <script>
        let bookMenuWrapperA = document.querySelectorAll('.book__menu_wrapper a');
    
        for(let i = 0; i < bookMenuWrapperA.length; i++) {
            if(bookMenuWrapperA[i].innerHTML.length > 28) {
                bookMenuWrapperA[i].innerHTML = 
                bookMenuWrapperA[i].innerHTML.slice(0, 28) + '...';
            }
        }

        if (window.matchMedia("(max-width: 424.98px)").matches) {
            for(let i = 0; i < bookMenuWrapperA.length; i++) {
                if(bookMenuWrapperA[i].innerHTML.length > 24) {
                    bookMenuWrapperA[i].innerHTML = 
                    bookMenuWrapperA[i].innerHTML.slice(0, 24) + '...';
                }
            }
        }
    </script>
    <script>
        $(window).on('load', function () {
            $('body').css('overflow', 'auto');
            var $preloader = $('.preloader'),
                $svg_anm   = $preloader.find('.preloader__animation');
            $svg_anm.fadeOut();
            $preloader.delay(100).fadeOut('slow');
        });
        $('body').css('overflow', 'hidden');
    </script>

	<script src="../tJs/jquery.js"></script>
    <script src="../tJS/main.js"></script> 
    <script src="../tJS/jqueryJs.js"></script>
</body>
</html>