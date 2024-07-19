<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use App\Models\Tarea;


class Tarea extends Model
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
    protected $fillable = ['descripcion', 'horas_asignadas', 'empleado_id'];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
    use HasFactory;
}
