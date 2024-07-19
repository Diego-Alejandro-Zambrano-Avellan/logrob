<div>
<h2>Empleados y sus Tareas</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cédula</th>
                <th>Tareas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->nombre }}</td>
                    <td>{{ $empleado->cedula }}</td>
                    <td>
                        <ul>
                            @foreach($empleado->tareas as $tarea)
                                <li>{{ $tarea->descripcion }} ({{ $tarea->horas_asignadas }} horas)</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
