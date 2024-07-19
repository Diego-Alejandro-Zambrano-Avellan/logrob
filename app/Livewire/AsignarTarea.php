<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Empleado;
use App\Models\Tarea;

class AsignarTarea extends Component
{
    public $empleado_id;
    public $tarea_id;
    public $horas_trabajadas;
    protected $rules = [
        'empleado_id' => 'required|exists:empleados,id',
        'tarea_id' => 'required|exists:tareas,id',
        'horas_trabajadas' => 'required|integer|min:1',
    ];
    public function submit()
    {
        $this->validate();

        $tarea = Tarea::find($this->tarea_id);

        if ($this->horas_trabajadas > $tarea->horas_asignadas) {
            session()->flash('error', 'El tiempo invertido no puede superar las horas asignadas.');
            return;
        }

        $tarea->empleado_id = $this->empleado_id;
        $tarea->save();

        $this->reset(['empleado_id', 'tarea_id', 'horas_trabajadas']);
    }

    public function render()
    {
        return view('livewire.asignar-tarea', [
            'empleados' => Empleado::all(),
            'tareas' => Tarea::all(),
        ]);
    }
}
