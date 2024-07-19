<?php

namespace App\Livewire;

use Livewire\Component;

class AgregarTarea extends Component
{
    public $descripcion;
    public $horas_asignadas;

    protected $rules = [
        'descripcion' => 'required|string',
        'horas_asignadas' => 'required|integer|min:1',
    ];
    public function submit()
    {
        $this->validate();

        Tarea::create([
            'descripcion' => $this->descripcion,
            'horas_asignadas' => $this->horas_asignadas,
        ]);

        $this->reset(['descripcion', 'horas_asignadas']);
    }
    public function render()
    {
        return view('livewire.agregar-tarea');
    }
}
