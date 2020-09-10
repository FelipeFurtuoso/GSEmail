<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SignatureEmail extends Component
{

    public $name = "";
    public $office = "";
    public $show = false;
    public $empresa = "";
    
    public function info_Signature()    
    {
        if(!empty($this->name))
        {
            $this->name;
            $this->show = true;
        }

        if(!empty($this->office))
        {
            $this->office;
        }
        
    }
  

    public function select_layout()
    {
        $this->empresa;
        $this->emit('staffDirectoryRefresh', $this->empresa);
        
    }


    public function render()
    {
        return view('livewire.signature-email');
    }
}
