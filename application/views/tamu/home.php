<!--Template Name: vacayhome
File Name: home.html
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license/-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icons/favicon.png" />
    <title>vacayhome</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/dashboard/') ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/dashboard/') ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/dashboard/') ?>css/style.css" rel="stylesheet">
    <link href="<?= base_url('assets/dashboard/') ?>fonts/antonio-exotic/stylesheet.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/dashboard/') ?>css/lightbox.min.css">
    <link href="<?= base_url('assets/dashboard/') ?>css/responsive.css" rel="stylesheet">
    <script src="<?= base_url('assets/dashboard/') ?>js/jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/dashboard/') ?>js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/dashboard/') ?>js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/dashboard/') ?>s/instafeed.min.js" type="text/javascript"></script>
    <script src="<?= base_url('/assets/dashboard/') ?>js/custom.js" type="text/javascript"></script>
</head>

<body>
    <div id="page">
        <header class="header-container">
            <div class="container">
                <div class="top-row">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 col-xs-6">
                            <div id="logo">
                                <!--<a href="index.html"><img src="images/logo.png" alt="logo"></a>-->
                                <a href="index.html"><span>Joko</span>Min</a>
                            </div>
                        </div>
                        <div class="col-sm-6 visible-sm">
                            <div class="text-right"><button type="button" class="book-now-btn">Book Now</button></div>
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
                            <nav class="navbar navbar-default">
                                <div class="navbar-header page-scroll">
                                    <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                </div>
                                <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                                    <ul class="list-unstyled ml-auto nav1 cl-effect-10">
                                        <li><a data-hover="Home" class="active"><span>Home</span></a></li>
                                        <li><a data-hover="About" href="about.html"><span>About</span></a></li>
                                        <li><a data-hover="Rooms" href="rooms.html"><span>Product</span></a></li>
                                        <li><a data-hover="News" href="news.html"><span>News</span></a></li>
                                        <li><a data-hover="Contact Us" href="contact.html"><span>contact Us</span></a>
                                        </li>
                                    </ul>

                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <!--end-->
        <div id="myCarousel1" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->

            <ol class="carousel-indicators">
                <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel1" data-slide-to="1"></li>
                <li data-target="#myCarousel1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active"> <img src="<?= base_url('assets/dashboard/') ?>images/banner.png" style="width:100%; height: 500px" alt="First slide">
                    <div class="carousel-caption">
                        <h1>jokomin<br> Bag & Fashion</h1>
                    </div>
                </div>
                <div class="item"> <img src="<?= base_url('assets/dashboard/') ?>images/banner2.png" style="width:100%; height: 500px" alt="Second slide">
                    <div class="carousel-caption">
                        <h1>jokomin<br> Bag & Fashion</h1>
                    </div>
                </div>
                <div class="item"> <img src="<?= base_url('assets/dashboard/') ?>images/banner3.png" style="width:100%; height: 500px" alt="Third slide">
                    <div class="carousel-caption">
                        <h1>jokomin<br> Bag & Fashion</h1>
                    </div>
                </div>

            </div>
            <a class="left carousel-control" href="#myCarousel1" data-slide="prev"> <img src="<?= base_url('assets/dashboard/') ?>images/icons/left-arrow.png" onmouseover="this.src = '<?= base_url('assets/dashboard/') ?>images/icons/left-arrow-hover.png'" onmouseout="this.src = '<?= base_url('assets/dashboard/') ?>images/icons/left-arrow.png'" alt="left"></a>
            <a class="right carousel-control" href="#myCarousel1" data-slide="next"><img src="<?= base_url('assets/dashboard/') ?>images/icons/right-arrow.png" onmouseover="this.src = '<?= base_url('assets/dashboard/') ?>images/icons/right-arrow-hover.png'" onmouseout="this.src = '<?= base_url('assets/dashboard/') ?>images/icons/right-arrow.png'" alt="left"></a>

        </div>
        <div class="clearfix"></div>

        <!--service block--->
        <section class="service-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6 width-50">
                        <div class="service-details text-center">
                            <div class="service-image">
                                <img alt="image" class="img-responsive" src="<?= base_url('assets/dashboard/') ?>images/icons/wifi.png">
                            </div>
                            <h4><a>original</a></h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 width-50">
                        <div class="service-details text-center">
                            <div class="service-image">
                                <img alt="image" class="img-responsive" src="<?= base_url('assets/dashboard/') ?>images/icons/key.png">
                            </div>
                            <h4><a>low prices</a></h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 mt-25">
                        <div class="service-details text-center">
                            <div class="service-image">
                                <img alt="image" class="img-responsive" src="<?= base_url('assets/dashboard/') ?>images/icons/car.png">
                            </div>
                            <h4><a>best quality</a></h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 mt-25">
                        <div class="service-details text-center">
                            <div class="service-image">
                                <img alt="image" class="img-responsive" src="<?= base_url('assets/dashboard/') ?>images/icons/user.png">
                            </div>
                            <h4><a>Trusted</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--gallery block--->
        <section class="gallery-block gallery-front">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="gallery-image">
                            <img class="img-responsive" src="<?= base_url('assets/dashboard/') ?>images/dfghrh.jpg">
                            <div class="overlay">
                                <a class="info pop example-image-link img-responsive" href="images/dfghrh.jpg" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                                <p><a>Tas ciwi</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="gallery-image">
                            <img class="img-responsive" src="<?= base_url('assets/dashboard/') ?>images/fhth.jpg">
                            <div class="overlay">
                                <a class="info pop example-image-link img-responsive" href="images/fhth.jpg" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                                <p><a>Tas cowo</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="gallery-image">
                            <img class="img-responsive" src="<?= base_url('assets/dashboard/') ?>images/hkhku.jpg">
                            <div class="overlay">
                                <a class="info pop example-image-link img-responsive" href="images/hkhku.jpg" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                                <p><a>Tas cewe</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="gallery-image">
                            <img class="img-responsive" src="<?= base_url('assets/dashboard/') ?>images/index.jpg">
                            <div class="overlay">
                                <a class="info pop example-image-link img-responsive" href="images/index.jpg" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                                <p><a>Tas Best</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--offer block-->
        <section class="vacation-offer-block">
            <div class="vacation-offer-bgbanner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-6 col-xs-12">
                            <div class="vacation-offer-details">
                                <h1>Your Bag Awaits</h1>
                                <h4>Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit.</h4>
                                <a type="button" class="btn btn-default">Choose a Product</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End-->

        <!----resort-overview--->
        <section class="resort-overview-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                        <div class="side-A">
                            <div class="product-thumb">
                                <div class="image">
                                    <a><img src="<?= base_url('assets/dashboard/') ?>images/category1.png" class="img-responsive" alt="image"></a>
                                </div>
                            </div>
                        </div>
                        <div class="side-B">
                            <div class="product-desc-side">
                                <h3><a>Original</a></h3>
                                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nunc lorem nulla, ornare eu felis
                                    luctus non maximus vitae, portt neque. ipsum dolor sit amet, consec adipiscing elit.
                                </p>
                                <div class="links"><a href="single-blog.html">Read more</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
                        <div class="side-A">
                            <div class="product-thumb">
                                <div class="image">
                                    <a><img alt="image" class="img-responsive" src="<?= base_url('assets/dashboard/') ?>images/category2.png"></a>
                                </div>
                            </div>
                        </div>
                        <div class="side-B">
                            <div class="product-desc-side">
                                <h3><a>low prices</a></h3>
                                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nunc lorem nulla, ornare eu felis
                                    luctus non maximus vitae, portt neque. ipsum dolor sit amet, consec adipiscing elit.
                                </p>
                                <div class="links"><a href="single-blog.html">Read more</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                        <div class="side-A">
                            <div class="product-desc-side">
                                <h3><a>Best quality</a></h3>
                                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nunc lorem nulla, ornare eu felis
                                    luctus non maximus vitae, portt neque. ipsum dolor sit amet, consec adipiscing elit.
                                </p>
                                <div class="links"><a href="single-blog.html">Read more</a></div>
                            </div>
                        </div>

                        <div class="side-B">
                            <div class="product-thumb">
                                <div class="image txt-rgt">
                                    <a class="arrow-left"><img src="<?= base_url('assets/dashboard/') ?>images/category3.png" class="img-responsive" alt="imaga"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
                        <div class="side-A">
                            <div class="product-desc-side">
                                <h3><a>trusted</a></h3>
                                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nunc lorem nulla, ornare eu felis
                                    luctus non maximus vitae, portt neque. ipsum dolor sit amet, consec adipiscing elit.
                                </p>
                                <div class="links"><a href="single-blog.html">Read more</a></div>
                            </div>
                        </div>

                        <div class="side-B">
                            <div class="product-thumb txt-rgt">
                                <div class="image">
                                    <a class="arrow-left"><img src="<?= base_url('assets/dashboard/') ?>images/category4.png" class="img-responsive" alt="imaga"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>
        </section>

        <!---footer--->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 width-set-50">
                        <div class="footer-details">
                            <h4>Get in touch</h4>
                            <ul class="list-unstyled footer-contact-list">
                                <li>
                                    <i class="fa fa-map-marker fa-lg"></i>
                                    <p>701 Old York Drive Richmond USA.</p>
                                </li>
                                <li>
                                    <i class="fa fa-phone fa-lg"></i>
                                    <p><a href="tel:+1-202-555-0100"> +1-202-555-0100</a></p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o fa-lg"></i>
                                    <p><a href="mailto:demo@info.com"> demo@info.com</a></p>
                                </li>
                            </ul>
                            <div class="footer-social-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                            <div class="input-group" id="subscribe">
                                <input type="text" class="form-control subscribe-box" value="" name="subscribe" placeholder="EMAIL ID">
                                <span class="input-group-btn">
                                    <button type="button" class="btn subscribe-button"><i class="fa fa-paper-plane fa-lg"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 width-50 width-set-50">
                        <div class="footer-details">
                            <h4>explore</h4>
                            <ul class="list-unstyled footer-links">
                                <li class="active"><a>Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="rooms.html">Rooms</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="#">Dinning</a></li>
                                <li> <a href="news.html">News</a></li>
                                <li> <a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="footer-details">
                            <h4>Now On Instagram</h4>
                            <div class="row">
                                <div class="instagram-images">
                                    <div id="instafeed"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="copyright">
                        &copy; 2017 All right reserved. Designed by <a href="http://www.themevault.net/" target="_blank">ThemeVault.</a>
                    </div>
                </div>
            </div>
        </footer>

        <!--back to top--->
        <a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
            <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
            <span>Top</span>
        </a>

    </div>
</body>

</html>