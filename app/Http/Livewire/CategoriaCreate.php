<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use Livewire\Component;

class CategoriaCreate extends Component
{   public $idcat, $name, $status='active', $wname, $wstatus;

    public function render()
    {   $categorias=Categoria::all();
        return view('livewire.categoria-create',compact('categorias'));
    }

    public function create(){
        $this->validate([
            'name'=>'required'
        ]);
        Categoria::create(['name'=>$this->name,
                            'status'=>$this->status]);
        $this->status='active';
        $this->reset(['name']);
    }

    public function set_idcat($id){
        $this->idcat=$id;
        $cat=Categoria::find($id);
        $this->wname=$cat->name;
        $this->wstatus=$cat->status;
    }

    public function save($id){
        $cat=Categoria::find($this->idcat);
        $cat->update(['name'=>$this->wname,
                        'status'=>$this->wstatus]);
        $this->reset(['idcat','wname','wcat']);
    }


}
