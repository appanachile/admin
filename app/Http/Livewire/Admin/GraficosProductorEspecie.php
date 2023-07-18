<?php

namespace App\Http\Livewire\Admin;

use App\Models\Especie;
use App\Models\Proceso;
use App\Models\Recepcion;
use App\Models\Variedad;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class GraficosProductorEspecie extends Component
{    use WithPagination;

    public $search, $espec, $ctd=25, $especieid, $especiename, $varie, $variedadid;

    public function mount(Especie $especie){
        $this->espec=$especie;
        $this->titulo='Gráfico por Variedades de '.$especie->name;
        $this->titulo_circular='Gráfico Circular de '.$especie->name;
    }

    public function render()
    {    $now = Carbon::now();
        if($this->espec){
            if($this->varie){
                $procesos=Proceso::where('agricola',auth()->user()->name)
                            ->where('variedad', $this->varie->name)
                         ->latest('n_proceso')->paginate($this->ctd);
                $procesosall=Proceso::where('agricola',auth()->user()->name)
                            ->where('variedad','LIKE', $this->search)
                         ->latest('n_proceso')->get();
            }else{
                    $procesos=Proceso::where('agricola',auth()->user()->name)
                        ->where('especie',$this->espec->name)
                         ->latest('n_proceso')->paginate($this->ctd);
                    $procesosall=Proceso::where('agricola',auth()->user()->name)
                        ->where('especie', $this->espec->name)
                         ->latest('n_proceso')->get();
            }

        }else{
            $procesos=Proceso::where('agricola',auth()->user()->name)
            ->latest('n_proceso')->paginate($this->ctd);
            $procesosall=Proceso::where('agricola',auth()->user()->name)
            ->latest('n_proceso')->get();
        }
        
       
        $especies=auth()->user()->especies_comercializas()->get();
        $variedades=auth()->user()->variedades_comercializas()->get();

        $recepcions=Recepcion::where('n_emisor',auth()->user()->name)
        ->where('n_especie',$this->espec->name)->get();
        return view('livewire.admin.graficos-productor-especie',compact('now','recepcions','procesosall','procesos','variedades','especies'));
    }
    
    public function set_especie($id){
        $this->especieid=$id;
        $this->variedadid=NULL;
        $this->varie =NULL;
        $this->espec=Especie::find($this->especieid);
        
        
    }

    public function set_varie($id){
        $this->variedadid=$id;
        $this->varie=Variedad::find($this->variedadid);
        
    }

    public function limpiar_page(){
        $this->resetPage();
    }

    public function espec_clean(){
        $this->especieid=NULL;
        $this->espec=NULL;
        $this->search=NULL;

    }
    public function varie_clean(){
        $this->variedadid=NULL;
        $this->varie =NULL;
        $this->search=$this->espec->name;

    }
}
