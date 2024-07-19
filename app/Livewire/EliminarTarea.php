<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Tarea;
class EliminarTarea extends Component
{
    public $tarea_id;
    public function delete()
    {
        Tarea::find($this->tarea_id)->delete();
        session()->flash('message', 'Tarea eliminada correctamente.');
    }

    public function render()
    {
        return view('livewire.eliminar-tarea', [
            'tareas' => Tarea::all(),
        ]);
    }
}
