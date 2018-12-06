<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Carrito;
use Session;
class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('index')->with('productos', $productos);
    }

    public function view(){
       $productos = Producto::all();
       return view('productos')->with('productos', $productos);
    }

    public function getCarrito()
    {
        if (!Session::has('carrito')) {
            return view('carrito');
        }
        $carritoViejo=Session::get('carrito');
        $carrito=new Carrito($carritoViejo);
        return view('carrito', ['productos'=>$carrito->items, 'precioTotal'=>$carrito->precioTotal]);
    }

    // A la función getAgregar item necesito pasarle como primer parametro
    // request y como segundo parametro $id para que reciba el product id por get.
    // Pasandole el request tambíen va a hacer que se guarde la sesión.
    // Request crea el objeto request.
    public function getAgregarItem(Request $request, $id){
        $nuevoItem=Producto::find($id);
        $carritoViejo=Session::has('carrito') ? Session::get('carrito') : null;
        $carrito= new Carrito($carritoViejo);
        $carrito->agregarItem($nuevoItem, $nuevoItem->id);

        $request->session()->put('carrito', $carrito);
        // dd($request->session()->get('carrito'));
        return redirect()->route('productosShow');
    }

    public function deleteCart(){

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        return view('producto')->with('producto', $producto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
