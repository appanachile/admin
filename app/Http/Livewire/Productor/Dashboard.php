<?php

namespace App\Http\Livewire\Productor;

use Livewire\Component;

class Dashboard extends Component
{   public $type;

    public function mount($type){
        $this->type=$type;
    }
    public function render()
    {
        return view('livewire.productor.dashboard');
    }
}
