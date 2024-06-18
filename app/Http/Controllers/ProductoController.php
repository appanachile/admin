<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Familia;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('productos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $familias =Familia::where('id','>',0)->pluck('name','id');
        
        $fams=Familia::all();
        $category_products2 =Categoria::where('familia_id',$fams->first()->id)->pluck('name','id');
        $category_products=Categoria::all();
        return view('productos.create',compact('category_products2','category_products','familias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'precio'=>'required'
        ]); 
        

        $producto = Producto::create([  'name'=>$request->name,
                                        'precio'=>$request->precio,
                                        'sku'=>$request->sku,
                                        'costo'=>$request->costo,
                                        'categoria_id'=>$request->categoria_id,
                                        'personalizable'=>$request->personalizable]);

        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {   $familias = Familia::all();
        $category_products = Categoria::all();
        return view('productos.edit',compact('producto','category_products','familias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $producto->update($request->all());

        return redirect()->back()->with('info','Producto actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($producto)
    {   $producto = Producto::find($producto);
       
            $producto->delete();
            return redirect()->route('productos.index')->with('info','El productó se elimino con éxito.');
       
    }
}
