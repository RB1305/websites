<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="pdPlBPs7ReD3XhAM6NIsSCIA5iC921i6yU1Vq6JxX6Y">
    <meta name="description" content="Создаём и продаём сайты любой сложности на заказ за низкие цены! А также занимаемся их продвижением и рекламой.">
    <meta name="keywords" content="HTML, CSS, javascript, создание и продвижение сайтов, сайт на заказ, заказ официальный сайт, верстка сайтов, Разработка сайтов, сделать сайт, сайт для бизнеса, продвижение бизнеса">
    <meta name="author" content="Rustam Bobobekov">
    <title>RB_digital - создание сайтов и их продвижение...</title>
    <!-- Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?=$config['base']['url'] ?>/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=$config['base']['url'] ?>/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=$config['base']['url'] ?>/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?=$config['base']['url'] ?>/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="<?=$config['base']['url'] ?>/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#241b1b">
    <!-- Web Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7cPlayfair+Display:400i" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Plugins-->
    <link href="<?=$config['base']['url'] ?>/css/plugins.min.css" rel="stylesheet">
    <!-- Template core CSS-->
    <link href="<?=$config['base']['url'] ?>/css/template.css" rel="stylesheet">
    <!-- Animate -->
    <link rel="stylesheet" href="<?=$config['base']['url'] ?>/css/animate.css">
    <script src="<?=$config['base']['url'] ?>/js/custom/wow.js"></script>
    <script>
        new WOW().init();
    </script>

    <!--Fonts-->
    <!--        <link rel="stylesheet" href="<?=$config['base']['url'] ?>/fonts/font.woff">-->
    <!--        <link rel="stylesheet" href="<?=$config['base']['url'] ?>/fonts/fa-brands-400.woff2">-->
    <link rel="stylesheet" href="<?=$config['base']['url'] ?>/fonts/qwe/map/Simple-Line-Icons.woff2">
    <link rel="stylesheet" href="<?=$config['base']['url'] ?>/fonts/qwe/map/Simple-Line-Icons.woff">
    <link rel="stylesheet" href="<?=$config['base']['url'] ?>/fonts/themify.woff">
</head>
<body>

<!-- Preloader-->
<div class="page-loader">
    <div class="page-loader-inner">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<!-- Preloader end-->


<!-- Header-->
<header class="header header-transparent">
    <div class="container-fluid">
        <!-- Brand-->
        <div class="col-3">
            <div class="inner-header">
                <a class="inner-brand" id="dom0">
                    <img src="<?=$config['base']['url'] ?>/images/Logotip.png" alt="">
                </a>
            </div>
        </div>
        <!-- Navigation-->
        <div class="inner-navigation collapse">
            <div class="inner-nav">
                <ul>
                    <li class="menu-item-has-children menu-item-has-mega-menu"><a id="dom1" href="<?php if(!isset($_GET['view']) || $_GET['view'] == 'index'){ echo '#dom'; } else { echo '?view=index#dom';}?>"><span class="menu-item-span">Домой</span></a>
                    </li>
                    <li class="menu-item-has-children menu-item-has-mega-menu"><a id="port" href="<?php if(!isset($_GET['view']) || $_GET['view'] == 'index'){ echo '#portfolio'; } else { echo '?view=index#portfolio';}?>"><span href="#portfolio"  class="menu-item-span">Портфолио</span></a>
                    </li>
                    <li class="menu-item-has-children menu-item-has-mega-menu"><a id="uslug" href="<?php if(!isset($_GET['view']) || $_GET['view'] == 'index'){ echo '#uslugi'; } else { echo '?view=index#uslugi';}?>"><span class="menu-item-span">Услуги</span></a>
                    </li>
                    <li class="menu-item-has-children"><a id="onas1" href="<?php if(!isset($_GET['view']) || $_GET['view'] == 'index'){ echo '#onas'; } else { echo '?view=index#onas';}?>"><span class="menu-item-span">О нас</span></a>
                    </li>
                    <li class="menu-item-has-children"><a id="kontact1" href="#kontact"><span class="menu-item-span">Контакты</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="extra-nav">
            <ul>
                <!--                        <li><a class="top-bar-cart" href="shop-cart-1.html"><span class="menu-item-span"><i class="ti-shopping-cart"></i><span>3</span></span></a></li>-->
                <li><a class="off-canvas-open" href="#"><span class="menu-item-span"><i class="ti-menu"></i></span></a></li>
                <li class="nav-toggle"><a href="#" data-toggle="collapse" data-target=".inner-navigation"><span class="menu-item-span"><i class="ti-menu"></i></span></a></li>
            </ul>
        </div>
    </div>
</header>
<!-- Header end-->

<!-- Wrapper-->
<div  id="dom" class="wrapper">
    <!-- Hero-->
    <section class="module-cover parallax text-center fullscreen" data-background="<?=$config['base']['url'] ?>/images/module-2.jpg" data-overlay="0.6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong class="wow animate__animated animate__zoomIn" data-wow-duration="3s">Веб-разработка</strong></h1>
                        <p class="m-b-40 wow animate__animated animate__zoomIn" data-wow-duration="3s">Веб-разработка являясь необходимым шагом для развития вашего бизнеса,<br> она выводит ваш бизнес на новый уровень, поможет охватить более обширную аудиторию и расширит ваши контакты</p>
                        <p><a class="btn btn-lg btn-circle btn-brand" href="https://wa.me/+79301527324">Написать</a></p>
                    </div>
                </div>
            </div>
    </section>
    <!-- Hero end-->

<?php include ($config['base']['path'].'/views/site/'.$views.'.php');?>


<!-- Footer-->
<footer id="kontact" class="footer">
    <div class="footer-widgets">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- Text widget-->
                    <aside class="widget widget-text">
                        <div class="widget-title">
                            <h6>Контакты</h6>
                        </div>

                        <div class="textwidget">
                            <p>
                                <a href="mailto:rustamodilov13052002@gmail.com">E-mail: rustamodilov13052002@gmail.com</a><br>
                                <a href="tel: +79301527324">Телефон: 8 930 152 7324</a><br>
                            </p>
                            <ul class="social-icons">
                                <li><a href="https://wa.me/+79301527324"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="https://instagram.com/rb_digital_agency"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://tlgg.ru/@rb_digital_agency"><i class="fab fa-telegram-plane"></i></a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="col-md-3">
                    <!-- Recent entries widget-->
                    <aside class="widget widget-recent-entries">
                        <div class="widget-title">
                            <ul>
                                <li><h6><a id="port1" href="#portfolio">Портфолио.</a></h6></li>
                                <li><h6><a id="uslug1" href="#uslugi">Услуги.</a></h6></li>
                                <li><h6><a id="onas2" href="#onas">О нас.</a></h6></li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="col-md-3">
                    <!-- Twitter widget-->
                    <aside class="widget twitter-feed-widget">
                        <div class="widget-title">
                            <h6>Бесплатная консультация </h6>
                        </div>
                        <div>
                            <p>В результате вы получите ответы на все интересующие вас вопросы, а также рекомендации, которые могут вам помочь в дальнейшем. Консультация абсолютно БЕСПЛАТНА.</p>
                        </div>
                    </aside>
                </div>
                <div class="col-md-3">
                    <!-- Recent works-->
                    <aside class="widget widget-recent-works">
                        <div class="widget-title">
                            <h6>Портфолио</h6>
                        </div>
                        <ul>
                            <li><a href="views/site/rtm_uz/RTM.html"><img src="<?=$config['base']['url'] ?>/images/widgets/1.jpg" alt=""></a></li>
                            <li><a href="views/site/ActiveBox/index.html"><img src="<?=$config['base']['url'] ?>/images/widgets/2.jpg" alt=""></a></li>
                            <li><a href="views/site/HTML/index.html"><img src="<?=$config['base']['url'] ?>/images/widgets/3.jpg" alt=""></a></li>
                            <li><a href="views/site/sunlightparticles/index.html"><img src="<?=$config['base']['url'] ?>/images/widgets/4.jpg" alt=""></a></li>
                            <li><a href="views/site/tasksk/index.html"><img src="<?=$config['base']['url'] ?>/images/widgets/5.jpg" alt=""></a></li>
                            <li><a href="views/site/nava/index.html"><img src="<?=$config['base']['url'] ?>/images/widgets/6.jpg" alt=""></a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>© 2016 RB_digital, Все права защищены. Дизайн с любовью от  <a href="#"> RB_digital</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end-->
</div>
<!-- Wrapper end-->
<!-- Off canvas-->
<div class="off-canvas-sidebar">
    <div class="off-canvas-sidebar-wrapper">
        <div class="off-canvas-header"><a class="off-canvas-close" href="#"><span class="ti-close"></span></a></div>
        <div class="off-canvas-content">
            <!-- Text widget-->
            <aside class="widget widget-text">
                <div class="textwidget">
                    <p class="text-center"><img src="<?=$config['base']['url'] ?>/images/Logotip.png" alt="" width="180px"></p>
                    <p class="text-center">Создаём самые крутые и креативные веб-сайты.</p>
                </div>
            </aside>
            <!-- Recent portfolio widget-->
            <aside class="widget widget-recent-works" style="margin-bottom: 20px">
                <ul>
                    <li><a href="views/site/rtm_uz/RTM.html"><img src="<?=$config['base']['url'] ?>/images/widgets/1.jpg" alt=""></a></li>
                    <li><a href="views/site/ActiveBox/index.html"><img src="<?=$config['base']['url'] ?>/images/widgets/2.jpg" alt=""></a></li>
                    <li><a href="views/site/HTML/index.html"><img src="<?=$config['base']['url'] ?>/images/widgets/3.jpg" alt=""></a></li>
                    <li><a href="views/site/sunlightparticles/index.html"><img src="<?=$config['base']['url'] ?>/images/widgets/4.jpg" alt=""></a></li>
                    <li><a href="views/site/tasksk/index.html"><img src="<?=$config['base']['url'] ?>/images/widgets/5.jpg" alt=""></a></li>
                    <li><a href="views/site/nava/index.html"><img src="<?=$config['base']['url'] ?>/images/widgets/6.jpg" alt=""></a></li>
                    <</ul>
            </aside>
            <!-- Telephone Number-->
            <aside class="widget widget-text" style="margin-bottom: 10px; ">
                <div class="textwidget">
                    <h6 class="text-center"><a href="tel: +79301527324">Телефон: 8 930 152 7324</a><br></h6>
                </div>
            </aside>

            <!-- Social Icons-->
            <ul class="social-icons text-center">
                <li><a href="https://wa.me/+79301527324"><i class="fab fa-whatsapp"></i></a></li>
                <li><a href="https://instagram.com/rb_digital_agency"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://tlgg.ru/@rb_digital_agency"><i class="fab fa-telegram-plane"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Off canvas end-->

 <!-- To top button -->
<!--<a class="scroll-top" href="#top"><i class="fas fa-angle-up"></i></a>-->
<!--<span class="iconify-inline" data-icon="fa-solid:home"></span>-->
<!-- Scripts-->
<script src="<?=$config['base']['url'] ?>/js/custom/jquery.min.js"></script>
<script src="<?=$config['base']['url'] ?>/js/custom/popper.min.js"></script>
<script src="<?=$config['base']['url'] ?>/js/bootstrap/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0rANX07hh6ASNKdBr4mZH0KZSqbHYc3Q"></script>
<script src="<?=$config['base']['url'] ?>/js/custom/plugins.min.js"></script>
<script src="<?=$config['base']['url'] ?>   /js/custom/custom.min.js"></script>
<script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>

<script>
    $(function () {
        $("#dom1").click(function (){
            let a = $("#dom").offset().top;
            $("html,body").animate({"scrollTop":a}, 1000);
        })
        $("#dom0").click(function (){
            let a = $("#dom").offset().top;
            $("html,body").animate({"scrollTop":a}, 1000);
        })


        $("#port").click(function (){
            let a = $("#portfolio").offset().top;
            $("html,body").animate({"scrollTop":a}, 1000);
        })
        $("#port1").click(function (){
            let a = $("#portfolio").offset().top;
            $("html,body").animate({"scrollTop":a}, 1000);
        })


        $("#uslug").click(function (){
            let a = $("#uslugi").offset().top;
            $("html,body").animate({"scrollTop":a}, 1000);
        })
        $("#uslug1").click(function (){
            let a = $("#uslugi").offset().top;
            $("html,body").animate({"scrollTop":a}, 1000);
        })


        $("#onas1").click(function (){
            let a = $("#onas").offset().top;
            $("html,body").animate({"scrollTop":a}, 1000);
        })
        $("#onas2").click(function (){
            let a = $("#onas").offset().top;
            $("html,body").animate({"scrollTop":a}, 1000);
        })

        $("#kontact1").click(function (){
            let a = $("#kontact").offset().top;
            $("html,body").animate({"scrollTop":a}, 1000);
        })
    })
</script>
</body>
</html>