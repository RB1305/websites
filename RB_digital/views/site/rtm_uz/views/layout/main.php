<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RTM.uz</title>
    <link rel="icon" href="<?=$config['base']['url']?>/img/icon.png">
    <link rel="stylesheet" href="<?=$config['base']['url']?>/css/animate.css">
    <link rel="stylesheet" href="<?=$config['base']['url']?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$config['base']['url']?>/css/styleR.css">
    <link rel="stylesheet" href="<?=$config['base']['url']?>/css/features.css">
    <link rel="stylesheet" href="<?=$config['base']['url']?>/css/bootstrap.css">
    <script src="<?=$config['base']['url']?>/js/jquery.js"></script>
    <script src="<?=$config['base']['url']?>/js/popper.js"></script>
    <script src="<?=$config['base']['url']?>/js/bootstrap.js"></script>

    <script>
        $(function () {
            $("#asos").click(function (){
                let a = $("#asosiy").offset().top;
                $("html,body").animate({"scrollTop":a}, 1000);
            })
            $("#mar").click(function (){
                let a = $("#marh").offset().top;
                $("html,body").animate({"scrollTop":a}, 1000);
            })
            $("#rahb").click(function (){
                let a = $("#rah").offset().top;
                $("html,body").animate({"scrollTop":a}, 1000);
            })
            $("#yona").click(function (){
                let a = $("#yon").offset().top;
                $("html,body").animate({"scrollTop":a}, 1000);
            })
            $("#aloq").click(function (){
                let a = $("#kury").offset().top;
                $("html,body").animate({"scrollTop":a}, 1000);
            })
        })

    </script>
    <script src="<?=$config['base']['url'];?>/js/wow.js"></script>
    <script>
        new WOW().init();
    </script>

    <style>
        .rasm {
            transition: 1s; /* Время эффекта */
        }
        .rasm:hover {
            z-index: 1111;
            transform: scale(1.2); /* Увеличиваем масштаб */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light text-capitalize fixed-top" id="asosiy">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="<?=$config['base']['url']?>/img/logo.png" alt="#">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-lg-auto me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#asosiy">Asosiy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#marh">Markaz haqida</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#rah" tabindex="-1" aria-disabled="true">Rahbariyat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#yon" tabindex="-1" aria-disabled="true">Yo'nalishlar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kury" tabindex="-1" aria-disabled="true">Kursga yozilish</a>
                </li>
                <a class="nav-link" href="https://mrtm.uz/vr">VR 360</a>
            </ul>
        </div>
    </div>
</nav>

<?php include ($config['base']['path'].'/views/site/'.$views.'.php');?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <div>
                    <img src="<?=$config['base']['url']?>/img/foot.png">
                    <p style="margin-top: 5px;">Marg'ilon shaxridagi Raqamli texnologiyalar markazi</p>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="item">
                    <h3 style="color: white">Bo'limlar</h3>
                    <ul>
                        <li><a href="#" id="asos">Asosiy</a></li>
                        <li><a href="#" id="mar">Markaz haqida</a></li>
                        <li><a href="#" id="rahb">Rahbariyat</a></li>
                        <li><a href="#" id="yona">Yo'nalishlar</a></li>
                        <li><a href="#" id="aloq">Aloqa</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="item">
                    <h3 style="color: white">Aloqa uchun</h3>
                    <p><strong>Telefon raqam:</strong></p>
                    <p><img src="<?=$config['base']['url']?>/img/footp.png" alt="#">+998 (90) 163-41-22</p>
                    <p><strong>Manzil:</strong></p>
                    <p><img src="<?=$config['base']['url']?>/img/footl.png" alt="#">Farg'ona viloyati Marg'ilon shahar Xiyobon ko'chasi 65z uy</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="item">
                    <h3 style="color: white">Ijtimoiy tarmoqlarda</h3>
                    <ul>
                        <li><a href="#">Telegram</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Youtube</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright text-center">
        <p>Copyright 2020. ©Raqamli texnologiyalar markazi.</p>
    </div>
</footer>

<script src="<?=$config['base']['url']?>/js/bootstrap.bundle.min.js"></script>

</body>
</html>