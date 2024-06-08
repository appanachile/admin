<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Familia;
use Livewire\Component;

class CategoriaCreate extends Component
{   public $idcat, $idfam, $name,$fname, $familiaid, $status='active', $fstatus='active', $wname, $wstatus, $gname, $gstatus, $wfamilia,$selectedfam;
    public function mount(){
        $this->familiaid=Familia::where('id','>',0)->first();
    }

    public function render()
    {   $categorias=Categoria::all();
        $familias=Familia::all();
        return view('livewire.categoria-create',compact('categorias','familias'));
    }

    public function selectedfamupdate($id){
        $this->familiaid=$id;
    }

    public function create(){
        $this->validate([
            'name'=>'required'
        ]);
        Categoria::create(['name'=>$this->name,
                            'status'=>$this->status,
                            'familia_id'=>$this->selectedfam]);
        $this->status='active';
        $this->reset(['name']);
    }

    public function fcreate(){
        $this->validate([
            'fname'=>'required'
        ]);
        Familia::create(['name'=>$this->fname,
                            'status'=>$this->fstatus]);
                            
        $this->familiaid=Familia::where('id','>',0)->first();
        $this->fstatus='active';
        $this->reset(['fname','fstatus']);
    }

    public function set_idcat($id){
        $this->idcat=$id;
        $cat=Categoria::find($id);
        $this->wname=$cat->name;
        $this->wstatus=$cat->status;
        $this->wfamilia=$cat->familia_id;
    }

    public function set_idfam($id){
        $this->idfam=$id;
        $cat=Familia::find($id);
        $this->gname=$cat->name;
        $this->gstatus=$cat->status;
      
    }

    public function save(){
        $cat=Categoria::find($this->idcat);
        $cat->update(['name'=>$this->wname,
                        'status'=>$this->wstatus,
                        'familia_id'=>$this->wfamilia]);
        $this->reset(['idcat','wname','wstatus']);
    }

    public function fsave(){
        $cat=Familia::find($this->idfam);
        $cat->update(['name'=>$this->gname,
                        'status'=>$this->gstatus]);
        $this->reset(['idfam','gname','gstatus']);
    }


}
