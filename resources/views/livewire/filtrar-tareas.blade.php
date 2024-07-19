<div>
<h2>Filtrar Tareas por Número de Cédula</h2>
    <input type="text" wire:model="cedula" placeholder="Ingrese número de cédula">

    @if($tareas->isNotEmpty())
        <ul>
            @foreach($tareas as $tarea)
                <li>{{ $tarea->descripcion }} ({{ $tarea->horas_asignadas }} horas)</li>
            @endforeach
        </ul>
    @else
        <p>No se encontraron tareas para esta cédula.</p>
    @endif
</div>
