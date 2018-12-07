<?php

namespace App;

// En este modelo no voy a extender un modelo, NO VA A USAR ELOQUENT

class Carrito
{
    // Items va a ser la propiedad que guarde los grupos de productos
    // Si llevo 2 unidades del mismo producto eso va a ser un grupo.
    public $items=null;
    public $cantidadTotal=0;
    public $precioTotal=0;

    // Este carrito se va a re-crear cada vez que acceda a el,
    // osea cada vez que agarre uno de sus items o agregue un item.
    // Es por esto que voy a tener en cuenta las cosas que tenia el carrito viejo.
    //+ EL CONSTRUCTOR SE VA A ENCARGAR DE RECONSTRUIR EL CARRITO A PARTIR
    //+DEL CARRITO VIEJO.
    public function __construct($carritoViejo)
    {
        // primero checkeo si existe el carrito viejo.
        if ($carritoViejo) {
            $this->items=$carritoViejo->items;
            $this->cantidadTotal=$carritoViejo->cantidadTotal;
            $this->precioTotal=$carritoViejo->precioTotal;

        }
    }

    public function agregarItem($item, $id)
    {
        // item guardado representa el "grupo" del que hable antes
        // item guardado es un array que establece que la cantidad inicial del item
        // es 0, el precio es es el precio del producto que recibe u el nombre
        // es el nombre del producto que recibe
        $itemGuardado=['cantidad'=>0,'precio'=>$item->precio,'item'=>$item];
        // Checkeo si el carrito ya tiene items o si es nuevo (esta vacío).
        if ($this->items) {
            // si existen items, quiero checkear si ya tengo el item que estoy
            // tratando de agregar.
            if (array_key_exists($id, $this->items)) {
                // Si existe, seteo el item guardado
                $itemGuardado=$this->items[$id];
            }

        }
        $itemGuardado['cantidad']++;
        $itemGuardado['precio']=$item->precio*$itemGuardado['cantidad'];
        $this->items[$id]=$itemGuardado;
        $this->cantidadTotal++;
        $this->precioTotal+=$item->precio;
    }

}
