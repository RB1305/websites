<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>SunlightParticles</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?=$config['base']['url']; ?>/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?=$config['base']['url']; ?>/css/coin-slider.css" />
    <script type="text/javascript" src="<?=$config['base']['url']; ?>/js/cufon-yui.js"></script>
    <script type="text/javascript" src="<?=$config['base']['url']; ?>/js/cufon-aller.js"></script>
    <script type="text/javascript" src="<?=$config['base']['url']; ?>/js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="<?=$config['base']['url']; ?>/js/script.js"></script>
    <script type="text/javascript" src="<?=$config['base']['url']; ?>/js/coin-slider.min.js"></script>
</head>
<body>
<div class="main">
    <div class="header">
        <div class="header_resize">
            <div class="menu_nav">
                <ul>
                    <li class="<?php if ( ($_GET['view'] == 'index')  ) { echo 'active';}?>>"><a href="?view=index"><span>Home Page</span></a></li>
                    <li class="<?php if ( ($_GET['view'] == 'support')) { echo 'active';}?>"><a href="?view=support"><span>Support</span></a></li>
                    <li class="<?php if ( ($_GET['view'] == 'about')) { echo 'active';}?>"><a href="?view=about"><span>About Us</span></a></li>
                    <li class="<?php if ( ($_GET['view'] == 'blog')) { echo 'active';}?>"><a href="?view=blog"><span>Blog</span></a></li>
                    <li class="<?php if ( ($_GET['view'] == 'contact')) { echo 'active';}?>"><a href="?view=contact"><span>Contact Us</span></a></li>
                </ul>
            </div>
            <div class="logo">
                <h1><a href="?view=index"><span>Sunlight</span>Particles <small>Company Slogan Here</small></a></h1>
            </div>
            <div class="clr"></div>
            <div class="slider">
                <div id="coin-slider"> <a href="?view=index"><img src="<?=$config['base']['url']; ?>/images/slide1.jpg" width="940" height="271" alt="" /> </a> <a href="#"><img src="<?=$config['base']['url']; ?>/images/slide2.jpg" width="940" height="271" alt="" /> </a> <a href="#"><img src="<?=$config['base']['url']; ?>/images/slide3.jpg" width="940" height="271" alt="" /> </a> </div>
            </div>
            <div class="clr"></div>
        </div>
    </div>

<?php include ($config['base']['path'].'/views/site/'.$views.'.php');?>


    <div class="fbg">
        <div class="fbg_resize">
            <div class="col c1">
                <h2><span>Image</span> Gallery</h2>
                <a href="#"><img src="<?=$config['base']['url']; ?>/images/gal1.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="<?=$config['base']['url']; ?>/images/gal2.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="<?=$config['base']['url']; ?>/images/gal3.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="<?=$config['base']['url']; ?>/images/gal4.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="<?=$config['base']['url']; ?>/images/gal5.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="<?=$config['base']['url']; ?>/images/gal6.jpg" width="75" height="75" alt="" class="gal" /></a> </div>
            <div class="col c2">
                <h2><span>Services</span> Overview</h2>
                <p>Curabitur sed urna id nunc pulvinar semper. Nunc sit amet tortor sit amet lacus sagittis posuere cursus vitae nunc.Etiam venenatis, turpis at eleifend porta, nisl nulla bibendum justo.</p>
                <ul class="fbg_ul">
                    <li><a href="#">Lorem ipsum dolor labore et dolore.</a></li>
                    <li><a href="#">Excepteur officia deserunt.</a></li>
                    <li><a href="#">Integer tellus ipsum tempor sed.</a></li>
                </ul>
            </div>
            <div class="col c3">
                <h2><span>Contact</span> Us</h2>
                <p>Nullam quam lorem, tristique non vestibulum nec, consectetur in risus. Aliquam a quam vel leo gravida gravida eu porttitor dui.</p>
                <p class="contact_info"> <span>Address:</span> 1458 TemplateAccess, USA<br />
                    <span>Telephone:</span> +123-1234-5678<br />
                    <span>FAX:</span> +458-4578<br />
                    <span>Others:</span> +301 - 0125 - 01258<br />
                    <span>E-mail:</span> <a href="#">mail@yoursitename.com</a> </p>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <div class="footer">
        <div class="footer_resize">
            <p class="lf">Copyright &copy; <a href="#">Domain Name</a>. All Rights Reserved</p>
            <p class="rf">Get More <a target="_blank" href="https://rb-digital.ru/">Rb-digital</a></p>
            <div style="clear:both;"></div>
        </div>
    </div>
</div>
</body>
</html>
