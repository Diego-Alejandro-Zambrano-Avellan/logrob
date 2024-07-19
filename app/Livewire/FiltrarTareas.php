<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Empleado;
use App\Models\Tarea;
class FiltrarTareas extends Component
{
    public $cedula;
    public $tareas;

    public function mount()
    {
        // Inicializamos con una colección vacía
        $this->tareas = collect();
    }

    public function updatedCedula($value)
    {
        // Obtenemos las tareas filtradas
        $this->tareas = Tarea::whereHas('empleado', function($query) use ($value) {
            $query->where('cedula', $value);
        })->get();
    }

    public function render()
    {
        return view('livewire.filtrar-tareas');
    }
}
