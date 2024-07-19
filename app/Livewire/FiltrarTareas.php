<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Empleado;
class FiltrarTareas extends Component
{
    public $cedula;
    public function render()
    {
        $empleado = Empleado::where('cedula', $this->cedula)->first();
        $tareas = $empleado ? $empleado->tareas : collect();

        return view('livewire.filtrar-tareas', [
            'tareas' => $tareas,
        ]);
    }
}
