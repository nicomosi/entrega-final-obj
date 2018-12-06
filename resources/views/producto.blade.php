<!DOCTYPE html>
<html lang="en">
{{-- Start Head tag --}}
@include('partials._head')
{{-- End Head tag --}}
<body>

    <div class="wrapper">
        <!-- Start Header Section -->
        @include('partials._header')
        <!-- End Header Section -->
        <!-- Start Page Title Section -->
        <div class="page-ttl page-dark">
            <div class="layer-stretch">
                <div class="page-ttl-container">
                    <h1>Producto <span class="text-primary">{{$producto->nombre}}</span></h1>
                    <p><a href="{{Route('home')}}">Inicio</a> &#8594; <a href="{{Route('productosShow')}}">Productos</a> &#8594; <span>{{$producto->nombre}}</span></p>
                </div>
            </div>
        </div><!-- End Page Title Section -->
        <!-- Start Page Section -->
        <div class="shop">
            <div class="layer-stretch">
                <div class="layer-wrapper pb-20">
                    <div class="row pt-4">
                        <div class="col-md-5">
                            <div class="flexslider thumbnail-slider">
                                <ul class="slides">
                                    <li data-thumb="/storage/productos/{{$producto->foto1}}">
                                        <img src="/storage/productos/{{$producto->foto1}}" alt="" />
                                    </li>
                                    <li data-thumb="/storage/productos/{{$producto->foto2}}">
                                        <img src="/storage/productos/{{$producto->foto2}}" alt="" />
                                    </li>
                                    <li data-thumb="/storage/productos/{{$producto->foto3}}">
                                        <img src="/storage/productos/{{$producto->foto3}}" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="shopp-details">
                                <h2>{{$producto->nombre}}</h2>
                                @if ($producto->precioDescuento == 0)
                                    <div class="price"><del></del> ${{$producto->precio}}</div>
                                @else
                                    <div class="price"><del>${{$producto->precio}}</del> ${{$producto->precioDescuento}}</div>
                                @endif
                                <p class="description">{{$producto->descripcion}}</p>
                                {{-- <ul class="list">
                                    <li><strong>SKU: </strong>9540</li>
                                    <li><strong>COLORS: </strong>Black</li>
                                    <li><strong>SIZES: </strong>XS,S,M,L,XL</li>
                                    <li><strong>CONDITION: </strong>New</li>
                                </ul> --}}
                                <div class="row m-0">
                                    {{-- <div class="col-md-4">
                                        <div class="meta">
                                            <span>Size</span>
                                            <span>
                                                <select class="form-control">
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                    <option>XL</option>
                                                </select>
                                            </span>
                                        </div>
                                    </div> --}}
                                    <div class="col-md-8">
                                        <div class="meta">
                                            <span>Quantity</span>
                                            <span>
                                                <input type="number" class="form-control" placeholder="Quantity">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-button">
                                    <a href="#" onclick="addCarrito" class="btn btn-dark"><i class="icon-basket mr-2"></i> Agregar al Carrito</a>
                                    <a href="#" class="btn btn-outline btn-primary btn-outline-2x"><i class="fa fa-shopping-cart mr-2"></i>Comprar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-12">
                            <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-primary">
                                <li class="nav-item">
                                    <a class="nav-link active font-18" href="#moreinfo" data-toggle="tab">Más Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link font-18" href="#specification" data-toggle="tab">Especificaciones</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="moreinfo">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="m-0">Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam. In quis scelerisque velit. Proin pellentesque neque ut scelerisque dapibus. Praesent elementum feugiat dignissim. Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam. In quis scelerisque velit. Proin pellentesque neque ut scelerisque dapibus. Praesent elementum feugiat dignissim. Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="m-0">Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam. In quis scelerisque velit. Proin pellentesque neque ut scelerisque dapibus. Praesent elementum feugiat dignissim. Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam. In quis scelerisque velit. Proin pellentesque neque ut scelerisque dapibus. Praesent elementum feugiat dignissim. Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam.</p>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="specification">
                                    <div class="">
                                        <table class="table table-bordered table-striped">
                                            <tbody>
                                                <tr>
                                                    <td>Peso</td>
                                                    <td>Small, Medium, Large &#38; Extra Large</td>
                                                </tr>
                                                <tr>
                                                    <td>Calorías</td>
                                                    <td>Red, Blue, Green &#38; Black</td>
                                                </tr>
                                                <tr>
                                                    <td>Composición</td>
                                                    <td>55mm, 105mm</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default mt-5">
                        <div class="panel-head">
                            <div class="panel-title">Productos Relacionados</div>
                        </div>
                        <div class="panel-wrapper">
                            <div class="panel-body related-product">
                                <div class="owl-carousel owl-theme multi-item-slider">
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
                                    <div class="theme-owlslider-container">
                                        <img class="img-responsive" src="uploads/shop-41.jpg" alt="">
                                        <h6 class="title"><a href="#">Leather Wallet and Watch</a></h6>
                                        <div class="price">$499</div>
                                    </div>
                                    <div class="theme-owlslider-container">
                                        <img class="img-responsive" src="uploads/shop-51.jpg" alt="">
                                        <h6 class="title"><a href="#">Leather Wallet and Watch</a></h6>
                                        <div class="price">$499</div>
                                    </div>
                                </div>
                            </div>
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
