<div>
<form wire:submit.prevent="submit">
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

        <button type="submit">Agregar Tarea</button>
    </form>
</div>
