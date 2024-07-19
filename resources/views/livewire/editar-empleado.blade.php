<div>
@if (session()->has('message'))
        <div>{{ session('message') }}</div>
    @endif

    <h2>Editar Empleado</h2>
    <form wire:submit.prevent="updateEmpleado">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" wire:model="nombre">
            @error('nombre') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="cedula">Cédula</label>
            <input type="text" id="cedula" wire:model="cedula">
            @error('cedula') <span>{{ $message }}</span> @enderror
        </div>

        <button type="submit">Actualizar Empleado</button>
    </form>

    <h2>Editar Tareas del Empleado</h2>
    <ul>
        @foreach($empleado->tareas as $tarea)
            <li>
                <form wire:submit.prevent="updateTarea({{ $tarea->id }})">
                    <div>
                        <label for="descripcion">Descripción</label>
                        <input type="text" id="descripcion" wire:model="descripcion">
                        @error('descripcion') <span>{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="horas_asignadas">Horas Asignadas</label>
                        <input type="number" id="horas_asignadas" wire:model="horas_asignadas">
                        @error('horas_asignadas') <span>{{ $message }}</span> @enderror
                    </div>

                    <button type="submit">Actualizar Tarea</button>
                </form>
            </li>
        @endforeach
    </ul>

</div>
