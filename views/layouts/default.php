<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo $title;?>
    </title>
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <!-- our custom CSS -->

    <link rel="stylesheet" href="/public/css/custom.css"/>
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xs-12">
                    <a href="" class=""><img src="/files/pics/logo.png" alt=""></a>
                </div>

                <div class="header-top">
                    <div class="col-md-3 col-xs-6">
                        <p>г.Чехов, Симферопольское шоссе, стр.6 ТЦ "Губернский", оф.202-203
                        </p>
                    </div>
                    <div class="col-md-3 col-xs-6 header-top-phone">

                        <div class="tel">
                            <span>Тел.</span>
                            <div class="ya-phone-1"><a href="tel:+79162777997"><span>+7 (916)</span> 277 79 97</a></div>
                            <!--<div class=><a href="tel:8(495)9610987"><span>+7 (495)</span> 961 09 87</a></div>-->
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="email">
                            <a href="mailto:aristo@yandex.ru">aristo@yandex.ru</a>
                        </div>
                        <a href="#callback" class="btn popup-with-form"><i class="sprite sprite-phone"></i> Обратная связь</a>
                        <button class="main_mnu_button hidden-md hidden-lg"><i class="fa fa-bars"></i></button>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <nav>
                            <ul class=""><li class="first active"><a href="/"><span>О компании</span></a></li><li><a href="#"><span>Каталог</span></a></li>
                                <li><a href="#"><span>Фото</span></a></li>
                                <li><a href="#/"><span>Отзывы</span></a></li>
                                <li><a href="#"><span>Кальякулятор стоимости</span></a></li>
                                <li><a href="mezhkomnatnyie-peregorodki-1/"><span>Записаться на замер</span></a></li>
                            </ul></nav>
                    </div>
                </div>
            </div>


<!--                <nav class="site-navigation">-->
<!--                    <a class="logo-link" href="index.php">-->
<!--                        <img src="files/pics/logo.png" alt="Логотип магазина gloevk">-->
<!--                    </a>-->
<!--                    <ul class="navigation-list">-->
<!--                        <li><a href="catalog.php">Каталог</a></li>-->
<!--                        <li><a href="delivery">Доставка</a></li>-->
<!--                        <li><a href="contacts.html">Контакты</a></li>-->
<!--                        <li><a href="blog.html">Блог</a></li>-->
<!--                    </ul>-->
<!--                </nav>-->
            </div>
        </div>

    </header>

    <div class="main-content">
        <main class="content"><?= $content; ?></main>
    </div>

<!--    --><?php //echo $content;?>

    <footer>
        <div class="container">
            <div class="row">
                <div style="bottom: 1em" class="col-md-2 col-xs-12"><a href="" class="logo-box"><img src="/files/pics/logo.png" alt=""></a></div>
                <div class="col-md-3 col-xs-6">
                    <p>г.Чехов, Симферопольское шоссе, стр.6 ТЦ "Губернский", оф.202-203</p>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="tel">
                        <span>Тел.</span>
                        <div class="ya-phone-1"><a href="tel:+79162777997">+7 (916)-277-79-97</a></div>
                        <!--<div class=><a href="tel:8(495)9610987"><span>+7 (495)</span> 961 09 87</a></div>-->
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="email">
                        <a href="mailto:aristo@yandex.ru">aristo@yandex.ru</a>
                    </div>
                    <a href="#callback" class="btn popup-with-form"><i class="sprite sprite-phone"></i> Обратная связь</a>
                </div>
            </div>
        </div>
        <script src="callibri/callibri.js" type="text/javascript" charset="utf-8"></script>
    </footer>

<!--    <footer class="site-footer">-->
<!--        <div class="container">-->
<!--            <p class="copyright">© Oleg, 2022</p>-->
<!--            <ul class="navigation-list">-->
<!--                <li><a href="catalog.php">Каталог</a></li>-->
<!--                <li><a href="delivery.html">Доставка</a></li>-->
<!--                <li><a href="contacts.html">Контакты</a></li>-->
<!--            </ul>-->
<!--            <ul class="social-list">-->
<!--                <li>-->
<!--                    <a class="social-link-twitter" href="https://twitter.com">-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a class="social-link-instagram" href="https://instagram.com">-->
<!--                    </a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </footer>-->

</body>
</html>