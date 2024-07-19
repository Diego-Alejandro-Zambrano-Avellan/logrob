<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @livewireStyles

</head>

<body>

<div>
    <form>
  <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

     </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Tarea</label>
     <input type="text" class="form-control" id="exampleInputPassword1">
     </div>

     <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
<livewire:agregar-tarea />
<livewire:asignar-tarea />
<livewire:mostrar-empleados />
<livewire:editar-empleado:empleadoId="$empleado->id" />
<livewire:eliminar-tarea />
@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
