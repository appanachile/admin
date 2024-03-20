<?php

namespace App\Http\Livewire\Cliente;

use App\Models\Empresa;
use Livewire\Component;

class EmpresaCreate extends Component
{   public $dato,$porc1;

    public $name;
    public $nick;
    public $rut;
    public $giro;
    public $direccion1;
    public $direccion2;

    protected $rules = [
        'name' => 'required|string',
        'nick' => 'required|string',
        'rut' => 'required|string',
        'giro' => 'required|string',
        'direccion1' => 'required|string',
        'direccion2' => 'nullable|string',
    ];

    public function mount(){
        $empresas=Empresa::where('user_id',auth()->user()->id)->get();
        if ($empresas->count()>0) {
            $this->porc1=100;
        } else {
            $this->porc1=0;
        }
    }

    public function render()
    {   
        return view('livewire.cliente.empresa-create');
    }

    public function store()
    {
        $this->validate();

        // Guardar los datos en la base de datos
        Empresa::create([
            'user_id'=>auth()->user()->id,
            'name' => $this->name,
            'nick' => $this->nick,
            'rut' => $this->rut,
            'giro' => $this->giro,
            'direccion1' => $this->direccion1,
            'direccion2' => $this->direccion2,
        ]);
        
        $this->porc1=100;

        // Limpiar los campos después de guardar
        $this->reset(['name', 'nick', 'rut', 'giro', 'direccion1', 'direccion2']);

        // Puedes agregar aquí cualquier lógica adicional, como redireccionar a otra página
    }

}
