<!DOCTYPE html>
<html lang="en">
    {{-- Head Section --}}
@include('partials._head')
    {{-- End Head Section --}}

<body>
    <div class="wrapper">
        <!-- Start Header Section -->
        <header class="header-1">
            <div class="hdr-topbar">
                <div class="layer-stretch">
                    <div class="row pt-1 pb-1">
                        <div class="col-md-5">
                            <ul class="social-list social-list-sm">
                                <li>
                                    <a href="#" id="sample-facebook-1"><i class="fab fa-facebook"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-facebook-1">Facebook</span>
                                </li>

                                <li>
                                    <a href="#" id="sample-instagram-1"><i class="fab fa-instagram"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-instagram-1">Instagram
                                    </span>
                                </li>
                                <li>
                                    <a href="#" id="sample-youtube-1"><i class="fab fa-youtube"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-youtube-1">Youtube</span>
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-7 hdr-link text-right">
                            @guest
                            <a class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect button button-white button-sm m-1" href="{{route('login')}}"><i class="icon-login mr-2"></i>Login</a>
                            {{-- <a href="#" class="btn btn-primary m-3" data-toggle="modal" data-target="#signInPopup">Sign In Popup</a> --}}
                            <div class="separator"></div>
                                @if (Route::has('register'))
                                    <a class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect button button-white button-sm m-1" href="{{route('register')}}"><i class="icon-user-follow mr-2"></i>Registro</a>
                                @endif
                                <div class="separator"></div>
                                @else
                                <a class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect button button-white button-sm m-1" id="my-account"><i class="icon-user-follow mr-2"></i>Mi Cuenta</a>
                                @endguest
                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="my-account">

                                <li class="mdl-menu__item">Mi Perfil</li>
                                <li class="mdl-menu__item">Cambiar Contraseña</li>
                                @guest

                                @else
                                @if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('superAdmin'))
                            <li class="mdl-menu__item"> <a href="{{Route('consultas')}}">Back Office</a></li>
                                @endif

                                @endguest
                                <li class="mdl-menu__item">
                                    <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                                {{-- @endguest --}}

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layer-stretch hdr">
                <div class="tbl">
                    <div class="tbl-row">
                        <!-- Start Header Logo Section -->
                        <div class="tbl-cell hdr-logo">
                            <a href="index.html"><img src="images/logo-black.png" alt=""></a>
                        </div><!-- End Header Logo Section -->
                        <div class="tbl-cell hdr-menu">
                            <!-- Start Menu Section -->
                            <ul class="menu">
                                <li class="menu-megamenu-li">
                                    <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="{{url('/')}}">Home</a>
                                </li>
                                <li class="menu-megamenu-li">
                                    <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="{{route('productosShow')}}">Viandas</a>
                                </li>
                                <li class="menu-megamenu-li">
                                    <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="{{url('faq')}}">Faq</a>
                                </li>
                                <li class="menu-megamenu-li">
                                    <a class="mdl-button mdl-js-button mdl-js-ripple-effect btn" href="#" data-toggle="modal" data-target="#contactPopup">Contacto</a>
                                </li>
                                <li class="menu-megamenu-li">
                                    <a class="mdl-button mdl-js-button mdl-js-ripple-effect hdr-basket" href="{{route('miCarrito')}}"><i class="fa fa-cart-plus"></i><span class="cart-count">{{Session::has('carrito') ? Session::get('carrito')->cantidadTotal : ''}}</span></a>
                                    {{-- <ul class="menu-megamenu menu-cart">
                                        <li class="cart-overview">
                                            <a href="#" class="row">
                                                <div class="col-4 pr-0 cart-img">
                                                    <img src="uploads/shop-11.jpg" alt="">
                                                </div>
                                                <div class="col-8 cart-details">
                                                    <span class="title">Canvas Backpack</span>
                                                    <span class="price">$39</span>
                                                    <span class="qty">Quantity - 3</span>
                                                    <div class="cart-remove"><i class="icon-close"></i></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="cart-overview">
                                            <a href="#" class="row">
                                                <div class="col-4 pr-0 cart-img">
                                                    <img src="uploads/shop-31.jpg" alt="">
                                                </div>
                                                <div class="col-8 cart-details">
                                                    <span class="title">Leather Wallet</span>
                                                    <span class="price">$49</span>
                                                    <span class="qty">Quantity - 3</span>
                                                    <div class="cart-remove"><i class="icon-close"></i></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="row align-items-center">
                                            <div class="col-6">
                                                <a href="#" class="btn btn-dark text-white text-center">Checkout</a>
                                            </div>
                                            <div class="col-6 text-right">
                                                <p class="font-dosis font-20 m-0">Total : $98</p>
                                            </div>
                                        </li>
                                    </ul> --}}
                                </li>
                                {{-- <li>
                                    <a class="mdl-button mdl-js-button mdl-js-ripple-effect hdr-search" href="#"><i class="fa fa-search"></i></a>
                                </li> --}}
                                <li class="mobile-menu-close"><i class="fa fa-times"></i></li>
                            </ul><!-- End Menu Section -->
                            <div id="menu-bar"><a><i class="fa fa-bars"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="search-bar animated zoomIn">
                    <div class="search-content">
                        <div class="search-input">
                            <input type="text" placeholder="¿Que estás Buscando?">
                            <button class="search-btn"><i class="icon-magnifier"></i></button>
                        </div>
                    </div>
                    <div class="search-close"><i class="icon-close"></i></div>
                </div>
            </div>
            @if (session('success'))
                <div class="col-md-12 alert-success d-flex align-items-center justify-content-center" style="height: 10vh; font-size:1.5em; font-weight:600; ">
                    {{session('message')}}
                </div>
            @endif
        </header><!-- End Header Section -->
        <!-- Start Contact Popup -->
        <div id="contactPopup" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Envianos tu Consulta</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row pb-4">
                            <form action="{{route('nuevaConsulta')}}" method="post" style="width:100%;" class=" d-flex flex-wrap">
                                @csrf
                                <div class="col-md-6">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                        <input class="mdl-textfield__input" type="text" id="contact-name" name="nombre">
                                        <label class="mdl-textfield__label" for="contact-name">Tu nombre</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                        <input class="mdl-textfield__input" type="text" id="contact-email" name="email">
                                        <label class="mdl-textfield__label" for="contact-email">Tu e-mail</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                        <input class="mdl-textfield__input" type="text" id="contact-phone" name="celular">
                                        <label class="mdl-textfield__label" for="contact-phone">Tu Celular</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                        <textarea class="mdl-textfield__input" rows="3" id="contact-message" name="mensaje"></textarea>
                                        <label class="mdl-textfield__label" for="contact-message">Mensaje</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised button button-success">Enviar Consulta</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End contact Popup -->

        {{-- Start Login Popup --}}


        {{-- End Login Popup --}}




    <!-- **********Included Scripts*********** -->

   @include('partials._bottomScripts')

</body>
</html>
