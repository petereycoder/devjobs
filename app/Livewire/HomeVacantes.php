<?php

namespace App\Livewire;

use App\Models\Vacante;
use Livewire\Component;

class HomeVacantes extends Component
{
    protected $listeners = ['terminoBusqueda' => 'buscar'];

    public $termino;
    public $categoria;
    public $salario;

    public function buscar($termino,$categoria,$salario){
        $this->termino = $termino;
        $this->categoria = $categoria;
        $this->salario = $salario;
    }
    
    public function render()
    {
        $vacantes = Vacante::all();

        return view('livewire.home-vacantes', [
            'vacantes' => $vacantes
        ]);
    }
}
