<div>
<h2>Filtrar Tareas por Cédula del Empleado</h2>

<div>
    <label for="cedula">Cédula del Empleado:</label>
    <input type="text" id="cedula" wire:model.debounce.300ms="cedula">
</div>

@if ($tareas->isNotEmpty())
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Empleado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tareas as $tarea)
                <tr>
                    <td>{{ $tarea->id }}</td>
                    <td>{{ $tarea->descripcion }}</td>
                    <td>{{ $tarea->empleado->nombre }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No se encontraron tareas para la cédula proporcionada.</p>
@endif

</div>
