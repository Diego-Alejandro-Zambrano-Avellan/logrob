<div>
@if (session()->has('message'))
        <div>{{ session('message') }}</div>
    @endif

    <h2>Agregar Empleado</h2>
    <form wire:submit.prevent="submit">
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

        <button type="submit">Agregar Empleado</button>
    </form>
</div>
