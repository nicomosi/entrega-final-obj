<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Site Title -->
    <title>APEZ - Responsive Multi-Purpose HTML5 Template</title>
    <!-- Meta Description Tag -->
    <meta name="Description" content="APEZ - Responsive Multi-Purpose HTML5 Template">
    <!-- Favicon Icon -->
    <link rel="icon" type="image/x-icon" href="images/favicon.png" />
    <!-- Material Design Lite Stylesheet CSS -->
    <link rel="stylesheet" href="assets/plugin/material/material.min.css" />
    <!-- Material Design Select Field Stylesheet CSS -->
    <link rel="stylesheet" href="assets/plugin/material/mdl-selectfield.min.css">
    <!-- Animteheading Stylesheet CSS -->
    <link rel="stylesheet" href="assets/plugin/animateheading/animateheading.min.css" />
    <!-- Owl Carousel Stylesheet CSS -->
    <link rel="stylesheet" href="assets/plugin/owl_carousel/owl.carousel.min.css" />
    <!-- Animate Stylesheet CSS -->
    <link rel="stylesheet" href="assets/plugin/animate/animate.min.css" />
    <!-- Magnific Popup Stylesheet CSS -->
    <link rel="stylesheet" href="assets/plugin/magnific_popup/magnific-popup.min.css" />
    <!-- Flex Slider Stylesheet CSS -->
    <link rel="stylesheet" href="assets/plugin/flexslider/flexslider.min.css" />
    <!-- Custom Main Stylesheet CSS -->
    <link rel="stylesheet" href="dist/css/style.css">
</head>
<body>
    <div class="wrapper">
        @include('partials._header')
        <!-- Start Page Title Section -->
        <div class="page-ttl page-dark">
            <div class="layer-stretch">
                <div class="page-ttl-container">
                    <h1>Viandas</h1>
                </div>
            </div>
        </div><!-- End Page Title Section -->
        <!-- Start Page Section -->
        <div class="shop">
            <div class="layer-stretch">
                <div class="layer-wrapper pb-20">
                    <div class="row pt-4">
                        <div class="col-lg-9">
                            <div class="row align-items-center shop-filter">
                                <div class="col-sm-4">
                                    <select class="custom-select">
                                        <option>Aleatorio</option>
                                        <option>Filtrar por más buscados</option>
                                        <option>Filtrar por rating</option>
                                        <option>Filtrar por más recientes</option>
                                        <option>Filtrar por precio: menor a mayor</option>
                                        <option>Filtrar por precio: mayor a menor</option>
                                    </select>
                                </div>
                                <div class="col-sm-8 text-right">
                                    <p class="m-0">Mostrando 1–10 de 55 resultados</p>
                                </div>
                            </div>
                            <div class="row">
                                @foreach ($productos as $producto)
                                    <div class="col-md-6 col-lg-4">
                                        <div class="product-card">
                                            <div class="product-img">
                                                <div class="owl-carousel owl-theme theme-owlslider dots-overlay text-center">
                                                    <div class="theme-owlslider-container">
                                                        <a href="/producto/{{$producto->id}}"><img class="img-responsive" src="/storage/productos/{{$producto->foto1}}" alt=""></a>
                                                    </div>
                                                    <div class="theme-owlslider-container">
                                                        <a href="/producto/{{$producto->id}}"><img class="img-responsive" src="/storage/productos/{{$producto->foto2}}" alt=""></a>
                                                    </div>
                                                    <div class="theme-owlslider-container">
                                                        <a href="/producto/{{$producto->id}}"><img class="img-responsive" src="/storage/productos/{{$producto->foto3}}" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details">
                                                <h5 class="title"><a href="/producto/{{$producto->id}}">{{$producto->nombre}}</a></h5>
                                                <div class="price">
                                                    @if ($producto->precioDescuento == 0)
                                                        <del></del>${{$producto->precio}}
                                                    @else
                                                        <del>${{$producto->precio}}</del>${{$producto->precioDescuento}}
                                                    @endif
                                                </div>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div>
                                                    <a href="{{route('agregarItem', ['id'=>$producto->id])}}" class="btn btn-outline btn-dark btn-outline-1x btn-sm m-1">Agregar al CArrito</a>
                                                    <a href="#" class="btn btn-outline btn-dark btn-outline-1x btn-sm m-1">Comprar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="panel panel-default eventp-sidebar">
                                <div class="panel-head">
                                    <div class="panel-title">
                                        <span class="panel-title-text">Categorías</span>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <ul class="category-list">
                                        <li><a href="#"><i class="icon-arrow-right"></i>Nuevas Viandas</a><span>(10)</span></li>
                                        <li><a href="#"><i class="icon-arrow-right"></i>Adelgazar</a><span>(21)</span></li>
                                        <li><a href="#"><i class="icon-arrow-right"></i>Aumentar masa muscular</a><span>(13)</span></li>
                                        <li><a href="#"><i class="icon-arrow-right"></i>Dietas especificas</a><span>(7)</span></li>
                                        <li><a href="#"><i class="icon-arrow-right"></i>Darse un gusto</a><span>(5)</span></li>
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="panel panel-default eventp-sidebar">
                                <div class="panel-head">
                                    <div class="panel-title">
                                        <span class="panel-title-text">Latest Product</span>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <ul class="widget-product">
                                        <li class="row align-items-center">
                                            <div class="col-4 p-0">
                                                <div class="img">
                                                    <a href="#"><img src="uploads/shop-11.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <h6 class="title"><a href="#">Canon Camera</a></h6>
                                                <div class="price"><del>79.99</del> $59.99</div>
                                                <div class="link">
                                                    <a href="#"><i class="icon-basket"></i>Add to Cart</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="row align-items-center">
                                            <div class="col-4 p-0">
                                                <div class="img">
                                                    <a href="#"><img src="uploads/shop-21.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <h6 class="title"><a href="#">Multiple Product</a></h6>
                                                <div class="price">$119.99</div>
                                                <div class="link">
                                                    <a href="#"><i class="icon-basket"></i>Add to Cart</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="row align-items-center">
                                            <div class="col-4 p-0">
                                                <div class="img">
                                                    <a href="#"><img src="uploads/shop-31.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <h6 class="title"><a href="#">Leather Wallet</a></h6>
                                                <div class="price">$99.99</div>
                                                <div class="link">
                                                    <a href="#"><i class="icon-basket"></i>Add to Cart</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="row align-items-center">
                                            <div class="col-4 p-0">
                                                <div class="img">
                                                    <a href="#"><img src="uploads/shop-51.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <h6 class="title"><a href="#">Camera</a></h6>
                                                <div class="price">$999.99</div>
                                                <div class="link">
                                                    <a href="#"><i class="icon-basket"></i>Add to Cart</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="row align-items-center">
                                            <div class="col-4 p-0">
                                                <div class="img">
                                                    <a href="#"><img src="uploads/shop-61.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <h6 class="title"><a href="#">Apple Watch</a></h6>
                                                <div class="price">$499</div>
                                                <div class="link">
                                                    <a href="#"><i class="icon-basket"></i>Add to Cart</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                            {{-- <div class="panel panel-default eventp-sidebar">
                                <div class="panel-head">
                                    <div class="panel-title">
                                        <span class="panel-title-text">Featured Product</span>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="featured-product">
                                        <div class="owl-carousel owl-theme theme-owlslider">
                                            <div class="theme-owlslider-container">
                                                <img class="img-responsive" src="uploads/shop-11.jpg" alt="">
                                                <h6 class="title"><a href="#">Canon Camera</a></h6>
                                                <div class="price">$499</div>
                                            </div>
                                            <div class="theme-owlslider-container">
                                                <img class="img-responsive" src="uploads/shop-21.jpg" alt="">
                                                <h6 class="title"><a href="#">Multiple Product</a></h6>
                                                <div class="price">$499</div>
                                            </div>
                                            <div class="theme-owlslider-container">
                                                <img class="img-responsive" src="uploads/shop-31.jpg" alt="">
                                                <h6 class="title"><a href="#">Leather Wallet and Watch</a></h6>
                                                <div class="price">$499</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="panel panel-default eventp-sidebar">
                                <div class="panel-head">
                                    <div class="panel-title">
                                        <span class="panel-title-text">Product Tag</span>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="product-tag">
                                        <div class="tag-list">
                                            <a href="#">Accessories</a>
                                            <a href="#">Branding</a>
                                            <a href="#">Apple</a>
                                            <a href="#">Kids</a>
                                            <a href="#">Wallet</a>
                                            <a href="#">Cloth</a>
                                            <a href="#">Belts</a>
                                            <a href="#">Purse</a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Page Section -->
        {{-- <!-- Start Action Section -->
        <div class="action">
            <div class="layer-stretch">
                <div class="layer-wrapper text-center">
                    <div class="layer-ttl"><h4>We design <span class="text-primary">delightful</span> digital experiences</h4></div>
                    <div class="action-content">Read more about what we do and our philosophy of design. Judge for yourself The work and results we’ve achieved for other clients, and meet our highly experienced Team who just love to design, develop and deploy. Tell Us Your Story</div>
                    <a href="#" class="btn btn-outline btn-primary btn-pill btn-outline-2x btn-lg mt-3">Tell Us Your Story</a>
                </div>
            </div>
        </div><!-- End Action Section --> --}}
        <!-- Start Footer Section -->
        <footer id="footer">
            <div class="layer-stretch">
                <!-- Start main Footer Section -->
                <div class="row layer-wrapper">
                    <div class="col-md-4 footer-block">
                        <div class="footer-ttl"><p>Basic Info</p></div>
                        <div class="footer-container footer-a">
                            <div class="tbl">
                                <div class="tbl-row">
                                    <div class="tbl-cell"><i class="fa fa-map-marker"></i></div>
                                    <div class="tbl-cell">
                                        <p class="paragraph-medium paragraph-white">
                                            Your office, Building Name<br />
                                            Street name, Area<br />
                                            City, Country Pin Code
                                        </p>
                                    </div>
                                </div>
                                <div class="tbl-row">
                                    <div class="tbl-cell"><i class="fa fa-phone"></i></div>
                                    <div class="tbl-cell">
                                        <p class="paragraph-medium paragraph-white">11122333333</p>
                                    </div>
                                </div>
                                <div class="tbl-row">
                                    <div class="tbl-cell"><i class="fa fa-envelope"></i></div>
                                    <div class="tbl-cell">
                                        <p class="paragraph-medium paragraph-white">hello@yourdomain.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 footer-block">
                        <div class="footer-ttl"><p>Quick Links</p></div>
                        <div class="footer-container footer-b">
                            <div class="tbl">
                                <div class="tbl-row">
                                    <ul class="tbl-cell">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about-1.html">About</a></li>
                                        <li><a href="event-1.html">Event</a></li>
                                        <li><a href="contact-1.html">Contact</a></li>
                                        <li><a href="portfolio-1.html">Portfolio</a></li>
                                        <li><a href="#">Link</a></li>
                                    </ul>
                                    <ul class="tbl-cell">
                                        <li><a href="signin.html">Sign In</a></li>
                                        <li><a href="signup.html">Sign Up</a></li>
                                        <li><a href="services-1.html">Services</a></li>
                                        <li><a href="Blogs-1.html">Blogs</a></li>
                                        <li><a href="Blog-1.html">Blog</a></li>
                                        <li><a href="team-1.html">Team</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 footer-block">
                        <div class="footer-ttl"><p>Newsletter</p></div>
                        <div class="footer-container footer-c">
                            <div class="footer-subscribe">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                    <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="subscribe-email">
                                    <label class="mdl-textfield__label" for="subscribe-email">Your Email</label>
                                    <span class="mdl-textfield__error">Please Enter Valid Email!</span>
                                </div>
                                <div class="footer-subscribe-button">
                                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary">Submit</button>
                                </div>
                            </div>
                            <ul class="social-list social-list-colored footer-social">
                                <li>
                                    <a href="#" target="_blank" id="footer-facebook" class="fab fa-facebook"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-facebook">Facebook</span>
                                </li>
                                <li>
                                    <a href="#" target="_blank" id="footer-twitter" class="fab fa-twitter"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-twitter">Twitter</span>
                                </li>
                                <li>
                                    <a href="#" target="_blank" id="footer-google" class="fab fa-google"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-google">Google</span>
                                </li>
                                <li>
                                    <a href="#" target="_blank" id="footer-instagram" class="fab fa-instagram"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-instagram">Instagram</span>
                                </li>
                                <li>
                                    <a href="#" target="_blank" id="footer-youtube" class="fab fa-youtube"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-youtube">Youtube</span>
                                </li>
                                <li>
                                    <a href="#" target="_blank" id="footer-linkedin" class="fab fa-linkedin"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-linkedin">Linkedin</span>
                                </li>
                                <li>
                                    <a href="#" target="_blank" id="footer-flickr" class="fab fa-flickr"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-flickr">Flickr</span>
                                </li>
                                <li>
                                    <a href="#" target="_blank" id="footer-rss" class="fab fa-rss"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-rss">Rss</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- End main Footer Section -->
            <!-- Start Copyright Section -->
            <div id="copyright">
                <div class="layer-stretch">
                    <div class="paragraph-medium paragraph-white">2017 © Pepdev ALL RIGHTS RESERVED.</div>
                </div>
            </div><!-- End of Copyright Section -->
        </footer><!-- End of Footer Section -->
    </div>
    <!-- **********Included Scripts*********** -->

    <!-- Jquery Library 2.1 JavaScript-->
    <script src="assets/plugin/jquery/jquery-2.1.4.min.js"></script>
    <!-- Popper JavaScript-->
    <script src="assets/plugin/popper/popper.min.js"></script>
    <!-- Bootstrap Core JavaScript-->
    <script src="assets/plugin/bootstrap/bootstrap.min.js"></script>
    <!-- Modernizr Core JavaScript-->
    <script src="assets/plugin/modernizr/modernizr.js"></script>
    <!-- Animaateheading JavaScript-->
    <script src="assets/plugin/animateheading/animateheading.js"></script>
    <!-- Material Design Lite JavaScript-->
    <script src="assets/plugin/material/material.min.js"></script>
    <!-- Material Select Field Script -->
    <script src="assets/plugin/material/mdl-selectfield.min.js"></script>
    <!-- Flexslider Plugin JavaScript-->
    <script src="assets/plugin/flexslider/jquery.flexslider.min.js"></script>
    <!-- Owl Carousel Plugin JavaScript-->
    <script src="assets/plugin/owl_carousel/owl.carousel.min.js"></script>
    <!-- Scrolltofixed Plugin JavaScript-->
    <script src="assets/plugin/scrolltofixed/jquery-scrolltofixed.min.js"></script>
    <!-- Magnific Popup Plugin JavaScript-->
    <script src="assets/plugin/magnific_popup/jquery.magnific-popup.min.js"></script>
    <!-- WayPoint Plugin JavaScript-->
    <script src="assets/plugin/waypoints/jquery.waypoints.min.js"></script>
    <!-- CounterUp Plugin JavaScript-->
    <script src="assets/plugin/counterup/jquery.counterup.js"></script>
    <!-- masonry Plugin JavaScript-->
    <script src="assets/plugin/masonry_pkgd/masonry.pkgd.min.js"></script>
    <!-- SmoothScroll Plugin JavaScript-->
    <script src="assets/plugin/smoothscroll/smoothscroll.min.js"></script>
    <!--Custom JavaScript-->
    <script src="dist/js/custom.js"></script>

</body>
</html>
