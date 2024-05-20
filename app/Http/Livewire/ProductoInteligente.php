<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Producto;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class ProductoInteligente extends Component
{ use WithPagination;

    public $search;
    public $busqueda;
    public $product, $tienda;

    public function mount($producto){
        if ($producto) {
            $this->product=Producto::find($producto);
           
        }else{
            $this->product=null;
           
        }
       
    }
    public function render()
    {  $productos = Producto::where(function($query) {
                $query->where('name', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('sku', 'LIKE', '%' . $this->search . '%');
            })
            ->orderByRaw("CASE 
                                WHEN personalizable = 'no' THEN 1 
                                WHEN personalizable = 'sí' THEN 2 
                                ELSE 3 
                            END")
            ->orderByDesc('stock') // Orden descendente por la columna 'stock'
            ->paginate(100);
        
      
        $category_products=Categoria::where('id','>',0)->pluck('name','id');

        return view('livewire.producto-inteligente',compact('productos','category_products'));
    }

    public function set_product($producto_id){
        $this->product=Producto::find($producto_id);
    }

    public function set_personalizadooff(Producto $producto){
        $producto->personalizable='no';
        $producto->save();
    }
    public function set_personalizadoon(Producto $producto){
        $producto->personalizable='si';
        $producto->save();
    }
    public function findProduct()
    {   if ($this->search) {
            $this->product = Producto::where('sku', $this->search)->first();
        }
            
        if($this->product){
            
            
            $hoy = Carbon::today();

            // Buscar un registro de stock creado hoy para este producto
            $stockHoy = Stock::where('stockable_id', $this->product->id)
                             ->where('created_at', '>=', $hoy)
                             ->first();
            
            if ($stockHoy) {
                // Si se encontró un registro de stock creado hoy, aumentar la cantidad en 1
                $stockHoy->cantidad += 1;
                $stockHoy->save();
            } else {
                // Si no se encontró un registro de stock creado hoy, crear uno nuevo
                Stock::create([
                    'cantidad' => 1,
                    'stockable_id' => $this->product->id,
                    'detalle' => 'Ingreso',
                    'stockable_type' => 'App\Models\Producto',
                ]);
            }
            $ingresos=0;
            $mermas=0;
            foreach($this->product->stocks as $stock){
                if($stock->detalle=='Ingreso'){
                    $ingresos+=$stock->cantidad;
                }
                if($stock->detalle=='Merma'){
                    $mermas+=$stock->cantidad;
                }
            }
            $ordenescount=0;
            foreach($this->product->ordenes as $orden){
                if ($orden->pedido->status>3) {
                    if ($orden->cantidad) {
                        $ordenescount+=$orden->cantidad;
                    } else {
                        $ordenescount+=1;
                    }
                }
            }
    
            $this->product->update(['stock'=>($ingresos-$ordenescount-$mermas)]);

            return redirect()->route('tiendas.productos.edit',$this->product)->with('info','Ingreso Exitoso! Stock Actual: '.($ingresos-$ordenescount-$mermas));
            $this->resetSearch(); // Llama a la función para limpiar el campo de búsqueda
        }else{
            if($this->product){
                if ($this->product->tienda_id) {
                    $tienda=Tienda::find($this->product->tienda_id);
                } else {
                    $tienda=Tienda::find(4);
                }
                
                
            }else{
                $tienda=Tienda::find(4);
            }
            
            return redirect()->route('tiendas.productos.manual',$tienda)->with('sku',$this->search);;
        }
        
        
    }

    public function resetSearch()
    {   
        $this->reset('search');
    }
}
