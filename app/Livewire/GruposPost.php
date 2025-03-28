<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Controllers\DatosController;

class GruposPost extends Component
{
    public $datosGrupos;

    public function render()
    {
        $data = new DatosController();
        $this->datosGrupos = $data->grupos_certificacion;
        //dd($this->datosGrupos);
        
        return view('livewire.grupos-post');
    }
}
