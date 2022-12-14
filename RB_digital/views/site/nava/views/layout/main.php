<!DOCTYPE html>
<html>
<head>
    <title>Nava</title>
    <meta charset="utf-8">
    <meta name="description" content="Traveling HTML5 Template" />
    <meta name="author" content="Design Hooks" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:400,700" rel="stylesheet" />
    <link href="<?=$config['base']['url']?>/img/favicon.png" type="image/x-icon" rel="shortcut icon" />
    <link href="<?=$config['base']['url']?>/css/screen.css" rel="stylesheet" />
</head>
<body class="home" id="page">
<!-- Header -->
<header class="main-header">
    <div class="container">
        <div class="header-content">
            <a href="#">
                <img src="<?=$config['base']['url']?>/img/site-identity.png" alt="site identity" />
            </a>

            <nav class="site-nav">
                <ul class="clean-list site-links">
                    <li>
                        <a href="#">Top Destinations</a>
                    </li>
                    <li>
                        <a href="#">Add your boat</a>
                    </li>
                </ul>

                <a href="#" class="btn btn-outlined">Sign up</a>
            </nav>
        </div>
    </div>
</header>

<?php  include ($config['base']['path'].'/views/site/'.$views.'.php');?>


<!-- Footer -->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="widget widget_links">
                    <h5 class="widget-title">Top Locations</h5>
                    <ul>
                        <li><a href="#">Lorem impsum dolor</a></li>
                        <li><a href="#">Sit amet consectetur</a></li>
                        <li><a href="#">Adipisicing elit</a></li>
                        <li><a href="#">Eiusmod tempor</a></li>
                        <li><a href="#">incididunt ut labore</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-5">
                <div class="widget widget_links">
                    <h5 class="widget-title">Featured Boats</h5>
                    <ul>
                        <li><a href="#">Lorem impsum dolor</a></li>
                        <li><a href="#">Sit amet consectetur</a></li>
                        <li><a href="#">Adipisicing elit</a></li>
                        <li><a href="#">Eiusmod tempor</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-9">
                <div class="widget widget_social">
                    <h5 class="widget-title">Subscribe to our newsletter</h5>
                    <form class="subscribe-form">
                        <div class="input-line">
                            <input type="text" name="subscribe-email" value="" placeholder="Your email address" />
                        </div>
                        <button type="button" name="subscribe-submit" class="btn btn-special no-icon">Subscribe</button>
                    </form>

                    <ul class="clean-list social-block">
                        <li>
                            <a href="#"><i class="icon-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="icon-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="icon-google-plus"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-5">
                <div class="widget widget_links">
                    <h5 class="widget-title">Contact us</h5>
                    <ul>
                        <li><a href="#">Lorem impsum dolor</a></li>
                        <li><a href="#">Sit amet consectetur</a></li>
                        <li><a href="#">Adipisicing elit</a></li>
                        <li><a href="#">Eiusmod tempor</a></li>
                        <li><a href="#">incididunt ut labore</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="<?=$config['base']['url']?>/js/jquery.js"></script>
<script src="<?=$config['base']['url']?>/js/functions.js"></script>
</body>
</html>
