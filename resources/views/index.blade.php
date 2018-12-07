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
        <!-- Start Slider Section -->
        <div id="slider" class="slider-transparent slider-half">
            <div class="flexslider slider-wrapper">
                <ul class="slides">
                    <li>
                        <div class="slider-backgroung-image" style="background-image: url({{url('img/banner-1.jpg')}});">

                            <div class="layer-stretch">
                                <div class="slider-info">
                                    <br>
                                    <h1>Una vianda, un objetivo</h1>
                                    <p>¿Llevar a cabo una dieta se esta volviendo dificil?<br> En <strong>Objective Food</strong> nos encargamos de que tus comidas sean <strong> ricas </strong>, <strong>nutritivas </strong> y <strong>prácticas</strong>. <br><br>¡Alcanzá tus metas sin preocupaciones!</p>
                                    <div class="slider-button">
                                        <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect button button-primary button-pill">Ver Más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!-- End Slider Section -->

        <div class="ecommerce">
            <div class="layer-stretch col-sm-12 col-md-12 col-lg-10">
                <div class="layer-wrapper pb-20">
                    <div class="layer-ttl"><h4>Productos <span class="text-primary">Destacados</span></h4></div>
                    <div class="row pt-4">

                        @foreach(App\Producto::where('destacado', 1)->get() as $producto)

                        <div class="col-sm-12 col-md-6 col-lg-4">
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
                                        @if ($producto->descuento == 0)
                                            ${{$producto->precio}}
                                        @else
                                            <del>${{$producto->precio}}</del>${{$producto->precioDescuento}}
                                            {{-- <div class="price"><del>${{$producto->precio}}</del> ${{$producto->precioDescuento}}</div> --}}
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
                                        <a href="#" class="btn btn-outline btn-dark btn-outline-1x btn-sm m-1">Agregar al Carrito</a>
                                        <a href="#" class="btn btn-outline btn-dark btn-outline-1x btn-sm m-1">Comprar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
        <!-- Start Team Section -->
        <div class="bg-light">
            <div class="layer-stretch">
                <div class="layer-wrapper pb-20">
                    <div class="layer-ttl"><h4>Productos <span class="text-primary">Más Recientes</span></h4></div>
                    <div class="row pt-4">
                        <div class="col-12">
                            <div class="related-product">
                                <div class="owl-carousel owl-theme multi-item-slider">
                                    @foreach ($productos as $producto)
                                        <div class="theme-owlslider-container">
                                            <img class="img-responsive" src="/storage/productos/{{$producto->foto1}}" alt="img producto">
                                            <h6 class="title"><a href="/producto/{{$producto->id}}">{{$producto->nombre}}</a></h6>
                                            <div class="price">${{$producto->precio}}</div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Team Section -->


        <!-- Start Footer Section -->
        @include('partials._footer')
        <!-- End of Footer Section -->
    </div>


    <!-- **********Included Scripts*********** -->

@include('partials._bottomScripts')

</body>
</html>
