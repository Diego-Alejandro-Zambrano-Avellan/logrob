<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Empleado;
use App\Models\Tarea;

class AsignarTarea extends Component
{
    public $empleado_id;
    public $tarea_id;

    public function render()
    {
        $empleados = Empleado::all();
        $tareas = Tarea::whereNull('empleado_id')->get();
        
        return view('livewire.asignar-tarea', [
            'empleados' => $empleados,
            'tareas' => $tareas,
        ]);
    }

    public function submit()
    {
        $this->validate([
            'empleado_id' => 'required|exists:empleados,id',
            'tarea_id' => 'required|exists:tareas,id',
        ]);

        $tarea = Tarea::find($this->tarea_id);
        $empleado = Empleado::find($this->empleado_id);

        // Assuming each employee has a `horas_disponibles` attribute
        if ($empleado->horas_disponibles >= $tarea->horas_asignadas) {
            $tarea->empleado_id = $this->empleado_id;
            $tarea->save();
            session()->flash('message', 'Tarea asignada correctamente.');
        } else {
            session()->flash('error', 'El tiempo invertido en la tarea supera las horas disponibles del empleado.');
        }
    }

}
