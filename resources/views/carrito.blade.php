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
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <ul class="list-group">
            {{-- {{dd(session('carrito'))}} --}}
            @foreach ($productos as $producto)
                <li class="list-group-item">
                    {{-- {{dd($nuevoItem)}} --}}
                    <span class="badge">{{$producto['cantidad']}}</span>
                    <strong>{{$producto['item']['nombre']}}</strong>
                    <span class="badge">${{$producto['precio']}}</span>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger btn-xs dropdowntoggle" data-toggle="dropdown">
                            Action <span class="caret"></span>
                            <ul class="dropdown-menu">
                                <li><a href="#">Eliminar 1</a></li>
                                <li><a href="#">Eliminar Todos</a></li>


                            </ul>
                        </button>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
<div class="row text-center">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <h2><strong>Total: {{$precioTotal}}</strong></h2>
    </div>
</div>

@else

@endif


</body>
</html>
