<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lineas Teléfonicas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<div class="container">
<h1>Lineas Teléfonicas</h1>

<div class="row">
    <div class="col-4">
    <form action="agregar_lineas" method="post" class="msform">
        <div class="mb-3">
            <label for="txtId" class="form-label">Codigo ID:</label>
            <input type="number" id="txtId" name="txtId" class="form-control" autocomplete="off" placeholder="Ingrese el ID">
        </div>
        <div class="mb-3">
            <label for="txtApellido" class="form-label">Apellido</label>
            <input type="text" id="txtApellido" name="txtApellido" class="form-control" autocomplete="off" placeholder="Ingrese sus apellidos">
        </div>

        <div class="mb-3">
            <label for="txtNombre" class="form-label">Nombre:</label>
            <input type="text" id="txtNombre" name="txtNombre" class="form-control" autocomplete="off" placeholder="Ingrese sus nombres">
        </div>
        
        <div class="mb-3">
            <label for="txtCorreoElectronico" class="form-label">Correo Electronico:</label>
            <input type="text" id="txtCorreoElectronico" name="txtCorreoElectronico" class="form-control" autocomplete="off" placeholder="Ingrese su correo electronico"> 
        </div>
        <div class="mb-3">
            <label for="txtCalle" class="form-label">Calle o avenida:</label>
            <input type="text" id="txtCalle" name="txtCalle" class="form-control" autocomplete="off" placeholder="Ingrese la calle">
        </div>
        <div class="mb-3">
            <label for="txtNumeroCasa" class="form-label">Número de casa:</label>
            <input type="text" id="txtNumeroCasa" name="txtNumeroCasa" class="form-control" autocomplete="off" placeholder="Ingrese el número de casa">
        </div>

        <div class="mb-3">
            <label for="txtZona" class="form-label">Zona:</label>
            <input type="number" id="txtZona" name="txtZona" class="form-control" autocomplete="off" placeholder="Ingrese la zona">
        </div>

        <div class="mb-3">
            <input type="submit" class="btnGuardarCliente" name="btnGuardarCliente" class="form-control" value="Guardar Cliente">
        </div>
    </form>

    </div>
</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>