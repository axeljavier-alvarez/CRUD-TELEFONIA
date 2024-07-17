<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevos Planes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<div class="container">
<h1>Nuevo Plan</h1>

<div class="row">
    <div class="col-4">
    <form action="agregar_plan" method="post" class="msform">
        <div class="mb-3">
            <label for="txtId" class="form-label">Codigo ID:</label>
            <input type="text" id="txtId" name="txtId" class="form-control" autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="txtNombre" class="form-label">Nombre:</label>
            <input type="text" id="txtNombre" name="txtNombre" class="form-control" autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="txtPagoMensual" class="form-label">Pago mensual</label>
            <input type="number" id="txtPagoMensual" name="txtPagoMensual" class="form-control" autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="txtCantidadMinutos" class="form-label">Cantidad de minutos</label>
            <input type="text" id="txtCantidadMinutos" name="txtCantidadMinutos" class="form-control" autocomplete="off"> 
        </div>
        <div class="mb-3">
            <label for="txtCantidadMensajes" class="form-label">Cantidad de mensajes</label>
            <input type="text" id="txtCantidadMensajes" name="txtCantidadMensajes" class="form-control" autocomplete="off">
        </div>
        <div class="mb-3">
            <input type="submit" class="btnGuardarPlan" name="btnGuardarPlan" class="form-control" value="Guardar Plan">
        </div>
    </form>

    </div>
</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>