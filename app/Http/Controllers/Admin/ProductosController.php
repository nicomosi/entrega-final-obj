<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Producto;

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
        return view('admin.viewProductos')->with('productos', $productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.newProductos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $success = 'Tu producto fue agregado';

        $producto = Producto::create([
            'nombre' => $request->input('nombre'),
            'precio' => $request->input('precio'),
            'stock' => $request->input('stock'),
            'descripcion' => $request->input('descripcion'),
            'foto1' => 'default.jpg',
            'foto2' => 'default.jpg',
            'foto3' => 'default.jpg',
        ]); 
        if($request->has('foto1')) {
            $tipoFoto = $request->foto1->getClientOriginalExtension();
            $fotoName = $producto->id.'_producto' . time() . '.' . $tipoFoto;
            $request->foto1->storeAs('public/productos', $fotoName);
            $producto->foto1 = $fotoName;
            $producto->save();
        }
        if($request->has('foto2')) {
            $tipoFoto = $request->foto2->getClientOriginalExtension();
            $fotoName = $producto->id.'_producto' . time() . '.' . $tipoFoto;
            $request->foto2->storeAs('public/productos', $fotoName);
            $producto->foto2= $fotoName;
            $producto->save();
        }
        if($request->has('foto3')) {
            $tipoFoto = $request->foto3->getClientOriginalExtension();
            $fotoName = $producto->id.'_producto' . time() . '.' . $tipoFoto;
            $request->foto3->storeAs('public/productos', $fotoName);
            $producto->foto3 = $fotoName;
            $producto->save();
        }
        $producto->save();
    
        return redirect('/adm/productos');
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
        return view('admin.producto')->with('producto', $producto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->nombre = $request->input('nombre');
        $producto->stock = $request->input('stock');
        $producto->precio = $request->input('precio');
        $producto->destacado = $request->input('destacado');
        $producto->descripcion = $request->input('descripcion');

        if($request->has('foto1')) {
            $tipoFoto = $request->foto1->getClientOriginalExtension();
            $fotoName = $producto->id.'_producto' . time() . '.' . $tipoFoto;
            $request->foto1->storeAs('public/productos', $fotoName);
            $producto->foto1 = $fotoName;
            $producto->save();
        }
        if($request->has('foto2')) {
            $tipoFoto = $request->foto2->getClientOriginalExtension();
            $fotoName = $producto->id.'_producto' . time() . '.' . $tipoFoto;
            $request->foto2->storeAs('public/productos', $fotoName);
            $producto->foto2= $fotoName;
            $producto->save();
        }
        if($request->has('foto3')) {
            $tipoFoto = $request->foto3->getClientOriginalExtension();
            $fotoName = $producto->id.'_producto' . time() . '.' . $tipoFoto;
            $request->foto3->storeAs('public/productos', $fotoName);
            $producto->foto3 = $fotoName;
            $producto->save();
        }

        if($request->has('descuento')){
            $producto->descuento = $request->input('descuento');
            $producto->precioDescuento = $producto->precio - ($producto->precio * $producto->descuento) / 100;
            $producto->save();
        }

        $producto->save();
        return redirect('/adm/productos/' . $producto->id);
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
        $producto = Producto::find($id);
        $producto -> delete();
        return redirect('/adm/productos');
    }
}
