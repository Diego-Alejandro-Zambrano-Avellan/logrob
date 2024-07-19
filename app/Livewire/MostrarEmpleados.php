<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Empleado;
class MostrarEmpleados extends Component
{
    public function render()
    {
       
        return view('livewire.mostrar-empleados', [
            'empleados' => Empleado::with('tareas')->get(),
        ]);
    }
}
