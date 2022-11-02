<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ActiveBox</title>
    <link rel="stylesheet" href="<?=$config['base']['url']?>/style.css">
    <link href="https://fonts.googleapis.com/css2?
    family=Cardo:ital@1&family=Open+Sans:wght@700&family=Raleway:wght@300;400;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://www.xfont.ru/font/WebdingsRegular_10963.htm">
    <link rel="stylesheet" href="<?=$config['base']['url']?>/slick-1.8.1/slick/slick.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Описание страницы"> <!-- поисковик Google
    будет выдавать сайт под эти рубрики -->
    <meta name="google" content="notranslate">
    <meta name="keywords" content="создание сайтов, верстка сайтов..."> <!-- поисковик Яндекс
    будет выдавать сайт под эти рубрики -->
    <script src="<?=$config['base']['url']?>/jquery.js"></script>

    <!-- Favicons с сайта https://realfavicongenerator.net/ -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?=$config['base']['url']?>/image/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=$config['base']['url']?>/image/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=$config['base']['url']?>/image/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?=$config['base']['url']?>/image/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?=$config['base']['url']?>/image/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">


</head>
<body>

<!-- Sprite-->
<svg style="display:none;">
    <symbol id="facebook" viewBox="0 0 24 24">
        <path d="M16.403,9H14V7c0-1.032,0.084-1.682,1.563-1.682h0.868c0.552,0,1-0.448,
            1-1V3.064c0-0.523-0.401-0.97-0.923-1.005 C15.904,2.018,15.299,1.999,14.693,
            2C11.98,2,10,3.657,10,6.699V9H8c-0.552,0-1,0.448-1,1v2c0,0.552,0.448,1,1,
            1l2-0.001V21 c0,0.552,0.448,1,1,1h2c0.552,0,1-0.448,1-1v-8.003l2.174-0.001c0.508,
            0,0.935-0.381,0.993-0.886l0.229-1.996 C17.465,9.521,17.001,9,16.403,9z"/>
    </symbol>

    <symbol id="twitter"  viewBox="0 0 56.693 56.693">
        <path d="M52.837,15.065c-1.811,0.805-3.76,1.348-5.805,1.591c2.088-1.25,3.689-3.23,
            4.444-5.592c-1.953,1.159-4.115,2-6.418,2.454
            c-1.843-1.964-4.47-3.192-7.377-3.192c-5.581,0-10.106,4.525-10.106,10.107c0,
            0.791,0.089,1.562,0.262,2.303  c-8.4-0.422-15.848-4.445-20.833-10.56c-0.87,
            1.492-1.368,3.228-1.368,5.082c0,3.506,1.784,6.6,4.496,8.412
            c-1.656-0.053-3.215-0.508-4.578-1.265c-0.001,0.042-0.001,0.085-0.001,0.128c0,
            4.896,3.484,8.98,8.108,9.91  c-0.848,0.23-1.741,0.354-2.663,0.354c-0.652,
            0-1.285-0.063-1.902-0.182c1.287,4.015,5.019,6.938,9.441,7.019
            c-3.459,2.711-7.816,4.327-12.552,4.327c-0.815,0-1.62-0.048-2.411-0.142c4.474,
            2.869,9.786,4.541,15.493,4.541  c18.591,0,28.756-15.4,28.756-28.756c0-0.438-0.009-0.875-0.028-1.309C49.769,
            18.873,51.483,17.092,52.837,15.065z"/>
    </symbol>

    <symbol id="linkedin"  viewBox="0 0 512 512">
        <path d="M449.446,0c34.525,0 62.554,28.03 62.554,62.554l0,386.892c0,34.524 -28.03,
            62.554 -62.554,62.554l-386.892,0c-34.524,0 -62.554,-28.03 -62.554,-62.554l0,
            -386.892c0,-34.524 28.029,-62.554 62.554,-62.554l386.892,0Zm-288.985,423.278l0,
            -225.717l-75.04,0l0,225.717l75.04,0Zm270.539,0l0,-129.439c0,-69.333 -37.018,
            -101.586 -86.381,-101.586c-39.804,0 -57.634,21.891 -67.617,37.266l0,-31.958l-75.021,
            0c0.995,21.181 0,225.717 0,225.717l75.02,0l0,-126.056c0,-6.748 0.486,-13.492 2.474,
            -18.315c5.414,-13.475 17.767,-27.434 38.494,-27.434c27.135,0 38.007,20.707 38.007,
            51.037l0,120.768l75.024,0Zm-307.552,-334.556c-25.674,0 -42.448,16.879 -42.448,
            39.002c0,21.658 16.264,39.002 41.455,39.002l0.484,0c26.165,0 42.452,-17.344 42.452,
            -39.002c-0.485,-22.092 -16.241,-38.954 -41.943,-39.002Z"/>
    </symbol>

</svg>



<!-- Header -->
<header class="header" id="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">
                <img src="<?=$config['base']['url']?>/image/ActiveBoxLogo.png" alt="">
            </div>


            <nav class="nav" id="nav">
                <a href="#" class="nav__link" data-scroll="#features">Features</a>
                <a href="#" class="nav__link" data-scroll="#works">Works</a>
                <a href="#" class="nav__link" data-scroll="#team">Our Team</a>
                <a href="#" class="nav__link" data-scroll="#reviews">Testimonials</a>
                <a href="#" class="nav__link" data-scroll="#download">Download</a>
            </nav>

            <button class="burger" type="button" id="navToggle">
                <span class="burger__item">Menu</span>
            </button>
        </div>
    </div>
</header>


<?php  include ($config['base']['path'].'/views/site/'.$views.'.php'); ?>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__block">
                <h4 class="footer__title">Location</h4>
                <address class="footer__address">
                    <div>3481 Melrose Place</div>
                    <div>Beverly Hills, CA 90210</div>
                </address>
            </div>

            <div class="footer__block">
                <h4 class="footer__title">Share with Love</h4>
                <div class="social social--footer">
                    <a class="social__item" href="#" target="_blank">
                        <svg class="social__icon">
                            <use xlink:href="#facebook"></use>
                        </svg>
                    </a>
                    <a class="social__item" href="#" target="_blank">
                        <svg class="social__icon">
                            <use xlink:href="#twitter"></use>
                        </svg>
                    </a>
                    <a class="social__item" href="#" target="_blank">
                        <svg class="social__icon">
                            <use xlink:href="#linkedin"></use>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="footer__block">
                <h4 class="footer__title">About ActiveBox</h4>
                <div class="footer__text">
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                        Donec ullamcorper nulla non
                        metus auctor fringilla.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="copyright__text">
                <div>Copyright © 2015 ActiveBox. All Rights Reserved</div>
                <div>Made with <div class="webdings">Y </div> <span> by Kamal Chaneman</span></div>
            </div>
        </div>
    </div>
</footer>

<script src="<?=$config['base']['url']?>/slick-1.8.1/slick/slick.min.js"></script>
<script src="<?=$config['base']['url']?>/app.js"></script>
</body>
</html>