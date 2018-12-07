<!DOCTYPE html>
<html lang="en">
{{-- Start Head tag --}}
@include('partials._head')
{{-- End Head tag --}}
<body>
    <div class="wrapper">
        @include('partials._header')
        <!-- Start Page Title Section -->
        <div class="page-ttl">
            <div class="layer-stretch">
                <div class="page-ttl-container">
                    <h1>Faqs</h1>
                </div>
            </div>
        </div><!-- End Page Title Section -->
        <!-- Start FAQ Section -->
        <div class="light-background">
            <div class="layer-tablet">
                <div class="layer-wrapper pb-0">
                    <div class="panel panel-default mt-4">
                        <div class="panel-head">
                            <div class="panel-title" style="font-size:1.9em;">Preguntas Frecuentes</div>
                        </div>
                        <div class="panel-body">
                            <div class="theme-accordion-container">
                                <div class="theme-accordion">
                                    <div class="theme-accordion-hdr">
                                        <h4 class="text-primary"><span class="icon-question"></span> ¿Cuál es el costo de Envio?</h4>
                                        <div class="theme-accordion-control"><i class="fa fa-plus"></i></div>
                                    </div>
                                    <div class="theme-accordion-bdy">
                                        <div class="row p-3">
                                            <div class="col-12">
                                                <p class="paragraph-medium paragraph-black">
                                                    <span class="dropcap bg-primary text-white">E</span>
                                                    l costo de envío será mostrado en base al total de la compra y ubicación, en el checkout, en el momento previo a la compra. Podes calcularlo completando el Código Postal.
                                                </p>
                                                {{-- <div class="pull-right">
                                                    <a href="#" class="link-icon"><span>View More</span><i class="ti-angle-double-right"></i></a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-accordion">
                                    <div class="theme-accordion-hdr">
                                        <h4 class="text-primary"><span class="icon-question"></span> ¿Cómo se realizan los Envios?</h4>
                                        <div class="theme-accordion-control"><i class="fa fa-plus"></i></div>
                                    </div>
                                    <div class="theme-accordion-bdy">
                                        <div class="row p-3">
                                            <div class="col-12">
                                                <p class="paragraph-medium paragraph-black">
                                                    <span class="dropcap bg-primary text-white">T</span>
                                                    rabajamos con OCA. Realizamos envios a todo el pais. Retiro por CAPITAL FEDERAL. A traves de la compra te pondras en contacto con nosotros para coordinar la entrega. Cualquier duda podes enviarnos mail a ventas@objetcivdefood.com
                                                </p>
                                                {{-- <div class="pull-right">
                                                    <a href="#" class="link-icon"><span>View More</span><i class="ti-angle-double-right"></i></a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-accordion">
                                    <div class="theme-accordion-hdr">
                                        <h4 class="text-primary"><span class="icon-question"></span> ¿Cuánto tarda en llegar el pedido?</h4>
                                        <div class="theme-accordion-control"><i class="fa fa-plus"></i></div>
                                    </div>
                                    <div class="theme-accordion-bdy">
                                        <div class="row p-3">
                                            <div class="col-12">
                                                <p class="paragraph-medium paragraph-black">
                                                    <span class="dropcap bg-primary text-white">E</span>
                                                    l tiempo de entrega depende de la aprobación del medio de pago, del medio de envío seleccionado y de la distancia del domicilio de recepción. En general la demora se encuentra entre 3 y 7 días hábiles luego de acreditado el pago. Los envíos de OCA serán despachados los días Martes por la mañana. Los días que se indiquen al calcular el costo de envío por OCA son estimativos.
                                                </p>
                                                {{-- <div class="pull-right">
                                                    <a href="#" class="link-icon"><span>View More</span><i class="ti-angle-double-right"></i></a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-accordion">
                                    <div class="theme-accordion-hdr">
                                        <h4 class="text-primary"><span class="icon-question"></span> ¿Cuáles son los días y horarios de entrega?</h4>
                                        <div class="theme-accordion-control"><i class="fa fa-plus"></i></div>
                                    </div>
                                    <div class="theme-accordion-bdy">
                                        <div class="row p-3">
                                            <div class="col-12">
                                                <p class="paragraph-medium paragraph-black">
                                                    <span class="dropcap bg-primary text-white">E</span>
                                                    l pedido sera entregado los días hábiles (L a V) de 8:00 a 18:00 hs. en el domicilio que indiques y deberán ser recibidos por una persona mayor de 18 años exhibiendo DNI, quien deberá firmar el acuse de recibo. OCA realizará dos (2) intentos de entrega. En la segunda visita se dejará un aviso, para que el pedido sea retirado en la sucursal que se encuentra tramitando el envío, dentro de los cinco (5) días hábiles.
                                                </p>
                                                {{-- <div class="pull-right">
                                                    <a href="#" class="link-icon"><span>View More</span><i class="ti-angle-double-right"></i></a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-accordion">
                                    <div class="theme-accordion-hdr">
                                        <h4 class="text-primary"><span class="icon-question"></span> ¿Cuáles son los días y horarios para retiro?</h4>
                                        <div class="theme-accordion-control"><i class="fa fa-plus"></i></div>
                                    </div>
                                    <div class="theme-accordion-bdy">
                                        <div class="row p-3">
                                            <div class="col-12">
                                                <p class="paragraph-medium paragraph-black">
                                                    <span class="dropcap bg-primary text-white">E</span>
                                                    l pedido para retiro por Palermo, se realizara de Lunes a Viernes previamente coordinado via mail. Envianos a ventas@mailempresa.com.ar
                                                </p>
                                                {{-- <div class="pull-right">
                                                    <a href="#" class="link-icon"><span>View More</span><i class="ti-angle-double-right"></i></a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-accordion">
                                    <div class="theme-accordion-hdr">
                                        <h4 class="text-primary"><span class="icon-question"></span> Políticas de Devolución</h4>
                                        <div class="theme-accordion-control"><i class="fa fa-plus"></i></div>
                                    </div>
                                    <div class="theme-accordion-bdy">
                                        <div class="row p-3">
                                            <div class="col-12">
                                                <p class="paragraph-medium paragraph-black">
                                                    <span class="dropcap bg-primary text-white">S</span>
                                                    erá condición para realizar el cambio del producto que el mismo se encuentre en óptimas condiciones (Packaging original, etiquetas, etc) sin haber sido utilizado ni dañado y presentando la etiqueta de cambio correspondiente. Si el producto no cumple con estos requisitos no será autorizado su cambio. NOMBREEMPRESA no se hace responsable por el costo de envío surgido por un cambio, el mismo corre por cuenta del comprador. Nos haremos cargo en el caso del que producto se encuentre fallado o en mal estado. Para hacer cualquier tipo de cambio deberás escribirnos a ventas@mailempresa.com.ar dentro de los diez (10) días de recibido el producto explicándonos el motivo del cambio. Tendrás 10 días desde efectuada la compra para elegir otro modelo o color (previendo stock disponible)
                                                </p>
                                                {{-- <div class="pull-right">
                                                    <a href="#" class="link-icon"><span>View More</span><i class="ti-angle-double-right"></i></a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-accordion">
                                    <div class="theme-accordion-hdr">
                                        <h4 class="text-primary"><span class="icon-question"></span> ¿Cuál es el plazo para realizar un cambio?</h4>
                                        <div class="theme-accordion-control"><i class="fa fa-plus"></i></div>
                                    </div>
                                    <div class="theme-accordion-bdy">
                                        <div class="row p-3">
                                            <div class="col-12">
                                                <p class="paragraph-medium paragraph-black">
                                                    <span class="dropcap bg-primary text-white">P</span>
                                                    uedes solicitar un cambio hasta 10 días luego de realizada la compra. Siempre y cuando se encuentre en condiciones y con la tarjeta de la marca.
                                                </p>
                                                {{-- <div class="pull-right">
                                                    <a href="#" class="link-icon"><span>View More</span><i class="ti-angle-double-right"></i></a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End FAQ Section -->
        </div>


        <!-- Start Footer Section -->
        @include('partials._footer')
        <!-- End of Footer Section -->
    </div>

    <!-- **********Included Scripts*********** -->


    <!-- Jquery Library 2.1 JavaScript-->
    <script src="{{url('assets/plugin/jquery/jquery-2.1.4.min.js')}}"></script>
    <!-- Popper JavaScript-->
    <script src="{{url('assets/plugin/popper/popper.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript-->
    <script src="{{url('assets/plugin/bootstrap/bootstrap.min.js')}}"></script>
    <!-- Modernizr Core JavaScript-->
    <script src="{{url('assets/plugin/modernizr/modernizr.js')}}"></script>
    <!-- Animaateheading JavaScript-->
    <script src="{{url('assets/plugin/animateheading/animateheading.js')}}"></script>
    <!-- Material Design Lite JavaScript-->
    <script src="{{url('assets/plugin/material/material.min.js')}}"></script>
    <!-- Material Select Field Script -->
    <script src="{{url('assets/plugin/material/mdl-selectfield.min.js')}}"></script>
    <!-- Flexslider Plugin JavaScript-->
    <script src="{{url('assets/plugin/flexslider/jquery.flexslider.min.js')}}"></script>
    <!-- Owl Carousel Plugin JavaScript-->
    <script src="{{url('assets/plugin/owl_carousel/owl.carousel.min.js')}}"></script>
    <!-- Scrolltofixed Plugin JavaScript-->
    <script src="{{url('assets/plugin/scrolltofixed/jquery-scrolltofixed.min.js')}}"></script>
    <!-- Magnific Popup Plugin JavaScript-->
    <script src="{{url('assets/plugin/magnific_popup/jquery.magnific-popup.min.js')}}"></script>
    <!-- WayPoint Plugin JavaScript-->
    <script src="{{url('assets/plugin/waypoints/jquery.waypoints.min.js')}}"></script>
    <!-- CounterUp Plugin JavaScript-->
    <script src="{{url('assets/plugin/counterup/jquery.counterup.js')}}"></script>
    <!-- masonry Plugin JavaScript-->
    <script src="{{url('assets/plugin/masonry_pkgd/masonry.pkgd.min.js')}}"></script>
    <!-- SmoothScroll Plugin JavaScript-->
    <script src="{{url('assets/plugin/smoothscroll/smoothscroll.min.js')}}"></script>
    <!--Custom JavaScript-->
    {{-- <script src="{{url('dist/js/custom.js')}}"></script> --}}


</body>
</html>
