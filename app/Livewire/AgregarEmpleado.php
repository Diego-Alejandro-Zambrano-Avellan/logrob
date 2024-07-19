<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Empleado;
class AgregarEmpleado extends Component
{
    public $nombre;
    public $cedula;

    protected $rules = [
        'nombre' => 'required|string|max:255',
        'cedula' => 'required|string|unique:empleados,cedula|max:20',
    ];
    public function submit()
    {
        $this->validate();

        Empleado::create([
            'nombre' => $this->nombre,
            'cedula' => $this->cedula,
        ]);

        session()->flash('message', 'Empleado creado correctamente.');

        $this->reset(['nombre', 'cedula']);
    }
    public function render()
    {
        return view('livewire.agregar-empleado');
    }
}
