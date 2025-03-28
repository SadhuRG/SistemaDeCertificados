<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Controllers\DatosController;
use Illuminate\Http\Request;

class CertificadosPost extends Component
{

    public $datos;
    public $sort = 'id';
    
    public $direction = 'asc';
    public $search;

    public function mount()
    {
        $datosController = new DatosController();
        
        // Asignar los datos a las propiedades del componente
        $this->datos = $datosController->certificados;
    }


    public function order($sort)
    {
        if ($this->sort === $sort) {
            $this->direction = $this->direction === 'desc' ? 'asc' : 'desc';
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }

    public function render()
    {
        $datosController = new DatosController();
        $this->datos = $datosController->certificados;
        $datos = collect($this->datos);
        
        if (!empty($this->search)) {
            $datos = $datos->filter(function($item) {
                return stripos($item['codigo'], $this->search) !== false ||
                       stripos($item['titular'], $this->search) !== false ||
                       stripos($item['grupo_certificacion'], $this->search) !== false;
            });
        }
        
        // Ordenar los datos después del filtrado
        $datos = $datos->sortBy($this->sort, SORT_REGULAR, $this->direction === 'desc');
        
        $this->datos = $datos->all();

        return view('livewire.certificados-post', compact('datos'));
    }

    
}
