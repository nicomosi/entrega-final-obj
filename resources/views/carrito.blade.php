<!DOCTYPE html>
<html lang="en">
@include('partials._head')
<body >
    @include('partials._header')

    @if (Session::has('carrito'))
    <div class="row d-flex text-center">
        <div class="col-md-12 col-lg-12 col-sm-12">

            <h1>Mi Carrito</h1>
        </div>

    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-9">
            <div class="panel">
                <div class="panel-head">
                    <h5 class="panel-title">Detalle de tu carrito</h5>
                </div>
                <div class="panel-body">
                    <table class="table table-head-bg table-head-danger table-bordered-danger">
                        <thead>
                            <tr>

                                <th style="font-size:1.3em;"><small><strong># ID</strong></small></th>
                                <th style="font-size:1.3em;"><i class="fas fa-gift" style="margin-right:4px; font-size:1.5em;"></i><small><strong>Producto</strong></small></th>
                                <th style="font-size:1.3em;"><i class="fas fa-dollar-sign" style="margin-right:4px; font-size:1.5em;"></i><small><strong>Precio (/u)</strong></small></th>
                                <th style="font-size:1.3em;"><i class="fas fa-sort-amount-up" style="margin-right:4px; font-size:1.5em;"></i><small><strong>Unidades</strong></small></th>
                                <th style="font-size:1.3em;"><i class="fas fa-dollar-sign" style="margin-right:4px; font-size:1.5em;"></i><small><strong>Precio Final</strong></small></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td>{{$producto['item']['id']}}</td>
                                    <td>{{$producto['item']['nombre']}}</td>
                                    <td>{{$producto['item']['precio']}}</td>
                                    <td>{{$producto['cantidad']}}</td>
                                    <td>{{$producto['precio']}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<div class="row d-flex justify-content-center">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 col-lg-4 d-flex justify-content-center flex-wrap">
        <div style="width:100%; text-align:center">
            <h2><strong>Total: $ {{$precioTotal}}</strong></h2>
        </div>
        <div class="btn-group col-lg-12 justify-content-between">
            <button class="btn btn-success">Finalizar Compra</button>
            <button class="btn btn-primary">Seguir Comprando</button>

            <button class="btn btn-danger">Eliminar Carrito</button>
        </div>

    </div>
</div>

@else

@endif


</body>
</html>
