<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Empleado;
use App\Models\Tarea;

class EditarEmpleado extends Component
{
    public $empleado_id;
    public $nombre;
    public $cedula;

    public $tarea_id;
    public $descripcion;
    public $horas_asignadas;

    protected $rules = [
        'nombre' => 'required|string',
        'cedula' => 'required|string|unique:empleados,cedula',
        'descripcion' => 'required|string',
        'horas_asignadas' => 'required|integer|min:1',
    ];

    public function mount($empleadoId)
    {
        $empleado = Empleado::find($empleadoId);
        $this->empleado_id = $empleado->id;
        $this->nombre = $empleado->nombre;
        $this->cedula = $empleado->cedula;
    }

    public function updateEmpleado()
    {
        $this->validate([
            'nombre' => 'required|string',
            'cedula' => 'required|string|unique:empleados,cedula,' . $this->empleado_id,
        ]);

        $empleado = Empleado::find($this->empleado_id);
        $empleado->update([
            'nombre' => $this->nombre,
            'cedula' => $this->cedula,
        ]);

        session()->flash('message', 'Empleado actualizado correctamente.');
    }

    public function updateTarea($tareaId)
    {
        $this->validate();

        $tarea = Tarea::find($tareaId);
        $tarea->update([
            'descripcion' => $this->descripcion,
            'horas_asignadas' => $this->horas_asignadas,
        ]);

        session()->flash('message', 'Tarea actualizada correctamente.');
    }

    public function render()
    {
        return view('livewire.editar-empleado', [
            'empleado' => Empleado::find($this->empleado_id),
        ]);
    }
}
