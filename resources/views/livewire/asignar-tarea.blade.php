<div>
@if (session()->has('error'))
        <div>{{ session('error') }}</div>
    @endif

    <form wire:submit.prevent="submit">
        <div>
            <label for="empleado">Empleado</label>
            <select id="empleado" wire:model="empleado_id">
                <option value="">Selecciona un empleado</option>
                @foreach($empleados as $empleado)
                    <option value="{{ $empleado->id }}">{{ $empleado->nombre }}</option>
                @endforeach
            </select>
            @error('empleado_id') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="tarea">Tarea</label>
            <select id="tarea" wire:model="tarea_id">
                <option value="">Selecciona una tarea</option>
                @foreach($tareas as $tarea)
                    <option value="{{ $tarea->id }}">{{ $tarea->descripcion }}</option>
                @endforeach
            </select>
            @error('tarea_id') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="horas_trabajadas">Horas Trabajadas</label>
            <input type="number" id="horas_trabajadas" wire:model="horas_trabajadas">
            @error('horas_trabajadas') <span>{{ $message }}</span> @enderror
        </div>

        <button type="submit">Asignar Tarea</button>
    </form>
</div>
