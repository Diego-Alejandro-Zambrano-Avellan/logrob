<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Tarea;
class EliminarTarea extends Component
{
    public function delete($id)
    {
        $tarea = Tarea::find($id);

        if ($tarea) {
            $tarea->delete();
            session()->flash('message', 'Tarea eliminada correctamente.');
        } else {
            session()->flash('error', 'La tarea no existe.');
        }
    }

    public function render()
    {
        $tareas = Tarea::all();

        return view('livewire.eliminar-tarea', [
            'tareas' => $tareas,
        ]);
    }
}
