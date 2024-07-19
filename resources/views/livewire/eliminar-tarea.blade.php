<div>
@if (session()->has('message'))
        <div>{{ session('message') }}</div>
    @endif

    @if (session()->has('error'))
        <div>{{ session('error') }}</div>
    @endif

    <h2>Eliminar Tareas</h2>
    <ul>
        @foreach($tareas as $tarea)
            <li>
                {{ $tarea->descripcion }}
                <button wire:click="delete({{ $tarea->id }})">Eliminar</button>
            </li>
        @endforeach
    </ul>
</div>
