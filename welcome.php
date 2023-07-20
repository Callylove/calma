

<?php 
include 'database.php';
$current_user_id = $_SESSION['user-id'];


// Fetch the user's avatar and information from the "users" table
$user_query = "SELECT avatar, firstname, lastname, username, email FROM users WHERE id = $current_user_id";
$user_result = mysqli_query($connection, $user_query);
$user = mysqli_fetch_assoc($user_result);

$avatar = $user['avatar'];
$firstname = $user['firstname'];
$lastname = $user['lastname'];
$username = $user['username'];
$email = $user['email'];
?>

<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from products.webrockmedia.com/foodlab-html/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 15:15:07 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Calma Dish Restuarant</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/swiper.min.css">
<link rel="stylesheet" href="css/default.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css">
<link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css">
<link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css">
</head>
<body>

<!--<div id="preloader">
<div id="loading-center">
<div class="loader">
<div class="loader-outter"></div>
<div class="loader-inner"></div>
</div>
</div>
</div>-->


<button class="scroll-top scroll-to-target" data-target="html">
<i class="fa fa-angle-up"></i>
</button>


<header class="header-one">
<div id="sticky-header" class="main-header menu-area">
<div class="container custom-container">
<div class="row">
<div class="col-12">
<div class="mobile-nav-toggler"><i class="fa fa-bars"></i></div>
<div class="menu-wrap">
<nav class="menu-nav">
<div class="logo">
<a href="index.html"><img src="images/header-logo3.png" alt=""></a>
</div>
<div class="navbar-wrap main-menu d-none d-lg-flex">
<ul class="navigation">
<li class="active menu-item-has-children">
<a href="index.html">Home</a>
<ul class="submenu">
    <li><a href="about1.html">About Us</a></li>
    <li><a href="services.html">Services</a></li>
    <li><a href="menu.html">Menu</a></li>
    <li><a href="blogs.html">Blogs</a></li>
    <li><a href="contact.html">contacts</a></li>
    </ul>
    <li><a href="logout.php">Logout</a></li>
    </li> 
</ul>

</li>
</ul>
</div>
<div class="header-action d-none d-md-block">
<ul>
<li class="header-btn">
<a href="#" class="animation-cer btn-call">
<img src="images/call.png" alt="">
</a>
</li>
</ul>
</div>
</nav>
</div>

<div class="mobile-menu">
<nav class="menu-box">
<div class="close-btn"><i class="fa fa-times"></i></div>
<div class="nav-logo">
<a href="index.html"><img src="images/header-logo3.png" alt="" title=""></a>
</div>
<div class="menu-outer">
</div>
<div class="social-links">
<ul class="clearfix">
<li><a href="#"><span class="fa fa-twitter"></span></a></li>
<li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
<li><a href="#"><span class="fa fa-instagram"></span></a></li>
<li><a href="#"><span class="fa fa-youtube"></span></a></li>
</ul>
</div>
</nav>
</div>
<div class="menu-backdrop"></div>

</div>
</div>
</div>
</div>
</header>

<div class="minsection">

<section class="main-slider">
<div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
<div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
<ul>
<li data-transition="slidingoverlayhorizontal" data-description="Slide Description" data-index="rs-1688" data-slotamount="default" data-thumb="images/slide1.png" data-title="Slide Title">
<img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/slide1.png">
<div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['700','900','768','450']" data-whitespace="normal" data-hoffset="['55','75','75','15']" data-voffset="['-20','-98','-80','-80']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[150%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
<div class="text"><h6>Welcome To Our Restaurant</h6>
<h1>Our Restaurant Offers Delicious & Seafood</h1>
<p>
On the other hand, we denounce with righteous indignation and dislike men who are so beguiled item demoralized by the charms of pleasure of the moment with a righteous hand, we denounce with righteous indignation.
</p>
<a href="#" class="theme-btn btn-style-orange">
Read More
</a>
</div>
</div>
<div class="tp-caption " data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['700','900','768','450']" data-whitespace="normal" data-hoffset="['55','75','75','15']" data-voffset="['70','-10','20','10']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
</div>
<div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-whitespace="normal" data-width="['650','900','768','450']" data-hoffset="['55','75','75','15']" data-voffset="['170','110','110','90']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'>

</div>
</li>
<li data-transition="slidingoverlayhorizontal" data-description="Slide Description" data-index="rs-1689" data-slotamount="default" data-thumb="images/slide2.png" data-title="Slide Title">
<img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/slide2.png">
<div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['700','900','768','450']" data-whitespace="normal" data-hoffset="['55','75','75','15']" data-voffset="['-20','-98','-80','-80']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[150%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
<div class="text"><h6>Welcome To Our Restaurant</h6>
<h1>Our Restaurant Offers Delicious & Seafood</h1>
<p>
On the other hand, we denounce with righteous indignation and dislike men who are so beguiled item demoralized by the charms of pleasure of the moment with a righteous hand, we denounce with righteous indignation. </p>
<a href="#" class="theme-btn btn-style-orange">
Read More
</a>
</div>
</div>
<div class="tp-caption " data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['700','900','768','450']" data-whitespace="normal" data-hoffset="['55','75','75','15']" data-voffset="['70','-10','20','10']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
</div>
<div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-whitespace="normal" data-width="['650','900','768','450']" data-hoffset="['55','75','75','15']" data-voffset="['170','110','110','90']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'>

</div>
</li>
</ul>
</div>
</div>
</section>


<section class="Categories pt-70 pb-70">
<div class="container">
<div class="row">
<div class="cat">
    
</div>
</div>
<div class="row">
<div style="text-align: left; color: gold; font-size: 24px; font-weight: bold; margin: 0 auto;">
    <h1>Welcome <?= "{$user['username']}!" ?></h5>
    </div>
</div>


</div>
</section>

 





<section class="pt-90 pb-60 bg-gray-l">
`    <span class="af-fo-i777 download-img">
        <img src="images/food-r-t.png" alt="">
    </span>
    <span class="af-fo-i3 img-cer">
        <img src="images/product2.png" alt="">
    </span>
    <span class="af-fo-i1-right img-cer">
        <img src="images/r-plate.png" alt="">
    </span>
    <span class="af-fo-i81 img-cer">
        <img src="images/kkj.png" alt="">
    </span>
    <div class="container">
        <div class="row">
            <div class="col-md-11 ma-a">
                <div class="min-con-h">
                    <h4>Latest products</h4>
                </div>
            </div>
        </div>
        <div class="row mt-30 col-md-11 ma-a col-50-w">
            <div class="col-md-6">
                <div class="min-list-menu">
                    <div class="img-food">
                        <a href="menu-detail.html">
                            <img src="images/coffee.jpg" alt="" class="menu-i-3" />
                        </a>
                    </div>
                    <div class="right-menu-d">
                        <h4>
                            <img src="images/veg.png" alt="" class="img-icon">
                            <a href="menu-detail.html">Croissant & coffee</a>
                        </h4>
                        <ul class="test-rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    <div class="full-side-l">
                        <ul>
                            <li><span class="current-price">$10</span></li>
                            <li><span class="old-price"><strike>$15</strike></span></li>
                        </ul>
                    <div class="form-group mb-0">
                        <button id="my-form-button" class="animation-cer-btn form-b" type="submit">
                        Order Now! <i class="fa fa-arrow-right"></i>
                        <span class="line2"></span>
                        </button>
                    </div>
            </div>
        </div>
    </div>
    </div>

<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/cookies.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">
cookies
</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$5</span></li>
<li><span class="old-price"><strike>$10</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/fruit1.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">Paw paw</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$4</span></li>
<li><span class="old-price"><strike>$8</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/fruit2.jpg" alt="" class="menu-i-3" />
</a>
</div>
 <div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">
Peeled banana
</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$2</span></li>
<li><span class="old-price"><strike>$5</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/snack13.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">Croissants with fruit coffee and flower</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$15</span></li>
<li><span class="old-price"><strike>$20</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/snack14.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">sweet honey pancakes with berries</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$25</span></li>
<li><span class="old-price"><strike>$30</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/snack15.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">Sushi</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$15</span></li>
<li><span class="old-price"><strike>$20</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/snack16.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">Delicious dessert with fruit juice</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$12</span></li>
<li><span class="old-price"><strike>$15</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/snack17.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">Hamburger</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$15</span></li>
<li><span class="old-price"><strike>$20</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/snack18.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">Ice Cream</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$10</span></li>
<li><span class="old-price"><strike>$15</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>

<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/snack20.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">Blueberry cake</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$20</span></li>
<li><span class="old-price"><strike>$25</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/snack12.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">sweet cake</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$20</span></li>
<li><span class="old-price"><strike>$25</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/fruit3.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">orange juice</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$10</span></li>
<li><span class="old-price"><strike>$15</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/snack10.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">Chocolate cupcake with strawberry toppings</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$20</span></li>
<li><span class="old-price"><strike>$25</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>

<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/puff.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">Puff puff</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$10</span></li>
<li><span class="old-price"><strike>$15</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/snack1.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">heart-shaped cookies with jam</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$20</span></li>
<li><span class="old-price"><strike>$25</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/snack21.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">Sweet popcorn</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$12</span></li>
<li><span class="old-price"><strike>$15</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/snack22.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">Egg</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$5</span></li>
<li><span class="old-price"><strike>$8</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/snack23.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">Pizzas</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$30</span></li>
<li><span class="old-price"><strike>$35</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/snack24.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">Strawberry smoothie</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$28</span></li>
<li><span class="old-price"><strike>$30</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>


<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/fruit6.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">Sliced avocado</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$6</span></li>
<li><span class="old-price"><strike>$10</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/food1.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">Delicious pasta</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$20</span></li>
<li><span class="old-price"><strike>$25</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/snack8.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">Chin chin</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$25</span></li>
<li><span class="old-price"><strike>$30</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/snack4.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">Pink & white ice cream</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$12</span></li>
<li><span class="old-price"><strike>$15</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/food3.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">Spaghetti with bolognese sauce and parmesan cheese</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$20</span></li>
<li><span class="old-price"><strike>$25</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/food2.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">Seafood paella with lobster</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$35</span></li>
<li><span class="old-price"><strike>$45</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/snack9.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">lycee cold drink</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$20</span></li>
<li><span class="old-price"><strike>$25</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>

<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/snack5.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">Chocolate cake with red and white toppings</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$20</span></li>
<li><span class="old-price"><strike>$25</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>

<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/fruit5.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">food with bananas</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$12</span></li>
<li><span class="old-price"><strike>$15</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/snack6.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">Smoothie</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$25</span></li>
<li><span class="old-price"><strike>$30</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/snack7.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">Cookies</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$20</span></li>
<li><span class="old-price"><strike>$25</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/snack3.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">Chocolate cake with strawberries</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$25</span></li>
<li><span class="old-price"><strike>$35</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>

<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/snack2.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">white & pink doughnut</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$12</span></li>
<li><span class="old-price"><strike>$15</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/fruit4.jpg" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">fruits with strawberry drink</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$30</span></li>
<li><span class="old-price"><strike>$35</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>


<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/mmm5.png" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">Mediterranean Falafel Sandwich</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$12</span></li>
<li><span class="old-price"><strike>$15</strike></span></li>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</ul>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="min-list-menu">
<div class="img-food">
<a href="menu-detail.html">
<img src="images/mmm6.png" alt="" class="menu-i-3" />
</a>
</div>
<div class="right-menu-d">
<h4>
<img src="images/veg.png" alt="" class="img-icon">
<a href="menu-detail.html">
High Protein English Breakfast
</a>
</h4>
<ul class="test-rating">
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
<li><i class="fa fa-star"></i></li>
</ul><div class="full-side-l">
<ul>
<li><span class="current-price">$12</span></li>
<li><span class="old-price"><strike>$15</strike></span></li>
</ul>
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Order Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<section class="booking-s">
<div class="container-full">
<div class="row">
<div class="col-md-7 bg-img-b pd-250">
<div class="cer-book">
<div class="round-s">
<span class="po-img-book po-b1">
<img src="images/c-1.png" alt="" />
</span>
<span class="po-img-book po-b2">
<img src="images/c-2.png" alt="" />
</span>
<span class="po-img-book po-b3">
<img src="images/c-3.png" alt="" />
</span>
<span class="po-img-book po-b4">
<img src="images/c-4.png" alt="" />
</span>
<span class="po-img-book po-b5">
<img src="images/c-5.png" alt="" />
</span>
<span class="po-img-book po-b6">
<img src="images/c-6.png" alt="" />
</span>
</div>
<div class="min-chef">
<span class="dor-bor1"></span>
<span class="dor-bor"></span>
<span class="img-chef-img">
<img src="images/chef1.png" alt="" />
</span>
</div>
</div>
</div>
<div class="col-md-5 pl-70 pt-60 pr-70 pb-50 bg-y">
<div class="booking-form">
<div class="row">
<div class="col-md-12">
<h2>Reserve Your Table</h2>
</div>
</div>
<form id="my-form" action="createAccount.html" method="POST">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<input type="text" placeholder="Name" name="name" class="fill-co" />
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<input type="tel" maxlength="10" placeholder="Mobile" name="phone" class="fill-co" />
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 pr-5">
<div class="form-group">
<input type="number" maxlength="2" placeholder="Person" name="person" class="fill-co" />
</div>
</div>
<div class="col-md-6 pl-5">
<div class="form-group">
<input type="date" placeholder="Date" name="Date" class="fill-co" />
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 pr-5">
<div class="form-group">
<input type="time" placeholder="Time" name="time" class="fill-co" />
</div>
</div>
<div class="col-md-6 pl-5">
<div class="form-group">
<input type="text" placeholder="Party Type" name="party_type" class="fill-co" />
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group mb-0">
<button id="my-form-button" class="animation-cer-btn form-b" type="submit">
Book Now! <i class="fa fa-arrow-right"></i>
<span class="line2"></span>

</button>
</div>
<p id="my-form-status"></p>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>
</section>







</div>
</div>
</div>
</div>
</div>




<!--<section class="dish pb-70">
<div class="container">
<div class="row">
<div class="popular-d">
<h2>Most Popular Snacks</h2>
<p>Consectetur numquam poro nemo veniam <br>eligendi rem adipisci quo modi.</p>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div id="dish" class="owl-carousel owl-theme">
<div class="item">
<div class="dish-box">
<div class="dishes">
<a href="menu-detail.html"><img src="images/puff.jpg" alt=""></a>
</div>
<div class="dishes-name">
<h4 class="d-n"><a href="menu-detail.html">Puff puff</a></h4>
<span class="dollar">$8</span>
</div>
</div>
<div class="dis-txt">
<p>tomatoes, nori, feta cheese, mushrooms, rice noodles, corn, shrimp.</p>
<ul class="star">
<li><i class="fa fa-star"></i> </li>
<li><i class="fa fa-star"></i> </li>
<li><i class="fa fa-star"></i> </li>
<li><i class="fa fa-star"></i> </li>
<li><i class="fa fa-star"></i> </li>
</ul>
</div>
</div>
<div class="item">
<div class="dish-box">
<div class="dishes">
<a href="menu-detail.html"><img src="images/dish2.png" alt=""></a>
</div>
<div class="dishes-name">
<h4 class="d-n"><a href="menu-detail.html">Stracciatella</a></h4>
<span class="dollar">$10</span>
</div>
</div>
<div class="dis-txt">
<p>tomatoes, nori, feta cheese, mushrooms, rice noodles, corn, shrimp.</p>
<ul class="star">
<li><i class="fa fa-star"></i> </li>
<li><i class="fa fa-star"></i> </li>
<li><i class="fa fa-star"></i> </li>
<li><i class="fa fa-star"></i> </li>
<li><i class="fa fa-star"></i> </li>
</ul>
</div>
</div>
<div class="item">
<div class="dish-box">
<div class="dishes">
<a href="menu-detail.html"><img src="images/dish3.png" alt=""></a>
</div>
<div class="dishes-name">
<h4 class="d-n"><a href="menu-detail.html">Croustillant de</a></h4>
<span class="dollar">$7</span>
</div>
</div>
<div class="dis-txt">
<p>tomatoes, nori, feta cheese, mushrooms, rice noodles, corn, shrimp.</p>
<ul class="star">
<li><i class="fa fa-star"></i> </li>
<li><i class="fa fa-star"></i> </li>
<li><i class="fa fa-star"></i> </li>
<li><i class="fa fa-star"></i> </li>
<li><i class="fa fa-star"></i> </li>
</ul>
</div>
</div>
<div class="item">
<div class="dish-box">
<div class="dishes">
<a href="menu-detail.html"><img src="images/dish4.png" alt=""></a>
</div>
<div class="dishes-name">
<h4 class="d-n"><a href="menu-detail.html">Saumon Gravlax</a></h4>
<span class="dollar">$5</span>
</div>
</div>
<div class="dis-txt">
<p>tomatoes, nori, feta cheese, mushrooms, rice noodles, corn, shrimp.</p>
<ul class="star">
<li><i class="fa fa-star"></i> </li>
<li><i class="fa fa-star"></i> </li>
<li><i class="fa fa-star"></i> </li>
<li><i class="fa fa-star"></i> </li>
<li><i class="fa fa-star"></i> </li>
</ul>
</div>

</div>
</div>
</div>
</div>
</div>
</section>-->


<section class="pt-80 footer-min">
<div class="container">
<div class="row  pb-50">
<div class="col-md-4">
<div class="min-f-t">
<h4>EXPLORE</h4>
<ul class="wi-50-t">
<li> 
 <a href="#">About Us</a>
</li>
<li>
<a href="#">Blogs</a>
</li>
<li>
<a href="#">FAQ's</a>
</li>
<li>
<a href="#">Reservation</a>
</li>
<li>
<a href="#">Contact Us</a>
</li>
<li>
<a href="#">Cart</a>
</li>
<li>
<a href="#"> Teams</a>
</li>
<li>
<a href="#">Wishlist</a>
</li>
<li>
<a href="#">Privacy Policy</a>
</li>
<li>
<a href="#">Terms & Conditions</a>
</li>
<li>
<a href="#">Services</a>
</li>
<li>
<a href="#">My Account</a>
</li>
</ul>
</div>
</div>
<div class="col-md-4">
<div class="min-f-t text-c">
<span class="logo-footer">
<a href="#">
<img src="images/footer1-logo.png" alt="" />
</a>
</span>
<ul class="wi-100-t">
<li><span>Address:</span> Federal University, <br />Birnin kebbi, kebbi state.</li>
<li><span>Help Line: </span> 08134137352</li>
<li><span>Mail: </span> <a href="https://products.webrockmedia.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6b02050d042b0e130a061b070e45080406">nwekechidimma111111@gmail.com</a></li>
</ul>
<div class="social-m">
<ul class="social-t">
<li><a href="#" class="facebook-change-co"><i class="fa fa-facebook-f"></i></a></li>
<li><a href="#" class="twitter-change-co"><i class="fa fa-twitter"></i></a></li>
<li><a href="#" class="pinterest-change-co"><i class="fa fa-pinterest"></i></a></li>
<li><a href="#" class="linkedin-change-co"><i class="fa fa-linkedin"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="col-md-4">
<div class="min-f-t">
<h4>OPEN HOURS</h4>
<ul class="wi-50-t">
<li>Saturday: </li>
<li> 08:00 - 23.00</li>
<li>Sunday: </li>
<li> 08:00 - 23.00</li>
<li>Monday: </li>
<li> 08:00 - 21.00</li>
<li>Tuesday: </li>
<li> 09:00 - 23.00</li>
<li>Wednesday: </li>
<li>08:00 - 23.00 </li>
<li>Thursday: </li>
<li> 08:00 - 23.00 </li>
 </ul>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="copy-one">
<p>© copyright <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="1e9ffe1cc213b1b3a5083f93-text/javascript">var year = new Date(); document.write(year.getFullYear());</script> by <a href="#">calma.com</a></p>
</div>
</div>
</div>
</div>
</section>
</div>


<script src="js/jquery-3.6.0.min.js" type="1e9ffe1cc213b1b3a5083f93-text/javascript"></script>
<script src="js/bootstrap.min.js" type="1e9ffe1cc213b1b3a5083f93-text/javascript"></script>
<script src="js/isotope.pkgd.min.js" type="1e9ffe1cc213b1b3a5083f93-text/javascript"></script>
<script src="js/jquery.magnific-popup.min.js" type="1e9ffe1cc213b1b3a5083f93-text/javascript"></script>
<script src="js/owl.carousel.min.js" type="1e9ffe1cc213b1b3a5083f93-text/javascript"></script>
<script src="js/swiper.min.js" type="1e9ffe1cc213b1b3a5083f93-text/javascript"></script>
<script src="js/main.js" type="1e9ffe1cc213b1b3a5083f93-text/javascript"></script>
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js" type="1e9ffe1cc213b1b3a5083f93-text/javascript"></script>
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js" type="1e9ffe1cc213b1b3a5083f93-text/javascript"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js" type="1e9ffe1cc213b1b3a5083f93-text/javascript"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js" type="1e9ffe1cc213b1b3a5083f93-text/javascript"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js" type="1e9ffe1cc213b1b3a5083f93-text/javascript"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js" type="1e9ffe1cc213b1b3a5083f93-text/javascript"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js" type="1e9ffe1cc213b1b3a5083f93-text/javascript"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js" type="1e9ffe1cc213b1b3a5083f93-text/javascript"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js" type="1e9ffe1cc213b1b3a5083f93-text/javascript"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js" type="1e9ffe1cc213b1b3a5083f93-text/javascript"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js" type="1e9ffe1cc213b1b3a5083f93-text/javascript"></script>
<script src="js/main-slider-script.js" type="1e9ffe1cc213b1b3a5083f93-text/javascript"></script>
<script type="1e9ffe1cc213b1b3a5083f93-text/javascript">
        var form = document.getElementById("my-form");

        async function handleSubmit(event) {
            event.preventDefault();
            var status = document.getElementById("my-form-status");
            var data = new FormData(event.target);
            fetch(event.target.action, {
                method: form.method,
                body: data,
                headers: {
                    'Accept': 'application/json'
                }
            }).then(response => {
                status.innerHTML = "Thanks for your submission!";
                form.reset()
            }).catch(error => {
                status.innerHTML = "Oops! There was a problem submitting your form"
            });
        }
        form.addEventListener("submit", handleSubmit)
    </script>
<script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="1e9ffe1cc213b1b3a5083f93-|49" defer=""></script></body>

<!-- Mirrored from products.webrockmedia.com/foodlab-html/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 15:15:35 GMT -->
</html>

