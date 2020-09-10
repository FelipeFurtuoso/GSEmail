<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LayoutGazin extends Component
{
    public $empresa = "";
    public $listeners = ['staffDirectoryRefresh' => 'updateSelect'];
    
    public function mount($empresa)
    {
        $this->empresa = $empresa;
    }

    public function updateSelect($empresa)
    {
        $this->empresa = $empresa;
    }
    

    public function render()
    {
        
        return view('livewire.layout-gazin');
    }
}
